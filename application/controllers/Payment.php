<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Payment extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'همراهی با ما';
        $data['sidebar'] = $this->load->view('ui/v3/about_us/sidebar', NULL, TRUE);
        $data['title'] = "همراهی با ما";
        $data['description'] = 'همراهی با ما';
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/payment/index', $data);
        $this->load->view('ui/v3/payment/index_css');
        $this->load->view('ui/v3/payment/index_js');
        $this->load->view('ui/v3/static/footer', $data);
    }
    public function startPayment($price = 100)
    {
        $price = $this->input->post(NULL,TRUE)['formAmount'];

        $Description = $this->input->post(NULL,TRUE)['formFname'];
        $Description .= "-";
        $Description .= $this->input->post(NULL,TRUE)['formLname'];
        $Description .= "-";
        $Description .= $this->input->post(NULL,TRUE)['formPhone'];
        $Description .= "-";
        $Description .= $this->input->post(NULL,TRUE)['formEmail'];
        $price = str_ireplace(",","",$price);
        if(isset($price) && !is_numeric($price)){
            echo "مقدار نامعتبر است";
            die();
        }

        $this->load->helper('payment/zarinpal/nusoap');
        $MerchantID = 'cef058f0-166d-11ea-a706-000c295eb8fc';
        $CallbackURL = base_url('Payment/endPayment/'.$price);
        $client = new nusoap_client('https://www.zarinpal.com/pg/services/WebGate/wsdl', 'wsdl');
        $client->soap_defencoding = 'UTF-8';
        $result = $client->call('PaymentRequest', [
            [
                'MerchantID' => $MerchantID,
                'Amount' => $price,
                'Description' => $Description,
                'Email' => 'info@azmaa.net',
                'CallbackURL' => $CallbackURL,
            ],
        ]);
        if ($result['Status'] == 100) {
            header('Location: https://www.zarinpal.com/pg/StartPay/' . $result['Authority']);
        } else {
            $CallbackURL = base_url('Payment=error?' . $result['Status']);
            header('Location: ' . $CallbackURL);
        }
    }
    public function endPayment($price = 100){
        $this->load->helper('payment/zarinpal/nusoap');
        $MerchantID = 'cef058f0-166d-11ea-a706-000c295eb8fc';
        $Amount = $price;
        $Authority = $_GET['Authority'];
        if ($_GET['Status'] == 'OK') {
            $client = new nusoap_client('https://www.zarinpal.com/pg/services/WebGate/wsdl', 'wsdl');
            $client->soap_defencoding = 'UTF-8';
            $result = $client->call('PaymentVerification', [
                [
                    'MerchantID' => $MerchantID,
                    'Authority' => $Authority,
                    'Amount' => $Amount,
                ],
            ]);
            if ($result['Status'] == 100) { }
            else {}
        }
        else {

        }
        if(isset($result)){
            $data['result'] = $result;
        }
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'نتیجه پرداخت';
        $data['sidebar'] = $this->load->view('ui/v3/about_us/sidebar', NULL, TRUE);
        $data['title'] = "نتیجه پرداخت";
        $data['pageTitle'] = 'نتیجه پرداخت';
        $data['price'] = $price;
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/payment/result/index', $data);
        $this->load->view('ui/v3/payment/result/index_css');
        $this->load->view('ui/v3/payment/result/index_js');
        $this->load->view('ui/v3/static/footer');
    }
}