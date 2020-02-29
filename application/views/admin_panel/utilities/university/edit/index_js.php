<script type="text/javascript">
    $(document).ready(function () {
        /* Update User Info */
        $("#editUniversity").click(function () {
            $inputUniversityId = $.trim($("#inputUniversityId").val());
            $inputUniversityTitle = $.trim($("#inputUniversityTitle").val());
            $inputUniversityActivationStatus = $("input[name='UniversityActivationStatus']:checked").val();
            toggleLoader();
            $sendData = {
                'inputUniversityId': $inputUniversityId,
                'inputUniversityTitle': $inputUniversityTitle,
                'IsActive': $inputUniversityActivationStatus
            }
            $.ajax({
                type: 'post',
                url: base_url + 'Utilities/doEditUniversity',
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