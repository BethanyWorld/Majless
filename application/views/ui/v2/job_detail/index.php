<?php $_URL = base_url();
$_DIR = base_url('assets/ui/v2/'); ?>


<div class="alice-bg padding-top-60 section-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="job-listing-details">
                    <div class="job-title-and-info">
                        <div class="title">
                            <div class="thumb">
                                <img src="<?php echo $jobDetail['EmployerLogo']; ?>"
                                     class="img-fluid"
                                     alt="<?php echo $jobDetail['JobTitle']; ?>">
                            </div>
                            <div class="title-body">
                                <h4><?php echo $jobDetail['JobTitle']; ?></h4>
                                <div class="info">
                                    <span class="company">
                                        <a href="<?php echo current_url(); ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-briefcase"><rect x="2" y="7" width="20"
                                                                                         height="14" rx="2"
                                                                                         ry="2"></rect><path
                                                        d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                                            <?php echo $jobDetail['CategoryName']; ?>
                                        </a>
                                    </span>
                                    <span class="office-location">
                                        <a href="<?php echo current_url(); ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-map-pin"><path
                                                        d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle
                                                        cx="12" cy="10" r="3"></circle></svg>
                                            <?php echo $jobDetail['StateName']; ?>
                                        </a>
                                    </span>
                                    <span class="job-type full-time">
                                        <a href="<?php echo current_url(); ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline
                                                        points="12 6 12 12 16 14"></polyline></svg>

                                            <?php foreach ($jobContractType as $key => $value) {
                                                if ($jobDetail['JobContractType'] == $key) {
                                                    echo $value;
                                                }
                                            } ?>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="buttons">
                            <span id="myFavoriteJob" data-job-id="<?php echo $jobDetail['JobId']; ?>"
                                  class="save" style="cursor: pointer;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-heart">
                                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                </svg>
                                ذخیره
                            </span>
                            <a class="apply" id="requestJob"
                               data-job-id="<?php echo $jobDetail['JobId']; ?>"
                               data-toggle="modal"  style="cursor: pointer;">
                                درخواست استخدام
                            </a>
                        </div>
                    </div>
                    <div class="details-information section-padding-60">
                        <div class="row" style="flex-direction: row-reverse;">
                            <div class="col-xl-7  offset-xl-1  col-lg-8 rtl-dir text-justify">
                                <div class="description details-section">
                                    <?php echo $jobDetail['JobContent']; ?>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4">
                                <div class="information-and-share">
                                    <div class="job-summary rtl-dir text-justify">
                                        <h4>در یک نگاه</h4>
                                        <ul>
                                            <li><span>تاریخ انتشار:</span> <?php echo $jobDetail['CreateDateTime']; ?>
                                            </li>
                                            <li><span>تعداد بازدید:</span> <?php echo $jobDetail['VisitCount']; ?></li>
                                            <li>
                                                <span>نوع قرارداد:</span>
                                                <?php foreach ($jobContractType as $key => $value) {
                                                    if ($jobDetail['JobContractType'] == $key) {
                                                        echo $value;
                                                    }
                                                } ?>
                                            </li>
                                            <li><span>سابقه کار:</span>
                                                <?php foreach ($jobBackward as $key => $value) {
                                                    if ($jobDetail['JobBackward'] == $key) {
                                                        echo $value;
                                                    }
                                                } ?>
                                            </li>
                                            <li><span>استان:</span> <?php echo $jobDetail['StateName']; ?></li>
                                            <li><span>حقوق:</span>
                                                <?php foreach ($jobMoneyRange as $key => $value) {
                                                    if ($jobDetail['JobMoneyRange'] == $key) {
                                                        echo $value;
                                                    }
                                                } ?>
                                            </li>
                                            <li><span>جنسیت:</span>
                                                <?php foreach ($jobGender as $key => $value) {
                                                    if ($jobDetail['JobGender'] == $key) {
                                                        echo $value;
                                                    }
                                                } ?>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="share-job-post rtl-dir text-justify">
                                        <span class="share">به اشتراک بگذارید:</span>
                                        <a target="_blank"
                                           href="https://www.facebook.com/sharer.php?u=<?php echo current_url(); ?>"><i
                                                    data-feather="facebook"></i></a>
                                        <a target="_blank"
                                           href="https://twitter.com/intent/tweet?url=<?php echo current_url(); ?>&text=<?php echo $jobDetail['JobTitle']; ?>"><i
                                                    data-feather="twitter"></i></a>
                                        <a target="_blank"
                                           href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo current_url(); ?>&title=<?php echo $jobDetail['JobTitle']; ?>"><i
                                                    data-feather="linkedin"></i></a>
                                        <a target="_blank"
                                           href="https://plus.google.com/share?url=<?php echo current_url(); ?>"><i
                                                    data-feather="plus"></i></a>
                                    </div>
                                    <!--                                    <div class="buttons">-->
                                    <!--                                        <a href="#" class="button print"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg>Print Job</a>-->
                                    <!--                                        <a href="#" class="button report"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-flag"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><line x1="4" y1="22" x2="4" y2="15"></line></svg>Report Job</a>-->
                                    <!--                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row rtl-dir text-justify">
                        <div class="col-12">
                            <div class="company-information details-section">
                                <h4>
                                    <i data-feather="briefcase"></i>
                                    درباره <?php echo $jobDetail['EmployerCompanyName']; ?>
                                </h4>
                                <ul>
                                    <li>
                                        <span>وب سایت:</span>
                                        <?php echo $jobDetail['EmployerWebSite']; ?>
                                    </li>
                                    <li>
                                        <p>
                                            <?php echo $jobDetail['EmployerDetail']; ?>
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
<!---->
<!--<div class="section-padding-bottom alice-bg">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col">-->
<!--                <div class="section-header section-header-2 section-header-with-right-content">-->
<!--                    <h2>Simillar Jobs</h2>-->
<!--                    <a href="#" class="header-right">+ Browse All Jobs</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div class="col">-->
<!--                <div class="job-list">-->
<!--                    <div class="thumb">-->
<!--                        <a href="#">-->
<!--                            <img src="assets/images/job/company-logo-1.png" class="img-fluid" alt="">-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="body">-->
<!--                        <div class="content">-->
<!--                            <h4><a href="job-details.html">Designer Required</a></h4>-->
<!--                            <div class="info">-->
<!--                                <span class="company"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>Theoreo</a></span>-->
<!--                                <span class="office-location"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>New York City</a></span>-->
<!--                                <span class="job-type full-time"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>Full Time</a></span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="more">-->
<!--                            <div class="buttons">-->
<!--                                <a href="#" class="button">Apply Now</a>-->
<!--                                <a href="#" class="favourite"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></a>-->
<!--                            </div>-->
<!--                            <p class="deadline">Deadline: Oct 31,  2019</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="job-list">-->
<!--                    <div class="thumb">-->
<!--                        <a href="#">-->
<!--                            <img src="assets/images/job/company-logo-2.png" class="img-fluid" alt="">-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="body">-->
<!--                        <div class="content">-->
<!--                            <h4><a href="job-details.html">Project Manager</a></h4>-->
<!--                            <div class="info">-->
<!--                                <span class="company"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>Degoin</a></span>-->
<!--                                <span class="office-location"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>San Francisco</a></span>-->
<!--                                <span class="job-type part-time"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>Part Time</a></span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="more">-->
<!--                            <div class="buttons">-->
<!--                                <a href="#" class="button">Apply Now</a>-->
<!--                                <a href="#" class="favourite"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></a>-->
<!--                            </div>-->
<!--                            <p class="deadline">Deadline: Oct 31,  2019</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="job-list">-->
<!--                    <div class="thumb">-->
<!--                        <a href="#">-->
<!--                            <img src="assets/images/job/company-logo-8.png" class="img-fluid" alt="">-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="body">-->
<!--                        <div class="content">-->
<!--                            <h4><a href="job-details.html">Restaurant Team Member - Crew </a></h4>-->
<!--                            <div class="info">-->
<!--                                <span class="company"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>Geologitic</a></span>-->
<!--                                <span class="office-location"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>New Orleans</a></span>-->
<!--                                <span class="job-type temporary"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>Temporary</a></span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="more">-->
<!--                            <div class="buttons">-->
<!--                                <a href="#" class="button">Apply Now</a>-->
<!--                                <a href="#" class="favourite"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></a>-->
<!--                            </div>-->
<!--                            <p class="deadline">Deadline: Oct 31,  2019</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="job-list">-->
<!--                    <div class="thumb">-->
<!--                        <a href="#">-->
<!--                            <img src="assets/images/job/company-logo-9.png" class="img-fluid" alt="">-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="body">-->
<!--                        <div class="content">-->
<!--                            <h4><a href="job-details.html">Nutrition Advisor</a></h4>-->
<!--                            <div class="info">-->
<!--                                <span class="company"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>Theoreo</a></span>-->
<!--                                <span class="office-location"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>New York City</a></span>-->
<!--                                <span class="job-type full-time"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>Full Time</a></span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="more">-->
<!--                            <div class="buttons">-->
<!--                                <a href="#" class="button">Apply Now</a>-->
<!--                                <a href="#" class="favourite"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></a>-->
<!--                            </div>-->
<!--                            <p class="deadline">Deadline: Oct 31,  2019</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="job-list">-->
<!--                    <div class="thumb">-->
<!--                        <a href="#">-->
<!--                            <img src="assets/images/job/company-logo-3.png" class="img-fluid" alt="">-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="body">-->
<!--                        <div class="content">-->
<!--                            <h4><a href="job-details.html">Land Development Marketer</a></h4>-->
<!--                            <div class="info">-->
<!--                                <span class="company"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>Realouse</a></span>-->
<!--                                <span class="office-location"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>Washington, D.C.</a></span>-->
<!--                                <span class="job-type freelance"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>Freelance</a></span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="more">-->
<!--                            <div class="buttons">-->
<!--                                <a href="#" class="button">Apply Now</a>-->
<!--                                <a href="#" class="favourite"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></a>-->
<!--                            </div>-->
<!--                            <p class="deadline">Deadline: Oct 31,  2019</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->