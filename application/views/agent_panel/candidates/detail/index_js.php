<script type="text/javascript">
    $(document).ready(function () {
        $("#editCandidateMark").click(function (event) {
            toggleLoader();
            $inputCandidateId = $.trim($("#inputCandidateId").val());
            $inputCandidateMark = $.trim($("#inputCandidateMark").val());
            if (isEmpty($inputCandidateId) || isEmpty($inputCandidateMark)) {
                toggleLoader();
                notify('تمامی موارد را کامل کنید', 'red');
            }
            else {
                $sendData = {
                    'inputCandidateId': $inputCandidateId,
                    'inputCandidateScore': $inputCandidateMark
                }
                $.ajax({
                    type: 'post',
                    url: base_url + 'Candidates/doEditCandidateMark',
                    data: $sendData,
                    success: function (data) {
                        toggleLoader();
                        $result = jQuery.parseJSON(data);
                        notify($result['content'], $result['type']);
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        notify('خطای ارتباط با سرور.دقایقی دیگر تلاش کنید', 'red');
                        toggleLoader();
                    }
                });
            }
        });
        $(function () {
            $('#inputCandidateMark').mask('000');
        });
    });
</script>