<?php
$_DIR = base_url('assets/adminpanel/');
$CI =& get_instance();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?php echo $pageTitle; ?></title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo $_DIR; ?>favicon.ico" type="image/x-icon">
    <link href="<?php echo $_DIR; ?>plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $_DIR; ?>plugins/bootstrap/css/bootstrap-rtl.min.css" rel="stylesheet">
    <link href="<?php echo $_DIR; ?>plugins/tour/css/bootstrap-tour.min.css" rel="stylesheet">
    <link href="<?php echo $_DIR; ?>plugins/node-waves/waves.css" rel="stylesheet"/>
    <link href="<?php echo $_DIR; ?>plugins/animate-css/animate.css" rel="stylesheet"/>
    <link href="<?php echo $_DIR; ?>plugins/iziToast/css/iziToast.min.css" rel="stylesheet"/>
    <link href="<?php echo $_DIR; ?>plugins/confirm/confirm.css" rel="stylesheet"/>
    <link href="<?php echo $_DIR; ?>plugins/simplePagination/simplePagination.css" rel="stylesheet"/>
    <link href="<?php echo $_DIR; ?>css/materialize.css" rel="stylesheet"/>
    <link href="<?php echo $_DIR; ?>plugins/morrisjs/morris.css" rel="stylesheet" />
    <link href="<?php echo $_DIR; ?>css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $_DIR; ?>plugins/persianDatepicker/css/persianDatepicker-default.css"/>

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo $_DIR; ?>css/themes/all-themes.css" rel="stylesheet"/>
    <script src="<?php echo $_DIR; ?>plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo $_DIR; ?>plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo $_DIR; ?>plugins/tour/js/bootstrap-tour.min.js"></script>
    <script src="<?php echo $_DIR; ?>plugins/ckeditor/ckeditor.js"></script>
    <script src="<?php echo $_DIR; ?>plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="<?php echo $_DIR; ?>plugins/node-waves/waves.js"></script>
    <script src="<?php echo $_DIR; ?>plugins/iziToast/js/iziToast.min.js"></script>
    <script src="<?php echo $_DIR; ?>plugins/confirm/confirm.js"></script>
    <script src="<?php echo $_DIR; ?>plugins/simplePagination/simplePagination.js"></script>
    <script src="<?php echo $_DIR; ?>plugins/persianDatepicker/js/persianDatepicker.min.js"></script>
    <script src="<?php echo $_DIR; ?>plugins/mask/jquery.mask.min.js"></script>
    <script src="<?php echo $_DIR; ?>plugins/raphael/raphael.min.js"></script>
    <script src="<?php echo $_DIR; ?>plugins/morrisjs/morris.js"></script>
    <script src="<?php echo $_DIR; ?>js/admin.js"></script>
    <script src="<?php echo $_DIR; ?>js/pages/index.js"></script>
    <script src="<?php echo $_DIR; ?>js/demo.js"></script>
    <script type="text/javascript">
        var base_url = "<?php echo base_url('Admin/'); ?>";
    </script>
</head>

<body class="theme-red">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>لطفا منتظر بمانید...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse"
               data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand"><?php echo $pageTitle; ?></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
            </ul>
        </div>
    </div>
