<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Veteran extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('admin/admin_login');
        $this->load->model('admin/ModelVeteran');
        $this->load->model('ui/ModelCountry');
    }
    public function index(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'پشتیبان پنل ایثارگر';
        $inputs['pageIndex'] = 1;
        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/veteran/home/index');
        $this->load->view('admin_panel/veteran/home/index_css');
        $this->load->view('admin_panel/veteran/home/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doPagination(){
        $inputs = $this->input->post(NULL, TRUE);
        $data = $this->ModelVeteran->getVeterans($inputs);
        $data['htmlResult'] = $this->load->view('admin_panel/veteran/home/pagination', $data, TRUE);
        unset($data['data']);
        echo json_encode($data);
    }
    public function add(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'افزودن نماینده';
        $data['states'] = $this->ModelCountry->getStateList();
        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/veteran/add/index');
        $this->load->view('admin_panel/veteran/add/index_css');
        $this->load->view('admin_panel/veteran/add/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doAdd()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $result = $this->ModelVeteran->doAdd($inputs);
        echo json_encode($result);
    }

    public function edit($VeteranId){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'ویرایش نماینده';

        $data['veteran'] = $this->ModelVeteran->getVeteranByVeteranId($VeteranId);

        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/veteran/edit/index' , $data);
        $this->load->view('admin_panel/veteran/edit/index_css');
        $this->load->view('admin_panel/veteran/edit/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doEdit()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $result = $this->ModelVeteran->doEdit($inputs);
        echo json_encode($result);
    }
    public function doDelete()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $result = $this->ModelVeteran->doDelete($inputs);
        echo json_encode($result);
    }

}
