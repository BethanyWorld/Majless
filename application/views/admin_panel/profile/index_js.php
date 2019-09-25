<script type="text/javascript">
    $(document).ready(function () {

        /* Update User Info */
        $("#updateAdminProfile").click(function () {
            $inputAdminId = $.trim($("#inputAdminId").val());
            $inputAdminFullName = $.trim($("#inputAdminFullName").val());
            $inputAdminPhone = $.trim($("#inputAdminPhone").val());
            $inputAdminOldPassword = $.trim($("#inputAdminOldPassword").val());
            $inputAdminNewPassword = $.trim($("#inputAdminNewPassword").val());
            $inputAdminConfirmPassword = $.trim($("#inputAdminConfirmPassword").val());
            /* Validation */
            if (hasNumber($inputAdminFullName)) {
                notify('نام و نام خانوادگی نامعتبر است', 'red');
                return false;
            }
            if (!$.isNumeric($inputAdminPhone)) {
                notify('شماره همراه نامعتبر است', 'red');
                return false;
            }
            if (!isEmpty($inputAdminOldPassword) && !isEmpty($inputAdminNewPassword) && !isEmpty($inputAdminConfirmPassword)) {
                if ($inputAdminNewPassword !== $inputAdminConfirmPassword) {
                    notify('رمز عبور با تکرا آن یکی نیست', 'red');
                    return false;
                }
            }
            /* End Validation */
            toggleLoader();
            $sendData = {
                'inputAdminId': $inputAdminId,
                'inputAdminFullName': $inputAdminFullName,
                'inputAdminPhone': $inputAdminPhone,
                'inputAdminOldPassword': $inputAdminOldPassword,
                'inputAdminNewPassword': $inputAdminNewPassword
            }
            $.ajax({
                type: 'post',
                url: base_url + 'Profile/doUpdateProfile',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify('خطای ارتباط با سرور.دقایقی دیگر تلاش کنید', 'red');
                    toggleLoader();
                }
            });
        });
        /* End Update User Info */

    });
</script>