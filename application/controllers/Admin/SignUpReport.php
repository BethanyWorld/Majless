<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignUpReport extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('admin/admin_login');
        $this->load->model('admin/ModelSignUp');
        $this->load->model('ui/ModelCountry');
    }
    public function index(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'گزارش گیری';
        $inputs['pageIndex'] = 1;

        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/signup_report/home/index');
        $this->load->view('admin_panel/signup_report/home/index_css');
        $this->load->view('admin_panel/signup_report/home/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doGetPersonReport(){
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $result = $this->ModelSignUp->doExportReport($inputs);
        $api = "http://new.moarefin.ir:8080/api/EducationalInfoReportWeb?";
        foreach ($result as $item) {
            $api.= "nationalCodeList=".$this->convertToEnglish($item['SignUpNationalCode'])."&";
        }
        echo $api;
    }
    public function doExportReport(){
        $this->load->helper('download');
        $inputs = $this->input->post(NULL, TRUE);
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
    }

    function convertToEnglish($string) {
        $persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        $arabic = ['٩', '٨', '٧', '٦', '٥', '٤', '٣', '٢', '١','٠'];
        $num = range(0, 9);
        $convertedPersianNums = str_replace($persian, $num, $string);
        $englishNumbersOnly = str_replace($arabic, $num, $convertedPersianNums);
        return $englishNumbersOnly;
    }

}
