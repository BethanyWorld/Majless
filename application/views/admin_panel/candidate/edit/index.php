<?php
$_DIR = base_url('assets/empanel/');

?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="col-xs-12 col-sm-3" style="padding-right: 0;">
                    <div class="card profile-card">
                        <div class="profile-header">&nbsp;</div>
                        <div class="profile-body">
                            <div class="image-area">
                                <img class="profile-image"
                                     src="<?php echo $candidate['CandidateProfileImage']; ?>"
                                     style="width: 90%;max-width: 145px;"/>
                            </div>
                            <input type="hidden" name="inputCandidateId" id="inputCandidateId"
                                   value="<?php echo $candidate['CandidateId']; ?>"/>

                            <div class="content-area">
                                <h4>
                                    <?php echo $candidate['CandidateFirstName'] . " " . $candidate['CandidateLastName']; ?>
                                </h4>
                                <h5>
                                    <span class="office-location">
                                        <?php echo candidateStatus($candidate['CandidateStatus']); ?>
                                    </span>
                                </h5>
                            </div>
                        </div>
                        <div class="profile-footer text-center">
                            <ul class="personal-info-container">
                                <li>
                                    <span>تلفن</span>:
                                    <span><?php echo $candidate['CandidatePhone']; ?></span>
                                </li>
                                <li>
                                    <span>کد ملی</span>:
                                    <span><?php echo $candidate['CandidateNationalCode']; ?></span>
                                </li>
                                <li>
                                    <span>نمره رزومه</span>:
                                    <span><?php echo $candidate['CandidateScore']; ?></span>
                                </li>
                                <li>
                                    <span>استان</span>:
                                    <span><?php echo $candidate['StateName']; ?></span>
                                </li>
                                <li>
                                    <span>شهر</span>:
                                    <span><?php echo $candidate['CityName']; ?></span>
                                </li>
                                <li>
                                    <span>تاریخ تولد</span>:
                                    <span class="info-birthDate">
                                        <?php echo $candidate['CandidateBirthDate']; ?>
                                    </span>
                                </li>
                                <li>
                                    <span>نام پدر</span>:
                                    <span class="info-fatherName">
                                        <?php echo $candidate['CandidateFatherName']; ?>
                                    </span>
                                </li>
                                <li>
                                    <span>جنسیت</span>:
                                    <span class="info-gender">
                                        <?php genderPipe($candidate['CandidateGender']); ?>
                                    </span>
                                </li>
                                <li>
                                    <span>وضعیت تاهل</span>:
                                    <span class="info-maritalStatus">
                                        <?php echo maritalStatusPipe($candidate['CandidateMaritalStatus']); ?>
                                    </span>
                                </li>
                                <li>
                                    <span>دین</span>:
                                    <span class="info-religion">
                                        <?php echo religionPipe($candidate['CandidateReligion']); ?>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-9" style="padding-left: 0;">
                    <div class="card">
                        <div class="body">
                            <div>
                                <ul class="nav nav-tabs" role="tablist" style="padding-right: 0;">
                                    <li role="presentation" class="active">
                                        <a href="#info" aria-controls="info"
                                           role="tab" data-toggle="tab">رزومه</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#Grading" aria-controls="Grading"
                                           role="tab" data-toggle="tab">ثبت نمره</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#AcceptFirstExam" aria-controls="AcceptFirstExam"
                                           role="tab" data-toggle="tab">آزمون مرحله اول</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#AcceptSecondExam" aria-controls="AcceptSecondExam"
                                           role="tab" data-toggle="tab">آزمون مرحله دوم</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#AcceptEvaluationExam" aria-controls="AcceptEvaluationExam"
                                           role="tab" data-toggle="tab">آزمون کانون ارزیابی</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="info">
                                        <div class="panel panel-default panel-post">
                                            <div class="panel-heading">
                                                آزمون ها
                                            </div>
                                            <div class="panel-body">
                                                <div class="alert exam-info-container">
                                                    <?php
                                                    if (empty($exams['firstExams']) || !isset($exams['firstExams']) || count($exams['firstExams']) <= 0) {
                                                        echo "<div class='row col-xs-12 text-danger'>🆕";
                                                        echo "آزمون مرحله اول یافت نشد";
                                                        echo "</div>";
                                                    } else {
                                                        foreach ($exams['firstExams'] as $exam) {
                                                            if ($exam['ExamState'] == 'Done') {
                                                                echo "<div class='row col-xs-12 text-success'>🆕";
                                                                echo "آزمون مرحله اول با شناسه " . $exam['RequestId'] . " تایید شده است و به مرحله آزمون مرحله دوم رفته ست";
                                                                echo "</div>";
                                                            }
                                                            if ($exam['ExamState'] == 'Absence') {
                                                                echo "<div class='row col-xs-12 text-danger'>🆕";
                                                                echo "آزمون مرحله اول با شناسه " . $exam['RequestId'] . " ثبت غیبت شده است";
                                                                echo "</div>";
                                                            }
                                                            if ($exam['ExamState'] == 'Presence') {
                                                                echo "<div class='row col-xs-12 text-warning'>🆕";
                                                                echo "آزمون مرحله اول با شناسه " . $exam['RequestId'] . " ثبت حضور شده است";
                                                                echo "</div>";
                                                            }
                                                            if ($exam['ExamState'] == 'Pend') {
                                                                echo "<div class='row col-xs-12 text-primary'>🆕";
                                                                echo "آزمون مرحله اول با شناسه " . $exam['RequestId'] . " رزرو شده است";
                                                                echo "</div>";
                                                            }
                                                        }
                                                    }
                                                    ?>
                                                    <?php
                                                    if (empty($exams['secondExams']) || !isset($exams['secondExams']) || count($exams['secondExams']) <= 0) {
                                                        echo "<div class='row col-xs-12 text-danger'>🆕";
                                                        echo "آزمون مرحله دوم یافت نشد";
                                                        echo "</div>";
                                                    } else {
                                                        foreach ($exams['secondExams'] as $exam) {
                                                            if ($exam['ExamState'] == 'Done') {
                                                                echo "<div class='row col-xs-12 text-primary'>🆕";
                                                                echo "آزمون مرحله دوم با شناسه " . $exam['RequestId'] . " تایید شده است و به مرحله آزمون کانون ارزیابی رفته ست";
                                                                echo "</div>";
                                                            }
                                                            if ($exam['ExamState'] == 'Absence') {
                                                                echo "<div class='row col-xs-12 text-primary'>🆕";
                                                                echo "آزمون مرحله دوم با شناسه " . $exam['RequestId'] . " ثبت غیبت شده است";
                                                                echo "</div>";
                                                            }
                                                            if ($exam['ExamState'] == 'Presence') {
                                                                echo "<div class='row col-xs-12 text-primary'>🆕";
                                                                echo "آزمون مرحله دوم با شناسه " . $exam['RequestId'] . " ثبت حضور شده است";
                                                                echo "</div>";
                                                            }
                                                            if ($exam['ExamState'] == 'Pend') {
                                                                echo "<div class='row col-xs-12 text-primary'>🆕";
                                                                echo "آزمون مرحله دوم با شناسه " . $exam['RequestId'] . " رزرو شده است";
                                                                echo "</div>";
                                                            }
                                                        }
                                                    }
                                                    ?>
                                                    <?php
                                                    if (empty($exams['evalExams']) || !isset($exams['evalExams']) || count($exams['evalExams']) <= 0) {
                                                        echo "<div class='row col-xs-12 text-danger'>--";
                                                        echo "آزمون مرحله کانون یافت نشد";
                                                        echo "</div>";
                                                    } else {
                                                        foreach ($exams['evalExams'] as $exam) {
                                                            if ($exam['ExamState'] == 'Done') {
                                                                echo "<div class='row col-xs-12 text-primary'>🆕";
                                                                echo "آزمون کانون ارزیابی با شناسه " . $exam['RequestId'] . " تایید شده است";
                                                                echo "</div>";
                                                            }
                                                            if ($exam['ExamState'] == 'Absence') {
                                                                echo "<div class='row col-xs-12 text-primary'>🆕";
                                                                echo "آزمون کانون ارزیابی با شناسه " . $exam['RequestId'] . " ثبت غیبت شده است";
                                                                echo "</div>";
                                                            }
                                                            if ($exam['ExamState'] == 'Presence') {
                                                                echo "<div class='row col-xs-12 text-primary'>🆕";
                                                                echo "آزمون کانون ارزیابی با شناسه " . $exam['RequestId'] . " ثبت حضور شده است";
                                                                echo "</div>";
                                                            }
                                                            if ($exam['ExamState'] == 'Pend') {
                                                                echo "<div class='row col-xs-12 text-primary'>🆕";
                                                                echo "آزمون کانون ارزیابی با شناسه " . $exam['RequestId'] . " رزرو شده است";
                                                                echo "</div>";
                                                            }
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default panel-post">
                                            <div class="panel-heading">
                                                سوابق خدمت
                                            </div>
                                            <div class="panel-body">
                                                <table class="table table-bordered table-condensed table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th class="fit info-department">وضعیت خدمت</th>
                                                        <th class="fit info-educationalAttainment">علت معافیت</th>
                                                        <th class="fit info-science">توصیحات</th>
                                                        <th class="fit info-studying">تاریخ اتمام خدمت</th>
                                                        <th class="fit info-universityLevelType">ارگان پایان خدمت</th>
                                                        <th class="fit info-universityName">محل پایان خدمت</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="temp-edu-record">
                                                            <td class="fit info-department">
                                                                <?php
                                                                foreach ($EnumResumeProfile['CandidateMilitaryStatus'] as $key => $value) {
                                                                    if($candidateMilitaryStatus[0]['CandidateMilitaryStatus'] == $key){
                                                                        echo $value;
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td class="fit info-educationalAttainment">
                                                                <?php
                                                                foreach ($EnumResumeProfile['CandidateExemptTitle'] as $key => $value) {
                                                                    if($candidateMilitaryStatus[0]['CandidateExemptTitle'] == $key){
                                                                        echo $value;
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td class="fit info-science">
                                                                <?php echo $candidateMilitaryStatus[0]['CandidateExemptDescription']; ?>
                                                            </td>
                                                            <td class="fit info-studying">
                                                                <?php
                                                                    foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) {
                                                                        if($candidateMilitaryStatus[0]['CandidateMilitaryEndMonth'] == $key){
                                                                            echo $value;
                                                                        }
                                                                    }
                                                                ?>
                                                                <?php echo $candidateMilitaryStatus[0]['CandidateMilitaryEndYear']; ?>
                                                            </td>
                                                            <td class="fit info-universityLevelType">
                                                                <?php
                                                                foreach ($EnumResumeProfile['CandidateMilitaryEndArea'] as $key => $value) {
                                                                    if($candidateMilitaryStatus[0]['CandidateMilitaryEndArea'] == $key){
                                                                        echo $value;
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td class="fit info-universityName">
                                                                <?php echo $candidateMilitaryStatus[0]['CandidateMilitaryEndAreaTitle']; ?>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="panel panel-default panel-post">
                                            <div class="panel-heading">
                                                سوابق تحصیلی
                                            </div>
                                            <div class="panel-body edu-info-container table-responsive">
                                                <table class="table table-bordered table-condensed table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th class="fit info-department">گروه تحصیلی</th>
                                                        <th class="fit info-educationalAttainment">مقطع</th>
                                                        <th class="fit info-science">عنوان رشته تحصیلی</th>
                                                        <th class="fit info-studying">وضعیت تحصیل</th>
                                                        <th class="fit info-universityLevelType">دانشگاه</th>
                                                        <th class="fit info-universityName">نام دانشگاه</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php foreach ($candidateAcademicBackground as $item) { ?>
                                                        <tr class="temp-edu-record">
                                                            <td class="fit info-department">
                                                                <?php
                                                                foreach ($EnumResumeProfile['CandidateDepartment'] as $key => $value) {
                                                                    if($item['CandidateDepartment'] == $key){
                                                                        echo $value;
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td class="fit info-educationalAttainment">
                                                                <?php
                                                                foreach ($EnumResumeProfile['CandidateGrade'] as $key => $value) {
                                                                    if($item['CandidateGrade'] == $key){
                                                                        echo $value;
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td class="fit info-science">
                                                                <?php
                                                                    foreach ($EnumResumeProfile['CandidateSchoolMajor'] as $key => $value) {
                                                                        if($item['CandidateSchoolMajor'] == $key){
                                                                            echo $value;
                                                                        }
                                                                    }
                                                                ?>
                                                                <?php echo $item['CandidateMajor']; ?>
                                                            </td>
                                                            <td class="fit info-studying">
                                                                <?php
                                                                foreach ($EnumResumeProfile['AcademicStudyStatus'] as $key => $value) {
                                                                    if($item['CandidateStudyStatus'] == $key){
                                                                        echo $value;
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td class="fit info-universityLevelType">
                                                                <?php
                                                                foreach ($EnumResumeProfile['CandidateUniversityLevelType'] as $key => $value) {
                                                                    if($item['CandidateUniversityLevelType'] == $key){
                                                                        echo $value;
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td class="fit info-universityName">
                                                                <?php echo $item['CandidateUniversityName']; ?>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="panel panel-default panel-post">
                                            <div class="panel-heading">
                                                سوابق شغلی
                                            </div>
                                            <div class="panel-body edu-info-container table-responsive">
                                                <table class="table table-bordered table-condensed table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th class="fit info-department">عنوان دقیق شغلی</th>
                                                        <th class="fit info-educationalAttainment">نام سازمان</th>
                                                        <th class="fit info-science">ماه آغاز همکاری</th>
                                                        <th class="fit info-studying">سال آغاز همکاری</th>
                                                        <th class="fit info-universityLevelType">ماه پایان همکاری</th>
                                                        <th class="fit info-universityName">سال پایان همکاری</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php foreach ($candidateJobHistory as $item) { ?>
                                                        <tr class="temp-edu-record">
                                                            <td class="fit info-department">
                                                                <?php echo $item['CandidateJobTitle']; ?>
                                                            </td>
                                                            <td class="fit info-educationalAttainment">
                                                                <?php echo $item['CandidateJobCompanyTitle']; ?>
                                                            </td>
                                                            <td class="fit info-science">
                                                                <?php
                                                                foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) {
                                                                    if($item['CandidateStartJobMonth'] == $key){
                                                                        echo $value;
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td class="fit info-studying">
                                                                <?php echo $item['CandidateStartJobYear']; ?>
                                                            </td>
                                                            <td class="fit info-universityLevelType">
                                                                <?php
                                                                foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) {
                                                                    if($item['CandidateEndJobMonth'] == $key){
                                                                        echo $value;
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td class="fit info-universityName">
                                                                <?php echo $item['CandidateEndJobYear']; ?>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="panel panel-default panel-post">
                                            <div class="panel-heading">
                                                تالیف کتاب
                                            </div>
                                            <div class="panel-body book-info-container table-responsive">
                                                <table class="table table-bordered table-condensed table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th class="fit">عنوان کتاب</th>
                                                        <th class="fit info-title">ناشر</th>
                                                        <th class="fit info-publisher">ماه انتشار</th>
                                                        <th class="fit info-printYear">سال انتشار</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php foreach ($candidateBooks as $item) { ?>
                                                        <tr class="temp-edu-record">
                                                            <td class="fit info-department">
                                                                <?php echo $item['CandidateBookTitle']; ?>
                                                            </td>
                                                            <td class="fit info-educationalAttainment">
                                                                <?php echo $item['CandidateBookPublisher']; ?>
                                                            </td>
                                                            <td class="fit info-science">
                                                                <?php
                                                                foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) {
                                                                    if($item['CandidateBookPublishMonth'] == $key){
                                                                        echo $value;
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td class="fit info-studying">
                                                                <?php echo $item['CandidateBookPublishYear']; ?>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="panel panel-default panel-post">
                                            <div class="panel-heading">
                                                مقاله علمی
                                            </div>
                                            <div class="panel-body article-info-container table-responsive">
                                                <table class="table table-bordered table-condensed table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th class="fit">عنوان مقاله</th>
                                                        <th class="fit info-title">سطح مقاله</th>
                                                        <th class="fit info-articleLevelType">عنوان مجله</th>
                                                        <th class="fit info-printYear">سال نشر</th>
                                                        <th class="fit info-printMonth">ماه نشر</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php foreach ($candidateArticles as $item) { ?>
                                                        <tr class="temp-edu-record">
                                                            <td class="fit info-department">
                                                                <?php echo $item['CandidateArticleTitle']; ?>
                                                            </td>
                                                            <td class="fit info-educationalAttainment">
                                                                <?php
                                                                foreach ($EnumResumeProfile['ArticleLevelType'] as $key => $value) {
                                                                    if($item['CandidateArticleLevel'] == $key){
                                                                        echo $value;
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td class="fit info-science">
                                                                <?php echo $item['CandidateArticleMagazineTitle']; ?>
                                                            </td>
                                                            <td class="fit info-studying">
                                                                <?php echo $item['CandidateArticlePublishYear']; ?>
                                                            </td>
                                                            <td class="fit info-universityLevelType">
                                                                <?php
                                                                foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) {
                                                                    if($item['CandidateArticlePublishMonth'] == $key){
                                                                        echo $value;
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="panel panel-default panel-post">
                                            <div class="panel-heading">
                                                اختراعات
                                            </div>
                                            <div class="panel-body invention-info-container table-responsive">
                                                <table class="table table-bordered table-condensed table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th class="fit">عنوان اختراع</th>
                                                        <th class="fit info-title">حوزه ابداع</th>
                                                        <th class="fit info-registerNumber">شماره ثبت</th>
                                                        <th class="fit info-description">شرح اختراع</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php foreach ($candidateInvention as $item) { ?>
                                                        <tr class="temp-edu-record">
                                                            <td class="fit info-department">
                                                                <?php echo $item['CandidateInventionTitle']; ?>
                                                            </td>
                                                            <td class="fit info-educationalAttainment">
                                                                <?php echo $item['CandidateInventionField']; ?>
                                                            </td>
                                                            <td class="fit info-science">
                                                                <?php echo $item['CandidateInventionRegisterNumber']; ?>
                                                            </td>
                                                            <td class="fit info-studying">
                                                                <?php echo $item['CandidateInventionDescription']; ?>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="panel panel-default panel-post">
                                            <div class="panel-heading">
                                                طرح پژوهشی
                                            </div>
                                            <div class="panel-body research-info-container table-responsive">
                                                <table class="table table-bordered table-condensed table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th class="fit info-title">عنوان طراح</th>
                                                        <th class="fit info-responsibility">مسئولیت</th>
                                                        <th class="fit info-executive">مجری</th>
                                                        <th class="fit info-employer">کارفرما</th>
                                                        <th class="fit info-yearDate">سال</th>
                                                        <th class="fit info-monthDate">ماه</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    <?php foreach ($candidateResearch as $item) { ?>
                                                        <tr class="temp-edu-record">
                                                            <td class="fit info-department">
                                                                <?php echo $item['CandidateResearchTitle']; ?>
                                                            </td>
                                                            <td class="fit info-educationalAttainment">
                                                                <?php echo $item['CandidateResearchResponsibility']; ?>
                                                            </td>
                                                            <td class="fit info-science">
                                                                <?php echo $item['CandidateResearchWorker']; ?>
                                                            </td>
                                                            <td class="fit info-studying">
                                                                <?php echo $item['CandidateResearchEmployer']; ?>
                                                            </td>
                                                            <td class="fit info-universityLevelType">
                                                                <?php echo $item['CandidateResearchYear']; ?>
                                                            </td>
                                                            <td class="fit info-universityName">
                                                                <?php
                                                                foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) {
                                                                    if($item['CandidateResearchMonth'] == $key){
                                                                        echo $value;
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="panel panel-default panel-post">
                                            <div class="panel-heading">
                                                همایش علمی
                                            </div>
                                            <div class="panel-body scientific-info-container table-responsive">
                                                <table class="table table-bordered table-condensed table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th class="fit info-title">عنوان همایش</th>
                                                        <th class="fit info-acceptanceOfferType">سطح</th>
                                                        <th class="fit info-conferenceLevelType">نوع پذیرش / ارائه</th>
                                                        <th class="fit info-yearDate">سال</th>
                                                        <th class="fit info-monthDate">ماه</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php foreach ($candidateConference as $item) { ?>
                                                        <tr class="temp-edu-record">
                                                            <td class="fit info-department">
                                                                <?php echo $item['CandidateConferenceTitle']; ?>
                                                            </td>
                                                            <td class="fit info-educationalAttainment">
                                                                <?php
                                                                foreach ($EnumResumeProfile['ConferenceLevelType'] as $key => $value) {
                                                                    if($item['CandidateConferenceLevel'] == $key){
                                                                        echo $value;
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td class="fit info-science">
                                                                <?php
                                                                foreach ($EnumResumeProfile['AcceptanceOfferType'] as $key => $value) {
                                                                    if($item['CandidateConferenceAcceptType'] == $key){
                                                                        echo $value;
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td class="fit info-studying">
                                                                <?php echo $item['CandidateConferenceYear']; ?>
                                                            </td>
                                                            <td class="fit info-universityLevelType">
                                                                <?php
                                                                foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) {
                                                                    if($item['CandidateConferenceMonth'] == $key){
                                                                        echo $value;
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="panel panel-default panel-post">
                                            <div class="panel-heading">
                                                ترجمه ها
                                            </div>
                                            <div class="panel-body translate-info-container table-responsive">
                                                <table class="table table-bordered table-condensed table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th class="fit info-title">عنوان</th>
                                                        <th class="fit info-publisher">ناشر</th>
                                                        <th class="fit info-translateType">نوع</th>
                                                        <th class="fit info-publishYear">سال</th>
                                                        <th class="fit info-publishMonth">ماه</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php foreach ($candidateTranslation as $item) { ?>
                                                        <tr class="temp-edu-record">
                                                            <td class="fit info-department">
                                                                <?php
                                                                foreach ($EnumResumeProfile['TranslateType'] as $key => $value) {
                                                                    if($item['CandidateTranslationType'] == $key){
                                                                        echo $value;
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td class="fit info-educationalAttainment">
                                                                <?php echo $item['CandidateTranslationTitle']; ?>
                                                            </td>
                                                            <td class="fit info-science">
                                                                <?php echo $item['CandidateTranslationPublisher']; ?>
                                                            </td>
                                                            <td class="fit info-studying">
                                                                <?php echo $item['CandidateTranslationYear']; ?>
                                                            </td>
                                                            <td class="fit info-universityLevelType">
                                                                <?php
                                                                foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) {
                                                                    if($item['CandidateTranslationMonth'] == $key){
                                                                        echo $value;
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="panel panel-default panel-post">
                                            <div class="panel-heading">
                                                سوابق سیاسی
                                            </div>
                                            <div class="panel-body political-info-container table-responsive">
                                                <table class="table table-bordered table-condensed table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th class="fit info-politicalType">قالب</th>
                                                        <th class="fit info-otherPoliticalType">سایر قالب</th>
                                                        <th class="fit info-mediaName">رسانه</th>
                                                        <th class="fit info-activityType">نوع فعالیت</th>
                                                        <th class="fit info-beginMonth">ماه شروع فعالیت</th>
                                                        <th class="fit info-beginYear">سال شروع فعالیت</th>
                                                        <th class="fit info-endMonth">ماه پایان فعالیت</th>
                                                        <th class="fit info-endYear">سال پایان فعالیت</th>
                                                        <th class="fit info-yearCooperation">سال همکاری</th>
                                                        <th class="fit info-responsibility">مسئولیت</th>
                                                        <th class="fit info-membershipType">نوع عضویت</th>
                                                        <th class="fit info-electionType">نوع انتخابات</th>
                                                        <th class="fit info-electionPeriodType">دوره انتخابات</th>
                                                        <th class="fit info-parliamentPeriodType">دوره انتخابات</th>
                                                        <th class="fit info-expertsParliamentPeriodType">دوره انتخابات
                                                        </th>
                                                        <th class="fit info-cityCouncilPeriodType">دوره انتخابات</th>
                                                        <th class="fit info-supervisoryBoardType">مجلس</th>
                                                        <th class="fit info-mediaFormat">نوع رسانه</th>
                                                        <th class="fit info-otherMediaFormat">سایر عنوان رسانه</th>
                                                        <th class="fit info-candidateName">نام نامزد/لیست</th>
                                                        <th class="fit info-description">توضیحات</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php foreach ($politicBackground as $item) { ?>
                                                        <tr class="temp-edu-record">
                                                            <td class="fit info-department">
                                                                <?php
                                                                foreach ($EnumResumeProfile['CandidatePoliticActivityType'] as $key => $value) {
                                                                    if($item['CandidateActivityType'] == $key){
                                                                        echo $value;
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td class="fit info-science">
                                                                <?php echo $item['CandidateActivityTypeOtherOrganizationTitle']; ?>
                                                            </td>
                                                            <td class="fit info-studying">
                                                                <?php
                                                                foreach ($EnumResumeProfile['CandidatePoliticElectionType'] as $key => $value) {
                                                                    if($item['CandidateElectionType'] == $key){
                                                                        echo $value;
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td class="fit info-universityLevelType">
                                                                <?php echo $item['CandidateElectionPeriod']; ?>
                                                            </td>
                                                            <td class="fit info-universityName">
                                                                <?php echo $item['CandidateElectionListName']; ?>
                                                            </td>
                                                            <td class="fit info-universityName">
                                                                <?php
                                                                foreach ($EnumResumeProfile['CandidateHeadquarterActivityTitle'] as $key => $value) {
                                                                    if($item['CandidateHeadquarterActivityTitle'] == $key){
                                                                        echo $value;
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td class="fit info-universityName">
                                                                <?php
                                                                foreach ($EnumResumeProfile['CandidateMediaType'] as $key => $value) {
                                                                    if($item['CandidateMediaType'] == $key){
                                                                        echo $value;
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td class="fit info-universityName">
                                                                <?php echo $item['CandidateMediaTypeTitle']; ?>
                                                            </td>
                                                            <td class="fit info-universityName">
                                                                <?php echo $item['CandidateMediaTitle']; ?>
                                                            </td>
                                                            <td class="fit info-universityName">
                                                                <?php echo $item['CandidateMediaActivityType']; ?>
                                                                <?php
                                                                foreach ($EnumResumeProfile['CandidateMediaType'] as $key => $value) {
                                                                    if($item['CandidateMediaType'] == $key){
                                                                        echo $value;
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td class="fit info-universityName">
                                                                <?php echo $item['CandidateResponsibility']; ?>
                                                            </td>
                                                            <td class="fit info-universityName">
                                                                <?php echo $item['CandidateMemberShip']; ?>
                                                            </td>
                                                            <td class="fit info-universityName">
                                                                <?php echo $item['CandidateMediaStartMonth']; ?>
                                                            </td>
                                                            <td class="fit info-universityName">
                                                                <?php echo $item['CandidateMediaStartYear']; ?>
                                                            </td>
                                                            <td class="fit info-universityName">
                                                                <?php echo $item['CandidateMediaEndMonth']; ?>
                                                            </td>
                                                            <td class="fit info-universityName">
                                                                <?php echo $item['CandidateMediaEndYear']; ?>
                                                            </td>
                                                            <td class="fit info-universityName">
                                                                <?php echo $item['CandidateActivityDescription']; ?>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="panel panel-default panel-post">
                                            <div class="panel-heading">
                                                مهارت ها
                                            </div>
                                            <div class="panel-body skill-info-container">
                                                <table class="table table-bordered table-condensed table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th class="fit info-politicalType">نام مهارت</th>
                                                        <th class="fit info-otherPoliticalType">سطح مهارت</th>
                                                        <th class="fit info-mediaName">نحوه یادگیری</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php foreach ($candidateSkills as $item) { ?>
                                                        <tr class="temp-edu-record">
                                                            <td class="fit info-department">
                                                                <?php echo $item['SkillType']; ?>
                                                            </td>
                                                            <td class="fit info-educationalAttainment">
                                                                <?php
                                                                foreach ($EnumResumeProfile['SkillLevel'] as $key => $value) {
                                                                    if($item['SkillLevel'] == $key){
                                                                        echo $value;
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td class="fit info-science">
                                                                <?php
                                                                foreach ($EnumResumeProfile['SkillLearnType'] as $key => $value) {
                                                                    if($item['SkillLearnType'] == $key){
                                                                        echo $value;
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in" id="Grading">
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label for="inputGrade" class="col-sm-2 control-label">نمره</label>
                                                <div class="col-sm-10">
                                                    <strong>
                                                        آخرین نمره ثبت شده برای این نامزد
                                                        <?php echo $candidate['CandidateScore']; ?>
                                                        می باشد
                                                    </strong>
                                                    <div class="form-line">
                                                        <input type="number" class="form-control"
                                                               value="<?php echo $candidate['CandidateScore']; ?>"
                                                               id="inputGrade"
                                                               min="0"
                                                               max="100"
                                                               name="inputGrade"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button
                                                            id="doGrading"
                                                            type="button"
                                                            class="btn btn-danger">ثبت
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in" id="AcceptFirstExam">
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button
                                                            id="doAcceptFirstExam"
                                                            type="button"
                                                            class="btn btn-success">تایید و ورود به مرحله دوم
                                                    </button>
                                                    <button
                                                            id="doRejectFirstExam"
                                                            type="button"
                                                            class="btn btn-danger">رد آزمون مرحله اول
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in" id="AcceptSecondExam">
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button
                                                            id="doAcceptSecondExam"
                                                            type="button"
                                                            class="btn btn-success">تایید و ورود به کانون ارزیابی
                                                    </button>
                                                    <button
                                                            id="doRejectSecondExam"
                                                            type="button"
                                                            class="btn btn-danger">رد آزمون مرحله دوم
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in" id="AcceptEvaluationExam">
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button
                                                            id="doAcceptEvaluationExam"
                                                            type="button"
                                                            class="btn btn-success">تایید کانون ارزیابی
                                                    </button>
                                                    <button
                                                            id="doRejectEvaluationExam"
                                                            type="button"
                                                            class="btn btn-danger">رد آزمون کانون ارزیابی
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>