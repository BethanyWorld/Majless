<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Statistics extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('admin/admin_login');
        $this->load->helper('pipes/pipe');
        $this->load->model('admin/ModelStatistics');
    }
    public function doAddItem(){
        $inputs = $this->input->post(NULL, TRUE);
        $inputs = array_map(function ($v) {
            if(!is_array($v)){
                return strip_tags($v);
            }
        }, $inputs);
        $inputs = array_map(function ($v) {
            return remove_invisible_characters($v);
        }, $inputs);
        $inputs = array_map(function ($v) {
            return makeSafeInput($v);
        }, $inputs);
        $result = $this->ModelStatistics->doAddItem(json_decode($inputs['inputData'] , TRUE));
        echo json_encode($result);
    }
    public function doDeleteItem(){
        $inputs = $this->input->post(NULL, TRUE);
        $result = $this->ModelStatistics->doDeleteItem($inputs);
        echo json_encode($result);
    }


}