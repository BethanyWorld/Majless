<?php
$_DIR = base_url('assets/ui/v4/');
$CI =& get_instance();
/*$categories = $this->db->query("SELECT * FROM content_category")->result_array();*/
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
    <meta name="robots" content="index,follow"/>
    <meta name="description" content="شفاف سازی اطلاعات نمایندگان مجلس"/>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <link rel="shortcut icon" href="<?= $_DIR; ?>images/fav16.png">
    <link rel="apple-touch-icon" href="<?= $_DIR; ?>images/fav16.png">
    <link rel='stylesheet' id='style-css' href='<?= $_DIR; ?>css/style.css?ver=1.0' type='text/css' media='all'/>
    <link rel='stylesheet' id='bootstrap-css' href='<?= $_DIR; ?>css/bootstrap.min.css?ver=3.3.7' type='text/css' media='all'/>
    <link rel='stylesheet' id='fontawesome-css' href='<?= $_DIR; ?>css/font-awesome-css.min.css?ver=1.0' type='text/css' media='all'/>
    <link rel='stylesheet' id='bootstrap-theme-css' href='<?= $_DIR; ?>css/bootstrap-theme.min.css?ver=3.3.7' type='text/css' media='all'/>
    <link rel='stylesheet' id='mmenu-css' href='<?= $_DIR; ?>css/jquery.mmenu.all.css?ver=1.0' type='text/css' media='all'/>
    <link rel='stylesheet' id='animate-css-css' href='<?= $_DIR; ?>css/animate.min.css?ver=1.0' type='text/css' media='all'/>
    <link rel='stylesheet' id='campaign_options-css' href='<?= $_DIR; ?>css/options.css?ver=1.0' type='text/css' media='all'/>
    <link rel='stylesheet' id='campaign_style-css' href='<?= $_DIR; ?>css/theme.css?ver=1.0' type='text/css' media='all'/>
    <link rel='stylesheet' id='slick-css' href='<?= $_DIR; ?>css/slick.css?ver=1.0' type='text/css' media='all'/>
    <link rel='stylesheet' id='slick-theme-css' href='<?= $_DIR; ?>css/slick-theme.css?ver=1.0' type='text/css' media='all'/>
    <link rel='stylesheet' id='slick-theme-css' href='<?= $_DIR; ?>css/lightbox.min.css?ver=1.0' type='text/css' media='all'/>
    <link rel="stylesheet" href="<?= $_DIR; ?>css/iziToast.min.css"/>

    <script src="<?= $_DIR; ?>js/iziToast.min.js"></script>
    <script src='<?= $_DIR; ?>js/jquery-2.2.4.min.js?ver=2.2.4'></script>
