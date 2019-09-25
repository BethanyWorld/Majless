<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ReportAbuse extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('agent/agent_login');
        $this->load->model('public/ModelReportAbuse');
        $this->load->model('ui/ModelCountry');
    }
    public function index(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'گزارش تخلف';
        $inputs['pageIndex'] = 1;
        $this->load->view('agent_panel/static/header', $data);
        $this->load->view('agent_panel/report_abuse/home/index');
        $this->load->view('agent_panel/report_abuse/home/index_css');
        $this->load->view('agent_panel/report_abuse/home/index_js');
        $this->load->view('agent_panel/static/footer');
    }
    public function doPagination(){
        $inputs = $this->input->post(NULL, TRUE);
        $stateId = $this->session->userdata('AgentLoginInfo')[0]['AgentStateId'];
        $inputs['inputReportAbuseStateId'] = $stateId;
        $data = $this->ModelReportAbuse->getReportAbuses($inputs);
        $data['htmlResult'] = $this->load->view('agent_panel/report_abuse/home/pagination', $data, TRUE);
        unset($data['data']);
        echo json_encode($data);
    }
    public function detail($reportId){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'مشاهده جزئیات تماس';
        $data['reportAbuse'] = $this->ModelReportAbuse->getReportAbuseByReportAbuseId($reportId);
        $data['states'] = $this->ModelCountry->getStateList();
        $this->load->view('agent_panel/static/header', $data);
        $this->load->view('agent_panel/report_abuse/detail/index' , $data);
        $this->load->view('agent_panel/report_abuse/detail/index_css');
        $this->load->view('agent_panel/report_abuse/detail/index_js');
        $this->load->view('agent_panel/static/footer');
    }
    public function doChangeVisitState()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $result = $this->ModelReportAbuse->doChangeVisitState($inputs);
        echo json_encode($result);
    }

}
