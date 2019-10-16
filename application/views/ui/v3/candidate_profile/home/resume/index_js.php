<script type="text/javascript">
    $(document).ready(function () {
        /*demo*/
        $(document).on('change' , '#inputCandidateBornStateId',function () {
            toggleLoader();
            $inputCandidateStateId = $(this).val();
            $.ajax({
                type: 'post',
                url: base_url + 'State/getCityByStateId/'+$inputCandidateStateId,
                success: function(data){
                    toggleLoader();
                    $result = JSON.parse(data);
                    $("#inputCandidateBornCityId").html('');
                    $.each($result , function(index , item) {
                        var selectInnerHtml = $('<option />',
                            {
                                "class": "",
                                "value": item['CityId'],
                                "text": item['CityName']
                            });
                        $('#inputCandidateBornCityId').append(selectInnerHtml);

                    });
                },
                error: function(data){
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
        $("#imgInp").change(function() {
            readURL(this);
        });
        $(".RemoveImage").click(function(){
            $("#personInfoImageButtons").attr('src' , defaultImage );
        });
        $(document).on('click' , '#updateProfileInfo',function () {
            toggleLoader();
            $sendData = {

            }
            $.ajax({
                type: 'post',
                url: base_url + 'Profile/candidateReserveExam',
                data: {
                    'inputExamId': $examId,
                    'inputCandidateStatus': 'CandidateAssessment'
                },
                success: function (data) {
                    toggleLoader();
                    $result = JSON.parse(data);
                    notify($result['content'], $result['type']);
                }
            });
        });
    });
</script>