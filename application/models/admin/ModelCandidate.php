<?php

class ModelCandidate extends CI_Model{
    public function getCandidate($inputs)
    {
        $limit = $inputs['pageIndex'];
        $start = ($limit - 1) * $this->config->item('defaultPageSize');
        $end = $this->config->item('defaultPageSize');
        $this->db->select('*');
        $this->db->from('candidate');
        $this->db->join('state', 'candidate.CandidateStateId = state.StateId');
        $this->db->join('city', 'candidate.CandidateCityId = city.CityId');
        $this->db->join('election_location', 'candidate.CandidateElectionId = election_location.ElectionId');
        $this->db->order_by('CandidateId', 'ASC');

        if (!empty($inputs['inputCandidateStatus'])) {
            $this->db->where('CandidateStatus', $inputs['inputCandidateStatus']);
        }
        if (!empty($inputs['inputCandidateNationalCode'])) {
            $this->db->where('CandidateNationalCode', $inputs['inputCandidateNationalCode']);
        }
        if (!empty($inputs['inputCandidateState'])) {
            $this->db->where('CandidateStateId', $inputs['inputCandidateState']);
        }

        if (!empty($inputs['inputCandidateFullName'])) {
            $this->db->like('CandidateFirstName', $inputs['inputCandidateFullName']);
            $this->db->or_like('CandidateLastName', $inputs['inputCandidateFullName']);
        }


        $tempDb = clone $this->db;
        $result['count'] = $tempDb->get()->num_rows();

        $this->db->limit($end, $start);
        $query = $this->db->get()->result_array();
        if (count($query) > 0) {
            $result['data'] = $query;
            $result['startPage'] = $start;
        } else {
            $result['data'] = false;
        }
        return $result;
    }
    public function getCandidateRolesByCandidateId($candidateId)
    {
        $this->db->select('*');
        $this->db->from('candidate_roles');
        $this->db->where(array('CandidateId' => $candidateId));
        return $this->db->get()->result_array();
    }
    public function getCandidateByCandidateId($candidateId)
    {
        $this->db->select('*');
        $this->db->from('candidate');
        $this->db->join('state', 'candidate.CandidateStateId = state.StateId');
        $this->db->join('city', 'candidate.CandidateCityId = city.CityId');
        $this->db->where(array('CandidateId' => $candidateId));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $result = $query->result_array()[0];
            $this->db->select('*');
            $this->db->from('candidate_roles');
            $this->db->where('CandidateId', $result['CandidateId']);
            $roles = $this->db->get()->result_array();
            $result['roles'] = $roles;
            return $result;
        }
        $arr = array(
            'type' => "red",
            'content' => "اطلاعات نامعتبر است",
            'success' => false
        );
        return $arr;
    }
    /* For Candidate News */
    public function getCandidateCandidatePostByCandidateId($candidateId)
    {
        $this->db->select('*');
        $this->db->from('posts');
        $this->db->join('candidate_post', 'posts.PostId = candidate_post.PostId');
        $this->db->where(array('CandidateId' => $candidateId));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        $arr = array(
            'type' => "red",
            'content' => "اطلاعات نامعتبر است",
            'success' => false
        );
        return $arr;
    }

    /* End For Candidate News  */
    public function getCandidateByStateId($stateId)
    {
        $this->db->select('*');
        $this->db->from('candidate');
        $this->db->join('state', 'candidate.CandidateStateId = state.StateId');
        $this->db->join('city', 'candidate.CandidateCityId = city.CityId');
        $this->db->join('election_location', 'election_location.ElectionId = candidate.CandidateElectionId');
        $this->db->where(array('CandidateStateId' => $stateId));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return array();
    }
    public function getCandidateByStateIdAndCityId($stateId, $cityId)
    {
        $this->db->select('*');
        $this->db->from('candidate');
        $this->db->join('state', 'candidate.CandidateStateId = state.StateId');
        $this->db->join('city', 'candidate.CandidateCityId = city.CityId');
        $this->db->where(array('CandidateStateId' => $stateId));
        $this->db->where(array('CandidateCityId' => $cityId));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return array();
    }
    public function getCandidateByStateName($stateName)
    {
        $this->db->select('*');
        $this->db->from('candidate');
        $this->db->join('state', 'candidate.CandidateStateId = state.StateId');
        $this->db->join('city', 'candidate.CandidateCityId = city.CityId');
        $this->db->where(array('CandidateStateName' => $stateName));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return array();
    }
    public function getCandidatesByElectionId($electionId)
    {
        $this->db->select('*');
        $this->db->from('candidate');
        $this->db->join('election_location', 'election_location.ElectionId = candidate.CandidateElectionId');
        $this->db->where(array('CandidateElectionId' => $electionId));
        $this->db->where(array('CandidateStatus' => 'CandidateAccepted'));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return array();
    }
    /* Candidate Panel */
    public function candidateHasOtherConditionToContinue($inputs)
    {
        if ($inputs['inputCandidateContinueCondition'] != 'CandidateHasNotContinueCondition'
            &&
            $inputs['inputCandidateContinueCondition'] != 'CandidateHasContinueCondition'){
            $result = array(
                'type' => "warning",
                'content' => "دسترسی لازم را ندارید",
                'success' => true
            );
            echo json_encode($result);
            die();
        }

        $UserArray = array(
            'CandidateStatus' => $inputs['inputCandidateContinueCondition']
        );
        $this->db->trans_start();
        $this->db->where('CandidateId', $inputs['inputCandidateId']);
        $this->db->update('candidate', $UserArray);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "تغییر وضعیت نامزد انتخاباتی با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        }
        else {
            $this->db->select('*');
            $this->db->from('candidate');
            $this->db->where(array(
                'CandidateId' => $inputs['inputCandidateId']
            ));
            $result = $this->db->get()->result_array();
            $this->db->select('*');
            $this->db->from('candidate_roles');
            $this->db->where('CandidateId', $result[0]['CandidateId']);
            $roles = $this->db->get()->result_array();
            $result[0]['roles'] = $roles;
            $this->session->set_userdata('UserLoginInfo', $result[0]);

            $arr = array(
                'type' => "green",
                'content' => "تغییر وضعیت نامزد انتخاباتی با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function getCandidateFirstStepExamByCandidateId($id)
    {
        $this->db->select('*');
        $this->db->from('candidate_exam_request');
        $this->db->join('exam', 'candidate_exam_request.ExamId = exam.ExamId');
        $this->db->join('exam_places', 'exam.ExamPlaceId = exam_places.ExamPlaceId');
        $this->db->where(
            array(
                'ExamType' => 'FirstStep',
                'CandidateId' => $id
            )
        );
        $this->db->order_by('RequestId', 'DESC');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return array();
    }
    public function getCandidateSecondStepExamByCandidateId($id)
    {
        $this->db->select('*');
        $this->db->from('candidate_exam_request');
        $this->db->join('exam', 'candidate_exam_request.ExamId = exam.ExamId');
        $this->db->join('exam_places', 'exam.ExamPlaceId = exam_places.ExamPlaceId');
        $this->db->where(
            array(
                'ExamType' => 'SecondStep',
                'CandidateId' => $id
            )
        );
        $this->db->order_by('RequestId', 'DESC');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return array();
    }
    public function getCandidateEvaluationExamByCandidateId($id)
    {
        $this->db->select('*');
        $this->db->from('candidate_exam_request');
        $this->db->join('exam', 'candidate_exam_request.ExamId = exam.ExamId');
        $this->db->join('exam_places', 'exam.ExamPlaceId = exam_places.ExamPlaceId');
        $this->db->where(
            array(
                'ExamType' => 'Evaluation',
                'CandidateId' => $id
            )
        );
        $this->db->order_by('RequestId', 'DESC');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return array();
    }

    public function doMarkCandidate($inputs)
    {
        $UserArray = array(
            'CandidateStatus' => $inputs['inputCandidateStatus'],
            'CandidateScore' => $inputs['inputGrade'],
        );
        $this->db->trans_start();
        $this->db->where('CandidateId', $inputs['inputCandidateId']);
        $this->db->update('candidate', $UserArray);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "نمره دهی با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "نمره دهی با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }


    }
    public function doUpdateMarkCandidate($inputs)
    {
        $UserArray = array(
            'CandidateScore' => $inputs['inputGrade']
        );
        $this->db->trans_start();
        $this->db->where('CandidateId', $inputs['inputCandidateId']);
        $this->db->update('candidate', $UserArray);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "نمره دهی با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "نمره دهی با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }


    }

    public function candidateReserveExam($inputs)
    {
        $candidateId = $this->session->userdata('UserLoginInfo')['CandidateId'];
        $candidatePhone = $this->session->userdata('UserLoginInfo')['CandidatePhone'];

        $this->db->select('*');
        $this->db->from('exam');
        $this->db->join('exam_places' , 'exam.ExamPlaceId = exam_places.ExamPlaceId');
        $this->db->where('ExamId', $inputs['inputExamId']);
        $examInfo = $this->db->get()->result_array()[0];
        if ($examInfo['ExamCapacity'] <= 0) {
            $arr = array(
                'type' => "warning",
                'content' => "ظرفیت این آزمون تکمیل است.لطفا آزمون دیگری را انتخاب کنید",
                'success' => false
            );
            return $arr;
        }

        $this->db->select('*');
        $this->db->from('candidate_exam_request');
        $this->db->where('CandidateId', $candidateId);
        $this->db->where('ExamId', $inputs['inputExamId']);
        $this->db->where('ExamState !=', 'Absence');
        $result = $this->db->get()->result_array();
        if (count($result) > 0) {
            $arr = array(
                'type' => "warning",
                'content' => "شما قبلا آزمون را رزرو کرده اید",
                'success' => false
            );
            return $arr;
        }

        $UserArray = array(
            'CandidateId' => $candidateId,
            'ExamId' => $inputs['inputExamId'],
            'CreateDateTime' => jDateTime::date("Y/m/d H:i:s", false, false)
        );
        $updateArray = array(
            'CandidateStatus' => $inputs['inputCandidateStatus']
        );
        $this->db->trans_start();
        $this->db->insert('candidate_exam_request', $UserArray);

        $this->db->where('CandidateId', $candidateId);
        $this->db->update('candidate', $updateArray);

        $this->db->where('ExamId', $inputs['inputExamId']);
        $this->db->set('ExamCapacity', 'ExamCapacity-1', FALSE);
        $this->db->update('exam');

        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "رزور آزمون با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $messageBody = "";
            $examTypePersian = "";
            switch ($examInfo['ExamType']){
                case 'FirstStep':
                    $examTypePersian = "مرحله اول";
                    break;
                case 'SecondStep':
                    $examTypePersian = "مرحله دوم";
                    break;
                case 'Evaluation':
                    $examTypePersian = "آزمون کانون ارزیابی";
                    break;
            }
            $messageBody .= "کاربر گرامی زمان و مکان ".$examTypePersian." به شرح زیر می باشد.";
            $messageBody .= "\r\n";
            $messageBody .= "آدرس محل آزمون:";
            $messageBody .= "\r\n";
            $messageBody .=  $examInfo['ExamPlaceAddress'];
            $messageBody .= "\r\n";
            $messageBody .= "تاریخ برگزاری آزمون:";
            $messageBody .= "\r\n";
            $messageBody .=  $examInfo['ExamDate'];
            $messageBody .= "\r\n";
            $messageBody .= "ساعت:";
            $messageBody .= "\r\n";
            $messageBody .=  $examInfo['ExamTime'];
            $arr = array(
                'type' => "green",
                'content' => "رزور آزمون با موفقیت انجام شد",
                'senderNumber' => $candidatePhone,
                'messageBody' => $messageBody,
                'success' => true
            );
            return $arr;
        }
    }
    public function doAcceptCandidateFirstExam($inputs)
    {
        $candidateInfo = $this->getCandidateByCandidateId($inputs['inputCandidateId']);
        $data = $this->getCandidateFirstStepExamByCandidateId($inputs['inputCandidateId']);
        $RequestId = 0;
        foreach ($data as $item) {
            if ($item['ExamState'] == 'Presence') {
                $RequestId = $item['RequestId'];
            }
        }
        $UserArray = array(
            'ExamState' => 'Done'
        );
        $this->db->trans_start();
        $this->db->where('RequestId', $RequestId);
        $this->db->update('candidate_exam_request', $UserArray);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "تایید آزمون مرحله اول با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "تایید آزمون مرحله اول با موفقیت انجام شد",
                'senderNumber' => $candidateInfo['CandidatePhone'],
                'messageBody' => 'کاربر گرامی لطفا برای اطلاع از زمان و مکان آزمون مرحله دوم به صفحه شخصی خود به آدرس http://majless11.com/Profile  مراجعه کند',
                'success' => true
            );
            return $arr;
        }


    }
    public function doRejectCandidateFirstExam($inputs)
    {
        $UserArray = array(
            'CandidateStatus' => 'CandidateExamFirstStepReject'
        );
        $this->db->trans_start();
        $this->db->where('CandidateId', $inputs['inputCandidateId']);
        $this->db->update('candidate', $UserArray);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "رد آزمون مرحله اول با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "رد آزمون مرحله اول با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }


    }

    public function doAcceptCandidateSecondExam($inputs)
    {
        $userStatusArray = array(
            'CandidateStatus' => 'CandidateExamSecondStep'
        );
        $candidateInfo = $this->getCandidateByCandidateId($inputs['inputCandidateId']);
        $data = $this->getCandidateSecondStepExamByCandidateId($inputs['inputCandidateId']);
        $RequestId = 0;
        foreach ($data as $item) {
            if ($item['ExamState'] == 'Presence') {
                $RequestId = $item['RequestId'];
            }
        }
        $UserArray = array(
            'ExamState' => 'Done'
        );
        $this->db->trans_start();
        $this->db->where('RequestId', $RequestId);
        $this->db->update('candidate_exam_request', $UserArray);
        $this->db->where('CandidateId', $inputs['inputCandidateId']);
        $this->db->update('candidate', $userStatusArray);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "تایید آزمون مرحله دوم با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "تایید آزمون مرحله دوم با موفقیت انجام شد",
                'senderNumber' => $candidateInfo['CandidatePhone'],
                'messageBody' => 'کاربر گرامی لطفا برای اطلاع از زمان و مکان آزمون مرحله کانون ارزیابی به صفحه شخصی خود به آدرس http://majless11.com/Profile  مراجعه کند',
                'success' => true
            );
            return $arr;
        }


    }
    public function doRejectCandidateSecondExam($inputs)
    {
        $UserArray = array(
            'CandidateStatus' => 'CandidateExamSecondStepReject'
        );
        $this->db->trans_start();
        $this->db->where('CandidateId', $inputs['inputCandidateId']);
        $this->db->update('candidate', $UserArray);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "رد آزمون مرحله دوم با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "رد آزمون مرحله دوم با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }


    }


    public function doAcceptEvaluationExam($inputs)
    {
        $userStatusArray = array(
            'CandidateStatus' => 'CandidateAccepted'
        );
        $candidateInfo = $this->getCandidateByCandidateId($inputs['inputCandidateId']);
        $data = $this->getCandidateSecondStepExamByCandidateId($inputs['inputCandidateId']);
        $RequestId = 0;
        foreach ($data as $item) {
            if ($item['ExamState'] == 'Presence') {
                $RequestId = $item['RequestId'];
            }
        }
        $UserArray = array(
            'ExamState' => 'Done'
        );
        $this->db->trans_start();
        $this->db->where('RequestId', $RequestId);
        $this->db->update('candidate_exam_request', $UserArray);
        $this->db->where('CandidateId', $inputs['inputCandidateId']);
        $this->db->update('candidate', $userStatusArray);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "تایید آزمون مرحله دوم با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "تایید آزمون کانون ارزیابی با موفقیت انجام شد",
                'senderNumber' => $candidateInfo['CandidatePhone'],
                'messageBody' => 'لطفا در اسرع وقت نسبت به تکمیل فرم لیست اموال و تعهدنامه به پنل خود به آدرس http://new.moarefin.com مراجعه نمایید',
                'success' => true
            );
            return $arr;
        }


    }
    public function doRejectEvaluationExam($inputs)
    {
        $UserArray = array(
            'CandidateStatus' => 'CandidateAssessmentReject'
        );
        $this->db->trans_start();
        $this->db->where('CandidateId', $inputs['inputCandidateId']);
        $this->db->update('candidate', $UserArray);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "رد آزمون کانون ارزیابی با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "رد آزمون کانون ارزیابی با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }


}

?>