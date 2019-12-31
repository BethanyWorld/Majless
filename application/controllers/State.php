<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class State extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('ui/ModelQuery');
        $this->load->model('ui/ModelCommand');
        $this->load->model('ui/ModelAgent');
        $this->load->model('ui/ModelCountry');
        $this->load->model('admin/ModelCandidate');
    }
	public function index(){
	    $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle').' استان ها ';
	    $this->load->view('ui/v3/static/header', $data);
	    $this->load->view('ui/v3/state/home/index' , $data);
        $this->load->view('ui/v3/state/home/index_css');
        $this->load->view('ui/v3/state/home/index_js');
	    $this->load->view('ui/v3/static/footer', $data);
	}
    public function detail($stateId , $stateName){
        /*$provinceAgent = $this->ModelAgent->getAgentByAgentStateId($stateId);
        if(!isset($provinceAgent['AgentId'])){
            show_error("پشتیبانی برای این استان تعریف نشده است" , 200 , "پشتیبان سایت استان");
        }
        else{
            $data['statePages'] = $this->ModelQuery->getStatePagesByAgentId($provinceAgent['AgentId']);
            $data['statePosts'] = $this->ModelQuery->getStatePostsByAgentId($provinceAgent['AgentId']);
            $data['noImg'] = $this->config->item('defaultImage');
            $data['pageTitle'] = $this->config->item('defaultPageTitle').' استان '.$stateName;
            $data['stateName'] = $stateName;
            $data['stateId'] = $stateId;

            $this->load->view('ui/v3/static/header', $data);
            $this->load->view('ui/v3/state/detail/index' , $data);
            $this->load->view('ui/v3/state/detail/index_css');
            $this->load->view('ui/v3/state/detail/index_js');
            $this->load->view('ui/v3/static/footer', $data);
        }*/
        $provinceAgent = $this->ModelAgent->getAgentByAgentStateId($stateId);
        $data['data'] = $this->ModelCandidate->getCandidateByStateId($stateId);
        $data['stateName'] = $stateName;
        $data['stateId'] = $stateId;
        $data['cities'] = $this->ModelCountry->getCityByStateId($stateId);
        $data['elections'] = $this->ModelCountry->getElectionsByStateId($stateId);
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle').' '."فهرست نامزد های انتخاباتی استان ".$stateName;

        $data['dataSpecial'] = $this->ModelCandidate->getCandidateSpecialByStateId($stateId);

        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/state/candidate/index' , $data);
        $this->load->view('ui/v3/state/candidate/index_css');
        $this->load->view('ui/v3/state/candidate/index_js');
        $this->load->view('ui/v3/static/footer', $data);
    }
    public function page($stateId , $pageId ,  $pageTitle){

        $provinceAgent = $this->ModelAgent->getAgentByAgentStateId($stateId);

        $data['data'] = $this->ModelQuery->getStatePagesByPageId($pageId)[0];
        $data['statePages'] = $this->ModelQuery->getStatePagesByAgentId($provinceAgent['AgentId']);
        $data['statePosts'] = $this->ModelQuery->getStatePostsByAgentId($provinceAgent['AgentId']);
        $data['stateName'] = $this->ModelCountry->getStateById($stateId)[0]['StateName'];
        $data['stateId'] = $stateId;

        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle').' '.$pageTitle;
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/state/page/index' , $data);
        $this->load->view('ui/v3/state/page/index_css');
        $this->load->view('ui/v3/state/page/index_js');
        $this->load->view('ui/v3/static/footer', $data);
    }
    public function post($stateId , $postId ,  $postTitle){

        $provinceAgent = $this->ModelAgent->getAgentByAgentStateId($stateId);

        $data['data'] = $this->ModelQuery->getStatePostByPostId($postId)[0];
        $data['statePages'] = $this->ModelQuery->getStatePagesByAgentId($provinceAgent['AgentId']);
        $data['statePosts'] = $this->ModelQuery->getStatePostsByAgentId($provinceAgent['AgentId']);
        $data['stateName'] = $this->ModelCountry->getStateById($stateId)[0]['StateName'];
        $data['stateId'] = $stateId;

        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle').' '.$data['data']['PostTitle'];
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/state/post/index' , $data);
        $this->load->view('ui/v3/state/post/index_css');
        $this->load->view('ui/v3/state/post/index_js');
        $this->load->view('ui/v3/static/footer', $data);
    }
    public function candidate($stateId  , $stateName ){
        $provinceAgent = $this->ModelAgent->getAgentByAgentStateId($stateId);
        $data['data'] = $this->ModelCandidate->getCandidateByStateId($stateId);
        $data['stateName'] = $stateName;
        $data['stateId'] = $stateId;
        $data['cities'] = $this->ModelCountry->getCityByStateId($stateId);
        $data['elections'] = $this->ModelCountry->getElectionsByStateId($stateId);
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle').' '."فهرست نامزد های انتخاباتی استان ".$stateName;
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/state/candidate/index' , $data);
        $this->load->view('ui/v3/state/candidate/index_css');
        $this->load->view('ui/v3/state/candidate/index_js');
        $this->load->view('ui/v3/static/footer', $data);
    }
    public function candidate_detail($candidateId , $stateId ,$stateName){
        $CSRF = random_string('alnum', 32);
        $this->session->set_userdata('CSRF', $CSRF);
        $data['CSRF'] = $CSRF;
        $data['noImg'] = $this->config->item('defaultImage');
        $data['gifLoader'] = $this->config->item('gifLoader');
        $provinceAgent = $this->ModelAgent->getAgentByAgentStateId($stateId);
        $data['candidate'] = $this->ModelCandidate->getCandidateByCandidateId($candidateId);
        $data['posts'] = $this->ModelCandidate->getCandidateCandidatePostByCandidateId($candidateId);
        $data['api'] = $this->config->item('api');
        $data['stateName'] = $stateName;
        $data['stateId'] = $stateId;
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle').' '."فهرست نامزد های انتخاباتی استان ".$stateName;
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/state/candidate_detail/index' , $data);
        $this->load->view('ui/v3/state/candidate_detail/index_css');
        $this->load->view('ui/v3/state/candidate_detail/index_js', $data);
        $this->load->view('ui/v3/static/footer', $data);
    }
    public function submitReportAbuse(){
        $inputs = $this->input->post(NULL, TRUE);
        $inputs = array_map(function ($v) {return strip_tags($v);}, $inputs);
        $inputs = array_map(function ($v) {return remove_invisible_characters($v);}, $inputs);
        $inputs = array_map(function ($v) {return makeSafeInput($v);}, $inputs);
        $captchaCode = $this->session->userdata['captchaCode'];
        if (strtolower($inputs['inputCaptcha']) == strtolower($captchaCode)) {
            if($inputs['inputCSRF'] == $this->session->userdata['CSRF']){
                $this->session->set_userdata('CSRF', "");
                $result = $this->ModelCommand->submitReportAbuse($inputs);
                echo json_encode($result);
            }
            else{
                $arr = array(
                    'type' => "red",
                    'content' => "کد CSRF نامعتبر است"
                );
                echo json_encode($arr);
            }
        } else {
            $arr = array(
                'type' => "red",
                'content' => "کد امنیتی نامعتبر است"
            );
            echo json_encode($arr);
        }



    }

    /* Helper Functions */
    public function getCityByStateId($stateId){
        echo json_encode($this->ModelCountry->getCityByStateId($stateId));
    }
    public function getElectionsByStateId($stateId){
        echo json_encode($this->ModelCountry->getElectionsByStateId($stateId));
    }
    public function getCandidateByStateIdAndCityId($stateId,$cityId,$stateName){
        $data['stateName'] = $stateName;
        $data['stateId'] = $stateId;
        $data['data'] = $this->ModelCandidate->getCandidateByStateIdAndCityId($stateId,$cityId);
        echo $this->load->view('ui/v3/state/candidate/ajax' , $data, TRUE);
    }
    public function getCandidatesByElectionId(){

        $inputs = $this->input->post(NULL, TRUE);
        $inputs = array_map(function ($v) {
            return remove_invisible_characters($v);
        }, $inputs);
        $inputs = array_map(function ($v) {
            return makeSafeInput($v);
        }, $inputs);
        $data['stateName'] = $inputs['inputStateName'];
        $data['stateId'] = $inputs['inputStateId'];
        if(!isset($inputs['inputElectionIds'])) {
            $inputs['inputElectionIds'] = array();
        }
        $data['electionIds'] = $inputs['inputElectionIds'];
        $inputs['inputElectionIds'] = array_values($inputs['inputElectionIds']);
        $data['data'] = $this->ModelCandidate->getCandidatesByElectionId($inputs);
        $data['dataSpecial'] = $this->ModelCandidate->getCandidatesSpecialByElectionId($inputs);
        echo $this->load->view('ui/v3/state/candidate/ajax' , $data, TRUE);
    }
    /* End Helper Functions*/
}