<?php
$_URL = base_url();
$_DIR = base_url('assets/ui/');
?><!DOCTYPE html>
<html>
<head>
    <title>پنل نماینده</title>
    <base href="<?php echo base_url(); ?>"/>
    <meta charset="utf-8"/>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="جوان کار - سامانه کاریابی و جذب نیرو"/>
    <link rel="icon" href="<?php echo base_url('assets/ui/v1/images/logo.png'); ?>" type="image/png"/>
    <link href="<?php echo base_url('assets/ui/v1/css/bootstrap.min.css'); ?>" rel="stylesheet"/>
    <link href="<?php echo base_url('assets/ui/v1/css/font-awesome-css.min.css'); ?>" rel="stylesheet"/>
    <link href="<?php echo base_url('assets/ui/v1/css/iziToast.min.css'); ?>" rel="stylesheet"/>
    <link href="<?php echo base_url('assets/ui/v1/css/custom.css'); ?>" rel="stylesheet"/>
    <link href="<?php echo base_url('assets/ui/v1/css/responsive.css'); ?>" rel="stylesheet"/>
    <script type="text/javascript" src="<?php echo base_url('assets/ui/v1/js/jquery-2.1.4.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/ui/v1/js/iziToast.min.js'); ?>"></script>
    <script type="text/javascript">
        var base_url = "<?php echo base_url(); ?>Agent/";

        function toggleLoader() {
            $(".preloader").fadeToggle();
        }

        function reCaptcha() {
            $(".recaptcha").addClass('fa-spin');
            $src = $(".captcha_img").attr('src');
            $(".captcha_img").attr('src', '').css({
                width: '100px',
                height: '50px',
                display: 'inline-block',
                opacity: '0'
            });
            setTimeout(function () {
                $(".captcha_img").attr('src', $src).css({
                    width: '100px',
                    height: '50px',
                    display: 'inline-block',
                    opacity: '1'
                });
                $(".recaptcha").removeClass('fa-spin');
            }, 400);
        }
    </script>
</head>
<body>
<?php
$_URL = base_url();
$_DIR = base_url('assets/ui/v1/');
?>
<!-- container-fluid -->
<div class="container-fluid">
    <div class="preloader">
        <div class="sk-fading-circle">
            <div class="sk-circle1 sk-circle"></div>
            <div class="sk-circle2 sk-circle"></div>
            <div class="sk-circle3 sk-circle"></div>
            <div class="sk-circle4 sk-circle"></div>
            <div class="sk-circle5 sk-circle"></div>
            <div class="sk-circle6 sk-circle"></div>
            <div class="sk-circle7 sk-circle"></div>
            <div class="sk-circle8 sk-circle"></div>
            <div class="sk-circle9 sk-circle"></div>
            <div class="sk-circle10 sk-circle"></div>
            <div class="sk-circle11 sk-circle"></div>
            <div class="sk-circle12 sk-circle"></div>
        </div>
    </div>
    <link rel="stylesheet" href="<?php echo $_DIR . 'css/page.css'; ?>"/>

    <div class="col-xs-12" id="main-page-container-wrapper">
        <div class="container">
            <div id="loginForm" class="col-xs-12 col-xs-12 col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-4 ">
                <div class="login-wrap">
                    <h2>ورود نماینده به حساب کاربری</h2>
                    <div class="form">
                        <div class="row col-xs-12 rtl">
                            <label>شماره همراه</label>
                            <input type="text" name="inputPhone" id="inputPhone" placeholder="شماره همراه" autofocus/>
                        </div>
                        <div class="row col-xs-12 rtl">
                            <label>رمز عبور</label>
                            <input type="password" name="inputPassword" id="inputPassword" placeholder="رمز عبور"/>
                        </div>

                        <div class="row form-group col-xs-12"
                             style="padding-right: 20px !important;margin-bottom: 15px !important;">
                            <div class="row text-right col-xs-12 pull-left">
                                <label>کد امنیتی</label>
                            </div>
                            <div class="row text-right col-sm-6 col-xs-12 pull-left">
                                <i class="fa fa-refresh recaptcha"
                                   style="cursor: pointer;position: relative;top: -20px;right:-4px;"
                                   id="recaptcha"></i>
                                <img class="captcha_img" src="<?php echo base_url('GetCaptcha'); ?>"/>
                            </div>
                            <div class="row text-center col-sm-6 col-xs-12 pull-right">
                                <input type="text" name="inputCaptcha" id="inputCaptcha" class="form-control"
                                       placeholder="کد امنیتی" autofocus>
                            </div>

                        </div>
                        <div class="row col-xs-12 rtl">
                            <button id="buttonLogin">ورود</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- container-fluid -->
</body>
</html>