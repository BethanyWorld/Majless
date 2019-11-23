<script type="text/javascript">
    $(document).ready(function () {

        /* Update User Info */
        $("#addVeteran").click(function () {
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
                'inputVeteranFullName': $inputVeteranFullName,
                'inputVeteranPhone': $inputVeteranPhone
            }
            $.ajax({
                type: 'post',
                url: base_url + 'Veteran/doAdd',
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