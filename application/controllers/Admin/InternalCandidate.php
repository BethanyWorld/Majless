<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class InternalCandidate extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('admin/admin_login');
        $this->load->model('admin/ModelCandidate');
        $this->load->model('admin/ModelInternalCandidate');
        $this->load->model('ui/ModelCountry');
        $this->load->model('ui/ModelProfile');
    }
    public function index(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'داوطلبان نظارت';
        $data['enumCandidateStatus'] = $this->config->item('EnumCandidateStatus');
        $data['EnumResumeProfile'] = $this->config->item('EnumResumeProfile');
        $data['states'] = $this->ModelCountry->getStateList();

        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/candidate/internal_candidate/home/index');
        $this->load->view('admin_panel/candidate/internal_candidate/home/index_css');
        $this->load->view('admin_panel/candidate/internal_candidate/home/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doPagination()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $data = $this->ModelInternalCandidate->getRequests($inputs);
        $data['htmlResult'] = $this->load->view('admin_panel/candidate/internal_candidate/home/pagination', $data, TRUE);
        unset($data['data']);
        echo json_encode($data);
    }
    public function edit($requestId){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['gifLoader'] = $this->config->item('gifLoader');
        $data['pageTitle'] = 'ویرایش نامزد انتخاباتی';
        $data['EnumResumeProfile'] = $this->config->item('EnumResumeProfile');
        $data['request'] = $this->ModelInternalCandidate->getRequestByRequestId($requestId)[0];
        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/candidate/internal_candidate/detail/index', $data);
        $this->load->view('admin_panel/candidate/internal_candidate/detail/index_css');
        $this->load->view('admin_panel/candidate/internal_candidate/detail/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doSetSupervisorType(){
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
        $result = $this->ModelInternalCandidate->doSetSupervisorType($inputs);
        echo json_encode($result);
    }
    public function votes(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'آرا داوطلبان';
        $data['EnumResumeProfile'] = $this->config->item('EnumResumeProfile');
        $data['states'] = $this->ModelCountry->getStateList();
        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/candidate/internal_candidate/votes/index');
        $this->load->view('admin_panel/candidate/internal_candidate/votes/index_css');
        $this->load->view('admin_panel/candidate/internal_candidate/votes/index_js');
        $this->load->view('admin_panel/static/footer');
        /*  */
        $result = $this->ModelSignUp->doExportReport($inputs);

        $this->load->helper('plugins/excel/bootstrap.php');
        $this->load->helper('plugins/excel/PHPExcel/IOFactory');

        $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
        $objPHPExcel->getActiveSheet()->SetCellValue('A1', "کد ملی");
        $objPHPExcel->getActiveSheet()->SetCellValue('B1', "نام");
        $objPHPExcel->getActiveSheet()->SetCellValue('C1', "نام خانوادگی");
        $objPHPExcel->getActiveSheet()->SetCellValue('D1', "تلفن همراه");
        $objPHPExcel->getActiveSheet()->SetCellValue('E1', "تاریخ ثبت نام");
        $objPHPExcel->getActiveSheet()->SetCellValue('F1', "نامزد");
        $objPHPExcel->getActiveSheet()->SetCellValue('G1', "نخبه");
        $objPHPExcel->getActiveSheet()->SetCellValue('H1', "حامی");

        $index = 0;
        $rowCount = 2;
        foreach ($result as $row) {
            $objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount, $row['CandidateNationalCode']);
            $objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount, $result[$index]['CandidateFirstName']);
            $objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount, $result[$index]['CandidateLastName']);
            $objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount, $result[$index]['CandidatePhone']);
            $objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount, $result[$index]['CreateDateTime']);
            foreach ($result[$index]['roles'] as $role) {
                switch ($role['Role']){
                    case 'Candidate':
                        $objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount, 1);
                        break;
                    case 'Elite':
                        $objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount, 1);
                        break;
                    case 'Sponsor':
                        $objPHPExcel->getActiveSheet()->SetCellValue('H'.$rowCount, 1);
                        break;
                }
            }
            $index +=1;
            $rowCount++;
        }
        $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
        $objWriter->save('Export.xlsx');
        readfile('Export.xlsx');
        /*  */
    }
    public function doVotesPagination()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $data = $this->ModelInternalCandidate->getVotes($inputs);
        $data['htmlResult'] = $this->load->view('admin_panel/candidate/internal_candidate/votes/pagination', $data, TRUE);
        unset($data['data']);
        echo json_encode($data);
    }
}