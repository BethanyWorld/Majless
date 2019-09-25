<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profile extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('admin/admin_login');
        $this->load->model('admin/ModelProfile');
    }
	public function index()
	{
	    $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'ویرایش پروفایل';
        $data['adminInfo'] = $this->ModelProfile->getAdminProfileInfoByAdminId($this->session->userdata('AdminLoginInfo')[0]['AdminId']);

	    $this->load->view('admin_panel/static/header', $data);
	    $this->load->view('admin_panel/profile/index', $data);
        $this->load->view('admin_panel/profile/index_css');
        $this->load->view('admin_panel/profile/index_js');
	    $this->load->view('admin_panel/static/footer');
	}
    public function doUpdateProfile()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $data = $this->ModelProfile->getAdminProfileInfoByAdminId($inputs['inputAdminId']);
        if(isset($inputs['inputAdminOldPassword']) && $inputs['inputAdminOldPassword']!==""){
            if($data['AdminPassword'] !== md5($inputs['inputAdminOldPassword'])){
                echo json_encode(array(
                    'type' => "red",
                    'content' => "رمز عبور فعلی نامعتبر است",
                    'success' => false
                ));
                die();
            }
        }

        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $result = $this->ModelProfile->doUpdateProfile($inputs);
        echo json_encode($result);
    }

}
