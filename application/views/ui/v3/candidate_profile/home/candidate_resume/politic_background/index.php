<?php $_DIR = base_url('assets/ui/v3/');  ?>
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
                                            <div id="unique-form" class="hidden list-group-item animated flipInX extra-padding-top-25 odd-background-color-div">
                                                <span class="remove-form fa fa-times"></span>
                                                <div class="list-group-Grade col-md-12 col-xs-12 padding-0">
                                                    <div class="col-md-12 col-xs-12 margin-b-30">
                                                        <div class="col-md-6 col-sm-12 col-xs-12 RightFloat">
                                                            <label for="inputCandidateActivityFieldType">زمینه فعالیت :</label>
                                                            <select class="form-control form-control-lg" data-name="inputCandidateActivityFieldType">
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
                                                    <div class="col-md-6 col-xs-12 ttt RightFloat margin-b-30 other-title">
                                                        <div class="col-md-12 col-xs-12 RightFloat">
                                                            <label class="Lable" for="inputCandidateActivityFieldOtherTypeTitle">عنوان</label>
                                                            <input data-name="inputCandidateActivityFieldOtherTypeTitle" class="ytyt" type="text" required>
                                                        </div>
                                                    </div>

                                                    <!--For exept mobilization-->
                                                    <div class="col-md-12 col-xs-12 margin-b-30 RightFloat ttt Collectionname">
                                                        <div class="col-md-6 col-sm-12 col-xs-12 RightFloat">
                                                            <label for="inputCandidateOrganizationName" class="Lable">نام مجموعه</label>
                                                            <input data-name="inputCandidateOrganizationName" class="ytyt" type="text" required>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6 col-xs-12 RightFloat inputmembershiptype">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 RightFloat paddingLeft-0">
                                                            <label for="inputCandidateMemberShipType">نوع عضویت :</label>
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
                                                    <div class="col-md-6 col-xs-12 RightFloat margin-b-30 paddingRight-0 Description ttt">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 RightFloat">
                                                            <label for="inputCandidateMemberShipDescription" class="Lable">توضیحات</label>
                                                            <input data-name="inputCandidateMemberShipDescription" class="ytyt" type="text" required>
                                                        </div>
                                                    </div>

                                                    <!--For mobilization Type-->
                                                    <div class="col-md-3 col-xs-12 margin-b-35 RightFloat inputCandidateBasijType">
                                                        <div class="col-md-12 col-xs-12">
                                                            <label for="inputCandidateBasijType">نوع بسیج :</label>
                                                            <select class="form-control form-control-lg" data-name="inputCandidateBasijType">
                                                                <option value="" selected>--انتخاب کنید--</option>
                                                                <?php foreach ($EnumResumeProfile['CandidateBasijType'] as $key => $value) { ?>
                                                                    <option value="<?php echo $key; ?>">
                                                                        <?php echo $value; ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-3 col-x-12 ttt RightFloat other-mobilization">
                                                        <label for="inputCandidateBasijTypeOtherTitle" class="Lable">سایر</label>
                                                        <input data-name="inputCandidateBasijTypeOtherTitle" class="ytyt" type="text" required>
                                                    </div>
                                                    <div class="col-md-3 col-xs-12 margin-b-35 RightFloat inputCandidateMobilMembershipType">
                                                        <div class="col-md-12 col-xs-12">
                                                            <label for="inputCandidateMobilMembershipType">نوع عضویت :</label>
                                                            <select class="form-control form-control-lg" data-name="inputCandidateMobilMembershipType">
                                                                <option value="" selected>--انتخاب کنید--</option>
                                                                <?php foreach ($EnumResumeProfile['CandidateMobilMembershipType'] as $key => $value) { ?>
                                                                    <option value="<?php echo $key; ?>">
                                                                        <?php echo $value; ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-x-12 ttt RightFloat domain-name">
                                                        <label for="inputCandidateBasijAreaTitle" class="Lable">نام حوزه</label>
                                                        <input data-name="inputCandidateBasijAreaTitle" class="ytyt" type="text" required>
                                                    </div>


                                                    <!-- for Date -->
                                                    <div class="col-md-12 col-xs-12 RightFloat culture-date padding-0">
                                                        <div class="col-md-12 col-xs-12">
                                                            <div class="col-md-6 col-xs-12 RightFloat">
                                                                <label for="inputCandidateStartJobMonth">آغاز همکاری</label>
                                                                <div class="row">
                                                                    <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                        <select class="form-control form-control-lg city-select"
                                                                                name="inputCandidateStartJobMonth"
                                                                                id="inputCandidateStartJobMonth">
                                                                            <?php foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) { ?>
                                                                                <option value="<?php echo $key; ?>">
                                                                                    <?php echo $value; ?>
                                                                                </option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                        <select class="form-control form-control-lg city-select" name="inputCandidateStartJobYear" id="inputCandidateStartJobYear">
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
                                                                        <select class="form-control form-control-lg city-select" name="inputCandidateEndJobMonth" id="inputCandidateEndJobMonth">
                                                                            <?php foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) { ?>
                                                                                <option value="<?php echo $key; ?>">
                                                                                    <?php echo $value; ?>
                                                                                </option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                        <select class="form-control form-control-lg city-select" name="inputCandidateEndJobYear" id="inputCandidateEndJobYear">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="LeftPaneAction">
                <div class="row form-group">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <button class="btn btn-block btn-lg waves-effect CommonButtons next-step" id="buttonUpdatePoliticBackground">
                            ثبت و ادامه
                        </button>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <button class="btn btn-block btn-lg waves-effect CommonButtons" id="buttonUpdatePoliticBackgroundAndRedirect">
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