<script type="text/javascript">
    $(document).ready(function () {
        /* Update User Info */
        $("#editUniversity").click(function () {
            $inputSkillId = $.trim($("#inputSkillId").val());
            $inputSkillTitle = $.trim($("#inputSkillTitle").val());
            $SkillActivationStatus = $("input[name='SkillActivationStatus']:checked").val();
            toggleLoader();
            $sendData = {
                'inputSkillId': $inputSkillId,
                'inputSkillTitle': $inputSkillTitle,
                'IsActive': $SkillActivationStatus
            }
            $.ajax({
                type: 'post',
                url: base_url + 'Utilities/doEditSkill',
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