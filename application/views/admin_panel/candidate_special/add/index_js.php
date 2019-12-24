<script type="text/javascript">
    $(document).ready(function () {
        /* Update User Info */
        $("#addCandidateSpecial").click(function () {
            event.preventDefault();
            var file_data = $('#inputCandidateImage').prop('files')[0];
            var form_data = new FormData();
            form_data.append('file', file_data);
            $.ajax({
                url: base_url + "ExamPlaces/uploadFile",
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                success: function (data) {
                    $result = jQuery.parseJSON(data);
                    $inputCandidateFirstName = $.trim($("#inputCandidateFirstName").val());
                    $inputCandidateLastName = $.trim($("#inputCandidateLastName").val());
                    $inputCandidateImage = $result['fileSrc'];
                    $inputCandidateStateId = $.trim($("#inputCandidateStateId").val());
                    /* End Validation */
                    toggleLoader();
                    $sendData = {
                        'inputCandidateFirstName': $inputCandidateFirstName,
                        'inputCandidateLastName': $inputCandidateLastName,
                        'inputCandidateProfileImage': $inputCandidateImage,
                        'inputCandidateStateId': $inputCandidateStateId
                    }
                    $.ajax({
                        type: 'post',
                        url: base_url + 'Candidate/doSpecialAdd',
                        data: $sendData,
                        success: function (data) {
                            toggleLoader();
                            $result = jQuery.parseJSON(data);
                            notify($result['content'], $result['type']);
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            notify('اطلاعات نامزد انتخاباتی تکراری ست', 'red');
                            toggleLoader();
                        }
                    });
                },
                error: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                }
            });
        });
        /* End Update User Info */
    });
</script>