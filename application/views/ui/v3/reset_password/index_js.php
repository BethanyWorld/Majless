<script type="text/javascript">
    $(document).ready(function () {

        function toEnglishDigits(str) {
            var e = '۰'.charCodeAt(0);
            str = str.replace(/[۰-۹]/g, function (t) {
                return t.charCodeAt(0) - e;
            });
            e = '٠'.charCodeAt(0);
            str = str.replace(/[٠-٩]/g, function (t) {
                return t.charCodeAt(0) - e;
            });
            return str;
        }
        $("#submitResetPassword").click(function () {
            toggleLoader();
            $inputPhone = $.trim($("#inputPhone").val());
            $inputCaptcha = $.trim($("#inputCaptcha").val());
            $inputCSRF = $.trim($("#inputCSRF").val());
            $inputPhone = toEnglishDigits($inputPhone);
            $inputCaptcha = toEnglishDigits($inputCaptcha);

            if ($inputPhone == "" || $inputCaptcha == "" || $inputCSRF == "") {
                notify("لطفا تمامی موارد را کامل کنید", "red");
                toggleLoader();
            }
            else {
                $sendData = {
                    'inputCaptcha': $inputCaptcha
                }
                $.ajax({
                    type: 'post',
                    url: base_url + 'SignUp/checkCaptcha',
                    data: $sendData,
                    success: function (data) {
                        $result = JSON.parse(data);
                        if ($result['success']) {
                            /*----------------------------*/
                            $sendData = { 'mobile': $inputPhone }
                            $.ajax({
                                type: 'post',
                                url: 'http://new.moarefin.ir:8080/api/securityWeb',
                                data: $sendData,
                                success: function (data) {
                                    $result = data;
                                    if ($result['success']) {
                                        $sendData = {
                                            'inputPhone': $inputPhone,
                                            'inputCaptcha': $inputCaptcha,
                                            'inputCSRF': $inputCSRF
                                        }
                                        $.ajax({
                                            type: 'post',
                                            url: base_url + 'ResetPassword/submitResetPassword',
                                            data: $sendData,
                                            success: function (data) {
                                                $result = JSON.parse(data);
                                                notify($result['content'], $result['type']);
                                                if ($result['success']) {
                                                    setTimeout(function () {
                                                        location.reload();
                                                    }, 1000);
                                                }
                                                else{
                                                    notify($result['message'], 'red');
                                                    toggleLoader();
                                                }
                                            }
                                        });
                                    }
                                    else {
                                        notify($result['message'], 'red');
                                        toggleLoader();
                                    }
                                }
                            });
                            /*----------------------------*/
                        }
                        else {
                            notify($result['content'], $result['type']);
                            toggleLoader();
                        }
                    }
                });
            }
        });

    });
</script>