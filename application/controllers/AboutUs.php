<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AboutUs extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        /*$data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'درباره ما';
        $data['sidebar'] = $this->load->view('ui/v3/about_us/sidebar', NULL, TRUE);
        $data['title'] = "درباره ما";
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/about_us/home/index', $data);
        $this->load->view('ui/v3/static/footer', $data);*/
    }
    public function intro(){
        redirect(base_url('blog/?page_id=40'),'auto',301);
        /*$data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'معرفی';
        $data['sidebar'] = $this->load->view('ui/v3/about_us/sidebar', NULL, TRUE);
        $data['title'] = "معرفی";
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/about_us/intro/index', $data);
        $this->load->view('ui/v3/static/footer', $data);*/
    }
    public function prism(){
        redirect(base_url('blog/?page_id=42'),'auto',301);
        /*$data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'بیانیه ارزش';
        $data['sidebar'] = $this->load->view('ui/v3/about_us/sidebar', NULL, TRUE);
        $data['title'] = "بیانیه ارزش";
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/about_us/prism/index', $data);
        $this->load->view('ui/v3/static/footer', $data);*/
    }
    public function measurement_process(){
        redirect(base_url('blog/?page_id=46'),'auto',301);
        /*$data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'فرآیند سنجش نامزدها';
        $data['sidebar'] = $this->load->view('ui/v3/about_us/sidebar', NULL, TRUE);
        $data['title'] = "فرآیند سنجش نامزدها";
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/about_us/measurement_process/index', $data);
        $this->load->view('ui/v3/static/footer', $data);*/
    }
    public function public_invitation(){
        redirect(base_url('blog/?p=15'),'auto',301);
        /*$data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'فراخوان سراسری جنبش اجتماعی ازما برای تشکیل مجلس کارآمد صالح ، سالم و قوی';
        $data['sidebar'] = $this->load->view('ui/v3/about_us/sidebar', NULL, TRUE);
        $data['title'] = "فراخوان سراسری جنبش اجتماعی ازما برای تشکیل مجلس کارآمد صالح ، سالم و قوی";
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/about_us/public_invitation/index', $data);
        $this->load->view('ui/v3/static/footer', $data);*/
    }
    public function candidate_commitment_letter(){
        redirect(base_url('blog/?p=90'),'auto',301);
        /*$data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'تعهدنامه نامزدها';
        $data['sidebar'] = $this->load->view('ui/v3/about_us/sidebar', NULL, TRUE);
        $data['title'] = "تعهدنامه نامزدها";
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/about_us/candidate_commitment_letter/index', $data);
        $this->load->view('ui/v3/static/footer', $data);*/
    }
    public function financial_support(){
        /*$data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'حمایت مالی';
        $data['sidebar'] = $this->load->view('ui/v3/about_us/sidebar', NULL, TRUE);
        $data['title'] = "حمایت مالی";
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/about_us/financial_support/index', $data);
        $this->load->view('ui/v3/static/footer', $data);*/
    }
    public function testimonials(){
        /*$data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'نظرات چهره های برتر سیاسی فرهنگی';
        $data['sidebar'] = $this->load->view('ui/v3/about_us/sidebar', NULL, TRUE);
        $data['title'] = "نظرات چهره های برتر سیاسی فرهنگی";
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/about_us/testimonials/index', $data);
        $this->load->view('ui/v3/static/footer', $data);*/
    }
    public function candidatecriteriacompetencies(){
        /*$data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'معیار ها و شایستگی ها نامزد انتخاباتی';
        $data['sidebar'] = $this->load->view('ui/v3/about_us/sidebar', NULL, TRUE);
        $data['title'] = "معیار ها و شایستگی ها نامزد انتخاباتی";
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/about_us/candidatecriteriacompetencies/index', $data);
        $this->load->view('ui/v3/static/footer', $data);*/
    }
    public function candidatelegal(){
        /*$data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'شایستگی های  نماینده مجلس';
        $data['sidebar'] = $this->load->view('ui/v3/about_us/sidebar', NULL, TRUE);
        $data['title'] = "شایستگی های نماینده مجلس";
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/about_us/candidatelegal/index', $data);
        $this->load->view('ui/v3/static/footer', $data);*/
    }
    public function support()
    {
        /*$data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'حمایت از ما';
        $data['sidebar'] = $this->load->view('ui/v3/about_us/sidebar', NULL, TRUE);
        $data['title'] = "حمایت از ما";
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/about_us/support/index', $data);
        $this->load->view('ui/v3/static/footer', $data);*/
    }
    public function faq(){
        redirect(base_url('blog/?page_id=49'),'auto',301);
        /*$data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'سوالات متداول';
        $data['sidebar'] = $this->load->view('ui/v3/about_us/sidebar', NULL, TRUE);
        $data['title'] = "سوالات متداول";
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/about_us/faq/index', $data);
        $this->load->view('ui/v3/static/footer', $data);*/
    }
    public function exams(){
        redirect(base_url('blog/?page_id=44'),'auto',301);
        /*$data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'آشنایی با آزمون ها';
        $data['sidebar'] = $this->load->view('ui/v3/about_us/sidebar', NULL, TRUE);
        $data['title'] = "آشنایی با آزمون ها";
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/about_us/exams/index', $data);
        $this->load->view('ui/v3/static/footer', $data);*/
    }
}
