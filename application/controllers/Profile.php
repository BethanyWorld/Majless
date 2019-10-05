<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profile extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('ui/user_login');
        $this->load->model('ui/ModelCountry');
        $this->load->model('admin/ModelCandidate');
        $this->load->model('agent/ModelExam');
    }
    public function index(){
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $data['title'] = 'صفحه کاربری';
        $data['noImg'] = $this->config->item('defaultImage');
        $data['gifLoader'] = $this->config->item('gifLoader');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'صفحه کاربری';
        $data['userInfo'] = $this->ModelCandidate->getCandidateByCandidateId($loginInfo['CandidateId']);
        $data['sidebar'] = $this->load->view('ui/v3/candidate_profile/sidebar' , NULL , TRUE);

        $data['allFirstStepExamRequests'] = $this->ModelCandidate->getCandidateFirstStepExamByCandidateId($loginInfo['CandidateId']);
        $data['firstStepExam'] = $data['allFirstStepExamRequests'];
        if(isset($data['firstStepExam']) && !empty($data['firstStepExam'])){
            $data['firstStepExam'] = $data['firstStepExam'][0];
        }

        $data['allSecondStepExamRequests'] = $this->ModelCandidate->getCandidateSecondStepExamByCandidateId($loginInfo['CandidateId']);
        $data['secondStepExam'] = $data['allSecondStepExamRequests'];
        if(isset($data['secondStepExam']) && !empty($data['secondStepExam'])){
            $data['secondStepExam'] = $data['secondStepExam'][0];
        }

        $data['allEvaluationExamRequests'] = $this->ModelCandidate->getCandidateEvaluationExamByCandidateId($loginInfo['CandidateId']);
        $data['EvaluationExam'] = $data['allEvaluationExamRequests'];
        if(isset($data['EvaluationExam']) && !empty($data['EvaluationExam'])){
            $data['EvaluationExam'] = $data['EvaluationExam'][0];
        }

        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/candidate_profile/home/index', $data);
        $this->load->view('ui/v3/candidate_profile/home/index_css');
        $this->load->view('ui/v3/candidate_profile/home/index_js', $data);
        $this->load->view('ui/v3/static/footer');
    }
    public function candidateHasOtherConditionToContinue(){
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $result = $this->ModelCandidate->candidateHasOtherConditionToContinue($inputs);
        echo json_encode($result);
    }

    public function examList(){
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $data['title'] = 'فهرست آزمون های مرحله اول';
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'فهرست آزمون های مرحله اول';
        $data['states'] = $this->ModelCountry->getStateList();
        $data['candidateStateId'] = $loginInfo['CandidateStateId'];
        $data['sidebar'] = $this->load->view('ui/v3/candidate_profile/sidebar' , NULL , TRUE);
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/candidate_profile/first_exam_list/index', $data);
        $this->load->view('ui/v3/candidate_profile/first_exam_list/index_css');
        $this->load->view('ui/v3/candidate_profile/first_exam_list/index_js', $data);
        $this->load->view('ui/v3/static/footer');
    }
    public function getFirstStepExamList($stateId){
        $data['data'] = $this->ModelExam->getFirstStepExamByStateId($stateId);
        $data['htmlResult'] = $this->load->view('ui/v3/candidate_profile/first_exam_list/pagination', $data, TRUE);
        unset($data['data']);
        echo json_encode($data);
    }

    public function examListSecond(){
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $data['title'] = 'فهرست آزمون های مرحله اول';
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'فهرست آزمون های مرحله دوم';
        $data['states'] = $this->ModelCountry->getStateList();
        $data['candidateStateId'] = $loginInfo['CandidateStateId'];
        $data['sidebar'] = $this->load->view('ui/v3/candidate_profile/sidebar' , NULL , TRUE);
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/candidate_profile/second_exam_list/index', $data);
        $this->load->view('ui/v3/candidate_profile/second_exam_list/index_css');
        $this->load->view('ui/v3/candidate_profile/second_exam_list/index_js', $data);
        $this->load->view('ui/v3/static/footer');
    }
    public function getSecondStepExamList($stateId){
        $data['data'] = $this->ModelExam->getSecondStepExamByStateId($stateId);
        $data['htmlResult'] = $this->load->view('ui/v3/candidate_profile/second_exam_list/pagination', $data, TRUE);
        unset($data['data']);
        echo json_encode($data);
    }

    public function evaluationExam(){
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $data['title'] = 'فهرست آزمون کانون ارزیابی';
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'فهرست آزمون کانون ارزیابی';
        $data['states'] = $this->ModelCountry->getStateList();
        $data['candidateStateId'] = $loginInfo['CandidateStateId'];
        $data['sidebar'] = $this->load->view('ui/v3/candidate_profile/sidebar' , NULL , TRUE);
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/candidate_profile/evaluation_exam_list/index', $data);
        $this->load->view('ui/v3/candidate_profile/evaluation_exam_list/index_css');
        $this->load->view('ui/v3/candidate_profile/evaluation_exam_list/index_js', $data);
        $this->load->view('ui/v3/static/footer');
    }
    public function getEvaluationExamList(){
        $data['data'] = $this->ModelExam->getEvaluationExamList();
        $data['htmlResult'] = $this->load->view('ui/v3/candidate_profile/evaluation_exam_list/pagination', $data, TRUE);
        unset($data['data']);
        echo json_encode($data);
    }

    public function candidateReserveExam(){
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $result = $this->ModelCandidate->candidateReserveExam($inputs);
        echo json_encode($result);
    }
    /* get out of panel - session destroyed */
    public function logOut(){
        $this->session->unset_userdata('UserLoginInfo');
        $this->session->unset_userdata('UserIsLogged');
       redirect(base_url());
    }
}