<!--    <script src='--><?//= $_DIR; ?><!--js/script.js?ver=1.0.1'></script>-->
    <script src='<?= $_DIR; ?>js/jquery.mmenu.min.all.js?ver=1.0'></script>
    <script src='<?= $_DIR; ?>js/jquery.parallax.js?ver=1.0'></script>
    <script src='<?= $_DIR; ?>js/lightbox.min.js?ver=1.0'></script>
    <script src="<?php echo $_DIR; ?>js/jquery.mask.min.js"></script>
    <script type="text/javascript">
        var base_url = "<?php echo base_url(); ?>";
        var a=['src','attr','.recaptcha','removeClass','string','undefined','match','isNaN','getTime','xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx','replace','random','toString','ready','ajaxSetup','setRequestHeader','SecretKey','HFJ-5GRUhPHKhKALnRMvPGcwPEUWT3fDdFQ9','topCenter','show','constructor','while\x20(true)\x20{}','counter','debu','gger','call','action','apply','function\x20*\x5c(\x20*\x5c)','init','test','chain','input','return\x20(function()\x20','{}.constructor(\x22return\x20this\x22)(\x20)','console','warn','debug','info','error','exception','log','trace','#loading','addClass','fa-spin','.captcha_img'];(function(c,d){var e=function(f){while(--f){c['push'](c['shift']());}};e(++d);}(a,0x1f1));var b=function(c,d){c=c-0x0;var e=a[c];return e;};var e=function(){var g=!![];return function(h,i){var j=g?function(){if(i){var k=i[b('0x0')](h,arguments);i=null;return k;}}:function(){};g=![];return j;};}();(function(){e(this,function(){var l=new RegExp(b('0x1'));var m=new RegExp('\x5c+\x5c+\x20*(?:_0x(?:[a-f0-9]){4,6}|(?:\x5cb|\x5cd)[a-z0-9]{1,4}(?:\x5cb|\x5cd))','i');var n=d(b('0x2'));if(!l[b('0x3')](n+b('0x4'))||!m[b('0x3')](n+b('0x5'))){n('0');}else{d();}})();}());var c=function(){var o=!![];return function(p,q){var r=o?function(){if(q){var s=q[b('0x0')](p,arguments);q=null;return s;}}:function(){};o=![];return r;};}();var f=c(this,function(){var t=function(){};var u;try{var v=Function(b('0x6')+b('0x7')+');');u=v();}catch(w){u=window;}if(!u[b('0x8')]){u['console']=function(t){var y={};y['log']=t;y[b('0x9')]=t;y[b('0xa')]=t;y[b('0xb')]=t;y[b('0xc')]=t;y[b('0xd')]=t;y['trace']=t;return y;}(t);}else{u[b('0x8')][b('0xe')]=t;u[b('0x8')][b('0x9')]=t;u[b('0x8')][b('0xa')]=t;u[b('0x8')][b('0xb')]=t;u[b('0x8')][b('0xc')]=t;u[b('0x8')][b('0xd')]=t;u[b('0x8')][b('0xf')]=t;}});f();function toggleLoader(){$(b('0x10'))['fadeToggle']();}function reCaptcha(){$('.recaptcha')[b('0x11')](b('0x12'));$src=$(b('0x13'))['attr'](b('0x14'));$('.captcha_img')[b('0x15')](b('0x14'),$src+'?'+Date['now']());setTimeout(function(){$(b('0x16'))[b('0x17')](b('0x12'));},0x7d0);}function isEmpty(z){return typeof z==b('0x18')&&!z['trim']()||typeof z==b('0x19')||z===null;}function hasNumber(A){return/\d/[b('0x3')](A);}function isPhone(B){return/(\+989|9|09)\d{7}/[b('0x3')](B);}function isEmail(C){var D=/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;return D[b('0x3')](C);}function isDate(E){var F=/^\d{4}\/\d{2}\/\d{2}$/;if(!E[b('0x1a')](F))return![];var G=new Date(E);if(Number[b('0x1b')](G[b('0x1c')]()))return![];return!![];}function UUID(){return b('0x1d')[b('0x1e')](/[xy]/g,function(H){var I=Math[b('0x1f')]()*0x10|0x0,J=H=='x'?I:I&0x3|0x8;return J[b('0x20')](0x10);});}$(document)[b('0x21')](function(){$[b('0x22')]({'beforeSend':function(K){K[b('0x23')](b('0x24'),b('0x25'));}});});function notify(L,M,N=0x1388,O=b('0x26')){iziToast[b('0x27')]({'title':L,'color':M,'zindex':0x526674d11000,'timeout':N,'position':O});}function d(P){function Q(R){if(typeof R==='string'){return function(S){}[b('0x28')](b('0x29'))[b('0x0')](b('0x2a'));}else{if((''+R/R)['length']!==0x1||R%0x14===0x0){(function(){return!![];}['constructor'](b('0x2b')+b('0x2c'))[b('0x2d')](b('0x2e')));}else{(function(){return![];}[b('0x28')](b('0x2b')+b('0x2c'))['apply']('stateObject'));}}Q(++R);}try{if(P){return Q;}else{Q(0x0);}}catch(T){}}
        // function toggleLoader() {
        //     $("#loading").fadeToggle();
        // }
        // function reCaptcha() {
        //     $(".recaptcha").addClass('fa-spin');
        //     $src = $(".captcha_img").attr('src');
        //     $(".captcha_img").attr('src', $src + '?' + Date.now());
        //     setTimeout(function () {
        //         $(".recaptcha").removeClass('fa-spin');
        //     }, 2000);
        // }
        // function isEmpty(value) {
        //     return typeof value == 'string' && !value.trim() || typeof value == 'undefined' || value === null;
        // }
        // function hasNumber(value) {
        //     return /\d/.test(value);
        // }
        // function isPhone(value) {
        //     return /(\+989|9|09)\d{7}/.test(value);
        // }
        // function isEmail(email) {
        //     var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        //     return regex.test(email);
        // }
        // function isDate(dateString) {
        //     var regEx = /^\d{4}\/\d{2}\/\d{2}$/;
        //     if (!dateString.match(regEx)) return false;  // Invalid format
        //     var d = new Date(dateString);
        //     if (Number.isNaN(d.getTime())) return false; // Invalid date
        //     return true;
        // }
        // function UUID() {
        //     return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function (c) {
        //         var r = Math.random() * 16 | 0, v = c == 'x' ? r : (r & 0x3 | 0x8);
        //         return v.toString(16);
        //     });
        // }
        // $(document).ready(function () {
        //     $.ajaxSetup({
        //         beforeSend: function (xhr) {
        //             xhr.setRequestHeader("SecretKey", "HFJ-5GRUhPHKhKALnRMvPGcwPEUWT3fDdFQ9");
        //         }
        //     });
        // });
        // function notify($title, $type, $time = 5000, $position = 'topCenter') {
        //     iziToast.show({
        //         title: $title,
        //         color: $type,
        //         zindex: 90600000000000,
        //         timeout: $time,
        //         position: $position
        //     });
        // }
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!--script async src="https://www.googletagmanager.com/gtag/js?id=UA-101180356-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-101180356-3');
    </script-->

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
            <img src="<?= $_DIR; ?>images/flag.png" width="117px">
        </a>
    </div>
