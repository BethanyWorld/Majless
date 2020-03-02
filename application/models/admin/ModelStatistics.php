<?php
class ModelStatistics extends CI_Model{

    public function getItem($inputs)
    {
        $this->db->select('*');
        $this->db->from('statistics');
        if(isset($inputs['inputStatisticsSlug'])){
            $this->db->where('StatisticsSlug', $inputs['inputStatisticsSlug']);
        }
        if(isset($inputs['inputStatisticsType'])){
            $this->db->where('StatisticsType', $inputs['inputStatisticsType']);
        }
        if(isset($inputs['inputStatisticsTypeId'])){
            $this->db->where('StatisticsTypeId', $inputs['inputStatisticsTypeId']);
        }
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        $arr = array();
        return $arr;
    }
    public function doAddItem($inputs){
        $this->db->trans_start();
        foreach ($inputs as $row){
            $this->db->delete('statistics', array(
                'StatisticsSlug' => $row['inputStatisticsSlug'],
                'StatisticsType' => $row['inputStatisticsType'],
                'StatisticsTypeId' => $row['inputStatisticsTypeId']
            ));
        }
        foreach ($inputs as $row){
            $UserArray = array(
                'StatisticsSlug' => $row['inputStatisticsSlug'],
                'StatisticsType' => $row['inputStatisticsType'],
                'StatisticsTypeId' => $row['inputStatisticsTypeId'],
                'StatisticsValue' => $row['inputStatisticsValue']
            );
            $this->db->insert('statistics', $UserArray);
        }
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
    public function doDeleteItem($inputs){
        $this->db->trans_start();
        $this->db->delete('statistics', array(
            'StatisticsType' => $inputs['inputStatisticsId']
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
}
?>