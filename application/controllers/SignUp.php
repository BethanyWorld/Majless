<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SignUp extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ui/ModelCommand');
        $this->load->model('ui/ModelCountry');
        $this->load->library('SoapSMS');
    }
    public function index()
    {
        $inputs = $this->input->get(NULL, TRUE);
        $inputs = array_map(function ($v) {
            return strip_tags($v);
        }, $inputs);
        $inputs = array_map(function ($v) {
            return remove_invisible_characters($v);
        }, $inputs);
        $inputs = array_map(function ($v) {
            return makeSafeInput($v);
        }, $inputs);
        $data['defaultValue'] = $inputs;
        $CSRF = random_string('alnum', 32);
        $this->session->set_userdata('CSRF', $CSRF);
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'ثبت نام در سامانه جنبش از ما';
        $data['states'] = $this->ModelCountry->getStateList();
        $data['CSRF'] = $CSRF;
        $data['title'] = 'ثبت نام در سامانه جنبش از ما';
        $data['description'] = 'ثبت نام در سامانه جنبش از ما';
        $data['signUpType'] = $this->input->get('type');
        $data['api'] = $this->config->item('api');
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/signup/index', $data);
        $this->load->view('ui/v3/signup/index_css', $data);
        $this->load->view('ui/v3/signup/index_js', $data);
        $this->load->view('ui/v3/static/footer', $data);
    }
    public function submitSignUpForm()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputSignUpType = $inputs['inputSignUpType'];
        unset($inputs['inputSignUpType']);
        $inputs = array_map(function ($v) {
            return strip_tags($v);
        }, $inputs);
        $inputs = array_map(function ($v) {
            return remove_invisible_characters($v);
        }, $inputs);
        $inputs = array_map(function ($v) {
            return makeSafeInput($v);
        }, $inputs);
        $inputs['inputSignUpType'] = $inputSignUpType;

        $this->form_validation->set_data($inputs);
        $this->form_validation->set_rules('inputSignUpFirstName', 'نام', 'trim|xss_clean|required|min_length[1]|max_length[80]');
        $this->form_validation->set_rules('inputSignUpLastName', 'نام خانوادگی', 'trim|xss_clean|required|min_length[1]|max_length[80]');
        $this->form_validation->set_rules('inputSignUpPhone', 'تلفن', 'trim|xss_clean|required|min_length[11]|max_length[11]');
        $this->form_validation->set_rules('inputSignUpStateId', 'استان', 'trim|xss_clean|required|min_length[1]|numeric|greater_than[0]');
        $this->form_validation->set_rules('inputSignUpCityId', 'شهر', 'trim|xss_clean|required|min_length[1]|numeric|greater_than[0]');
        $this->form_validation->set_rules('inputCaptcha', 'کد امنیتی', 'trim|required|min_length[5]|max_length[5]');
        $this->form_validation->set_rules('inputSignUpType[]', "عنوان ثبت نام", "trim|xss_clean|numeric|greater_than[0]|less_than[4]");


        if ($this->form_validation->run() == FALSE) {
            $arr = array(
                'type' => "yellow",
                'content' => validation_errors()
            );
            echo json_encode($arr);
            die();
        }


        $inputs['inputSignUpPhone'] = FaToEn($inputs['inputSignUpPhone']);
        $inputs['inputCaptcha'] = FaToEn($inputs['inputCaptcha']);
        $inputs['inputSignUpNationalCode'] = FaToEn($inputs['inputSignUpNationalCode']);

        $electionId = $this->ModelCountry->getElectionIdByCityId($inputs['inputSignUpCityId'])[0]['ElectionId'];

        $inputs['inputElectionId'] = $electionId;
        $captchaCode = $this->session->userdata['captchaCode'];
        if (strtolower($inputs['inputCaptcha']) == strtolower($captchaCode)) {
            if ($inputs['inputCSRF'] == $this->session->userdata['CSRF']) {
                $result = $this->ModelCommand->doSubmitSignUpForm($inputs);
                echo json_encode($result);
            } else {
                $arr = array(
                    'type' => "yellow",
                    'content' => "کد CSRF نامعتبر است",
                    'success' => true
                );
                echo json_encode($arr);
            }
        } else {
            $arr = array(
                'type' => "red",
                'content' => "کد امنیتی نامعتبر است",
                'success' => true
            );
            echo json_encode($arr);
        }
    }
    public function checkCaptcha()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs['inputCaptcha'] = FaToEn($inputs['inputCaptcha']);
        $captchaCode = $this->session->userdata['captchaCode'];
        if (strtolower($inputs['inputCaptcha']) == strtolower($captchaCode)) {
            $arr = array(
                'success' => true,
                'type' => "green",
                'content' => "کد امنیتی معتبر است"
            );
            echo json_encode($arr);
        } else {
            $arr = array(
                'success' => false,
                'type' => "red",
                'content' => "کد امنیتی نامعتبر است"
            );
            echo json_encode($arr);
        }
    }
    public function changeCandidateState()
    {
        $loginInfo = $this->session->userdata('UserLoginInfo');
        if (!$loginInfo) {
            $result = array(
                'type' => "warning",
                'content' => "ابتدا وارد سامانه شوید",
                'success' => true
            );
            echo json_encode($result);
            die();
        }

        if ($loginInfo['CandidateStatus'] != 'CandidateRegister' &&
            $loginInfo['CandidateStatus'] != 'CandidateResumeCompleted' &&
            $loginInfo['CandidateStatus'] != 'CandidateResumeAccepted' &&
            $loginInfo['CandidateStatus'] != 'CandidateResumeRejected') {
            $result = array(
                'type' => "warning",
                'content' => "دسترسی لازم را ندارید",
                'success' => true
            );
            echo json_encode($result);
            return false;
        }


        $inputs = $this->input->post(NULL, TRUE);
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $inputs['inputCandidateId'] = $loginInfo['CandidateId'];
        $inputs = array_map(function ($v) {
            return strip_tags($v);
        }, $inputs);
        $inputs = array_map(function ($v) {
            return remove_invisible_characters($v);
        }, $inputs);
        $inputs = array_map(function ($v) {
            return makeSafeInput($v);
        }, $inputs);

        if ($inputs['inputCandidateStatus'] == 'CandidateRegister' || $inputs['inputCandidateStatus'] == 'CandidateResumeCompleted' || $inputs['inputCandidateStatus'] == 'CandidateResumeAccepted' || $inputs['inputCandidateStatus'] == 'CandidateResumeRejected') {
            $result = $this->ModelCommand->doChangeCandidateState($inputs);
            echo json_encode($result);
        } else {
            $result = array(
                'type' => "red",
                'content' => "دسترسی به عملیات را ندارید",
                'success' => true
            );
            echo json_encode($result);
        }
    }
}