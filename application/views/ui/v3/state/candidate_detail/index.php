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
                        <li class="col-md-12 padding-0">
                            <a href="<?php echo base_url('Profile'); ?>">
                                <i class="zmdi RightpanelIcon">
                                    <span class="fa fa-share-square-o"></span>
                                </i>
                                <div class="RightPanelContent">
                                    <div class="RightPanleTitle">بازگشت</div>
                                </div>
                            </a>
                        </li>
                        <li class="col-md-12 padding-0">
                            <a href="<?php echo base_url('Profile/logOut') ?>">
                                <i class="zmdi RightpanelIcon">
                                    <span class="fa fa-share-square-o"></span>
                                </i>
                                <div class="RightPanelContent">
                                    <div class="RightPanleTitle">خروج از سیستم</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row col-xs-12 col-md-9 pull-left responsive-style-auto-margin">
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
                                                                                <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
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
                                                                                <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
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
                                                                                <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
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
                                                                                <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
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
                                                                                <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
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
                                                                        <form ng-repeat="item in finance.CreditDebtor"
                                                                              id="form-Credit-Debtor">
                                                                            <span class="divider"></span>
                                                                            <div ng-if="item.ForWho =='Self'"
                                                                                 class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
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
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
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
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
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
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
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
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
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
                                                                        <form id="form-RealEstate">
                                                                            <span class="divider"></span>
                                                                            <?php foreach ($finance['RealEStates'] as $item) {
                                                                                if ($item['ForWho'] == 'Wife') { ?>
                                                                                    <div class="col-md-12 col-xs-12 padding-0 form">

                                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                            <label for="inputRealEstateType">
                                                                                                نوع کاربری
                                                                                                <span class="text-danger"></span>
                                                                                            </label>
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputRealEstateType"
                                                                                                    id="inputRealEstateType">
                                                                                                <?php foreach ($EnumResumeProfile['RealEstateType'] as $key => $value) { ?>
                                                                                                    <option
                                                                                                        <?php setOptionSelected($item['RealEstateType'], $key); ?>
                                                                                                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                                <?php } ?>
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
                                                                                                <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                                    <option
                                                                                                        <?php setOptionSelected($item['RealEstateOwnershipDate'], $i); ?>
                                                                                                            value="<?php echo $i; ?>">
                                                                                                        <?php echo $i; ?>
                                                                                                    </option>
                                                                                                <?php } ?>
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
                                                                                                <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                                                    <option
                                                                                                        <?php setOptionSelected($item['RealEstateOwnershipType'], $key); ?>
                                                                                                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                                <?php } ?>
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat countries">
                                                                                            <label for="inputRealEstateCountryId">کشور</label>
                                                                                            <select
                                                                                                    data-country-id="<?php echo $item['RealEstateCountryId']; ?>"
                                                                                                    data-state-id="<?php echo $item['RealEstateStateId']; ?>"
                                                                                                    data-city-id="<?php echo $item['RealEstateCityId']; ?>"
                                                                                                    class="form-control form-control-lg"
                                                                                                    name="inputRealEstateCountryId"
                                                                                                    id="inputRealEstateCountryId">
                                                                                                <option value="0">--
                                                                                                    انتخاب
                                                                                                    کنید --
                                                                                                </option>
                                                                                                <?php foreach ($countries as $row) { ?>
                                                                                                    <option
                                                                                                        <?php setOptionSelected($item['RealEstateCountryId'], $row['CountryId']); ?>
                                                                                                            value="<?php echo $row['CountryId']; ?>"><?php echo $row['FaName']; ?></option>
                                                                                                <?php } ?>
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv">
                                                                                            <label for="inputRealEstateStateId">
                                                                                                استان
                                                                                            </label>
                                                                                            <select
                                                                                                    data-city-id="<?php echo $item['RealEstateCityId']; ?>"
                                                                                                    class="form-control form-control-lg state-select"
                                                                                                    name="inputRealEstateStateId"
                                                                                                    id="inputRealEstateStateId">
                                                                                                <option value="0">--
                                                                                                    انتخاب
                                                                                                    کنید --
                                                                                                </option>
                                                                                                <?php foreach ($states as $state) { ?>
                                                                                                    <option
                                                                                                        <?php setOptionSelected($item['RealEstateStateId'], $state['StateId']); ?>
                                                                                                            value="<?php echo $state['StateId']; ?>">
                                                                                                        <?php echo $state['StateName']; ?>
                                                                                                    </option>
                                                                                                <?php } ?>
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv">
                                                                                            <label for="inputRealEstateCityId">
                                                                                                شهر
                                                                                            </label>
                                                                                            <select class="form-control form-control-lg city-select"
                                                                                                    name="inputRealEstateCityId"
                                                                                                    id="inputRealEstateCityId">
                                                                                                <option value="0">--
                                                                                                    انتخاب
                                                                                                    کنید --
                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                            <label for="inputRealEstatePortion">
                                                                                                سهم از ملک(1 تا 6 دانگ)
                                                                                                <span class="text-danger"></span>
                                                                                            </label>
                                                                                            <input type="number"
                                                                                                <?php setInputValue($item['RealEstatePortion']); ?>
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
                                                                                                        <?php setInputValue($item['RealEstateExtent']); ?>
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
                                                                                                        <?php foreach ($EnumResumeProfile['Extent'] as $key => $value) { ?>
                                                                                                            <option
                                                                                                                <?php setOptionSelected($item['RealEstateExtentUnit'], $key); ?>
                                                                                                                    value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                                        <?php } ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                            <label for="inputRealEstateBuyTimePrice">
                                                                                                ارزش حدودی کل سهام در
                                                                                                زمان
                                                                                                شروع مالکیت :
                                                                                                <span class="text-danger"></span>
                                                                                            </label>
                                                                                            <div class="row">
                                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                    <input
                                                                                                        <?php setInputValue(splitPrice($item['RealEstateBuyTimePrice'])['right']); ?>
                                                                                                            type="number"
                                                                                                            name="inputRealEstateBuyTimePrice"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            min="0"/>
                                                                                                    <label for="inputRealEstateBuyTimePrice ">صد
                                                                                                        تومان</label>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                    <input
                                                                                                            type="number"
                                                                                                        <?php setInputValue(splitPrice($item['RealEstateBuyTimePrice'])['left']); ?>
                                                                                                            name="inputRealEstateBuyTimePrice"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            min="0"/>
                                                                                                    <label for="inputRealEstateBuyTimePrice">هزار
                                                                                                        تومان</label>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                    <select class="form-control form-control-lg"
                                                                                                            name="inputRealEstateBuyTimePrice"
                                                                                                            id="inputRealEstateBuyTimePrice">
                                                                                                        <option value="0">
                                                                                                            انتخاب کنید
                                                                                                            ---
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['RealEstateBuyTimePrice'])['unit']) == "HZ") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="HZ"
                                                                                                                data-right-side="SD"
                                                                                                                value="HZ">
                                                                                                            هزار تومان
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['RealEstateBuyTimePrice'])['unit']) == "MI") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="MI"
                                                                                                                data-right-side="HZ"
                                                                                                                value="MI">
                                                                                                            میلیون تومان
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['RealEstateBuyTimePrice'])['unit']) == "ML") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="ML"
                                                                                                                data-right-side="MI"
                                                                                                                value="ML">
                                                                                                            میلیارد
                                                                                                            تومان
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                            <label for="inputRealEstateNowTimePrice">
                                                                                                ارزش حدودی کل سهام درحال
                                                                                                حاضر :
                                                                                                <span class="text-danger"></span>
                                                                                            </label>
                                                                                            <div class="row">
                                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                    <input
                                                                                                        <?php setInputValue(splitPrice($item['RealEstateNowTimePrice'])['right']); ?>
                                                                                                            type="number"
                                                                                                            name="inputRealEstateNowTimePrice"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            min="0"/>
                                                                                                    <label for="inputRealEstateNowTimePrice ">صد
                                                                                                        تومان</label>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                    <input
                                                                                                        <?php setInputValue(splitPrice($item['RealEstateNowTimePrice'])['left']); ?>
                                                                                                            type="number"
                                                                                                            name="inputRealEstateNowTimePrice"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            min="0"/>
                                                                                                    <label for="inputRealEstateNowTimePrice">هزار
                                                                                                        تومان</label>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                    <select class="form-control form-control-lg"
                                                                                                            name="inputRealEstateNowTimePrice"
                                                                                                            id="inputRealEstateNowTimePrice">
                                                                                                        <option value="0">
                                                                                                            انتخاب کنید
                                                                                                            ---
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['RealEstateNowTimePrice'])['unit']) == "HZ") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="HZ"
                                                                                                                data-right-side="SD"
                                                                                                                value="HZ">
                                                                                                            هزار تومان
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['RealEstateNowTimePrice'])['unit']) == "MI") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="MI"
                                                                                                                data-right-side="HZ"
                                                                                                                value="MI">
                                                                                                            میلیون تومان
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['RealEstateNowTimePrice'])['unit']) == "ML") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="ML"
                                                                                                                data-right-side="MI"
                                                                                                                value="ML">
                                                                                                            میلیارد
                                                                                                            تومان
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group RightFloat">
                                                                                            <label for="inputRealEstateAddress">آدرس</label>
                                                                                            <input
                                                                                                <?php setInputValue($item['RealEstateAddress']); ?>
                                                                                                    id="inputRealEstateAddress"
                                                                                                    type="text"
                                                                                                    name="inputRealEstateAddress"
                                                                                                    class="input-validate validate valid"
                                                                                                    placeholder="نام خیابان اصلی / محله / منطقه">
                                                                                        </div>
                                                                                    </div>
                                                                                <?php }
                                                                            } ?>
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
                                                            <div class="panel-heading">وسایل نقلیه</div>
                                                            <div class="panel-body padding-r-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">

                                                                        <form id="form-Vehicle">
                                                                            <span class="divider"></span>
                                                                            <?php foreach ($finance['Vehicle'] as $item) {
                                                                                if ($item['ForWho'] == 'Wife') { ?>
                                                                                    <div class="col-md-12 col-xs-12 padding-0 form">

                                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                            <label for="inputVehicleType">
                                                                                                نوع وسیله نقلیه<span
                                                                                                        class="text-danger"></span>
                                                                                            </label>
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputVehicleType"
                                                                                                    id="inputVehicleType">
                                                                                                <?php foreach ($EnumResumeProfile['TypeOfVehicle'] as $key => $value) { ?>
                                                                                                    <option
                                                                                                        <?php setOptionSelected($item['VehicleType'], $key); ?>
                                                                                                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                                <?php } ?>
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
                                                                                                <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                                    <option
                                                                                                        <?php setOptionSelected($item['VehicleOwnershipDate'], $i); ?>
                                                                                                        <?php if ($i == 1398) echo "selected"; ?>
                                                                                                            value="<?php echo $i; ?>">
                                                                                                        <?php echo $i; ?>
                                                                                                    </option>
                                                                                                <?php } ?>
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
                                                                                                <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                                                    <option

                                                                                                        <?php setOptionSelected($item['VehicleOwnershipType'], $i); ?>
                                                                                                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                                <?php } ?>
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                            <label for="inputVehicleBuyTimePrice">
                                                                                                ارزش حدودی کل سهام در
                                                                                                زمان
                                                                                                شروع مالکیت :
                                                                                                <span class="text-danger"></span>
                                                                                            </label>
                                                                                            <div class="row">
                                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                    <input
                                                                                                        <?php setInputValue(splitPrice($item['VehicleBuyTimePrice'])['right']); ?>
                                                                                                            type="number"
                                                                                                            name="inputVehicleBuyTimePrice"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            min="0"/>
                                                                                                    <label for="inputVehicleBuyTimePrice ">صد
                                                                                                        تومان</label>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                    <input
                                                                                                        <?php setInputValue(splitPrice($item['VehicleBuyTimePrice'])['left']); ?>
                                                                                                            type="number"
                                                                                                            name="inputVehicleBuyTimePrice"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            min="0"/>
                                                                                                    <label for="inputVehicleBuyTimePrice">هزار
                                                                                                        تومان</label>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                    <select class="form-control form-control-lg"
                                                                                                            name="inputVehicleBuyTimePrice"
                                                                                                            id="inputVehicleBuyTimePrice">
                                                                                                        <option value="0">
                                                                                                            انتخاب کنید
                                                                                                            ---
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['VehicleBuyTimePrice'])['unit']) == "HZ") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="HZ"
                                                                                                                data-right-side="SD"
                                                                                                                value="HZ">
                                                                                                            هزار تومان
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['VehicleBuyTimePrice'])['unit']) == "MI") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="MI"
                                                                                                                data-right-side="HZ"
                                                                                                                value="MI">
                                                                                                            میلیون تومان
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['VehicleBuyTimePrice'])['unit']) == "ML") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="ML"
                                                                                                                data-right-side="MI"
                                                                                                                value="ML">
                                                                                                            میلیارد
                                                                                                            تومان
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                            <label for="inputVehicleNowTimePrice">
                                                                                                ارزش حدودی کل سهام درحال
                                                                                                حاضر :
                                                                                                <span class="text-danger"></span>
                                                                                            </label>
                                                                                            <div class="row">
                                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                    <input
                                                                                                        <?php setInputValue(splitPrice($item['VehicleNowTimePrice'])['right']); ?>
                                                                                                            type="number"
                                                                                                            name="inputVehicleNowTimePrice"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            min="0"/>
                                                                                                    <label for="inputVehicleNowTimePrice ">صد
                                                                                                        تومان</label>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                    <input
                                                                                                        <?php setInputValue(splitPrice($item['VehicleNowTimePrice'])['right']); ?>
                                                                                                            type="number"
                                                                                                            name="inputVehicleNowTimePrice"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            min="0"/>
                                                                                                    <label for="inputVehicleNowTimePrice">هزار
                                                                                                        تومان</label>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                    <select class="form-control form-control-lg"
                                                                                                            name="inputVehicleNowTimePrice"
                                                                                                            id="inputVehicleNowTimePrice">
                                                                                                        <option value="0">
                                                                                                            انتخاب کنید
                                                                                                            ---
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['VehicleNowTimePrice'])['unit']) == "HZ") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="HZ"
                                                                                                                data-right-side="SD"
                                                                                                                value="HZ">
                                                                                                            هزار تومان
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['VehicleNowTimePrice'])['unit']) == "MI") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="MI"
                                                                                                                data-right-side="HZ"
                                                                                                                value="MI">
                                                                                                            میلیون تومان
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['VehicleNowTimePrice'])['unit']) == "ML") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="ML"
                                                                                                                data-right-side="MI"
                                                                                                                value="ML">
                                                                                                            میلیارد
                                                                                                            تومان
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
                                                                                                <?php setInputValue($item['VehiclePortion']); ?>
                                                                                                    type="number"
                                                                                                    name="inputVehiclePortion"
                                                                                                    id="inputVehiclePortion"
                                                                                                    class="form-control"
                                                                                                    placeholder="سهم از ملک 1 تا 6 دانگ"
                                                                                                    min="0" max="6"/>
                                                                                        </div>
                                                                                    </div>
                                                                                <?php }
                                                                            } ?>
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
                                                            <div class="panel-heading">سرمایه‌گذاری‌ها (سهام‌، اوراق
                                                                بهادار،
                                                                ...)
                                                            </div>
                                                            <div class="panel-body padding-r-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">

                                                                        <form id="form-Invest">
                                                                            <span class="divider"></span>
                                                                            <?php foreach ($finance['Invest'] as $item) {
                                                                                if ($item['ForWho'] == 'Wife') { ?>
                                                                                    <div class="col-md-12 col-xs-12 padding-0 form">

                                                                                        <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                                            <label for="inputInvestTitle">
                                                                                                نام شرکت / موسسه
                                                                                            </label>
                                                                                            <input
                                                                                                <?php setInputValue($item['InvestTitle']); ?>
                                                                                                    id="inputInvestTitle"
                                                                                                    type="text"
                                                                                                    name="inputInvestTitle"
                                                                                                    placeholder="نام شرکت - موسسه - پروژه ">
                                                                                        </div>
                                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                            <label for="inputInvestDate">
                                                                                                سال شروع مالکیت
                                                                                                <span class="text-danger">
                                             </span>
                                                                                            </label>
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputInvestDate"
                                                                                                    id="inputInvestDate"
                                                                                                    style="font-family: tahoma;">
                                                                                                <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                                    <option
                                                                                                        <?php setOptionSelected($item['InvestDate'], $i); ?>
                                                                                                        <?php if ($i == 1398) echo "selected"; ?>
                                                                                                            value="<?php echo $i; ?>">
                                                                                                        <?php echo $i; ?>
                                                                                                    </option>
                                                                                                <?php } ?>
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
                                                                                                <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                                                    <option
                                                                                                        <?php setOptionSelected($item['InvestDate'], $key); ?>
                                                                                                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                                <?php } ?>
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                            <label for="inputInvestBuyTimePrice">
                                                                                                ارزش حدودی کل سهام در
                                                                                                زمان
                                                                                                شروع مالکیت :
                                                                                                <span class="text-danger"></span>
                                                                                            </label>
                                                                                            <div class="row">
                                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                    <input
                                                                                                        <?php setInputValue(splitPrice($item['InvestBuyTimePrice'])['right']); ?>
                                                                                                            type="number"
                                                                                                            name="inputInvestBuyTimePrice"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            min="0"/>
                                                                                                    <label for="inputInvestBuyTimePrice ">صد
                                                                                                        تومان</label>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                    <input
                                                                                                        <?php setInputValue(splitPrice($item['InvestBuyTimePrice'])['left']); ?>
                                                                                                            type="number"
                                                                                                            name="inputInvestBuyTimePrice"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            min="0"/>
                                                                                                    <label for="inputInvestBuyTimePrice">هزار
                                                                                                        تومان</label>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                    <select class="form-control form-control-lg"
                                                                                                            name="inputInvestBuyTimePrice"
                                                                                                            id="inputInvestBuyTimePrice">
                                                                                                        <option value="0">
                                                                                                            انتخاب کنید
                                                                                                            ---
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['InvestBuyTimePrice'])['unit']) == "HZ") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="HZ"
                                                                                                                data-right-side="SD"
                                                                                                                value="HZ">
                                                                                                            هزار تومان
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['InvestBuyTimePrice'])['unit']) == "MI") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="MI"
                                                                                                                data-right-side="HZ"
                                                                                                                value="MI">
                                                                                                            میلیون تومان
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['InvestBuyTimePrice'])['unit']) == "ML") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="ML"
                                                                                                                data-right-side="MI"
                                                                                                                value="ML">
                                                                                                            میلیارد
                                                                                                            تومان
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                            <label for="inputInvestNowTimePrice">
                                                                                                ارزش حدودی کل سهام درحال
                                                                                                حاضر :
                                                                                                <span class="text-danger"></span>
                                                                                            </label>
                                                                                            <div class="row">
                                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                    <input
                                                                                                        <?php setInputValue(splitPrice($item['InvestNowTimePrice'])['right']); ?>
                                                                                                            type="number"
                                                                                                            name="inputInvestNowTimePrice"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            min="0"/>
                                                                                                    <label for="inputInvestNowTimePrice ">صد
                                                                                                        تومان</label>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                    <input
                                                                                                        <?php setInputValue(splitPrice($item['InvestNowTimePrice'])['left']); ?>
                                                                                                            type="number"
                                                                                                            name="inputInvestNowTimePrice"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            min="0"/>
                                                                                                    <label for="inputInvestNowTimePrice">هزار
                                                                                                        تومان</label>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                    <select class="form-control form-control-lg"
                                                                                                            name="inputInvestNowTimePrice"
                                                                                                            id="inputInvestNowTimePrice">
                                                                                                        <option value="0">
                                                                                                            انتخاب کنید
                                                                                                            ---
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['InvestNowTimePrice'])['unit']) == "HZ") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="HZ"
                                                                                                                data-right-side="SD"
                                                                                                                value="HZ">
                                                                                                            هزار تومان
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['InvestNowTimePrice'])['unit']) == "MI") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="MI"
                                                                                                                data-right-side="HZ"
                                                                                                                value="MI">
                                                                                                            میلیون تومان
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['InvestNowTimePrice'])['unit']) == "ML") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="ML"
                                                                                                                data-right-side="MI"
                                                                                                                value="ML">
                                                                                                            میلیارد
                                                                                                            تومان
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                <?php }
                                                                            } ?>
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
                                                            <div class="panel-heading">حساب‌های جاری، پس‌انداز و
                                                                سرمایه‌گذاری
                                                            </div>
                                                            <div class="panel-body padding-r-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">

                                                                        <form id="form-BankAccount">
                                                                            <span class="divider"></span>
                                                                            <?php foreach ($finance['BankAccount'] as $item) {
                                                                                if ($item['ForWho'] == 'Wife') { ?>
                                                                                    <div class="col-md-12 col-xs-12 padding-0 form">

                                                                                        <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                                            <label for="inputBankAccountTitle">
                                                                                                عنوان بانک یا موسسه
                                                                                            </label>
                                                                                            <input
                                                                                                <?php setInputValue($item['BankAccountTitle']); ?>
                                                                                                    id="inputBankAccountTitle"
                                                                                                    type="text"
                                                                                                    name="inputBankAccountTitle"
                                                                                                    placeholder="عنوان بانک یا موسسه ">
                                                                                        </div>
                                                                                        <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                            <label for="inputBankAccountPrice">
                                                                                                مبلغ :
                                                                                                <span class="text-danger"></span>
                                                                                            </label>
                                                                                            <div class="row">
                                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                    <input

                                                                                                        <?php setInputValue(splitPrice($item['BankAccountPrice'])['right']); ?>
                                                                                                            type="number"
                                                                                                            name="inputBankAccountPrice"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            min="0"/>
                                                                                                    <label for="inputBankAccountPrice ">صد
                                                                                                        تومان</label>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                    <input

                                                                                                        <?php setInputValue(splitPrice($item['BankAccountPrice'])['left']); ?>
                                                                                                            type="number"
                                                                                                            name="RealEstateBuyTimePrice"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            min="0"/>
                                                                                                    <label for="inputBankAccountPrice">هزار
                                                                                                        تومان</label>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                    <select class="form-control form-control-lg"
                                                                                                            name="inputBankAccountPrice"
                                                                                                            id="inputBankAccountPrice">
                                                                                                        <option value="0">
                                                                                                            انتخاب کنید
                                                                                                            ---
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['BankAccountPrice'])['unit']) == "HZ") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="HZ"
                                                                                                                data-right-side="SD"
                                                                                                                value="HZ">
                                                                                                            هزار تومان
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['BankAccountPrice'])['unit']) == "MI") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="MI"
                                                                                                                data-right-side="HZ"
                                                                                                                value="MI">
                                                                                                            میلیون تومان
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['BankAccountPrice'])['unit']) == "ML") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="ML"
                                                                                                                data-right-side="MI"
                                                                                                                value="ML">
                                                                                                            میلیارد
                                                                                                            تومان
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
                                                                                                <option value="0">--
                                                                                                    انتخاب
                                                                                                    کنید --
                                                                                                </option>
                                                                                                <?php foreach ($countries as $row) { ?>
                                                                                                    <option
                                                                                                        <?php setOptionSelected($item['BankAccountCountryId'], $row['CountryId']); ?>
                                                                                                            value="<?php echo $row['CountryId']; ?>"><?php echo $row['FaName']; ?></option>
                                                                                                <?php } ?>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                <?php }
                                                                            } ?>
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
                                                                        <form id="form-Credit-Debtor">
                                                                            <span class="divider"></span>
                                                                            <?php
                                                                            $creditDebtor['CreditPrice'] = "0.0 HZ";
                                                                            $creditDebtor['DebotrPrice'] = "0.0 HZ";
                                                                            $creditDebtor['DebotrDescription'] = "";
                                                                            foreach ($finance['CreditDebtor'] as $item) {
                                                                                if ($item['ForWho'] == 'Wife') {
                                                                                    $creditDebtor = $item;
                                                                                }
                                                                            }
                                                                            ?>
                                                                            <div class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputCreditPrice">
                                                                                        جمع کل بستانکاری از اشخاص حقیقی
                                                                                        یا
                                                                                        حقوقی
                                                                                        :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                            <input
                                                                                                <?php setInputValue(splitPrice($creditDebtor['CreditPrice'])['right']); ?>
                                                                                                    type="number"
                                                                                                    name="inputCreditPrice"
                                                                                                    class="form-control"
                                                                                                    placeholder=""
                                                                                                    min="0"/>
                                                                                            <label for="inputCreditPrice ">صد
                                                                                                تومان</label>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                            <input
                                                                                                <?php setInputValue(splitPrice($creditDebtor['CreditPrice'])['right']); ?>
                                                                                                    type="number"
                                                                                                    name="inputCreditPrice"
                                                                                                    class="form-control"
                                                                                                    placeholder=""
                                                                                                    min="0"/>
                                                                                            <label for="inputCreditPrice">هزار
                                                                                                تومان</label>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputCreditPrice"
                                                                                                    id="inputCreditPrice">
                                                                                                <option value="0">انتخاب
                                                                                                    کنید ---
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($creditDebtor['CreditPrice'])['unit']) == "HZ") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="HZ"
                                                                                                        data-right-side="SD"
                                                                                                        value="HZ">هزار
                                                                                                    تومان
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($creditDebtor['CreditPrice'])['unit']) == "MI") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="MI"
                                                                                                        data-right-side="HZ"
                                                                                                        value="MI">
                                                                                                    میلیون
                                                                                                    تومان
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($creditDebtor['CreditPrice'])['unit']) == "ML") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="ML"
                                                                                                        data-right-side="MI"
                                                                                                        value="ML">
                                                                                                    میلیارد
                                                                                                    تومان
                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputDebotrPrice">
                                                                                        جمع کل بدهکاری از اشخاص حقیقی یا
                                                                                        حقوقی :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                            <input
                                                                                                <?php setInputValue(splitPrice($creditDebtor['DebotrPrice'])['right']); ?>
                                                                                                    type="number"
                                                                                                    name="inputDebotrPrice"
                                                                                                    class="form-control"
                                                                                                    placeholder=""
                                                                                                    min="0"/>
                                                                                            <label for="inputDebotrPrice ">صد
                                                                                                تومان</label>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                            <input
                                                                                                <?php setInputValue(splitPrice($creditDebtor['DebotrPrice'])['right']); ?>
                                                                                                    type="number"
                                                                                                    name="inputDebotrPrice"
                                                                                                    class="form-control"
                                                                                                    placeholder=""
                                                                                                    min="0"/>
                                                                                            <label for="inputDebotrPrice">هزار
                                                                                                تومان</label>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputDebotrPrice"
                                                                                                    id="inputDebotrPrice">
                                                                                                <option value="0">انتخاب
                                                                                                    کنید ---
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($creditDebtor['DebotrPrice'])['unit']) == "HZ") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="HZ"
                                                                                                        data-right-side="SD"
                                                                                                        value="HZ">هزار
                                                                                                    تومان
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($creditDebtor['DebotrPrice'])['unit']) == "MI") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="MI"
                                                                                                        data-right-side="HZ"
                                                                                                        value="MI">
                                                                                                    میلیون
                                                                                                    تومان
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($creditDebtor['DebotrPrice'])['unit']) == "ML") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="ML"
                                                                                                        data-right-side="MI"
                                                                                                        value="ML">
                                                                                                    میلیارد
                                                                                                    تومان
                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <textarea class="EStates-textArea"
                                                                                              name="inputDebotrDescription"><?php echo $creditDebtor['DebotrDescription']; ?></textarea>
                                                                                </div>
                                                                            </div>
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
                                                            <div class="panel-heading">کلیه کالاهای فاقد سند مالکیت رسمی
                                                            </div>
                                                            <div class="panel-body padding-r-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">

                                                                        <form id="form-Goods">
                                                                            <span class="divider"></span>
                                                                            <?php foreach ($finance['Goods'] as $item) {
                                                                                if ($item['ForWho'] == 'Wife') { ?>
                                                                                    <div class="col-md-12 col-xs-12 padding-0 form">

                                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                            <label for="inputGoodsType">
                                                                                                نوع کالا
                                                                                            </label>
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputGoodsType"
                                                                                                    id="inputGoodsType">
                                                                                                <?php foreach ($EnumResumeProfile['GoodsType'] as $key => $value) { ?>
                                                                                                    <option
                                                                                                        <?php setOptionSelected($item['GoodsType'], $key); ?>
                                                                                                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                                <?php } ?>
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
                                                                                                <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                                    <option
                                                                                                        <?php setOptionSelected($item['GoodsOwnershipStartDate'], $i); ?>
                                                                                                            value="<?php echo $i; ?>">
                                                                                                        <?php echo $i; ?>
                                                                                                    </option>
                                                                                                <?php } ?>
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                            <label for="inputGoodsCount">
                                                                                                حجم / وزن / تعداد کالا
                                                                                                <span class="text-danger"></span>
                                                                                            </label>
                                                                                            <input
                                                                                                <?php setInputValue($item['GoodsCount']); ?>
                                                                                                    type="text"
                                                                                                    name="inputGoodsCount"
                                                                                                    id="inputGoodsCount"
                                                                                                    class="form-control"
                                                                                                    placeholder="  حجم / وزن / تعداد کالا"/>
                                                                                        </div>
                                                                                        <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                            <label for="inputGoodsBuyTimePrice">
                                                                                                ارزش حدودی کل سهام در
                                                                                                زمان
                                                                                                شروع مالکیت :
                                                                                                <span class="text-danger"></span>
                                                                                            </label>
                                                                                            <div class="row">
                                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                    <input
                                                                                                        <?php setInputValue(splitPrice($item['GoodsBuyTimePrice'])['right']); ?>
                                                                                                            type="number"
                                                                                                            name="inputGoodsBuyTimePrice"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            min="0"/>
                                                                                                    <label for="inputGoodsBuyTimePrice ">صد
                                                                                                        تومان</label>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                    <input
                                                                                                        <?php setInputValue(splitPrice($item['GoodsBuyTimePrice'])['right']); ?>
                                                                                                            type="number"
                                                                                                            name="inputGoodsBuyTimePrice"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            min="0"/>
                                                                                                    <label for="inputGoodsBuyTimePrice">هزار
                                                                                                        تومان</label>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                    <select class="form-control form-control-lg"
                                                                                                            name="inputGoodsBuyTimePrice"
                                                                                                            id="inputGoodsBuyTimePrice">
                                                                                                        <option value="0">
                                                                                                            انتخاب کنید
                                                                                                            ---
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['GoodsBuyTimePrice'])['unit']) == "HZ") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="HZ"
                                                                                                                data-right-side="SD"
                                                                                                                value="HZ">
                                                                                                            هزار تومان
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['GoodsBuyTimePrice'])['unit']) == "MI") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="MI"
                                                                                                                data-right-side="HZ"
                                                                                                                value="MI">
                                                                                                            میلیون تومان
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['GoodsBuyTimePrice'])['unit']) == "ML") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="ML"
                                                                                                                data-right-side="MI"
                                                                                                                value="ML">
                                                                                                            میلیارد
                                                                                                            تومان
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                            <label for="inputGoodsNowTimePrice">
                                                                                                ارزش حدودی کل سهام درحال
                                                                                                حاضر :
                                                                                                <span class="text-danger"></span>
                                                                                            </label>
                                                                                            <div class="row">
                                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                    <input
                                                                                                        <?php setInputValue(splitPrice($item['GoodsNowTimePrice'])['right']); ?>
                                                                                                            type="number"
                                                                                                            name="inputGoodsNowTimePrice"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            min="0"/>
                                                                                                    <label for="inputGoodsNowTimePrice ">صد
                                                                                                        تومان</label>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                    <input
                                                                                                        <?php setInputValue(splitPrice($item['GoodsNowTimePrice'])['right']); ?>
                                                                                                            type="number"
                                                                                                            name="inputGoodsNowTimePrice"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            min="0"/>
                                                                                                    <label for="inputGoodsNowTimePrice">هزار
                                                                                                        تومان</label>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                    <select class="form-control form-control-lg"
                                                                                                            name="inputGoodsNowTimePrice"
                                                                                                            id="inputGoodsNowTimePrice">
                                                                                                        <option value="0">
                                                                                                            انتخاب کنید
                                                                                                            ---
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['GoodsNowTimePrice'])['unit']) == "HZ") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="HZ"
                                                                                                                data-right-side="SD"
                                                                                                                value="HZ">
                                                                                                            هزار تومان
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['GoodsNowTimePrice'])['unit']) == "MI") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="MI"
                                                                                                                data-right-side="HZ"
                                                                                                                value="MI">
                                                                                                            میلیون تومان
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['GoodsNowTimePrice'])['unit']) == "ML") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="ML"
                                                                                                                data-right-side="MI"
                                                                                                                value="ML">
                                                                                                            میلیارد
                                                                                                            تومان
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
                                                                                                <?php setInputValue($item['GoodsOwnershipPercent']); ?>
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
                                                                                                <span class="text-danger">
                                             </span>
                                                                                            </label>
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputRealEstateOwnershipType"
                                                                                                    id="inputRealEstateOwnershipType">
                                                                                                <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                                                    <option
                                                                                                        <?php setOptionSelected($item['RealEstateOwnershipType'], $key); ?>
                                                                                                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                                <?php } ?>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                <?php }
                                                                            } ?>
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
                                                            <div class="panel-heading">حقوق مالکیت معنوی</div>
                                                            <div class="panel-body padding-r-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">

                                                                        <form id="form-Fee">
                                                                            <span class="divider"></span>
                                                                            <?php foreach ($finance['Fee'] as $item) {
                                                                                if ($item['ForWho'] == 'Wife') { ?>
                                                                                    <div class="col-md-12 col-xs-12 padding-0 form">

                                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                            <label for="inputFeeType">عنوان
                                                                                                :</label>
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputFeeType"
                                                                                                    id="inputFeeType">
                                                                                                <?php foreach ($EnumResumeProfile['FeeType'] as $key => $value) { ?>
                                                                                                    <option
                                                                                                        <?php setOptionSelected($item['FeeType'], $key); ?>
                                                                                                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                                <?php } ?>
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
                                                                                                <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                                    <option
                                                                                                        <?php setOptionSelected($item['FeeOwnershipStartDate'], $i); ?>
                                                                                                            value="<?php echo $i; ?>">
                                                                                                        <?php echo $i; ?>
                                                                                                    </option>
                                                                                                <?php } ?>
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                            <label for="inputFeePercent">
                                                                                                درصد سهم از مالکیت
                                                                                                معنوی:
                                                                                                <span class="text-danger"></span>
                                                                                            </label>
                                                                                            <input
                                                                                                <?php setInputValue($item['FeePercent']); ?>
                                                                                                    type="number"
                                                                                                    name="inputFeePercent"
                                                                                                    id="inputFeePercent"
                                                                                                    class="form-control"
                                                                                                    placeholder="سهم از ملک 1 تا 6 دانگ"/>
                                                                                        </div>
                                                                                        <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                            <label for="inputFeeAverageInYear">
                                                                                                میزان درآمد متوسط
                                                                                                سالیانه از
                                                                                                مالکیت
                                                                                                معنوی :
                                                                                                <span class="text-danger"></span>
                                                                                            </label>
                                                                                            <div class="row">
                                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                    <input
                                                                                                        <?php setInputValue(splitPrice($item['FeeAverageInYear'])['right']); ?>
                                                                                                            type="number"
                                                                                                            name="inputFeeAverageInYear"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            min="0"/>
                                                                                                    <label for="inputFeeAverageInYear ">صد
                                                                                                        تومان</label>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                    <input
                                                                                                        <?php setInputValue(splitPrice($item['FeeAverageInYear'])['right']); ?>
                                                                                                            type="number"
                                                                                                            name="inputFeeAverageInYear"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            min="0"/>
                                                                                                    <label for="inputFeeAverageInYear">هزار
                                                                                                        تومان</label>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                    <select class="form-control form-control-lg"
                                                                                                            name="inputFeeAverageInYear"
                                                                                                            id="inputFeeAverageInYear">
                                                                                                        <option value="0">
                                                                                                            انتخاب کنید
                                                                                                            ---
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['FeeAverageInYear'])['unit']) == "HZ") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="HZ"
                                                                                                                data-right-side="SD"
                                                                                                                value="HZ">
                                                                                                            هزار تومان
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['FeeAverageInYear'])['unit']) == "MI") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="MI"
                                                                                                                data-right-side="HZ"
                                                                                                                value="MI">
                                                                                                            میلیون تومان
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['FeeAverageInYear'])['unit']) == "ML") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="ML"
                                                                                                                data-right-side="MI"
                                                                                                                value="ML">
                                                                                                            میلیارد
                                                                                                            تومان
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                <?php }
                                                                            } ?>
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
                                                            <div class="panel-heading">در آمد</div>
                                                            <div class="panel-body padding-r-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">

                                                                        <form id="form-AverageMonthIncome">
                                                                            <span class="divider"></span>
                                                                            <div class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <?php
                                                                                    $income['AverageMonthIncome'] = "0.0 HZ";
                                                                                    foreach ($finance['Income'] as $item) {
                                                                                        if ($item['ForWho'] == 'Wife') {
                                                                                            $income = $item;
                                                                                        }
                                                                                    }
                                                                                    ?>
                                                                                    <label for="inputAverageMonthIncome">
                                                                                        درآمد متوسط ماهیانه :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                            <input
                                                                                                <?php setInputValue(splitPrice($income['AverageMonthIncome'])['right']); ?>
                                                                                                    type="number"
                                                                                                    name="inputAverageMonthIncome"
                                                                                                    class="form-control"
                                                                                                    placeholder=""
                                                                                                    min="0"/>
                                                                                            <label for="inputAverageMonthIncome ">صد
                                                                                                تومان</label>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                            <input
                                                                                                <?php setInputValue(splitPrice($income['AverageMonthIncome'])['right']); ?>
                                                                                                    type="number"
                                                                                                    name="inputAverageMonthIncome"
                                                                                                    class="form-control"
                                                                                                    placeholder=""
                                                                                                    min="0"/>
                                                                                            <label for="inputAverageMonthIncome">هزار
                                                                                                تومان</label>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputAverageMonthIncome"
                                                                                                    id="inputAverageMonthIncome">
                                                                                                <option value="0">انتخاب
                                                                                                    کنید ---
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($income['AverageMonthIncome'])['unit']) == "HZ") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="HZ"
                                                                                                        data-right-side="SD"
                                                                                                        value="HZ">هزار
                                                                                                    تومان
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($income['AverageMonthIncome'])['unit']) == "MI") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="MI"
                                                                                                        data-right-side="HZ"
                                                                                                        value="MI">
                                                                                                    میلیون
                                                                                                    تومان
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($income['AverageMonthIncome'])['unit']) == "ML") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="ML"
                                                                                                        data-right-side="MI"
                                                                                                        value="ML">
                                                                                                    میلیارد
                                                                                                    تومان
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

                                                                        <form id="form-Election">
                                                                            <span class="divider"></span>
                                                                            <?php
                                                                            $election['ElectionPlacePrice'] = "0.0 HZ";
                                                                            $election['ElectionFlockPrice'] = "0.0 HZ";
                                                                            $election['ElectionAdvertisePrice'] = "0.0 HZ";
                                                                            $election['ElectionStaffPrice'] = "0.0 HZ";
                                                                            $election['ElectionAllPrice'] = "0.0 HZ";
                                                                            foreach ($finance['Election'] as $item) {
                                                                                if ($item['ForWho'] == 'Wife') {
                                                                                    $election = $item;
                                                                                }
                                                                            }
                                                                            ?>
                                                                            <div class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputElectionPlacePrice">
                                                                                        هزینه دایرکردن محل ستاد انتخابات
                                                                                        (اجاره بها ,
                                                                                        حملو نقل و سایر موارد)
                                                                                        -هزینه کل :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                            <input
                                                                                                <?php setInputValue(splitPrice($election['ElectionPlacePrice'])['right']); ?>
                                                                                                    type="number"
                                                                                                    name="inputElectionPlacePrice"
                                                                                                    class="form-control"
                                                                                                    placeholder=""
                                                                                                    min="0" max="6"/>
                                                                                            <label for="inputElectionPlacePrice ">صد
                                                                                                تومان</label>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                            <input
                                                                                                <?php setInputValue(splitPrice($election['ElectionPlacePrice'])['right']); ?>
                                                                                                    type="number"
                                                                                                    name="inputElectionPlacePrice"
                                                                                                    class="form-control"
                                                                                                    placeholder=""
                                                                                                    min="0" max="6"/>
                                                                                            <label for="inputElectionPlacePrice">هزار
                                                                                                تومان</label>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputElectionPlacePrice"
                                                                                                    id="inputElectionPlacePrice">
                                                                                                <option value="0">انتخاب
                                                                                                    کنید ---
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($election['ElectionPlacePrice'])['unit']) == "HZ") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="HZ"
                                                                                                        data-right-side="SD"
                                                                                                        value="HZ">هزار
                                                                                                    تومان
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($election['ElectionPlacePrice'])['unit']) == "MI") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="MI"
                                                                                                        data-right-side="HZ"
                                                                                                        value="MI">
                                                                                                    میلیون
                                                                                                    تومان
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($election['ElectionPlacePrice'])['unit']) == "ML") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="ML"
                                                                                                        data-right-side="MI"
                                                                                                        value="ML">
                                                                                                    میلیارد
                                                                                                    تومان
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
                                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                            <input
                                                                                                <?php setInputValue(splitPrice($election['ElectionFlockPrice'])['right']); ?>
                                                                                                    type="number"
                                                                                                    name="inputElectionFlockPrice"
                                                                                                    class="form-control"
                                                                                                    placeholder=""
                                                                                                    min="0"/>
                                                                                            <label for="inputElectionFlockPrice ">صد
                                                                                                تومان</label>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                            <input
                                                                                                <?php setInputValue(splitPrice($election['ElectionFlockPrice'])['right']); ?>
                                                                                                    type="number"
                                                                                                    name="inputElectionFlockPrice"
                                                                                                    class="form-control"
                                                                                                    placeholder=""
                                                                                                    min="0"/>
                                                                                            <label for="inputElectionFlockPrice">هزار
                                                                                                تومان</label>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputElectionFlockPrice"
                                                                                                    id="inputElectionFlockPrice">
                                                                                                <option value="0">انتخاب
                                                                                                    کنید ---
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($election['ElectionFlockPrice'])['unit']) == "HZ") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="HZ"
                                                                                                        data-right-side="SD"
                                                                                                        value="HZ">هزار
                                                                                                    تومان
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($election['ElectionFlockPrice'])['unit']) == "MI") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="MI"
                                                                                                        data-right-side="HZ"
                                                                                                        value="MI">
                                                                                                    میلیون
                                                                                                    تومان
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($election['ElectionFlockPrice'])['unit']) == "ML") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="ML"
                                                                                                        data-right-side="MI"
                                                                                                        value="ML">
                                                                                                    میلیارد
                                                                                                    تومان
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
                                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                            <input
                                                                                                <?php setInputValue(splitPrice($election['ElectionAdvertisePrice'])['right']); ?>
                                                                                                    type="number"
                                                                                                    name="inputElectionAdvertisePrice"
                                                                                                    class="form-control"
                                                                                                    placeholder=""
                                                                                                    min="0"/>
                                                                                            <label for="inputElectionAdvertisePrice ">صد
                                                                                                تومان</label>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                            <input
                                                                                                <?php setInputValue(splitPrice($election['ElectionAdvertisePrice'])['right']); ?>
                                                                                                    type="number"
                                                                                                    name="inputElectionAdvertisePrice"
                                                                                                    class="form-control"
                                                                                                    placeholder=""
                                                                                                    min="0"/>
                                                                                            <label for="inputElectionAdvertisePrice">هزار
                                                                                                تومان</label>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputElectionAdvertisePrice"
                                                                                                    id="inputElectionAdvertisePrice">
                                                                                                <option value="0">انتخاب
                                                                                                    کنید ---
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($election['ElectionAdvertisePrice'])['unit']) == "HZ") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="HZ"
                                                                                                        data-right-side="SD"
                                                                                                        value="HZ">هزار
                                                                                                    تومان
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($election['ElectionAdvertisePrice'])['unit']) == "MI") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="MI"
                                                                                                        data-right-side="HZ"
                                                                                                        value="MI">
                                                                                                    میلیون
                                                                                                    تومان
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($election['ElectionAdvertisePrice'])['unit']) == "ML") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="ML"
                                                                                                        data-right-side="MI"
                                                                                                        value="ML">
                                                                                                    میلیارد
                                                                                                    تومان
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
                                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                            <input
                                                                                                <?php setInputValue(splitPrice($election['ElectionStaffPrice'])['right']); ?>
                                                                                                    type="number"
                                                                                                    name="inputElectionStaffPrice"
                                                                                                    class="form-control"
                                                                                                    placeholder=""
                                                                                                    min="0"/>
                                                                                            <label for="inputElectionStaffPrice ">صد
                                                                                                تومان</label>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                            <input
                                                                                                <?php setInputValue(splitPrice($election['ElectionStaffPrice'])['right']); ?>
                                                                                                    type="number"
                                                                                                    name="inputElectionStaffPrice"
                                                                                                    class="form-control"
                                                                                                    placeholder=""
                                                                                                    min="0"/>
                                                                                            <label for="inputElectionStaffPrice">هزار
                                                                                                تومان</label>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputElectionStaffPrice"
                                                                                                    id="inputElectionStaffPrice">
                                                                                                <option value="0">انتخاب
                                                                                                    کنید ---
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($election['ElectionStaffPrice'])['unit']) == "HZ") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="HZ"
                                                                                                        data-right-side="SD"
                                                                                                        value="HZ">هزار
                                                                                                    تومان
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($election['ElectionStaffPrice'])['unit']) == "MI") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="MI"
                                                                                                        data-right-side="HZ"
                                                                                                        value="MI">
                                                                                                    میلیون
                                                                                                    تومان
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($election['ElectionStaffPrice'])['unit']) == "ML") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="ML"
                                                                                                        data-right-side="MI"
                                                                                                        value="ML">
                                                                                                    میلیارد
                                                                                                    تومان
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
                                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                            <input
                                                                                                <?php setInputValue(splitPrice($election['ElectionAllPrice'])['right']); ?>
                                                                                                    type="number"
                                                                                                    name="inputElectionAllPrice"
                                                                                                    class="form-control"
                                                                                                    placeholder=""
                                                                                                    min="0"/>
                                                                                            <label for="inputElectionAllPrice ">صد
                                                                                                تومان</label>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                            <input
                                                                                                <?php setInputValue(splitPrice($election['ElectionAllPrice'])['right']); ?>
                                                                                                    type="number"
                                                                                                    name="inputElectionAllPrice"
                                                                                                    class="form-control"
                                                                                                    placeholder=""
                                                                                                    min="0"/>
                                                                                            <label for="inputElectionAllPrice">هزار
                                                                                                تومان</label>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputElectionAllPrice"
                                                                                                    id="inputElectionAllPrice">
                                                                                                <option value="0">انتخاب
                                                                                                    کنید ---
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($election['ElectionAllPrice'])['unit']) == "HZ") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="HZ"
                                                                                                        data-right-side="SD"
                                                                                                        value="HZ">هزار
                                                                                                    تومان
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($election['ElectionAllPrice'])['unit']) == "MI") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="MI"
                                                                                                        data-right-side="HZ"
                                                                                                        value="MI">
                                                                                                    میلیون
                                                                                                    تومان
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($election['ElectionAllPrice'])['unit']) == "ML") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="ML"
                                                                                                        data-right-side="MI"
                                                                                                        value="ML">
                                                                                                    میلیارد
                                                                                                    تومان
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

                                                                        <form id="form-RealEstate">
                                                                            <span class="divider"></span>
                                                                            <?php foreach ($finance['RealEStates'] as $item) {
                                                                                if ($item['ForWho'] == 'Child') { ?>
                                                                                    <div class="col-md-12 col-xs-12 padding-0 form">

                                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                            <label for="inputRealEstateType">
                                                                                                نوع کاربری
                                                                                                <span class="text-danger"></span>
                                                                                            </label>
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputRealEstateType"
                                                                                                    id="inputRealEstateType">
                                                                                                <?php foreach ($EnumResumeProfile['RealEstateType'] as $key => $value) { ?>
                                                                                                    <option
                                                                                                        <?php setOptionSelected($item['RealEstateType'], $key); ?>
                                                                                                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                                <?php } ?>
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
                                                                                                <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                                    <option
                                                                                                        <?php setOptionSelected($item['RealEstateOwnershipDate'], $i); ?>
                                                                                                            value="<?php echo $i; ?>">
                                                                                                        <?php echo $i; ?>
                                                                                                    </option>
                                                                                                <?php } ?>
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
                                                                                                <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                                                    <option
                                                                                                        <?php setOptionSelected($item['RealEstateOwnershipType'], $key); ?>
                                                                                                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                                <?php } ?>
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat countries">
                                                                                            <label for="inputRealEstateCountryId">کشور</label>
                                                                                            <select
                                                                                                    data-country-id="<?php echo $item['RealEstateCountryId']; ?>"
                                                                                                    data-state-id="<?php echo $item['RealEstateStateId']; ?>"
                                                                                                    data-city-id="<?php echo $item['RealEstateCityId']; ?>"
                                                                                                    class="form-control form-control-lg"
                                                                                                    name="inputRealEstateCountryId"
                                                                                                    id="inputRealEstateCountryId">
                                                                                                <option value="0">--
                                                                                                    انتخاب
                                                                                                    کنید --
                                                                                                </option>
                                                                                                <?php foreach ($countries as $row) { ?>
                                                                                                    <option
                                                                                                        <?php setOptionSelected($item['RealEstateCountryId'], $row['CountryId']); ?>
                                                                                                            value="<?php echo $row['CountryId']; ?>"><?php echo $row['FaName']; ?></option>
                                                                                                <?php } ?>
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv">
                                                                                            <label for="inputRealEstateStateId">
                                                                                                استان
                                                                                            </label>
                                                                                            <select
                                                                                                    data-city-id="<?php echo $item['RealEstateCityId']; ?>"
                                                                                                    class="form-control form-control-lg state-select"
                                                                                                    name="inputRealEstateStateId"
                                                                                                    id="inputRealEstateStateId">
                                                                                                <option value="0">--
                                                                                                    انتخاب
                                                                                                    کنید --
                                                                                                </option>
                                                                                                <?php foreach ($states as $state) { ?>
                                                                                                    <option
                                                                                                        <?php setOptionSelected($item['RealEstateStateId'], $state['StateId']); ?>
                                                                                                            value="<?php echo $state['StateId']; ?>">
                                                                                                        <?php echo $state['StateName']; ?>
                                                                                                    </option>
                                                                                                <?php } ?>
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv">
                                                                                            <label for="inputRealEstateCityId">
                                                                                                شهر
                                                                                            </label>
                                                                                            <select class="form-control form-control-lg city-select"
                                                                                                    name="inputRealEstateCityId"
                                                                                                    id="inputRealEstateCityId">
                                                                                                <option value="0">--
                                                                                                    انتخاب
                                                                                                    کنید --
                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                            <label for="inputRealEstatePortion">
                                                                                                سهم از ملک(1 تا 6 دانگ)
                                                                                                <span class="text-danger"></span>
                                                                                            </label>
                                                                                            <input type="number"
                                                                                                <?php setInputValue($item['RealEstatePortion']); ?>
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
                                                                                                        <?php setInputValue($item['RealEstateExtent']); ?>
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
                                                                                                        <?php foreach ($EnumResumeProfile['Extent'] as $key => $value) { ?>
                                                                                                            <option
                                                                                                                <?php setOptionSelected($item['RealEstateExtentUnit'], $key); ?>
                                                                                                                    value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                                        <?php } ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                            <label for="inputRealEstateBuyTimePrice">
                                                                                                ارزش حدودی کل سهام در
                                                                                                زمان
                                                                                                شروع مالکیت :
                                                                                                <span class="text-danger"></span>
                                                                                            </label>
                                                                                            <div class="row">
                                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                    <input
                                                                                                        <?php setInputValue(splitPrice($item['RealEstateBuyTimePrice'])['right']); ?>
                                                                                                            type="number"
                                                                                                            name="inputRealEstateBuyTimePrice"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            min="0"/>
                                                                                                    <label for="inputRealEstateBuyTimePrice ">صد
                                                                                                        تومان</label>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                    <input
                                                                                                            type="number"
                                                                                                        <?php setInputValue(splitPrice($item['RealEstateBuyTimePrice'])['left']); ?>
                                                                                                            name="inputRealEstateBuyTimePrice"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            min="0"/>
                                                                                                    <label for="inputRealEstateBuyTimePrice">هزار
                                                                                                        تومان</label>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                    <select class="form-control form-control-lg"
                                                                                                            name="inputRealEstateBuyTimePrice"
                                                                                                            id="inputRealEstateBuyTimePrice">
                                                                                                        <option value="0">
                                                                                                            انتخاب کنید
                                                                                                            ---
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['RealEstateBuyTimePrice'])['unit']) == "HZ") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="HZ"
                                                                                                                data-right-side="SD"
                                                                                                                value="HZ">
                                                                                                            هزار تومان
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['RealEstateBuyTimePrice'])['unit']) == "MI") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="MI"
                                                                                                                data-right-side="HZ"
                                                                                                                value="MI">
                                                                                                            میلیون تومان
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['RealEstateBuyTimePrice'])['unit']) == "ML") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="ML"
                                                                                                                data-right-side="MI"
                                                                                                                value="ML">
                                                                                                            میلیارد
                                                                                                            تومان
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                            <label for="inputRealEstateNowTimePrice">
                                                                                                ارزش حدودی کل سهام درحال
                                                                                                حاضر :
                                                                                                <span class="text-danger"></span>
                                                                                            </label>
                                                                                            <div class="row">
                                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                    <input
                                                                                                        <?php setInputValue(splitPrice($item['RealEstateNowTimePrice'])['right']); ?>
                                                                                                            type="number"
                                                                                                            name="inputRealEstateNowTimePrice"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            min="0"/>
                                                                                                    <label for="inputRealEstateNowTimePrice ">صد
                                                                                                        تومان</label>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                    <input
                                                                                                        <?php setInputValue(splitPrice($item['RealEstateNowTimePrice'])['left']); ?>
                                                                                                            type="number"
                                                                                                            name="inputRealEstateNowTimePrice"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            min="0"/>
                                                                                                    <label for="inputRealEstateNowTimePrice">هزار
                                                                                                        تومان</label>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                    <select class="form-control form-control-lg"
                                                                                                            name="inputRealEstateNowTimePrice"
                                                                                                            id="inputRealEstateNowTimePrice">
                                                                                                        <option value="0">
                                                                                                            انتخاب کنید
                                                                                                            ---
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['RealEstateNowTimePrice'])['unit']) == "HZ") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="HZ"
                                                                                                                data-right-side="SD"
                                                                                                                value="HZ">
                                                                                                            هزار تومان
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['RealEstateNowTimePrice'])['unit']) == "MI") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="MI"
                                                                                                                data-right-side="HZ"
                                                                                                                value="MI">
                                                                                                            میلیون تومان
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['RealEstateNowTimePrice'])['unit']) == "ML") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="ML"
                                                                                                                data-right-side="MI"
                                                                                                                value="ML">
                                                                                                            میلیارد
                                                                                                            تومان
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group RightFloat">
                                                                                            <label for="inputRealEstateAddress">آدرس</label>
                                                                                            <input
                                                                                                <?php setInputValue($item['RealEstateAddress']); ?>
                                                                                                    id="inputRealEstateAddress"
                                                                                                    type="text"
                                                                                                    name="inputRealEstateAddress"
                                                                                                    class="input-validate validate valid"
                                                                                                    placeholder="نام خیابان اصلی / محله / منطقه">
                                                                                        </div>
                                                                                    </div>
                                                                                <?php }
                                                                            } ?>
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
                                                            <div class="panel-heading">وسایل نقلیه</div>
                                                            <div class="panel-body padding-r-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">

                                                                        <form id="form-Vehicle">
                                                                            <span class="divider"></span>
                                                                            <?php foreach ($finance['Vehicle'] as $item) {
                                                                                if ($item['ForWho'] == 'Child') { ?>
                                                                                    <div class="col-md-12 col-xs-12 padding-0 form">

                                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                            <label for="inputVehicleType">
                                                                                                نوع وسیله نقلیه<span
                                                                                                        class="text-danger"></span>
                                                                                            </label>
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputVehicleType"
                                                                                                    id="inputVehicleType">
                                                                                                <?php foreach ($EnumResumeProfile['TypeOfVehicle'] as $key => $value) { ?>
                                                                                                    <option
                                                                                                        <?php setOptionSelected($item['VehicleType'], $key); ?>
                                                                                                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                                <?php } ?>
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
                                                                                                <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                                    <option
                                                                                                        <?php setOptionSelected($item['VehicleOwnershipDate'], $i); ?>
                                                                                                        <?php if ($i == 1398) echo "selected"; ?>
                                                                                                            value="<?php echo $i; ?>">
                                                                                                        <?php echo $i; ?>
                                                                                                    </option>
                                                                                                <?php } ?>
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
                                                                                                <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                                                    <option

                                                                                                        <?php setOptionSelected($item['VehicleOwnershipType'], $i); ?>
                                                                                                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                                <?php } ?>
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                            <label for="inputVehicleBuyTimePrice">
                                                                                                ارزش حدودی کل سهام در
                                                                                                زمان
                                                                                                شروع مالکیت :
                                                                                                <span class="text-danger"></span>
                                                                                            </label>
                                                                                            <div class="row">
                                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                    <input
                                                                                                        <?php setInputValue(splitPrice($item['VehicleBuyTimePrice'])['right']); ?>
                                                                                                            type="number"
                                                                                                            name="inputVehicleBuyTimePrice"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            min="0"/>
                                                                                                    <label for="inputVehicleBuyTimePrice ">صد
                                                                                                        تومان</label>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                    <input
                                                                                                        <?php setInputValue(splitPrice($item['VehicleBuyTimePrice'])['left']); ?>
                                                                                                            type="number"
                                                                                                            name="inputVehicleBuyTimePrice"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            min="0"/>
                                                                                                    <label for="inputVehicleBuyTimePrice">هزار
                                                                                                        تومان</label>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                    <select class="form-control form-control-lg"
                                                                                                            name="inputVehicleBuyTimePrice"
                                                                                                            id="inputVehicleBuyTimePrice">
                                                                                                        <option value="0">
                                                                                                            انتخاب کنید
                                                                                                            ---
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['VehicleBuyTimePrice'])['unit']) == "HZ") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="HZ"
                                                                                                                data-right-side="SD"
                                                                                                                value="HZ">
                                                                                                            هزار تومان
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['VehicleBuyTimePrice'])['unit']) == "MI") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="MI"
                                                                                                                data-right-side="HZ"
                                                                                                                value="MI">
                                                                                                            میلیون تومان
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['VehicleBuyTimePrice'])['unit']) == "ML") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="ML"
                                                                                                                data-right-side="MI"
                                                                                                                value="ML">
                                                                                                            میلیارد
                                                                                                            تومان
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                            <label for="inputVehicleNowTimePrice">
                                                                                                ارزش حدودی کل سهام درحال
                                                                                                حاضر :
                                                                                                <span class="text-danger"></span>
                                                                                            </label>
                                                                                            <div class="row">
                                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                    <input
                                                                                                        <?php setInputValue(splitPrice($item['VehicleNowTimePrice'])['right']); ?>
                                                                                                            type="number"
                                                                                                            name="inputVehicleNowTimePrice"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            min="0"/>
                                                                                                    <label for="inputVehicleNowTimePrice ">صد
                                                                                                        تومان</label>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                    <input
                                                                                                        <?php setInputValue(splitPrice($item['VehicleNowTimePrice'])['right']); ?>
                                                                                                            type="number"
                                                                                                            name="inputVehicleNowTimePrice"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            min="0"/>
                                                                                                    <label for="inputVehicleNowTimePrice">هزار
                                                                                                        تومان</label>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                    <select class="form-control form-control-lg"
                                                                                                            name="inputVehicleNowTimePrice"
                                                                                                            id="inputVehicleNowTimePrice">
                                                                                                        <option value="0">
                                                                                                            انتخاب کنید
                                                                                                            ---
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['VehicleNowTimePrice'])['unit']) == "HZ") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="HZ"
                                                                                                                data-right-side="SD"
                                                                                                                value="HZ">
                                                                                                            هزار تومان
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['VehicleNowTimePrice'])['unit']) == "MI") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="MI"
                                                                                                                data-right-side="HZ"
                                                                                                                value="MI">
                                                                                                            میلیون تومان
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['VehicleNowTimePrice'])['unit']) == "ML") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="ML"
                                                                                                                data-right-side="MI"
                                                                                                                value="ML">
                                                                                                            میلیارد
                                                                                                            تومان
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
                                                                                                <?php setInputValue($item['VehiclePortion']); ?>
                                                                                                    type="number"
                                                                                                    name="inputVehiclePortion"
                                                                                                    id="inputVehiclePortion"
                                                                                                    class="form-control"
                                                                                                    placeholder="سهم از ملک 1 تا 6 دانگ"
                                                                                                    min="0" max="6"/>
                                                                                        </div>
                                                                                    </div>
                                                                                <?php }
                                                                            } ?>
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
                                                            <div class="panel-heading">سرمایه‌گذاری‌ها (سهام‌، اوراق
                                                                بهادار،
                                                                ...)
                                                            </div>
                                                            <div class="panel-body padding-r-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">

                                                                        <form id="form-Invest">
                                                                            <span class="divider"></span>
                                                                            <?php foreach ($finance['Invest'] as $item) {
                                                                                if ($item['ForWho'] == 'Child') { ?>
                                                                                    <div class="col-md-12 col-xs-12 padding-0 form">

                                                                                        <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                                            <label for="inputInvestTitle">
                                                                                                نام شرکت / موسسه
                                                                                            </label>
                                                                                            <input
                                                                                                <?php setInputValue($item['InvestTitle']); ?>
                                                                                                    id="inputInvestTitle"
                                                                                                    type="text"
                                                                                                    name="inputInvestTitle"
                                                                                                    placeholder="نام شرکت - موسسه - پروژه ">
                                                                                        </div>
                                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                            <label for="inputInvestDate">
                                                                                                سال شروع مالکیت
                                                                                                <span class="text-danger">
                                             </span>
                                                                                            </label>
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputInvestDate"
                                                                                                    id="inputInvestDate"
                                                                                                    style="font-family: tahoma;">
                                                                                                <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                                    <option
                                                                                                        <?php setOptionSelected($item['InvestDate'], $i); ?>
                                                                                                        <?php if ($i == 1398) echo "selected"; ?>
                                                                                                            value="<?php echo $i; ?>">
                                                                                                        <?php echo $i; ?>
                                                                                                    </option>
                                                                                                <?php } ?>
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
                                                                                                <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                                                    <option
                                                                                                        <?php setOptionSelected($item['InvestDate'], $key); ?>
                                                                                                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                                <?php } ?>
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                            <label for="inputInvestBuyTimePrice">
                                                                                                ارزش حدودی کل سهام در
                                                                                                زمان
                                                                                                شروع مالکیت :
                                                                                                <span class="text-danger"></span>
                                                                                            </label>
                                                                                            <div class="row">
                                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                    <input
                                                                                                        <?php setInputValue(splitPrice($item['InvestBuyTimePrice'])['right']); ?>
                                                                                                            type="number"
                                                                                                            name="inputInvestBuyTimePrice"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            min="0"/>
                                                                                                    <label for="inputInvestBuyTimePrice ">صد
                                                                                                        تومان</label>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                    <input
                                                                                                        <?php setInputValue(splitPrice($item['InvestBuyTimePrice'])['left']); ?>
                                                                                                            type="number"
                                                                                                            name="inputInvestBuyTimePrice"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            min="0"/>
                                                                                                    <label for="inputInvestBuyTimePrice">هزار
                                                                                                        تومان</label>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                    <select class="form-control form-control-lg"
                                                                                                            name="inputInvestBuyTimePrice"
                                                                                                            id="inputInvestBuyTimePrice">
                                                                                                        <option value="0">
                                                                                                            انتخاب کنید
                                                                                                            ---
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['InvestBuyTimePrice'])['unit']) == "HZ") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="HZ"
                                                                                                                data-right-side="SD"
                                                                                                                value="HZ">
                                                                                                            هزار تومان
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['InvestBuyTimePrice'])['unit']) == "MI") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="MI"
                                                                                                                data-right-side="HZ"
                                                                                                                value="MI">
                                                                                                            میلیون تومان
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['InvestBuyTimePrice'])['unit']) == "ML") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="ML"
                                                                                                                data-right-side="MI"
                                                                                                                value="ML">
                                                                                                            میلیارد
                                                                                                            تومان
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                            <label for="inputInvestNowTimePrice">
                                                                                                ارزش حدودی کل سهام درحال
                                                                                                حاضر :
                                                                                                <span class="text-danger"></span>
                                                                                            </label>
                                                                                            <div class="row">
                                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                    <input
                                                                                                        <?php setInputValue(splitPrice($item['InvestNowTimePrice'])['right']); ?>
                                                                                                            type="number"
                                                                                                            name="inputInvestNowTimePrice"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            min="0"/>
                                                                                                    <label for="inputInvestNowTimePrice ">صد
                                                                                                        تومان</label>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                    <input
                                                                                                        <?php setInputValue(splitPrice($item['InvestNowTimePrice'])['left']); ?>
                                                                                                            type="number"
                                                                                                            name="inputInvestNowTimePrice"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            min="0"/>
                                                                                                    <label for="inputInvestNowTimePrice">هزار
                                                                                                        تومان</label>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                    <select class="form-control form-control-lg"
                                                                                                            name="inputInvestNowTimePrice"
                                                                                                            id="inputInvestNowTimePrice">
                                                                                                        <option value="0">
                                                                                                            انتخاب کنید
                                                                                                            ---
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['InvestNowTimePrice'])['unit']) == "HZ") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="HZ"
                                                                                                                data-right-side="SD"
                                                                                                                value="HZ">
                                                                                                            هزار تومان
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['InvestNowTimePrice'])['unit']) == "MI") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="MI"
                                                                                                                data-right-side="HZ"
                                                                                                                value="MI">
                                                                                                            میلیون تومان
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['InvestNowTimePrice'])['unit']) == "ML") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="ML"
                                                                                                                data-right-side="MI"
                                                                                                                value="ML">
                                                                                                            میلیارد
                                                                                                            تومان
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                <?php }
                                                                            } ?>
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
                                                            <div class="panel-heading">حساب‌های جاری، پس‌انداز و
                                                                سرمایه‌گذاری
                                                            </div>
                                                            <div class="panel-body padding-r-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">

                                                                        <form id="form-BankAccount">
                                                                            <span class="divider"></span>
                                                                            <?php foreach ($finance['BankAccount'] as $item) {
                                                                                if ($item['ForWho'] == 'Child') { ?>
                                                                                    <div class="col-md-12 col-xs-12 padding-0 form">

                                                                                        <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                                            <label for="inputBankAccountTitle">
                                                                                                عنوان بانک یا موسسه
                                                                                            </label>
                                                                                            <input
                                                                                                <?php setInputValue($item['BankAccountTitle']); ?>
                                                                                                    id="inputBankAccountTitle"
                                                                                                    type="text"
                                                                                                    name="inputBankAccountTitle"
                                                                                                    placeholder="عنوان بانک یا موسسه ">
                                                                                        </div>
                                                                                        <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                            <label for="inputBankAccountPrice">
                                                                                                مبلغ :
                                                                                                <span class="text-danger"></span>
                                                                                            </label>
                                                                                            <div class="row">
                                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                    <input

                                                                                                        <?php setInputValue(splitPrice($item['BankAccountPrice'])['right']); ?>
                                                                                                            type="number"
                                                                                                            name="inputBankAccountPrice"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            min="0"/>
                                                                                                    <label for="inputBankAccountPrice ">صد
                                                                                                        تومان</label>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                    <input

                                                                                                        <?php setInputValue(splitPrice($item['BankAccountPrice'])['left']); ?>
                                                                                                            type="number"
                                                                                                            name="RealEstateBuyTimePrice"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            min="0"/>
                                                                                                    <label for="inputBankAccountPrice">هزار
                                                                                                        تومان</label>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                    <select class="form-control form-control-lg"
                                                                                                            name="inputBankAccountPrice"
                                                                                                            id="inputBankAccountPrice">
                                                                                                        <option value="0">
                                                                                                            انتخاب کنید
                                                                                                            ---
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['BankAccountPrice'])['unit']) == "HZ") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="HZ"
                                                                                                                data-right-side="SD"
                                                                                                                value="HZ">
                                                                                                            هزار تومان
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['BankAccountPrice'])['unit']) == "MI") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="MI"
                                                                                                                data-right-side="HZ"
                                                                                                                value="MI">
                                                                                                            میلیون تومان
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['BankAccountPrice'])['unit']) == "ML") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="ML"
                                                                                                                data-right-side="MI"
                                                                                                                value="ML">
                                                                                                            میلیارد
                                                                                                            تومان
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
                                                                                                <option value="0">--
                                                                                                    انتخاب
                                                                                                    کنید --
                                                                                                </option>
                                                                                                <?php foreach ($countries as $row) { ?>
                                                                                                    <option
                                                                                                        <?php setOptionSelected($item['BankAccountCountryId'], $row['CountryId']); ?>
                                                                                                            value="<?php echo $row['CountryId']; ?>"><?php echo $row['FaName']; ?></option>
                                                                                                <?php } ?>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                <?php }
                                                                            } ?>
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
                                                            <div class="panel-heading">دیون و مطالبات</div>
                                                            <div class="panel-body padding-r-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">

                                                                        <form id="form-Credit-Debtor">
                                                                            <span class="divider"></span>
                                                                            <?php
                                                                            $creditDebtor['CreditPrice'] = "0.0 HZ";
                                                                            $creditDebtor['DebotrPrice'] = "0.0 HZ";
                                                                            $creditDebtor['DebotrDescription'] = "";
                                                                            foreach ($finance['CreditDebtor'] as $item) {
                                                                                if ($item['ForWho'] == 'Child') {
                                                                                    $creditDebtor = $item;
                                                                                }
                                                                            }
                                                                            ?>
                                                                            <div class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputCreditPrice">
                                                                                        جمع کل بستانکاری از اشخاص حقیقی
                                                                                        یا
                                                                                        حقوقی
                                                                                        :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                            <input
                                                                                                <?php setInputValue(splitPrice($creditDebtor['CreditPrice'])['right']); ?>
                                                                                                    type="number"
                                                                                                    name="inputCreditPrice"
                                                                                                    class="form-control"
                                                                                                    placeholder=""
                                                                                                    min="0"/>
                                                                                            <label for="inputCreditPrice ">صد
                                                                                                تومان</label>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                            <input
                                                                                                <?php setInputValue(splitPrice($creditDebtor['CreditPrice'])['right']); ?>
                                                                                                    type="number"
                                                                                                    name="inputCreditPrice"
                                                                                                    class="form-control"
                                                                                                    placeholder=""
                                                                                                    min="0"/>
                                                                                            <label for="inputCreditPrice">هزار
                                                                                                تومان</label>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputCreditPrice"
                                                                                                    id="inputCreditPrice">
                                                                                                <option value="0">انتخاب
                                                                                                    کنید ---
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($creditDebtor['CreditPrice'])['unit']) == "HZ") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="HZ"
                                                                                                        data-right-side="SD"
                                                                                                        value="HZ">هزار
                                                                                                    تومان
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($creditDebtor['CreditPrice'])['unit']) == "MI") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="MI"
                                                                                                        data-right-side="HZ"
                                                                                                        value="MI">
                                                                                                    میلیون
                                                                                                    تومان
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($creditDebtor['CreditPrice'])['unit']) == "ML") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="ML"
                                                                                                        data-right-side="MI"
                                                                                                        value="ML">
                                                                                                    میلیارد
                                                                                                    تومان
                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputDebotrPrice">
                                                                                        جمع کل بدهکاری از اشخاص حقیقی یا
                                                                                        حقوقی :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                            <input
                                                                                                <?php setInputValue(splitPrice($creditDebtor['DebotrPrice'])['right']); ?>
                                                                                                    type="number"
                                                                                                    name="inputDebotrPrice"
                                                                                                    class="form-control"
                                                                                                    placeholder=""
                                                                                                    min="0"/>
                                                                                            <label for="inputDebotrPrice ">صد
                                                                                                تومان</label>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                            <input
                                                                                                <?php setInputValue(splitPrice($creditDebtor['DebotrPrice'])['right']); ?>
                                                                                                    type="number"
                                                                                                    name="inputDebotrPrice"
                                                                                                    class="form-control"
                                                                                                    placeholder=""
                                                                                                    min="0"/>
                                                                                            <label for="inputDebotrPrice">هزار
                                                                                                تومان</label>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputDebotrPrice"
                                                                                                    id="inputDebotrPrice">
                                                                                                <option value="0">انتخاب
                                                                                                    کنید ---
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($creditDebtor['DebotrPrice'])['unit']) == "HZ") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="HZ"
                                                                                                        data-right-side="SD"
                                                                                                        value="HZ">هزار
                                                                                                    تومان
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($creditDebtor['DebotrPrice'])['unit']) == "MI") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="MI"
                                                                                                        data-right-side="HZ"
                                                                                                        value="MI">
                                                                                                    میلیون
                                                                                                    تومان
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($creditDebtor['DebotrPrice'])['unit']) == "ML") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="ML"
                                                                                                        data-right-side="MI"
                                                                                                        value="ML">
                                                                                                    میلیارد
                                                                                                    تومان
                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <textarea class="EStates-textArea"
                                                                                              name="inputDebotrDescription"><?php echo $creditDebtor['DebotrDescription']; ?></textarea>
                                                                                </div>
                                                                            </div>
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
                                                            <div class="panel-heading">کلیه کالاهای فاقد سند مالکیت رسمی
                                                            </div>
                                                            <div class="panel-body padding-r-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">

                                                                        <form id="form-Goods">
                                                                            <span class="divider"></span>
                                                                            <?php foreach ($finance['Goods'] as $item) {
                                                                                if ($item['ForWho'] == 'Child') { ?>
                                                                                    <div class="col-md-12 col-xs-12 padding-0 form">

                                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                            <label for="inputGoodsType">
                                                                                                نوع کالا
                                                                                            </label>
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputGoodsType"
                                                                                                    id="inputGoodsType">
                                                                                                <?php foreach ($EnumResumeProfile['GoodsType'] as $key => $value) { ?>
                                                                                                    <option
                                                                                                        <?php setOptionSelected($item['GoodsType'], $key); ?>
                                                                                                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                                <?php } ?>
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
                                                                                                <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                                    <option
                                                                                                        <?php setOptionSelected($item['GoodsOwnershipStartDate'], $i); ?>
                                                                                                            value="<?php echo $i; ?>">
                                                                                                        <?php echo $i; ?>
                                                                                                    </option>
                                                                                                <?php } ?>
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                            <label for="inputGoodsCount">
                                                                                                حجم / وزن / تعداد کالا
                                                                                                <span class="text-danger"></span>
                                                                                            </label>
                                                                                            <input
                                                                                                <?php setInputValue($item['GoodsCount']); ?>
                                                                                                    type="text"
                                                                                                    name="inputGoodsCount"
                                                                                                    id="inputGoodsCount"
                                                                                                    class="form-control"
                                                                                                    placeholder="  حجم / وزن / تعداد کالا"/>
                                                                                        </div>
                                                                                        <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                            <label for="inputGoodsBuyTimePrice">
                                                                                                ارزش حدودی کل سهام در
                                                                                                زمان
                                                                                                شروع مالکیت :
                                                                                                <span class="text-danger"></span>
                                                                                            </label>
                                                                                            <div class="row">
                                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                    <input
                                                                                                        <?php setInputValue(splitPrice($item['GoodsBuyTimePrice'])['right']); ?>
                                                                                                            type="number"
                                                                                                            name="inputGoodsBuyTimePrice"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            min="0"/>
                                                                                                    <label for="inputGoodsBuyTimePrice ">صد
                                                                                                        تومان</label>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                    <input
                                                                                                        <?php setInputValue(splitPrice($item['GoodsBuyTimePrice'])['right']); ?>
                                                                                                            type="number"
                                                                                                            name="inputGoodsBuyTimePrice"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            min="0"/>
                                                                                                    <label for="inputGoodsBuyTimePrice">هزار
                                                                                                        تومان</label>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                    <select class="form-control form-control-lg"
                                                                                                            name="inputGoodsBuyTimePrice"
                                                                                                            id="inputGoodsBuyTimePrice">
                                                                                                        <option value="0">
                                                                                                            انتخاب کنید
                                                                                                            ---
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['GoodsBuyTimePrice'])['unit']) == "HZ") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="HZ"
                                                                                                                data-right-side="SD"
                                                                                                                value="HZ">
                                                                                                            هزار تومان
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['GoodsBuyTimePrice'])['unit']) == "MI") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="MI"
                                                                                                                data-right-side="HZ"
                                                                                                                value="MI">
                                                                                                            میلیون تومان
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['GoodsBuyTimePrice'])['unit']) == "ML") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="ML"
                                                                                                                data-right-side="MI"
                                                                                                                value="ML">
                                                                                                            میلیارد
                                                                                                            تومان
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                            <label for="inputGoodsNowTimePrice">
                                                                                                ارزش حدودی کل سهام درحال
                                                                                                حاضر :
                                                                                                <span class="text-danger"></span>
                                                                                            </label>
                                                                                            <div class="row">
                                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                    <input
                                                                                                        <?php setInputValue(splitPrice($item['GoodsNowTimePrice'])['right']); ?>
                                                                                                            type="number"
                                                                                                            name="inputGoodsNowTimePrice"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            min="0"/>
                                                                                                    <label for="inputGoodsNowTimePrice ">صد
                                                                                                        تومان</label>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                    <input
                                                                                                        <?php setInputValue(splitPrice($item['GoodsNowTimePrice'])['right']); ?>
                                                                                                            type="number"
                                                                                                            name="inputGoodsNowTimePrice"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            min="0"/>
                                                                                                    <label for="inputGoodsNowTimePrice">هزار
                                                                                                        تومان</label>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                    <select class="form-control form-control-lg"
                                                                                                            name="inputGoodsNowTimePrice"
                                                                                                            id="inputGoodsNowTimePrice">
                                                                                                        <option value="0">
                                                                                                            انتخاب کنید
                                                                                                            ---
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['GoodsNowTimePrice'])['unit']) == "HZ") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="HZ"
                                                                                                                data-right-side="SD"
                                                                                                                value="HZ">
                                                                                                            هزار تومان
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['GoodsNowTimePrice'])['unit']) == "MI") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="MI"
                                                                                                                data-right-side="HZ"
                                                                                                                value="MI">
                                                                                                            میلیون تومان
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['GoodsNowTimePrice'])['unit']) == "ML") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="ML"
                                                                                                                data-right-side="MI"
                                                                                                                value="ML">
                                                                                                            میلیارد
                                                                                                            تومان
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
                                                                                                <?php setInputValue($item['GoodsOwnershipPercent']); ?>
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
                                                                                                <span class="text-danger">
                                             </span>
                                                                                            </label>
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputRealEstateOwnershipType"
                                                                                                    id="inputRealEstateOwnershipType">
                                                                                                <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                                                    <option
                                                                                                        <?php setOptionSelected($item['RealEstateOwnershipType'], $key); ?>
                                                                                                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                                <?php } ?>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                <?php }
                                                                            } ?>
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
                                                            <div class="panel-heading">حقوق مالکیت معنوی</div>
                                                            <div class="panel-body padding-r-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">

                                                                        <form id="form-Fee">
                                                                            <span class="divider"></span>
                                                                            <?php foreach ($finance['Fee'] as $item) {
                                                                                if ($item['ForWho'] == 'Child') { ?>
                                                                                    <div class="col-md-12 col-xs-12 padding-0 form">

                                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                            <label for="inputFeeType">عنوان
                                                                                                :</label>
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputFeeType"
                                                                                                    id="inputFeeType">
                                                                                                <?php foreach ($EnumResumeProfile['FeeType'] as $key => $value) { ?>
                                                                                                    <option
                                                                                                        <?php setOptionSelected($item['FeeType'], $key); ?>
                                                                                                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                                <?php } ?>
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
                                                                                                <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                                    <option
                                                                                                        <?php setOptionSelected($item['FeeOwnershipStartDate'], $i); ?>
                                                                                                            value="<?php echo $i; ?>">
                                                                                                        <?php echo $i; ?>
                                                                                                    </option>
                                                                                                <?php } ?>
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                            <label for="inputFeePercent">
                                                                                                درصد سهم از مالکیت
                                                                                                معنوی:
                                                                                                <span class="text-danger"></span>
                                                                                            </label>
                                                                                            <input
                                                                                                <?php setInputValue($item['FeePercent']); ?>
                                                                                                    type="number"
                                                                                                    name="inputFeePercent"
                                                                                                    id="inputFeePercent"
                                                                                                    class="form-control"
                                                                                                    placeholder="سهم از ملک 1 تا 6 دانگ"/>
                                                                                        </div>
                                                                                        <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                            <label for="inputFeeAverageInYear">
                                                                                                میزان درآمد متوسط
                                                                                                سالیانه از
                                                                                                مالکیت
                                                                                                معنوی :
                                                                                                <span class="text-danger"></span>
                                                                                            </label>
                                                                                            <div class="row">
                                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                    <input
                                                                                                        <?php setInputValue(splitPrice($item['FeeAverageInYear'])['right']); ?>
                                                                                                            type="number"
                                                                                                            name="inputFeeAverageInYear"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            min="0"/>
                                                                                                    <label for="inputFeeAverageInYear ">صد
                                                                                                        تومان</label>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                    <input
                                                                                                        <?php setInputValue(splitPrice($item['FeeAverageInYear'])['right']); ?>
                                                                                                            type="number"
                                                                                                            name="inputFeeAverageInYear"
                                                                                                            class="form-control"
                                                                                                            placeholder=""
                                                                                                            min="0"/>
                                                                                                    <label for="inputFeeAverageInYear">هزار
                                                                                                        تومان</label>
                                                                                                </div>
                                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                    <select class="form-control form-control-lg"
                                                                                                            name="inputFeeAverageInYear"
                                                                                                            id="inputFeeAverageInYear">
                                                                                                        <option value="0">
                                                                                                            انتخاب کنید
                                                                                                            ---
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['FeeAverageInYear'])['unit']) == "HZ") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="HZ"
                                                                                                                data-right-side="SD"
                                                                                                                value="HZ">
                                                                                                            هزار تومان
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['FeeAverageInYear'])['unit']) == "MI") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="MI"
                                                                                                                data-right-side="HZ"
                                                                                                                value="MI">
                                                                                                            میلیون تومان
                                                                                                        </option>
                                                                                                        <option
                                                                                                            <?php
                                                                                                            if ((splitPrice($item['FeeAverageInYear'])['unit']) == "ML") {
                                                                                                                echo "selected";
                                                                                                            }
                                                                                                            ?>
                                                                                                                data-left-side="ML"
                                                                                                                data-right-side="MI"
                                                                                                                value="ML">
                                                                                                            میلیارد
                                                                                                            تومان
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                <?php }
                                                                            } ?>
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
                                                            <div class="panel-heading">در آمد</div>
                                                            <div class="panel-body padding-r-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">

                                                                        <form id="form-AverageMonthIncome">
                                                                            <span class="divider"></span>
                                                                            <div class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <?php
                                                                                    $income['AverageMonthIncome'] = "0.0 HZ";
                                                                                    foreach ($finance['Income'] as $item) {
                                                                                        if ($item['ForWho'] == 'Child') {
                                                                                            $income = $item;
                                                                                        }
                                                                                    }
                                                                                    ?>
                                                                                    <label for="inputAverageMonthIncome">
                                                                                        درآمد متوسط ماهیانه :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                            <input
                                                                                                <?php setInputValue(splitPrice($income['AverageMonthIncome'])['right']); ?>
                                                                                                    type="number"
                                                                                                    name="inputAverageMonthIncome"
                                                                                                    class="form-control"
                                                                                                    placeholder=""
                                                                                                    min="0"/>
                                                                                            <label for="inputAverageMonthIncome ">صد
                                                                                                تومان</label>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                            <input
                                                                                                <?php setInputValue(splitPrice($income['AverageMonthIncome'])['right']); ?>
                                                                                                    type="number"
                                                                                                    name="inputAverageMonthIncome"
                                                                                                    class="form-control"
                                                                                                    placeholder=""
                                                                                                    min="0"/>
                                                                                            <label for="inputAverageMonthIncome">هزار
                                                                                                تومان</label>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputAverageMonthIncome"
                                                                                                    id="inputAverageMonthIncome">
                                                                                                <option value="0">انتخاب
                                                                                                    کنید ---
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($income['AverageMonthIncome'])['unit']) == "HZ") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="HZ"
                                                                                                        data-right-side="SD"
                                                                                                        value="HZ">هزار
                                                                                                    تومان
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($income['AverageMonthIncome'])['unit']) == "MI") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="MI"
                                                                                                        data-right-side="HZ"
                                                                                                        value="MI">
                                                                                                    میلیون
                                                                                                    تومان
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($income['AverageMonthIncome'])['unit']) == "ML") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="ML"
                                                                                                        data-right-side="MI"
                                                                                                        value="ML">
                                                                                                    میلیارد
                                                                                                    تومان
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
                                                            <div class="panel-heading">شفاف سازی هزینه های انتخاباتی
                                                            </div>
                                                            <div class="panel-body padding-r-0">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-xs-12">

                                                                        <form id="form-Election">
                                                                            <span class="divider"></span>
                                                                            <?php
                                                                            $election['ElectionPlacePrice'] = "0.0 HZ";
                                                                            $election['ElectionFlockPrice'] = "0.0 HZ";
                                                                            $election['ElectionAdvertisePrice'] = "0.0 HZ";
                                                                            $election['ElectionStaffPrice'] = "0.0 HZ";
                                                                            $election['ElectionAllPrice'] = "0.0 HZ";
                                                                            foreach ($finance['Election'] as $item) {
                                                                                if ($item['ForWho'] == 'Child') {
                                                                                    $election = $item;
                                                                                }
                                                                            }
                                                                            ?>
                                                                            <div class="col-md-12 col-xs-12 padding-0 form">
                                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <label for="inputElectionPlacePrice">
                                                                                        هزینه دایرکردن محل ستاد انتخابات
                                                                                        (اجاره بها ,
                                                                                        حملو نقل و سایر موارد)
                                                                                        -هزینه کل :
                                                                                        <span class="text-danger"></span>
                                                                                    </label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                            <input
                                                                                                <?php setInputValue(splitPrice($election['ElectionPlacePrice'])['right']); ?>
                                                                                                    type="number"
                                                                                                    name="inputElectionPlacePrice"
                                                                                                    class="form-control"
                                                                                                    placeholder=""
                                                                                                    min="0" max="6"/>
                                                                                            <label for="inputElectionPlacePrice ">صد
                                                                                                تومان</label>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                            <input
                                                                                                <?php setInputValue(splitPrice($election['ElectionPlacePrice'])['right']); ?>
                                                                                                    type="number"
                                                                                                    name="inputElectionPlacePrice"
                                                                                                    class="form-control"
                                                                                                    placeholder=""
                                                                                                    min="0" max="6"/>
                                                                                            <label for="inputElectionPlacePrice">هزار
                                                                                                تومان</label>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputElectionPlacePrice"
                                                                                                    id="inputElectionPlacePrice">
                                                                                                <option value="0">انتخاب
                                                                                                    کنید ---
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($election['ElectionPlacePrice'])['unit']) == "HZ") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="HZ"
                                                                                                        data-right-side="SD"
                                                                                                        value="HZ">هزار
                                                                                                    تومان
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($election['ElectionPlacePrice'])['unit']) == "MI") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="MI"
                                                                                                        data-right-side="HZ"
                                                                                                        value="MI">
                                                                                                    میلیون
                                                                                                    تومان
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($election['ElectionPlacePrice'])['unit']) == "ML") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="ML"
                                                                                                        data-right-side="MI"
                                                                                                        value="ML">
                                                                                                    میلیارد
                                                                                                    تومان
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
                                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                            <input
                                                                                                <?php setInputValue(splitPrice($election['ElectionFlockPrice'])['right']); ?>
                                                                                                    type="number"
                                                                                                    name="inputElectionFlockPrice"
                                                                                                    class="form-control"
                                                                                                    placeholder=""
                                                                                                    min="0"/>
                                                                                            <label for="inputElectionFlockPrice ">صد
                                                                                                تومان</label>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                            <input
                                                                                                <?php setInputValue(splitPrice($election['ElectionFlockPrice'])['right']); ?>
                                                                                                    type="number"
                                                                                                    name="inputElectionFlockPrice"
                                                                                                    class="form-control"
                                                                                                    placeholder=""
                                                                                                    min="0"/>
                                                                                            <label for="inputElectionFlockPrice">هزار
                                                                                                تومان</label>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputElectionFlockPrice"
                                                                                                    id="inputElectionFlockPrice">
                                                                                                <option value="0">انتخاب
                                                                                                    کنید ---
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($election['ElectionFlockPrice'])['unit']) == "HZ") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="HZ"
                                                                                                        data-right-side="SD"
                                                                                                        value="HZ">هزار
                                                                                                    تومان
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($election['ElectionFlockPrice'])['unit']) == "MI") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="MI"
                                                                                                        data-right-side="HZ"
                                                                                                        value="MI">
                                                                                                    میلیون
                                                                                                    تومان
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($election['ElectionFlockPrice'])['unit']) == "ML") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="ML"
                                                                                                        data-right-side="MI"
                                                                                                        value="ML">
                                                                                                    میلیارد
                                                                                                    تومان
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
                                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                            <input
                                                                                                <?php setInputValue(splitPrice($election['ElectionAdvertisePrice'])['right']); ?>
                                                                                                    type="number"
                                                                                                    name="inputElectionAdvertisePrice"
                                                                                                    class="form-control"
                                                                                                    placeholder=""
                                                                                                    min="0"/>
                                                                                            <label for="inputElectionAdvertisePrice ">صد
                                                                                                تومان</label>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                            <input
                                                                                                <?php setInputValue(splitPrice($election['ElectionAdvertisePrice'])['right']); ?>
                                                                                                    type="number"
                                                                                                    name="inputElectionAdvertisePrice"
                                                                                                    class="form-control"
                                                                                                    placeholder=""
                                                                                                    min="0"/>
                                                                                            <label for="inputElectionAdvertisePrice">هزار
                                                                                                تومان</label>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputElectionAdvertisePrice"
                                                                                                    id="inputElectionAdvertisePrice">
                                                                                                <option value="0">انتخاب
                                                                                                    کنید ---
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($election['ElectionAdvertisePrice'])['unit']) == "HZ") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="HZ"
                                                                                                        data-right-side="SD"
                                                                                                        value="HZ">هزار
                                                                                                    تومان
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($election['ElectionAdvertisePrice'])['unit']) == "MI") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="MI"
                                                                                                        data-right-side="HZ"
                                                                                                        value="MI">
                                                                                                    میلیون
                                                                                                    تومان
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($election['ElectionAdvertisePrice'])['unit']) == "ML") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="ML"
                                                                                                        data-right-side="MI"
                                                                                                        value="ML">
                                                                                                    میلیارد
                                                                                                    تومان
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
                                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                            <input
                                                                                                <?php setInputValue(splitPrice($election['ElectionStaffPrice'])['right']); ?>
                                                                                                    type="number"
                                                                                                    name="inputElectionStaffPrice"
                                                                                                    class="form-control"
                                                                                                    placeholder=""
                                                                                                    min="0"/>
                                                                                            <label for="inputElectionStaffPrice ">صد
                                                                                                تومان</label>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                            <input
                                                                                                <?php setInputValue(splitPrice($election['ElectionStaffPrice'])['right']); ?>
                                                                                                    type="number"
                                                                                                    name="inputElectionStaffPrice"
                                                                                                    class="form-control"
                                                                                                    placeholder=""
                                                                                                    min="0"/>
                                                                                            <label for="inputElectionStaffPrice">هزار
                                                                                                تومان</label>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputElectionStaffPrice"
                                                                                                    id="inputElectionStaffPrice">
                                                                                                <option value="0">انتخاب
                                                                                                    کنید ---
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($election['ElectionStaffPrice'])['unit']) == "HZ") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="HZ"
                                                                                                        data-right-side="SD"
                                                                                                        value="HZ">هزار
                                                                                                    تومان
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($election['ElectionStaffPrice'])['unit']) == "MI") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="MI"
                                                                                                        data-right-side="HZ"
                                                                                                        value="MI">
                                                                                                    میلیون
                                                                                                    تومان
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($election['ElectionStaffPrice'])['unit']) == "ML") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="ML"
                                                                                                        data-right-side="MI"
                                                                                                        value="ML">
                                                                                                    میلیارد
                                                                                                    تومان
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
                                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                            <input
                                                                                                <?php setInputValue(splitPrice($election['ElectionAllPrice'])['right']); ?>
                                                                                                    type="number"
                                                                                                    name="inputElectionAllPrice"
                                                                                                    class="form-control"
                                                                                                    placeholder=""
                                                                                                    min="0"/>
                                                                                            <label for="inputElectionAllPrice ">صد
                                                                                                تومان</label>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                            <input
                                                                                                <?php setInputValue(splitPrice($election['ElectionAllPrice'])['right']); ?>
                                                                                                    type="number"
                                                                                                    name="inputElectionAllPrice"
                                                                                                    class="form-control"
                                                                                                    placeholder=""
                                                                                                    min="0"/>
                                                                                            <label for="inputElectionAllPrice">هزار
                                                                                                تومان</label>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                            <select class="form-control form-control-lg"
                                                                                                    name="inputElectionAllPrice"
                                                                                                    id="inputElectionAllPrice">
                                                                                                <option value="0">انتخاب
                                                                                                    کنید ---
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($election['ElectionAllPrice'])['unit']) == "HZ") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="HZ"
                                                                                                        data-right-side="SD"
                                                                                                        value="HZ">هزار
                                                                                                    تومان
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($election['ElectionAllPrice'])['unit']) == "MI") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="MI"
                                                                                                        data-right-side="HZ"
                                                                                                        value="MI">
                                                                                                    میلیون
                                                                                                    تومان
                                                                                                </option>
                                                                                                <option
                                                                                                    <?php
                                                                                                    if ((splitPrice($election['ElectionAllPrice'])['unit']) == "ML") {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>
                                                                                                        data-left-side="ML"
                                                                                                        data-right-side="MI"
                                                                                                        value="ML">
                                                                                                    میلیارد
                                                                                                    تومان
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
                <div class="panel left-candidate-panel-resume padding-0 single-scroll">
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

    var countries = [];
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
            states = response.states;


            // /* for RealEStates*/
            // for (var temp in $scope.finance) {
            //     switch (temp) {
            //         case 'RealEStates':
            //             var realEStates = $scope.finance[temp];
            //             for (var i = 0; i < realEStates.length; i++) {
            //                 var row = realEStates[i];
            //                 row['RealEstateBuyTimePrice'] = row['RealEstateBuyTimePrice'].split(' ');
            //                 row['RealEstateBuyTimePrice']['NumberValues'] = row['RealEstateBuyTimePrice'][0].split('.');
            //                 switch (row['RealEstateBuyTimePrice'][1]) {
            //                     case 'ML':
            //                         row['RealEstateBuyTimePrice']['TranslatedUnit'] = 'میلیارد تومان';
            //                         break;
            //                     case 'MI':
            //                         row['RealEstateBuyTimePrice']['TranslatedUnit'] = 'میلیون تومان';
            //                         break;
            //                     case 'HZ':
            //                         row['RealEstateBuyTimePrice']['TranslatedUnit'] = 'هزار تومان';
            //                         break;
            //                     case 'SD':
            //                         row['RealEstateBuyTimePrice']['TranslatedUnit'] = 'صد تومان';
            //                         break;
            //                 }
            //                 console.log(row['RealEstateBuyTimePrice']);
            //                 realEStates[i] = row;
            //             }
            //             break;
            //     }
            // }
            // for (var temp in $scope.finance) {
            //     switch (temp) {
            //         case 'RealEStates':
            //             var realEStates = $scope.finance[temp];
            //             for (var i = 0; i < realEStates.length; i++) {
            //                 var row = realEStates[i];
            //                 row['RealEstateNowTimePrice'] = row['RealEstateNowTimePrice'].split(' ');
            //                 row['RealEstateNowTimePrice']['NumberValues'] = row['RealEstateNowTimePrice'][0].split('.');
            //                 switch (row['RealEstateNowTimePrice'][1]) {
            //                     case 'ML':
            //                         row['RealEstateNowTimePrice']['TranslatedUnit'] = 'میلیارد تومان';
            //                         break;
            //                     case 'MI':
            //                         row['RealEstateNowTimePrice']['TranslatedUnit'] = 'میلیون تومان';
            //                         break;
            //                     case 'HZ':
            //                         row['RealEstateNowTimePrice']['TranslatedUnit'] = 'هزار تومان';
            //                         break;
            //                     case 'SD':
            //                         row['RealEstateNowTimePrice']['TranslatedUnit'] = 'صد تومان';
            //                         break;
            //                 }
            //                 console.log(row['RealEstateNowTimePrice']);
            //                 realEStates[i] = row;
            //             }
            //             break;
            //     }
            // }
            // /* for RealEStates*/
            //
            // /* for Vehicle*/
            // for (var temp in $scope.finance) {
            //     switch (temp) {
            //         case 'Vehicle':
            //             var Vehicle = $scope.finance[temp];
            //             for (var i = 0; i < Vehicle.length; i++) {
            //                 var row = Vehicle[i];
            //                 row['VehicleBuyTimePrice'] = row['VehicleBuyTimePrice'].split(' ');
            //                 row['VehicleBuyTimePrice']['NumberValues'] = row['VehicleBuyTimePrice'][0].split('.');
            //                 switch (row['VehicleBuyTimePrice'][1]) {
            //                     case 'ML':
            //                         row['VehicleBuyTimePrice']['TranslatedUnit'] = 'میلیارد تومان';
            //                         break;
            //                     case 'MI':
            //                         row['VehicleBuyTimePrice']['TranslatedUnit'] = 'میلیون تومان';
            //                         break;
            //                     case 'HZ':
            //                         row['VehicleBuyTimePrice']['TranslatedUnit'] = 'هزار تومان';
            //                         break;
            //                     case 'SD':
            //                         row['VehicleBuyTimePrice']['TranslatedUnit'] = 'صد تومان';
            //                         break;
            //                 }
            //                 Vehicle[i] = row;
            //             }
            //             break;
            //     }
            // }
            // for (var temp in $scope.finance) {
            //     switch (temp) {
            //         case 'Vehicle':
            //             var Vehicle = $scope.finance[temp];
            //             for (var i = 0; i < Vehicle.length; i++) {
            //                 var row = Vehicle[i];
            //                 row['VehicleNowTimePrice'] = row['VehicleNowTimePrice'].split(' ');
            //                 row['VehicleNowTimePrice']['NumberValues'] = row['VehicleNowTimePrice'][0].split('.');
            //                 switch (row['VehicleNowTimePrice'][1]) {
            //                     case 'ML':
            //                         row['VehicleNowTimePrice']['TranslatedUnit'] = 'میلیارد تومان';
            //                         break;
            //                     case 'MI':
            //                         row['VehicleNowTimePrice']['TranslatedUnit'] = 'میلیون تومان';
            //                         break;
            //                     case 'HZ':
            //                         row['VehicleNowTimePrice']['TranslatedUnit'] = 'هزار تومان';
            //                         break;
            //                     case 'SD':
            //                         row['VehicleNowTimePrice']['TranslatedUnit'] = 'صد تومان';
            //                         break;
            //                 }
            //                 Vehicle[i] = row;
            //             }
            //             break;
            //     }
            // }
            // /* for Vehicle*/
            //
            //
            // /* for Invest*/
            // for (var temp in $scope.finance) {
            //     switch (temp) {
            //         case 'Invest':
            //             var Invest = $scope.finance[temp];
            //             for (var i = 0; i < Invest.length; i++) {
            //                 var row = Invest[i];
            //                 row['InvestBuyTimePrice'] = row['InvestBuyTimePrice'].split(' ');
            //                 row['InvestBuyTimePrice']['NumberValues'] = row['InvestBuyTimePrice'][0].split('.');
            //                 switch (row['InvestBuyTimePrice'][1]) {
            //                     case 'ML':
            //                         row['InvestBuyTimePrice']['TranslatedUnit'] = 'میلیارد تومان';
            //                         break;
            //                     case 'MI':
            //                         row['InvestBuyTimePrice']['TranslatedUnit'] = 'میلیون تومان';
            //                         break;
            //                     case 'HZ':
            //                         row['InvestBuyTimePrice']['TranslatedUnit'] = 'هزار تومان';
            //                         break;
            //                     case 'SD':
            //                         row['InvestBuyTimePrice']['TranslatedUnit'] = 'صد تومان';
            //                         break;
            //                 }
            //                 Invest[i] = row;
            //             }
            //             break;
            //     }
            // }
            // for (var temp in $scope.finance) {
            //     switch (temp) {
            //         case 'Invest':
            //             var Invest = $scope.finance[temp];
            //             for (var i = 0; i < Invest.length; i++) {
            //                 var row = Invest[i];
            //                 row['InvestNowTimePrice'] = row['InvestNowTimePrice'].split(' ');
            //                 row['InvestNowTimePrice']['NumberValues'] = row['InvestNowTimePrice'][0].split('.');
            //                 switch (row['InvestNowTimePrice'][1]) {
            //                     case 'ML':
            //                         row['InvestNowTimePrice']['TranslatedUnit'] = 'میلیارد تومان';
            //                         break;
            //                     case 'MI':
            //                         row['InvestNowTimePrice']['TranslatedUnit'] = 'میلیون تومان';
            //                         break;
            //                     case 'HZ':
            //                         row['InvestNowTimePrice']['TranslatedUnit'] = 'هزار تومان';
            //                         break;
            //                     case 'SD':
            //                         row['InvestNowTimePrice']['TranslatedUnit'] = 'صد تومان';
            //                         break;
            //                 }
            //                 Invest[i] = row;
            //             }
            //             break;
            //     }
            // }
            // /* for Invest*/
            //
            //
            // /* for BankAccount*/
            // for (var temp in $scope.finance) {
            //     switch (temp) {
            //         case 'BankAccount':
            //             var BankAccount = $scope.finance[temp];
            //             for (var i = 0; i < BankAccount.length; i++) {
            //                 var row = BankAccount[i];
            //                 row['BankAccountPrice'] = row['BankAccountPrice'].split(' ');
            //                 row['BankAccountPrice']['NumberValues'] = row['BankAccountPrice'][0].split('.');
            //                 switch (row['BankAccountPrice'][1]) {
            //                     case 'ML':
            //                         row['BankAccountPrice']['TranslatedUnit'] = 'میلیارد تومان';
            //                         break;
            //                     case 'MI':
            //                         row['BankAccountPrice']['TranslatedUnit'] = 'میلیون تومان';
            //                         break;
            //                     case 'HZ':
            //                         row['BankAccountPrice']['TranslatedUnit'] = 'هزار تومان';
            //                         break;
            //                     case 'SD':
            //                         row['BankAccountPrice']['TranslatedUnit'] = 'صد تومان';
            //                         break;
            //                 }
            //                 BankAccount[i] = row;
            //             }
            //             break;
            //     }
            // }
            // /* for BankAccount*/
            //
            // /* for CreditDebtor*/
            // for (var temp in $scope.finance) {
            //     switch (temp) {
            //         case 'CreditDebtor':
            //             var CreditDebtor = $scope.finance[temp];
            //             for (var i = 0; i < CreditDebtor.length; i++) {
            //                 var row = CreditDebtor[i];
            //                 row['DebotrPrice'] = row['DebotrPrice'].split(' ');
            //                 row['DebotrPrice']['NumberValues'] = row['DebotrPrice'][0].split('.');
            //                 switch (row['DebotrPrice'][1]) {
            //                     case 'ML':
            //                         row['DebotrPrice']['TranslatedUnit'] = 'میلیارد تومان';
            //                         break;
            //                     case 'MI':
            //                         row['DebotrPrice']['TranslatedUnit'] = 'میلیون تومان';
            //                         break;
            //                     case 'HZ':
            //                         row['DebotrPrice']['TranslatedUnit'] = 'هزار تومان';
            //                         break;
            //                     case 'SD':
            //                         row['DebotrPrice']['TranslatedUnit'] = 'صد تومان';
            //                         break;
            //                 }
            //                 CreditDebtor[i] = row;
            //             }
            //             break;
            //     }
            // }
            // for (var temp in $scope.finance) {
            //     switch (temp) {
            //         case 'CreditDebtor':
            //             var CreditDebtor = $scope.finance[temp];
            //             for (var i = 0; i < CreditDebtor.length; i++) {
            //                 var row = CreditDebtor[i];
            //                 row['CreditPrice'] = row['CreditPrice'].split(' ');
            //                 row['CreditPrice']['NumberValues'] = row['CreditPrice'][0].split('.');
            //                 switch (row['CreditPrice'][1]) {
            //                     case 'ML':
            //                         row['CreditPrice']['TranslatedUnit'] = 'میلیارد تومان';
            //                         break;
            //                     case 'MI':
            //                         row['CreditPrice']['TranslatedUnit'] = 'میلیون تومان';
            //                         break;
            //                     case 'HZ':
            //                         row['CreditPrice']['TranslatedUnit'] = 'هزار تومان';
            //                         break;
            //                     case 'SD':
            //                         row['CreditPrice']['TranslatedUnit'] = 'صد تومان';
            //                         break;
            //                 }
            //                 CreditDebtor[i] = row;
            //             }
            //             break;
            //     }
            // }
            // /* for CreditDebtor*/
            //
            //
            // /* for Goods*/
            // for (var temp in $scope.finance) {
            //     switch (temp) {
            //         case 'Goods':
            //             var Goods = $scope.finance[temp];
            //             for (var i = 0; i < Goods.length; i++) {
            //                 var row = Goods[i];
            //                 row['GoodsBuyTimePrice'] = row['GoodsBuyTimePrice'].split(' ');
            //                 row['GoodsBuyTimePrice']['NumberValues'] = row['GoodsBuyTimePrice'][0].split('.');
            //                 switch (row['GoodsBuyTimePrice'][1]) {
            //                     case 'ML':
            //                         row['GoodsBuyTimePrice']['TranslatedUnit'] = 'میلیارد تومان';
            //                         break;
            //                     case 'MI':
            //                         row['GoodsBuyTimePrice']['TranslatedUnit'] = 'میلیون تومان';
            //                         break;
            //                     case 'HZ':
            //                         row['GoodsBuyTimePrice']['TranslatedUnit'] = 'هزار تومان';
            //                         break;
            //                     case 'SD':
            //                         row['GoodsBuyTimePrice']['TranslatedUnit'] = 'صد تومان';
            //                         break;
            //                 }
            //                 Goods[i] = row;
            //             }
            //             break;
            //     }
            // }
            // for (var temp in $scope.finance) {
            //     switch (temp) {
            //         case 'Goods':
            //             var Goods = $scope.finance[temp];
            //             for (var i = 0; i < Goods.length; i++) {
            //                 var row = Goods[i];
            //                 row['GoodsNowTimePrice'] = row['GoodsNowTimePrice'].split(' ');
            //                 row['GoodsNowTimePrice']['NumberValues'] = row['GoodsNowTimePrice'][0].split('.');
            //                 switch (row['GoodsNowTimePrice'][1]) {
            //                     case 'ML':
            //                         row['GoodsNowTimePrice']['TranslatedUnit'] = 'میلیارد تومان';
            //                         break;
            //                     case 'MI':
            //                         row['GoodsNowTimePrice']['TranslatedUnit'] = 'میلیون تومان';
            //                         break;
            //                     case 'HZ':
            //                         row['GoodsNowTimePrice']['TranslatedUnit'] = 'هزار تومان';
            //                         break;
            //                     case 'SD':
            //                         row['GoodsNowTimePrice']['TranslatedUnit'] = 'صد تومان';
            //                         break;
            //                 }
            //                 Goods[i] = row;
            //             }
            //             break;
            //     }
            // }
            // /* for Goods*/
            //
            //
            // /* for Fee*/
            // for (var temp in $scope.finance) {
            //     switch (temp) {
            //         case 'Fee':
            //             var Fee = $scope.finance[temp];
            //             for (var i = 0; i < Fee.length; i++) {
            //                 var row = Fee[i];
            //                 row['FeeAverageInYear'] = row['FeeAverageInYear'].split(' ');
            //                 row['FeeAverageInYear']['NumberValues'] = row['FeeAverageInYear'][0].split('.');
            //                 switch (row['FeeAverageInYear'][1]) {
            //                     case 'ML':
            //                         row['FeeAverageInYear']['TranslatedUnit'] = 'میلیارد تومان';
            //                         break;
            //                     case 'MI':
            //                         row['FeeAverageInYear']['TranslatedUnit'] = 'میلیون تومان';
            //                         break;
            //                     case 'HZ':
            //                         row['FeeAverageInYear']['TranslatedUnit'] = 'هزار تومان';
            //                         break;
            //                     case 'SD':
            //                         row['FeeAverageInYear']['TranslatedUnit'] = 'صد تومان';
            //                         break;
            //                 }
            //                 Fee[i] = row;
            //             }
            //             break;
            //     }
            // }
            // /* for Fee*/
            //
            //
            // /* for Income*/
            // for (var temp in $scope.finance) {
            //     switch (temp) {
            //         case 'Income':
            //             var Income = $scope.finance[temp];
            //             for (var i = 0; i < Income.length; i++) {
            //                 var row = Income[i];
            //                 row['AverageMonthIncome'] = row['AverageMonthIncome'].split(' ');
            //                 row['AverageMonthIncome']['NumberValues'] = row['AverageMonthIncome'][0].split('.');
            //                 switch (row['AverageMonthIncome'][1]) {
            //                     case 'ML':
            //                         row['AverageMonthIncome']['TranslatedUnit'] = 'میلیارد تومان';
            //                         break;
            //                     case 'MI':
            //                         row['AverageMonthIncome']['TranslatedUnit'] = 'میلیون تومان';
            //                         break;
            //                     case 'HZ':
            //                         row['AverageMonthIncome']['TranslatedUnit'] = 'هزار تومان';
            //                         break;
            //                     case 'SD':
            //                         row['AverageMonthIncome']['TranslatedUnit'] = 'صد تومان';
            //                         break;
            //                 }
            //                 Income[i] = row;
            //             }
            //             break;
            //     }
            // }
            // /* for Income*/


            /* for Election*/
            // for (var temp in $scope.finance) {
            //     switch (temp) {
            //         case 'Election':
            //             var Election = $scope.finance[temp];
            //             for (var i = 0; i < Election.length; i++) {
            //                 var row = Election[i];
            //                 row['ElectionPlacePrice'] = row['ElectionPlacePrice'].split(' ');
            //                 row['ElectionPlacePrice']['NumberValues'] = row['ElectionPlacePrice'][0].split('.');
            //                 switch (row['ElectionPlacePrice'][1]) {
            //                     case 'ML':
            //                         row['ElectionPlacePrice']['TranslatedUnit'] = 'میلیارد تومان';
            //                         break;
            //                     case 'MI':
            //                         row['ElectionPlacePrice']['TranslatedUnit'] = 'میلیون تومان';
            //                         break;
            //                     case 'HZ':
            //                         row['ElectionPlacePrice']['TranslatedUnit'] = 'هزار تومان';
            //                         break;
            //                     case 'SD':
            //                         row['ElectionPlacePrice']['TranslatedUnit'] = 'صد تومان';
            //                         break;
            //                 }
            //                 Election[i] = row;
            //             }
            //             break;
            //     }
            // }
            // for (var temp in $scope.finance) {
            //     switch (temp) {
            //         case 'Election':
            //             var Election = $scope.finance[temp];
            //             for (var i = 0; i < Election.length; i++) {
            //                 var row = Election[i];
            //                 row['ElectionFlockPrice'] = row['ElectionFlockPrice'].split(' ');
            //                 row['ElectionFlockPrice']['NumberValues'] = row['ElectionFlockPrice'][0].split('.');
            //                 switch (row['ElectionFlockPrice'][1]) {
            //                     case 'ML':
            //                         row['ElectionFlockPrice']['TranslatedUnit'] = 'میلیارد تومان';
            //                         break;
            //                     case 'MI':
            //                         row['ElectionFlockPrice']['TranslatedUnit'] = 'میلیون تومان';
            //                         break;
            //                     case 'HZ':
            //                         row['ElectionFlockPrice']['TranslatedUnit'] = 'هزار تومان';
            //                         break;
            //                     case 'SD':
            //                         row['ElectionFlockPrice']['TranslatedUnit'] = 'صد تومان';
            //                         break;
            //                 }
            //                 Election[i] = row;
            //             }
            //             break;
            //     }
            // }
            // for (var temp in $scope.finance) {
            //     switch (temp) {
            //         case 'Election':
            //             var Election = $scope.finance[temp];
            //             for (var i = 0; i < Election.length; i++) {
            //                 var row = Election[i];
            //                 row['ElectionAdvertisePrice'] = row['ElectionAdvertisePrice'].split(' ');
            //                 row['ElectionAdvertisePrice']['NumberValues'] = row['ElectionAdvertisePrice'][0].split('.');
            //                 switch (row['ElectionAdvertisePrice'][1]) {
            //                     case 'ML':
            //                         row['ElectionAdvertisePrice']['TranslatedUnit'] = 'میلیارد تومان';
            //                         break;
            //                     case 'MI':
            //                         row['ElectionAdvertisePrice']['TranslatedUnit'] = 'میلیون تومان';
            //                         break;
            //                     case 'HZ':
            //                         row['ElectionAdvertisePrice']['TranslatedUnit'] = 'هزار تومان';
            //                         break;
            //                     case 'SD':
            //                         row['ElectionAdvertisePrice']['TranslatedUnit'] = 'صد تومان';
            //                         break;
            //                 }
            //                 Election[i] = row;
            //             }
            //             break;
            //     }
            // }
            // for (var temp in $scope.finance) {
            //     switch (temp) {
            //         case 'Election':
            //             var Election = $scope.finance[temp];
            //             for (var i = 0; i < Election.length; i++) {
            //                 var row = Election[i];
            //                 row['ElectionStaffPrice'] = row['ElectionStaffPrice'].split(' ');
            //                 row['ElectionStaffPrice']['NumberValues'] = row['ElectionStaffPrice'][0].split('.');
            //                 switch (row['ElectionStaffPrice'][1]) {
            //                     case 'ML':
            //                         row['ElectionStaffPrice']['TranslatedUnit'] = 'میلیارد تومان';
            //                         break;
            //                     case 'MI':
            //                         row['ElectionStaffPrice']['TranslatedUnit'] = 'میلیون تومان';
            //                         break;
            //                     case 'HZ':
            //                         row['ElectionStaffPrice']['TranslatedUnit'] = 'هزار تومان';
            //                         break;
            //                     case 'SD':
            //                         row['ElectionStaffPrice']['TranslatedUnit'] = 'صد تومان';
            //                         break;
            //                 }
            //                 Election[i] = row;
            //             }
            //             break;
            //     }
            // }
            // for (var temp in $scope.finance) {
            //     switch (temp) {
            //         case 'Election':
            //             var Election = $scope.finance[temp];
            //             for (var i = 0; i < Election.length; i++) {
            //                 var row = Election[i];
            //                 row['ElectionAllPrice'] = row['ElectionAllPrice'].split(' ');
            //                 row['ElectionAllPrice']['NumberValues'] = row['ElectionAllPrice'][0].split('.');
            //                 switch (row['ElectionAllPrice'][1]) {
            //                     case 'ML':
            //                         row['ElectionAllPrice']['TranslatedUnit'] = 'میلیارد تومان';
            //                         break;
            //                     case 'MI':
            //                         row['ElectionAllPrice']['TranslatedUnit'] = 'میلیون تومان';
            //                         break;
            //                     case 'HZ':
            //                         row['ElectionAllPrice']['TranslatedUnit'] = 'هزار تومان';
            //                         break;
            //                     case 'SD':
            //                         row['ElectionAllPrice']['TranslatedUnit'] = 'صد تومان';
            //                         break;
            //                 }
            //                 Election[i] = row;
            //             }
            //             break;
            //     }
            // }
            /* for Election*/

            $scope.finance = $scope.finance;
            var BankAccountPricePlaceHolder = ['BankAccountPrice'];
            var CreditDebtorPricePlaceHolder = ['DebotrPrice', 'CreditPrice'];
            var ElectionPricePlaceHolder = ['ElectionPlacePrice', 'ElectionFlockPrice', 'ElectionAdvertisePrice', 'ElectionStaffPrice', 'ElectionAllPrice'];
            var FeePricePlaceHolder = ['FeeAverageInYear'];
            var GoodsPricePlaceHolder = ['GoodsBuyTimePrice', 'GoodsNowTimePrice'];
            var IncomePricePlaceHolder = ['AverageMonthIncome'];
            var InvestPricePlaceHolder = ['InvestBuyTimePrice', 'InvestNowTimePrice'];
            var RealEStatesPricePlaceHolder = ['RealEstateBuyTimePrice', 'RealEstateNowTimePrice'];
            var VehiclePricePlaceHolder = ['VehicleBuyTimePrice', 'VehicleNowTimePrice'];

            function someFn(data) {
                data = $scope.finance;
                for (var temp in data) {
                    var innerTemp = $scope.finance[temp];
                    for (var i = 0; i < innerTemp.length; i++) {
                        var row = innerTemp[i];
                        row[BankAccountPricePlaceHolder] = row[BankAccountPricePlaceHolder].split(' ');
                        row[BankAccountPricePlaceHolder]['NumberValues'] = row[BankAccountPricePlaceHolder][0].split('.');
                        switch (row[BankAccountPricePlaceHolder][1]) {
                            case 'ML':
                                row[BankAccountPricePlaceHolder]['TranslatedUnit'] = 'میلیارد تومان';
                                break;
                            case 'MI':
                                row[BankAccountPricePlaceHolder]['TranslatedUnit'] = 'میلیون تومان';
                                break;
                            case 'HZ':
                                row[BankAccountPricePlaceHolder]['TranslatedUnit'] = 'هزار تومان';
                                break;
                            case 'SD':
                                row[BankAccountPricePlaceHolder]['TranslatedUnit'] = 'صد تومان';
                                break;
                        }
                        innerTemp[i] = row;
                    }
                }
            }

            someFn();

        });
    });
</script>