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
                                        <hr>
                                        <div class="list-group-item ul-background-color-hr">
                                            <form id="form">
                                                <span class="skill-divider"></span>
                                                <?php foreach ($userInfo['politicBackground'] as $item) { ?>
                                                    <div id="<?php echo md5(rand(1000 , 9999)); ?>"
                                                         class="list-group-item extra-padding-top-25 odd-background-color-div">
                                                        <span class="remove-form fa fa-times"></span>
                                                        <div class="list-group-Grade col-md-12 col-xs-12 padding-0">
                                                            <!--for Format-->
                                                            <div class="col-md-12 col-xs-12 margin-b-25">
                                                                <div class="col-md-4 col-sm-12 col-xs-12 RightFloat">
                                                                    <label for="inputCandidateActivityType">قالب فعالیت :</label>
                                                                    <select class="form-control form-control-lg"
                                                                            name="inputCandidateActivityType">
                                                                        <option value="" selected>--انتخاب کنید--</option>
                                                                        <?php foreach ($EnumResumeProfile['CandidatePoliticActivityType'] as $key => $value) { ?>
                                                                            <option
                                                                                <?php setOptionSelected($item['CandidateActivityType'], $key); ?>
                                                                                    value="<?php echo $key; ?>">
                                                                                <?php echo $value; ?>
                                                                            </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>

                                                                <div class="col-md-6 col-sm-12 col-xs-12 RightFloat input-style CollectionName">
                                                                    <label for="inputCandidateActivityTypeOtherOrganizationTitle">نام مجموعه</label>
                                                                    <input name="inputCandidateActivityTypeOtherOrganizationTitle"
                                                                        <?php setInputValue($item['CandidateActivityTypeOtherOrganizationTitle']); ?>
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
                                                                            data-selected-major="<?php echo $item['CandidateElectionPeriod']; ?>"
                                                                            name="inputCandidateElectionType">
                                                                        <?php foreach ($EnumResumeProfile['CandidatePoliticElectionType'] as $key => $value) { ?>
                                                                            <option
                                                                                <?php setOptionSelected($item['CandidateElectionType'], $key); ?>
                                                                                    value="<?php echo $key; ?>">
                                                                                <?php echo $value; ?>
                                                                            </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>

                                                                <div class="col-md-4 col-sm-12 col-xs-12 RightFloat ElectionPeriod">
                                                                    <label for="inputCandidateElectionPeriod"> دوره انتخابات :</label>
                                                                    <select class="form-control form-control-lg" name="inputCandidateElectionPeriod">
                                                                        <option value="" selected>--انتخاب کنید--</option>
                                                                    </select>
                                                                </div>

                                                                <div class="col-md-4 col-sm-12 col-xs-12 input-style RightFloat CandidateName">
                                                                    <label for="inputCandidateElectionListName">نام نامزد / لیست</label>
                                                                    <input name="inputCandidateElectionListName"
                                                                        <?php setInputValue($item['CandidateElectionListName']); ?>
                                                                           type="text" required>
                                                                </div>
                                                            </div>
                                                            <!--for election-->

                                                            <!--for Cooperation-->
                                                            <div class="col-md-12 col-xs-12 RightFloat margin-b-25  input-style Partnership-title">
                                                                <div class="col-md-6 col-sm-12 col-xs-12 RightFloat">
                                                                    <label for="inputCandidateHeadquarterActivityTitle">عنوان همکاری :</label>
                                                                    <select class="form-control form-control-lg" name="inputCandidateHeadquarterActivityTitle">
                                                                        <option value="" selected>--انتخاب کنید--</option>
                                                                        <?php foreach ($EnumResumeProfile['CandidateHeadquarterActivityTitle'] as $key => $value) { ?>
                                                                            <option <?php setOptionSelected($item['CandidateHeadquarterActivityTitle'], $key); ?>
                                                                                    value="<?php echo $key; ?>">
                                                                                <?php echo $value; ?>
                                                                            </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--for Cooperation-->

                                                            <!--for Media-->
                                                            <div class="col-md-12 col-xs-12 RightFloat margin-b-25  input-style Media">
                                                                <div class="col-md-6 col-sm-12 col-xs-12 RightFloat">
                                                                    <label for="inputCandidateMediaType">قالب رسانه :</label>
                                                                    <select class="form-control form-control-lg" name="inputCandidateMediaType">
                                                                        <option value="" selected>--انتخاب کنید--</option>
                                                                        <?php foreach ($EnumResumeProfile['CandidateMediaType'] as $key => $value) { ?>
                                                                            <option <?php setOptionSelected($item['CandidateMediaType'], $key); ?>
                                                                                    value="<?php echo $key; ?>">
                                                                                <?php echo $value; ?>
                                                                            </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-6 col-sm-12 col-xs-12 input-style RightFloat media-template-title">
                                                                    <label for="inputCandidateMediaTypeTitle">عنوان قالب رسانه</label>
                                                                    <input name="inputCandidateMediaTypeTitle"
                                                                           type="text"
                                                                        <?php setInputValue($item['CandidateMediaTypeTitle']); ?>
                                                                           required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-xs-12 RightFloat margin-b-25 input-style MediaName">
                                                                <div class="col-md-6 col-sm-12 col-xs-12 RightFloat">
                                                                    <label for="inputCandidateMediaTitle"> نام رسانه:</label>
                                                                    <input name="inputCandidateMediaTitle" type="text"
                                                                        <?php setInputValue($item['CandidateMediaTitle']); ?>
                                                                           required>
                                                                </div>
                                                                <div class="col-md-6 col-sm-12 col-xs-12 RightFloat Media-Activity input-style">
                                                                    <label for="inputCandidateMediaActivityType">نوع فعالیت :</label>
                                                                    <input name="inputCandidateMediaActivityType"
                                                                           type="text"
                                                                        <?php setInputValue($item['CandidateMediaActivityType']); ?>
                                                                           required>
                                                                </div>
                                                            </div>
                                                            <!--for Media-->

                                                            <!--for Responsibility-->
                                                            <div class="col-md-12 col-xs-12 RightFloat margin-b-25  input-style">
                                                                <div class="col-md-6 col-sm-12 col-xs-12 RightFloat">
                                                                    <label for="inputCandidateResponsibility">مسئولیت</label>
                                                                    <input name="inputCandidateResponsibility" type="text"
                                                                        <?php setInputValue($item['CandidateResponsibility']); ?>
                                                                           required>
                                                                </div>

                                                                <div class="col-md-6 col-sm-12 col-xs-12 MemberShip">
                                                                    <label for="inputCandidateMemberShip">عضویت :</label>
                                                                    <select class="form-control form-control-lg"
                                                                            name="inputCandidateMemberShip">
                                                                        <option value="" selected>--انتخاب کنید--</option>
                                                                        <?php foreach ($EnumResumeProfile['CandidateMemberShipType'] as $key => $value) { ?>
                                                                            <option <?php setOptionSelected($item['CandidateMemberShip'], $key); ?>
                                                                                    value="<?php echo $key; ?>">
                                                                                <?php echo $value; ?>
                                                                            </option>
                                                                        <?php } ?>
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
                                                                                    <option <?php setOptionSelected($item['CandidateMediaStartMonth'], $key); ?>
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
                                                                                        <?php setOptionSelected($item['CandidateMediaStartYear'], $i); ?>
                                                                                            value="<?php echo $i; ?>">
                                                                                        <?php echo $i; ?>
                                                                                    </option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-xs-12 RightFloat">
                                                                    <label for="inputCandidateStartJobMonth">پایان همکاری</label>
                                                                    <div class="row">
                                                                        <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <select class="form-control form-control-lg city-select"
                                                                                    name="inputCandidateMediaEndMonth"
                                                                                    id="inputCandidateMediaEndMonth">
                                                                                <?php foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) { ?>
                                                                                    <option <?php setOptionSelected($item['CandidateMediaEndMonth'], $key); ?>
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
                                                                                    <option <?php setOptionSelected($item['CandidateMediaEndYear'], $i); ?> value="<?php echo $i; ?>">
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
                                                            <div class="col-md-12 col-xs-12 RightFloat margin-b-25 input-style">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 RightFloat">
                                                                    <label for="inputCandidateActivityDescription">توضیحات</label>
                                                                    <input name="inputCandidateActivityDescription"
                                                                        <?php setInputValue($item['CandidateActivityDescription']); ?>
                                                                           type="text" />
                                                                </div>
                                                            </div>
                                                            <!--for Description-->
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </form>
                                            <div id="unique-form"
                                                 class="hidden list-group-item animated flipInX extra-padding-top-25 odd-background-color-div">
                                                <span class="remove-form fa fa-times"></span>
                                                <div class="list-group-Grade col-md-12 col-xs-12 padding-0">
                                                    <!--for Format-->
                                                    <div class="col-md-12 col-xs-12 margin-b-25">
                                                        <div class="col-md-4 col-sm-12 col-xs-12 RightFloat">
                                                            <label for="inputCandidateActivityType">قالب فعالیت :</label>
                                                            <select class="form-control form-control-lg"
                                                                    data-name="inputCandidateActivityType">
                                                                <option value="" selected>--انتخاب کنید--</option>
                                                                <?php foreach ($EnumResumeProfile['CandidatePoliticActivityType'] as $key => $value) { ?>
                                                                    <option value="<?php echo $key; ?>">
                                                                        <?php echo $value; ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-6 col-sm-12 col-xs-12 RightFloat input-style CollectionName">
                                                            <label for="inputCandidateActivityTypeOtherOrganizationTitle">نام مجموعه</label>
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
                                                                <?php foreach ($EnumResumeProfile['CandidatePoliticElectionType'] as $key => $value) { ?>
                                                                    <option value="<?php echo $key; ?>">
                                                                        <?php echo $value; ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-4 col-sm-12 col-xs-12 RightFloat ElectionPeriod">
                                                            <label for="inputCandidateElectionPeriod"> دوره انتخابات :</label>
                                                            <select class="form-control form-control-lg"
                                                                    data-name="inputCandidateElectionPeriod">
                                                                <option value="" selected>--انتخاب کنید--</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-4 col-sm-12 col-xs-12 input-style RightFloat CandidateName">
                                                            <label for="inputCandidateElectionListName">نام
                                                                نامزد / لیست</label>
                                                            <input data-name="inputCandidateElectionListName"
                                                                   type="text" required>
                                                        </div>
                                                    </div>
                                                    <!--for election-->

                                                    <!--for Cooperation-->
                                                    <div class="col-md-12 col-xs-12 RightFloat margin-b-25  input-style Partnership-title">
                                                        <div class="col-md-6 col-sm-12 col-xs-12 RightFloat">
                                                            <label for="inputCandidateHeadquarterActivityTitle">عنوان همکاری :</label>
                                                            <select class="form-control form-control-lg" data-name="inputCandidateHeadquarterActivityTitle">
                                                                <option value="" selected>--انتخاب کنید--</option>
                                                                <?php foreach ($EnumResumeProfile['CandidateHeadquarterActivityTitle'] as $key => $value) { ?>
                                                                    <option value="<?php echo $key; ?>">
                                                                        <?php echo $value; ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!--for Cooperation-->

                                                    <!--for Media-->
                                                    <div class="col-md-12 col-xs-12 RightFloat margin-b-25  input-style Media">
                                                        <div class="col-md-6 col-sm-12 col-xs-12 RightFloat">
                                                            <label for="inputCandidateMediaType">قالب رسانه :</label>
                                                            <select class="form-control form-control-lg"
                                                                    data-name="inputCandidateMediaType">
                                                                <option value="" selected>--انتخاب کنید--</option>
                                                                <?php foreach ($EnumResumeProfile['CandidateMediaType'] as $key => $value) { ?>
                                                                    <option value="<?php echo $key; ?>">
                                                                        <?php echo $value; ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12 col-xs-12 input-style RightFloat media-template-title">
                                                            <label for="inputCandidateMediaTypeTitle">عنوان قالب رسانه</label>
                                                            <input data-name="inputCandidateMediaTypeTitle" type="text"
                                                                   required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xs-12 RightFloat margin-b-25 input-style MediaName">
                                                        <div class="col-md-6 col-sm-12 col-xs-12 RightFloat">
                                                            <label for="inputCandidateMediaTitle"> نام رسانه:</label>
                                                            <input data-name="inputCandidateMediaTitle" type="text" required>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12 col-xs-12 RightFloat Media-Activity input-style">
                                                            <label for="inputCandidateMediaActivityType">نوع فعالیت :</label>
                                                            <input data-name="inputCandidateMediaActivityType"
                                                                   type="text" required>
                                                        </div>
                                                    </div>
                                                    <!--for Media-->

                                                    <!--for Responsibility-->
                                                    <div class="col-md-12 col-xs-12 RightFloat margin-b-25  input-style">
                                                        <div class="col-md-6 col-sm-12 col-xs-12 RightFloat">
                                                            <label for="inputCandidateResponsibility">مسئولیت</label>
                                                            <input data-name="inputCandidateResponsibility" type="text"
                                                                   required>
                                                        </div>

                                                        <div class="col-md-6 col-sm-12 col-xs-12 MemberShip">
                                                            <label for="inputCandidateMemberShip">عضویت :</label>
                                                            <select class="form-control form-control-lg"
                                                                    data-name="inputCandidateMemberShip">
                                                                <option value="" selected>--انتخاب کنید--</option>
                                                                <?php foreach ($EnumResumeProfile['CandidateMemberShipType'] as $key => $value) { ?>
                                                                    <option value="<?php echo $key; ?>">
                                                                        <?php echo $value; ?>
                                                                    </option>
                                                                <?php } ?>
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
                                                                            <option value="<?php echo $key; ?>">
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
                                                                            <option value="<?php echo $i; ?>">
                                                                                <?php echo $i; ?>
                                                                            </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-xs-12 RightFloat">
                                                            <label for="inputCandidateStartJobMonth">پایان همکاری</label>
                                                            <div class="row">
                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                    <select class="form-control form-control-lg city-select"
                                                                            name="inputCandidateMediaEndMonth"
                                                                            id="inputCandidateMediaEndMonth">
                                                                        <?php foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) { ?>
                                                                            <option value="<?php echo $key; ?>">
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
                                                                            <option value="<?php echo $i; ?>">
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
                                                    <div class="col-md-12 col-xs-12 RightFloat margin-b-25 input-style">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 RightFloat">
                                                            <label for="inputCandidateActivityDescription">توضیحات</label>
                                                            <input data-name="inputCandidateActivityDescription" type="text" />
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
                                id="updatePoliticBackgroundAndRedirect">
                            ثبت و ادامه
                        </button> 
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <button class="btn btn-block btn-lg waves-effect CommonButtons"
                                id="updatePoliticBackground">
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
