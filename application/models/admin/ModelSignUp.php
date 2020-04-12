<?php
class ModelSignUp extends CI_Model{
    public function doExportReport(){
        $this->db->select('*');
        $this->db->from('candidate');
        $this->db->join('state', 'candidate.CandidateStateId = state.StateId');
        $this->db->join('city', 'candidate.CandidateCityId = city.CityId');
        $this->db->join('election_location', 'candidate.CandidateElectionId = election_location.ElectionId');
        $this->db->order_by('CandidateId', 'ASC');
        $result = $this->db->get()->result_array();
        $i=0;
        foreach ($result as $item) {
            $this->db->select('*');
            $this->db->from('candidate_roles');
            $this->db->where(array('CandidateId' => $item['CandidateId']));
            $result[$i]['roles'] = $this->db->get()->result_array();
            $i +=1;
        }
        return $result;
    }
}

?>