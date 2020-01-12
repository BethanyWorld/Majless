<script type="text/javascript">
    $(document).ready(function () {
        /*
        * Transparency
        * Obligation
        * Merit
        * */
        $inputCandidateId = $.trim($("#inputCandidateId").val());
        $('.Assignment').click(function () {
            toggleLoader();
            $sendData = {
                'inputCandidateId': $inputCandidateId,
                'inputCandidateBadge': $(this).data('action-type'),
                'inputCandidateType': 'Normal',
                'inputAction': 'Assign'
            }
            $.ajax({
                type: 'post',
                url: base_url + 'Candidate/doAssignBadge',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                },
            });
        });
        $('.Delete').click(function () {
            toggleLoader();
            $sendData = {
                'inputCandidateId': $inputCandidateId,
                'inputCandidateBadge': $(this).data('action-type'),
                'inputCandidateType': 'Normal',
                'inputAction': 'Delete'
            }
            $.ajax({
                type: 'post',
                url: base_url + 'Candidate/doAssignBadge',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                },
            });
        });
    });
</script>