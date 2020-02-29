<script type="text/javascript">
    $(document).ready(function () {
        /* Update User Info */
        $("#editParty").click(function () {
            $inputPartyId = $.trim($("#inputPartyId").val());
            $inputPartyTitle = $.trim($("#inputPartyTitle").val());
            toggleLoader();
            $sendData = {
                'inputPartyId': $inputPartyId,
                'inputPartyTitle': $inputPartyTitle
            }
            $.ajax({
                type: 'post',
                url: base_url + 'Utilities/doEditParty',
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