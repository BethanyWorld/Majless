<?php
class ModelProfile extends CI_Model{
    public function getAgentProfileInfoByAgentId($userId)
    {
        $this->db->select('*');
        $this->db->from('agent');
        $this->db->where(array('AgentId' => $userId));
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
    
    public function doUpdateProfile($inputs){
        $Array = array(
            'AgentFullName' => $inputs['inputAgentFullName'],
            'AgentPhone' => $inputs['inputAgentPhone']
        );
        if($inputs['inputAgentNewPassword'] !== NULL && $inputs['inputAgentNewPassword'] !== ""){
            $Array['AgentPassword'] = md5($inputs['inputAgentNewPassword']);
        }
        $this->db->trans_start();
        $this->db->where('AgentId', $inputs['inputAgentId']);
        $this->db->update('agent', $Array);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "بروزرسانی ناموفق بود",
                'success' => false
            );
            return $arr;
        }
        else {
            $arr = array(
                'type' => "green",
                'content' => "بروزرسانی با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }

}

?>