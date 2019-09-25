<?php
class ModelPosts extends CI_Model{
    public function getPostsByAgentId($inputs)
    {
        $agentId = $this->session->userdata('AgentLoginInfo')[0]['AgentId'];
        $limit = $inputs['pageIndex'];
        $start = ($limit - 1) * $this->config->item('defaultPageSize');
        $end = $this->config->item('defaultPageSize');

        $this->db->select('*');
        $this->db->from('posts');
        $this->db->where(array('PostAgentId' => $agentId));
        $this->db->order_by('PostId DESC');

        $tempDb = clone $this->db;
        $result['count'] = $tempDb->get()->num_rows();

        $this->db->limit($end, $start);
        $query = $this->db->get()->result_array();
        if (count($query) > 0) {
            $result['data'] = $query;
            $result['startPage'] = $start;
        } else {
            $result['data'] = false;
        }
        return $result;
    }
    public function getPostByPostId($postId)
    {
        $agentId = $this->session->userdata('AgentLoginInfo')[0]['AgentId'];
        $this->db->select('*');
        $this->db->from('posts');
        $this->db->where('PostId', $postId);
        $this->db->where('PostAgentId', $agentId);
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
    public function doAddPost($inputs){
        $agentId = $this->session->userdata('AgentLoginInfo')[0]['AgentId'];
        $this->db->trans_start();
        $UserArray = array(
            'PostTitle' => $inputs['inputPostTitle'],
            'PostContent' => $inputs['inputPostContent'],
            'PostImage' => $inputs['inputPostImage'],
            'CreateDateTime' => jDateTime::date("Y/m/d H:i:s", false, false),
            'ModifyDateTime' => jDateTime::date("Y/m/d H:i:s", false, false),
            'PostAgentId' => $agentId
        );
        $this->db->insert('posts', $UserArray);
        $insertId = $this->db->insert_id();
        $candidatePosts = json_decode($inputs['inputCandidatePostIds']);
        for ($i=0; $i < count($candidatePosts);$i++) {

            $arr = array(
                'CandidateId' => $candidatePosts[$i],
                'PostId' => $insertId
            );
            $this->db->insert('candidate_post', $arr);
        }
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "درج نوشته با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "درج نوشته با موفقیت انجام شد",
                'redirect' => base_url('Agent/Posts/index'),
                'success' => true
            );
            return $arr;
        }
    }
    public function doEditPost($inputs)
    {
        $agentId = $this->session->userdata('AgentLoginInfo')[0]['AgentId'];
        $this->db->trans_start();
        if (isset($inputs['inputPostImage'])) {
            $UserArray = array(
                'PostTitle' => $inputs['inputPostTitle'],
                'PostContent' => $inputs['inputPostContent'],
                'PostImage' => $inputs['inputPostImage'],
                'ModifyDateTime' => jDateTime::date("Y/m/d H:i:s", false, false)
            );
        } else {
            $UserArray = array(
                'PostTitle' => $inputs['inputPostTitle'],
                'PostContent' => $inputs['inputPostContent'],
                'ModifyDateTime' => jDateTime::date("Y/m/d H:i:s", false, false)
            );
        }
        $this->db->where('PostId', $inputs['inputPostId']);
        $this->db->where('PostAgentId', $agentId);
        $this->db->update('posts', $UserArray);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "ویرایش نوشته با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "ویرایش نوشته با موفقیت انجام شد",
                'redirect' => base_url('Agent/Posts/index'),
                'success' => true
            );
            return $arr;
        }
    }
    public function doDeletePost($inputs)
    {
        $agentId = $this->session->userdata('AgentLoginInfo')[0]['AgentId'];
        $this->db->trans_start();
        $this->db->delete('posts', array(
            'PostAgentId' => $agentId,
            'PostId' => $inputs['inputPostId']
        ));
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "حذف نوشته با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "حذف نوشته با موفقیت انجام شد",
                'redirect' => base_url('Agent/Posts/index'),
                'success' => true
            );
            return $arr;
        }
    }
}
?>