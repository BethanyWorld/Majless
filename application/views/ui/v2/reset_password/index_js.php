<script type="text/javascript">
    $(document).ready(function () {

        $("#buttonResetPassword").click(function () {
            toggleLoader();
            $inputRegisterType = $("input[name='registerType']:checked").val() || "";
            $inputPhone = $("#inputPhone").val();
            $inputCaptcha = $("#inputCaptcha").val();
            if ($inputPhone != "" && $inputCaptcha != "") {
                $sendData = {
                    'inputRegisterUserType': $inputRegisterType,
                    'inputPhone': $inputPhone,
                    'inputCaptcha': $inputCaptcha
                }
                $.ajax({
                    type: 'post',
                    url: base_url + 'Account/doResetPassword',
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
                            setTimeout(function(){
                                window.location.href = "<?php echo base_url('Account/login');  ?>";
                            } , 1000);
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {}
                });
            }
            else {
                toggleLoader();
                iziToast.show({
                    title: 'لطفا تمامی مقادیر را کامل کنید',
                    color: 'yellow',
                    zindex: 2030000,
                    position: 'topLeft',
                    timeout: 500000
                });
            }
        });

    });
</script>