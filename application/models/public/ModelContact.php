<?php
class ModelContact extends CI_Model{
    public function getContacts($inputs)
    {
        $limit = $inputs['pageIndex'];
        $start = ($limit - 1) * $this->config->item('defaultPageSize');
        $end = $this->config->item('defaultPageSize');
        $this->db->select('*');
        $this->db->from('form_contact');
        if(isset($inputs['inputContactSubject']) && $inputs['inputContactSubject'] != ""){
            $this->db->where('ContactSubject' , $inputs['inputContactSubject']);
        }

        if(isset($inputs['inputContactVisited']) && $inputs['inputContactVisited'] != ""){
            $this->db->where('Visited' , $inputs['inputContactVisited']);
        }


        $this->db->order_by('RowId', 'DESC');
        $tempDb = clone $this->db;
        $result['count'] = $tempDb->get()->num_rows();
        $this->db->limit($end,$start);
        $query = $this->db->get()->result_array();
        if (count($query) > 0) {
            $result['data'] = $query;
            $result['startPage'] = $start;
        }
        else {
            $result['data'] = false;
        }
        return $result;
    }
    public function getContactByContactId($contactId)
    {
        $this->db->select('*');
        $this->db->from('form_contact');
        $this->db->where(array('RowId' => $contactId));
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
    public function doChangeVisitState($inputs)
    {
        $UserArray = array(
            'Visited' => $inputs['inputContactVisited'],
        );
        $this->db->trans_start();
        $this->db->where('RowId' , $inputs['inputContactRowId']);
        $this->db->update('form_contact', $UserArray);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "تغییر وضعیت با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "تغییر وضعیت با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }


    }
}

?>