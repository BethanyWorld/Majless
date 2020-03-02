<?php $_DIR = base_url('assets/ui/v4/'); ?>
<script src="<?php echo $_DIR; ?>js/angular.1.6.9.min.js"></script>
<h1 class="page-caption">
    نامزد انتخاباتی استان
    <?php echo urldecode($stateName); ?>
</h1>
<div ng-app="myApp" ng-controller="myCtrl">
    <div class="container container-wrapper">
        <div class="col-md-3 col-xs-12 pull-right">
            <div class="panel panel-default">
                <div class="panel-body padding-0">
                    <img style="max-width: 100%;" class="thumbnail profile-image"
                         src="<?php echo $candidate['CandidateProfileImage']; ?>">
                </div>
            </div>
            <div class="col-md-12 padding-0 visible-lg visible-md">
                <div class="col-md-12 padding-0 RightPanel">
                    <ul class="col-md-12 padding-0 commonScrollStyle RightPanelUl">
                        <li class="col-md-12 padding-0">
                            <a href="#academic-background">
                                <i class="zmdi RightpanelIcon">
                                    <span class="fa fa-book"></span>
                                </i>
                                <div class="RightPanelContent">
                                    <div class="RightPanleTitle"> سوابق تحصیلی</div>
                                </div>
                            </a>
                        </li>
<!--                        --><?php //if ($candidate['CandidateGender'] == 'Male') { ?>
<!--                            <li class="col-md-12 padding-0">-->
<!--                                <a href="#military-records">-->
<!--                                    <i class="zmdi RightpanelIcon">-->
<!--                                        <span class="fa fa-flag"></span>-->
<!--                                    </i>-->
<!--                                    <div class="RightPanelContent">-->
<!--                                        <div class="RightPanleTitle"> نظام وظیفه</div>-->
<!--                                    </div>-->
<!--                            </li>-->
<!--                        --><?php //} ?>

                        <li class="col-md-12 padding-0">
                            <a href="#work-experience">
                                <i class="zmdi RightpanelIcon">
                                    <span class="fa fa-cogs"></span>
                                </i>
                                <div class="RightPanelContent">
                                    <div class="RightPanleTitle"> سوابق شغلی</div>
                                </div>
                            </a>
                        </li>
                        <li class="col-md-12 padding-0">
                            <a href="#scientific-research-records">
                                <i class="zmdi RightpanelIcon">
                                    <span class="fa fa-flask"></span>
                                </i>
                                <div class="RightPanelContent">
                                    <div class="RightPanleTitle"> سوابق علمی پژوهشی</div>
                                </div>
                            </a>
                        </li>
