<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Page404 extends CI_Controller
{
    /*----------------------------------------------------*/
    public function __construct(){
        parent::__construct();
    }
    public function index()
    {
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle').' موردی یافت نشد ';
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/404/index');
        $this->load->view('ui/v3/static/footer', $data);
    }

}
