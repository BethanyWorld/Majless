<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profile extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('agent/agent_login');
        $this->load->model('agent/ModelProfile');
    }
	public function index()
	{
	    $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'ویرایش پروفایل';
        $data['agentInfo'] = $this->ModelProfile->getAgentProfileInfoByAgentId($this->session->userdata('AgentLoginInfo')[0]['AgentId']);

	    $this->load->view('agent_panel/static/header', $data);
	    $this->load->view('agent_panel/profile/index', $data);
        $this->load->view('agent_panel/profile/index_css');
        $this->load->view('agent_panel/profile/index_js');
	    $this->load->view('agent_panel/static/footer');
	}
    public function doUpdateProfile()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $data = $this->ModelProfile->getAgentProfileInfoByAgentId($inputs['inputAgentId']);
        if(isset($inputs['inputAgentOldPassword']) && $inputs['inputAgentOldPassword']!==""){
            if($data['AgentPassword'] !== md5($inputs['inputAgentOldPassword'])){
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
