<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Controller to Handle Admin Login/Logout
 * @author MohammadrezaEsmaeeli (info@mreweb.ir)
 * @license GPL
 * */
class Account extends CI_Controller{
    //load models
    public function __construct(){
        parent::__construct();
        $this->load->model('agent/ModelAccount');
    }
    //load view
    public function index()
    {
        $this->load->view('agent_panel/login/index');
        $this->load->view('agent_panel/login/index_css');
        $this->load->view('agent_panel/login/index_js');
    }
    /**
     * Function to LogIn Admin
     * @params Array inputs - array of username and password
     * @return string - in json format
     * @author MohammadrezaEsmaeeli (info@mreweb.ir)
     * @license GPL
     * */
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
    //load view
    public function resetPassword()
    {
        $this->load->view('agent_panel/reset_password/index');
        $this->load->view('agent_panel/reset_password/index_css');
        $this->load->view('agent_panel/reset_password/index_js');
    }

    public function doResetPassword()
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
            $result = $this->ModelAccount->doResetPassword($inputs);
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
        $this->session->unset_userdata('AgentLoginInfo');
        $this->session->unset_userdata('AgentIsLogged');
        redirect(base_url('Agent/Account'));
    }

}
