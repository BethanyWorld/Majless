<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Exams extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('agent/agent_login');
        $this->load->helper('pipes/pipe');
        $this->load->model('agent/ModelExam');
    }
    public function index(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'آزمون ها';
        $this->load->view('agent_panel/static/header', $data);
        $this->load->view('agent_panel/exams/home/index', $data);
        $this->load->view('agent_panel/exams/home/index_css');
        $this->load->view('agent_panel/exams/home/index_js');
        $this->load->view('agent_panel/static/footer');
    }
    public function doPagination(){
        $inputs = $this->input->post(NULL, TRUE);
        $data = $this->ModelExam->getExamByAgentId($inputs);
        $data['htmlResult'] = $this->load->view('agent_panel/exams/home/pagination', $data, TRUE);
        unset($data['data']);
        echo json_encode($data);
    }

    public function add(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'افزودن آزمون';
        $agentId = $this->session->userdata('AgentLoginInfo')[0]['AgentId'];
        $data['examType'] = $this->config->item('EnumExamType');
        $data['examPlaces'] = $this->ModelExam->getAllExamPlacesByAgentId($agentId);
        $this->load->view('agent_panel/static/header', $data);
        $this->load->view('agent_panel/exams/add/index', $data);
        $this->load->view('agent_panel/exams/add/index_css');
        $this->load->view('agent_panel/exams/add/index_js');
        $this->load->view('agent_panel/static/footer');
    }
    public function doAdd(){
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
        $result = $this->ModelExam->doAddExam($inputs);
        echo json_encode($result);
    }
    public function edit($id)
    {
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'ویرایش آزمون';
        $data['data'] = $this->ModelExam->getExamByExamId($id)[0];
        $agentId = $this->session->userdata('AgentLoginInfo')[0]['AgentId'];
        $data['examType'] = $this->config->item('EnumExamType');
        $data['examPlaces'] = $this->ModelExam->getAllExamPlacesByAgentId($agentId);

        $this->load->view('agent_panel/static/header', $data);
        $this->load->view('agent_panel/exams/edit/index', $data);
        $this->load->view('agent_panel/exams/edit/index_css');
        $this->load->view('agent_panel/exams/edit/index_js');
        $this->load->view('agent_panel/static/footer');
    }
    public function doEdit(){
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
        $result = $this->ModelExam->doEditExam($inputs);
        echo json_encode($result);
    }
    public function doDelete()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $result = $this->ModelExam->doDeleteExam($inputs);
        echo json_encode($result);
    }

    public function requests($examId){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'متقاضیان آزمون';
        $data['examData'] = $this->ModelExam->getExamByExamId($examId)[0];
        $data['candidates'] = $this->ModelExam->getExamRequestByExamId($examId);
        $data['api'] = $this->config->item('api');
        $this->load->view('agent_panel/static/header', $data);
        $this->load->view('agent_panel/exams/requests/index', $data);
        $this->load->view('agent_panel/exams/requests/index_css');
        $this->load->view('agent_panel/exams/requests/index_js', $data);
        $this->load->view('agent_panel/static/footer');
    }
    public function doPresenceCandidateFirstExam(){
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
        $result = $this->ModelExam->doPresenceCandidateFirstExam($inputs);
        echo json_encode($result);
    }
    public function doAbsenceCandidateFirstExam(){
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
        $result = $this->ModelExam->doAbsenceCandidateFirstExam($inputs);
        echo json_encode($result);
    }

    public function doPresenceCandidateSecondExam(){
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
        $result = $this->ModelExam->doPresenceCandidateSecondExam($inputs);
        echo json_encode($result);
    }
    public function doAbsenceCandidateSecondExam(){
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
        $result = $this->ModelExam->doAbsenceCandidateSecondExam($inputs);
        echo json_encode($result);
    }

}