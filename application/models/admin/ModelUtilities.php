<?php
class ModelUtilities extends CI_Model{
    public function getUniversity($inputs)
    {
        $limit = $inputs['pageIndex'];
        $start = ($limit - 1) * $this->config->item('defaultPageSize');
        $end = $this->config->item('defaultPageSize');
        $this->db->select('*');
        $this->db->from('university');
        if (isset($inputs['inputUniversityName'])) {
            $this->db->like('UniversityTitle', $inputs['inputUniversityName']);
        }
        $this->db->order_by('UniversityId DESC');
        $tempDb = clone $this->db;
        $result['count'] = $tempDb->get()->num_rows();
        $this->db->limit($end, $start);
        $query = $this->db->get()->result_array();
        if (count($query) > 0) {
            $result['data'] = $query;
            $result['startPage'] = $start;
        } else {
            $result['data'] = array();
            $result['startPage'] = 0;
        }
        return $result;
    }
    public function getUniversityById($id)
    {
        $this->db->select('*');
        $this->db->from('university');
        $this->db->where('UniversityId', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        $arr = array();
        return $arr;
    }
    public function getAllUniversity()
    {
        $this->db->select('*');
        $this->db->from('university');
        $this->db->order_by('UniversityId DESC');
        return $this->db->get()->result_array();
    }
    public function doAddUniversity($inputs)
    {
        $this->db->trans_start();
        $UserArray = array(
            'UniversityTitle' => $inputs['inputUniversityTitle'],
            'IsActive' => $inputs['IsActive'],
            'CreateDateTime' => jDateTime::date("Y/m/d H:i:s", false, false)
        );
        $this->db->insert('university', $UserArray);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "درج با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "درج با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function doEditUniversity($inputs){
        $this->db->trans_start();
        $UserArray = array(
            'UniversityTitle' => $inputs['inputUniversityTitle'],
            'IsActive' => $inputs['IsActive'],
            'CreateDateTime' => jDateTime::date("Y/m/d H:i:s", false, false)
        );
        $this->db->where('UniversityId', $inputs['inputUniversityId']);
        $this->db->update('university', $UserArray);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "ویرایش با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "ویرایش با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function doDeleteUniversity($inputs)
    {
        $this->db->trans_start();
        $this->db->delete('university', array(
            'UniversityId' => $inputs['inputUniversityId']
        ));
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "حذف محل آزمون با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "حذف محل آزمون با موفقیت انجام شد",
                'redirect' => base_url('Admin/ExamPlaces/index'),
                'success' => true
            );
            return $arr;
        }
    }
    /*-----------------------------------------------------*/
    public function getSkill($inputs)
    {
        $limit = $inputs['pageIndex'];
        $start = ($limit - 1) * $this->config->item('defaultPageSize');
        $end = $this->config->item('defaultPageSize');
        $this->db->select('*');
        $this->db->from('university');
        if (isset($inputs['inputUniversityName'])) {
            $this->db->like('UniversityTitle', $inputs['inputUniversityName']);
        }
        $this->db->order_by('UniversityId DESC');
        $tempDb = clone $this->db;
        $result['count'] = $tempDb->get()->num_rows();
        $this->db->limit($end, $start);
        $query = $this->db->get()->result_array();
        if (count($query) > 0) {
            $result['data'] = $query;
            $result['startPage'] = $start;
        } else {
            $result['data'] = array();
            $result['startPage'] = 0;
        }
        return $result;
    }
    public function getSkillById($id)
    {
        $this->db->select('*');
        $this->db->from('university');
        $this->db->where('UniversityId', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        $arr = array();
        return $arr;
    }
    public function getAllSkill()
    {
        $this->db->select('*');
        $this->db->from('university');
        $this->db->order_by('UniversityId DESC');
        return $this->db->get()->result_array();
    }
    public function doAddSkill($inputs)
    {
        $this->db->trans_start();
        $UserArray = array(
            'UniversityTitle' => $inputs['inputUniversityTitle'],
            'IsActive' => $inputs['IsActive'],
            'CreateDateTime' => jDateTime::date("Y/m/d H:i:s", false, false)
        );
        $this->db->insert('university', $UserArray);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "درج با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "درج با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function doEditSkill($inputs){
        $this->db->trans_start();
        $UserArray = array(
            'SkillTitle' => $inputs['inputUniversityTitle'],
            'IsActive' => $inputs['IsActive'],
            'CreateDateTime' => jDateTime::date("Y/m/d H:i:s", false, false)
        );
        $this->db->where('UniversityId', $inputs['inputUniversityId']);
        $this->db->update('university', $UserArray);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "ویرایش با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "ویرایش با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function doDeleteSkill($inputs)
    {
        $this->db->trans_start();
        $this->db->delete('skills', array(
            'SkillId' => $inputs['inputSkillId']
        ));
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "حذف محل آزمون با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "حذف محل آزمون با موفقیت انجام شد",
                'redirect' => base_url('Admin/ExamPlaces/index'),
                'success' => true
            );
            return $arr;
        }
    }

}
?>