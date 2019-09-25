<?php
class ModelProfile extends CI_Model{
    public function getAdminProfileInfoByAdminId($userId)
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where(array('AdminId' => $userId));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array()[0];
        }
        $arr = array(
            'type' => "red",
            'content' => "اطلاعات نامعتبر است",
            'success' => false
        );
        return $arr;
    }
    public function doUpdateProfile($inputs)
    {
        $Array = array(
            'AdminFullName' => $inputs['inputAdminFullName'],
            'AdminPhone' => $inputs['inputAdminPhone']
        );
        if($inputs['inputAdminNewPassword'] !== NULL && $inputs['inputAdminNewPassword'] !== ""){
            $Array['AdminPassword'] = md5($inputs['inputAdminNewPassword']);
        }
        $this->db->trans_start();
        $this->db->where('AdminId', $inputs['inputAdminId']);
        $this->db->update('admin', $Array);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "بروزرسانی ناموفق بود",
                'success' => false
            );
            return $arr;
        }
        else {
            $arr = array(
                'type' => "green",
                'content' => "بروزرسانی با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }

}

?>