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
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'صفحه کاربری';
        $data['userInfo'] = $this->ModelCandidate->getCandidateByCandidateId($loginInfo['CandidateId']);
        $data['sidebar'] = $this->load->view('ui/v3/candidate_profile/sidebar' , NULL , TRUE);
        $data['firstStepExam'] = $this->ModelCandidate->getCandidateFirstStepExamByCandidateId($loginInfo['CandidateId'])[0];
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
        $agentInfo = $this->ModelExam->getAgentByStateId($loginInfo['CandidateStateId'])[0];
        $data['stateExams'] = $this->ModelExam->getExamsFirstStepByAgentId($agentInfo['AgentId']);

        $data['sidebar'] = $this->load->view('ui/v3/candidate_profile/sidebar' , NULL , TRUE);
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/candidate_profile/first_exam_list/index', $data);
        $this->load->view('ui/v3/candidate_profile/first_exam_list/index_css');
        $this->load->view('ui/v3/candidate_profile/first_exam_list/index_js', $data);
        $this->load->view('ui/v3/static/footer');
    }
    public function examListSecond(){
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $data['title'] = 'فهرست آزمون های مرحله دوم';
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'فهرست آزمون های مرحله دوم';
        $agentInfo = $this->ModelExam->getAgentByStateId($loginInfo['CandidateStateId'])[0];
        $data['stateExams'] = $this->ModelExam->getExamsSecondStepByAgentId($agentInfo['AgentId']);

        $data['sidebar'] = $this->load->view('ui/v3/candidate_profile/sidebar' , NULL , TRUE);
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/candidate_profile/second_exam_list/index', $data);
        $this->load->view('ui/v3/candidate_profile/second_exam_list/index_css');
        $this->load->view('ui/v3/candidate_profile/second_exam_list/index_js', $data);
        $this->load->view('ui/v3/static/footer');
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