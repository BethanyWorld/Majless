<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Candidate extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('admin/admin_login');
        $this->load->model('admin/ModelCandidate');
        $this->load->model('ui/ModelCountry');
        $this->load->model('ui/ModelProfile');
    }
    public function index(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'نامزد های انتخاباتی';
        $data['enumCandidateStatus'] = $this->config->item('EnumCandidateStatus');
        $data['states'] = $this->ModelCountry->getStateList();

        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/candidate/home/index');
        $this->load->view('admin_panel/candidate/home/index_css');
        $this->load->view('admin_panel/candidate/home/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doPagination(){
        $inputs = $this->input->post(NULL, TRUE);
        $data = $this->ModelCandidate->getCandidate($inputs);
        $data['htmlResult'] = $this->load->view('admin_panel/candidate/home/pagination', $data, TRUE);
        unset($data['data']);
        echo json_encode($data);
    }

    public function edit($candidateId){
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


        $data['paymentHistory'] = $this->ModelCandidate->getCandidatePaymentHistoryCandidateId($candidateId);

        $data['api'] = $this->config->item('api');
        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/candidate/edit/index', $data);
        $this->load->view('admin_panel/candidate/edit/index_css');
        $this->load->view('admin_panel/candidate/edit/index_js', $data);
        $this->load->view('admin_panel/static/footer');
    }
    public function doMarkCandidate()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $candidateInfo = $this->getCandidateStatus($inputs['inputCandidateId']);
        $candidateStatus = $candidateInfo['CandidateStatus'];
        if ($candidateStatus == 'CandidateHasContinueCondition') {
            $inputs['inputCandidateStatus'] = 'CandidateResumeMarked';
            $inputs = array_map(function ($v) {
                return strip_tags($v);
            }, $inputs);
            $inputs = array_map(function ($v) {
                return remove_invisible_characters($v);
            }, $inputs);
            $inputs = array_map(function ($v) {
                return makeSafeInput($v);
            }, $inputs);
            $result = $this->ModelCandidate->doMarkCandidate($inputs);
            $result['senderNumber'] = $candidateInfo['CandidatePhone'];
            echo json_encode($result);
        } else {
            $inputs = array_map(function ($v) {
                return strip_tags($v);
            }, $inputs);
            $inputs = array_map(function ($v) {
                return remove_invisible_characters($v);
            }, $inputs);
            $inputs = array_map(function ($v) {
                return makeSafeInput($v);
            }, $inputs);
            $result = $this->ModelCandidate->doUpdateMarkCandidate($inputs);
            echo json_encode($result);
        }
    }
    public function doAcceptCandidateFirstExam()
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
        $result = $this->ModelCandidate->doAcceptCandidateFirstExam($inputs);
        echo json_encode($result);
    }
    public function doRejectCandidateFirstExam()
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
        $result = $this->ModelCandidate->doRejectCandidateFirstExam($inputs);
        echo json_encode($result);
    }
    public function doAcceptCandidateSecondExam()
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
        $result = $this->ModelCandidate->doAcceptCandidateSecondExam($inputs);
        echo json_encode($result);
    }
    public function doRejectCandidateSecondExam()
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
        $result = $this->ModelCandidate->doRejectCandidateSecondExam($inputs);
        echo json_encode($result);
    }
    public function doAcceptEvaluationExam()
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
        $result = $this->ModelCandidate->doAcceptEvaluationExam($inputs);
        echo json_encode($result);
    }
    public function doRejectEvaluationExam()
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
        $result = $this->ModelCandidate->doRejectEvaluationExam($inputs);
        echo json_encode($result);
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
    public function importScores()
    {
        $data['noImg'] = $this->config->item('defaultImage');
        $data['gifLoader'] = $this->config->item('gifLoader');
        $data['pageTitle'] = 'ویرایش نامزد انتخاباتی';
        $data['api'] = $this->config->item('api');
        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/candidate/import_scores/index', $data);
        $this->load->view('admin_panel/candidate/import_scores/index_css');
        $this->load->view('admin_panel/candidate/import_scores/index_js', $data);
        $this->load->view('admin_panel/static/footer');
    }
    public function prepareImportScores()
    {
        $this->load->helper('plugins/excel/bootstrap_helper');
        $this->load->helper('plugins/excel/PHPExcel/iofactory_helper');
        $failedInserts = array();
        $chunks = explode('.', $_FILES["file"]['name']);
        $inputFileName = $_FILES["file"]['tmp_name'];
        try {
            $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
            $objReader = PHPExcel_IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFileName);
        } catch (Exception $e) {
            array_push($failedInserts,
                array(
                    'FullName' => 'خطا در فایل ارسالی',
                    'Title' => 'ساختار فایل ارسالی نامعتبر است',
                )
            );
        }
        $sheet = $objPHPExcel->getSheet(0);
        $highestRow = $sheet->getHighestRow();
        $highestColumn = $sheet->getHighestColumn();
        $resultArray = array();
        for ($row = 2; $row <= $highestRow; $row++) {
            $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE)[0];
            $candidate = $this->ModelCandidate->getCandidateByCandidateNationalCode($rowData[0]);
            $candidate['ExcelInfo'] = $rowData;
            array_push($resultArray, $candidate);
        }
        $index = 1;
        foreach ($resultArray as $item) { ?>
            <?php if (isset($item['CandidateNationalCode'])) { ?>
                <tr class="is-valid"
                    data-score="<?php echo $item['ExcelInfo'][2]; ?>"
                    data-national-code="<?php echo $item['CandidateNationalCode']; ?>">
                    <td class="fit"><?php echo $index++; ?></td>
                    <td><?php echo $item['CandidateFirstName'] . " " . $item['CandidateLastName']; ?></td>
                    <td class="fit"><?php echo $item['CandidateNationalCode']; ?></td>
                    <td class="fit"><?php echo $item['ExcelInfo'][2]; ?></td>
                </tr>
            <?php } else { ?>
                <tr class="is-not-valid">
                    <td class="fit"><?php echo $index++; ?></td>
                    <td><label class="label label-danger">با این کد ملی موردی یافت نشد</label></td>
                    <td class="fit"><?php echo $item['ExcelInfo'][0]; ?></td>
                    <td class="fit"><label class="label label-danger">با این کد ملی موردی یافت نشد</label></td>
                </tr>
            <?php } ?>
        <?php } ?>
        <?php
    }
    public function doImportScores()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $result = $this->ModelCandidate->doImportScores($inputs);
        echo json_encode($result);

    }
}