</nav>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="<?php echo $_DIR; ?>images/user.png" width="48" height="48" alt="User"/>
            </div>
            <?php $CI =& get_instance(); $adminInfo = $CI->session->userdata('AdminLoginInfo')[0]; ?>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true"
                     aria-expanded="false"><?php echo $adminInfo['AdminPhone']; ?></div>
                <div class="email"><?php echo $adminInfo['AdminFullName']; ?></div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li>
                            <a target="_blank" href="<?php echo base_url(); ?>">
                                <i class="material-icons">input</i>WebSite
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('Admin/Account/doLogOut'); ?>">
                                <i class="material-icons">input</i>خروج
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <?php $uri = $CI->uri->uri_string; ?>
            <ul class="list">
                <li <?php if (strstr($uri , "Home") !== false) echo "class='active'"; ?>>
                    <a href="<?php echo base_url('Admin/Home'); ?>">
                        <i class="material-icons">home</i>
                        <span>پیشخوان</span>
                    </a>
                </li>
                <li <?php echo $CI->uri->segment(2) == 'Agent' ? 'class="active"' : '' ?> >
                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                        <i class="material-icons">bookmark</i>
                        <span>پشتیبان استان ها</span>
                    </a>
                    <ul class="ml-menu" style="display: none;">
                        <li <?php if (strstr($uri, '/Agent/index') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/Agent/index'); ?>" class="waves-effect waves-block">فهرست</a>
                        </li>
                        <li <?php if (strstr($uri, '/Agent/add') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/Agent/add'); ?>"
                               class="waves-effect waves-block">افزودن</a>
                        </li>
                    </ul>
                </li>
                <li <?php echo $CI->uri->segment(2) == 'Veteran' ? 'class="active"' : '' ?> >
                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                        <i class="material-icons">bookmark</i>
                        <span>پشتیبان پنل ایثارگر</span>
                    </a>
                    <ul class="ml-menu" style="display: none;">
                        <li <?php if (strstr($uri, '/Veteran/index') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/Veteran/index'); ?>" class="waves-effect waves-block">فهرست</a>
                        </li>
                        <li <?php if (strstr($uri, '/Veteran/add') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/Veteran/add'); ?>"
                               class="waves-effect waves-block">افزودن</a>
                        </li>
                    </ul>
                </li>
                <li <?php echo $CI->uri->segment(2) == 'States' ? 'class="active"' : '' ?> >
                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                        <i class="material-icons">bookmark</i>
                        <span>تقسیم بندی استان ها</span>
                    </a>
                    <ul class="ml-menu" style="display: none;">
                        <li <?php if (strstr($uri, '/States/index') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/States/index'); ?>" class="waves-effect waves-block">فهرست</a>
                        </li>
                        <li <?php if (strstr($uri, '/States/elections') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/States/elections'); ?>"
                               class="waves-effect waves-block">حوزه های انتخاباتی</a>
                        </li>
                        <li <?php if (strstr($uri, '/States/addElection') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/States/addElection'); ?>"
                               class="waves-effect waves-block">افزودن حوزه انتخاباتی</a>
                        </li>
                    </ul>
                </li>
                <li <?php echo $CI->uri->segment(2) == 'Content' ? 'class="active"' : '' ?> >
                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                        <i class="material-icons">bookmark</i>
                        <span>محتوا</span>
                    </a>
                    <ul class="ml-menu" style="display: none;">
                        <li <?php if (strstr($uri, '/Content/category') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/Content/category'); ?>"
                               class="waves-effect waves-block">دسته بندی</a>
                        </li>
                        <li <?php if (strstr($uri, '/Content/addCategory') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/Content/addCategory'); ?>"
                               class="waves-effect waves-block">افزودن دسته جدید</a>
                        </li>
                        <li <?php if (strstr($uri, '/Content/index') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/Content/index'); ?>" class="waves-effect waves-block">فهرست
                                محتوا</a>
                        </li>
                        <li <?php if (strstr($uri, '/Content/add') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/Content/add'); ?>" class="waves-effect waves-block">افزودن
                                محتوا</a>
                        </li>
                    </ul>
                </li>
                <li <?php echo $CI->uri->segment(2) == 'Candidate' ? 'class="active"' : '' ?> >
                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                        <i class="material-icons">bookmark</i>
                        <span>نامزد های انتخاباتی</span>
                    </a>
                    <ul class="ml-menu" style="display: none;">
                        <li <?php if (strstr($uri, '/Candidate/index') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/Candidate/index'); ?>" class="waves-effect waves-block">فهرست</a>
                        </li>
                        <li <?php if (strstr($uri, '/Candidate/importScores') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/Candidate/importScores'); ?>"
                               class="waves-effect waves-block">بارگذاری فایل نمره</a>
                        </li>
                        <li <?php if (strstr($uri, '/Candidate/special') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/Candidate/special'); ?>"
                               class="waves-effect waves-block">فهرست نامزد ویژه</a>
                        </li>
                        <li <?php if (strstr($uri, '/Candidate/specialAdd') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/Candidate/specialAdd'); ?>" class="waves-effect waves-block">افزودن نامزد ویژه</a>
                        </li>
                        <li <?php if (strstr($uri, '/Candidate/invite') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/Candidate/invite'); ?>" class="waves-effect waves-block">پیشنهاد مردم</a>
                        </li>
                    </ul>
                </li>
                <li <?php echo $CI->uri->segment(2) == 'ExamPlaces' ? 'class="active"' : '' ?> >
                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                        <i class="material-icons">bookmark</i>
                        <span>محل آزمون ها</span>
                    </a>
                    <ul class="ml-menu" style="display: none;">
                        <li <?php if (strstr($uri, '/ExamPlaces/index') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/ExamPlaces/index'); ?>"
                               class="waves-effect waves-block">فهرست</a>
                        </li>
                        <li <?php if (strstr($uri, '/ExamPlaces/add') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/ExamPlaces/add'); ?>" class="waves-effect waves-block">افزودن</a>
                        </li>
                    </ul>
                </li>
                <li <?php echo $CI->uri->segment(2) == 'Exams' ? 'class="active"' : '' ?> >
                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                        <i class="material-icons">bookmark</i>
                        <span>آزمون ها</span>
                    </a>
                    <ul class="ml-menu" style="display: none;">
                        <li <?php if (strstr($uri, '/Exams/index') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/Exams/index'); ?>" class="waves-effect waves-block">فهرست</a>
                        </li>
                        <li <?php if (strstr($uri, '/Exams/add') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/Exams/add'); ?>"
                               class="waves-effect waves-block">افزودن</a>
                        </li>
                    </ul>
                </li>
                <li <?php echo $CI->uri->segment(2) == 'ReportAbuse' ? 'class="active"' : '' ?> >
                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                        <i class="material-icons">bookmark</i>
                        <span>گزارش تخلف</span>
                    </a>
                    <ul class="ml-menu" style="display: none;">
                        <li <?php if (strstr($uri, '/ReportAbuse/index') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/ReportAbuse/index'); ?>"
                               class="waves-effect waves-block">فهرست</a>
                        </li>
                    </ul>
                </li>
                <li <?php echo $CI->uri->segment(2) == 'Contact' ? 'class="active"' : '' ?> >
                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                        <i class="material-icons">bookmark</i>
                        <span>ارتباطات مردمی</span>
                    </a>
                    <ul class="ml-menu" style="display: none;">
                        <li <?php if (strstr($uri, '/Contact/index') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Admin/Contact/index'); ?>" class="waves-effect waves-block">فهرست</a>
                        </li>
                    </ul>
                </li>
                <li <?php if (strstr($uri, 'Admin/SignUpReport') !== false) echo "class='active'"; ?>>
                    <a
                            href="<?php echo base_url('Admin/SignUpReport'); ?>">
                        <i class="material-icons">person</i>
                        <span>گزارش  ثبت نام</span>
                    </a>
                </li>
                <li <?php if (strstr($uri, 'Admin/Reports') !== false) echo "class='active'"; ?>>
                    <a
                            href="<?php echo base_url('Admin/Reports'); ?>">
                        <i class="material-icons">person</i>
                        <span>گزارش گیری</span>
                    </a>
                </li>
                <li <?php if (strstr($uri, 'Admin/Profile') !== false) echo "class='active'"; ?>>
                    <a href="<?php echo base_url('Admin/Profile'); ?>">
                        <i class="material-icons">person</i>
                        <span>پروفایل</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
    </aside>
    <!-- #END# Left Sidebar -->
</section>