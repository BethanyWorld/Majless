<?php $_DIR = base_url('assets/ui/v3/'); ?>
<div class="container container-wrapper" style="background: none;">
    <div class="row col-xs-12 col-md-3 pull-right"><?php echo $sidebar; ?></div>
    <div class="col-xs-12 col-md-9 pull-right">
        <div class="row">
            <div class="col-xs-12">
                <div class="row col-xs-12 col-sm-3 pull-right">
                    <img class="thumbnail profile-image"
                         width="155px" height="155px"
                         id="imageProfile"
                         src="<?php echo $noImg; ?>" />
                </div>
                <div class="row col-xs-12 col-sm-9 pull-right">
                    <table class="table table-bordered table-condensed rtl">
                        <thead>
                            <tr>
                                <th class="fit">نام و نام خانوادگی</th>
                                <th class="fit">کد ملی</th>
                                <th class="fit">تلفن همراه</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="fit full-name">
                                    <img src="<?php echo $gifLoader; ?>" />
                                </th>
                                <th class="fit national-code">
                                    <img src="<?php echo $gifLoader; ?>" />
                                </th>
                                <th class="fit phone">
                                    <img src="<?php echo $gifLoader; ?>" />
                                </th>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered table-condensed rtl">
                        <thead>
                        <tr>
                            <th class="fit">استان حوزه انتخاباتی</th>
                            <th class="fit">شهر حوزه انتخاباتی</th>
                            <th class="fit">جنسیت</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th class="fit constituency-province">
                                <img src="<?php echo $gifLoader; ?>" />
                            </th>
                            <th class="fit constituency-province-part">
                                <img src="<?php echo $gifLoader; ?>" />
                            </th>
                            <th class="fit gender">
                                <img src="<?php echo $gifLoader; ?>" />
                            </th>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-xs-12">
                <!--  STEPS -->
                <?php include 'steps/chart/index.php'?>
                <!--  End STEPS -->
                <?php /* نامزد انتخاباتی ثبت نام کرده باشد*/ ?>
                <?php if ($userInfo['CandidateStatus'] == 'CandidateRegister') { ?>
                    <?php include 'steps/register/index.php'?>
                <?php } ?>
                <?php /* نامزد انتخاباتی رزومه را تکمیل کرده باشد*/ ?>
                <?php if ($userInfo['CandidateStatus'] == 'CandidateResumeCompleted') { ?>
                    <?php include 'steps/complete/index.php'?>
                <?php } ?>
                <?php /* نامزد انتخاباتی رزومه را تکمیل کرده باشد*/ ?>
                <?php if ($userInfo['CandidateStatus'] == 'CandidateResumeRejected') { ?>
                    <?php include 'steps/reject/index.php'?>
                <?php } ?>
                <?php /* نامزد انتخاباتی نمره رزومه نداشته باشدد*/ ?>
                <?php if ($userInfo['CandidateStatus'] == 'CandidateResumeAccepted' ) { ?>
                    <?php include 'steps/accept/index.php'?>
                <?php } ?>
                <?php /* نامزد انتخاباتی شرایط*/ ?>
                <?php if ($userInfo['CandidateStatus'] == 'CandidateHasNotContinueCondition') { ?>
                    <?php include 'steps/has_not_condition/index.php'?>
                <?php } ?>
                <?php if ($userInfo['CandidateStatus'] == 'CandidateHasContinueCondition' ) { ?>
                    <?php include 'steps/has_condition/index.php'?>
                <?php } ?>
                <?php /* نامزد انتخاباتی نمره رزومه داشته باشد*/ ?>
                <?php if ($userInfo['CandidateStatus'] == 'CandidateResumeMarked') { ?>
                    <?php include 'steps/marked/index.php'?>
                <?php } ?>
                <?php /* نامزد انتخاباتی نمره رزومه داشته باشد*/ ?>
                <?php if ($userInfo['CandidateStatus'] == 'CandidateExamFirstStep') { ?>
                    <?php include 'steps/first_exam/index.php'?>
                <?php } ?>
                <?php /* نامزد انتخاباتی نمره رزومه داشته باشد*/ ?>
                <?php if ($userInfo['CandidateStatus'] == 'CandidateExamFirstStepReject') { ?>
                    <?php include 'steps/first_exam_reject/index.php'?>
                <?php } ?>
                <?php /* نامزد انتخاباتی نمره رزومه داشته باشد*/ ?>
                <?php if ($userInfo['CandidateStatus'] == 'CandidateExamSecondStep') { ?>
                    <?php include 'steps/second_exam/index.php'?>
                <?php } ?>
                <?php /* نامزد انتخاباتی نمره رزومه داشته باشد*/ ?>
                <?php if ($userInfo['CandidateStatus'] == 'CandidateExamSecondStepReject') { ?>
                    <?php include 'steps/second_exam_reject/index.php'?>
                <?php } ?>
                <?php /* نامزد انتخاباتی نمره رزومه داشته باشد*/ ?>
                <?php if ($userInfo['CandidateStatus'] == 'CandidateAssessment') { ?>
                    <?php include 'steps/assessement/index.php'?>
                <?php } ?>



            </div>
        </div>
    </div>
</div>