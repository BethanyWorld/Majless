<!doctype html>
<html lang="en">
<head>
    <title><?php echo urldecode($pageTitle); ?></title>
    <base href="<?php echo base_url(); ?>"/>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8;">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="جوان کار - سامانه کاریابی و جذب نیرو"/>
    <!-- Required meta tags -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/ui/v2/css/bootstrap.min.css">
    <!-- External Css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/ui/v2/css/iziToast.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/ui/v2/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/ui/v2/css/themify-icons.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/ui/v2/css/et-line.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/ui/v2/css/bootstrap-select.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/ui/v2/css/owl.carousel.min.css"/>
    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/ui/v2/css/main.css">
    <!-- Fonts -->
    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url(); ?>assets/ui/v2/images/favicon.png">
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/ui/v2/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>assets/ui/v2/images/icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>assets/ui/v2/images/icon-114x114.png">

    <script src="<?php echo base_url(); ?>assets/ui/v2/js/jquery.min.js"></script>
    <!--[if lt IE 9]>
    <script src="<?php echo base_url(); ?>assets/ui/v2/js/html5shiv.min.js"></script>
    <<script src="<?php echo base_url(); ?>assets/ui/v2/js/respond.min.js"></script>
    <[endif]-->
    <script type="text/javascript">
        var base_url = "<?php echo base_url(); ?>";

        function toggleLoader() {
            $(".preloader").fadeToggle();
        }

        function reCaptcha() {
            $(".recaptcha").addClass('fa-spin');
            $src = $(".captcha_img").attr('src');
            $(".captcha_img").attr('src',$src+'?'+Date.now());
            setTimeout(function () {
                $(".recaptcha").removeClass('fa-spin');
            }, 2000);
        }

        function isEmpty(value) {
            return typeof value == 'string' && !value.trim() || typeof value == 'undefined' || value === null;
        }

        function hasNumber(value) {
            return /\d/.test(value);
        }

        function isEmail(email) {
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(email);
        }

        function isDate(dateString) {
            var regEx = /^\d{4}\/\d{2}\/\d{2}$/;
            if (!dateString.match(regEx)) return false;  // Invalid format
            var d = new Date(dateString);
            if (Number.isNaN(d.getTime())) return false; // Invalid date
            return true;
        }

        $(document).ready(function () {
            $.ajaxSetup({
                beforeSend: function (xhr) {
                    xhr.setRequestHeader("SecretKey", "HFJ-5GRUhPHKhKALnRMvPGcwPEUWT3fDdFQ9");
                }
            });

        });
    </script>
</head>
<body>
<div class="preloader">
    <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
