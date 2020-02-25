<?php
class ModelUtilities extends CI_Model{
    public function getUniversity($inputs){
        $limit = $inputs['pageIndex'];
        $start = ($limit - 1) * $this->config->item('defaultPageSize');
        $end = $this->config->item('defaultPageSize');
        $this->db->select('*');
        $this->db->from('university');
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
    public function getAllUniversity(){
        $this->db->select('*');
        $this->db->from('university');
        $this->db->order_by('UniversityId DESC');
        return $this->db->get()->result_array();
    }
    public function doAddUniversity($inputs){
        $agentId = 0;
        $agentStateId = $this->config->item('defaultStateId');
        $this->db->trans_start();
        $UserArray = array(
            'ExamPlaceTitle' => $inputs['inputExamPlaceTitle'],
            'ExamPlaceAddress' => $inputs['inputExamPlaceAddress'],
            'ExamPlaceMapImage' => $inputs['inputExamPlaceMapImage'],
            'ExamPlaceDefaultCapacity' => $inputs['inputExamPlaceDefaultCapacity'],
            'ExamPlaceStateId' => $agentStateId,
            'ExamPlaceAgentId' => $agentId
        );
        $this->db->insert('exam_places', $UserArray);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "درج محل آزمون با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "درج محل آزمون با موفقیت انجام شد",
                'redirect' => base_url('Admin/ExamPlaces/index'),
                'success' => true
            );
            return $arr;
        }
    }
    public function doEditUniversity($inputs)
    {
        $agentId = 0;
        $this->db->trans_start();
        if (isset($inputs['ExamPlaceMapImage'])) {
            $UserArray = array(
                'ExamPlaceTitle' => $inputs['inputExamPlaceTitle'],
                'ExamPlaceAddress' => $inputs['inputExamPlaceAddress'],
                'ExamPlaceMapImage' => $inputs['inputExamPlaceMapImage'],
                'ExamPlaceDefaultCapacity' => $inputs['inputExamPlaceDefaultCapacity'],
                'ExamPlaceAgentId' => $agentId
            );
        } else {
            $UserArray = array(
                'ExamPlaceTitle' => $inputs['inputExamPlaceTitle'],
                'ExamPlaceAddress' => $inputs['inputExamPlaceAddress'],
                'ExamPlaceMapImage' => $inputs['inputExamPlaceMapImage'],
                'ExamPlaceDefaultCapacity' => $inputs['inputExamPlaceDefaultCapacity'],
                'ExamPlaceAgentId' => $agentId
            );
        }
        $this->db->where('ExamPlaceId', $inputs['inputExamPlaceId']);
        $this->db->where('ExamPlaceAgentId', $agentId);
        $this->db->update('exam_places', $UserArray);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "ویرایش محل آزمون با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "ویرایش محل آزمون با موفقیت انجام شد",
                'redirect' => base_url('Admin/ExamPlaces/index'),
                'success' => true
            );
            return $arr;
        }
    }
    public function doDeleteUniversity($inputs){
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
    /*public function doAcceptCandidateEvaluationExam($inputs){
        $this->db->trans_start();
        $UserArray = array(
            'ExamState' => 'Done'
        );
        $this->db->where('RequestId', $inputs['inputRequestId']);
        $this->db->update('candidate_exam_request', $UserArray);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "تایید آزمون با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "تایید آزمون با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }*/
}
?>