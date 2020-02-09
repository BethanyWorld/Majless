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
                        <?php if ($candidate['CandidateGender'] == 'Male') { ?>
                            <li class="col-md-12 padding-0">
                                <a href="#military-records">
                                    <i class="zmdi RightpanelIcon">
                                        <span class="fa fa-flag"></span>
                                    </i>
                                    <div class="RightPanelContent">
                                        <div class="RightPanleTitle"> نظام وظیفه</div>
                                    </div>
                            </li>
                        <?php } ?>
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
                            <a href="#political-background">
                                <i class="zmdi RightpanelIcon">
                                    <span class="fa fa-handshake-o"></span>
                                </i>
                                <div class="RightPanelContent">
                                    <div class="RightPanleTitle"> سوابق سیاسی</div>
                                </div>
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
                        <li class="col-md-12 padding-0">
                            <a href="#skills">
                                <i class="zmdi RightpanelIcon">
                                    <span class="fa fa-outdent"></span>
                                </i>
                                <div class="RightPanelContent">
                                    <div class="RightPanleTitle"> مهارت ها</div>
                                </div>
                            </a>
                        </li>
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
                            <a href="#property-assets">
                                <i class="zmdi RightpanelIcon">
                                    <span class="fa fa-money"></span>
                                </i>
                                <div class="RightPanelContent">
                                    <div class="RightPanleTitle">اطلاعات مالی</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-12 padding-0">
                    <h4 style="text-align: center; background: #095644;color: #fff;padding: 6px 2px;font-size: 14px;">رویداد های مرتبط</h4>
                    <?php
                    foreach ($wordpressPosts as $item) { ?>
                        <p>
                            <a style="display: inline-block;width: 100%;color: #095644;font-weight: 900;padding: 5px 8px;line-height: 30px;"
                               target="_blank" href="<?php echo base_url('blog/?p=' . $item['ID']); ?>">
                                <?php echo $item['post_title']; ?>
                            </a>
                        </p>
                    <?php } ?><?php
                    if (count($wordpressPosts) <=0) { ?>
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
                <!-- Academic  -->
                <div class="panel left-candidate-panel-resume padding-0 single-scroll" id="academic-background">
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
                                    {{item.CandidateStudyStatus | bindEnum}}
                                    {{CandidateUniversityName}}
                                    {{item.CandidateUniversityLevelType | bindEnum }}
                                </strong>
                                گروه تحصیلی
                                <strong class="colored bg-white">
                                    {{item.CandidateDepartment | bindEnum}}
                                </strong>
                                مقطع
                                <strong class="colored bg-white">
                                    {{item.CandidateGrade | bindEnum}}
                                </strong>
                                رشته تحصیلی
                                <strong class="colored bg-white">
                                    {{item.CandidateMajor}}
                                </strong>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Military Status -->
                <div class="panel left-candidate-panel-resume padding-0 single-scroll" id="military-records">
                    <div class="panel-heading left-candidate-panel-resume col-md-12 col-xs-12 padding-0">
                        <div class="have-border-bottom">
                            <h3>سوابق خدمت</h3>
                        </div>
                    </div>
                    <div class="panel-body">
                        <ul class="resume-ul">
                            <li ng-repeat="item in candidateMilitaryStatus">
                                <span class="fa fa-circle-o"></span>
                                <strong class="colored bg-white">

                                    {{item.CandidateMilitaryStatus | bindEnum}}
                                    {{item.CandidateExemptTitle | bindEnum}}
                                    {{item.CandidateExemptDescription}}
                                    {{item.CandidateMilitaryEndMonth |bindEnum}}
                                    {{item.CandidateMilitaryEndYear}}
                                    {{item.CandidateMilitaryEndArea |bindEnum}}
                                    {{item.CandidateMilitaryEndAreaTitle}}

                                </strong>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Job History -->
                <div class="panel left-candidate-panel-resume padding-0 single-scroll" id="work-experience">
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

                <div class="panel left-candidate-panel-resume padding-0 single-scroll" id="social-cultural-background">
                    <div class="panel-heading left-candidate-panel-resume col-md-12 col-xs-12 padding-0">
                        <div class="have-border-bottom">
                            <h3>سوابق فرهنگی اجتماعی</h3>
                        </div>
                    </div>
                    <div class="panel-body">

                    </div>
                </div>
                <!-- Politic History -->
                <div class="panel left-candidate-panel-resume padding-0 single-scroll" id="political-background">
                    <div class="panel-heading left-candidate-panel-resume col-md-12 col-xs-12 padding-0">
                        <div class="have-border-bottom">
                            <h3>سوبق سیاسی</h3>
                        </div>
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
                            <tr ng-repeat="item in politicBackground " class="temp-edu-record">
                                <td class="fit info-department">
                                    {{item.CandidateActivityType | bindEnum}}
                                </td>
                                <td class="fit info-science">
                                    {{item.CandidateActivityTypeOtherOrganizationTitle}}
                                </td>
                                <td class="fit info-studying">
                                    {{item.CandidateElectionType | bindEnum}}
                                </td>
                                <td class="fit info-universityLevelType">
                                    {{item.CandidateElectionPeriod}}
                                </td>
                                <td class="fit info-universityName">
                                    {{item.CandidateElectionListName}}
                                </td>
                                <td class="fit info-universityName">
                                    {{item.CandidateHeadquarterActivityTitle}}
                                </td>
                                <td class="fit info-universityName">
                                    {{item.CandidateMediaType}}
                                </td>
                                <td class="fit info-universityName">
                                    {{item.CandidateMediaTypeTitle}}
                                </td>
                                <td class="fit info-universityName">
                                    {{item.CandidateMediaTitle}}
                                </td>
                                <td class="fit info-universityName">
                                    {{item.CandidateMediaActivityType}}
                                    {{item.CandidateMediaType}}
                                </td>
                                <td class="fit info-universityName">
                                    {{item.CandidateResponsibility}}
                                </td>
                                <td class="fit info-universityName">
                                    {{item.CandidateMemberShip}}
                                </td>
                                <td class="fit info-universityName">
                                    {{item.CandidateMediaStartMonth | bindEnum}}
                                </td>
                                <td class="fit info-universityName">
                                    {{item.CandidateMediaStartYear}}
                                </td>
                                <td class="fit info-universityName">
                                    {{item.CandidateMediaEndMonth | bindEnum }}
                                </td>
                                <td class="fit info-universityName">
                                    {{item.CandidateMediaEndYear}}
                                </td>
                                <td class="fit info-universityName">
                                    {{item.CandidateActivityDescription}}
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Book Publishing History -->
                <div class="panel left-candidate-panel-resume padding-0 single-scroll" id="scientific-research-records">
                    <div class="panel-heading left-candidate-panel-resume col-md-12 col-xs-12 padding-0">
                        <div class="have-border-bottom">
                            <h3>سوابق علمی پژوهشی</h3>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <h4>کتب</h4>
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
                        <h4>مقالات</h4>
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
                        <h4>اختراعات</h4>
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
                        <h4>طراح های پژوهشی</h4>
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
                        <h4>همایش ها</h4>
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
                        <h4>ترجمه ها</h4>
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
                <div class="panel left-candidate-panel-resume padding-0 single-scroll" id="skills">
                    <div class="panel-heading left-candidate-panel-resume col-md-12 col-xs-12 padding-0">
                        <div class="have-border-bottom">
                            <h3>مهارت ها</h3>
                        </div>
                    </div>
                    <div class="panel-body">
                        <ul class="resume-ul">
                            <li ng-repeat="item in candidateSkills">
                                <span class="fa fa-circle-o"></span>
                                <strong class="colored bg-white">
                                    {{item.SkillType}}
                                </strong>
                                سطح
                                <strong class="colored bg-white">
                                    {{item.SkillLevel | bindEnum }}
                                </strong>
                                یادگیری بصورت
                                <strong class="colored bg-white">
                                    {{item.SkillLearnType | bindEnum }}
                                </strong>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Promises History -->
                <div class="panel left-candidate-panel-resume padding-0 single-scroll" id="election-promises">
                    <div class="panel-heading left-candidate-panel-resume col-md-12 col-xs-12 padding-0">
                        <div class="have-border-bottom">
                            <h3>وعده های انتخاباتی</h3>
                        </div>
                    </div>
                    <div class="panel-body">
                        <ul class="resume-ul">
                            <li ng-repeat="item in promises">
                                <span class="fa fa-circle-o"></span>
                                <strong class="colored bg-white">
                                    {{item.CandidateElectionPromise}}
                                </strong>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Finance History -->
                <div class="panel left-candidate-panel-resume padding-0 single-scroll" id="property-assets">

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
                            <div class="panel-body padding-r-0">
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab1myself">
                                        <div class="LeftPanel">
                                            <div class="LeftPanelcontent">
                                                <div class="row">
                                                    <!--RealEStates -->
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="panel panel-default LeftPanelShadow">
                                                            <div class="panel-heading">املاک و مستغلات</div>
                                                            <div class="panel-body padding-r-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                                        <p ng-if="finance.RealEStates.hasSelfItems === 0 ">
                                                                            {{notFound}}</p>
                                                                        <form ng-repeat="item in finance.RealEStates"
                                                                              id="form-RealEstate">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Self'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateType">
                                                                                        نوع کاربری
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputRealEstateType"
                                                                                            id="inputRealEstateType">

                                                                                        <option>
                                                                                            {{item.RealEstateType |
                                                                                            bindEnum}}
                                                                                        </option>

                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateOwnershipDate">
                                                                                        سال شروع مالکیت
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputRealEstateOwnershipDate"
                                                                                            id="inputRealEstateOwnershipDate"
                                                                                            style="font-family: tahoma;">
                                                                                        <option>
                                                                                            {{item.RealEstateOwnershipDate}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateOwnershipType">
                                                                                        نحوه مالکیت
                                                                                    </label>
                                                                                    <select
                                                                                            class="form-control form-control-lg"
                                                                                            name="inputRealEstateOwnershipType"
                                                                                            id="inputRealEstateOwnershipType">
                                                                                        <option>
                                                                                            {{item.RealEstateOwnershipType
                                                                                            | bindEnum}}
                                                                                        </option>

                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat countries">
                                                                                    <label for="inputRealEstateCountryId">کشور</label>
                                                                                    <select
                                                                                            class="form-control form-control-lg"
                                                                                            name="inputRealEstateCountryId"
                                                                                            id="inputRealEstateCountryId">
                                                                                        <option>
                                                                                            {{item.RealEstateCountryId |
                                                                                            bindCountry}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv">
                                                                                    <label for="inputRealEstateStateId">استان</label>
                                                                                    <select
                                                                                            class="form-control form-control-lg"
                                                                                            name="inputRealEstateStateId"
                                                                                            id="inputRealEstateStateId">
                                                                                        <option>
                                                                                            {{item.RealEstateStateId |
                                                                                            bindState}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv">
                                                                                    <label for="inputRealEstateCityId">
                                                                                        شهر
                                                                                    </label>
                                                                                    <select class="form-control form-control-lg city-select"
                                                                                            name="inputRealEstateCityId"
                                                                                            id="inputRealEstateCityId">
                                                                                        <option>
                                                                                            {{item.RealEstateCityId |
                                                                                            bindCity}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstatePortion">
                                                                                        سهم از ملک(1 تا 6 دانگ)
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <input type="number"
                                                                                           value="{{item.RealEstatePortion}}"
                                                                                           name="inputRealEstatePortion"
                                                                                           id="inputRealEstatePortion"
                                                                                           class="form-control"
                                                                                           placeholder="سهم از ملک 1 تا 6 دانگ"
                                                                                           min="1" max="6"/>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateExtent">
                                                                                        متراژ حدودی ملک
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-6 col-xs-12 RightFloat">
                                                                                            <input type="number"
                                                                                                   value="{{item.RealEstateExtent}}"
                                                                                                   name="inputRealEstateExtent"
                                                                                                   id="inputRealEstateExtent"
                                                                                                   class="form-control"
                                                                                                   placeholder=""
                                                                                                   min="0"/>
                                                                                        </div>
                                                                                        <div class="col-md-6 col-xs-12 RightFloat">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputRealEstateExtentUnit"
                                                                                                    id="inputRealEstateExtentUnit">
                                                                                                <option>
                                                                                                    {{item.RealEstateExtentUnit
                                                                                                    | bindEnum}}
                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateBuyTimePrice">
                                                                                        ارزش حدودی کل سهام در
                                                                                        زمان
                                                                                        شروع مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputRealEstateBuyTimePrice"
                                                                                                    id="inputRealEstateBuyTimePrice">
                                                                                                <option>
                                                                                                    {{item.RealEstateBuyTimePrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.RealEstateBuyTimePrice.NumberValues[1]}}

                                                                                                    {{item.RealEstateBuyTimePrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateNowTimePrice">
                                                                                        ارزش حدودی کل سهام درحال
                                                                                        حاضر :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputRealEstateBuyTimePrice"
                                                                                                    id="inputRealEstateBuyTimePrice">
                                                                                                <option>
                                                                                                    {{item.RealEstateNowTimePrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.RealEstateNowTimePrice.NumberValues[1]}}

                                                                                                    {{item.RealEstateNowTimePrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateAddress">آدرس</label>
                                                                                    <input
                                                                                            value="{{item.RealEstateAddress}}"
                                                                                            id="inputRealEstateAddress"
                                                                                            type="text"
                                                                                            name="inputRealEstateAddress"
                                                                                            class="input-validate validate valid"
                                                                                            placeholder="نام خیابان اصلی / محله / منطقه">
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End RealEStates -->
                                                    <!--Vehicle -->
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="panel panel-default LeftPanelShadow">
                                                            <div class="panel-heading">
                                                                وسایل نقلیه
                                                            </div>
                                                            <div class="panel-body padding-r-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                                        <p ng-if="finance.Vehicle.hasSelfItems === 0 ">
                                                                            {{notFound}}</p>
                                                                        <form ng-repeat="item in finance.Vehicle"
                                                                              id="form-Vehicle">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Self'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">

                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputVehicleType">
                                                                                        نوع وسیله نقلیه<span
                                                                                                class="text-danger"></span>
                                                                                    </label>
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputVehicleType"
                                                                                            id="inputVehicleType">
                                                                                        <option>
                                                                                            {{item.VehicleType |
                                                                                            bindEnum}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputVehicleOwnershipDate">
                                                                                        سال شروع مالکیت<span
                                                                                                class="text-danger"></span>
                                                                                    </label>
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputVehicleOwnershipDate"
                                                                                            id="inputVehicleOwnershipDate"
                                                                                            style="font-family: tahoma;">
                                                                                        <option>
                                                                                            {{item.VehicleOwnershipDate}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputVehicleOwnershipType">
                                                                                        نحوه مالکیت
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputVehicleOwnershipType"
                                                                                            id="inputVehicleOwnershipType">
                                                                                        <option>
                                                                                            {{item.VehicleOwnershipType
                                                                                            | bindEnum}}
                                                                                        </option>

                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-5 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputVehicleBuyTimePrice">
                                                                                        ارزش حدودی کل سهام در
                                                                                        زمان
                                                                                        شروع مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputRealEstateBuyTimePrice"
                                                                                                    id="inputRealEstateBuyTimePrice">
                                                                                                <option>
                                                                                                    {{item.VehicleBuyTimePrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.VehicleBuyTimePrice.NumberValues[1]}}

                                                                                                    {{item.VehicleBuyTimePrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="col-md-5 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputVehicleNowTimePrice">
                                                                                        ارزش حدودی کل سهام درحال
                                                                                        حاضر :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputRealEstateBuyTimePrice"
                                                                                                    id="inputRealEstateBuyTimePrice">
                                                                                                <option>
                                                                                                    {{item.VehicleNowTimePrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.VehicleNowTimePrice.NumberValues[1]}}

                                                                                                    {{item.VehicleNowTimePrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat clear-div">
                                                                                    <label for="inputVehiclePortion">
                                                                                        سهم از ملک(1 تا 6 دانگ)
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <input
                                                                                            value="{{item.VehiclePortion}}"
                                                                                            type="number"
                                                                                            name="inputVehiclePortion"
                                                                                            id="inputVehiclePortion"
                                                                                            class="form-control"
                                                                                            placeholder="سهم از ملک 1 تا 6 دانگ"
                                                                                            min="0" max="6"/>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Vehicle -->
                                                    <!--Invest -->
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="panel panel-default LeftPanelShadow">
                                                            <div class="panel-heading">
                                                                سرمایه‌گذاری‌ها (سهام‌، اوراق بهادار، ...)
                                                            </div>
                                                            <div class="panel-body padding-r-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                                        <p ng-if="finance.Invest.hasSelfItems === 0 ">
                                                                            {{notFound}}</p>
                                                                        <form ng-repeat="item in finance.Invest"
                                                                              id="form-Invest">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Self'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                                    <label for="inputInvestTitle">
                                                                                        نام شرکت / موسسه
                                                                                    </label>
                                                                                    <input
                                                                                            value="{{item.InvestTitle}}"
                                                                                            id="inputInvestTitle"
                                                                                            type="text"
                                                                                            name="inputInvestTitle"
                                                                                            placeholder="نام شرکت - موسسه - پروژه ">
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputInvestDate">
                                                                                        سال شروع مالکیت
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputInvestDate"
                                                                                            id="inputInvestDate"
                                                                                            style="font-family: tahoma;">
                                                                                        <option>
                                                                                            {{item.InvestDate}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputInvestOwnershipType">
                                                                                        نحوه مالکیت
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputInvestOwnershipType"
                                                                                            id="inputInvestOwnershipType">
                                                                                        <option>
                                                                                            {{item.InvestOwnershipType |
                                                                                            bindEnum}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-5 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputInvestBuyTimePrice">
                                                                                        ارزش حدودی کل سهام در
                                                                                        زمان
                                                                                        شروع مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputRealEstateBuyTimePrice"
                                                                                                    id="inputRealEstateBuyTimePrice">
                                                                                                <option>
                                                                                                    {{item.InvestBuyTimePrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.InvestBuyTimePrice.NumberValues[1]}}

                                                                                                    {{item.InvestBuyTimePrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-5 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputInvestNowTimePrice">
                                                                                        ارزش حدودی کل سهام درحال
                                                                                        حاضر :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputRealEstateBuyTimePrice"
                                                                                                    id="inputRealEstateBuyTimePrice">
                                                                                                <option>
                                                                                                    {{item.InvestNowTimePrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.InvestNowTimePrice.NumberValues[1]}}

                                                                                                    {{item.InvestNowTimePrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Invest -->
                                                    <!--BankAccount -->
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="panel panel-default LeftPanelShadow">
                                                            <div class="panel-heading">
                                                                حساب‌های جاری، پس‌انداز و سرمایه‌گذاری
                                                            </div>
                                                            <div class="panel-body padding-r-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                                        <p ng-if="finance.BankAccount.hasSelfItems === 0 ">
                                                                            {{notFound}}</p>
                                                                        <form ng-repeat="item in finance.BankAccount"
                                                                              id="form-BankAccount">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Self'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                                    <label for="inputBankAccountTitle">
                                                                                        عنوان بانک یا موسسه
                                                                                    </label>
                                                                                    <input
                                                                                            value="{{item.BankAccountTitle}}"
                                                                                            id="inputBankAccountTitle"
                                                                                            type="text"
                                                                                            name="inputBankAccountTitle"
                                                                                            placeholder="عنوان بانک یا موسسه ">
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputBankAccountPrice">
                                                                                        مبلغ :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputRealEstateBuyTimePrice"
                                                                                                    id="inputRealEstateBuyTimePrice">
                                                                                                <option>
                                                                                                    {{item.BankAccountPrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.BankAccountPrice.NumberValues[1]}}

                                                                                                    {{item.BankAccountPrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat">
                                                                                    <label for="inputBankAccountCountryId">کشور</label>
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputBankAccountCountryId"
                                                                                            id="inputBankAccountCountryId">
                                                                                        <option>
                                                                                            {{item.BankAccountCountryId
                                                                                            | bindCountry}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End BankAccount -->
                                                    <!-- Debtor -->
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="panel panel-default LeftPanelShadow">
                                                            <div class="panel-heading">
                                                                دیون و مطالبات
                                                            </div>
                                                            <div class="panel-body padding-r-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                                        <p ng-if="finance.CreditDebtor.hasSelfItems === 0 ">
                                                                            {{notFound}}</p>
                                                                        <form ng-repeat="item in finance.CreditDebtor"
                                                                              id="form-Credit-Debtor">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho =='Self'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputCreditPrice">
                                                                                        جمع کل بستانکاری از اشخاص حقیقی
                                                                                        یا
                                                                                        حقوقی
                                                                                        :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputRealEstateBuyTimePrice"
                                                                                                    id="inputRealEstateBuyTimePrice">
                                                                                                <option>
                                                                                                    {{item.DebotrPrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.DebotrPrice.NumberValues[1]}}

                                                                                                    {{item.DebotrPrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputDebotrPrice">
                                                                                        جمع کل بدهکاری از اشخاص حقیقی یا
                                                                                        حقوقی :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputRealEstateBuyTimePrice"
                                                                                                    id="inputRealEstateBuyTimePrice">
                                                                                                <option>
                                                                                                    {{item.CreditPrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.CreditPrice.NumberValues[1]}}

                                                                                                    {{item.CreditPrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12 col-xs-12">
                                                                                    <textarea class="EStates-textArea"
                                                                                              name="inputDebotrDescription">{{item.DebotrDescription}}</textarea>
                                                                                </div>

                                                                            </div>
                                                                            <hr>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Debtor -->
                                                    <!--Goods -->
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="panel panel-default LeftPanelShadow">
                                                            <div class="panel-heading">
                                                                کلیه کالاهای فاقد سند مالکیت رسمی
                                                            </div>
                                                            <div class="panel-body padding-r-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                                        <p ng-if="finance.Goods.hasSelfItems === 0 ">
                                                                            {{notFound}}</p>
                                                                        <form ng-repeat="item in finance.Goods"
                                                                              id="form-Goods">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Self'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputGoodsType">
                                                                                        نوع کالا
                                                                                    </label>
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputGoodsType"
                                                                                            id="inputGoodsType">
                                                                                        <option>
                                                                                            {{item.GoodsType |
                                                                                            bindEnum}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputGoodsOwnershipStartDate">
                                                                                        سال شروع مالکیت
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputGoodsOwnershipStartDate"
                                                                                            id="inputGoodsOwnershipStartDate"
                                                                                            style="font-family: tahoma;">
                                                                                        <option
                                                                                        >
                                                                                            {{item.GoodsOwnershipStartDate}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputGoodsCount">
                                                                                        حجم / وزن / تعداد کالا
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <input
                                                                                            value="item.GoodsCount"
                                                                                            type="text"
                                                                                            name="inputGoodsCount"
                                                                                            id="inputGoodsCount"
                                                                                            class="form-control"
                                                                                            placeholder="  حجم / وزن / تعداد کالا"/>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputGoodsBuyTimePrice">
                                                                                        ارزش حدودی کل سهام در
                                                                                        زمان
                                                                                        شروع مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name=""
                                                                                                    id="">
                                                                                                <option>
                                                                                                    {{item.GoodsBuyTimePrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.GoodsBuyTimePrice.NumberValues[1]}}

                                                                                                    {{item.GoodsBuyTimePrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputGoodsNowTimePrice">
                                                                                        ارزش حدودی کل سهام درحال
                                                                                        حاضر :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name=""
                                                                                                    id="">
                                                                                                <option>
                                                                                                    {{item.GoodsNowTimePrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.GoodsNowTimePrice.NumberValues[1]}}

                                                                                                    {{item.GoodsNowTimePrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputGoodsOwnershipPercent">
                                                                                        درصد سهم از مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <input
                                                                                            value="{{item.GoodsOwnershipPercent}}"
                                                                                            type="number"
                                                                                            name="inputGoodsOwnershipPercent"
                                                                                            id="inputGoodsOwnershipPercent"
                                                                                            class="form-control"
                                                                                            placeholder="سهم از ملک 1 تا 6 دانگ"
                                                                                            min="0" max="6"/>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateOwnershipType">
                                                                                        نحوه مالکیت
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputRealEstateOwnershipType"
                                                                                            id="inputRealEstateOwnershipType">
                                                                                        <option>
                                                                                            {{item.RealEstateOwnershipType
                                                                                            | bindEnum}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Goods -->
                                                    <!--Fee -->
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="panel panel-default LeftPanelShadow">
                                                            <div class="panel-heading">
                                                                حقوق مالکیت معنوی
                                                            </div>
                                                            <div class="panel-body padding-r-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                                        <p ng-if="finance.Fee.hasSelfItems === 0 ">
                                                                            {{notFound}}</p>
                                                                        <form ng-repeat="item in finance.Fee"
                                                                              id="form-Fee">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Self'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputFeeType">عنوان
                                                                                        :</label>
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputFeeType"
                                                                                            id="inputFeeType">
                                                                                        <option>
                                                                                            {{item.FeeType |bindEnum}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputFeeOwnershipStartDate">
                                                                                        سال شروع مالکیت
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputFeeOwnershipStartDate"
                                                                                            id="inputFeeOwnershipStartDate"
                                                                                            style="font-family: tahoma;">
                                                                                        <option>
                                                                                            {{item.FeeOwnershipStartDate}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputFeePercent">
                                                                                        درصد سهم از مالکیت
                                                                                        معنوی:
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <input
                                                                                            value="{{item.FeePercent}}"
                                                                                            type="number"
                                                                                            name="inputFeePercent"
                                                                                            id="inputFeePercent"
                                                                                            class="form-control"
                                                                                            placeholder="سهم از ملک 1 تا 6 دانگ"/>
                                                                                </div>
                                                                                <div class="col-md-5 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputFeeAverageInYear">
                                                                                        میزان درآمد متوسط
                                                                                        سالیانه از
                                                                                        مالکیت
                                                                                        معنوی :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name=""
                                                                                                    id="">
                                                                                                <option>
                                                                                                    {{item.FeeAverageInYear.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.FeeAverageInYear.NumberValues[1]}}

                                                                                                    {{item.FeeAverageInYear.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Fee -->
                                                    <!--AverageMonthIncome -->
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="panel panel-default LeftPanelShadow">
                                                            <div class="panel-heading">
                                                                در آمد
                                                            </div>
                                                            <div class="panel-body padding-r-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                                        <p ng-if="finance.Income.hasSelfItems === 0 ">
                                                                            {{notFound}}</p>
                                                                        <form ng-repeat="item in finance.Income"
                                                                              id="form-AverageMonthIncome">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Self'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-5 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputAverageMonthIncome">
                                                                                        درآمد متوسط ماهیانه :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputRealEstateBuyTimePrice"
                                                                                                    id="inputRealEstateBuyTimePrice">
                                                                                                <option>
                                                                                                    {{item.AverageMonthIncome.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.AverageMonthIncome.NumberValues[1]}}

                                                                                                    {{item.AverageMonthIncome.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
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
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="panel panel-default LeftPanelShadow">
                                                            <div class="panel-heading">
                                                                شفاف سازی هزینه های انتخاباتی
                                                            </div>
                                                            <div class="panel-body padding-r-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                                        <p ng-if="finance.Election.hasSelfItems === 0 ">
                                                                            {{notFound}}</p>
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
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name=""
                                                                                                    id="">
                                                                                                <option>
                                                                                                    {{item.ElectionPlacePrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.ElectionPlacePrice.NumberValues[1]}}

                                                                                                    {{item.ElectionPlacePrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputElectionFlockPrice">
                                                                                        هزینه برپایی تجمعات عمومی مرتبط
                                                                                        با
                                                                                        اهداف
                                                                                        انتخاباتی – هزینه کل :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name=""
                                                                                                    id="">
                                                                                                <option>
                                                                                                    {{item.ElectionFlockPrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.ElectionFlockPrice.NumberValues[1]}}

                                                                                                    {{item.ElectionFlockPrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputElectionAdvertisePrice">
                                                                                        هزینه تبلیغات مجاز در رسانه ها –
                                                                                        هزینه کل :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name=""
                                                                                                    id="">
                                                                                                <option>
                                                                                                    {{item.ElectionAdvertisePrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.ElectionAdvertisePrice.NumberValues[1]}}

                                                                                                    {{item.ElectionAdvertisePrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputElectionStaffPrice">
                                                                                        هزینه و حق الزحمه عوامل اجرایی و
                                                                                        کارشناسی در
                                                                                        انتخابات – هزینه کل :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name=""
                                                                                                    id="">
                                                                                                <option>
                                                                                                    {{item.ElectionStaffPrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.ElectionStaffPrice.NumberValues[1]}}

                                                                                                    {{item.ElectionStaffPrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputElectionAllPrice">
                                                                                        جمع کل هزینه های انتخاباتی :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputRealEstateBuyTimePrice"
                                                                                                    id="inputRealEstateBuyTimePrice">
                                                                                                <option>
                                                                                                    {{item.ElectionAllPrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.ElectionAllPrice.NumberValues[1]}}

                                                                                                    {{item.ElectionAllPrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
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
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="panel panel-default LeftPanelShadow">
                                                            <div class="panel-heading">املاک و مستغلات</div>
                                                            <div class="panel-body padding-r-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                                        <p ng-if="finance.RealEStates.hasWifeItems === 0 ">
                                                                            {{notFound}}</p>
                                                                        <form ng-repeat="item in finance.RealEStates"
                                                                              id="form-RealEstate">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Wife'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateType">
                                                                                        نوع کاربری
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputRealEstateType"
                                                                                            id="inputRealEstateType">

                                                                                        <option>
                                                                                            {{item.RealEstateType |
                                                                                            bindEnum}}
                                                                                        </option>

                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateOwnershipDate">
                                                                                        سال شروع مالکیت
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputRealEstateOwnershipDate"
                                                                                            id="inputRealEstateOwnershipDate"
                                                                                            style="font-family: tahoma;">
                                                                                        <option>
                                                                                            {{item.RealEstateOwnershipDate}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateOwnershipType">
                                                                                        نحوه مالکیت
                                                                                    </label>
                                                                                    <select
                                                                                            class="form-control form-control-lg"
                                                                                            name="inputRealEstateOwnershipType"
                                                                                            id="inputRealEstateOwnershipType">
                                                                                        <option>
                                                                                            {{item.RealEstateOwnershipType
                                                                                            | bindEnum}}
                                                                                        </option>

                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat countries">
                                                                                    <label for="inputRealEstateCountryId">کشور</label>
                                                                                    <select
                                                                                            class="form-control form-control-lg"
                                                                                            name="inputRealEstateCountryId"
                                                                                            id="inputRealEstateCountryId">
                                                                                        <option>
                                                                                            {{item.RealEstateCountryId |
                                                                                            bindCountry}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv">
                                                                                    <label for="inputRealEstateStateId">استان</label>
                                                                                    <select
                                                                                            class="form-control form-control-lg"
                                                                                            name="inputRealEstateStateId"
                                                                                            id="inputRealEstateStateId">
                                                                                        <option>
                                                                                            {{item.RealEstateStateId |
                                                                                            bindState}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv">
                                                                                    <label for="inputRealEstateCityId">
                                                                                        شهر
                                                                                    </label>
                                                                                    <select class="form-control form-control-lg city-select"
                                                                                            name="inputRealEstateCityId"
                                                                                            id="inputRealEstateCityId">
                                                                                        <option>
                                                                                            {{item.RealEstateCityId |
                                                                                            bindCity}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstatePortion">
                                                                                        سهم از ملک(1 تا 6 دانگ)
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <input type="number"
                                                                                           value="{{item.RealEstatePortion}}"
                                                                                           name="inputRealEstatePortion"
                                                                                           id="inputRealEstatePortion"
                                                                                           class="form-control"
                                                                                           placeholder="سهم از ملک 1 تا 6 دانگ"
                                                                                           min="1" max="6"/>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateExtent">
                                                                                        متراژ حدودی ملک
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-6 col-xs-12 RightFloat">
                                                                                            <input type="number"
                                                                                                   value="{{item.RealEstateExtent}}"
                                                                                                   name="inputRealEstateExtent"
                                                                                                   id="inputRealEstateExtent"
                                                                                                   class="form-control"
                                                                                                   placeholder=""
                                                                                                   min="0"/>
                                                                                        </div>
                                                                                        <div class="col-md-6 col-xs-12 RightFloat">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputRealEstateExtentUnit"
                                                                                                    id="inputRealEstateExtentUnit">
                                                                                                <option>
                                                                                                    {{item.RealEstateExtentUnit
                                                                                                    | bindEnum}}
                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateBuyTimePrice">
                                                                                        ارزش حدودی کل سهام در
                                                                                        زمان
                                                                                        شروع مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputRealEstateBuyTimePrice"
                                                                                                    id="inputRealEstateBuyTimePrice">
                                                                                                <option>
                                                                                                    {{item.RealEstateBuyTimePrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.RealEstateBuyTimePrice.NumberValues[1]}}

                                                                                                    {{item.RealEstateBuyTimePrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateNowTimePrice">
                                                                                        ارزش حدودی کل سهام درحال
                                                                                        حاضر :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputRealEstateBuyTimePrice"
                                                                                                    id="inputRealEstateBuyTimePrice">
                                                                                                <option>
                                                                                                    {{item.RealEstateNowTimePrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.RealEstateNowTimePrice.NumberValues[1]}}

                                                                                                    {{item.RealEstateNowTimePrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateAddress">آدرس</label>
                                                                                    <input
                                                                                            value="{{item.RealEstateAddress}}"
                                                                                            id="inputRealEstateAddress"
                                                                                            type="text"
                                                                                            name="inputRealEstateAddress"
                                                                                            class="input-validate validate valid"
                                                                                            placeholder="نام خیابان اصلی / محله / منطقه">
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End RealEStates -->
                                                    <!--Vehicle -->
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="panel panel-default LeftPanelShadow">
                                                            <div class="panel-heading">
                                                                وسایل نقلیه
                                                            </div>
                                                            <div class="panel-body padding-r-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                                        <p ng-if="finance.Vehicle.hasWifeItems === 0 ">
                                                                            {{notFound}}</p>
                                                                        <form ng-repeat="item in finance.Vehicle"
                                                                              id="form-Vehicle">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Wife'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">

                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputVehicleType">
                                                                                        نوع وسیله نقلیه<span
                                                                                                class="text-danger"></span>
                                                                                    </label>
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputVehicleType"
                                                                                            id="inputVehicleType">
                                                                                        <option>
                                                                                            {{item.VehicleType |
                                                                                            bindEnum}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputVehicleOwnershipDate">
                                                                                        سال شروع مالکیت<span
                                                                                                class="text-danger"></span>
                                                                                    </label>
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputVehicleOwnershipDate"
                                                                                            id="inputVehicleOwnershipDate"
                                                                                            style="font-family: tahoma;">
                                                                                        <option>
                                                                                            {{item.VehicleOwnershipDate}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputVehicleOwnershipType">
                                                                                        نحوه مالکیت
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputVehicleOwnershipType"
                                                                                            id="inputVehicleOwnershipType">
                                                                                        <option>
                                                                                            {{item.VehicleOwnershipType
                                                                                            | bindEnum}}
                                                                                        </option>

                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputVehicleBuyTimePrice">
                                                                                        ارزش حدودی کل سهام در
                                                                                        زمان
                                                                                        شروع مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputRealEstateBuyTimePrice"
                                                                                                    id="inputRealEstateBuyTimePrice">
                                                                                                <option>
                                                                                                    {{item.VehicleBuyTimePrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.VehicleBuyTimePrice.NumberValues[1]}}

                                                                                                    {{item.VehicleBuyTimePrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputVehicleNowTimePrice">
                                                                                        ارزش حدودی کل سهام درحال
                                                                                        حاضر :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputRealEstateBuyTimePrice"
                                                                                                    id="inputRealEstateBuyTimePrice">
                                                                                                <option>
                                                                                                    {{item.VehicleNowTimePrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.VehicleNowTimePrice.NumberValues[1]}}

                                                                                                    {{item.VehicleNowTimePrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat clear-div">
                                                                                    <label for="inputVehiclePortion">
                                                                                        سهم از ملک(1 تا 6 دانگ)
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <input
                                                                                            value="{{item.VehiclePortion}}"
                                                                                            type="number"
                                                                                            name="inputVehiclePortion"
                                                                                            id="inputVehiclePortion"
                                                                                            class="form-control"
                                                                                            placeholder="سهم از ملک 1 تا 6 دانگ"
                                                                                            min="0" max="6"/>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Vehicle -->
                                                    <!--Invest -->
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="panel panel-default LeftPanelShadow">
                                                            <div class="panel-heading">
                                                                سرمایه‌گذاری‌ها (سهام‌، اوراق بهادار، ...)
                                                            </div>
                                                            <div class="panel-body padding-r-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                                        <p ng-if="finance.Invest.hasWifeItems === 0 ">
                                                                            {{notFound}}</p>
                                                                        <form ng-repeat="item in finance.Invest"
                                                                              id="form-Invest">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Wife'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                                    <label for="inputInvestTitle">
                                                                                        نام شرکت / موسسه
                                                                                    </label>
                                                                                    <input
                                                                                            value="{{item.InvestTitle}}"
                                                                                            id="inputInvestTitle"
                                                                                            type="text"
                                                                                            name="inputInvestTitle"
                                                                                            placeholder="نام شرکت - موسسه - پروژه ">
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputInvestDate">
                                                                                        سال شروع مالکیت
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputInvestDate"
                                                                                            id="inputInvestDate"
                                                                                            style="font-family: tahoma;">
                                                                                        <option>
                                                                                            {{item.InvestDate}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputInvestOwnershipType">
                                                                                        نحوه مالکیت
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputInvestOwnershipType"
                                                                                            id="inputInvestOwnershipType">
                                                                                        <option>
                                                                                            {{item.InvestOwnershipType |
                                                                                            bindEnum}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputInvestBuyTimePrice">
                                                                                        ارزش حدودی کل سهام در
                                                                                        زمان
                                                                                        شروع مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputRealEstateBuyTimePrice"
                                                                                                    id="inputRealEstateBuyTimePrice">
                                                                                                <option>
                                                                                                    {{item.InvestBuyTimePrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.InvestBuyTimePrice.NumberValues[1]}}

                                                                                                    {{item.InvestBuyTimePrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputInvestNowTimePrice">
                                                                                        ارزش حدودی کل سهام درحال
                                                                                        حاضر :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputRealEstateBuyTimePrice"
                                                                                                    id="inputRealEstateBuyTimePrice">
                                                                                                <option>
                                                                                                    {{item.InvestNowTimePrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.InvestNowTimePrice.NumberValues[1]}}

                                                                                                    {{item.InvestNowTimePrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Invest -->
                                                    <!--BankAccount -->
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="panel panel-default LeftPanelShadow">
                                                            <div class="panel-heading">
                                                                حساب‌های جاری، پس‌انداز و سرمایه‌گذاری
                                                            </div>
                                                            <div class="panel-body padding-r-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                                        <p ng-if="finance.BankAccount.hasWifeItems === 0 ">
                                                                            {{notFound}}</p>
                                                                        <form ng-repeat="item in finance.BankAccount"
                                                                              id="form-BankAccount">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Wife'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                                    <label for="inputBankAccountTitle">
                                                                                        عنوان بانک یا موسسه
                                                                                    </label>
                                                                                    <input
                                                                                            value="{{item.BankAccountTitle}}"
                                                                                            id="inputBankAccountTitle"
                                                                                            type="text"
                                                                                            name="inputBankAccountTitle"
                                                                                            placeholder="عنوان بانک یا موسسه ">
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputBankAccountPrice">
                                                                                        مبلغ :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputRealEstateBuyTimePrice"
                                                                                                    id="inputRealEstateBuyTimePrice">
                                                                                                <option>
                                                                                                    {{item.BankAccountPrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.BankAccountPrice.NumberValues[1]}}

                                                                                                    {{item.BankAccountPrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat">
                                                                                    <label for="inputBankAccountCountryId">کشور</label>
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputBankAccountCountryId"
                                                                                            id="inputBankAccountCountryId">
                                                                                        <option>
                                                                                            {{item.BankAccountCountryId
                                                                                            | bindCountry}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End BankAccount -->
                                                    <!-- Debtor -->
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="panel panel-default LeftPanelShadow">
                                                            <div class="panel-heading">
                                                                دیون و مطالبات
                                                            </div>
                                                            <div class="panel-body padding-r-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                                        <p ng-if="finance.CreditDebtor.hasWifeItems === 0 ">
                                                                            {{notFound}}</p>
                                                                        <form ng-repeat="item in finance.CreditDebtor"
                                                                              id="form-Credit-Debtor">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho =='Wife'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputCreditPrice">
                                                                                        جمع کل بستانکاری از اشخاص حقیقی
                                                                                        یا
                                                                                        حقوقی
                                                                                        :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputRealEstateBuyTimePrice"
                                                                                                    id="inputRealEstateBuyTimePrice">
                                                                                                <option>
                                                                                                    {{item.DebotrPrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.DebotrPrice.NumberValues[1]}}

                                                                                                    {{item.DebotrPrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputDebotrPrice">
                                                                                        جمع کل بدهکاری از اشخاص حقیقی یا
                                                                                        حقوقی :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputRealEstateBuyTimePrice"
                                                                                                    id="inputRealEstateBuyTimePrice">
                                                                                                <option>
                                                                                                    {{item.CreditPrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.CreditPrice.NumberValues[1]}}

                                                                                                    {{item.CreditPrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12 col-xs-12">
                                                                                     <textarea class="EStates-textArea"
                                                                                               name="inputDebotrDescription">{{item.DebotrDescription}}</textarea>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Debtor -->
                                                    <!--Goods -->
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="panel panel-default LeftPanelShadow">
                                                            <div class="panel-heading">
                                                                کلیه کالاهای فاقد سند مالکیت رسمی
                                                            </div>
                                                            <div class="panel-body padding-r-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                                        <p ng-if="finance.Goods.hasWifeItems === 0 ">
                                                                            {{notFound}}</p>
                                                                        <form ng-repeat="item in finance.Goods"
                                                                              id="form-Goods">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Wife'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputGoodsType">
                                                                                        نوع کالا
                                                                                    </label>
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputGoodsType"
                                                                                            id="inputGoodsType">
                                                                                        <option>
                                                                                            {{item.GoodsType |
                                                                                            bindEnum}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputGoodsOwnershipStartDate">
                                                                                        سال شروع مالکیت
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputGoodsOwnershipStartDate"
                                                                                            id="inputGoodsOwnershipStartDate"
                                                                                            style="font-family: tahoma;">
                                                                                        <option
                                                                                        >
                                                                                            {{item.GoodsOwnershipStartDate}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputGoodsCount">
                                                                                        حجم / وزن / تعداد کالا
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <input
                                                                                            value="item.GoodsCount"
                                                                                            type="text"
                                                                                            name="inputGoodsCount"
                                                                                            id="inputGoodsCount"
                                                                                            class="form-control"
                                                                                            placeholder="  حجم / وزن / تعداد کالا"/>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputGoodsBuyTimePrice">
                                                                                        ارزش حدودی کل سهام در
                                                                                        زمان
                                                                                        شروع مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name=""
                                                                                                    id="">
                                                                                                <option>
                                                                                                    {{item.GoodsBuyTimePrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.GoodsBuyTimePrice.NumberValues[1]}}

                                                                                                    {{item.GoodsBuyTimePrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputGoodsNowTimePrice">
                                                                                        ارزش حدودی کل سهام درحال
                                                                                        حاضر :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name=""
                                                                                                    id="">
                                                                                                <option>
                                                                                                    {{item.GoodsNowTimePrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.GoodsNowTimePrice.NumberValues[1]}}

                                                                                                    {{item.GoodsNowTimePrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputGoodsOwnershipPercent">
                                                                                        درصد سهم از مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <input
                                                                                            value="{{item.GoodsOwnershipPercent}}"
                                                                                            type="number"
                                                                                            name="inputGoodsOwnershipPercent"
                                                                                            id="inputGoodsOwnershipPercent"
                                                                                            class="form-control"
                                                                                            placeholder="سهم از ملک 1 تا 6 دانگ"
                                                                                            min="0" max="6"/>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateOwnershipType">
                                                                                        نحوه مالکیت
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputRealEstateOwnershipType"
                                                                                            id="inputRealEstateOwnershipType">
                                                                                        <option>
                                                                                            {{item.RealEstateOwnershipType
                                                                                            | bindEnum}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Goods -->
                                                    <!--Fee -->
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="panel panel-default LeftPanelShadow">
                                                            <div class="panel-heading">
                                                                حقوق مالکیت معنوی
                                                            </div>
                                                            <div class="panel-body padding-r-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                                        <p ng-if="finance.Fee.hasWifeItems === 0 ">
                                                                            {{notFound}}</p>
                                                                        <form ng-repeat="item in finance.Fee"
                                                                              id="form-Fee">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Wife'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputFeeType">عنوان
                                                                                        :</label>
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputFeeType"
                                                                                            id="inputFeeType">
                                                                                        <option>
                                                                                            {{item.FeeType |bindEnum}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputFeeOwnershipStartDate">
                                                                                        سال شروع مالکیت
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputFeeOwnershipStartDate"
                                                                                            id="inputFeeOwnershipStartDate"
                                                                                            style="font-family: tahoma;">
                                                                                        <option>
                                                                                            {{item.FeeOwnershipStartDate}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputFeePercent">
                                                                                        درصد سهم از مالکیت
                                                                                        معنوی:
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <input
                                                                                            value="{{item.FeePercent}}"
                                                                                            type="number"
                                                                                            name="inputFeePercent"
                                                                                            id="inputFeePercent"
                                                                                            class="form-control"
                                                                                            placeholder="سهم از ملک 1 تا 6 دانگ"/>
                                                                                </div>
                                                                                <div class="col-md-5 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputFeeAverageInYear">
                                                                                        میزان درآمد متوسط
                                                                                        سالیانه از
                                                                                        مالکیت
                                                                                        معنوی :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name=""
                                                                                                    id="">
                                                                                                <option>
                                                                                                    {{item.FeeAverageInYear.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.FeeAverageInYear.NumberValues[1]}}

                                                                                                    {{item.FeeAverageInYear.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Fee -->
                                                    <!--AverageMonthIncome -->
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="panel panel-default LeftPanelShadow">
                                                            <div class="panel-heading">
                                                                در آمد
                                                            </div>
                                                            <div class="panel-body padding-r-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                                        <p ng-if="finance.Income.hasWifeItems === 0 ">
                                                                            {{notFound}}</p>
                                                                        <form ng-repeat="item in finance.Income"
                                                                              id="form-AverageMonthIncome">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Wife'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-5 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputAverageMonthIncome">
                                                                                        درآمد متوسط ماهیانه :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputRealEstateBuyTimePrice"
                                                                                                    id="inputRealEstateBuyTimePrice">
                                                                                                <option>
                                                                                                    {{item.AverageMonthIncome.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.AverageMonthIncome.NumberValues[1]}}

                                                                                                    {{item.AverageMonthIncome.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
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
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="panel panel-default LeftPanelShadow">
                                                            <div class="panel-heading">
                                                                شفاف سازی هزینه های انتخاباتی
                                                            </div>
                                                            <div class="panel-body padding-r-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                                        <p ng-if="finance.Election.hasWifeItems === 0 ">
                                                                            {{notFound}}</p>
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
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name=""
                                                                                                    id="">
                                                                                                <option>
                                                                                                    {{item.ElectionPlacePrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.ElectionPlacePrice.NumberValues[1]}}

                                                                                                    {{item.ElectionPlacePrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputElectionFlockPrice">
                                                                                        هزینه برپایی تجمعات عمومی مرتبط
                                                                                        با
                                                                                        اهداف
                                                                                        انتخاباتی – هزینه کل :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name=""
                                                                                                    id="">
                                                                                                <option>
                                                                                                    {{item.ElectionFlockPrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.ElectionFlockPrice.NumberValues[1]}}

                                                                                                    {{item.ElectionFlockPrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputElectionAdvertisePrice">
                                                                                        هزینه تبلیغات مجاز در رسانه ها –
                                                                                        هزینه کل :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name=""
                                                                                                    id="">
                                                                                                <option>
                                                                                                    {{item.ElectionAdvertisePrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.ElectionAdvertisePrice.NumberValues[1]}}

                                                                                                    {{item.ElectionAdvertisePrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputElectionStaffPrice">
                                                                                        هزینه و حق الزحمه عوامل اجرایی و
                                                                                        کارشناسی در
                                                                                        انتخابات – هزینه کل :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name=""
                                                                                                    id="">
                                                                                                <option>
                                                                                                    {{item.ElectionStaffPrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.ElectionStaffPrice.NumberValues[1]}}

                                                                                                    {{item.ElectionStaffPrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputElectionAllPrice">
                                                                                        جمع کل هزینه های انتخاباتی :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputRealEstateBuyTimePrice"
                                                                                                    id="inputRealEstateBuyTimePrice">
                                                                                                <option>
                                                                                                    {{item.ElectionAllPrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.ElectionAllPrice.NumberValues[1]}}

                                                                                                    {{item.ElectionAllPrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
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
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="panel panel-default LeftPanelShadow">
                                                            <div class="panel-heading">املاک و مستغلات</div>
                                                            <div class="panel-body padding-r-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                                        <p ng-if="finance.RealEStates.hasChildItems === 0 ">
                                                                            {{notFound}}</p>
                                                                        <form ng-repeat="item in finance.RealEStates"
                                                                              id="form-RealEstate">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Child'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateType">
                                                                                        نوع کاربری
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputRealEstateType"
                                                                                            id="inputRealEstateType">

                                                                                        <option>
                                                                                            {{item.RealEstateType |
                                                                                            bindEnum}}
                                                                                        </option>

                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateOwnershipDate">
                                                                                        سال شروع مالکیت
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputRealEstateOwnershipDate"
                                                                                            id="inputRealEstateOwnershipDate"
                                                                                            style="font-family: tahoma;">
                                                                                        <option>
                                                                                            {{item.RealEstateOwnershipDate}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateOwnershipType">
                                                                                        نحوه مالکیت
                                                                                    </label>
                                                                                    <select
                                                                                            class="form-control form-control-lg"
                                                                                            name="inputRealEstateOwnershipType"
                                                                                            id="inputRealEstateOwnershipType">
                                                                                        <option>
                                                                                            {{item.RealEstateOwnershipType
                                                                                            | bindEnum}}
                                                                                        </option>

                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat countries">
                                                                                    <label for="inputRealEstateCountryId">کشور</label>
                                                                                    <select
                                                                                            class="form-control form-control-lg"
                                                                                            name="inputRealEstateCountryId"
                                                                                            id="inputRealEstateCountryId">
                                                                                        <option>
                                                                                            {{item.RealEstateCountryId |
                                                                                            bindCountry}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv">
                                                                                    <label for="inputRealEstateStateId">استان</label>
                                                                                    <select
                                                                                            class="form-control form-control-lg"
                                                                                            name="inputRealEstateStateId"
                                                                                            id="inputRealEstateStateId">
                                                                                        <option>
                                                                                            {{item.RealEstateStateId |
                                                                                            bindState}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv">
                                                                                    <label for="inputRealEstateCityId">
                                                                                        شهر
                                                                                    </label>
                                                                                    <select class="form-control form-control-lg city-select"
                                                                                            name="inputRealEstateCityId"
                                                                                            id="inputRealEstateCityId">
                                                                                        <option>
                                                                                            {{item.RealEstateCityId |
                                                                                            bindCity}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstatePortion">
                                                                                        سهم از ملک(1 تا 6 دانگ)
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <input type="number"
                                                                                           value="{{item.RealEstatePortion}}"
                                                                                           name="inputRealEstatePortion"
                                                                                           id="inputRealEstatePortion"
                                                                                           class="form-control"
                                                                                           placeholder="سهم از ملک 1 تا 6 دانگ"
                                                                                           min="1" max="6"/>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateExtent">
                                                                                        متراژ حدودی ملک
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-6 col-xs-12 RightFloat">
                                                                                            <input type="number"
                                                                                                   value="{{item.RealEstateExtent}}"
                                                                                                   name="inputRealEstateExtent"
                                                                                                   id="inputRealEstateExtent"
                                                                                                   class="form-control"
                                                                                                   placeholder=""
                                                                                                   min="0"/>
                                                                                        </div>
                                                                                        <div class="col-md-6 col-xs-12 RightFloat">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputRealEstateExtentUnit"
                                                                                                    id="inputRealEstateExtentUnit">
                                                                                                <option>
                                                                                                    {{item.RealEstateExtentUnit
                                                                                                    | bindEnum}}
                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateBuyTimePrice">
                                                                                        ارزش حدودی کل سهام در
                                                                                        زمان
                                                                                        شروع مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputRealEstateBuyTimePrice"
                                                                                                    id="inputRealEstateBuyTimePrice">
                                                                                                <option>
                                                                                                    {{item.RealEstateBuyTimePrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.RealEstateBuyTimePrice.NumberValues[1]}}

                                                                                                    {{item.RealEstateBuyTimePrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateNowTimePrice">
                                                                                        ارزش حدودی کل سهام درحال
                                                                                        حاضر :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputRealEstateBuyTimePrice"
                                                                                                    id="inputRealEstateBuyTimePrice">
                                                                                                <option>
                                                                                                    {{item.RealEstateNowTimePrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.RealEstateNowTimePrice.NumberValues[1]}}

                                                                                                    {{item.RealEstateNowTimePrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12 col-sm-12 col-xs-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateAddress">آدرس</label>
                                                                                    <input
                                                                                            value="{{item.RealEstateAddress}}"
                                                                                            id="inputRealEstateAddress"
                                                                                            type="text"
                                                                                            name="inputRealEstateAddress"
                                                                                            class="input-validate validate valid"
                                                                                            placeholder="نام خیابان اصلی / محله / منطقه">
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End RealEStates -->
                                                    <!--Vehicle -->
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="panel panel-default LeftPanelShadow">
                                                            <div class="panel-heading">
                                                                وسایل نقلیه
                                                            </div>
                                                            <div class="panel-body padding-r-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                                        <p ng-if="finance.Vehicle.hasChildItems === 0 ">
                                                                            {{notFound}}</p>
                                                                        <form ng-repeat="item in finance.Vehicle"
                                                                              id="form-Vehicle">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Child'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">

                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputVehicleType">
                                                                                        نوع وسیله نقلیه<span
                                                                                                class="text-danger"></span>
                                                                                    </label>
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputVehicleType"
                                                                                            id="inputVehicleType">
                                                                                        <option>
                                                                                            {{item.VehicleType |
                                                                                            bindEnum}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputVehicleOwnershipDate">
                                                                                        سال شروع مالکیت<span
                                                                                                class="text-danger"></span>
                                                                                    </label>
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputVehicleOwnershipDate"
                                                                                            id="inputVehicleOwnershipDate"
                                                                                            style="font-family: tahoma;">
                                                                                        <option>
                                                                                            {{item.VehicleOwnershipDate}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputVehicleOwnershipType">
                                                                                        نحوه مالکیت
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputVehicleOwnershipType"
                                                                                            id="inputVehicleOwnershipType">
                                                                                        <option>
                                                                                            {{item.VehicleOwnershipType
                                                                                            | bindEnum}}
                                                                                        </option>

                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputVehicleBuyTimePrice">
                                                                                        ارزش حدودی کل سهام در
                                                                                        زمان
                                                                                        شروع مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputRealEstateBuyTimePrice"
                                                                                                    id="inputRealEstateBuyTimePrice">
                                                                                                <option>
                                                                                                    {{item.VehicleBuyTimePrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.VehicleBuyTimePrice.NumberValues[1]}}

                                                                                                    {{item.VehicleBuyTimePrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputVehicleNowTimePrice">
                                                                                        ارزش حدودی کل سهام درحال
                                                                                        حاضر :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputRealEstateBuyTimePrice"
                                                                                                    id="inputRealEstateBuyTimePrice">
                                                                                                <option>
                                                                                                    {{item.VehicleNowTimePrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.VehicleNowTimePrice.NumberValues[1]}}

                                                                                                    {{item.VehicleNowTimePrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat clear-div">
                                                                                    <label for="inputVehiclePortion">
                                                                                        سهم از ملک(1 تا 6 دانگ)
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <input
                                                                                            value="{{item.VehiclePortion}}"
                                                                                            type="number"
                                                                                            name="inputVehiclePortion"
                                                                                            id="inputVehiclePortion"
                                                                                            class="form-control"
                                                                                            placeholder="سهم از ملک 1 تا 6 دانگ"
                                                                                            min="0" max="6"/>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Vehicle -->
                                                    <!--Invest -->
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="panel panel-default LeftPanelShadow">
                                                            <div class="panel-heading">
                                                                سرمایه‌گذاری‌ها (سهام‌، اوراق بهادار، ...)
                                                            </div>
                                                            <div class="panel-body padding-r-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                                        <p ng-if="finance.Invest.hasChildItems === 0 ">
                                                                            {{notFound}}</p>
                                                                        <form ng-repeat="item in finance.Invest"
                                                                              id="form-Invest">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Child'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                                    <label for="inputInvestTitle">
                                                                                        نام شرکت / موسسه
                                                                                    </label>
                                                                                    <input
                                                                                            value="{{item.InvestTitle}}"
                                                                                            id="inputInvestTitle"
                                                                                            type="text"
                                                                                            name="inputInvestTitle"
                                                                                            placeholder="نام شرکت - موسسه - پروژه ">
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputInvestDate">
                                                                                        سال شروع مالکیت
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputInvestDate"
                                                                                            id="inputInvestDate"
                                                                                            style="font-family: tahoma;">
                                                                                        <option>
                                                                                            {{item.InvestDate}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputInvestOwnershipType">
                                                                                        نحوه مالکیت
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputInvestOwnershipType"
                                                                                            id="inputInvestOwnershipType">
                                                                                        <option>
                                                                                            {{item.InvestOwnershipType |
                                                                                            bindEnum}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputInvestBuyTimePrice">
                                                                                        ارزش حدودی کل سهام در
                                                                                        زمان
                                                                                        شروع مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputRealEstateBuyTimePrice"
                                                                                                    id="inputRealEstateBuyTimePrice">
                                                                                                <option>
                                                                                                    {{item.InvestBuyTimePrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.InvestBuyTimePrice.NumberValues[1]}}

                                                                                                    {{item.InvestBuyTimePrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputInvestNowTimePrice">
                                                                                        ارزش حدودی کل سهام درحال
                                                                                        حاضر :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputRealEstateBuyTimePrice"
                                                                                                    id="inputRealEstateBuyTimePrice">
                                                                                                <option>
                                                                                                    {{item.InvestNowTimePrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.InvestNowTimePrice.NumberValues[1]}}

                                                                                                    {{item.InvestNowTimePrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Invest -->
                                                    <!--BankAccount -->
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="panel panel-default LeftPanelShadow">
                                                            <div class="panel-heading">
                                                                حساب‌های جاری، پس‌انداز و سرمایه‌گذاری
                                                            </div>
                                                            <div class="panel-body padding-r-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                                        <p ng-if="finance.BankAccount.hasChildItems === 0 ">
                                                                            {{notFound}}</p>
                                                                        <form ng-repeat="item in finance.BankAccount"
                                                                              id="form-BankAccount">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Child'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                                    <label for="inputBankAccountTitle">
                                                                                        عنوان بانک یا موسسه
                                                                                    </label>
                                                                                    <input
                                                                                            value="{{item.BankAccountTitle}}"
                                                                                            id="inputBankAccountTitle"
                                                                                            type="text"
                                                                                            name="inputBankAccountTitle"
                                                                                            placeholder="عنوان بانک یا موسسه ">
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputBankAccountPrice">
                                                                                        مبلغ :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputRealEstateBuyTimePrice"
                                                                                                    id="inputRealEstateBuyTimePrice">
                                                                                                <option>
                                                                                                    {{item.BankAccountPrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.BankAccountPrice.NumberValues[1]}}

                                                                                                    {{item.BankAccountPrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat">
                                                                                    <label for="inputBankAccountCountryId">کشور</label>
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputBankAccountCountryId"
                                                                                            id="inputBankAccountCountryId">
                                                                                        <option>
                                                                                            {{item.BankAccountCountryId
                                                                                            | bindCountry}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End BankAccount -->
                                                    <!-- Debtor -->
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="panel panel-default LeftPanelShadow">
                                                            <div class="panel-heading">
                                                                دیون و مطالبات
                                                            </div>
                                                            <div class="panel-body padding-r-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                                        <p ng-if="finance.CreditDebtor.hasChildItems === 0 ">
                                                                            {{notFound}}</p>
                                                                        <form ng-repeat="item in finance.CreditDebtor"
                                                                              id="form-Credit-Debtor">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho =='Child'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputCreditPrice">
                                                                                        جمع کل بستانکاری از اشخاص حقیقی
                                                                                        یا
                                                                                        حقوقی
                                                                                        :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputRealEstateBuyTimePrice"
                                                                                                    id="inputRealEstateBuyTimePrice">
                                                                                                <option>
                                                                                                    {{item.DebotrPrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.DebotrPrice.NumberValues[1]}}

                                                                                                    {{item.DebotrPrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputDebotrPrice">
                                                                                        جمع کل بدهکاری از اشخاص حقیقی یا
                                                                                        حقوقی :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputRealEstateBuyTimePrice"
                                                                                                    id="inputRealEstateBuyTimePrice">
                                                                                                <option>
                                                                                                    {{item.CreditPrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.CreditPrice.NumberValues[1]}}

                                                                                                    {{item.CreditPrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12 col-xs-12">
                                                                                      <textarea class="EStates-textArea"
                                                                                                name="inputDebotrDescription">{{item.DebotrDescription}}</textarea>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Debtor -->
                                                    <!--Goods -->
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="panel panel-default LeftPanelShadow">
                                                            <div class="panel-heading">
                                                                کلیه کالاهای فاقد سند مالکیت رسمی
                                                            </div>
                                                            <div class="panel-body padding-r-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                                        <p ng-if="finance.Goods.hasChildItems === 0 ">
                                                                            {{notFound}}</p>
                                                                        <form ng-repeat="item in finance.Goods"
                                                                              id="form-Goods">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Child'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputGoodsType">
                                                                                        نوع کالا
                                                                                    </label>
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputGoodsType"
                                                                                            id="inputGoodsType">
                                                                                        <option>
                                                                                            {{item.GoodsType |
                                                                                            bindEnum}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputGoodsOwnershipStartDate">
                                                                                        سال شروع مالکیت
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputGoodsOwnershipStartDate"
                                                                                            id="inputGoodsOwnershipStartDate"
                                                                                            style="font-family: tahoma;">
                                                                                        <option
                                                                                        >
                                                                                            {{item.GoodsOwnershipStartDate}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputGoodsCount">
                                                                                        حجم / وزن / تعداد کالا
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <input
                                                                                            value="item.GoodsCount"
                                                                                            type="text"
                                                                                            name="inputGoodsCount"
                                                                                            id="inputGoodsCount"
                                                                                            class="form-control"
                                                                                            placeholder="  حجم / وزن / تعداد کالا"/>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputGoodsBuyTimePrice">
                                                                                        ارزش حدودی کل سهام در
                                                                                        زمان
                                                                                        شروع مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name=""
                                                                                                    id="">
                                                                                                <option>
                                                                                                    {{item.GoodsBuyTimePrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.GoodsBuyTimePrice.NumberValues[1]}}

                                                                                                    {{item.GoodsBuyTimePrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputGoodsNowTimePrice">
                                                                                        ارزش حدودی کل سهام درحال
                                                                                        حاضر :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name=""
                                                                                                    id="">
                                                                                                <option>
                                                                                                    {{item.GoodsNowTimePrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.GoodsNowTimePrice.NumberValues[1]}}

                                                                                                    {{item.GoodsNowTimePrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputGoodsOwnershipPercent">
                                                                                        درصد سهم از مالکیت :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <input
                                                                                            value="{{item.GoodsOwnershipPercent}}"
                                                                                            type="number"
                                                                                            name="inputGoodsOwnershipPercent"
                                                                                            id="inputGoodsOwnershipPercent"
                                                                                            class="form-control"
                                                                                            placeholder="سهم از ملک 1 تا 6 دانگ"
                                                                                            min="0" max="6"/>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputRealEstateOwnershipType">
                                                                                        نحوه مالکیت
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputRealEstateOwnershipType"
                                                                                            id="inputRealEstateOwnershipType">
                                                                                        <option>
                                                                                            {{item.RealEstateOwnershipType
                                                                                            | bindEnum}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Goods -->
                                                    <!--Fee -->
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="panel panel-default LeftPanelShadow">
                                                            <div class="panel-heading">
                                                                حقوق مالکیت معنوی
                                                            </div>
                                                            <div class="panel-body padding-r-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                                        <p ng-if="finance.Fee.hasChildItems === 0 ">
                                                                            {{notFound}}</p>
                                                                        <form ng-repeat="item in finance.Fee"
                                                                              id="form-Fee">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Child'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputFeeType">عنوان
                                                                                        :</label>
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputFeeType"
                                                                                            id="inputFeeType">
                                                                                        <option>
                                                                                            {{item.FeeType |bindEnum}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputFeeOwnershipStartDate">
                                                                                        سال شروع مالکیت
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputFeeOwnershipStartDate"
                                                                                            id="inputFeeOwnershipStartDate"
                                                                                            style="font-family: tahoma;">
                                                                                        <option>
                                                                                            {{item.FeeOwnershipStartDate}}
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputFeePercent">
                                                                                        درصد سهم از مالکیت
                                                                                        معنوی:
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <input
                                                                                            value="{{item.FeePercent}}"
                                                                                            type="number"
                                                                                            name="inputFeePercent"
                                                                                            id="inputFeePercent"
                                                                                            class="form-control"
                                                                                            placeholder="سهم از ملک 1 تا 6 دانگ"/>
                                                                                </div>
                                                                                <div class="col-md-5 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputFeeAverageInYear">
                                                                                        میزان درآمد متوسط
                                                                                        سالیانه از
                                                                                        مالکیت
                                                                                        معنوی :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name=""
                                                                                                    id="">
                                                                                                <option>
                                                                                                    {{item.FeeAverageInYear.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.FeeAverageInYear.NumberValues[1]}}

                                                                                                    {{item.FeeAverageInYear.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End Fee -->
                                                    <!--AverageMonthIncome -->
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="panel panel-default LeftPanelShadow">
                                                            <div class="panel-heading">
                                                                در آمد
                                                            </div>
                                                            <div class="panel-body padding-r-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                                        <p ng-if="finance.Income.hasChildItems === 0 ">
                                                                            {{notFound}}</p>
                                                                        <form ng-repeat="item in finance.Income"
                                                                              id="form-AverageMonthIncome">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho == 'Child'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-5 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputAverageMonthIncome">
                                                                                        درآمد متوسط ماهیانه :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputRealEstateBuyTimePrice"
                                                                                                    id="inputRealEstateBuyTimePrice">
                                                                                                <option>
                                                                                                    {{item.AverageMonthIncome.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.AverageMonthIncome.NumberValues[1]}}

                                                                                                    {{item.AverageMonthIncome.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
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
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="panel panel-default LeftPanelShadow">
                                                            <div class="panel-heading">
                                                                شفاف سازی هزینه های انتخاباتی
                                                            </div>
                                                            <div class="panel-body padding-r-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                                        <p ng-if="finance.Election.hasChildItems === 0 ">
                                                                            {{notFound}}</p>
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
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name=""
                                                                                                    id="">
                                                                                                <option>
                                                                                                    {{item.ElectionPlacePrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.ElectionPlacePrice.NumberValues[1]}}

                                                                                                    {{item.ElectionPlacePrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputElectionFlockPrice">
                                                                                        هزینه برپایی تجمعات عمومی مرتبط
                                                                                        با
                                                                                        اهداف
                                                                                        انتخاباتی – هزینه کل :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name=""
                                                                                                    id="">
                                                                                                <option>
                                                                                                    {{item.ElectionFlockPrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.ElectionFlockPrice.NumberValues[1]}}

                                                                                                    {{item.ElectionFlockPrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputElectionAdvertisePrice">
                                                                                        هزینه تبلیغات مجاز در رسانه ها –
                                                                                        هزینه کل :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name=""
                                                                                                    id="">
                                                                                                <option>
                                                                                                    {{item.ElectionAdvertisePrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.ElectionAdvertisePrice.NumberValues[1]}}

                                                                                                    {{item.ElectionAdvertisePrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputElectionStaffPrice">
                                                                                        هزینه و حق الزحمه عوامل اجرایی و
                                                                                        کارشناسی در
                                                                                        انتخابات – هزینه کل :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name=""
                                                                                                    id="">
                                                                                                <option>
                                                                                                    {{item.ElectionStaffPrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.ElectionStaffPrice.NumberValues[1]}}

                                                                                                    {{item.ElectionStaffPrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputElectionAllPrice">
                                                                                        جمع کل هزینه های انتخاباتی :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 col-sm-6 col-xs-6 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputRealEstateBuyTimePrice"
                                                                                                    id="inputRealEstateBuyTimePrice">
                                                                                                <option>
                                                                                                    {{item.ElectionAllPrice.NumberValues[0]}}
                                                                                                    .
                                                                                                    {{item.ElectionAllPrice.NumberValues[1]}}

                                                                                                    {{item.ElectionAllPrice.TranslatedUnit}}

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
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
    app.controller("myCtrl", function ($scope, $http) {
        $scope.notFound = 'اطلاعاتی برای این مورد وارد نشده است';
        $http.get("<?php echo base_url('State/candidateDetailApi/244/3/اردبیل') ?>").then(function (response) {
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
            }, 2000);
        });
    });
</script>