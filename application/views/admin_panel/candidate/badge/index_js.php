<script type="text/javascript">
    $(document).ready(function () {
        /*
        * Transparency
        * Obligation
        * Merit
        * */
        $inputCandidateId = $.trim($("#inputCandidateId").val());


        $('.Assignment').click(function () {
                $sendData = {
                    'inputCandidateId':$inputCandidateId,
                    'inputActionType': $(this).data('action-type'),
                    'inputAction': 'Assign'
                }
                $.ajax({
                    type: 'post',
                    url: base_url + 'Candidate/doAssignBadge',
                    data: $sendData,
                    success: function (data) {


                    },

                });
            });
        $('.Delete').click(function () {
            $sendData = {
                'inputCandidateId': $inputCandidateId,
                'inputActionType':  $(this).data('action-type'),
                'inputAction': 'Delete'
            }
            $.ajax({
                type: 'post',
                url: base_url + 'Candidate/doAssignBadge',
                data: $sendData,
                success: function (data) {


                },

            });
        });

    });
</script>