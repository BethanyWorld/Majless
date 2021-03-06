<?php

class ModelCommand extends CI_Model{
    /* For Contact Form */
    public function doSendContactForm($inputs)
    {
        $array = array(
            'ContactFullName' => $inputs['inputFullName'],
            'ContactTitle' => $inputs['inputTitle'],
            'ContactSubject' => $inputs['inputSubject'],
            'ContactContent' => $inputs['inputContent'],
            'ContactPhone' => $inputs['inputPhone'],
            'ContactIP' => $this->input->ip_address(),
            'CreateDateTime' => jDateTime::date("Y/m/d H:i:s", false, false)
        );
        $this->db->trans_start();
        $this->db->insert('form_contact', $array);
        $this->db->trans_complete();
        $arr = array(
            'type' => "green",
            'content' => "پیام شما با موفقیت ارسال شد",
            'success' => true
        );
        return $arr;
    }
    /* For First SignUp Form */
    public function doSubmitSignUpForm($inputs){
        /*
         * $inputs['inputSignUpType']
         *  1 = Candidate
         *  2 = Elite
         *  3 = Sponsor
         * */
        $this->db
            ->select('*')
            ->from('candidate')
            ->where('CandidatePhone', $inputs['inputSignUpPhone'])
            ->or_where('CandidateNationalCode', $inputs['inputSignUpNationalCode']);
        $result = $this->db->get()->result_array();
        if(!empty($result)){
            $arr = array(
                'type' => "red",
                'content' => "کد ملی یا تلفن وارد شده تکراری ست",
                'success' => false
            );
            return $arr;
        }
        else{
            $arrayCandidate = array(
                'CandidateFirstName' => $inputs['inputSignUpFirstName'],
                'CandidateLastName' => $inputs['inputSignUpLastName'],
                'CandidateNationalCode' => $inputs['inputSignUpNationalCode'],
                'CandidatePhone' => $inputs['inputSignUpPhone'],
                'CandidateStateId' => $inputs['inputSignUpStateId'],
                'CandidateCityId' => $inputs['inputSignUpCityId'],
                'CandidateConstituencyStateId' => $inputs['inputSignUpStateId'],
                'CandidateConstituencyCityId' => $inputs['inputSignUpCityId'],
                'CandidateElectionId' => $inputs['inputElectionId'],
                'CandidatePassword' => md5($inputs['inputSignUpPhone']),
                'CreateDateTime' => jDateTime::date("Y/m/d H:i:s", false, false)
            );
            $this->db->trans_start();
            $this->db->insert('candidate', $arrayCandidate);
            $candidateId = $this->db->insert_id();
            foreach ($inputs['inputSignUpType'] as $input) {
                switch ($input) {
                    case '1':
                        $arrayCandidate = array(
                            'CandidateId' => $candidateId,
                            'Role' => 'Candidate'
                        );
                        $this->db->insert('candidate_roles', $arrayCandidate);
                        break;
                    case '2':
                        $arrayCandidate = array(
                            'CandidateId' => $candidateId,
                            'Role' => 'Elite'
                        );
                        $this->db->insert('candidate_roles', $arrayCandidate);
                        break;
                    case '3':
                        $arrayCandidate = array(
                            'CandidateId' => $candidateId,
                            'Role' => 'Sponsor'
                        );
                        $this->db->insert('candidate_roles', $arrayCandidate);
                        break;
                }
            }
            $this->db->trans_complete();
            $arr = array(
                'type' => "green",
                'content' => "درخواست ثبت نام با موفقیت ارسال شد",
                'senderNumber' => $inputs['inputSignUpPhone'],
                'messageBody' => "ثبت نام با موفقیت انجام شد.نام کاربری:".$inputs['inputSignUpPhone']." و رمز عبور ".$inputs['inputSignUpPhone']." می باشد ",
                'success' => true
            );
            return $arr;
        }

    }
    /* For Prevent Duplicate Info */
    public function doCheckDuplicateSignUpInfo($inputs)
    {
        $this->db->select('*');
        $this->db->from('candidate');
        $this->db->where(array(
            'CandidatePhone !=' => $inputs['inputSignUpPhone'],
            'CandidateNationalCode' => $inputs['inputOldNationalCode']
        ));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return false;
        }
        return true;
    }
    public function doChangeSignUpInfo($inputs)
    {
        /* Update Candidate*/
        $arrayCandidate = array(
            'CandidateFirstName' => $inputs['inputSignUpFirstName'],
            'CandidateLastName' => $inputs['inputSignUpLastName'],
            'CandidateNationalCode' => $inputs['inputSignUpNationalCode'],
            'CandidatePhone' => $inputs['inputSignUpPhone'],
            'CandidateStateId' => $inputs['inputStateId'],
            'CandidateCityId' => $inputs['inputCityId'],
            'CandidateElectionId' => $inputs['inputElectionId'],
            'CandidatePassword' => md5($inputs['inputSignUpPhone'])
        );
        $this->db->where('CandidateNationalCode', $inputs['inputOldNationalCode']);
        $this->db->update('candidate', $arrayCandidate);

        /* Get CandidateId*/
        $this->db->where('CandidateNationalCode', $inputs['inputSignUpNationalCode']);
        $updatedCandidateId = $this->db->get('candidate')->row()->CandidateId;
        /* Delete All prev Roles*/
        $this->db->delete('candidate_roles', array(
            'CandidateId' => $updatedCandidateId
        ));

        /* Update New Roles*/
        foreach ($inputs['inputSignUpType'] as $input) {
            switch ($input) {
                case '1':
                    $arrayCandidate = array(
                        'CandidateId' => $updatedCandidateId,
                        'Role' => 'Candidate'
                    );
                    $this->db->insert('candidate_roles', $arrayCandidate);
                    break;
                case '2':
                    $arrayCandidate = array(
                        'CandidateId' => $updatedCandidateId,
                        'Role' => 'Elite'
                    );
                    $this->db->insert('candidate_roles', $arrayCandidate);
                    break;
                case '3':
                    $arrayCandidate = array(
                        'CandidateId' => $updatedCandidateId,
                        'Role' => 'Sponsor'
                    );
                    $this->db->insert('candidate_roles', $arrayCandidate);
                    break;
            }
        }
        $arr = array(
            'type' => "green",
            'content' => "درخواست بروزرسانی با موفقیت ارسال شد",
            'success' => true
        );
        return $arr;
        /*--------------------------------------------------------------------------------------------------------------------*/
    }
    public function doChangeCandidateState($inputs)
    {
        $arrayCandidate = array(
            'CandidateStatus' => $inputs['inputCandidateStatus']
        );
        $this->db->where('CandidateId', $inputs['inputCandidateId']);
        $this->db->update('candidate', $arrayCandidate);


        $this->db->select('*');
        $this->db->from('candidate');
        $this->db->where(array(
            'CandidateId' => $inputs['inputCandidateId']
        ));
        $result = $this->db->get()->result_array();
        $this->db->select('*');
        $this->db->from('candidate_roles');
        $this->db->where('CandidateId', $result[0]['CandidateId']);
        $roles = $this->db->get()->result_array();
        $result[0]['roles'] = $roles;
        $this->session->set_userdata('UserLoginInfo', $result[0]);

        $arr = array(
            'type' => "green",
            'content' => "درخواست بروزرسانی با موفقیت ارسال شد",
            'success' => true
        );
        return $arr;
    }
    /*For Contact Form*/
    public function submitReportAbuse($inputs)
    {
        $array = array(
            'ReportCandidateId' => $inputs['inputReportCandidateId'],
            'ReportFullName' => $inputs['inputReportFullName'],
            'ReportTitle' => $inputs['inputReportTitle'],
            'ReportPhone' => $inputs['inputReportPhone'],
            'ReportContent' => $inputs['inputReportContent'],
            'ReportIp' => $this->input->ip_address(),
            'CreateDateTime' => jDateTime::date("Y/m/d H:i:s", false, false)
        );
        $this->db->trans_start();
        $this->db->insert('candidate_report_abuse', $array);
        $this->db->trans_complete();
        $arr = array(
            'type' => "green",
            'content' => "گزارش شما با موفقیت ارسال شد",
            'success' => true
        );
        return $arr;
    }
    public function submitResetPassword($inputs){
        /*-------------------------------------------------------------------------------------*/
        $this->db
            ->select('*')
            ->from('candidate')
            ->where('CandidatePhone', $inputs['inputPhone']);
        $result = $this->db->get()->result_array();
        if(empty($result)){
            $arr = array(
                'type' => "red",
                'content' => "اطلاعات در سامانه یافت نشد",
                'success' => false
            );
            return $arr;
        }
        else{
            $arrayCandidate = array(
                'CandidatePassword' => md5($inputs['inputPhone'])
            );
            $this->db->where(' CandidatePhone', $inputs['inputPhone']);
            $this->db->update('candidate', $arrayCandidate);
            /*-------------------------------------------------------------------------------------*/
            $html = "اطلاعات ورود به سایت:";
            $html .= "\n";
            $html .= "نام کاربری:".$inputs['inputPhone'];
            $html .= "\n";
            $html .= "رمز عبور:".$inputs['inputPhone'];
            /*$html .= "\n";
            $html .= "http://azmaa.net";*/
            $arr = array(
                'type' => "green",
                'content' => "رمز عبور جدید به تلفن شما ارسال شد",
                'senderNumber' => $inputs['inputPhone'],
                'messageBody' => $html,
                'success' => true
            );
            return $arr;
        }
    }
}
?>