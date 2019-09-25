<script type="text/javascript">
    $(document).ready(function () {

        $("#changeReportAbuseVisitToVisited").click(function () {
            $inputContactRowId = $.trim($("#inputContactRowId").val());
            toggleLoader();
            $sendData = {
                'inputReportAbuseReportId': $inputContactRowId,
                'inputReportAbuseVisited': 1
            }
            $.ajax({
                type: 'post',
                url: base_url + 'ReportAbuse/doChangeVisitState',
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
        $("#changeReportAbuseVisitToUnVisited").click(function () {
            $inputContactRowId = $.trim($("#inputContactRowId").val());
            toggleLoader();
            $sendData = {
                'inputReportAbuseReportId': $inputContactRowId,
                'inputReportAbuseVisited': 0
            }
            $.ajax({
                type: 'post',
                url: base_url + 'ReportAbuse/doChangeVisitState',
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