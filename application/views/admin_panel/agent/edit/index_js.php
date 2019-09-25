<script type="text/javascript">
    $(document).ready(function () {

        /* Update User Info */
        $("#editAgent").click(function () {
            $inputAgentId = $.trim($("#inputAgentId").val());
            $inputAgentFullName = $.trim($("#inputAgentFullName").val());
            $inputAgentPhone = $.trim($("#inputAgentPhone").val());
            $inputAgentStateId = $.trim($("#inputAgentStateId").val());
            /* Validation */
            if (hasNumber($inputAgentFullName)) {
                notify('نام و نام خانوداگی نماینده نامعتبر است', 'red');
                return false;
            }
            if (!$.isNumeric($inputAgentPhone)) {
                notify('تلفن نماینده نامعتبر است', 'red');
                return false;
            }
            /* End Validation */
            toggleLoader();
            $sendData = {
                'inputAgentId': $inputAgentId,
                'inputAgentFullName': $inputAgentFullName,
                'inputAgentPhone': $inputAgentPhone,
                'inputAgentStateId': $inputAgentStateId,
            }
            $.ajax({
                type: 'post',
                url: base_url + 'Agent/doEdit',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify('اطلاعات نمایندگی تکراری ست', 'red');
                    toggleLoader();
                }
            });
        });
        /* End Update User Info */

    });
</script>