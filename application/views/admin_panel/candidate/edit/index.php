<?php $_DIR = base_url('assets/empanel/'); ?>
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
                                     src="<?php echo $noImg; ?>"
                                     style="width: 90%;max-width: 145px;" />
                            </div>
                            <input type="hidden" name="inputCandidateId" id="inputCandidateId" value="<?php echo $candidate['CandidateId']; ?>" />

                            <div class="content-area">
                                <h4>
                                    <?php echo $candidate['CandidateFirstName']." ".$candidate['CandidateLastName']; ?>
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
                                    <span class="info-birthDate"><img src="<?php echo $gifLoader; ?>" /></span>
                                </li>
                                <li>
                                    <span>نام پدر</span>:
                                    <span class="info-fatherName"><img src="<?php echo $gifLoader; ?>" /></span>
                                </li>
                                <li>
                                    <span>جنسیت</span>:
                                    <span class="info-gender"><img src="<?php echo $gifLoader; ?>" /></span>
                                </li>
                                <li>
                                    <span>وضعیت تاهل</span>:
                                    <span class="info-maritalStatus"><img src="<?php echo $gifLoader; ?>" /></span>
                                </li>
                                <li>
                                    <span>دین</span>:
                                    <span class="info-religion"><img src="<?php echo $gifLoader; ?>" /></span>
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
                                        <a href="#military" aria-controls="military"
                                           role="tab" data-toggle="tab">رزومه</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#Grading" aria-controls="Grading"
                                           role="tab" data-toggle="tab">ثبت نمره</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#AcceptFirstExam" aria-controls="AcceptFirstExam"
                                           role="tab" data-toggle="tab">ثبت نتیجه آزمون مرحله اول</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#AcceptSecondExam" aria-controls="AcceptSecondExam"
                                           role="tab" data-toggle="tab">ثبت نتیجه آزمون مرحله دوم</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="military">
                                        <div class="panel panel-default panel-post">
                                            <div class="panel-heading">
                                                سوابق خدمت
                                            </div>
                                            <div class="panel-body">
                                                <div class="alert  military-info-container">
                                                    <img src="<?php echo $gifLoader; ?>" />
                                                </div>
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
                                                        <th class="fit">ردیف</th>
                                                        <th class="fit info-title">عنوان کتاب</th>
                                                        <th class="fit info-publisher">ناشر</th>
                                                        <th class="fit info-printYear">سال چاپ</th>
                                                        <th class="fit info-printMonth">ماه چاپ</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr class="temp-book-record">
                                                        <td class="fit row"></td>
                                                        <td class="fit info-title"></td>
                                                        <td class="fit info-publisher"></td>
                                                        <td class="fit info-printYear"></td>
                                                        <td class="fit info-printMonth"></td>
                                                    </tr>
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
                                                        <th class="fit">ردیف</th>
                                                        <th class="fit info-title">عنوان مقاله</th>
                                                        <th class="fit info-articleLevelType">سطح مقاله</th>
                                                        <th class="fit info-printYear">سال نشر</th>
                                                        <th class="fit info-printMonth">ماه نشر</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr class="temp-article-record">
                                                        <td class="fit row"></td>
                                                        <td class="fit info-title"></td>
                                                        <td class="fit info-articleLevelType"></td>
                                                        <td class="fit info-printYear"></td>
                                                        <td class="fit info-printMonth"></td>
                                                    </tr>
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
                                                        <th class="fit">ردیف</th>
                                                        <th class="fit info-title">عنوان اختراع</th>
                                                        <th class="fit info-registerNumber">شماره ثبت</th>
                                                        <th class="fit info-domain">حوزه</th>
                                                        <th class="fit info-description">توضیحات</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr class="temp-invention-record">
                                                        <td class="fit row"></td>
                                                        <th class="fit info-title"></th>
                                                        <th class="fit info-registerNumber"></th>
                                                        <th class="fit info-domain"></th>
                                                        <th class="fit info-description"></th>
                                                    </tr>
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
                                                        <th class="fit">ردیف</th>
                                                        <th class="fit info-title">عنوان طراح</th>
                                                        <th class="fit info-responsibility">مسئولیت</th>
                                                        <th class="fit info-executive">مجری</th>
                                                        <th class="fit info-employer">کارفرما</th>
                                                        <th class="fit info-yearDate">سال</th>
                                                        <th class="fit info-monthDate">ماه</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr class="temp-research-record">
                                                        <td class="fit row"></td>
                                                        <th class="fit info-title"></th>
                                                        <th class="fit info-responsibility"></th>
                                                        <th class="fit info-executive"></th>
                                                        <th class="fit info-employer"></th>
                                                        <th class="fit info-yearDate"></th>
                                                        <th class="fit info-monthDate"></th>
                                                    </tr>
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
                                                        <th class="fit">ردیف</th>
                                                        <th class="fit info-title">عنوان همایش</th>
                                                        <th class="fit info-acceptanceOfferType">سطح</th>
                                                        <th class="fit info-conferenceLevelType">نوع پذیرش / ارائه</th>
                                                        <th class="fit info-yearDate">سال</th>
                                                        <th class="fit info-monthDate">ماه</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr class="temp-scientific-record">
                                                        <td class="fit row"></td>
                                                        <th class="fit info-title"></th>
                                                        <th class="fit info-acceptanceOfferType"></th>
                                                        <th class="fit info-conferenceLevelType"></th>
                                                        <th class="fit info-yearDate"></th>
                                                        <th class="fit info-monthDate"></th>
                                                    </tr>
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
                                                        <th class="fit">ردیف</th>
                                                        <th class="fit info-title">عنوان</th>
                                                        <th class="fit info-publisher">ناشر</th>
                                                        <th class="fit info-translateType">نوع</th>
                                                        <th class="fit info-publishYear">سال</th>
                                                        <th class="fit info-publishMonth">ماه</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr class="temp-translate-record">
                                                        <td class="fit row"></td>
                                                        <th class="fit info-title"></th>
                                                        <th class="fit info-publisher"></th>
                                                        <th class="fit info-translateType"></th>
                                                        <th class="fit info-publishYear"></th>
                                                        <th class="fit info-publishMonth"></th>
                                                    </tr>
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
                                                        <th class="fit">ردیف</th>
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
                                                        <th class="fit info-expertsParliamentPeriodType">دوره انتخابات</th>
                                                        <th class="fit info-cityCouncilPeriodType">دوره انتخابات</th>
                                                        <th class="fit info-supervisoryBoardType">مجلس</th>
                                                        <th class="fit info-mediaFormat">نوع رسانه</th>
                                                        <th class="fit info-otherMediaFormat">سایر عنوان رسانه</th>
                                                        <th class="fit info-candidateName">نام نامزد/لیست</th>
                                                        <th class="fit info-description">توضیحات</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr class="temp-politic-record">
                                                        <td class="fit row"></td>
                                                        <td class="fit info-politicalType"></td>
                                                        <td class="fit info-otherPoliticalType"></td>
                                                        <td class="fit info-mediaName"></td>
                                                        <td class="fit info-activityType"></td>
                                                        <td class="fit info-beginMonth"></td>
                                                        <td class="fit info-beginYear"></td>
                                                        <td class="fit info-endMonth"></td>
                                                        <td class="fit info-endYear"></td>
                                                        <td class="fit info-yearCooperation"></td>
                                                        <td class="fit info-responsibility"></td>
                                                        <td class="fit info-membershipType"></td>
                                                        <td class="fit info-electionType"></td>
                                                        <td class="fit info-electionPeriodType"></td>
                                                        <td class="fit info-parliamentPeriodType"></td>
                                                        <td class="fit info-expertsParliamentPeriodType"></td>
                                                        <td class="fit info-cityCouncilPeriodType"></td>
                                                        <td class="fit info-supervisoryBoardType"></td>
                                                        <td class="fit info-mediaFormat"></td>
                                                        <td class="fit info-otherMediaFormat"></td>
                                                        <td class="fit info-candidateName"></td>
                                                        <td class="fit info-description"></td>
                                                    </tr>
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
                                                        <th class="fit">ردیف</th>
                                                        <th class="fit info-politicalType">نام مهارت</th>
                                                        <th class="fit info-otherPoliticalType">سطح مهارت</th>
                                                        <th class="fit info-mediaName">نحوه یادگیری</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr class="temp-skill-record">
                                                        <td class="fit row"></td>
                                                        <td class="fit info-skillNameType"></td>
                                                        <td class="fit info-skillLevel"></td>
                                                        <td class="fit info-howLearn"></td>
                                                    </tr>
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
                                                    <div class="form-line">
                                                        <input type="text" class="form-control"
                                                               id="inputGrade"
                                                               name="inputGrade"  />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button
                                                            id="doGrading"
                                                            type="button"
                                                            class="btn btn-danger">ثبت</button>
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
                                                            class="btn btn-success">تایید و ورود به مرحله دوم</button>
                                                    <button
                                                            id="doRejectFirstExam"
                                                            type="button"
                                                            class="btn btn-danger">رد آزمون مرحله اول</button>
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
                                                            class="btn btn-success">تایید و ورود به کانون ارزیابی</button>
                                                    <button
                                                            id="doRejectSecondExam"
                                                            type="button"
                                                            class="btn btn-danger">رد آزمون مرحله دوم</button>
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