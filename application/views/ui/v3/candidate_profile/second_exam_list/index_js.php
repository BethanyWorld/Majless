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
            $("#reserveSecondStepExam").attr('data-exam-id', $examId);
        });
        $(document).on('click' , '#reserveSecondStepExam',function () {
            $examId = $('#reserveSecondStepExam').attr('data-exam-id');
            toggleLoader();
            $.ajax({
                type: 'post',
                url: base_url + 'Profile/candidateReserveExam',
                data: {
                    'inputExamId': $examId,
                    'inputCandidateStatus': 'CandidateExamSecondStep'
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
        function loadData($candidateStateId) {
            toggleLoader();
            $.ajax({
                type: 'GET',
                url: base_url + 'Profile/getSecondStepExamList/' + $candidateStateId,
                success: function (data) {
                    toggleLoader();
                    $result = JSON.parse(data);
                    $(".table-rows").html($result['htmlResult']);
                }
            });
        }
        $candidateStateId = "<?php echo $candidateStateId; ?>";
        loadData($candidateStateId);
        $("#searchButton").click(function () {
            $inputStateId = $("#inputStateId").val();
            loadData($inputStateId);
        });
        $('[data-toggle="popover"]').popover();
    });
</script>