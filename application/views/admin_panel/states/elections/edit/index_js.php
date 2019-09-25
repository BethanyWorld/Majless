<script type="text/javascript">
    $(document).ready(function () {
        /* Update User Info */
        $("#editElection").click(function () {
            $inputElectionId = $.trim($("#inputElectionId").val());
            $inputElectionName = $.trim($("#inputElectionName").val());
            $inputElectionStateId = $.trim($("#inputElectionStateId").val());
            $inputElectionCityId = [];
            $(".election-city").each(function () {
                if ($(this).is(":checked")) {
                    $inputElectionCityId.push($(this).val());
                }
            });
            /* Validation */
            if (hasNumber($inputElectionName)) {
                notify('عنوان حوزه انتخابی نامعتبر است', 'red');
                return false;
            }
            /* End Validation */
            toggleLoader();
            $sendData = {
                'inputElectionId': $inputElectionId,
                'inputElectionName': $inputElectionName,
                'inputElectionStateId': $inputElectionStateId,
                'inputElectionCityId': $inputElectionCityId
            }
            $.ajax({
                type: 'post',
                url: base_url + 'States/doEditElection',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify('اطلاعات حوزه انتخاباتی تکراری ست', 'red');
                    toggleLoader();
                }
            });
        });
        /* End Update User Info */


        $('#inputElectionStateId').change(function () {
            $("#electionCities").html('');
            toggleLoader();
            $stateId = $(this).val();
            $.ajax({
                type: 'post',
                url: "<?php echo base_url(); ?>" + 'State/getCityByStateId/' + $stateId,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    for (let i = 0; i < $result.length; i++) {
                        $temp = "";
                        $temp = '<input class="election-city" id="i-' + $result[i].CityId + '" type="checkbox"  value="' + $result[i].CityId + '" />';
                        $temp += '<label for="i-' + $result[i].CityId + '">' + $result[i].CityName + '</label>';
                        $temp += '&nbsp;&nbsp;&nbsp;';
                        $("#electionCities").append($temp);
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