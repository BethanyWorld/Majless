<?php
class ModelReport extends CI_Model{
    public function getAllCandidatesCount($stateId = 0){
        $this->db->select('*');
        $this->db->from('candidate');
        if($stateId > 0){
            $this->db->where('CandidateStateId' , $stateId);
        }
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function getAllReportAbusesCount(){
        $this->db->select('*');
        $this->db->from('candidate_report_abuse');
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function getAllExamsCount($agentId = 0){
        $this->db->select('*');
        $this->db->from('exam');
        if($agentId > 0){
            $this->db->where('ExamAgentId' , $agentId);
        }
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function getAllExamRequestsCount(){
        $this->db->select('*');
        $this->db->from('candidate_exam_request');
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function getStateCandidatesCount(){
        $this->db->select('*');
        $this->db->from('state');
        $states = $this->db->get()->result_array();
        $index = 0;
        foreach ($states as $state) {
            $this->db->select('Count(CandidateId) as cnt');
            $this->db->from('candidate');
            $this->db->where('CandidateStateId' , $state['StateId']);
            $states[$index]['candidateCount'] = $this->db->get()->result_array()[0]['cnt'];

            $this->db->select('Count(candidate.CandidateId) as cnt');
            $this->db->from('candidate');
            $this->db->join('candidate_roles' , 'candidate.CandidateId = candidate_roles.CandidateId');
            $this->db->where('Role' , 'Candidate');
            $this->db->where('CandidateStateId' , $state['StateId']);
            $states[$index]['RoleCandidateCount'] = $this->db->get()->result_array()[0]['cnt'];

            $this->db->select('Count(candidate.CandidateId) as cnt');
            $this->db->from('candidate');
            $this->db->join('candidate_roles' , 'candidate.CandidateId = candidate_roles.CandidateId');
            $this->db->where('Role' , 'Sponsor');
            $this->db->where('CandidateStateId' , $state['StateId']);
            $states[$index]['RoleSponsorCount'] = $this->db->get()->result_array()[0]['cnt'];

            $this->db->select('Count(candidate.CandidateId) as cnt');
            $this->db->from('candidate');
            $this->db->join('candidate_roles' , 'candidate.CandidateId = candidate_roles.CandidateId');
            $this->db->where('Role' , 'Elite');
            $this->db->where('CandidateStateId' , $state['StateId']);
            $states[$index]['RoleEliteCount'] = $this->db->get()->result_array()[0]['cnt'];
            $index +=1;
        }
        return $states;
    }
    public function getRolesCount($stateId = 0){

        $this->db->select('COUNT(RoleId) as cnt');
        $this->db->from('candidate_roles');
        $this->db->join('candidate' , 'candidate_roles.CandidateId = candidate.CandidateId');
        $this->db->where('Role' , 'Candidate');
        if($stateId > 0){
            $this->db->where('CandidateStateId' , $stateId);
        }
        $data['Candidate'] = $this->db->get()->result_array()[0]['cnt'];

        $this->db->select('COUNT(RoleId) as cnt');
        $this->db->from('candidate_roles');
        $this->db->join('candidate' , 'candidate_roles.CandidateId = candidate.CandidateId');
        $this->db->where('Role' , 'Sponsor');
        if($stateId > 0){
            $this->db->where('CandidateStateId' , $stateId);
        }
        $data['Sponsor'] = $this->db->get()->result_array()[0]['cnt'];

        $this->db->select('COUNT(RoleId) as cnt');
        $this->db->from('candidate_roles');
        $this->db->join('candidate' , 'candidate_roles.CandidateId = candidate.CandidateId');
        $this->db->where('Role' , 'Elite');
        if($stateId > 0){
            $this->db->where('CandidateStateId' , $stateId);
        }
        $data['Elite'] = $this->db->get()->result_array()[0]['cnt'];
        return $data;
    }
    public function getGenderCount(){
        $this->db->select('COUNT(CandidateId) as MaleCount');
        $this->db->from('candidate');
        $this->db->where('CandidateGender' , 'Male');
        $data['MaleCount'] = $this->db->get()->result_array()[0]['MaleCount'];

        $this->db->select('COUNT(CandidateId) as FemaleCount');
        $this->db->from('candidate');
        $this->db->where('CandidateGender' , 'Female');
        $data['FemaleCount'] = $this->db->get()->result_array()[0]['FemaleCount'];
        return $data;
    }
    public function getLatestCandidates($stateId = 0){
        $this->db->select('*');
        $this->db->from('candidate');
        if($stateId > 0){
            $this->db->where('CandidateStateId' , $stateId);
        }
        $this->db->order_by('CandidateId' , 'DESC');
        $this->db->limit(5);
        return $this->db->get()->result_array();
    }
    public function getTodayCandidates(){
        $this->db->select('*');
        $this->db->from('candidate');
        $this->db->like('CreateDateTime' , jDateTime::date("Y/m/d", false, false));
        $this->db->order_by('CandidateId' , 'DESC');
        return $this->db->get()->num_rows();
    }

}
?>