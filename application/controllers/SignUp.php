<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignUp extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Headers: *');
        $this->load->model('ui/ModelCommand');
        $this->load->model('ui/ModelCountry');
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
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'ثبت نام';
        $data['states'] = $this->ModelCountry->getStateList();
        $data['CSRF'] = $CSRF;
        $data['title'] = 'ثبت نام';
        $data['signUpType'] = $this->input->get('type');
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/signup/index', $data);
        $this->load->view('ui/v3/signup/index_css', $data);
        $this->load->view('ui/v3/signup/index_js', $data);
        $this->load->view('ui/v3/static/footer', $data);
    }
    public function submitSignUpForm(){
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
        $captchaCode = $this->session->userdata['captchaCode'];
        if (strtolower($inputs['inputCaptcha']) == strtolower($captchaCode)) {
            if ($inputs['inputCSRF'] == $this->session->userdata['CSRF']) {
                $result = $this->ModelCommand->doSubmitSignUpFormForm($inputs);
                echo json_encode($result);
            } else {
                $arr = array(
                    'type' => "red",
                    'content' => "کد CSRF نامعتبر است"
                );
                echo json_encode($arr);
            }
        } else {
            $arr = array(
                'type' => "red",
                'content' => "کد امنیتی نامعتبر است"
            );
            echo json_encode($arr);
        }
    }
    public function checkCaptcha()
    {
        $inputs = $this->input->post(NULL, TRUE);
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
    public function changeSignUpInfo()
    {
        $data = file_get_contents("php://input");
        $data = json_decode($data, true);
        $stateId = $this->ModelCountry->getStateIdByStateName($data['inputSignUpProvinceName'])[0]['StateId'];
        $cityId = $this->ModelCountry->getStateCityIdByCityName($data['inputSignUpCityName'])[0]['CityId'];

        /*$electionStateId = $this->ModelCountry->getStateIdByStateName($data['inputSignUpElectionProvinceName'])[0]['StateId'];*/
        $electionCityId = $this->ModelCountry->getStateCityIdByCityName($data['inputSignUpElectionCityName'])[0]['CityId'];
        $electionId = $this->ModelCountry->getElectionIdByCityId($electionCityId)[0]['ElectionId'];

        $data['inputStateId'] = $stateId;
        $data['inputCityId'] = $cityId;
        $data['inputElectionId'] = $electionId;
        $headers = $this->input->request_headers();
        if ($headers['Secretkey'] == md5('majles11')) {
            if ($this->ModelCommand->doCheckDuplicateSignUpInfo($data)) {
                $result = $this->ModelCommand->doChangeSignUpInfo($data);
                echo json_encode($result);
            } else {
                $arr = array(
                    'type' => "red",
                    'content' => "کد ملی جدید قبلا در سامانه ثبت شده است"
                );
                echo json_encode($arr);
            }
        }
        else {
            $arr = array(
                'type' => "red",
                'content' => "درخواست CSRF  نامعتبر است"
            );
            echo json_encode($arr);
        }
    }
    public function changeCandidateState(){
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
        $result = $this->ModelCommand->doChangeCandidateState($inputs);
        echo json_encode($result);
    }

}