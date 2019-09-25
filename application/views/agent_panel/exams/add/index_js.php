<script type="text/javascript">
    $(document).ready(function () {

        $("#addExam").click(function (event) {
            toggleLoader();
            $inputExamPlaceId = $.trim($("#inputExamPlaceId").val());
            $inputExamType = $.trim($("#inputExamType").val());
            $inputExamCapacity = $.trim($("#inputExamCapacity").val());
            $inputExamDate = $.trim($("#inputExamDate").val());
            $inputExamTime = $.trim($("#inputExamTime").val());
            if (isEmpty($inputExamPlaceId) || isEmpty($inputExamType) || isEmpty($inputExamCapacity) || isEmpty($inputExamDate) || isEmpty($inputExamTime)) {
                toggleLoader();
                notify('تمامی موارد را کامل کنید', 'red');
            }
            else {
                $sendData = {
                    'inputExamPlaceId': $inputExamPlaceId,
                    'inputExamType': $inputExamType,
                    'inputExamCapacity': $inputExamCapacity,
                    'inputExamDate': $inputExamDate,
                    'inputExamTime': $inputExamTime,
                }
                $.ajax({
                    type: 'post',
                    url: base_url + 'Exams/doAdd',
                    data: $sendData,
                    success: function (data) {
                        toggleLoader();
                        $result = jQuery.parseJSON(data);
                        notify($result['content'], $result['type']);
                        if ($result['success']) {
                            redirectPage($result['redirect']);
                        }
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


        $(function () {
            $(".date").persianDatepicker();
            $('.time').mask('00:00');
        });


    });
</script>