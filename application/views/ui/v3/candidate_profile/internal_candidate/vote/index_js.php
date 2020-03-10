<script type="text/javascript">
    $(document).ready(function () {
        $(".vote").click(function (e) {
            toggleLoader();
            e.preventDefault();
            $inputId = $(this).data('id');
            $.ajax({
                type: 'post',
                url: base_url + 'Profile/doVoteSupervisor',
                data: {'inputId': $inputId },
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