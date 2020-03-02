<script type="text/javascript">
    $(document).ready(function () {
        $(".add-form").click(function () {
            $('.add-form').removeClass('waves');
            $("#plus-wave").remove();
            $form = $("#unique-form").clone().removeClass('hidden').attr('id', UUID());
            $(".skill-divider").after($form);
        });
        $(document).on('click', '.remove-form', function () {
            $(this).parent().remove();
        });
        $("#updateProfileSkills").click(function () {
            $sendData = {
                inputCandidateSkills: $("#form").serializeArray()
            }
            toggleLoader();
            $.ajax({
                type: 'post',
                url: base_url + 'Profile/candidateUpdateSkills',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = JSON.parse(data);
                    notify($result['content'], $result['type']);
                }
            });

        });
        $("#updateProfileSkillsAndRedirect").click(function () {
            $sendData = {
                inputCandidateSkills: $("#form").serializeArray()
            }
            toggleLoader();
            $.ajax({
                type: 'post',
                url: base_url + 'Profile/candidateUpdateSkills',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = JSON.parse(data);
                    notify($result['content'], $result['type']);
                    location.href = base_url + 'Profile/veteran';
                }
            });

        });
        $(document).on('click', '.skillselectwo ul a', function () {
            $value = $(this).data('name');
            $(this).parent().parent().prev('.kindOfSkills').eq(0).find('#inputSkillType').val($value);
            $(this).parent().parent().hide();
        });

        $(document).on('keyup', '[name="inputSkillType"]', function () {
            $this = $(this);
            $parentId = $(this).parents('div.list-group-item').attr('id');
            $parentDom = "#" + $parentId + " ";
            $('div.list-group-item').css({
                'position':'relative',
                'z-index':'1'
            });
            $(this).parents('div.list-group-item').css({
                'position':'relative',
                'z-index':'222222222'
            });
            $searchTerm = $.trim($(this).val());
            if ($.trim($searchTerm) === "") {
                $('.skillselectwo ul').html('');
                $('.skillselectwo').hide();
            } else {
                $.ajax({
                    type: 'GET',
                    url: base_url + 'Profile/getSkillBySearchTerm/?term=' + $searchTerm,
                    success: function (data) {
                        $result = JSON.parse(data);
                        $resualtLength = $result.length;
                        if ($resualtLength > 0) {
                            var toAppend = '';
                            for (var i = 0; i < $result.length; i++) {
                                toAppend += "<a data-name = '" + $result[i]['SkillTitle'] + "' class='dataSkillAttribute' title='" + $result[i]['SkillTitle'] + "'>" + $result[i]['SkillTitle'] + "</a>";
                            }
                            $this.parent('.kindOfSkills').eq(0).next('.skillselectwo').find('ul').eq(0).html('').append(toAppend);
                            $this.parent().next('.skillselectwo').removeClass('hidden').show();
                        } else {
                            $('.skillselectwo').addClass('hidden').hide();
                        }
                    }
                });
            }
            return false;
        });
    });
</script>