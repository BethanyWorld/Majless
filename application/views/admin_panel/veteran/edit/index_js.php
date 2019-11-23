<script type="text/javascript">
    $(document).ready(function () {

        /* Update User Info */
        $("#editVeteran").click(function () {
            $inputVeteranId = $.trim($("#inputVeteranId").val());
            $inputVeteranFullName = $.trim($("#inputVeteranFullName").val());
            $inputVeteranPhone = $.trim($("#inputVeteranPhone").val());
            /* Validation */
            if (hasNumber($inputVeteranFullName)) {
                notify('نام و نام خانوداگی نماینده نامعتبر است', 'red');
                return false;
            }
            if (!$.isNumeric($inputVeteranPhone)) {
                notify('تلفن نماینده نامعتبر است', 'red');
                return false;
            }
            /* End Validation */
            toggleLoader();
            $sendData = {
                'inputVeteranId': $inputVeteranId,
                'inputVeteranFullName': $inputVeteranFullName,
                'inputVeteranPhone': $inputVeteranPhone
            }
            $.ajax({
                type: 'post',
                url: base_url + 'Veteran/doEdit',
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