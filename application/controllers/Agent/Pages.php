<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->helper('agent/agent_login');
        $this->load->helper('pipes/pipe');
        $this->load->model('agent/ModelPages');
    }

    public function index(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'مدیریت صفحات';
        $this->load->view('agent_panel/static/header', $data);
        $this->load->view('agent_panel/pages/home/index', $data);
        $this->load->view('agent_panel/pages/home/index_css');
        $this->load->view('agent_panel/pages/home/index_js');
        $this->load->view('agent_panel/static/footer');
    }

    public function doPagination(){
        $inputs = $this->input->post(NULL, TRUE);
        $data = $this->ModelPages->getPagesByAgentId($inputs);
        $data['htmlResult'] = $this->load->view('agent_panel/pages/home/pagination', $data, TRUE);
        unset($data['data']);
        echo json_encode($data);
    }

    public function add(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'افزودن نوشته';

        $this->load->view('agent_panel/static/header', $data);
        $this->load->view('agent_panel/pages/add/index', $data);
        $this->load->view('agent_panel/pages/add/index_css');
        $this->load->view('agent_panel/pages/add/index_js');
        $this->load->view('agent_panel/static/footer');
    }
    public function doAddPage(){
        $inputs = $this->input->post(NULL, TRUE);
        $inputPageContent = $inputs['inputPageContent'];
        $inputs = array_map(function ($v) {
            return strip_tags($v);
        }, $inputs);
        $inputs = array_map(function ($v) {
            return remove_invisible_characters($v);
        }, $inputs);
        $inputs = array_map(function ($v) {
            return makeSafeInput($v);
        }, $inputs);
        $inputs['inputPageContent'] = $inputPageContent;

        $this->form_validation->set_data($inputs);
        $this->form_validation->set_rules('inputPageTitle', 'عنوان صفحه', 'trim|required|min_length[5]|max_length[254]');
        $this->form_validation->set_rules('inputPageContent', 'محتوای صفحه', 'trim|required|min_length[5]');
        if ($this->form_validation->run() == FALSE) {
            $arr = array(
                'type' => "red",
                'content' => validation_errors()
            );
            echo json_encode($arr);
            die();
        }
        $result = $this->ModelPages->doAddPage($inputs);
        echo json_encode($result);
    }

    public function edit($postId){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'ویرایش نوشته';
        $data['data'] = $this->ModelPages->getPageByPageId($postId);

        $this->load->view('agent_panel/static/header', $data);
        $this->load->view('agent_panel/pages/edit/index', $data);
        $this->load->view('agent_panel/pages/edit/index_css');
        $this->load->view('agent_panel/pages/edit/index_js');
        $this->load->view('agent_panel/static/footer');
    }

    public function doEditPage(){
        $inputs = $this->input->post(NULL, TRUE);
        $inputPageContent = $inputs['inputPageContent'];
        $inputs = array_map(function ($v) {
            return strip_tags($v);
        }, $inputs);
        $inputs = array_map(function ($v) {
            return remove_invisible_characters($v);
        }, $inputs);
        $inputs = array_map(function ($v) {
            return makeSafeInput($v);
        }, $inputs);
        $inputs['inputPageContent'] = $inputPageContent;

        $this->form_validation->set_data($inputs);
        $this->form_validation->set_rules('inputPageTitle', 'عنوان صفحه', 'trim|required|min_length[5]|max_length[254]');
        $this->form_validation->set_rules('inputPageContent', 'محتوای صفحه', 'trim|required|min_length[5]');
        if ($this->form_validation->run() == FALSE) {
            $arr = array(
                'type' => "red",
                'content' => validation_errors()
            );
            echo json_encode($arr);
            die();
        }
        $result = $this->ModelPages->doEditPage($inputs);
        echo json_encode($result);
    }

    public function doDeletePage(){
        $inputs = $this->input->post(NULL, TRUE);
        $result = $this->ModelPages->doDeletePage($inputs);
        echo json_encode($result);
    }


}
