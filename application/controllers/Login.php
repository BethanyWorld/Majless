<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ui/ModelQuery');
        $this->load->model('ui/ModelCountry');
    }
    public function index(){
        $CSRF = random_string('alnum', 32);
        $this->session->set_userdata('CSRF', $CSRF);
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'ورود به سامانه جنبش از ما';
        $data['states'] = $this->ModelCountry->getStateList();
        $data['CSRF'] = $CSRF;
        $data['title'] = 'ورود به سامانه جنبش از ما';
        $data['description'] = 'ورود به سامانه جنبش از ما';
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/login/index', $data);
        $this->load->view('ui/v3/login/index_css');
        $this->load->view('ui/v3/login/index_js', $data);
        $this->load->view('ui/v3/static/footer', $data);
    }
    public function doLogin()
    {
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

        $inputs['inputPhone'] = FaToEn($inputs['inputPhone']);
        $inputs['inputPassword'] = FaToEn($inputs['inputPassword']);

        $this->form_validation->set_rules('inputPhone', 'تلفن', 'trim|xss_clean|required|min_length[11]|max_length[11]');
        $this->form_validation->set_rules('inputPassword', 'شهر', 'trim|xss_clean|required|min_length[1]|max_length[80]');
        if ($this->form_validation->run() == FALSE) {
            $arr = array(
                'type' => "yellow",
                'content' => validation_errors()
            );
            echo json_encode($arr);
            die();
        }


        if ($inputs['inputCSRF'] == $this->session->userdata['CSRF']) {
            $result = $this->ModelQuery->doLogin($inputs);
            echo json_encode($result);
        } else {
            $arr = array(
                'type' => "red",
                'content' => "کد CSRF نامعتبر است"
            );
            echo json_encode($arr);
        }
    }
}