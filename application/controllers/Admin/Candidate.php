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
        $data['enumCandidateStatus'] = $this->config->item('EnumCandidateStatus');
        $data['states'] = $this->ModelCountry->getStateList();

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

    public function edit($candidateId){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['gifLoader'] = $this->config->item('gifLoader');
        $data['pageTitle'] = 'ویرایش نامزد انتخاباتی';
        $data['candidate'] = $this->ModelCandidate->getCandidateByCandidateId($candidateId);
        $data['exams'] = $this->getCandidateExams($candidateId);

        $data['api'] = $this->config->item('api');

        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/candidate/edit/index' , $data);
        $this->load->view('admin_panel/candidate/edit/index_css');
        $this->load->view('admin_panel/candidate/edit/index_js' , $data);
        $this->load->view('admin_panel/static/footer');
    }
    public function doMarkCandidate(){
        $inputs = $this->input->post(NULL, TRUE);
        $candidateInfo = $this->getCandidateStatus($inputs['inputCandidateId']);
        $candidateStatus = $candidateInfo['CandidateStatus'];
        if($candidateStatus == 'CandidateHasContinueCondition'){
            $inputs['inputCandidateStatus'] = 'CandidateResumeMarked';
            $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
            $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
            $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
            $result = $this->ModelCandidate->doMarkCandidate($inputs);
            $result['senderNumber'] = $candidateInfo['CandidatePhone'];
            echo json_encode($result);
        }
        else{
            $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
            $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
            $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
            $result = $this->ModelCandidate->doUpdateMarkCandidate($inputs);
            echo json_encode($result);
        }
    }

    public function doAcceptCandidateFirstExam(){
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $result = $this->ModelCandidate->doAcceptCandidateFirstExam($inputs);
        echo json_encode($result);
    }
    public function doRejectCandidateFirstExam()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $result = $this->ModelCandidate->doRejectCandidateFirstExam($inputs);
        echo json_encode($result);
    }

    public function doAcceptCandidateSecondExam(){
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $result = $this->ModelCandidate->doAcceptCandidateSecondExam($inputs);
        echo json_encode($result);
    }
    public function doRejectCandidateSecondExam()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $result = $this->ModelCandidate->doRejectCandidateSecondExam($inputs);
        echo json_encode($result);
    }

    public function doAcceptEvaluationExam(){
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $result = $this->ModelCandidate->doAcceptEvaluationExam($inputs);
        echo json_encode($result);
    }
    public function doRejectEvaluationExam()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $result = $this->ModelCandidate->doRejectEvaluationExam($inputs);
        echo json_encode($result);
    }


    protected function getCandidateStatus($candidateId){
        return $this->ModelCandidate->getCandidateByCandidateId($candidateId);
    }
    protected function getCandidateExams($candidateId){
        $data['firstExams'] = $this->ModelCandidate->getCandidateFirstStepExamByCandidateId($candidateId);
        $data['secondExams'] = $this->ModelCandidate->getCandidateSecondStepExamByCandidateId($candidateId);
        $data['evalExams'] = $this->ModelCandidate->getCandidateEvaluationExamByCandidateId($candidateId);

        $data['firstExams'] = array_reverse($data['firstExams']);
        $data['secondExams'] = array_reverse($data['secondExams']);
        $data['evalExams'] = array_reverse($data['evalExams']);
        return $data;
    }

}