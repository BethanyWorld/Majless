<script type="text/javascript">
    $(document).ready(function () {

        $("#submitContactForm").click(function () {
            toggleLoader();
            $inputFullName = $.trim($("#inputFullName").val());
            $inputTitle = $.trim($("#inputTitle").val());
            $inputSubject = $.trim($("#inputSubject").val());
            $inputContent = $.trim($("#inputContent").val());
            $inputCaptcha = $.trim($("#inputCaptcha").val());
            $inputCSRF = $.trim($("#inputCSRF").val());

            if(!isText($inputFullName)){
                notify("نام و نام خانوادگی نامعتبر است", "red");
                toggleLoader();
                return;
            }

            if(!isContactTitle($inputTitle)){
                notify("تعداد کاراکتر های عنوان نامعتبر است", "red");
                toggleLoader();
                return;
            }
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

            if ($inputFullName == "" || $inputTitle == "" || $inputSubject == "" || $inputContent == "" || $inputCaptcha == "") {
                notify("لطفا تمامی موارد را کامل کنید", "red");
                toggleLoader();
            }
            else {
                $sendData = {
                    'inputFullName': $inputFullName,
                    'inputTitle': $inputTitle,
                    'inputSubject': $inputSubject,
                    'inputContent': $inputContent,
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

    });
</script>