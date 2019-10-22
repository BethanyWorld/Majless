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
                                سوابق فرهنگی اجتماعی
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
                                                 class="hidden list-group-item animated flipInX
                                                    extra-padding-top-25 odd-background-color-div">

                                                <span class="remove-form fa fa-times"></span>
                                                <div class="list-group-Grade col-md-12 col-xs-12 padding-0">
                                                    <div class="col-md-12 col-xs-12 margin-b-30">
                                                        <div class="col-md-6 col-sm-12 col-xs-12 RightFloat">
                                                            <label for="inputCandidateActivityFieldType">
                                                                زمینه فعالیت :
                                                            </label>
                                                            <select class="form-control form-control-lg"
                                                                    data-name="inputCandidateActivityFieldType">
                                                                <option value="Select">--انتخاب کنید</option>
                                                                <option value="Charity">انجمن خیریه</option>
                                                                <option value="Mobilization"> بسیج</option>
                                                                <option value="University">دانشگاه</option>
                                                                <option value="Semen">سمن</option>
                                                                <option value="Councils">شورایاری</option>
                                                                <option value="CulturalCenter">فرهنگسرا</option>
                                                                <option value="JihadistActivities">فعالیت های جهادی
                                                                </option>
                                                                <option value="schools">مدارس</option>
                                                                <option value="TheMosque">مسجد</option>
                                                                <option value="RedCrescent">هلال احمر</option>
                                                                <option value="ReligiousCommittees">هئیت های مذهبی
                                                                </option>
                                                                <option value="Others">سایر</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 col-xs-12 div-except-mobilization">
                                                        <div class="col-md-12 col-xs-12 margin-b-30 ttt Collectionname">
                                                            <div class="col-md-6 col-sm-12 col-xs-12 RightFloat">
                                                                <label for="inputCandidateOrganizationName" class="Lable">نام مجموعه</label>
                                                                <input class="ytyt" type="text" required>

                                                            </div>

                                                        </div>
                                                        <div class="col-md-6 col-xs-12 RightFloat inputmembershiptype">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 RightFloat paddingLeft-0">
                                                                <label for="inputCandidateMemberShipType">
                                                                    نوع عضویت :
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        data-name="inputCandidateMemberShipType">
                                                                    <option value="1">--انتخاب کنید</option>
                                                                    <option value="2">رسمی</option>
                                                                    <option value="2">داوطلبانه</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-xs-12 RightFloat margin-b-30 paddingRight-0 Description ttt">
                                                            <div class="col-md-12 col-sm-12 col-xs-12 RightFloat">
                                                                <label for="inputCandidateMemberShipDescription" class="Lable">توضیحات</label>
                                                                <input class="ytyt" type="text" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-xs-12 RightFloat culture-date">
                                                            <div class="col-md-6 col-xs-12 RightFloat">
                                                                <label >
                                                                    آغاز همکاری
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                        <select class="form-control form-control-lg city-select"
                                                                                name="inputCandidateActivityStartMonth"
                                                                                id="inputCandidateActivityStartMonth">
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
                                                                                name="inputCandidateActivityStartYear"
                                                                                id="inputCandidateActivityStartYear">
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
                                                                <label >
                                                                    پایان همکاری
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                        <select class="form-control form-control-lg city-select"
                                                                                name="inputCandidateActivityEndMonth"
                                                                                id="inputCandidateActivityEndMonth">
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
                                                                                name="inputCandidateActivityEndYear"
                                                                                id="inputCandidateActivityEndYear">
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
                                                    </div>


                                                    <div class="col-md-12 col-xs-12 div-for-mobilization padding-0">
                                                        <div class="col-md-12 col-xs-12">

                                                            <div class="col-md-3 col-xs-12 margin-b-35 RightFloat">
                                                                <label for="inputCandidateBasijType">
                                                                    نوع بسیج :
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        data-name="inputCandidateBasijType">
                                                                    <option value="Select">--انتخاب کنید</option>
                                                                    <option value="Urban">شهری</option>
                                                                    <option value="schools"> مدارس</option>
                                                                    <option value="University">دانشگاه</option>
                                                                    <option value="Others">سایر</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-md-3 col-x-12 ttt RightFloat other-mobilization">
                                                                <label class="Lable">سایر</label>
                                                                <input class="ytyt" type="text" required>
                                                            </div>

                                                            <div class="col-md-3 col-xs-12 RightFloat">
                                                                <label for="inputMobilMemberShipType">
                                                                    نوع عضویت :
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        data-name="inputMobilMemberShipType">
                                                                    <option value="Select">--انتخاب کنید</option>
                                                                    <option value="Normal">عادی</option>
                                                                    <option value="active"> فعال</option>
                                                                    <option value="Officestaff">کادر</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-md-3 col-x-12 ttt RightFloat">
                                                                <label class="Lable">نام حوزه</label>
                                                                <input class="ytyt" type="text" required>
                                                            </div>

                                                            <div class="col-md-12 col-xs-12 padding-0">
                                                                <div class="col-md-6 col-xs-12 RightFloat">
                                                                    <label for="inputCandidateStartJobMonth">
                                                                        آغاز همکاری
                                                                    </label>
                                                                    <div class="row">
                                                                        <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <select class="form-control form-control-lg city-select"
                                                                                    name="inputCandidateStartJobMonth"
                                                                                    id="inputCandidateStartJobMonth">
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
                                                                                    name="inputCandidateStartJobYear"
                                                                                    id="inputCandidateStartJobYear">
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
                                                                                    name="inputCandidateStartJobMonth"
                                                                                    id="inputCandidateStartJobMonth">
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
                                                                                    name="inputCandidateStartJobYear"
                                                                                    id="inputCandidateStartJobYear">
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
                                                        </div>
                                                    </div>


                                                    <div class="col-md-12 col-xs-12 padding-0 div-for-others">
                                                        <div class="col-md-6 col-xs-12 ttt RightFloat margin-b-30">
                                                            <label class="Lable">عنوان</label>
                                                            <input class="ytyt" type="text" required>
                                                        </div>
                                                        <div class="col-md-6 col-xs-12 ttt RightFloat margin-b-30">
                                                            <label class="Lable">نام مجموعه</label>
                                                            <input class="ytyt" type="text" required>
                                                        </div>
                                                        <div class="col-md-6 col-xs-12 RightFloat margin-b-30">
                                                            <label for="inputOtherMemberShipType">
                                                                نوع عضویت :
                                                            </label>
                                                            <select class="form-control form-control-lg"
                                                                    data-name="inputOtherMemberShipType">
                                                                <option value="Select">--انتخاب کنید</option>
                                                                <option value="OtherOfficial">رسمی</option>
                                                                <option value="OtherVoluntary"> داوطلبانه</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-6 col-xs-12 ttt RightFloat">
                                                            <label class="Lable">توضیحات </label>
                                                            <input class="ytyt" type="text" required>
                                                        </div>
                                                        <div class="col-md-12 col-xs-12 RightFloat culture-date padding-0">
                                                            <div class="col-md-6 col-xs-12 RightFloat">
                                                                <label for="inputCandidateStartJobMonth">
                                                                    آغاز همکاری
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                        <select class="form-control form-control-lg city-select"
                                                                                name="inputCandidateStartJobMonth"
                                                                                id="inputCandidateStartJobMonth">
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
                                                                                name="inputCandidateStartJobYear"
                                                                                id="inputCandidateStartJobYear">
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
                                                                                name="inputCandidateStartJobMonth"
                                                                                id="inputCandidateStartJobMonth">
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
                                                                                name="inputCandidateStartJobYear"
                                                                                id="inputCandidateStartJobYear">
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