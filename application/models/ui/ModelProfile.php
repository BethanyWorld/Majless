<?php
class ModelProfile extends CI_Model{
    public function doUpdateCandidatePersonalInfo($inputs)
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
            return $arr;
        }


    }

    public function getCandidateSkillsByCandidateId($id){
        return
            $this->db->select('*')
            ->from('candidate_skills')
            ->where('CandidateId' , $id)
            ->get()
            ->result_array();
    }
    public function candidateUpdateSkills($inputs)
    {
        $this->db->trans_start();
        $this->db->delete('candidate_skills', array(
            'CandidateId' => $inputs['inputCandidateId']
        ));
        for($i=0;$i <count($inputs['inputCandidateSkills']);){
            $UserArray = array(
                'CandidateId' => $inputs['inputCandidateId'],
                'SkillType' => $inputs['inputCandidateSkills'][$i]['value'],
                'SkillLevel' => $inputs['inputCandidateSkills'][$i+1]['value'],
                'SkillLearnType' => $inputs['inputCandidateSkills'][$i+2]['value']
            );
            $this->db->insert('candidate_skills', $UserArray);
            $i = $i +3;
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

    public function getCandidateBooksByCandidateId($id){
        return
            $this->db->select('*')
                ->from('candidate_books')
                ->where('CandidateId' , $id)
                ->get()
                ->result_array();
    }
    public function candidateUpdateBooks($inputs)
    {
        $this->db->trans_start();
        $this->db->delete('candidate_books', array(
            'CandidateId' => $inputs['inputCandidateId']
        ));
        for($i=0;$i <count($inputs['inputCandidateBooks']);){
            $UserArray = array(
                'CandidateId' => $inputs['inputCandidateId'],
                'CandidateBookTitle' => $inputs['inputCandidateBooks'][$i]['value'],
                'CandidateBookPublisher' => $inputs['inputCandidateBooks'][$i+1]['value'],
                'CandidateBookPublishMonth' => $inputs['inputCandidateBooks'][$i+2]['value'],
                'CandidateBookPublishYear' => $inputs['inputCandidateBooks'][$i+3]['value']
            );
            $this->db->insert('candidate_books', $UserArray);
            $i = $i +4;
        }
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "بروزرسانی کتب ها با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "بروزرسانی کتب ها با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }

    public function getCandidateArticlesByCandidateId($id){
        return
            $this->db->select('*')
                ->from('candidate_articles')
                ->where('CandidateId' , $id)
                ->get()
                ->result_array();
    }
    public function candidateUpdateArticles($inputs)
    {
        $this->db->trans_start();
        $this->db->delete('candidate_articles', array(
            'CandidateId' => $inputs['inputCandidateId']
        ));
        for($i=0;$i <count($inputs['inputCandidateArticles']);){
            $UserArray = array(
                'CandidateId' => $inputs['inputCandidateId'],
                'CandidateArticleTitle' => $inputs['inputCandidateArticles'][$i]['value'],
                'CandidateArticleLevel' => $inputs['inputCandidateArticles'][$i+1]['value'],
                'CandidateArticleMagazineTitle' => $inputs['inputCandidateArticles'][$i+2]['value'],
                'CandidateArticlePublishMonth' => $inputs['inputCandidateArticles'][$i+3]['value'],
                'CandidateArticlePublishYear' => $inputs['inputCandidateArticles'][$i+4]['value']
            );
            $this->db->insert('candidate_articles', $UserArray);
            $i = $i +5;
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

    public function getCandidateResearchByCandidateId($id){
        return
            $this->db->select('*')
                ->from('candidate_research')
                ->where('CandidateId' , $id)
                ->get()
                ->result_array();
    }
    public function candidateUpdateResearch($inputs)
    {
        $this->db->trans_start();
        $this->db->delete('candidate_research', array(
            'CandidateId' => $inputs['inputCandidateId']
        ));
        for($i=0;$i <count($inputs['inputCandidateResearch']);){
            $UserArray = array(
                'CandidateId' => $inputs['inputCandidateId'],
                'CandidateResearchTitle' => $inputs['inputCandidateResearch'][$i]['value'],
                'CandidateResearchEmployer' => $inputs['inputCandidateResearch'][$i+1]['value'],
                'CandidateResearchWorker' => $inputs['inputCandidateResearch'][$i+2]['value'],
                'CandidateResearchResponsibility' => $inputs['inputCandidateResearch'][$i+3]['value'],
                'CandidateResearchMonth' => $inputs['inputCandidateResearch'][$i+4]['value'],
                'CandidateResearchYear' => $inputs['inputCandidateResearch'][$i+4]['value'],
            );
            $this->db->insert('candidate_research', $UserArray);
            $i = $i +6;
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

    public function getCandidateTranslationByCandidateId($id){
        return
            $this->db->select('*')
                ->from('candidate_translation')
                ->where('CandidateId' , $id)
                ->get()
                ->result_array();
    }
    public function candidateUpdateTranslation($inputs)
    {
        $this->db->trans_start();
        $this->db->delete('candidate_translation', array(
            'CandidateId' => $inputs['inputCandidateId']
        ));
        for($i=0;$i <count($inputs['inputCandidateTranslation']);){
            $UserArray = array(
                'CandidateId' => $inputs['inputCandidateId'],
                'CandidateTranslationType' => $inputs['inputCandidateTranslation'][$i]['value'],
                'CandidateTranslationTitle' => $inputs['inputCandidateTranslation'][$i+1]['value'],
                'CandidateTranslationPublisher' => $inputs['inputCandidateTranslation'][$i+2]['value'],
                'CandidateTranslationMonth' => $inputs['inputCandidateTranslation'][$i+3]['value'],
                'CandidateTranslationYear' => $inputs['inputCandidateTranslation'][$i+4]['value'],
            );
            $this->db->insert('candidate_translation', $UserArray);
            $i = $i +5;
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

    public function getCandidateInventionByCandidateId($id){
        return
            $this->db->select('*')
                ->from('candidate_invention')
                ->where('CandidateId' , $id)
                ->get()
                ->result_array();
    }
    public function candidateUpdateInvention($inputs)
    {
        $this->db->trans_start();
        $this->db->delete('candidate_invention', array(
            'CandidateId' => $inputs['inputCandidateId']
        ));
        for($i=0;$i <count($inputs['inputCandidateInvention']);){
            $UserArray = array(
                'CandidateId' => $inputs['inputCandidateId'],
                'CandidateInventionTitle' => $inputs['inputCandidateInvention'][$i]['value'],
                'CandidateInventionField' => $inputs['inputCandidateInvention'][$i+1]['value'],
                'CandidateInventionRegisterNumber' => $inputs['inputCandidateInvention'][$i+2]['value'],
                'CandidateInventionDescription' => $inputs['inputCandidateInvention'][$i+3]['value']
            );
            $this->db->insert('candidate_invention', $UserArray);
            $i = $i +4;
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

    public function getCandidateConferenceByCandidateId($id){
        return
            $this->db->select('*')
                ->from('candidate_conference')
                ->where('CandidateId' , $id)
                ->get()
                ->result_array();
    }
    public function candidateUpdateConference($inputs)
    {
        $this->db->trans_start();
        $this->db->delete('candidate_conference', array(
            'CandidateId' => $inputs['inputCandidateId']
        ));
        for($i=0;$i <count($inputs['inputCandidateConference']);){
            $UserArray = array(
                'CandidateId' => $inputs['inputCandidateId'],
                'CandidateConferenceTitle' => $inputs['inputCandidateConference'][$i]['value'],
                'CandidateConferenceLevel' => $inputs['inputCandidateConference'][$i+1]['value'],
                'CandidateConferenceAcceptType' => $inputs['inputCandidateConference'][$i+2]['value'],
                'CandidateConferenceMonth' => $inputs['inputCandidateConference'][$i+3]['value'],
                'CandidateConferenceYear' => $inputs['inputCandidateConference'][$i+4]['value']
            );
            $this->db->insert('candidate_conference', $UserArray);
            $i = $i +5;
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

    public function getCandidateJobHistoryByCandidateId($id){
        return
            $this->db->select('*')
                ->from('candidate_job_hostory')
                ->where('CandidateId' , $id)
                ->get()
                ->result_array();
    }
    public function candidateUpdateJobHistory($inputs)
    {
        $this->db->trans_start();
        $this->db->delete('candidate_job_hostory', array(
            'CandidateId' => $inputs['inputCandidateId']
        ));
        for($i=0;$i <count($inputs['inputCandidateJobHistory']);){
            $UserArray = array(
                'CandidateId' => $inputs['inputCandidateId'],
                'CandidateJobTitle' => $inputs['inputCandidateJobHistory'][$i]['value'],
                'CandidateJobCompanyTitle' => $inputs['inputCandidateJobHistory'][$i+1]['value'],
                'CandidateStartJobMonth' => $inputs['inputCandidateJobHistory'][$i+2]['value'],
                'CandidateStartJobYear' => $inputs['inputCandidateJobHistory'][$i+3]['value'],
                'CandidateEndJobMonth' => $inputs['inputCandidateJobHistory'][$i+4]['value'],
                'CandidateEndJobYear' => $inputs['inputCandidateJobHistory'][$i+5]['value'],
            );
            $this->db->insert('candidate_job_hostory', $UserArray);
            $i = $i +6;
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


    public function getCandidateAcademicBackgroundByCandidateId($id){
        return
            $this->db->select('*')
                ->from('candidate_academic_background')
                ->where('CandidateId' , $id)
                ->get()
                ->result_array();
    }
    public function candidateUpdateAcademicBackground($inputs)
    {
        $this->db->trans_start();
        $this->db->delete('candidate_academic_background', array(
            'CandidateId' => $inputs['inputCandidateId']
        ));
        for($i=0;$i < count($inputs['inputCandidateAcademicBackground']);){
            $UserArray = array(
                'CandidateId' => $inputs['inputCandidateId'],
                'CandidateGrade' => $inputs['inputCandidateAcademicBackground'][$i]['value'],
                'CandidateUniversityLevelType' => $inputs['inputCandidateAcademicBackground'][$i+1]['value'],
                'CandidateSchoolMajor' => $inputs['inputCandidateAcademicBackground'][$i+2]['value'],
                'CandidateUniversityName' => $inputs['inputCandidateAcademicBackground'][$i+3]['value'],
                'CandidateDepartment' => $inputs['inputCandidateAcademicBackground'][$i+4]['value'],
                'CandidateMajor' => $inputs['inputCandidateAcademicBackground'][$i+5]['value'],
                'CandidateStudyStatus' => $inputs['inputCandidateAcademicBackground'][$i+6]['value'],
            );
            $this->db->insert('candidate_academic_background', $UserArray);
            $i = $i +7;
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

}

?>