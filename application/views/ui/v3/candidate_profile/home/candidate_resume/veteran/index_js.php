<script type="text/javascript">
    $(document).ready(function () {
        $(".add-form").click(function(){
            $form = $("#unique-form").clone().removeClass('hidden').removeAttr('id');
            $(".skill-divider").after($form);
        });
        $(document).on('click','.remove-form',function(){
            $(this).parent().remove();
        });
        $("#updateProfileSkills").click(function () {
            // if($("#form").serializeArray().length <=0){
            //     notify('وارد کردن حداقل یک مهارت الزامی ست', 'yellow');
            // }

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
    });
</script>