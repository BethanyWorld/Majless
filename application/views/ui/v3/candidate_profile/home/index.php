<?php $_DIR = base_url('assets/ui/v3/'); ?>
<div class="container container-wrapper" style="background: none;">
    <div class="row col-xs-12 col-md-3 pull-right">
        <div class="row col-xs-12  pull-right">
            <div class="row col-xs-12 pull-right sidebar">
                <div class="col-md-12 col-md-offset-0 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3 padding-0">
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

        <div class="col-xs-12 register-for-supervisor-container">
            <div class="col-md-8 col-xs-12  pull-right">
                <p class="text-justify" style="font-weight: 900;font-size: 16px;line-height: 55px;text-align: justify;">
                    جنبش از ما، جهت بازرسی بر فرآیندهای مالی و گزینشی (نحوه برگزاری آزمون ها) دعوت میکند
                    تا بصورت داوطلبانه برای نظارت بر فرآیند های این جنبش اعلام آمادگی کنید.
                    بعد از اعلام آمادگی، تمامی داوطلبان از طریق اعضای سایت به رای دهی گذاشته شده و نتیجه
                    به اطلاع شما خواهد رسید.
                </p>
            </div>
            <div class="col-md-4 col-xs-12 padding-0">
                <div style="
    border: 6px solid #fdb72e;
    padding: 25px 0px;
    padding-bottom: 0;
    border-radius: 4px;
    margin: 10px 0;
     margin-top: 0;
    box-shadow: 0px -3px 25px 1px #c8c8c8;" class="row">
                    <i style="
    display: block;
    text-align: center;
    font-size: 60px;
    margin: 30px 0;
    margin-top: 0;" class="fa fa-info"></i>
                    <a href="<?php echo base_url('Profile/internalCandidate'); ?>">
                        <div class="col-xs-12 internal-candidate"
                             style="
    padding: 20px 20px;
    background: #fdb72e;
    margin-bottom: 0;
    text-align: center;
    font-size: 13px;
    font-weight: 900;
    color: #000;">
                            <i class="fa fa-angle-double-left"></i>
                            جهت اعلام آمادگی برای نظارت مالی و فرآیندی بر جنبش از ما کلیک کنید
                            <i class="fa fa-angle-double-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 voting-contiainer hidden">
            <div class="col-md-8 col-xs-12  pull-right">
                <p class="text-justify" style="font-weight: 900;font-size: 16px;line-height: 55px;text-align: justify;">
                   اسامی داوطلبان نظارت بر سوابق مالی و فرآیندی مشخص شده اند.
                    لطفا در رای دهی به این داوطلبان شرکت کنید.
                </p>
            </div>
            <div class="col-md-4 col-xs-12 padding-0">
                <div style="border: 6px solid #fdb72e;padding: 25px 0px;padding-bottom: 0;border-radius: 4px;margin: 10px 0;margin-top: 0;box-shadow: 0px -3px 25px 1px #c8c8c8;" class="row">
                    <i style="
    display: block;
    text-align: center;
    font-size: 60px;
    margin: 30px 0;
    margin-top: 0;" class="fa fa-info"></i>
                    <a href="<?php echo base_url('Profile/internalCandidateVote'); ?>">
                        <div class="col-xs-12 internal-candidate"
                             style="
    padding: 20px 20px;
    background: #fdb72e;
    margin-bottom: 0;
    text-align: center;
    font-size: 13px;
    font-weight: 900;
    color: #000;">
                            <i class="fa fa-angle-double-left"></i>
                             رای دهی به داوطلبان
                            <i class="fa fa-angle-double-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="col-xs-12">
                    <?php
                    $isJustSupporterOrElite = true;
                    foreach ($userInfo['roles'] as $role) {
                        if ($role['Role'] == 'Candidate') {
                            $isJustSupporterOrElite = false;
                        }
                    }
                    $examResultClass = "";
                    $examResultTDClass = "";
                    $examResultText = "";
                    if ($userInfo['CandidateExamResultStatus'] === 'Accepted') {
                        $examResultClass = 'label-success';
                        $examResultTDClass = "bg-success";
                        $examResultText = "تایید احراز صلاحیت حرفه ای";
                    }
                    else if ($userInfo['CandidateExamResultStatus'] === 'Failed') {
                        $examResultClass = 'label-danger';
                        $examResultTDClass = "bg-danger";
                        $examResultText = "عدم احراز صلاحیت حرفه ای";
                    }
                    else {
                        $examResultClass = 'label-info';
                        $examResultText = NULL;
                    }
                    ?>
                    <!-- If Candidate Is Supporter Or Elite -->
                    <?php if ($isJustSupporterOrElite){ ?>
                        <div class="col-xs-12 padding-0">
                            <div class="col-xs-12 col-md-12 blog-contents-div">
                                <h4 class="text-success">
                                    حامی گرامی
                                    <?php echo $userInfo['CandidateFirstName'] . " " . $userInfo['CandidateLastName']; ?></h4>
                                <p style="text-align: justify;">جنبش از ما توسط جمعی از جوانانی که در عرصه‌های مختلف
                                    دارای
                                    مهارت و تخصص هستند ایجاد شده‌است و تا مراحل شکل‌گیری آن تماما با همت و هزینه و وقت
                                    شخصی
                                    و تبلیغات و ترویج چهره به چهره فعالین آن شکل گرفته است. اما برای ادامه گسترده‌تر
                                    فعالیت
                                    و ایجاد تاثیر به سزا در این مرحله از جنبش که معطوف به انتخابات مجلس یازدهم در دوم
                                    اسفند
                                    98 است، نیاز هست تا تمامی افرادی که با اهداف و ارزش‌های این جنبش همراه هستند و
                                    فرآیند
                                    طراحی شده و آزمون‌های این جنبش را برای ارتقای کیفیت عملکرد مجلس شورای اسلامی کارآمد
                                    می‌دانند، از هر طریقی که در توان دارند به یاری این جنبش بیایند. ما چند راه برای
                                    همراهی و
                                    مشارکت شما پیشنهاد می‌دهیم و منتظر پیشنهادها و کمک‌های شما نیز هستیم:</p>
                                <h4 class="text-success" style="text-align: justify;">ترویج ایده شایسته‌گزینی</h4>
                                <ul style="text-align: justify;">
                                    <li>مطالب و ویدئوهای ما را در سایت و شبکه‌های اجتماعی ببینید و تا جا ممکن با دیگران
                                        به
                                        اشتراک بگذارید.
                                    </li>
                                    <li>گفتگوهای چهره به چهره همچنان موثرین‌تر راه برای انتقال فکرها و ایده‌ها هستند. با
                                        اطرافیان خود که احتمال می‌دهید با این جنبش همراه شوند، ایده‌ها و ارزش‌ها و اهداف
                                        جنبش را در میان بگذارید.
                                    </li>
                                    <li>اگر به نامزدهای نمایندگی مجلس دسترسی دارید آن‌ها را تشویق کنید که وارد فرآیند
                                        سنجش
                                        شوند.
                                    </li>
                                    <li>نامزدهای حوزه انتخابیه خود را از طریق شبکه‌های اجتماعی به ثبت نام در سایت و ورود
                                        به
                                        فرآیند سنجش دعوت کنید. و حتما اکانت جنبش از ما را تگ کنید.
                                    </li>
                                    <li>اگر نامزدی یا ستاد انتخاباتی او از شما طلب کمک و مشارکت در تبلیغات انتخاباتی
                                        نامزد
                                        کرد، شرط همکاری خود را شرکت نامزد در آزمون‌های سنجش شایستگی قرار بدهید و او را
                                        به
                                        شرکت در جنبش تشویق کنید.
                                    </li>
                                </ul>
                                <h4 class="text-success" style="text-align: justify;">همراهی و همکاری با جنبش</h4>
                                <p style="text-align: justify;">برای همراهی و همکاری با جنبش زمینه و نیاز‌های مختلفی
                                    وجود
                                    دارد و اگر کارهای دیگر و بهتری به نظر شما می‌رسد، با ما مطرح کنید. اما برای اینکه
                                    آشنایی
                                    و همکاری بتوانیم صورت بدهیم، در سایت به عنوان حامی ثبت نام کنید. اما راه‌های
                                    پیشنهادی و
                                    نیازهای جنبش:</p>
                                <ul style="text-align: justify;">
                                    <li>تولید محصولات رسانه‌ای</li>
                                    <li>تهیه محتوای تخصصی ناظر به مسائل کلان کشور یا مسائل محلی و منطقه‌ای</li>
                                    <li>سازماندهی و برگزاری جلسه، نشست تخصصی-ترویجی و …</li>
                                </ul>
                                <h4 class="text-success" style="text-align: justify;">حمایت مالی</h4>
                                <p style="text-align: justify;">
                                    در صورت امکان و تمایل می‌توانید با کمک‌های مالی خود به جنبش از ما کمک کنید. ما مبلغ
                                    ماهانه حداقل 30 هزارتومان را برای فعالین جنبش در نظر گرفته‌ایم. البته شما در واریز
                                    مبالغ
                                    بالاتر آزاد هستید. همچنین در راستای شفافیت، صورت مالی جنبش به صورت ماهانه در سایت
                                    منتشر
                                    می‌شود. برای واریز هر مبلغی که مدنظر دارید می‌توانید از
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
                    <?php } else { ?>
                    <div class=" padding-0 col-xs-12 alerts-container">
                        <!-- If Candidate Has Exam Result  -->
                        <?php if ($examResultText !== NULL) { ?>
                        <?php } else { ?>
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
                                <?php //include 'steps/second_exam_reject/index.php' ?>
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
                        <?php }
                        } ?>
                    </div>
                </div>
            <?php if ($examResultText !== NULL) { ?>
                <div class="row">
                    <table class="table table-condensed table-hover text-center">
                        <thead>
                        <tr style="background: #0f342f;color: #fff;">
                            <th class="text-center" style="font-size: 10px;">برآیند آزمون و کانون</th>
                            <th class="text-center" style="font-size: 10px;">نمره کانون ارزیابی (وزن 0.7)</th>
                            <th class="text-center" style="font-size: 10px;">نمره کل آزمون (وزن 0.3)</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-center <?php echo $examResultTDClass; ?>"><?php echo $userInfo['CandidateSignScore']; ?></td>
                            <td class="text-center"><?php echo $userInfo['CandidateRecordsScore']; ?></td>
                            <td class="text-center"><?php echo $userInfo['CandidateScore']; ?></td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-right">
                                <label class="label <?php echo $examResultClass; ?>">
                                    <?php echo $examResultText; ?>
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="chart-container" style="position: relative;margin: 40px 0;">
                        <canvas id="BarChart"></canvas>
                    </div>
                </div>
                <div class="col-xs-12 result-container" style="font-weight: 900;padding:0;">
                    جهت مشاهده نتایج تفصیلی کلیک کنید
                    <button
                            class="btn btn-success"
                            style="float: none;margin-bottom: 10px;background-color: #095644;color: #fff;">
                        <a href="#" style="color: #ffffff;">
                            نتایج تفصیلی
                        </a>
                    </button>
                </div>
                <br><br>
                <div class="col-xs-12">
                    <p>نقش‌های اصلی</p>
                    <ul>
                        <li style="color:rgb(54, 162, 235);">
                            نقش نمایندگی (برقراری ارتباط و تعامل با مردم)  
                        </li>
                        <li style="color:rgb(54, 162, 235);">
                            نقش ارزیابی (ارزیابی و تصویب طرح‌ها و لوایح) 
                        </li>
                    </ul>
                    <p>نقش‌های تکمیلی</p>
                    <ul>
                        <li style="color:rgb(255, 159, 64);">
                            نقش نظارت (نظارت برعملکرد دستگاه‌ها و سازمان‌های دولتی و عمومی)  
                        </li>
                        <li style="color:rgb(255, 159, 64);">
                            نقش طراحی (طراحی و تدوین طرح‌ها و دستورالعمل‌ها)  
                        </li>
                        <li style="color:rgb(255, 159, 64);">
                            نقش هماهنگ‌سازی (تبیین نقاط ضعف و قوت طرح‌ها و لوایح برای دیگر نمایندگان و اقناع آن‌ها) 
                        </li>
                    </ul>

                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!--Used To set Access Token For Using Hasht Exam Result-->
<iframe style="display:none;"></iframe>