<!--                        <li class="col-md-12 padding-0">-->
<!--                            <a href="#skills">-->
<!--                                <i class="zmdi RightpanelIcon">-->
<!--                                    <span class="fa fa-outdent"></span>-->
<!--                                </i>-->
<!--                                <div class="RightPanelContent">-->
<!--                                    <div class="RightPanleTitle"> مهارت ها</div>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                        </li>-->
                        <li class="col-md-12 padding-0">
                            <a href="#election-promises">
                                <i class="zmdi RightpanelIcon">
                                    <span class="fa fa-outdent"></span>
                                </i>
                                <div class="RightPanelContent">
                                    <div class="RightPanleTitle">وعده های انتخاباتی</div>
                                </div>
                            </a>
                        </li>
                        <li class="col-md-12 padding-0">
                            <a href="#political-background">
                                <i class="zmdi RightpanelIcon">
                                    <span class="fa fa-handshake-o"></span>
                                </i>
                                <div class="RightPanelContent">
                                    <div class="RightPanleTitle"> سوابق سیاسی</div>
                                </div>
                        </li>
                        <li class="col-md-12 padding-0">
                            <a href="#social-cultural-background">
                                <i class="zmdi RightpanelIcon">
                                    <span class="fa fa-bookmark"></span>
                                </i>
                                <div class="RightPanelContent">
                                    <div class="RightPanleTitle"> سوابق فرهنگی اجتماعی</div>
                                </div>
                            </a>
                        </li>
                        <li class="col-md-12 padding-0">
                            <a href="#property-assets">
                                <i class="zmdi RightpanelIcon">
                                    <span class="fa fa-money"></span>
                                </i>
                                <div class="RightPanelContent">
                                    <div class="RightPanleTitle">اطلاعات مالی</div>
                                </div>
                            </a>
                        </li>
                        <li class="col-md-12 padding-0">
                            <a href="<?php echo base_url('State/detail/' . $stateId . '/' . $stateName) ?>">
                                <i class="zmdi RightpanelIcon">
                                    <span class="fa fa-arrow-left"></span>
                                </i>
                                <div class="RightPanelContent">
                                    <div class="RightPanleTitle">بازگشت</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-12 padding-0">
                    <h4 style="text-align: center; background: #095644;color: #fff;padding: 6px 2px;font-size: 14px;">
                        رویداد های مرتبط</h4>
                    <?php
                    foreach ($wordpressPosts as $item) { ?>
                        <p>
                            <a style="display: inline-block;width: 100%;color: #095644;font-weight: 900;padding: 5px 8px;line-height: 30px;"
                               target="_blank" href="<?php echo base_url('blog/?p=' . $item['ID']); ?>">
                                <?php echo $item['post_title']; ?>
                            </a>
                        </p>
                    <?php } ?><?php
                    if (count($wordpressPosts) <= 0) { ?>
                        <p>
                            موردی یافت نشد
                        </p>
                    <?php } ?>
                </div>

            </div>
        </div>
        <div id="container-wrapper" class="row col-xs-12 col-md-9 pull-left responsive-style-auto-margin">
            <div class="row">
                <div class="panel left-candidate-panel-resume padding-0">
                    <div class="alert alert-info-candidate text-center">
                        <div class="col-md-12 col-xs-12 candidate-description">
                            <h2>
                                {{ candidateFirstName }}
                                {{CandidateLastName }}
                            </h2>
                            <span>
                                {{CandidateBirthDate }}
                            </span>
                        </div>
                        <h5>
                            نامزد انتخاباتی استان
                            <strong class="colored">{{StateName}}</strong>
                            شهر
                            <strong class="colored"> {{CityName}}</strong>
                            حوزه انتخابیه
                            <strong class="colored">{{ElectionName}}</strong>
                        </h5>
                    </div>
                </div>

                <div class="panel left-candidate-panel-resume padding-0">
                    <?php
                    $isHidden = "";
                    if ($candidate['CandidateResumeForViewStatus'] == 'Reject') {
                        $isHidden = "hidden";
                    }
                    ?>
                    <div class="<?php echo $isHidden; ?>">
                        <div class="col-xs-12">
                            <table class="table table-condensed table-hover text-center">
                                <thead>
                                <tr class="text-center">
                                    <th class="text-center" style="font-size: 10px;text-align: center !important;">
                                        برآیند
                                        آزمون و کانون
                                    </th>
                                    <th class="text-center" style="font-size: 10px;text-align: center !important;">نمره
                                        کانون ارزیابی (وزن 0.7)
                                    </th>
                                    <th class="text-center" style="font-size: 10px;text-align: center !important;">نمره
                                        کل
                                        آزمون (وزن 0.3)
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-center">
                                        <?php
                                        if ($candidate['CandidateSignScore'] == 0) {
                                            echo "عدم اتمام فرآیند";
                                        } else {
                                            echo $candidate['CandidateSignScore'];
                                        }
                                        ?>
                                    </td>
                                    <td class="text-center">
                                        <?php
                                        if ($candidate['CandidateRecordsScore'] == 0) {
                                            echo "عدم اتمام فرآیند";
                                        } else {
                                            echo $candidate['CandidateRecordsScore'];
                                        }
                                        ?>
                                    </td>
                                    <td class="text-center">
                                        <?php
                                        if ($candidate['CandidateScore'] == 0) {
                                            echo "عدم اتمام فرآیند";
                                        } else {
                                            echo $candidate['CandidateScore'];
                                        }
                                        ?>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="chart-container" style="position: relative;margin: 40px 0;">
                            <canvas id="BarChart"></canvas>
                        </div>
                    </div>

                    <?php
                    $hasDocument = false;
                    foreach ($candidateDocuments as $candidateDocument) {
                        if ($candidateDocument['CandidateDocumentName'] == 'Resume')
                            $hasDocument = true;
                    } ?>
                    <?php if ($hasDocument) { ?>
                        <div class="panel left-candidate-panel-resume padding-0 single-scroll">
                            <div class="panel-heading left-candidate-panel-resume col-md-12 col-xs-12 padding-0">
                                <div class="have-border-bottom">
                                    <h3>مدارک و مستندات</h3>
                                </div>
                            </div>
                            <div class="panel-body">
                                <table class="table table-condensed table-hover table-bordered">
                                    <thead>
                                    <tr style="color: red;background: #fff;font-weight: 900;">
                                        <th class="fit"> مشاهده نسخه کامل سوابق تحصیلی و شغلی</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $index = 0;
                                    foreach ($candidateDocuments as $candidateDocument) {
                                        if ($candidateDocument['CandidateDocumentName'] == 'Resume') {
                                            $index += 1; ?>
                                            <tr>
                                                <td class="fit">
                                                    <a class="color-animation"
                                                       style="display: inline-block;width: 150px;background: #fdb72e;color: #000;padding: 12px 5px;font-weight: 900;"
                                                       href="<?php echo $candidateDocument['CandidateDocumentUrl']; ?>"
                                                       target="_blank">
                                                        دریافت فایل
                                                        <i class="fa fa-download"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php }
                                    } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <!-- Academic  -->
                <div class="panel left-candidate-panel-resume padding-0 single-scroll" id="academic-background"
                     ng-if="candidateAcademicBackground.length !== 0 ">
                    <div class="panel-heading left-candidate-panel-resume col-md-12 col-xs-12 padding-0">
                        <div class="have-border-bottom">
                            <h3>سوابق تحصیلی</h3>
                        </div>
                    </div>
                    <div class="panel-body">
                        <ul class="resume-ul">
                            <li ng-repeat="item in candidateAcademicBackground">
                                <span class="fa fa-circle-o"></span>
                                <strong class="colored bg-white">
                                    <i ng-if="item.CandidateStudyStatus !== 'Graduated' ">{{item.CandidateStudyStatus | bindEnum}}</i>
                                    {{item.CandidateGrade | bindEnum}}
                                    <strong class="colored bg-white major">
                                        {{item.NewMajor | bindEnumMajor}}
                                    </strong>
                                    {{item.UniversityTitle}}

                                </strong>
                            </li>
                        </ul>
                    </div>
                </div>
<!--                <!-- Military Status -->-->
<!--                <div class="panel left-candidate-panel-resume padding-0 single-scroll" id="military-records"-->
<!--                     ng-if="candidateMilitaryStatus.length !== 0 ">-->
<!--                    <div class="panel-heading left-candidate-panel-resume col-md-12 col-xs-12 padding-0">-->
<!--                        <div class="have-border-bottom">-->
<!--                            <h3>سوابق خدمت</h3>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="panel-body">-->
<!--                        <ul class="resume-ul">-->
<!--                            <li ng-repeat="item in candidateMilitaryStatus">-->
<!--                                <span class="fa fa-circle-o"></span>-->
<!--                                <strong class="colored bg-white">-->
<!---->
<!--                                    {{item.CandidateMilitaryStatus | bindEnum}}-->
<!--                                    {{item.CandidateExemptTitle | bindEnum}}-->
<!--                                    {{item.CandidateExemptDescription}}-->
<!--                                    {{item.CandidateMilitaryEndMonth |bindEnum}}-->
<!--                                    {{item.CandidateMilitaryEndYear}}-->
<!--                                    {{item.CandidateMilitaryEndArea |bindEnum}}-->
<!--                                    {{item.CandidateMilitaryEndAreaTitle}}-->
<!---->
<!--                                </strong>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
                <!-- Job History -->
                <div class="panel left-candidate-panel-resume padding-0 single-scroll" id="work-experience"
                     ng-if="candidateJobHistory.length !== 0 ">
                    <div class="panel-heading left-candidate-panel-resume col-md-12 col-xs-12 padding-0">
                        <div class="have-border-bottom">
                            <h3>سوابق شغلی</h3>
                        </div>
                    </div>
                    <div class="panel-body">
                        <ul class="resume-ul">
                            <li ng-repeat="item in candidateJobHistory">
                                <span class="fa fa-circle-o"></span>
                                <strong class="colored bg-white">
                                    {{ item.CandidateJobTitle }}
                                </strong>

                                <strong class="colored bg-white">
                                    {{ item.CandidateJobCompanyTitle }}
                                </strong>
                                از
                                <strong class="colored bg-white">
                                    {{ item.CandidateStartJobMonth | bindEnum}}
                                    {{ item.CandidateStartJobYear }}
                                </strong>
                                الی
                                <strong class="colored bg-white">
                                    {{ item.CandidateEndJobMonth | bindEnum }}
                                    {{ item.CandidateEndJobYear }}
                                </strong>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Book Publishing History -->
                <div class="panel left-candidate-panel-resume padding-0 single-scroll" id="scientific-research-records"
                     ng-if="candidateBooks.length !== 0 ">
                    <div class="panel-heading left-candidate-panel-resume col-md-12 col-xs-12 padding-0">
                        <div class="have-border-bottom">
                            <h3>سوابق علمی پژوهشی</h3>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <li>تالیف</li>
                        <ul class="resume-ul">

                            <li ng-repeat="item in candidateBooks">
                                <span class="fa fa-circle-o"></span>
                                <strong class="colored bg-white">
                                    {{item.CandidateBookTitle}}
                                </strong>
                                از نشر
                                <strong class="colored bg-white">
                                    {{item.CandidateBookPublisher}}
                                </strong>
                                در تاریخ
                                <strong class="colored bg-white">
                                    {{item.CandidateBookPublishMonth | bindEnum }}
                                    {{item.CandidateBookPublishYear}}
                                </strong>

                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-12">
                        <li>مقالات علمی</li>
                        <ul class="resume-ul">
                            <li ng-repeat="item in candidateArticles">
                                <span class="fa fa-circle-o"></span>
                                <strong class="colored bg-white">
                                    {{item.CandidateArticleTitle}}
                                </strong>
                                در سطح
                                <strong class="colored bg-white">
                                    {{item.CandidateArticleLevel | bindEnum }}
                                </strong>
                                در مجله
                                <strong class="colored bg-white">
                                    {{item.CandidateArticleMagazineTitle}}
                                </strong>
                                در تاریخ
                                <strong class="colored bg-white">
                                    {{item.CandidateArticlePublishMonth | bindEnum}}
                                    {{item.CandidateArticlePublishYear}}
                                </strong>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-12">
                        <li>اختراعات</li>
                        <ul class="resume-ul">
                            <li ng-repeat="item in candidateInvention">
                                <span class="fa fa-circle-o"></span>
                                <strong class="colored bg-white">
                                    {{item.CandidateInventionTitle}}
                                </strong>
                                حوزه
                                <strong class="colored bg-white">
                                    {{item.CandidateInventionField}}
                                </strong>
                                به شماره ثبت
                                <strong class="colored bg-white">
                                    {{item.CandidateInventionRegisterNumber}}
                                </strong>
                                <strong>
                                    {{item.CandidateInventionDescription}}
                                </strong>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-12">
                        <li>طرح های پژوهشی</li>
                        <ul class="resume-ul">
                            <li ng-repeat="item in candidateResearch">
                                <span class="fa fa-circle-o"></span>
                                <strong class="colored bg-white">
                                    {{item.CandidateResearchTitle}}
                                </strong>
                                مسئولیت
                                <strong class="colored bg-white">
                                    {{item.CandidateResearchResponsibility}}
                                </strong>
                                مجری
                                <strong class="colored bg-white">
                                    {{item.CandidateResearchWorker}}
                                </strong>
                                کارفرما
                                <strong class="colored bg-white">
                                    {{item.CandidateResearchEmployer}}
                                </strong>
                                تاریخ
                                <strong class="colored bg-white">
                                    {{item.CandidateResearchMonth | bindEnum }}
                                    {{item.CandidateResearchYear}}
                                </strong>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-12">
                        <li>همایش ها</li>
                        <ul class="resume-ul">
                            <li ng-repeat="item in candidateConference">
                                <span class="fa fa-circle-o"></span>
                                <strong class="colored bg-white">
                                    {{item.CandidateConferenceTitle}}
                                </strong>
                                در سطح
                                <strong class="colored bg-white">
                                    {{item.CandidateConferenceLevel | bindEnum}}
                                </strong>
                                نوع پذیرش / ارائه
                                <strong class="colored bg-white">
                                    {{item.CandidateConferenceAcceptType | bindEnum}}
                                </strong>
                                تاریخ
                                <strong class="colored bg-white">
                                    {{item.CandidateConferenceMonth | bindEnum}}
                                    {{item.CandidateConferenceYear}}
                                </strong>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-12">
                        <li>ترجمه </li>
                        <ul class="resume-ul">
                            <li ng-repeat="item in candidateTranslation">
                                <span class="fa fa-circle-o"></span>
                                <strong class="colored bg-white">
                                    {{item.CandidateTranslationTitle}}
                                </strong>
                                نشر
                                <strong class="colored bg-white">
                                    {{item.CandidateTranslationPublisher}}
                                </strong>
                                نوع
                                <strong class="colored bg-white">
                                    {{item.CandidateTranslationType | bindEnum }}
                                </strong>
                                تاریخ
                                <strong class="colored bg-white">
                                    {{item.CandidateTranslationMonth | bindEnum }}
                                    {{item.CandidateTranslationYear}}
                                </strong>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Skills History -->
<!--                <div class="panel left-candidate-panel-resume padding-0 single-scroll" id="skills"-->
<!--                     ng-if="candidateSkills.length !== 0 ">-->
<!--                    <div class="panel-heading left-candidate-panel-resume col-md-12 col-xs-12 padding-0">-->
<!--                        <div class="have-border-bottom">-->
<!--                            <h3>مهارت ها</h3>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="panel-body">-->
<!--                        <ul class="resume-ul">-->
<!--                            <li ng-repeat="item in candidateSkills">-->
<!--                                <span class="fa fa-circle-o"></span>-->
<!--                                <strong class="colored bg-white">-->
<!--                                    {{item.SkillType}}-->
<!--                                </strong>-->
<!--                                سطح-->
<!--                                <strong class="colored bg-white">-->
<!--                                    {{item.SkillLevel | bindEnum }}-->
<!--                                </strong>-->
<!--                                یادگیری بصورت-->
<!--                                <strong class="colored bg-white">-->
<!--                                    {{item.SkillLearnType | bindEnum }}-->
<!--                                </strong>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
                <!-- Promises History -->
                <div class="panel left-candidate-panel-resume padding-0 single-scroll" id="election-promises"
                     ng-if="promises.length !== 0 ">
                    <div class="panel-heading left-candidate-panel-resume col-md-12 col-xs-12 padding-0">
                        <div class="have-border-bottom">
                            <h3>وعده های انتخاباتی</h3>
                        </div>
                    </div>
                    <div class="panel-body">
                        <ul class="resume-ul">
                            <li ng-repeat="item in promises">

                                <strong class="colored bg-white">
                                    {{item.CandidateElectionPromise}}
                                </strong>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Politic History -->
                <div class="panel left-candidate-panel-resume padding-0 single-scroll" id="political-background"
                     ng-if="politicBackground.length !== 0 ">
                    <div class="panel-heading left-candidate-panel-resume col-md-12 col-xs-12 padding-0">
                        <div class="have-border-bottom">
                            <h3>سوابق سیاسی</h3>
                        </div>
                    </div>
                    <div class="panel-body political-info-container table-responsive">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-xs-12 padding-0">
                                <form ng-repeat="item in politicBackground">
                                    <span class="divider"></span>
                                    <div class="col-md-12 col-xs-12 padding-0 form">

                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                            <label for="">
                                                قالب فعالیت:
                                                <span class="text-danger"></span>
                                            </label>
                                            <span class="span-h">{{item.CandidateActivityType | bindEnum }}</span>


                                        </div>
                                        <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat"
                                             ng-if="item.CandidateActivityType === 'Media' || item.CandidateActivityType === 'Others' ">
                                            <label for="">
                                                آغاز همکاری:
                                            </label>
                                            <span class="span-h">  {{item.CandidateMediaStartMonth | bindEnum}}
                                                    ,
                                                    {{item.CandidateMediaStartYear}}</span>
                                        </div>
                                        <div class="col-md-3 col-sm-12 col-xs-12 form-group RightFloat"
                                             ng-if="item.CandidateActivityType === 'Media' || item.CandidateActivityType === 'Others' ">
                                            <label for="">پایان همکاری:</label>
                                            <span class="span-h"> {{item.CandidateMediaEndMonth | bindEnum}}
                                                    ,
                                                    {{item.CandidateMediaEndYear}}</span>
                                        </div>
                                        <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat"
                                             ng-if="item.CandidateActivityType === 'Others' || item.CandidateActivityType === 'Group' ">
                                            <label for="">
                                                :عضویت
                                            </label>
                                            <span class="span-h"> {{item.CandidateMemberShip | bindEnum}}</span>
                                        </div>
                                        <div class="col-md-3 col-sm-12 col-xs-12 form-group RightFloat"
                                             ng-if="item.CandidateActivityType === 'CandidatesCampaign' || item.CandidateActivityType === 'SupervisoryBoard' ">
                                            <label for="">انتخابات:</label>
                                            <span class="span-h">{{item.CandidateElectionType  | bindEnum}}</span>

                                        </div>

                                        <div class="col-md-3 col-sm-12 col-xs-12 form-group RightFloat"
                                             ng-if="item.CandidateActivityType === 'CandidatesCampaign' || item.CandidateActivityType === 'SupervisoryBoard' ">
                                            <label for="">
                                                دوره انتخابات:
                                            </label>
                                            <span class="span-h">{{item.CandidateElectionPeriod}}</span>

                                            <!--                                            <input type="text"-->
                                            <!--                                                   value=""-->
                                            <!--                                                   name=""-->
                                            <!--                                                   id=""-->
                                            <!--                                                   class="form-control">-->
                                        </div>
                                        <div class="col-md-3 col-sm-12 col-xs-12 form-group RightFloat"
                                             ng-if="item.CandidateActivityType === 'CandidatesCampaign' ">
                                            <label for="">
                                                نام نامزد / لیست:
                                            </label>
                                            <span class="span-h">{{item.CandidateElectionListName }}</span>

                                            <!--                                            <input type="text"-->
                                            <!--                                                   value=""-->
                                            <!--                                                   name=""-->
                                            <!--                                                   id=""-->
                                            <!--                                                   class="form-control">-->
                                        </div>
                                        <div class="col-md-5 col-xs-12 col-sm-12 form-group RightFloat"
                                             ng-if="item.CandidateActivityType === 'SupervisoryBoard' ">
                                            <label for="">
                                                عنوان همکاری:
                                                <span class="text-danger"></span>
                                            </label>
                                            <span class="span-h">{{item.CandidateHeadquarterActivityTitle | bindEnum}}</span>
                                            <!--                                            <input type="text"-->
                                            <!--                                                   value=""-->
                                            <!--                                                   name=""-->
                                            <!--                                                   id=""-->
                                            <!--                                                   class="form-control">-->
                                        </div>
                                        <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat"
                                             ng-if="item.CandidateActivityType === 'Media' ">
                                            <label for="">
                                                قالب رسانه:
                                                <span class="text-danger"></span>
                                            </label>
                                            <span class="span-h">{{item.CandidateMediaType | bindEnum}}</span>
                                            <!--                                            <input type="text"-->
                                            <!--                                                   value=""-->
                                            <!--                                                   name=""-->
                                            <!--                                                   id=""-->
                                            <!--                                                   class="form-control">-->
                                        </div>
                                        <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat"
                                             ng-if="item.CandidateActivityType === 'Others' ">
                                            <label for="">
                                                نام مجموعه:
                                                <span class="text-danger"></span>
                                            </label>
                                            <span class="span-h"> {{item.CandidateActivityTypeOtherOrganizationTitle }}</span>
                                        </div>
                                        <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                            <label for="">
                                                مسئولیت:
                                                <span class="text-danger"></span>
                                            </label>
                                            <span class="span-h"> {{item.CandidateResponsibility }}</span>
                                        </div>
                                        <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat"
                                             ng-if="item.CandidateActivityType === 'Media' ">
                                            <label for="">
                                                نام رسانه:
                                                <span class="text-danger"></span>
                                            </label>
                                            <span class="span-h">{{item.CandidateMediaTitle}}</span>
                                        </div>
                                        <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat"
                                             ng-if="item.CandidateActivityType === 'Media' ">
                                            <label for="">
                                                نوع فعالیت:
                                                <span class="text-danger"></span>
                                            </label>
                                            <span class="span-h">{{item.CandidateMediaActivityType}}</span>

                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group RightFloat"
                                             ng-if="item.CandidateActivityType === 'Media' && item.CandidateMediaType === 'Others' ">
                                            <label for="">
                                                عنوان قالب رسانه:
                                            </label>
                                            <span class="span-h">{{item.CandidateMediaTypeTitle}}</span>
                                            <!--                                            <select class="form-control form-control-lg city-select"-->
                                            <!--                                                    name=""-->
                                            <!--                                                    id="">-->
                                            <!--                                                <option>-->
                                            <!--                                                    -->
                                            <!--                                                </option>-->
                                            <!--                                            </select>-->
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group RightFloat">
                                            <label for="">توضیحات:</label>
                                            <span class="span-h">{{item.CandidateActivityDescription}}</span>
                                            <!--
                                                                                    </div>
                                                                                </div>
                                                                                <hr>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                            <!--                        <table class="table table-bordered table-condensed table-striped">-->
                                            <!--                            <thead>-->
                                            <!--                            <tr>-->
                                            <!--                                <th class="fit info-politicalType">قالب</th>-->
                                            <!--                                <th class="fit info-otherPoliticalType">سایر قالب</th>-->
                                            <!--                                <th class="fit info-mediaName">رسانه</th>-->
                                            <!--                                <th class="fit info-activityType">نوع فعالیت</th>-->
                                            <!--                                <th class="fit info-beginMonth">ماه شروع فعالیت</th>-->
                                            <!--                                <th class="fit info-beginYear">سال شروع فعالیت</th>-->
                                            <!--                                <th class="fit info-endMonth">ماه پایان فعالیت</th>-->
                                            <!--                                <th class="fit info-endYear">سال پایان فعالیت</th>-->
                                            <!--                                <th class="fit info-yearCooperation">سال همکاری</th>-->
                                            <!--                                <th class="fit info-responsibility">مسئولیت</th>-->
                                            <!--                                <th class="fit info-membershipType">نوع عضویت</th>-->
                                            <!--                                <th class="fit info-electionType">نوع انتخابات</th>-->
                                            <!--                                <th class="fit info-electionPeriodType">دوره انتخابات</th>-->
                                            <!--                                <th class="fit info-parliamentPeriodType">دوره انتخابات</th>-->
                                            <!--                                <th class="fit info-expertsParliamentPeriodType">دوره انتخابات</th>-->
                                            <!--                                <th class="fit info-cityCouncilPeriodType">دوره انتخابات</th>-->
                                            <!--                                <th class="fit info-supervisoryBoardType">مجلس</th>-->
                                            <!--                                <th class="fit info-mediaFormat">نوع رسانه</th>-->
                                            <!--                                <th class="fit info-otherMediaFormat">سایر عنوان رسانه</th>-->
                                            <!--                                <th class="fit info-candidateName">نام نامزد/لیست</th>-->
                                            <!--                                <th class="fit info-description">توضیحات</th>-->
                                            <!--                            </tr>-->
                                            <!--                            </thead>-->
                                            <!--                            <tbody>-->
                                            <!--                            <tr ng-repeat="item in politicBackground " class="temp-edu-record">-->
                                            <!--                                <td class="fit info-department">-->
                                            <!--                                    {{item.CandidateActivityType | bindEnum}}-->
                                            <!--                                </td>-->
                                            <!--                                <td class="fit info-science">-->
                                            <!--                                    {{item.CandidateActivityTypeOtherOrganizationTitle}}-->
                                            <!--                                </td>-->
                                            <!--                                <td class="fit info-studying">-->
                                            <!--                                    {{item.CandidateElectionType | bindEnum}}-->
                                            <!--                                </td>-->
                                            <!--                                <td class="fit info-universityLevelType">-->
                                            <!--                                    {{item.CandidateElectionPeriod}}-->
                                            <!--                                </td>-->
                                            <!--                                <td class="fit info-universityName">-->
                                            <!--                                    {{item.CandidateElectionListName}}-->
                                            <!--                                </td>-->
                                            <!--                                <td class="fit info-universityName">-->
                                            <!--                                    {{item.CandidateHeadquarterActivityTitle}}-->
                                            <!--                                </td>-->
                                            <!--                                <td class="fit info-universityName">-->
                                            <!--                                    {{item.CandidateMediaType}}-->
                                            <!--                                </td>-->
                                            <!--                                <td class="fit info-universityName">-->
                                            <!--                                    {{item.CandidateMediaTypeTitle}}-->
                                            <!--                                </td>-->
                                            <!--                                <td class="fit info-universityName">-->
                                            <!--                                    {{item.CandidateMediaTitle}}-->
                                            <!--                                </td>-->
                                            <!--                                <td class="fit info-universityName">-->
                                            <!--                                    {{item.CandidateMediaActivityType}}-->
                                            <!--                                    {{item.CandidateMediaType}}-->
                                            <!--                                </td>-->
                                            <!--                                <td class="fit info-universityName">-->
                                            <!--                                    {{item.CandidateResponsibility}}-->
                                            <!--                                </td>-->
                                            <!--                                <td class="fit info-universityName">-->
                                            <!--                                    {{item.CandidateMemberShip}}-->
                                            <!--                                </td>-->
                                            <!--                                <td class="fit info-universityName">-->
                                            <!--                                    {{item.CandidateMediaStartMonth | bindEnum}}-->
                                            <!--                                </td>-->
                                            <!--                                <td class="fit info-universityName">-->
                                            <!--                                    {{item.CandidateMediaStartYear}}-->
                                            <!--                                </td>-->
                                            <!--                                <td class="fit info-universityName">-->
                                            <!--                                    {{item.CandidateMediaEndMonth | bindEnum }}-->
                                            <!--                                </td>-->
                                            <!--                                <td class="fit info-universityName">-->
                                            <!--                                    {{item.CandidateMediaEndYear}}-->
                                            <!--                                </td>-->
                                            <!--                                <td class="fit info-universityName">-->
                                            <!--                                    {{item.CandidateActivityDescription}}-->
                                            <!--                                </td>-->
                                            <!--                            </tr>-->
                                            <!--                            </tbody>-->
                                            <!--                        </table>-->
                                        </div>
                                    </div>
                                    <hr>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- social-cultural-background -->
                <div class="panel left-candidate-panel-resume padding-0 single-scroll" id="social-cultural-background"
                     ng-if="candidateSocialCulturalBackground.length !== 0 ">
                    <div class="panel-heading left-candidate-panel-resume col-md-12 col-xs-12 padding-0">
                        <div class="have-border-bottom">
                            <h3>سوابق فرهنگی اجتماعی</h3>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-xs-12 padding-0">
                                <form ng-repeat="item in candidateSocialCulturalBackground">
                                    <span class="divider"></span>
                                    <div class="col-md-12 col-xs-12 padding-0 form">
                                        <div class="col-md-2 col-xs-12 col-sm-12 form-group RightFloat">
                                            <label for="">
                                                زمینه فعالیت:
                                                <span class="text-danger"></span>
                                            </label>
                                            <span class="span-h"> {{item.CandidateActivityFieldType | bindEnum }}</span>

                                        </div>
                                        <div class="col-md-2 col-xs-12 col-sm-12 form-group RightFloat"
                                             ng-if="item.CandidateActivityFieldType === 'Mobilization'">
                                            <label for="">
                                                نوع عضویت:
                                            </label>
                                            <span class="span-h">{{item.CandidateMobilMembershipType | bindEnum}}</span>

                                        </div>
                                        <div class="col-md-2 col-sm-12 col-xs-12 form-group RightFloat"
                                             ng-if="item.CandidateActivityFieldType === 'Mobilization'">
                                            <label for="">
                                                نوع بسیج:
                                            </label>
                                            <span class="span-h">{{item.CandidateBasijType  | bindEnum}}</span>

                                        </div>
                                        <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat"
                                             ng-if="item.CandidateActivityFieldType !== 'Mobilization'">
                                            <label for="">
                                                نوع عضویت:
                                            </label>
                                            <span class="span-h"> {{item.CandidateMemberShipType | bindEnum}}</span>

                                        </div>
                                        <div class="col-md-3 col-sm-12 col-xs-12 form-group RightFloat">
                                            <label for=""> آغاز همکاری:</label>
                                            <span class="span-h"> {{item.CandidateActivityStartMonth | bindEnum}}
                                                    ,
                                                    {{item.CandidateActivityStartYear}}</span>

                                        </div>
                                        <div class="col-md-3 col-sm-12 col-xs-12 form-group RightFloat">
                                            <label for="">پایان همکاری:</label>
                                            <span class="span-h">
                                                 {{item.CandidateActivityEndMonth  | bindEnum}}
                                                    {{item.CandidateActivityEndYear }}
                                            </span>

                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group RightFloat"
                                             ng-if="item.CandidateActivityFieldType === 'Mobilization'">
                                            <label for="">
                                                نام حوزه:
                                            </label>
                                            <span class="span-h">  {{item.CandidateBasijAreaTitle}}</span>

                                        </div>
                                        <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat"
                                             ng-if="item.CandidateBasijType === 'Others'">
                                            <label for="">
                                                سایر:
                                                <span class="text-danger"></span>
                                            </label>
                                            <span class="span-h">{{item.CandidateBasijTypeOtherTitle}}</span>
                                            <!--                                            <input type="text"-->
                                            <!--                                                   value=""-->
                                            <!--                                                   name=""-->
                                            <!--                                                   id=""-->
                                            <!--                                                   class="form-control">-->
                                        </div>
                                        <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat"
                                             ng-if="item.CandidateActivityFieldType === 'Others'">
                                            <label for="">
                                                عنوان:
                                                <span class="text-danger"></span>
                                            </label>
                                            <span class="span-h"> {{item.CandidateActivityFieldOtherTypeTitle }}</span>

                                        </div>
                                        <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat"
                                             ng-if="item.CandidateActivityFieldType !== 'Mobilization'">
                                            <label for="">
                                                نام مجموعه:
                                                <span class="text-danger"></span>
                                            </label>
                                            <span class="span-h">{{item.CandidateOrganizationName }}</span>

                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group RightFloat"
                                             ng-if="item.CandidateActivityFieldType !== 'Mobilization'">
                                            <label for="">توضیحات:</label>
                                            <span class="span-h">{{item.CandidateMemberShipDescription}}</span>

                                            <!--                                            <input-->
                                            <!--                                                    value=""-->
                                            <!--                                                    id=""-->
                                            <!--                                                    type="text"-->
                                            <!--                                                    name=""-->
                                            <!--                                                    class="input-validate validate valid">-->
                                        </div>
                                    </div>
                                    <hr>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Finance History -->
                <div class="panel left-candidate-panel-resume padding-0 single-scroll" id="property-assets"
                     ng-if="finance.length !== 0 ">
                    <div class="panel-heading left-candidate-panel-resume col-md-12 col-xs-12 padding-0">
                        <div class="have-border-bottom">
                            <h3>فهرست اموال و دارایی ها</h3>
                        </div>
                    </div>
                    <?php function splitPrice($price)
                    {
                        $price = explode(".", $price);
                        $priceLeft = $price[0];
                        $price = explode(" ", $price[1]);
                        $priceRight = $price[0];
                        $priceUnit = $price[1];
                        $data = array(
                            'left' => $priceLeft,
                            'right' => $priceRight,
                            'unit' => $priceUnit,
                        );
                        return $data;
                    } ?>
                    <div class="panel-body political-info-container">
                        <div class="panel with-nav-tabs panel-default">
                            <div class="">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab1myself" data-toggle="tab">خود</a></li>
                                    <li><a href="#tab2wife" data-toggle="tab">همسر</a></li>
                                    <li><a href="#tab3child" data-toggle="tab">فرزند</a></li>
                                </ul>
                            </div>
                            <div class="panel-body padding-r-0 padding-l-0">
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab1myself">
                                        <div class="LeftPanel">
                                            <div class="LeftPanelcontent">
                                                <div class="row">
                                                    <!--RealEStates -->
                                                    <div class="col-md-12 col-xs-12" ng-if="finance.RealEStates.hasSelfItems !== 0 ">
                                                        <div class="panel panel-default ">
                                                            <div class="panel-heading">املاک و مستغلات</div>
                                                            <div class="panel-body padding-r-0 padding-l-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
<!--                                                                        <p ng-if="finance.RealEStates.hasSelfItems === 0 ">-->
<!--                                                                            {{notFound}}</p>-->
                                                                        <form ng-repeat="item in finance.RealEStates"
                                                                              id="form-RealEstate">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Self'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateType">
                                                                                        نوع کاربری :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h">{{item.RealEstateType | bindEnum}}</span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateOwnershipDate">
                                                                                        سال شروع مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h">{{item.RealEstateOwnershipDate}}</span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateOwnershipType">
                                                                                        نحوه مالکیت :
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.RealEstateOwnershipType | bindEnum}}</span>
                                                                                </div>
                                                                                <div class="col-md-2 col-sm-12 col-xs-12 form-group RightFloat countries">
                                                                                    <label for="inputRealEstateCountryId">کشور
                                                                                        :</label>
                                                                                    <span class="span-h">  {{item.RealEstateCountryId | bindCountry}}</span>
                                                                                </div>
                                                                                <div class="col-md-2 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv">
                                                                                    <label for="inputRealEstateStateId">استان
                                                                                        :</label>
                                                                                    <span class="span-h">  {{item.RealEstateStateId | bindState}} </span>
                                                                                </div>
                                                                                <div class="col-md-2 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv">
                                                                                    <label for="inputRealEstateCityId">
                                                                                        شهر :
                                                                                    </label>
                                                                                    <span class="span-h">   {{item.RealEstateCityId | bindCity}} </span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstatePortion">
                                                                                        سهم از ملک(1 تا 6 دانگ) :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h">  {{item.RealEstatePortion}} </span>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateExtent">
                                                                                        متراژ حدودی ملک :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h">  {{item.RealEstateExtent}} ,   {{item.RealEstateExtentUnit | bindEnum}} </span>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateBuyTimePrice">
                                                                                        ارزش حدودی کل سهام در
                                                                                        زمان
                                                                                        شروع مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h">   {{item.RealEstateBuyTimePrice.NumberValues[1]}} ,
                                                                                        {{item.RealEstateBuyTimePrice.NumberValues[0]}}
                                                                                         {{item.RealEstateBuyTimePrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateNowTimePrice">
                                                                                        ارزش حدودی کل سهام درحال
                                                                                        حاضر :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h">  {{item.RealEstateNowTimePrice.NumberValues[1]}} ,
                                                                                         {{item.RealEstateNowTimePrice.NumberValues[0]}}
                                                                                         {{item.RealEstateNowTimePrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateAddress">آدرس
                                                                                        :</label>
                                                                                    <span class="span-h">  {{item.RealEstateAddress}} </span>
                                                                                </div>
                                                                                <hr>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End RealEStates -->
                                                    <!--Vehicle -->
                                                    <div class="col-md-12 col-xs-12" ng-if="finance.Vehicle.hasSelfItems !== 0 ">
                                                        <div class="panel panel-default ">
                                                            <div class="panel-heading">
                                                                وسایل نقلیه
                                                            </div>
                                                            <div class="panel-body padding-r-0 padding-l-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
<!--                                                                        <p ng-if="finance.Vehicle.hasSelfItems === 0 ">-->
<!--                                                                            {{notFound}}</p>-->
                                                                        <form ng-repeat="item in finance.Vehicle"
                                                                              id="form-Vehicle">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Self'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputVehicleType">
                                                                                        نوع وسیله نقلیه :<span
                                                                                                class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.VehicleType | bindEnum}} </span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputVehicleOwnershipDate">
                                                                                        سال شروع مالکیت :<span
                                                                                                class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.VehicleOwnershipDate}} </span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputVehicleOwnershipType">
                                                                                        نحوه مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.VehicleOwnershipType | bindEnum}} </span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputVehiclePortion">
                                                                                        سهم از ملک(1 تا 6 دانگ) :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.VehiclePortion}} </span>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputVehicleBuyTimePrice">
                                                                                        ارزش حدودی کل سهام در
                                                                                        زمان
                                                                                        شروع مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.VehicleBuyTimePrice.NumberValues[1]}} ,
                                                                                        {{item.VehicleBuyTimePrice.NumberValues[0]}}
                                                                                        {{item.VehicleBuyTimePrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputVehicleNowTimePrice">
                                                                                        ارزش حدودی کل سهام درحال
                                                                                        حاضر :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.VehicleNowTimePrice.NumberValues[1]}} ,
                                                                                        {{item.VehicleNowTimePrice.NumberValues[0]}}
                                                                                        {{item.VehicleNowTimePrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <hr>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Vehicle -->
                                                    <!--Invest -->
                                                    <div class="col-md-12 col-xs-12" ng-if="finance.Invest.hasSelfItems !== 0 ">
                                                        <div class="panel panel-default ">
                                                            <div class="panel-heading">
                                                                سرمایه‌گذاری‌ها (سهام‌، اوراق بهادار، ...)
                                                            </div>
                                                            <div class="panel-body padding-r-0 padding-l-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
<!--                                                                        <p ng-if="finance.Invest.hasSelfItems === 0 ">-->
<!--                                                                            {{notFound}}</p>-->
                                                                        <form ng-repeat="item in finance.Invest"
                                                                              id="form-Invest">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Self'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-6 col-xs-12 form-group RightFloat">
                                                                                    <label for="inputInvestTitle">
                                                                                        نام شرکت / موسسه :
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.InvestTitle}} </span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputInvestDate">
                                                                                        سال شروع مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.InvestDate}} </span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputInvestOwnershipType">
                                                                                        نحوه مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.InvestOwnershipType | bindEnum}} </span>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputInvestBuyTimePrice">
                                                                                        ارزش حدودی کل سهام در
                                                                                        زمان
                                                                                        شروع مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.InvestBuyTimePrice.NumberValues[1]}} ,
                                                                                        {{item.InvestBuyTimePrice.NumberValues[0]}}
                                                                                        {{item.InvestBuyTimePrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputInvestNowTimePrice">
                                                                                        ارزش حدودی کل سهام درحال
                                                                                        حاضر :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.InvestNowTimePrice.NumberValues[1]}} ,
                                                                                        {{item.InvestNowTimePrice.NumberValues[0]}}
                                                                                        {{item.InvestNowTimePrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <hr>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Invest -->
                                                    <!--BankAccount -->
                                                    <div class="col-md-12 col-xs-12" ng-if="finance.BankAccount.hasSelfItems !== 0 ">
                                                        <div class="panel panel-default ">
                                                            <div class="panel-heading">
                                                                حساب‌های جاری، پس‌انداز و سرمایه‌گذاری
                                                            </div>
                                                            <div class="panel-body padding-r-0 padding-l-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
<!--                                                                        <p ng-if="finance.BankAccount.hasSelfItems === 0 ">-->
<!--                                                                            {{notFound}}</p>-->
                                                                        <form ng-repeat="item in finance.BankAccount"
                                                                              id="form-BankAccount">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Self'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                                    <label for="inputBankAccountTitle">
                                                                                        عنوان بانک یا موسسه :
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.BankAccountTitle}} </span>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputBankAccountPrice">
                                                                                        مبلغ :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.BankAccountPrice.NumberValues[1]}} ,
                                                                                        {{item.BankAccountPrice.NumberValues[0]}}
                                                                                        {{item.BankAccountPrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat">
                                                                                    <label for="inputBankAccountCountryId">کشور :</label>
                                                                                    <span class="span-h"> {{item.BankAccountCountryId | bindCountry}}</span>
                                                                                </div>
                                                                                <hr>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End BankAccount -->
                                                    <!-- Debtor -->
                                                    <div class="col-md-12 col-xs-12" ng-if="finance.CreditDebtor.hasSelfItems !== 0 ">
                                                        <div class="panel panel-default ">
                                                            <div class="panel-heading">
                                                                دیون و مطالبات
                                                            </div>
                                                            <div class="panel-body padding-r-0 padding-l-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
<!--                                                                        <p ng-if="finance.CreditDebtor.hasSelfItems === 0 ">-->
<!--                                                                            {{notFound}}</p>-->
                                                                        <form ng-repeat="item in finance.CreditDebtor"
                                                                              id="form-Credit-Debtor">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho =='Self'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat padding-left-0">
                                                                                    <label for="inputCreditPrice">
                                                                                        جمع کل بستانکاری از اشخاص حقیقی
                                                                                        یا
                                                                                        حقوقی
                                                                                        :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.DebotrPrice.NumberValues[1]}} ,
                                                                                        {{item.DebotrPrice.NumberValues[0]}}
                                                                                        {{item.DebotrPrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputDebotrPrice">
                                                                                        جمع کل بدهکاری از اشخاص حقیقی یا
                                                                                        حقوقی :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.CreditPrice.NumberValues[1]}} ,
                                                                                        {{item.CreditPrice.NumberValues[0]}}
                                                                                        {{item.CreditPrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-md-12 col-xs-12">
                                                                                    <label for="inputDebotrPrice">
                                                                                        توضیحات :
                                                                                    </label>
                                                                                     <span class="span-h"> {{item.DebotrDescription}}</span>
                                                                                </div>
                                                                                <hr>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Debtor -->
                                                    <!--Goods -->
                                                    <div class="col-md-12 col-xs-12" ng-if="finance.Goods.hasSelfItems !== 0 ">
                                                        <div class="panel panel-default ">
                                                            <div class="panel-heading">
                                                                کلیه کالاهای فاقد سند مالکیت رسمی
                                                            </div>
                                                            <div class="panel-body padding-r-0 padding-l-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
<!--                                                                        <p ng-if="finance.Goods.hasSelfItems === 0 ">-->
<!--                                                                            {{notFound}}</p>-->
                                                                        <form ng-repeat="item in finance.Goods"
                                                                              id="form-Goods">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Self'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputGoodsType">
                                                                                        نوع کالا :
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.GoodsType | bindEnum}} </span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputGoodsOwnershipStartDate">
                                                                                        سال شروع مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.GoodsOwnershipStartDate}} </span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputGoodsCount">
                                                                                        حجم / وزن / تعداد کالا :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.GoodsCount}} </span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateOwnershipType">
                                                                                        نحوه مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.RealEstateOwnershipType | bindEnum}} </span>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputGoodsBuyTimePrice">
                                                                                        ارزش حدودی کل سهام در
                                                                                        زمان
                                                                                        شروع مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.GoodsBuyTimePrice.NumberValues[1]}} ,
                                                                                         {{item.GoodsBuyTimePrice.NumberValues[0]}}
                                                                                         {{item.GoodsBuyTimePrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputGoodsNowTimePrice">
                                                                                        ارزش حدودی کل سهام درحال
                                                                                        حاضر :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.GoodsNowTimePrice.NumberValues[1]}} ,
                                                                                         {{item.GoodsNowTimePrice.NumberValues[0]}}
                                                                                         {{item.GoodsNowTimePrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputGoodsOwnershipPercent">
                                                                                        درصد سهم از مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.GoodsOwnershipPercent}} </span>
                                                                                </div>
                                                                                <hr>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Goods -->
                                                    <!--Fee -->
                                                    <div class="col-md-12 col-xs-12" ng-if="finance.Fee.hasSelfItems !== 0 ">
                                                        <div class="panel panel-default ">
                                                            <div class="panel-heading">
                                                                حقوق مالکیت معنوی
                                                            </div>
                                                            <div class="panel-body padding-r-0 padding-l-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
