<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ExamPlaces extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('admin/admin_login');
        $this->load->helper('pipes/pipe');
        $this->load->model('admin/ModelExam');
    }
    public function index(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'محل برگزاری آزمون';
        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/exam_places/home/index', $data);
        $this->load->view('admin_panel/exam_places/home/index_css');
        $this->load->view('admin_panel/exam_places/home/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doPagination()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $data = $this->ModelExam->getExamPlace($inputs);
        $data['htmlResult'] = $this->load->view('admin_panel/exam_places/home/pagination', $data, TRUE);
        unset($data['data']);
        echo json_encode($data);
    }

    public function add(){

        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'افزودن نوشته';
        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/exam_places/add/index', $data);
        $this->load->view('admin_panel/exam_places/add/index_css');
        $this->load->view('admin_panel/exam_places/add/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doAdd()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs = array_map(function ($v) {
            if(!is_array($v)){
                return strip_tags($v);
            }
        }, $inputs);
        $inputs = array_map(function ($v) {
            return remove_invisible_characters($v);
        }, $inputs);
        $inputs = array_map(function ($v) {
            return makeSafeInput($v);
        }, $inputs);
        $this->form_validation->set_data($inputs);
        $this->form_validation->set_rules('inputExamPlaceTitle', 'عنوان محل آزمون', 'trim|required|min_length[1]|max_length[254]');
        $this->form_validation->set_rules('inputExamPlaceDefaultCapacity', 'ظرفیت پیش فرض', 'trim|required|greater_than[0]|numeric');
        $this->form_validation->set_rules('inputExamPlaceAddress', 'آدرس محل آزمون', 'trim|required|min_length[5]');
         if ($this->form_validation->run() == FALSE) {
            $arr = array(
                'type' => "red",
                'content' => validation_errors()
            );
            echo json_encode($arr);
            die();
        }
        $result = $this->ModelExam->doAddExamPlace($inputs);
        echo json_encode($result);
    }

    public function edit($id)
    {
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'ویرایش محل آزمون';
        $data['examPlace'] = $this->ModelExam->getExamPlaceById($id)[0];

        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/exam_places/edit/index', $data);
        $this->load->view('admin_panel/exam_places/edit/index_css');
        $this->load->view('admin_panel/exam_places/edit/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doEdit()
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
        $this->form_validation->set_rules('inputExamPlaceTitle', 'عنوان محل آزمون', 'trim|required|min_length[1]|max_length[254]');
        $this->form_validation->set_rules('inputExamPlaceDefaultCapacity', 'ظرفیت پیش فرض', 'trim|required|greater_than[0]|numeric');
        $this->form_validation->set_rules('inputExamPlaceAddress', 'آدرس محل آزمون', 'trim|required|min_length[5]');
        if ($this->form_validation->run() == FALSE) {
            $arr = array(
                'type' => "red",
                'content' => validation_errors()
            );
            echo json_encode($arr);
            die();
        }
        $result = $this->ModelExam->doEditExamPlace($inputs);
        echo json_encode($result);
    }
    public function doDelete()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $result = $this->ModelExam->doDeleteExamPlace($inputs);
        echo json_encode($result);
    }
    public function uploadFile()
    {
        $uploadPath = $this->config->item('upload_path');
        $error = array();
        $errorClass = "alert alert-danger";
        $this->session->set_flashdata('class', $errorClass);
        if (!empty($_FILES["file"])) {
            $myFile = $_FILES["file"];
            if ($myFile["error"] !== UPLOAD_ERR_OK) {
                $result = array(
                    'type' => "red",
                    'content' => "خطای ارتباط با سرور",
                    'success' => false
                );
                echo json_encode($result);
                die();
            }
            $name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);
            $i = 0;
            $parts = pathinfo($name);
            while (file_exists($uploadPath . $name)) {
                $i++;
                $name = $parts["filename"] . "_" . $i . "." . $parts["extension"];
            }
            if ($myFile['size'] > 10242880) {
                $result = array(
                    'type' => "red",
                    'content' => "حجم فایل بیشتر از 10 مگابایت است",
                    'success' => false
                );
                echo json_encode($result);
                die();
            }
            $allowedExtensions = array('jpg', 'png', 'gif', 'jpeg');
            $temp = explode(".", $myFile["name"]);
            $extension = strtolower(end($temp));
            if (!in_array($extension, $allowedExtensions)) {
                $result = array(
                    'type' => "red",
                    'content' => "فقط مجاز به بارگذاری تصویر هستید",
                    'success' => false
                );
                echo json_encode($result);
                die();
            }
            $fileName = md5(rand(100, 9999) . microtime()) . '_' . $name;
            $success = move_uploaded_file($myFile["tmp_name"], $uploadPath . $fileName);
            if (!$success) {
                $result = array(
                    'type' => "red",
                    'content' => "خطایی رخ داده است",
                    'success' => false
                );
                echo json_encode($result);
                die();
            }
            else {
                chmod($uploadPath . $fileName, 0644);
                $result = array(
                    'type' => "green",
                    'content' => "بارگذاری با موفقیت انجام شد",
                    'fileSrc' => $fileName,
                    'success' => true
                );
                echo json_encode($result);
                die();
            }
        }
        else {
            $result = array(
                'type' => "green",
                'content' => "بارگذاری با موفقیت انجام شد",
                'fileSrc' => "",
                'success' => true
            );
            echo json_encode($result);
            die();
        }
    }

}
