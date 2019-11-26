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
        $("#submitLoginForm").click(function () {
            toggleLoader();
            $inputPhone = $.trim($("#inputPhone").val());
            $inputPassword = $.trim($("#inputPassword").val());
            $inputCaptcha = $.trim($("#inputCaptcha").val());
            $inputCSRF = $.trim($("#inputCSRF").val());
            $inputPhone = toEnglishDigits($inputPhone);
            $inputPassword = toEnglishDigits($inputPassword);
            $inputCaptcha = toEnglishDigits($inputCaptcha);


            if(!is_valid_length_phone($inputPhone , 11)){
                notify("تعداد کاراکتر تلفن همراه نامعتبر است", "red");
                toggleLoader();
                return;
            }
            if(!isCaptcha($inputCaptcha)) {
                notify("کد امنیتی نامعتبر است", "red");
                toggleLoader();
                return;
            }

            if(!isPassword($inputPassword)) {
                notify("تعداد اعداد رمز عبور نامعتبر است", "red");
                toggleLoader();
                return;
            }

            if ($inputPhone == "" || $inputCaptcha == "" || $inputPassword == "") {
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
                            $sendData = {
                                'inputPhone': $inputPhone,
                                'inputPassword': $inputPassword,
                                'inputCSRF': $inputCSRF
                            }
                            $.ajax({
                                type: 'post',
                                url: base_url + 'Login/doLogin',
                                data: $sendData,
                                success: function (data) {
                                    $result = JSON.parse(data);
                                    if ($result['success']) {
                                        notify($result['content'], 'green');
                                        location.href = base_url + 'Profile';
                                    }
                                    else {
                                        notify($result['content'], 'red');
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
        $(".recaptcha").click(function () {
            $(".recaptcha").addClass('fa-spin');
            $src = $(".captcha_img").attr('src');
            $(".captcha_img").attr('src', $src + '?' + Date.now());
            setTimeout(function () {
                $(".recaptcha").removeClass('fa-spin');
            }, 2000);
        });
    });
</script>