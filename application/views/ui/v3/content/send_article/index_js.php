<script type="text/javascript">
    $("#submitSendArticle").click(function (event) {
        toggleLoader();
        $inputCaptcha = $.trim($("#inputCaptcha").val());
        $inputCSRF = $.trim($("#inputCSRF").val());
        $inputContentTitle = $.trim($("#inputContentTitle").val());
        $inputContentPhone = $.trim($("#inputContentPhone").val());
        $inputContentAuthor = $.trim($("#inputContentAuthor").val());
        $inputContentEmail = $.trim($("#inputContentEmail").val());

        $inputContentCategoryId = $.trim($("#inputContentCategoryId").val());
        $inputContentDescription = $.trim($("#inputContentDescription").val());
        if (isEmpty($inputContentTitle) || isEmpty($inputContentAuthor) || isEmpty($inputContentDescription) || isEmpty($inputContentCategoryId)) {
            toggleLoader();
            notify('لطفا عنوان و محتوا را کامل کنید', 'red');
        }
        else{
            event.preventDefault();
            var file_data = $('#inputContentAttachment').prop('files')[0];
            var form_data = new FormData();
            form_data.append('file', file_data);
            form_data.append('inputCSRF', $inputCSRF);
            $.ajax({
                url: base_url + "Content/uploadFile",
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                success: function (data) {
                    $result = jQuery.parseJSON(data);
                    if($result['success']){
                        /*'
                            'ContentStatus' => $inputs['inputContentStatus']*/
                        $sendData = {
                            'inputCaptcha': $inputCaptcha,
                            'inputCSRF': $inputCSRF,
                            'inputContentBrief': "",
                            'inputContentTitle': $inputContentTitle,
                            'inputContentDescription': $inputContentDescription,
                            'inputContentImage': "",
                            'inputContentAttachment': $result['fileSrc'],
                            'inputContentAuthor': $inputContentAuthor,
                            'inputContentPhone': $inputContentPhone,
                            'inputContentEmail': $inputContentEmail,
                            'inputContentCategoryId': $inputContentCategoryId
                        }
                        $.ajax({
                            type: 'post',
                            url: base_url + 'Content/doSendArticle',
                            data: $sendData,
                            success: function (data) {
                                toggleLoader();
                                $result = jQuery.parseJSON(data);
                                notify($result['content'], $result['type']);
                                if($result['success']){
                                    setTimeout(function(){
                                        location.reload();
                                    } , 3000);
                                }
                            },
                            error: function (jqXHR, textStatus, errorThrown) {
                                notify('خطای ارتباط با سرور.دقایقی دیگر تلاش کنید', 'red');
                                toggleLoader();
                            }
                        });
                    }
                    else{
                        toggleLoader();
                        $result = jQuery.parseJSON(data);
                        notify($result['content'], $result['type']);
                    }
                },
                error: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                }
            });
        }
    });
</script>