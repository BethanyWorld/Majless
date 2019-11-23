<?php

class ModelAccount extends CI_Model
{
    public function doLogin($inputs)
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where(array('AdminPhone' => $inputs['inputPhone']));
        $this->db->where(array('AdminPassword' => md5($inputs['inputPassword'])));

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $this->session->set_userdata('AdminIsLogged', TRUE);
            $this->session->set_userdata('AdminLoginInfo', $query->result_array());
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