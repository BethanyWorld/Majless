<?php
class ModelReportAbuse extends CI_Model{
    public function getReportAbuses($inputs)
    {
        $limit = $inputs['pageIndex'];
        $start = ($limit - 1) * $this->config->item('defaultPageSize');
        $end = $this->config->item('defaultPageSize');
        $this->db->select('*');
        $this->db->from('candidate_report_abuse');
        $this->db->join("candidate",'candidate_report_abuse.ReportCandidateId = candidate.CandidateId');
        if(isset($inputs['inputReportAbuseVisited']) && $inputs['inputReportAbuseVisited'] != ""){
            $this->db->where('Visited' , $inputs['inputReportAbuseVisited']);
        }
        if(isset($inputs['inputReportAbuseStateId']) && $inputs['inputReportAbuseStateId'] != ""){
            $this->db->where(array('CandidateStateId' => $inputs['inputReportAbuseStateId']));
        }
        $this->db->order_by('ReportId', 'DESC');
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

    public function getReportAbuseByReportAbuseId($tId )
    {
        $this->db->select('*');
        $this->db->from('candidate_report_abuse');
        $this->db->join("candidate",'candidate_report_abuse.ReportCandidateId = candidate.CandidateId');
        $this->db->join('state' , 'candidate.CandidateStateId = state.StateId');
        $this->db->join('city' , 'candidate.CandidateCityId = city.CityId');
        $this->db->where(array('ReportId' => $tId));
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
            'Visited' => $inputs['inputReportAbuseVisited'],
        );
        $this->db->trans_start();
        $this->db->where('ReportId' , $inputs['inputReportAbuseReportId']);
        $this->db->update('candidate_report_abuse', $UserArray);
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