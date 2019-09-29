<script type="text/javascript">
    $(document).ready(function () {
        $(".preview-exam").click(function () {
            $examPlaceTitle = $(this).data('place-title');
            $examPlaceAddress = $(this).data('place-address');
            $examDate = $(this).data('date');
            $examTime = $(this).data('time');
            $examId = $(this).data('id');
            $(".modal").modal('show');
            $(".place-title").text($examPlaceTitle);
            $(".place-address").text($examPlaceAddress);
            $(".date").text($examDate);
            $(".time").text($examTime);
            $("#reserveFirstStepExam").attr('data-exam-id' , $examId);
        });
        $("#reserveFirstStepExam").click(function () {
            $examId = $(this).data('exam-id');
            toggleLoader();
            $.ajax({
                type: 'post',
                url: base_url + 'Profile/candidateReserveExam',
                data: {
                    'inputExamId': $examId,
                    'inputCandidateStatus':'CandidateExamFirstStep'
                },
                success: function (data) {
                    toggleLoader();
                    $result = JSON.parse(data);
                    notify($result['content'], $result['type']);
                    if ($result['success']) {
                        setTimeout(function () {
                            window.history.back();
                        }, 1000);
                    }
                }
            });
        });
    });
</script>