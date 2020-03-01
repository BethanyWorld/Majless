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
        $this->db->from('skills');
        if (isset($inputs['inputSkillTitle'])) {
            $this->db->like('SkillTitle', $inputs['inputSkillTitle']);
        }
        $this->db->order_by('SkillId DESC');
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
        $this->db->from('skills');
        $this->db->where('SkillId', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        $arr = array();
        return $arr;
    }
    public function getSkillBySearchTerm($searchTerm){
        $this->db->select('*');
        $this->db->from('skills');
        if (isset($searchTerm)) {
            $this->db->like('SkillTitle', $searchTerm);
        }
        $this->db->order_by('SkillId DESC');
        $this->db->limit(20, 0);
        return $this->db->get()->result_array();
    }
    public function getAllSkill()
    {
        $this->db->select('*');
        $this->db->from('skills');
        $this->db->order_by('SkillId DESC');
        return $this->db->get()->result_array();
    }
    public function doAddSkill($inputs)
    {
        $this->db->trans_start();
        $UserArray = array(
            'SkillTitle' => $inputs['inputSkillTitle'],
            'IsActive' => $inputs['IsActive'],
            'CreateDateTime' => jDateTime::date("Y/m/d H:i:s", false, false)
        );
        $this->db->insert('skills', $UserArray);
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
            'SkillTitle' => $inputs['inputSkillTitle'],
            'IsActive' => $inputs['IsActive'],
            'CreateDateTime' => jDateTime::date("Y/m/d H:i:s", false, false)
        );
        $this->db->where('SkillId', $inputs['inputSkillId']);
        $this->db->update('skills', $UserArray);
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
                'content' => "حذف با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "حذف با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    /*-----------------------------------------------------*/
    public function getParty($inputs)
    {
        $limit = $inputs['pageIndex'];
        $start = ($limit - 1) * $this->config->item('defaultPageSize');
        $end = $this->config->item('defaultPageSize');
        $this->db->select('*');
        $this->db->from('party');
        if (isset($inputs['inputPartyTitle'])) {
            $this->db->like('PartyTitle', $inputs['inputPartyTitle']);
        }
        $this->db->order_by('PartyId DESC');
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
    public function getPartyById($id)
    {
        $this->db->select('*');
        $this->db->from('party');
        $this->db->where('PartyId', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        $arr = array();
        return $arr;
    }
    public function getAllParty()
    {
        $this->db->select('*');
        $this->db->from('party');
        $this->db->order_by('PartyId DESC');
        return $this->db->get()->result_array();
    }
    public function doAddParty($inputs)
    {
        $this->db->trans_start();
        $UserArray = array(
            'PartyTitle' => $inputs['inputPartyTitle'],
            'CreateDateTime' => jDateTime::date("Y/m/d H:i:s", false, false)
        );
        $this->db->insert('party', $UserArray);
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
    public function doEditParty($inputs){
        $this->db->trans_start();
        $UserArray = array(
            'PartyTitle' => $inputs['inputPartyTitle'],
            'CreateDateTime' => jDateTime::date("Y/m/d H:i:s", false, false)
        );
        $this->db->where('PartyId', $inputs['inputPartyId']);
        $this->db->update('party', $UserArray);
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
    public function doDeleteParty($inputs)
    {
        $this->db->trans_start();
        $this->db->delete('party', array(
            'PartyId' => $inputs['inputPartyId']
        ));
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "حذف با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "حذف با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    /*-----------------------------------------------------*/

}
?>