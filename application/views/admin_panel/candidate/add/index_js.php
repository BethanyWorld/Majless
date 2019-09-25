<script type="text/javascript">
    $(document).ready(function () {

        /* Update User Info */
        $("#addCandidate").click(function () {
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
                'inputCandidateNationalCode': $inputCandidateNationalCode,
                'inputCandidateScore': $inputCandidateScore,
                'inputCandidateStateId': $inputCandidateStateId,
                'inputCandidateCityId': $inputCandidateCityId
            }
            $.ajax({
                type: 'post',
                url: base_url + 'Candidate/doAdd',
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