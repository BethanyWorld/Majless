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
    <link rel='stylesheet' id='style-css' href='<?= $_DIR; ?>css/style.css?ver=1.0' type='text/css' media='all'/>
    <link rel='stylesheet' id='bootstrap-css' href='<?= $_DIR; ?>css/bootstrap.min.css?ver=3.3.7' type='text/css' media='all'/>
    <link rel='stylesheet' id='fontawesome-css' href='<?= $_DIR; ?>css/font-awesome-css.min.css?ver=1.0' type='text/css' media='all'/>
    <link rel='stylesheet' id='bootstrap-theme-css' href='<?= $_DIR; ?>css/bootstrap-theme.min.css?ver=3.3.7' type='text/css' media='all'/>
    <link rel='stylesheet' id='mmenu-css' href='<?= $_DIR; ?>css/jquery.mmenu.all.css?ver=1.0' type='text/css' media='all'/>
    <link rel='stylesheet' id='animate-css-css' href='<?= $_DIR; ?>css/animate.min.css?ver=1.0' type='text/css' media='all'/>
    <link rel='stylesheet' id='animate-css-css' href='<?= $_DIR; ?>css/lightbox.min.css?ver=1.0' type='text/css' media='all'/>
    <link rel='stylesheet' id='campaign_options-css' href='<?= $_DIR; ?>css/options.css?ver=1.0' type='text/css' media='all'/>
    <link rel='stylesheet' id='campaign_style-css' href='<?= $_DIR; ?>css/theme.css?ver=1.0' type='text/css' media='all'/>
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
        function gtag(){dataLayer.push(arguments);}
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
<div id="themeblossom_loading_screen" class="pace absolutecenter">
    <div id="themeblossom_loading_screen_logo">
        <div class="loader_ring"></div>
        <a href="<?php echo base_url(); ?>">
            <img src="<?= $_DIR; ?>images/main-logo.png" width="117px">
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
                            <a target="_blank" href="https://www.aparat.com/azmaa_net">
                                <span class="fa fa-file-movie-o"></span>
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
                            <li class="current-menu-item"><a href="<?php echo base_url() ?>">خانه</a></li>
                            <li><a href="<?php echo base_url('State') ?>">نامزد های مجلس یازدهم</a></li>
                            <li class="hidden"><a href="<?php echo base_url('Content') ?>">محتوا</a>
                                <?php /*<ul>
                                    <?php foreach (array_reverse($categories) as $item){ ?>
                              <li>
                                 <a href="<?php echo base_url('Content/category/').$item['CategoryId']."/".$item['CategoryTitle']; ?>">
                                 <?php echo $item['CategoryTitle']; ?>
                                 </a>
                              </li>
                              <?php } ?>
                              <li><a href="<?php echo base_url('Content/sendArticle') ?>">ارسال محتوا</a></li>
                           </ul>
                           */ ?>
                            </li>
<!--                            <li>-->
<!--                                <a href="--><?php //echo base_url('AboutUs/candidatelegal') ?><!--">شاخص ها</a>-->
<!--                                <ul>-->
<!--                                    <li><a href="--><?php //echo base_url('AboutUs/candidatelegal') ?><!--">شرایط قانونی</a></li>-->
<!--                                </ul>-->
<!--                            </li>-->
                            <li>
                                <a href="<?php echo base_url('AboutUs/intro') ?>">آشنایی با جنبش از ما</a>
                                <ul>
                                    <li><a href="<?php echo base_url('AboutUs/intro') ?>">معرفی</a></li>
                                    <li><a href="<?php echo base_url('AboutUs/prism') ?>">بیانیه ارزش</a></li>
                                    <li><a href="<?php echo base_url('AboutUs/measurement_process') ?>">فرآیند سنجش نامزدها</a></li>
                                    <li><a href="<?php echo base_url('AboutUs/exams') ?>">آشنایی با آزمون ها</a></li>
                                    <li><a href="<?php echo base_url('AboutUs/candidatecriteriacompetencies') ?>">شایستگی های نماینده مجلس</a></li>
<!--                                <li><a href="--><?php //echo base_url('AboutUs/candidate_commitment_letter') ?><!--">تعهدنامه نامزدها</a></li>-->
                                    <li><a href="<?php echo base_url('AboutUs/support') ?>">حامبان و همراهان</a></li>
                                    <li><a href="<?php echo base_url('AboutUs/support') ?>">حمایت مالی از ما</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)">همراهی با ما</a>
                                <ul>
                                    <!--  <li><a href="--><?php //echo base_url('AboutUs/support') ?><!--">حامبان و همراهان</a></li>-->
                                    <li><a href="<?php echo base_url('AboutUs/support') ?>">حمایت از ما</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo base_url('ContactUs?type=contact') ?>">تماس با ما</a>
                            </li>
                            <?php if (!$userIsLogged) { ?>
                                <li>
                                    <a href="<?php echo base_url('SignUp?type=candidate') ?>">ثبت نام</a>
                                    <ul>
                                        <li><a href="<?php echo base_url('SignUp?type=candidate') ?>">نامزد انتخاباتی</a></li>
<!--                                        <li><a href="--><?php //echo base_url('SignUp?type=elite') ?><!--">بانک نخبگان</a></li>-->
                                        <li><a href="<?php echo base_url('SignUp?type=sponsor') ?>">حامی</a></li>
                                    </ul>
                                </li>
                                <li><a  style="
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