<!--                                                                        <p ng-if="finance.Fee.hasSelfItems === 0 ">-->
<!--                                                                            {{notFound}}</p>-->
                                                                        <form ng-repeat="item in finance.Fee"
                                                                              id="form-Fee">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Self'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputFeeType">
                                                                                        عنوان :
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.FeeType |bindEnum}} </span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputFeeOwnershipStartDate">
                                                                                        سال شروع مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h">  {{item.FeeOwnershipStartDate}} </span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputFeePercent">
                                                                                        درصد سهم از مالکیت
                                                                                        معنوی:
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h">  {{item.FeePercent}} </span>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputFeeAverageInYear">
                                                                                        میزان درآمد متوسط
                                                                                        سالیانه از
                                                                                        مالکیت
                                                                                        معنوی :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h">  {{item.FeeAverageInYear.NumberValues[1]}} ,
                                                                                        {{item.FeeAverageInYear.NumberValues[0]}}
                                                                                        {{item.FeeAverageInYear.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <hr>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Fee -->
                                                    <!--AverageMonthIncome -->
                                                    <div class="col-md-12 col-xs-12" ng-if="finance.Income.hasSelfItems !== 0 ">
                                                        <div class="panel panel-default ">
                                                            <div class="panel-heading">
                                                                در آمد
                                                            </div>
                                                            <div class="panel-body padding-r-0 padding-l-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
<!--                                                                        <p ng-if="finance.Income.hasSelfItems === 0 ">-->
<!--                                                                            {{notFound}}</p>-->
                                                                        <form ng-repeat="item in finance.Income"
                                                                              id="form-AverageMonthIncome">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Self'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputAverageMonthIncome">
                                                                                        درآمد متوسط ماهیانه :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.AverageMonthIncome.NumberValues[1]}} ,
                                                                                        {{item.AverageMonthIncome.NumberValues[0]}}
                                                                                        {{item.AverageMonthIncome.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End AverageMonthIncome -->
                                                    <!-- ElectionPlacePrice -->
                                                    <div class="col-md-12 col-xs-12" ng-if="finance.Election.hasSelfItems !== 0">
                                                        <div class="panel panel-default ">
                                                            <div class="panel-heading">
                                                                شفاف سازی هزینه های انتخاباتی
                                                            </div>
                                                            <div class="panel-body padding-r-0 padding-l-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
<!--                                                                        <p ng-if="finance.Election.hasSelfItems === 0 ">-->
<!--                                                                            {{notFound}}</p>-->
                                                                        <form ng-repeat="item in finance.Election"
                                                                              id="form-Election">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Self'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputElectionPlacePrice">
                                                                                        هزینه دایرکردن محل ستاد انتخابات
                                                                                        (اجاره بها ,
                                                                                        حملو نقل و سایر موارد)
                                                                                        -هزینه کل :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.ElectionPlacePrice.NumberValues[1]}} ,
                                                                                        {{item.ElectionPlacePrice.NumberValues[0]}}
                                                                                        {{item.ElectionPlacePrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputElectionFlockPrice">
                                                                                        هزینه برپایی تجمعات عمومی مرتبط
                                                                                        با
                                                                                        اهداف
                                                                                        انتخاباتی – هزینه کل :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.ElectionFlockPrice.NumberValues[1]}} ,
                                                                                        {{item.ElectionFlockPrice.NumberValues[0]}}
                                                                                        {{item.ElectionFlockPrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputElectionAdvertisePrice">
                                                                                        هزینه تبلیغات مجاز در رسانه ها –
                                                                                        هزینه کل :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.ElectionAdvertisePrice.NumberValues[1]}} ,
                                                                                        {{item.ElectionAdvertisePrice.NumberValues[0]}}
                                                                                        {{item.ElectionAdvertisePrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputElectionStaffPrice">
                                                                                        هزینه و حق الزحمه عوامل اجرایی و
                                                                                        کارشناسی در
                                                                                        انتخابات – هزینه کل :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.ElectionStaffPrice.NumberValues[1]}} ,
                                                                                        {{item.ElectionStaffPrice.NumberValues[0]}}
                                                                                        {{item.ElectionStaffPrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputElectionAllPrice">
                                                                                        جمع کل هزینه های انتخاباتی :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.ElectionAllPrice.NumberValues[1]}} ,
                                                                                        {{item.ElectionAllPrice.NumberValues[0]}}
                                                                                        {{item.ElectionAllPrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End ElectionPlacePrice -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab2wife">
                                        <div class="LeftPanel">
                                            <div class="LeftPanelcontent">
                                                <div class="row">
                                                    <!--RealEStates -->
                                                    <div class="col-md-12 col-xs-12" ng-if="finance.RealEStates.hasWifeItems !== 0 ">
                                                        <div class="panel panel-default ">
                                                            <div class="panel-heading">املاک و مستغلات</div>
                                                            <div class="panel-body padding-r-0 padding-l-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
<!--                                                                        <p ng-if="finance.RealEStates.hasWifeItems === 0 ">-->
<!--                                                                            {{notFound}}</p>-->
                                                                        <form ng-repeat="item in finance.RealEStates"
                                                                              id="form-RealEstate">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Wife'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateType">
                                                                                        نوع کاربری :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h">{{item.RealEstateType | bindEnum}}</span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateOwnershipDate">
                                                                                        سال شروع مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h">{{item.RealEstateOwnershipDate}}</span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateOwnershipType">
                                                                                        نحوه مالکیت :
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.RealEstateOwnershipType | bindEnum}}</span>
                                                                                </div>
                                                                                <div class="col-md-2 col-sm-12 col-xs-12 form-group RightFloat countries">
                                                                                    <label for="inputRealEstateCountryId">کشور
                                                                                        :</label>
                                                                                    <span class="span-h">  {{item.RealEstateCountryId | bindCountry}}</span>
                                                                                </div>
                                                                                <div class="col-md-2 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv">
                                                                                    <label for="inputRealEstateStateId">استان
                                                                                        :</label>
                                                                                    <span class="span-h">  {{item.RealEstateStateId | bindState}} </span>
                                                                                </div>
                                                                                <div class="col-md-2 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv">
                                                                                    <label for="inputRealEstateCityId">
                                                                                        شهر :
                                                                                    </label>
                                                                                    <span class="span-h">   {{item.RealEstateCityId | bindCity}} </span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstatePortion">
                                                                                        سهم از ملک(1 تا 6 دانگ) :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h">  {{item.RealEstatePortion}} </span>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateExtent">
                                                                                        متراژ حدودی ملک :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h">  {{item.RealEstateExtent}} ,   {{item.RealEstateExtentUnit | bindEnum}} </span>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateBuyTimePrice">
                                                                                        ارزش حدودی کل سهام در
                                                                                        زمان
                                                                                        شروع مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h">   {{item.RealEstateBuyTimePrice.NumberValues[1]}} ,
                                                                                        {{item.RealEstateBuyTimePrice.NumberValues[0]}}
                                                                                         {{item.RealEstateBuyTimePrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateNowTimePrice">
                                                                                        ارزش حدودی کل سهام درحال
                                                                                        حاضر :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h">  {{item.RealEstateNowTimePrice.NumberValues[1]}} ,
                                                                                         {{item.RealEstateNowTimePrice.NumberValues[0]}}
                                                                                         {{item.RealEstateNowTimePrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateAddress">آدرس
                                                                                        :</label>
                                                                                    <span class="span-h">  {{item.RealEstateAddress}} </span>
                                                                                </div>
                                                                                <hr>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End RealEStates -->
                                                    <!--Vehicle -->
                                                    <div class="col-md-12 col-xs-12"  ng-if="finance.Vehicle.hasWifeItems !== 0 ">
                                                        <div class="panel panel-default ">
                                                            <div class="panel-heading">
                                                                وسایل نقلیه
                                                            </div>
                                                            <div class="panel-body padding-r-0 padding-l-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
<!--                                                                        <p ng-if="finance.Vehicle.hasWifeItems === 0 ">-->
<!--                                                                            {{notFound}}</p>-->
                                                                        <form ng-repeat="item in finance.Vehicle"
                                                                              id="form-Vehicle">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Wife'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputVehicleType">
                                                                                        نوع وسیله نقلیه :<span
                                                                                                class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.VehicleType | bindEnum}} </span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputVehicleOwnershipDate">
                                                                                        سال شروع مالکیت :<span
                                                                                                class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.VehicleOwnershipDate}} </span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputVehicleOwnershipType">
                                                                                        نحوه مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.VehicleOwnershipType | bindEnum}} </span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputVehiclePortion">
                                                                                        سهم از ملک(1 تا 6 دانگ) :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.VehiclePortion}} </span>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputVehicleBuyTimePrice">
                                                                                        ارزش حدودی کل سهام در
                                                                                        زمان
                                                                                        شروع مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.VehicleBuyTimePrice.NumberValues[1]}} ,
                                                                                        {{item.VehicleBuyTimePrice.NumberValues[0]}}
                                                                                        {{item.VehicleBuyTimePrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputVehicleNowTimePrice">
                                                                                        ارزش حدودی کل سهام درحال
                                                                                        حاضر :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.VehicleNowTimePrice.NumberValues[1]}} ,
                                                                                        {{item.VehicleNowTimePrice.NumberValues[0]}}
                                                                                        {{item.VehicleNowTimePrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <hr>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Vehicle -->
                                                    <!--Invest -->
                                                    <div class="col-md-12 col-xs-12" ng-if="finance.Invest.hasWifeItems !== 0 ">
                                                        <div class="panel panel-default ">
                                                            <div class="panel-heading">
                                                                سرمایه‌گذاری‌ها (سهام‌، اوراق بهادار، ...)
                                                            </div>
                                                            <div class="panel-body padding-r-0 padding-l-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
<!--                                                                        <p ng-if="finance.Invest.hasWifeItems === 0 ">-->
<!--                                                                            {{notFound}}</p>-->
                                                                        <form ng-repeat="item in finance.Invest"
                                                                              id="form-Invest">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Wife'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-6 col-xs-12 form-group RightFloat">
                                                                                    <label for="inputInvestTitle">
                                                                                        نام شرکت / موسسه :
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.InvestTitle}} </span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputInvestDate">
                                                                                        سال شروع مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.InvestDate}} </span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputInvestOwnershipType">
                                                                                        نحوه مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.InvestOwnershipType | bindEnum}} </span>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputInvestBuyTimePrice">
                                                                                        ارزش حدودی کل سهام در
                                                                                        زمان
                                                                                        شروع مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.InvestBuyTimePrice.NumberValues[1]}} ,
                                                                                        {{item.InvestBuyTimePrice.NumberValues[0]}}
                                                                                        {{item.InvestBuyTimePrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputInvestNowTimePrice">
                                                                                        ارزش حدودی کل سهام درحال
                                                                                        حاضر :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.InvestNowTimePrice.NumberValues[1]}} ,
                                                                                        {{item.InvestNowTimePrice.NumberValues[0]}}
                                                                                        {{item.InvestNowTimePrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <hr>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Invest -->
                                                    <!--BankAccount -->
                                                    <div class="col-md-12 col-xs-12" ng-if="finance.BankAccount.hasWifeItems !== 0 ">
                                                        <div class="panel panel-default ">
                                                            <div class="panel-heading">
                                                                حساب‌های جاری، پس‌انداز و سرمایه‌گذاری
                                                            </div>
                                                            <div class="panel-body padding-r-0 padding-l-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
<!--                                                                        <p ng-if="finance.BankAccount.hasWifeItems === 0 ">-->
<!--                                                                            {{notFound}}</p>-->
                                                                        <form ng-repeat="item in finance.BankAccount"
                                                                              id="form-BankAccount">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Wife'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                                    <label for="inputBankAccountTitle">
                                                                                        عنوان بانک یا موسسه :
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.BankAccountTitle}} </span>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputBankAccountPrice">
                                                                                        مبلغ :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.BankAccountPrice.NumberValues[1]}} ,
                                                                                        {{item.BankAccountPrice.NumberValues[0]}}
                                                                                        {{item.BankAccountPrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat">
                                                                                    <label for="inputBankAccountCountryId">کشور :</label>
                                                                                    <span class="span-h"> {{item.BankAccountCountryId | bindCountry}}</span>
                                                                                </div>
                                                                                <hr>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End BankAccount -->
                                                    <!-- Debtor -->
                                                    <div class="col-md-12 col-xs-12" ng-if="finance.CreditDebtor.hasWifeItems !== 0 ">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                دیون و مطالبات
                                                            </div>
                                                            <div class="panel-body padding-r-0 padding-l-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
<!--                                                                        <p ng-if="finance.CreditDebtor.hasWifeItems === 0 ">-->
<!--                                                                            {{notFound}}</p>-->
                                                                        <form ng-repeat="item in finance.CreditDebtor"
                                                                              id="form-Credit-Debtor">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho =='Wife'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat padding-left-0">
                                                                                    <label for="inputCreditPrice">
                                                                                        جمع کل بستانکاری از اشخاص حقیقی
                                                                                        یا
                                                                                        حقوقی
                                                                                        :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.DebotrPrice.NumberValues[1]}} ,
                                                                                        {{item.DebotrPrice.NumberValues[0]}}
                                                                                        {{item.DebotrPrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputDebotrPrice">
                                                                                        جمع کل بدهکاری از اشخاص حقیقی یا
                                                                                        حقوقی :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.CreditPrice.NumberValues[1]}} ,
                                                                                        {{item.CreditPrice.NumberValues[0]}}
                                                                                        {{item.CreditPrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-md-12 col-xs-12">
                                                                                    <label for="inputDebotrPrice">
                                                                                        توضیحات :
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.DebotrDescription}}</span>
                                                                                </div>
                                                                                <hr>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Debtor -->
                                                    <!--Goods -->
                                                    <div class="col-md-12 col-xs-12" ng-if="finance.Goods.hasWifeItems !== 0 ">
                                                        <div class="panel panel-default ">
                                                            <div class="panel-heading">
                                                                کلیه کالاهای فاقد سند مالکیت رسمی
                                                            </div>
                                                            <div class="panel-body padding-r-0 padding-l-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
