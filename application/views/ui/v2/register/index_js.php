<script type="text/javascript">
    $(document).ready(function () {

        $("#buttonRegister").click(function () {
            toggleLoader();
            $inputRegisterType = $("input[name='registerType']:checked").val() || "";
            $inputFullName = $("#inputFullName").val();
            $inputPhone = $("#inputPhone").val();
            $inputPassword = $("#inputPassword").val();
            $inputCaptcha = $("#inputCaptcha").val();
            if ($inputRegisterType != "" && $inputFullName != "" && $inputPassword != "" && $inputPhone != "" && $inputCaptcha != "") {
                $sendData = {
                    'inputRegisterUserType': $inputRegisterType,
                    'inputFullName': $inputFullName,
                    'inputPhone': $inputPhone,
                    'inputPassword': $inputPassword,
                    'inputCaptcha': $inputCaptcha
                }
                $.ajax({
                    type: 'post',
                    url: base_url + 'Account/doRegister',
                    data: $sendData,
                    success: function (data) {
                        toggleLoader();
                        $result = jQuery.parseJSON(data);
                        iziToast.show({
                            title: $result['content'],
                            color: $result['type'],
                            zindex: 9060,
                            position: 'topLeft'
                        });
                        if($result['success']){
                            $(".register-page-form").hide();
                            $(".register-page-active-form").fadeIn();
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {}
                });
            }
            else {
                toggleLoader();
                iziToast.show({
                    title: 'لطفا تمامی مقادیر را کامل کنید',
                    color: 'yellow', // blue, red, green, yellow
                    zindex: 9060,
                    position: 'topLeft'
                });
            }
        });
        $("#buttonActiveCode").click(function () {
            toggleLoader();
            $inputRegisterType = $("input[name='registerType']:checked").val() || "";
            $inputActivationCode = $("#inputActivationCode").val();
            if ($inputActivationCode) {
                $sendData = {
                    'inputRegisterUserType': $inputRegisterType,
                    'inputActivationCode': $inputActivationCode,
                }
                $.ajax({
                    type: 'post',
                    url: base_url + 'Account/doVerify',
                    data: $sendData,
                    success: function (data) {
                        toggleLoader();
                        $result = jQuery.parseJSON(data);
                        iziToast.show({
                            title: $result['content'],
                            color: $result['type'],
                            zindex: 2030,
                            position: 'topLeft'
                        });
                        if($result['success']){
                            if($inputRegisterType == 'Employer'){
                                setTimeout(function(){
                                    window.location.href = base_url+'Employer/Dashboard/Home';
                                } , 2000);
                            }
                            if($inputRegisterType == 'User'){
                                setTimeout(function(){
                                    window.location.href = base_url+'User/Home';
                                } , 2000);
                            }
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {}
                });
            }
            else {
                toggleLoader();
                iziToast.show({
                    title: 'لطفا تمامی مقادیر را کامل کنید',
                    color: 'yellow', // blue, red, green, yellow
                    zindex: 2030000,
                    position: 'topLeft'
                });
            }
        });

    });
</script>