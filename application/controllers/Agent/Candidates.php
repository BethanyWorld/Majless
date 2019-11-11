<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Candidates extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('agent/agent_login');
        $this->load->helper('pipes/pipe');
        $this->load->model('agent/ModelCandidates');
    }
    public function index(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'فهرست نامزد های انتخاباتی استان';
        $this->load->view('agent_panel/static/header', $data);
        $this->load->view('agent_panel/candidates/home/index', $data);
        $this->load->view('agent_panel/candidates/home/index_css');
        $this->load->view('agent_panel/candidates/home/index_js');
        $this->load->view('agent_panel/static/footer');
    }
    public function doPagination(){
        $inputs = $this->input->post(NULL, TRUE);
        $data = $this->ModelCandidates->getCandidatesByStateId($inputs);
        $data['htmlResult'] = $this->load->view('agent_panel/candidates/home/pagination', $data, TRUE);
        unset($data['data']);
        echo json_encode($data);
    }

    public function detail($id)
    {
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'جزئیات نامزد انتخاباتی';
        $data['candidateInfo'] = $this->ModelCandidates->getCandidateById($id)[0];

        $this->load->view('agent_panel/static/header', $data);
        $this->load->view('agent_panel/candidates/detail/index', $data);
        $this->load->view('agent_panel/candidates/detail/index_css');
        $this->load->view('agent_panel/candidates/detail/index_js');
        $this->load->view('agent_panel/static/footer');
    }
    /*public function doEditCandidateMark()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs = array_map(function ($v) {
            return strip_tags($v);
        }, $inputs);
        $inputs = array_map(function ($v) {
            return remove_invisible_characters($v);
        }, $inputs);
        $inputs = array_map(function ($v) {
            return makeSafeInput($v);
        }, $inputs);

        $this->form_validation->set_data($inputs);
        $this->form_validation->set_rules('inputCandidateScore', 'نمره آزمون', 'trim|required|greater_than[0]|less_than[101]|numeric');
        if ($this->form_validation->run() == FALSE) {
            $arr = array(
                'type' => "red",
                'content' => validation_errors()
            );
            echo json_encode($arr);
            die();
        }
        $result = $this->ModelCandidates->doEditCandidateMark($inputs);
        echo json_encode($result);
    }*/
}
