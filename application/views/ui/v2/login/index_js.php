<script type="text/javascript">
    $(document).ready(function () {

        $("#buttonLogin").click(function () {
            toggleLoader();
            $inputRegisterType = $("input[name='registerType']:checked").val() || "";
            $inputPhone = $("#inputPhone").val();
            $inputPassword = $("#inputPassword").val();
            $inputCaptcha = $("#inputCaptcha").val();
            if ($inputPassword != "" && $inputPhone != "" && $inputCaptcha != "") {
                $sendData = {
                    'inputRegisterUserType': $inputRegisterType,
                    'inputPhone': $inputPhone,
                    'inputPassword': $inputPassword,
                    'inputCaptcha': $inputCaptcha
                }
                $.ajax({
                    type: 'post',
                    url: base_url + 'Account/doLogin',
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
                        if ($result['success']) {
                            window.location = $result['redirect'];
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