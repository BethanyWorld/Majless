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
                                             </form>
                                            <div id="unique-form"
                                                class="hidden list-group-item animated flipInX
                                                    extra-padding-top-25 odd-background-color-div">

                                                <span class="remove-form fa fa-times"></span>
                                                <div class="list-group-Grade col-md-12 col-xs-12 padding-0">
                                                    <div class="col-md-4 col-sm-12 col-xs-12 RightFloat">
                                                        <label for="inputCandidateGrade">
                                                            مقطع
                                                            <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                        </label>
                                                        <select class="form-control form-control-lg"
                                                                data-name="inputCandidateGrade">
                                                            <option value="1">--انتخاب کنید</option>
                                                            <option value="2">زیر دیپلم</option>
                                                            <option value="3"> دیپلم</option>
                                                            <option value="4">کاردانی</option>
                                                            <option value="5">کارشناسی</option>
                                                            <option value="6">کارشناسی ارشد</option>
                                                            <option value="7">دکترای حرفه ای</option>
                                                            <option value="8">دکترای تخصصی</option>
                                                            <option value="9">فوق دکتری</option>
                                                            <option value="10">حوزه سطح یک</option>
                                                            <option value="11">حوزه سطح دو</option>
                                                            <option value="12">حوزه سطح سه</option>
                                                            <option value="13">حوزه سطح چهار</option>
                                                        </select>
                                                        <label class="GradeNotify" id="GradeNotify">
                                                            حداقل مقطع تحصیلی مورد نیاز برای نامزدی انتخابات , کارشناسی
                                                            ارشد یا
                                                            معادل آن می باشد
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12 col-xs-12 RightFloat CandidateLevelType">
                                                        <label for="inputCandidateUniversityLevelType">
                                                            نوع مرکز آموزشی
                                                            <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                        </label>
                                                        <select class="form-control form-control-lg"
                                                                data-name="inputCandidateUniversityLevelType">
                                                            <option>--انتخاب کنید</option>
                                                            <option value="PayamNooruniversityLevelType">پیام نور
                                                            </option>
                                                            <option value="SeminaryLevelType">حوزه علمیه</option>
                                                            <option value="AbroadLevelType">خارج از کشور</option>
                                                            <option value="AzadUniversityLevelType">دانشگاه آزاد
                                                            </option>
                                                            <option value="GovernmentdailyLevelType">دولتی-روزانه
                                                            </option>
                                                            <option value="GovernmentnightLevelType">دولتی-شبانه
                                                            </option>
                                                            <option value="VirtualgovernmentLevelType">دولتی-مجازی
                                                            </option>
                                                            <option value="GovernmentCampus">دولتی-پردیس خودگردان
                                                            </option>
                                                            <option value="AppliedScienceLevelType">علمی کاربردی
                                                            </option>
                                                            <option value="Non-profitLevelType">غیر انتفاعی</option>
                                                            <option value="Others">سایر</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12 col-xs-12 RightFloat CandidateeduMajor">
                                                        <label for="inputCandidateSchoolMajor">
                                                            رشته تحصیلی
                                                            <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                        </label>
                                                        <select class="form-control form-control-lg"
                                                                data-name="inputCandidateSchoolMajor">
                                                            <option>--انتخاب کنید</option>
                                                            <option value="PayamNooruniversityLevelType">انسانی</option>
                                                            <option value="SeminaryLevelType">تجربی</option>
                                                            <option value="AbroadLevelType">ریاضی</option>
                                                            <option value="AzadUniversityLevelType">فنی</option>
                                                            <option value="GovernmentdailyLevelType">معارف اسلامی
                                                            </option>
                                                            <option value="GovernmentnightLevelType">کارودانش</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 col-xs-12 form-group RightFloat CandidateUniversityName">
                                                        <label class="active"
                                                               for="inputCandidateUniversityName">

                                                            <span class="Change-UniversityName"> نام دانشگاه</span>

                                                            <span class="text-danger">
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
                                                        <label for="inputCandidateDepartment">
                                                            گروه تحصیلی
                                                            <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                        </label>
                                                        <select class="form-control form-control-lg"
                                                                data-name="inputCandidateDepartment">
                                                            <option>--انتخاب کنید</option>
                                                            <option value="VeterinaryMedicineDepartment">دامپزشکی
                                                            </option>
                                                            <option value="foreignlanguagesDepartment">زبان های خارجی
                                                            </option>
                                                            <option value="HumanitiesDepartment">علوم انسانی</option>
                                                            <option value="ScienceDepartment">علوم پایه</option>
                                                            <option value="TechnicalEngineeringDepartment">فنی مهندسی
                                                            </option>
                                                            <option value="ArtDepartment">هنر</option>
                                                            <option value="medicalDepartment">پزشکی</option>
                                                            <option value="AgricultureNaturalResourcesDepartment">
                                                                کشاورزس و
                                                                منابع
                                                                طبیعی
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12 col-xs-12 RightFloat CandidateMajor">
                                                        <label for="inputCandidateMajor">
                                                            عنوان رشته تحصیلی
                                                            <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                        </label>
                                                        <select class="form-control form-control-lg"
                                                                data- name="inputCandidateMajor">
                                                            <!--                                                    <option></option>-->
                                                            <!--                                                    <option value="VeterinaryMedicineDepartment">دامپزشکی</option>-->
                                                            <!--                                                    <option value="foreignlanguagesDepartment">زبان های خارجی</option>-->
                                                            <!--                                                    <option value="HumanitiesDepartment">علوم انسانی</option>-->
                                                            <!--                                                    <option value="ScienceDepartment">علوم پایه</option>-->
                                                            <!--                                                    <option value="TechnicalEngineeringDepartment">فنی مهندسی</option>-->
                                                            <!--                                                    <option value="ArtDepartment">هنر</option>-->
                                                            <!--                                                    <option value="medicalDepartment">پزشکی</option>-->
                                                            <!--                                                    <option value="AgricultureNaturalResourcesDepartment">کشاورزس و-->
                                                            <!--                                                        منابع-->
                                                            <!--                                                        طبیعی-->
                                                            <!--                                                    </option>-->
                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-md-12 col-xs-12 Radio-Buttons">
                                                    <div class="radio Radio-Display">
                                                        <input data-name="radio" type="radio">
                                                        <label for="radio-1" class="radio-label">دانشجو</label>
                                                    </div>
                                                    <div class="radio Radio-Display">
                                                        <input data-name="radio" type="radio" checked>
                                                        <label for="radio-2" class="radio-label">فارغ التحصیل</label>
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

            </div>
            <div class="LeftPaneAction">
                <div class="row form-group">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <button class="btn btn-block btn-lg waves-effect CommonButtons" href="">
                            ثبت و ادامه
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>