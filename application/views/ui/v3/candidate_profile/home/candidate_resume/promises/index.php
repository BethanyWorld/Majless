<?php
$_DIR = base_url('assets/ui/v3/');
?>
<div class="container container-wrapper" style="background: none;">

    <?php echo $resumeSidebar; ?>

    <div class="col-xs-12 col-md-9 pull-right response-padding">
        <div class="LeftPanel">
            <div class="LeftPanelcontent">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="panel panel-default LeftPanelShadow">
                            <div class="panel-heading">
                                وعده های انتخاباتی
                                <span class="add-form fa fa-plus"></span>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                        <hr>
                                        <div  id="unique-form" class="animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                            <span class="remove-form fa fa-times"></span>
                                            <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                <label for="inputSkillType">
                                                    نوع مهارت
                                                    <span class="text-danger">
                                                    <b class="text-danger">*</b></span>
                                                </label>
                                                <input id="inputSkillType" type="text"
                                                       name="inputSkillType"
                                                       placeholder="پر کردن این فیلد الزامی می باشد">
                                            </div>
                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="inputSkillLevel">
                                                    سطح مهارت
                                                    <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                </label>
                                                <select class="form-control form-control-lg city-select"
                                                        name="inputSkillLevel"
                                                        id="inputSkillLevel">
                                                    <option value="">--انتخاب کنید--
                                                    </option>
                                                    <?php foreach ($EnumResumeProfile['SkillLevel'] as $key => $value) { ?>
                                                        <option value="<?php echo $key; ?>">
                                                            <?php echo $value; ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="inputSkillLearnType">
                                                    نحوه فراگیری
                                                    <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                </label>
                                                <select class="form-control form-control-lg city-select"
                                                        name="inputSkillLearnType"
                                                        id="inputSkillLearnType">
                                                    <option value="">--انتخاب کنید--
                                                    </option>
                                                    <?php foreach ($EnumResumeProfile['SkillLearnType'] as $key => $value) { ?>
                                                        <option value="<?php echo $key; ?>">
                                                            <?php echo $value; ?>
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
            <div class="LeftPaneAction">
                <div class="row form-group">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <button class="btn btn-block btn-lg CommonButtons waves-effect" id="updateProfileSkillsAndRedirect">
                            ثبت و ادامه
                        </button>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <button class="btn btn-block btn-lg CommonButtons waves-effect" id="updateProfileSkills">
                             ثبت
                        </button>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 prev-step">
                        <a href="<?php echo base_url('Profile/scienceBackground'); ?>">
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