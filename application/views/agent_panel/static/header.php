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
    <!-- Google Fonts -->
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

    <link rel="stylesheet" href="<?php echo $_DIR; ?>plugins/persianDatepicker/css/persianDatepicker-default.css" />


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
        var base_url = "<?php echo base_url('Agent/'); ?>";
    </script>

</head>

<body class="theme-cyan">
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
                <!-- Notifications -->
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <i class="material-icons">notifications</i>
                        <span class="label-count">7</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">اعلان ها</li>
                        <li class="body">
                            <ul class="menu">
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-light-green">
                                            <i class="material-icons">person_add</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4>12 درخواست جدید</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 14 دقیقه قبل
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-red">
                                            <i class="material-icons">delete_forever</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4><b>محمدرضا اسماعیلی</b> انصراف داد</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 3 ساعت قبل
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-blue-grey">
                                            <i class="material-icons">comment</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4>نعیمی به پیام شما پاسخ داد</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 4 ساعت قبل
                                            </p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="javascript:void(0);">مشاهده تمامی اعلان ها</a>
                        </li>
                    </ul>
                </li>
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
                <img src="<?php echo $_DIR; ?>images/user.png" width="48" height="48" alt="User" />
            </div>
            <?php
            $CI =& get_instance();
            $adminInfo = $CI->session->userdata('AgentLoginInfo')[0];
            ?>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true"
                     aria-expanded="false"><?php echo $adminInfo['AgentPhone']; ?></div>
                <div class="email"><?php echo $adminInfo['AgentFullName']; ?></div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li>
                            <a href="<?php echo base_url('Agent/Account/doLogOut'); ?>">
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
            <ul class="list">
                <li <?php if(strpos($CI->uri->uri_string , '/Home') !== false) echo "class='active'"; ?>>
                    <a href="<?php echo base_url('Agent/Home'); ?>">
                        <i class="material-icons">home</i>
                        <span>پیشخوان</span>
                    </a>
                </li>
                <li <?php echo $CI->uri->segment(2) == 'ReportAbuse' ? 'class="active"' : '' ?> >
                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                        <i class="material-icons">bookmark</i>
                        <span>گزارش تخلف</span>
                    </a>
                    <ul class="ml-menu" style="display: none;">
                        <li <?php if(strpos($CI->uri->uri_string , '/ReportAbuse/index') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Agent/ReportAbuse/index'); ?>" class="waves-effect waves-block">فهرست</a>
                        </li>
                    </ul>
                </li>
                <li <?php echo $CI->uri->segment(2) == 'Posts' ? 'class="active"' : '' ?> >
                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                        <i class="material-icons">bookmark</i>
                        <span>مدیریت اخبار و اعلانات</span>
                    </a>
                    <ul class="ml-menu" style="display: none;">
                        <li <?php if(strpos($CI->uri->uri_string , '/Posts/index') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Agent/Posts/index'); ?>" class="waves-effect waves-block">فهرست</a>
                        </li>
                        <li <?php if(strpos($CI->uri->uri_string , '/Posts/add') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Agent/Posts/add'); ?>" class="waves-effect waves-block">نوشته جدید</a>
                        </li>
                    </ul>
                </li>
                <li <?php echo $CI->uri->segment(2) == 'Candidates' ? 'class="active"' : '' ?> >
                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                        <i class="material-icons">bookmark</i>
                        <span>نامزد های انتخاباتی استان</span>
                    </a>
                    <ul class="ml-menu" style="display: none;">
                        <li <?php if(strpos($CI->uri->uri_string , '/Candidates/index') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Agent/Candidates/index'); ?>" class="waves-effect waves-block">فهرست</a>
                        </li>
                    </ul>
                </li>
                <li <?php echo $CI->uri->segment(2) == 'ExamPlaces' ? 'class="active"' : '' ?> >
                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                        <i class="material-icons">bookmark</i>
                        <span>محل آزمون ها</span>
                    </a>
                    <ul class="ml-menu" style="display: none;">
                        <li <?php if(strpos($CI->uri->uri_string , '/ExamPlaces/index') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Agent/ExamPlaces/index'); ?>" class="waves-effect waves-block">فهرست</a>
                        </li>
                        <li <?php if(strpos($CI->uri->uri_string , '/ExamPlaces/add') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Agent/ExamPlaces/add'); ?>" class="waves-effect waves-block">افزودن</a>
                        </li>
                    </ul>
                </li>
                <li <?php echo $CI->uri->segment(2) == 'Exams' ? 'class="active"' : '' ?> >
                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                        <i class="material-icons">bookmark</i>
                        <span>آزمون ها</span>
                    </a>
                    <ul class="ml-menu" style="display: none;">
                        <li <?php if(strpos($CI->uri->uri_string , '/Exams/index') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Agent/Exams/index'); ?>" class="waves-effect waves-block">فهرست</a>
                        </li>
                        <li <?php if(strpos($CI->uri->uri_string , '/Exams/add') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Agent/Exams/add'); ?>" class="waves-effect waves-block">افزودن</a>
                        </li>
                    </ul>
                </li>
                <li <?php echo $CI->uri->segment(2) == 'Pages' ? 'class="active"' : '' ?> >
                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                        <i class="material-icons">bookmark</i>
                        <span>مدیریت صفحات</span>
                    </a>
                    <ul class="ml-menu" style="display: none;">
                        <li <?php if(strpos($CI->uri->uri_string , '/Pages/index') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Agent/Pages/index'); ?>" class="waves-effect waves-block">فهرست</a>
                        </li>
                        <li <?php if(strpos($CI->uri->uri_string , '/Pages/add') !== false) echo "class='active'"; ?>>
                            <a href="<?php echo base_url('Agent/Pages/add'); ?>" class="waves-effect waves-block">صفحه جدید</a>
                        </li>
                    </ul>
                </li>

                <li <?php if(strpos($CI->uri->uri_string , 'Agent/Profile') !== false) echo "class='active'"; ?>>
                    <a href="<?php echo base_url('Agent/Profile'); ?>">
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