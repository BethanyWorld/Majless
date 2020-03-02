<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class States extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('admin/admin_login');
        $this->load->model('ui/ModelCountry');
        $this->load->model('admin/ModelStatistics');
    }
    public function index(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'فهرست استان ها';
        $inputs['pageIndex'] = 1;
        $data['states'] = $this->ModelCountry->getStateList();

        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/states/home/index');
        $this->load->view('admin_panel/states/home/index_css');
        $this->load->view('admin_panel/states/home/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doPagination(){
        $inputs = $this->input->post(NULL, TRUE);
        $data = $this->ModelCountry->getStates($inputs);
        $data['htmlResult'] = $this->load->view('admin_panel/states/home/pagination', $data, TRUE);
        unset($data['data']);
        echo json_encode($data);
    }

    public function edit($stateId){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'ویرایش استان';
        $data['data'] = $this->ModelCountry->getStateByStateId($stateId)[0];

        $statisticsArray = array(
            'inputStatisticsType'=>'State',
            'inputStatisticsTypeId'=>$stateId
        );
        $data['Statistics'] = $this->ModelStatistics->getItem($statisticsArray);
        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/states/edit/index' , $data);
        $this->load->view('admin_panel/states/edit/index_css');
        $this->load->view('admin_panel/states/edit/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doEdit()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $result = $this->ModelCountry->doEditState($inputs);
        echo json_encode($result);
    }

    public function cities($stateId){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'فهرست شهر های استان';
        $data['data'] = $this->ModelCountry->getStateByStateId($stateId)[0];
        $data['cities'] = $this->ModelCountry->getStateCitiesByStateId($stateId);
        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/states/cities/index' , $data);
        $this->load->view('admin_panel/states/cities/index_css');
        $this->load->view('admin_panel/states/cities/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doAddStateCity()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $result = $this->ModelCountry->doAddStateCity($inputs);
        echo json_encode($result);
    }
    public function doEditStateCity()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $result = $this->ModelCountry->doEditStateCity($inputs);
        echo json_encode($result);
    }
    public function doDeleteStateCity()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $result = $this->ModelCountry->doDeleteStateCity($inputs);
        echo json_encode($result);
    }

    public function elections(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'فهرست  حوزه های انتخاباتی';
        $inputs['pageIndex'] = 1;
        $data['states'] = $this->ModelCountry->getStateList();
        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/states/elections/home/index', $data);
        $this->load->view('admin_panel/states/elections/home/index_css');
        $this->load->view('admin_panel/states/elections/home/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doElectionsPagination(){
        $inputs = $this->input->post(NULL, TRUE);
        $data = $this->ModelCountry->getElections($inputs);
        $data['htmlResult'] = $this->load->view('admin_panel/states/elections/home/pagination', $data, TRUE);
        unset($data['data']);
        echo json_encode($data);
    }
    public function addElection(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'افزودن  حوزه انتخاباتی';

        $data['states'] = $this->ModelCountry->getStateList();
        $inputs['pageIndex'] = 1;
        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/states/elections/add/index');
        $this->load->view('admin_panel/states/elections/add/index_css');
        $this->load->view('admin_panel/states/elections/add/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doAddElection()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $electionCityIds = $inputs['inputElectionCityId'];
        unset($inputs['inputElectionCityId']);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $inputs['inputElectionCityId'] = $electionCityIds;
        $result = $this->ModelCountry->doAddElection($inputs);
        echo json_encode($result);
    }
    public function doDeleteElection()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $result = $this->ModelCountry->doDeleteElection($inputs);
        echo json_encode($result);
    }
    public function editElection($electionId){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'ویرایش  حوزه انتخاباتی';

        $data['states'] = $this->ModelCountry->getStateList();
        $data['electionInfo'] = $this->ModelCountry->getElectionInfo($electionId);
        $data['cities'] = $this->ModelCountry->getCityByStateId($data['electionInfo']['election']['ElectionStateId']);
        $inputs['pageIndex'] = 1;
        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/states/elections/edit/index');
        $this->load->view('admin_panel/states/elections/edit/index_css');
        $this->load->view('admin_panel/states/elections/edit/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doEditElection()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $electionCityIds = $inputs['inputElectionCityId'];
        unset($inputs['inputElectionCityId']);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $inputs['inputElectionCityId'] = $electionCityIds;
        $result = $this->ModelCountry->doEditElection($inputs);
        echo json_encode($result);
    }
}