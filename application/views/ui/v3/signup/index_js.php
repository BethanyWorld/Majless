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
        function isValidNationalCode(input) {
            input = toEnglishDigits(input);
            if (!/^\d{10}$/.test(input)
                || input == '0000000000'
                || input == '1111111111'
                || input == '2222222222'
                || input == '3333333333'
                || input == '4444444444'
                || input == '5555555555'
                || input == '6666666666'
                || input == '7777777777'
                || input == '8888888888'
                || input == '9999999999')
                return false;
            var check = parseInt(input[9]);
            var sum = 0;
            var i;
            for (i = 0; i < 9; ++i) {
                sum += parseInt(input[i]) * (10 - i);
            }
            sum %= 11;
            return (sum < 2 && check == sum) || (sum >= 2 && check + sum == 11);
        }
        $("#submitSignUpForm").click(function () {
            toggleLoader();
            $inputSignUpFirstName = $.trim($("#inputSignUpFirstName").val());
            $inputSignUpLastName = $.trim($("#inputSignUpLastName").val());
            $inputSignUpPhone = $.trim($("#inputSignUpPhone").val());
            $inputSignUpNationalCode = $.trim($("#inputSignUpNationalCode").val());
            $inputConstituencyProvinceName = $.trim($("#inputConstituencyProvince option:selected").text());
            $inputConstituencyProvincePartName = $.trim($("#inputConstituencyProvincePart option:selected").text());
            $inputConstituencyProvince = $.trim($("#inputConstituencyProvince").val());
            $inputConstituencyProvincePart = $.trim($("#inputConstituencyProvincePart").val());


            $inputSignUpType = [];
            $(".sign-up-type:checked").each(function () {
                $inputSignUpType.push($(this).val());
            });
            $inputCaptcha = $.trim($("#inputCaptcha").val());
            $inputCSRF = $.trim($("#inputCSRF").val());
            $inputSignUpPhone = toEnglishDigits($inputSignUpPhone);
            $inputSignUpNationalCode = toEnglishDigits($inputSignUpNationalCode);
            $inputCaptcha = toEnglishDigits($inputCaptcha);



            if (!is_valid_length_phone($inputSignUpPhone, 11)) {
                notify("تعداد کاراکتر تلفن همراه نامعتبر است", "red");
                toggleLoader();
                return;
            }

            if (!isValidNationalCode($inputSignUpNationalCode)) {
                notify("کد ملی نامعتبر است", "red");
                toggleLoader();
                return;
            }


            /*Start Validation ------------------------------*/
            if (!is_valid_length($inputSignUpFirstName, 80)) {
                notify("تعداد کاراکتر نام نامعتبر است", "red");
                toggleLoader();
                return;
            }

            if (!isText($inputSignUpFirstName)) {
                notify("نام نامعتبر است", "red");
                toggleLoader();
                return;
            }
            if (!isText($inputSignUpLastName)) {
                notify("نام خانوادگی نامعتبر است", "red");
                toggleLoader();
                return;
            }
            if (!isValueInteger($inputConstituencyProvince)) {
                notify("استان نامعتبر است", "red");
                toggleLoader();
                return;
            }
            if (!isCaptcha($inputCaptcha)) {
                notify("کد امنیتی نامعتبر است", "red");
                toggleLoader();
                return;
            }

            /* End Validation --------------------------------*/


            if ($inputSignUpType.length == 0 ||
                $inputSignUpFirstName == "" ||
                $inputSignUpLastName == "" ||
                $inputSignUpPhone == "" ||
                $inputConstituencyProvince == "" ||
                $inputConstituencyProvincePart == "" ||
                $inputCaptcha == "" ||
                $inputSignUpNationalCode == "") {
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
                            $sendData = {
                                'inputSignUpType': $inputSignUpType,
                                'inputSignUpFirstName': $inputSignUpFirstName,
                                'inputSignUpLastName': $inputSignUpLastName,
                                'inputSignUpPhone': $inputSignUpPhone,
                                'inputSignUpStateId': $inputConstituencyProvince,
                                'inputSignUpCityId': $inputConstituencyProvincePart,
                                'inputSignUpNationalCode': $inputSignUpNationalCode,
                                'inputCaptcha': $inputCaptcha,
                                'inputCSRF': $inputCSRF
                            }
                            $.ajax({
                                type: 'post',
                                url: base_url + 'SignUp/submitSignUpForm',
                                data: $sendData,
                                success: function (data) {
                                    $result = JSON.parse(data);
                                    notify($result['content'], $result['type']);
                                    if ($result['success'] && $result['type'] == 'green') {
                                        $.ajax({
                                            type: 'POST',
                                            url: '<?php echo $api['SMS']; ?>',
                                            data: {
                                                'senderNumber': $result['senderNumber'],
                                                'messageBody': $result['messageBody']
                                            },
                                            success: function (data) {
                                                setTimeout(function () {
                                                    location.href = base_url + 'Login';
                                                }, 500);
                                                toggleLoader();
                                            },
                                            error: function (jqXHR, textStatus, errorThrown) {
                                                toggleLoader();
                                                notify('مشکلی درخ داده است', 'red');
                                            }
                                        });
                                    }
                                    else {
                                        /*notify($result['message'], 'red');*/
                                        if ($result['type'] == 'red') {
                                            $('#signUpModal').modal('show');
                                        }
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

        cutSelectOptionLongText();
        $('#inputConstituencyProvince').change(function () {
            toggleLoader();
            $("#inputConstituencyProvincePart").html('');
            $stateId = $(this).val();
            $.ajax({
                type: 'post',
                url: "<?php echo base_url(); ?>" + 'State/getCityByStateId/' + $stateId,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    for (let i = 0; i < $result.length; i++) {
                        $("#inputConstituencyProvincePart").append('<option value="' + $result[i].CityId + '">' + $result[i].CityName + '</option>');
                    }
                    cutSelectOptionLongText();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    iziToast.show({
                        title: 'خطای ارتباط با سرور.دقایقی دیگر تلاش کنید',
                        color: 'red',
                        zindex: 9060,
                        position: 'topLeft'
                    });
                    toggleLoader();
                }
            });
        });
    });
</script>