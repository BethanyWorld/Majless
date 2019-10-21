<script type="text/javascript">
    $(document).ready(function () {
        $(document).on('change' , '#inputCandidateBornStateId',function () {
            toggleLoader();
            $inputCandidateStateId = $(this).val();
            $sendData = {'inputStateId' : $inputCandidateStateId}
            $.ajax({
                type: 'post',
                url: base_url + 'Profile/getCitiesByStateId',
                data: $sendData,
                success: function(data){
                    toggleLoader();
                    $result = JSON.parse(data);
                    /*$selectInnerHtml = "";
                    $.each($result , function(index , item){
                        $selectInnerHtml += "<option value='"+item['CityId']+"'>";
                        $selectInnerHtml += item['CityName'];
                        $selectInnerHtml += "</option>";
                    });
                    $("#inputCandidateBornCityId").html($selectInnerHtml);*/

                    $("#inputCandidateBornCityId").html('');
                    $.each($result , function(index , item) {
                        var selectInnerHtml = $('<option />',
                            {
                                "class": "",
                                "value": item['CityId'],
                                "text": item['CityName']

                            });
                        $('#inputCandidateBornCityId').append(selectInnerHtml);

                    });
                },
                error: function(data){
                    toggleLoader();
                    notify('درخواست با خطا مواجه شد', 'red');
                }
            });
        });

        $VeterinaryMedicineDepartment = JSON.parse (
            ' [' +
            '{ "name": "بهداشت و بیماری آبزیان" , "value" : "1" } ,' +
            '{ "name": "بهداشت و مواد غذایی" , "value" : "2"  } ,' +
            '{ "name": "پاتوبیولوژی" , "value" : "3"  }   ,' +
            '{ "name": "دامپزشکی" , "value" : "4"  }  ,' +
            '{ "name": "علوم پایه دامپزشکی" , "value" : "5"  }   ,' +
            '{ "name": "علوم درمانگاهی" , "value" : "6"  }   ,' +
            '{ "name": "میکروبیولوژی" , "value" : "7"  }   ,' +
            '{ "name": "سایر" , "value" : "8"  }   ' +
            ']'
        );
        $foreignlanguages = JSON.parse (
            ' [' +
            '{ "name": "زبان عربی" , "value" : "1" } ,' +
            '{ "name": "زبان های خارجی" , "value" : "2"  } ,' +
            '{ "name": "سایر" , "value" : "3"  }   ' +
            ']'
        );
        $HumanitiesDepartment = JSON.parse (
            ' [' +
            '{ "name": "الهیات و معارف اسلامی" , "value" : "1" } ,' +
            '{ "name": "تاریخ" , "value" : "2"  } ,' +
            '{ "name": "تربیت بدنی و علوم ورزشی" , "value" : "3"  }   ,' +
            '{ "name": "حسابداری" , "value" : "4"  }  ,' +
            '{ "name": "حقوق" , "value" : "5"  }   ,' +
            '{ "name": "روانشناسی" , "value" : "6"  }   ,' +
            '{ "name": "زبان شناسی" , "value" : "7"  }   ,' +
            '{ "name": "زبان شناسی" , "value" : "8"  }   ,' +
            '{ "name": "زبان و ادبیات فارسی" , "value" : "9"  }   ,' +
            '{ "name": "علوم اجتماعی" , "value" : "10"  }   ,' +
            '{ "name": "عاوم اقتصادی" , "value" : "11"  }   ,' +
            '{ "name": "عاوم تربیتی" , "value" : "12"  }   ,' +
            '{ "name": "عاوم جغرافیایی" , "value" : "13"  }   ,' +
            '{ "name": "عاوم دریایی" , "value" : "14"  }   ,' +
            '{ "name": "عاوم سیاسی و روابط بین الملل" , "value" : "15"  }   ,' +
            '{ "name": "فلسفه" , "value" : "16"  }   ,' +
            '{ "name": "کتابداری و اطلاع رسانی" , "value" : "17"  }   ,' +
            '{ "name": "مدیریت" , "value" : "18"  }   ,' +
            '{ "name": "نظامی انتظامی" , "value" : "19"  }   ,' +
            '{ "name": "سایر" , "value" : "20"  }   ' +
            ']'
        );
        $ScienceDepartment = JSON.parse (
            ' [' +
            '{ "name": "آمار" , "value" : "1" } ,' +
            '{ "name": "ریاضی" , "value" : "2"  } ,' +
            '{ "name": "زمین شناسی" , "value" : "3"  }   ,' +
            '{ "name": "زیست شناسی" , "value" : "4"  }  ,' +
            '{ "name": "ژئوفیزیک و هواشناسی" , "value" : "5"  }   ,' +
            '{ "name": "شیمی" , "value" : "6"  }   ,' +
            '{ "name": "علوم دریایی و اقیانوسی" , "value" : "7"  }   ,' +
            '{ "name": "علوم کامپیوتر" , "value" : "8"  }   ,' +
            '{ "name": "فیزیک" , "value" : "9"  }   ,' +
            '{ "name": "محاسبات نرم" , "value" : "10"  }   ,' +
            '{ "name": "سایر" , "value" : "11"  }   ' +
            ']'
        );
        $TechnicalEngineeringDepartment = JSON.parse (
            ' [' +
            '{ "name": "مهندسی انرژی" , "value" : "1" } ,' +
            '{ "name": "مهدنسی ایمنی و بازرسی فنی" , "value" : "2"  } ,' +
            '{ "name": "مهندسی برق" , "value" : "3"  }   ,' +
            '{ "name": "مهندسی پزشکی" , "value" : "4"  }  ,' +
            '{ "name": "مهندسی پلیمر" , "value" : "5"  }   ,' +
            '{ "name": "مهندسی دریا" , "value" : "6"  }   ,' +
            '{ "name": "مهندسی رشته ای" , "value" : "7"  }   ,' +
            '{ "name": "مهندسی شیمی" , "value" : "8"  }   ,' +
            '{ "name": "مهندسی صنایع" , "value" : "9"  }   ,' +
            '{ "name": "مهندسی عمران" , "value" : "10"  }   ,' +
            '{ "name": "مهندسی فناوری اطلاعات (IT)" , "value" : "11"  }   ,' +
            '{ "name": "مهندسی کامپیوتر" , "value" : "12"  }   ,' +
            '{ "name": "مهندسی محیط زیست" , "value" : "13"  }   ,' +
            '{ "name": "مهندسی معدن" , "value" : "14"  }   ,' +
            '{ "name": "مهندسی مکانیک" , "value" : "15"  }   ,' +
            '{ "name": "مهدنسی مواد" , "value" : "16"  }   ,' +
            '{ "name": "مهندسی نانوفناوری" , "value" : "17"  }   ,' +
            '{ "name": "مهدنسی نساجی" , "value" : "18"  }   ,' +
            '{ "name": "مهدنسی نفت" , "value" : "19"  }   ,' +
            '{ "name": "مهدنسی هسته ای" , "value" : "20"  }   ,' +
            '{ "name": "مهدنسی هوافضا" , "value" : "21"  }   ,' +
            '{ "name": "سایر" , "value" : "22"  }   ' +
            ']'
        );
        $ArtDepartment = JSON.parse (
            ' [' +
            '{ "name": "پژوهش هنری" , "value" : "1" } ,' +
            '{ "name": "صنایع دستی" , "value" : "2"  } ,' +
            '{ "name": "فرش" , "value" : "3"  }   ,' +
            '{ "name": "مرمت" , "value" : "4"  }  ,' +
            '{ "name": "معماری" , "value" : "5"  }   ,' +
            '{ "name": "موزه" , "value" : "6"  }   ,' +
            '{ "name": "موسیقی" , "value" : "7"  }   ,' +
            '{ "name": "هنرهای تجسمی" , "value" : "8"  }   ,' +
            '{ "name": "هنرهای کاربردی" , "value" : "9"  }   ,' +
            '{ "name": "هنرهای نمایشی و سینمایی" , "value" : "10"  }   ,' +
            '{ "name": "سایر" , "value" : "11"  }   ' +
            ']'
        );
        $medicalDepartment = JSON.parse (
            ' [' +
            '{ "name": "پرستاری" , "value" : "1" } ,' +
            '{ "name": "پزشکی" , "value" : "2"  } ,' +
            '{ "name": "پیراپزشکی" , "value" : "3"  }   ,' +
            '{ "name": "توانبخشی" , "value" : "4"  }  ,' +
            '{ "name": "داروسازی" , "value" : "5"  }   ,' +
            '{ "name": "دندانپزشکی" , "value" : "6"  }   ,' +
            '{ "name": "سلامت,بهداشت و تغذیه" , "value" : "7"  }   ,' +
            '{ "name": "فناوری های نوین پزشکی" , "value" : "8"  }   ,' +
            '{ "name": "مامایی" , "value" : "9"  }   ,' +
            '{ "name": "مدیزیت و اطلاع رسانی پزشکی" , "value" : "10"  }   ,' +
            '{ "name": "سایر" , "value" : "11"  }   ' +
            ']'
        );
        $AgricultureNaturalResourcesDepartment = JSON.parse (
            ' [' +
            '{ "name": "آب" , "value" : "1" } ,' +
            '{ "name": "اقتصاد کشاورزی و مدیریت کشاورزی" , "value" : "2"  } ,' +
            '{ "name": "بیوتکنولوژی کشاورزی" , "value" : "3"  }   ,' +
            '{ "name": "ترویج و آموزش کشاورزی" , "value" : "4"  }  ,' +
            '{ "name": "جنگلداری" , "value" : "5"  }   ,' +
            '{ "name": "چوب" , "value" : "6"  }   ,' +
            '{ "name": "دامپروری" , "value" : "7"  }   ,' +
            '{ "name": "زراعت و اصلاح نباتات" , "value" : "8"  }   ,' +
            '{ "name": "شیلات" , "value" : "9"  }   ,' +
            '{ "name": "علوم باغبانی" , "value" : "10"  }   ,' +
            '{ "name": "علوم خاک" , "value" : "11"  }   ,' +
            '{ "name": "گیاه پزشکی" , "value" : "12"  }   ,' +
            '{ "name": "ماشین های کشاورزی" , "value" : "13"  }   ,' +
            '{ "name": "محیط زیست" , "value" : "14"  }   ,' +
            '{ "name": "مدیریت بیابان و مرتع و آبخیزداری" , "value" : "15"  }   ,' +
            '{ "name": "مواد غذایی" , "value" : "15"  }   ,' +
            '{ "name": "سایر" , "value" : "11"  }   ' +
            ']'
        );

        $(document).on('change', '#inputCandidateGrade', function () {

            $inputCandidateGrade = $('#inputCandidateGrade').val();
            $inputCandidateUniversityLevelType = $("#inputCandidateUniversityLevelType").val();

            if($inputCandidateGrade !== "1" && $inputCandidateGrade !== "2" && $inputCandidateGrade !== "3") {

                $('.CandidateLevelType').css('visibility' , 'visible');
                $('.CandidateUniversityName').css('visibility' , 'visible');
                $('.CandidateDepartment').css('visibility' , 'visible');
                $('.CandidateMajor').css('visibility' , 'visible');
                $('.Radio-Buttons').css('visibility' , 'visible');
            }
            else{
                $('.CandidateLevelType').css('visibility' , 'hidden');
                $('.CandidateUniversityName').css('visibility' , 'hidden');
                $('.CandidateDepartment').css('visibility' , 'hidden');
                $('.CandidateMajor').css('visibility' , 'hidden');
                $('.Radio-Buttons').css('visibility' , 'hidden');


            }

            if($inputCandidateGrade !== "1" && $inputCandidateGrade !== "2" && $inputCandidateGrade !== "3" && $inputCandidateGrade !== "4" && $inputCandidateGrade !== "5") {

                $('#GradeNotify').css('visibility' , 'hidden');
            }
            else{
                $('#GradeNotify').css('visibility' , 'visible');
            }

            if($inputCandidateGrade === "10" || $inputCandidateGrade === "11") {

                $('#GradeNotify').css('visibility' , 'visible');
            }
            else{
                $('#GradeNotify').removeAttr('visibility' , 'hidden');
            }

            if($inputCandidateGrade === "10" || $inputCandidateGrade === "11" || $inputCandidateGrade === "12" || $inputCandidateGrade === "13") {

                $('#inputCandidateUniversityLevelType').attr('disabled' , 'disabled');
                $('#inputCandidateUniversityLevelType').val('SeminaryLevelType');
                $('.CandidateDepartment').css('display' , 'none');
                $('.CandidateMajor').css('display' , 'none');
            }
            else{
                $('#inputCandidateUniversityLevelType').removeAttr('disabled');
                $('.CandidateDepartment').css('display' , 'block');
                $('.CandidateMajor').css('display' , 'block');
            }

            if($inputCandidateUniversityLevelType === "SeminaryLevelType") {
                $('.CandidateDepartment').css('visibility' , 'hidden');
                $('.CandidateMajor').css('visibility' , 'hidden');
            }
            else{
                $('.CandidateDepartment').css('visibility' , 'visible');
                $('.CandidateMajor').css('visibility' , 'visible');
            }

            if($inputCandidateGrade === "1" || $inputCandidateGrade === "2" || $inputCandidateGrade === "3") {

                $('.CandidateDepartment').css('visibility' , 'hidden');
                $('.CandidateMajor').css('visibility' , 'hidden');

            }
            else{
                $('.CandidateDepartment').css('visibility' , 'visible');
                $('.CandidateMajor').css('visibility' , 'visible');

            }

            if($inputCandidateGrade === "3") {
                debugger;
                $('.CandidateLevelType').css('display' , 'none');
                $('.CandidateeduMajor').css('display' , 'block');
            }
            else{
                $('.CandidateLevelType').css('display' , 'block');
                $('.CandidateeduMajor').css('display' , 'none');
            }
        });

        $(document).on('change', '#inputCandidateUniversityLevelType', function () {
            $inputCandidateUniversityLevelType = $('#inputCandidateUniversityLevelType').val();
            if($inputCandidateUniversityLevelType === "SeminaryLevelType") {
                $('.CandidateDepartment').css('visibility' , 'hidden');
                $('.CandidateMajor').css('visibility' , 'hidden');
            }
            else {
                $('.CandidateDepartment').css('visibility' , 'visible');
                $('.CandidateMajor').css('visibility' , 'visible');
            }

            if($inputCandidateUniversityLevelType === "Others") {
                $('.Change-UniversityName').html('نام مرکز آموزشی');
            }
            else {
                $('.Change-UniversityName').html('نام دانشگاه');
            }
        });

        $(document).on('change', '#inputCandidateDepartment', function () {
            $inputCandidateDepartment = $('#inputCandidateDepartment').val();
            if($inputCandidateDepartment === "VeterinaryMedicineDepartment"){
                debugger;
                fillMajorDropDown($VeterinaryMedicineDepartment);
            }
            if($inputCandidateDepartment === "foreignlanguagesDepartment"){
                fillMajorDropDown($foreignlanguages);
            }

            if($inputCandidateDepartment === "HumanitiesDepartment"){
                fillMajorDropDown($HumanitiesDepartment);
            }

            if($inputCandidateDepartment === "ScienceDepartment"){
                fillMajorDropDown($ScienceDepartment);
            }

            if($inputCandidateDepartment === "TechnicalEngineeringDepartment"){
                fillMajorDropDown($TechnicalEngineeringDepartment);
            }

            if($inputCandidateDepartment === "ArtDepartment"){
                fillMajorDropDown($ArtDepartment);
            }

            if($inputCandidateDepartment === "medicalDepartment"){
                fillMajorDropDown($medicalDepartment);
            }

            if($inputCandidateDepartment === "AgricultureNaturalResourcesDepartment"){
                fillMajorDropDown($AgricultureNaturalResourcesDepartment);
            }
        });

        function fillMajorDropDown(data) {
            $("#inputCandidateMajor").html('');
            for($i=0;$i<data.length;$i++){
                $tempOption = "<option value='"+data[$i]['value']+"'> "+ data[$i]['name']+"</option>";
                $("#inputCandidateMajor").append($tempOption);
            }
        }

    });

</script>