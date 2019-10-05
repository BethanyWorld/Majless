<script type="text/javascript">
    $(document).ready(function () {

        $("#addExamPlace").click(function (event) {
            toggleLoader();
            $inputExamPlaceTitle = $.trim($("#inputExamPlaceTitle").val());
            $inputExamPlaceDefaultCapacity = $.trim($("#inputExamPlaceDefaultCapacity").val());
            $inputExamPlaceAddress = $.trim($("#inputExamPlaceAddress").val());
            if (isEmpty($inputExamPlaceTitle) || isEmpty($inputExamPlaceDefaultCapacity)|| isEmpty($inputExamPlaceAddress)) {
                toggleLoader();
                notify('لطفا عنوان، ظرقیت و آدرس محل آزمون را کامل کنید', 'red');
            }
            else{
                event.preventDefault();
                var file_data = $('#inputExamPlaceMapImage').prop('files')[0];
                var form_data = new FormData();
                form_data.append('file', file_data);
                $.ajax({
                    url: base_url + "ExamPlaces/uploadFile",
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
                                'inputExamPlaceTitle': $inputExamPlaceTitle,
                                'inputExamPlaceDefaultCapacity': $inputExamPlaceDefaultCapacity,
                                'inputExamPlaceAddress': $inputExamPlaceAddress,
                                'inputExamPlaceMapImage': $result['fileSrc']
                            }
                            $.ajax({
                                type: 'post',
                                url: base_url + 'ExamPlaces/doAdd',
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
                        title: "عنوان محل",
                        content: "عنوانی برای محل آزمون وارد کنید"
                    },
                    {
                        element: "#step2",
                        title: "تصویر خبر",
                        content: "تصویر مرتبط با محل آزمون را انتخاب کنید.فقط تصاویر با فرمت jpg,png معتبر هستند"
                    },
                    {
                        element: "#step3",
                        title: "ظرفیت محل آزمون",
                        content: "ظرفیت پیش فرض محل آزمون را وارد کنید.این ظرفیت به ازای هر سانس قابل تغییر است"
                    }
                ]
            });
            tour.init();
            tour.start();
        });


    });
</script>