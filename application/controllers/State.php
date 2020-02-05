<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class State extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('ui/ModelQuery');
        $this->load->model('ui/ModelCommand');
        $this->load->model('ui/ModelAgent');
        $this->load->model('ui/ModelCountry');
        $this->load->model('admin/ModelCandidate');
        $this->load->model('ui/ModelProfile');
    }
    public function index(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . ' استان ها ';
        $data['title'] = 'ورود به سامانه جنبش از ما';
        $data['description'] = 'برای دعوت از نامزدها به چالش شایستگی و شفافیت و مشاهده رزومه انها';
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/state/home/index', $data);
        $this->load->view('ui/v3/state/home/index_css');
        $this->load->view('ui/v3/state/home/index_js');
        $this->load->view('ui/v3/static/footer', $data);
    }
    public function detail($stateId, $stateName){
        $provinceAgent = $this->ModelAgent->getAgentByAgentStateId($stateId);
        $data['data'] = $this->ModelCandidate->getCandidateByStateId($stateId);
        $data['stateName'] = $stateName;
        $data['stateId'] = $stateId;
        $data['cities'] = $this->ModelCountry->getCityByStateId($stateId);
        $data['elections'] = $this->ModelCountry->getElectionsByStateId($stateId);
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . ' ' . "فهرست نامزد های انتخاباتی استان " . $stateName;

        $data['description'] = 'برای دعوت از نامزدها به چالش شایستگی و شفافیت و مشاهده رزومه انها';
        $CSRF = random_string('alnum', 32);
        $this->session->set_userdata('CSRF', $CSRF);
        $data['CSRF'] = $CSRF;

        $data['dataSpecial'] = $this->ModelCandidate->getCandidateSpecialByStateId($stateId);

        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/state/candidate/index', $data);
        $this->load->view('ui/v3/state/candidate/index_css');
        $this->load->view('ui/v3/state/candidate/index_js');
        $this->load->view('ui/v3/static/footer', $data);
    }
    public function invite(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . ' ' . "دعوت نامزد انتخاباتی ";
        $data['description'] = 'برای دعوت از نامزدها به چالش شایستگی و شفافیت و مشاهده رزومه انها';
        $data['states'] = $this->ModelCountry->getStateList();
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/state/invite/index', $data);
        $this->load->view('ui/v3/state/invite/index_css');
        $this->load->view('ui/v3/state/invite/index_js');
        $this->load->view('ui/v3/static/footer', $data);
    }
    public function page($stateId, $pageId, $pageTitle)
    {

        $provinceAgent = $this->ModelAgent->getAgentByAgentStateId($stateId);

        $data['data'] = $this->ModelQuery->getStatePagesByPageId($pageId)[0];
        $data['statePages'] = $this->ModelQuery->getStatePagesByAgentId($provinceAgent['AgentId']);
        $data['statePosts'] = $this->ModelQuery->getStatePostsByAgentId($provinceAgent['AgentId']);
        $data['stateName'] = $this->ModelCountry->getStateById($stateId)[0]['StateName'];
        $data['stateId'] = $stateId;

        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . ' ' . $pageTitle;
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/state/page/index', $data);
        $this->load->view('ui/v3/state/page/index_css');
        $this->load->view('ui/v3/state/page/index_js');
        $this->load->view('ui/v3/static/footer', $data);
    }
    public function post($stateId, $postId, $postTitle){
        $provinceAgent = $this->ModelAgent->getAgentByAgentStateId($stateId);
        $data['data'] = $this->ModelQuery->getStatePostByPostId($postId)[0];
        $data['statePages'] = $this->ModelQuery->getStatePagesByAgentId($provinceAgent['AgentId']);
        $data['statePosts'] = $this->ModelQuery->getStatePostsByAgentId($provinceAgent['AgentId']);
        $data['stateName'] = $this->ModelCountry->getStateById($stateId)[0]['StateName'];
        $data['stateId'] = $stateId;

        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . ' ' . $data['data']['PostTitle'];
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/state/post/index', $data);
        $this->load->view('ui/v3/state/post/index_css');
        $this->load->view('ui/v3/state/post/index_js');
        $this->load->view('ui/v3/static/footer', $data);
    }
    public function candidate($stateId, $stateName)
    {
        $provinceAgent = $this->ModelAgent->getAgentByAgentStateId($stateId);
        $data['data'] = $this->ModelCandidate->getCandidateByStateId($stateId);
        $data['stateName'] = $stateName;
        $data['stateId'] = $stateId;
        $data['cities'] = $this->ModelCountry->getCityByStateId($stateId);
        $data['elections'] = $this->ModelCountry->getElectionsByStateId($stateId);
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . ' ' . "فهرست نامزد های انتخاباتی استان " . $stateName;
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/state/candidate/index', $data);
        $this->load->view('ui/v3/state/candidate/index_css');
        $this->load->view('ui/v3/state/candidate/index_js');
        $this->load->view('ui/v3/static/footer', $data);
    }
    public function candidate_detail($candidateId, $stateId, $stateName){
        $CSRF = random_string('alnum', 32);
        $this->session->set_userdata('CSRF', $CSRF);
        $data['CSRF'] = $CSRF;
        $data['noImg'] = $this->config->item('defaultImage');
        $data['gifLoader'] = $this->config->item('gifLoader');
        $data['candidateId'] = $candidateId;
        $data['stateId'] = $stateId;
        $data['stateName'] = $stateName;
        $data['EnumResumeProfile'] = $this->config->item('EnumResumeProfile');
        $data['candidate'] = $this->ModelCandidate->getCandidateByCandidateId($candidateId);
        $data['candidateMilitaryStatus'] = $this->ModelProfile->getCandidateMilitaryStatusByCandidateId($candidateId);
        $data['candidateAcademicBackground'] = $this->ModelProfile->getCandidateAcademicBackgroundByCandidateId($candidateId);
        $data['candidateJobHistory'] = $this->ModelProfile->getCandidateJobHistoryByCandidateId($candidateId);
        $data['candidateSocialCulturalBackground'] = $this->ModelProfile->getCandidateSocialCulturalBackgroundByCandidateId($candidateId);
        $data['candidateBooks'] = $this->ModelProfile->getCandidateBooksByCandidateId($candidateId);
        $data['candidateArticles'] = $this->ModelProfile->getCandidateArticlesByCandidateId($candidateId);
        $data['candidateResearch'] = $this->ModelProfile->getCandidateResearchByCandidateId($candidateId);
        $data['candidateTranslation'] = $this->ModelProfile->getCandidateTranslationByCandidateId($candidateId);
        $data['candidateInvention'] = $this->ModelProfile->getCandidateInventionByCandidateId($candidateId);
        $data['candidateConference'] = $this->ModelProfile->getCandidateConferenceByCandidateId($candidateId);
        $data['politicBackground'] = $this->ModelProfile->getCandidateUpdatePoliticBackgroundByCandidateId($candidateId);
        $data['candidateSkills'] = $this->ModelProfile->getCandidateSkillsByCandidateId($candidateId);
        $data['paymentHistory'] = $this->ModelCandidate->getCandidatePaymentHistoryCandidateId($candidateId);
        $data['loginHistory'] = $this->ModelCandidate->getCandidateLoginHistoryCandidateId($candidateId);
        $data['promises'] = $this->ModelProfile->getCandidateElectionPromisesByCandidateId($candidateId);
        $data['finance'] = $this->ModelProfile->getCandidateFinanceByCandidateId($candidateId);
        $data['stateName'] = $stateName;
        $data['stateId'] = $stateId;
        $data['countries'] = $this->ModelCountry->getCountryList();
        $data['states'] = $this->ModelCountry->getStateList();
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . ' ' . "فهرست نامزد های انتخاباتی استان " . $stateName;
        $data['description'] = 'برای دعوت از نامزدها به چالش شایستگی و شفافیت و مشاهده رزومه انها';
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/state/candidate_detail/index', $data);
        $this->load->view('ui/v3/state/candidate_detail/index_css');
        $this->load->view('ui/v3/state/candidate_detail/index_js', $data);
        $this->load->view('ui/v3/static/footer', $data);
    }
    public function candidateDetailApi($candidateId, $stateId, $stateName){
        $data['candidate'] = $this->ModelCandidate->getCandidateByCandidateId($candidateId);
        $data['candidateMilitaryStatus'] = $this->ModelProfile->getCandidateMilitaryStatusByCandidateId($candidateId);
        $data['candidateAcademicBackground'] = $this->ModelProfile->getCandidateAcademicBackgroundByCandidateId($candidateId);
        $data['candidateJobHistory'] = $this->ModelProfile->getCandidateJobHistoryByCandidateId($candidateId);
        $data['candidateSocialCulturalBackground'] = $this->ModelProfile->getCandidateSocialCulturalBackgroundByCandidateId($candidateId);
        $data['candidateBooks'] = $this->ModelProfile->getCandidateBooksByCandidateId($candidateId);
        $data['candidateArticles'] = $this->ModelProfile->getCandidateArticlesByCandidateId($candidateId);
        $data['candidateResearch'] = $this->ModelProfile->getCandidateResearchByCandidateId($candidateId);
        $data['candidateTranslation'] = $this->ModelProfile->getCandidateTranslationByCandidateId($candidateId);
        $data['candidateInvention'] = $this->ModelProfile->getCandidateInventionByCandidateId($candidateId);
        $data['candidateConference'] = $this->ModelProfile->getCandidateConferenceByCandidateId($candidateId);
        $data['politicBackground'] = $this->ModelProfile->getCandidateUpdatePoliticBackgroundByCandidateId($candidateId);
        $data['candidateSkills'] = $this->ModelProfile->getCandidateSkillsByCandidateId($candidateId);
        $data['paymentHistory'] = $this->ModelCandidate->getCandidatePaymentHistoryCandidateId($candidateId);
        $data['loginHistory'] = $this->ModelCandidate->getCandidateLoginHistoryCandidateId($candidateId);
        $data['promises'] = $this->ModelProfile->getCandidateElectionPromisesByCandidateId($candidateId);
        $data['finance'] = $this->ModelProfile->getCandidateFinanceByCandidateId($candidateId);
        $data['stateName'] = $stateName;
        $data['stateId'] = $stateId;
        $data['countries'] = $this->ModelCountry->getCountryList();
        $data['states'] = $this->ModelCountry->getStateList();
        $data['cities'] = $this->ModelCountry->getCityList();
        echo json_encode($data);

    }
    public function submitReportAbuse()
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
        $captchaCode = $this->session->userdata['captchaCode'];
        if (strtolower($inputs['inputCaptcha']) == strtolower($captchaCode)) {
            if ($inputs['inputCSRF'] == $this->session->userdata['CSRF']) {
                $this->session->set_userdata('CSRF', "");
                $result = $this->ModelCommand->submitReportAbuse($inputs);
                echo json_encode($result);
            } else {
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
    public function getCityByStateId($stateId)
    {
        echo json_encode($this->ModelCountry->getCityByStateId($stateId));
    }
    public function getElectionsByStateId($stateId)
    {
        echo json_encode($this->ModelCountry->getElectionsByStateId($stateId));
    }
    public function getCandidateByStateIdAndCityId($stateId, $cityId, $stateName)
    {
        $data['stateName'] = $stateName;
        $data['stateId'] = $stateId;
        $data['data'] = $this->ModelCandidate->getCandidateByStateIdAndCityId($stateId, $cityId);
        echo $this->load->view('ui/v3/state/candidate/ajax', $data, TRUE);
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
        if (!isset($inputs['inputElectionIds'])) {
            $inputs['inputElectionIds'] = array();
        }
        $data['electionIds'] = $inputs['inputElectionIds'];
        $inputs['inputElectionIds'] = array_values($inputs['inputElectionIds']);
        //$data['data'] = $this->ModelCandidate->getCandidatesByElectionId($inputs);
        $data['dataSpecial'] = $this->ModelCandidate->getCandidatesSpecialByElectionId($inputs);

        $index = 0;
        foreach ($data['dataSpecial'] as $item) {
            $data['dataSpecial'][$index]['badges'] = $this->ModelCandidate->getCandidateBadgeByCandidateId($item['CandidateCode']);
            $index +=1;
        }
        echo $this->load->view('ui/v3/state/candidate/ajax', $data, TRUE);
    }
    public function doIncreaseCandidateSpecialInviteCount(){
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
        $result = $this->ModelCandidate->doIncreaseCandidateSpecialInviteCount($inputs);
        echo json_encode($result);
    }
    public function doInviteCandidateSpecial()
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
        $captchaCode = $this->session->userdata['captchaCode'];
        if (strtolower($inputs['inputCaptcha']) == strtolower($captchaCode)) {
            $inputs['inputCandidateCode'] = rand(10000,99999);
            $inputs['inputCandidatePreName'] = 'جناب آقای';
            $result = $this->ModelCandidate->doInviteSpecial($inputs);
            echo json_encode($result);
        } else {
            $arr = array(
                'type' => "red",
                'content' => "کد امنیتی نامعتبر است"
            );
            echo json_encode($arr);
        }


    }
    /* End Helper Functions*/
}