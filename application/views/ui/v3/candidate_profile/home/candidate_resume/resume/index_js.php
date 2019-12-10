<script type="text/javascript">

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
    $(document).ready(function () {
        $inputCandidateAddressCityPart = $('#inputCandidateAddressCityPart').val();
        if ($inputCandidateAddressCityPart !== null && $inputCandidateAddressCityPart !== "") {
            $('#inputCandidateAddressVillage').attr("disabled", "disabled");
            $('#inputCandidateAddressVillage').removeAttr('placeholder');
            $('#inputCandidateAddressVillage').addClass('InputNotAllow');

            $('#inputCandidateAddressVillagePart').attr("disabled", "disabled");
            $('#inputCandidateAddressVillagePart').removeAttr('placeholder');
            $('#inputCandidateAddressVillagePart').addClass('InputNotAllow');
        }

        //$('#inputCandidateBirthDate').mask("0000/00/00");
        $('#inputCandidateBirthDate').keyup(function(e) {
            if(e.keyCode != 8){
                var v = toEnglishDigits($(this).val());
                if (v.match(/^\d{4}$/) !== null) {
                    $(this).val(v + '/');
                }
                else if (v.match(/^\d{4}\/\d{2}$/) !== null) {
                    $(this).val(v + '/');
                }
                $val = toEnglishDigits($(this).val());
                $val = $val.substring(0, 10);
                $(this).val($val);

            }
        });
        $("#inputCandidateBirthDate").bind("paste", function(e){
            var v = toEnglishDigits($(this).val());
            if (v.match(/^\d{4}$/) !== null) {
                $(this).val(v + '/');
            } else if (v.match(/^\d{4}\/\d{2}$/) !== null) {
                $(this).val(v + '/');
            }
            $val = toEnglishDigits($(this).val());
            $val = $val.substring(0, 10);
            $(this).val($val);
        } );

        cutSelectOptionLongText();
        $(document).on('change', '.state-select', function () {
            toggleLoader();
            $inputCandidateStateId = $(this).val();
            $this = $(this);
            $.ajax({
                type: 'post',
                url: base_url + 'State/getCityByStateId/' + $inputCandidateStateId,
                success: function (data) {
                    toggleLoader();
                    $result = JSON.parse(data);
                    $citySelect = $this.parent().next('div').find('.city-select').eq(0);
                    $citySelect.html('');
                    $.each($result, function (index, item) {
                        var selectInnerHtml = $('<option />',
                            {
                                "class": "",
                                "value": item['CityId'],
                                "text": item['CityName']
                            });
                        $citySelect.append(selectInnerHtml);
                    });
                    $citySelect.find('option').eq(0).attr('selected', 'selected');
                    checkCandidateStateAndCity();
                    cutSelectOptionLongText();
                },
                error: function (data) {
                    toggleLoader();
                    notify('درخواست با خطا مواجه شد', 'red');
                }
            });
        });
        defaultImage = '<?php echo $noImg ?>';
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    var file = e.target.result;
                    $('#personInfoImageButtons').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imgInp").change(function () {
            readURL(this);
        });
        $(".RemoveImage").click(function () {
            $("#imgInp").val('');
            $("#personInfoImageButtons").attr('src', defaultImage);
        });

        $isFirstTimeReligionChange = false;
        $("#inputCandidateReligion").change();
        $(document).on('change', '#inputCandidateReligion', function () {
            $inputParliamentaryCandidate = $('#inputParliamentaryCandidate').is(":checked");
            if ($inputParliamentaryCandidate) {
                $inputCandidateReligion = $(this).val();
                if ("IslamShia" != $inputCandidateReligion && "IslamSoni" != $inputCandidateReligion) {
                    $('#ReligionNotify').css('visibility', 'visible');
                } else {
                    $('#ReligionNotify').css('visibility', 'hidden');
                }
                /* For Religious minority check*/
                if ($inputCandidateReligion === "Cristian" || $inputCandidateReligion === "Jush" || $inputCandidateReligion === "Zartosht") {
                    $('#inputCandidateConstituencyStateId option').filter(function () {
                        return $(this).val() > 31;
                    }).prop('selected', true);
                    $('#inputCandidateConstituencyStateId option').filter(function () {
                        return $(this).val() <= 31;
                    }).prop('disabled', true).css('color', '#ccc');
                    $('#inputCandidateConstituencyStateId').change();
                }
                else {
                    $('#inputCandidateConstituencyStateId option').filter(function () {
                        return $(this).val() <= 31;
                    }).prop('disabled', false).css('color', '#555');
                }
                /* End Religious minority check*/
            }
        });
        $(document).on('keyup', '#inputCandidateAddressCityPart', function () {
            $inputCandidateAddressCityPart = $(this).val();
            if ($inputCandidateAddressCityPart != null) {
                $('#inputCandidateAddressVillage').attr("disabled", "disabled");
                $('#inputCandidateAddressVillage').removeAttr('placeholder');
                $('#inputCandidateAddressVillage').addClass('InputNotAllow');

                $('#inputCandidateAddressVillagePart').attr("disabled", "disabled");
                $('#inputCandidateAddressVillagePart').removeAttr('placeholder');
                $('#inputCandidateAddressVillagePart').addClass('InputNotAllow');
            }
            if ($inputCandidateAddressCityPart == "") {
                $('#inputCandidateAddressVillage').removeAttr('disabled');
                $("#inputCandidateAddressVillage").attr("placeholder", "پرکردن این فیلد اجباری می باشد");
                $('#inputCandidateAddressVillage').removeClass('InputNotAllow');

                $('#inputCandidateAddressVillagePart').removeAttr('disabled');
                $("#inputCandidateAddressVillagePart").attr("placeholder", "پرکردن این فیلد اجباری می باشد");
                $('#inputCandidateAddressVillagePart').removeClass('InputNotAllow');

            }
        });
        $(document).on('keyup', '#inputCandidateAddressVillage', function () {
            $inputCandidateAddressCityPart = $(this).val();
            if ($inputCandidateAddressCityPart != null) {
                $('#inputCandidateAddressCityPart').attr("disabled", "disabled");
                $('#inputCandidateAddressCityPart').removeAttr('placeholder');
                $('#inputCandidateAddressCityPart').addClass('InputNotAllow');
            }
            if ($inputCandidateAddressCityPart == "") {
                $('#inputCandidateAddressCityPart').removeAttr('disabled');
                $("#inputCandidateAddressCityPart").attr("placeholder", "پرکردن این فیلد اجباری می باشد");
                $('#inputCandidateAddressCityPart').removeClass('InputNotAllow');
            }
        });

        function checkedCandidate() {
            $inputParliamentaryCandidate = $('#inputParliamentaryCandidate').is(":checked");
            if ($inputParliamentaryCandidate) {
                /*For relegion Check */
                $inputCandidateReligion = $('#inputCandidateReligion').val();
                if ($inputCandidateReligion === "Undefined" || $inputCandidateReligion === "Other") {
                    $("#ReligionNotify").removeClass('hidden');

                } else {
                    $("#ReligionNotify").addClass('hidden');
                }
                /*End relegion check*/

                /*checked date*/
                $inputCandidateBirthDate = $.trim($("#inputCandidateBirthDate").val());
                dob = new Date($inputCandidateBirthDate);
                var today = new Date();
                var age = Math.floor((today - dob) / (365.25 * 24 * 60 * 60 * 1000));
                $candidateage = (age - 620);
                if ($candidateage <= 29 || $candidateage >= 76) {
                    $('#DateChecked').show();

                } else {
                    $('#DateChecked').hide();
                }
                /*checked date*/

                /**/
                $cs = $("#cs");
                $inputCandidateConstituencyStateId = $("#inputCandidateConstituencyStateId").val();
                $inputCandidateConstituencyCityId = $("#inputCandidateConstituencyCityId").val();
                $inputCandidateBornStateId = $("#inputCandidateBornStateId").val();
                $inputCandidateBornCityId = $("#inputCandidateBornCityId").val();
                $inputCandidateFatherBornStateId = $("#inputCandidateFatherBornStateId").val();
                $inputCandidateFatherBornCityId = $("#inputCandidateFatherBornCityId").val();
                $inputCandidateMotherBornStateId = $("#inputCandidateMotherBornStateId").val();
                $inputCandidateMotherBornCityId = $("#inputCandidateMotherBornCityId").val();
                $inputCandidateAddressStateId = $("#inputCandidateAddressStateId").val();
                $inputCandidateAddressCityId = $("#inputCandidateAddressCityId").val();
                $inputCandidateReligion = $('#inputCandidateReligion').val();
                if (
                    /*$inputCandidateConstituencyStateId != $inputCandidateFatherBornStateId &&
                    $inputCandidateConstituencyStateId != $inputCandidateMotherBornStateId &&*/
                    $inputCandidateConstituencyStateId != $inputCandidateAddressStateId &&
                    $inputCandidateReligion != "Cristian" &&
                    $inputCandidateReligion != "Jush" &&
                    $inputCandidateReligion != "Zartosht") {
                    $cs.removeClass('hidden');
                    return;
                }
                if (
                    /*$inputCandidateConstituencyCityId != $inputCandidateFatherBornCityId &&
                    $inputCandidateConstituencyCityId != $inputCandidateMotherBornCityId &&*/
                    $inputCandidateConstituencyCityId != $inputCandidateAddressCityId &&
                    $inputCandidateReligion != "Cristian" &&
                    $inputCandidateReligion != "Jush" &&
                    $inputCandidateReligion != "Zartosht") {
                    $cs.removeClass('hidden');
                    return;
                }

                $cs.addClass('hidden');
                /**/
            }
            else {
                $(".invaliderror").addClass('hidden');
                $("#ReligionNotify").addClass('hidden');
                $('#DateChecked').hide();
                $("#cs").addClass('hidden');
                $('#inputCandidateConstituencyStateId option').filter(function () {return $(this).val() <= 31;}).prop('disabled', false).css('color', '#555');
            }
        }
        setInterval(checkedCandidate, 300);
        $("#updateProfileInfo").click({redirect: false}, updateProfile);
        $("#updateProfileInfoAndRedirect").click({redirect: true}, updateProfile);
        function updateProfile(param) {
            $inputCandidateProfileImage = $("#personInfoImageButtons").attr('src');
            $inputCandidateFirstName = $.trim($("#inputCandidateFirstName").val());
            $inputCandidateLastName = $.trim($("#inputCandidateLastName").val());
            $inputCandidateNationalCode = $.trim($("#inputCandidateNationalCode").val());
            $inputCandidateFatherName = $.trim($("#inputCandidateFatherName").val());
            $inputCandidateBirthDate = $.trim($("#inputCandidateBirthDate").val());
            $inputCandidateRoles = [];
            $(".roles").each(function () {
                if ($(this).is(':checked')) {
                    $inputCandidateRoles.push($(this).val());
                }
            });
            $inputCandidateGender = $.trim($("#inputCandidateGender").val());
            $inputCandidateMaritalStatus = $.trim($("#inputCandidateMaritalStatus").val());
            $inputCandidateReligion = $.trim($("#inputCandidateReligion").val());
            $inputCandidateBornStateId = $.trim($("#inputCandidateBornStateId").val());
            $inputCandidateBornCityId = $.trim($("#inputCandidateBornCityId").val());
            $inputCandidateFatherBornStateId = $.trim($("#inputCandidateFatherBornStateId").val());
            $inputCandidateFatherBornCityId = $.trim($("#inputCandidateFatherBornCityId").val());
            $inputCandidateMotherBornStateId = $.trim($("#inputCandidateMotherBornStateId").val());
            $inputCandidateMotherBornCityId = $.trim($("#inputCandidateMotherBornCityId").val());
            $inputCandidateAddressStateId = $.trim($("#inputCandidateAddressStateId").val());
            $inputCandidateAddressCityId = $.trim($("#inputCandidateAddressCityId").val());
            $inputCandidateAddressPart = $.trim($("#inputCandidateAddressPart").val());
            $inputCandidateAddressCityPart = $.trim($("#inputCandidateAddressCityPart").val());
            $inputCandidateAddressVillage = $.trim($("#inputCandidateAddressVillage").val());
            $inputCandidateAddressVillagePart = $.trim($("#inputCandidateAddressVillagePart").val());
            $inputCandidateAddress = $.trim($("#inputCandidateAddress").val());
            $inputCandidateLandLinePhone = $.trim($("#inputCandidateLandLinePhone").val());
            $inputCandidatePhone = $.trim($("#inputCandidatePhone").val());
            $inputCandidateConstituencyStateId = $.trim($("#inputCandidateConstituencyStateId").val());
            $inputCandidateConstituencyCityId = $.trim($("#inputCandidateConstituencyCityId").val());

            $inputParliamentaryCandidate = $('#inputParliamentaryCandidate').is(":checked");
            $inputParliamentaryElectionBank = $('#inputParliamentaryElectionBank').is(":checked");
            $inputSponsorColleague = $('#inputSponsorColleague').is(":checked");
            if ($inputCandidateFirstName == "" ||
                $inputCandidateLastName == "" ||
                $inputCandidateNationalCode == "" ||
                $inputCandidateFatherName == "" ||
                $inputCandidateBirthDate == "" ||
                $inputCandidateGender == "" ||
                $inputCandidateMaritalStatus == "" ||

                $inputParliamentaryCandidate == false &&
                $inputParliamentaryElectionBank == false &&
                $inputSponsorColleague == false ||

                $inputCandidateReligion == "" ||
                $inputCandidateBornStateId == "" ||
                $inputCandidateBornCityId == "" ||

                $inputCandidateFatherBornStateId == "" ||
                $inputCandidateFatherBornCityId == "" ||
                $inputCandidateMotherBornStateId == "" ||

                $inputCandidateMotherBornCityId == "" ||
                $inputCandidateAddressStateId == "" ||
                $inputCandidateAddressCityId == "" ||
                $inputCandidateAddressPart == "" ||
                $inputCandidateAddressCityPart == "" ||
                $inputCandidateAddress == "" ||
                $inputCandidateLandLinePhone == "" ||
                $inputCandidatePhone == "" ||
                $inputCandidateConstituencyStateId == "" ||
                $inputCandidateConstituencyCityId == "") {
                notify("لطفا تمامی موارد را کامل کنید", "red");
            } else {
                $sendData = {
                    inputCandidateProfileImage: $inputCandidateProfileImage,
                    inputCandidateFirstName: $inputCandidateFirstName,
                    inputCandidateLastName: $inputCandidateLastName,
                    inputCandidateNationalCode: $inputCandidateNationalCode,
                    inputCandidateFatherName: $inputCandidateFatherName,
                    inputCandidateBirthDate: $inputCandidateBirthDate,
                    inputCandidateGender: $inputCandidateGender,
                    inputCandidateMaritalStatus: $inputCandidateMaritalStatus,
                    inputCandidateReligion: $inputCandidateReligion,
                    inputCandidateBornStateId: $inputCandidateBornStateId,
                    inputCandidateBornCityId: $inputCandidateBornCityId,
                    inputCandidateFatherBornStateId: $inputCandidateFatherBornStateId,
                    inputCandidateFatherBornCityId: $inputCandidateFatherBornCityId,
                    inputCandidateMotherBornStateId: $inputCandidateMotherBornStateId,
                    inputCandidateMotherBornCityId: $inputCandidateMotherBornCityId,
                    inputCandidateAddressStateId: $inputCandidateAddressStateId,
                    inputCandidateAddressCityId: $inputCandidateAddressCityId,
                    inputCandidateAddressPart: $inputCandidateAddressPart,
                    inputCandidateAddressCityPart: $inputCandidateAddressCityPart,
                    inputCandidateAddressVillage: $inputCandidateAddressVillage,
                    inputCandidateAddressVillagePart: $inputCandidateAddressVillagePart,
                    inputCandidateAddress: $inputCandidateAddress,
                    inputCandidateLandLinePhone: $inputCandidateLandLinePhone,
                    inputCandidatePhone: $inputCandidatePhone,
                    inputCandidateConstituencyStateId: $inputCandidateConstituencyStateId,
                    inputCandidateConstituencyCityId: $inputCandidateConstituencyCityId,
                    inputCandidateRoles: $inputCandidateRoles
                }
                toggleLoader();
                $.ajax({
                    type: 'post',
                    url: base_url + 'Profile/candidateUpdatePersonalInfo',
                    data: $sendData,
                    success: function (data) {
                        toggleLoader();
                        $result = JSON.parse(data);
                        notify($result['content'], $result['type']);
                        if($result['type'] !='red'){
                            if (param.data.redirect) {
                                window.location.href = base_url + 'Profile/academicBackground';
                            }
                        }
                    }
                });
            }

        }
        $('[data-mask]').each(function () {
            $(this).mask($(this).data('mask'));
        });
        function checkCandidateStateAndCity() {
            $cs = $("#cs");
            $inputCandidateConstituencyStateId = $("#inputCandidateConstituencyStateId").val();
            $inputCandidateConstituencyCityId = $("#inputCandidateConstituencyCityId").val();
            $inputCandidateFatherBornStateId = $("#inputCandidateFatherBornStateId").val();
            $inputCandidateFatherBornCityId = $("#inputCandidateFatherBornCityId").val();
            $inputCandidateMotherBornStateId = $("#inputCandidateMotherBornStateId").val();
            $inputCandidateMotherBornCityId = $("#inputCandidateMotherBornCityId").val();
            $inputCandidateAddressStateId = $("#inputCandidateAddressStateId").val();
            $inputCandidateAddressCityId = $("#inputCandidateAddressCityId").val();
            if (
                /*$inputCandidateConstituencyStateId != $inputCandidateFatherBornStateId &&
                $inputCandidateConstituencyStateId != $inputCandidateMotherBornStateId &&*/
                $inputCandidateConstituencyStateId != $inputCandidateAddressStateId &&
                $inputCandidateReligion != "Cristian" &&
                $inputCandidateReligion != "Jush" &&
                $inputCandidateReligion != "Zartosht"
            ) {
                console.log("state error");
                $cs.css('display', 'block');
                return;
            }
            if (
                /*$inputCandidateConstituencyCityId != $inputCandidateFatherBornCityId &&
                $inputCandidateConstituencyCityId != $inputCandidateMotherBornCityId &&*/
                $inputCandidateConstituencyCityId != $inputCandidateAddressCityId &&
                $inputCandidateReligion != "Cristian" &&
                $inputCandidateReligion != "Jush" &&
                $inputCandidateReligion != "Zartosht"
            ) {
                $cs.css('display', 'block');
                return;
            }
            $cs.css('display', 'none');
        }
        $(document).on('change', '#inputCandidateConstituencyStateId', checkCandidateStateAndCity);
        $(document).on('change', '#inputCandidateConstituencyCityId', checkCandidateStateAndCity);
        $(document).on('change', '#inputCandidateFatherBornStateId', checkCandidateStateAndCity);
        $(document).on('change', '#inputCandidateFatherBornCityId', checkCandidateStateAndCity);
        $(document).on('change', '#inputCandidateMotherBornStateId', checkCandidateStateAndCity);
        $(document).on('change', '#inputCandidateMotherBornCityId', checkCandidateStateAndCity);
        $(document).on('change', '#inputCandidateAddressStateId', checkCandidateStateAndCity);
        $(document).on('change', '#inputCandidateAddressCityId', checkCandidateStateAndCity);
    });

    $(document).ready(function () {
        $('.inner-form-div-day').hide();
        $('.inner-form-div-month').hide();
        $('.inner-form-div-year').hide();

        $('#day').click(function () {
            $('.inner-form-div-day').slideToggle();
            $('.inner-form-div-month').slideUp();
            $('.inner-form-div-year').slideUp();
        });
        $('#month').click(function () {
            $('.inner-form-div-month').slideToggle();
            $('.inner-form-div-day').slideUp();
            $('.inner-form-div-year').slideUp();
            $firstFullDateValue = $('#fullDate').val();
            if ($firstFullDateValue == '') {
                $('.inner-form-div-month').animate({scrollTop: 0});
            }
        });
        $('#year').click(function () {
            $('.inner-form-div-year').slideToggle();
            $('.inner-form-div-month').slideUp();
            $('.inner-form-div-day').slideUp();
            $firstFullDateValue = $('#fullDate').val();
            if ($firstFullDateValue == '') {
                $('.inner-form-div-year').animate({scrollTop: 0});
            }
        });

        $('.day').click(function () {
            $dayValuesss = $(this).text();
            $('#day').val($(this).text());
            $('.day').removeClass('background');
            $('.day').removeClass('color');
            $(this).addClass('background');
            $(this).addClass('color');
            CheckDate();
            $('.inner-form-div-day').slideUp();
        });
        $('.month').click(function () {
            $('#month').val($(this).text());
            $selecteMonthNumber = $(this).data('month-number');

            $('.month').removeAttr('selected');
            $(this).attr('selected' , 'selected');

            $('.month').removeClass('background');
            $('.month').removeClass('color');
            $(this).addClass('background');
            $(this).addClass('color');
            CheckDate();
            $('.inner-form-div-month').slideUp();

        });
        $('.year').click(function () {
            $('#year').val($(this).text());
            $('.year').removeClass('background');
            $('.year').removeClass('color');
            $(this).addClass('background');
            $(this).addClass('color');
            CheckDate();
            $('.inner-form-div-year').slideUp();

        });

        $('#day').keyup(function () {
            $dayinputvalue = $(this).val();
            $('.day').each(function () {
                $daysvalue = $(this).text();
                if ($daysvalue === $dayinputvalue) {
                    $(this).css('backgroundColor', '#d64b4b');
                    $(this).css('color', '#fff');
                } else {
                    $(this).css('backgroundColor', 'transparent');
                    $(this).css('color', '#000');
                }
                CheckDate();
            });

        });
        $('#month').keyup(function () {
            $dayinputvalue = $(this).val();
            $('.month').each(function () {
                $daysvalue = $(this).text();
                if ($daysvalue === $dayinputvalue) {
                    $(this).css('backgroundColor', '#d64b4b');
                    $(this).css('color', '#fff');
                } else {
                    $(this).css('backgroundColor', 'transparent');
                    $(this).css('color', '#000');

                }
                CheckDate();
            });

        });
        $('#year').keyup(function () {
            $dayinputvalue = $(this).val();
            $('.year').each(function () {
                $srcollTo = 0;
                $daysvalue = $(this).text();
                if ($daysvalue === $dayinputvalue) {
                    $(this).css('backgroundColor', '#d64b4b');
                    $(this).css('color', '#fff');
                } else {
                    $(this).css('backgroundColor', 'transparent');
                    $(this).css('color', '#000');
                }
                CheckDate();
            });
        });

        $('.input-group-addon , #inputCandidateBirthDate').click(function () {
            $fullDateValue = $('#inputCandidateBirthDate').val();
            var data =$('#inputCandidateBirthDate').val();
            var arr = data.split('/');
            $value1 = arr[2];
            $value2 = arr[1];
            $value3 = arr[0];

            $innerDayValue = $('#day').val(arr[2]);
            $innerMonthValue = $('#month').val(arr[1]);
            $innerYearValue = $('#year').val(arr[0]);
            if ($fullDateValue == '') {
                $('#day').val("");
                $('#month').val("");
                $('#year').val("");
                $('.day').removeClass('background');
                $('.day').removeClass('color');
                $('.month').removeClass('background');
                $('.month').removeClass('color');
                $('.year').removeClass('background');
                $('.year').removeClass('color');
                $('.save-changes').attr('disabled', 'disabled');
            }
            else {
                $('.day').each(function () {
                    $thisValue = $(this).text();
                    if($value1  === $thisValue) {
                        $(this).addClass('background');
                        $(this).addClass('color');
                    }
                    else{
                        $(this).removeClass('background');
                        $(this).removeClass('color');
                    }
                });
                $('.month').each(function () {
                    $thisValue = $(this).data('month-number').toString();
                    if($value2  === $thisValue) {
                        $(this).attr('selected' , 'selected');
                        $(this).addClass('background');
                        $(this).addClass('color');
                        $('#month').val($(this).text());
                    }
                    else{
                        $(this).removeAttr('selected');
                        $(this).removeClass('background');
                        $(this).removeClass('color');
                    }
                });
                $('.year').each(function () {
                    $thisValue = $(this).text();
                    if($value3  === $thisValue) {
                        $(this).addClass('background');
                        $(this).addClass('color');
                    }
                    else{
                        $(this).removeClass('background');
                        $(this).removeClass('color');
                    }
                });
                $('.save-changes').removeAttr('disabled');

            }
        });
        $('.close-modal').click(function () {
            $('.inner-form-div-day').slideUp();
            $('.inner-form-div-month').slideUp();
            $('.inner-form-div-year').slideUp();
        });
        $('.save-changes').click(function () {
            $dayValues = $('#day').val();
            $monthValues = $('#month').val();
            $yearValues = $('#year').val();
            $selecteMonthNumber1 = $('.month').filter('[selected]').data('month-number');
            $ooo = $selecteMonthNumber1;

            $fullDateValue = $yearValues + '/' + $ooo + '/' + $dayValues;
            $('#inputCandidateBirthDate').val($fullDateValue);

            if ($dayValues === "" || $monthValues === "" || $yearValues === "") {
                $('.save-changes').attr('disabled', 'disabled');
            } else {
                $('.save-changes').removeAttr('disabled');
                $('.modal').modal('hide');
            }

            $('.inner-form-div-day').slideUp();
            $('.inner-form-div-month').slideUp();
            $('.inner-form-div-year').slideUp();
        });
        function CheckDate() {
            $DayValues = $('#day').val();
            $MonthValues = $('#month').val();
            $YearValues = $('#year').val();
            if ($DayValues === "" || $MonthValues === "" || $YearValues === "") {
                $('.save-changes').attr('disabled', 'disabled');
            } else {
                $('.save-changes').removeAttr('disabled');
            }
        }
        CheckDate();
    });
</script>