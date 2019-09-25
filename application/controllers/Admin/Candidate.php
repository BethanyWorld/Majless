<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Candidate extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('admin/admin_login');
        $this->load->model('admin/ModelCandidate');
        $this->load->model('ui/ModelCountry');
    }

    public function index(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'نامزد های انتخاباتی';
        $inputs['pageIndex'] = 1;

        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/candidate/home/index');
        $this->load->view('admin_panel/candidate/home/index_css');
        $this->load->view('admin_panel/candidate/home/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doPagination(){
        $inputs = $this->input->post(NULL, TRUE);
        $data = $this->ModelCandidate->getCandidate($inputs);
        $data['htmlResult'] = $this->load->view('admin_panel/candidate/home/pagination', $data, TRUE);
        unset($data['data']);
        echo json_encode($data);
    }

    public function add(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'افزودن نامزد انتخاباتی';
        $data['states'] = $this->ModelCountry->getStateList();
        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/candidate/add/index');
        $this->load->view('admin_panel/candidate/add/index_css');
        $this->load->view('admin_panel/candidate/add/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doAdd(){
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $result = $this->ModelCandidate->doAdd($inputs);
        echo json_encode($result);
    }

    public function edit($candidateId){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'ویرایش نامزد انتخاباتی';

        $data['candidate'] = $this->ModelCandidate->getCandidateByCandidateId($candidateId);
        $data['states'] = $this->ModelCountry->getStateList();
        $data['cities'] = $this->ModelCountry->getCityByStateId($data['candidate']['CandidateStateId']);
        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/candidate/edit/index' , $data);
        $this->load->view('admin_panel/candidate/edit/index_css');
        $this->load->view('admin_panel/candidate/edit/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doEdit()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $result = $this->ModelCandidate->doEdit($inputs);
        echo json_encode($result);
    }
    public function doDelete(){
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $result = $this->ModelCandidate->doDelete($inputs);
        echo json_encode($result);
    }

}
