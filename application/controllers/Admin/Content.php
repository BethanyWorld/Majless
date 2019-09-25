<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Content extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('admin/admin_login');
        $this->load->model('admin/ModelContent');
    }
    public function index(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'فهرست محتوا';
        $inputs['pageIndex'] = 1;
        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/content/home/index');
        $this->load->view('admin_panel/content/home/index_css');
        $this->load->view('admin_panel/content/home/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doPagination(){
        $inputs = $this->input->post(NULL, TRUE);
        $data = $this->ModelContent->getContent($inputs);
        $data['htmlResult'] = $this->load->view('admin_panel/content/home/pagination', $data, TRUE);
        unset($data['data']);
        echo json_encode($data);
    }
    public function add(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'افزودن محتوا جدید';
        $data['contentCategories'] = $this->ModelContent->getAllContentCategory();
        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/content/add/index');
        $this->load->view('admin_panel/content/add/index_css');
        $this->load->view('admin_panel/content/add/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doAdd(){
        $inputs = $this->input->post(NULL, TRUE);
        $inputsContent =  $inputs['inputContentDescription'];
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $inputs['inputContentDescription'] = $inputsContent;
        $result = $this->ModelContent->doAddContent($inputs);
        echo json_encode($result);
    }
    public function edit($contentId){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'افزودن محتوا جدید';
        $data['contentCategories'] = $this->ModelContent->getAllContentCategory();
        $data['content'] = $this->ModelContent->getContentByContentId($contentId);
        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/content/edit/index');
        $this->load->view('admin_panel/content/edit/index_css');
        $this->load->view('admin_panel/content/edit/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doEdit(){
        $inputs = $this->input->post(NULL, TRUE);
        $inputsContent =  $inputs['inputContentDescription'];
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $inputs['inputContentDescription'] = $inputsContent;
        $result = $this->ModelContent->doEditContent($inputs);
        echo json_encode($result);
    }
    public function doDelete()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $result = $this->ModelContent->doDeleteContent($inputs);
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
        } else {
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
    public function doAcceptContent(){
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $result = $this->ModelContent->doAcceptContent($inputs);
        echo json_encode($result);
    }
    public function doRejectContent(){
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $result = $this->ModelContent->doRejectContent($inputs);
        echo json_encode($result);
    }


    public function category(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'دسته بندی محتوا';
        $inputs['pageIndex'] = 1;
        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/content/category/index');
        $this->load->view('admin_panel/content/category/index_css');
        $this->load->view('admin_panel/content/category/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doPaginationCategory(){
        $inputs = $this->input->post(NULL, TRUE);
        $data = $this->ModelContent->getContentCategory($inputs);
        $data['htmlResult'] = $this->load->view('admin_panel/content/category/pagination', $data, TRUE);
        unset($data['data']);
        echo json_encode($data);
    }
    public function addCategory(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'افزودن دسته جدید';
        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/content/add_category/index');
        $this->load->view('admin_panel/content/add_category/index_css');
        $this->load->view('admin_panel/content/add_category/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doAddCategory()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $result = $this->ModelContent->doAddContentCategory($inputs);
        echo json_encode($result);
    }
    public function editCategory($category){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'ویرایش دسته بندی';
        $data['data'] = $this->ModelContent->getContentCategoryByContentCategoryId($category);
        $this->load->view('admin_panel/static/header', $data);
        $this->load->view('admin_panel/content/edit_category/index' , $data);
        $this->load->view('admin_panel/content/edit_category/index_css');
        $this->load->view('admin_panel/content/edit_category/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doEditCategory()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $result = $this->ModelContent->doEditContentCategory($inputs);
        echo json_encode($result);
    }
    public function doDeleteCategory()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $result = $this->ModelContent->doDeleteContentCategory($inputs);
        echo json_encode($result);
    }

}
