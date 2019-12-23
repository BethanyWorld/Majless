<?php
class ModelAccount extends CI_Model{
    public function doLogin($inputs)
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where(array('AdminPhone' => $inputs['inputPhone']));
        $this->db->where(array('AdminPassword' => md5($inputs['inputPassword'])));

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $this->session->set_userdata('AdminIsLogged', TRUE);
            $this->session->set_userdata('AdminLoginInfo', $query->result_array());
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
        $this->db->from('admin');
        $this->db->where(array('AdminPhone' => $inputs['inputPhone']));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $AdminInfo = $query->result_array()[0];
            $phone = $AdminInfo['AdminPhone'];
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
                $Array['AdminPassword'] = md5($randomPassword);
                $this->db->where('AdminId', $AdminInfo['AdminId']);
                $this->db->update('admin', $Array);
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