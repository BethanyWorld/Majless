<?php
$_URL = base_url();
$_DIR = base_url('assets/ui/v2/');
$userInfo = $userDetail['userInfo'][0];
$userCourseHistory = $userDetail['userCourseHistory'];
$userEmploymentHistory = $userDetail['userEmploymentHistory'];
$userLanguageHistory = $userDetail['userLanguageHistory'];
$userSkills = $userDetail['userSkills'];
$userHasTest = $userDetail['userHasTest'];
$userSocialAccount = $userDetail['userSocialAccount'];
?>


<div class="alice-bg padding-top-60 section-padding-bottom rtl-dir">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="candidate-details">
                    <div class="title-and-info">
                        <div class="title">
                            <div class="thumb">
                                <img src="<?php echo $userInfo['UserImage']; ?>" class="img-fluid" alt="">
                            </div>
                            <div class="title-body">
                                <h4>
                                    <span class="office-location">
                                        <?php
                                            if (!empty($userHasTest)) {
                                                echo '<i style="color: green;" data-feather="award"></i>';
                                            }
                                        ?>
                                    </span>
                                    <?php echo $userInfo['UserFullName']; ?>
                                </h4>
                                <div class="info">
                                    <span class="candidate-designation">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-check-square"><polyline
                                                    points="9 11 12 14 22 4"></polyline><path
                                                    d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                                        <?php echo $userInfo['UserJobTitle']; ?>
                                    </span>
                                    <span class="candidate-location">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-map-pin"><path
                                                    d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle
                                                    cx="12" cy="10" r="3"></circle></svg>
                                        <?php echo $userInfo['StateName']; ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="download-resume">
                            <a href="#">
                                دانلود رزومه
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-download">
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                    <polyline points="7 10 12 15 17 10"></polyline>
                                    <line x1="12" y1="15" x2="12" y2="3"></line>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="skill-and-profile">
                        <div class="skill rtl-dir">
                            <label>مهارت ها:</label>
                            <?php foreach ($userSkills as $userSkill) { ?>
                                <a href="javascript:void(0);"><?php echo $userSkill['SkillName']; ?></a>
                            <?php } ?>
                        </div>
                        <div class="social-profile">
                            <label>شبکه های اجتماعی:</label>
                            <?php foreach ($userSocialAccount as $item) {
                                switch ($item['SocialSlug']){
                                    case 'Facebook':
                                        echo '<a href="'.$item['AccessUrl'].'" target="_blank"><i class="fab fa-facebook-f"></i></a>';
                                        break;
                                    case 'Instagram':
                                        echo '<a href="'.$item['AccessUrl'].'" target="_blank"><i class="fab fa-instagram"></i></a>';
                                        break;
                                    case 'Twitter':
                                        echo '<a href="'.$item['AccessUrl'].'" target="_blank"><i class="fab fa-twitter"></i></a>';
                                        break;
                                    case 'Google+':
                                        echo '<a href="'.$item['AccessUrl'].'" target="_blank"><i class="fab fa-google-plus"></i></a>';
                                        break;
                                    case 'Linkedin':
                                        echo '<a href="'.$item['AccessUrl'].'" target="_blank"><i class="fab fa-linkedin-in"></i></a>';
                                        break;
                                    case 'WhatsApp':
                                        echo '<a href="'.$item['AccessUrl'].'" target="_blank"><i class="fab fa-whatsapp"></i></a>';
                                        break;
                                    case 'Telegram':
                                        echo '<a href="'.$item['AccessUrl'].'" target="_blank"><i class="fab fa-telegram"></i></a>';
                                        break;
                                }
                            } ?>
                        </div>
                    </div>
                    <div class="details-information section-padding-60">
                        <div class="row">
                            <div class="col-xl-7 offset-xl-1 col-lg-8 rtl-dir text-justify">
                                <div class="about-details details-section">
                                    <h4>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-align-left">
                                            <line x1="17" y1="10" x2="3" y2="10"></line>
                                            <line x1="21" y1="6" x2="3" y2="6"></line>
                                            <line x1="21" y1="14" x2="3" y2="14"></line>
                                            <line x1="17" y1="18" x2="3" y2="18"></line>
                                        </svg>
                                        درباره من
                                    </h4>
                                    <p>
                                        <?php echo $userInfo['UserAbout']; ?>
                                    </p>
                                </div>
                                <div class="edication-background details-section rtl-dir text-justify">
                                    <h4>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-book">
                                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                                        </svg>
                                        سوابق تحصیلی
                                    </h4>
                                    <?php foreach ($userCourseHistory as $row) { ?>
                                        <div class="education-label">
                                            <span class="study-year">
                                                <?php echo $row['CourseStartDate']; ?>
                                                - <?php echo $row['CourseEndDate']; ?>
                                                <?php echo pipeUserGrade($row['CourseGrade']); ?>

                                            </span>
                                            <h5>
                                                <?php echo $row['CourseField']; ?>
                                                <span>
                                                    دانشگاه/موسسه
                                                    <?php echo $row['CourseUniversityName']; ?>
                                                </span>
                                            </h5>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="experience details-section">
                                    <h4>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-briefcase">
                                            <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                        </svg>
                                        سوابق شغلی
                                    </h4>
                                    <?php foreach ($userEmploymentHistory as $row) { ?>
                                        <div class="experience-section">
                                            <span class="service-year">
                                                <?php echo $row['EmploymentStartDate']; ?>
                                                - <?php echo $row['EmploymentEndDate']; ?>
                                            </span>
                                            <h5>
                                                <?php echo $row['EmploymentTitle']; ?>
                                                <span> <?php echo $row['EmploymentCompanyName']; ?></span>
                                            </h5>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="experience details-section">
                                    <h4>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-briefcase">
                                            <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                        </svg>
                                        مهارت در زبان های خارجی
                                    </h4>
                                    <?php foreach ($userLanguageHistory as $row) { ?>
                                        <div class="experience-section">
                                            <h5>
                                                <?php echo $row['LanguageName']; ?>
                                                <span>
                                                    <?php echo pipeUserLanguageLevel($row['LanguageLevel']); ?>
                                                </span>
                                            </h5>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 rtl-dir text-justify">
                                <div class="information-and-contact">
                                    <div class="information">
                                        <h4>اطلاعات</h4>
                                        <ul>
                                            <li><span>عنوان شغلی:</span><?php echo $userInfo['UserJobTitle']; ?></li>
                                            <li><span>ایمیل:</span><?php echo $userInfo['UserEmail']; ?></li>
                                            <li><span>تاریخ تولد:</span><?php echo $userInfo['UserBirthDate']; ?></li>
                                        </ul>
                                    </div>
                                    <div class="buttons">
                                        <a href="#" class="button contact-button" data-toggle="modal"
                                           data-target="#exampleModal1">با من تماس بگیرید</a>
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade contact-form-modal" id="exampleModal" tabindex="-1"
                                         role="dialog" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <h4>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                             stroke-width="2" stroke-linecap="round"
                                                             stroke-linejoin="round" class="feather feather-edit">
                                                            <path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path>
                                                            <polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon>
                                                        </svg>
                                                        Contact Me
                                                    </h4>
                                                    <form action="#">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                   placeholder="Your Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="email" class="form-control"
                                                                   placeholder="Your Email">
                                                        </div>
                                                        <div class="form-group">
                                                            <textarea class="form-control"
                                                                      placeholder="Your Message"></textarea>
                                                        </div>
                                                        <button class="button">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
