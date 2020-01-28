<script type="text/javascript">
    $(document).ready(function () {
        $candidateNationalCode = "<?php echo $candidate['CandidateNationalCode']; ?>";
        $personalInfo = "";
        $militaryInfo = "";
        $politicalInfo = "";
        $researchInfo = "";
        $skillInfo = "";

        function doMark($candidateId , $grade , $action){
            toggleLoader();
            $sendData = {
                'inputCandidateId': $candidateId,
                'inputGrade': $grade,
                'inputGradeType': $action
            }
            $.ajax({
                type: 'post',
                url: base_url + 'Candidate/doMarkSpecialCandidate',
                data: $sendData,
                success: function (data) {
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                    toggleLoader();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify('مشکلی درخ داده است', 'red');
                    toggleLoader();
                }
            });
        }
        $("#doGrading").click(function () {
            $inputCandidateId = $.trim($("#inputCandidateId").val());
            $inputGrade = $.trim($("#inputGrade").val());
            doMark($inputCandidateId , $inputGrade , 'CandidateScore');
        });
        $("#doSignGrading").click(function () {
            $inputCandidateId = $.trim($("#inputCandidateId").val());
            $inputGrade = $.trim($("#inputCandidateSignScore").val());
            doMark($inputCandidateId , $inputGrade , 'CandidateSignScore');
        });
        $("#doRecordsGrading").click(function () {
            $inputCandidateId = $.trim($("#inputCandidateId").val());
            $inputGrade = $.trim($("#inputRecordsGrade").val());
            doMark($inputCandidateId , $inputGrade , 'CandidateRecordsScore');
        });
        $("#doRolesGrading").click(function () {
            $inputCandidateId = $.trim($("#inputCandidateId").val());
            $gradeArray = [];
            $("[name='inputRoleScores']").each(function(){
                $temp = {
                    'Key': $(this).data('title'),
                    'Value': $(this).val()
                }
                $gradeArray.push($temp);
            });
            $inputGrade = JSON.stringify($gradeArray);
            doMark($inputCandidateId , $inputGrade , 'CandidateRolesScore');
        });


        $("#doAcceptFirstExam").click(function () {
            $inputCandidateId = $.trim($("#inputCandidateId").val());
            toggleLoader();
            $sendData = { 'inputCandidateId': $inputCandidateId }
            $.ajax({
                type: 'post',
                url: base_url + 'Candidate/doAcceptCandidateFirstExam',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                    $.ajax({
                            type: 'POST',
                            url: '<?php echo $api['SMS']; ?>',
                            data: {
                                'senderNumber': $result['senderNumber'],
                                'messageBody': $result['messageBody']
                            },
                            success: function (data) {
                                setTimeout(function () {
                                    location.reload();
                                } , 2000);
                            },
                            error: function (jqXHR, textStatus, errorThrown) {
                                notify('مشکلی درخ داده است', 'red');
                            }
                        });
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify('مشکلی درخ داده است', 'red');
                    toggleLoader();
                }
            });
        });
        $("#doRejectFirstExam").click(function () {
            $inputCandidateId = $.trim($("#inputCandidateId").val());
            toggleLoader();
            $sendData = { 'inputCandidateId': $inputCandidateId }
            $.ajax({
                type: 'post',
                url: base_url + 'Candidate/doRejectCandidateFirstExam',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify('مشکلی درخ داده است', 'red');
                    toggleLoader();
                }
            });
        });
        $("#doAcceptSecondExam").click(function () {
            $inputCandidateId = $.trim($("#inputCandidateId").val());
            toggleLoader();
            $sendData = { 'inputCandidateId': $inputCandidateId }
            $.ajax({
                type: 'post',
                url: base_url + 'Candidate/doAcceptCandidateSecondExam',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo $api['SMS']; ?>',
                        data: {
                            'senderNumber': $result['senderNumber'],
                            'messageBody': $result['messageBody']
                        },
                        success: function (data) {
                            setTimeout(function () {
                                location.reload();
                            } , 2000);
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            notify('مشکلی درخ داده است', 'red');
                        }
                    });
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify('مشکلی درخ داده است', 'red');
                    toggleLoader();
                }
            });
        });
        $("#doRejectSecondExam").click(function () {
            $inputCandidateId = $.trim($("#inputCandidateId").val());
            toggleLoader();
            $sendData = { 'inputCandidateId': $inputCandidateId }
            $.ajax({
                type: 'post',
                url: base_url + 'Candidate/doRejectCandidateSecondExam',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify('مشکلی درخ داده است', 'red');
                    toggleLoader();
                }
            });
        });
        $("#doAcceptEvaluationExam").click(function () {
            $inputCandidateId = $.trim($("#inputCandidateId").val());
            toggleLoader();
            $sendData = { 'inputCandidateId': $inputCandidateId }
            $.ajax({
                type: 'post',
                url: base_url + 'Candidate/doAcceptEvaluationExam',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo $api['SMS']; ?>',
                        data: {
                            'senderNumber': $result['senderNumber'],
                            'messageBody': $result['messageBody']
                        },
                        success: function (data) {
                            setTimeout(function () {
                                location.reload();
                            } , 2000);
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            notify('مشکلی درخ داده است', 'red');
                        }
                    });
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify('مشکلی درخ داده است', 'red');
                    toggleLoader();
                }
            });
        });
        $("#doRejectEvaluationExam").click(function () {
            $inputCandidateId = $.trim($("#inputCandidateId").val());
            toggleLoader();
            $sendData = { 'inputCandidateId': $inputCandidateId }
            $.ajax({
                type: 'post',
                url: base_url + 'Candidate/doRejectEvaluationExam',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify('مشکلی درخ داده است', 'red');
                    toggleLoader();
                }
            });
        });
        $("#doChangeCandidatePassword").click(function () {
            $inputCandidateId = $.trim($("#inputCandidateId").val());
            $inputPassword = $.trim($("#inputPassword").val());
            toggleLoader();
            $sendData = {
                'inputCandidateId': $inputCandidateId,
                'inputPassword': $inputPassword
            }
            $.ajax({
                type: 'post',
                url: base_url + 'Candidate/doChangeCandidatePassword',
                data: $sendData,
                success: function (data) {
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                    toggleLoader();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify('مشکلی درخ داده است', 'red');
                    toggleLoader();
                }
            });
        });

    });
</script>