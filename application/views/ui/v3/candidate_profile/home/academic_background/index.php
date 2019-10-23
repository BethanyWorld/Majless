<?php
$_DIR = base_url('assets/ui/v3/');
?>
<div class="container container-wrapper" style="background: none;">
    <?php echo $resumeSidebar; ?>
    <div class="col-md-9 col-xs-12 pull-right">
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
                                                    <div id="<?php echo md5(rand(1000 , 9999)); ?>" class="list-group-item extra-padding-top-25 odd-background-color-div">
                                                            <span class="remove-form fa fa-times"></span>
                                                            <div class="list-group-Grade col-md-12 col-xs-12 padding-0">
                                                                <div class="col-md-4 col-sm-12 col-xs-12 RightFloat">
                                                                    <label for="inputCandidateGrade">مقطع<span class="text-danger"><b class="text-danger">*</b></span></label>
                                                                    <select class="form-control form-control-lg" name="inputCandidateGrade">
                                                                        <option value="" selected="">-- انتخاب کنید --</option>
                                                                        <?php foreach ($EnumResumeProfile['CandidateGrade'] as $key => $value) { ?>
                                                                            <option <?php setOptionSelected($item['CandidateGrade'], $key); ?>
                                                                                    value="<?php echo $key ?>">
                                                                                <?php echo $value ?>
                                                                            </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                    <label class="GradeNotify">
                                                                        حداقل مقطع تحصیلی مورد نیاز برای نامزدی انتخابات , کارشناسی ارشد یا معادل آن می باشد
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-4 col-sm-12 col-xs-12 RightFloat CandidateLevelType">
                                                                    <label for="inputCandidateUniversityLevelType">نوع مرکز آموزشی<span class="text-danger"><b class="text-danger">*</b></span></label>
                                                                    <select class="form-control form-control-lg"
                                                                            name="inputCandidateUniversityLevelType">
                                                                        <option value="" selected="">-- انتخاب کنید --</option>
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
                                                                    <label for="inputCandidateSchoolMajor">رشته تحصیلی<span class="text-danger"><b class="text-danger">*</b></span></label>
                                                                    <select class="form-control form-control-lg" name="inputCandidateSchoolMajor">
                                                                        <option value="" selected="">-- انتخاب کنید --</option>
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
                                                                    <label class="active" for="inputCandidateUniversityName"><span class="Change-UniversityName"> نام دانشگاه</span><span class="text-danger"><b class="text-danger">*</b></span></label>
                                                                    <input type="text" name="inputCandidateUniversityName"
                                                                        <?php setInputValue($item['CandidateUniversityName']); ?>
                                                                           class="input-validate validate valid"
                                                                           placeholder="پر کردن این فیلد الزامی می باشد">
                                                                </div>
                                                            </div>
                                                            <div class="list-group-Grade list-Edu col-md-12 col-xs-12 padding-0">
                                                                <div class="col-md-4 col-sm-12 col-xs-12 RightFloat CandidateDepartment">
                                                                    <label for="inputCandidateDepartment">گروه تحصیلی<span class="text-danger"><b class="text-danger">*</b></span></label>
                                                                    <select class="form-control form-control-lg" name="inputCandidateDepartment"
                                                                            data-selected-major="<?php echo $item['CandidateMajor']; ?>">
                                                                        <option value="" selected="">-- انتخاب کنید --</option>
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
                                                                    <label for="inputCandidateMajor">عنوان رشته تحصیلی<span class="text-danger"><b class="text-danger">*</b></span></label>
                                                                    <select class="form-control form-control-lg" name="inputCandidateMajor">
                                                                        <option value="" selected="">-- انتخاب کنید --</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <div class="col-md-12 col-xs-12 Radio-Buttons">
                                                                <?php  $name = md5(rand()); $index = 0; foreach ($EnumResumeProfile['AcademicStudyStatus'] as $key => $value) { $id = md5(rand());?>
                                                                    <div class="radio Radio-Display">
                                                                        <input id="radio-<?php echo $id ?>" name="radio-<?php echo $name ?>" type="radio"
                                                                                <?php
                                                                                    if(isset($item['CandidateStudyStatus']) && !empty($item['CandidateStudyStatus'])){
                                                                                        setRadioSelected($item['CandidateStudyStatus'], $key);
                                                                                    } else{
                                                                                        if($index == 0) echo "checked";
                                                                                        $index = 1;
                                                                                    }
                                                                                ?>
                                                                               value="<?php echo $key ?>">
                                                                        <label for="radio-<?php echo $id ?>" class="radio-label">
                                                                            <?php echo $value ?>
                                                                        </label>
                                                                    </div>
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                <?php } ?>
                                            </form>
                                            <div id="unique-form" class="hidden list-group-item animated flipInX extra-padding-top-25 odd-background-color-div">
                                                <span class="remove-form fa fa-times"></span>
                                                <div class="list-group-Grade col-md-12 col-xs-12 padding-0">
                                                    <div class="col-md-4 col-sm-12 col-xs-12 RightFloat">
                                                        <label for="inputCandidateGrade">مقطع<span class="text-danger"><b class="text-danger">*</b></span>
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
                                                        <label for="inputCandidateUniversityLevelType">نوع مرکز آموزشی<span class="text-danger"><b class="text-danger">*</b></span></label>
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
                                                        <label for="inputCandidateSchoolMajor">رشته تحصیلی<span class="text-danger"><b class="text-danger">*</b></span>
                                                        </label>
                                                        <select class="form-control form-control-lg" data-name="inputCandidateSchoolMajor">
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
                                                            <span class="Change-UniversityName"> نام دانشگاه</span><span class="text-danger">
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
                                                        <label for="inputCandidateDepartment">گروه تحصیلی<span class="text-danger"><b class="text-danger">*</b></span></label>
                                                        <select class="form-control form-control-lg" data-name="inputCandidateDepartment">
                                                            <option value="" selected="">--انتخاب کنید</option>
                                                            <?php foreach ($EnumResumeProfile['CandidateDepartment'] as $key => $value) { ?>
                                                                <option value="<?php echo $key ?>">
                                                                    <?php echo $value ?>
                                                                </option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12 col-xs-12 RightFloat CandidateMajor">
                                                        <label for="inputCandidateMajor">عنوان رشته تحصیلی<span class="text-danger"><b class="text-danger">*</b></span></label>
                                                        <select class="form-control form-control-lg" data- name="inputCandidateMajor">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="LeftPaneAction">
                <div class="row form-group">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <button class="btn btn-block btn-lg waves-effect CommonButtons next-step" id="updateProfileAcademicBackgroundAndRedirect">
                            ثبت و ادامه
                        </button>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <button class="btn btn-block btn-lg waves-effect CommonButtons" id="updateProfileAcademicBackground">
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