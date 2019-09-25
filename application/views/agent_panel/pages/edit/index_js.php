<script type="text/javascript">
    $(document).ready(function () {
        CKEDITOR.replace('inputPageContent');
        $("#editPage").click(function (event) {
            toggleLoader();
            $inputPageId = $.trim($("#inputPageId").val());
            $inputPageTitle = $.trim($("#inputPageTitle").val());
            $inputPageContent = CKEDITOR.instances.inputPageContent.getData();
            if (isEmpty($inputPageTitle) || isEmpty($inputPageContent)) {
                toggleLoader();
                notify('لطفا عنوان و محتوای صفحه را کامل کنید', 'red');
            }
            else{

                $sendData = {
                    'inputPageId': $inputPageId,
                    'inputPageTitle': $inputPageTitle,
                    'inputPageContent': $inputPageContent
                }
                $.ajax({
                    type: 'post',
                    url: base_url + 'Pages/doEditPage',
                    data: $sendData,
                    success: function (data) {
                        toggleLoader();
                        $result = jQuery.parseJSON(data);
                        notify($result['content'], $result['type']);
                        redirectPage($result['redirect']);
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        notify('خطای ارتباط با سرور.دقایقی دیگر تلاش کنید', 'red');
                        toggleLoader();
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
                        title: "عنوان صفحه",
                        content: "عنوان صفحه را وارد کنید"
                    },
                    {
                        element: "#step3",
                        title: "محتوای صفحه",
                        content: "محتوای مرتبط با صفحه را وارد کنید"
                    }
                ]
            });
            tour.init();
            tour.start();
        });

    });
</script>