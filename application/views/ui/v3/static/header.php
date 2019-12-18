<?php
$_DIR = base_url('assets/ui/v4/');
$CI =& get_instance();
$loginInfo = $CI->session->userdata('UserLoginInfo');
$userIsLogged = $CI->session->userdata('UserIsLogged');
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="en-US" prefix="og: http://ogp.me/ns#">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="en-US" prefix="og: http://ogp.me/ns#">
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <title><?php echo urldecode($pageTitle); ?></title>
    <base href="<?php echo base_url(); ?>"/>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8;">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="شفاف سازی اطلاعات نمایندگان مجلس"/>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <link rel="shortcut icon" href="<?= $_DIR; ?>images/fav16.png">
    <link rel="apple-touch-icon" href="<?= $_DIR; ?>images/fav16.png">
    <link rel="icon" href="<?= $_DIR; ?>images/fav32.png" sizes="32x32" type="image/png">
    <link rel="apple-touch-icon-precomposed" href="<?= $_DIR; ?>images/fav152.png" type="image/png" sizes="152x152">
    <link rel="apple-touch-icon-precomposed" href="<?= $_DIR; ?>images/fav120.png" type="image/png" sizes="120x120">
    <link rel="icon" href="<?= $_DIR; ?>images/fav96.png" sizes="96x96" type="image/png">
    <link rel='stylesheet' id='style-css' href='<?= $_DIR; ?>css/style.css?ver=1.0'/>
    <link rel='stylesheet' id='bootstrap-css' href='<?= $_DIR; ?>css/bootstrap.min.css?ver=3.3.7'/>
    <link rel='stylesheet' id='fontawesome-css' href='<?= $_DIR; ?>css/font-awesome-css.min.css?ver=1.0'/>
    <link rel='stylesheet' id='bootstrap-theme-css' href='<?= $_DIR; ?>css/bootstrap-theme.min.css?ver=3.3.7'/>
    <link rel='stylesheet' id='mmenu-css' href='<?= $_DIR; ?>css/jquery.mmenu.all.css?ver=1.0'/>
    <link rel='stylesheet' id='animate-css-css' href='<?= $_DIR; ?>css/animate.min.css?ver=1.0' />
    <link rel='stylesheet' id='light-box' href='<?= $_DIR; ?>css/lightbox.min.css?ver=1.0' />
    <link rel='stylesheet' id='campaign_options-css' href='<?= $_DIR; ?>css/font-style.css?ver=1.0'/>
    <link rel='stylesheet' id='campaign_options-css' href='<?= $_DIR; ?>css/options.css?ver=1.0'/>
    <link rel='stylesheet' id='campaign_style-css' href='<?= $_DIR; ?>css/theme.css?ver=1.0'/>
    <link rel='stylesheet' id='slick-css' href='<?= $_DIR; ?>css/slick.css?ver=1.0' type='text/css' media='all'/>
    <link rel="stylesheet" href="<?= $_DIR; ?>css/iziToast.min.css"/>
    <script src="<?= $_DIR; ?>js/iziToast.min.js"></script>
    <script src='<?= $_DIR; ?>js/jquery-2.2.4.min.js?ver=2.2.4'></script>
    <script src='<?= $_DIR; ?>js/jquery.mmenu.min.all.js?ver=1.0'></script>
    <script src='<?= $_DIR; ?>js/jquery.parallax.min.js?ver=1.0'></script>
    <script src="<?php echo $_DIR; ?>js/jquery.mask.min.js"></script>
    <script src="<?php echo $_DIR; ?>js/lightbox.min.js"></script>
    <script src="<?php echo $_DIR; ?>js/helper.min.js"></script>
    <script type="text/javascript"> var base_url = "<?php echo base_url(); ?>";</script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-101180356-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'UA-101180356-3');
    </script>
</head>
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_four"></div>
        </div>
    </div>
</div>
<body class="home">
<div id="themeblossom_loading_screen" class="pace absolutecenter hidden-sm hidden-xs">
    <div id="themeblossom_loading_screen_logo">
        <div class="loader_ring"></div>
        <a href="<?php echo base_url(); ?>">
            <img src="<?= $_DIR; ?>images/main-logo.png" width="80px" height="100%">
        </a>
    </div>
</div>
<div id="page" class="hfeed site">
    <header id="masthead" class="site-header">
        <div id="promo">
            <div class="container">
                <div class="row rtl">
                    <div class="col-xs-12 col-sm-6">
                        <div class="alignleft">
                            <a target="_blank" href="http://twitter.com/azmaa_net">
                                <span class="fa fa-twitter"></span>
                            </a>
                            <a target="_blank" href="http://instagram.com/azmaa_net">
                                <span class="fa fa-instagram"></span>
                            </a>
                            <a target="_blank" href="http://t.me/azmaa_net">
                                <span class="fa fa-telegram"></span>
                            </a>
                            <a target="_blank" href="https://www.aparat.com/azmaa_net" class="social-svg-style">
                                <span class="">
                                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="22px" height="22px"
                                         viewBox="0 0 512 512">
                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                <path d="M1570 4615 c-30 -8 -93 -34 -140 -57 -115 -56 -230 -169 -283 -278
-30 -60 -95 -276 -140 -461 -5 -19 32 13 136 116 206 206 402 337 655 440 113
46 334 108 430 121 29 4 51 9 48 11 -2 2 -96 29 -208 60 -182 49 -216 55 -323
59 -86 3 -136 0 -175 -11z"></path>
                <path d="M2388 4349 c-208 -20 -413 -78 -608 -170 -550 -262 -925 -766 -1015
