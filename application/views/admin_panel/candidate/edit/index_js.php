<script type="text/javascript">
    $(document).ready(function () {

        /* Update User Info */
        $("#editMP").click(function () {
            $inputMPId = $.trim($("#inputMPId").val());
            $inputMPNationalCode = $.trim($("#inputMPNationalCode").val());
            $inputMPStateId = $.trim($("#inputMPStateId").val());
            $inputMPScore = $.trim($("#inputMPScore").val());
            /* Validation */
            if (!$.isNumeric($inputMPNationalCode)) {
                notify('کد ملی نامعتبر است', 'red');
                return false;
            }
            if (!$.isNumeric($inputMPScore) || $inputMPScore < 1) {
                notify('امتیاز نامعتبر است', 'red');
                return false;
            }
            /* End Validation */
            toggleLoader();
            $sendData = {
                'inputMPId': $inputMPId,
                'inputMPNationalCode': $inputMPNationalCode,
                'inputMPStateId': $inputMPStateId,
                'inputMPScore': $inputMPScore,
            }
            $.ajax({
                type: 'post',
                url: base_url + 'MP/doEdit',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify('اطلاعات نامزد انتخاباتی تکراری ست', 'red');
                    toggleLoader();
                }
            });
        });
        /* End Update User Info */


        /* Update User Info */
        $("#editCandidate").click(function () {
            $inputCandidateId = $.trim($("#inputCandidateId").val());
            $inputCandidateNationalCode = $.trim($("#inputCandidateNationalCode").val());
            $inputCandidateScore = $.trim($("#inputCandidateScore").val());
            $inputCandidateStateId = $.trim($("#inputCandidateStateId").val());
            $inputCandidateCityId = $.trim($("#inputCandidateCityId").val());
            /* Validation */
            if (!$.isNumeric($inputCandidateNationalCode)) {
                notify('کد ملی نامعتبر است', 'red');
                return false;
            }
            if (!$.isNumeric($inputCandidateScore) || $inputCandidateScore < 1) {
                notify('امتیاز نامعتبر است', 'red');
                return false;
            }
            /* End Validation */
            toggleLoader();
            $sendData = {
                'inputCandidateId': $inputCandidateId,
                'inputCandidateNationalCode': $inputCandidateNationalCode,
                'inputCandidateScore': $inputCandidateScore,
                'inputCandidateStateId': $inputCandidateStateId,
                'inputCandidateCityId': $inputCandidateCityId
            }
            $.ajax({
                type: 'post',
                url: base_url + 'Candidate/doEdit',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify('اطلاعات نامزد انتخاباتی تکراری ست', 'red');
                    toggleLoader();
                }
            });
        });
        /* End Update User Info */
        $('#inputCandidateStateId').change(function(){
            toggleLoader();
            $("#inputCandidateCityId").html('');
            $stateId = $(this).val();
            $.ajax({
                type: 'post',
                url: "<?php echo base_url(); ?>" + 'State/getCityByStateId/'+$stateId,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    for(let i=0;i<$result.length;i++){
                        $("#inputCandidateCityId").append('<option value="'+$result[i].CityId+'">'+$result[i].CityName+'</option>');
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    iziToast.show({
                        title: 'خطای ارتباط با سرور.دقایقی دیگر تلاش کنید',
                        color: 'red',
                        zindex: 9060,
                        position: 'topLeft'
                    });
                    toggleLoader();
                }
            });
        });

    });
</script>