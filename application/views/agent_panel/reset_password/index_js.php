<script type="text/javascript">
    $(document).ready(function () {
        function isLoading() {
            $(".fa-li").show();
            $("#log").hide();
        }
        function endLoading() {
            $(".fa-li").hide();
            $("#log").show();
        }
        function reCaptcha() {
            $(".recaptcha").addClass('fa-spin');
            $src = $(".captcha").attr('src');
            $(".captcha").attr('src', $src + '?' + Date.now());
            setTimeout(function(){
                $(".refresh").removeClass('fa fa-spin');
            } , 1500);
        }
        $(".refresh").click(function () {
            $(this).addClass('fa fa-spin');
            reCaptcha();
        });
        $(".login100-form-btn").click(function (e) {
            e.preventDefault();
            isLoading();
            /* Validation */
            $inputPhoneVal = $.trim($("#inputPhone").val());
            $inputCaptchaVal = $.trim($("#inputCaptcha").val());
            $lencaptcha = $inputCaptchaVal.length;
            if ($lencaptcha != 5) {
                iziToast.info({
                    position: "topCenter",
                    title: 'کد امنیتی نامعتبر است',
                    // message: 'iziToast.info()'
                });
                endLoading();
                return;
            }
            /* Send Request */
            $sendData = {
                'inputPhone': $inputPhoneVal,
                'inputCaptcha': $inputCaptchaVal
            }
            $.ajax({
                type: 'post',
                url: base_url + 'Account/doResetPassword',
                data: $sendData,
                success: function (data){
                    $result = jQuery.parseJSON(data);
                    iziToast.show({
                        title: $result['content'],
                        color: $result['type'],
                        zindex: 2030,
                        position: 'topCenter'
                    });
                    if ($result['success']) {
                        setTimeout(function () {
                            window.location.href = "<?php echo base_url('Agent/Home/');  ?>";
                        }, 2000);
                    }
                    endLoading();
                    return;
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    iziToast.error({
                        position: "topCenter",
                        title: 'خطای ارتباط با سرور',
                    });
                    endLoading();
                    return;
                }
            });


        });
    });
</script>