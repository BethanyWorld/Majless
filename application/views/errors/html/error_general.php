<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $_DIR = base_url('assets/ui/v3/'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $heading; ?></title>
    <base href="<?php echo base_url(); ?>"/>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8;">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="مجلس 11"/>
    <link rel="stylesheet" href="<?=$_DIR; ?>css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?=$_DIR; ?>css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" href="<?=$_DIR; ?>css/font-awesome-css.min.css"/>
    <link rel="stylesheet" href="<?=$_DIR; ?>css/iziToast.min.css"/>
    <link rel="stylesheet" href="<?=$_DIR; ?>css/lightbox.min.css"/>
    <link rel="stylesheet" href="<?=$_DIR; ?>css/custom.css"/>
    <link rel="stylesheet" href="<?=$_DIR; ?>css/responsive.css"/>
    <script type="text/javascript" src="<?=$_DIR; ?>js/jquery.min.js"></script>
</head>
<body>
<div class="container-fluid">
    <header>
        <div class="row menu-container">
            <div class="container">
                <div class="col-md-3 col-sm-12 col-xs-12 float-right zp logo-container text-center">
                    <img src="<?=$_DIR; ?>images/logo.png" class="logo"/>
                </div>
                <div class="col-md-7 col-sm-12 col-xs-12 zp hidden-sm hidden-xs pull-right">
                    <nav id="primary_nav_wrap">
                        <ul>
                            <li class="current-menu-item"><a href="#">خانه</a></li>
                            <li><a href="<?php echo base_url('Province') ?>">استان ها</a></li>
                            <li><a href="<?php echo base_url('Blog') ?>">محتوا</a>
                                <ul>
                                    <li><a href="#">دسته بندی محتواها</a></li>
                                    <li><a href="<?php echo base_url('Blog/sendArticle') ?>">ارسال محتوا</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url('AboutUs') ?>">درباره ما</a>
                                <ul>
                                    <li><a href="<?php echo base_url('AboutUs/intro') ?>">معرفی</a></li>
                                    <li><a href="<?php echo base_url('AboutUs/prism') ?>">منشور</a></li>
                                    <li><a href="<?php echo base_url('AboutUs/measurement_process') ?>">فرآیند سنجش</a></li>
                                    <li><a href="<?php echo base_url('AboutUs/candidate_commitment_letter') ?>">تعهدنامه نامزدها</a></li>
                                    <li><a href="<?php echo base_url('AboutUs/financial_support') ?>">حمایت مالی</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)">ارتباطات مردمی</a>
                                <ul>
                                    <li><a href="<?php echo base_url('ContactUs?type=contact') ?>">تماس با ما</a></li>
                                    <li><a href="<?php echo base_url('ContactUs?type=report_abuse') ?>">گزارش مردمی</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">ثبت نام</a>
                                <ul>
                                    <li><a href="<?php echo base_url('SignUp?type=candidate') ?>">نامزد انتخاباتی</a></li>
                                    <li><a href="<?php echo base_url('SignUp?type=elite') ?>">بانک نخبگان</a></li>
                                    <li><a href="<?php echo base_url('SignUp?type=sponsor') ?>">حامی</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 zp xs-menu visible-sm visible-xs">
                    <span class="menu-title">منو سایت</span>
                    <i class="fa fa-bars menu-handle"></i>
                    <nav>
                        <ul>
                            <li class="current-menu-item"><a href="#">خانه</a></li>
                            <li><a href="<?php echo base_url('Province') ?>">استان ها</a></li>
                            <li><a href="<?php echo base_url('Blog') ?>">محتوا</a>
                                <ul>
                                    <li><a href="#">دسته بندی محتواها</a></li>
                                    <li><a href="<?php echo base_url('Blog/sendArticle') ?>">ارسال محتوا</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url('AboutUs') ?>">درباره ما</a>
                                <ul>
                                    <li><a href="<?php echo base_url('AboutUs/intro') ?>">معرفی</a></li>
                                    <li><a href="<?php echo base_url('AboutUs/prism') ?>">منشور</a></li>
                                    <li><a href="<?php echo base_url('AboutUs/measurement_process') ?>">فرآیند سنجش</a></li>
                                    <li><a href="<?php echo base_url('AboutUs/candidate_commitment_letter') ?>">تعهدنامه نامزدها</a></li>
                                    <li><a href="<?php echo base_url('AboutUs/financial_support') ?>">حمایت مالی</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)">ارتباطات مردمی</a>
                                <ul>
                                    <li><a href="<?php echo base_url('ContactUs?type=contact') ?>">تماس با ما</a></li>
                                    <li><a href="<?php echo base_url('ContactUs?type=report_abuse') ?>">گزارش مردمی</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">ثبت نام</a>
                                <ul>
                                    <li><a href="<?php echo base_url('SignUp?type=candidate') ?>">نامزد انتخاباتی</a></li>
                                    <li><a href="<?php echo base_url('SignUp?type=elite') ?>">بانک نخبگان</a></li>
                                    <li><a href="<?php echo base_url('SignUp?type=sponsor') ?>">حامی</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
	<div id="container" class="text-center" style="padding: 100px;">
		<h1><?php echo $heading; ?></h1>
		<?php echo $message; ?>
	</div>
