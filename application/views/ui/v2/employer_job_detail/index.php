<?php $_URL = base_url();
$_DIR = base_url('assets/ui/v2/'); ?>
<script src="<?php echo $_DIR; ?>js/bootpage.min.js"></script>


<div class="alice-bg rtl-dir text-justify  banner-3-bg" style="padding: 30px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-area">
                    <h1>
                        فرصت های شغلی شرکت
                        <?php echo $employerDetail['EmployerCompanyName']; ?>
                    </h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="<?php echo base_url(); ?>">صفحه اصلی</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="<?php echo base_url('EmployerList'); ?>">شرکت ها</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <?php echo $employerDetail['EmployerCompanyName']; ?>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="alice-bg section-padding-bottom">
    <div class="container">
        <div class="row no-gutters">
            <div class="col">
                <div class="job-listing-container">
                    <div class="filtered-job-listing-wrapper">
                        <div class="job-view-controller-wrapper">
                            <div class="job-view-controller">
                                <div class="controller list active">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-menu">
                                        <line x1="3" y1="12" x2="21" y2="12"></line>
                                        <line x1="3" y1="6" x2="21" y2="6"></line>
                                        <line x1="3" y1="18" x2="21" y2="18"></line>
                                    </svg>
                                </div>
                                <div class="controller grid">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-grid">
                                        <rect x="3" y="3" width="7" height="7"></rect>
                                        <rect x="14" y="3" width="7" height="7"></rect>
                                        <rect x="14" y="14" width="7" height="7"></rect>
                                        <rect x="3" y="14" width="7" height="7"></rect>
                                    </svg>
                                </div>
                            </div>
                            <div class="showing-number rtl-dir">
                                <span>
                                    <b class="job-count"><?php echo count($jobDetail); ?></b>
                                    فرصت شغلی
                                </span>
                            </div>
                        </div>
                        <div class="job-filter-result" id="jobContainer">
                            <?php
                            if ($jobDetail) {
                                foreach ($jobDetail as $row) { ?>
                                    <div class="job-list">
                                        <a href="<?php echo getJobUrl($row['JobId'], $row['JobTitle']); ?>">
                                            <div class="thumb">
                                                <img src="<?php echo $employerDetail['EmployerLogo']; ?>" class="img-fluid"
                                                     alt="<?php echo $employerDetail['EmployerFullName']; ?>"/>
                                            </div>
                                        </a>
                                        <a href="<?php echo getJobUrl($row['JobId'], $row['JobTitle']); ?>">
                                            <div class="body">
                                                <div class="content">
                                                    <h4><?php echo $row['JobTitle']; ?></h4>
                                                    <div class="info">
                        <span class="company">
                                                        <i data-feather="briefcase"></i><?php echo $row['CategoryName']; ?>
                                                    </span>
                                                        <span class="office-location">
                                                            <i data-feather="map-pin"></i><?php echo $employerDetail['StateName']; ?>
                                                    </span>
                                                        <span class="job-type temporary">
                                                            <i data-feather="clock"></i>
                                                            <?php foreach ($jobContractType as $key => $value) {
                                                                if ($row['JobContractType'] == $key) {
                                                                    echo $value;
                                                                }
                                                            } ?>
                                                    </span>
                                                    </div>
                                                </div>
                                                <div class="more">
                                                    <div class="buttons">
                                                        <a href="<?php echo getJobUrl($row['JobId'], $row['JobTitle']); ?>" class="button">ارسال
                                                            رزومه
                                                        </a>
                                                    </div>
                                                    <p class="deadline">
                                                        <?php echo getDateFirstPart($row['CreateDateTime']); ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php }
                            }
                            else{?>
                                <div class="col-xs-12 alert alert-danger text-center">
                                    موردی یافت نشد
                                </div>
                            <?php } ?>
                        </div>

                        <div class="row rtl-dir text-justify">
                            <div class="col-12">
                                <div class="company-information details-section">
                                    <h4>
                                        <i data-feather="briefcase"></i>
                                        درباره <?php echo $employerDetail['EmployerCompanyName']; ?>
                                    </h4>
                                    <ul>
                                        <li>
                                            <span>وب سایت:</span>
                                            <?php echo $employerDetail['EmployerWebSite']; ?>
                                        </li>
                                        <li>
                                            <p>
                                                <?php echo $employerDetail['EmployerDetail']; ?>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>