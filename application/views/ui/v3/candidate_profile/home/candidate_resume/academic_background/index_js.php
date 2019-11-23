<script type="text/javascript">
    $(document).ready(function () {
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
        $(document).on('change', '[name="inputCandidateGrade"]', function () {

            $parentId = $(this).eq(0).parents('div.list-group-item').eq(0).attr('id');
            $parentDom = "#" + $parentId + " ";
            $inputCandidateGrade = $(this).val();
            $inputCandidateUniversityLevelType = $($parentDom + "[name='inputCandidateUniversityLevelType']").eq(0).val();

            /* Added By ME */
            $(':input',$parentDom).not(':button, :submit, :reset, :hidden, :checkbox, :radio , select[name="inputCandidateGrade"]').val('').prop('checked', false).prop('selected', false);

            if($inputCandidateGrade !== "" && $inputCandidateGrade !== "ZirDiplom" && $inputCandidateGrade !== "Diplom") {
                $($parentDom + '.CandidateLevelType').css('display' , 'block');
                $($parentDom + '.CandidateUniversityName').css('display' , 'block');
                $($parentDom + '.CandidateDepartment').css('display' , 'block');
                $($parentDom + '.CandidateMajor').css('display' , 'block');
                $($parentDom + '.Radio-Buttons').css('display' , 'block');
            }
            else{
                $($parentDom + '.CandidateLevelType').css('display' , 'none');
                $($parentDom + '.CandidateUniversityName').css('display' , 'none');
                $($parentDom + '.CandidateDepartment').css('display' , 'none');
                $($parentDom + '.CandidateMajor').css('display' , 'none');
                $($parentDom + '.Radio-Buttons').css('display' , 'none');
            }

            if($inputCandidateGrade !== "" && $inputCandidateGrade !== "ZirDiplom" && $inputCandidateGrade !== "Diplom" && $inputCandidateGrade !== "Kardani" && $inputCandidateGrade !== "Karshenasi") {
                $($parentDom + '.GradeNotify').css('display' , 'none');
            }
            else{
                $($parentDom + '.GradeNotify').css('display' , 'block');
            }

            if($inputCandidateGrade === "Hozeh1" || $inputCandidateGrade === "Hozeh2") {

                $($parentDom + '.GradeNotify').css('display' , 'block');
            }
            else{
                $($parentDom + '.GradeNotify').removeAttr('display' , 'none');
            }

            if($inputCandidateUniversityLevelType === "SeminaryLevelType") {
                $($parentDom + '.CandidateDepartment').css('display' , 'none');
                $($parentDom + '.CandidateMajor').css('display' , 'none');
            }
            else{
                $($parentDom + '.CandidateDepartment').css('display' , 'block');
                $($parentDom + '.CandidateMajor').css('display' , 'block');
            }

            if($inputCandidateGrade === "" || $inputCandidateGrade === "ZirDiplom" || $inputCandidateGrade === "Diplom") {
                $($parentDom + '.CandidateDepartment').css('display' , 'none');
                $($parentDom + '.CandidateMajor').css('display' , 'none');
            }
            else{
                $($parentDom + '.CandidateDepartment').css('display' , 'block');
                $($parentDom + '.CandidateMajor').css('display' , 'block');

            }

            if($inputCandidateGrade === "Diplom") {
                $($parentDom + '.CandidateLevelType').css('display' , 'none');
                $($parentDom + '.CandidateeduMajor').css('display' , 'block');
            }
            else{
                $($parentDom + '.CandidateLevelType').css('display' , 'block');
                $($parentDom + '.CandidateeduMajor').css('display' , 'none');
            }

            if($inputCandidateGrade == 'ZirDiplom' ) {
                $($parentDom + '.CandidateLevelType').css('display' , 'none');
                $($parentDom + '.CandidateeduMajor').css('display' , 'none');
                $($parentDom + '.CandidateDepartment').css('display' , 'none');
                $($parentDom + '.CandidateMajor').css('display' , 'none');
            }

            if($inputCandidateGrade === "Hozeh1" || $inputCandidateGrade === "Hozeh2" || $inputCandidateGrade === "Hozeh3" || $inputCandidateGrade === "Hozeh4") {
                $($parentDom + '[name="inputCandidateUniversityLevelType"]').attr('readonly' , 'readonly').val('SeminaryLevelType');
                $($parentDom + '.CandidateDepartment').css('display' , 'none');
                $($parentDom + '.CandidateMajor').css('display' , 'none');
                $($parentDom + '.CandidateLevelType').css('pointerEvents' , 'none');
            }
            else{
                $($parentDom + '[name="inputCandidateUniversityLevelType"]').removeAttr('readonly');
                $($parentDom + '.CandidateLevelType').css('pointerEvents' , 'auto');
            }
        });
        $(document).on('change', '[name="inputCandidateUniversityLevelType"]', function () {
            $parentId = $(this).eq(0).parents('div.list-group-item').eq(0).attr('id');
            $parentDom = "#" + $parentId + " ";
            $inputCandidateUniversityLevelType = $(this).val();
            if($inputCandidateUniversityLevelType === "SeminaryLevelType") {
                $($parentDom + '.CandidateDepartment').css('display' , 'none');
                $($parentDom + '.CandidateMajor').css('display' , 'none');
            }
            else {
                $($parentDom + '.CandidateDepartment').css('display' , 'block');
                $($parentDom + '.CandidateMajor').css('display' , 'block');
            }
            if($inputCandidateUniversityLevelType === "Others") {
                $($parentDom + '.Change-UniversityName').html('نام مرکز آموزشی');
            }
            else {
                $($parentDom + '.Change-UniversityName').html('نام دانشگاه');
            }
            if($inputCandidateUniversityLevelType === "") {
                $($parentDom + '.CandidateDepartment').css('display' , 'none');
                $($parentDom + '.CandidateMajor').css('display' , 'none');
            }
        });
        $(document).on('change', '[name="inputCandidateDepartment"]', function () {
            $parentId = $(this).eq(0).parents('div.list-group-item').eq(0).attr('id');
            $parentDom = "#" + $parentId + " ";
            $inputCandidateDepartment = $(this).val();
            if($inputCandidateDepartment === "VeterinaryMedicineDepartment"){
                fillMajorDropDown($parentDom , $VeterinaryMedicineDepartment);
            }
            if($inputCandidateDepartment === "ForeignLanguagesDepartment"){
                fillMajorDropDown($parentDom , $foreignlanguages);
            }
            if($inputCandidateDepartment === "HumanitiesDepartment"){
                fillMajorDropDown($parentDom , $HumanitiesDepartment);
            }
            if($inputCandidateDepartment === "ScienceDepartment"){
                fillMajorDropDown($parentDom , $ScienceDepartment);
            }
            if($inputCandidateDepartment === "TechnicalEngineeringDepartment"){
                fillMajorDropDown($parentDom , $TechnicalEngineeringDepartment);
            }
            if($inputCandidateDepartment === "ArtDepartment"){
                fillMajorDropDown($parentDom , $ArtDepartment);
            }
            if($inputCandidateDepartment === "MedicalDepartment"){
                fillMajorDropDown($parentDom , $medicalDepartment);
            }
            if($inputCandidateDepartment === "AgricultureNaturalResourcesDepartment"){
                fillMajorDropDown($parentDom , $AgricultureNaturalResourcesDepartment);
            }
        });
        $(document).on('change', '[name="inputCandidateSchoolMajor"]', function (){
           if($(this).val() !== '' && $(this).val() !== undefined){
               $parentId = $(this).eq(0).parents('div.list-group-item').eq(0).attr('id');
               $parentDom = "#" + $parentId + " ";
               $inputCandidateSchoolMajor = $(this).val();
               $($parentDom + '.CandidateDepartment').css('display' , 'none');
               $($parentDom + '.CandidateMajor').css('display' , 'none');
           }
        });

        /* Add By ME */
        $('[name="inputCandidateGrade"]').change();
        setTimeout(function(){$('[name="inputCandidateUniversityLevelType"]').change();} , 500);
        setTimeout(function(){$('[name="inputCandidateDepartment"]').change();} , 1000);
        setTimeout(function(){$('[name="inputCandidateSchoolMajor"]').change();} , 1500);

        function fillMajorDropDown($id , data) {
            $selectedMajor = $($id + "[name='inputCandidateDepartment']").data('selected-major');
            $($id + "[name='inputCandidateMajor']").html('');
            $tempOption = "<option selected value=''>-- انتخاب کنید --</option>";
            $($id + "[name='inputCandidateMajor']").append($tempOption);
            for($i=0;$i<data.length;$i++){
                if($selectedMajor == data[$i]['value']){
                    $tempOption = "<option selected value='"+data[$i]['value']+"'> "+ data[$i]['name']+"</option>";
                }
                else{
                    $tempOption = "<option value='"+data[$i]['value']+"'> "+ data[$i]['name']+"</option>";
                }
                $($id + "[name='inputCandidateMajor']").append($tempOption);
            }
        }
        $(".add-form").click(function() {
            $form = $("#unique-form").clone().removeClass('hidden').attr('id' , UUID());
            $form.find('[data-name]').each(function() {
                $(this).attr('name' , $(this).data('name'))
            });
            $radioButtonNameUUID =  UUID();
            $form.find('input[type="radio"]').each(function() {
                $id =  UUID();
                $(this).attr('id' , $id);
                $(this).attr('name' , "Study-Status-"+$radioButtonNameUUID);
                $(this).next('label').attr('for' , $id);
            });
            $(".skill-divider").after($form);
            $(".skill-divider").next("div.list-group-item").find('input[type="radio"]').eq(0).prop("checked", true);
        });
        if($("#form").find('div.list-group-item').length == 0 ){
            $(".add-form").click();
        }
        $(document).on('click','.remove-form',function(){
            $(this).parent().remove();
        });

        $("#updateProfileAcademicBackground").click( {redirect: false}, updateProfile);
        $("#updateProfileAcademicBackgroundAndRedirect").click( {redirect: true}, updateProfile);
        function updateProfile(param){
            // if($("#form").serializeArray().length <=0){
            //     notify('وارد کردن حداقل سابقه تحصیلی الزامی ست', 'yellow');
            // }

                $sendData = {inputCandidateAcademicBackground: $("#form").serializeArray()}
                toggleLoader();
                $.ajax({
                    type: 'post',
                    url: base_url + 'Profile/candidateUpdateAcademicBackground',
                    data: $sendData,
                    success: function (data) {
                        toggleLoader();
                        $result = JSON.parse(data);
                        notify($result['content'], $result['type']);
                        if(param.data.redirect){
                            window.location.href =  base_url+'Profile/militaryStatus';
                        }
                    }
                });

        }

    });

</script>