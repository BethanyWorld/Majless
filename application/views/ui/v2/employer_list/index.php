<?php $_URL = base_url();
$_DIR = base_url('assets/ui/v2/'); ?>
<script src="<?php echo $_DIR; ?>js/bootpage.min.js"></script>


<div class="alice-bg rtl-dir text-justify  banner-3-bg" style="padding: 30px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="breadcrumb-area">
                    <h1>فهرست شرکت ها</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">صفحه اصلی</a></li>
                            <li class="breadcrumb-item active" aria-current="page">فهرست شرکت ها</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-md-6">
                <div class="breadcrumb-form">
                    <form action="#">
                        <input
                                id="inputSearchKeyword"
                                type="text" placeholder="جستجو کنید...">
                        <button id="searchByKeyword">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-search">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                        </button>
                    </form>
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
                                    <b class="employer-count">
                                        <?php echo $employerCount; ?>
                                    </b>
                                    شرکت
                                </span>
                            </div>
                        </div>
                        <div class="job-filter-result" id="jobContainer">
                        </div>
                        <div id="pagination" class="pagination-list text-center">
                        </div>
                    </div>
                    <div class="job-filter-wrapper">
                        <div data-id="gender" class="job-filter same-pad gender">
                            <button class="filterData btn btn-primary btn-block btn-large text-center">
                                اعمال فیلتر
                            </button>
                        </div>
                        <div class="job-filter-dropdown same-pad category">
                            <div class="dropdown bootstrap-select">
                                <select id="inputCategory" class="selectpicker" data-live-search="true">
                                    <option value="" selected>دسته بندی</option>
                                    <?php foreach ($jobCategories as $jobCategory) { ?>
                                        <option value="<?php echo $jobCategory['CategoryId']; ?>">
                                            <?php echo $jobCategory['CategoryName']; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="job-filter-dropdown same-pad location">
                            <select id="inputState" class="selectpicker" data-dropup-auto="false"
                                    data-live-search="true">
                                <option value="" selected>استان</option>
                                <?php foreach ($states as $state) { ?>
                                    <option value="<?php echo $state['StateId']; ?>">
                                        <?php echo $state['StateName']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div data-id="job-type" class="job-filter job-type same-pad">
                            <h4 class="option-title">نوع قرارداد شرکت</h4>
                            <ul>
                                <?php foreach ($jobContractType as $key => $value) { ?>
                                    <li class="<?php echo $key; ?>">
                                        <input class="custom-radio"
                                               type="radio"
                                               id="jobContractType-<?php echo $key; ?>"
                                               name="inputJobContractType"
                                               value="<?php echo $key; ?>"/>
                                        <label for="jobContractType-<?php echo $key; ?>">
                                            <span class="dot"></span>
                                            <?php echo $value; ?>
                                        </label>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div data-id="experience" class="job-filter experience same-pad">
                            <h4 class="option-title">سابقه کاری</h4>
                            <ul>
                                <?php foreach ($jobBackward as $key => $value) { ?>
                                    <li class="<?php echo $key; ?>">
                                        <input class="custom-radio"
                                               type="radio"
                                               id="jobBackward-<?php echo $key; ?>"
                                               name="inputJobBackward"
                                               value="<?php echo $key; ?>"/>
                                        <label for="jobBackward-<?php echo $key; ?>">
                                            <span class="dot"></span>
                                            <?php echo $value; ?>
                                        </label>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div data-id="gender" class="job-filter same-pad gender">
                            <h4 class="option-title">جنسیت</h4>
                            <ul>
                                <?php foreach ($jobGender as $key => $value) { ?>
                                    <li class="<?php echo $key; ?>">
                                        <input class="custom-radio"
                                               type="radio"
                                               id="jobGender-<?php echo $key; ?>"
                                               name="inputJobGender"
                                               value="<?php echo $key; ?>"/>
                                        <label for="jobGender-<?php echo $key; ?>">
                                            <span class="dot"></span>
                                            <?php echo $value; ?>
                                        </label>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div data-id="gender" class="job-filter same-pad gender">
                            <button class="filterData btn btn-primary btn-block btn-large text-center">
                                اعمال فیلتر
                            </button>
                        </div>
                        <br>
                        <div data-id="qualification" class="job-filter qualification same-pad d-none">
                            <h4 class="option-title">حداقل مدرک</h4>
                            <ul>
                                <?php foreach ($jobCourseGrade as $key => $value) { ?>
                                    <li class="<?php echo $key; ?>">
                                        <input class="custom-radio"
                                               type="radio"
                                               id="jobCourseGrade-<?php echo $key; ?>"
                                               name="jobCourseGrade"
                                               value="<?php echo $key; ?>"/>
                                        <label for="jobCourseGrade-<?php echo $key; ?>">
                                            <span class="dot"></span>
                                            <?php echo $value; ?>
                                        </label>
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