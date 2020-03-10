<?php
class ModelInternalCandidate extends CI_Model{
    public function getRequests($inputs){
        $limit = $inputs['pageIndex'];
        $start = ($limit - 1) * $this->config->item('defaultPageSize');
        $end = $this->config->item('defaultPageSize');
        $this->db->select('*');
        $this->db->from('internal_election');
        $this->db->join('candidate', 'candidate.CandidateId = internal_election.CandidateId');
        $this->db->join('state', 'candidate.CandidateStateId = state.StateId');
        $this->db->join('city', 'candidate.CandidateCityId = city.CityId');
        $this->db->order_by('internal_election.RowId', 'ASC');
        if (!empty($inputs['inputSupervisionType'])) {
            $this->db->where('SupervisionType', $inputs['inputSupervisionType']);
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
            $result['startPage'] = 0;
        }
        return $result;
    }
    public function getRequestByRequestId($reqId)
    {
        $this->db->select('*');
        $this->db->from('internal_election');
        $this->db->join('candidate', 'candidate.CandidateId = internal_election.CandidateId');
        $this->db->join('state', 'candidate.CandidateStateId = state.StateId');
        $this->db->join('city', 'candidate.CandidateCityId = city.CityId');
        $this->db->order_by('internal_election.RowId', 'ASC');
        $this->db->where(array('RowId' => $reqId));
        $query = $this->db->get();
        return $query->result_array();
    }
    public function doSetSupervisorType($inputs){
        $UserArray = array(
            'AcceptanceStatus' => $inputs['inputAcceptanceStatus'],
            'Description' => $inputs['inputDescription'],
        );
        $this->db->trans_start();
        $this->db->where('RowId', $inputs['inputRowId']);
        $this->db->update('internal_election', $UserArray);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "تعیین وضعیت با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "تعیین وضعیت با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
}
?>