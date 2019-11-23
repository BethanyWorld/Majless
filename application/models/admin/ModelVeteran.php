<?php

class ModelVeteran extends CI_Model{
    public function getAllVeterans()
    {
        $this->db->select('*');
        $this->db->from('veteran');
        $this->db->order_by('VeteranId', 'DESC');
        return $this->db->get()->result_array();
    }
    public function getVeterans($inputs)
    {
        $limit = $inputs['pageIndex'];
        $start = ($limit - 1) * $this->config->item('defaultPageSize');
        $end = $this->config->item('defaultPageSize');
        $this->db->select('*');
        $this->db->from('veteran');
        if(isset($inputs['inputVeteranFullName']) && $inputs['inputVeteranFullName'] != ''){
            $this->db->like('veteran.VeteranFullName' , $inputs['inputVeteranFullName']);
        }
        $this->db->order_by('VeteranId', 'DESC');

        $tempDb = clone $this->db;
        $result['count'] = $tempDb->get()->num_rows();

        $this->db->limit($end,$start);
        $query = $this->db->get()->result_array();
        if (count($query) > 0) {
            $result['data'] = $query;
            $result['startPage'] = $start;
        } else {
            $result['data'] = false;
        }
        return $result;
    }
    public function getVeteranByVeteranId($productId)
    {
        $this->db->select('*');
        $this->db->from('veteran');
        $this->db->where(array('VeteranId' => $productId));
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

    public function doAdd($inputs)
    {
        $this->db->trans_start();
        $UserArray = array(
            'VeteranFullName' => $inputs['inputVeteranFullName'],
            'VeteranPhone' => $inputs['inputVeteranPhone'],
            'VeteranPassword' => md5($inputs['inputVeteranPhone'])
        );
        $this->db->insert('veteran', $UserArray);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "درج نماینده با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "درج نماینده با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }


    }
    public function doEdit($inputs)
    {
        $UserArray = array(
            'VeteranFullName' => $inputs['inputVeteranFullName'],
            'VeteranPhone' => $inputs['inputVeteranPhone'],
            'VeteranPassword' => md5($inputs['inputVeteranPhone'])
        );
        $this->db->trans_start();
        $this->db->where('VeteranId' , $inputs['inputVeteranId']);
        $this->db->update('veteran', $UserArray);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "ویرایش نماینده با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "ویرایش نماینده با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }


    }
    public function doDelete($inputs)
    {
        $this->db->trans_start();
        $this->db->delete('veteran', array(
            'VeteranId' =>  $inputs['inputVeteranId']
        ));
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "حذف نماینده با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "حذف نماینده با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }


    }

}

?>