<?php

class ModelAgent extends CI_Model{
    public function getAllAgents()
    {
        $this->db->select('*');
        $this->db->from('agent');
        $this->db->join('state' , 'agent.agentStateId = state.StateId');
        $this->db->order_by('AgentId', 'DESC');
        return $this->db->get()->result_array();
    }
    public function getAgents($inputs)
    {
        $limit = $inputs['pageIndex'];
        $start = ($limit - 1) * $this->config->item('defaultPageSize');
        $end = $this->config->item('defaultPageSize');
        $this->db->select('*');
        $this->db->from('agent');
        $this->db->join('state' , 'agent.agentStateId = state.StateId');
        $this->db->order_by('AgentId', 'DESC');

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
    public function getAgentByAgentId($productId)
    {
        $this->db->select('*');
        $this->db->from('agent');
        $this->db->where(array('AgentId' => $productId));
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

    public function doAdd($inputs)
    {
        $this->db->trans_start();
        $UserArray = array(
            'AgentFullName' => $inputs['inputAgentFullName'],
            'AgentPhone' => $inputs['inputAgentPhone'],
            'AgentStateId' => $inputs['inputAgentStateId']
        );
        $this->db->insert('agent', $UserArray);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "درج نماینده با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "درج نماینده با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }


    }
    public function doEdit($inputs)
    {
        $UserArray = array(
            'AgentFullName' => $inputs['inputAgentFullName'],
            'AgentPhone' => $inputs['inputAgentPhone'],
            'AgentStateId' => $inputs['inputAgentStateId']
        );
        $this->db->trans_start();
        $this->db->where('AgentId' , $inputs['inputAgentId']);
        $this->db->update('agent', $UserArray);
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
        $this->db->delete('agent', array(
            'AgentId' =>  $inputs['inputAgentId']
        ));
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "حذف نماینده با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "حذف نماینده با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }


    }

}

?>