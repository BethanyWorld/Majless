<script type="text/javascript">
    $(document).ready(function () {

        $("#editExam").click(function (event) {
            toggleLoader();
            $inputExamId = $.trim($("#inputExamId").val());
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
                    'inputExamId': $inputExamId,
                    'inputExamPlaceId': $inputExamPlaceId,
                    'inputExamType': $inputExamType,
                    'inputExamCapacity': $inputExamCapacity,
                    'inputExamDate': $inputExamDate,
                    'inputExamTime': $inputExamTime,
                }
                $.ajax({
                    type: 'post',
                    url: base_url + 'Exams/doEdit',
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
                        title: "عنوان آزمون",
                        content: "عنوانی برای آزمون وارد کنید"
                    },
                    {
                        element: "#step2",
                        title: "نوع آزمون",
                        content: "نوع آزمون را انتخاب کنید"
                    },
                    {
                        element: "#step3",
                        title: "ظرفیت محل آزمون",
                        content: "ظرفیت آزمون را وارد کنید"
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