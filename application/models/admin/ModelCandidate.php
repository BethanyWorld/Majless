<?php
class ModelCandidate extends CI_Model{
    public function getCandidate($inputs){
        $limit = $inputs['pageIndex'];
        $start = ($limit - 1) * $this->config->item('defaultPageSize');
        $end = $this->config->item('defaultPageSize');
        $this->db->select('*');
        $this->db->from('candidate');
        $this->db->join('state' , 'candidate.CandidateStateId = state.StateId');
        $this->db->join('city' , 'candidate.CandidateCityId = city.CityId');
        $this->db->join('election_location' , 'candidate.CandidateElectionId = election_location.ElectionId');
        $this->db->order_by('CandidateId', 'ASC');

        $tempDb = clone $this->db;
        $result['count'] = $tempDb->get()->num_rows();

        $this->db->limit($end,$start);
        $query = $this->db->get()->result_array();
        if (count($query) > 0) {
            $result['data'] = $query;
            $result['startPage'] = $start;
        } else {
            $result['data'] = false;
        }
        return $result;
    }
    public function getCandidateRolesByCandidateId($candidateId){
        $this->db->select('*');
        $this->db->from('candidate_roles');
        $this->db->where(array('CandidateId' => $candidateId));
        return $this->db->get()->result_array();
    }
    public function getCandidateByCandidateId($candidateId){
        $this->db->select('*');
        $this->db->from('candidate');
        $this->db->where(array('CandidateId' => $candidateId));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $result = $query->result_array()[0];
            $this->db->select('*');
            $this->db->from('candidate_roles');
            $this->db->where('CandidateId' , $result['CandidateId']);
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
    public function getCandidateCandidatePostByCandidateId($candidateId){
        $this->db->select('*');
        $this->db->from('posts');
        $this->db->join('candidate_post' , 'posts.PostId = candidate_post.PostId');
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
    public function doAdd($inputs){
        $this->db->trans_start();
        $UserArray = array(
            'CandidateNationalCode' => $inputs['inputCandidateNationalCode'],
            'CandidateScore' => $inputs['inputCandidateScore'],
            'CandidateStateId' => $inputs['inputCandidateStateId'],
            'CandidateCityId' => $inputs['inputCandidateCityId']
        );
        $this->db->insert('candidate', $UserArray);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "درج نامزد انتخاباتی با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "درج نامزد انتخاباتی با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }


    }
    public function doEdit($inputs)
    {
        $UserArray = array(
            'CandidateNationalCode' => $inputs['inputCandidateNationalCode'],
            'CandidateScore' => $inputs['inputCandidateScore'],
            'CandidateStateId' => $inputs['inputCandidateStateId'],
            'CandidateCityId' => $inputs['inputCandidateCityId']
        );
        $this->db->trans_start();
        $this->db->where('CandidateId' , $inputs['inputCandidateId']);
        $this->db->update('candidate', $UserArray);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "ویرایش نماینده با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "ویرایش نماینده با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }


    }
    public function doDelete($inputs)
    {
        $this->db->trans_start();
        $this->db->delete('candidate', array(
            'CandidateId' =>  $inputs['inputCandidateId']
        ));
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "حذف نامزد انتخاباتی با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "حذف انتخاباتی با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function getCandidateByStateId($stateId){
        $this->db->select('*');
        $this->db->from('candidate');
        $this->db->join('state' , 'candidate.CandidateStateId = state.StateId');
        $this->db->join('city' , 'candidate.CandidateCityId = city.CityId');
        $this->db->join('election_location' , 'election_location.ElectionId = candidate.CandidateElectionId');
        $this->db->where(array('CandidateStateId' => $stateId));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return array();
    }
    public function getCandidateByStateIdAndCityId($stateId,$cityId){
        $this->db->select('*');
        $this->db->from('candidate');
        $this->db->join('state' , 'candidate.CandidateStateId = state.StateId');
        $this->db->join('city' , 'candidate.CandidateCityId = city.CityId');
        $this->db->where(array('CandidateStateId' => $stateId));
        $this->db->where(array('CandidateCityId' => $cityId));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return array();
    }
    public function getCandidateByStateName($stateName){
        $this->db->select('*');
        $this->db->from('candidate');
        $this->db->join('state' , 'candidate.CandidateStateId = state.StateId');
        $this->db->join('city' , 'candidate.CandidateCityId = city.CityId');
        $this->db->where(array('CandidateStateName' => $stateName));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return array();
    }
    public function getCandidatesByElectionId($electionId){
        $this->db->select('*');
        $this->db->from('candidate');
        $this->db->join('election_location' , 'election_location.ElectionId = candidate.CandidateElectionId');
        $this->db->where(array('CandidateElectionId' => $electionId));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return array();
    }
    /* Candidate Panel */
    public function candidateHasOtherConditionToContinue($inputs){
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $candidateId = $loginInfo['CandidateId'];
        $UserArray = array(
            'CandidateStatus' => $inputs['inputCandidateContinueCondition']
        );
        $this->db->trans_start();
        $this->db->where('CandidateId' , $candidateId);
        $this->db->update('candidate', $UserArray);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "ویرایش نماینده با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "ویرایش نماینده با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }


    }
    public function candidateReserveExam($inputs){
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $candidateId = $loginInfo['CandidateId'];
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
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "رزور آزمون با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        }
        else {
            $arr = array(
                'type' => "green",
                'content' => "رزور آزمون با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function getCandidateFirstStepExamByCandidateId($id){
        $this->db->select('*');
        $this->db->from('candidate_exam_request');
        $this->db->join('exam' , 'candidate_exam_request.ExamId = exam.ExamId');
        $this->db->where(
            array(
                'ExamState' => 'Pend',
                'ExamType' => 'FirstStep',
                'CandidateId' => $id
            )
        );
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return array();
    }

}
?>