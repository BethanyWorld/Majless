<?php $_URL = base_url();
$_DIR = base_url('assets/ui/v2'); ?>
<!-- Banner -->
<div class="banner banner-1 banner-1-bg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner-content rtl-dir text-justify">
                    <h1>پیدا کردن شغل خوب، انقدر ها هم سخت نیست</h1>
                    <p>هزاران فرصت شغلی و شرکت های برتر در حوزه تخصصی شما آماده اند تا رزومه شما را ببینند</p>
                    <a href="<?php echo base_url('Account/register') ?>" class="button">رزومه خود را تکمیل کنید</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->
<!-- Search and Filter -->
<div class="searchAndFilter-wrapper">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="searchAndFilter-block">
                    <div class="searchAndFilter">
                        <form action="<?php echo base_url('JobList') ?>" method="get" class="search-form">
                            <input type="text" name="kw" placeholder="عبارت مورد نظر را جستجو کنید" style="height: 60px;">
                            <select class="selectpicker" name="st" id="search-location" data-live-search="true" data-dropup-auto="false">
                                <option value="" selected>-- انتخاب استان --</option>
                                <?php foreach ($states as $state) { ?>
                                    <option value="<?php echo $state['StateId']; ?>">
                                        <?php echo $state['StateName']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                            <select class="selectpicker" name="ct" id="search-category" data-live-search="true" data-dropup-auto="false">
                                <option value="" selected>-- انتخاب دسته بندی --</option>
                                <?php foreach ($jobCategories as $jobCategory) { ?>
                                    <option value="<?php echo $jobCategory['CategoryId']; ?>">
                                        <?php echo $jobCategory['CategoryName']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                            <button class="button primary-bg">
                                <i class="fas fa-search"></i>
                               جستجو
                            </button>
                        </form>
                        <div class="filter-categories">
                            <h4>دسته بندی شغلی</h4>
                            <ul>
                                <?php foreach ($categoriesWithJobCount as $item) { ?>
                                    <li>
                                        <a href="<?php echo base_url('JobList/?ct=').$item['CategoryId']; ?>">
                                            <i data-feather="bar-chart-2"></i>
                                           <?php echo $item['CategoryName']; ?>
                                            <span>(<?php echo $item['jobCount']; ?>)</span>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Search and Filter End -->
<!-- Jobs -->
<div class="section-padding-bottom alice-bg">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="nav nav-tabs job-tab" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="recent-tab" data-toggle="tab" href="#recent" role="tab"
                           aria-controls="recent" aria-selected="true">آخرین فرصت های شغلی</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="feature-tab" data-toggle="tab" href="#feature" role="tab"
                           aria-controls="feature" aria-selected="false">فرصت های شغلی ویژه</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="recent" role="tabpanel" aria-labelledby="recent-tab">
                        <div class="row">
                            <div class="col-12">
                                <?php foreach ($jobs as $row) { ?>
                                    <div class="job-list">
                                        <div class="thumb">
                                            <a href="<?php echo getJobUrl($row['JobId'], $row['JobTitle']); ?>">
                                                <img src="<?php echo $row['EmployerLogo']; ?>"
                                                     class="img-fluid" alt="<?php echo $row['EmployerFullName']; ?>"/>
                                            </a>
                                        </div>
                                        <div class="body">
                                            <div class="content">
                                                <h4>
                                                    <a href="<?php echo getJobUrl($row['JobId'], $row['JobTitle']); ?>">
                                                        <?php echo $row['JobTitle']; ?>
                                                    </a>
                                                </h4>
                                                <div class="info">
                                                    <span class="company">
                                                        <a href="<?php echo getJobUrl($row['JobId'], $row['JobTitle']); ?>">
                                                            <i data-feather="briefcase"></i><?php echo $row['CategoryName']; ?>
                                                        </a>
                                                    </span>
                                                    <span class="office-location">
                                                            <i data-feather="map-pin"></i><?php echo $row['StateName']; ?>
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
                                                    <a href="<?php echo getJobUrl($row['JobId'], $row['JobTitle']); ?>"
                                                       class="button">ارسال رزومه</a>
                                                </div>
                                                <p class="deadline"><?php echo getDateFirstPart($row['CreateDateTime']); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="feature" role="tabpanel" aria-labelledby="feature-tab">
                        <!-- featured jobs goes here  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Jobs End -->
<!-- Top Companies -->
<div class="section-padding-top padding-bottom-90">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-header">
                    <h2> شرکت ها</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="company-carousel owl-carousel">
                    <?php foreach ($employersWithJobCount as $row) { ?>
                        <div class="company-wrap">
                            <div class="thumb">
                                <a href="<?php echo getEmployerUrl($row['EmployerId'], $row['EmployerCompanyName']); ?>">
                                    <img src="<?php echo $row['EmployerLogo']; ?>"
                                         class="img-fluid" alt="<?php echo $row['EmployerCompanyName']; ?>">
                                </a>
                            </div>
                            <div class="body rtl-dir">
                                <h4>
                                    <a href="<?php echo getEmployerUrl($row['EmployerId'], $row['EmployerCompanyName']); ?>">
                                        <?php echo $row['EmployerCompanyName']; ?>
                                    </a>
                                </h4>
                                <span><?php echo $row['StateName']; ?></span>
                                <a href="<?php echo getEmployerUrl($row['EmployerId'], $row['EmployerCompanyName']); ?>"
                                   class="button">
                                    <?php echo $row['jobCount']; ?>
                                    فرصت شغلی
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Registration Box -->
<div class="section-padding pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 rtl-dir text-justify">
                <div class="call-to-action-box candidate-box">
                    <div class="icon">
                        <img src="<?php echo base_url(); ?>assets/ui/v2/images/register-box/1.png" alt="">
                    </div>
                    <span>آیا بدنبال</span>
                    <h3>شغل هستید؟</h3>
                    <a href="<?php echo base_url('Account/register'); ?>">
                        ثبت نام کنید <i class="fas fa-arrow-left"></i></a>
                </div>
            </div>
            <div class="col-lg-6 rtl-dir text-justify">
                <div class="call-to-action-box employer-register" style="padding-right: 40%;padding-left: 20px;">
                    <div class="icon" style="right: 40px;left: auto;">
                        <img src="<?php echo base_url(); ?>assets/ui/v2/images/register-box/2.png" alt="">
                    </div>
                    <span>آیا بدنبال</span>
                    <h3>نیروی کار هستید؟</h3>
                    <a href="<?php echo base_url('Account/register'); ?>">
                        ثبت نام کنید <i class="fas fa-arrow-left"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Registration Box End -->