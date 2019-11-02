<?php
class ModelExam extends CI_Model{
    /* Exam Places*/
    public function getExamPlace($inputs){
        $limit = $inputs['pageIndex'];
        $start = ($limit - 1) * $this->config->item('defaultPageSize');
        $end = $this->config->item('defaultPageSize');
        $this->db->select('*');
        $this->db->from('exam_places');
        $this->db->where(array('ExamPlaceAgentId' => 0));
        $this->db->order_by('ExamPlaceId DESC');

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
    public function getExamPlaceById($id)
    {
        $this->db->select('*');
        $this->db->from('exam_places');
        $this->db->where('ExamPlaceId', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        $arr = array();
        return $arr;
    }
    public function getAllExamPlaces(){
        $this->db->select('*');
        $this->db->from('exam_places');
        $this->db->where(array('ExamPlaceAgentId' => 0));
        $this->db->order_by('ExamPlaceId DESC');
        return $this->db->get()->result_array();
    }
    public function doAddExamPlace($inputs){
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
    public function doEditExamPlace($inputs)
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
    public function doDeleteExamPlace($inputs)
    {
        $agentId = 0;
        $this->db->trans_start();
        $this->db->delete('exam_places', array(
            'ExamPlaceAgentId' => $agentId,
            'ExamPlaceId' => $inputs['inputExamPlaceId']
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

    /* Exams */
    public function getExamByAgentId($inputs)
    {
        $agentId = 0;
        $limit = $inputs['pageIndex'];
        $start = ($limit - 1) * $this->config->item('defaultPageSize');
        $end = $this->config->item('defaultPageSize');

        $this->db->select('*');
        $this->db->from('exam');
        $this->db->join('exam_places', 'exam.ExamPlaceId = exam_places.ExamPlaceId');
        $this->db->where(array('ExamAgentId' => $agentId));
        $this->db->order_by('ExamId DESC');

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
    public function getExamByExamId($id)
    {
        $agentId = 0;
        $this->db->select('*');
        $this->db->from('exam');
        $this->db->join('exam_places', 'exam.ExamPlaceId = exam_places.ExamPlaceId');
        $this->db->where('ExamId', $id);
        $this->db->where('ExamAgentId', $agentId);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        $arr = array();
        return $arr;
    }
    public function getAllExamsByAgentId($agentId = 0){
        $this->db->select('*');
        $this->db->from('exam');
        $this->db->where(array('ExamAgentId' => 0));
        $this->db->order_by('ExamId DESC');
        return $this->db->get()->result_array();
    }
    public function doAddExam($inputs)
    {
        $agentId = 0;
        $this->db->trans_start();
        $UserArray = array(
            'ExamPlaceId' => $inputs['inputExamPlaceId'],
            'ExamType ' => $inputs['inputExamType'],
            'ExamCapacity' => $inputs['inputExamCapacity'],
            'ExamDate' => $inputs['inputExamDate'],
            'ExamTime' => $inputs['inputExamTime'],
            'ExamAgentId' => $agentId
        );
        $this->db->insert('exam', $UserArray);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "درج آزمون با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "درج آزمون با موفقیت انجام شد",
                'redirect' => base_url('Admin/Exams/index'),
                'success' => true
            );
            return $arr;
        }
    }
    public function doEditExam($inputs){
        $agentId = 0;
        $this->db->trans_start();
        $UserArray = array(
            'ExamPlaceId' => $inputs['inputExamPlaceId'],
            'ExamType ' => $inputs['inputExamType'],
            'ExamCapacity' => $inputs['inputExamCapacity'],
            'ExamDate' => $inputs['inputExamDate'],
            'ExamTime' => $inputs['inputExamTime'],
            'ExamAgentId' => $agentId
        );
        $this->db->where('ExamId', $inputs['inputExamId']);
        $this->db->where('ExamAgentId', $agentId);
        $this->db->update('exam', $UserArray);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "ویرایش آزمون با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "ویرایش آزمون با موفقیت انجام شد",
                'redirect' => base_url('Admin/Exams/index'),
                'success' => true
            );
            return $arr;
        }
    }
    public function doDeleteExam($inputs){
        $agentId = 0;
        $this->db->trans_start();
        $this->db->delete('exam', array(
            'ExamAgentId' => $agentId,
            'ExamId' => $inputs['inputExamId']
        ));
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "حذف آزمون با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "حذف آزمون با موفقیت انجام شد",
                'redirect' => base_url('Agent/Exams/index'),
                'success' => true
            );
            return $arr;
        }
    }
    public function getExamRequestByExamId($examId)
    {
        $this->db->select('*');
        $this->db->from('candidate_exam_request');
        $this->db->join('candidate', 'candidate_exam_request.CandidateId = candidate.CandidateId');
        $this->db->join('state', 'candidate.CandidateStateId = state.StateId');
        $this->db->join('city', 'candidate.CandidateCityId = city.CityId');
        $this->db->where(array('ExamId' => $examId));
        $this->db->order_by('RequestId DESC');


        $tempDb = clone $this->db;
        $result['count'] = $tempDb->get()->num_rows();
        $result['data'] = $this->db->get()->result_array();
        return $result;
    }

    public function doPresenceCandidateFirstExam($inputs){
        $this->db->trans_start();
        $UserArray = array(
            'ExamState' => 'Presence'
        );
        $this->db->where('RequestId', $inputs['inputRequestId']);
        $this->db->update('candidate_exam_request', $UserArray);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "ثبت حضور آزمون با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "ثبت حضور آزمون با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function doAbsenceCandidateFirstExam($inputs){
        $this->db->select('*');
        $this->db->from('candidate_exam_request');
        $this->db->where('RequestId', $inputs['inputRequestId']);
        $candidateId = $this->db->get()->result_array()[0]['CandidateId'];

        $this->db->trans_start();
        $UserArray = array('ExamState' => 'Absence');
        $this->db->where('RequestId', $inputs['inputRequestId']);
        $this->db->update('candidate_exam_request', $UserArray);

        $UserArray = array('CandidateStatus' => 'CandidateResumeMarked');
        $this->db->where('CandidateId', $candidateId);
        $this->db->update('candidate', $UserArray);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "ثبت غیبت آزمون با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        }
        else {
            $arr = array(
                'type' => "green",
                'content' => "ثبت غیبت آزمون با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }

    public function doAcceptCandidateEvaluationExam($inputs){
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
    }
    public function doRejectCandidateEvaluationExam($inputs){
        $this->db->select('*');
        $this->db->from('candidate_exam_request');
        $this->db->where('RequestId', $inputs['inputRequestId']);
        $candidateId = $this->db->get()->result_array()[0]['CandidateId'];

        $this->db->trans_start();
        /*$UserArray = array('ExamState' => 'Absence');
        $this->db->where('RequestId', $inputs['inputRequestId']);
        $this->db->update('candidate_exam_request', $UserArray);*/

        $UserArray = array('CandidateStatus' => 'CandidateAssessmentReject');
        $this->db->where('CandidateId', $candidateId);
        $this->db->update('candidate', $UserArray);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "رد آزمون با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        }
        else {
            $arr = array(
                'type' => "green",
                'content' => "رد آزمون با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }

}
?>