<!--                                                                        <p ng-if="finance.Goods.hasWifeItems === 0 ">-->
<!--                                                                            {{notFound}}</p>-->
                                                                        <form ng-repeat="item in finance.Goods"
                                                                              id="form-Goods">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Wife'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputGoodsType">
                                                                                        نوع کالا :
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.GoodsType | bindEnum}} </span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputGoodsOwnershipStartDate">
                                                                                        سال شروع مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.GoodsOwnershipStartDate}} </span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputGoodsCount">
                                                                                        حجم / وزن / تعداد کالا :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.GoodsCount}} </span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateOwnershipType">
                                                                                        نحوه مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.RealEstateOwnershipType | bindEnum}} </span>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputGoodsBuyTimePrice">
                                                                                        ارزش حدودی کل سهام در
                                                                                        زمان
                                                                                        شروع مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.GoodsBuyTimePrice.NumberValues[1]}} ,
                                                                                         {{item.GoodsBuyTimePrice.NumberValues[0]}}
                                                                                         {{item.GoodsBuyTimePrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputGoodsNowTimePrice">
                                                                                        ارزش حدودی کل سهام درحال
                                                                                        حاضر :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.GoodsNowTimePrice.NumberValues[1]}} ,
                                                                                         {{item.GoodsNowTimePrice.NumberValues[0]}}
                                                                                         {{item.GoodsNowTimePrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputGoodsOwnershipPercent">
                                                                                        درصد سهم از مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.GoodsOwnershipPercent}} </span>
                                                                                </div>
                                                                                <hr>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Goods -->
                                                    <!--Fee -->
                                                    <div class="col-md-12 col-xs-12" ng-if="finance.Fee.hasWifeItems !== 0 ">
                                                        <div class="panel panel-default ">
                                                            <div class="panel-heading">
                                                                حقوق مالکیت معنوی
                                                            </div>
                                                            <div class="panel-body padding-r-0 padding-l-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
