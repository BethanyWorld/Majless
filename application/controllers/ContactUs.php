<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ContactUs extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('ui/ModelCommand');
    }
	public function index(){

        $CSRF = random_string('alnum', 32);
        $this->session->set_userdata('CSRF', $CSRF);

        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle').'تماس با ما';
        $data['CSRF'] = $CSRF;
        if(isset($_GET['type'])){
            if($_GET['type'] =='contact'){
                $data['title'] = 'تماس با ما';
            }
            else{
                $data['title'] = 'گزارش های مردمی';
            }
        }
        else{
            $data['title'] = 'تماس با ما';
        }
	    $this->load->view('ui/v3/static/header', $data);
	    $this->load->view('ui/v3/contact_us/index' , $data);
        $this->load->view('ui/v3/contact_us/index_css' , $data);
        $this->load->view('ui/v3/contact_us/index_js' , $data);
	    $this->load->view('ui/v3/static/footer', $data);
	}

    public function submitContactForm(){

        $inputs = $this->input->post(NULL, TRUE);
        $inputs = array_map(function ($v) {return strip_tags($v);}, $inputs);
        $inputs = array_map(function ($v) {return remove_invisible_characters($v);}, $inputs);
        $inputs = array_map(function ($v) {return makeSafeInput($v);}, $inputs);
        $captchaCode = $this->session->userdata['captchaCode'];
        if (strtolower($inputs['inputCaptcha']) == strtolower($captchaCode)) {
            if($inputs['inputCSRF'] == $this->session->userdata['CSRF']){
                $this->session->set_userdata('CSRF', "");
                $result = $this->ModelCommand->doSendContactForm($inputs);
                echo json_encode($result);
            }
            else{
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
