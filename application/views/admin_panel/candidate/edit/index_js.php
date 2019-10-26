<script type="text/javascript">
    $(document).ready(function () {
        $candidateNationalCode = "<?php echo $candidate['CandidateNationalCode']; ?>";
        $personalInfo = "";
        $militaryInfo = "";
        $politicalInfo = "";
        $researchInfo = "";
        $skillInfo = "";

        $("#doGrading").click(function () {
            $inputCandidateId = $.trim($("#inputCandidateId").val());
            $inputGrade = $.trim($("#inputGrade").val());
            /* Validation */
            if (!$.isNumeric($inputGrade)) {
                notify('نمره نامعتبر است', 'red');
                return false;
            }
            /* End Validation */
            toggleLoader();
            $sendData = {
                'inputCandidateId': $inputCandidateId,
                'inputGrade': $inputGrade
            }
            $.ajax({
                type: 'post',
                url: base_url + 'Candidate/doMarkCandidate',
                data: $sendData,
                success: function (data) {
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                    toggleLoader();
                    /* Send SMS */
                    if($result['senderNumber'] != "" && $result['senderNumber'] != null) {
                        $.ajax({
                            type: 'POST',
                            url: '<?php echo $api['SMS']; ?>',
                            data: {
                                'senderNumber': $result['senderNumber'],
                                'messageBody': 'کاربر گرامی  لطفا برای اطلاع از زمان و مکان آزمون اولیه به صفحه شخصی خود به آدرس http://majless11.com/Profile مراجعه کنید'
                            },
                            success: function (data) {
                                $result = jQuery.parseJSON(data);
                                notify('ارسال پیامک آزمون با موفقیت انجام شد', 'green');
                                setTimeout(function () {
                                    location.reload();
                                }, 2000);
                            },
                            error: function (jqXHR, textStatus, errorThrown) {
                                notify('مشکلی درخ داده است', 'red');
                            }
                        });
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify('مشکلی درخ داده است', 'red');
                    toggleLoader();
                }
            });
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

    });
</script>