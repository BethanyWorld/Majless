<script type="text/javascript">
    $(document).ready(function () {

        /* Update User Info */
        $("#importScoresForPreview").click(function (event) {
            toggleLoader();
            event.preventDefault();
            var file_data = $('#inputScoresFile').prop('files')[0];
            var form_data = new FormData();
            form_data.append('file', file_data);
            $.ajax({
                url: base_url + "Candidate/prepareImportScores",
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                success: function (data) {
                    toggleLoader();
                    $(".scores-preview-container").removeClass('hidden');
                    $(".scores-preview tbody").html(data);
                },
                error: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                }
            });

        });
        $("#importScores").click(function (event) {
            toggleLoader();
            $sendData = [];
            $("tr.is-valid").each(function(){
                $sendData.push({
                    'inputNationalCode': $(this).data('national-code'),
                    'inputScore': $(this).data('score')
                });
            });
            console.log($sendData);
            $sendData = {'inputCandidateScores': $sendData}
            $.ajax({
                type: 'post',
                url: base_url + 'Candidate/doImportScores',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                    location.reload();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify('خطای ارتباط با سرور.دقایقی دیگر تلاش کنید', 'red');
                    toggleLoader();
                }
            });
        });

    });
</script>