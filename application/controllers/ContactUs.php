<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ContactUs extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('ui/ModelCommand');
    }
    public function index()
    {
        /*$query = $this->db->query('select CandidateId,CandidateFirstName,CandidateLastName,CandidateNationalCode,CandidateBirthDate,CandidatePhone, data.national_code__code,data.address__city__state__province_part__province__name,data.address__city__state__province_part__name from candidate INNER JOIN data On candidate.CandidateNationalCode = data.national_code__code ORDER BY CandidateId');
        $result = $query->result_array();

        $index = 0;
        foreach ($result as $item) {
            $this->db->select('*');
            $this->db->from('state');
            $this->db->where('StateName', $item['address__city__state__province_part__province__name']);
            $data = $this->db->get()->result_array();
            if (!empty($data)) {
                $result[$index]['StateId'] = $data[0]['StateId'];
            } else {
                $result[$index]['StateId'] = '';
            }
            $index += 1;
        }

        $index = 0;
        foreach ($result as $row) {
            if (!empty($row['StateId'])) {
                $this->db->select('*');
                $this->db->from('city');
                $this->db->where('CityStateId', $row['StateId']);
                $result[$index]['CityId'] = $this->db->get()->result_array()[0]['CityId'];
            } else {
                $result[$index]['CityId'] = '';
            }
            $index += 1;
        }

        $index = 0;
        foreach ($result as $row) {
            $this->db->select('*');
            $this->db->from('candidate_roles');
            $this->db->where('CandidateId', $row['CandidateId']);
            $result[$index]['Roles'] = $this->db->get()->result_array();
            $index += 1;
        }

        $this->load->library('table');
        $this->table->set_heading('شناسه نماینده', 'نام', 'نام خانوادگی', 'کد ملی', 'تلفن', 'استان', 'شهر', 'نامزد', 'نخبه', 'حامی');
        foreach ($result as $row) {
            $this->table->add_row($row['CandidateId'],$row['CandidateFirstName'],$row['CandidateLastName'],$row['CandidateNationalCode'],$row['CandidatePhone'],$row['address__city__state__province_part__province__name'],$row['address__city__state__province_part__name'],$row['Roles'][0]['Role'],$row['Roles'][1]['Role'],$row['Roles'][2]['Role']);
        }
        $this->load->view('ui/v3/static/header', $data);
        echo $this->table->generate();
        //var_dump($result);*/


        $CSRF = random_string('alnum', 32);
        $this->session->set_userdata('CSRF', $CSRF);
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'تماس با ما';
        $data['CSRF'] = $CSRF;
        if (isset($_GET['type'])) {
            if ($_GET['type'] == 'contact') {
                $data['title'] = 'تماس با ما';
            } else {
                $data['title'] = 'گزارش های مردمی';
            }
        } else {
            $data['title'] = 'تماس با ما';
        }
        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/contact_us/index', $data);
        $this->load->view('ui/v3/contact_us/index_css', $data);
        $this->load->view('ui/v3/contact_us/index_js', $data);
        $this->load->view('ui/v3/static/footer', $data);
    }
    public function submitContactForm()
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
        $captchaCode = $this->session->userdata['captchaCode'];
        if (strtolower($inputs['inputCaptcha']) == strtolower($captchaCode)) {
            if ($inputs['inputCSRF'] == $this->session->userdata['CSRF']) {
                $this->session->set_userdata('CSRF', "");
                $result = $this->ModelCommand->doSendContactForm($inputs);
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
    public function json(){
        /*$data = file_get_contents(APPPATH . 'Specialist.json');
        $rows = array();
        foreach (explode("\n", $data) as $item) {
            $row = json_decode($item, true);
            $nationalCode = array();
            $nationalCode['nationalCode'] = $row['NationalCode']['Code'];
            if ($nationalCode['nationalCode'] && !empty($nationalCode['nationalCode'])) {
                $this->db->select('*');
                $this->db->from('candidate');
                $this->db->join('state', 'candidate.CandidateStateId = state.StateId');
                $this->db->join('city', 'candidate.CandidateCityId = city.CityId');
                $this->db->join('election_location', 'candidate.CandidateElectionId = election_location.ElectionId');
                $this->db->where('CandidateNationalCode', $nationalCode['nationalCode']);
                $result = $this->db->get()->result_array();
                $roles = json_decode($item, true)['UserTypes'];
                for ($j = 0; $j < sizeof($roles); $j++) {
                    switch ($roles[$j]) {
                        case '1':
                            $roles[$j] = 'Candidate';
                            break;
                        case '2':
                            $roles[$j] = 'Elite';
                            break;
                        case '3':
                            $roles[$j] = 'Sponsor';
                            break;
                    }
                }
                if(isset($result[0]['CandidateId'])) {
                    $nationalCode['roles'] = $roles;
                    $nationalCode['CandidateId'] = $result[0]['CandidateId'];
                    $rows[] = $nationalCode;
                }
            }
        }
        var_dump($rows);
        foreach ($rows as $row) {
            $this->db->delete('candidate_roles', array(
                'CandidateId' => $row['CandidateId']
            ));
            foreach ($row['roles'] as $input) {
                $arrayCandidate = array(
                    'CandidateId' => $row['CandidateId'],
                    'Role' => $input
                );
                $this->db->insert('candidate_roles', $arrayCandidate);
            }
        }*/
    }
}