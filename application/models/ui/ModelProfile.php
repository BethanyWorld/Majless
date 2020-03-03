<?php
class ModelProfile extends CI_Model{
    public function candidateUpdatePersonalInfo($inputs)
    {
        $UserArray = array(
            'CandidateFirstName' => $inputs['inputCandidateFirstName'],
            'CandidateLastName' => $inputs['inputCandidateLastName'],
            'CandidateNationalCode' => $inputs['inputCandidateNationalCode'],
            'CandidatePhone' => $inputs['inputCandidatePhone'],
            'CandidateStateId' => $inputs['inputCandidateConstituencyStateId'],
            'CandidateCityId' => $inputs['inputCandidateConstituencyCityId'],
            'CandidateConstituencyStateId' => $inputs['inputCandidateConstituencyStateId'],
            'CandidateConstituencyCityId' => $inputs['inputCandidateConstituencyCityId'],
            'CandidateElectionId' => $inputs['inputCandidateElectionId'],
            'CandidateFatherName' => $inputs['inputCandidateFatherName'],
            'CandidateBirthDate' => $inputs['inputCandidateBirthDate'],
            'CandidateGender' => $inputs['inputCandidateGender'],
            'CandidateMaritalStatus' => $inputs['inputCandidateMaritalStatus'],
            'CandidateReligion' => $inputs['inputCandidateReligion'],
            'CandidateBornStateId' => $inputs['inputCandidateBornStateId'],
            'CandidateBornCityId' => $inputs['inputCandidateBornCityId'],
            'CandidateFatherBornStateId' => $inputs['inputCandidateFatherBornStateId'],
            'CandidateFatherBornCityId' => $inputs['inputCandidateFatherBornCityId'],
            'CandidateMotherBornStateId' => $inputs['inputCandidateMotherBornStateId'],
            'CandidateMotherBornCityId' => $inputs['inputCandidateMotherBornCityId'],
            'CandidateAddressStateId' => $inputs['inputCandidateAddressStateId'],
            'CandidateAddressCityId' => $inputs['inputCandidateAddressCityId'],
            'CandidateAddressPart' => $inputs['inputCandidateAddressPart'],
            'CandidateAddressCityPart' => $inputs['inputCandidateAddressCityPart'],
            'CandidateAddressVillage' => $inputs['inputCandidateAddressVillage'],
            'CandidateAddressVillagePart' => $inputs['inputCandidateAddressVillagePart'],
            'CandidateAddress' => $inputs['inputCandidateAddress'],
            'CandidateLandLinePhone' => $inputs['inputCandidateLandLinePhone'],
            'CandidateProfileImage' => $inputs['inputCandidateProfileImage']
        );
        $this->db->trans_start();
        $this->db->where('CandidateId', $inputs['inputCandidateId']);
        $this->db->update('candidate', $UserArray);

        $this->db->delete('candidate_roles', array(
            'CandidateId' => $inputs['inputCandidateId']
        ));

        foreach ($inputs['inputCandidateRoles'] as $input) {
            $arrayCandidate = array(
                'CandidateId' => $inputs['inputCandidateId'],
                'Role' => $input
            );
            $this->db->insert('candidate_roles', $arrayCandidate);
        }
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "بروزرسانی پروفایل با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "بروزرسانی پروفایل با موفقیت انجام شد",
                'success' => true
            );

