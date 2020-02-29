<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Utilities extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('admin/admin_login');
        $this->load->helper('pipes/pipe');
        $this->load->model('admin/ModelUtilities');
    }
    public function university(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = '';
        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/utilities/university/home/index', $data);
        $this->load->view('admin_panel/utilities/university/home/index_css');
        $this->load->view('admin_panel/utilities/university/home/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doPagination(){
        $inputs = $this->input->post(NULL, TRUE);
        $data = $this->ModelUtilities->getUniversity($inputs);
        $data['htmlResult'] = $this->load->view('admin_panel/utilities/university/home/pagination', $data, TRUE);
        unset($data['data']);
        echo json_encode($data);
    }
    public function addUniversity(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'افزودن دانشگاه';
        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/utilities/university/add/index', $data);
        $this->load->view('admin_panel/utilities/university/add/index_css');
        $this->load->view('admin_panel/utilities/university/add/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doAddUniversity(){
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
        $result = $this->ModelUtilities->doAddUniversity($inputs);
        echo json_encode($result);
    }
    public function editUniversity($id){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'ویرایش دانشگاه';
        $data['data'] = $this->ModelUtilities->getUniversityById($id)[0];
        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/utilities/university/edit/index', $data);
        $this->load->view('admin_panel/utilities/university/edit/index_css');
        $this->load->view('admin_panel/utilities/university/edit/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doEditUniversity(){
        $inputs = $this->input->post(NULL, TRUE);
        $inputs = array_map(function ($v) {
            return strip_tags($v);
        }, $inputs);
        $inputs = array_map(function ($v) {
            return remove_invisible_characters($v);
        }, $inputs);
        $inputs = array_map(function ($v) {
            return makeSafeInput($v);
        }, $inputs);
        $result = $this->ModelUtilities->doEditUniversity($inputs);
        echo json_encode($result);
    }
    public function doDeleteUniversity(){
        $inputs = $this->input->post(NULL, TRUE);
        $result = $this->ModelUtilities->doDeleteUniversity($inputs);
        echo json_encode($result);
    }


    public function skills(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = '';
        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/utilities/university/home/index', $data);
        $this->load->view('admin_panel/utilities/university/home/index_css');
        $this->load->view('admin_panel/utilities/university/home/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doSkillPagination(){
        $inputs = $this->input->post(NULL, TRUE);
        $data = $this->ModelUtilities->getUniversity($inputs);
        $data['htmlResult'] = $this->load->view('admin_panel/utilities/university/home/pagination', $data, TRUE);
        unset($data['data']);
        echo json_encode($data);
    }
    public function addSkill(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'افزودن دانشگاه';
        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/utilities/university/add/index', $data);
        $this->load->view('admin_panel/utilities/university/add/index_css');
        $this->load->view('admin_panel/utilities/university/add/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doAddSkill(){
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
        $result = $this->ModelUtilities->doAddSkill($inputs);
        echo json_encode($result);
    }
    public function editSkill($id){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'ویرایش دانشگاه';
        $data['data'] = $this->ModelUtilities->getUniversityById($id)[0];
        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/utilities/university/edit/index', $data);
        $this->load->view('admin_panel/utilities/university/edit/index_css');
        $this->load->view('admin_panel/utilities/university/edit/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doEditSkill(){
        $inputs = $this->input->post(NULL, TRUE);
        $inputs = array_map(function ($v) {
            return strip_tags($v);
        }, $inputs);
        $inputs = array_map(function ($v) {
            return remove_invisible_characters($v);
        }, $inputs);
        $inputs = array_map(function ($v) {
            return makeSafeInput($v);
        }, $inputs);
        $result = $this->ModelUtilities->doEditSkill($inputs);
        echo json_encode($result);
    }
    public function doDeleteSkill(){
        $inputs = $this->input->post(NULL, TRUE);
        $result = $this->ModelUtilities->doDeleteSkill($inputs);
        echo json_encode($result);
    }

}