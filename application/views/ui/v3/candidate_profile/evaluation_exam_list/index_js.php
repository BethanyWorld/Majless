<script type="text/javascript">
    $(document).ready(function () {
        $(document).on('click' , '.preview-exam' , function () {
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
            $("#reserveEvaluationExam").attr('data-exam-id', $examId);
        });
        $(document).on('click' , '#reserveEvaluationExam',function () {
            $examId = $('#reserveEvaluationExam').attr('data-exam-id');
            toggleLoader();
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
                    if ($result['success']) {
                        setTimeout(function () {
                            window.history.back();
                        }, 1000);
                    }
                }
            });
        });
        function loadData() {
            toggleLoader();
            $.ajax({
                type: 'GET',
                url: base_url + 'Profile/getEvaluationExamList',
                success: function (data) {
                    toggleLoader();
                    $result = JSON.parse(data);
                    $(".table-rows").html($result['htmlResult']);
                }
            });
        }
        loadData();
        $('[data-toggle="popover"]').popover();
    });
</script>