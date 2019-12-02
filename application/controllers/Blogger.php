<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogger extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }
    public function index()
    {
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'بلاگ';
        $data['sidebar'] = $this->load->view('ui/v3/about_us/sidebar', NULL, TRUE);
        $data['title'] = "بلاگ";
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/blog/index', $data);
        $this->load->view('ui/v3/blog/index_js', $data);
        $this->load->view('ui/v3/blog/index_css', $data);
        $this->load->view('ui/v3/static/footer', $data);
    }

}
