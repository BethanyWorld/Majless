<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Reports extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('admin/admin_login');
    }
    public function index(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'گزارش گیری';
        $inputs['pageIndex'] = 1;
        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/reports/home/index');
        $this->load->view('admin_panel/reports/home/index_css');
        $this->load->view('admin_panel/reports/home/index_js');
        $this->load->view('admin_panel/static/footer');
    }
}
