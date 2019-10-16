<?php


class ModelProfile extends CI_Model{
    public function doUpdateCandidatePersonalInfo($inputs)
    {
        $UserArray = array(
            'CandidateFirstName' => $inputs['inputCandidateFirstName'],
            'CandidateLastName' => $inputs['inputCandidateLastName'],
            'CandidateNationalCode' => $inputs['inputCandidateNationalCode'],
            'CandidatePhone' => $inputs['inputCandidatePhone'],
            'CandidateStateId' => $inputs['inputCandidateStateId'],
            'CandidateCityId' => $inputs['inputCandidateCityId'],
            'CandidateConstituencyStateId' => $inputs['inputCandidateConstituencyStateId'],
            'CandidateConstituencyCityId' => $inputs['inputCandidateConstituencyCityId'],
            'CandidateElectionId' => $inputs['inputCandidateElectionId'],
            'CandidateFatherName' => $inputs['inputCandidateFatherName'],
            'CandidateBirthDate' => $inputs['inputCandidateBirthDate'],
            'CandidateGender' => $inputs['inputCandidateGender'],
            'CandidateMaritalStatus' => $inputs['inputCandidateMaritalStatus'],
            'CandidateReligion' => $inputs['inputCandidateReligion'],
            'CandidateBornStateId' => $inputs['inputCandidateBornStateId'],
            'CandidateBornCityId' => $inputs['inputCandidateBornCityId'],
            'CandidateFatherBornStateId' => $inputs['inputCandidateFatherBornStateId'],
            'CandidateFatherBornCityId' => $inputs['inputCandidateFatherBornCityId'],
            'CandidateMotherBornStateId' => $inputs['inputCandidateMotherBornStateId'],
            'CandidateMotherBornCityId' => $inputs['inputCandidateMotherBornCityId'],
            'CandidateAddressStateId' => $inputs['inputCandidateAddressStateId'],
            'CandidateAddressCityId' => $inputs['inputCandidateAddressCityId'],
            'CandidateAddressPart' => $inputs['inputCandidateAddressPart'],
            'CandidateAddressCityPart' => $inputs['inputCandidateAddressCityPart'],
            'CandidateAddressVillage' => $inputs['inputCandidateAddressVillage'],
            'CandidateAddressVillagePart' => $inputs['inputCandidateAddressVillagePart'],
            'CandidateAddress' => $inputs['inputCandidateAddress'],
            'CandidateLandLinePhone' => $inputs['inputCandidateLandLinePhone'],
            'CandidateProfileImage' => $inputs['inputCandidateProfileImage']
        );
        $this->db->trans_start();
        $this->db->where('CandidateId', $inputs['inputCandidateId']);
        $this->db->update('candidate', $UserArray);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "بروزرسانی پروفایل با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "بروزرسانی پروفایل با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }


    }



}

?>