</div>
<?php $_DIR = base_url('assets/ui/v3/'); ?>
<footer>
    <div class="container">
        <div class="section col-lg-6 col-md-6 col-sm-6 col-xs-12 zp">
            <h4 class="title">خبرنامه</h4>
            <p>لطفا جهت عضویت در خبرنامه آدرس ایمیل خود را وارد کنید</p>
            <form>
                <input type="text"/>
                <input type="submit" value="عضویت"/>
            </form>
        </div>
        <div class="section col-lg-6 col-md-6 col-sm-6 col-xs-12 zp faq-blog">
            <h4 class="title">ویژه مشاوران</h4>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 zp blog-section">
                <div class="date">
                    <h3>
                        <span>21</span>
                    </h3>
                    <h6>
                        <span>Jul</span>
                    </h6>
                </div>
                <div class="content">
                    <h5>
                        <a href="#">
                            برگزاری دوره آموزش asp.net mvc
                        </a>
                    </h5>
                    <div>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و ب ا استفاده از
                        طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و
                        کاربردهای متنوع با هدف بهبود ابزارهای کار
                    </div>
                    <a href="#">ادامه مطلب</a>
                </div>
            </div>
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12 zp blog-section">
                <div class="date">
                    <h3>
                        <span>21</span>
                    </h3>
                    <h6>
                        <span>Jul</span>
                    </h6>
                </div>
                <div class="content">
                    <h5>
                        <a href="#">
                            برگزاری دوره آموزش asp.net mvc
                        </a>
                    </h5>
                    <div>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و ب ا استفاده از
                        طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و
                        کاربردهای متنوع با هدف بهبود ابزارهای کار
                    </div>
                    <a href="#">ادامه مطلب</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="section col-lg-3 col-md-3 col-sm-6 col-xs-12 zp">
            <h4 class="title">درباره ما</h4>
            <div class="content">
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                صنعت چاپ و ب ا استفاده از طراحان گرافیک است.
                چاپگرها و متون بلکه روزنامه و مجله در ستون
                و کاربردهای متنوع با هدف بهبود ابزارهای کار
            </div>
        </div>
        <div class="section contact col-lg-3 col-md-3 col-sm-6 col-xs-12 zp">
            <h4 class="title">تماس با ما</h4>
            <ul>
                <li>
                    <i class="fa fa-phone"></i>
                    <span>تلفن : 021-13 546 897</span>
                </li>
                <li>
                    <i class="fa fa-phone"></i>
                    <span>تلفن : 021-13 546 897</span>
                </li>
                <li>
                    <i class="fa fa-phone"></i>
                    <span>تلفن : 021-13 546 897</span>
                </li>
                <li>
                    <i class="fa fa-phone"></i>
                    <span>تلفن : 021-13 546 897</span>
                </li>
            </ul>
        </div>
        <div class="section col-lg-3 col-md-3 col-sm-6 col-xs-12 zp">
            <h4 class="title">دسترسی سریع</h4>
            <ul>
                <li>
                    <a href="#">سامانه امور مشتریان</a>
                </li>
                <li>
                    <a href="#">سامانه امور مشتریان</a>
                </li>
                <li>
                    <a href="#">سامانه امور مشتریان</a>
                </li>
                <li>
                    <a href="#">سامانه امور مشتریان</a>
                </li>
                <li>
                    <a href="#">سامانه امور مشتریان</a>
                </li>
            </ul>
        </div>
        <div class="section col-lg-3 col-md-3 col-sm-6 col-xs-12 zp">
            <h4 class="title">دسترسی سریع</h4>
            <ul>
                <li>
                    <a href="#">سامانه امور مشتریان</a>
                </li>
                <li>
                    <a href="#">سامانه امور مشتریان</a>
                </li>
                <li>
                    <a href="#">سامانه امور مشتریان</a>
                </li>
                <li>
                    <a href="#">سامانه امور مشتریان</a>
                </li>
                <li>
                    <a href="#">سامانه امور مشتریان</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 copy-right text-left">
        Envision - WordPress Theme © 2017
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 copy-right col-xs-12">
        <ul>
            <li>
                <a href="#">سامانه امور مشتریان</a>
            </li>
            /
            <li>
                <a href="#">سامانه امور مشتریان</a>
            </li>
            /
            <li>
                <a href="#">سامانه امور مشتریان</a>
            </li>
            /
            <li>
                <a href="#">سامانه امور مشتریان</a>
            </li>
        </ul>
    </div>
</footer>
<script type="text/javascript" src="<?=$_DIR; ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?=$_DIR; ?>js/modernizr.js"></script>
<script type="text/javascript" src="<?=$_DIR; ?>js/lightbox.min.js"></script>
<script type="text/javascript" src="<?=$_DIR; ?>js/script.js"></script>
</body>
</html>
