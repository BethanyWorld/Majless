<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('ui/ModelQuery');
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
    public function index(){
        $organizationDB = $this->load->database('blogDB', TRUE);
        $uploadDir = base_url('blog/wp-content/uploads');
        $sql = " SELECT
        p1.*,
        wm2.meta_value
    FROM 
        wp_posts p1
    LEFT JOIN 
        wp_postmeta wm1
        ON (
            wm1.post_id = p1.id 
            AND wm1.meta_value IS NOT NULL
            AND wm1.meta_key = \"_thumbnail_id\"              
        )
    LEFT JOIN 
        wp_postmeta wm2
        ON (
            wm1.meta_value = wm2.post_id
            AND wm2.meta_key = \"_wp_attached_file\"
            AND wm2.meta_value IS NOT NULL  
        )
    WHERE
        p1.post_status=\"publish\" 
        AND p1.post_type=\"post\"
    ORDER BY 
        p1.post_date DESC LIMIT 6";
        $posts = $organizationDB->query($sql)->result_array();
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle').' صفحه اصلی';
        $data['sidebar_map'] = $this->load->view('ui/v3/about_us/sidebar_map', NULL, TRUE);
        $data['sidebar_pages'] = $this->load->view('ui/v3/about_us/sidebar_pages', NULL, TRUE);
        $data['posts']  = $posts;
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/home/index' , $data);
        $this->load->view('ui/v3/home/index_css');
        $this->load->view('ui/v3/home/index_js' , $data);
        $this->load->view('ui/v3/static/footer', $data);
    }
}