<?php $_URL = base_url();
$_DIR = base_url('assets/ui/'); ?>
<div class="padding-top-60 padding-bottom-60 access-page-bg rtl-dir">
    <div class="container">
        <div class="row register-page-form">
            <div class="col-xl-4 col-md-6">
                <div class="access-form rtl-dir text-justify">
                    <div class="form-header">
                        <h5><i data-feather="edit"></i> بازیابی رمز عبور </h5>
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
                        <label>شماره همراه</label>
                        <input type="text"
                               name="inputPhone"
                               id="inputPhone"
                               placeholder="شماره همراه را وارد کنید"
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
                    </div><br>
                    <button id="buttonResetPassword" class="button primary-bg btn-block">ارسال رمز عبور جدید</button>
                    <div class="shortcut-login">
                        <p class="rtl-dir text-justify">
                            حساب کاربری دارید؟
                            <a href="<?php echo base_url('Account/login') ?>">وارد شوید</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

