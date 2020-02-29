<script type="text/javascript">
    $(document).ready(function () {

        /* Update User Info */
        $("#addSkill").click(function () {
            $inputSkillTitle = $.trim($("#inputSkillTitle").val());
            toggleLoader();
            $sendData = {
                'inputSkillTitle': $inputSkillTitle,
                'IsActive': 1
            }
            $.ajax({
                type: 'post',
                url: base_url + 'Utilities/doAddSkill',
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