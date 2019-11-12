<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ResetPassword extends CI_Controller{
    public function __construct(){
        parent::__construct();
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Headers: *');
        $this->load->model('ui/ModelCommand');
    }
    public function index(){
        $CSRF = random_string('alnum', 32);
        $this->session->set_userdata('CSRF', $CSRF);
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'بازیابی رمز عبور';
        $data['CSRF'] = $CSRF;
        $data['title'] = 'بازیابی رمز عبور';
        $data['api'] = $this->config->item('api');
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/reset_password/index', $data);
        $this->load->view('ui/v3/reset_password/index_css', $data);
        $this->load->view('ui/v3/reset_password/index_js', $data);
        $this->load->view('ui/v3/static/footer', $data);
    }
    public function submitResetPassword(){
        $inputs = $this->input->post(NULL, TRUE);
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

        $inputs['inputPhone']  = FaToEn($inputs['inputPhone']);
        $inputs['inputCaptcha']  = FaToEn($inputs['inputCaptcha']);

        $this->form_validation->set_rules('inputPhone', 'تلفن', 'trim|xss_clean|required|min_length[11]|max_length[11]|regex_match[/^[0-9]{11}$/]');
        if ($this->form_validation->run() == FALSE) {
            $arr = array(
                'type' => "yellow",
                'content' => validation_errors()
            );
            echo json_encode($arr);
            die();
        }


        $captchaCode = $this->session->userdata['captchaCode'];
        if (strtolower($inputs['inputCaptcha']) == strtolower($captchaCode)) {
            if ($inputs['inputCSRF'] == $this->session->userdata['CSRF']) {
                $result = $this->ModelCommand->submitResetPassword($inputs);
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
}