<!--                                                                        <p ng-if="finance.Fee.hasWifeItems === 0 ">-->
<!--                                                                            {{notFound}}</p>-->
                                                                        <form ng-repeat="item in finance.Fee"
                                                                              id="form-Fee">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Wife'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputFeeType">
                                                                                        عنوان :
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.FeeType |bindEnum}} </span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputFeeOwnershipStartDate">
                                                                                        سال شروع مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h">  {{item.FeeOwnershipStartDate}} </span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputFeePercent">
                                                                                        درصد سهم از مالکیت
                                                                                        معنوی:
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h">  {{item.FeePercent}} </span>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputFeeAverageInYear">
                                                                                        میزان درآمد متوسط
                                                                                        سالیانه از
                                                                                        مالکیت
                                                                                        معنوی :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h">  {{item.FeeAverageInYear.NumberValues[1]}} ,
                                                                                        {{item.FeeAverageInYear.NumberValues[0]}}
                                                                                        {{item.FeeAverageInYear.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <hr>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Fee -->
                                                    <!--AverageMonthIncome -->
                                                    <div class="col-md-12 col-xs-12" ng-if="finance.Income.hasWifeItems !== 0 ">
                                                        <div class="panel panel-default ">
                                                            <div class="panel-heading">
                                                                در آمد
                                                            </div>
                                                            <div class="panel-body padding-r-0 padding-l-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
<!--                                                                        <p ng-if="finance.Income.hasWifeItems === 0 ">-->
<!--                                                                            {{notFound}}</p>-->
                                                                        <form ng-repeat="item in finance.Income"
                                                                              id="form-AverageMonthIncome">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Wife'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputAverageMonthIncome">
                                                                                        درآمد متوسط ماهیانه :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.AverageMonthIncome.NumberValues[1]}} ,
                                                                                        {{item.AverageMonthIncome.NumberValues[0]}}
                                                                                        {{item.AverageMonthIncome.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End AverageMonthIncome -->
                                                    <!-- ElectionPlacePrice -->
                                                    <div class="col-md-12 col-xs-12" ng-if="finance.Election.hasWifeItems !== 0 ">
                                                        <div class="panel panel-default ">
                                                            <div class="panel-heading">
                                                                شفاف سازی هزینه های انتخاباتی
                                                            </div>
                                                            <div class="panel-body padding-r-0 padding-l-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
<!--                                                                        <p ng-if="finance.Election.hasWifeItems === 0 ">-->
<!--                                                                            {{notFound}}</p>-->
                                                                        <form ng-repeat="item in finance.Election"
                                                                              id="form-Election">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Wife'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputElectionPlacePrice">
                                                                                        هزینه دایرکردن محل ستاد انتخابات
                                                                                        (اجاره بها ,
                                                                                        حملو نقل و سایر موارد)
                                                                                        -هزینه کل :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.ElectionPlacePrice.NumberValues[1]}} ,
                                                                                        {{item.ElectionPlacePrice.NumberValues[0]}}
                                                                                        {{item.ElectionPlacePrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputElectionFlockPrice">
                                                                                        هزینه برپایی تجمعات عمومی مرتبط
                                                                                        با
                                                                                        اهداف
                                                                                        انتخاباتی – هزینه کل :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.ElectionFlockPrice.NumberValues[1]}} ,
                                                                                        {{item.ElectionFlockPrice.NumberValues[0]}}
                                                                                        {{item.ElectionFlockPrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputElectionAdvertisePrice">
                                                                                        هزینه تبلیغات مجاز در رسانه ها –
                                                                                        هزینه کل :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.ElectionAdvertisePrice.NumberValues[1]}} ,
                                                                                        {{item.ElectionAdvertisePrice.NumberValues[0]}}
                                                                                        {{item.ElectionAdvertisePrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputElectionStaffPrice">
                                                                                        هزینه و حق الزحمه عوامل اجرایی و
                                                                                        کارشناسی در
                                                                                        انتخابات – هزینه کل :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.ElectionStaffPrice.NumberValues[1]}} ,
                                                                                        {{item.ElectionStaffPrice.NumberValues[0]}}
                                                                                        {{item.ElectionStaffPrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputElectionAllPrice">
                                                                                        جمع کل هزینه های انتخاباتی :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.ElectionAllPrice.NumberValues[1]}} ,
                                                                                        {{item.ElectionAllPrice.NumberValues[0]}}
                                                                                        {{item.ElectionAllPrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End ElectionPlacePrice -->

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab3child">
                                        <div class="LeftPanel">
                                            <div class="LeftPanelcontent">
                                                <div class="row">
                                                    <!--RealEStates -->
                                                    <div class="col-md-12 col-xs-12" ng-if="finance.RealEStates.hasChildItems !== 0 ">
                                                        <div class="panel panel-default ">
                                                            <div class="panel-heading">املاک و مستغلات</div>
                                                            <div class="panel-body padding-r-0 padding-l-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
<!--                                                                        <p ng-if="finance.RealEStates.hasChildItems === 0 ">-->
<!--                                                                            {{notFound}}</p>-->
                                                                        <form ng-repeat="item in finance.RealEStates"
                                                                              id="form-RealEstate">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho === 'Child'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateType">
                                                                                        نوع کاربری :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h">{{item.RealEstateType | bindEnum}}</span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateOwnershipDate">
                                                                                        سال شروع مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h">{{item.RealEstateOwnershipDate}}</span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateOwnershipType">
                                                                                        نحوه مالکیت :
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.RealEstateOwnershipType | bindEnum}}</span>
                                                                                </div>
                                                                                <div class="col-md-2 col-sm-12 col-xs-12 form-group RightFloat countries">
                                                                                    <label for="inputRealEstateCountryId">کشور
                                                                                        :</label>
                                                                                    <span class="span-h">  {{item.RealEstateCountryId | bindCountry}}</span>
                                                                                </div>
                                                                                <div class="col-md-2 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv">
                                                                                    <label for="inputRealEstateStateId">استان
                                                                                        :</label>
                                                                                    <span class="span-h">  {{item.RealEstateStateId | bindState}} </span>
                                                                                </div>
                                                                                <div class="col-md-2 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv">
                                                                                    <label for="inputRealEstateCityId">
                                                                                        شهر :
                                                                                    </label>
                                                                                    <span class="span-h">   {{item.RealEstateCityId | bindCity}} </span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstatePortion">
                                                                                        سهم از ملک(1 تا 6 دانگ) :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h">  {{item.RealEstatePortion}} </span>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateExtent">
                                                                                        متراژ حدودی ملک :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h">  {{item.RealEstateExtent}} ,   {{item.RealEstateExtentUnit | bindEnum}} </span>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateBuyTimePrice">
                                                                                        ارزش حدودی کل سهام در
                                                                                        زمان
                                                                                        شروع مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h">   {{item.RealEstateBuyTimePrice.NumberValues[1]}} ,
                                                                                        {{item.RealEstateBuyTimePrice.NumberValues[0]}}
                                                                                         {{item.RealEstateBuyTimePrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateNowTimePrice">
                                                                                        ارزش حدودی کل سهام درحال
                                                                                        حاضر :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h">  {{item.RealEstateNowTimePrice.NumberValues[1]}} ,
                                                                                         {{item.RealEstateNowTimePrice.NumberValues[0]}}
                                                                                         {{item.RealEstateNowTimePrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateAddress">آدرس
                                                                                        :</label>
                                                                                    <span class="span-h">  {{item.RealEstateAddress}} </span>
                                                                                </div>
                                                                                <hr>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End RealEStates -->
                                                    <!--Vehicle -->
                                                    <div class="col-md-12 col-xs-12" ng-if="finance.Vehicle.hasChildItems !== 0 ">
                                                        <div class="panel panel-default ">
                                                            <div class="panel-heading">
                                                                وسایل نقلیه
                                                            </div>
                                                            <div class="panel-body padding-r-0 padding-l-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
<!--                                                                        <p ng-if="finance.Vehicle.hasChildItems === 0 ">{{notFound}}</p>-->
                                                                        <form ng-repeat="item in finance.Vehicle"
                                                                              id="form-Vehicle">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Child'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputVehicleType">
                                                                                        نوع وسیله نقلیه :<span
                                                                                                class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.VehicleType | bindEnum}} </span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputVehicleOwnershipDate">
                                                                                        سال شروع مالکیت :<span
                                                                                                class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.VehicleOwnershipDate}} </span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputVehicleOwnershipType">
                                                                                        نحوه مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.VehicleOwnershipType | bindEnum}} </span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputVehiclePortion">
                                                                                        سهم از ملک(1 تا 6 دانگ) :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.VehiclePortion}} </span>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputVehicleBuyTimePrice">
                                                                                        ارزش حدودی کل سهام در
                                                                                        زمان
                                                                                        شروع مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.VehicleBuyTimePrice.NumberValues[1]}} ,
                                                                                        {{item.VehicleBuyTimePrice.NumberValues[0]}}
                                                                                        {{item.VehicleBuyTimePrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputVehicleNowTimePrice">
                                                                                        ارزش حدودی کل سهام درحال
                                                                                        حاضر :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.VehicleNowTimePrice.NumberValues[1]}} ,
                                                                                        {{item.VehicleNowTimePrice.NumberValues[0]}}
                                                                                        {{item.VehicleNowTimePrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <hr>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Vehicle -->
                                                    <!--Invest -->
                                                    <div class="col-md-12 col-xs-12" ng-if="finance.Invest.hasChildItems !== 0 ">
                                                        <div class="panel panel-default ">
                                                            <div class="panel-heading">
                                                                سرمایه‌گذاری‌ها (سهام‌، اوراق بهادار، ...)
                                                            </div>
                                                            <div class="panel-body padding-r-0 padding-l-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
<!--                                                                        <p ng-if="finance.Invest.hasChildItems === 0 ">-->
<!--                                                                            {{notFound}}</p>-->
                                                                        <form ng-repeat="item in finance.Invest"
                                                                              id="form-Invest">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Child'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-6 col-xs-12 form-group RightFloat">
                                                                                    <label for="inputInvestTitle">
                                                                                        نام شرکت / موسسه :
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.InvestTitle}} </span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputInvestDate">
                                                                                        سال شروع مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.InvestDate}} </span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputInvestOwnershipType">
                                                                                        نحوه مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.InvestOwnershipType | bindEnum}} </span>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputInvestBuyTimePrice">
                                                                                        ارزش حدودی کل سهام در
                                                                                        زمان
                                                                                        شروع مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.InvestBuyTimePrice.NumberValues[1]}} ,
                                                                                        {{item.InvestBuyTimePrice.NumberValues[0]}}
                                                                                        {{item.InvestBuyTimePrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputInvestNowTimePrice">
                                                                                        ارزش حدودی کل سهام درحال
                                                                                        حاضر :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.InvestNowTimePrice.NumberValues[1]}} ,
                                                                                        {{item.InvestNowTimePrice.NumberValues[0]}}
                                                                                        {{item.InvestNowTimePrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <hr>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Invest -->
                                                    <!--BankAccount -->
                                                    <div class="col-md-12 col-xs-12" ng-if="finance.BankAccount.hasChildItems !== 0 ">
                                                        <div class="panel panel-default ">
                                                            <div class="panel-heading">
                                                                حساب‌های جاری، پس‌انداز و سرمایه‌گذاری
                                                            </div>
                                                            <div class="panel-body padding-r-0 padding-l-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
<!--                                                                        <p ng-if="finance.BankAccount.hasChildItems === 0 ">-->
<!--                                                                            {{notFound}}</p>-->
                                                                        <form ng-repeat="item in finance.BankAccount"
                                                                              id="form-BankAccount">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Child'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                                    <label for="inputBankAccountTitle">
                                                                                        عنوان بانک یا موسسه :
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.BankAccountTitle}} </span>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputBankAccountPrice">
                                                                                        مبلغ :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.BankAccountPrice.NumberValues[1]}} ,
                                                                                        {{item.BankAccountPrice.NumberValues[0]}}
                                                                                        {{item.BankAccountPrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat">
                                                                                    <label for="inputBankAccountCountryId">کشور :</label>
                                                                                    <span class="span-h"> {{item.BankAccountCountryId | bindCountry}}</span>
                                                                                </div>
                                                                                <hr>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End BankAccount -->
                                                    <!-- Debtor -->
                                                    <div class="col-md-12 col-xs-12" ng-if="finance.CreditDebtor.hasChildItems !== 0 ">
                                                        <div class="panel panel-default ">
                                                            <div class="panel-heading">
                                                                دیون و مطالبات
                                                            </div>
                                                            <div class="panel-body padding-r-0 padding-l-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
<!--                                                                        <p ng-if="finance.CreditDebtor.hasChildItems === 0 ">-->
<!--                                                                            {{notFound}}</p>-->
                                                                        <form ng-repeat="item in finance.CreditDebtor"
                                                                              id="form-Credit-Debtor">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho =='Child'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat padding-left-0">
                                                                                    <label for="inputCreditPrice">
                                                                                        جمع کل بستانکاری از اشخاص حقیقی
                                                                                        یا
                                                                                        حقوقی
                                                                                        :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.DebotrPrice.NumberValues[1]}} ,
                                                                                        {{item.DebotrPrice.NumberValues[0]}}
                                                                                        {{item.DebotrPrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputDebotrPrice">
                                                                                        جمع کل بدهکاری از اشخاص حقیقی یا
                                                                                        حقوقی :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.CreditPrice.NumberValues[1]}} ,
                                                                                        {{item.CreditPrice.NumberValues[0]}}
                                                                                        {{item.CreditPrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-md-12 col-xs-12">
                                                                                    <label for="inputDebotrPrice">
                                                                                        توضیحات :
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.DebotrDescription}}</span>
                                                                                </div>
                                                                                <hr>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Debtor -->
                                                    <!--Goods -->
                                                    <div class="col-md-12 col-xs-12" ng-if="finance.Goods.hasChildItems !== 0 ">
                                                        <div class="panel panel-default ">
                                                            <div class="panel-heading">
                                                                کلیه کالاهای فاقد سند مالکیت رسمی
                                                            </div>
                                                            <div class="panel-body padding-r-0 padding-l-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
