<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Account extends CI_Controller{
    //load models
    public function __construct(){
        parent::__construct();
        $this->load->model('veteran/ModelAccount');
    }
    public function index()
    {
        $this->load->view('veteran_panel/login/index');
        $this->load->view('veteran_panel/login/index_js');
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
        $captchaCode = $this->session->userdata['captchaCode'];
        if (strtolower($inputs['inputCaptcha']) == strtolower($captchaCode)) {
            $result = $this->ModelAccount->doLogin($inputs);
            echo json_encode($result);
        } else {
            $arr = array(
                'type' => "red",
                'content' => "کد امنیتی نامعتبر است"
            );
            echo json_encode($arr);
        }
    }
    //logout admin
    //clear session is enough
    public function doLogOut()
    {
        $this->session->unset_userdata('VeteranLoginInfo');
        $this->session->unset_userdata('VeteranIsLogged');
        redirect(base_url('Veteran/Account'));
    }
}
