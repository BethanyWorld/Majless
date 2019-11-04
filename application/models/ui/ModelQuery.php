<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ModelQuery extends CI_Model{
    public function getStatePagesByAgentId($agentId)
    {
        $this->db->select('*');
        $this->db->from('pages');
        $this->db->where('PageAgentId' , $agentId);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return array();
    }
    public function getStatePostsByAgentId($agentId)
    {
        $this->db->select('*');
        $this->db->from('posts');
        $this->db->where('PostAgentId' , $agentId);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } 
        return array();
    }
    public function getStatePagesByPageId($pageId)
    {
        $this->db->select('*');
        $this->db->from('pages');
        $this->db->where('PageId' , $pageId);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        $arr = array(
            'type' => "red",
            'content' => "اطلاعات نامعتبر است",
            'success' => false
        );
        return $arr;
    }
    public function getStatePostByPostId($postId)
    {
        $this->db->select('*');
        $this->db->from('posts');
        $this->db->where('PostId' , $postId);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        $arr = array(
            'type' => "red",
            'content' => "اطلاعات نامعتبر است",
            'success' => false
        );
        return $arr;
    }
    public function getLatestPosts()
    {
        $this->db->select('*');
        $this->db->from('posts');
        $this->db->limit(10);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        $arr = array(
            'type' => "red",
            'content' => "اطلاعات نامعتبر است",
            'success' => false
        );
        return $arr;
    }
    public function doLogin($inputs){
        $this->db->select('*');
        $this->db->from('candidate');
        $this->db->where(array(
            'CandidatePhone' => $inputs['inputPhone'],
            'CandidatePassword' => md5($inputs['inputPassword'])
        ));
        $result = $this->db->get()->result_array();
        if(!empty($result)){
            $this->db->select('*');
            $this->db->from('candidate_roles');
            $this->db->where('CandidateId' , $result[0]['CandidateId']);
            $roles = $this->db->get()->result_array();
            $result[0]['roles'] = $roles;

            $this->session->set_userdata('UserLoginInfo' , $result[0]);
            $this->session->set_userdata('UserIsLogged' , true);
            $arr = array(
                'type' => "green",
                'content' => "ورود موفق...در حال انتقال به صفحه کاربری",
                'success' => true
            );
            return $arr;
        }
        else{
            $arr = array(
                'type' => "red",
                'content' => "اطلاعات نامعتبر است",
                'success' => false
            );
            return $arr;
        }

    }
    protected function isSetValue($value)
    {
        if (isset($value) && $value != "" && !empty($value)) {
            return true;
        }
        return false;
    }
}
?>