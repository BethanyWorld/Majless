<script type="text/javascript">
    $(document).ready(function () {
        CKEDITOR.replace('inputPostContent');
        $("#addPost").click(function (event) {
            toggleLoader();
            $inputPostTitle = $.trim($("#inputPostTitle").val());
            $inputPostContent = CKEDITOR.instances.inputPostContent.getData();
            $inputCandidatePostIds = [];
            $("input[name='inputCandidateIds']:checked").each(function(){
                $inputCandidatePostIds.push($(this).val());
            });
            if (isEmpty($inputPostTitle) || isEmpty($inputPostContent)) {
                toggleLoader();
                notify('لطفا عنوان و محتوای خبر را کامل کنید', 'red');
            }
            else{
                event.preventDefault();
                var file_data = $('#inputPostImage').prop('files')[0];
                var form_data = new FormData();
                form_data.append('file', file_data);
                $.ajax({
                    url: base_url + "Posts/uploadFile",
                    dataType: 'text',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,
                    type: 'post',
                    success: function (data) {
                        $result = jQuery.parseJSON(data);
                        if($result['success']){
                            $sendData = {
                                'inputPostTitle': $inputPostTitle,
                                'inputPostContent': $inputPostContent,
                                'inputCandidatePostIds': JSON.stringify($inputCandidatePostIds),
                                'inputPostImage': $result['fileSrc']
                            }
                            $.ajax({
                                type: 'post',
                                url: base_url + 'Posts/doAddPost',
                                data: $sendData,
                                success: function (data) {
                                    toggleLoader();
                                    $result = jQuery.parseJSON(data);
                                    notify($result['content'], $result['type']);
                                    if($result['success']){
                                        redirectPage($result['redirect']);
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
        $(".guide-button").click(function () {
            var tour = new Tour({
                storage: false,
                template: "<div class='popover tour'> <div class='arrow'></div><h3 class='popover-title'></h3> <div class='popover-content'></div><div class='popover-navigation'> <button class='btn btn-default' data-role='prev'>« قبلی</button> <span data-role='separator'>|</span> <button class='btn btn-default' data-role='next'>بعدی »</button> </div><button class='btn btn-default' data-role='end'>بستن راهنما</button> </div>",
                steps: [
                    {
                        element: "#step1",
                        title: "عنوان خبر",
                        content: "عنوان خبر را وارد کنید"
                    },
                    {
                        element: "#step2",
                        title: "تصویر خبر",
                        content: "تصویر مرتبط با خبر را انتخاب کنید.فقط تصاویر با فرمت jpg,png معتبر هستند"
                    },
                    {
                        element: "#step3",
                        title: "محتوای خبر",
                        content: "محتوای مرتبط با خبر را وارد کنید"
                    }
                ]
            });
            tour.init();
            tour.start();
        });
    });
</script>