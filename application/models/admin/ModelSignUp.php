<?php
class ModelSignUp extends CI_Model{

    public function doExportReport($inputs){
        $this->db->select('*');
        $this->db->from('form_signup');
        $this->db->where('CreateDateTime >= ' ,  $inputs['inputFromDate']);
        $this->db->where('CreateDateTime <= ' ,  $inputs['inputToDate']);
        return $this->db->get()->result_array();
    }
}

?>