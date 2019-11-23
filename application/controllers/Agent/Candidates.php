<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Candidates extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('agent/agent_login');
        $this->load->helper('pipes/pipe');
        $this->load->model('agent/ModelCandidates' , 'agentModelCandidates');
        $this->load->model('admin/ModelCandidate');
        $this->load->model('ui/ModelCountry');
        $this->load->model('ui/ModelProfile');
    }
    public function index(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'نامزد های انتخاباتی';
        $data['enumCandidateStatus'] = $this->config->item('EnumCandidateStatus');
        $data['states'] = $this->ModelCountry->getStateList();
        $this->load->view('agent_panel/static/header', $data);
        $this->load->view('agent_panel/candidates/home/index', $data);
        $this->load->view('agent_panel/candidates/home/index_css');
        $this->load->view('agent_panel/candidates/home/index_js');
        $this->load->view('agent_panel/static/footer');
    }
    public function doPagination(){
        $inputs = $this->input->post(NULL, TRUE);
        $data = $this->agentModelCandidates->getCandidatesByStateId($inputs);
        $data['htmlResult'] = $this->load->view('agent_panel/candidates/home/pagination', $data, TRUE);
        unset($data['data']);
        echo json_encode($data);
    }

    public function detail($candidateId)
    {
        $data['noImg'] = $this->config->item('defaultImage');
        $data['gifLoader'] = $this->config->item('gifLoader');
        $data['pageTitle'] = 'ویرایش نامزد انتخاباتی';
        $data['EnumResumeProfile'] = $this->config->item('EnumResumeProfile');
        $data['exams'] = $this->getCandidateExams($candidateId);
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

        $data['api'] = $this->config->item('api');
        $this->load->view('agent_panel/static/header', $data);
        $this->load->view('agent_panel/candidates/detail/index', $data);
        $this->load->view('agent_panel/candidates/detail/index_css');
        $this->load->view('agent_panel/candidates/detail/index_js');
        $this->load->view('agent_panel/static/footer');
    }

    protected function getCandidateStatus($candidateId){
        return $this->ModelCandidate->getCandidateByCandidateId($candidateId);
    }
    protected function getCandidateExams($candidateId){
        $data['firstExams'] = $this->ModelCandidate->getCandidateFirstStepExamByCandidateId($candidateId);
        $data['secondExams'] = $this->ModelCandidate->getCandidateSecondStepExamByCandidateId($candidateId);
        $data['evalExams'] = $this->ModelCandidate->getCandidateEvaluationExamByCandidateId($candidateId);

        $data['firstExams'] = array_reverse($data['firstExams']);
        $data['secondExams'] = array_reverse($data['secondExams']);
        $data['evalExams'] = array_reverse($data['evalExams']);
        return $data;
    }
}
