<script type="text/javascript">


    $(document).ready(function () {

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
                    $citySelect.find('option').eq(0).attr('selected','selected');
                    checkCandidateStateAndCity();
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
        $(document).on('change', '#inputCandidateReligion', function () {
            $inputParliamentaryCandidate = $('#inputParliamentaryCandidate').is(":checked");
            if ($inputParliamentaryCandidate) {
                $inputCandidateReligion = $(this).val();
                if ("IslamShia" != $inputCandidateReligion && "IslamSoni" != $inputCandidateReligion) {
                    $('#ReligionNotify').css('visibility', 'visible');
                } else {
                    $('#ReligionNotify').css('visibility', 'hidden');
                }
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
        $("#inputCandidateReligion").change();

        function checkedCandidate() {
            $inputParliamentaryCandidate = $('#inputParliamentaryCandidate').is(":checked");
            if ($inputParliamentaryCandidate) {
                /* relegion Check */
                $inputCandidateReligion = $('#inputCandidateReligion').val();
                if ("IslamShia" != $inputCandidateReligion && "IslamSoni" != $inputCandidateReligion) {
                    $("#ReligionNotify").removeClass('hidden');
                } else {
                    $("#ReligionNotify").removeClass('hidden');
                }
                /* End relegion check*/
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

                if (
                    $inputCandidateConstituencyStateId != $inputCandidateBornStateId ||
                    $inputCandidateConstituencyStateId != $inputCandidateFatherBornStateId ||
                    $inputCandidateConstituencyStateId != $inputCandidateMotherBornStateId ||
                    $inputCandidateConstituencyStateId != $inputCandidateAddressStateId
                ) {
                    $cs.removeClass('hidden');
                    return;
                }
                if (
                    $inputCandidateConstituencyCityId != $inputCandidateBornCityId ||
                    $inputCandidateConstituencyCityId != $inputCandidateFatherBornCityId ||
                    $inputCandidateConstituencyCityId != $inputCandidateMotherBornCityId ||
                    $inputCandidateConstituencyCityId != $inputCandidateAddressCityId
                ) {
                    $cs.removeClass('hidden');
                    return;
                }
                $cs.addClass('hidden');
                /**/
            } else {
                $(".invaliderror").addClass('hidden');
                $("#ReligionNotify").addClass('hidden');
                $("#cs").addClass('hidden');
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
                    if (param.data.redirect) {
                        window.location.href = base_url + 'Profile/academicBackground';
                    }
                }
            });
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


            console.log("$inputCandidateFatherBornStateId", $inputCandidateFatherBornStateId);
            console.log("$inputCandidateMotherBornStateId", $inputCandidateMotherBornStateId);
            console.log("$inputCandidateAddressStateId", $inputCandidateAddressStateId);
            console.log("$inputCandidateConstituencyStateId", $inputCandidateConstituencyStateId);
            if (
                $inputCandidateConstituencyStateId != $inputCandidateFatherBornStateId &&
                $inputCandidateConstituencyStateId != $inputCandidateMotherBornStateId &&
                $inputCandidateConstituencyStateId != $inputCandidateAddressStateId
            ) {
                console.log("state error");
                $cs.css('display', 'block');
                return;
            }
            console.log("state success");
            if (
                $inputCandidateConstituencyCityId != $inputCandidateFatherBornCityId &&
                $inputCandidateConstituencyCityId != $inputCandidateMotherBornCityId &&
                $inputCandidateConstituencyCityId != $inputCandidateAddressCityId
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
</script>