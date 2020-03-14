<script type="text/javascript">
    $(document).ready(function () {
        $(document).on('change', '[name="inputCandidateMobilMembershipType"]', function () {
            $parentId = $(this).parents('div.list-group-item').attr('id');
            $parentDom = "#" + $parentId + " ";
            $inputCandidateMobilMembershipType = $(this).val();
            if ($inputCandidateMobilMembershipType === 'Responsible') {
                $($parentDom + '.responsibility').removeClass('hidden').show();
            }
            else {
                $($parentDom + '.responsibility').addClass('hidden').hide();
            }
        });
        $(document).on('change', '[name="inputCandidateActivityFieldType"]', function () {
            $parentId = $(this).eq(0).parents('div.list-group-item').eq(0).attr('id');
            $parentDom = "#" + $parentId + " ";
            $inputfieldofactivity = $(this).val();

            if ($inputfieldofactivity !== "Mobilization" && $inputfieldofactivity !== "Others") {
                $($parentDom + '.Collectionname').css('display', 'block');
                $($parentDom + '.inputmembershiptype').css('display', 'none');
                $($parentDom + '.Description').css('display', 'block');
                $($parentDom + '.culture-date').css('display', 'block');

                $($parentDom + '.inputCandidateMobilMembershipType').css('display', 'none');
                $($parentDom + '.inputCandidateBasijType').css('display', 'none');
                $($parentDom + '.domain-name').css('display', 'none');
                $($parentDom + '.other-title').css('display', 'none');
                $($parentDom + '.other-mobilization').css('display', 'none');
                $($parentDom + '.responsibility').removeClass('hidden').show();

            }
            else {
                $($parentDom + '.responsibility').addClass('hidden').hide();
            }

            if ($inputfieldofactivity !== "University" || $inputfieldofactivity !== "TheMosque") {
                $($parentDom + '.organization-name').html('نام مجموعه');
            }

            if ($inputfieldofactivity === "University") {
                $($parentDom + '.organization-name').html('عنوان تشکل');
                $($parentDom + '.university-name').removeClass('hidden').show();
            }
            else {
                $($parentDom + '.university-name').addClass('hidden').hide();
            }
            if ($inputfieldofactivity === "TheMosque") {
                $($parentDom + '.organization-name').html('نام مسجد');
            }

            if ($inputfieldofactivity === "Mobilization") {
                $($parentDom + '.inputCandidateMobilMembershipType').css('display', 'block');
                $($parentDom + '.inputCandidateBasijType').css('display', 'block');
                $($parentDom + '.domain-name').css('display', 'block');
                $($parentDom + '.culture-date').css('display', 'block');


                $($parentDom + '.Collectionname').css('display', 'none');
                $($parentDom + '.Description').css('display', 'none');
                $($parentDom + '.inputmembershiptype').css('display', 'none');
                $($parentDom + '.other-title').css('display', 'none');


            }
            if ($inputfieldofactivity === "Others") {
                $($parentDom + '.other-title').css('display', 'block');
                $($parentDom + '.Collectionname').css('display', 'block');
                $($parentDom + '.inputmembershiptype').css('display', 'block');
                $($parentDom + '.Description').css('display', 'block');
                $($parentDom + '.culture-date').css('display', 'block');

                $($parentDom + '.inputCandidateBasijType').css('display', 'none');
                $($parentDom + '.domain-name').css('display', 'none');
                $($parentDom + '.inputCandidateMobilMembershipType').css('display', 'none');

            }
        });
        $(document).on('change', '[name="inputCandidateBasijType"]', function () {
            $parentId = $(this).parents('div.list-group-item').attr('id');
            $parentDom = "#" + $parentId + " ";
            $inputThetypeofmobilization = $(this).val();
            $inputCandidateActivityFieldType = $($parentDom + "[name='inputCandidateActivityFieldType']").val();
            if ($inputThetypeofmobilization === "Others") {
                $($parentDom + '.other-mobilization').css('display', 'block');
            } else {
                $($parentDom + '.other-mobilization').css('display', 'none');
            }
        });
        $(".add-form").click(function () {
            $('.add-form').removeClass('waves');
            $("#plus-wave").remove();
            $form = $("#unique-form").clone().removeClass('hidden').attr('id', UUID());
            $form.find('[data-name]').each(function () {
                $(this).attr('name', $(this).data('name'))
            });
            $(".skill-divider").after($form);


            // for date 98
            $inputCandidateActivityStartYear = $('#inputCandidateActivityStartYear').find('option').filter('[selected]').length;
            $inputCandidateActivityEndYear = $('#inputCandidateActivityEndYear').find('option').filter('[selected]').length;
            if ($inputCandidateActivityStartYear === 0) {
                $('#inputCandidateActivityStartYear').find('option:last-child').attr('selected', 'selected');
                $('#inputCandidateActivityEndYear').find('option:last-child').attr('selected', 'selected');
            }
            // for date 98

        });
        $(document).on('click', '.remove-form', function () {
            $(this).parent().remove();
        });
        setTimeout(function () {
            $("#form [name='inputCandidateBasijType']").change();
        }, 500);

        $("#form [name='inputCandidateActivityFieldType']").change();
        $("#form [name='inputCandidateMobilMembershipType']").change();
        $("#form [name='inputCandidateBasijType']").change();

        $("#buttonUpdateSocialCaltural").click({redirect: false}, updateProfileSocialCaltural);
        $("#buttonUpdateSocialCalturalAndRedirect").click({redirect: true}, updateProfileSocialCaltural);
        function updateProfileSocialCaltural(param) {
            $sendData = {inputSocialCulturalBackground: $("#form").serializeArray()};
            toggleLoader();
            $.ajax({
                type: 'post',
                url: base_url + 'Profile/candidateUpdateSocialCulturalBackground',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = JSON.parse(data);
                    notify($result['content'], $result['type']);
                    if (param.data.redirect) {
                        window.location.href = base_url + 'Profile/politicBackground';
                    }
                }
            });
        }
    });
</script>