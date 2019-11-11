<?php
$_DIR = base_url('assets/ui/v3/');
?>
<div class="container container-wrapper" style="background: none;">

    <?php echo $resumeSidebar; ?>

    <div class="col-xs-12 col-md-9 pull-right">
        <div class="LeftPanel">
            <div class="LeftPanelcontent">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="panel panel-default LeftPanelShadow">
                            <div class="panel-heading">
                                سوابق شغلی
                                <span class="add-form fa fa-plus"></span>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-xs-12">
<!--                                        <h3>سوابق شغلی</h3>-->
<!--                                        <hr>-->
                                        <form id="form-job-history">
                                            <span class="skill-divider"></span>
                                            <?php foreach ($userInfo['candidateJobHistory'] as $item) { ?>
                                                <div  class="col-md-12 col-xs-12 padding-0 form">
                                                    <span class="remove-form fa fa-times"></span>
                                                    <div class="col-md-6 col-xs-12 form-group RightFloat">
                                                        <label for="inputCandidateJobTitle">
                                                            عنوان دقیق شغلی
                                                            <span class="text-danger">
                                                    <b class="text-danger">*</b></span>
                                                        </label>
                                                        <input id="inputCandidateJobTitle" type="text"
                                                               name="inputCandidateJobTitle"
                                                            <?php setInputValue($item['CandidateJobTitle']); ?>
                                                               placeholder="پر کردن این فیلد الزامی می باشد">
                                                    </div>
                                                    <div class="col-md-6 col-xs-12 form-group RightFloat">
                                                        <label for="inputCandidateJobCompanyTitle">
                                                            نام سازمان
                                                            <span class="text-danger">
                                                    <b class="text-danger">*</b></span>
                                                        </label>
                                                        <input id="inputCandidateJobCompanyTitle" type="text"
                                                               name="inputCandidateJobCompanyTitle"
                                                            <?php setInputValue($item['CandidateJobCompanyTitle']); ?>
                                                               placeholder="پر کردن این فیلد الزامی می باشد">
                                                    </div>
                                                    <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                        <label for="inputCandidateStartJobMonth">
                                                            ماه آغاز همکاری
                                                            <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                        </label>
                                                        <select class="form-control form-control-lg city-select"
                                                                name="inputCandidateStartJobMonth"
                                                                id="inputCandidateStartJobMonth">
                                                            <?php foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) { ?>
                                                                <option
                                                                    <?php setOptionSelected($item['CandidateStartJobMonth'], $key); ?>
                                                                        value="<?php echo $key; ?>">
                                                                    <?php echo $value; ?>
                                                                </option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                        <label for="inputCandidateStartJobYear">
                                                            سال آغاز همکاری
                                                            <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                        </label>
                                                        <select class="form-control form-control-lg city-select"
                                                                name="inputCandidateStartJobYear"
                                                                id="inputCandidateStartJobYear">
                                                            <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                <option
                                                                    <?php setOptionSelected($item['CandidateStartJobYear'], $i); ?>
                                                                        value="<?php echo $i; ?>">
                                                                    <?php echo $i; ?>
                                                                </option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                        <label for="inputCandidateEndJobMonth">
                                                            ماه پایان همکاری
                                                            <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                        </label>
                                                        <select class="form-control form-control-lg city-select"
                                                                name="inputCandidateEndJobMonth"
                                                                id="inputCandidateEndJobMonth">
                                                            <?php foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) { ?>
                                                                <option
                                                                    <?php setOptionSelected($item['CandidateEndJobMonth'], $key); ?>
                                                                        value="<?php echo $key; ?>">
                                                                    <?php echo $value; ?>
                                                                </option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                        <label for="inputCandidateEndJobYear">
                                                            سال پایان همکاری
                                                            <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                        </label>
                                                        <select class="form-control form-control-lg city-select"
                                                                name="inputCandidateEndJobYear"
                                                                id="inputCandidateEndJobYear">
                                                            <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                <option
                                                                    <?php setOptionSelected($item['CandidateEndJobYear'], $i); ?>
                                                                        value="<?php echo $i; ?>">
                                                                    <?php echo $i; ?>
                                                                </option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </form>
                                        <div  id="unique-form" class="animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                            <span class="remove-form fa fa-times"></span>
                                            <div class="col-md-6 col-xs-12 form-group RightFloat">
                                                <label for="inputCandidateJobTitle">
                                                   عنوان دقیق شغلی
                                                    <span class="text-danger">
                                                    <b class="text-danger">*</b></span>
                                                </label>
                                                <input id="inputCandidateJobTitle" type="text"
                                                       name="inputCandidateJobTitle"
                                                       placeholder="پر کردن این فیلد الزامی می باشد">
                                            </div>
                                            <div class="col-md-6 col-xs-12 form-group RightFloat">
                                                <label for="inputCandidateJobCompanyTitle">
                                                    نام سازمان
                                                    <span class="text-danger">
                                                    <b class="text-danger">*</b></span>
                                                </label>
                                                <input id="inputCandidateJobCompanyTitle" type="text"
                                                       name="inputCandidateJobCompanyTitle"
                                                       placeholder="پر کردن این فیلد الزامی می باشد">
                                            </div>
                                            <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="inputCandidateStartJobMonth">
                                                    ماه آغاز همکاری
                                                    <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                </label>
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
                                            <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="inputCandidateStartJobYear">
                                                    سال آغاز همکاری
                                                    <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                </label>
                                                <select class="form-control form-control-lg city-select"
                                                        name="inputCandidateStartJobYear"
                                                        id="inputCandidateStartJobYear">
                                                    <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                        <option
                                                            <?php if ($i == 1398) echo "selected"; ?>
                                                                value="<?php echo $i; ?>">
                                                            <?php echo $i; ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="inputCandidateEndJobMonth">
                                                    ماه پایان همکاری
                                                    <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                </label>
                                                <select class="form-control form-control-lg city-select"
                                                        name="inputCandidateEndJobMonth"
                                                        id="inputCandidateEndJobMonth">
                                                    <?php foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) { ?>
                                                        <option value="<?php echo $key; ?>">
                                                            <?php echo $value; ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="inputCandidateEndJobYear">
                                                    سال پایان همکاری
                                                    <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                </label>
                                                <select class="form-control form-control-lg city-select"
                                                        name="inputCandidateEndJobYear"
                                                        id="inputCandidateEndJobYear">
                                                    <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                        <option
                                                            <?php if ($i == 1398) echo "selected"; ?>
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
            <div class="LeftPaneAction">
                <div class="row form-group">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 next-step">
                        <button class="btn btn-block btn-lg CommonButtons waves-effect" id="updateProfileJobHistoryAndRedirect">
                            ثبت و ادامه
                        </button>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <button class="btn btn-block btn-lg CommonButtons waves-effect" id="updateProfileJobHistory">
                            ثبت
                        </button>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 prev-step">
                        <a href="<?php echo base_url('Profile/militaryStatus'); ?>">
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