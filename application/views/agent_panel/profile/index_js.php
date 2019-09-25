<script type="text/javascript">
    $(document).ready(function () {

        /* Update User Info */
        $("#updateAgentProfile").click(function () {
            $inputAgentId = $.trim($("#inputAgentId").val());
            $inputAgentFullName = $.trim($("#inputAgentFullName").val());
            $inputAgentPhone = $.trim($("#inputAgentPhone").val());
            $inputAgentOldPassword = $.trim($("#inputAgentOldPassword").val());
            $inputAgentNewPassword = $.trim($("#inputAgentNewPassword").val());
            $inputAgentConfirmPassword = $.trim($("#inputAgentConfirmPassword").val());
            /* Validation */
            if (hasNumber($inputAgentFullName)) {
                notify('نام و نام خانوادگی نامعتبر است', 'red');
                return false;
            }
            if (!$.isNumeric($inputAgentPhone)) {
                notify('شماره همراه نامعتبر است', 'red');
                return false;
            }
            if (!isEmpty($inputAgentOldPassword) && !isEmpty($inputAgentNewPassword) && !isEmpty($inputAgentConfirmPassword)) {
                if ($inputAgentNewPassword !== $inputAgentConfirmPassword) {
                    notify('رمز عبور با تکرا آن یکی نیست', 'red');
                    return false;
                }
            }
            /* End Validation */
            toggleLoader();
            $sendData = {
                'inputAgentId': $inputAgentId,
                'inputAgentFullName': $inputAgentFullName,
                'inputAgentPhone': $inputAgentPhone,
                'inputAgentOldPassword': $inputAgentOldPassword,
                'inputAgentNewPassword': $inputAgentNewPassword
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