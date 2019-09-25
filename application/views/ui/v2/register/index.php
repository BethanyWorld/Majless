<?php $_URL = base_url();
$_DIR = base_url('assets/ui/'); ?>
<style>
    .register-page-active-form {
         display: none;
     }
</style>
<div class="padding-top-60 padding-bottom-60 access-page-bg rtl-dir">
    <div class="container">
        <div class="row register-page-form">
            <div class="col-xl-4 col-md-6">
                <div class="access-form rtl-dir text-justify">
                    <div class="form-header">
                        <h5><i data-feather="edit"></i> ثبت نام کارفرما و کارجو</h5>
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
                        <label>نام و نام خانوداگی</label>
                        <input type="text"
                               placeholder="نام و نام خانوداگی را وارد کنید"
                               class="form-control"
                               name="inputFullName"
                               id="inputFullName"
                               autofocus/>
                    </div>
                    <div class="form-group">
                        <label>شماره همراه</label>
                        <input type="text"
                               name="inputPhone"
                               id="inputPhone"
                               placeholder="شماره همراه را وارد کنید"
                               class="form-control">
                    </div>
                    <div class="form-group">
                        <label>رمز عبور</label>
                        <input type="password"
                               name="inputPassword"
                               id="inputPassword"
                               placeholder="رمز عبور خود را وارد کنید"
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
                    <div class="more-option terms">
                        <div class="mt-0 terms">
                            <input class="custom-radio" type="checkbox" id="radio-4" name="termsandcondition" checked>
                            <label for="radio-4">
                                <span class="dot"></span>
                                قوانین و مقررات را میپذیرم
                            </label>
                        </div>
                    </div>
                    <button id="buttonRegister" class="button primary-bg btn-block">ثبت نام</button>
                    <div class="shortcut-login">
                        <p class="rtl-dir text-justify">
                            حساب کاربری دارید؟
                            <a href="<?php echo base_url('Account/login') ?>">وارد شوید</a>
                        </p>
                        <p class="rtl-dir text-justify">
                            <a href="<?php echo base_url('Account/resendCode') ?>">ارسال مجدد کد فعال سازی</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row register-page-active-form">
            <div class="col-xl-4 col-md-6">
                <div class="access-form">
                    <div class="form-header rtl-dir text-justify">
                        <h5><i data-feather="user-check"></i> فعال سازی حساب </h5>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 rtl-dir text-justify">
                            <label>کد فعال سازی</label>
                            <input type="text"
                                   class="form-control"
                                   name="inputActivationCode"
                                   id="inputActivationCode"
                                   placeholder="کد فعال سازی حساب کاربری را وارد کنید"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 rtl">
                            <button id="buttonActiveCode"
                                    class="button primary-bg btn-block">تایید کد ثبت نام
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