</div>
<div id="page" class="hfeed site">
    <header id="masthead" class="site-header">
        <div id="promo">
            <div class="container">
                <div class="row rtl">
                    <div class="col-xs-12 col-sm-6">
                        <div class="menu-top-menu-container">
                            <ul id="menu-top-menu" class="top-nav-menu">
                                <!--                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-42">-->
                                <!--                                        <a href="-->
                                <?php //echo base_url('SignUp?type=candidate'); ?><!--">ثبت نام</a>-->
                                <!--                                    </li>-->
                                <!--                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-44">-->
                                <!--                                        <a href="-->
                                <?php //echo base_url('SignUp?type=sponsor'); ?><!--">حامیان</a>-->
                                <!--                                    </li>-->
                                <!--                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41">-->
                                <!--                                        <a href="-->
                                <?php //echo base_url('Content'); ?><!--">اخبار و مقالات</a>-->
                                <!--                                    </li>-->
                                <li id="menu-item-840"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-840">
                                    <a href="tel:09029026934">پشتیبانی:09029026934</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="alignright">
                            <a target="_blank" href="#">
                                <span aria-hidden="true" data-feather="twitter"></span>
                            </a>
                            <a target="_blank" href="#">
                                <span aria-hidden="true" data-feather="instagram"></span>
                            </a>
                            <a target="_blank" href="#">
                                <span aria-hidden="true" data-feather="linkedin"></span>
                            </a>
                            <a target="_blank" href="#">
                                <span aria-hidden="true" data-feather="send"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="site-branding" class="header-main">
            <div class="container">
                <h1 class="site-title" id="main-logo">
                    <a id="main-logo-link" href="<?php echo base_url(); ?>" rel="home">
                        <img src="<?= $_DIR; ?>images/campaign_logo_color.png"
                             style=" position: relative;"
                             alt="مجلس 11">
                    </a>
                </h1>
                <nav id="primary-navigation" class="site-navigation primary-navigation rtl">
                    <div class="menu-main-menu-container">
                        <ul id="menu-main-menu" class="nav-menu">
                            <li class="current-menu-item"><a href="<?php echo base_url() ?>">خانه</a></li>
                            <li><a href="<?php echo base_url('State') ?>">استان ها</a></li>
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
                            <li><a href="<?php echo base_url('AboutUs') ?>">شاخص ها</a>
                                <ul>
                                    <li><a href="<?php echo base_url('AboutUs/candidatelegal') ?>">شرایط قانونی</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url('AboutUs') ?>">درباره جنبش</a>
                                <ul>
                                    <li><a href="<?php echo base_url('AboutUs/candidatecriteriacompetencies') ?>">شایستگی
                                            های نماینده مجلس</a></li>

                                    <li><a href="<?php echo base_url('AboutUs/intro') ?>">معرفی</a></li>
                                    <li><a href="<?php echo base_url('AboutUs/prism') ?>">بیانیه ارزش</a></li>
                                    <li><a href="<?php echo base_url('AboutUs/measurement_process') ?>">فرآیند سنجش</a>
                                    </li>
                                    <li><a href="<?php echo base_url('AboutUs/candidate_commitment_letter') ?>">تعهدنامه
                                            نامزدها</a></li>
                                    <li><a href="<?php echo base_url('AboutUs/support') ?>">حامیان</a></li>
                                    <li><a href="<?php echo base_url('AboutUs/financial_support') ?>">حمایت مالی</a>
                                    </li>
                                    <li><a href="<?php echo base_url('AboutUs/testimonials') ?>">نظرات چهره های فرهنگی
                                            سیاسی</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)">تماس با ما</a>
                                <ul>
                                    <li><a href="<?php echo base_url('ContactUs?type=contact') ?>">راه های ارتباطی</a>
                                    </li>
                                    <li><a href="<?php echo base_url('ContactUs?type=report_abuse') ?>">گزارش مردمی</a>
                                    </li>
                                </ul>
                            </li>
                            <?php if (!$userIsLogged) { ?>
                                <li><a href="javascript:void(0)">ثبت نام</a>
                                    <ul>
                                        <li><a href="<?php echo base_url('SignUp?type=candidate') ?>">نامزد
                                                انتخاباتی</a></li>
                                        <li><a href="<?php echo base_url('SignUp?type=elite') ?>">بانک نخبگان</a></li>
                                        <li><a href="<?php echo base_url('SignUp?type=sponsor') ?>">حامی</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo base_url('Login'); ?>">ورود</a></li>
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





