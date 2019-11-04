<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('agent/agent_login');
        $this->load->model('agent/ModelProfile');
        $this->load->model('admin/ModelReport');
    }

    public function index()
    {
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . ' پنل نماینده';
        $data['agentInfo'] = $this->ModelProfile->getAgentProfileInfoByAgentId($this->session->userdata('AgentLoginInfo')[0]['AgentId']);

        $data['report']['CandidatesCount'] = $this->ModelReport->getAllCandidatesCount($data['agentInfo']['AgentStateId']);
        $data['report']['ExamsCount'] = $this->ModelReport->getAllExamsCount($data['agentInfo']['AgentId']);
        $data['report']['Roles'] = $this->ModelReport->getRolesCount($data['agentInfo']['AgentStateId']);
        $data['latestCandidates'] = $this->ModelReport->getLatestCandidates($data['agentInfo']['AgentStateId']);

        $this->load->view('agent_panel/static/header', $data);
        $this->load->view('agent_panel/home/index', $data);
        $this->load->view('agent_panel/home/index_js', $data);
        $this->load->view('agent_panel/static/footer');
    }

}
