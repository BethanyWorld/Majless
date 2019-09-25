<?php
$_URL = base_url();
$_DIR = base_url('assets/ui/');
?>

<div class="padding-top-60 padding-bottom-60 access-page-bg rtl-dir">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="access-form">
                    <div class="form-header">
                        <h5 class="rtl-dir text-justify">
                            <i data-feather="user"></i>
                            ورود به حساب کاربری
                        </h5>
                    </div>
                    <div class="account-type">
                        <label for="idRegisterUser">
                            <input id="idRegisterUser" type="radio" name="registerType" value="User" />
                            <span>کارجو هستم</span>
                        </label>
                        <label for="idRegisterEmployer">
                            <input id="idRegisterEmployer" type="radio" name="registerType" value="Employer">
                            <span>کارفرما هستم</span>
                        </label>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="inputPhone" id="inputPhone"
                               placeholder="شماره همراه" autofocus/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="inputPassword" id="inputPassword" placeholder="رمز عبور"
                               class="form-control">
                    </div>
                    <div class="form-group">
                        <i class="recaptcha"
                           data-feather="refresh-cw"
                           style="cursor: pointer;"
                           id="recaptcha"></i>
                        <img class="captcha_img" src="<?php echo base_url('GetCaptcha'); ?>"/>
                        <div class="text-center col-sm-6 col-xs-12 float-right">
                            <input type="text" name="inputCaptcha" id="inputCaptcha" class="form-control"
                                   placeholder="کد امنیتی" autofocus>
                        </div>
                    </div>
                    <div class="form-group col-12 more-option">
                        <p class="rtl-dir text-justify">
                            <a href="<?php echo base_url('Account/resetPassword'); ?>">فراموشی رمز عبور</a>
                        </p>
                    </div>
                    <button id="buttonLogin" class="button primary-bg btn-block">ورود</button>
                    <div class="shortcut-login">
                        <p class="rtl-dir text-justify">
                            حساب کاربری ندارید؟
                            <a href="<?php echo base_url('Account/Register') ?>">ثبت نام کنید</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
