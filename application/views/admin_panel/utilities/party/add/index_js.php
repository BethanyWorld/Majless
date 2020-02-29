<script type="text/javascript">
    $(document).ready(function () {

        /* Update User Info */
        $("#addParty").click(function () {
            $inputPartyTitle = $.trim($("#inputPartyTitle").val());
            toggleLoader();
            $sendData = {
                'inputPartyTitle': $inputPartyTitle
            }
            $.ajax({
                type: 'post',
                url: base_url + 'Utilities/doAddParty',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify('اطلاعات نمایندگی تکراری ست', 'red');
                    toggleLoader();
                }
            });
        });
        /* End Update User Info */

    });
</script>