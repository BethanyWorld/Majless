<?php $_DIR = base_url('assets/ui/v3/'); ?>
<div class="container container-wrapper" style="background: none;">
    <?php echo $resumeSidebar; ?>
    <div class="col-md-9 col-xs-12 pull-right">
        <div class="LeftPanel">
            <div class="LeftPanelcontent">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="panel panel-default LeftPanelShadow">
                            <div class="panel-heading">
                                سوابق سیاسی
                                <span class="add-form fa fa-plus"></span>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-xs-12 padding-0">
                                        <div class="list-group-item ul-background-color-hr">
                                            <form id="form">
                                                <span class="skill-divider"></span>
                                            </form>
                                            <div id="unique-form"
                                                 class="hidden list-group-item animated flipInX extra-padding-top-25 odd-background-color-div">
                                                <span class="remove-form fa fa-times"></span>
                                                <div class="list-group-Grade col-md-12 col-xs-12 padding-0">
                                                    <!--for Format-->
                                                    <div class="col-md-12 col-xs-12 margin-b-25">
                                                        <div class="col-md-4 col-sm-12 col-xs-12 RightFloat">
                                                            <label for="inputCandidateActivityType">قالب فعالیت
                                                                :</label>
                                                            <select class="form-control form-control-lg"
                                                                    data-name="inputCandidateActivityType">
                                                                <option value="" selected>--انتخاب کنید--</option>
                                                                <option value="Group">حذب</option>
                                                                <option value="CandidatesCampaign">ستاد های انتخاباتی
                                                                    نامزدها
                                                                </option>
                                                                <option value="SupervisoryBoard">هئیت نظارت و اجرایی
                                                                    ستاد انتخابات
                                                                </option>
                                                                <option value="Media">رسانه</option>
                                                                <option value="Others">سایر</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-6 col-sm-12 col-xs-12 RightFloat CollectionName">
                                                            <label for="inputCandidateActivityTypeOtherOrganizationTitle"
                                                                   class="Lable">نام مجموعه</label>
                                                            <input data-name="inputCandidateActivityTypeOtherOrganizationTitle"
                                                                   type="text"
                                                                   required>
                                                        </div>
                                                    </div>
                                                    <!--for Format-->

                                                    
                                                    <!--for election-->
                                                    <div class="col-md-12 col-xs-12 RightFloat margin-b-25 ElectionType">
                                                        <div class="col-md-4 col-sm-12 col-xs-12 RightFloat">
                                                            <label for="inputCandidateElectionType"> انتخابات :</label>
                                                            <select class="form-control form-control-lg"
                                                                    data-name="inputCandidateElectionType">
                                                                <option value="" selected>--انتخاب کنید--</option>
                                                                <option value="President" >ریاست جمهوری</option>
                                                                <option value="Parliament">مجلس</option>
                                                                <option value="CouncilExperts">مجلس خبرگان</option>
                                                                <option value="CityCouncil">شورای شهر</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-4 col-sm-12 col-xs-12 RightFloat ElectionPeriod">
                                                            <label for="inputCandidateElectionPeriod"> دوره انتخابات
                                                                :</label>
                                                            <select class="form-control form-control-lg"
                                                                    data-name="inputCandidateElectionPeriod">
                                                                <option value="" selected>--انتخاب کنید--</option>
                                                                <option value="">دوره اول -1361</option>
                                                                <option value="">دوره دوم - 1369</option>
                                                                <option value="">دوره سوم 1377</option>
                                                                <option value="">دوره چهارم - 1385</option>
                                                                <option value="">دوره پنجم - 1394</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-4 col-sm-12 col-xs-12 ttt RightFloat CandidateName">
                                                            <label for="inputCandidateElectionListName" class="Lable">نام
                                                                نامزد / لیست</label>
                                                            <input data-name="inputCandidateElectionListName"
                                                                   type="text" required>
                                                        </div>
                                                    </div>
                                                    <!--for election-->

                                                    <!--for Cooperation-->
                                                    <div class="col-md-12 col-xs-12 RightFloat margin-b-25  ttt Partnership-title">
                                                        <div class="col-md-6 col-sm-12 col-xs-12 RightFloat">
                                                            <label for="inputCandidateHeadquarterActivityTitle"
                                                                   class="Lable">عنوان همکاری :</label>
                                                            <select class="form-control form-control-lg"
                                                                    data-name="inputCandidateHeadquarterActivityTitle">
                                                                <option value="" selected>--انتخاب کنید--</option>
                                                                <option value="SupervisoryBoard">هیئت نطارت شورای
                                                                    نگهبان
                                                                </option>
                                                                <option value="ExecutiveCommittee">هیئت اجرایی وزارت
                                                                    کشور
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!--for Cooperation-->

                                                    <!--for Media-->
                                                    <div class="col-md-12 col-xs-12 RightFloat margin-b-25  ttt Media">
                                                        <div class="col-md-6 col-sm-12 col-xs-12 RightFloat">
                                                            <label for="inputCandidateMediaType" class="Lable">قالب
                                                                رسانه :</label>
                                                            <select class="form-control form-control-lg"
                                                                    data-name="inputCandidateMediaType">
                                                                <option value="" selected>--انتخاب کنید--</option>
                                                                <option value="Voice">صدا و سیما</option>
                                                                <option value="Journals">نشریات</option>
                                                                <option value="NewSite">سایت خبری</option>
                                                                <option value="SocialNetwork">شبکه اجتماعی</option>
                                                                <option value="Others">سایر</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12 col-xs-12 ttt RightFloat media-template-title">
                                                            <label for="inputCandidateMediaTypeTitle" class="Lable">عنوان قالب رسانه</label>
                                                            <input data-name="inputCandidateMediaTypeTitle" type="text"
                                                                   required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xs-12 RightFloat margin-b-25  ttt MediaName">
                                                        <div class="col-md-6 col-sm-12 col-xs-12 RightFloat">
                                                            <label for="inputCandidateMediaTitle" class="Lable"> نام
                                                                رسانه:</label>
                                                            <input data-name="inputCandidateMediaTitle" type="text">
                                                        </div>
                                                        <div class="col-md-6 col-sm-12 col-xs-12 RightFloat Media-Activity">
                                                            <label for="inputCandidateMediaActivityType" class="Lable">
                                                                نوع فعالیت :</label>
                                                            <input data-name="inputCandidateMediaActivityType"
                                                                   type="text">
                                                        </div>
                                                    </div>
                                                    <!--for Media-->

                                                    <!--for Responsibility-->
                                                    <div class="col-md-12 col-xs-12 RightFloat margin-b-25  ttt">
                                                        <div class="col-md-6 col-sm-12 col-xs-12 RightFloat">
                                                            <label for="inputCandidateResponsibility" class="Lable">مسئولیت</label>
                                                            <input data-name="inputCandidateResponsibility" type="text"
                                                                   required>
                                                        </div>

                                                        <div class="col-md-6 col-sm-12 col-xs-12 MemberShip">
                                                            <label for="inputCandidateMemberShip">عضویت :</label>
                                                            <select class="form-control form-control-lg"
                                                                    data-name="inputCandidateMemberShip">
                                                                <option value="" selected>--انتخاب کنید--</option>
                                                                <option value="Official">رسمی</option>
                                                                <option value="Voluntary">داوطلبانه</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!--for Responsibility-->

                                                    <!--for Media-->
                                                    <div class="col-md-12 col-xs-12 Media-Date">
                                                        <div class="col-md-6 col-xs-12 RightFloat">
                                                            <label for="inputCandidateStartJobMonth">آغاز همکاری</label>
                                                            <div class="row">
                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                    <select class="form-control form-control-lg city-select"
                                                                            name="inputCandidateMediaStartMonth"
                                                                            id="inputCandidateMediaStartMonth">
                                                                        <?php foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) { ?>
                                                                            <option
                                                                                    value="<?php echo $key; ?>">
                                                                                <?php echo $value; ?>
                                                                            </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                    <select class="form-control form-control-lg city-select"
                                                                            name="inputCandidateMediaStartYear"
                                                                            id="inputCandidateMediaStartYear">
                                                                        <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                            <option
                                                                                    value="<?php echo $i; ?>">
                                                                                <?php echo $i; ?>
                                                                            </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-xs-12 RightFloat">
                                                            <label for="inputCandidateStartJobMonth">
                                                                پایان همکاری
                                                            </label>
                                                            <div class="row">
                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                    <select class="form-control form-control-lg city-select"
                                                                            name="inputCandidateMediaEndMonth"
                                                                            id="inputCandidateMediaEndMonth">
                                                                        <?php foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) { ?>
                                                                            <option
                                                                                    value="<?php echo $key; ?>">
                                                                                <?php echo $value; ?>
                                                                            </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                    <select class="form-control form-control-lg city-select"
                                                                            name="inputCandidateMediaEndYear"
                                                                            id="inputCandidateMediaEndYear">
                                                                        <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                            <option
                                                                                    value="<?php echo $i; ?>">
                                                                                <?php echo $i; ?>
                                                                            </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--for Media-->

                                                    <!--for Description-->
                                                    <div class="col-md-12 col-xs-12 RightFloat margin-b-25 ttt">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 RightFloat">
                                                            <label for="inputCandidateActivityDescription"
                                                                   class="Lable">توضیحات</label>
                                                            <input data-name="inputCandidateActivityDescription"
                                                                   type="text" required>
                                                        </div>
                                                    </div>
                                                    <!--for Description-->

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
                        <button class="btn btn-block btn-lg waves-effect CommonButtons next-step"
                                id="buttonUpdatePoliticBackground">
                            ثبت و ادامه
                        </button>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <button class="btn btn-block btn-lg waves-effect CommonButtons"
                                id="buttonUpdatePoliticBackgroundAndRedirect">
                            ثبت
                        </button>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 prev-step">
                        <a href="<?php echo base_url('Profile/socialCulturalBackground'); ?>">
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