            $this->db->select('*');
            $this->db->from('candidate');
            $this->db->where(array(
                'CandidateId' => $inputs['inputCandidateId'],
            ));
            $result = $this->db->get()->result_array();
            $this->db->select('*');
            $this->db->from('candidate_roles');
            $this->db->where('CandidateId', $result[0]['CandidateId']);
            $roles = $this->db->get()->result_array();
            $result[0]['roles'] = $roles;
            $this->session->set_userdata('UserLoginInfo', $result[0]);
            return $arr;
        }


    }
    public function getCandidateAcademicBackgroundByCandidateId($id)
    {
        return
            $this->db->select('*')
                ->from('candidate_academic_background')
                ->join('university' , 'university.UniversityId = candidate_academic_background.CandidateUniversityName')
                ->where('candidate_academic_background.CandidateId', $id)
                ->get()
                ->result_array();
    }
    public function candidateUpdateAcademicBackground($inputs){
        /*var_dump($inputs['inputCandidateAcademicBackground']);
        die();*/
        $this->db->trans_start();
        $this->db->delete('candidate_academic_background', array(
            'CandidateId' => $inputs['inputCandidateId']
        ));
        if (isset($inputs['inputCandidateAcademicBackground'])) {
            for ($i = 0; $i < count($inputs['inputCandidateAcademicBackground']);) {
                $UserArray = array(
                    'CandidateId' => $inputs['inputCandidateId'],
                    'CandidateGrade' => $inputs['inputCandidateAcademicBackground'][$i]['value'],
                    'CandidateUniversityLevelType' => $inputs['inputCandidateAcademicBackground'][$i + 1]['value'],
                    'CandidateSchoolMajor' => $inputs['inputCandidateAcademicBackground'][$i + 2]['value'],
                    'CandidateUniversityName' => $inputs['inputCandidateAcademicBackground'][$i + 3]['value'],
                    'CandidateSchoolName' => $inputs['inputCandidateAcademicBackground'][$i + 4]['value'],
                    'CandidateUniversityOtherName' => $inputs['inputCandidateAcademicBackground'][$i + 5]['value'],
                    'CandidateDepartment' => $inputs['inputCandidateAcademicBackground'][$i + 6]['value'],
                    'CandidateMajor' => $inputs['inputCandidateAcademicBackground'][$i + 7]['value'],
                    'CandidateStartAcademicBackgroundMonth' => $inputs['inputCandidateAcademicBackground'][$i + 8]['value'],
                    'CandidateStartAcademicBackgroundYear' => $inputs['inputCandidateAcademicBackground'][$i + 9]['value'],
                    'CandidateEndAcademicBackgroundMonth' => $inputs['inputCandidateAcademicBackground'][$i + 10]['value'],
                    'CandidateEndAcademicBackgroundYear' => $inputs['inputCandidateAcademicBackground'][$i + 11]['value'],
                    'CandidateStudyStatus' => $inputs['inputCandidateAcademicBackground'][$i + 12]['value']
                );
                $this->db->insert('candidate_academic_background', $UserArray);
                if($inputs['inputCandidateAcademicBackground'][$i + 1]['value'] != 'Others'){
                    if(isset($inputs['inputCandidateAcademicBackground'][$i + 5]['value']) && $inputs['inputCandidateAcademicBackground'][$i + 5]['value'] != ""){
                        $universityOtherName = $inputs['inputCandidateAcademicBackground'][$i + 5]['value'];
                        $query = $this->db->select('*')->from('university')->where('UniversityTitle', $universityOtherName)->get()->result_array();
                        if($query){
                            /* university name Is repetitive */
                        }
                        else{
                            $UserArray = array(
                                'UniversityTitle' => $inputs['inputCandidateAcademicBackground'][$i + 5]['value'],
                                'IsActive' => 0,
                                'CandidateId' => $inputs['inputCandidateId'],
                                'CreateDateTime' => jDateTime::date("Y/m/d H:i:s", false, false)
                            );
                            $this->db->insert('university', $UserArray);
                        }
                    }
                }
                $i = $i + 13;
            }
        }
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "بروزرسانی سوابق تحصیلی با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "بروزرسانی سوابق تحصیلی با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function getCandidateMilitaryStatusByCandidateId($id)
    {
        return
            $this->db->select('*')
                ->from('candidate_military')
                ->where('CandidateId', $id)
                ->get()
                ->result_array();
    }
    public function candidateUpdateMilitaryStatus($inputs)
    {
        $this->db->trans_start();
        $this->db->delete('candidate_military', array(
            'CandidateId' => $inputs['inputCandidateId']
        ));
        if (isset($inputs['inputCandidateMilitary'])) {
            for ($i = 0; $i < count($inputs['inputCandidateMilitary']);) {
                $UserArray = array(
                    'CandidateId' => $inputs['inputCandidateId'],
                    'CandidateMilitaryStatus' => $inputs['inputCandidateMilitary'][$i]['value'],
                    'CandidateExemptTitle' => $inputs['inputCandidateMilitary'][$i + 1]['value'],
                    'CandidateExemptDescription' => $inputs['inputCandidateMilitary'][$i + 2]['value'],
                    'CandidateMilitaryEndMonth' => $inputs['inputCandidateMilitary'][$i + 3]['value'],
                    'CandidateMilitaryEndYear' => $inputs['inputCandidateMilitary'][$i + 4]['value'],
                    'CandidateMilitaryEndArea' => $inputs['inputCandidateMilitary'][$i + 5]['value'],
                    'CandidateMilitaryEndAreaTitle' => $inputs['inputCandidateMilitary'][$i + 6]['value'],
                );
                $this->db->insert('candidate_military', $UserArray);
                $i += 7;
            }
        }
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "بروزرسانی سوابق نظام وظیفه با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "بروزرسانی سوابق نظام وظیفه با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function getCandidateJobHistoryByCandidateId($id)
    {
        return
            $this->db->select('*')
                ->from('candidate_job_hostory')
                ->where('CandidateId', $id)
                ->get()
                ->result_array();
    }
    public function candidateUpdateJobHistory($inputs)
    {
        $this->db->trans_start();
        $this->db->delete('candidate_job_hostory', array(
            'CandidateId' => $inputs['inputCandidateId']
        ));
        if (isset($inputs['inputCandidateJobHistory'])) {
            for ($i = 0; $i < count($inputs['inputCandidateJobHistory']);) {
                $UserArray = array(
                    'CandidateId' => $inputs['inputCandidateId'],
                    'CandidateJobTitle' => $inputs['inputCandidateJobHistory'][$i]['value'],
                    'CandidateJobCompanyTitle' => $inputs['inputCandidateJobHistory'][$i + 1]['value'],
                    'CandidateStartJobMonth' => $inputs['inputCandidateJobHistory'][$i + 2]['value'],
                    'CandidateStartJobYear' => $inputs['inputCandidateJobHistory'][$i + 3]['value'],
                    'CandidateEndJobMonth' => $inputs['inputCandidateJobHistory'][$i + 4]['value'],
                    'CandidateEndJobYear' => $inputs['inputCandidateJobHistory'][$i + 5]['value'],
                );
                $this->db->insert('candidate_job_hostory', $UserArray);
                $i = $i + 6;
            }
        }
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "بروزرسانی سوابق شغلی با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "بروزرسانی سوابق شغلی با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function getCandidateSocialCulturalBackgroundByCandidateId($id)
    {
        return
            $this->db->select('*')
                ->from('candidate_social_record')
                ->where('CandidateId', $id)
                ->get()
                ->result_array();
    }
    public function candidateUpdateSocialCulturalBackground($inputs)
    {
        $this->db->trans_start();
        $this->db->delete('candidate_social_record', array(
            'CandidateId' => $inputs['inputCandidateId']
        ));
        if (isset($inputs['inputSocialCulturalBackground'])) {
            for ($i = 0; $i < count($inputs['inputSocialCulturalBackground']);) {
                $UserArray = array(
                    'CandidateId' => $inputs['inputCandidateId'],
                    'CandidateActivityFieldType' => $inputs['inputSocialCulturalBackground'][$i]['value'],
                    'CandidateActivityFieldOtherTypeTitle' => $inputs['inputSocialCulturalBackground'][$i + 1]['value'],
                    'CandidateOrganizationName' => $inputs['inputSocialCulturalBackground'][$i + 2]['value'],
                    'CandidateMemberShipType' => $inputs['inputSocialCulturalBackground'][$i + 3]['value'],
                    'CandidateMemberShipDescription' => $inputs['inputSocialCulturalBackground'][$i + 4]['value'],
                    'CandidateBasijType' => $inputs['inputSocialCulturalBackground'][$i + 5]['value'],
                    'CandidateBasijTypeOtherTitle' => $inputs['inputSocialCulturalBackground'][$i + 6]['value'],
                    'CandidateMobilMembershipType' => $inputs['inputSocialCulturalBackground'][$i + 7]['value'],
                    'CandidateBasijAreaTitle' => $inputs['inputSocialCulturalBackground'][$i + 8]['value'],
                    'CandidateActivityStartMonth' => $inputs['inputSocialCulturalBackground'][$i + 9]['value'],
                    'CandidateActivityStartYear' => $inputs['inputSocialCulturalBackground'][$i + 10]['value'],
                    'CandidateActivityEndMonth' => $inputs['inputSocialCulturalBackground'][$i + 11]['value'],
                    'CandidateActivityEndYear' => $inputs['inputSocialCulturalBackground'][$i + 12]['value'],
                );
                $this->db->insert('candidate_social_record', $UserArray);
                $i = $i + 13;
            }
        }
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "بروزرسانی سوابق فرهنگی اجتماعی با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "بروزرسانی سوابق فرهنگی اجتماعی با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function getCandidateBooksByCandidateId($id)
    {
        return
            $this->db->select('*')
                ->from('candidate_books')
                ->where('CandidateId', $id)
                ->get()
                ->result_array();
    }
    public function candidateUpdateBooks($inputs)
    {
        $this->db->trans_start();
        $this->db->delete('candidate_books', array(
            'CandidateId' => $inputs['inputCandidateId']
        ));
        if (isset($inputs['inputCandidateBooks'])) {
            for ($i = 0; $i < count($inputs['inputCandidateBooks']);) {
                $UserArray = array(
                    'CandidateId' => $inputs['inputCandidateId'],
                    'CandidateBookTitle' => $inputs['inputCandidateBooks'][$i]['value'],
                    'CandidateBookPublisher' => $inputs['inputCandidateBooks'][$i + 1]['value'],
                    'CandidateBookPublishMonth' => $inputs['inputCandidateBooks'][$i + 2]['value'],
                    'CandidateBookPublishYear' => $inputs['inputCandidateBooks'][$i + 3]['value']
                );
                $this->db->insert('candidate_books', $UserArray);
                $i = $i + 4;
            }
        }
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "بروزرسانی کتب  با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "بروزرسانی کتب  با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function getCandidateResearchByCandidateId($id)
    {
        return
            $this->db->select('*')
                ->from('candidate_research')
                ->where('CandidateId', $id)
                ->get()
                ->result_array();
    }
    public function candidateUpdateResearch($inputs)
    {
        $this->db->trans_start();
        $this->db->delete('candidate_research', array(
            'CandidateId' => $inputs['inputCandidateId']
        ));
        if (isset($inputs['inputCandidateResearch'])) {
            for ($i = 0; $i < count($inputs['inputCandidateResearch']);) {
                $UserArray = array(
                    'CandidateId' => $inputs['inputCandidateId'],
                    'CandidateResearchTitle' => $inputs['inputCandidateResearch'][$i]['value'],
                    'CandidateResearchEmployer' => $inputs['inputCandidateResearch'][$i + 1]['value'],
                    'CandidateResearchWorker' => $inputs['inputCandidateResearch'][$i + 2]['value'],
                    'CandidateResearchResponsibility' => $inputs['inputCandidateResearch'][$i + 3]['value'],
                    'CandidateResearchMonth' => $inputs['inputCandidateResearch'][$i + 4]['value'],
                    'CandidateResearchYear' => $inputs['inputCandidateResearch'][$i + 5]['value'],
                );
                $this->db->insert('candidate_research', $UserArray);
                $i = $i + 6;
            }
        }
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "بروزرسانی طرح پژوهشی  با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "بروزرسانی طرح پژوهشی با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function getCandidateArticlesByCandidateId($id)
    {
        return
            $this->db->select('*')
                ->from('candidate_articles')
                ->where('CandidateId', $id)
                ->get()
                ->result_array();
    }
    public function candidateUpdateArticles($inputs)
    {
        $this->db->trans_start();
        $this->db->delete('candidate_articles', array(
            'CandidateId' => $inputs['inputCandidateId']
        ));
        if (isset($inputs['inputCandidateArticles'])) {
            for ($i = 0; $i < count($inputs['inputCandidateArticles']);) {
                $UserArray = array(
                    'CandidateId' => $inputs['inputCandidateId'],
                    'CandidateArticleTitle' => $inputs['inputCandidateArticles'][$i]['value'],
                    'CandidateArticleLevel' => $inputs['inputCandidateArticles'][$i + 1]['value'],
                    'CandidateArticleMagazineTitle' => $inputs['inputCandidateArticles'][$i + 2]['value'],
                    'CandidateArticlePublishMonth' => $inputs['inputCandidateArticles'][$i + 3]['value'],
                    'CandidateArticlePublishYear' => $inputs['inputCandidateArticles'][$i + 4]['value']
                );
                $this->db->insert('candidate_articles', $UserArray);
                $i = $i + 5;
            }
        }
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "بروزرسانی مقالات ها با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "بروزرسانی مقالات ها با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function getCandidateTranslationByCandidateId($id)
    {
        return
            $this->db->select('*')
                ->from('candidate_translation')
                ->where('CandidateId', $id)
                ->get()
                ->result_array();
    }
    public function candidateUpdateTranslation($inputs)
    {
        $this->db->trans_start();
        $this->db->delete('candidate_translation', array(
            'CandidateId' => $inputs['inputCandidateId']
        ));
        if (isset($inputs['inputCandidateTranslation'])) {
            for ($i = 0; $i < count($inputs['inputCandidateTranslation']);) {
                $UserArray = array(
                    'CandidateId' => $inputs['inputCandidateId'],
                    'CandidateTranslationType' => $inputs['inputCandidateTranslation'][$i]['value'],
                    'CandidateTranslationTitle' => $inputs['inputCandidateTranslation'][$i + 1]['value'],
                    'CandidateTranslationPublisher' => $inputs['inputCandidateTranslation'][$i + 2]['value'],
                    'CandidateTranslationMonth' => $inputs['inputCandidateTranslation'][$i + 3]['value'],
                    'CandidateTranslationYear' => $inputs['inputCandidateTranslation'][$i + 4]['value'],
                );
                $this->db->insert('candidate_translation', $UserArray);
                $i = $i + 5;
            }
        }
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "بروزرسانی ترجمه ها با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "بروزرسانی ترجمه ها با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function getCandidateInventionByCandidateId($id)
    {
        return
            $this->db->select('*')
                ->from('candidate_invention')
                ->where('CandidateId', $id)
                ->get()
                ->result_array();
    }
    public function candidateUpdateInvention($inputs)
    {
        $this->db->trans_start();
        $this->db->delete('candidate_invention', array(
            'CandidateId' => $inputs['inputCandidateId']
        ));
        if (isset($inputs['inputCandidateInvention'])) {
            for ($i = 0; $i < count($inputs['inputCandidateInvention']);) {
                $UserArray = array(
                    'CandidateId' => $inputs['inputCandidateId'],
                    'CandidateInventionTitle' => $inputs['inputCandidateInvention'][$i]['value'],
                    'CandidateInventionField' => $inputs['inputCandidateInvention'][$i + 1]['value'],
                    'CandidateInventionRegisterNumber' => $inputs['inputCandidateInvention'][$i + 2]['value'],
                    'CandidateInventionDescription' => $inputs['inputCandidateInvention'][$i + 3]['value']
                );
                $this->db->insert('candidate_invention', $UserArray);
                $i = $i + 4;
            }
        }
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "بروزرسانی اختراع با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "بروزرسانی اختراع با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function getCandidateConferenceByCandidateId($id)
    {
        return
            $this->db->select('*')
                ->from('candidate_conference')
                ->where('CandidateId', $id)
                ->get()
                ->result_array();
    }
    public function candidateUpdateConference($inputs)
    {
        $this->db->trans_start();
        $this->db->delete('candidate_conference', array(
            'CandidateId' => $inputs['inputCandidateId']
        ));
        if (isset($inputs['inputCandidateConference'])) {
            for ($i = 0; $i < count($inputs['inputCandidateConference']);) {
                $UserArray = array(
                    'CandidateId' => $inputs['inputCandidateId'],
                    'CandidateConferenceTitle' => $inputs['inputCandidateConference'][$i]['value'],
                    'CandidateConferenceLevel' => $inputs['inputCandidateConference'][$i + 1]['value'],
                    'CandidateConferenceAcceptType' => $inputs['inputCandidateConference'][$i + 2]['value'],
                    'CandidateConferenceMonth' => $inputs['inputCandidateConference'][$i + 3]['value'],
                    'CandidateConferenceYear' => $inputs['inputCandidateConference'][$i + 4]['value']
                );
                $this->db->insert('candidate_conference', $UserArray);
                $i = $i + 5;
            }
        }
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "بروزرسانی همایش های علمی با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "بروزرسانی همایش های علمی با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function getCandidateUpdatePoliticBackgroundByCandidateId($id)
    {
        return
            $this->db->select('*')
                ->from('candidate_politic_record')
                ->join('party','party.PartyId = candidate_politic_record.CandidatePartyId' , 'left')
                ->where('CandidateId', $id)
                ->get()
                ->result_array();
    }
    public function candidateUpdatePoliticBackground($inputs)
    {
        $this->db->trans_start();
        $this->db->delete('candidate_politic_record', array(
            'CandidateId' => $inputs['inputCandidateId']
        ));
        if (isset($inputs['inputCandidatePoliticBackground'])) {
            for ($i = 0; $i < count($inputs['inputCandidatePoliticBackground']);) {
                $UserArray = array(
                    'CandidateId' => $inputs['inputCandidateId'],
                    'CandidateActivityType' => $inputs['inputCandidatePoliticBackground'][$i]['value'],
                    'CandidateElectionType' => $inputs['inputCandidatePoliticBackground'][$i + 1]['value'],
                    'CandidateElectionPeriod' => $inputs['inputCandidatePoliticBackground'][$i + 2]['value'],
                    'CandidateElectionListName' => $inputs['inputCandidatePoliticBackground'][$i + 3]['value'],
                    'CandidateResponsibility' => $inputs['inputCandidatePoliticBackground'][$i + 4]['value'],
                    'CandidateMemberShip' => $inputs['inputCandidatePoliticBackground'][$i + 5]['value'],
                    'CandidatePartyId' => $inputs['inputCandidatePoliticBackground'][$i + 6]['value'],
                    'CandidateConstituencyStateId' => $inputs['inputCandidatePoliticBackground'][$i + 7]['value'],
                    'CandidateStartMonth' => $inputs['inputCandidatePoliticBackground'][$i + 8]['value'],
                    'CandidateStartYear' => $inputs['inputCandidatePoliticBackground'][$i + 9]['value'],
                    'CandidateEndMonth' => $inputs['inputCandidatePoliticBackground'][$i + 10]['value'],
                    'CandidateEndYear' => $inputs['inputCandidatePoliticBackground'][$i + 11]['value'],
                    'CandidateActivityDescription' => $inputs['inputCandidatePoliticBackground'][$i + 12]['value']
                );
                $this->db->insert('candidate_politic_record', $UserArray);
                $i += 13;
            }
        }
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "بروزرسانی سوابق سیاسی با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "بروزرسانی سوابق سیاسی با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function getCandidateSkillsByCandidateId($id)
    {
        return
            $this->db->select('*')
                ->from('candidate_skills')
                ->where('CandidateId', $id)
                ->get()
                ->result_array();
    }
    public function candidateUpdateSkills($inputs)
    {
        $this->db->trans_start();
        $this->db->delete('candidate_skills', array(
            'CandidateId' => $inputs['inputCandidateId']
        ));
        if (isset($inputs['inputCandidateSkills'])) {
            for ($i = 0; $i < count($inputs['inputCandidateSkills']);) {
                $UserArray = array(
                    'CandidateId' => $inputs['inputCandidateId'],
                    'SkillType' => $inputs['inputCandidateSkills'][$i]['value'],
                    'SkillLevel' => $inputs['inputCandidateSkills'][$i + 1]['value'],
                    'SkillLearnType' => $inputs['inputCandidateSkills'][$i + 2]['value']
                );
                $this->db->insert('candidate_skills', $UserArray);
                $i = $i + 3;
            }
        }
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "بروزرسانی مهارت ها با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "بروزرسانی مهارت ها با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function getCandidateVeteranByCandidateId($id)
    {
        return
            $this->db->select('*')
                ->from('candidate_veteran')
                ->where('CandidateId', $id)
                ->get()
                ->result_array();
    }
    public function candidateUpdateVeteran($inputs)
    {
        $this->db->trans_start();
        $this->db->delete('candidate_veteran', array(
            'CandidateId' => $inputs['inputCandidateId']
        ));
        foreach ($inputs['inputCandidateVeteran'] as $item) {
            if ($item['isTabChecked'] == 'true') {
                $iActive = 1;
            } else {
                $iActive = 0;
            }
            $UserArray = array(
                'CandidateId' => $inputs['inputCandidateId'],
                'IsActive' => $iActive,
                'CandidateVeteranFamilyTitle' => $item['inputCandidateVeteranFamilyTitle'],
                'CandidateVeteranType' => (isset($item['inputCandidateVeteranType'])) ? $item['inputCandidateVeteranType'] : "",
                'CandidateVeteranPercent' => $item['inputCandidateVeteranPercent'],
                'CandidateVeteranMonth' => $item['inputCandidateStartLiberationMonth'],
                'CandidateVeteranYear' => $item['inputCandidateStartLiberationYear']
            );
            $this->db->insert('candidate_veteran', $UserArray);
        }
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "بروزرسانی سوابق ایثارگری با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "بروزرسانی سوابق ایثارگری با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function candidateUpdatePromises($inputs){
        $this->db->trans_start();
        $this->db->delete('candidate_election_promise', array(
            'CandidateId' => $inputs['inputCandidateId']
        ));
        if (isset($inputs['inputElectionPromise'])) {
            for ($i = 0; $i < count($inputs['inputElectionPromise']);) {
                $UserArray = array(
                    'CandidateId' => $inputs['inputCandidateId'],
                    'CandidateElectionPromise' => $inputs['inputElectionPromise'][$i]['value'],
                );
                $this->db->insert('candidate_election_promise', $UserArray);
                $i = $i + 1;
            }
        }
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "بروزرسانی وعده های انتخاباتی با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "بروزرسانی وعده های انتخاباتی با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function getCandidateElectionPromisesByCandidateId($id)
    {
        return
            $this->db->select('*')
                ->from('candidate_election_promise')
                ->where('CandidateId', $id)
                ->get()
                ->result_array();
    }
    public function getCandidateFinanceByCandidateId($id)
    {
        $data['BankAccount'] = $this->db->select('*')->from('candidate_price_bank_account')->where('CandidateId', $id)->get()->result_array();
        $data['CreditDebtor'] = $this->db->select('*')->from('candidate_price_credit_debtor')->where('CandidateId', $id)->get()->result_array();
        $data['Election'] = $this->db->select('*')->from('candidate_price_election')->where('CandidateId', $id)->get()->result_array();
        $data['Fee'] = $this->db->select('*')->from('candidate_price_fee')->where('CandidateId', $id)->get()->result_array();
        $data['Goods'] = $this->db->select('*')->from('candidate_price_goods')->where('CandidateId', $id)->get()->result_array();
        $data['Income'] = $this->db->select('*')->from('candidate_price_income')->where('CandidateId', $id)->get()->result_array();
        $data['Invest'] = $this->db->select('*')->from('candidate_price_invest')->where('CandidateId', $id)->get()->result_array();
        $data['RealEStates'] = $this->db->select('*')->from('candidate_price_realestates')->where('CandidateId', $id)->get()->result_array();
        $data['Vehicle'] = $this->db->select('*')->from('candidate_price_vehicle')->where('CandidateId', $id)->get()->result_array();
        return $data;
    }
    public function doChangePassword($inputs)
    {
        $this->db->select('*');
        $this->db->from('candidate');
        $this->db->where(array(
            'CandidateId' => $inputs['inputCandidateId'],
            'CandidatePassword' => md5($inputs['inputCurrentPassword'])
        ));
        if ($this->db->get()->num_rows() > 0) {
            $UserArray = array(
                'CandidatePassword' => md5($inputs['inputNewPassword'])
            );
            $this->db->trans_start();
            $this->db->where('CandidateId', $inputs['inputCandidateId']);
            $this->db->update('candidate', $UserArray);
            $this->db->trans_complete();
            if ($this->db->trans_status() === FALSE) {
                $arr = array(
                    'type' => "red",
                    'content' => "بروزرسانی رمز عبور با مشکل مواجه شد",
                    'success' => false
                );
                return $arr;
            } else {
                $arr = array(
                    'type' => "green",
                    'content' => "بروزرسانی رمز عبور با موفقیت انجام شد",
                    'success' => true
                );
                return $arr;
            }
        } else {
            $arr = array(
                'type' => "red",
                'content' => "رمز عبور فعلی نامعتبر است",
                'success' => false
            );
            return $arr;
        }

    }
    public function insertPayment($inputs)
    {
        $this->db->insert('candidate_exam_payment', $inputs);
    }
    public function getExamPaymentByPaymentToken($token)
    {
        return $this->db->select('*')->from('candidate_exam_payment')->where('PaymentToken', $token)->get()->result_array();
    }
    public function updateSuccessPayment($inputs, $paymentInfo)
    {
        $UserArray = array(
            'PaymentStatus' => $inputs['PaymentStatus'],
            'PaymentReferenceId' => $inputs['PaymentReferenceId'],
        );

        $examRequestArray = array(
            'CandidateId' => $paymentInfo[0]['PaymentCandidateId'],
            'ExamId' => $paymentInfo[0]['PaymentExamId'],
            'CreateDateTime' => jDateTime::date("Y/m/d H:i:s", false, false)
        );
        $candidateStatusAfterExamReserveArray = array(
            'CandidateStatus' => $paymentInfo[0]['PaymentCandidateRequestedStatus']
        );
        $this->db->trans_start();

        /* Update Payment Record To Success */
        $this->db->where('PaymentToken', $inputs['PaymentToken']);
        $this->db->update('candidate_exam_payment', $UserArray);

        /* Add Exam Request And Reserve For Candidate */
        $this->db->insert('candidate_exam_request', $examRequestArray);

        /* Update Candidate Status After Reserve Exam */
        $this->db->where('CandidateId', $paymentInfo[0]['PaymentCandidateId']);
        $this->db->update('candidate', $candidateStatusAfterExamReserveArray);

        /* Decrement Exam Capacity  */
        $this->db->where('ExamId', $paymentInfo[0]['PaymentExamId']);
        $this->db->set('ExamCapacity', 'ExamCapacity-1', FALSE);
        $this->db->update('exam');

        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "بروزرسانی رمز عبور با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "بروزرسانی رمز عبور با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function candidateUpdateDocuments($inputs){
        foreach ($inputs['inputCandidateDocumentUrl'] as $document) {
            $UserArray = array(
                'CandidateId' => $inputs['inputCandidateId'],
                'CandidateDocumentName' => $inputs['inputCandidateDocumentName'],
                'CandidateDocumentUrl' => $document,
                'CreateDateTime' => jDateTime::date("Y/m/d H:i:s", false, false)
            );
            $this->db->insert('candidate_documents', $UserArray);
        }
        $arr = array(
            'type' => "green",
            'content' => "بارگذاری مدارک با موفقیت انجام شد",
            'success' => true
        );
        return $arr;
        
    }
    public function getCandidateWordpressAccount($id){
        $this->db->select('*');
        $this->db->from('candidate_wordpress_accounts');
        $this->db->where('CandidateId',$id);
        return $this->db->get()->result_array();
    }
    public function getCandidateDocuments($id){
        $data = $this->db->select('*')
            ->from('candidate_documents')
            ->where('CandidateId',$id)
            ->get()->result_array();
        return $data;
    }
    public function removeCandidateDocumentByRowId($inputs){
        $this->db->delete('candidate_documents', array(
            'RowId' => $inputs['inputRowId']
        ));
        $arr = array(
            'type' => "green",
            'content' => "حذف مدارک با موفقیت انجام شد",
            'success' => true
        );
        return $arr;
    }
}
?>