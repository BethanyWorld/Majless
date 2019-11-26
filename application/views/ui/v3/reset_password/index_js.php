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

            if(!isPhone($inputPhone)){
                notify("تلفن نامعتبر است", "red");
                toggleLoader();
                return;
            }
            if ($inputPhone == "" || $inputCaptcha == "" || $inputCSRF == "") {
                notify("لطفا تمامی موارد را کامل کنید", "red");
                toggleLoader();
            }
            else {
                $sendData = {'inputCaptcha': $inputCaptcha}
                $.ajax({
                    type: 'post',
                    url: base_url + 'SignUp/checkCaptcha',
                    data: $sendData,
                    success: function (data) {
                        $result = JSON.parse(data);
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
                                        $.ajax({
                                            type: 'POST',
                                            url: '<?php echo $api['SMS']; ?>',
                                            data: {
                                                'senderNumber': $result['senderNumber'],
                                                'messageBody': $result['messageBody']
                                            },
                                            success: function (data) {
                                                setTimeout(function(){
                                                    window.location.href = base_url + 'Login';
                                                } , 1500);
                                            },
                                            error: function (jqXHR, textStatus, errorThrown) {
                                                setTimeout(function(){
                                                    window.location.href = base_url + 'Login';
                                                } , 100);
                                            }
                                        });
                                    }
                                    else{
                                        notify($result['content'], $result['type']);
                                        toggleLoader();
                                    }
                                }
                            });
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