-1365 -19 -128 -19 -390 0 -518 90 -599 465 -1103 1015 -1365 585 -278 1266
-228 1805 134 406 272 672 676 772 1170 26 129 26 511 0 640 -100 494 -366
898 -772 1170 -353 237 -777 344 -1197 304z m-236 -490 c281 -58 464 -349 393
-624 -100 -384 -583 -515 -864 -234 -202 202 -201 511 3 715 129 128 295 179
468 143z m1321 -254 c232 -60 387 -256 387 -489 0 -151 -43 -259 -145 -361
-70 -70 -155 -118 -246 -140 -126 -29 -232 -16 -355 45 -200 98 -315 328 -271
541 23 112 61 183 142 265 105 105 213 151 360 153 39 1 97 -6 128 -14z m-816
-864 c76 -39 123 -112 123 -192 0 -173 -168 -279 -325 -205 -59 27 -77 46
-104 106 -88 193 118 388 306 291z m-776 -241 c30 -5 91 -28 135 -50 200 -98
315 -328 271 -541 -23 -112 -61 -183 -142 -265 -164 -165 -393 -201 -603 -95
-269 136 -358 489 -186 739 115 165 322 249 525 212z m1333 -256 c263 -68 430
-333 375 -596 -29 -137 -148 -293 -269 -351 -207 -100 -442 -63 -597 92 -203
202 -204 520 -3 721 128 127 319 179 494 134z"></path>
                <path d="M3770 4112 c0 -4 20 -22 45 -40 114 -86 289 -279 395 -438 145 -215
259 -502 300 -762 7 -40 14 -71 17 -69 2 3 33 114 69 248 56 214 64 255 64
334 0 177 -65 332 -190 456 -101 99 -191 144 -405 199 -88 23 -190 50 -227 60
-38 10 -68 16 -68 12z"></path>
                <path d="M580 2237 c0 -4 -25 -100 -55 -214 -47 -179 -55 -220 -55 -298 0
-177 65 -332 189 -455 107 -105 179 -140 443 -210 117 -31 215 -55 217 -54 2
2 -9 14 -25 26 -56 43 -237 224 -297 298 -183 225 -325 523 -387 806 -18 85
-30 124 -30 101z"></path>
                <path d="M4095 1319 c-22 -29 -81 -94 -131 -145 -272 -273 -629 -467 -1004
-544 -57 -11 -106 -23 -108 -25 -4 -4 -5 -4 228 -66 307 -82 431 -80 618 12
138 68 261 199 311 335 26 67 133 464 129 476 -2 5 -21 -15 -43 -43z"></path>
</g>
</svg>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="menu-top-menu-container">
                            <!--                            <ul id="menu-top-menu" class="top-nav-menu">-->
                            <!--                                <li id="menu-item-840"-->
                            <!--                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-840">-->
                            <!--                                    <a href="tel:09029026934">پشتیبانی:09029026934</a>-->
                            <!--                                </li>-->
                            <!--                            </ul>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="site-branding" class="header-main">
            <div class="container">
                <h1 class="site-title" id="main-logo">
                    <a id="main-logo-link" href="<?php echo base_url(); ?>" rel="home">
                        <img src="<?= $_DIR; ?>images/main-logo.png"
                             style="position: relative;width: 95px;top: 10px;"
                             alt="جنبش از ما">
                    </a>
                </h1>
                <nav id="primary-navigation" class="site-navigation primary-navigation rtl">
                    <div class="menu-main-menu-container">
                        <ul id="menu-main-menu" class="nav-menu">
                            <li class="current-menu-item"><a href="<?php echo base_url() ?>">صفحه اصلی</a></li>
                            <li><a href="<?php echo base_url('State') ?>">فهرست نامزدها</a></li>
                            <li>
                                <a href="<?php echo base_url('blog/?page_id=40'); ?>">آشنایی با جنبش از ما</a>
                                <ul>
                                    <li><a href="<?php echo base_url('blog/?page_id=40'); ?>">معرفی جنبش از ما</a></li>
                                    <li><a href="<?php echo base_url('blog/?page_id=42'); ?>">بیانیه ارزش</a></li>
                                    <li><a href="<?php echo base_url('blog/?page_id=46'); ?>">فرآیند سنجش نامزدها</a></li>
                                    <li><a href="<?php echo base_url('blog/?page_id=44'); ?>">آشنایی با آزمون ها</a></li>
                                    <li><a href="<?php echo base_url('blog/?page_id=49'); ?>">سوالات متداول</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)">همراهی با ما</a>
                                <ul>
                                    <li><a href="<?php echo base_url('Payment'); ?>">حمایت از ما</a></li>
                                    <li><a href="<?php echo base_url('Payment'); ?>">حامیان و همراهان</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo base_url('ContactUs?type=contact') ?>">تماس با ما</a>
                            </li>
                            <?php if (!$userIsLogged) { ?>
                                <li>
                                    <a href="<?php echo base_url('SignUp?type=candidate') ?>">ثبت نام</a>
                                    <ul>
                                        <li><a href="<?php echo base_url('SignUp?type=candidate') ?>">نامزد
                                                انتخاباتی</a></li>
                                        <li><a href="<?php echo base_url('SignUp?type=sponsor') ?>">حامی</a></li>
                                    </ul>
                                </li>
                                <li><a style="
                                 text-align: center;
                                 font-size: 17px;
                                 background-color: #D10B20;
                                 color: #fff;
                                 border-radius: 0;" href="<?php echo base_url('Login'); ?>">ورود</a></li>
                            <?php } else { ?>
                                <li>
                                    <a style="
                                 text-align: center;
                                 font-size: 14px;
                                 background-color: #D10B20;
                                 color: #fff;
                                 border-radius: 0;"
                                       href="<?php echo base_url('Profile'); ?>">
                                        <?php echo $loginInfo['CandidateFirstName'] . " " . $loginInfo['CandidateLastName']; ?>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
</body>