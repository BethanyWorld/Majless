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
            // if($("#form").serializeArray().length <=0){
            //     notify('وارد کردن حداقل یک مهارت الزامی ست', 'yellow');
            // }

            // $('form').each(function () {
            //     $allInputValue = $(this).find('input').val();
            //     $allSelectOption = $(this).find('option').filter('[selected]').length;
            //
            //     $(this).find('select').each(function () {
            //         $optionSelected = $(this).find('option').filter('[selected]').length;
            //         if ($optionSelected === 0) {
            //             $(this).prev('label').css('color', 'red');
            //         }
            //     });
            //     $(this).find('input').each(function () {
            //         $inputValue = $(this).val();
            //         if ($inputValue === "") {
            //             $(this).prev('label').css('color', 'red');
            //         }
            //     });
            //
            //     $srcollTo = 0;
            //     $('form select').each(function () {
            //         $isFinished = false;
            //         $firstForm = $(this).find('option').filter('[selected]').length;
            //         if ($firstForm === 0 && !$isFinished) {
            //             if($srcollTo === 0){
            //                 $srcollTo = $(this).offset().top;
            //             }
            //             $isFinished = true;
            //         }
            //     });
            //     if($srcollTo !== 0){
            //         $("html, body").animate({ scrollTop: $srcollTo-100 }, "slow");
            //     }
            // });

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