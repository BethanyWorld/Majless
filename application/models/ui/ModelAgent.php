<?php

class ModelAgent extends CI_Model{

    public function getAgentByAgentStateId($stateId)
    {
        $this->db->select('*');
        $this->db->from('agent');
        $this->db->where(array('AgentStateId' => $stateId));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array()[0];
        }
        $arr = array(
            'type' => "red",
            'content' => "اطلاعات نامعتبر است",
            'success' => false
        );
        return $arr;
    }
}

?>