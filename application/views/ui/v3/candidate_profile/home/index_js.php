<script type="text/javascript">
    $(document).ready(function () {
        $nationalCode = "<?php echo $userInfo['CandidateNationalCode']; ?>";
        $personalInfoApi = "<?php echo $this->config->item('api')['PersonalInformationWeb']; ?>nationalCode=" + $nationalCode;
        $legalConditionsApi = "<?php echo $this->config->item('api')['LegalConditionsWeb']; ?>nationalCodeList=" + $nationalCode;
        $.ajax({
            type: 'get',
            url: $personalInfoApi,
            success: function (data) {
                $result = data;
                $(".full-name").text($result['firstName'] + " " + $result['lastName']);
                $(".national-code").text($result['nationalCode']);
                $(".phone").text($result['cellPhoneNumber'] || "-");
                $(".profile-image").attr('src', $result['profileImage'] || "<?php echo $noImg; ?>");
            }
        });

        $candidateStatus = "";
        $.ajax({
            type: 'get',
            url: $legalConditionsApi,
            success: function (data) {
                $result = data;
                $.each($result['items'], function (index, value) {
                    /*اگر نامزد انتخاباتی رزومه خود را تکمیل کرده بود*/
                    if (value['isCompleted']) {
                        $candidateStatus = "CandidateResumeCompleted";
                        /*اگر نامزد انتخاباتی رزومه را تکمیل کرده بود و  شرایط  نامزد را داشت*/
                        if (value['hasConditions']) {
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
                    $sendData = {
                        'inputCandidateStatus': $candidateStatus,
                    }
                    /*$.ajax({
                        type: 'post',
                        url: base_url + 'SignUp/changeCandidateState',
                        data: $sendData,
                        success: function (data) {
                        }
                    });*/
                });
            }
        });



        $("#hasNotNormalCondition").click(function () {
            toggleLoader();
            $.ajax({
                type : 'post',
                url : base_url + 'Profile/candidateHasOtherConditionToContinue',
                data : {'inputCandidateContinueCondition': 'CandidateHasNotContinueCondition'},
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
                type : 'post',
                url : base_url + 'Profile/candidateHasOtherConditionToContinue',
                data : {'inputCandidateContinueCondition': 'CandidateHasContinueCondition'},
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