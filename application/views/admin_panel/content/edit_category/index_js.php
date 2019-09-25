<script type="text/javascript">
    $(document).ready(function () {
        /* Update User Info */
        $("#editCategory").click(function () {
            $inputCategoryId = $.trim($("#inputCategoryId").val());
            $inputCategoryTitle = $.trim($("#inputCategoryTitle").val());
            /* Validation */
            if ($inputCategoryTitle == "") {
                notify('عنوان دسته بندی نامعتبر است', 'red');
                return false;
            }
            if (!$.isNumeric($inputCategoryId)) {
                notify('شناسه نامعتبر است', 'red');
                return false;
            }
            /* End Validation */
            toggleLoader();
            $sendData = {
                'inputCategoryId': $inputCategoryId,
                'inputCategoryTitle': $inputCategoryTitle
            }
            $.ajax({
                type: 'post',
                url: base_url + 'Content/doEditCategory',
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