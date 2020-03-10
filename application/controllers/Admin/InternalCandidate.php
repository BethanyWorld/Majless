<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class InternalCandidate extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('admin/admin_login');
        $this->load->model('admin/ModelCandidate');
        $this->load->model('admin/ModelInternalCandidate');
        $this->load->model('ui/ModelCountry');
        $this->load->model('ui/ModelProfile');
    }
    public function index(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'داوطلبان نظارت';
        $data['enumCandidateStatus'] = $this->config->item('EnumCandidateStatus');
        $data['EnumResumeProfile'] = $this->config->item('EnumResumeProfile');
        $data['states'] = $this->ModelCountry->getStateList();

        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/candidate/internal_candidate/home/index');
        $this->load->view('admin_panel/candidate/internal_candidate/home/index_css');
        $this->load->view('admin_panel/candidate/internal_candidate/home/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doPagination()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $data = $this->ModelInternalCandidate->getRequests($inputs);
        $data['htmlResult'] = $this->load->view('admin_panel/candidate/internal_candidate/home/pagination', $data, TRUE);
        unset($data['data']);
        echo json_encode($data);
    }
    public function edit($requestId){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['gifLoader'] = $this->config->item('gifLoader');
        $data['pageTitle'] = 'ویرایش نامزد انتخاباتی';
        $data['EnumResumeProfile'] = $this->config->item('EnumResumeProfile');
        $data['request'] = $this->ModelInternalCandidate->getRequestByRequestId($requestId)[0];
        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/candidate/internal_candidate/detail/index', $data);
        $this->load->view('admin_panel/candidate/internal_candidate/detail/index_css');
        $this->load->view('admin_panel/candidate/internal_candidate/detail/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doSetSupervisorType(){
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
        $result = $this->ModelInternalCandidate->doSetSupervisorType($inputs);
        echo json_encode($result);
    }
}