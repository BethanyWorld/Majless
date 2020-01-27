<script type="text/javascript">
    $(document).ready(function () {
        /* Update User Info */
        $("#updateScoreByBadges").click(function (event) {
            toggleLoader();
            event.preventDefault();
            $.ajax({
                url: base_url + "Candidate/updateScoreByBadges",
                method: 'GET',
                success: function (data) {
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                    toggleLoader();
                },
                error: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                }
            });

        });
    });
</script>