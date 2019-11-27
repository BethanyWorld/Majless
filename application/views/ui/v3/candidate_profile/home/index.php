<?php $_DIR = base_url('assets/ui/v3/'); ?>
<div class="container container-wrapper" style="background: none;">
    <div class="row col-xs-12 col-md-3 pull-right">
        <div class="row col-xs-12  pull-right">
            <div class="row col-xs-12 pull-right sidebar">
                <div class="col-md-12 col-md-offset-0 col-sm-6 col-s-offset-3 col-xs-6 col-xs-offset-3 padding-0">
                    <img class="thumbnail profile-image"
                         width="100%" height="135px"
                         id="imageProfile"
                         src="<?php echo $noImg; ?>" />
                </div>
                <div class="col-md-12 col-xs-12 col-sm-12 padding-0">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <?php echo $userInfo['CandidateFirstName']." ".$userInfo['CandidateLastName']; ?>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li><a href="<?php echo base_url('Profile') ?>">پیشخوان</a></li>
                                <li><a href="<?php echo base_url('Profile/resume') ?>">ویرایش رزومه</a></li>
                                <li><a href="<?php echo base_url('Profile/support') ?>">حمایت مالی</a></li>
                                <li><a href="<?php echo base_url('Profile/logOut') ?>">خروج</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-9 pull-right alerts-container">
        <div class="row">
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
                <?php /* نامزد انتخاباتی حائز شرایط اولیه برای نامزدی انتخابات نباشد*/ ?>
                <?php if ($userInfo['CandidateStatus'] == 'CandidateResumeRejected') { ?>
                    <?php include 'steps/reject/index.php'?>
                <?php } ?>
                <?php /* نامزد انتخاباتی شرایط اولیه برای نامزدی انتخابات را داشته باشد*/ ?>
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
                <?php /* نامزد انتخاباتی نمره رزومه داشته باشد*/ ?>
                <?php if ($userInfo['CandidateStatus'] == 'CandidateAssessmentReject') { ?>
                    <?php include 'steps/assessement_reject/index.php'?>
                <?php } ?>
                <?php /* نامزد انتخاباتی نمره رزومه داشته باشد*/ ?>
                <?php if ($userInfo['CandidateStatus'] == 'CandidateAccepted') { ?>
                    <?php include 'steps/candidate_accepted/index.php'?>
                <?php } ?>
            </div>
        </div>
    </div>
</div>