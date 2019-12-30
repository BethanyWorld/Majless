<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Reports extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('admin/admin_login');
        $this->load->model('admin/ModelProfile');
        $this->load->model('admin/ModelReport');
    }
    public function index(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle').'گزارشات';
        $data['adminInfo'] = $this->ModelProfile->getAdminProfileInfoByAdminId($this->session->userdata('AdminLoginInfo')[0]['AdminId']);

        $data['report']['CandidatesCount'] = $this->ModelReport->getAllCandidatesCount();
        $data['report']['ReportAbusesCount'] = $this->ModelReport->getAllReportAbusesCount();
        $data['report']['ExamsCount'] = $this->ModelReport->getAllExamsCount();
        $data['report']['ExamRequestsCount'] = $this->ModelReport->getAllExamRequestsCount();
        $data['report']['StateCandidatesCount'] = $this->ModelReport->getStateCandidatesCount();
        $data['report']['Roles'] = $this->ModelReport->getRolesCount();
        $data['report']['GenderCount'] = $this->ModelReport->getGenderCount();
        $data['latestCandidates'] = $this->ModelReport->getLatestCandidates();
        $data['report']['todaySignUpCount'] = $this->ModelReport->getTodayCandidates();
        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/reports/home/index', $data);
        $this->load->view('admin_panel/reports/home/index_css');
        $this->load->view('admin_panel/reports/home/index_js');
        $this->load->view('admin_panel/static/footer');
    }
}
