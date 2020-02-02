<?php
$_DIR = base_url('assets/ui/v3/');
?>
<div class="container container-wrapper" style="background: none;">
    <?php echo $resumeSidebar; ?>
    <div class="col-md-9 col-xs-12 pull-right response-padding">
        <div class="LeftPanel">
            <div class="LeftPanelcontent">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="panel panel-default LeftPanelShadow">
                            <div class="panel-heading">
                                سوابق تحصیلی
                                <span class="add-form fa fa-plus"></span>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-xs-12 padding-0">
                                        <div class="list-group ul-background-color-hr">
                                            <form id="form">
                                                <span class="skill-divider"></span>
                                                <?php foreach ($userInfo['candidateAcademicBackground'] as $item) { ?>
                                                    <div id="<?php echo md5(rand(1000, 9999)); ?>"
                                                         class="list-group-item extra-padding-top-25 odd-background-color-div">
                                                        <span class="remove-form fa fa-times"></span>
                                                        <div class="list-group-Grade col-md-12 col-xs-12 padding-0">
                                                            <div class="col-md-4 col-sm-12 col-xs-12 RightFloat">
                                                                <label for="inputCandidateGrade">مقطع<span
                                                                            class="text-danger"><b
                                                                                class="text-danger">*</b></span></label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputCandidateGrade">
                                                                    <option value="" selected="">-- انتخاب کنید --
                                                                    </option>
                                                                    <?php foreach ($EnumResumeProfile['CandidateGrade'] as $key => $value) { ?>
                                                                        <option <?php setOptionSelected($item['CandidateGrade'], $key); ?>
                                                                                value="<?php echo $key ?>">
                                                                            <?php echo $value ?>
                                                                        </option>
                                                                    <?php } ?>
                                                                </select>
                                                                <label class="GradeNotify">
                                                                    حداقل مقطع تحصیلی مورد نیاز برای نامزدی انتخابات ,
                                                                    کارشناسی ارشد یا معادل آن می باشد
                                                                </label>
                                                            </div>
                                                            <div class="col-md-4 col-sm-12 col-xs-12 RightFloat CandidateLevelType">
                                                                <label for="inputCandidateUniversityLevelType">نوع مرکز
                                                                    آموزشی<span class="text-danger"><b
                                                                                class="text-danger">*</b></span></label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputCandidateUniversityLevelType">
                                                                    <option value="" selected="">-- انتخاب کنید --
                                                                    </option>
                                                                    <?php foreach ($EnumResumeProfile['CandidateUniversityLevelType'] as $key => $value) { ?>
                                                                        <option
                                                                            <?php setOptionSelected($item['CandidateUniversityLevelType'], $key); ?>
                                                                                value="<?php echo $key ?>">
                                                                            <?php echo $value ?>
                                                                        </option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-sm-12 col-xs-12 RightFloat CandidateeduMajor">
                                                                <label for="inputCandidateSchoolMajor">رشته تحصیلی<span
                                                                            class="text-danger"><b
                                                                                class="text-danger">*</b></span></label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputCandidateSchoolMajor">
                                                                    <option value="" selected="">-- انتخاب کنید --
                                                                    </option>
                                                                    <?php foreach ($EnumResumeProfile['CandidateSchoolMajor'] as $key => $value) { ?>
                                                                        <option
                                                                            <?php setOptionSelected($item['CandidateSchoolMajor'], $key); ?>
                                                                                value="<?php echo $key ?>">
                                                                            <?php echo $value ?>
                                                                        </option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 form-group RightFloat CandidateUniversityName">
                                                                <label class="active"
                                                                       for="inputCandidateUniversityName"><span
                                                                            class="Change-UniversityName"> نام دانشگاه</span><span
                                                                            class="text-danger"><b
                                                                                class="text-danger">*</b></span></label>
                                                                <input type="text" name="inputCandidateUniversityName"
                                                                    <?php setInputValue($item['CandidateUniversityName']); ?>
                                                                       class="input-validate validate valid"
                                                                       placeholder="پر کردن این فیلد الزامی می باشد">
                                                            </div>
                                                        </div>
                                                        <div class="list-group-Grade list-Edu col-md-12 col-xs-12 padding-0">
                                                            <div class="col-md-4 col-sm-12 col-xs-12 RightFloat CandidateDepartment">
                                                                <label for="inputCandidateDepartment">گروه تحصیلی<span
                                                                            class="text-danger"><b
                                                                                class="text-danger">*</b></span></label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputCandidateDepartment"
                                                                        data-selected-major="<?php echo $item['CandidateMajor']; ?>">
                                                                    <option value="" selected="">-- انتخاب کنید --
                                                                    </option>
                                                                    <?php foreach ($EnumResumeProfile['CandidateDepartment'] as $key => $value) { ?>
                                                                        <option
                                                                            <?php setOptionSelected($item['CandidateDepartment'], $key); ?>
                                                                                value="<?php echo $key ?>">
                                                                            <?php echo $value ?>
                                                                        </option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-sm-12 col-xs-12 RightFloat CandidateMajor">
                                                                <label for="inputCandidateMajor">عنوان رشته تحصیلی<span
                                                                            class="text-danger"><b
                                                                                class="text-danger">*</b></span></label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputCandidateMajor">
                                                                    <option value="" selected="">-- انتخاب کنید --
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="col-md-12 col-xs-12 Radio-Buttons">
                                                            <?php $name = md5(rand());
                                                            $index = 0;
                                                            foreach ($EnumResumeProfile['AcademicStudyStatus'] as $key => $value) {
                                                                $id = md5(rand()); ?>
                                                                <div class="radio Radio-Display">
                                                                    <input id="radio-<?php echo $id ?>"
                                                                           name="radio-<?php echo $name ?>" type="radio"
                                                                        <?php
                                                                        if (isset($item['CandidateStudyStatus']) && !empty($item['CandidateStudyStatus'])) {
                                                                            setRadioSelected($item['CandidateStudyStatus'], $key);
                                                                        } else {
                                                                            if ($index == 0) echo "checked";
                                                                            $index = 1;
                                                                        }
                                                                        ?>
                                                                           value="<?php echo $key ?>">
                                                                    <label for="radio-<?php echo $id ?>"
                                                                           class="radio-label">
                                                                        <?php echo $value ?>
                                                                    </label>
                                                                </div>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </form>
                                            <div id="unique-form"
                                                 class="hidden list-group-item animated flipInX extra-padding-top-25 odd-background-color-div">
                                                <span class="remove-form fa fa-times"></span>
                                                <div class="list-group-Grade col-md-12 col-xs-12 padding-0">
                                                    <div class="col-md-4 col-sm-12 col-xs-12 RightFloat">
                                                        <label for="inputCandidateGrade">مقطع<span
                                                                    class="text-danger"><b
                                                                        class="text-danger">*</b></span>
                                                        </label>
                                                        <select class="form-control form-control-lg"
                                                                data-name="inputCandidateGrade">
                                                            <option value="" selected="">--انتخاب کنید</option>
                                                            <?php foreach ($EnumResumeProfile['CandidateGrade'] as $key => $value) { ?>
                                                                <option value="<?php echo $key ?>">
                                                                    <?php echo $value ?>
                                                                </option>
                                                            <?php } ?>
                                                        </select>
                                                        <label class="GradeNotify">
                                                            حداقل مقطع تحصیلی مورد نیاز برای نامزدی انتخابات , کارشناسی
                                                            ارشد یا
                                                            معادل آن می باشد
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12 col-xs-12 RightFloat CandidateLevelType">
                                                        <label for="inputCandidateUniversityLevelType">نوع مرکز
                                                            آموزشی<span class="text-danger"><b class="text-danger">*</b></span></label>
                                                        <select class="form-control form-control-lg"
                                                                data-name="inputCandidateUniversityLevelType">
                                                            <option value="" selected="">--انتخاب کنید</option>
                                                            <?php foreach ($EnumResumeProfile['CandidateUniversityLevelType'] as $key => $value) { ?>
                                                                <option value="<?php echo $key ?>">
                                                                    <?php echo $value ?>
                                                                </option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12 col-xs-12 RightFloat CandidateeduMajor">
                                                        <label for="inputCandidateSchoolMajor">رشته تحصیلی<span
                                                                    class="text-danger"><b
                                                                        class="text-danger">*</b></span>
                                                        </label>
                                                        <select class="form-control form-control-lg"
                                                                data-name="inputCandidateSchoolMajor">
                                                            <option value="" selected="">--انتخاب کنید</option>
                                                            <?php foreach ($EnumResumeProfile['CandidateSchoolMajor'] as $key => $value) { ?>
                                                                <option value="<?php echo $key ?>">
                                                                    <?php echo $value ?>
                                                                </option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 col-xs-12 form-group RightFloat CandidateUniversityName">
                                                        <label class="active" for="inputCandidateUniversityName">
                                                            <span class="Change-UniversityName"> نام دانشگاه</span><span
                                                                    class="text-danger">
                                                                <b class="text-danger">*</b>
                                                            </span>
                                                        </label>
                                                        <input type="text"
                                                               data-name="inputCandidateUniversityName"
                                                               class="input-validate validate valid"
                                                               placeholder="پر کردن این فیلد الزامی می باشد">
                                                    </div>
                                                </div>
                                                <div class="list-group-Grade list-Edu col-md-12 col-xs-12 padding-0">
                                                    <div class="col-md-4 col-sm-12 col-xs-12 RightFloat CandidateDepartment">
                                                        <label for="inputCandidateDepartment">گروه تحصیلی<span
                                                                    class="text-danger"><b
                                                                        class="text-danger">*</b></span></label>
                                                        <select class="form-control form-control-lg"
                                                                data-name="inputCandidateDepartment">
                                                            <option value="" selected="">--انتخاب کنید</option>
                                                            <?php foreach ($EnumResumeProfile['CandidateDepartment'] as $key => $value) { ?>
                                                                <option value="<?php echo $key ?>">
                                                                    <?php echo $value ?>
                                                                </option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12 col-xs-12 RightFloat CandidateMajor">
                                                        <label for="inputCandidateMajor">عنوان رشته تحصیلی<span
                                                                    class="text-danger"><b
                                                                        class="text-danger">*</b></span></label>
                                                        <select class="form-control form-control-lg" data-
                                                                name="inputCandidateMajor">
                                                            <option selected value="">-- انتخاب کنید --</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-md-12 col-xs-12 Radio-Buttons">
                                                    <?php foreach ($EnumResumeProfile['AcademicStudyStatus'] as $key => $value) { ?>
                                                        <div class="radio Radio-Display">
                                                            <input name="radio" type="radio"
                                                                   value="<?php echo $key ?>">
                                                            <label for="radio-1" class="radio-label">
                                                                <?php echo $value ?>
                                                            </label>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!--  upload file-->
                                <br>
                                <div class="panel panel-warning">
                                    <div class="panel-heading">
                                        <p class="margin-b-0"> بعد از تکمیل سوابق تحصیلی تمامی مدارک مرتبط با سوابق تحصیلی خود را در قالب یک فایل زیپ اپلود کنید</p>
                                    </div>
                                </div>

                                <div class="col-md-12 col-xs-12">
                                    <form id="fileupload"
                                          method="POST" enctype="multipart/form-data">

                            <span id="spanUpload" class="btn btn-sm fileinput-button">
                                    <i class="icon-plus icon-white"></i>
                                    <input class="display-in-block" id="inpLogo" type="file" name="file"/>
                                    <input class="display-in-block upload-file-btn" type="submit" value="آپلود فایل"/>
                                </span>
                                    </form>
                                </div>
                                <!--  upload file-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="LeftPaneAction">
                <div class="row form-group">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <button class="btn btn-block btn-lg waves-effect CommonButtons next-step"
                                id="updateProfileAcademicBackgroundAndRedirect">
                            ثبت و ادامه
                        </button>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <button class="btn btn-block btn-lg waves-effect CommonButtons"
                                id="updateProfileAcademicBackground">
                            ثبت
                        </button>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <a href="<?php echo base_url('Profile/resume'); ?>">
                            <button class="btn btn-block btn-lg waves-effect CommonButtons prev-step">
                                مرحله قبل
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $('#fileupload').submit(function(e) {
        e.preventDefault();
        var file_data = $('#inpLogo').prop('files')[0];
        var form_data = new FormData();
        form_data.append('file', file_data);
        $.ajax({
            url: base_url + "Profile/uploadFile",
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (data) {
                $result = jQuery.parseJSON(data);
                if($result['success']) {
                   console.log(data);
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
    });
    // function fileUpload() {

        // $('#fileupload').fileupload();
        // $('#fileupload').fileupload('option', {
        //     maxFileSize: 1024 * 1024,
        //     autoupload: true
        // });

        // var uploadFinished = function (e, data) {
        //     if (data.files[0].size > 2000000) {
        //         $.notify("Faça o upload de uma imagem de até 2MB", "danger");
        //         jqXHR.abort();
        //         return
        //     }
        // };
    //     data = new FormData($('#form'));
    //     console.log('Submitting');
    //     $.ajax({
    //         type: 'post',
    //         url: base_url + 'Profile/uploadFile',
    //         data: data,
    //         success: function (data) {
    //             toggleLoader();
    //             console.log()
    //             $result = JSON.parse(data);
    //             notify($result['content'], $result['type']);
    //         }
    //     });
    //
    // }

    // jQuery('form#fileupload').on('submit', function (e) {
    //     e.preventDefault();
    //     var file = jQuery('#inpLogo')[0].files[0];
    //     var form_data = new FormData(jQuery("form#fileupload")[0]);
    //     form_data.append('file', file);
    //
    //     jQuery.ajax({
    //         url: base_url + 'Profile/uploadFile',
    //         data: form_data,
    //         type: 'POST',
    //         success: function (response) {
    //             console.log(response);
    //         },
    //     });
    //     return false;
    // });



</script>