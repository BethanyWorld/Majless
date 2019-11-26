<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ContactUs extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('ui/ModelCommand');
    }
	public function index(){
        /*$query = $this->db->query('select CandidateFirstName,CandidateLastName,CandidateNationalCode, data.national_code__code,data.address__city__state__province_part__province__name,data.address__city__state__province_part__name from candidate INNER JOIN data On candidate.CandidateNationalCode = data.national_code__code');
        $result = $query->result_array();
        $index = 0;
        foreach ($result as $item) {
            $this->db->select('*');
            $this->db->from('state');
            $this->db->where('StateName',$item['address__city__state__province_part__province__name']);
            $data = $this->db->get()->result_array();
            $result[$index]['StateId'] = $data[0]['StateId'];
            $index +=1;
        }

        $index = 0;
        foreach ($result as $row) {
            if(isset($row['StateId'])){
                $this->db->select('*');
                $this->db->from('city');
                $this->db->where('CityStateId',$row['StateId']);
                $result[$index]['CityId'] = $this->db->get()->result_array()[0]['CityId'];
            }
            $index +=1;
        }

        foreach ($result as $row) {
            if(isset($row['StateId'])){
                $array = array(

                );
                $this->db->select('*');
                $this->db->from('city');
                $this->db->where('CityStateId',$row['StateId']);
                $result[$index]['CityId'] = $this->db->get()->result_array()[0]['CityId'];
            }
            $index +=1;
        }

        var_dump($result);*/


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