</div>
<!-- Header -->
<header>
    <nav class="navbar navbar-expand-xl absolute-nav transparent-nav cp-nav navbar-light bg-light fluid-nav rtl-dir">
        <a class="navbar-brand" href="<?php echo base_url(); ?>">
            <img src="<?php echo base_url(); ?>assets/ui/v2/images/logo.png" class="img-fluid" alt="">
        </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto main-nav">
                <li class="menu-item active"><a title="Home" href="<?php echo base_url(); ?>">خانه</a></li>
                <li class="menu-item dropdown">
                    <a title="" href="<?php echo base_url('JobList'); ?>" aria-expanded="false">فرصت های شغلی</a>
                    <!--                    <ul class="dropdown-menu">-->
                    <!--                        <li class="menu-item"><a href="job-listing.html">Job Listing</a></li>-->
                    <!--                        <li class="menu-item"><a href="job-listing-with-map.html">Job Listing With Map</a></li>-->
                    <!--                        <li class="menu-item"><a href="job-details.html">Job Details</a></li>-->
                    <!--                        <li class="menu-item"><a href="post-job.html">Post Job</a></li>-->
                    <!--                    </ul>-->
                </li>
                <li class="menu-item dropdown">
                    <a title="" href="<?php echo base_url('EmployerList'); ?>">شرکت ها</a>
                    <!--                    <ul class="dropdown-menu">-->
                    <!--                        <li class="menu-item"><a href="employer-listing.html">Employer Listing</a></li>-->
                    <!--                        <li class="menu-item"><a href="employer-details.html">Employer Details</a></li>-->
                    <!--                        <li class="menu-item"><a href="employer-dashboard.html">Dashboard</a></li>-->
                    <!--                        <li class="menu-item"><a href="employer-dashboard-edit-profile.html">Edit Profile</a></li>-->
                    <!--                        <li class="menu-item"><a href="employer-dashboard-manage-candidate.html">Manage Candidate</a>-->
                    <!--                        </li>-->
                    <!--                        <li class="menu-item"><a href="employer-dashboard-manage-job.html">Manage Job</a></li>-->
                    <!--                        <li class="menu-item"><a href="employer-dashboard-message.html">Message</a></li>-->
                    <!--                        <li class="menu-item"><a href="employer-dashboard-pricing.html">Pricing</a></li>-->
                    <!--                        <li class="menu-item"><a href="employer-dashboard-post-job.html">Post Job</a></li>-->
                    <!--                    </ul>-->
                </li>
                <li class="menu-item dropdown">
                    <a title="" href="<?php echo base_url('Candidate'); ?>">کارجوها</a>
                    <!--                    <ul class="dropdown-menu">-->
                    <!--                        <li class="menu-item"><a href="candidate.html">Candidate List</a></li>-->
                    <!--                        <li class="menu-item"><a href="candidate-details.html">Candidate Details</a></li>-->
                    <!--                        <li class="menu-item"><a href="dashboard.html">Dashboard</a></li>-->
                    <!--                        <li class="menu-item"><a href="dashboard-edit-profile.html">Edit Profile</a></li>-->
                    <!--                        <li class="menu-item"><a href="add-resume.html">Add Resume</a></li>-->
                    <!--                        <li class="menu-item"><a href="resume.html">Resume</a></li>-->
                    <!--                        <li class="menu-item"><a href="edit-resume.html">Edit Resume</a></li>-->
                    <!--                        <li class="menu-item"><a href="dashboard-bookmark.html">Bookmarked</a></li>-->
                    <!--                        <li class="menu-item"><a href="dashboard-applied.html">Applied</a></li>-->
                    <!--                        <li class="menu-item"><a href="dashboard-pricing.html">Pricing</a></li>-->
                    <!--                        <li class="menu-item"><a href="dashboard-message.html">Message</a></li>-->
                    <!--                        <li class="menu-item"><a href="dashboard-alert.html">Alert</a></li>-->
                    <!--                    </ul>-->
                </li>
                <li class="menu-item post-job">
                    <a title="Title" href="<?php echo base_url('Employer/Dashboard/Home'); ?>">
                        <i class="fas fa-plus"></i> ارسال اگهی
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto account-nav">
                <!--                <li class="dropdown menu-item header-top-notification">-->
                <!--                    <a href="#" class="notification-button"></a>-->
                <!--                    <div class="notification-card">-->
                <!--                        <div class="notification-head">-->
                <!--                            <span>Notifications</span>-->
                <!--                            <a href="#">Mark all as read</a>-->
                <!--                        </div>-->
                <!--                        <div class="notification-body">-->
                <!--                            <a href="home-2.html" class="notification-list">-->
                <!--                                <i class="fas fa-bolt"></i>-->
                <!--                                <p>Your Resume Updated!</p>-->
                <!--                                <span class="time">5 hours ago</span>-->
                <!--                            </a>-->
                <!--                            <a href="#" class="notification-list">-->
                <!--                                <i class="fas fa-arrow-circle-down"></i>-->
                <!--                                <p>Someone downloaded resume</p>-->
                <!--                                <span class="time">11 hours ago</span>-->
                <!--                            </a>-->
                <!--                            <a href="#" class="notification-list">-->
                <!--                                <i class="fas fa-check-square"></i>-->
                <!--                                <p>You applied for Project Manager <span>@homeland</span></p>-->
                <!--                                <span class="time">11 hours ago</span>-->
                <!--                            </a>-->
                <!--                            <a href="#" class="notification-list">-->
                <!--                                <i class="fas fa-user"></i>-->
                <!--                                <p>You changed password</p>-->
                <!--                                <span class="time">5 hours ago</span>-->
                <!--                            </a>-->
                <!--                            <a href="#" class="notification-list">-->
                <!--                                <i class="fas fa-arrow-circle-down"></i>-->
                <!--                                <p>Someone downloaded resume</p>-->
                <!--                                <span class="time">11 hours ago</span>-->
                <!--                            </a>-->
                <!--                        </div>-->
                <!--                        <div class="notification-footer">-->
                <!--                            <a href="#">See all notification</a>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </li>-->
                <?php if(!isset($_SESSION['UserIsLogged'])){ ?>
                <li class="menu-item login-popup">
                    <a href="<?php echo base_url('Account/login') ?>">
                        <button title="Title" type="button">
                            ورود
                            /
                        </button>
                    </a>
                </li>
                <li class="menu-item login-popup">
                    <a href="<?php echo base_url('Account/register') ?>">
                        <button title="Title" type="button">
                            ثبت نام
                        </button>
                    </a>
                </li>
                <?php } else{ ?>
                    <li class="menu-item login-popup">
                        <a href="<?php echo base_url('User/Home') ?>">
                            <button title="Title" type="button">
                                <?php echo $_SESSION['UserLoginInfo'][0]['UserFullName']; ?>
                            </button>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </nav>
    <!-- Modal -->
    <!--    <div class="account-entry">-->
    <!--        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-hidden="true">-->
    <!--            <div class="modal-dialog" role="document">-->
    <!--                <div class="modal-content">-->
    <!--                    <div class="modal-header">-->
    <!--                        <h5 class="modal-title"><i data-feather="user"></i>Login</h5>-->
    <!--                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
    <!--                            <span aria-hidden="true">&times;</span>-->
    <!--                        </button>-->
    <!--                    </div>-->
    <!--                    <div class="modal-body">-->
    <!--                        <form action="#">-->
    <!--                            <div class="form-group">-->
    <!--                                <input type="email" placeholder="Email Address" class="form-control">-->
    <!--                            </div>-->
    <!--                            <div class="form-group">-->
    <!--                                <input type="password" placeholder="Password" class="form-control">-->
    <!--                            </div>-->
    <!--                            <div class="more-option">-->
    <!--                                <div class="form-check">-->
    <!--                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">-->
    <!--                                    <label class="form-check-label" for="defaultCheck1">-->
    <!--                                        Remember Me-->
    <!--                                    </label>-->
    <!--                                </div>-->
    <!--                                <a href="#">Forget Password?</a>-->
    <!--                            </div>-->
    <!--                            <button class="button primary-bg btn-block">Login</button>-->
    <!--                        </form>-->
    <!--                        <div class="shortcut-login">-->
    <!--                            <span>Or connect with</span>-->
    <!--                            <div class="buttons">-->
    <!--                                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i>Facebook</a>-->
    <!--                                <a href="#" class="google"><i class="fab fa-google"></i>Google</a>-->
    <!--                            </div>-->
    <!--                            <p>Don't have an account? <a href="#">Register</a></p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-hidden="true">-->
    <!--            <div class="modal-dialog" role="document">-->
    <!--                <div class="modal-content">-->
    <!--                    <div class="modal-header">-->
    <!--                        <h5 class="modal-title"><i data-feather="edit"></i>Registration</h5>-->
    <!--                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
    <!--                            <span aria-hidden="true">&times;</span>-->
    <!--                        </button>-->
    <!--                    </div>-->
    <!--                    <div class="modal-body">-->
    <!--                        <div class="account-type">-->
    <!--                            <label for="idRegisterCan">-->
    <!--                                <input id="idRegisterCan" type="radio" name="register">-->
    <!--                                <span>Candidate</span>-->
    <!--                            </label>-->
    <!--                            <label for="idRegisterEmp">-->
    <!--                                <input id="idRegisterEmp" type="radio" name="register">-->
    <!--                                <span>Employer</span>-->
    <!--                            </label>-->
    <!--                        </div>-->
    <!--                        <form action="#">-->
    <!--                            <div class="form-group">-->
    <!--                                <input type="text" placeholder="Username" class="form-control">-->
    <!--                            </div>-->
    <!--                            <div class="form-group">-->
    <!--                                <input type="email" placeholder="Email Address" class="form-control">-->
    <!--                            </div>-->
    <!--                            <div class="form-group">-->
    <!--                                <input type="password" placeholder="Password" class="form-control">-->
    <!--                            </div>-->
    <!--                            <div class="more-option terms">-->
    <!--                                <div class="form-check">-->
    <!--                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">-->
    <!--                                    <label class="form-check-label" for="defaultCheck2">-->
    <!--                                        I accept the <a href="#">terms & conditions</a>-->
    <!--                                    </label>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <button class="button primary-bg btn-block">Register</button>-->
    <!--                        </form>-->
    <!--                        <div class="shortcut-login">-->
    <!--                            <span>Or connect with</span>-->
    <!--                            <div class="buttons">-->
    <!--                                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i>Facebook</a>-->
    <!--                                <a href="#" class="google"><i class="fab fa-google"></i>Google</a>-->
    <!--                            </div>-->
    <!--                            <p>Already have an account? <a href="#">Login</a></p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
</header>
<!-- Header End -->