<!--                                                                        <p ng-if="finance.Goods.hasChildItems === 0 ">-->
<!--                                                                            {{notFound}}</p>-->
                                                                        <form ng-repeat="item in finance.Goods"
                                                                              id="form-Goods">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Child'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputGoodsType">
                                                                                        نوع کالا :
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.GoodsType | bindEnum}} </span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputGoodsOwnershipStartDate">
                                                                                        سال شروع مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.GoodsOwnershipStartDate}} </span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputGoodsCount">
                                                                                        حجم / وزن / تعداد کالا :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.GoodsCount}} </span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateOwnershipType">
                                                                                        نحوه مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.RealEstateOwnershipType | bindEnum}} </span>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputGoodsBuyTimePrice">
                                                                                        ارزش حدودی کل سهام در
                                                                                        زمان
                                                                                        شروع مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.GoodsBuyTimePrice.NumberValues[1]}} ,
                                                                                         {{item.GoodsBuyTimePrice.NumberValues[0]}}
                                                                                         {{item.GoodsBuyTimePrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputGoodsNowTimePrice">
                                                                                        ارزش حدودی کل سهام درحال
                                                                                        حاضر :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.GoodsNowTimePrice.NumberValues[1]}} ,
                                                                                         {{item.GoodsNowTimePrice.NumberValues[0]}}
                                                                                         {{item.GoodsNowTimePrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputGoodsOwnershipPercent">
                                                                                        درصد سهم از مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.GoodsOwnershipPercent}} </span>
                                                                                </div>
                                                                                <hr>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Goods -->
                                                    <!--Fee -->
                                                    <div class="col-md-12 col-xs-12" ng-if="finance.Fee.hasChildItems !== 0 ">
                                                        <div class="panel panel-default ">
                                                            <div class="panel-heading">
                                                                حقوق مالکیت معنوی
                                                            </div>
                                                            <div class="panel-body padding-r-0 padding-l-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
