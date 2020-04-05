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
    public function getAllRequests(){
        $this->db->select('*');
        $this->db->from('internal_election');
        $this->db->join('candidate', 'candidate.CandidateId = internal_election.CandidateId');
        $this->db->join('state', 'candidate.CandidateStateId = state.StateId');
        $this->db->join('city', 'candidate.CandidateCityId = city.CityId');
        $this->db->order_by('internal_election.RowId', 'ASC');
        return $this->db->get()->result_array();
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
    public function doVoteSupervisor($inputs){

        $this->db->select('*');
        $this->db->from('internal_election');
        $this->db->where(array(
            'RowId' => $inputs['inputRowId'],
            'CandidateId' => $inputs['inputCandidateId']
        ));
        if($this->db->get()->num_rows() > 0){
            $arr = array(
                'type' => "red",
                'content' => "شما به خود نمی توانید رای بدهید",
                'success' => false
            );
            return $arr;
        }
        else{
            $UserArray = array(
                'InternalElectionId' => $inputs['inputRowId'],
                'CandidateId' => $inputs['inputCandidateId'],
                'CreateDateTime' => jDateTime::date("Y/m/d H:i:s", false, false)
            );
            $this->db->trans_start();
            $this->db->insert('internal_election_votes', $UserArray);
            $this->db->trans_complete();
            if ($this->db->trans_status() === FALSE) {
                $arr = array(
                    'type' => "red",
                    'content' => "رای دهی با مشکل مواجه شد",
                    'success' => false
                );
                return $arr;
            }
            else {
                $arr = array(
                    'type' => "green",
                    'content' => "رای دهی با موفقیت انجام شد",
                    'success' => true
                );
                return $arr;
            }
        }
    }
    public function getVoteByCandidateId($candidateId){
        $this->db->select('*');
        $this->db->from('internal_election_votes');
        $this->db->join('internal_election' , 'internal_election.RowId = internal_election_votes.InternalElectionId');
        $this->db->where('internal_election_votes.CandidateId' , $candidateId);
        return $this->db->get()->result_array();
    }
    public function getVotes($inputs){
        /*$limit = $inputs['pageIndex'];
        $start = ($limit - 1) * $this->config->item('defaultPageSize');
        $end = $this->config->item('defaultPageSize');*/
        $this->db->select(' internal_election.RowId, 
                            internal_election.CandidateId AS ReceiverVoteCandidateId, 
                            internal_election_votes.VoteId, 
                            internal_election_votes.InternalElectionId, 
                            internal_election_votes.CandidateId AS VoterCandidateId, 
                            internal_election_votes.CreateDateTime, 
                            candidate.CandidateId, 
                            state.StateName, 
                            city.CityName, 
                            candidate.CandidateFirstName, 
                            candidate.CandidateLastName');
        $this->db->from('internal_election_votes');
        $this->db->join('internal_election', 'internal_election.RowId = internal_election_votes.InternalElectionId');
        $this->db->join('candidate', 'candidate.CandidateId = internal_election_votes.CandidateId');
        $this->db->join('state', 'candidate.CandidateStateId = state.StateId');
        $this->db->join('city', 'candidate.CandidateCityId = city.CityId');
        $this->db->order_by('internal_election.RowId', 'ASC');
        if (!empty($inputs['inputCandidateState'])) {
            $this->db->where('CandidateStateId', $inputs['inputCandidateState']);
        }
        $tempDb = clone $this->db;
        $result['count'] = $tempDb->get()->num_rows();
        /*$this->db->limit($end, $start);*/
        $query = $this->db->get()->result_array();
        if (count($query) > 0) {
            $index=0;
            foreach ($query as $item) {
                $this->db->select('candidate.CandidateFirstName,candidate.CandidateLastName');
                $this->db->from('candidate');
                $this->db->where('candidate.CandidateId', $item['ReceiverVoteCandidateId']);
                $query[$index]['ReceiverVoteInfo'] = $this->db->get()->result_array()[0];
                $index+=1;
            }
            $result['data'] = $query;
            $result['startPage'] = 0;
        } else {
            $result['data'] = false;
            $result['startPage'] = 0;
        }
        return $result;
    }
}
?>