<?php $ci =& get_instance(); ?>
<script type="text/javascript">

    function toEnglishDigits(str) {
        var e = '۰'.charCodeAt(0);
        str = str.replace(/[۰-۹]/g, function (t) {
            return t.charCodeAt(0) - e;
        });
        e = '٠'.charCodeAt(0);
        str = str.replace(/[٠-٩]/g, function (t) {
            return t.charCodeAt(0) - e;
        });
        return str;
    }

    $(document).ready(function(){
        $("#searchButton").click(function () {
            toggleLoader();
            /* Get Api Generated  Address */
            $.ajax({
                type: 'post',
                url: base_url + 'SignUpReport/doExportReport',
                success: function (data) {
                    toggleLoader();
                    var a = document.createElement("a");
                    a.href = "<?php echo base_url(); ?>"+ 'Export.xlsx';
                    document.body.appendChild(a);
                    a.click();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify('اطلاعات نمایندگی تکراری ست', 'red');
                    toggleLoader();
                }
            });
        });
    });

    Morris.Donut({
        element: 'totaluser',
        data: [
            {label: "نامزد انتخاباتی", value: 12 ,color:"rgb(175,22,89)"},
            {label: "حامی", value: 30 ,color:"rgb(239,108,2)"},
            {label: "نخبه", value: 20 ,color:"rgb(244,67,54)"}
        ]
    });
    Morris.Donut({
        element: 'Gender',
        data: [
            {label: "مرد", value: 12 ,color:"rgb(175,22,89)"},

            {label: "زن", value: 20 ,color:"rgb(244,67,54)"}
        ]
    });
    Morris.Donut({
        element: 'TestStatus',
        data: [
            {label: "آزمون دهندگان مرحله1", value: 12 ,color:"rgb(175,22,89)"},
            {label: "آزمون دهندگان مرحله2", value: 20 ,color:"rgb(239,108,2)"},
            {label: "آزمون دهندگان کانون ارزیابی", value: 20 ,color:"rgb(244,67,54)"}
        ]
    });
    Morris.Donut({
        element: 'Religion',
        data: [
            {label: "اسلام-شیعه", value: 80 ,color:"rgb(175,22,89)"},
            {label: "نامشخص", value: 20 ,color:"rgb(239,108,2)"},
            {label: "اسلام-سنی", value: 20 ,color:"rgb(244,67,54)"},
            {label: "مسیحی", value: 20 ,color:"#ffcc80"},
            {label: "یهودی", value: 20 ,color:"#ec407a"},
            {label: "زرشت", value: 20 ,color:"#ffcdd2"},
            {label: "سایر", value: 20 ,color:"#ffd740"}
        ]
    });

    Morris.Donut({
        element: 'degreeOfEducation',
        data: [
            {label: "زیردیپلم", value: 80 ,color:"rgb(175,22,89)"},
            {label: "دیپلم", value: 20 ,color:"rgb(239,108,2)"},
            {label: "کاردانی", value: 20 ,color:"rgb(244,67,54)"},
            {label: "کارشناسی", value: 20 ,color:"#ffcc80"},
            {label: "کارشناسی ارشد", value: 20 ,color:"#ec407a"},
            {label: "دکتری حرفه ای", value: 20 ,color:"#ffcdd2"},
            {label: "دکتری تخصصی", value: 20 ,color:"#ffd740"},
            {label: "فوق دکتری", value: 80 ,color:"rgb(175,22,89)"},
            {label: "حوزه سطح یک", value: 20 ,color:"rgb(239,108,2)"},
            {label: "حوزه سطح دو", value: 20 ,color:"rgb(244,67,54)"},
            {label: "حوزه سطح سه", value: 20 ,color:"#ffcc80"},
            {label: "حوزه سطح چهار", value: 20 ,color:"#ec407a"},
        ]
    });

    Morris.Donut({
        element: 'Condition',
        data: [
            {label: "ثبت نام اولیه", value: 80 ,color:"rgb(175,22,89)"},
            {label: "تکمیل رزومه", value: 20 ,color:"rgb(239,108,2)"},
            {label: "تایید رزومه", value: 20 ,color:"rgb(244,67,54)"},
            {label: "رد رزومه", value: 20 ,color:"#ffcc80"},
            {label: "عدم احراز سایر شرایط", value: 20 ,color:"#ec407a"},
            {label: "در انتظار نمره دهی", value: 20 ,color:"#ffcdd2"},
            {label: "امتیاز بندی رزومه", value: 20 ,color:"#ffd740"},
            {label: "آزمون مرحله اول", value: 80 ,color:"rgb(175,22,89)"},
            {label: "عدم موفقیت در آزمون مرحله اول", value: 20 ,color:"rgb(239,108,2)"},
            {label: "آزمون مرحله دوم", value: 20 ,color:"rgb(244,67,54)"},
            {label: "عدم موفقیت در آزمون مرحله دوم", value: 20 ,color:"#ffcc80"},
            {label: "کانون ارزیابی", value: 20 ,color:"#ec407a"},
            {label: "تایید نهایی", value: 20 ,color:"#ec407a"},
        ]
    });



</script>