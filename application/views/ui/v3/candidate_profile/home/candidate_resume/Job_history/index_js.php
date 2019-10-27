<script type="text/javascript">
    $(document).ready(function () {

        $(".add-form").click(function(){
            $form = $("#unique-form").clone().removeClass('hidden').removeAttr('id');
            $(".skill-divider").after($form);
        });
        $(document).on('click','.remove-form',function(){
            $(this).parent().remove();
        });

        $("#updateProfileJobHistory").click( {redirect: false}, updateProfileJobHistory);
        $("#updateProfileJobHistoryAndRedirect").click( {redirect: true}, updateProfileJobHistory);
        function updateProfileJobHistory(param) {
            if($("#form-job-history").serializeArray().length <=0){
                notify('وارد کردن حداقل یک مهارت الزامی ست', 'yellow');
            }
            else{
                $sendData = {inputCandidateJobHistory: $("#form-job-history").serializeArray()}
                toggleLoader();
                $.ajax({
                    type: 'post',
                    url: base_url + 'Profile/candidateUpdateJobHistory',
                    data: $sendData,
                    success: function (data) {
                        toggleLoader();
                        $result = JSON.parse(data);
                        notify($result['content'], $result['type']);
                        if(param.data.redirect){
                            window.location.href =  base_url+'Profile/socialCulturalBackground';
                        }
                    }
                });
            }
        }
    });
</script>