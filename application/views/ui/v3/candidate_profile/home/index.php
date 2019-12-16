<?php $_DIR = base_url('assets/ui/v3/'); ?>
<div class="container container-wrapper" style="background: none;">
    <div class="row col-xs-12 col-md-3 pull-right">
        <div class="row col-xs-12  pull-right">
            <div class="row col-xs-12 pull-right sidebar">
                <div class="col-md-12 col-md-offset-0 col-sm-6 col-s-offset-3 col-xs-6 col-xs-offset-3 padding-0">
                    <img class="thumbnail profile-image"
                         width="100%" height="135px"
                         id="imageProfile"
                         src="<?php echo $noImg; ?>"/>
                </div>
                <div class="col-md-12 col-xs-12 col-sm-12 padding-0">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <?php echo $userInfo['CandidateFirstName'] . " " . $userInfo['CandidateLastName']; ?>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <?php echo $sidebar; ?>
                        </div>
                    </div>
                    <strong style="font-size: 14px;text-align: right;display: inline-block;">آخرین ورود:</strong>
                    <?php
                    if (!empty($this->session->userdata('UserLoginInfo')['loginRecord'])) {
                        $loginInfo = $this->session->userdata('UserLoginInfo')['loginRecord'][0];
                        ?>
                        <strong style="font-size: 14px;text-align: left;display: inline-block;direction: ltr;">
                            <?php echo $loginInfo['LoginDate']; ?>
                        </strong>
                    <?php } else { ?>
                        <strong style="font-size: 14px;text-align: left;display: inline-block;direction: ltr;">
                            <?php echo jDateTime::date("Y/m/d H:i:s", false, false); ?>
                        </strong>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-md-9 pull-right">
        <div class="row">
            <div class="col-xs-12">
                <?php
                $isJustSupporterOrElite = true;
                foreach ($userInfo['roles'] as $role) {
                    if ($role['Role'] == 'Candidate') {
                        $isJustSupporterOrElite = false;
                    }
                }
                ?>

                <?php if ($isJustSupporterOrElite){ ?>
                    <div class="col-xs-12 padding-0">
                        <div class="col-xs-12 col-md-12 blog-contents-div">
                            <h4 class="text-success">حامی گرامی  <?php echo $userInfo['CandidateFirstName'] . " " . $userInfo['CandidateLastName']; ?></h4>
                            <p style="text-align: justify;">جنبش از ما توسط جمعی از جوانانی که در عرصه‌های مختلف دارای مهارت و تخصص هستند ایجاد شده‌است و تا مراحل شکل‌گیری آن تماما با همت و هزینه و وقت شخصی و تبلیغات و ترویج چهره به چهره فعالین آن شکل گرفته است. اما برای ادامه گسترده‌تر فعالیت و ایجاد تاثیر به سزا در این مرحله از جنبش که معطوف به انتخابات مجلس یازدهم در دوم اسفند 98 است، نیاز هست تا تمامی افرادی که با اهداف و ارزش‌های این جنبش همراه هستند و فرآیند طراحی شده و آزمون‌های این جنبش را برای ارتقای کیفیت عملکرد مجلس شورای اسلامی کارآمد می‌دانند، از هر طریقی که در توان دارند به یاری این جنبش بیایند. ما چند راه برای همراهی و مشارکت شما پیشنهاد می‌دهیم و منتظر پیشنهادها و کمک‌های شما نیز هستیم:</p>
                            <h4 class="text-success" style="text-align: justify;">ترویج ایده شایسته‌گزینی</h4>
                            <ul style="text-align: justify;">
                                <li>مطالب و ویدئوهای ما را در سایت و شبکه‌های اجتماعی ببینید و تا جا ممکن با دیگران به اشتراک بگذارید.</li>
                                <li>گفتگوهای چهره به چهره همچنان موثرین‌تر راه برای انتقال فکرها و ایده‌ها هستند. با اطرافیان خود که احتمال می‌دهید با این جنبش همراه شوند، ایده‌ها و ارزش‌ها و اهداف جنبش را در میان بگذارید.</li>
                                <li>اگر به نامزدهای نمایندگی مجلس دسترسی دارید آن‌ها را تشویق کنید که وارد فرآیند سنجش شوند.</li>
                                <li>نامزدهای حوزه انتخابیه خود را از طریق شبکه‌های اجتماعی به ثبت نام در سایت و ورود به فرآیند سنجش دعوت کنید. و حتما اکانت جنبش از ما را تگ کنید.</li>
                                <li>اگر نامزدی یا ستاد انتخاباتی او از شما طلب کمک و مشارکت در تبلیغات انتخاباتی نامزد کرد، شرط همکاری خود را شرکت نامزد در آزمون‌های سنجش شایستگی قرار بدهید و او را به شرکت در جنبش تشویق کنید.</li>
                            </ul>
                            <h4 class="text-success" style="text-align: justify;">همراهی و همکاری با جنبش</h4>
                            <p style="text-align: justify;">برای همراهی و همکاری با جنبش زمینه و نیاز‌های مختلفی وجود دارد و اگر کارهای دیگر و بهتری به نظر شما می‌رسد، با ما مطرح کنید. اما برای اینکه آشنایی و همکاری بتوانیم صورت بدهیم، در سایت به عنوان حامی ثبت نام کنید. اما راه‌های پیشنهادی و نیازهای جنبش:</p>
                            <ul style="text-align: justify;">
                                <li>تولید محصولات رسانه‌ای</li>
                                <li>تهیه محتوای تخصصی ناظر به مسائل کلان کشور یا مسائل محلی و منطقه‌ای</li>
                                <li>سازماندهی و برگزاری جلسه، نشست تخصصی-ترویجی و …</li>
                            </ul>
                            <h4 class="text-success" style="text-align: justify;">حمایت مالی</h4>
                            <p style="text-align: justify;">
                                در صورت امکان و تمایل می‌توانید با کمک‌های مالی خود به جنبش از ما کمک کنید. ما مبلغ ماهانه حداقل 30 هزارتومان را برای فعالین جنبش در نظر گرفته‌ایم. البته شما در واریز مبالغ بالاتر آزاد هستید. همچنین در راستای شفافیت، صورت مالی جنبش به صورت ماهانه در سایت منتشر می‌شود. برای واریز هر مبلغی که مدنظر دارید می‌توانید از
                              <a href="<?php echo base_url('Profile/support'); ?>">
                                  منو حمایت مالی
                              </a>
                                در سمت راست اقدام کنید.
                            </p>
                            <p style="text-align: justify; color: red;">
                                در صورتی که میخواهید به عنوان نامزد انتخاباتی ثبت نام کنید از
                                <a href="<?php echo base_url('Profile/resume'); ?>">
                                    منو ویرایش رزومه
                                </a>
                                نوع ثبت نام خود را ویرایش کنید
                            </p>
                        </div>
                    </div>
                <?php } else{ ?>
                <div class="row col-xs-12 alerts-container">
                    <!--  STEPS -->
                    <?php include 'steps/chart/index.php' ?>
                    <!--  End STEPS -->
                    <?php /* نامزد انتخاباتی ثبت نام کرده باشد*/ ?>
                    <?php if ($userInfo['CandidateStatus'] == 'CandidateRegister') { ?>
                        <?php include 'steps/register/index.php' ?>
                    <?php } ?>
                    <?php /* نامزد انتخاباتی رزومه را تکمیل کرده باشد*/ ?>
                    <?php if ($userInfo['CandidateStatus'] == 'CandidateResumeCompleted') { ?>
                        <?php include 'steps/complete/index.php' ?>
                    <?php } ?>
                    <?php /* نامزد انتخاباتی حائز شرایط اولیه برای نامزدی انتخابات نباشد*/ ?>
                    <?php if ($userInfo['CandidateStatus'] == 'CandidateResumeRejected') { ?>
                        <?php include 'steps/reject/index.php' ?>
                    <?php } ?>
                    <?php /* نامزد انتخاباتی شرایط اولیه برای نامزدی انتخابات را داشته باشد*/ ?>
                    <?php if ($userInfo['CandidateStatus'] == 'CandidateResumeAccepted') { ?>
                        <?php include 'steps/accept/index.php' ?>
                    <?php } ?>
                    <?php /* نامزد انتخاباتی شرایط*/ ?>
                    <?php if ($userInfo['CandidateStatus'] == 'CandidateHasNotContinueCondition') { ?>
                        <?php include 'steps/has_not_condition/index.php' ?>
                    <?php } ?>
                    <?php if ($userInfo['CandidateStatus'] == 'CandidateHasContinueCondition') { ?>
                        <?php include 'steps/has_condition/index.php' ?>
                    <?php } ?>
                    <?php /* نامزد انتخاباتی نمره رزومه داشته باشد*/ ?>
                    <?php if ($userInfo['CandidateStatus'] == 'CandidateResumeMarked') { ?>
                        <?php include 'steps/marked/index.php' ?>
                    <?php } ?>
                    <?php /* نامزد انتخاباتی نمره رزومه داشته باشد*/ ?>
                    <?php if ($userInfo['CandidateStatus'] == 'CandidateExamFirstStep') { ?>
                        <?php include 'steps/first_exam/index.php' ?>
                    <?php } ?>
                    <?php /* نامزد انتخاباتی نمره رزومه داشته باشد*/ ?>
                    <?php if ($userInfo['CandidateStatus'] == 'CandidateExamFirstStepReject') { ?>
                        <?php include 'steps/first_exam_reject/index.php' ?>
                    <?php } ?>
                    <?php /* نامزد انتخاباتی نمره رزومه داشته باشد*/ ?>
                    <?php if ($userInfo['CandidateStatus'] == 'CandidateExamSecondStep') { ?>
                        <?php include 'steps/second_exam/index.php' ?>
                    <?php } ?>
                    <?php /* نامزد انتخاباتی نمره رزومه داشته باشد*/ ?>
                    <?php if ($userInfo['CandidateStatus'] == 'CandidateExamSecondStepReject') { ?>
                        <?php include 'steps/second_exam_reject/index.php' ?>
                    <?php } ?>
                    <?php /* نامزد انتخاباتی نمره رزومه داشته باشد*/ ?>
                    <?php if ($userInfo['CandidateStatus'] == 'CandidateAssessment') { ?>
                        <?php include 'steps/assessement/index.php' ?>
                    <?php } ?>
                    <?php /* نامزد انتخاباتی نمره رزومه داشته باشد*/ ?>
                    <?php if ($userInfo['CandidateStatus'] == 'CandidateAssessmentReject') { ?>
                        <?php include 'steps/assessement_reject/index.php' ?>
                    <?php } ?>
                    <?php /* نامزد انتخاباتی نمره رزومه داشته باشد*/ ?>
                    <?php if ($userInfo['CandidateStatus'] == 'CandidateAccepted') { ?>
                        <?php include 'steps/candidate_accepted/index.php' ?>
                    <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>