<!--                                                                        <p ng-if="finance.Fee.hasChildItems === 0 ">-->
<!--                                                                            {{notFound}}</p>-->
                                                                        <form ng-repeat="item in finance.Fee"
                                                                              id="form-Fee">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Child'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputFeeType">
                                                                                        عنوان :
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.FeeType |bindEnum}} </span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputFeeOwnershipStartDate">
                                                                                        سال شروع مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h">  {{item.FeeOwnershipStartDate}} </span>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputFeePercent">
                                                                                        درصد سهم از مالکیت
                                                                                        معنوی:
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h">  {{item.FeePercent}} </span>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputFeeAverageInYear">
                                                                                        میزان درآمد متوسط
                                                                                        سالیانه از
                                                                                        مالکیت
                                                                                        معنوی :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h">  {{item.FeeAverageInYear.NumberValues[1]}} ,
                                                                                        {{item.FeeAverageInYear.NumberValues[0]}}
                                                                                        {{item.FeeAverageInYear.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <hr>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Fee -->
                                                    <!--AverageMonthIncome -->
                                                    <div class="col-md-12 col-xs-12" ng-if="finance.Income.hasChildItems !== 0 ">
                                                        <div class="panel panel-default ">
                                                            <div class="panel-heading">
                                                                در آمد
                                                            </div>
                                                            <div class="panel-body padding-r-0 padding-l-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
<!--                                                                        <p ng-if="finance.Income.hasChildItems === 0 ">-->
<!--                                                                            {{notFound}}</p>-->
                                                                        <form ng-repeat="item in finance.Income"
                                                                              id="form-AverageMonthIncome">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Child'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputAverageMonthIncome">
                                                                                        درآمد متوسط ماهیانه :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.AverageMonthIncome.NumberValues[1]}} ,
                                                                                        {{item.AverageMonthIncome.NumberValues[0]}}
                                                                                        {{item.AverageMonthIncome.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End AverageMonthIncome -->
                                                    <!-- ElectionPlacePrice -->
                                                    <div class="col-md-12 col-xs-12" ng-if="finance.Election.hasChildItems !== 0 ">
                                                        <div class="panel panel-default ">
                                                            <div class="panel-heading">
                                                                شفاف سازی هزینه های انتخاباتی
                                                            </div>
                                                            <div class="panel-body padding-r-0 padding-l-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
<!--                                                                        <p ng-if="finance.Election.hasChildItems === 0 ">-->
<!--                                                                            {{notFound}}</p>-->
                                                                        <form ng-repeat="item in finance.Election"
                                                                              id="form-Election">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Child'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputElectionPlacePrice">
                                                                                        هزینه دایرکردن محل ستاد انتخابات
                                                                                        (اجاره بها ,
                                                                                        حملو نقل و سایر موارد)
                                                                                        -هزینه کل :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.ElectionPlacePrice.NumberValues[1]}} ,
                                                                                        {{item.ElectionPlacePrice.NumberValues[0]}}
                                                                                        {{item.ElectionPlacePrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputElectionFlockPrice">
                                                                                        هزینه برپایی تجمعات عمومی مرتبط
                                                                                        با
                                                                                        اهداف
                                                                                        انتخاباتی – هزینه کل :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.ElectionFlockPrice.NumberValues[1]}} ,
                                                                                        {{item.ElectionFlockPrice.NumberValues[0]}}
                                                                                        {{item.ElectionFlockPrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputElectionAdvertisePrice">
                                                                                        هزینه تبلیغات مجاز در رسانه ها –
                                                                                        هزینه کل :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.ElectionAdvertisePrice.NumberValues[1]}} ,
                                                                                        {{item.ElectionAdvertisePrice.NumberValues[0]}}
                                                                                        {{item.ElectionAdvertisePrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputElectionStaffPrice">
                                                                                        هزینه و حق الزحمه عوامل اجرایی و
                                                                                        کارشناسی در
                                                                                        انتخابات – هزینه کل :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.ElectionStaffPrice.NumberValues[1]}} ,
                                                                                        {{item.ElectionStaffPrice.NumberValues[0]}}
                                                                                        {{item.ElectionStaffPrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputElectionAllPrice">
                                                                                        جمع کل هزینه های انتخاباتی :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <span class="span-h"> {{item.ElectionAllPrice.NumberValues[1]}} ,
                                                                                        {{item.ElectionAllPrice.NumberValues[0]}}
                                                                                        {{item.ElectionAllPrice.TranslatedUnit}}
                                                                                    </span>
                                                                                </div>

                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End ElectionPlacePrice -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Report Abuse -->

                <div class="panel left-candidate-panel-resume padding-0 single-scroll">
                    <div class="panel-heading left-candidate-panel-resume col-md-12 col-xs-12 padding-0">
                        <div class="have-border-bottom">
                            <h3>موارد وارد نشده</h3>
                        </div>
                    </div>
                    <div class="panel-body">
                        <ul class="resume-ul">
                            <li ng-if="candidateAcademicBackground.length === 0 ">
                                <span class="fa fa-circle-o"></span>
                                <i>سوابق تحصیلی وارد نشده است</i>
                            </li>
                            <li ng-if="candidateMilitaryStatus.length === 0 ">
                                <span class="fa fa-circle-o"></span>
                                <i>سوابق خدمت وارد نشده است</i>
                            </li>
                            <li ng-if="candidateJobHistory.length === 0 ">
                                <span class="fa fa-circle-o"></span>
                                <i>سوابق شغلی وارد نشده است</i>
                            </li>
                            <li ng-if="candidateBooks.length === 0 ">
                                <span class="fa fa-circle-o"></span>
                                <i>سوابق علمی پژوهشی وارد نشده است</i>
                            </li>
                            <li ng-if="candidateSkills.length === 0 ">
                                <span class="fa fa-circle-o"></span>
                                <i>مهارت ها وارد نشده است</i>
                            </li>
                            <li ng-if="promises.length === 0 ">
                                <span class="fa fa-circle-o"></span>
                                <i>وعده های انتخاباتی وارد نشده است</i>
                            </li>
                            <li ng-if="politicBackground.length === 0 ">
                                <span class="fa fa-circle-o"></span>
                                <i>سوابق سیاسی وارد نشده است</i>
                            </li>
                            <li ng-if="candidateSocialCulturalBackground.length === 0 ">
                                <span class="fa fa-circle-o"></span>
                                <i>سوابق فرهنگی اجتماعی وارد نشده است</i>
                            </li>
                            <li ng-if="finance.length === 0 ">
                                <span class="fa fa-circle-o"></span>
                                <i>فهرست اموال و دارایی ها وارد نشده است</i>
                            </li>

                            <li ng-if="finance.RealEStates.hasChildItems === 0 || finance.RealEStates.hasWifeItems === 0 || finance.RealEStates.hasSelfItems === 0">
                                <span class="fa fa-circle-o"></span>
                                <i ng-if="finance.RealEStates.hasChildItems === 0">املاک و مستغلات  فرزند وارد نشده است</i> ,
                                <i ng-if="finance.RealEStates.hasWifeItems === 0">املاک و مستغلات  همسر وارد نشده است</i> ,
                                <i ng-if="finance.RealEStates.hasSelfItems === 0">املاک و مستغلات  خود وارد نشده است</i>
                            </li>

                            <li ng-if="finance.Vehicle.hasChildItems === 0 || finance.Vehicle.hasWifeItems === 0 || finance.Vehicle.hasSelfItems === 0">
                                <span class="fa fa-circle-o"></span>
                                <i ng-if="finance.Vehicle.hasChildItems === 0">وسیله نقلیه  فرزند وارد نشده است</i> ,
                                <i ng-if="finance.Vehicle.hasWifeItems === 0">وسیله نقلیه  همسر وارد نشده است</i> ,
                                <i ng-if="finance.Vehicle.hasSelfItems === 0">وسیله نقلیه  خود وارد نشده است</i>
                            </li>

                            <li ng-if="finance.Invest.hasChildItems === 0 || finance.Invest.hasWifeItems === 0 || finance.Invest.hasSelfItems === 0">
                                <span class="fa fa-circle-o"></span>
                                <i ng-if="finance.Invest.hasChildItems === 0">سرمایه گذاری ها  فرزند وارد نشده است</i> ,
                                <i ng-if="finance.Invest.hasWifeItems === 0">سرمایه گذاری ها  همسر وارد نشده است</i> ,
                                <i ng-if="finance.Invest.hasSelfItems === 0">سرمایه گذاری ها  خود وارد نشده است</i>
                            </li>

                            <li ng-if="finance.BankAccount.hasChildItems === 0 || finance.BankAccount.hasWifeItems === 0 || finance.BankAccount.hasSelfItems === 0">
                                <span class="fa fa-circle-o"></span>
                                <i ng-if="finance.BankAccount.hasChildItems === 0">حساب های جاری فرزند وارد نشده است</i> ,
                                <i ng-if="finance.BankAccount.hasWifeItems === 0">حساب های جاری همسر وارد نشده است</i> ,
                                <i ng-if="finance.BankAccount.hasSelfItems === 0">حساب های جاری خود وارد نشده است</i>
                            </li>


                            <li ng-if="finance.CreditDebtor.hasChildItems === 0 || finance.CreditDebtor.hasWifeItems === 0 || finance.CreditDebtor.hasSelfItems === 0">
                                <span class="fa fa-circle-o"></span>
                                <i ng-if="finance.CreditDebtor.hasChildItems === 0">دیون مطالبات فرزند وارد نشده است</i> ,
                                <i ng-if="finance.CreditDebtor.hasWifeItems === 0">دیون مطالبات همسر وارد نشده است</i> ,
                                <i ng-if="finance.CreditDebtor.hasSelfItems === 0">دیون مطالبات خود وارد نشده است</i>
                            </li>


                            <li ng-if="finance.Goods.hasChildItems === 0 || finance.Goods.hasWifeItems === 0 || finance.Goods.hasSelfItems === 0">
                                <span class="fa fa-circle-o"></span>
                                <i ng-if="finance.Goods.hasChildItems === 0">کلیه کالاها  فرزند وارد نشده است</i> ,
                                <i ng-if="finance.Goods.hasWifeItems === 0">کلیه کالاها  همسر وارد نشده است</i> ,
                                <i ng-if="finance.Goods.hasSelfItems === 0">کلیه کالاها  خود وارد نشده است</i>
                            </li>


                            <li ng-if="finance.Fee.hasChildItems === 0 || finance.Fee.hasWifeItems === 0 || finance.Fee.hasSelfItems === 0">
                                <span class="fa fa-circle-o"></span>
                                <i ng-if="finance.Fee.hasChildItems === 0">حقوق مالکیت معنوی  فرزند وارد نشده است</i> ,
                                <i ng-if="finance.Fee.hasWifeItems === 0">حقوق مالکیت معنوی  همسر وارد نشده است</i> ,
                                <i ng-if="finance.Fee.hasSelfItems === 0">حقوق مالکیت معنوی  خود وارد نشده است</i>
                            </li>

                            <li ng-if="finance.Income.hasChildItems === 0 || finance.Income.hasWifeItems === 0 || finance.Income.hasSelfItems === 0">
                                <span class="fa fa-circle-o"></span>
                                <i ng-if="finance.Income.hasChildItems === 0">درآمد  فرزند وارد نشده است</i> ,
                                <i ng-if="finance.Income.hasWifeItems === 0">درآمد  همسر وارد نشده است</i> ,
                                <i ng-if="finance.Income.hasSelfItems === 0">درآمد  خود وارد نشده است</i>
                            </li>

                            <li ng-if="finance.Election.hasChildItems === 0 || finance.Election.hasWifeItems === 0 || finance.Election.hasSelfItems === 0">
                                <span class="fa fa-circle-o"></span>
                                <i ng-if="finance.Election.hasChildItems === 0">شفاف سازی هزینه های انتخاباتی فرزند وارد نشده است</i> ,
                                <i ng-if="finance.Election.hasWifeItems === 0">شفاف سازی هزینه های انتخاباتی همسر وارد نشده است</i> ,
                                <i ng-if="finance.Election.hasSelfItems === 0">شفاف سازی هزینه های انتخاباتی خود وارد نشده است</i>
                            </li>

                        </ul>
                    </div>


                <div class="panel left-candidate-panel-resume padding-0 single-scroll report">
                    <div class="panel-heading left-candidate-panel-resume col-md-12 col-xs-12 padding-0">
                        <div class="have-border-bottom">
                            <h3>گزارش تخلف</h3>
                        </div>
                        <h5>
                            در صورت مشاهده هر گونه مغایرت لطفا از طریق فرم زیر گزارش دهید
                        </h5>
                    </div>
                    <div class="panel-body">
                        <input type="hidden" id="inputReportCandidateId" name="inputReportCandidateId"
                               value="<?php echo $candidate['CandidateId']; ?>"/>
                        <input type="hidden" id="inputCSRF" name="inputCSRF"/>
                        <div class="row col-xs-12 col-md-12 pull-right padding-r-0">
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
                        <div class="col-xs-12 col-md-12 padding-r-0">
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
                                           placeholder="کد امنیتی">
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-danger pull-left submit-form" id="submitReportForm">
                                    ارسال
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script>
    var app = angular.module("myApp", []);
    var EnumResumeProfile = {
        "Gender": '[{ "Male":"آقا" },{ "Female":"خانم"}]',
        "MaritalStatus": '[{ "Married":"متاهل" },{ "Single":"مجرد" }]',
        "AcademicStudyStatus": '[{ "Student":"دانشجو" },{ "Graduated":"فارغ التحصیل" }]',
        "CandidateUniversityLevelType": '[{ "PayamNooruniversityLevelType":"پیام نور" }, { "SeminaryLevelType":"حوزه علمیه" },{ "AbroadLevelType":"خارج از کشور" },{ "AzadUniversityLevelType":"دانشگاه آزاد" },{ "GovernmentdailyLevelType":"دولتی - روزانه" },{ "GovernmentnightLevelType":"دولتی - شبانه" },{ "VirtualgovernmentLevelType":"دولتی - مجازی" },{ "GovernmentCampus":"دولتی - پردیس خودگردان" },{ "AppliedScienceLevelType":"علمی کاربردی" },{ "profitLevelType":"غیر انتفاعی" },{ "Others":"سایر" }]',
        "CandidateDepartment":
            '[' +
            '{ "VeterinaryMedicineDepartment": "دامپزشکی"} ,' +
            '{ "ForeignLanguagesDepartment": "زبان های خارجی" } ,' +
            '{ "HumanitiesDepartment": "علوم انسانی " }   ,' +
            '{ "ScienceDepartment": "علوم پایه" }  ,' +
            '{ "TechnicalEngineeringDepartment": "فنی مهندسی " }   ,' +
            '{ "ArtDepartment": "هنر" }   ,' +
            '{ "MedicalDepartment": "پزشکی"}   ,' +
            '{ "AgricultureNaturalResourcesDepartment": "کشاورزی و منابع طبیعی" }   ' +
            ']',
        "CandidateGrade":
            '[' +
            '{ "ZirDiplom": "زیر دیپلم"} ,' +
            '{ "Diplom": "دیپلم" } ,' +
            '{ "Kardani": "کاردانی" }   ,' +
            '{ "Karshenasi": "کارشناسی" }  ,' +
            '{ "KarshenasiArshad": "کارشناسی ارشد" }   ,' +
            '{ "DoctoryHerfei": "دکترای حرفه ای" }   ,' +
            '{ "DoctoryTakhasosi": "دکترای تخصصی"}   ,' +
            '{ "FogDoctory": "فوق دکتری"}   ,' +
            '{ "Hozeh1": "حوزه سطح یک"}   ,' +
            '{ "Hozeh2": "حوزه سطح دو"}   ,' +
            '{ "Hozeh3": "حوزه سطح سه"}   ,' +
            '{ "Hozeh4": "حوزه سطح چهار" }   ' +
            ']',
        "CandidateMilitaryStatus":
            '[' +
            '{ "Exempt": "معاف"} ,' +
            '{ "CardService": "دارای کارت پایان خدمت" } ,' +
            '{ "Serving": "درحال خدمت" }   ,' +
            '{ "Included": "مشمول" }  ,' +
            '{ "BuyService": "خرید خدمت" }   ,' +
            '{ "Hozeh4": "حوزه سطح چهار" }   ' +
            ']',
        "CandidateMilitaryEndArea":
            '[' +
            '{ "Army": "ارتش"} ,' +
            '{ "Corps": "سپاه" } ,' +
            '{ "Police": "نیروی انتظامی" }   ,' +
            '{ "DepartmentDefense": "وزارت دفاع" }  ,' +
            '{ "Others": "سایر" }   ' +
            ']',
        "ShamsiMonths":
            '[' +
            '{ "Farvardin": "فروردین"} ,' +
            '{ "Ordibehsht": "اردیبهشت" } ,' +
            '{ "Khordad": "خرداد" }   ,' +
            '{ "Tir": "تیر" }  ,' +
            '{ "Mordad": "مرداد" }   ,' +
            '{ "Shahrivar": "شهریور" }   ,' +
            '{ "Mehr": "مهر"}   ,' +
            '{ "Aban": "آبان"}   ,' +
            '{ "Azar": "آذر"}   ,' +
            '{ "Dey": "دی"}   ,' +
            '{ "Bahman": "بهمن"}   ,' +
            '{ "Esfand": "اسفند" }   ' +
            ']',
        "CandidatePoliticActivityType":
            '[' +
            '{ "Group": "حزب"} ,' +
            '{ "CandidatesCampaign": "ستاد های انتخاباتی نامزدها" } ,' +
            '{ "SupervisoryBoard": "نظارت و اجرایی ستاد انتخابات" }   ,' +
            '{ "Media": "رسانه" }  ,' +
            '{ "Others": "سایر" }   ,' +
            '{ "Esfand": "اسفند" }   ' +
            ']',

        "CandidatePoliticElectionType":
            '[' +
            '{ "President": "ریاست جمهوری"} ,' +
            '{ "Parliament": "مجلس" } ,' +
            '{ "CouncilExperts": "مجلس خبرگان" }   ,' +
            '{ "CityCouncil": "شورای شهر" }   ' +
            ']',
        "ArticleLevelType":
            '[' +
            '{ "Scopus": "علمی تخصصی"} ,' +
            '{ "ScientificTaroviji": "علمی ترویجی" } ,' +
            '{ "ScientificResearch": "علمی پژوهشی" }   ,' +
            '{ "ISC": "ISC" }   ,' +
            '{ "ISI": "ISI" }   ' +
            ']',
        "ConferenceLevelType":
            '[' +
            '{ "International": "بین المللی"} ,' +
            '{ "Internal": "داخلی" }   ' +
            ']',
        "AcceptanceOfferType":
            '[' +
            '{ "Lecture": "سخنرانی"} ,' +
            '{ "Poster": "پوستر" } ,' +
            '{ "PrintArticle": "چاپ مقاله" }   ,' +
            '{ "AbstractPrinting": "چاپ چکیده" }   ' +
            ']',
        "TranslateType":
            '[' +
            '{ "Article": "مقاله"} ,' +
            '{ "Book": "کتاب" }   ' +
            ']',
        "SkillLevel":
            '[' +
            '{ "Beginner": "مبتدی"} ,' +
            '{ "SemiProfessional": "نیمه حرفه ای" } ,' +
            '{ "Professional": "حرفه ای" }   ' +
            ']',
        "SkillLearnType": '[{ "Experimental":"تجربی عملی" },{ "TrainingCourse":"دوره آموزشی"}]',
        "RealEstateType":
            '[' +
            '{ "Residential": "مسکونی"} ,' +
            '{ "Official": "اداری" } ,' +
            '{ "Commercial": "تجاری" }   ,' +
            '{ "Industrial": "صنعتی" }   ,' +
            '{ "Agriculture": "کشاورزی" }   ' +
            ']',
        "OwnershipType":
            '[' +
            '{ "Buy": "خرید"} ,' +
            '{ "Inheritance": "ارث" } ,' +
            '{ "gift": "هدیه / هبه" }   ,' +
            '{ "Dowry": "مهریه" }   ,' +
            '{ "Compensation": "جبران خسارت" }   ' +
            ']',
        "Extent":
            '[' +
            '{ "SquareMeters": "متر مربع"} ,' +
            '{ "Hektar": "هکتار" }   ' +
            ']',
        "TypeOfVehicle":
            '[' +
            '{ "Motorcycle": "موتور سیکلت"} ,' +
            '{ "Bike": "دوچرخه" } ,' +
            '{ "Vehicles": "خودرو سبک" }   ,' +
            '{ "HeavyVehicles": "خودرو سنگین" }   ,' +
            '{ "Other": "سایر" }   ' +
            ']',
        "GoodsType":
            '[' +
            '{ "Decorative": "لوکس یا تزئینی"} ,' +
            '{ "Coins": "مسکوکات" } ,' +
            '{ "Jewelry": "شمش/طلا/جواهر" }   ,' +
            '{ "PreciousMetals": "فلزات قیمتی" }  ,' +
            '{ "ForeignCurrency": "رز خارجی" }   ,' +
            '{ "Livestock": "دام و طیور" }   ,' +
            '{ "OtherCommercialGoods": "سایر کالاهای تجاری"}  ' +
            ']',
        "FeeType":
            '[' +
            '{ "Book": "کتاب"} ,' +
            '{ "Invention": "اختراع / اکتشاف" } ,' +
            '{ "Art": "اثر هنری" }   ' +
            ']', "CandidateActivityFieldType":
            '[' +
            '{ "Charity": "انجمن خیریه"} ,' +
            '{ "Mobilization": "بسیج" } ,' +
            '{ "University": "دانشگاه" }   ,' +
            '{ "Semen": "سمن" }  ,' +
            '{ "Councils": "شورایاری" }   ,' +
            '{ "CulturalCenter": "فرهنگسرا" }   ,' +
            '{ "JihadistActivities": "فعالیت های جهادی"}   ,' +
            '{ "Schools": "مدارس"}   ,' +
            '{ "TheMosque": "مسجد"}   ,' +
            '{ "RedCrescent": "هلال احمر"}   ,' +
            '{ "ReligiousCommittees": "هئیت های مذهبی"}   ,' +
            '{ "Others": "سایر" }   ' +
            ']',
        "CandidateMemberShipType":
            '[' +
            '{ "Official": "رسمی"} ,' +
            '{ "Voluntary": "داوطلبانه" }   ' +
            ']',
        "'CandidateBasijType' ":
            '[' +
            '{ "Urban": "شهری"} ,' +
            '{ "schools": "مدارس" } ,' +
            '{ "University": "دانشگاه" }   ,' +
            '{ "Others": "سایر" }   ' +
            ']',
        "CandidateHeadquarterActivityTitle":
            '[' +
            '{ "SupervisoryBoard": "نطارت شورای نگهبان"} ,' +
            '{ "ExecutiveCommittee": "هیئت اجرایی وزارت کشور" }   ' +
            ']',
        "'CandidateMediaType' ":
            '[' +
            '{ "Voice": "صدا و سیما"} ,' +
            '{ "Journals": "سایت خبری" } ,' +
            '{ "NewSite": "شبکه اجتماعی" }   ,' +
            '{ "SocialNetwork": "نگهبان" }   ,' +
            '{ "Others": "سایر" }   ' +
            ']',
        "CandidateMobilMembershipType":
            '[' +
            '{ "Normal": "عادی"} ,' +
            '{ "Active": "فعال" } ,' +
            '{ "Kadr": "کادر" }   ,' +
            '{ "Others": "سایر" }   ' +
            ']'
    };
    var EnumAcademicBackground = {
        "VeterinaryMedicineDepartment":
            '[' +
            '{ "name": "بهداشت و بیماری آبزیان" , "value" : "1"} ,' +
            '{ "name": "بهداشت و مواد غذایی" , "value" : "2"} ,' +
            '{ "name": "پاتوبیولوژی" , "value" : "3"}   ,' +
            '{ "name": "دامپزشکی" , "value" : "4"}  ,' +
            '{ "name": "علوم پایه دامپزشکی" , "value" : "5"}   ,' +
            '{ "name": "علوم درمانگاهی" , "value" : "6"}   ,' +
            '{ "name": "میکروبیولوژی" , "value" : "7"}   ,' +
            '{ "name": "سایر" , "value" : "8"}   ' +
            ']',
        "foreignlanguages":
            '[' +
            '{ "name": "زبان عربی" , "value" : "1"} ,' +
            '{ "name": "زبان های خارجی" , "value" : "2"} ,' +
            '{ "name": "سایر" , "value" : "3" }   ' +
            ']',
        "HumanitiesDepartment":
            '[' +
            '{ "name": "الهیات و معارف اسلامی" , "value" : "1"} ,' +
            '{ "name": "تاریخ" , "value" : "2"} ,' +
            '{ "name": "تربیت بدنی و علوم ورزشی" , "value" : "3"}   ,' +
            '{ "name": "حسابداری" , "value" : "4"}  ,' +
            '{ "name": "حقوق" , "value" : "5"}   ,' +
            '{ "name": "روانشناسی" , "value" : "6"}   ,' +
            '{ "name": "زبان شناسی" , "value" : "7"}   ,' +
            '{ "name": "زبان شناسی" , "value" : "8"}   ,' +
            '{ "name": "زبان و ادبیات فارسی" , "value" : "9"}   ,' +
            '{ "name": "علوم اجتماعی" , "value" : "10"}   ,' +
            '{ "name": "علوم اقتصادی" , "value" : "11"}   ,' +
            '{ "name": "علوم تربیتی" , "value" : "12"}   ,' +
            '{ "name": "علوم جغرافیایی" , "value" : "13"}   ,' +
            '{ "name": "علوم دریایی" , "value" : "14"}   ,' +
            '{ "name": "علوم سیاسی و روابط بین الملل" , "value" : "15"}   ,' +
            '{ "name": "فلسفه" , "value" : "16"}   ,' +
            '{ "name": "کتابداری و اطلاع رسانی" , "value" : "17"}   ,' +
            '{ "name": "مدیریت" , "value" : "18"}   ,' +
            '{ "name": "نظامی انتظامی" , "value" : "19"}   ,' +
            '{ "name": "سایر" , "value" : "20"}   ' +
            ']',
        "ScienceDepartment":
            '[' +
            '{ "name": "آمار" , "value" : "1"} ,' +
            '{ "name": "ریاضی" , "value" : "2" } ,' +
            '{ "name": "زمین شناسی" , "value" : "3"}   ,' +
            '{ "name": "زیست شناسی" , "value" : "4" }  ,' +
            '{ "name": "ژئوفیزیک و هواشناسی"  , "value" : "5"}   ,' +
            '{ "name": "شیمی" , "value" : "6"}   ,' +
            '{ "name": "علوم دریایی و اقیانوسی" , "value" : "7"}   ,' +
            '{ "name": "علوم کامپیوتر" , "value" : "8"}   ,' +
            '{ "name": "فیزیک" , "value" : "9"}   ,' +
            '{ "name": "محاسبات نرم" , "value" : "10"}   ,' +
            '{ "name": "سایر" , "value" : "11"}   ' +
            ']',
        "TechnicalEngineeringDepartment":
            '[' +
            '{ "name": "مهندسی انرژی" , "value" : "1"} ,' +
            '{ "name": "مهدنسی ایمنی و بازرسی فنی" , "value" : "2" } ,' +
            '{ "name": "مهندسی برق" , "value" : "3"}   ,' +
            '{ "name": "مهندسی پزشکی" , "value" : "4" }  ,' +
            '{ "name": "مهندسی پلیمر"  , "value" : "5"}   ,' +
            '{ "name": "مهندسی دریا" , "value" : "6"}   ,' +
            '{ "name": "مهندسی رشته ای" , "value" : "7"}   ,' +
            '{ "name": "مهندسی شیمی" , "value" : "8"}   ,' +
            '{ "name": "مهندسی صنایع" , "value" : "9"}   ,' +
            '{ "name": "مهندسی عمران" , "value" : "10"}   ,' +
            '{ "name": "مهندسی فناوری اطلاعات" , "value" : "11"}   ,' +
            '{ "name": "مهندسی کامپیوتر" , "value" : "12"}   ,' +
            '{ "name": "مهندسی محیط زیست" , "value" : "13"}   ,' +
            '{ "name": "مهندسی معدن" , "value" : "14"}   ,' +
            '{ "name": "مهندسی مکانیک" , "value" : "15"}   ,' +
            '{ "name": "مهدنسی مواد" , "value" : "16"}   ,' +
            '{ "name": "مهندسی نانوفناوری" , "value" : "17"}   ,' +
            '{ "name": "مهدنسی نساجی" , "value" : "18"}   ,' +
            '{ "name": "مهدنسی نفت" , "value" : "19"}   ,' +
            '{ "name": "مهدنسی هسته ای" , "value" : "20"}   ,' +
            '{ "name": "مهدنسی هوافضا" , "value" : "21"}   ,' +
            '{ "name": "سایر" , "value" : "22"}   ' +
            ']',
        "ArtDepartment":
            '[' +
            '{ "name": "پژوهش هنری" , "value" : "1"} ,' +
            '{ "name": "صنایع دستی" , "value" : "2" } ,' +
            '{ "name": "فرش" , "value" : "3"}   ,' +
            '{ "name": "مرمت" , "value" : "4" }  ,' +
            '{ "name": "معماری"  , "value" : "5"}   ,' +
            '{ "name": "موزه" , "value" : "6"}   ,' +
            '{ "name": "موسیقی" , "value" : "7"}   ,' +
            '{ "name": "هنرهای تجسمی" , "value" : "8"}   ,' +
            '{ "name": "هنرهای کاربردی" , "value" : "9"}   ,' +
            '{ "name": "هنرهای نمایشی و سینمایی" , "value" : "10"}   ,' +
            '{ "name": "سایر" , "value" : "11"}   ' +
            ']',
        "medicalDepartment":
            '[' +
            '{ "name": "پرستاری" , "value" : "1"} ,' +
            '{ "name": "پزشکی" , "value" : "2" } ,' +
            '{ "name": "پیراپزشکی" , "value" : "3"}   ,' +
            '{ "name": "توانبخشی" , "value" : "4" }  ,' +
            '{ "name": "داروسازی"  , "value" : "5"}   ,' +
            '{ "name": "دندانپزشکی" , "value" : "6"}   ,' +
            '{ "name": "سلامت,بهداشت و تغذیه" , "value" : "7"}   ,' +
            '{ "name": "فناوری های نوین پزشکی" , "value" : "8"}   ,' +
            '{ "name": "مامایی" , "value" : "9"}   ,' +
            '{ "name": "مدیریت و اطلاع رسانی پزشکی" , "value" : "10"}   ,' +
            '{ "name": "سایر" , "value" : "11"}   ' +
            ']',

        "AgricultureNaturalResourcesDepartment":
            '[' +
            '{ "name": "آب" , "value" : "1"} ,' +
            '{ "name": "اقتصاد کشاورزی و مدیریت کشاورزی" , "value" : "2" } ,' +
            '{ "name": "بیوتکنولوژی کشاورزی" , "value" : "3"}   ,' +
            '{ "name": "ترویج و آموزش کشاورزی" , "value" : "4" }  ,' +
            '{ "name": "جنگلداری"  , "value" : "5"}   ,' +
            '{ "name": "چوب" , "value" : "6"}   ,' +
            '{ "name": "دامپروری" , "value" : "7"}   ,' +
            '{ "name": "زراعت و اصلاح نباتات" , "value" : "8"}   ,' +
            '{ "name": "شیلات" , "value" : "9"}   ,' +
            '{ "name": "علوم باغبانی" , "value" : "10"}   ,' +
            '{ "name": "علوم خاک" , "value" : "11"}   ,' +
            '{ "name": "گیاه پزشکی" , "value" : "12"}   ,' +
            '{ "name": "ماشین های کشاورزی" , "value" : "13"}   ,' +
            '{ "name": "محیط زیست" , "value" : "14"}   ,' +
            '{ "name": "مدیریت بیابان و مرتع و آبخیزداری" , "value" : "15"}   ,' +
            '{ "name": "مواد غذایی" , "value" : "16"}   ,' +
            '{ "name": "سایر" , "value" : "17"}   ' +
            ']',
    };
    var finance = [];
    var countries = [];
    var cities = [];
    var states = [];
    app.filter('bindState', function () {
        return function (input) {
            $inputKeyState = input;
            for (var i = 0; i < states.length; i++) {
                var row = states[i];
                row['StateId'] = row['StateId'];
                if (row['StateId'] === $inputKeyState) {
                    return (row['StateName'])
                }
            }
        }
    });
    app.filter('bindCountry', function () {
        return function (input) {
            $inputKeyCountry = input;
            for (var i = 0; i < countries.length; i++) {
                var row = countries[i];
                row['CountryId'] = row['CountryId'];
                if (row['CountryId'] === $inputKeyCountry) {
                    return (row['FaName'])
                }
            }
        }
    });
    app.filter('bindCity', function () {
        return function (input) {
            $inputKeyCity = input;
            for (var i = 0; i < cities.length; i++) {
                var row = cities[i];
                row['CityId'] = row['CityId'];
                if (row['CityId'] === $inputKeyCity) {
                    return (row['CityName'])
                }
            }
        }
    });
    app.filter('bindEnum', function () {
        return function (input) {
            $inputKey = input;
            $keys = Object.keys(EnumResumeProfile);
            for (var i = 0; i < $keys.length; i++) {
                $currentKey = $keys[i];
                $keyItems = EnumResumeProfile[$currentKey];
                $currentArrayKeys = JSON.parse($keyItems);
                for (var j = 0; j < $currentArrayKeys.length; j++) {
                    $itemKeys = Object.keys($currentArrayKeys[j]);
                    // console.log('$itemKeys'  , $itemKeys);
                    if ($itemKeys[0] === $inputKey) {
                        for (var k = 0; k < $currentArrayKeys.length; k++) {
                            if ($currentArrayKeys[k][$itemKeys[0]] != undefined) {
                                //console.log("$currentArrayKeys[k][$itemKeys[0]]", $currentArrayKeys[k][$itemKeys[0]]);
                                return $currentArrayKeys[k][$itemKeys[0]];
                            }
                        }
                    }
                }
            }
        }
    });
    app.filter('bindEnumMajor', function () {
        return function (input) {
            $inputKey = input;
            $depatment = $inputKey.split(',')[0];
            $major = $inputKey.split(',')[1];
            $keys = EnumAcademicBackground[$depatment];
            if ($keys != null || $keys != undefined) {
                $keys = JSON.parse($keys);
                for (var i = 0; i < $keys.length; i++) {
                    $keyItems = $keys[i];
                    if ($keyItems['value'] == $major) {
                        return $keyItems['name'];
                    }
                }
            }

        }
    });
    app.controller("myCtrl", function ($scope, $http) {
        $scope.notFound = 'اطلاعاتی برای این مورد وارد نشده است';
        $http.get("<?php echo base_url('State/candidateDetailApi/' . $candidate['CandidateId'] . '/3/اردبیل') ?>").then(function (response) {
            response = response.data;
            $scope.candidateFirstName = response.candidate.CandidateFirstName;
            $scope.CandidateLastName = response.candidate.CandidateLastName;
            $scope.candidateJobHistory = response.candidateJobHistory;
            $scope.CandidateBirthDate = response.candidate.CandidateBirthDate;
            $scope.CandidateGender = response.candidate.CandidateGender;
            $scope.StateName = response.candidate.StateName;
            $scope.CityName = response.candidate.CityName;
            $scope.ElectionName = response.candidate.ElectionName;
            $scope.candidateAcademicBackground = response.candidateAcademicBackground;
            $scope.candidateSocialCulturalBackground = response.candidateSocialCulturalBackground;
            $scope.politicBackground = response.politicBackground;
            $scope.candidateMilitaryStatus = response.candidateMilitaryStatus;
            $scope.politicBackground = response.politicBackground;
            $scope.candidateBooks = response.candidateBooks;
            $scope.candidateArticles = response.candidateArticles;
            $scope.candidateInvention = response.candidateInvention;
            $scope.candidateResearch = response.candidateResearch;
            $scope.candidateConference = response.candidateConference;
            $scope.candidateTranslation = response.candidateTranslation;
            $scope.candidateSkills = response.candidateSkills;
            $scope.promises = response.promises;
            $scope.finance = response.finance;
            countries = response.countries;
            finance = response.finance;
            states = response.states;
            cities = response.cities;

            for (var i = 0; i < $scope.candidateAcademicBackground.length; i++) {
                $scope.candidateAcademicBackground[i]['NewMajor'] = $scope.candidateAcademicBackground[i]['CandidateDepartment'] + "," + $scope.candidateAcademicBackground[i]['CandidateMajor'];
            }

            var keys = Object.keys($scope.finance);
            for (var i = 0; i < keys.length; i++) {
                var row = $scope.finance[keys[i]];
                var hasSelfItems = 0;
                var hasWifeItems = 0;
                var hasChildItems = 0;
                for (var j = 0; j < row.length; j++) {
                    if (row[j]['ForWho'] === 'Self') {
                        hasSelfItems += 1;
                    }
                    if (row[j]['ForWho'] === 'Wife') {
                        hasWifeItems += 1;
                    }
                    if (row[j]['ForWho'] === 'Child') {
                        hasChildItems += 1;
                    }
                }
                $scope.finance[keys[i]]['hasSelfItems'] = hasSelfItems;
                $scope.finance[keys[i]]['hasWifeItems'] = hasWifeItems;
                $scope.finance[keys[i]]['hasChildItems'] = hasChildItems;
            }

            var BankAccountPricePlaceHolder = ['BankAccountPrice'];
            var CreditDebtorPricePlaceHolder = ['DebotrPrice', 'CreditPrice'];
            var ElectionPricePlaceHolder = ['ElectionPlacePrice', 'ElectionFlockPrice', 'ElectionAdvertisePrice', 'ElectionStaffPrice', 'ElectionAllPrice'];
            var FeePricePlaceHolder = ['FeeAverageInYear'];
            var GoodsPricePlaceHolder = ['GoodsBuyTimePrice', 'GoodsNowTimePrice'];
            var IncomePricePlaceHolder = ['AverageMonthIncome'];
            var InvestPricePlaceHolder = ['InvestBuyTimePrice', 'InvestNowTimePrice'];
            var RealEStatesPricePlaceHolder = ['RealEstateBuyTimePrice', 'RealEstateNowTimePrice'];
            var VehiclePricePlaceHolder = ['VehicleBuyTimePrice', 'VehicleNowTimePrice'];

            function translatePrice(key, placeHolder) {
                var innerTemp = $scope.finance[key];
                for (var i = 0; i < innerTemp.length; i++) {
                    var row = innerTemp[i];
                    for (var j = 0; j < placeHolder.length; j++) {
                        var tempPlaceHolder = placeHolder[j];
                        row[tempPlaceHolder] = row[tempPlaceHolder].split(' ');
                        row[tempPlaceHolder]['NumberValues'] = row[tempPlaceHolder][0].split('.');
                        switch (row[tempPlaceHolder][1]) {
                            case 'ML':
                                row[tempPlaceHolder]['TranslatedUnit'] = 'میلیارد تومان';
                                break;
                            case 'MI':
                                row[tempPlaceHolder]['TranslatedUnit'] = 'میلیون تومان';
                                break;
                            case 'HZ':
                                row[tempPlaceHolder]['TranslatedUnit'] = 'هزار تومان';
                                break;
                            case 'SD':
                                row[tempPlaceHolder]['TranslatedUnit'] = 'صد تومان';
                                break;
                        }
                        innerTemp[i] = row;
                    }
                }
            }

            translatePrice('BankAccount', BankAccountPricePlaceHolder);
            translatePrice('CreditDebtor', CreditDebtorPricePlaceHolder);
            translatePrice('Election', ElectionPricePlaceHolder);
            translatePrice('Fee', FeePricePlaceHolder);
            translatePrice('Goods', GoodsPricePlaceHolder);
            translatePrice('Income', IncomePricePlaceHolder);
            translatePrice('Invest', InvestPricePlaceHolder);
            translatePrice('RealEStates', RealEStatesPricePlaceHolder);
            translatePrice('Vehicle', VehiclePricePlaceHolder);


            setTimeout(function () {
                $(".left-candidate-panel-resume :input").prop('disabled', true);
                $(".report :input").prop('disabled', false);
            }, 500);

        });
    });
</script>