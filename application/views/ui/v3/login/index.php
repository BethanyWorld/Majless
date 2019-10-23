<?php $_DIR = base_url('assets/ui/v3/'); ?>
<div class="page-caption">
    <?php echo $title; ?>
</div>
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
                <label>
                    <span class="required"></span>
                    تلفن همراه
                </label>
                <input class="form-control" type="text"
                       id="inputPhone"
                       name="inputPhone"/>
            </div>
            <div class="form-group">
                <label>
                    <span class="required"></span>
                    رمز عبور
                </label>
                <input class="form-control" type="password"
                       id="inputPassword"
                       name="inputPassword"/>
            </div>
            <div class="form-group">
                <div class="pull-right">
                    <label>
                        <span class="required"></span>
                        کد امنیتی
                    </label>
                    <img class="captcha_img"
                         style="margin: 10px 5px;border: 2px solid #ccc;"
                         src="<?php echo base_url('GetCaptcha'); ?>"/>
                    <input type="text"
                           style="position: relative;top:15px;    width: calc(100% - 175px);float: left;"
                           name="inputCaptcha" id="inputCaptcha" class="form-control"
                           placeholder="کد امنیتی">
                </div>
            </div>
            <div class="form-group">
                <div class="row col-xs-12 col-md-5">
                    <button class="btn btn-danger btn-submit  pull-left" id="submitLoginForm">
                        ورود
                    </button>
                </div>
                <div class="row col-xs-12 col-md-7 pull-right">
                    <a class="d-i-b pull-right" href="<?php echo base_url('ResetPassword') ?>">
                        <strong style="line-height: 44px;">
                            فراموشی رمز عبور
                        </strong>
                    </a>
                    /
                    <a class="d-i-b" href="<?php echo base_url('SignUp') ?>">
                        <strong style="line-height: 44px;">
                            ثبت نام کنید
                        </strong>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>