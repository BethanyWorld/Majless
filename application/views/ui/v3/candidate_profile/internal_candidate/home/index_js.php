<script type="text/javascript">
    $(document).ready(function () {
        $(".vote").click(function (e) {
            toggleLoader();
            e.preventDefault();
            $inputSupervisorType = $(this).data('supervisor-type');
            $inputElectionScale = $(this).data('election-scale');
            $inputStateId = $(this).data('state-id');
            $.ajax({
                type: 'post',
                url: base_url + 'Profile/doSetSupervisorType',
                data: {
                    'inputSupervisorType': $inputSupervisorType,
                    'inputElectionScale': $inputElectionScale,
                    'inputElectionStateId': $inputStateId
                },
                success: function (data) {
                    toggleLoader();
                    $result = JSON.parse(data);
                    notify($result['content'], $result['type']);
                    if ($result['success']) {
                        setTimeout(function () {
                            location.reload(0);
                        }, 2000);
                    }
                }
            });
        });
        $(".remove-supervisor-type").click(function (e) {
            toggleLoader();
            e.preventDefault();
            $inputSupervisorType = $(this).data('supervisor-type');
            $inputRowId = $(this).data('row-id');
            $.ajax({
                type: 'post',
                url: base_url + 'Profile/doDeleteSupervisorType',
                data: {
                    'inputRowId': $inputRowId,
                    'inputSupervisorType': $inputSupervisorType
                },
                success: function (data) {
                    toggleLoader();
                    $result = JSON.parse(data);
                    notify($result['content'], $result['type']);
                    if ($result['success']) {
                        setTimeout(function () {
                            location.reload(0);
                        }, 2000);
                    }
                }
            });
        });
    });
</script>