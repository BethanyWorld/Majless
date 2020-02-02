<?php
$_DIR = base_url('assets/ui/v3/');
?>
<div class="container container-wrapper" style="background: none;">
    <?php echo $resumeSidebar; ?>
    <div class="col-md-9 col-xs-12 pull-right response-padding">
        <div class="LeftPanel">
            <div class="LeftPanelcontent">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="panel panel-default LeftPanelShadow">
                            <div class="panel-heading">
                                سوابق فرهنگی اجتماعی
                                <span class="add-form fa fa-plus"></span>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-xs-12">
                                        <hr>
                                        <div class="list-group-item ul-background-color-hr">
                                            <form id="form">
                                                <span class="skill-divider"></span>
                                                <?php foreach ($userInfo['candidateSocialCulturalBackground'] as $item) { ?>
                                                    <div id="<?php echo md5(rand(1000, 9999)); ?>"
                                                         class="list-group-item extra-padding-top-25 odd-background-color-div">
                                                        <span class="remove-form fa fa-times"></span>
                                                        <div class="list-group-Grade col-md-12 col-xs-12 padding-0">
                                                            <div class="col-md-12 col-xs-12 margin-b-30">
                                                                <div class="col-md-6 col-sm-12 col-xs-12 RightFloat">
                                                                    <label for="inputCandidateActivityFieldType">زمینه
                                                                        فعالیت :</label>
                                                                    <select class="form-control form-control-lg"
                                                                            name="inputCandidateActivityFieldType">
                                                                        <option value="" selected>--انتخاب کنید--
                                                                        </option>
                                                                        <?php foreach ($EnumResumeProfile['CandidateActivityFieldType'] as $key => $value) { ?>
                                                                            <option
                                                                                <?php setOptionSelected($item['CandidateActivityFieldType'], $key); ?>
                                                                                    value="<?php echo $key; ?>">
                                                                                <?php echo $value; ?>
                                                                            </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <!--For Other-->
                                                            <div class="col-md-6 col-xs-12 RightFloat margin-b-30 other-title">
                                                                <div class="col-md-12 col-xs-12 RightFloat">
                                                                    <label class="Lable"
                                                                           for="inputCandidateActivityFieldOtherTypeTitle">عنوان</label>
                                                                    <input <?php setInputValue($item['CandidateActivityFieldOtherTypeTitle']); ?>
                                                                            name="inputCandidateActivityFieldOtherTypeTitle"
                                                                            class="ytyt" type="text" required>
                                                                </div>
                                                            </div>

                                                            <!--For exept mobilization-->
                                                            <div class="col-md-12 col-xs-12 margin-b-30 RightFloat Collectionname">
                                                                <div class="col-md-6 col-sm-12 col-xs-12 RightFloat">
                                                                    <label for="inputCandidateOrganizationName"
                                                                           class="Lable">نام مجموعه</label>
                                                                    <input <?php setInputValue($item['CandidateOrganizationName']); ?>
                                                                            name="inputCandidateOrganizationName"
                                                                            class="ytyt" type="text" required>
                                                                </div>

                                                            </div>
                                                            <div class="col-md-6 col-xs-12 RightFloat inputmembershiptype">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 RightFloat paddingLeft-0">
                                                                    <label for="inputCandidateMemberShipType">نوع عضویت
                                                                        :</label>
                                                                    <select class="form-control form-control-lg"
                                                                            name="inputCandidateMemberShipType">
                                                                        <option value="" selected>--انتخاب کنید--
                                                                        </option>
                                                                        <?php foreach ($EnumResumeProfile['CandidateMemberShipType'] as $key => $value) { ?>
                                                                            <option <?php setOptionSelected($item['CandidateMemberShipType'], $key); ?>
                                                                                    value="<?php echo $key; ?>">
                                                                                <?php echo $value; ?>
                                                                            </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-xs-12 RightFloat margin-b-30 Description">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 RightFloat">
                                                                    <label for="inputCandidateMemberShipDescription"
                                                                           class="Lable">توضیحات</label>
                                                                    <input
                                                                        <?php setInputValue($item['CandidateMemberShipDescription']); ?>
                                                                            name="inputCandidateMemberShipDescription"
                                                                            class="ytyt" type="text" required>
                                                                </div>
                                                            </div>

                                                            <!--For mobilization Type-->
                                                            <div class="col-md-3 col-xs-12 margin-b-35 RightFloat inputCandidateBasijType">
                                                                <div class="col-md-12 col-xs-12">
                                                                    <label for="inputCandidateBasijType">نوع بسیج
                                                                        :</label>
                                                                    <select class="form-control form-control-lg"
                                                                            name="inputCandidateBasijType">
                                                                        <option value="" selected>--انتخاب کنید--
                                                                        </option>
                                                                        <?php foreach ($EnumResumeProfile['CandidateBasijType'] as $key => $value) { ?>
                                                                            <option
                                                                                <?php setOptionSelected($item['CandidateBasijType'], $key); ?>
                                                                                    value="<?php echo $key; ?>">
                                                                                <?php echo $value; ?>
                                                                            </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>

                                                            </div>
                                                            <div class="col-md-3 col-x-12 RightFloat other-mobilization">
                                                                <label for="inputCandidateBasijTypeOtherTitle"
                                                                       class="Lable">سایر</label>
                                                                <input <?php setInputValue($item['CandidateBasijTypeOtherTitle']); ?>
                                                                        name="inputCandidateBasijTypeOtherTitle"
                                                                        class="ytyt" type="text" required>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12 margin-b-35 RightFloat inputCandidateMobilMembershipType">
                                                                <div class="col-md-12 col-xs-12">
                                                                    <label for="inputCandidateMobilMembershipType">نوع
                                                                        عضویت :</label>
                                                                    <select class="form-control form-control-lg"
                                                                            name="inputCandidateMobilMembershipType">
                                                                        <option value="" selected>--انتخاب کنید--
                                                                        </option>
                                                                        <?php foreach ($EnumResumeProfile['CandidateMobilMembershipType'] as $key => $value) { ?>
                                                                            <option <?php setOptionSelected($item['CandidateMobilMembershipType'], $key); ?>
                                                                                    value="<?php echo $key; ?>">
                                                                                <?php echo $value; ?>
                                                                            </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-x-12 RightFloat domain-name">
                                                                <label for="inputCandidateBasijAreaTitle" class="Lable">نام
                                                                    حوزه</label>
                                                                <input <?php setInputValue($item['CandidateBasijAreaTitle']); ?>
                                                                        name="inputCandidateBasijAreaTitle"
                                                                        class="ytyt" type="text" required>
                                                            </div>


                                                            <!-- for Date -->
                                                            <div class="col-md-12 col-xs-12 RightFloat culture-date padding-0">
                                                                <div class="col-md-12 col-xs-12">
                                                                    <div class="col-md-6 col-xs-12 RightFloat">
                                                                        <label for="inputCandidateStartJobMonth">آغاز
                                                                            همکاری</label>
                                                                        <div class="row">
                                                                            <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                <select class="form-control form-control-lg city-select"
                                                                                        name="inputCandidateActivityStartMonth"
                                                                                        id="inputCandidateActivityStartMonth">
                                                                                    <?php foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) { ?>
                                                                                        <option <?php setOptionSelected($item['CandidateActivityStartMonth'], $key); ?>
                                                                                                value="<?php echo $key; ?>">
                                                                                            <?php echo $value; ?>
                                                                                        </option>
                                                                                    <?php } ?>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                <select class="form-control form-control-lg city-select"
                                                                                        name="inputCandidateActivityStartYear"
                                                                                        id="inputCandidateActivityStartYear"
                                                                                        style="font-family: tahoma;">
                                                                                    <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                        <option <?php setOptionSelected($item['CandidateActivityStartYear'], $i); ?>
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
                                                                                        name="inputCandidateActivityEndMonth"
                                                                                        id="inputCandidateActivityEndMonth">
                                                                                    <?php foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) { ?>
                                                                                        <option <?php setOptionSelected($item['CandidateActivityEndMonth'], $key); ?>
                                                                                                value="<?php echo $key; ?>">
                                                                                            <?php echo $value; ?>
                                                                                        </option>
                                                                                    <?php } ?>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                <select class="form-control form-control-lg city-select"
                                                                                        name="inputCandidateActivityEndYear"
                                                                                        id="inputCandidateActivityEndYear"
                                                                                        style="font-family: tahoma;">
                                                                                    <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                        <option <?php setOptionSelected($item['CandidateActivityEndYear'], $i); ?>
                                                                                                value="<?php echo $i; ?>">
                                                                                            <?php echo $i; ?>
                                                                                        </option>
                                                                                    <?php } ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </form>
                                            <div id="unique-form"
                                                 class="hidden list-group-item animated flipInX extra-padding-top-25 odd-background-color-div">
                                                <span class="remove-form fa fa-times"></span>
                                                <div class="list-group-Grade col-md-12 col-xs-12 padding-0">
                                                    <div class="col-md-12 col-xs-12 margin-b-30">
                                                        <div class="col-md-6 col-sm-12 col-xs-12 RightFloat">
                                                            <label for="inputCandidateActivityFieldType">زمینه فعالیت
                                                                :</label>
                                                            <select class="form-control form-control-lg"
                                                                    data-name="inputCandidateActivityFieldType">
                                                                <option value="" selected>--انتخاب کنید--</option>
                                                                <?php foreach ($EnumResumeProfile['CandidateActivityFieldType'] as $key => $value) { ?>
                                                                    <option
                                                                            value="<?php echo $key; ?>">
                                                                        <?php echo $value; ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <!--For Other-->
                                                    <div class="col-md-6 col-xs-12 RightFloat margin-b-30 other-title">
                                                        <div class="col-md-12 col-xs-12 RightFloat">
                                                            <label class="Lable"
                                                                   for="inputCandidateActivityFieldOtherTypeTitle">عنوان</label>
                                                            <input data-name="inputCandidateActivityFieldOtherTypeTitle"
                                                                   class="ytyt" type="text" required>
                                                        </div>
                                                    </div>

                                                    <!--For exept mobilization-->
                                                    <div class="col-md-12 col-xs-12 margin-b-30 RightFloat Collectionname">
                                                        <div class="col-md-6 col-sm-12 col-xs-12 RightFloat">
                                                            <label for="inputCandidateOrganizationName" class="Lable">نام
                                                                مجموعه</label>
                                                            <input data-name="inputCandidateOrganizationName"
                                                                   class="ytyt" type="text" required>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6 col-xs-12 RightFloat inputmembershiptype">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 RightFloat paddingLeft-0">
                                                            <label for="inputCandidateMemberShipType">نوع عضویت
                                                                :</label>
                                                            <select class="form-control form-control-lg"
                                                                    data-name="inputCandidateMemberShipType">
                                                                <option value="" selected>--انتخاب کنید--</option>
                                                                <?php foreach ($EnumResumeProfile['CandidateMemberShipType'] as $key => $value) { ?>
                                                                    <option value="<?php echo $key; ?>">
                                                                        <?php echo $value; ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-xs-12 RightFloat margin-b-30 paddingRight-0 Description">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 RightFloat">
                                                            <label for="inputCandidateMemberShipDescription"
                                                                   class="Lable">توضیحات</label>
                                                            <input data-name="inputCandidateMemberShipDescription"
                                                                   class="ytyt" type="text" required>
                                                        </div>
                                                    </div>

                                                    <!--For mobilization Type-->
                                                    <div class="col-md-3 col-xs-12 margin-b-35 RightFloat inputCandidateBasijType">
                                                        <div class="col-md-12 col-xs-12">
                                                            <label for="inputCandidateBasijType">نوع بسیج :</label>
                                                            <select class="form-control form-control-lg"
                                                                    data-name="inputCandidateBasijType">
                                                                <option value="" selected>--انتخاب کنید--</option>
                                                                <?php foreach ($EnumResumeProfile['CandidateBasijType'] as $key => $value) { ?>
                                                                    <option value="<?php echo $key; ?>">
                                                                        <?php echo $value; ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-3 col-x-12  RightFloat other-mobilization">
                                                        <label for="inputCandidateBasijTypeOtherTitle" class="Lable">سایر</label>
                                                        <input data-name="inputCandidateBasijTypeOtherTitle"
                                                               class="ytyt" type="text" required>
                                                    </div>
                                                    <div class="col-md-3 col-xs-12 margin-b-35 RightFloat inputCandidateMobilMembershipType">
                                                        <div class="col-md-12 col-xs-12">
                                                            <label for="inputCandidateMobilMembershipType">نوع عضویت
                                                                :</label>
                                                            <select class="form-control form-control-lg"
                                                                    data-name="inputCandidateMobilMembershipType">
                                                                <option value="" selected>--انتخاب کنید--</option>
                                                                <?php foreach ($EnumResumeProfile['CandidateMobilMembershipType'] as $key => $value) { ?>
                                                                    <option value="<?php echo $key; ?>">
                                                                        <?php echo $value; ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-x-12 RightFloat domain-name">
                                                        <label for="inputCandidateBasijAreaTitle" class="Lable">نام
                                                            حوزه</label>
                                                        <input data-name="inputCandidateBasijAreaTitle" class="ytyt"
                                                               type="text" required>
                                                    </div>


                                                    <!-- for Date -->
                                                    <div class="col-md-12 col-xs-12 RightFloat culture-date padding-0">
                                                        <div class="col-md-12 col-xs-12">
                                                            <div class="col-md-6 col-xs-12 RightFloat">
                                                                <label for="inputCandidateStartJobMonth">آغاز
                                                                    همکاری</label>
                                                                <div class="row">
                                                                    <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                        <select class="form-control form-control-lg city-select"
                                                                                name="inputCandidateActivityStartMonth"
                                                                                id="inputCandidateActivityStartMonth">
                                                                            <?php foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) { ?>
                                                                                <option value="<?php echo $key; ?>">
                                                                                    <?php echo $value; ?>
                                                                                </option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                        <select class="form-control form-control-lg city-select"
                                                                                name="inputCandidateActivityStartYear"
                                                                                id="inputCandidateActivityStartYear"
                                                                        style="font-family: tahoma">
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
                                                                <label for="inputCandidateStartJobMonth">
                                                                    پایان همکاری
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                        <select class="form-control form-control-lg city-select"
                                                                                name="inputCandidateActivityEndMonth"
                                                                                id="inputCandidateActivityEndMonth">
                                                                            <?php foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) { ?>
                                                                                <option value="<?php echo $key; ?>">
                                                                                    <?php echo $value; ?>
                                                                                </option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                        <select class="form-control form-control-lg city-select"
                                                                                name="inputCandidateActivityEndYear"
                                                                                id="inputCandidateActivityEndYear"
                                                                        style="font-family: tahoma">
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  upload file-->
                                <br>
                                <div class="panel panel-warning">
                                    <div class="panel-heading">
                                        <p class="margin-b-0"> بعد از تکمیل سوابق فرهنگی اجتماعی تمامی مدارک مرتبط با سوابق فرهنگی اجتماعی خود را در قالب یک فایل زیپ اپلود کنید</p>
                                    </div>
                                </div>

                                <div class="col-md-12 col-xs-12">
                                    <form id="fileupload"
                                          method="POST" enctype="multipart/form-data">

                            <span id="spanUpload" class="btn btn-sm fileinput-button">
                                    <i class="icon-plus icon-white"></i>
                                    <input class="display-in-block" id="inpLogo" type="file" name="file"/>
                                    <input class="display-in-block upload-file-btn" type="submit" value="آپلود فایل"/>
                                </span>
                                    </form>
                                </div>
                                <!--  upload file-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="LeftPaneAction">
                <div class="row form-group">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <button class="btn btn-block btn-lg waves-effect CommonButtons"
                                id="buttonUpdateSocialCalturalAndRedirect">
                            ثبت و ادامه
                        </button>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <button class="btn btn-block btn-lg waves-effect CommonButtons" id="buttonUpdateSocialCaltural">
                            ثبت
                        </button>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 prev-step">
                        <a href="<?php echo base_url('Profile/jobHistory'); ?>">
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