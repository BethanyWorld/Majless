<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('agent/agent_login');
        $this->load->helper('pipes/pipe');
        $this->load->model('agent/ModelPosts');
        $this->load->model('admin/ModelCandidate');
    }
    public function index()
    {
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'مدیریت آگهی ها';
        $this->load->view('agent_panel/static/header', $data);
        $this->load->view('agent_panel/posts/home/index', $data);
        $this->load->view('agent_panel/posts/home/index_css');
        $this->load->view('agent_panel/posts/home/index_js');
        $this->load->view('agent_panel/static/footer');
    }
    public function doPagination()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $data = $this->ModelPosts->getPostsByAgentId($inputs);
        $data['htmlResult'] = $this->load->view('agent_panel/posts/home/pagination', $data, TRUE);
        unset($data['data']);
        echo json_encode($data);
    }

    public function add()
    {
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'افزودن نوشته';
        $stateId = $this->session->userdata('AgentLoginInfo')[0]['AgentStateId'];

        $data['candidates'] = $this->ModelCandidate->getCandidateByStateId($stateId);
        $this->load->view('agent_panel/static/header', $data);
        $this->load->view('agent_panel/posts/add/index', $data);
        $this->load->view('agent_panel/posts/add/index_css');
        $this->load->view('agent_panel/posts/add/index_js');
        $this->load->view('agent_panel/static/footer');
    }
    public function doAddPost()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputPostContent = $inputs['inputPostContent'];
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
        $inputs['inputPostContent'] = $inputPostContent;
        $this->form_validation->set_data($inputs);
        $this->form_validation->set_rules('inputPostTitle', 'عنوان خبر', 'trim|required|min_length[5]|max_length[254]');
        $this->form_validation->set_rules('inputPostContent', 'محتوای خبر', 'trim|required|min_length[5]');
        if ($this->form_validation->run() == FALSE) {
            $arr = array(
                'type' => "red",
                'content' => validation_errors()
            );
            echo json_encode($arr);
            die();
        }
        $result = $this->ModelPosts->doAddPost($inputs);
        echo json_encode($result);
    }
    public function edit($postId)
    {
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = 'ویرایش نوشته';
        $data['data'] = $this->ModelPosts->getPostByPostId($postId);

        $this->load->view('agent_panel/static/header', $data);
        $this->load->view('agent_panel/posts/edit/index', $data);
        $this->load->view('agent_panel/posts/edit/index_css');
        $this->load->view('agent_panel/posts/edit/index_js');
        $this->load->view('agent_panel/static/footer');
    }
    public function doEditPost()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputPostContent = $inputs['inputPostContent'];
        $inputs = array_map(function ($v) {
            return strip_tags($v);
        }, $inputs);
        $inputs = array_map(function ($v) {
            return remove_invisible_characters($v);
        }, $inputs);
        $inputs = array_map(function ($v) {
            return makeSafeInput($v);
        }, $inputs);
        $inputs['inputPostContent'] = $inputPostContent;

        $this->form_validation->set_data($inputs);
        $this->form_validation->set_rules('inputPostTitle', 'عنوان خبر', 'trim|required|min_length[5]|max_length[254]');
        $this->form_validation->set_rules('inputPostContent', 'محتوای خبر', 'trim|required|min_length[5]');
        if ($this->form_validation->run() == FALSE) {
            $arr = array(
                'type' => "red",
                'content' => validation_errors()
            );
            echo json_encode($arr);
            die();
        }
        $result = $this->ModelPosts->doEditPost($inputs);
        echo json_encode($result);
    }
    public function doDeletePost()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $result = $this->ModelPosts->doDeletePost($inputs);
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

}
