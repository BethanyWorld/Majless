<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profile extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('ui/user_login');
        $this->load->model('ui/ModelCountry');
        $this->load->model('admin/ModelCandidate');
        $this->load->model('ui/ModelProfile');
        $this->load->model('agent/ModelExam');
    }
    public function index()
    {
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $data['title'] = 'صفحه کاربری';
        $data['noImg'] = $this->config->item('defaultImage');
        $data['gifLoader'] = $this->config->item('gifLoader');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'صفحه کاربری';
        $data['userInfo'] = $this->ModelCandidate->getCandidateByCandidateId($loginInfo['CandidateId']);
        $data['sidebar'] = $this->load->view('ui/v3/candidate_profile/sidebar', NULL, TRUE);

        $data['allFirstStepExamRequests'] = $this->ModelCandidate->getCandidateFirstStepExamByCandidateId($loginInfo['CandidateId']);
        $data['firstStepExam'] = $data['allFirstStepExamRequests'];
        if (isset($data['firstStepExam']) && !empty($data['firstStepExam'])) {
            $data['firstStepExam'] = $data['firstStepExam'][0];
        }

        $data['allSecondStepExamRequests'] = $this->ModelCandidate->getCandidateSecondStepExamByCandidateId($loginInfo['CandidateId']);
        $data['secondStepExam'] = $data['allSecondStepExamRequests'];
        if (isset($data['secondStepExam']) && !empty($data['secondStepExam'])) {
            $data['secondStepExam'] = $data['secondStepExam'][0];
        }

        $data['allEvaluationExamRequests'] = $this->ModelCandidate->getCandidateEvaluationExamByCandidateId($loginInfo['CandidateId']);
        $data['EvaluationExam'] = $data['allEvaluationExamRequests'];
        if (isset($data['EvaluationExam']) && !empty($data['EvaluationExam'])) {
            $data['EvaluationExam'] = $data['EvaluationExam'][0];
        }

        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/candidate_profile/home/index', $data);
        $this->load->view('ui/v3/candidate_profile/home/index_css');
        $this->load->view('ui/v3/candidate_profile/home/index_js', $data);
        $this->load->view('ui/v3/static/footer');
    }

    public function getResumeStatus(){
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $inputs['inputCandidateId'] = $loginInfo['CandidateId'];
        $inputs['inputCandidateStatus'] = $loginInfo['CandidateStatus'];
        $result = $this->ModelCandidate->getResumeStatus($inputs);
        echo json_encode($result);
    }
    public function candidateHasOtherConditionToContinue()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $inputs['inputCandidateId'] = $loginInfo['CandidateId'];
        $inputs['inputCandidateStatus'] = $loginInfo['CandidateStatus'];
        if (!$loginInfo) {
            $result = array(
                'type' => "warning",
                'content' => "ابتدا وارد سامانه شوید",
                'success' => true
            );
            echo json_encode($result);
            return false;
        }
        if (
            $loginInfo['CandidateStatus'] != 'CandidateResumeAccepted' &&
            $loginInfo['CandidateStatus'] != 'CandidateHasNotContinueCondition' &&
            $loginInfo['CandidateStatus'] != 'CandidateHasContinueCondition'
        ) {
            $result = array(
                'type' => "warning",
                'content' => "دسترسی لازم را ندارید",
                'success' => true
            );
            echo json_encode($result);
            return false;
        }
        $inputs = array_map(function ($v) {
            return strip_tags($v);
        }, $inputs);
        $inputs = array_map(function ($v) {
            return remove_invisible_characters($v);
        }, $inputs);
        $inputs = array_map(function ($v) {
            return makeSafeInput($v);
        }, $inputs);
        $result = $this->ModelCandidate->candidateHasOtherConditionToContinue($inputs);
        echo json_encode($result);
    }

    public function examList(){
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $data['userInfo'] = $this->ModelCandidate->getCandidateByCandidateId($loginInfo['CandidateId']);
        $data['title'] = 'فهرست آزمون های مرحله اول';
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'فهرست آزمون های مرحله اول';
        $data['states'] = $this->ModelCountry->getStateList();
        $data['candidateStateId'] = $loginInfo['CandidateStateId'];
        $data['sidebar'] = $this->load->view('ui/v3/candidate_profile/sidebar', NULL, TRUE);
        $data['api'] = $this->config->item('api');
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/candidate_profile/first_exam_list/index', $data);
        $this->load->view('ui/v3/candidate_profile/first_exam_list/index_css');
        $this->load->view('ui/v3/candidate_profile/first_exam_list/index_js', $data);
        $this->load->view('ui/v3/static/footer');
    }
    public function getFirstStepExamList($stateId)
    {
        $data['data'] = $this->ModelExam->getFirstStepExamByStateId($stateId);
        $data['htmlResult'] = $this->load->view('ui/v3/candidate_profile/first_exam_list/pagination', $data, TRUE);
        unset($data['data']);
        echo json_encode($data);
    }
    public function examListSecond()
    {
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $data['title'] = 'فهرست آزمون های مرحله دوم';
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'فهرست آزمون های مرحله دوم';
        $data['states'] = $this->ModelCountry->getStateList();
        $data['candidateStateId'] = $loginInfo['CandidateStateId'];
        $data['sidebar'] = $this->load->view('ui/v3/candidate_profile/sidebar', NULL, TRUE);
        $data['api'] = $this->config->item('api');
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/candidate_profile/second_exam_list/index', $data);
        $this->load->view('ui/v3/candidate_profile/second_exam_list/index_css');
        $this->load->view('ui/v3/candidate_profile/second_exam_list/index_js', $data);
        $this->load->view('ui/v3/static/footer');
    }
    public function getSecondStepExamList($stateId)
    {
        $data['data'] = $this->ModelExam->getSecondStepExamByStateId($stateId);
        $data['htmlResult'] = $this->load->view('ui/v3/candidate_profile/second_exam_list/pagination', $data, TRUE);
        unset($data['data']);
        echo json_encode($data);
    }
    public function evaluationExam()
    {
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $data['title'] = 'فهرست آزمون کانون ارزیابی';
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'فهرست آزمون کانون ارزیابی';
        $data['states'] = $this->ModelCountry->getStateList();
        $data['candidateStateId'] = $loginInfo['CandidateStateId'];
        $data['sidebar'] = $this->load->view('ui/v3/candidate_profile/sidebar', NULL, TRUE);
        $data['api'] = $this->config->item('api');
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/candidate_profile/evaluation_exam_list/index', $data);
        $this->load->view('ui/v3/candidate_profile/evaluation_exam_list/index_css');
        $this->load->view('ui/v3/candidate_profile/evaluation_exam_list/index_js', $data);
        $this->load->view('ui/v3/static/footer');
    }
    public function getEvaluationExamList()
    {
        $data['data'] = $this->ModelExam->getEvaluationExamList();
        $data['htmlResult'] = $this->load->view('ui/v3/candidate_profile/evaluation_exam_list/pagination', $data, TRUE);
        unset($data['data']);
        echo json_encode($data);
    }
    public function candidateReserveExam()
    {
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $candidateStatus = $this->ModelCandidate->getCandidateByCandidateId($loginInfo['CandidateId'])['CandidateStatus'];

        if ($candidateStatus == 'CandidateResumeMarked' || $candidateStatus == 'CandidateExamFirstStep' || $candidateStatus == 'CandidateExamSecondStep') {
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
            $result = $this->ModelCandidate->candidateReserveExam($inputs);
            echo json_encode($result);
        } else {
            $result = array(
                'type' => "warning",
                'content' => "دسترسی لازم را ندارید",
                'success' => true
            );
            echo json_encode($result);
            return false;
        }
    }

    public function resume(){
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $data['title'] = 'رزومه';
        $data['noImg'] = $this->config->item('defaultImage');
        $data['gifLoader'] = $this->config->item('gifLoader');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'رزومه';
        $data['EnumResumeProfile'] = $this->config->item('EnumResumeProfile');

        $data['userInfo'] = $this->ModelCandidate->getCandidateByCandidateId($loginInfo['CandidateId']);
        $data['resumeSidebar'] = $this->load->view('ui/v3/candidate_profile/resume_sidebar', NULL, TRUE);

        $data['states'] = $this->ModelCountry->getStateList();
        $data['profileImage'] = "";
        if($data['userInfo']['CandidateProfileImage'] != '' && $data['userInfo']['CandidateProfileImage'] != null){
            $data['profileImage'] = $data['userInfo']['CandidateProfileImage'];
        }
        else{
            $data['profileImage'] = $data['noImg'];
        }
        $data['userInfo']['CandidateStateCities'] = $this->ModelCountry->getCityByStateId($data['userInfo']['CandidateStateId']);
        $data['userInfo']['CandidateConstituencyCities'] = $this->ModelCountry->getCityByStateId($data['userInfo']['CandidateConstituencyStateId']);
        $data['userInfo']['CandidateBornCities'] = $this->ModelCountry->getCityByStateId($data['userInfo']['CandidateBornStateId']);
        $data['userInfo']['CandidateFatherBornCities'] = $this->ModelCountry->getCityByStateId($data['userInfo']['CandidateFatherBornStateId']);
        $data['userInfo']['CandidateMotherBornCities'] = $this->ModelCountry->getCityByStateId($data['userInfo']['CandidateMotherBornStateId']);

        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/candidate_profile/home/resume/index', $data);
        $this->load->view('ui/v3/candidate_profile/home/resume/index_css');
        $this->load->view('ui/v3/candidate_profile/home/resume/index_js', $data);
        $this->load->view('ui/v3/static/footer');
    }
    public function candidateUpdatePersonalInfo(){
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $profileImage = $_POST['inputCandidateProfileImage'];
        $inputs = $this->input->post(NULL, TRUE);
        /* validation */
        $this->form_validation->set_data($inputs);
        $this->form_validation->set_rules('inputCandidateFirstName', 'نام', 'trim|required|min_length[2]|max_length[80]');
        $this->form_validation->set_rules('inputCandidateLastName', 'نام خانوادگی', 'trim|required|min_length[2]|max_length[80]');
        $this->form_validation->set_rules('inputCandidatePhone', 'تلفن همراه', 'trim|required|numeric|min_length[2]|max_length[20]');
        $this->form_validation->set_rules('inputCandidateFatherName', 'نام پدر', 'trim|required|min_length[2]|max_length[80]');
        $this->form_validation->set_rules('inputCandidateBirthDate', 'تاریخ تولد', 'trim|required|min_length[2]|max_length[80]');
        $this->form_validation->set_rules('inputCandidateGender', 'جنسیت', 'trim|required|min_length[1]|max_length[80]');
        $this->form_validation->set_rules('inputCandidateMaritalStatus', 'وضعیت تاهل', 'trim|required|min_length[2]|max_length[80]');
        $this->form_validation->set_rules('inputCandidateReligion', 'دین', 'trim|required|min_length[2]|max_length[80]');
        $this->form_validation->set_rules('inputCandidateBornStateId', 'استان محل تولد', 'trim|required|numeric|min_length[1]|max_length[3]');
        $this->form_validation->set_rules('inputCandidateBornCityId', 'شهر محل تولد', 'trim|required|numeric|min_length[1]|max_length[3]');
        $this->form_validation->set_rules('inputCandidateFatherBornStateId', 'استان محل تولد پدر', 'trim|required|numeric|min_length[1]|max_length[3]');
        $this->form_validation->set_rules('inputCandidateFatherBornCityId', 'شهر محل تولد پدر', 'trim|required|numeric|min_length[1]|max_length[3]');
        $this->form_validation->set_rules('inputCandidateMotherBornStateId', 'استان محل تولد مادر', 'trim|required|numeric|min_length[1]|max_length[3]');
        $this->form_validation->set_rules('inputCandidateMotherBornCityId', 'شهر محل تولد مادر', 'trim|required|numeric|min_length[1]|max_length[3]');
        $this->form_validation->set_rules('inputCandidateAddressStateId', 'استان محل سکونت', 'trim|required|numeric|min_length[1]|max_length[3]');
        $this->form_validation->set_rules('inputCandidateAddressCityId', 'شهر محل سکونت', 'trim|required|numeric|min_length[1]|max_length[3]');
        $this->form_validation->set_rules('inputCandidateAddressPart', 'بخش', 'trim|required|min_length[1]|max_length[254]');
        $this->form_validation->set_rules('inputCandidateAddress', 'آدرس محل سکونت', 'trim|required|max_length[254]');
        $this->form_validation->set_rules('inputCandidateLandLinePhone', 'تلفن ثابت', 'trim|required|numeric|min_length[2]|max_length[20]');
        $this->form_validation->set_rules('inputCandidateConstituencyStateId', 'استان حوزه انتخاباتی', 'trim|required|numeric|min_length[1]|max_length[3]');
        $this->form_validation->set_rules('inputCandidateConstituencyCityId', 'شهر حوزه انتخاباتی', 'trim|required|numeric|min_length[1]|max_length[3]');
        if ($this->form_validation->run() == FALSE) {
            $arr = array(
                'type' => "red",
                'content' => validation_errors()
            );
            echo json_encode($arr);
            die();
        }
        /* End validation*/

        $electionId = $this->ModelCountry->getElectionIdByCityId($inputs['inputCandidateConstituencyCityId'])[0]['ElectionId'];
        $inputs['inputCandidateElectionId'] = $electionId;
        $inputs['inputCandidateId'] = $loginInfo['CandidateId'];

        $roles = $inputs['inputCandidateRoles'];
        unset($inputs['inputCandidateRoles']);
        $inputs = array_map(function ($v) {
            return strip_tags($v);
        }, $inputs);
        $inputs = array_map(function ($v) {
            return remove_invisible_characters($v);
        }, $inputs);
        $inputs = array_map(function ($v) {
            return makeSafeInput($v);
        }, $inputs);
        $inputs['inputCandidateRoles'] = $roles;
        $inputs['inputCandidateProfileImage'] = $profileImage;

        $result = $this->ModelProfile->doUpdateCandidatePersonalInfo($inputs);
        echo json_encode($result);
    }

    public function skills(){
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $data['title'] = 'رزومه';
        $data['noImg'] = $this->config->item('defaultImage');
        $data['gifLoader'] = $this->config->item('gifLoader');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'مهارت ها';
        $data['EnumResumeProfile'] = $this->config->item('EnumResumeProfile');

        $data['userInfo'] = $this->ModelCandidate->getCandidateByCandidateId($loginInfo['CandidateId']);
        $data['resumeSidebar'] = $this->load->view('ui/v3/candidate_profile/resume_sidebar', NULL, TRUE);
        $data['userInfo']['candidateSkills'] = $this->ModelProfile->getCandidateSkillsByCandidateId($data['userInfo']['CandidateId']);


        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/candidate_profile/home/skills/index', $data);
        $this->load->view('ui/v3/candidate_profile/home/skills/index_css');
        $this->load->view('ui/v3/candidate_profile/home/skills/index_js', $data);
        $this->load->view('ui/v3/static/footer');
    }
    public function candidateUpdateSkills(){
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $inputs = $this->input->post(NULL, TRUE);
        $inputs['inputCandidateId'] = $loginInfo['CandidateId'];
        /*$inputs = array_map(function ($v) {
            return strip_tags($v);
        }, $inputs);
        $inputs = array_map(function ($v) {
            return remove_invisible_characters($v);
        }, $inputs);
        $inputs = array_map(function ($v) {
            return makeSafeInput($v);
        }, $inputs);*/
        $result = $this->ModelProfile->candidateUpdateSkills($inputs);
        echo json_encode($result);
    }

    public function scienceBackground(){
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $data['title'] = 'سوابق علمی پژوهشی';
        $data['noImg'] = $this->config->item('defaultImage');
        $data['gifLoader'] = $this->config->item('gifLoader');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'سوابق علمی پژوهشی';
        $data['EnumResumeProfile'] = $this->config->item('EnumResumeProfile');
        $data['userInfo'] = $this->ModelCandidate->getCandidateByCandidateId($loginInfo['CandidateId']);
        $data['resumeSidebar'] = $this->load->view('ui/v3/candidate_profile/resume_sidebar', NULL, TRUE);


        $data['userInfo']['candidateBooks'] = $this->ModelProfile->getCandidateBooksByCandidateId($data['userInfo']['CandidateId']);
        $data['userInfo']['candidateArticles'] = $this->ModelProfile->getCandidateArticlesByCandidateId($data['userInfo']['CandidateId']);
        $data['userInfo']['candidateResearch'] = $this->ModelProfile->getCandidateResearchByCandidateId($data['userInfo']['CandidateId']);
        $data['userInfo']['candidateTranslation'] = $this->ModelProfile->getCandidateTranslationByCandidateId($data['userInfo']['CandidateId']);
        $data['userInfo']['candidateInvention'] = $this->ModelProfile->getCandidateInventionByCandidateId($data['userInfo']['CandidateId']);
        $data['userInfo']['candidateConference'] = $this->ModelProfile->getCandidateConferenceByCandidateId($data['userInfo']['CandidateId']);



        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/candidate_profile/home/science_background/index', $data);
        $this->load->view('ui/v3/candidate_profile/home/science_background/index_css');
        $this->load->view('ui/v3/candidate_profile/home/science_background/index_js', $data);
        $this->load->view('ui/v3/static/footer');
    }
    public function candidateUpdateBooks(){
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $inputs = $this->input->post(NULL, TRUE);
        $inputs['inputCandidateId'] = $loginInfo['CandidateId'];
        $result = $this->ModelProfile->candidateUpdateBooks($inputs);
        echo json_encode($result);
    }
    public function candidateUpdateArticles(){
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $inputs = $this->input->post(NULL, TRUE);
        $inputs['inputCandidateId'] = $loginInfo['CandidateId'];
        $result = $this->ModelProfile->candidateUpdateArticles($inputs);
        echo json_encode($result);
    }
    public function candidateUpdateResearch(){
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $inputs = $this->input->post(NULL, TRUE);
        $inputs['inputCandidateId'] = $loginInfo['CandidateId'];
        $result = $this->ModelProfile->candidateUpdateResearch($inputs);
        echo json_encode($result);
    }
    public function candidateUpdateTranslation(){
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $inputs = $this->input->post(NULL, TRUE);
        $inputs['inputCandidateId'] = $loginInfo['CandidateId'];
        $result = $this->ModelProfile->candidateUpdateTranslation($inputs);
        echo json_encode($result);
    }
    public function candidateUpdateInvention(){
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $inputs = $this->input->post(NULL, TRUE);
        $inputs['inputCandidateId'] = $loginInfo['CandidateId'];
        $result = $this->ModelProfile->candidateUpdateInvention($inputs);
        echo json_encode($result);
    }
    public function candidateUpdateConference(){
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $inputs = $this->input->post(NULL, TRUE);
        $inputs['inputCandidateId'] = $loginInfo['CandidateId'];
        $result = $this->ModelProfile->candidateUpdateConference($inputs);
        echo json_encode($result);
    }

    public function jobHistory(){
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $data['title'] = 'رزومه';
        $data['noImg'] = $this->config->item('defaultImage');
        $data['gifLoader'] = $this->config->item('gifLoader');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'مهارت ها';
        $data['EnumResumeProfile'] = $this->config->item('EnumResumeProfile');
        $data['userInfo'] = $this->ModelCandidate->getCandidateByCandidateId($loginInfo['CandidateId']);
        $data['resumeSidebar'] = $this->load->view('ui/v3/candidate_profile/resume_sidebar', NULL, TRUE);
        $data['userInfo']['candidateJobHistory'] = $this->ModelProfile->getCandidateJobHistoryByCandidateId($data['userInfo']['CandidateId']);

        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/candidate_profile/home/job_history/index', $data);
        $this->load->view('ui/v3/candidate_profile/home/job_history/index_css');
        $this->load->view('ui/v3/candidate_profile/home/job_history/index_js', $data);
        $this->load->view('ui/v3/static/footer');
    }
    public function candidateUpdateJobHistory(){
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $inputs = $this->input->post(NULL, TRUE);
        $inputs['inputCandidateId'] = $loginInfo['CandidateId'];
        $result = $this->ModelProfile->candidateUpdateJobHistory($inputs);
        echo json_encode($result);
    }

    public function academicBackground(){
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $data['title'] = 'رزومه';
        $data['noImg'] = $this->config->item('defaultImage');
        $data['gifLoader'] = $this->config->item('gifLoader');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'مهارت ها';
        $data['EnumResumeProfile'] = $this->config->item('EnumResumeProfile');
        $data['userInfo'] = $this->ModelCandidate->getCandidateByCandidateId($loginInfo['CandidateId']);
        $data['resumeSidebar'] = $this->load->view('ui/v3/candidate_profile/resume_sidebar', NULL, TRUE);

        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/candidate_profile/home/academic_background/index', $data);
        $this->load->view('ui/v3/candidate_profile/home/academic_background/index_css');
        $this->load->view('ui/v3/candidate_profile/home/academic_background/index_js', $data);
        $this->load->view('ui/v3/static/footer');
    }
    public function candidateUpdateAcademicBackground(){
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $inputs = $this->input->post(NULL, TRUE);
        $inputs['inputCandidateId'] = $loginInfo['CandidateId'];
        $result = $this->ModelProfile->candidateUpdateJobHistory($inputs);
        echo json_encode($result);
    }


    public function socialCulturalBackground(){
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $data['title'] = 'رزومه';
        $data['noImg'] = $this->config->item('defaultImage');
        $data['gifLoader'] = $this->config->item('gifLoader');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'مهارت ها';
        $data['EnumResumeProfile'] = $this->config->item('EnumResumeProfile');
        $data['userInfo'] = $this->ModelCandidate->getCandidateByCandidateId($loginInfo['CandidateId']);
        $data['resumeSidebar'] = $this->load->view('ui/v3/candidate_profile/resume_sidebar', NULL, TRUE);

        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/candidate_profile/home/social_cultural_background/index', $data);
        $this->load->view('ui/v3/candidate_profile/home/social_cultural_background/index_css');
        $this->load->view('ui/v3/candidate_profile/home/social_cultural_background/index_js', $data);
        $this->load->view('ui/v3/static/footer');
    }
    /* get out of panel - session destroyed */
    public function logOut()
    {
        $this->session->unset_userdata('UserLoginInfo');
        $this->session->unset_userdata('UserIsLogged');
        redirect(base_url());
    }
}