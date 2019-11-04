<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('admin/admin_login');
        $this->load->model('admin/ModelProfile');
        $this->load->model('admin/ModelReport');
    }
	public function index()
	{
	    $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle').' پنل مدیر';
        $data['adminInfo'] = $this->ModelProfile->getAdminProfileInfoByAdminId($this->session->userdata('AdminLoginInfo')[0]['AdminId']);

        $data['report']['CandidatesCount'] = $this->ModelReport->getAllCandidatesCount();
        $data['report']['ReportAbusesCount'] = $this->ModelReport->getAllReportAbusesCount();
        $data['report']['ExamsCount'] = $this->ModelReport->getAllExamsCount();
        $data['report']['ExamRequestsCount'] = $this->ModelReport->getAllExamRequestsCount();
        $data['report']['StateCandidatesCount'] = $this->ModelReport->getStateCandidatesCount();
        $data['report']['Roles'] = $this->ModelReport->getRolesCount();
        $data['latestCandidates'] = $this->ModelReport->getLatestCandidates();


        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/home/index', $data);
        $this->load->view('admin_panel/home/index_js', $data);
	    $this->load->view('admin_panel/static/footer');
	}

}
