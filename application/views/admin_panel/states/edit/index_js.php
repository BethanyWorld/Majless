<script type="text/javascript">
    $(document).ready(function () {
        /* Update User Info */
        $("#editState").click(function () {
            $inputStateId = $.trim($("#inputStateId").val());
            $inputStateName = $.trim($("#inputStateName").val());
            /* Validation */
            if (hasNumber($inputStateName)) {
                notify('عنوان استان نامعتبر است', 'red');
                return false;
            }
            /* End Validation */
            toggleLoader();
            $sendData = {
                'inputStateId': $inputStateId,
                'inputStateName': $inputStateName
            };
            $.ajax({
                type: 'post',
                url: base_url + 'States/doEdit',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify('اطلاعات استان تکراری ست', 'red');
                    toggleLoader();
                }
            });

            $sendData = [];
            $sendData.push({
                'inputStatisticsSlug': 'PercentageOfParticipation',
                'inputStatisticsType': 'State',
                'inputStatisticsTypeId': $inputStateId,
                'inputStatisticsValue': $("#inputPercentageOfParticipation").val()
            });
            $sendData.push({
                'inputStatisticsSlug': 'PercentageOfParticipationColor',
                'inputStatisticsType': 'State',
                'inputStatisticsTypeId': $inputStateId,
                'inputStatisticsValue': $("#inputPercentageOfParticipationColor").val()
            });
            $.ajax({
                type: 'post',
                url: base_url + 'Statistics/doAddItem',
                data: { 'inputData': JSON.stringify($sendData) },
                success: function (data) {  }
            });

        });
        /* End Update User Info */
    });
</script>