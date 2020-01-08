<script type="text/javascript">
    $(document).ready(function () {
        $personalInfo = "";
        $militaryInfo = "";
        $politicalInfo = "";
        $researchInfo = "";
        $skillInfo = "";

        $("#submitReportForm").click(function () {
            toggleLoader();
            $inputReportFullName = $.trim($("#inputReportFullName").val());
            $inputReportTitle = $.trim($("#inputReportTitle").val());
            $inputReportPhone = $.trim($("#inputReportPhone").val());
            $inputReportContent = $.trim($("#inputReportContent").val());
            $inputCaptcha = $.trim($("#inputCaptcha").val());
            $inputCSRF = $.trim($("#inputCSRF").val());
            $inputReportCandidateId = $.trim($("#inputReportCandidateId").val());

            if ($inputReportFullName == "" || $inputReportTitle == "" || $inputReportPhone == "" || $inputReportContent == "" || $inputCaptcha == "") {
                notify("لطفا تمامی موارد را کامل کنید", "red");
                toggleLoader();
            }
            else {
                $sendData = {
                    'inputReportCandidateId': $inputReportCandidateId,
                    'inputReportFullName': $inputReportFullName,
                    'inputReportTitle': $inputReportTitle,
                    'inputReportPhone': $inputReportPhone,
                    'inputReportContent': $inputReportContent,
                    'inputCaptcha': $inputCaptcha,
                    'inputCSRF': $inputCSRF
                }
                $.ajax({
                    type: 'post',
                    url: base_url + 'State/submitReportAbuse',
                    data: $sendData,
                    success: function (data) {
                        toggleLoader();
                        $result = JSON.parse(data);
                        notify($result['content'] , $result['type']);
                        if($result['success']){
                            setTimeout(function(){
                                location.reload();
                            } , 2000);
                        }
                    },
                    error: function(){
                        toggleLoader();
                        notify($result['content'] , $result['type']);
                    }
                });
            }
        });

    });
</script>