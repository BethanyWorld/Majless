<?php $_DIR = base_url('assets/ui/v3/'); ?>
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
                                <span class="add-form fa fa-plus waves">
                                    <span class="fa fa-plus" id="plus-wave"></span>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-xs-12 padding-0">
                                        <div class="tabs">
                                            <div class="tab-button-outer">
                                                <ul id="tab-button">
                                                    <li><a href="#tab01">سوابق تحصیلی</a></li>
                                                    <li><a href="#tab02">بارگذاری مدارک</a></li>
                                                </ul>
                                            </div>
                                            <div id="tab01" class="tab-contents">
                                                <div class="list-group ul-background-color-hr">
                                                    <form id="form">
                                                        <span class="skill-divider"></span>
                                                        <?php foreach ($userInfo['candidateAcademicBackground'] as $item) { ?>
                                                            <div id="<?php echo md5(rand(1000, 9999)); ?>" class="list-group-item extra-padding-top-25 odd-background-color-div">
                                                                <span class="remove-form fa fa-times"></span>
                                                                <div class="list-group-Grade col-md-12 col-xs-12 padding-0">
                                                                    <div class="col-md-4 col-sm-12 col-xs-12 RightFloat">
                                                                        <label for="inputCandidateGrade">
                                                                            مقطع
                                                                            <span class="text-danger"><b class="text-danger">*</b></span>
                                                                        </label>
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
                                                                            حداقل مقطع تحصیلی مورد نیاز برای نامزدی
                                                                            انتخابات ,
                                                                            کارشناسی ارشد یا معادل آن می باشد
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12 col-xs-12 RightFloat CandidateLevelType">
                                                                        <label for="inputCandidateUniversityLevelType">
                                                                            نوع مرکز آموزشی
                                                                            <span class="text-danger"><b class="text-danger">*</b></span>
                                                                        </label>
                                                                        <select class="form-control form-control-lg" name="inputCandidateUniversityLevelType">
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
                                                                        <label for="inputCandidateSchoolMajor">رشته
                                                                            تحصیلی<span
                                                                                    class="text-danger"><b
                                                                                        class="text-danger">*</b></span></label>
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
                                                                        <label class="active" for="inputCandidateUniversityName">
                                                                            <span class="Change-UniversityName">
                                                                                نام دانشگاه
                                                                            </span>
                                                                            <span class="text-danger"><b class="text-danger">*</b></span>
                                                                        </label>
                                                                        <select class="form-control form-control-lg" name="inputCandidateUniversityName">
                                                                            <option value="" selected="">--انتخاب کنید</option>
                                                                            <?php foreach ($universities as $item) { ?>
                                                                                <option value="<?php echo $item['UniversityId'] ?>">
                                                                                    <?php echo $item['UniversityTitle'] ?>
                                                                                </option>
                                                                            <?php } ?>
                                                                            <option value="Others">سایر</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-12 form-group RightFloat hidden CandidateUniversityOtherNameHozeh">
                                                                        <label class="active" for="inputCandidateSchoolName">
                                                                            نام مدرسه / موسسه
                                                                        </label>
                                                                        <input type="text"
                                                                               name="inputCandidateSchoolName"
                                                                               class="input-validate validate valid"
                                                                               placeholder="پر کردن این فیلد الزامی می باشد">
                                                                    </div>
                                                                </div>
                                                                <div class="list-group-Grade list-Edu col-md-12 col-xs-12 padding-0">
                                                                    <div class="col-md-4 col-xs-12 form-group RightFloat hidden CandidateUniversityOtherName">
                                                                        <label class="active" for="inputCandidateUniversityOtherName">
                                                                            <span class="Change-UniversityName">
                                                                                نام دانشگاه
                                                                            </span>
                                                                            <span class="text-danger"><b class="text-danger">*</b></span>
                                                                        </label>
                                                                        <input type="text"
                                                                               name="inputCandidateUniversityOtherName"
                                                                               class="input-validate validate valid"
                                                                               placeholder="پر کردن این فیلد الزامی می باشد">
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-12 col-xs-12 RightFloat CandidateDepartment">
                                                                        <label for="inputCandidateDepartment">
                                                                            گروه تحصیلی
                                                                            <span class="text-danger"><b class="text-danger">*</b></span>
                                                                        </label>
                                                                        <select class="form-control form-control-lg"
                                                                                name="inputCandidateDepartment"
                                                                                data-selected-major="<?php echo $item['CandidateMajor']; ?>">
                                                                            <option value="" selected="">-- انتخاب کنید
                                                                                --
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
                                                                        <label for="inputCandidateMajor">عنوان رشته
                                                                            تحصیلی<span
                                                                                    class="text-danger"><b
                                                                                        class="text-danger">*</b></span></label>
                                                                        <select class="form-control form-control-lg"
                                                                                name="inputCandidateMajor">
                                                                            <option value="" selected="">-- انتخاب کنید
                                                                                --
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                    <label for="inputCandidateStartAcademicBackgroundMonth">
                                                                        ماه شروع تحصیلی
                                                                    </label>
                                                                    <select class="form-control form-control-lg city-select"
                                                                            name="inputCandidateStartAcademicBackgroundMonth"
                                                                            id="inputCandidateStartAcademicBackgroundMonth">
                                                                        <?php foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) { ?>
                                                                            <option
                                                                                <?php setOptionSelected($item['CandidateStartAcademicBackgroundMonth'], $key); ?>
                                                                                    value="<?php echo $key; ?>">
                                                                                <?php echo $value; ?>
                                                                            </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                    <label for="inputCandidateStartAcademinBackgroundYear">
                                                                        سال شروع تحصیل
                                                                    </label>
                                                                    <select class="form-control form-control-lg city-select"
                                                                            name="inputCandidateStartAcademicBackgroundYear"
                                                                            id="inputCandidateStartAcademicBackgroundYear"
                                                                            style="font-family: tahoma;">
                                                                        <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                            <option
                                                                                <?php setOptionSelected($item['CandidateStartAcademicBackgroundYear'], $i); ?>
                                                                                    value="<?php echo $i; ?>">
                                                                                <?php echo $i; ?>
                                                                            </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                    <label for="inputCandidateEndAcademicBackgroundMonth">
                                                                        ماه پایان تحصیل
                                                                    </label>
                                                                    <select class="form-control form-control-lg city-select"
                                                                            name="inputCandidateEndAcademicBackgroundMonth"
                                                                            id="inputCandidateEndAcademicBackgroundMonth">
                                                                        <?php foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) { ?>
                                                                            <option
                                                                                <?php setOptionSelected($item['CandidateEndAcademicBackgroundMonth'], $key); ?>
                                                                                    value="<?php echo $key; ?>">
                                                                                <?php echo $value; ?>
                                                                            </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                    <label for="inputCandidateEndAcademinBackgroundYear">
                                                                        سال پایان تحصیل
                                                                    </label>
                                                                    <select class="form-control form-control-lg city-select"
                                                                            name="inputCandidateEndAcademicBackgroundYear"
                                                                            id="inputCandidateEndAcademicBackgroundYear"
                                                                            style="font-family: tahoma;">
                                                                        <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                            <option
                                                                                <?php setOptionSelected($item['CandidateEndAcademicBackgroundYear'], $i); ?>
                                                                                    value="<?php echo $i; ?>">
                                                                                <?php echo $i; ?>
                                                                            </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                                <div class="col-md-12 col-xs-12 Radio-Buttons">
                                                                    <?php $name = md5(rand());
                                                                    $index = 0;
                                                                    foreach ($EnumResumeProfile['AcademicStudyStatus'] as $key => $value) {
                                                                        $id = md5(rand()); ?>
                                                                        <div class="radio Radio-Display">
                                                                            <input id="radio-<?php echo $id ?>"
                                                                                   name="radio-<?php echo $name ?>"
                                                                                   type="radio"
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
                                                    <div id="unique-form" class="hidden list-group-item animated flipInX extra-padding-top-25 odd-background-color-div">
                                                        <span class="remove-form fa fa-times"></span>
                                                        <div class="list-group-Grade col-md-12 col-xs-12 padding-0">
                                                            <div class="col-md-4 col-sm-12 col-xs-12 RightFloat">
                                                                <label for="inputCandidateGrade">
                                                                    مقطع
                                                                    <span class="text-danger"><b class="text-danger">*</b></span>
                                                                </label>
                                                                <select class="form-control form-control-lg" name="inputCandidateGrade">
                                                                    <option value="" selected="">-- انتخاب کنید --</option>
                                                                    <?php foreach ($EnumResumeProfile['CandidateGrade'] as $key => $value) { ?>
                                                                        <option value="<?php echo $key ?>">
                                                                            <?php echo $value ?>
                                                                        </option>
                                                                    <?php } ?>
                                                                </select>
                                                                <label class="GradeNotify">
                                                                    حداقل مقطع تحصیلی مورد نیاز برای نامزدی
                                                                    انتخابات ,
                                                                    کارشناسی ارشد یا معادل آن می باشد
                                                                </label>
                                                            </div>
                                                            <div class="col-md-4 col-sm-12 col-xs-12 RightFloat CandidateLevelType">
                                                                <label for="inputCandidateUniversityLevelType">
                                                                    نوع مرکز آموزشی
                                                                    <span class="text-danger"><b class="text-danger">*</b></span>
                                                                </label>
                                                                <select class="form-control form-control-lg" name="inputCandidateUniversityLevelType">
                                                                    <option value="" selected="">-- انتخاب کنید --</option>
                                                                    <?php foreach ($EnumResumeProfile['CandidateUniversityLevelType'] as $key => $value) { ?>
                                                                        <option value="<?php echo $key ?>">
                                                                            <?php echo $value ?>
                                                                        </option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-sm-12 col-xs-12 RightFloat CandidateeduMajor">
                                                                <label for="inputCandidateSchoolMajor">رشته
                                                                    تحصیلی<span
                                                                            class="text-danger"><b
                                                                                class="text-danger">*</b></span></label>
                                                                <select class="form-control form-control-lg" name="inputCandidateSchoolMajor">
                                                                    <option value="" selected="">-- انتخاب کنید --</option>
                                                                    <?php foreach ($EnumResumeProfile['CandidateSchoolMajor'] as $key => $value) { ?>
                                                                        <option value="<?php echo $key ?>">
                                                                            <?php echo $value ?>
                                                                        </option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 form-group RightFloat CandidateUniversityName">
                                                                <label class="active" for="inputCandidateUniversityName">
                                                                            <span class="Change-UniversityName">
                                                                                نام دانشگاه
                                                                            </span>
                                                                    <span class="text-danger"><b class="text-danger">*</b></span>
                                                                </label>
                                                                <select class="form-control form-control-lg" name="inputCandidateUniversityName">
                                                                    <option value="" selected="">--انتخاب کنید</option>
                                                                    <?php foreach ($universities as $item) { ?>
                                                                        <option value="<?php echo $item['UniversityId'] ?>">
                                                                            <?php echo $item['UniversityTitle'] ?>
                                                                        </option>
                                                                    <?php } ?>
                                                                    <option value="Others">سایر</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 form-group RightFloat hidden CandidateUniversityOtherNameHozeh">
                                                                <label class="active" for="inputCandidateSchoolName">
                                                                    نام مدرسه / موسسه
                                                                </label>
                                                                <input type="text"
                                                                       name="inputCandidateSchoolName"
                                                                       class="input-validate validate valid"
                                                                       placeholder="پر کردن این فیلد الزامی می باشد">
                                                            </div>
                                                        </div>
                                                        <div class="list-group-Grade list-Edu col-md-12 col-xs-12 padding-0">
                                                            <div class="col-md-4 col-xs-12 form-group RightFloat hidden CandidateUniversityOtherName">
                                                                <label class="active" for="inputCandidateUniversityOtherName">
                                                                            <span class="Change-UniversityName">
                                                                                نام دانشگاه
                                                                            </span>
                                                                    <span class="text-danger"><b class="text-danger">*</b></span>
                                                                </label>
                                                                <input type="text"
                                                                       name="inputCandidateUniversityOtherName"
                                                                       class="input-validate validate valid"
                                                                       placeholder="پر کردن این فیلد الزامی می باشد">
                                                            </div>
                                                            <div class="col-md-4 col-sm-12 col-xs-12 RightFloat CandidateDepartment">
                                                                <label for="inputCandidateDepartment">
                                                                    گروه تحصیلی
                                                                    <span class="text-danger"><b class="text-danger">*</b></span>
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputCandidateDepartment"
                                                                        data-selected-major="<?php echo $item['CandidateMajor']; ?>">
                                                                    <option value="" selected="">-- انتخاب کنید
                                                                        --
                                                                    </option>
                                                                    <?php foreach ($EnumResumeProfile['CandidateDepartment'] as $key => $value) { ?>
                                                                        <option value="<?php echo $key ?>">
                                                                            <?php echo $value ?>
                                                                        </option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-sm-12 col-xs-12 RightFloat CandidateMajor">
                                                                <label for="inputCandidateMajor">
                                                                    عنوان رشته تحصیلی
                                                                    <span class="text-danger"><b class="text-danger">*</b></span>
                                                                </label>
                                                                <select class="form-control form-control-lg" name="inputCandidateMajor">
                                                                    <option value="" selected="">-- انتخاب کنید --</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                            <label for="inputCandidateStartAcademicBackgroundMonth">
                                                                ماه شروع تحصیل
                                                            </label>
                                                            <select class="form-control form-control-lg city-select"
                                                                    name="inputCandidateStartAcademicBackgroundMonth"
                                                                    id="inputCandidateStartAcademicBackgroundMonth">
                                                                <?php foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) { ?>
                                                                    <option value="<?php echo $key; ?>">
                                                                        <?php echo $value; ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                            <label for="inputCandidateStartAcademinBackgroundYear">
                                                                سال پایان تحصیل
                                                            </label>
                                                            <select class="form-control form-control-lg city-select"
                                                                    name="inputCandidateStartAcademicBackgroundYear"
                                                                    id="inputCandidateStartAcademicBackgroundYear"
                                                                    style="font-family: tahoma;">
                                                                <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                    <option value="<?php echo $i; ?>">
                                                                        <?php echo $i; ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                            <label for="inputCandidateEndAcademicBackgroundMonth">
                                                                ماه پایان تحصیل
                                                            </label>
                                                            <select class="form-control form-control-lg city-select"
                                                                    name="inputCandidateEndAcademicBackgroundMonth"
                                                                    id="inputCandidateEndAcademicBackgroundMonth">
                                                                <?php foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) { ?>
                                                                    <option value="<?php echo $key; ?>">
                                                                        <?php echo $value; ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                            <label for="inputCandidateEndAcademinBackgroundYear">
                                                                سال پایان تحصیل
                                                            </label>
                                                            <select class="form-control form-control-lg city-select"
                                                                    name="inputCandidateEndAcademicBackgroundYear"
                                                                    id="inputCandidateEndAcademicBackgroundYear"
                                                                    style="font-family: tahoma;">
                                                                <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                    <option value="<?php echo $i; ?>">
                                                                        <?php echo $i; ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="col-md-12 col-xs-12 Radio-Buttons">
                                                            <?php
                                                            $name = md5(rand());
                                                            $index = 0;
                                                            foreach ($EnumResumeProfile['AcademicStudyStatus'] as $key => $value) {
                                                                $id = md5(rand()); ?>
                                                                <div class="radio Radio-Display">
                                                                    <input id="radio-<?php echo $id ?>"
                                                                           name="radio-<?php echo $name ?>"
                                                                           type="radio"
                                                                           value="<?php echo $key ?>">
                                                                    <label for="radio-<?php echo $id ?>"
                                                                           class="radio-label">
                                                                        <?php echo $value ?>
                                                                    </label>
                                                                </div>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="tab02" class="tab-contents">
                                                <?php
                                                $documentPersianName = 'سوابق تحصیلی';
                                                $documentName = 'AcademicBackground';
                                                $documentData['documentName'] = $documentName;
                                                $documentData['documentPersianName'] = $documentPersianName;
                                                $documentData['candidateDocuments'] = $userInfo['candidateDocuments'];
                                                $this->load->view('ui/v3/candidate_profile/home/candidate_resume/upload_document', $documentData);
                                                ?>
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