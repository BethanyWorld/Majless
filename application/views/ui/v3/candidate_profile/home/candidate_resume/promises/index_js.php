<script type="text/javascript">
    $(document).ready(function () {
        $(".add-form").click(function () {
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
    });
</script>