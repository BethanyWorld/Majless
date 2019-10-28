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
                            <div class="panel-heading">وضعیت خدمت نظام وظیفه</div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-xs-12 padding-0">
                                        <div class="list-group-item ul-background-color-hr">
                                            <form id="form-military">
                                                <span class="skill-divider"></span>
                                            </form>
                                            <div id="unique-form"
                                                 class="hidden list-group-item animated flipInX extra-padding-top-25 odd-background-color-div">
                                                <div class="list-group-Grade col-md-12 col-xs-12 padding-0">
                                                    <div class="col-md-12 col-xs-12 margin-b-30 paddingRight-0">

                                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat paddingRight-0">
                                                            <div class="col-md-12 col-xs-12 radio-list-group-item">
                                                                <?php
                                                                foreach ($EnumResumeProfile['CandidateMilitaryStatus'] as $key => $value) { ?>
                                                                    <label class="customradio">
                                                                        <span class="radiotextsty"><?php echo $value; ?></span>
                                                                        <input type="radio"
                                                                               <?php setRadioSelected($userInfo['candidateMilitaryStatus']['CandidateMilitaryStatus'], $key); ?>
                                                                               data-name="inputCandidateMilitaryStatus"
                                                                               value="<?php echo $key; ?>">
                                                                    </label>
                                                                <?php } ?>
                                                            </div>
                                                        </div>

                                                        <hr class="hidden-lg hidden-md visible-xs visible-sm border-color">

                                                        <div class="col-md-8 col-sm-12 col-xs-12 padding-0 inputCandidateExemptTitle">
                                                            <?php $index = 0 ; foreach ($EnumResumeProfile['CandidateExemptTitle'] as $key => $value) { ?>
                                                                <div class="col-md-3 col-xs-12 form-group RightFloat">
                                                                    <label class="customradio"><span class="radiotextsty"><?php echo $value; ?></span>
                                                                        <input type="radio"
                                                                               data-name="inputCandidateExemptTitle"
                                                                               <?php setRadioSelected($userInfo['candidateMilitaryStatus']['CandidateExemptTitle'] , $key); ?>
                                                                               value="<?php echo $key; ?>">
                                                                    </label>
                                                                </div>
                                                            <?php } ?>
                                                            <div class="col-md-12 col-sm-12 col-xs-12 RightFloat ttt inputCandidateDescription">
                                                                <label for="inputCandidateDescription" class="Lable">توضیحات</label>
                                                                <input name="inputCandidateDescription" type="text"
                                                                       <?php setInputValue($userInfo['candidateMilitaryStatus']['CandidateExemptDescription']); ?>
                                                                       required>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-8 col-sm-12 col-xs-12 padding-0 inputCandidateMilitaryEndDtate">
                                                            <div class="col-md-12 col-xs-12">
                                                                <div class="col-md-6 col-xs-12 margin-b-25 RightFloat">
                                                                    <label class="MilitaryEndDateTitle">
                                                                        <b>تاریخ اتمام</b>
                                                                        <b>تاریخ تقریبی پایان خدمت</b>
                                                                    </label>
                                                                    <div class="clearfix"></div>
                                                                    <select class="col-md-6 form-control form-control-lg city-select RightFloat" name="inputCandidateMilitaryEndMonth" id="inputCandidateMilitaryEndMonth">
                                                                        <?php foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) { ?>
                                                                            <option value="<?php echo $key; ?>" <?php setOptionSelected($userInfo['candidateMilitaryStatus']['CandidateMilitaryEndMonth'], $key); ?>>
                                                                                <?php echo $value; ?>
                                                                            </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                    <select class="col-md-6 form-control form-control-lg city-select" name="inputCandidateMilitaryEndYear" id="inputCandidateMilitaryEndYear">
                                                                        <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                            <option
                                                                                <?php setOptionSelected($userInfo['candidateMilitaryStatus']['CandidateMilitaryEndYear'], $i); ?>
                                                                                    value="<?php echo $i; ?>">
                                                                                <?php echo $i; ?>
                                                                            </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-12 col-xs-12 margin-b-25">
                                                                    <label for="inputCandidateMilitaryEndArea">ارگان محل خدمت :</label>
                                                                </div>
                                                                <div class="col-md-12 col-xs-12 padding-0 inputCandidateMilitaryEndArea">
                                                                    <?php $index = 0 ; foreach ($EnumResumeProfile['CandidateMilitaryEndArea'] as $key => $value) { ?>
                                                                        <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                            <label class="customradio"><span class="radiotextsty"><?php echo $value; ?></span>
                                                                                <input type="radio"
                                                                                       <?php setRadioSelected($userInfo['candidateMilitaryStatus']['CandidateMilitaryEndArea'], $key); ?>
                                                                                       data-name="inputCandidateMilitaryEndArea"
                                                                                       value="<?php echo $key; ?>"
                                                                                    <?php if($index == 0){  echo "checked"; $index +=1; }; ?>>
                                                                            </label>
                                                                        </div>
                                                                    <?php } ?>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12 RightFloat ttt inputCandidatePlaceService1">
                                                                        <label for="inputCandidateMilitaryEndAreaTitle" class="Lable">نام محل خدمت</label>
                                                                        <input name="inputCandidateMilitaryEndAreaTitle" type="text"
                                                                            <?php setInputValue($userInfo['candidateMilitaryStatus']['CandidateMilitaryEndAreaTitle']); ?>>
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
                        <button class="btn btn-block btn-lg waves-effect CommonButtons next-step"
                                id="updateMilitaryStatusAndRedirect">
                            ثبت و ادامه
                        </button>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <button class="btn btn-block btn-lg waves-effect CommonButtons" id="updateMilitaryStatus">
                            ثبت
                        </button>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <a href="<?php echo base_url('Profile/academicBackground'); ?>">
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