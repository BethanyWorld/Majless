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
            $("#reserveFirstStepExam").attr('data-exam-id', $examId);
        });
        $(document).on('click' , '#reserveFirstStepExam',function () {
            $examId = $('#reserveFirstStepExam').attr('data-exam-id');
            toggleLoader();
            $.ajax({
                type: 'post',
                url: base_url + 'Profile/startExamPayment',
                data: {
                    'inputExamId': $examId,
                    'inputCandidateStatus': 'CandidateExamFirstStep'
                },
                success: function (data) {
                    $result = JSON.parse(data);
                    notify($result['content'], $result['type']);
                    if($result['success']){
                        window.location.href = "https://www.zarinpal.com/pg/StartPay/"+ $result['refId'];
                    }
                }
            });
        });
        function loadData($candidateStateId) {
            toggleLoader();
            $.ajax({
                type: 'GET',
                url: base_url + 'Profile/getFirstStepExamList/' + $candidateStateId,
                success: function (data) {
                    toggleLoader();
                    $result = JSON.parse(data);
                    $(".table-rows").html($result['htmlResult']);
                }
            });
        }

        $candidateStateId = "8";
        /*$candidateStateId = "<php echo $candidateStateId; ?>";*/
        loadData($candidateStateId);
        $("#searchButton").click(function () {
            $inputStateId = $("#inputStateId").val();
            loadData($inputStateId);
        });
        $('[data-toggle="popover"]').popover();
    });
</script>