<script type="text/javascript">
    $(document).ready(function () {
        $nationalCode = "<?php echo $userInfo['CandidateNationalCode']; ?>";
        $personalInfoApi = "<?php echo $this->config->item('api')['PersonalInformationWeb']; ?>nationalCode=" + $nationalCode;
        $legalConditionsApi = "<?php echo $this->config->item('api')['LegalConditionsWeb']; ?>nationalCodeList=" + $nationalCode;

        $currentCandidateStatus = "<?php echo $userInfo['CandidateStatus']; ?>";
        $candidateStatus = "";
        $.ajax({
            type: 'get',
            url: base_url + 'Profile/getResumeStatus',
            success: function (data) {
                $result = JSON.parse(data);
                /*اگر نامزد انتخاباتی رزومه خود را تکمیل کرده بود*/
                if ($result['isCompleted']) {
                    $candidateStatus = "CandidateResumeCompleted";
                    /*اگر نامزد انتخاباتی رزومه را تکمیل کرده بود و  شرایط  نامزد را داشت*/
                    if ($result['hasConditions']) {
                        $candidateStatus = "CandidateResumeAccepted";
                    }
                    /*اگر نامزد انتخاباتی رزومه را تکمیل کرده بود ولی  شرایط  نامزد را نداشت*/
                    else {
                        $candidateStatus = "CandidateResumeRejected";
                    }
                }
                /*اگر نامزد انتخاباتی رزومه خود را تکمیل نکزده بود*/
                else {
                    $candidateStatus = "CandidateRegister";
                }
                if ($currentCandidateStatus == 'CandidateRegister' || $currentCandidateStatus == 'CandidateResumeCompleted' || $currentCandidateStatus == 'CandidateResumeAccepted' || $currentCandidateStatus == 'CandidateResumeRejected') {
                    $sendData = {'inputCandidateStatus': $candidateStatus,}
                    $.ajax({
                        type: 'post',
                        url: base_url + 'SignUp/changeCandidateState',
                        data: $sendData,
                        success: function (data) {
                            if ($currentCandidateStatus != $candidateStatus) {
                                location.reload();
                            }
                        }
                    });
                }
            }
        });

        $("#hasNotNormalCondition").click(function () {
            toggleLoader();
            $.ajax({
                type: 'post',
                url: base_url + 'Profile/candidateHasOtherConditionToContinue',
                data: {'inputCandidateContinueCondition': 'CandidateHasNotContinueCondition'},
                success: function (data) {
                    toggleLoader();
                    $result = JSON.parse(data);
                    notify($result['content'], $result['type']);
                    if ($result['success']) {
                        setTimeout(function () {
                            location.reload();
                        }, 2000);
                    }
                }
            });
        });
        $("#hasNormalCondition").click(function () {
            toggleLoader();
            $.ajax({
                type: 'post',
                url: base_url + 'Profile/candidateHasOtherConditionToContinue',
                data: {'inputCandidateContinueCondition': 'CandidateHasContinueCondition'},
                success: function (data) {
                    toggleLoader();
                    $result = JSON.parse(data);
                    notify($result['content'], $result['type']);
                    if ($result['success']) {
                        setTimeout(function () {
                            location.reload();
                        }, 2000);
                    }
                }
            });
        });
    });
</script>