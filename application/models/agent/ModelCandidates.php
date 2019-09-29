<?php
class ModelCandidates extends CI_Model{
    /* Exam Places*/
    public function getCandidatesByStateId($inputs){
        $AgentStateId = $this->session->userdata('AgentLoginInfo')[0]['AgentStateId'];
        $limit = $inputs['pageIndex'];
        $start = ($limit - 1) * $this->config->item('defaultPageSize');
        $end = $this->config->item('defaultPageSize');

        $this->db->select('*');
        $this->db->from('candidate');
        $this->db->join('election_location' , 'candidate.CandidateElectionId = election_location.ElectionId');
        $this->db->where(array('CandidateStateId' => $AgentStateId));
        $this->db->order_by('CandidateId DESC');

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
    public function getCandidateById($id){
        $this->db->select('*');
        $this->db->from('candidate');
        $this->db->join('election_location' , 'candidate.CandidateElectionId = election_location.ElectionId');
        $this->db->join('state' , 'candidate.CandidateStateId = state.StateId');
        $this->db->join('city' , 'candidate.CandidateCityId = city.CityId');
        $this->db->where(array('CandidateId' => $id));
        return $this->db->get()->result_array();
    }

    public function doEditCandidateMark($inputs){
        $this->db->trans_start();
        $UserArray = array(
            'CandidateScore' => $inputs['inputCandidateScore'],
            'CandidateStatus' => 'CandidateResumeMarked'
        );
        $this->db->where('CandidateId', $inputs['inputCandidateId']);
        $this->db->update('candidate', $UserArray);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "ثبت نمره با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "ثبت نمره با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }


}

?>