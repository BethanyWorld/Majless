<script type="text/javascript">
    $(document).ready(function () {
        /* Update User Info */
        $("#editState").click(function () {
            $inputStateId = $.trim($("#inputStateId").val());
            $inputStateName = $.trim($("#inputStateName").val());
            /* Validation */
            if (hasNumber($inputStateName)) {
                notify('عنوان استان نامعتبر است', 'red');
                return false;
            }
            /* End Validation */
            toggleLoader();
            $sendData = {
                'inputStateId': $inputStateId,
                'inputStateName': $inputStateName
            }
            $.ajax({
                type: 'post',
                url: base_url + 'States/doEdit',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                    if($result['success']){
                        setTimeout(function () {
                            window.history.back();
                        } , 1500);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify('اطلاعات استان تکراری ست', 'red');
                    toggleLoader();
                }
            });
        });
        /* End Update User Info */
    });
</script>