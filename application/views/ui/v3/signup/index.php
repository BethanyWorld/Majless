<?php $_DIR = base_url('assets/ui/v3/'); ?>
<div class="page-caption">
    <?php echo $title; ?>
</div>
<div class="container container-wrapper">
    <div class="col-xs-12 col-md-3 pull-right">
        <div class="row  sidebar">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">راهنمای ثبت نام</h3>
                </div>
                <div class="panel-body text-justify">
                    بعد از تکمیل فرم مقابل پیامکی حاوی اطلاعات جهت ادامه روند ثبت نام دریافت خواهید کرد
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">ثبت نام</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li><a href="<?php echo base_url('SignUp?type=candidate') ?>">نامزد انتخاباتی</a></li>
<!--                        <li><a href="--><?php //echo base_url('SignUp?type=elite') ?><!--">بانک نخبگان</a></li>-->
                        <li><a href="<?php echo base_url('SignUp?type=sponsor') ?>">حامی</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-9">
        <input type="hidden" id="inputCSRF" name="inputCSRF" value="<?= $CSRF; ?>"/>
        <div class="col-xs-12 col-md-8 col-md-offset-2 padding-right-0">
            <div class="form-group">
                <div class="col-xs-12 col-md-6 pull-right padding-right-0">
                    <label>
                        <span class="required"></span>
                        نام
                    </label>
                    <input
                            value="<?php if (isset($defaultValue['fn'])) echo $defaultValue['fn']; ?>"
                            class="form-control" type="text" id="inputSignUpFirstName" name="inputSignUpFirstName"
                            autofocus/>
                </div>
                <div class="col-xs-12 col-md-6 padding-right-0">
                    <label>
                        <span class="required"></span>
                        نام و نام خانوادگی
                    </label>
                    <input
                            value="<?php if (isset($defaultValue['ln'])) echo $defaultValue['ln']; ?>"
                            class="form-control" type="text" id="inputSignUpLastName" name="inputSignUpLastName"
                            autofocus/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12 padding-right-0">
                    <label>
                        <span class="required"></span>
                        تلفن همراه
                    </label>
                    <input
                            value="<?php if (isset($defaultValue['p'])) echo $defaultValue['p']; ?>"
                            class="form-control" type="text" id="inputSignUpPhone" name="inputSignUpPhone"
                            style="font-family: tahoma;"/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12 padding-right-0">
                    <label>
                        <span class="required"></span>
                        کد ملی
                    </label>
                    <input
                            value="<?php if (isset($defaultValue['nc'])) echo $defaultValue['nc']; ?>"
                            class="form-control" type="text" id="inputSignUpNationalCode"
                            name="inputSignUpNationalCode"
                            style="font-family: tahoma;"/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12 col-md-6 pull-right padding-right-0">
                    <label>
                        <span class="required"></span>
                        استان
                    </label>
                    <select name="inputConstituencyProvince" id="inputConstituencyProvince"
                            class="form-control">
                        <option value="">-- انتخاب کنید --</option>
                        <?php foreach ($states as $state) { ?>
                            <option value="<?php echo $state['StateId']; ?>">
                                <?php echo $state['StateName']; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-xs-12 col-md-6 padding-right-0">
                    <label>
                        <span class="required"></span>
                        شهر
                    </label>
                    <select name="inputConstituencyProvincePart" id="inputConstituencyProvincePart"
                            class="form-control">
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12 padding-0">
                    <label>
                        <span class="required"></span>
                        ثبت نام به عنوان
                    </label>
                </div>
                <div class="col-xs-12 padding-0">
                    <div class="form-group">
                        <label class="label-sign-up-type" for="inputSignUpTypeCandidate">نامزد انتخاباتی</label>
                        <input
                            <?php if ($signUpType == 'candidate') echo "checked"; ?>
                                type="checkbox"
                                id="inputSignUpTypeCandidate"
                                name="inputSignUpTypeCandidate"
                                class="sign-up-type" value="1"/>
                        <label class="label-sign-up-type hidden" for="inputSignUpTypeEliote">بانک نخبگان</label>
                        <input
                            <?php if ($signUpType == 'elite') echo "checked"; ?>
                                type="checkbox"
                                id="inputSignUpTypeEliote"
                                name="inputSignUpTypeEliote"
                                class="sign-up-type hidden" value="2" />
                        <label class="label-sign-up-type" for="inputSignUpTypeSponsor">حامی</label>
                        <input
                            <?php if ($signUpType == 'sponsor') echo "checked"; ?>
                                type="checkbox"
                                id="inputSignUpTypeSponsor"
                                name="inputSignUpTypeSponsor"
                                class="sign-up-type" value="3"/>


                        <!--when support checked true-->
                        <div class="col-md-12 col-xs-12 support-div">
                            <p>در چه زمینه هایی قصد دارید به جنبش کمک کنید و از ما حمایت کنید ؟</p>
                            <input
                                    type="checkbox"
                                    id=""
                                    name=""
                                    class="" value=""/>
                            <label for="">تولید محتوای تخصصی ناظر به مسائل کشور</label>
                            <br>
                            <input
                                    type="checkbox"
                                    id=""
                                    name=""
                                    class="" value=""/>
                            <label for="">تولید محتوای رسانه ای برای ترویج جنبش</label>
                            <br>
                            <input
                                    type="checkbox"
                                    id=""
                                    name=""
                                    class="" value=""/>
                            <label for="">حمایت مالی یا جذب منابع برای جنبش</label>
                            <br>
                            <input
                                    type="checkbox"
                                    id=""
                                    name=""
                                    class="" value=""/>
                            <label for="">سازماندهی و ترویج چهره به چهره جنبش</label>
                        </div>
                        <!--when support checked true-->

                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="pull-right">
                    <label class="">
                        <span class="required"></span>
                        کد امنیتی
                    </label>
                    <i class="fa fa-refresh recaptcha"></i>
                    <img class="captcha_img"
                         style="margin: 10px 5px;border: 2px solid #ccc;"
                         src="<?php echo base_url('GetCaptcha'); ?>"/>
                    <input type="text"
                           style="position: relative;top:10px; width:calc(100% - 205px);float: left;font-family: tahoma;"
                           name="inputCaptcha" id="inputCaptcha" class="form-control"
                           placeholder="کد امنیتی">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12 col-md-6 padding-0">
                    <button class="btn btn-danger btn-submit pull-left" id="submitSignUpForm">
                        ثبت نام
                    </button>
                </div>
                <div class="gap"></div>
                <div class="col-xs-12 padding-0">
                    <a class="d-i-b btn btn btn-default" href="<?php echo base_url('Login') ?>">
                        <strong style="line-height: 44px;">
                           قبلا ثبت نام کرده اید؟ وارد شوید
                        </strong>
                    </a>
                </div>
            </div>

            <!--    for sweet alert-->
            <div id="h3-1" class="col-md-12 col-xs-12 Patron animated fadeInUp">
                <h3>
                    <span>از حمایت شما متشکریم .</span>
                </h3>
            </div>
            <!--    for sweet alert-->
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade rtl" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">اعلان</h4>
            </div>
            <div class="modal-body">
                قبلا با این شماره تلفن یا کد ملی ثبت نام شده است.
                لطفا جهت ادامه مراحل ثبت نام رمز عبور خود را بازیابی کنید
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">انصراف</button>
                <a href="<?php echo base_url('ResetPassword'); ?>">
                    <button type="button" class="btn btn-danger">بازیابی رمز عبور</button>
                </a>
            </div>
        </div>
    </div>
</div>


