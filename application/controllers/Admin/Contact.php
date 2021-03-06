<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contact extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('admin/admin_login');
        $this->load->model('public/ModelContact');
        $this->load->model('ui/ModelCountry');
    }
    public function index(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'ارتباطات مردمی';
        $inputs['pageIndex'] = 1;
        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/contact/home/index');
        $this->load->view('admin_panel/contact/home/index_css');
        $this->load->view('admin_panel/contact/home/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doPagination(){
        $inputs = $this->input->post(NULL, TRUE);
        $data = $this->ModelContact->getContacts($inputs);
        $data['htmlResult'] = $this->load->view('admin_panel/contact/home/pagination', $data, TRUE);
        unset($data['data']);
        echo json_encode($data);
    }
    public function detail($contactRowId){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'مشاهده جزئیات تماس';
        $data['contact'] = $this->ModelContact->getContactByContactId($contactRowId);
        $data['states'] = $this->ModelCountry->getStateList();
        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/contact/detail/index' , $data);
        $this->load->view('admin_panel/contact/detail/index_css');
        $this->load->view('admin_panel/contact/detail/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doChangeVisitState()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $result = $this->ModelContact->doChangeVisitState($inputs);
        echo json_encode($result);
    }


}
