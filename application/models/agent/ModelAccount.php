<?php

class ModelAccount extends CI_Model
{
    public function doLogin($inputs)
    {
        $this->db->select('*');
        $this->db->from('agent');
        $this->db->where(array('AgentPhone' => $inputs['inputPhone']));
        $this->db->where(array('AgentPassword' => md5($inputs['inputPassword'])));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $this->session->set_userdata('AgentIsLogged', TRUE);
            $this->session->set_userdata('AgentLoginInfo', $query->result_array());
            $arr = array(
                'type' => "green",
                'content' => "ورود با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
        $arr = array(
            'type' => "red",
            'content' => "اطلاعات نامعتبر است",
            'success' => false
        );
        return $arr;
    }

    public function doResetPassword($inputs){
        $this->db->select('*');
        $this->db->from('agent');
        $this->db->where(array('AgentPhone' => $inputs['inputPhone']));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $AdminInfo = $query->result_array()[0];
            $phone = $AdminInfo['AgentPhone'];
            $randomPassword = rand(10000,90000);

            $html = "اطلاعات ورود به سایت:";
            $html .= "\n";
            $html .= "نام کاربری:".$phone;
            $html .= "\n";
            $html .= "رمز عبور:".$randomPassword;
            $data = array(
                'type' => "green",
                'content' => "رمز عبور جدید به تلفن شما ارسال شد",
                'senderNumber' => $phone,
                'messageBody' => $html,
                'success' => true
            );
            $ch = curl_init( 'http://new.moarefin.ir:8080/api/Messages' );
            $payload = json_encode( $data );
            curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
            curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
            curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
            $result = curl_exec($ch);
            curl_close($ch);
            $result = json_decode($result , true);
            if($result['success']) {
                $Array = array();
                $Array['AgentPassword'] = md5($randomPassword);
                $this->db->where('AgentId', $AdminInfo['AgentId']);
                $this->db->update('agent', $Array);
                $arr = array(
                    'type' => "green",
                    'content' => "رمز عبور تا چند دقیقه دیگر به شماره همراه شما ارسال خواهد شد",
                    'success' => true
                );
                return $arr;
            }
            $arr = array(
                'type' => "red",
                'content' => "عملیات ناموفق بود",
                'success' => false
            );
            return $arr;
        }
        $arr = array(
            'type' => "red",
            'content' => "اطلاعات نامعتبر است",
            'success' => false
        );
        return $arr;
    }
}

?>