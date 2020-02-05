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
        $("#updateProfilePromise").click(function () {
            $sendData = {
                'inputElectionPromise': $("#form").serializeArray()
            }
            toggleLoader();
            $.ajax({
                type: 'post',
                url: base_url + 'Profile/candidateUpdatePromises',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = JSON.parse(data);
                    notify($result['content'], $result['type']);
                }
            });

        });
        $("#updateProfilePromiseAndRedirect").click(function () {
            $sendData = {
                'inputElectionPromise': $("#form").serializeArray()
            }
            toggleLoader();
            $.ajax({
                type: 'post',
                url: base_url + 'Profile/candidateUpdatePromises',
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