<?php

class ModelPages extends CI_Model
{
    public function getPagesByAgentId($inputs)
    {
        $agentId = $this->session->userdata('AgentLoginInfo')[0]['AgentId'];
        $limit = $inputs['pageIndex'];
        $start = ($limit - 1) * $this->config->item('defaultPageSize');
        $end = $this->config->item('defaultPageSize');

        $this->db->select('*');
        $this->db->from('pages');
        $this->db->where(array('PageAgentId' => $agentId));
        $this->db->order_by('PageId DESC');

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

    public function getPageByPageId($pageId)
    {
        $agentId = $this->session->userdata('AgentLoginInfo')[0]['AgentId'];
        $this->db->select('*');
        $this->db->from('pages');
        $this->db->where('PageId', $pageId);
        $this->db->where('PageAgentId', $agentId);
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

    public function doAddPage($inputs)
    {
        $agentId = $this->session->userdata('AgentLoginInfo')[0]['AgentId'];
        $this->db->trans_start();
        $UserArray = array(
            'PageTitle' => $inputs['inputPageTitle'],
            'PageContent' => $inputs['inputPageContent'],
            'CreateDateTime' => jDateTime::date("Y/m/d H:i:s", false, false),
            'ModifyDateTime' => jDateTime::date("Y/m/d H:i:s", false, false),
            'PageAgentId' => $agentId
        );
        $this->db->insert('pages', $UserArray);

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
                'redirect' => base_url('Agent/Pages/index'),
                'success' => true
            );
            return $arr;
        }
    }

    public function doEditPage($inputs)
    {
        $agentId = $this->session->userdata('AgentLoginInfo')[0]['AgentId'];
        $this->db->trans_start();
        $UserArray = array(
            'PageTitle' => $inputs['inputPageTitle'],
            'PageContent' => $inputs['inputPageContent'],
            'ModifyDateTime' => jDateTime::date("Y/m/d H:i:s", false, false)
        );
        $this->db->where('PageId', $inputs['inputPageId']);
        $this->db->where('PageAgentId', $agentId);
        $this->db->update('pages', $UserArray);
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
                'redirect' => base_url('Agent/Pages/index'),
                'success' => true
            );
            return $arr;
        }
    }

    public function doDeletePage($inputs)
    {
        $agentId = $this->session->userdata('AgentLoginInfo')[0]['AgentId'];
        $this->db->trans_start();
        $this->db->delete('pages', array(
            'PageAgentId' => $agentId,
            'PageId' => $inputs['inputPageId']
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
                'redirect' => base_url('Agent/Pages/index'),
                'success' => true
            );
            return $arr;
        }
    }
}

?>