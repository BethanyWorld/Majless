<?php $_DIR = base_url('assets/ui/v3/'); ?>
<h1 class="page-caption">
    <?php echo $title; ?>
</h1>
<div class="container container-wrapper">
    <div class="col-xs-12 col-md-3 pull-right">
        <div class="row col-xs-12 sidebar">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">ثبت نام</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li><a href="<?php echo base_url('SignUp?type=candidate') ?>">نامزد انتخاباتی</a></li>
                        <li><a href="<?php echo base_url('SignUp?type=elite') ?>">بانک نخبگان</a></li>
                        <li><a href="<?php echo base_url('SignUp?type=sponsor') ?>">حامی</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-9">
        <input type="hidden" id="inputCSRF" name="inputCSRF" value="<?= $CSRF; ?>"/>
        <div class="col-xs-12 col-md-6 col-md-offset-3">
            <div class="form-group">
                <div class="col-xs-12 pull-right" style="padding-right: 0;">
                    <label>
                        <span class="required"></span>
                        تلفن همراه
                    </label>
                    <input style="font-family: tahoma;"
                            class="form-control" type="text" id="inputPhone" name="inputPhone" autofocus/>
                </div>
            </div>
            <div class="col-xs-12 form-group">
                <div class="">
                    <label>
                        <span class="required"></span>
                        کد امنیتی
                    </label>
                    <i class="fa fa-refresh recaptcha"></i>
                    <img class="captcha_img"
                         style="margin: 10px 5px;border: 2px solid #ccc;"
                         src="<?php echo base_url('GetCaptcha'); ?>"/>
                    <input type="text"
                           style="position: relative;top:15px;width: calc(100% - 205px);float: left;font-family: tahoma;"
                           name="inputCaptcha" id="inputCaptcha" class="form-control"
                           placeholder="کد امنیتی">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12 col-md-6">
                    <button class="btn btn-submit pull-left" id="submitResetPassword">
                        بازیابی رمز عبور
                    </button>
                </div>
                <div class="gap"></div>
                <div class="row col-xs-12 pull-right">
                    <a class="d-i-b btn btn-default" href="<?php echo base_url('SignUp') ?>">
                        <strong style="line-height: 44px;">
                            ثبت نام کنید
                        </strong>
                    </a>
                    <a class="d-i-b btn btn-default" href="<?php echo base_url('Login') ?>">
                        <strong style="line-height: 44px;">
                            وارد شوید
                        </strong>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>