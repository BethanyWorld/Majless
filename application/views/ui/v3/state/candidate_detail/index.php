<?php $_DIR = base_url('assets/ui/v3/'); ?>
<div class="page-caption">
    نامزد انتخاباتی استان
    <?php echo urldecode($stateName); ?>
</div>
<div class="container container-wrapper">
    <div class="row col-xs-12 col-md-3 pull-right sidebar">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title text-center">
                    <?php echo $candidate['CandidateFirstName'] . " " . $candidate['CandidateLastName']; ?>
                </h3>
            </div>
            <div class="panel-body">
                <img style="max-width: 100%;" class="thumbnail profile-image"
                     src="<?php echo $_DIR; ?>/images/profile.jpg">
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">اخبار و رویداد های مرتبط با این نماینده</h3>
            </div>
            <div class="panel-body">
                <ul>
                    <?php
                    if (!isset($posts['success'])) {
                        foreach ($posts as $statePost) { ?>
                            <li>
                                <a href="<?php echo base_url('State/post/' . $stateId . '/' . $statePost['PostId'] . '/' . seoUrl($statePost['PostTitle'])); ?>">
                                    <?php echo $statePost['PostTitle']; ?>
                                </a>
                            </li>
                        <?php }
                    } else { ?>
                        موردی یافت نشد
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="row col-xs-12 col-md-9 pull-left">
        <div class="row">
            <div class="col-xs-12">
                <div class="alert alert-info text-center">
                    <h4>
                        اطلاعات بصورت نمونه آورده شده است.به محض تایید شورای نگهبان اطلاعات نامزد های انتخاباتی مجلس یازدهم در این قسمت قرار خواهد گرفت
                    </h4>
                </div>
            </div>
        </div>
        <section class="col-xs-12 mp-section zp" style="display: inline-block;width: 100%;">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#profile"
                       aria-controls="profile"
                       role="tab"
                       data-toggle="tab">رزومه</a>
                </li>
                <li role="presentation">
                    <a href="#academiccareerrecords" aria-controls="academiccareerrecords" role="tab"
                                           data-toggle="tab">سوابق شغلی تحصیلی</a>
                </li>
                <li role="presentation"><a href="#inventory" aria-controls="inventory" role="tab" data-toggle="tab">فهرست
                        اموال</a></li>
                <li role="presentation"><a href="#electioncosts" aria-controls="electioncosts" role="tab"
                                           data-toggle="tab">هزینه های انتخابات</a></li>
                <li role="presentation"><a href="#electionpromises" aria-controls="electionpromises" role="tab"
                                           data-toggle="tab">وعده های انتخاباتی</a></li>
                <li role="presentation"><a href="#relatedNews" aria-controls="relatedNews" role="tab"
                                           data-toggle="tab">اخبار مرتبط</a></li>
                <li role="presentation"><a href="#reportabuse" aria-controls="reportabuse" role="tab" data-toggle="tab">گزارش
                        تخلف</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade active in" id="profile">
                    <ul class="personal-info-container">
                        <li>
                            <span>کد ملی</span>
                            <span><?php echo $candidate['CandidateNationalCode']; ?></span>
                        </li>
                        <li>
                            <span>نمره رزومه</span>
                            <span><?php echo $candidate['CandidateScore']; ?></span>
                        </li>
                        <li>
                            <span>استان</span>
                            <span><?php echo $candidate['StateName']; ?></span>
                        </li>
                        <li>
                            <span>شهر</span>
                            <span><?php echo $candidate['CityName']; ?></span>
                        </li>
                        <li>
                            <span>تاریخ تولد</span>
                            <span class="info-birthDate"><img src="<?php echo $gifLoader; ?>"/></span>
                        </li>
                        <li>
                            <span>نام پدر</span>
                            <span class="info-fatherName"><img src="<?php echo $gifLoader; ?>"/></span>
                        </li>
                        <li>
                            <span>جنسیت</span>
                            <span class="info-gender"><img src="<?php echo $gifLoader; ?>"/></span>
                        </li>
                        <li>
                            <span>وضعیت تاهل</span>
                            <span class="info-maritalStatus"><img src="<?php echo $gifLoader; ?>"/></span>
                        </li>
                        <li>
                            <span>دین</span>
                            <span class="info-religion"><img src="<?php echo $gifLoader; ?>"/></span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade " id="academiccareerrecords">
                    <div class="panel panel-default panel-post">
                        <div class="panel-heading">
                            سوابق خدمت
                        </div>
                        <div class="panel-body">
                            <div class="alert  military-info-container">
                                <img src="<?php echo $gifLoader; ?>"/>
                            </div>
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
                                    <th class="fit info-studying">در حال تحصیل</th>
                                    <th class="fit info-universityLevelType">دانشگاه</th>
                                    <th class="fit info-universityName">نام دانشگاه</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="temp-edu-record">
                                    <td class="fit info-department"></td>
                                    <td class="fit info-educationalAttainment"></td>
                                    <td class="fit info-science"></td>
                                    <td class="fit info-studying"></td>
                                    <td class="fit info-universityLevelType"></td>
                                    <td class="fit info-universityName"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="panel panel-default panel-post">
                        <div class="panel-heading">
                            سوابق شغلی
                        </div>
                        <div class="panel-body job-info-container table-responsive">
                            <table class="table table-bordered table-condensed table-striped">
                                <thead>
                                <tr>
                                    <th class="fit info-jobTitle">عنوان شغلی</th>
                                    <th class="fit info-organizationName">نام سازمان</th>
                                    <th class="fit info-beginYear">شروع فعالیت-سال</th>
                                    <th class="fit info-beginMonth">شروع فعالیت-ماه</th>
                                    <th class="fit info-endYear">پایان فعالیت-سال</th>
                                    <th class="fit info-endMonth">پایان فعالیت-ماه</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="temp-job-record">
                                    <th class="fit info-jobTitle"></th>
                                    <th class="fit info-organizationName"></th>
                                    <th class="fit info-beginYear"></th>
                                    <th class="fit info-beginMonth"></th>
                                    <th class="fit info-endYear"></th>
                                    <th class="fit info-endMonth"></th>
                                </tr>
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
                <div role="tabpanel" class="tab-pane fade " id="inventory">
                </div>
                <div role="tabpanel" class="tab-pane fade " id="electioncosts">
                </div>
                <div role="tabpanel" class="tab-pane fade " id="electionpromises">
                </div>
                <div role="tabpanel" class="tab-pane fade " id="relatedNews">
                </div>
                <div role="tabpanel" class="tab-pane fade " id="reportabuse">
                    <div class="col-xs-12">
                        <input type="hidden" id="inputReportCandidateId" name="inputReportCandidateId"
                               value="<?php /*echo $data['CandidateId'];*/ ?>"/>
                        <input type="hidden" id="inputCSRF" name="inputCSRF" value="<?= $CSRF; ?>"/>
                        <div class="row col-xs-12 col-md-12 pull-right">
                            <div class="form-group col-xs-12 col-md-4 pull-right">
                                <label for="inputReportFullName">نام و نام خانوادگی</label>
                                <input class="form-control" type="text" id="inputReportFullName"
                                       name="inputReportFullName" autofocus/>
                            </div>
                            <div class="form-group col-xs-12 col-md-4 pull-right">
                                <label for="inputReportTitle">عنوان</label>
                                <input class="form-control" type="text" id="inputReportTitle" name="inputReportTitle"/>
                            </div>
                            <div class="form-group col-xs-12 col-md-4 pull-right">
                                <label for="inputReportPhone">تلفن همراه (نزد ما محفوظ خواهد ماند)</label>
                                <input class="form-control" type="text" id="inputReportPhone" name="inputReportPhone"/>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="inputReportContent">پیام</label>
                                <textarea class="form-control" rows="6" id="inputReportContent"
                                          name="inputReportContent"></textarea>
                            </div>
                            <div class="row col-xs-12 form-group">
                                <div class="row col-xs-12">
                                    <label>کد امنیتی</label>
                                </div>
                                <div class="pull-right">
                                    <img class="captcha_img"
                                         style="margin: 10px 5px;border: 2px solid #ccc;"
                                         src="<?php echo base_url('GetCaptcha'); ?>"/>
                                </div>
                                <div class="pull-right">
                                    <input type="text"
                                           style="position: relative;top:20px;"
                                           name="inputCaptcha" id="inputCaptcha" class="form-control"
                                           placeholder="کد امنیتی" >
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary pull-left" id="submitReportForm">
                                    ارسال
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>