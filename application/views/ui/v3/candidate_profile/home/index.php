<?php $_DIR = base_url('assets/ui/v3/'); ?>
<div class="container container-wrapper" style="background: none;">
    <div class="row col-xs-12 col-md-3 pull-right"><?php echo $sidebar; ?></div>
    <div class="col-xs-12 col-md-9 pull-right">
        <div class="row">
            <div class="col-xs-12">
                <div class="row col-xs-12 col-sm-3 pull-right">
                    <img class="thumbnail profile-image" width="170px" height="170px" id="imageProfile" src=""/>
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
                                <th class="fit full-name"></th>
                                <th class="fit national-code"></th>
                                <th class="fit phone"></th>
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
                            <th class="fit constituency-province"></th>
                            <th class="fit constituency-province-part"></th>
                            <th class="fit gender"></th>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-xs-12">
                <ol class="c-progress-steps">
                    <?php generateCandidateStatus($userInfo['CandidateStatus']); ?>
                </ol>
                <?php /* نامزد انتخاباتی ثبت نام کرده باشد*/ ?>
                <?php if ($userInfo['CandidateStatus'] == 'CandidateRegister') { ?>
                    <div class="col-xs-12 alert alert-warning">
                        <p>
                            <strong>
                                لطفا جهت ادامه فرآیند، رزومه خود را تکمیل کنید
                                <a target="_blank" class="btn btn-danger" href="http://new.moarefin.ir">تکمیل زرومه</a>
                            </strong>
                        </p>
                    </div>
                <?php } ?>
                <?php /* نامزد انتخاباتی رزومه را تکمیل کرده باشد*/ ?>
                <?php if ($userInfo['CandidateStatus'] == 'CandidateResumeCompleted') { ?>
                    <div class="col-xs-12 alert alert-info">
                        <p>
                            <strong>
                                رزومه شما تکمیل شده ولی شما شرایط قانونی نامزد انتخاباتی را در رزومه خود ندارید.درصورت نیاز رزومه خود را ویرایش کنید
                            </strong>
                        </p>
                        <p class="text-danger text-center">
                            <a href="<?php echo base_url('AboutUs/candidatelegal'); ?>">
                                مشاهده شرایط  قانونی نامزد انتخاباتی
                            </a>
                        </p>
                        <p class="text-danger text-center">
                            <strong>
                                <a target="_blank" class="btn btn-danger" href="http://new.moarefin.ir">تکمیل زرومه</a>
                            </strong>
                        </p>
                    </div>
                <?php } ?>
                <?php /* نامزد انتخاباتی رزومه را تکمیل کرده باشد*/ ?>
                <?php if ($userInfo['CandidateStatus'] == 'CandidateResumeRejected') { ?>
                    <div class="col-xs-12 alert alert-danger">
                        <p>
                            <strong>
                                رزومه شما رد شده است و شما شرایط نامزدی انتخابات را ندارید
                            </strong>
                        </p>
                    </div>
                <?php } ?>
                <?php /* نامزد انتخاباتی نمره رزومه نداشته باشدد*/ ?>
                <?php if ($userInfo['CandidateStatus'] == 'CandidateResumeAccepted' ) { ?>
                    <div class="col-xs-12 alert alert-warning">
                        <i class="fa fa-info fa-3x pull-right"></i>
                        <strong>
                            سامانه قادر به شناسایی و بررسی سایر شرایط نامزدی انتخاباتی از جمله اعتیاد، وضعیت سلامت جسمانی و .. نیست.
                            در صورتی که شما دچار اعتیاد، بیماری جسمی و .. هستید در مراحل بعد بصورت  خودکار
                            توسط شورای نگهبان رد صلاحیت خواهید شد.
                            لطفا یکی از موارد زیر را انتخاب کنید
                        </strong>
                        <p class="text-danger text-center">
                            <a target="_blank" href="<?php echo base_url('AboutUs/candidatelegal'); ?>">
                                مشاهده شرایط  قانونی نامزد انتخاباتی
                            </a>
                        </p>
                        <p class="text-danger text-center">  این مورد قابل برگشت است و میتوانید انتخاب خود را تغییر دهید

                    </div>
                    <div class="row col-xs-12 text-center">
                        <button class="btn btn-success btn-lg" id="hasNormalCondition">
                            <i class="fa fa-check"></i>
                            <span>سایر شرایط نامزدی انتخابات را دارم</span>
                        </button>
                        <button class="btn btn-danger  btn-lg" id="hasNotNormalCondition">
                            <i class="fa fa-close"></i>
                            <span>سایر شرایط نامزدی انتخابات را ندارم</span>
                        </button>
                    </div>
                <?php } ?>
                <?php /* نامزد انتخاباتی شرایط*/ ?>
                <?php if ($userInfo['CandidateStatus'] == 'CandidateHasNotContinueCondition') { ?>
                    <div class="col-xs-12 alert alert-warning">
                        <i class="fa fa-info fa-3x pull-right"></i>
                        <strong>در صورتی که سایر شرایط نامزد انتخاباتی را دارید میتوانید راه را ادامه دهید</strong>
                    </div>
                    <div class="row col-xs-12 text-center">
                        <p class="text-danger text-center">
                            <a target="_blank" href="<?php echo base_url('AboutUs/candidatelegal'); ?>">
                                مشاهده شرایط  قانونی نامزد انتخاباتی
                            </a>
                        </p>
                        <p class="text-danger">  این مورد قابل برگشت است و میتوانید انتخاب خود را تغییر دهید</p>
                        <button class="btn btn-success btn-lg" id="hasNormalCondition">
                            <i class="fa fa-check"></i>
                            <span>سایر شرایط نامزدی انتخابات را دارم</span>
                        </button>
                    </div>
                <?php } ?>
                <?php if ($userInfo['CandidateStatus'] == 'CandidateHasContinueCondition' ) { ?>
                    <div class="col-xs-12 alert alert-info">
                        <i class="fa fa-info fa-3x pull-right"></i>
                        <strong>
                            شما دارای سایر شرایط جهت ادامه فرآیند نامزدی انتخابات هستید.
                            رزومه شما در حال امتیازدهی می باشد.
                            بعد از امتیاز دهی میتوانید زمان و محل آزمون خود را رزور کنید.
                        </strong>
                    </div>
                    <div class="row col-xs-12 text-center">
                        <p class="text-danger text-center">
                            <a target="_blank" href="<?php echo base_url('AboutUs/candidatelegal'); ?>">
                                مشاهده شرایط  قانونی نامزد انتخاباتی
                            </a>
                        </p>
                        <p class="text-danger">  این مورد قابل برگشت است و میتوانید انتخاب خود را تغییر دهید</p>
                        <button class="btn btn-danger  btn-lg" id="hasNotNormalCondition">
                            <i class="fa fa-close"></i>
                            <span>سایر شرایط نامزدی انتخابات را ندارم</span>
                        </button>
                    </div>
                <?php } ?>
                <?php /* نامزد انتخاباتی نمره رزومه داشته باشد*/ ?>
                <?php if ($userInfo['CandidateStatus'] == 'CandidateResumeMarked') { ?>
                    <div class="col-xs-12">
                        <p>
                            <strong>
                                روزمه شما تایید شد. امتیاز رزومه شما
                                <label class="label label-info"><?php echo $userInfo['CandidateScore']; ?></label>
                                می باشد
                            </strong>
                        </p>
                    </div>
                    اکنون شما میتوانید یکی از آزمون های مرحله اول
                    را انتخاب کنید.
                    <a href="<?php echo base_url('Profile/examList') ?>" class="btn btn-danger">
                        رزرو آزمون
                    </a>
                <?php } ?>
                <?php /* نامزد انتخاباتی نمره رزومه داشته باشد*/ ?>
                <?php if ($userInfo['CandidateStatus'] == 'CandidateExamFirstStep' && empty($firstStepExam)) { ?>
                    <div class="col-xs-12">
                        <p>
                            <strong>
                                شما آزمون مرحله اول را رزور کرده اید.
                                لطفا در تاریخ  و ساعت مشخص شده در محل آزمون حضور داشته باشید.
                            </strong>
                        </p>
                    </div>
                <?php } ?>
                <?php if ($userInfo['CandidateStatus'] == 'CandidateExamFirstStep' && !empty($firstStepExam)) { ?>
                    <div class="col-xs-12">
                        اکنون شما میتوانید یکی از آزمون های مرحله دوم
                        را انتخاب کنید.
                        <a href="<?php echo base_url('Profile/examListSecond') ?>" class="btn btn-danger">
                            رزرو آزمون
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>