<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profile extends CI_Controller{
    public function __construct()
    {
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
    public function getResumeStatus()
    {
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
    public function examList()
    {
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
        $this->load->view('ui/v3/candidate_profile/exams/first_exam_list/index', $data);
        $this->load->view('ui/v3/candidate_profile/exams/first_exam_list/index_css');
        $this->load->view('ui/v3/candidate_profile/exams/first_exam_list/index_js', $data);
        $this->load->view('ui/v3/static/footer');
    }
    public function getFirstStepExamList($stateId)
    {
        $data['data'] = $this->ModelExam->getFirstStepExamByStateId($stateId);
        $data['htmlResult'] = $this->load->view('ui/v3/candidate_profile/exams/first_exam_list/pagination', $data, TRUE);
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
        $this->load->view('ui/v3/candidate_profile/exams/second_exam_list/index', $data);
        $this->load->view('ui/v3/candidate_profile/exams/second_exam_list/index_css');
        $this->load->view('ui/v3/candidate_profile/exams/second_exam_list/index_js', $data);
        $this->load->view('ui/v3/static/footer');
    }
    public function getSecondStepExamList($stateId)
    {
        $data['data'] = $this->ModelExam->getSecondStepExamByStateId($stateId);
        $data['htmlResult'] = $this->load->view('ui/v3/candidate_profile/exams/second_exam_list/pagination', $data, TRUE);
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
        $this->load->view('ui/v3/candidate_profile/exams/evaluation_exam_list/index', $data);
        $this->load->view('ui/v3/candidate_profile/exams/evaluation_exam_list/index_css');
        $this->load->view('ui/v3/candidate_profile/exams/evaluation_exam_list/index_js', $data);
        $this->load->view('ui/v3/static/footer');
    }
    public function getEvaluationExamList()
    {
        $data['data'] = $this->ModelExam->getEvaluationExamList();
        $data['htmlResult'] = $this->load->view('ui/v3/candidate_profile/exams/evaluation_exam_list/pagination', $data, TRUE);
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
    /* For Resume -------------------------------------------------------------*/
    public function resume()
    {
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $data['title'] = 'رزومه';
        $data['noImg'] = $this->config->item('defaultImage');
        $data['gifLoader'] = $this->config->item('gifLoader');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'پروفایل شخصی';
        $data['EnumResumeProfile'] = $this->config->item('EnumResumeProfile');
        $data['userInfo'] = $this->ModelCandidate->getCandidateByCandidateId($loginInfo['CandidateId']);
        $data['resumeSidebar'] = $this->load->view('ui/v3/candidate_profile/resume_sidebar', NULL, TRUE);

        $data['states'] = $this->ModelCountry->getStateList();
        $data['profileImage'] = "";
        if ($data['userInfo']['CandidateProfileImage'] != '' && $data['userInfo']['CandidateProfileImage'] != null) {
            $data['profileImage'] = $data['userInfo']['CandidateProfileImage'];
        } else {
            $data['profileImage'] = $data['noImg'];
        }
        $data['userInfo']['CandidateStateCities'] = $this->ModelCountry->getCityByStateId($data['userInfo']['CandidateStateId']);
        $data['userInfo']['CandidateConstituencyCities'] = $this->ModelCountry->getCityByStateId($data['userInfo']['CandidateConstituencyStateId']);
        $data['userInfo']['CandidateBornCities'] = $this->ModelCountry->getCityByStateId($data['userInfo']['CandidateBornStateId']);
        $data['userInfo']['CandidateFatherBornCities'] = $this->ModelCountry->getCityByStateId($data['userInfo']['CandidateFatherBornStateId']);
        $data['userInfo']['CandidateMotherBornCities'] = $this->ModelCountry->getCityByStateId($data['userInfo']['CandidateMotherBornStateId']);
        $data['userInfo']['CandidateAddressCities'] = $this->ModelCountry->getCityByStateId($data['userInfo']['CandidateAddressStateId']);


        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/candidate_profile/home/candidate_resume/resume/index', $data);
        $this->load->view('ui/v3/candidate_profile/home/candidate_resume/resume/index_css');
        $this->load->view('ui/v3/candidate_profile/home/candidate_resume/resume/index_js', $data);
        $this->load->view('ui/v3/static/footer');
    }
    public function candidateUpdatePersonalInfo()
    {
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $profileImage = $_POST['inputCandidateProfileImage'];
        $inputs = $this->input->post(NULL, TRUE);
        /* validation */


        $inputs['inputCandidateBirthDate'] = FaToEn($inputs['inputCandidateBirthDate']);
        $inputs['inputCandidatePhone'] = FaToEn($inputs['inputCandidatePhone']);
        $inputs['inputCandidateLandLinePhone'] = FaToEn($inputs['inputCandidateLandLinePhone']);
        $inputs['inputCandidateNationalCode'] = FaToEn($inputs['inputCandidateNationalCode']);

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
                'content' => 'تمامی مقادیر ستاره دار را وارد کنید'
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

        $result = $this->ModelProfile->candidateUpdatePersonalInfo($inputs);
        echo json_encode($result);
    }
    public function academicBackground()
    {
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $data['title'] = 'رزومه';
        $data['noImg'] = $this->config->item('defaultImage');
        $data['gifLoader'] = $this->config->item('gifLoader');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'سوابق تحصیلی';
        $data['EnumResumeProfile'] = $this->config->item('EnumResumeProfile');
        $data['userInfo'] = $this->ModelCandidate->getCandidateByCandidateId($loginInfo['CandidateId']);
        $data['resumeSidebar'] = $this->load->view('ui/v3/candidate_profile/resume_sidebar', NULL, TRUE);
        $data['userInfo']['candidateAcademicBackground'] = $this->ModelProfile->getCandidateAcademicBackgroundByCandidateId($data['userInfo']['CandidateId']);

        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/candidate_profile/home/candidate_resume/academic_background/index', $data);
        $this->load->view('ui/v3/candidate_profile/home/candidate_resume/academic_background/index_css');
        $this->load->view('ui/v3/candidate_profile/home/candidate_resume/academic_background/index_js', $data);
        $this->load->view('ui/v3/static/footer');
    }
    public function candidateUpdateAcademicBackground()
    {
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $inputs = $this->input->post(NULL, TRUE);
        $inputs['inputCandidateId'] = $loginInfo['CandidateId'];
        $result = $this->ModelProfile->candidateUpdateAcademicBackground($inputs);
        echo json_encode($result);
    }
    public function militaryStatus()
    {
        $loginInfo = $this->session->userdata('UserLoginInfo');

        if ($loginInfo['CandidateGender'] == 'Female') {
            redirect(base_url('Profile/jobHistory'));
        }
        $data['title'] = 'رزومه';
        $data['noImg'] = $this->config->item('defaultImage');
        $data['gifLoader'] = $this->config->item('gifLoader');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'سوابق نظام وظیفه';
        $data['EnumResumeProfile'] = $this->config->item('EnumResumeProfile');
        $data['userInfo'] = $this->ModelCandidate->getCandidateByCandidateId($loginInfo['CandidateId']);
        $data['resumeSidebar'] = $this->load->view('ui/v3/candidate_profile/resume_sidebar', NULL, TRUE);
        $data['userInfo']['candidateMilitaryStatus'] = $this->ModelProfile->getCandidateMilitaryStatusByCandidateId($data['userInfo']['CandidateId'])[0];

        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/candidate_profile/home/candidate_resume/military_status/index', $data);
        $this->load->view('ui/v3/candidate_profile/home/candidate_resume/military_status/index_css');
        $this->load->view('ui/v3/candidate_profile/home/candidate_resume/military_status/index_js', $data);
        $this->load->view('ui/v3/static/footer');
    }
    public function candidateUpdateMilitaryStatus()
    {
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $inputs = $this->input->post(NULL, TRUE);
        $inputs['inputCandidateId'] = $loginInfo['CandidateId'];
        $result = $this->ModelProfile->candidateUpdateMilitaryStatus($inputs);
        echo json_encode($result);
    }
    public function jobHistory()
    {
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $data['title'] = 'رزومه';
        $data['noImg'] = $this->config->item('defaultImage');
        $data['gifLoader'] = $this->config->item('gifLoader');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'سوابق شغلی';
        $data['EnumResumeProfile'] = $this->config->item('EnumResumeProfile');
        $data['userInfo'] = $this->ModelCandidate->getCandidateByCandidateId($loginInfo['CandidateId']);
        $data['resumeSidebar'] = $this->load->view('ui/v3/candidate_profile/resume_sidebar', NULL, TRUE);
        $data['userInfo']['candidateJobHistory'] = $this->ModelProfile->getCandidateJobHistoryByCandidateId($data['userInfo']['CandidateId']);

        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/candidate_profile/home/candidate_resume/job_history/index', $data);
        $this->load->view('ui/v3/candidate_profile/home/candidate_resume/job_history/index_css');
        $this->load->view('ui/v3/candidate_profile/home/candidate_resume/job_history/index_js', $data);
        $this->load->view('ui/v3/static/footer');
    }
    public function candidateUpdateJobHistory()
    {
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $inputs = $this->input->post(NULL, TRUE);
        $inputs['inputCandidateId'] = $loginInfo['CandidateId'];
        $result = $this->ModelProfile->candidateUpdateJobHistory($inputs);
        echo json_encode($result);
    }
    public function socialCulturalBackground()
    {
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $data['title'] = 'رزومه';
        $data['noImg'] = $this->config->item('defaultImage');
        $data['gifLoader'] = $this->config->item('gifLoader');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'سوابق فرهنگی اجتماعی';
        $data['EnumResumeProfile'] = $this->config->item('EnumResumeProfile');
        $data['userInfo'] = $this->ModelCandidate->getCandidateByCandidateId($loginInfo['CandidateId']);
        $data['resumeSidebar'] = $this->load->view('ui/v3/candidate_profile/resume_sidebar', NULL, TRUE);
        $data['userInfo']['candidateSocialCulturalBackground'] = $this->ModelProfile->getCandidateSocialCulturalBackgroundByCandidateId($data['userInfo']['CandidateId']);

        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/candidate_profile/home/candidate_resume/social_cultural_background/index', $data);
        $this->load->view('ui/v3/candidate_profile/home/candidate_resume/social_cultural_background/index_css');
        $this->load->view('ui/v3/candidate_profile/home/candidate_resume/social_cultural_background/index_js', $data);
        $this->load->view('ui/v3/static/footer');
    }
    public function candidateUpdateSocialCulturalBackground()
    {
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $inputs = $this->input->post(NULL, TRUE);
        $inputs['inputCandidateId'] = $loginInfo['CandidateId'];
        $result = $this->ModelProfile->candidateUpdateSocialCulturalBackground($inputs);
        echo json_encode($result);
    }
    public function politicBackground()
    {
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $data['title'] = 'رزومه';
        $data['noImg'] = $this->config->item('defaultImage');
        $data['gifLoader'] = $this->config->item('gifLoader');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'سوابق سیاسی';
        $data['EnumResumeProfile'] = $this->config->item('EnumResumeProfile');
        $data['userInfo'] = $this->ModelCandidate->getCandidateByCandidateId($loginInfo['CandidateId']);
        $data['resumeSidebar'] = $this->load->view('ui/v3/candidate_profile/resume_sidebar', NULL, TRUE);
        $data['userInfo']['politicBackground'] = $this->ModelProfile->getCandidateUpdatePoliticBackgroundByCandidateId($data['userInfo']['CandidateId']);

        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/candidate_profile/home/candidate_resume/politic_background/index', $data);
        $this->load->view('ui/v3/candidate_profile/home/candidate_resume/politic_background/index_css');
        $this->load->view('ui/v3/candidate_profile/home/candidate_resume/politic_background/index_js', $data);
        $this->load->view('ui/v3/static/footer');
    }
    public function candidateUpdatePoliticBackground()
    {
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $inputs = $this->input->post(NULL, TRUE);
        $inputs['inputCandidateId'] = $loginInfo['CandidateId'];
        $result = $this->ModelProfile->candidateUpdatePoliticBackground($inputs);
        echo json_encode($result);
    }
    public function scienceBackground()
    {
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
        $this->load->view('ui/v3/candidate_profile/home/candidate_resume/science_background/index', $data);
        $this->load->view('ui/v3/candidate_profile/home/candidate_resume/science_background/index_css');
        $this->load->view('ui/v3/candidate_profile/home/candidate_resume/science_background/index_js', $data);
        $this->load->view('ui/v3/static/footer');
    }
    public function candidateUpdateBooks()
    {
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $inputs = $this->input->post(NULL, TRUE);
        $inputs['inputCandidateId'] = $loginInfo['CandidateId'];
        $result = $this->ModelProfile->candidateUpdateBooks($inputs);
        echo json_encode($result);
    }
    public function candidateUpdateArticles()
    {
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $inputs = $this->input->post(NULL, TRUE);
        $inputs['inputCandidateId'] = $loginInfo['CandidateId'];
        $result = $this->ModelProfile->candidateUpdateArticles($inputs);
        echo json_encode($result);
    }
    public function candidateUpdateResearch()
    {
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $inputs = $this->input->post(NULL, TRUE);
        $inputs['inputCandidateId'] = $loginInfo['CandidateId'];
        $result = $this->ModelProfile->candidateUpdateResearch($inputs);
        echo json_encode($result);
    }
    public function candidateUpdateTranslation()
    {
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $inputs = $this->input->post(NULL, TRUE);
        $inputs['inputCandidateId'] = $loginInfo['CandidateId'];
        $result = $this->ModelProfile->candidateUpdateTranslation($inputs);
        echo json_encode($result);
    }
    public function candidateUpdateInvention()
    {
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $inputs = $this->input->post(NULL, TRUE);
        $inputs['inputCandidateId'] = $loginInfo['CandidateId'];
        $result = $this->ModelProfile->candidateUpdateInvention($inputs);
        echo json_encode($result);
    }
    public function candidateUpdateConference()
    {
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $inputs = $this->input->post(NULL, TRUE);
        $inputs['inputCandidateId'] = $loginInfo['CandidateId'];
        $result = $this->ModelProfile->candidateUpdateConference($inputs);
        echo json_encode($result);
    }
    public function skills()
    {
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
        $this->load->view('ui/v3/candidate_profile/home/candidate_resume/skills/index', $data);
        $this->load->view('ui/v3/candidate_profile/home/candidate_resume/skills/index_css');
        $this->load->view('ui/v3/candidate_profile/home/candidate_resume/skills/index_js', $data);
        $this->load->view('ui/v3/static/footer');
    }
    public function candidateUpdateSkills()
    {
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
    public function veteran()
    {
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $data['title'] = 'رزومه';
        $data['noImg'] = $this->config->item('defaultImage');
        $data['gifLoader'] = $this->config->item('gifLoader');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'سوابق ایثارگری';
        $data['EnumResumeProfile'] = $this->config->item('EnumResumeProfile');

        $data['userInfo'] = $this->ModelCandidate->getCandidateByCandidateId($loginInfo['CandidateId']);
        $data['resumeSidebar'] = $this->load->view('ui/v3/candidate_profile/resume_sidebar', NULL, TRUE);

        $candidateVeteran = $this->ModelProfile->getCandidateVeteranByCandidateId($data['userInfo']['CandidateId']);

        $temp = array(
            'IsActive' => 0,
            'CandidateVeteranFamilyTitle' => '',
            'CandidateVeteranType' => '',
            'CandidateVeteranPercent' => '',
            'CandidateVeteranMonth' => '',
            'CandidateVeteranYear' => '',
        );
        $data['Self'] = $temp;
        $data['Wife'] = $temp;
        $data['Children'] = $temp;
        $data['Parents'] = $temp;
        $data['SisterBrother'] = $temp;

        for ($i = 0; $i < count($candidateVeteran); $i++) {
            $item = $candidateVeteran[$i];
            switch ($item['CandidateVeteranFamilyTitle']) {
                case  'Self':
                    $data['Self'] = $item;
                    break;
                case  'Wife':
                    $data['Wife'] = $item;
                    break;
                case  'Children':
                    $data['Children'] = $item;
                    break;
                case  'Parents':
                    $data['Parents'] = $item;
                    break;
                case  'SisterBrother':
                    $data['SisterBrother'] = $item;
                    break;
            }
        }


        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/candidate_profile/home/candidate_resume/veteran/index', $data);
        $this->load->view('ui/v3/candidate_profile/home/candidate_resume/veteran/index_css');
        $this->load->view('ui/v3/candidate_profile/home/candidate_resume/veteran/index_js', $data);
        $this->load->view('ui/v3/static/footer');
    }
    public function candidateUpdateVeteran()
    {
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $inputs = $this->input->post(NULL, TRUE);
        $inputs['inputCandidateId'] = $loginInfo['CandidateId'];
        $result = $this->ModelProfile->candidateUpdateVeteran($inputs);
        echo json_encode($result);
    }
    public function finance(){
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $data['title'] = 'رزومه';
        $data['noImg'] = $this->config->item('defaultImage');
        $data['gifLoader'] = $this->config->item('gifLoader');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'اطلاعات مالی';
        $data['EnumResumeProfile'] = $this->config->item('EnumResumeProfile');

        $data['countries'] = $this->ModelCountry->getCountryList();
        $data['states'] = $this->ModelCountry->getStateList();
        $data['userInfo'] = $this->ModelCandidate->getCandidateByCandidateId($loginInfo['CandidateId']);
        $data['resumeSidebar'] = $this->load->view('ui/v3/candidate_profile/resume_sidebar', NULL, TRUE);

        $data['finance'] = $this->ModelProfile->getCandidateFinanceByCandidateId($loginInfo['CandidateId']);

        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/candidate_profile/home/candidate_resume/finance/index', $data);
        $this->load->view('ui/v3/candidate_profile/home/candidate_resume/finance/index_css');
        $this->load->view('ui/v3/candidate_profile/home/candidate_resume/finance/index_js', $data);
        $this->load->view('ui/v3/static/footer');
    }
    public function candidateUpdateFinance()
    {
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $inputs = $this->input->post(NULL, TRUE);
        $inputs['inputCandidateId'] = $loginInfo['CandidateId'];
        $tableName = "candidate_price_";
        switch ($inputs['target']) {
            case 'RealEstate':
                /*******************************************************************************************************/
                $tableName .= "realestates";
                $this->db->delete($tableName, array(
                    'CandidateId' => $inputs['inputCandidateId'],
                    'ForWho' => $inputs['role'],
                ));
                if(!isset($inputs['data'])){
                    $arr = array('type' => "green", 'content' => "بروزرسانی با موفقیت انجام شد", 'success' => true);
                    echo json_encode($arr); die();
                }
                for ($i = 0; $i < count($inputs['data']);) {
                    $UserArray = array(
                        'CandidateId' => $inputs['inputCandidateId'],
                        'RealEstateType' => $inputs['data'][$i]['value'],
                        'RealEstateOwnershipDate' => $inputs['data'][$i + 1]['value'],
                        'RealEstateOwnershipType' => $inputs['data'][$i + 2]['value'],
                        'RealEstateCountryId' => $inputs['data'][$i + 3]['value'],
                        'RealEstateStateId' => $inputs['data'][$i + 4]['value'],
                        'RealEstateCityId' => $inputs['data'][$i + 5]['value'],
                        'RealEstatePortion' => $inputs['data'][$i + 6]['value'],
                        'RealEstateExtent' => $inputs['data'][$i + 7]['value'],
                        'RealEstateExtentUnit' => $inputs['data'][$i + 8]['value'],
                        'RealEstateBuyTimePrice' => $inputs['data'][$i + 10]['value'] . "." . $inputs['data'][$i + 9]['value'] . " " . $inputs['data'][$i + 11]['value'],
                        'RealEstateNowTimePrice' => $inputs['data'][$i + 13]['value'] . "." . $inputs['data'][$i + 12]['value'] . " " . $inputs['data'][$i + 14]['value'],
                        'RealEstateAddress' => $inputs['data'][$i + 15]['value'],
                        'ForWho' => $inputs['role'],
                    );
                    $this->db->insert($tableName, $UserArray);
                    $i = $i + 16;
                }
                $arr = array(
                    'type' => "green",
                    'content' => "بروزرسانی با موفقیت انجام شد",
                    'success' => true
                );
                echo json_encode($arr);
                /*******************************************************************************************************/
                break;
            case 'Vehicle':
                /*******************************************************************************************************/
                $tableName .= "vehicle";
                $this->db->delete($tableName, array(
                    'CandidateId' => $inputs['inputCandidateId'],
                    'ForWho' => $inputs['role']
                ));
                if(!isset($inputs['data'])){
                    $arr = array('type' => "green", 'content' => "بروزرسانی با موفقیت انجام شد", 'success' => true);
                    echo json_encode($arr); die();
                }
                for ($i = 0; $i < count($inputs['data']);) {
                    $UserArray = array(
                        'CandidateId' => $inputs['inputCandidateId'],
                        'VehicleType' => $inputs['data'][$i]['value'],
                        'VehicleOwnershipDate' => $inputs['data'][$i + 1]['value'],
                        'VehicleOwnershipType' => $inputs['data'][$i + 2]['value'],
                        'VehicleBuyTimePrice' => $inputs['data'][$i + 4]['value'] . "." . $inputs['data'][$i + 3]['value'] . " " . $inputs['data'][$i + 5]['value'],
                        'VehicleNowTimePrice' => $inputs['data'][$i + 7]['value'] . "." . $inputs['data'][$i + 6]['value'] . " " . $inputs['data'][$i + 8]['value'],
                        'VehiclePortion' => $inputs['data'][$i + 9]['value'],
                        'ForWho' => $inputs['role'],
                    );
                    $this->db->insert($tableName, $UserArray);
                    $i = $i + 10;
                }
                $arr = array(
                    'type' => "green",
                    'content' => "بروزرسانی با موفقیت انجام شد",
                    'success' => true
                );
                echo json_encode($arr);
                /*******************************************************************************************************/
                break;
            case 'Invest':
                /*******************************************************************************************************/
                $tableName .= "invest";
                $this->db->delete($tableName, array(
                    'CandidateId' => $inputs['inputCandidateId'],
                    'ForWho' => $inputs['role']
                ));
                if(!isset($inputs['data'])){
                    $arr = array('type' => "green", 'content' => "بروزرسانی با موفقیت انجام شد", 'success' => true);
                    echo json_encode($arr); die();
                }
                for ($i = 0; $i < count($inputs['data']);) {
                    $UserArray = array(
                        'CandidateId' => $inputs['inputCandidateId'],
                        'InvestTitle' => $inputs['data'][$i]['value'],
                        'InvestDate' => $inputs['data'][$i + 1]['value'],
                        'InvestOwnershipType' => $inputs['data'][$i + 2]['value'],
                        'InvestBuyTimePrice' => $inputs['data'][$i + 4]['value'] . "." . $inputs['data'][$i + 3]['value'] . " " . $inputs['data'][$i + 5]['value'],
                        'InvestNowTimePrice' => $inputs['data'][$i + 7]['value'] . "." . $inputs['data'][$i + 6]['value'] . " " . $inputs['data'][$i + 8]['value'],
                        'ForWho' => $inputs['role'],
                    );
                    $this->db->insert($tableName, $UserArray);
                    $i = $i + 9;
                }
                $arr = array(
                    'type' => "green",
                    'content' => "بروزرسانی با موفقیت انجام شد",
                    'success' => true
                );
                echo json_encode($arr);
                /*******************************************************************************************************/
                break;
            case 'BankAccount':
                /*******************************************************************************************************/
                $tableName .= "bank_account";
                $this->db->delete($tableName, array(
                    'CandidateId' => $inputs['inputCandidateId'],
                    'ForWho' => $inputs['role']
                ));
                if(!isset($inputs['data'])){
                    $arr = array('type' => "green", 'content' => "بروزرسانی با موفقیت انجام شد", 'success' => true);
                    echo json_encode($arr); die();
                }
                for ($i = 0; $i < count($inputs['data']);) {
                    $UserArray = array(
                        'CandidateId' => $inputs['inputCandidateId'],
                        'BankAccountTitle' => $inputs['data'][$i]['value'],
                        'BankAccountPrice' => $inputs['data'][$i + 2]['value'] . "." . $inputs['data'][$i + 1]['value'] . " " . $inputs['data'][$i + 3]['value'],
                        'BankAccountCountryId' => $inputs['data'][$i + 4]['value'],
                        'ForWho' => $inputs['role'],
                    );
                    $this->db->insert($tableName, $UserArray);
                    $i = $i + 5;
                }
                $arr = array(
                    'type' => "green",
                    'content' => "بروزرسانی با موفقیت انجام شد",
                    'success' => true
                );
                echo json_encode($arr);
                /*******************************************************************************************************/
                break;
            case 'Credit-Debtor':
                /*******************************************************************************************************/
                $tableName .= "credit_debtor";
                $this->db->delete($tableName, array(
                    'CandidateId' => $inputs['inputCandidateId'],
                    'ForWho' => $inputs['role']
                ));
                if(!isset($inputs['data'])){
                    $arr = array('type' => "green", 'content' => "بروزرسانی با موفقیت انجام شد", 'success' => true);
                    echo json_encode($arr); die();
                }
                for ($i = 0; $i < count($inputs['data']);) {
                    $UserArray = array(
                        'CandidateId' => $inputs['inputCandidateId'],
                        'CreditPrice' => $inputs['data'][$i +1]['value'] . "." . $inputs['data'][$i]['value'] . " " . $inputs['data'][$i + 2]['value'],
                        'DebotrPrice' => $inputs['data'][$i + 4]['value'] . "." . $inputs['data'][$i + 3]['value'] . " " . $inputs['data'][$i + 5]['value'],
                        'DebotrDescription' => $inputs['data'][$i + 6]['value'],
                        'ForWho' => $inputs['role'],
                    );
                    $this->db->insert($tableName, $UserArray);
                    $i = $i + 7;
                }
                $arr = array(
                    'type' => "green",
                    'content' => "بروزرسانی با موفقیت انجام شد",
                    'success' => true
                );
                echo json_encode($arr);
                /*******************************************************************************************************/
                break;
            case 'Goods':
                /*******************************************************************************************************/
                $tableName .= "goods";
                $this->db->delete($tableName, array(
                    'CandidateId' => $inputs['inputCandidateId'],
                    'ForWho' => $inputs['role']
                ));
                if(!isset($inputs['data'])){
                    $arr = array('type' => "green", 'content' => "بروزرسانی با موفقیت انجام شد", 'success' => true);
                    echo json_encode($arr); die();
                }
                for ($i = 0; $i < count($inputs['data']);) {
                    $UserArray = array(
                        'CandidateId' => $inputs['inputCandidateId'],
                        'GoodsType' => $inputs['data'][$i]['value'] ,
                        'GoodsOwnershipStartDate' => $inputs['data'][$i + 1]['value'],
                        'GoodsCount' => $inputs['data'][$i + 2]['value'],
                        'GoodsBuyTimePrice' => $inputs['data'][$i + 4]['value'] . "." . $inputs['data'][$i + 3]['value'] . " " . $inputs['data'][$i + 5]['value'],
                        'GoodsNowTimePrice' => $inputs['data'][$i + 7]['value'] . "." . $inputs['data'][$i + 6]['value'] . " " . $inputs['data'][$i + 8]['value'],
                        'GoodsOwnershipPercent' => $inputs['data'][$i + 9]['value'],
                        'RealEstateOwnershipType' => $inputs['data'][$i + 10]['value'],
                        'ForWho' => $inputs['role'],
                    );
                    $this->db->insert($tableName, $UserArray);
                    $i = $i + 11;
                }
                $arr = array(
                    'type' => "green",
                    'content' => "بروزرسانی با موفقیت انجام شد",
                    'success' => true
                );
                echo json_encode($arr);
                /*******************************************************************************************************/
                break;
            case 'Fee':
                /*******************************************************************************************************/
                $tableName .= "fee";
                $this->db->delete($tableName, array(
                    'CandidateId' => $inputs['inputCandidateId'],
                    'ForWho' => $inputs['role']
                ));
                if(!isset($inputs['data'])){
                    $arr = array('type' => "green", 'content' => "بروزرسانی با موفقیت انجام شد", 'success' => true);
                    echo json_encode($arr); die();
                }
                for ($i = 0; $i < count($inputs['data']);) {
                    $UserArray = array(
                        'CandidateId' => $inputs['inputCandidateId'],
                        'FeeType' => $inputs['data'][$i]['value'] ,
                        'FeeOwnershipStartDate' => $inputs['data'][$i + 1]['value'],
                        'FeePercent' => $inputs['data'][$i + 2]['value'],
                        'FeeAverageInYear' => $inputs['data'][$i + 4]['value'] . "." . $inputs['data'][$i + 3]['value'] . " " . $inputs['data'][$i + 5]['value'],
                        'ForWho' => $inputs['role'],
                    );
                    $this->db->insert($tableName, $UserArray);
                    $i = $i + 6;
                }
                $arr = array(
                    'type' => "green",
                    'content' => "بروزرسانی با موفقیت انجام شد",
                    'success' => true
                );
                echo json_encode($arr);
                /*******************************************************************************************************/
                break;
            case 'AverageMonthIncome':
                /*******************************************************************************************************/
                $tableName .= "income";
                $this->db->delete($tableName, array(
                    'CandidateId' => $inputs['inputCandidateId'],
                    'ForWho' => $inputs['role']
                ));
                if(!isset($inputs['data'])){
                    $arr = array('type' => "green", 'content' => "بروزرسانی با موفقیت انجام شد", 'success' => true);
                    echo json_encode($arr); die();
                }
                for ($i = 0; $i < count($inputs['data']);) {
                    $UserArray = array(
                        'CandidateId' => $inputs['inputCandidateId'],
                        'AverageMonthIncome' => $inputs['data'][$i + 1]['value'] . "." . $inputs['data'][$i]['value'] . " " . $inputs['data'][$i + 2]['value'],
                        'ForWho' => $inputs['role'],
                    );
                    $this->db->insert($tableName, $UserArray);
                    $i = $i + 3;
                }
                $arr = array(
                    'type' => "green",
                    'content' => "بروزرسانی با موفقیت انجام شد",
                    'success' => true
                );
                echo json_encode($arr);
                /*******************************************************************************************************/
                break;
            case 'Election':
                /*******************************************************************************************************/
                $tableName .= "election";
                $this->db->delete($tableName, array(
                    'CandidateId' => $inputs['inputCandidateId'],
                    'ForWho' => $inputs['role']
                ));
                if(!isset($inputs['data'])){
                    $arr = array('type' => "green", 'content' => "بروزرسانی با موفقیت انجام شد", 'success' => true);
                    echo json_encode($arr); die();
                }
                for ($i = 0; $i < count($inputs['data']);) {
                    $UserArray = array(
                        'CandidateId' => $inputs['inputCandidateId'],
                        'ElectionPlacePrice' => $inputs['data'][$i+1]['value'] . "." . $inputs['data'][$i]['value'] . " " . $inputs['data'][$i + 2]['value'],
                        'ElectionFlockPrice' => $inputs['data'][$i + 4]['value'] . "." . $inputs['data'][$i + 3]['value'] . " " . $inputs['data'][$i + 5]['value'],
                        'ElectionAdvertisePrice' => $inputs['data'][$i + 7]['value'] . "." . $inputs['data'][$i + 6]['value'] . " " . $inputs['data'][$i + 8]['value'],
                        'ElectionStaffPrice' => $inputs['data'][$i + 10]['value'] . "." . $inputs['data'][$i + 9]['value'] . " " . $inputs['data'][$i + 11]['value'],
                        'ElectionAllPrice' => $inputs['data'][$i + 13]['value'] . "." . $inputs['data'][$i + 12]['value'] . " " . $inputs['data'][$i + 14]['value'],
                        'ForWho' => $inputs['role'],
                    );
                    $this->db->insert($tableName, $UserArray);
                    $i = $i + 15;
                }
                $arr = array(
                    'type' => "green",
                    'content' => "بروزرسانی با موفقیت انجام شد",
                    'success' => true
                );
                echo json_encode($arr);
                /*******************************************************************************************************/
                break;
        }
    }
    public function support(){
        $loginInfo = $this->session->userdata('UserLoginInfo');
        $data['title'] = 'صفحه کاربری';
        $data['noImg'] = $this->config->item('defaultImage');
        $data['gifLoader'] = $this->config->item('gifLoader');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'صفحه کاربری';
        $data['userInfo'] = $this->ModelCandidate->getCandidateByCandidateId($loginInfo['CandidateId']);
        $data['sidebar'] = $this->load->view('ui/v3/candidate_profile/sidebar', NULL, TRUE);

        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/candidate_profile/support/index', $data);
        $this->load->view('ui/v3/candidate_profile/support/index_css');
        $this->load->view('ui/v3/candidate_profile/support/index_js', $data);
        $this->load->view('ui/v3/static/footer');
    }
    /* End For Resume -------------------------------------------------------------*/


    public function doRegisterExam()
    {
        $userInfo = $this->session->userdata('UserLoginInfo')[0];
        $inputs = $this->input->post(NULL, TRUE);
        $inputs['inputUserId'] = $userInfo['UserId'];
        $inputs = array_map(function ($v) {
            return strip_tags($v);
        }, $inputs);
        $inputs = array_map(function ($v) {
            return remove_invisible_characters($v);
        }, $inputs);
        $inputs = array_map(function ($v) {
            return makeSafeInput($v);
        }, $inputs);
        $result = $this->ModelUser->doRegisterExam($inputs);

        if (is_numeric($result)) {
            $this->session->set_userdata('orderId', $result);
            /* witch means we can pay exam */
            $examInfo = $this->ModelExams->getExamInfoByExamId($inputs['inputExamId'])[0];
            $this->load->helper('payment/zarinpal/nusoap');
            $MerchantID = '2e809336-c5d4-11e6-8edd-000c295eb8fc';
            $Description = 'خرید توسط کاربر عادی از درگاه زرین پال';
            $CallbackURL = base_url('User/RegisterExam/paymentResult');
            $client = new nusoap_client('https://www.zarinpal.com/pg/services/WebGate/wsdl', 'wsdl');
            $client->soap_defencoding = 'UTF-8';
            $result = $client->call('PaymentRequest', [
                [
                    'MerchantID' => $MerchantID,
                    'Amount' => $examInfo['ProductPrice'],
                    'Description' => $Description,
                    'Email' => 'info@javankar.net',
                    'CallbackURL' => $CallbackURL,
                ],
            ]);
            if ($result['Status'] == 100) {
                $redirectUrl = 'https://www.zarinpal.com/pg/StartPay/' . $result['Authority'];
                $arr = array(
                    'type' => "green",
                    'content' => "در حال اتصال به درگاه",
                    'redirect' => $redirectUrl,
                    'success' => true
                );
                echo json_encode($arr);
            } else {
                $arr = array(
                    'type' => "red",
                    'content' => "اتصال با سرور پرداخت برقرار نشد.لطفا یک دقیقه دیگر تلاش کنید",
                    'success' => false
                );
                echo json_encode($arr);
            }
            /* Payment Ended  */
        } else {
            echo json_encode($result);
        }
    }

    /* get out of panel - session destroyed */
    public function logOut()
    {
        $this->session->unset_userdata('UserLoginInfo');
        $this->session->unset_userdata('UserIsLogged');
        redirect(base_url());
    }
}