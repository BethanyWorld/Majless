<?php
class ModelContent extends CI_Model{
    /*Content Category ---------------------------------------------------------*/
    public function getAllContentCategory()
    {
        $this->db->select('*');
        $this->db->from('content_category');
        $this->db->order_by('CategoryId', 'ASC');
        return $this->db->get()->result_array();
    }
    public function getContentCategory($inputs)
    {
        $limit = $inputs['pageIndex'];
        $start = ($limit - 1) * $this->config->item('defaultPageSize');
        $end = $this->config->item('defaultPageSize');
        $this->db->select('*');
        $this->db->from('content_category');
        $this->db->order_by('CategoryId', 'DESC');

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
    public function getContentCategoryByContentCategoryId($contentCategory)
    {
        $this->db->select('*');
        $this->db->from('content_category');
        $this->db->where(array('CategoryId' => $contentCategory));
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
    public function doAddContentCategory($inputs)
    {
        $this->db->trans_start();
        $UserArray = array(
            'CategoryTitle' => $inputs['inputCategoryTitle']
        );
        $this->db->insert('content_category', $UserArray);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "درج دسته بندی با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "درج دسته بندی با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }


    }
    public function doEditContentCategory($inputs)
    {
        $UserArray = array(
            'CategoryTitle' => $inputs['inputCategoryTitle']
        );
        $this->db->trans_start();
        $this->db->where('CategoryId', $inputs['inputCategoryId']);
        $this->db->update('content_category', $UserArray);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "ویرایش دسته بندی با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "ویرایش دسته بندی با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function doDeleteContentCategory($inputs)
    {
        if ($inputs['inputCategoryId'] == 1) {
            $arr = array(
                'type' => "red",
                'content' => "این دسته بندی قابل حذف شدن نیست",
                'success' => false
            );
            return $arr;
        } else {
            $this->db->trans_start();
            $this->db->delete('content_category', array(
                'CategoryId' => $inputs['inputCategoryId']
            ));
            $this->db->trans_complete();
            if ($this->db->trans_status() === FALSE) {
                $arr = array(
                    'type' => "red",
                    'content' => "حذف دسته بندی با مشکل مواجه شد",
                    'success' => false
                );
                return $arr;
            } else {
                $arr = array(
                    'type' => "green",
                    'content' => "حذف دسته بندی با موفقیت انجام شد",
                    'success' => true
                );
                return $arr;
            }
        }
    }
    /* End Content Category -----------------------------------------------------*/
    public function getContent($inputs){
        $limit = $inputs['pageIndex'];
        $start = ($limit - 1) * $this->config->item('defaultPageSize');
        $end = $this->config->item('defaultPageSize');
        $this->db->select('*');
        $this->db->from('content');
        $this->db->join('content_category' , 'content.ContentCategoryId = content_category.CategoryId');
        if (isset($inputs['inputCategoryId'])) {
            $this->db->where(array('ContentCategoryId' => $inputs['inputCategoryId']));
        }
        if (isset($inputs['inputContentStatus']) && $inputs['inputContentStatus'] !="" ) {
            $this->db->where(array('ContentStatus' => $inputs['inputContentStatus']));
        }
        $this->db->order_by('ContentId', 'DESC');

        $tempDb = clone $this->db;
        $result['count'] = $tempDb->get()->num_rows();

        $this->db->limit($end, $start);
        $query = $this->db->get()->result_array();
        if (count($query) > 0) {
            $result['data'] = $query;
            $result['startPage'] = $start;
        } else {
            $result['data'] = array();
        }
        return $result;
    }
    public function getContentByContentId($contentId)
    {
        $this->db->select('*');
        $this->db->from('content');
        $this->db->where(array('ContentId' => $contentId));
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
    public function doAddContent($inputs){
        $this->db->trans_start();
        if(!isset($inputs['inputContentStatus'])){
            $inputs['inputContentStatus'] = 0;
        }
        $UserArray = array(
            'ContentTitle' => $inputs['inputContentTitle'],
            'ContentBrief' => $inputs['inputContentBrief'],
            'ContentDescription' => $inputs['inputContentDescription'],
            'ContentImage' => $inputs['inputContentImage'],
            'ContentAttachment' => $inputs['inputContentAttachment'],
            'ContentAuthor' => $inputs['inputContentAuthor'],
            'ContentAuthorPhone' => $inputs['inputContentPhone'],
            'ContentAuthorEmail' => $inputs['inputContentEmail'],
            'ContentCategoryId' => $inputs['inputContentCategoryId'],
            'ContentStatus' => $inputs['inputContentStatus'],
            'CreateDateTime' => jDateTime::date("Y/m/d H:i:s", false, false)
        );
        $this->db->insert('content', $UserArray);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "درج محتوا با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "درج محتوا با موفقیت انجام شد",
                'redirect' => base_url('Admin/Content/index'),
                'success' => true
            );
            return $arr;
        }
    }
    public function doEditContent($inputs)
    {
        if(!empty($inputs['inputContentImage'])){
            $UserArray = array(
                'ContentTitle' => $inputs['inputContentTitle'],
                'ContentBrief' => $inputs['inputContentBrief'],
                'ContentDescription' => $inputs['inputContentDescription'],
                'ContentImage' => $inputs['inputContentImage'],
                'ContentAttachment' => $inputs['inputContentAttachment'],
                'ContentAuthor' => $inputs['inputContentAuthor'],
                'ContentCategoryId' => $inputs['inputContentCategoryId'],
                'ContentStatus' => $inputs['inputContentStatus'],
                'CreateDateTime' => jDateTime::date("Y/m/d H:i:s", false, false)
            );
        }
        else{
            $UserArray = array(
                'ContentTitle' => $inputs['inputContentTitle'],
                'ContentBrief' => $inputs['inputContentBrief'],
                'ContentDescription' => $inputs['inputContentDescription'],
                'ContentAttachment' => $inputs['inputContentAttachment'],
                'ContentAuthor' => $inputs['inputContentAuthor'],
                'ContentCategoryId' => $inputs['inputContentCategoryId'],
                'ContentStatus' => $inputs['inputContentStatus'],
                'CreateDateTime' => jDateTime::date("Y/m/d H:i:s", false, false)
            );
        }
        $this->db->trans_start();
        $this->db->where('ContentId', $inputs['inputContentId']);
        $this->db->update('content', $UserArray);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "ویرایش محتوا با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "ویرایش محتوا با موفقیت انجام شد",
                'redirect' => base_url('Admin/Content/index'),
                'success' => true
            );
            return $arr;
        }
    }
    public function doDeleteContent($inputs)
    {
        $this->db->trans_start();
        $this->db->delete('content', array(
            'ContentId' => $inputs['inputContentId']
        ));
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "حذف محتوا با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "حذف محتوا با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function doAcceptContent($inputs)
    {
        $UserArray = array(
            'ContentStatus' => 1
        );
        $this->db->trans_start();
        $this->db->where('ContentId', $inputs['inputContentId']);
        $this->db->update('content', $UserArray);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "تغییر وضعیت انتشار محتوا با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "تغییر وضعیت انتشار محتوا با موفقیت انجام شد",
                'redirect' => base_url('Admin/Content/index'),
                'success' => true
            );
            return $arr;
        }
    }
    public function doRejectContent($inputs)
    {
        $UserArray = array(
            'ContentStatus' => -1
        );
        $this->db->trans_start();
        $this->db->where('ContentId', $inputs['inputContentId']);
        $this->db->update('content', $UserArray);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "تغییر وضعیت انتشار محتوا با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "تغییر وضعیت انتشار محتوا با موفقیت انجام شد",
                'redirect' => base_url('Admin/Content/index'),
                'success' => true
            );
            return $arr;
        }
    }
    public function getAcceptedContent($inputs){
        $limit = $inputs['pageIndex'];
        $start = ($limit - 1) * $this->config->item('defaultPageSize');
        $end = $this->config->item('defaultPageSize');
        $this->db->select('*');
        $this->db->from('content');
        $this->db->join('content_category' , 'content.ContentCategoryId = content_category.CategoryId');
        if (isset($inputs['inputCategoryId'])) {
            $this->db->where(array('ContentCategoryId' => $inputs['inputCategoryId']));
        }
        $this->db->where(array('ContentStatus' =>1));
        $this->db->order_by('ContentId', 'DESC');

        $tempDb = clone $this->db;
        $result['count'] = $tempDb->get()->num_rows();

        $this->db->limit($end, $start);
        $query = $this->db->get()->result_array();
        if (count($query) > 0) {
            $result['data'] = $query;
            $result['startPage'] = $start;
        } else {
            $result['data'] = array();
        }
        return $result;
    }
}
?>