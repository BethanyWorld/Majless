<script type="text/javascript">
    $(document).ready(function () {
        $(document).on('change', '#inputCandidateBornStateId', function () {
            toggleLoader();
            $inputCandidateStateId = $(this).val();
            $sendData = {'inputStateId': $inputCandidateStateId}
            $.ajax({
                type: 'post',
                url: base_url + 'Profile/getCitiesByStateId',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = JSON.parse(data);
                    $("#inputCandidateBornCityId").html('');
                    $.each($result, function (index, item) {
                        var selectInnerHtml = $('<option />',
                            {
                                "class": "",
                                "value": item['CityId'],
                                "text": item['CityName']

                            });
                        $('#inputCandidateBornCityId').append(selectInnerHtml);

                    });
                },
                error: function (data) {
                    toggleLoader();
                    notify('درخواست با خطا مواجه شد', 'red');
                }
            });
        });

        $(document).on('change', '[name="inputCandidateActivityFieldType"]', function () {
            debugger;
            $parentId = $(this).eq(0).parents('div.list-group-item').eq(0).attr('id');
            $parentDom = "#" + $parentId + " ";
            $inputfieldofactivity = $(this).val();

            if ($inputfieldofactivity !== "Mobilization" && $inputfieldofactivity !== "Others") {
                $($parentDom + '.div-except-mobilization').css('display', 'block');
                $($parentDom + '.div-for-mobilization').css('display', 'none');
                $($parentDom + '.div-for-others').css('display', 'none');
            }
            if ($inputfieldofactivity === "Mobilization") {
                $($parentDom + '.div-for-mobilization').css('display', 'block');
                $($parentDom + '.div-except-mobilization').css('display', 'none');
                $($parentDom + '.div-for-others').css('display', 'none');
            }
            if ($inputfieldofactivity === "Others") {
                $($parentDom + '.div-for-others').css('display', 'block');
                $($parentDom + '.div-for-mobilization').css('display', 'none');
                $($parentDom + '.div-except-mobilization').css('display', 'none');

            }
        });

        $(document).on('change', '[name="inputCandidateBasijType"]', function () {
            $parentId = $(this).parents('div.list-group-item').attr('id');
            $parentDom = "#" + $parentId + " ";
            $inputThetypeofmobilization = $(this).val();
            if ($inputThetypeofmobilization === "Others") {
                $($parentDom + '.other-mobilization').css('display', 'block');
            }
            else{
                $($parentDom + '.other-mobilization').css('display', 'none');
            }
        });

        $(".add-form").click(function () {
            $form = $("#unique-form").clone().removeClass('hidden').attr('id', UUID());
            $form.find('[data-name]').each(function () {
                $(this).attr('name', $(this).data('name'))
            });
            $radioButtonNameUUID = UUID();
            $form.find('input[type="radio"]').each(function () {
                $id = UUID();
                $(this).attr('id', $id);
                $(this).attr('name', $radioButtonNameUUID);
                $(this).next('label').attr('for', $id)
            });
            $(".skill-divider").after($form);
        });
        $(document).on('click', '.remove-form', function () {
            $(this).parent().remove();
        });
    });

</script>