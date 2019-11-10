<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/ModelContent');
    }
    public function index(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'محتوا';
        $inputs['pageIndex'] = 1;
        $data['data'] = $this->ModelContent->getAcceptedContent($inputs);
        $data['categories'] = $this->ModelContent->getAllContentCategory();
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/content/home/index', $data);
        $this->load->view('ui/v3/content/home/index_css');
        $this->load->view('ui/v3/content/home/index_js');
        $this->load->view('ui/v3/static/footer');
    }
    public function doPagination()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $data = $this->ModelContent->getAcceptedContent($inputs);
        $data['htmlResult'] = $this->load->view('admin_panel/content/home/pagination', $data, TRUE);
        unset($data['data']);
        echo json_encode($data);
    }
    public function category($categoryId, $categoryTitle){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $categoryTitle;
        $inputs['pageIndex'] = 1;
        $inputs['inputCategoryId'] = $categoryId;
        $data['data'] = $this->ModelContent->getAcceptedContent($inputs);
        $data['categories'] = $this->ModelContent->getAllContentCategory();
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/content/category/index', $data);
        $this->load->view('ui/v3/content/category/index_css');
        $this->load->view('ui/v3/content/category/index_js');
        $this->load->view('ui/v3/static/footer');
    }
    public function single($contentId, $contentTitle){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $contentTitle;
        $inputs['pageIndex'] = 1;
        $data['data'] = $this->ModelContent->getContentByContentId($contentId);
        $data['categories'] = $this->ModelContent->getAllContentCategory();
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/content/single/index', $data);
        $this->load->view('ui/v3/content/single/index_css');
        $this->load->view('ui/v3/content/single/index_js');
        $this->load->view('ui/v3/static/footer');
    }
    public function sendArticle(){
        $CSRF = random_string('alnum', 32);
        $this->session->set_userdata('CSRF', $CSRF);
        $data['CSRF'] = $CSRF;
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = "ارسال محتوا";
        $data['categories'] = $this->ModelContent->getAllContentCategory();
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/content/send_article/index', $data);
        $this->load->view('ui/v3/content/send_article/index_css');
        $this->load->view('ui/v3/content/send_article/index_js');
        $this->load->view('ui/v3/static/footer');
    }
    public function doSendArticle()
    {
        $arr = array(
            'type' => "red",
            'content' => "امکان ارسال محتوا فعلا وجود ندارد"
        );
        echo json_encode($arr);
        die();
        $inputs = $this->input->post(NULL, TRUE);
        $captchaCode = $this->session->userdata['captchaCode'];
        if (strtolower($inputs['inputCaptcha']) == strtolower($captchaCode)) {
            if ($inputs['inputCSRF'] == $this->session->userdata['CSRF']) {
                $inputs = array_map(function ($v) {
                    return strip_tags($v);
                }, $inputs);
                $inputs = array_map(function ($v) {
                    return remove_invisible_characters($v);
                }, $inputs);
                $inputs = array_map(function ($v) {
                    return makeSafeInput($v);
                }, $inputs);
                $result = $this->ModelContent->doAddContent($inputs);
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
    public function uploadFile()
    {
        $arr = array(
            'type' => "red",
            'content' => "امکان ارسال محتوا فعلا وجود ندارد"
        );
        echo json_encode($arr);
        die();
        $inputs = $this->input->post(NULL, TRUE);
        if ($inputs['inputCSRF'] == $this->session->userdata['CSRF']) {
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
                } else {
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
        } else {
            $arr = array(
                'type' => "red",
                'content' => "کد CSRF نامعتبر است"
            );
            echo json_encode($arr);
        }
    }

}
