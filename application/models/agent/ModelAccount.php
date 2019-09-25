<?php

class ModelAccount extends CI_Model
{
    public function doLogin($inputs)
    {
        $this->db->select('*');
        $this->db->from('agent');
        $this->db->where(array('AgentPhone' => $inputs['inputPhone']));
        $this->db->where(array('AgentPassword' => md5($inputs['inputPassword'])));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $this->session->set_userdata('AgentIsLogged', TRUE);
            $this->session->set_userdata('AgentLoginInfo', $query->result_array());
            $arr = array(
                'type' => "green",
                'content' => "ورود با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
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