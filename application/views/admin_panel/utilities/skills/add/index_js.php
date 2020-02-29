<script type="text/javascript">
    $(document).ready(function () {

        /* Update User Info */
        $("#addUniversity").click(function () {
            $inputUniversityTitle = $.trim($("#inputUniversityTitle").val());
            toggleLoader();
            $sendData = {
                'inputUniversityTitle': $inputUniversityTitle,
                'IsActive': 1
            }
            $.ajax({
                type: 'post',
                url: base_url + 'Utilities/doAddUniversity',
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