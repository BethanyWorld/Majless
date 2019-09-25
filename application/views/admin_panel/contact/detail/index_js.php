<script type="text/javascript">
    $(document).ready(function () {

        $("#changeContactVisitToVisited").click(function () {
            $inputContactRowId = $.trim($("#inputContactRowId").val());
            toggleLoader();
            $sendData = {
                'inputContactRowId': $inputContactRowId,
                'inputContactVisited': 1
            }
            $.ajax({
                type: 'post',
                url: base_url + 'Contact/doChangeVisitState',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify('تغییر وضعیت با خطا مواجه شده است', 'red');
                    toggleLoader();
                }
            });
        });
        $("#changeContactVisitToUnVisited").click(function () {
            $inputContactRowId = $.trim($("#inputContactRowId").val());
            toggleLoader();
            $sendData = {
                'inputContactRowId': $inputContactRowId,
                'inputContactVisited': 0
            }
            $.ajax({
                type: 'post',
                url: base_url + 'Contact/doChangeVisitState',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify('تغییر وضعیت با خطا مواجه شده است', 'red');
                    toggleLoader();
                }
            });
        });

    });
</script>