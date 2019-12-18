<script type="text/javascript">
    $(document).ready(function () {

        $("#submitContactForm").click(function () {
            toggleLoader();
            $inputFullName = $.trim($("#inputFullName").val());
            $inputTitle = $.trim($("#inputTitle").val());
            $inputSubject = $.trim($("#inputSubject").val());
            $inputContent = $.trim($("#inputContent").val());
            $inputPhone = $.trim($("#inputPhone").val());
            $inputCaptcha = $.trim($("#inputCaptcha").val());
            $inputCSRF = $.trim($("#inputCSRF").val());

            if(!isCaptcha($inputCaptcha)) {
                notify("کد امنیتی نامعتبر است", "red");
                toggleLoader();
                return;
            }
            if(!isContactContent($inputContent)) {
                notify("تعداد کارکتر های پیام نا معتبر است", "red");
                toggleLoader();
                return;
            }

            if ($inputContent == "" || $inputCaptcha == "") {
                notify("لطفا قسمت پیام را پر کنید", "red");
                toggleLoader();
            }
            else {
                $sendData = {
                    'inputFullName': $inputFullName,
                    'inputTitle': $inputTitle,
                    'inputSubject': $inputSubject,
                    'inputContent': $inputContent,
                    'inputPhone': $inputPhone,
                    'inputCaptcha': $inputCaptcha,
                    'inputCSRF': $inputCSRF
                }
                $.ajax({
                    type: 'post',
                    url: base_url + 'ContactUs/submitContactForm',
                    data: $sendData,
                    success: function (data) {
                        toggleLoader();
                        $result = JSON.parse(data);
                        notify($result['content'] , $result['type']);
                        if($result['success']){
                            setTimeout(function(){
                                location.reload();
                            } , 2000);
                        }
                    },
                    error: function(){
                        notify('درخواست با خطا مواجه گردید' ,'red');
                        toggleLoader();
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