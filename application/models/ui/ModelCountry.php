<?php


class ModelCountry extends CI_Model
{

    public function getCountryList()
    {
        $this->db->select('*');
        $this->db->from('country');
        $this->db->order_by('FaName' , 'ASC');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        $arr = array();
        return $arr;
    }
    public function getStateList()
    {
        $this->db->select('*');
        $this->db->from('state');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        $arr = array();
        return $arr;
    }

    public function getStateById($stateId)
    {
        $this->db->select('*');
        $this->db->from('state');
        $this->db->where(array('StateId' => $stateId));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        $arr = array();
        return $arr;
    }

    public function getCityByStateId($stateId)
    {
        $this->db->select('*');
        $this->db->from('city');
        $this->db->where(array('CityStateId' => $stateId));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        $arr = array();
        return $arr;
    }

    /* For Admin Panel*/
    public function getStates($inputs)
    {
        $limit = $inputs['pageIndex'];
        $start = ($limit - 1) * $this->config->item('defaultPageSize');
        $end = $this->config->item('defaultPageSize');
        $this->db->select('*');
        $this->db->from('state');
        if (isset($inputs['inputStateId']) && $inputs['inputStateId'] != '') {
            $this->db->where('StateId', $inputs['inputStateId']);
        }
        $this->db->order_by('StateId', 'DESC');

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

    public function getStateByStateId($stateId)
    {
        $this->db->select('*');
        $this->db->from('state');
        $this->db->where(array('StateId' => $stateId));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        $arr = array();
        return $arr;
    }

    public function getStateCitiesByStateId($stateId)
    {
        $this->db->select('*');
        $this->db->from('city');
        $this->db->where(array('CityStateId' => $stateId));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        $arr = array();
        return $arr;
    }

    public function getStateIdByStateName($stateName)
    {
        $this->db->select('*');
        $this->db->from('state');
        $this->db->where(array('StateName' => $stateName));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        $arr = array();
        return $arr;
    }

    public function getStateCityIdByCityName($cityName)
    {
        $this->db->select('*');
        $this->db->from('city');
        $this->db->where(array('CityName' => $cityName));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        $arr = array();
        return $arr;
    }

    public function getElectionIdByCityId($electionCityId)
    {
        $this->db->select('*');
        $this->db->from('election_location_city');
        $this->db->where(array('election_location_city.ElectionCityId' => $electionCityId));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        $arr = array();
        return $arr;
    }

    public function doEditState($inputs)
    {
        $UserArray = array(
            'StateName' => $inputs['inputStateName']
        );
        $this->db->trans_start();
        $this->db->where('StateId', $inputs['inputStateId']);
        $this->db->update('state', $UserArray);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "ویرایش استان با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "ویرایش استان با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }

    public function doAddStateCity($inputs)
    {
        $UserArray = array(
            'CityStateId' => $inputs['inputStateId'],
            'CityName' => $inputs['inputCityName'],
        );
        $this->db->trans_start();
        $this->db->insert('city', $UserArray);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "افزودن شهر  با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "افزودن شهر  با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }

    public function doEditStateCity($inputs)
    {
        $UserArray = array(
            'CityName' => $inputs['inputCityName']
        );
        $this->db->trans_start();
        $this->db->where('CityId', $inputs['inputCityId']);
        $this->db->update('city', $UserArray);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "ویرایش شهر با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "ویرایش شهر با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }

    public function doDeleteStateCity($inputs)
    {
        $this->db->trans_start();
        $this->db->delete('city', array(
            'CityStateId' => $inputs['inputStateId'],
            'CityId' => $inputs['inputCityId']
        ));
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "حذف شهر با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "حذف شهر با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }


    }

    public function getElections($inputs)
    {
        $limit = $inputs['pageIndex'];
        $start = ($limit - 1) * $this->config->item('defaultPageSize');
        $end = $this->config->item('defaultPageSize');
        $this->db->select('*');
        $this->db->from('election_location');
        if (isset($inputs['inputElectionStateId']) && $inputs['inputElectionStateId'] != '') {
            $this->db->where('election_location.ElectionStateId', $inputs['inputElectionStateId']);
        }
        $this->db->join('state', 'election_location.ElectionStateId = state.StateId');
        $this->db->order_by('election_location.ElectionStateId', 'ASC');

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

    public function doAddElection($inputs)
    {
        $UserArray = array(
            'ElectionName' => $inputs['inputElectionName'],
            'ElectionStateId' => $inputs['inputElectionStateId']
        );
        $this->db->trans_start();
        $this->db->insert('election_location', $UserArray);
        $insertId = $this->db->insert_id();
        foreach ($inputs['inputElectionCityId'] as $input) {
            $UserArray = array(
                'ElectionId' => $insertId,
                'ElectionCityId' => $input
            );
            $this->db->insert('election_location_city', $UserArray);
        }
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "افزودن شهر  با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "افزودن شهر  با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }

    public function doEditElection($inputs)
    {
        $UserArray = array(
            'ElectionName' => $inputs['inputElectionName'],
            'ElectionStateId' => $inputs['inputElectionStateId']
        );
        $this->db->trans_start();
        $this->db->where('ElectionId', $inputs['inputElectionId']);
        $this->db->update('election_location', $UserArray);


        $this->db->delete('election_location_city', array(
            'ElectionId' => $inputs['inputElectionId']
        ));
        foreach ($inputs['inputElectionCityId'] as $input) {
            $UserArray = array(
                'ElectionId' => $inputs['inputElectionId'],
                'ElectionCityId' => $input
            );
            $this->db->insert('election_location_city', $UserArray);
        }
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "ویرایش حوزه انتخاباتی  با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "ویرایش حوزه انتخاباتی  با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }

    public function doDeleteElection($inputs)
    {
        $this->db->trans_start();
        $this->db->delete('election_location', array(
            'ElectionId' => $inputs['inputElectionId']
        ));
        $this->db->delete('election_location_city', array(
            'ElectionId' => $inputs['inputElectionId']
        ));
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "حذف حوزه انتخاباتی با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "حذف جوزه انتخاباتی با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }


    }

    public function getElectionInfo($electionId)
    {
        $this->db->select('*');
        $this->db->from('election_location');
        $this->db->join('state', 'election_location.ElectionStateId = state.StateId');
        $this->db->where(array('ElectionId' => $electionId));
        $result['election'] = $this->db->get()->result_array()[0];

        $this->db->select('*');
        $this->db->from('election_location_city');
        $this->db->join('city', 'election_location_city.ElectionCityId = city.CityId');
        $this->db->where(array('ElectionId' => $electionId));
        $result['electionCities'] = $this->db->get()->result_array();
        return $result;
    }

    public function getElectionsByStateId($stateId)
    {
        $this->db->select('*');
        $this->db->from('election_location');
        $this->db->where(array('ElectionStateId' => $stateId));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return array();
    }

    /* End For Admin Panel*/


}

?>