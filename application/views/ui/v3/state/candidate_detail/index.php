<?php $_DIR = base_url('assets/ui/v3/'); ?>
<h1 class="page-caption">
    نامزد انتخاباتی استان
    <?php echo urldecode($stateName); ?>
</h1>
<div class="container container-wrapper">
    <div class="row col-xs-12 col-md-3 pull-right sidebar">
        <div class="panel panel-default">
            <div class="panel-body">
                <img style="max-width: 100%;" class="thumbnail profile-image"
                     src="<?php echo $candidate['CandidateProfileImage']; ?>">
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                <ul class="right-panel-candidate-detail-ul">
                    <li>
                        <div>
                            حوزه انتخابیه:
                        </div>
                        <strong>
                            <?php echo $candidate['ElectionName']; ?>
                        </strong>
                    </li>
                    <li>
                        <div>
                            استان - شهر:
                        </div>
                        <strong>
                            <?php echo $candidate['StateName'] . " " . $candidate['CityName']; ?>
                        </strong>
                    </li>
                    <li>
                        <div>
                            دین:
                        </div>
                        <strong>
                            <?php echo religionPipe($candidate['CandidateReligion']); ?>
                        </strong>
                    </li>
                </ul>
                <div class="col-md-12 col-xs-12 padding-left-0 hidden">
                    <div class="have-border-bottom">
                        <h4>اخبار و رویدادهای مرتبط</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row col-xs-12 col-md-9 pull-left responsive-style-auto-margin padding-top-15">
        <div class="row">
            <div class="panel left-candidate-panel-resume padding-0">
                <div class="alert alert-info-candidate text-center">
                    <div class="col-md-4 col-xs-12 candidate-description">
                        <h2>
                            <?php echo $candidate['CandidateFirstName'] . " " . $candidate['CandidateLastName']; ?>
                        </h2>
                        <span><?php echo $candidate['CandidateBirthDate']; ?></span>
                    </div>
                    <h5>
                        <?php echo $candidate['CandidateFirstName'] . " " . $candidate['CandidateLastName']; ?>
                        نامزد انتخاباتی استان
                        <?php echo $candidate['StateName']; ?>
                        شهر
                        <?php echo $candidate['CityName']; ?>
                        حوزه انتخابیه
                        <?php echo $candidate['ElectionName']; ?>
                    </h5>
                </div>
            </div>
            <!-- Military Status -->
            <div class="panel left-candidate-panel-resume padding-0">
                <div class="panel-heading left-candidate-panel-resume col-md-12 col-xs-12 padding-0">
                    <div class="have-border-bottom">
                        <h3>سوابق خدمت</h3>
                    </div>
                </div>
                <div class="panel-body">
                    <ul class="resume-ul">
                        <li>
                            <span class="fa fa-circle-o"></span>
                            <?php
                            foreach ($EnumResumeProfile['CandidateMilitaryStatus'] as $key => $value) {
                                if ($candidateMilitaryStatus[0]['CandidateMilitaryStatus'] == $key) {
                                    echo $value;
                                }
                            }
                            ?>
                            <?php
                            foreach ($EnumResumeProfile['CandidateExemptTitle'] as $key => $value) {
                                if ($candidateMilitaryStatus[0]['CandidateExemptTitle'] == $key) {
                                    echo " علت معافیت " . $value;
                                }
                            }
                            ?>
                            <?php echo $candidateMilitaryStatus[0]['CandidateExemptDescription']; ?>
                            <?php
                            foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) {
                                if ($candidateMilitaryStatus[0]['CandidateMilitaryEndMonth'] == $key) {
                                    echo $value;
                                }
                            }
                            ?>
                            <?php echo $candidateMilitaryStatus[0]['CandidateMilitaryEndYear']; ?>
                            <?php
                            foreach ($EnumResumeProfile['CandidateMilitaryEndArea'] as $key => $value) {
                                if ($candidateMilitaryStatus[0]['CandidateMilitaryEndArea'] == $key) {
                                    echo $value;
                                }
                            }
                            ?>
                            <?php echo $candidateMilitaryStatus[0]['CandidateMilitaryEndAreaTitle']; ?>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Academic  -->
            <div class="panel left-candidate-panel-resume padding-0">
                <div class="panel-heading left-candidate-panel-resume col-md-12 col-xs-12 padding-0">
                    <div class="have-border-bottom">
                        <h3>سوابق تحصیلی</h3>
                    </div>
                </div>
                <div class="panel-body">
                    <ul class="resume-ul">
                        <?php foreach ($candidateAcademicBackground as $item) { ?>
                            <li>
                                <span class="fa fa-circle-o"></span>
                                گروه تحصیلی :
                                <?php
                                foreach ($EnumResumeProfile['CandidateDepartment'] as $key => $value) {
                                    if ($item['CandidateDepartment'] == $key) {
                                        echo $value;
                                    }
                                }
                                ?>
                                مقطع :
                                <?php
                                foreach ($EnumResumeProfile['CandidateGrade'] as $key => $value) {
                                    if ($item['CandidateGrade'] == $key) {
                                        echo $value;
                                    }
                                }
                                ?>
                                رشته تحصیلی :
                                <?php
                                foreach ($EnumResumeProfile['CandidateSchoolMajor'] as $key => $value) {
                                    if ($item['CandidateSchoolMajor'] == $key) {
                                        echo $value;
                                    }
                                }
                                ?>
                                <?php echo $item['CandidateMajor']; ?>
                                وضعیت تحصیل :
                                <?php
                                foreach ($EnumResumeProfile['AcademicStudyStatus'] as $key => $value) {
                                    if ($item['CandidateStudyStatus'] == $key) {
                                        echo $value;
                                    }
                                }
                                ?>
                                دانشگاه :
                                <?php
                                foreach ($EnumResumeProfile['CandidateUniversityLevelType'] as $key => $value) {
                                    if ($item['CandidateUniversityLevelType'] == $key) {
                                        echo $value;
                                    }
                                }
                                ?>
                                نام دانشگاه :
                                <?php echo $item['CandidateUniversityName']; ?>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <!-- Job History -->
            <div class="panel left-candidate-panel-resume padding-0">
                <div class="panel-heading left-candidate-panel-resume col-md-12 col-xs-12 padding-0">
                    <div class="have-border-bottom">
                        <h3>سوابق شغلی</h3>
                    </div>
                </div>
                <div class="panel-body">
                    <ul class="resume-ul">
                        <?php foreach ($candidateJobHistory

                        as $item) { ?>
                        <li>
                            <span class="fa fa-circle-o"></span>
                            عنوان شغلی :
                            <?php echo $item['CandidateJobTitle']; ?>
                            نام سازمان :
                            <?php echo $item['CandidateJobCompanyTitle']; ?>
                            شروع فعالیت:
                            <?php
                            foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) {
                                if ($item['CandidateStartJobMonth'] == $key) {
                                    echo $value;
                                }
                            }
                            ?>
                            <?php echo $item['CandidateStartJobYear']; ?>
                            پایان فعالیت:
                            <?php
                            foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) {
                                if ($item['CandidateEndJobMonth'] == $key) {
                                    echo $value;
                                }
                            }
                            ?>
                            <?php echo $item['CandidateEndJobYear']; ?>
                            <?php } ?>
                    </ul>
                </div>
            </div>
            <!-- Book Publishing History -->
            <div class="panel left-candidate-panel-resume padding-0">
                <div class="panel-heading left-candidate-panel-resume col-md-12 col-xs-12 padding-0">
                    <div class="have-border-bottom">
                        <h3>تالیف کتاب</h3>
                    </div>
                </div>
                <div class="panel-body">
                    <ul class="resume-ul">
                        <?php foreach ($candidateBooks

                        as $item) { ?>
                        <li>
                            <span class="fa fa-circle-o"></span>
                            عنوان کتاب :
                            <?php echo $item['CandidateBookTitle']; ?>
                            ناشر :
                            <?php echo $item['CandidateBookPublisher']; ?>
                            تاریخ چاپ:
                            <?php
                            foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) {
                                if ($item['CandidateBookPublishMonth'] == $key) {
                                    echo $value;
                                }
                            }
                            ?>
                            <?php echo $item['CandidateBookPublishYear']; ?>
                            <?php } ?>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Articles History -->
            <div class="panel left-candidate-panel-resume padding-0">
                <div class="panel-heading left-candidate-panel-resume col-md-12 col-xs-12 padding-0">
                    <div class="have-border-bottom">
                        <h3> مقاله علمی</h3>
                    </div>
                </div>
                <div class="panel-body">
                    <ul class="resume-ul">
                        <?php foreach ($candidateArticles as $item) { ?>
                            <li>
                                <span class="fa fa-circle-o"></span>
                                عنوان مقاله:
                                <?php echo $item['CandidateArticleTitle']; ?>
                                سطح مقاله:
                                <?php
                                foreach ($EnumResumeProfile['ArticleLevelType'] as $key => $value) {
                                    if ($item['CandidateArticleLevel'] == $key) {
                                        echo $value;
                                    }
                                }
                                ?>
                                عنوان مجله:
                                <?php echo $item['CandidateArticleMagazineTitle']; ?>
                                تاریخ نشر:
                                <?php echo $item['CandidateArticlePublishYear']; ?>
                                <?php
                                foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) {
                                    if ($item['CandidateArticlePublishMonth'] == $key) {
                                        echo $value;
                                    }
                                } ?>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <!-- Inventions History -->
            <div class="panel left-candidate-panel-resume padding-0">
                <div class="panel-heading left-candidate-panel-resume col-md-12 col-xs-12 padding-0">
                    <div class="have-border-bottom">
                        <h3>اختراعات</h3>
                    </div>
                </div>
                <div class="panel-body">
                    <ul class="resume-ul">
                        <?php foreach ($candidateInvention as $item) { ?>
                            <li>
                                <span class="fa fa-circle-o"></span>
                                عنوان اختراع:
                                <?php echo $item['CandidateInventionTitle']; ?>
                                حوزه ابداع:
                                <?php echo $item['CandidateInventionField']; ?>
                                شماره ثبت:
                                <?php echo $item['CandidateInventionRegisterNumber']; ?>
                                شرح اختراع:
                                <?php echo $item['CandidateInventionDescription']; ?>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <!-- Research History -->
            <div class="panel left-candidate-panel-resume padding-0">
                <div class="panel-heading left-candidate-panel-resume col-md-12 col-xs-12 padding-0">
                    <div class="have-border-bottom">
                        <h3>طرح پژوهشی</h3>
                    </div>
                </div>
                <div class="panel-body">
                    <ul class="resume-ul">
                        <?php foreach ($candidateResearch as $item) { ?>
                            <li>
                                <span class="fa fa-circle-o"></span>
                                عنوان طراح:
                                <?php echo $item['CandidateResearchTitle']; ?>
                                مسئولیت:
                                <?php echo $item['CandidateResearchResponsibility']; ?>
                                مجری:
                                <?php echo $item['CandidateResearchWorker']; ?>
                                کارفرما:
                                <?php echo $item['CandidateResearchEmployer']; ?>
                                تاریخ:
                                <?php
                                foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) {
                                    if ($item['CandidateResearchMonth'] == $key) {
                                        echo $value;
                                    }
                                }
                                ?>
                                <?php echo $item['CandidateResearchYear']; ?>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <!-- Conference History -->
            <div class="panel left-candidate-panel-resume padding-0">
                <div class="panel-heading left-candidate-panel-resume col-md-12 col-xs-12 padding-0">
                    <div class="have-border-bottom">
                        <h3>همایش علمی</h3>
                    </div>
                </div>
                <div class="panel-body">
                    <ul class="resume-ul">
                        <?php foreach ($candidateConference as $item) { ?>
                            <li>
                                <span class="fa fa-circle-o"></span>
                                عنوان همایش:
                                <?php echo $item['CandidateConferenceTitle']; ?>
                                سطح:
                                <?php
                                foreach ($EnumResumeProfile['ConferenceLevelType'] as $key => $value) {
                                    if ($item['CandidateConferenceLevel'] == $key) {
                                        echo $value;
                                    }
                                }
                                ?>
                                نوع پذیرش / ارائه:
                                <?php
                                foreach ($EnumResumeProfile['AcceptanceOfferType'] as $key => $value) {
                                    if ($item['CandidateConferenceAcceptType'] == $key) {
                                        echo $value;
                                    }
                                }
                                ?>
                                تاریخ:
                                <?php
                                foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) {
                                    if ($item['CandidateConferenceMonth'] == $key) {
                                        echo $value;
                                    }
                                }
                                ?>
                                <?php echo $item['CandidateConferenceYear']; ?>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <!-- Translation History -->
            <div class="panel left-candidate-panel-resume padding-0">
                <div class="panel-heading left-candidate-panel-resume col-md-12 col-xs-12 padding-0">
                    <div class="have-border-bottom">
                        <h3>ترجمه ها</h3>
                    </div>
                </div>
                <div class="panel-body">
                    <ul class="resume-ul">
                        <?php foreach ($candidateTranslation as $item) { ?>
                            <li>
                                <span class="fa fa-circle-o"></span>
                                عنوان:
                                <?php echo $item['CandidateTranslationTitle']; ?>
                                ناشر:
                                <?php echo $item['CandidateTranslationPublisher']; ?>
                                نوع:
                                <?php
                                foreach ($EnumResumeProfile['TranslateType'] as $key => $value) {
                                    if ($item['CandidateTranslationType'] == $key) {
                                        echo $value;
                                    }
                                }
                                ?>
                                تاریخ:
                                <?php
                                foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) {
                                    if ($item['CandidateTranslationMonth'] == $key) {
                                        echo $value;
                                    }
                                }
                                ?>
                                <?php echo $item['CandidateTranslationYear']; ?>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <!-- Skills History -->
            <div class="panel left-candidate-panel-resume padding-0">
                <div class="panel-heading left-candidate-panel-resume col-md-12 col-xs-12 padding-0">
                    <div class="have-border-bottom">
                        <h3>مهارت ها</h3>
                    </div>
                </div>
                <div class="panel-body">
                    <ul class="resume-ul">
                        <?php foreach ($candidateSkills as $item) { ?>
                            <li>
                                <span class="fa fa-circle-o"></span>
                                <?php echo $item['SkillType']; ?>
                                سطح:
                                <?php
                                foreach ($EnumResumeProfile['SkillLevel'] as $key => $value) {
                                    if ($item['SkillLevel'] == $key) {
                                        echo $value;
                                    }
                                }
                                ?>
                                نحوه یادگیری:
                                <?php
                                foreach ($EnumResumeProfile['SkillLearnType'] as $key => $value) {
                                    if ($item['SkillLearnType'] == $key) {
                                        echo $value;
                                    }
                                }
                                ?>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <!-- Promises History -->
            <div class="panel left-candidate-panel-resume padding-0">
                <div class="panel-heading left-candidate-panel-resume col-md-12 col-xs-12 padding-0">
                    <div class="have-border-bottom">
                        <h3>وعده های انتخاباتی</h3>
                    </div>
                </div>
                <div class="panel-body">
                    <ul class="resume-ul">
                        <?php foreach ($promises as $item) { ?>
                            <li>
                                <span class="fa fa-circle-o"></span>
                                <?php echo $item['CandidateElectionPromise']; ?>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <!-- Politic History -->
            <div class="panel left-candidate-panel-resume padding-0">
                <div class="panel-heading">
                    سوابق سیاسی
                </div>
                <div class="panel-body political-info-container table-responsive">
                    <table class="table table-bordered table-condensed table-striped">
                        <thead>
                        <tr>
                            <th class="fit info-politicalType">قالب</th>
                            <th class="fit info-otherPoliticalType">سایر قالب</th>
                            <th class="fit info-mediaName">رسانه</th>
                            <th class="fit info-activityType">نوع فعالیت</th>
                            <th class="fit info-beginMonth">ماه شروع فعالیت</th>
                            <th class="fit info-beginYear">سال شروع فعالیت</th>
                            <th class="fit info-endMonth">ماه پایان فعالیت</th>
                            <th class="fit info-endYear">سال پایان فعالیت</th>
                            <th class="fit info-yearCooperation">سال همکاری</th>
                            <th class="fit info-responsibility">مسئولیت</th>
                            <th class="fit info-membershipType">نوع عضویت</th>
                            <th class="fit info-electionType">نوع انتخابات</th>
                            <th class="fit info-electionPeriodType">دوره انتخابات</th>
                            <th class="fit info-parliamentPeriodType">دوره انتخابات</th>
                            <th class="fit info-expertsParliamentPeriodType">دوره انتخابات</th>
                            <th class="fit info-cityCouncilPeriodType">دوره انتخابات</th>
                            <th class="fit info-supervisoryBoardType">مجلس</th>
                            <th class="fit info-mediaFormat">نوع رسانه</th>
                            <th class="fit info-otherMediaFormat">سایر عنوان رسانه</th>
                            <th class="fit info-candidateName">نام نامزد/لیست</th>
                            <th class="fit info-description">توضیحات</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($politicBackground as $item) { ?>
                            <tr class="temp-edu-record">
                                <td class="fit info-department">
                                    <?php
                                    foreach ($EnumResumeProfile['CandidatePoliticActivityType'] as $key => $value) {
                                        if ($item['CandidateActivityType'] == $key) {
                                            echo $value;
                                        }
                                    }
                                    ?>
                                </td>
                                <td class="fit info-science">
                                    <?php echo $item['CandidateActivityTypeOtherOrganizationTitle']; ?>
                                </td>
                                <td class="fit info-studying">
                                    <?php
                                    foreach ($EnumResumeProfile['CandidatePoliticElectionType'] as $key => $value) {
                                        if ($item['CandidateElectionType'] == $key) {
                                            echo $value;
                                        }
                                    }
                                    ?>
                                </td>
                                <td class="fit info-universityLevelType">
                                    <?php echo $item['CandidateElectionPeriod']; ?>
                                </td>
                                <td class="fit info-universityName">
                                    <?php echo $item['CandidateElectionListName']; ?>
                                </td>
                                <td class="fit info-universityName">
                                    <?php
                                    foreach ($EnumResumeProfile['CandidateHeadquarterActivityTitle'] as $key => $value) {
                                        if ($item['CandidateHeadquarterActivityTitle'] == $key) {
                                            echo $value;
                                        }
                                    }
                                    ?>
                                </td>
                                <td class="fit info-universityName">
                                    <?php
                                    foreach ($EnumResumeProfile['CandidateMediaType'] as $key => $value) {
                                        if ($item['CandidateMediaType'] == $key) {
                                            echo $value;
                                        }
                                    }
                                    ?>
                                </td>
                                <td class="fit info-universityName">
                                    <?php echo $item['CandidateMediaTypeTitle']; ?>
                                </td>
                                <td class="fit info-universityName">
                                    <?php echo $item['CandidateMediaTitle']; ?>
                                </td>
                                <td class="fit info-universityName">
                                    <?php echo $item['CandidateMediaActivityType']; ?>
                                    <?php
                                    foreach ($EnumResumeProfile['CandidateMediaType'] as $key => $value) {
                                        if ($item['CandidateMediaType'] == $key) {
                                            echo $value;
                                        }
                                    }
                                    ?>
                                </td>
                                <td class="fit info-universityName">
                                    <?php echo $item['CandidateResponsibility']; ?>
                                </td>
                                <td class="fit info-universityName">
                                    <?php echo $item['CandidateMemberShip']; ?>
                                </td>
                                <td class="fit info-universityName">
                                    <?php
                                    foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) {
                                        if ($item['CandidateMediaStartMonth'] == $key) {
                                            echo $value;
                                        }
                                    }
                                    ?>
                                </td>
                                <td class="fit info-universityName">
                                    <?php echo $item['CandidateMediaStartYear']; ?>
                                </td>
                                <td class="fit info-universityName">
                                    <?php
                                    foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) {
                                        if ($item['CandidateMediaEndMonth'] == $key) {
                                            echo $value;
                                        }
                                    }
                                    ?>
                                </td>
                                <td class="fit info-universityName">
                                    <?php echo $item['CandidateMediaEndYear']; ?>
                                </td>
                                <td class="fit info-universityName">
                                    <?php echo $item['CandidateActivityDescription']; ?>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Finance History -->
            <div class="panel left-candidate-panel-resume padding-0">
                <div class="panel-heading">
                   فهرست اموال و دارایی ها
                </div>

                <?php function splitPrice($price)
                {
                    $price = explode(".", $price);
                    $priceLeft = $price[0];
                    $price = explode(" ", $price[1]);
                    $priceRight = $price[0];
                    $priceUnit = $price[1];
                    $data = array(
                        'left' => $priceLeft,
                        'right' => $priceRight,
                        'unit' => $priceUnit,
                    );
                    return $data;
                } ?>
                <div class="panel-body political-info-container">

                    <div class="panel with-nav-tabs panel-default">
                        <div class="panel-heading">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab1myself" data-toggle="tab">خود</a></li>
                                <li><a href="#tab2wife" data-toggle="tab">همسر</a></li>
                                <li><a href="#tab3child" data-toggle="tab">فرزند</a></li>
                            </ul>
                        </div>
                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab1myself">
                                    <div class="LeftPanel">
                                        <div class="LeftPanelcontent">
                                            <div class="row">
                                                <!--RealEStates -->
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="panel panel-default LeftPanelShadow">
                                                        <div class="panel-heading">املاک و مستغلات</div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-xs-12">
                                                                    
                                                                    <form id="form-RealEstate">
                                                                        <span class="divider"></span>
                                                                        <?php foreach ($finance['RealEStates'] as $item) {
                                                                            if ($item['ForWho'] == 'Self') { ?>
                                                                                <div class="col-md-12 col-xs-12 padding-0 form">
                                                                                    
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputRealEstateType">
                                                                                            نوع کاربری
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputRealEstateType"
                                                                                                id="inputRealEstateType">
                                                                                            <?php foreach ($EnumResumeProfile['RealEstateType'] as $key => $value) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['RealEstateType'], $key); ?>
                                                                                                        value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputRealEstateOwnershipDate">
                                                                                            سال شروع مالکیت
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputRealEstateOwnershipDate"
                                                                                                id="inputRealEstateOwnershipDate"
                                                                                                style="font-family: tahoma;">
                                                                                            <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['RealEstateOwnershipDate'], $i); ?>
                                                                                                        value="<?php echo $i; ?>">
                                                                                                    <?php echo $i; ?>
                                                                                                </option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputRealEstateOwnershipType">
                                                                                            نحوه مالکیت
                                                                                        </label>
                                                                                        <select
                                                                                                class="form-control form-control-lg"
                                                                                                name="inputRealEstateOwnershipType"
                                                                                                id="inputRealEstateOwnershipType">
                                                                                            <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['RealEstateOwnershipType'], $key); ?>
                                                                                                        value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat countries">
                                                                                        <label for="inputRealEstateCountryId">کشور</label>
                                                                                        <select
                                                                                                data-country-id="<?php echo $item['RealEstateCountryId']; ?>"
                                                                                                data-state-id="<?php echo $item['RealEstateStateId']; ?>"
                                                                                                data-city-id="<?php echo $item['RealEstateCityId']; ?>"
                                                                                                class="form-control form-control-lg"
                                                                                                name="inputRealEstateCountryId"
                                                                                                id="inputRealEstateCountryId">
                                                                                            <option value="0">-- انتخاب کنید --
                                                                                            </option>
                                                                                            <?php foreach ($countries as $row) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['RealEstateCountryId'], $row['CountryId']); ?>
                                                                                                        value="<?php echo $row['CountryId']; ?>"><?php echo $row['FaName']; ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv">
                                                                                        <label for="inputRealEstateStateId">
                                                                                            استان
                                                                                        </label>
                                                                                        <select
                                                                                                data-city-id="<?php echo $item['RealEstateCityId']; ?>"
                                                                                                class="form-control form-control-lg state-select"
                                                                                                name="inputRealEstateStateId"
                                                                                                id="inputRealEstateStateId">
                                                                                            <option value="0">-- انتخاب کنید --</option>
                                                                                            <?php foreach ($states as $state) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['RealEstateStateId'], $state['StateId']); ?>
                                                                                                        value="<?php echo $state['StateId']; ?>">
                                                                                                    <?php echo $state['StateName']; ?>
                                                                                                </option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv">
                                                                                        <label for="inputRealEstateCityId">
                                                                                            شهر
                                                                                        </label>
                                                                                        <select class="form-control form-control-lg city-select"
                                                                                                name="inputRealEstateCityId"
                                                                                                id="inputRealEstateCityId">
                                                                                            <option value="0">-- انتخاب کنید --</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputRealEstatePortion">
                                                                                            سهم از ملک(1 تا 6 دانگ)
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <input type="number"
                                                                                            <?php setInputValue($item['RealEstatePortion']); ?>
                                                                                               name="inputRealEstatePortion"
                                                                                               id="inputRealEstatePortion"
                                                                                               class="form-control"
                                                                                               placeholder="سهم از ملک 1 تا 6 دانگ"
                                                                                               min="1" max="6"/>
                                                                                    </div>
                                                                                    <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputRealEstateExtent">
                                                                                            متراژ حدودی ملک
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <div class="row">
                                                                                            <div class="col-md-6 col-xs-12 RightFloat">
                                                                                                <input type="number"
                                                                                                    <?php setInputValue($item['RealEstateExtent']); ?>
                                                                                                       name="inputRealEstateExtent"
                                                                                                       id="inputRealEstateExtent"
                                                                                                       class="form-control"
                                                                                                       placeholder=""
                                                                                                       min="0"/>
                                                                                            </div>
                                                                                            <div class="col-md-6 col-xs-12 RightFloat">
                                                                                                <select class="form-control form-control-lg"
                                                                                                        name="inputRealEstateExtentUnit"
                                                                                                        id="inputRealEstateExtentUnit">
                                                                                                    <?php foreach ($EnumResumeProfile['Extent'] as $key => $value) { ?>
                                                                                                        <option
                                                                                                            <?php setOptionSelected($item['RealEstateExtentUnit'], $key); ?>
                                                                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                                    <?php } ?>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputRealEstateBuyTimePrice">
                                                                                            ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <div class="row">
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['RealEstateBuyTimePrice'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputRealEstateBuyTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputRealEstateBuyTimePrice ">صد
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                <input
                                                                                                        type="number"
                                                                                                    <?php setInputValue(splitPrice($item['RealEstateBuyTimePrice'])['left']); ?>
                                                                                                        name="inputRealEstateBuyTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputRealEstateBuyTimePrice">هزار
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                <select class="form-control form-control-lg"
                                                                                                        name="inputRealEstateBuyTimePrice"
                                                                                                        id="inputRealEstateBuyTimePrice">
                                                                                                    <option value="0">انتخاب کنید ---</option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['RealEstateBuyTimePrice'])['unit']) == "HZ") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="HZ"
                                                                                                            data-right-side="SD"
                                                                                                            value="HZ">هزار تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['RealEstateBuyTimePrice'])['unit']) == "MI") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="MI"
                                                                                                            data-right-side="HZ"
                                                                                                            value="MI">میلیون تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['RealEstateBuyTimePrice'])['unit']) == "ML") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="ML"
                                                                                                            data-right-side="MI"
                                                                                                            value="ML">میلیارد تومان
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputRealEstateNowTimePrice">
                                                                                            ارزش حدودی کل سهام درحال حاضر :
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <div class="row">
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['RealEstateNowTimePrice'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputRealEstateNowTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputRealEstateNowTimePrice ">صد
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['RealEstateNowTimePrice'])['left']); ?>
                                                                                                        type="number"
                                                                                                        name="inputRealEstateNowTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputRealEstateNowTimePrice">هزار
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                <select class="form-control form-control-lg"
                                                                                                        name="inputRealEstateNowTimePrice"
                                                                                                        id="inputRealEstateNowTimePrice">
                                                                                                    <option value="0">انتخاب کنید ---</option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['RealEstateNowTimePrice'])['unit']) == "HZ") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="HZ"
                                                                                                            data-right-side="SD"
                                                                                                            value="HZ">هزار تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['RealEstateNowTimePrice'])['unit']) == "MI") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="MI"
                                                                                                            data-right-side="HZ"
                                                                                                            value="MI">میلیون تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['RealEstateNowTimePrice'])['unit']) == "ML") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="ML"
                                                                                                            data-right-side="MI"
                                                                                                            value="ML">میلیارد تومان
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group RightFloat">
                                                                                        <label for="inputRealEstateAddress">آدرس</label>
                                                                                        <input
                                                                                            <?php setInputValue($item['RealEstateAddress']); ?>
                                                                                                id="inputRealEstateAddress"
                                                                                                type="text"
                                                                                                name="inputRealEstateAddress"
                                                                                                class="input-validate validate valid"
                                                                                                placeholder="نام خیابان اصلی / محله / منطقه">
                                                                                    </div>
                                                                                </div>
                                                                            <?php }
                                                                        } ?>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End RealEStates -->
                                                <!--Vehicle -->
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="panel panel-default LeftPanelShadow">
                                                        <div class="panel-heading">
                                                            وسایل نقلیه
                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-xs-12">
                                                                    
                                                                    <form id="form-Vehicle">
                                                                        <span class="divider"></span>
                                                                        <?php foreach ($finance['Vehicle'] as $item) {
                                                                            if ($item['ForWho'] == 'Self') { ?>
                                                                                <div class="col-md-12 col-xs-12 padding-0 form">
                                                                                    
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputVehicleType">
                                                                                            نوع وسیله نقلیه<span
                                                                                                    class="text-danger"></span>
                                                                                        </label>
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputVehicleType"
                                                                                                id="inputVehicleType">
                                                                                            <?php foreach ($EnumResumeProfile['TypeOfVehicle'] as $key => $value) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['VehicleType'], $key); ?>
                                                                                                        value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputVehicleOwnershipDate">
                                                                                            سال شروع مالکیت<span
                                                                                                    class="text-danger"></span>
                                                                                        </label>
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputVehicleOwnershipDate"
                                                                                                id="inputVehicleOwnershipDate"
                                                                                                style="font-family: tahoma;">
                                                                                            <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['VehicleOwnershipDate'], $i); ?>
                                                                                                    <?php if ($i == 1398) echo "selected"; ?>
                                                                                                        value="<?php echo $i; ?>">
                                                                                                    <?php echo $i; ?>
                                                                                                </option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputVehicleOwnershipType">
                                                                                            نحوه مالکیت
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputVehicleOwnershipType"
                                                                                                id="inputVehicleOwnershipType">
                                                                                            <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                                                <option

                                                                                                    <?php setOptionSelected($item['VehicleOwnershipType'], $i); ?>
                                                                                                        value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputVehicleBuyTimePrice">
                                                                                            ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <div class="row">
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['VehicleBuyTimePrice'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputVehicleBuyTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputVehicleBuyTimePrice ">صد
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['VehicleBuyTimePrice'])['left']); ?>
                                                                                                        type="number"
                                                                                                        name="inputVehicleBuyTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputVehicleBuyTimePrice">هزار
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                <select class="form-control form-control-lg"
                                                                                                        name="inputVehicleBuyTimePrice"
                                                                                                        id="inputVehicleBuyTimePrice">
                                                                                                    <option value="0">انتخاب کنید ---</option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['VehicleBuyTimePrice'])['unit']) == "HZ") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="HZ"
                                                                                                            data-right-side="SD"
                                                                                                            value="HZ">هزار تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['VehicleBuyTimePrice'])['unit']) == "MI") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="MI"
                                                                                                            data-right-side="HZ"
                                                                                                            value="MI">میلیون تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['VehicleBuyTimePrice'])['unit']) == "ML") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="ML"
                                                                                                            data-right-side="MI"
                                                                                                            value="ML">میلیارد تومان
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputVehicleNowTimePrice">
                                                                                            ارزش حدودی کل سهام درحال حاضر :
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <div class="row">
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['VehicleNowTimePrice'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputVehicleNowTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputVehicleNowTimePrice ">صد
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['VehicleNowTimePrice'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputVehicleNowTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputVehicleNowTimePrice">هزار
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                <select class="form-control form-control-lg"
                                                                                                        name="inputVehicleNowTimePrice"
                                                                                                        id="inputVehicleNowTimePrice">
                                                                                                    <option value="0">انتخاب کنید ---</option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['VehicleNowTimePrice'])['unit']) == "HZ") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="HZ"
                                                                                                            data-right-side="SD"
                                                                                                            value="HZ">هزار تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['VehicleNowTimePrice'])['unit']) == "MI") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="MI"
                                                                                                            data-right-side="HZ"
                                                                                                            value="MI">میلیون تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['VehicleNowTimePrice'])['unit']) == "ML") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="ML"
                                                                                                            data-right-side="MI"
                                                                                                            value="ML">میلیارد تومان
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>


                                                                                    <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat clear-div">
                                                                                        <label for="inputVehiclePortion">
                                                                                            سهم از ملک(1 تا 6 دانگ)
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <input
                                                                                            <?php setInputValue($item['VehiclePortion']); ?>
                                                                                                type="number"
                                                                                                name="inputVehiclePortion"
                                                                                                id="inputVehiclePortion"
                                                                                                class="form-control"
                                                                                                placeholder="سهم از ملک 1 تا 6 دانگ"
                                                                                                min="0" max="6"/>
                                                                                    </div>
                                                                                </div>
                                                                            <?php }
                                                                        } ?>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End Vehicle -->
                                                <!--Invest -->
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="panel panel-default LeftPanelShadow">
                                                        <div class="panel-heading">
                                                            سرمایه‌گذاری‌ها (سهام‌، اوراق بهادار، ...)
                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-xs-12">
                                                                    
                                                                    <form id="form-Invest">
                                                                        <span class="divider"></span>
                                                                        <?php foreach ($finance['Invest'] as $item) {
                                                                            if ($item['ForWho'] == 'Self') { ?>
                                                                                <div class="col-md-12 col-xs-12 padding-0 form">
                                                                                    
                                                                                    <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                                        <label for="inputInvestTitle">
                                                                                            نام شرکت / موسسه
                                                                                        </label>
                                                                                        <input
                                                                                            <?php setInputValue($item['InvestTitle']); ?>
                                                                                                id="inputInvestTitle" type="text"
                                                                                                name="inputInvestTitle"
                                                                                                placeholder="نام شرکت - موسسه - پروژه ">
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputInvestDate">
                                                                                            سال شروع مالکیت
                                                                                            <span class="text-danger">
                                             </span>
                                                                                        </label>
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputInvestDate"
                                                                                                id="inputInvestDate"
                                                                                                style="font-family: tahoma;">
                                                                                            <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['InvestDate'], $i); ?>
                                                                                                    <?php if ($i == 1398) echo "selected"; ?>
                                                                                                        value="<?php echo $i; ?>">
                                                                                                    <?php echo $i; ?>
                                                                                                </option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputInvestOwnershipType">
                                                                                            نحوه مالکیت
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputInvestOwnershipType"
                                                                                                id="inputInvestOwnershipType">
                                                                                            <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['InvestDate'], $key); ?>
                                                                                                        value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputInvestBuyTimePrice">
                                                                                            ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <div class="row">
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['InvestBuyTimePrice'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputInvestBuyTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputInvestBuyTimePrice ">صد
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['InvestBuyTimePrice'])['left']); ?>
                                                                                                        type="number"
                                                                                                        name="inputInvestBuyTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputInvestBuyTimePrice">هزار
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                <select class="form-control form-control-lg"
                                                                                                        name="inputInvestBuyTimePrice"
                                                                                                        id="inputInvestBuyTimePrice">
                                                                                                    <option value="0">انتخاب کنید ---</option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['InvestBuyTimePrice'])['unit']) == "HZ") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="HZ"
                                                                                                            data-right-side="SD"
                                                                                                            value="HZ">هزار تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['InvestBuyTimePrice'])['unit']) == "MI") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="MI"
                                                                                                            data-right-side="HZ"
                                                                                                            value="MI">میلیون تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['InvestBuyTimePrice'])['unit']) == "ML") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="ML"
                                                                                                            data-right-side="MI"
                                                                                                            value="ML">میلیارد تومان
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputInvestNowTimePrice">
                                                                                            ارزش حدودی کل سهام درحال حاضر :
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <div class="row">
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['InvestNowTimePrice'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputInvestNowTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputInvestNowTimePrice ">صد
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['InvestNowTimePrice'])['left']); ?>
                                                                                                        type="number"
                                                                                                        name="inputInvestNowTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputInvestNowTimePrice">هزار
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                <select class="form-control form-control-lg"
                                                                                                        name="inputInvestNowTimePrice"
                                                                                                        id="inputInvestNowTimePrice">
                                                                                                    <option value="0">انتخاب کنید ---</option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['InvestNowTimePrice'])['unit']) == "HZ") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="HZ"
                                                                                                            data-right-side="SD"
                                                                                                            value="HZ">هزار تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['InvestNowTimePrice'])['unit']) == "MI") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="MI"
                                                                                                            data-right-side="HZ"
                                                                                                            value="MI">میلیون تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['InvestNowTimePrice'])['unit']) == "ML") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="ML"
                                                                                                            data-right-side="MI"
                                                                                                            value="ML">میلیارد تومان
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            <?php }
                                                                        } ?>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End Invest -->
                                                <!--BankAccount -->
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="panel panel-default LeftPanelShadow">
                                                        <div class="panel-heading">
                                                            حساب‌های جاری، پس‌انداز و سرمایه‌گذاری
                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-xs-12">
                                                                    
                                                                    <form id="form-BankAccount">
                                                                        <span class="divider"></span>
                                                                        <?php foreach ($finance['BankAccount'] as $item) {
                                                                            if ($item['ForWho'] == 'Self') { ?>
                                                                                <div class="col-md-12 col-xs-12 padding-0 form">
                                                                                    
                                                                                    <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                                        <label for="inputBankAccountTitle">
                                                                                            عنوان بانک یا موسسه
                                                                                        </label>
                                                                                        <input
                                                                                            <?php setInputValue($item['BankAccountTitle']); ?>
                                                                                                id="inputBankAccountTitle"
                                                                                                type="text"
                                                                                                name="inputBankAccountTitle"
                                                                                                placeholder="عنوان بانک یا موسسه ">
                                                                                    </div>
                                                                                    <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputBankAccountPrice">
                                                                                            مبلغ :
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <div class="row">
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                <input

                                                                                                    <?php setInputValue(splitPrice($item['BankAccountPrice'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputBankAccountPrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputBankAccountPrice ">صد
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                <input

                                                                                                    <?php setInputValue(splitPrice($item['BankAccountPrice'])['left']); ?>
                                                                                                        type="number"
                                                                                                        name="RealEstateBuyTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputBankAccountPrice">هزار
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                <select class="form-control form-control-lg"
                                                                                                        name="inputBankAccountPrice"
                                                                                                        id="inputBankAccountPrice">
                                                                                                    <option value="0">انتخاب کنید ---</option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['BankAccountPrice'])['unit']) == "HZ") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="HZ"
                                                                                                            data-right-side="SD"
                                                                                                            value="HZ">هزار تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['BankAccountPrice'])['unit']) == "MI") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="MI"
                                                                                                            data-right-side="HZ"
                                                                                                            value="MI">میلیون تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['BankAccountPrice'])['unit']) == "ML") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="ML"
                                                                                                            data-right-side="MI"
                                                                                                            value="ML">میلیارد تومان
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat">
                                                                                        <label for="inputBankAccountCountryId">کشور</label>
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputBankAccountCountryId"
                                                                                                id="inputBankAccountCountryId">
                                                                                            <option value="0">-- انتخاب کنید --
                                                                                            </option>
                                                                                            <?php foreach ($countries as $row) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['BankAccountCountryId'], $row['CountryId']); ?>
                                                                                                        value="<?php echo $row['CountryId']; ?>"><?php echo $row['FaName']; ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            <?php }
                                                                        } ?>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End BankAccount -->
                                                <!-- Debtor -->
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="panel panel-default LeftPanelShadow">
                                                        <div class="panel-heading">
                                                            دیون و مطالبات
                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-xs-12">
                                                                    
                                                                    <form id="form-Credit-Debtor">
                                                                        <span class="divider"></span>
                                                                        <?php
                                                                        $creditDebtor['CreditPrice'] = "0.0 HZ";
                                                                        $creditDebtor['DebotrPrice'] = "0.0 HZ";
                                                                        $creditDebtor['DebotrDescription'] = "";
                                                                        foreach ($finance['CreditDebtor'] as $item) {
                                                                            if($item['ForWho'] == 'Self'){
                                                                                $creditDebtor = $item;
                                                                            }
                                                                        }
                                                                        ?>
                                                                        <div class="col-md-12 col-xs-12 padding-0 form">
                                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                <label for="inputCreditPrice">
                                                                                    جمع کل بستانکاری از اشخاص حقیقی یا حقوقی
                                                                                    :
                                                                                    <span class="text-danger"></span>
                                                                                </label>
                                                                                <div class="row">
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($creditDebtor['CreditPrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputCreditPrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputCreditPrice ">صد
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($creditDebtor['CreditPrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputCreditPrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputCreditPrice">هزار
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputCreditPrice"
                                                                                                id="inputCreditPrice">
                                                                                            <option value="0">انتخاب کنید ---</option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($creditDebtor['CreditPrice'])['unit']) == "HZ") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="HZ"
                                                                                                    data-right-side="SD"
                                                                                                    value="HZ">هزار تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($creditDebtor['CreditPrice'])['unit']) == "MI") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="MI"
                                                                                                    data-right-side="HZ"
                                                                                                    value="MI">میلیون تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($creditDebtor['CreditPrice'])['unit']) == "ML") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="ML"
                                                                                                    data-right-side="MI"
                                                                                                    value="ML">میلیارد تومان
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                <label for="inputDebotrPrice">
                                                                                    جمع کل بدهکاری از اشخاص حقیقی یا حقوقی :
                                                                                    <span class="text-danger"></span>
                                                                                </label>
                                                                                <div class="row">
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($creditDebtor['DebotrPrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputDebotrPrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputDebotrPrice ">صد
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($creditDebtor['DebotrPrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputDebotrPrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputDebotrPrice">هزار
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputDebotrPrice"
                                                                                                id="inputDebotrPrice">
                                                                                            <option value="0">انتخاب کنید ---</option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($creditDebtor['DebotrPrice'])['unit']) == "HZ") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="HZ"
                                                                                                    data-right-side="SD"
                                                                                                    value="HZ">هزار تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($creditDebtor['DebotrPrice'])['unit']) == "MI") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="MI"
                                                                                                    data-right-side="HZ"
                                                                                                    value="MI">میلیون تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($creditDebtor['DebotrPrice'])['unit']) == "ML") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="ML"
                                                                                                    data-right-side="MI"
                                                                                                    value="ML">میلیارد تومان
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <textarea class="EStates-textArea"
                                                                                          name="inputDebotrDescription"><?php echo $creditDebtor['DebotrDescription']; ?></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End Debtor -->
                                                <!--Goods -->
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="panel panel-default LeftPanelShadow">
                                                        <div class="panel-heading">
                                                            کلیه کالاهای فاقد سند مالکیت رسمی
                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-xs-12">
                                                                    
                                                                    <form id="form-Goods">
                                                                        <span class="divider"></span>
                                                                        <?php foreach ($finance['Goods'] as $item) {
                                                                            if ($item['ForWho'] == 'Self') { ?>
                                                                                <div class="col-md-12 col-xs-12 padding-0 form">
                                                                                    
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputGoodsType">
                                                                                            نوع کالا
                                                                                        </label>
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputGoodsType"
                                                                                                id="inputGoodsType">
                                                                                            <?php foreach ($EnumResumeProfile['GoodsType'] as $key => $value) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['GoodsType'], $key); ?>
                                                                                                        value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputGoodsOwnershipStartDate">
                                                                                            سال شروع مالکیت
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputGoodsOwnershipStartDate"
                                                                                                id="inputGoodsOwnershipStartDate"
                                                                                                style="font-family: tahoma;">
                                                                                            <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['GoodsOwnershipStartDate'], $i); ?>
                                                                                                        value="<?php echo $i; ?>">
                                                                                                    <?php echo $i; ?>
                                                                                                </option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputGoodsCount">
                                                                                            حجم / وزن / تعداد کالا
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <input
                                                                                            <?php setInputValue($item['GoodsCount']); ?>
                                                                                                type="text" name="inputGoodsCount"
                                                                                                id="inputGoodsCount"
                                                                                                class="form-control"
                                                                                                placeholder="  حجم / وزن / تعداد کالا"/>
                                                                                    </div>
                                                                                    <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputGoodsBuyTimePrice">
                                                                                            ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <div class="row">
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['GoodsBuyTimePrice'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputGoodsBuyTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputGoodsBuyTimePrice ">صد
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['GoodsBuyTimePrice'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputGoodsBuyTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputGoodsBuyTimePrice">هزار
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                <select class="form-control form-control-lg"
                                                                                                        name="inputGoodsBuyTimePrice"
                                                                                                        id="inputGoodsBuyTimePrice">
                                                                                                    <option value="0">انتخاب کنید ---</option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['GoodsBuyTimePrice'])['unit']) == "HZ") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="HZ"
                                                                                                            data-right-side="SD"
                                                                                                            value="HZ">هزار تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['GoodsBuyTimePrice'])['unit']) == "MI") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="MI"
                                                                                                            data-right-side="HZ"
                                                                                                            value="MI">میلیون تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['GoodsBuyTimePrice'])['unit']) == "ML") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="ML"
                                                                                                            data-right-side="MI"
                                                                                                            value="ML">میلیارد تومان
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputGoodsNowTimePrice">
                                                                                            ارزش حدودی کل سهام درحال حاضر :
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <div class="row">
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['GoodsNowTimePrice'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputGoodsNowTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputGoodsNowTimePrice ">صد
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['GoodsNowTimePrice'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputGoodsNowTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputGoodsNowTimePrice">هزار
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                <select class="form-control form-control-lg"
                                                                                                        name="inputGoodsNowTimePrice"
                                                                                                        id="inputGoodsNowTimePrice">
                                                                                                    <option value="0">انتخاب کنید ---</option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['GoodsNowTimePrice'])['unit']) == "HZ") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="HZ"
                                                                                                            data-right-side="SD"
                                                                                                            value="HZ">هزار تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['GoodsNowTimePrice'])['unit']) == "MI") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="MI"
                                                                                                            data-right-side="HZ"
                                                                                                            value="MI">میلیون تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['GoodsNowTimePrice'])['unit']) == "ML") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="ML"
                                                                                                            data-right-side="MI"
                                                                                                            value="ML">میلیارد تومان
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputGoodsOwnershipPercent">
                                                                                            درصد سهم از مالکیت :
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <input
                                                                                            <?php setInputValue($item['GoodsOwnershipPercent']); ?>
                                                                                                type="number"
                                                                                                name="inputGoodsOwnershipPercent"
                                                                                                id="inputGoodsOwnershipPercent"
                                                                                                class="form-control"
                                                                                                placeholder="سهم از ملک 1 تا 6 دانگ"
                                                                                                min="0" max="6"/>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputRealEstateOwnershipType">
                                                                                            نحوه مالکیت
                                                                                            <span class="text-danger">
                                             </span>
                                                                                        </label>
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputRealEstateOwnershipType"
                                                                                                id="inputRealEstateOwnershipType">
                                                                                            <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['RealEstateOwnershipType'], $key); ?>
                                                                                                        value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            <?php }
                                                                        } ?>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End Goods -->
                                                <!--Fee -->
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="panel panel-default LeftPanelShadow">
                                                        <div class="panel-heading">
                                                            حقوق مالکیت معنوی
                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-xs-12">
                                                                    
                                                                    <form id="form-Fee">
                                                                        <span class="divider"></span>
                                                                        <?php foreach ($finance['Fee'] as $item) {
                                                                            if ($item['ForWho'] == 'Self') { ?>
                                                                                <div class="col-md-12 col-xs-12 padding-0 form">
                                                                                    
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputFeeType">عنوان :</label>
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputFeeType"
                                                                                                id="inputFeeType">
                                                                                            <?php foreach ($EnumResumeProfile['FeeType'] as $key => $value) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['FeeType'], $key); ?>
                                                                                                        value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputFeeOwnershipStartDate">
                                                                                            سال شروع مالکیت
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputFeeOwnershipStartDate"
                                                                                                id="inputFeeOwnershipStartDate"
                                                                                                style="font-family: tahoma;">
                                                                                            <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['FeeOwnershipStartDate'], $i); ?>
                                                                                                        value="<?php echo $i; ?>">
                                                                                                    <?php echo $i; ?>
                                                                                                </option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputFeePercent">
                                                                                            درصد سهم از مالکیت معنوی:
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <input
                                                                                            <?php setInputValue($item['FeePercent']); ?>
                                                                                                type="number" name="inputFeePercent"
                                                                                                id="inputFeePercent"
                                                                                                class="form-control"
                                                                                                placeholder="سهم از ملک 1 تا 6 دانگ"/>
                                                                                    </div>
                                                                                    <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputFeeAverageInYear">
                                                                                            میزان درآمد متوسط سالیانه از مالکیت
                                                                                            معنوی :
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <div class="row">
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['FeeAverageInYear'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputFeeAverageInYear"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputFeeAverageInYear ">صد
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['FeeAverageInYear'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputFeeAverageInYear"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputFeeAverageInYear">هزار
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                <select class="form-control form-control-lg"
                                                                                                        name="inputFeeAverageInYear"
                                                                                                        id="inputFeeAverageInYear">
                                                                                                    <option value="0">انتخاب کنید ---</option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['FeeAverageInYear'])['unit']) == "HZ") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="HZ"
                                                                                                            data-right-side="SD"
                                                                                                            value="HZ">هزار تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['FeeAverageInYear'])['unit']) == "MI") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="MI"
                                                                                                            data-right-side="HZ"
                                                                                                            value="MI">میلیون تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['FeeAverageInYear'])['unit']) == "ML") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="ML"
                                                                                                            data-right-side="MI"
                                                                                                            value="ML">میلیارد تومان
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            <?php }
                                                                        } ?>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End Fee -->
                                                <!--AverageMonthIncome -->
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="panel panel-default LeftPanelShadow">
                                                        <div class="panel-heading">
                                                            در آمد
                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-xs-12">
                                                                    
                                                                    <form id="form-AverageMonthIncome">
                                                                        <span class="divider"></span>
                                                                        <div class="col-md-12 col-xs-12 padding-0 form">
                                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                <?php
                                                                                $income['AverageMonthIncome'] = "0.0 HZ";
                                                                                foreach ($finance['Income'] as $item) {
                                                                                    if($item['ForWho'] == 'Self'){
                                                                                        $income = $item;
                                                                                    }
                                                                                }
                                                                                ?>
                                                                                <label for="inputAverageMonthIncome">
                                                                                    درآمد متوسط ماهیانه :
                                                                                    <span class="text-danger"></span>
                                                                                </label>
                                                                                <div class="row">
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($income['AverageMonthIncome'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputAverageMonthIncome"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputAverageMonthIncome ">صد
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($income['AverageMonthIncome'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputAverageMonthIncome"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputAverageMonthIncome">هزار
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputAverageMonthIncome"
                                                                                                id="inputAverageMonthIncome">
                                                                                            <option value="0">انتخاب کنید ---</option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($income['AverageMonthIncome'])['unit']) == "HZ") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="HZ"
                                                                                                    data-right-side="SD"
                                                                                                    value="HZ">هزار تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($income['AverageMonthIncome'])['unit']) == "MI") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="MI"
                                                                                                    data-right-side="HZ"
                                                                                                    value="MI">میلیون تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($income['AverageMonthIncome'])['unit']) == "ML") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="ML"
                                                                                                    data-right-side="MI"
                                                                                                    value="ML">میلیارد تومان
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End AverageMonthIncome -->
                                                <!-- ElectionPlacePrice -->
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="panel panel-default LeftPanelShadow">
                                                        <div class="panel-heading">
                                                            شفاف سازی هزینه های انتخاباتی
                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-xs-12">
                                                                    
                                                                    <form id="form-Election">
                                                                        <span class="divider"></span>
                                                                        <?php
                                                                        $election['ElectionPlacePrice'] = "0.0 HZ";
                                                                        $election['ElectionFlockPrice'] = "0.0 HZ";
                                                                        $election['ElectionAdvertisePrice'] = "0.0 HZ";
                                                                        $election['ElectionStaffPrice'] = "0.0 HZ";
                                                                        $election['ElectionAllPrice'] = "0.0 HZ";
                                                                        foreach ($finance['Election'] as $item) {
                                                                            if($item['ForWho'] == 'Self'){
                                                                                $election = $item;
                                                                            }
                                                                        }
                                                                        ?>
                                                                        <div class="col-md-12 col-xs-12 padding-0 form">
                                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                <label for="inputElectionPlacePrice">
                                                                                    هزینه دایرکردن محل ستاد انتخابات (اجاره بها ,
                                                                                    حملو نقل و سایر موارد)
                                                                                    -هزینه کل :
                                                                                    <span class="text-danger"></span>
                                                                                </label>
                                                                                <div class="row">
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($election['ElectionPlacePrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputElectionPlacePrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0" max="6"/>
                                                                                        <label for="inputElectionPlacePrice ">صد
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($election['ElectionPlacePrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputElectionPlacePrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0" max="6"/>
                                                                                        <label for="inputElectionPlacePrice">هزار
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputElectionPlacePrice"
                                                                                                id="inputElectionPlacePrice">
                                                                                            <option value="0">انتخاب کنید ---</option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionPlacePrice'])['unit']) == "HZ") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="HZ"
                                                                                                    data-right-side="SD"
                                                                                                    value="HZ">هزار تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionPlacePrice'])['unit']) == "MI") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="MI"
                                                                                                    data-right-side="HZ"
                                                                                                    value="MI">میلیون تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionPlacePrice'])['unit']) == "ML") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="ML"
                                                                                                    data-right-side="MI"
                                                                                                    value="ML">میلیارد تومان
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                <label for="inputElectionFlockPrice">
                                                                                    هزینه برپایی تجمعات عمومی مرتبط با اهداف
                                                                                    انتخاباتی – هزینه کل :
                                                                                    <span class="text-danger"></span>
                                                                                </label>
                                                                                <div class="row">
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($election['ElectionFlockPrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputElectionFlockPrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputElectionFlockPrice ">صد
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($election['ElectionFlockPrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputElectionFlockPrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputElectionFlockPrice">هزار
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputElectionFlockPrice"
                                                                                                id="inputElectionFlockPrice">
                                                                                            <option value="0">انتخاب کنید ---</option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionFlockPrice'])['unit']) == "HZ") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="HZ"
                                                                                                    data-right-side="SD"
                                                                                                    value="HZ">هزار تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionFlockPrice'])['unit']) == "MI") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="MI"
                                                                                                    data-right-side="HZ"
                                                                                                    value="MI">میلیون تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionFlockPrice'])['unit']) == "ML") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="ML"
                                                                                                    data-right-side="MI"
                                                                                                    value="ML">میلیارد تومان
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                <label for="inputElectionAdvertisePrice">
                                                                                    هزینه تبلیغات مجاز در رسانه ها – هزینه کل :
                                                                                    <span class="text-danger"></span>
                                                                                </label>
                                                                                <div class="row">
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($election['ElectionAdvertisePrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputElectionAdvertisePrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputElectionAdvertisePrice ">صد
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($election['ElectionAdvertisePrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputElectionAdvertisePrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputElectionAdvertisePrice">هزار
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputElectionAdvertisePrice"
                                                                                                id="inputElectionAdvertisePrice">
                                                                                            <option value="0">انتخاب کنید ---</option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionAdvertisePrice'])['unit']) == "HZ") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="HZ"
                                                                                                    data-right-side="SD"
                                                                                                    value="HZ">هزار تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionAdvertisePrice'])['unit']) == "MI") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="MI"
                                                                                                    data-right-side="HZ"
                                                                                                    value="MI">میلیون تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionAdvertisePrice'])['unit']) == "ML") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="ML"
                                                                                                    data-right-side="MI"
                                                                                                    value="ML">میلیارد تومان
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                <label for="inputElectionStaffPrice">
                                                                                    هزینه و حق الزحمه عوامل اجرایی و کارشناسی در
                                                                                    انتخابات – هزینه کل :
                                                                                    <span class="text-danger"></span>
                                                                                </label>
                                                                                <div class="row">
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($election['ElectionStaffPrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputElectionStaffPrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputElectionStaffPrice ">صد
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($election['ElectionStaffPrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputElectionStaffPrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputElectionStaffPrice">هزار
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputElectionStaffPrice"
                                                                                                id="inputElectionStaffPrice">
                                                                                            <option value="0">انتخاب کنید ---</option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionStaffPrice'])['unit']) == "HZ") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="HZ"
                                                                                                    data-right-side="SD"
                                                                                                    value="HZ">هزار تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionStaffPrice'])['unit']) == "MI") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="MI"
                                                                                                    data-right-side="HZ"
                                                                                                    value="MI">میلیون تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionStaffPrice'])['unit']) == "ML") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="ML"
                                                                                                    data-right-side="MI"
                                                                                                    value="ML">میلیارد تومان
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                <label for="inputElectionAllPrice">
                                                                                    جمع کل هزینه های انتخاباتی :
                                                                                    <span class="text-danger"></span>
                                                                                </label>
                                                                                <div class="row">
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($election['ElectionAllPrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputElectionAllPrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputElectionAllPrice ">صد
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($election['ElectionAllPrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputElectionAllPrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputElectionAllPrice">هزار
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputElectionAllPrice"
                                                                                                id="inputElectionAllPrice">
                                                                                            <option value="0">انتخاب کنید ---</option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionAllPrice'])['unit']) == "HZ") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="HZ"
                                                                                                    data-right-side="SD"
                                                                                                    value="HZ">هزار تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionAllPrice'])['unit']) == "MI") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="MI"
                                                                                                    data-right-side="HZ"
                                                                                                    value="MI">میلیون تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionAllPrice'])['unit']) == "ML") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="ML"
                                                                                                    data-right-side="MI"
                                                                                                    value="ML">میلیارد تومان
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End ElectionPlacePrice -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab2wife">
                                    <div class="LeftPanel">
                                        <div class="LeftPanelcontent">
                                            <div class="row">
                                                <!--RealEStates -->
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="panel panel-default LeftPanelShadow">
                                                        <div class="panel-heading">املاک و مستغلات</div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-xs-12">
                                                                    <form id="form-RealEstate">
                                                                        <span class="divider"></span>
                                                                        <?php foreach ($finance['RealEStates'] as $item) {
                                                                            if ($item['ForWho'] == 'Wife') { ?>
                                                                                <div class="col-md-12 col-xs-12 padding-0 form">
                                                                                    
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputRealEstateType">
                                                                                            نوع کاربری
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputRealEstateType"
                                                                                                id="inputRealEstateType">
                                                                                            <?php foreach ($EnumResumeProfile['RealEstateType'] as $key => $value) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['RealEstateType'], $key); ?>
                                                                                                        value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputRealEstateOwnershipDate">
                                                                                            سال شروع مالکیت
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputRealEstateOwnershipDate"
                                                                                                id="inputRealEstateOwnershipDate"
                                                                                                style="font-family: tahoma;">
                                                                                            <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['RealEstateOwnershipDate'], $i); ?>
                                                                                                        value="<?php echo $i; ?>">
                                                                                                    <?php echo $i; ?>
                                                                                                </option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputRealEstateOwnershipType">
                                                                                            نحوه مالکیت
                                                                                        </label>
                                                                                        <select
                                                                                                class="form-control form-control-lg"
                                                                                                name="inputRealEstateOwnershipType"
                                                                                                id="inputRealEstateOwnershipType">
                                                                                            <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['RealEstateOwnershipType'], $key); ?>
                                                                                                        value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat countries">
                                                                                        <label for="inputRealEstateCountryId">کشور</label>
                                                                                        <select
                                                                                                data-country-id="<?php echo $item['RealEstateCountryId']; ?>"
                                                                                                data-state-id="<?php echo $item['RealEstateStateId']; ?>"
                                                                                                data-city-id="<?php echo $item['RealEstateCityId']; ?>"
                                                                                                class="form-control form-control-lg"
                                                                                                name="inputRealEstateCountryId"
                                                                                                id="inputRealEstateCountryId">
                                                                                            <option value="0">-- انتخاب کنید --
                                                                                            </option>
                                                                                            <?php foreach ($countries as $row) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['RealEstateCountryId'], $row['CountryId']); ?>
                                                                                                        value="<?php echo $row['CountryId']; ?>"><?php echo $row['FaName']; ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv">
                                                                                        <label for="inputRealEstateStateId">
                                                                                            استان
                                                                                        </label>
                                                                                        <select
                                                                                                data-city-id="<?php echo $item['RealEstateCityId']; ?>"
                                                                                                class="form-control form-control-lg state-select"
                                                                                                name="inputRealEstateStateId"
                                                                                                id="inputRealEstateStateId">
                                                                                            <option value="0">-- انتخاب کنید --</option>
                                                                                            <?php foreach ($states as $state) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['RealEstateStateId'], $state['StateId']); ?>
                                                                                                        value="<?php echo $state['StateId']; ?>">
                                                                                                    <?php echo $state['StateName']; ?>
                                                                                                </option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv">
                                                                                        <label for="inputRealEstateCityId">
                                                                                            شهر
                                                                                        </label>
                                                                                        <select class="form-control form-control-lg city-select"
                                                                                                name="inputRealEstateCityId"
                                                                                                id="inputRealEstateCityId">
                                                                                            <option value="0">-- انتخاب کنید --</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputRealEstatePortion">
                                                                                            سهم از ملک(1 تا 6 دانگ)
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <input type="number"
                                                                                            <?php setInputValue($item['RealEstatePortion']); ?>
                                                                                               name="inputRealEstatePortion"
                                                                                               id="inputRealEstatePortion"
                                                                                               class="form-control"
                                                                                               placeholder="سهم از ملک 1 تا 6 دانگ"
                                                                                               min="1" max="6"/>
                                                                                    </div>
                                                                                    <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputRealEstateExtent">
                                                                                            متراژ حدودی ملک
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <div class="row">
                                                                                            <div class="col-md-6 col-xs-12 RightFloat">
                                                                                                <input type="number"
                                                                                                    <?php setInputValue($item['RealEstateExtent']); ?>
                                                                                                       name="inputRealEstateExtent"
                                                                                                       id="inputRealEstateExtent"
                                                                                                       class="form-control"
                                                                                                       placeholder=""
                                                                                                       min="0"/>
                                                                                            </div>
                                                                                            <div class="col-md-6 col-xs-12 RightFloat">
                                                                                                <select class="form-control form-control-lg"
                                                                                                        name="inputRealEstateExtentUnit"
                                                                                                        id="inputRealEstateExtentUnit">
                                                                                                    <?php foreach ($EnumResumeProfile['Extent'] as $key => $value) { ?>
                                                                                                        <option
                                                                                                            <?php setOptionSelected($item['RealEstateExtentUnit'], $key); ?>
                                                                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                                    <?php } ?>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputRealEstateBuyTimePrice">
                                                                                            ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <div class="row">
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['RealEstateBuyTimePrice'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputRealEstateBuyTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputRealEstateBuyTimePrice ">صد
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                <input
                                                                                                        type="number"
                                                                                                    <?php setInputValue(splitPrice($item['RealEstateBuyTimePrice'])['left']); ?>
                                                                                                        name="inputRealEstateBuyTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputRealEstateBuyTimePrice">هزار
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                <select class="form-control form-control-lg"
                                                                                                        name="inputRealEstateBuyTimePrice"
                                                                                                        id="inputRealEstateBuyTimePrice">
                                                                                                    <option value="0">انتخاب کنید ---</option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['RealEstateBuyTimePrice'])['unit']) == "HZ") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="HZ"
                                                                                                            data-right-side="SD"
                                                                                                            value="HZ">هزار تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['RealEstateBuyTimePrice'])['unit']) == "MI") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="MI"
                                                                                                            data-right-side="HZ"
                                                                                                            value="MI">میلیون تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['RealEstateBuyTimePrice'])['unit']) == "ML") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="ML"
                                                                                                            data-right-side="MI"
                                                                                                            value="ML">میلیارد تومان
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputRealEstateNowTimePrice">
                                                                                            ارزش حدودی کل سهام درحال حاضر :
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <div class="row">
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['RealEstateNowTimePrice'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputRealEstateNowTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputRealEstateNowTimePrice ">صد
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['RealEstateNowTimePrice'])['left']); ?>
                                                                                                        type="number"
                                                                                                        name="inputRealEstateNowTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputRealEstateNowTimePrice">هزار
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                <select class="form-control form-control-lg"
                                                                                                        name="inputRealEstateNowTimePrice"
                                                                                                        id="inputRealEstateNowTimePrice">
                                                                                                    <option value="0">انتخاب کنید ---</option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['RealEstateNowTimePrice'])['unit']) == "HZ") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="HZ"
                                                                                                            data-right-side="SD"
                                                                                                            value="HZ">هزار تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['RealEstateNowTimePrice'])['unit']) == "MI") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="MI"
                                                                                                            data-right-side="HZ"
                                                                                                            value="MI">میلیون تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['RealEstateNowTimePrice'])['unit']) == "ML") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="ML"
                                                                                                            data-right-side="MI"
                                                                                                            value="ML">میلیارد تومان
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group RightFloat">
                                                                                        <label for="inputRealEstateAddress">آدرس</label>
                                                                                        <input
                                                                                            <?php setInputValue($item['RealEstateAddress']); ?>
                                                                                                id="inputRealEstateAddress"
                                                                                                type="text"
                                                                                                name="inputRealEstateAddress"
                                                                                                class="input-validate validate valid"
                                                                                                placeholder="نام خیابان اصلی / محله / منطقه">
                                                                                    </div>
                                                                                </div>
                                                                            <?php }
                                                                        } ?>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End RealEStates -->
                                                <!--Vehicle -->
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="panel panel-default LeftPanelShadow">
                                                        <div class="panel-heading">وسایل نقلیه</div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-xs-12">
                                                                    
                                                                    <form id="form-Vehicle">
                                                                        <span class="divider"></span>
                                                                        <?php foreach ($finance['Vehicle'] as $item) {
                                                                            if ($item['ForWho'] == 'Wife') { ?>
                                                                                <div class="col-md-12 col-xs-12 padding-0 form">
                                                                                    
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputVehicleType">
                                                                                            نوع وسیله نقلیه<span
                                                                                                    class="text-danger"></span>
                                                                                        </label>
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputVehicleType"
                                                                                                id="inputVehicleType">
                                                                                            <?php foreach ($EnumResumeProfile['TypeOfVehicle'] as $key => $value) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['VehicleType'], $key); ?>
                                                                                                        value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputVehicleOwnershipDate">
                                                                                            سال شروع مالکیت<span
                                                                                                    class="text-danger"></span>
                                                                                        </label>
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputVehicleOwnershipDate"
                                                                                                id="inputVehicleOwnershipDate"
                                                                                                style="font-family: tahoma;">
                                                                                            <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['VehicleOwnershipDate'], $i); ?>
                                                                                                    <?php if ($i == 1398) echo "selected"; ?>
                                                                                                        value="<?php echo $i; ?>">
                                                                                                    <?php echo $i; ?>
                                                                                                </option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputVehicleOwnershipType">
                                                                                            نحوه مالکیت
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputVehicleOwnershipType"
                                                                                                id="inputVehicleOwnershipType">
                                                                                            <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                                                <option

                                                                                                    <?php setOptionSelected($item['VehicleOwnershipType'], $i); ?>
                                                                                                        value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputVehicleBuyTimePrice">
                                                                                            ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <div class="row">
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['VehicleBuyTimePrice'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputVehicleBuyTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputVehicleBuyTimePrice ">صد
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['VehicleBuyTimePrice'])['left']); ?>
                                                                                                        type="number"
                                                                                                        name="inputVehicleBuyTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputVehicleBuyTimePrice">هزار
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                <select class="form-control form-control-lg"
                                                                                                        name="inputVehicleBuyTimePrice"
                                                                                                        id="inputVehicleBuyTimePrice">
                                                                                                    <option value="0">انتخاب کنید ---</option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['VehicleBuyTimePrice'])['unit']) == "HZ") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="HZ"
                                                                                                            data-right-side="SD"
                                                                                                            value="HZ">هزار تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['VehicleBuyTimePrice'])['unit']) == "MI") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="MI"
                                                                                                            data-right-side="HZ"
                                                                                                            value="MI">میلیون تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['VehicleBuyTimePrice'])['unit']) == "ML") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="ML"
                                                                                                            data-right-side="MI"
                                                                                                            value="ML">میلیارد تومان
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputVehicleNowTimePrice">
                                                                                            ارزش حدودی کل سهام درحال حاضر :
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <div class="row">
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['VehicleNowTimePrice'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputVehicleNowTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputVehicleNowTimePrice ">صد
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['VehicleNowTimePrice'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputVehicleNowTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputVehicleNowTimePrice">هزار
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                <select class="form-control form-control-lg"
                                                                                                        name="inputVehicleNowTimePrice"
                                                                                                        id="inputVehicleNowTimePrice">
                                                                                                    <option value="0">انتخاب کنید ---</option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['VehicleNowTimePrice'])['unit']) == "HZ") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="HZ"
                                                                                                            data-right-side="SD"
                                                                                                            value="HZ">هزار تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['VehicleNowTimePrice'])['unit']) == "MI") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="MI"
                                                                                                            data-right-side="HZ"
                                                                                                            value="MI">میلیون تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['VehicleNowTimePrice'])['unit']) == "ML") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="ML"
                                                                                                            data-right-side="MI"
                                                                                                            value="ML">میلیارد تومان
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>


                                                                                    <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat clear-div">
                                                                                        <label for="inputVehiclePortion">
                                                                                            سهم از ملک(1 تا 6 دانگ)
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <input
                                                                                            <?php setInputValue($item['VehiclePortion']); ?>
                                                                                                type="number"
                                                                                                name="inputVehiclePortion"
                                                                                                id="inputVehiclePortion"
                                                                                                class="form-control"
                                                                                                placeholder="سهم از ملک 1 تا 6 دانگ"
                                                                                                min="0" max="6"/>
                                                                                    </div>
                                                                                </div>
                                                                            <?php }
                                                                        } ?>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End Vehicle -->
                                                <!--Invest -->
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="panel panel-default LeftPanelShadow">
                                                        <div class="panel-heading">سرمایه‌گذاری‌ها (سهام‌، اوراق بهادار، ...)</div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-xs-12">
                                                                    
                                                                    <form id="form-Invest">
                                                                        <span class="divider"></span>
                                                                        <?php foreach ($finance['Invest'] as $item) {
                                                                            if ($item['ForWho'] == 'Wife') { ?>
                                                                                <div class="col-md-12 col-xs-12 padding-0 form">
                                                                                    
                                                                                    <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                                        <label for="inputInvestTitle">
                                                                                            نام شرکت / موسسه
                                                                                        </label>
                                                                                        <input
                                                                                            <?php setInputValue($item['InvestTitle']); ?>
                                                                                                id="inputInvestTitle" type="text"
                                                                                                name="inputInvestTitle"
                                                                                                placeholder="نام شرکت - موسسه - پروژه ">
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputInvestDate">
                                                                                            سال شروع مالکیت
                                                                                            <span class="text-danger">
                                             </span>
                                                                                        </label>
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputInvestDate"
                                                                                                id="inputInvestDate"
                                                                                                style="font-family: tahoma;">
                                                                                            <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['InvestDate'], $i); ?>
                                                                                                    <?php if ($i == 1398) echo "selected"; ?>
                                                                                                        value="<?php echo $i; ?>">
                                                                                                    <?php echo $i; ?>
                                                                                                </option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputInvestOwnershipType">
                                                                                            نحوه مالکیت
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputInvestOwnershipType"
                                                                                                id="inputInvestOwnershipType">
                                                                                            <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['InvestDate'], $key); ?>
                                                                                                        value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputInvestBuyTimePrice">
                                                                                            ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <div class="row">
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['InvestBuyTimePrice'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputInvestBuyTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputInvestBuyTimePrice ">صد
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['InvestBuyTimePrice'])['left']); ?>
                                                                                                        type="number"
                                                                                                        name="inputInvestBuyTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputInvestBuyTimePrice">هزار
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                <select class="form-control form-control-lg"
                                                                                                        name="inputInvestBuyTimePrice"
                                                                                                        id="inputInvestBuyTimePrice">
                                                                                                    <option value="0">انتخاب کنید ---</option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['InvestBuyTimePrice'])['unit']) == "HZ") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="HZ"
                                                                                                            data-right-side="SD"
                                                                                                            value="HZ">هزار تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['InvestBuyTimePrice'])['unit']) == "MI") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="MI"
                                                                                                            data-right-side="HZ"
                                                                                                            value="MI">میلیون تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['InvestBuyTimePrice'])['unit']) == "ML") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="ML"
                                                                                                            data-right-side="MI"
                                                                                                            value="ML">میلیارد تومان
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputInvestNowTimePrice">
                                                                                            ارزش حدودی کل سهام درحال حاضر :
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <div class="row">
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['InvestNowTimePrice'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputInvestNowTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputInvestNowTimePrice ">صد
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['InvestNowTimePrice'])['left']); ?>
                                                                                                        type="number"
                                                                                                        name="inputInvestNowTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputInvestNowTimePrice">هزار
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                <select class="form-control form-control-lg"
                                                                                                        name="inputInvestNowTimePrice"
                                                                                                        id="inputInvestNowTimePrice">
                                                                                                    <option value="0">انتخاب کنید ---</option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['InvestNowTimePrice'])['unit']) == "HZ") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="HZ"
                                                                                                            data-right-side="SD"
                                                                                                            value="HZ">هزار تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['InvestNowTimePrice'])['unit']) == "MI") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="MI"
                                                                                                            data-right-side="HZ"
                                                                                                            value="MI">میلیون تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['InvestNowTimePrice'])['unit']) == "ML") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="ML"
                                                                                                            data-right-side="MI"
                                                                                                            value="ML">میلیارد تومان
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            <?php }
                                                                        } ?>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End Invest -->
                                                <!--BankAccount -->
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="panel panel-default LeftPanelShadow">
                                                        <div class="panel-heading">حساب‌های جاری، پس‌انداز و سرمایه‌گذاری</div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-xs-12">
                                                                    
                                                                    <form id="form-BankAccount">
                                                                        <span class="divider"></span>
                                                                        <?php foreach ($finance['BankAccount'] as $item) {
                                                                            if ($item['ForWho'] == 'Wife') { ?>
                                                                                <div class="col-md-12 col-xs-12 padding-0 form">
                                                                                    
                                                                                    <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                                        <label for="inputBankAccountTitle">
                                                                                            عنوان بانک یا موسسه
                                                                                        </label>
                                                                                        <input
                                                                                            <?php setInputValue($item['BankAccountTitle']); ?>
                                                                                                id="inputBankAccountTitle"
                                                                                                type="text"
                                                                                                name="inputBankAccountTitle"
                                                                                                placeholder="عنوان بانک یا موسسه ">
                                                                                    </div>
                                                                                    <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputBankAccountPrice">
                                                                                            مبلغ :
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <div class="row">
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                <input

                                                                                                    <?php setInputValue(splitPrice($item['BankAccountPrice'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputBankAccountPrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputBankAccountPrice ">صد
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                <input

                                                                                                    <?php setInputValue(splitPrice($item['BankAccountPrice'])['left']); ?>
                                                                                                        type="number"
                                                                                                        name="RealEstateBuyTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputBankAccountPrice">هزار
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                <select class="form-control form-control-lg"
                                                                                                        name="inputBankAccountPrice"
                                                                                                        id="inputBankAccountPrice">
                                                                                                    <option value="0">انتخاب کنید ---</option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['BankAccountPrice'])['unit']) == "HZ") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="HZ"
                                                                                                            data-right-side="SD"
                                                                                                            value="HZ">هزار تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['BankAccountPrice'])['unit']) == "MI") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="MI"
                                                                                                            data-right-side="HZ"
                                                                                                            value="MI">میلیون تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['BankAccountPrice'])['unit']) == "ML") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="ML"
                                                                                                            data-right-side="MI"
                                                                                                            value="ML">میلیارد تومان
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat">
                                                                                        <label for="inputBankAccountCountryId">کشور</label>
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputBankAccountCountryId"
                                                                                                id="inputBankAccountCountryId">
                                                                                            <option value="0">-- انتخاب کنید --
                                                                                            </option>
                                                                                            <?php foreach ($countries as $row) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['BankAccountCountryId'], $row['CountryId']); ?>
                                                                                                        value="<?php echo $row['CountryId']; ?>"><?php echo $row['FaName']; ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            <?php }
                                                                        } ?>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End BankAccount -->
                                                <!-- Debtor -->
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="panel panel-default LeftPanelShadow">
                                                        <div class="panel-heading">
                                                            دیون و مطالبات
                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-xs-12">
                                                                    
                                                                    <form id="form-Credit-Debtor">
                                                                        <span class="divider"></span>
                                                                        <?php
                                                                        $creditDebtor['CreditPrice'] = "0.0 HZ";
                                                                        $creditDebtor['DebotrPrice'] = "0.0 HZ";
                                                                        $creditDebtor['DebotrDescription'] = "";
                                                                        foreach ($finance['CreditDebtor'] as $item) {
                                                                            if($item['ForWho'] == 'Wife'){
                                                                                $creditDebtor = $item;
                                                                            }
                                                                        }
                                                                        ?>
                                                                        <div class="col-md-12 col-xs-12 padding-0 form">
                                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                <label for="inputCreditPrice">
                                                                                    جمع کل بستانکاری از اشخاص حقیقی یا حقوقی
                                                                                    :
                                                                                    <span class="text-danger"></span>
                                                                                </label>
                                                                                <div class="row">
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($creditDebtor['CreditPrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputCreditPrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputCreditPrice ">صد
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($creditDebtor['CreditPrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputCreditPrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputCreditPrice">هزار
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputCreditPrice"
                                                                                                id="inputCreditPrice">
                                                                                            <option value="0">انتخاب کنید ---</option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($creditDebtor['CreditPrice'])['unit']) == "HZ") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="HZ"
                                                                                                    data-right-side="SD"
                                                                                                    value="HZ">هزار تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($creditDebtor['CreditPrice'])['unit']) == "MI") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="MI"
                                                                                                    data-right-side="HZ"
                                                                                                    value="MI">میلیون تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($creditDebtor['CreditPrice'])['unit']) == "ML") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="ML"
                                                                                                    data-right-side="MI"
                                                                                                    value="ML">میلیارد تومان
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                <label for="inputDebotrPrice">
                                                                                    جمع کل بدهکاری از اشخاص حقیقی یا حقوقی :
                                                                                    <span class="text-danger"></span>
                                                                                </label>
                                                                                <div class="row">
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($creditDebtor['DebotrPrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputDebotrPrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputDebotrPrice ">صد
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($creditDebtor['DebotrPrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputDebotrPrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputDebotrPrice">هزار
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputDebotrPrice"
                                                                                                id="inputDebotrPrice">
                                                                                            <option value="0">انتخاب کنید ---</option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($creditDebtor['DebotrPrice'])['unit']) == "HZ") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="HZ"
                                                                                                    data-right-side="SD"
                                                                                                    value="HZ">هزار تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($creditDebtor['DebotrPrice'])['unit']) == "MI") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="MI"
                                                                                                    data-right-side="HZ"
                                                                                                    value="MI">میلیون تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($creditDebtor['DebotrPrice'])['unit']) == "ML") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="ML"
                                                                                                    data-right-side="MI"
                                                                                                    value="ML">میلیارد تومان
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <textarea class="EStates-textArea"
                                                                                          name="inputDebotrDescription"><?php echo $creditDebtor['DebotrDescription']; ?></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End Debtor -->
                                                <!--Goods -->
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="panel panel-default LeftPanelShadow">
                                                        <div class="panel-heading">کلیه کالاهای فاقد سند مالکیت رسمی</div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-xs-12">
                                                                    
                                                                    <form id="form-Goods">
                                                                        <span class="divider"></span>
                                                                        <?php foreach ($finance['Goods'] as $item) {
                                                                            if ($item['ForWho'] == 'Wife') { ?>
                                                                                <div class="col-md-12 col-xs-12 padding-0 form">
                                                                                    
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputGoodsType">
                                                                                            نوع کالا
                                                                                        </label>
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputGoodsType"
                                                                                                id="inputGoodsType">
                                                                                            <?php foreach ($EnumResumeProfile['GoodsType'] as $key => $value) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['GoodsType'], $key); ?>
                                                                                                        value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputGoodsOwnershipStartDate">
                                                                                            سال شروع مالکیت
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputGoodsOwnershipStartDate"
                                                                                                id="inputGoodsOwnershipStartDate"
                                                                                                style="font-family: tahoma;">
                                                                                            <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['GoodsOwnershipStartDate'], $i); ?>
                                                                                                        value="<?php echo $i; ?>">
                                                                                                    <?php echo $i; ?>
                                                                                                </option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputGoodsCount">
                                                                                            حجم / وزن / تعداد کالا
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <input
                                                                                            <?php setInputValue($item['GoodsCount']); ?>
                                                                                                type="text" name="inputGoodsCount"
                                                                                                id="inputGoodsCount"
                                                                                                class="form-control"
                                                                                                placeholder="  حجم / وزن / تعداد کالا"/>
                                                                                    </div>
                                                                                    <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputGoodsBuyTimePrice">
                                                                                            ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <div class="row">
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['GoodsBuyTimePrice'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputGoodsBuyTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputGoodsBuyTimePrice ">صد
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['GoodsBuyTimePrice'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputGoodsBuyTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputGoodsBuyTimePrice">هزار
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                <select class="form-control form-control-lg"
                                                                                                        name="inputGoodsBuyTimePrice"
                                                                                                        id="inputGoodsBuyTimePrice">
                                                                                                    <option value="0">انتخاب کنید ---</option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['GoodsBuyTimePrice'])['unit']) == "HZ") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="HZ"
                                                                                                            data-right-side="SD"
                                                                                                            value="HZ">هزار تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['GoodsBuyTimePrice'])['unit']) == "MI") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="MI"
                                                                                                            data-right-side="HZ"
                                                                                                            value="MI">میلیون تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['GoodsBuyTimePrice'])['unit']) == "ML") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="ML"
                                                                                                            data-right-side="MI"
                                                                                                            value="ML">میلیارد تومان
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputGoodsNowTimePrice">
                                                                                            ارزش حدودی کل سهام درحال حاضر :
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <div class="row">
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['GoodsNowTimePrice'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputGoodsNowTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputGoodsNowTimePrice ">صد
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['GoodsNowTimePrice'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputGoodsNowTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputGoodsNowTimePrice">هزار
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                <select class="form-control form-control-lg"
                                                                                                        name="inputGoodsNowTimePrice"
                                                                                                        id="inputGoodsNowTimePrice">
                                                                                                    <option value="0">انتخاب کنید ---</option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['GoodsNowTimePrice'])['unit']) == "HZ") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="HZ"
                                                                                                            data-right-side="SD"
                                                                                                            value="HZ">هزار تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['GoodsNowTimePrice'])['unit']) == "MI") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="MI"
                                                                                                            data-right-side="HZ"
                                                                                                            value="MI">میلیون تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['GoodsNowTimePrice'])['unit']) == "ML") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="ML"
                                                                                                            data-right-side="MI"
                                                                                                            value="ML">میلیارد تومان
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputGoodsOwnershipPercent">
                                                                                            درصد سهم از مالکیت :
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <input
                                                                                            <?php setInputValue($item['GoodsOwnershipPercent']); ?>
                                                                                                type="number"
                                                                                                name="inputGoodsOwnershipPercent"
                                                                                                id="inputGoodsOwnershipPercent"
                                                                                                class="form-control"
                                                                                                placeholder="سهم از ملک 1 تا 6 دانگ"
                                                                                                min="0" max="6"/>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputRealEstateOwnershipType">
                                                                                            نحوه مالکیت
                                                                                            <span class="text-danger">
                                             </span>
                                                                                        </label>
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputRealEstateOwnershipType"
                                                                                                id="inputRealEstateOwnershipType">
                                                                                            <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['RealEstateOwnershipType'], $key); ?>
                                                                                                        value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            <?php }
                                                                        } ?>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End Goods -->
                                                <!--Fee -->
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="panel panel-default LeftPanelShadow">
                                                        <div class="panel-heading">حقوق مالکیت معنوی</div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-xs-12">
                                                                    
                                                                    <form id="form-Fee">
                                                                        <span class="divider"></span>
                                                                        <?php foreach ($finance['Fee'] as $item) {
                                                                            if ($item['ForWho'] == 'Wife') { ?>
                                                                                <div class="col-md-12 col-xs-12 padding-0 form">
                                                                                    
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputFeeType">عنوان :</label>
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputFeeType"
                                                                                                id="inputFeeType">
                                                                                            <?php foreach ($EnumResumeProfile['FeeType'] as $key => $value) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['FeeType'], $key); ?>
                                                                                                        value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputFeeOwnershipStartDate">
                                                                                            سال شروع مالکیت
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputFeeOwnershipStartDate"
                                                                                                id="inputFeeOwnershipStartDate"
                                                                                                style="font-family: tahoma;">
                                                                                            <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['FeeOwnershipStartDate'], $i); ?>
                                                                                                        value="<?php echo $i; ?>">
                                                                                                    <?php echo $i; ?>
                                                                                                </option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputFeePercent">
                                                                                            درصد سهم از مالکیت معنوی:
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <input
                                                                                            <?php setInputValue($item['FeePercent']); ?>
                                                                                                type="number" name="inputFeePercent"
                                                                                                id="inputFeePercent"
                                                                                                class="form-control"
                                                                                                placeholder="سهم از ملک 1 تا 6 دانگ"/>
                                                                                    </div>
                                                                                    <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputFeeAverageInYear">
                                                                                            میزان درآمد متوسط سالیانه از مالکیت
                                                                                            معنوی :
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <div class="row">
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['FeeAverageInYear'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputFeeAverageInYear"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputFeeAverageInYear ">صد
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['FeeAverageInYear'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputFeeAverageInYear"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputFeeAverageInYear">هزار
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                <select class="form-control form-control-lg"
                                                                                                        name="inputFeeAverageInYear"
                                                                                                        id="inputFeeAverageInYear">
                                                                                                    <option value="0">انتخاب کنید ---</option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['FeeAverageInYear'])['unit']) == "HZ") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="HZ"
                                                                                                            data-right-side="SD"
                                                                                                            value="HZ">هزار تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['FeeAverageInYear'])['unit']) == "MI") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="MI"
                                                                                                            data-right-side="HZ"
                                                                                                            value="MI">میلیون تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['FeeAverageInYear'])['unit']) == "ML") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="ML"
                                                                                                            data-right-side="MI"
                                                                                                            value="ML">میلیارد تومان
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            <?php }
                                                                        } ?>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End Fee -->
                                                <!--AverageMonthIncome -->
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="panel panel-default LeftPanelShadow">
                                                        <div class="panel-heading">در آمد</div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-xs-12">
                                                                    
                                                                    <form id="form-AverageMonthIncome">
                                                                        <span class="divider"></span>
                                                                        <div class="col-md-12 col-xs-12 padding-0 form">
                                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                <?php
                                                                                $income['AverageMonthIncome'] = "0.0 HZ";
                                                                                foreach ($finance['Income'] as $item) {
                                                                                    if($item['ForWho'] == 'Wife'){
                                                                                        $income = $item;
                                                                                    }
                                                                                }
                                                                                ?>
                                                                                <label for="inputAverageMonthIncome">
                                                                                    درآمد متوسط ماهیانه :
                                                                                    <span class="text-danger"></span>
                                                                                </label>
                                                                                <div class="row">
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($income['AverageMonthIncome'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputAverageMonthIncome"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputAverageMonthIncome ">صد
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($income['AverageMonthIncome'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputAverageMonthIncome"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputAverageMonthIncome">هزار
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputAverageMonthIncome"
                                                                                                id="inputAverageMonthIncome">
                                                                                            <option value="0">انتخاب کنید ---</option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($income['AverageMonthIncome'])['unit']) == "HZ") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="HZ"
                                                                                                    data-right-side="SD"
                                                                                                    value="HZ">هزار تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($income['AverageMonthIncome'])['unit']) == "MI") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="MI"
                                                                                                    data-right-side="HZ"
                                                                                                    value="MI">میلیون تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($income['AverageMonthIncome'])['unit']) == "ML") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="ML"
                                                                                                    data-right-side="MI"
                                                                                                    value="ML">میلیارد تومان
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End AverageMonthIncome -->
                                                <!-- ElectionPlacePrice -->
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="panel panel-default LeftPanelShadow">
                                                        <div class="panel-heading">
                                                            شفاف سازی هزینه های انتخاباتی
                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-xs-12">
                                                                    
                                                                    <form id="form-Election">
                                                                        <span class="divider"></span>
                                                                        <?php
                                                                        $election['ElectionPlacePrice'] = "0.0 HZ";
                                                                        $election['ElectionFlockPrice'] = "0.0 HZ";
                                                                        $election['ElectionAdvertisePrice'] = "0.0 HZ";
                                                                        $election['ElectionStaffPrice'] = "0.0 HZ";
                                                                        $election['ElectionAllPrice'] = "0.0 HZ";
                                                                        foreach ($finance['Election'] as $item) {
                                                                            if($item['ForWho'] == 'Wife'){
                                                                                $election = $item;
                                                                            }
                                                                        }
                                                                        ?>
                                                                        <div class="col-md-12 col-xs-12 padding-0 form">
                                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                <label for="inputElectionPlacePrice">
                                                                                    هزینه دایرکردن محل ستاد انتخابات (اجاره بها ,
                                                                                    حملو نقل و سایر موارد)
                                                                                    -هزینه کل :
                                                                                    <span class="text-danger"></span>
                                                                                </label>
                                                                                <div class="row">
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($election['ElectionPlacePrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputElectionPlacePrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0" max="6"/>
                                                                                        <label for="inputElectionPlacePrice ">صد
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($election['ElectionPlacePrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputElectionPlacePrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0" max="6"/>
                                                                                        <label for="inputElectionPlacePrice">هزار
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputElectionPlacePrice"
                                                                                                id="inputElectionPlacePrice">
                                                                                            <option value="0">انتخاب کنید ---</option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionPlacePrice'])['unit']) == "HZ") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="HZ"
                                                                                                    data-right-side="SD"
                                                                                                    value="HZ">هزار تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionPlacePrice'])['unit']) == "MI") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="MI"
                                                                                                    data-right-side="HZ"
                                                                                                    value="MI">میلیون تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionPlacePrice'])['unit']) == "ML") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="ML"
                                                                                                    data-right-side="MI"
                                                                                                    value="ML">میلیارد تومان
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                <label for="inputElectionFlockPrice">
                                                                                    هزینه برپایی تجمعات عمومی مرتبط با اهداف
                                                                                    انتخاباتی – هزینه کل :
                                                                                    <span class="text-danger"></span>
                                                                                </label>
                                                                                <div class="row">
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($election['ElectionFlockPrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputElectionFlockPrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputElectionFlockPrice ">صد
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($election['ElectionFlockPrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputElectionFlockPrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputElectionFlockPrice">هزار
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputElectionFlockPrice"
                                                                                                id="inputElectionFlockPrice">
                                                                                            <option value="0">انتخاب کنید ---</option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionFlockPrice'])['unit']) == "HZ") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="HZ"
                                                                                                    data-right-side="SD"
                                                                                                    value="HZ">هزار تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionFlockPrice'])['unit']) == "MI") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="MI"
                                                                                                    data-right-side="HZ"
                                                                                                    value="MI">میلیون تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionFlockPrice'])['unit']) == "ML") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="ML"
                                                                                                    data-right-side="MI"
                                                                                                    value="ML">میلیارد تومان
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                <label for="inputElectionAdvertisePrice">
                                                                                    هزینه تبلیغات مجاز در رسانه ها – هزینه کل :
                                                                                    <span class="text-danger"></span>
                                                                                </label>
                                                                                <div class="row">
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($election['ElectionAdvertisePrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputElectionAdvertisePrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputElectionAdvertisePrice ">صد
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($election['ElectionAdvertisePrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputElectionAdvertisePrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputElectionAdvertisePrice">هزار
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputElectionAdvertisePrice"
                                                                                                id="inputElectionAdvertisePrice">
                                                                                            <option value="0">انتخاب کنید ---</option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionAdvertisePrice'])['unit']) == "HZ") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="HZ"
                                                                                                    data-right-side="SD"
                                                                                                    value="HZ">هزار تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionAdvertisePrice'])['unit']) == "MI") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="MI"
                                                                                                    data-right-side="HZ"
                                                                                                    value="MI">میلیون تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionAdvertisePrice'])['unit']) == "ML") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="ML"
                                                                                                    data-right-side="MI"
                                                                                                    value="ML">میلیارد تومان
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                <label for="inputElectionStaffPrice">
                                                                                    هزینه و حق الزحمه عوامل اجرایی و کارشناسی در
                                                                                    انتخابات – هزینه کل :
                                                                                    <span class="text-danger"></span>
                                                                                </label>
                                                                                <div class="row">
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($election['ElectionStaffPrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputElectionStaffPrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputElectionStaffPrice ">صد
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($election['ElectionStaffPrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputElectionStaffPrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputElectionStaffPrice">هزار
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputElectionStaffPrice"
                                                                                                id="inputElectionStaffPrice">
                                                                                            <option value="0">انتخاب کنید ---</option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionStaffPrice'])['unit']) == "HZ") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="HZ"
                                                                                                    data-right-side="SD"
                                                                                                    value="HZ">هزار تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionStaffPrice'])['unit']) == "MI") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="MI"
                                                                                                    data-right-side="HZ"
                                                                                                    value="MI">میلیون تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionStaffPrice'])['unit']) == "ML") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="ML"
                                                                                                    data-right-side="MI"
                                                                                                    value="ML">میلیارد تومان
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                <label for="inputElectionAllPrice">
                                                                                    جمع کل هزینه های انتخاباتی :
                                                                                    <span class="text-danger"></span>
                                                                                </label>
                                                                                <div class="row">
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($election['ElectionAllPrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputElectionAllPrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputElectionAllPrice ">صد
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($election['ElectionAllPrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputElectionAllPrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputElectionAllPrice">هزار
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputElectionAllPrice"
                                                                                                id="inputElectionAllPrice">
                                                                                            <option value="0">انتخاب کنید ---</option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionAllPrice'])['unit']) == "HZ") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="HZ"
                                                                                                    data-right-side="SD"
                                                                                                    value="HZ">هزار تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionAllPrice'])['unit']) == "MI") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="MI"
                                                                                                    data-right-side="HZ"
                                                                                                    value="MI">میلیون تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionAllPrice'])['unit']) == "ML") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="ML"
                                                                                                    data-right-side="MI"
                                                                                                    value="ML">میلیارد تومان
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End ElectionPlacePrice -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab3child">
                                    <div class="LeftPanel">
                                        <div class="LeftPanelcontent">
                                            <div class="row">
                                                <!--RealEStates -->
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="panel panel-default LeftPanelShadow">
                                                        <div class="panel-heading">املاک و مستغلات</div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-xs-12">
                                                                    
                                                                    <form id="form-RealEstate">
                                                                        <span class="divider"></span>
                                                                        <?php foreach ($finance['RealEStates'] as $item) {
                                                                            if ($item['ForWho'] == 'Child') { ?>
                                                                                <div class="col-md-12 col-xs-12 padding-0 form">
                                                                                    
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputRealEstateType">
                                                                                            نوع کاربری
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputRealEstateType"
                                                                                                id="inputRealEstateType">
                                                                                            <?php foreach ($EnumResumeProfile['RealEstateType'] as $key => $value) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['RealEstateType'], $key); ?>
                                                                                                        value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputRealEstateOwnershipDate">
                                                                                            سال شروع مالکیت
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputRealEstateOwnershipDate"
                                                                                                id="inputRealEstateOwnershipDate"
                                                                                                style="font-family: tahoma;">
                                                                                            <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['RealEstateOwnershipDate'], $i); ?>
                                                                                                        value="<?php echo $i; ?>">
                                                                                                    <?php echo $i; ?>
                                                                                                </option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputRealEstateOwnershipType">
                                                                                            نحوه مالکیت
                                                                                        </label>
                                                                                        <select
                                                                                                class="form-control form-control-lg"
                                                                                                name="inputRealEstateOwnershipType"
                                                                                                id="inputRealEstateOwnershipType">
                                                                                            <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['RealEstateOwnershipType'], $key); ?>
                                                                                                        value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat countries">
                                                                                        <label for="inputRealEstateCountryId">کشور</label>
                                                                                        <select
                                                                                                data-country-id="<?php echo $item['RealEstateCountryId']; ?>"
                                                                                                data-state-id="<?php echo $item['RealEstateStateId']; ?>"
                                                                                                data-city-id="<?php echo $item['RealEstateCityId']; ?>"
                                                                                                class="form-control form-control-lg"
                                                                                                name="inputRealEstateCountryId"
                                                                                                id="inputRealEstateCountryId">
                                                                                            <option value="0">-- انتخاب کنید --
                                                                                            </option>
                                                                                            <?php foreach ($countries as $row) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['RealEstateCountryId'], $row['CountryId']); ?>
                                                                                                        value="<?php echo $row['CountryId']; ?>"><?php echo $row['FaName']; ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv">
                                                                                        <label for="inputRealEstateStateId">
                                                                                            استان
                                                                                        </label>
                                                                                        <select
                                                                                                data-city-id="<?php echo $item['RealEstateCityId']; ?>"
                                                                                                class="form-control form-control-lg state-select"
                                                                                                name="inputRealEstateStateId"
                                                                                                id="inputRealEstateStateId">
                                                                                            <option value="0">-- انتخاب کنید --</option>
                                                                                            <?php foreach ($states as $state) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['RealEstateStateId'], $state['StateId']); ?>
                                                                                                        value="<?php echo $state['StateId']; ?>">
                                                                                                    <?php echo $state['StateName']; ?>
                                                                                                </option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv">
                                                                                        <label for="inputRealEstateCityId">
                                                                                            شهر
                                                                                        </label>
                                                                                        <select class="form-control form-control-lg city-select"
                                                                                                name="inputRealEstateCityId"
                                                                                                id="inputRealEstateCityId">
                                                                                            <option value="0">-- انتخاب کنید --</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputRealEstatePortion">
                                                                                            سهم از ملک(1 تا 6 دانگ)
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <input type="number"
                                                                                            <?php setInputValue($item['RealEstatePortion']); ?>
                                                                                               name="inputRealEstatePortion"
                                                                                               id="inputRealEstatePortion"
                                                                                               class="form-control"
                                                                                               placeholder="سهم از ملک 1 تا 6 دانگ"
                                                                                               min="1" max="6"/>
                                                                                    </div>
                                                                                    <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputRealEstateExtent">
                                                                                            متراژ حدودی ملک
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <div class="row">
                                                                                            <div class="col-md-6 col-xs-12 RightFloat">
                                                                                                <input type="number"
                                                                                                    <?php setInputValue($item['RealEstateExtent']); ?>
                                                                                                       name="inputRealEstateExtent"
                                                                                                       id="inputRealEstateExtent"
                                                                                                       class="form-control"
                                                                                                       placeholder=""
                                                                                                       min="0"/>
                                                                                            </div>
                                                                                            <div class="col-md-6 col-xs-12 RightFloat">
                                                                                                <select class="form-control form-control-lg"
                                                                                                        name="inputRealEstateExtentUnit"
                                                                                                        id="inputRealEstateExtentUnit">
                                                                                                    <?php foreach ($EnumResumeProfile['Extent'] as $key => $value) { ?>
                                                                                                        <option
                                                                                                            <?php setOptionSelected($item['RealEstateExtentUnit'], $key); ?>
                                                                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                                    <?php } ?>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputRealEstateBuyTimePrice">
                                                                                            ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <div class="row">
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['RealEstateBuyTimePrice'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputRealEstateBuyTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputRealEstateBuyTimePrice ">صد
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                <input
                                                                                                        type="number"
                                                                                                    <?php setInputValue(splitPrice($item['RealEstateBuyTimePrice'])['left']); ?>
                                                                                                        name="inputRealEstateBuyTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputRealEstateBuyTimePrice">هزار
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                <select class="form-control form-control-lg"
                                                                                                        name="inputRealEstateBuyTimePrice"
                                                                                                        id="inputRealEstateBuyTimePrice">
                                                                                                    <option value="0">انتخاب کنید ---</option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['RealEstateBuyTimePrice'])['unit']) == "HZ") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="HZ"
                                                                                                            data-right-side="SD"
                                                                                                            value="HZ">هزار تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['RealEstateBuyTimePrice'])['unit']) == "MI") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="MI"
                                                                                                            data-right-side="HZ"
                                                                                                            value="MI">میلیون تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['RealEstateBuyTimePrice'])['unit']) == "ML") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="ML"
                                                                                                            data-right-side="MI"
                                                                                                            value="ML">میلیارد تومان
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputRealEstateNowTimePrice">
                                                                                            ارزش حدودی کل سهام درحال حاضر :
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <div class="row">
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['RealEstateNowTimePrice'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputRealEstateNowTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputRealEstateNowTimePrice ">صد
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['RealEstateNowTimePrice'])['left']); ?>
                                                                                                        type="number"
                                                                                                        name="inputRealEstateNowTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputRealEstateNowTimePrice">هزار
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                <select class="form-control form-control-lg"
                                                                                                        name="inputRealEstateNowTimePrice"
                                                                                                        id="inputRealEstateNowTimePrice">
                                                                                                    <option value="0">انتخاب کنید ---</option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['RealEstateNowTimePrice'])['unit']) == "HZ") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="HZ"
                                                                                                            data-right-side="SD"
                                                                                                            value="HZ">هزار تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['RealEstateNowTimePrice'])['unit']) == "MI") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="MI"
                                                                                                            data-right-side="HZ"
                                                                                                            value="MI">میلیون تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['RealEstateNowTimePrice'])['unit']) == "ML") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="ML"
                                                                                                            data-right-side="MI"
                                                                                                            value="ML">میلیارد تومان
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group RightFloat">
                                                                                        <label for="inputRealEstateAddress">آدرس</label>
                                                                                        <input
                                                                                            <?php setInputValue($item['RealEstateAddress']); ?>
                                                                                                id="inputRealEstateAddress"
                                                                                                type="text"
                                                                                                name="inputRealEstateAddress"
                                                                                                class="input-validate validate valid"
                                                                                                placeholder="نام خیابان اصلی / محله / منطقه">
                                                                                    </div>
                                                                                </div>
                                                                            <?php }
                                                                        } ?>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End RealEStates -->
                                                <!--Vehicle -->
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="panel panel-default LeftPanelShadow">
                                                        <div class="panel-heading">وسایل نقلیه</div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-xs-12">
                                                                    
                                                                    <form id="form-Vehicle">
                                                                        <span class="divider"></span>
                                                                        <?php foreach ($finance['Vehicle'] as $item) {
                                                                            if ($item['ForWho'] == 'Child') { ?>
                                                                                <div class="col-md-12 col-xs-12 padding-0 form">
                                                                                    
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputVehicleType">
                                                                                            نوع وسیله نقلیه<span
                                                                                                    class="text-danger"></span>
                                                                                        </label>
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputVehicleType"
                                                                                                id="inputVehicleType">
                                                                                            <?php foreach ($EnumResumeProfile['TypeOfVehicle'] as $key => $value) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['VehicleType'], $key); ?>
                                                                                                        value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputVehicleOwnershipDate">
                                                                                            سال شروع مالکیت<span
                                                                                                    class="text-danger"></span>
                                                                                        </label>
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputVehicleOwnershipDate"
                                                                                                id="inputVehicleOwnershipDate"
                                                                                                style="font-family: tahoma;">
                                                                                            <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['VehicleOwnershipDate'], $i); ?>
                                                                                                    <?php if ($i == 1398) echo "selected"; ?>
                                                                                                        value="<?php echo $i; ?>">
                                                                                                    <?php echo $i; ?>
                                                                                                </option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputVehicleOwnershipType">
                                                                                            نحوه مالکیت
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputVehicleOwnershipType"
                                                                                                id="inputVehicleOwnershipType">
                                                                                            <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                                                <option

                                                                                                    <?php setOptionSelected($item['VehicleOwnershipType'], $i); ?>
                                                                                                        value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputVehicleBuyTimePrice">
                                                                                            ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <div class="row">
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['VehicleBuyTimePrice'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputVehicleBuyTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputVehicleBuyTimePrice ">صد
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['VehicleBuyTimePrice'])['left']); ?>
                                                                                                        type="number"
                                                                                                        name="inputVehicleBuyTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputVehicleBuyTimePrice">هزار
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                <select class="form-control form-control-lg"
                                                                                                        name="inputVehicleBuyTimePrice"
                                                                                                        id="inputVehicleBuyTimePrice">
                                                                                                    <option value="0">انتخاب کنید ---</option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['VehicleBuyTimePrice'])['unit']) == "HZ") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="HZ"
                                                                                                            data-right-side="SD"
                                                                                                            value="HZ">هزار تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['VehicleBuyTimePrice'])['unit']) == "MI") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="MI"
                                                                                                            data-right-side="HZ"
                                                                                                            value="MI">میلیون تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['VehicleBuyTimePrice'])['unit']) == "ML") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="ML"
                                                                                                            data-right-side="MI"
                                                                                                            value="ML">میلیارد تومان
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputVehicleNowTimePrice">
                                                                                            ارزش حدودی کل سهام درحال حاضر :
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <div class="row">
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['VehicleNowTimePrice'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputVehicleNowTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputVehicleNowTimePrice ">صد
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['VehicleNowTimePrice'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputVehicleNowTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputVehicleNowTimePrice">هزار
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                <select class="form-control form-control-lg"
                                                                                                        name="inputVehicleNowTimePrice"
                                                                                                        id="inputVehicleNowTimePrice">
                                                                                                    <option value="0">انتخاب کنید ---</option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['VehicleNowTimePrice'])['unit']) == "HZ") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="HZ"
                                                                                                            data-right-side="SD"
                                                                                                            value="HZ">هزار تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['VehicleNowTimePrice'])['unit']) == "MI") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="MI"
                                                                                                            data-right-side="HZ"
                                                                                                            value="MI">میلیون تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['VehicleNowTimePrice'])['unit']) == "ML") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="ML"
                                                                                                            data-right-side="MI"
                                                                                                            value="ML">میلیارد تومان
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>


                                                                                    <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat clear-div">
                                                                                        <label for="inputVehiclePortion">
                                                                                            سهم از ملک(1 تا 6 دانگ)
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <input
                                                                                            <?php setInputValue($item['VehiclePortion']); ?>
                                                                                                type="number"
                                                                                                name="inputVehiclePortion"
                                                                                                id="inputVehiclePortion"
                                                                                                class="form-control"
                                                                                                placeholder="سهم از ملک 1 تا 6 دانگ"
                                                                                                min="0" max="6"/>
                                                                                    </div>
                                                                                </div>
                                                                            <?php }
                                                                        } ?>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End Vehicle -->
                                                <!--Invest -->
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="panel panel-default LeftPanelShadow">
                                                        <div class="panel-heading">سرمایه‌گذاری‌ها (سهام‌، اوراق بهادار، ...)</div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-xs-12">
                                                                    
                                                                    <form id="form-Invest">
                                                                        <span class="divider"></span>
                                                                        <?php foreach ($finance['Invest'] as $item) {
                                                                            if ($item['ForWho'] == 'Child') { ?>
                                                                                <div class="col-md-12 col-xs-12 padding-0 form">
                                                                                    
                                                                                    <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                                        <label for="inputInvestTitle">
                                                                                            نام شرکت / موسسه
                                                                                        </label>
                                                                                        <input
                                                                                            <?php setInputValue($item['InvestTitle']); ?>
                                                                                                id="inputInvestTitle" type="text"
                                                                                                name="inputInvestTitle"
                                                                                                placeholder="نام شرکت - موسسه - پروژه ">
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputInvestDate">
                                                                                            سال شروع مالکیت
                                                                                            <span class="text-danger">
                                             </span>
                                                                                        </label>
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputInvestDate"
                                                                                                id="inputInvestDate"
                                                                                                style="font-family: tahoma;">
                                                                                            <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['InvestDate'], $i); ?>
                                                                                                    <?php if ($i == 1398) echo "selected"; ?>
                                                                                                        value="<?php echo $i; ?>">
                                                                                                    <?php echo $i; ?>
                                                                                                </option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputInvestOwnershipType">
                                                                                            نحوه مالکیت
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputInvestOwnershipType"
                                                                                                id="inputInvestOwnershipType">
                                                                                            <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['InvestDate'], $key); ?>
                                                                                                        value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputInvestBuyTimePrice">
                                                                                            ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <div class="row">
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['InvestBuyTimePrice'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputInvestBuyTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputInvestBuyTimePrice ">صد
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['InvestBuyTimePrice'])['left']); ?>
                                                                                                        type="number"
                                                                                                        name="inputInvestBuyTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputInvestBuyTimePrice">هزار
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                <select class="form-control form-control-lg"
                                                                                                        name="inputInvestBuyTimePrice"
                                                                                                        id="inputInvestBuyTimePrice">
                                                                                                    <option value="0">انتخاب کنید ---</option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['InvestBuyTimePrice'])['unit']) == "HZ") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="HZ"
                                                                                                            data-right-side="SD"
                                                                                                            value="HZ">هزار تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['InvestBuyTimePrice'])['unit']) == "MI") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="MI"
                                                                                                            data-right-side="HZ"
                                                                                                            value="MI">میلیون تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['InvestBuyTimePrice'])['unit']) == "ML") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="ML"
                                                                                                            data-right-side="MI"
                                                                                                            value="ML">میلیارد تومان
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputInvestNowTimePrice">
                                                                                            ارزش حدودی کل سهام درحال حاضر :
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <div class="row">
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['InvestNowTimePrice'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputInvestNowTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputInvestNowTimePrice ">صد
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['InvestNowTimePrice'])['left']); ?>
                                                                                                        type="number"
                                                                                                        name="inputInvestNowTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputInvestNowTimePrice">هزار
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                <select class="form-control form-control-lg"
                                                                                                        name="inputInvestNowTimePrice"
                                                                                                        id="inputInvestNowTimePrice">
                                                                                                    <option value="0">انتخاب کنید ---</option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['InvestNowTimePrice'])['unit']) == "HZ") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="HZ"
                                                                                                            data-right-side="SD"
                                                                                                            value="HZ">هزار تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['InvestNowTimePrice'])['unit']) == "MI") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="MI"
                                                                                                            data-right-side="HZ"
                                                                                                            value="MI">میلیون تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['InvestNowTimePrice'])['unit']) == "ML") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="ML"
                                                                                                            data-right-side="MI"
                                                                                                            value="ML">میلیارد تومان
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            <?php }
                                                                        } ?>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End Invest -->
                                                <!--BankAccount -->
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="panel panel-default LeftPanelShadow">
                                                        <div class="panel-heading">حساب‌های جاری، پس‌انداز و سرمایه‌گذاری</div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-xs-12">
                                                                    
                                                                    <form id="form-BankAccount">
                                                                        <span class="divider"></span>
                                                                        <?php foreach ($finance['BankAccount'] as $item) {
                                                                            if ($item['ForWho'] == 'Child') { ?>
                                                                                <div class="col-md-12 col-xs-12 padding-0 form">
                                                                                    
                                                                                    <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                                        <label for="inputBankAccountTitle">
                                                                                            عنوان بانک یا موسسه
                                                                                        </label>
                                                                                        <input
                                                                                            <?php setInputValue($item['BankAccountTitle']); ?>
                                                                                                id="inputBankAccountTitle"
                                                                                                type="text"
                                                                                                name="inputBankAccountTitle"
                                                                                                placeholder="عنوان بانک یا موسسه ">
                                                                                    </div>
                                                                                    <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputBankAccountPrice">
                                                                                            مبلغ :
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <div class="row">
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                <input

                                                                                                    <?php setInputValue(splitPrice($item['BankAccountPrice'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputBankAccountPrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputBankAccountPrice ">صد
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                <input

                                                                                                    <?php setInputValue(splitPrice($item['BankAccountPrice'])['left']); ?>
                                                                                                        type="number"
                                                                                                        name="RealEstateBuyTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputBankAccountPrice">هزار
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                <select class="form-control form-control-lg"
                                                                                                        name="inputBankAccountPrice"
                                                                                                        id="inputBankAccountPrice">
                                                                                                    <option value="0">انتخاب کنید ---</option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['BankAccountPrice'])['unit']) == "HZ") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="HZ"
                                                                                                            data-right-side="SD"
                                                                                                            value="HZ">هزار تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['BankAccountPrice'])['unit']) == "MI") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="MI"
                                                                                                            data-right-side="HZ"
                                                                                                            value="MI">میلیون تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['BankAccountPrice'])['unit']) == "ML") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="ML"
                                                                                                            data-right-side="MI"
                                                                                                            value="ML">میلیارد تومان
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat">
                                                                                        <label for="inputBankAccountCountryId">کشور</label>
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputBankAccountCountryId"
                                                                                                id="inputBankAccountCountryId">
                                                                                            <option value="0">-- انتخاب کنید --
                                                                                            </option>
                                                                                            <?php foreach ($countries as $row) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['BankAccountCountryId'], $row['CountryId']); ?>
                                                                                                        value="<?php echo $row['CountryId']; ?>"><?php echo $row['FaName']; ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            <?php }
                                                                        } ?>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End BankAccount -->
                                                <!-- Debtor -->
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="panel panel-default LeftPanelShadow">
                                                        <div class="panel-heading">دیون و مطالبات</div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-xs-12">
                                                                    
                                                                    <form id="form-Credit-Debtor">
                                                                        <span class="divider"></span>
                                                                        <?php
                                                                        $creditDebtor['CreditPrice'] = "0.0 HZ";
                                                                        $creditDebtor['DebotrPrice'] = "0.0 HZ";
                                                                        $creditDebtor['DebotrDescription'] = "";
                                                                        foreach ($finance['CreditDebtor'] as $item) {
                                                                            if($item['ForWho'] == 'Child'){
                                                                                $creditDebtor = $item;
                                                                            }
                                                                        }
                                                                        ?>
                                                                        <div class="col-md-12 col-xs-12 padding-0 form">
                                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                <label for="inputCreditPrice">
                                                                                    جمع کل بستانکاری از اشخاص حقیقی یا حقوقی
                                                                                    :
                                                                                    <span class="text-danger"></span>
                                                                                </label>
                                                                                <div class="row">
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($creditDebtor['CreditPrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputCreditPrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputCreditPrice ">صد
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($creditDebtor['CreditPrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputCreditPrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputCreditPrice">هزار
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputCreditPrice"
                                                                                                id="inputCreditPrice">
                                                                                            <option value="0">انتخاب کنید ---</option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($creditDebtor['CreditPrice'])['unit']) == "HZ") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="HZ"
                                                                                                    data-right-side="SD"
                                                                                                    value="HZ">هزار تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($creditDebtor['CreditPrice'])['unit']) == "MI") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="MI"
                                                                                                    data-right-side="HZ"
                                                                                                    value="MI">میلیون تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($creditDebtor['CreditPrice'])['unit']) == "ML") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="ML"
                                                                                                    data-right-side="MI"
                                                                                                    value="ML">میلیارد تومان
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                <label for="inputDebotrPrice">
                                                                                    جمع کل بدهکاری از اشخاص حقیقی یا حقوقی :
                                                                                    <span class="text-danger"></span>
                                                                                </label>
                                                                                <div class="row">
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($creditDebtor['DebotrPrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputDebotrPrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputDebotrPrice ">صد
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($creditDebtor['DebotrPrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputDebotrPrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputDebotrPrice">هزار
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputDebotrPrice"
                                                                                                id="inputDebotrPrice">
                                                                                            <option value="0">انتخاب کنید ---</option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($creditDebtor['DebotrPrice'])['unit']) == "HZ") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="HZ"
                                                                                                    data-right-side="SD"
                                                                                                    value="HZ">هزار تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($creditDebtor['DebotrPrice'])['unit']) == "MI") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="MI"
                                                                                                    data-right-side="HZ"
                                                                                                    value="MI">میلیون تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($creditDebtor['DebotrPrice'])['unit']) == "ML") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="ML"
                                                                                                    data-right-side="MI"
                                                                                                    value="ML">میلیارد تومان
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <textarea class="EStates-textArea"
                                                                                          name="inputDebotrDescription"><?php echo $creditDebtor['DebotrDescription']; ?></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End Debtor -->
                                                <!--Goods -->
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="panel panel-default LeftPanelShadow">
                                                        <div class="panel-heading">کلیه کالاهای فاقد سند مالکیت رسمی</div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-xs-12">
                                                                    
                                                                    <form id="form-Goods">
                                                                        <span class="divider"></span>
                                                                        <?php foreach ($finance['Goods'] as $item) {
                                                                            if ($item['ForWho'] == 'Child') { ?>
                                                                                <div class="col-md-12 col-xs-12 padding-0 form">
                                                                                    
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputGoodsType">
                                                                                            نوع کالا
                                                                                        </label>
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputGoodsType"
                                                                                                id="inputGoodsType">
                                                                                            <?php foreach ($EnumResumeProfile['GoodsType'] as $key => $value) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['GoodsType'], $key); ?>
                                                                                                        value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputGoodsOwnershipStartDate">
                                                                                            سال شروع مالکیت
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputGoodsOwnershipStartDate"
                                                                                                id="inputGoodsOwnershipStartDate"
                                                                                                style="font-family: tahoma;">
                                                                                            <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['GoodsOwnershipStartDate'], $i); ?>
                                                                                                        value="<?php echo $i; ?>">
                                                                                                    <?php echo $i; ?>
                                                                                                </option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputGoodsCount">
                                                                                            حجم / وزن / تعداد کالا
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <input
                                                                                            <?php setInputValue($item['GoodsCount']); ?>
                                                                                                type="text" name="inputGoodsCount"
                                                                                                id="inputGoodsCount"
                                                                                                class="form-control"
                                                                                                placeholder="  حجم / وزن / تعداد کالا"/>
                                                                                    </div>
                                                                                    <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputGoodsBuyTimePrice">
                                                                                            ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <div class="row">
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['GoodsBuyTimePrice'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputGoodsBuyTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputGoodsBuyTimePrice ">صد
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['GoodsBuyTimePrice'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputGoodsBuyTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputGoodsBuyTimePrice">هزار
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                <select class="form-control form-control-lg"
                                                                                                        name="inputGoodsBuyTimePrice"
                                                                                                        id="inputGoodsBuyTimePrice">
                                                                                                    <option value="0">انتخاب کنید ---</option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['GoodsBuyTimePrice'])['unit']) == "HZ") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="HZ"
                                                                                                            data-right-side="SD"
                                                                                                            value="HZ">هزار تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['GoodsBuyTimePrice'])['unit']) == "MI") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="MI"
                                                                                                            data-right-side="HZ"
                                                                                                            value="MI">میلیون تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['GoodsBuyTimePrice'])['unit']) == "ML") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="ML"
                                                                                                            data-right-side="MI"
                                                                                                            value="ML">میلیارد تومان
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputGoodsNowTimePrice">
                                                                                            ارزش حدودی کل سهام درحال حاضر :
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <div class="row">
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['GoodsNowTimePrice'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputGoodsNowTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputGoodsNowTimePrice ">صد
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['GoodsNowTimePrice'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputGoodsNowTimePrice"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputGoodsNowTimePrice">هزار
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                <select class="form-control form-control-lg"
                                                                                                        name="inputGoodsNowTimePrice"
                                                                                                        id="inputGoodsNowTimePrice">
                                                                                                    <option value="0">انتخاب کنید ---</option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['GoodsNowTimePrice'])['unit']) == "HZ") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="HZ"
                                                                                                            data-right-side="SD"
                                                                                                            value="HZ">هزار تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['GoodsNowTimePrice'])['unit']) == "MI") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="MI"
                                                                                                            data-right-side="HZ"
                                                                                                            value="MI">میلیون تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['GoodsNowTimePrice'])['unit']) == "ML") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="ML"
                                                                                                            data-right-side="MI"
                                                                                                            value="ML">میلیارد تومان
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputGoodsOwnershipPercent">
                                                                                            درصد سهم از مالکیت :
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <input
                                                                                            <?php setInputValue($item['GoodsOwnershipPercent']); ?>
                                                                                                type="number"
                                                                                                name="inputGoodsOwnershipPercent"
                                                                                                id="inputGoodsOwnershipPercent"
                                                                                                class="form-control"
                                                                                                placeholder="سهم از ملک 1 تا 6 دانگ"
                                                                                                min="0" max="6"/>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputRealEstateOwnershipType">
                                                                                            نحوه مالکیت
                                                                                            <span class="text-danger">
                                             </span>
                                                                                        </label>
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputRealEstateOwnershipType"
                                                                                                id="inputRealEstateOwnershipType">
                                                                                            <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['RealEstateOwnershipType'], $key); ?>
                                                                                                        value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            <?php }
                                                                        } ?>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End Goods -->
                                                <!--Fee -->
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="panel panel-default LeftPanelShadow">
                                                        <div class="panel-heading">حقوق مالکیت معنوی</div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-xs-12">
                                                                    
                                                                    <form id="form-Fee">
                                                                        <span class="divider"></span>
                                                                        <?php foreach ($finance['Fee'] as $item) {
                                                                            if ($item['ForWho'] == 'Child') { ?>
                                                                                <div class="col-md-12 col-xs-12 padding-0 form">
                                                                                    
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputFeeType">عنوان :</label>
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputFeeType"
                                                                                                id="inputFeeType">
                                                                                            <?php foreach ($EnumResumeProfile['FeeType'] as $key => $value) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['FeeType'], $key); ?>
                                                                                                        value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputFeeOwnershipStartDate">
                                                                                            سال شروع مالکیت
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputFeeOwnershipStartDate"
                                                                                                id="inputFeeOwnershipStartDate"
                                                                                                style="font-family: tahoma;">
                                                                                            <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                                <option
                                                                                                    <?php setOptionSelected($item['FeeOwnershipStartDate'], $i); ?>
                                                                                                        value="<?php echo $i; ?>">
                                                                                                    <?php echo $i; ?>
                                                                                                </option>
                                                                                            <?php } ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputFeePercent">
                                                                                            درصد سهم از مالکیت معنوی:
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <input
                                                                                            <?php setInputValue($item['FeePercent']); ?>
                                                                                                type="number" name="inputFeePercent"
                                                                                                id="inputFeePercent"
                                                                                                class="form-control"
                                                                                                placeholder="سهم از ملک 1 تا 6 دانگ"/>
                                                                                    </div>
                                                                                    <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                        <label for="inputFeeAverageInYear">
                                                                                            میزان درآمد متوسط سالیانه از مالکیت
                                                                                            معنوی :
                                                                                            <span class="text-danger"></span>
                                                                                        </label>
                                                                                        <div class="row">
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['FeeAverageInYear'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputFeeAverageInYear"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputFeeAverageInYear ">صد
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                                <input
                                                                                                    <?php setInputValue(splitPrice($item['FeeAverageInYear'])['right']); ?>
                                                                                                        type="number"
                                                                                                        name="inputFeeAverageInYear"
                                                                                                        class="form-control"
                                                                                                        placeholder=""
                                                                                                        min="0"/>
                                                                                                <label for="inputFeeAverageInYear">هزار
                                                                                                    تومان</label>
                                                                                            </div>
                                                                                            <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                                <select class="form-control form-control-lg"
                                                                                                        name="inputFeeAverageInYear"
                                                                                                        id="inputFeeAverageInYear">
                                                                                                    <option value="0">انتخاب کنید ---</option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['FeeAverageInYear'])['unit']) == "HZ") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="HZ"
                                                                                                            data-right-side="SD"
                                                                                                            value="HZ">هزار تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['FeeAverageInYear'])['unit']) == "MI") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="MI"
                                                                                                            data-right-side="HZ"
                                                                                                            value="MI">میلیون تومان
                                                                                                    </option>
                                                                                                    <option
                                                                                                        <?php
                                                                                                        if ((splitPrice($item['FeeAverageInYear'])['unit']) == "ML") {
                                                                                                            echo "selected";
                                                                                                        }
                                                                                                        ?>
                                                                                                            data-left-side="ML"
                                                                                                            data-right-side="MI"
                                                                                                            value="ML">میلیارد تومان
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            <?php }
                                                                        } ?>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End Fee -->
                                                <!--AverageMonthIncome -->
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="panel panel-default LeftPanelShadow">
                                                        <div class="panel-heading">در آمد</div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-xs-12">
                                                                    
                                                                    <form id="form-AverageMonthIncome">
                                                                        <span class="divider"></span>
                                                                        <div class="col-md-12 col-xs-12 padding-0 form">
                                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                <?php
                                                                                $income['AverageMonthIncome'] = "0.0 HZ";
                                                                                foreach ($finance['Income'] as $item) {
                                                                                    if($item['ForWho'] == 'Child'){
                                                                                        $income = $item;
                                                                                    }
                                                                                }
                                                                                ?>
                                                                                <label for="inputAverageMonthIncome">
                                                                                    درآمد متوسط ماهیانه :
                                                                                    <span class="text-danger"></span>
                                                                                </label>
                                                                                <div class="row">
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($income['AverageMonthIncome'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputAverageMonthIncome"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputAverageMonthIncome ">صد
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($income['AverageMonthIncome'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputAverageMonthIncome"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputAverageMonthIncome">هزار
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputAverageMonthIncome"
                                                                                                id="inputAverageMonthIncome">
                                                                                            <option value="0">انتخاب کنید ---</option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($income['AverageMonthIncome'])['unit']) == "HZ") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="HZ"
                                                                                                    data-right-side="SD"
                                                                                                    value="HZ">هزار تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($income['AverageMonthIncome'])['unit']) == "MI") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="MI"
                                                                                                    data-right-side="HZ"
                                                                                                    value="MI">میلیون تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($income['AverageMonthIncome'])['unit']) == "ML") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="ML"
                                                                                                    data-right-side="MI"
                                                                                                    value="ML">میلیارد تومان
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End AverageMonthIncome -->
                                                <!-- ElectionPlacePrice -->
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="panel panel-default LeftPanelShadow">
                                                        <div class="panel-heading">شفاف سازی هزینه های انتخاباتی</div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-xs-12">
                                                                    
                                                                    <form id="form-Election">
                                                                        <span class="divider"></span>
                                                                        <?php
                                                                        $election['ElectionPlacePrice'] = "0.0 HZ";
                                                                        $election['ElectionFlockPrice'] = "0.0 HZ";
                                                                        $election['ElectionAdvertisePrice'] = "0.0 HZ";
                                                                        $election['ElectionStaffPrice'] = "0.0 HZ";
                                                                        $election['ElectionAllPrice'] = "0.0 HZ";
                                                                        foreach ($finance['Election'] as $item) {
                                                                            if($item['ForWho'] == 'Child'){
                                                                                $election = $item;
                                                                            }
                                                                        }
                                                                        ?>
                                                                        <div class="col-md-12 col-xs-12 padding-0 form">
                                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                <label for="inputElectionPlacePrice">
                                                                                    هزینه دایرکردن محل ستاد انتخابات (اجاره بها ,
                                                                                    حملو نقل و سایر موارد)
                                                                                    -هزینه کل :
                                                                                    <span class="text-danger"></span>
                                                                                </label>
                                                                                <div class="row">
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($election['ElectionPlacePrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputElectionPlacePrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0" max="6"/>
                                                                                        <label for="inputElectionPlacePrice ">صد
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($election['ElectionPlacePrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputElectionPlacePrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0" max="6"/>
                                                                                        <label for="inputElectionPlacePrice">هزار
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputElectionPlacePrice"
                                                                                                id="inputElectionPlacePrice">
                                                                                            <option value="0">انتخاب کنید ---</option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionPlacePrice'])['unit']) == "HZ") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="HZ"
                                                                                                    data-right-side="SD"
                                                                                                    value="HZ">هزار تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionPlacePrice'])['unit']) == "MI") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="MI"
                                                                                                    data-right-side="HZ"
                                                                                                    value="MI">میلیون تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionPlacePrice'])['unit']) == "ML") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="ML"
                                                                                                    data-right-side="MI"
                                                                                                    value="ML">میلیارد تومان
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                <label for="inputElectionFlockPrice">
                                                                                    هزینه برپایی تجمعات عمومی مرتبط با اهداف
                                                                                    انتخاباتی – هزینه کل :
                                                                                    <span class="text-danger"></span>
                                                                                </label>
                                                                                <div class="row">
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($election['ElectionFlockPrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputElectionFlockPrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputElectionFlockPrice ">صد
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($election['ElectionFlockPrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputElectionFlockPrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputElectionFlockPrice">هزار
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputElectionFlockPrice"
                                                                                                id="inputElectionFlockPrice">
                                                                                            <option value="0">انتخاب کنید ---</option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionFlockPrice'])['unit']) == "HZ") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="HZ"
                                                                                                    data-right-side="SD"
                                                                                                    value="HZ">هزار تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionFlockPrice'])['unit']) == "MI") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="MI"
                                                                                                    data-right-side="HZ"
                                                                                                    value="MI">میلیون تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionFlockPrice'])['unit']) == "ML") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="ML"
                                                                                                    data-right-side="MI"
                                                                                                    value="ML">میلیارد تومان
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                <label for="inputElectionAdvertisePrice">
                                                                                    هزینه تبلیغات مجاز در رسانه ها – هزینه کل :
                                                                                    <span class="text-danger"></span>
                                                                                </label>
                                                                                <div class="row">
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($election['ElectionAdvertisePrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputElectionAdvertisePrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputElectionAdvertisePrice ">صد
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($election['ElectionAdvertisePrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputElectionAdvertisePrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputElectionAdvertisePrice">هزار
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputElectionAdvertisePrice"
                                                                                                id="inputElectionAdvertisePrice">
                                                                                            <option value="0">انتخاب کنید ---</option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionAdvertisePrice'])['unit']) == "HZ") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="HZ"
                                                                                                    data-right-side="SD"
                                                                                                    value="HZ">هزار تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionAdvertisePrice'])['unit']) == "MI") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="MI"
                                                                                                    data-right-side="HZ"
                                                                                                    value="MI">میلیون تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionAdvertisePrice'])['unit']) == "ML") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="ML"
                                                                                                    data-right-side="MI"
                                                                                                    value="ML">میلیارد تومان
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                <label for="inputElectionStaffPrice">
                                                                                    هزینه و حق الزحمه عوامل اجرایی و کارشناسی در
                                                                                    انتخابات – هزینه کل :
                                                                                    <span class="text-danger"></span>
                                                                                </label>
                                                                                <div class="row">
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($election['ElectionStaffPrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputElectionStaffPrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputElectionStaffPrice ">صد
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($election['ElectionStaffPrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputElectionStaffPrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputElectionStaffPrice">هزار
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputElectionStaffPrice"
                                                                                                id="inputElectionStaffPrice">
                                                                                            <option value="0">انتخاب کنید ---</option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionStaffPrice'])['unit']) == "HZ") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="HZ"
                                                                                                    data-right-side="SD"
                                                                                                    value="HZ">هزار تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionStaffPrice'])['unit']) == "MI") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="MI"
                                                                                                    data-right-side="HZ"
                                                                                                    value="MI">میلیون تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionStaffPrice'])['unit']) == "ML") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="ML"
                                                                                                    data-right-side="MI"
                                                                                                    value="ML">میلیارد تومان
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                <label for="inputElectionAllPrice">
                                                                                    جمع کل هزینه های انتخاباتی :
                                                                                    <span class="text-danger"></span>
                                                                                </label>
                                                                                <div class="row">
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($election['ElectionAllPrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputElectionAllPrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputElectionAllPrice ">صد
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                        <input
                                                                                            <?php setInputValue(splitPrice($election['ElectionAllPrice'])['right']); ?>
                                                                                                type="number"
                                                                                                name="inputElectionAllPrice"
                                                                                                class="form-control"
                                                                                                placeholder=""
                                                                                                min="0"/>
                                                                                        <label for="inputElectionAllPrice">هزار
                                                                                            تومان</label>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                        <select class="form-control form-control-lg"
                                                                                                name="inputElectionAllPrice"
                                                                                                id="inputElectionAllPrice">
                                                                                            <option value="0">انتخاب کنید ---</option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionAllPrice'])['unit']) == "HZ") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="HZ"
                                                                                                    data-right-side="SD"
                                                                                                    value="HZ">هزار تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionAllPrice'])['unit']) == "MI") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="MI"
                                                                                                    data-right-side="HZ"
                                                                                                    value="MI">میلیون تومان
                                                                                            </option>
                                                                                            <option
                                                                                                <?php
                                                                                                if ((splitPrice($election['ElectionAllPrice'])['unit']) == "ML") {
                                                                                                    echo "selected";
                                                                                                }
                                                                                                ?>
                                                                                                    data-left-side="ML"
                                                                                                    data-right-side="MI"
                                                                                                    value="ML">میلیارد تومان
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End ElectionPlacePrice -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Report Abuse -->
            <div class="panel left-candidate-panel-resume padding-0">
                <div class="panel-heading left-candidate-panel-resume col-md-12 col-xs-12 padding-0">
                    <div class="have-border-bottom">
                        <h3>گزارش تخلف</h3>
                        <h5>
                            در صورت مشاهده هر گونه مغایرت لطفا از طریق فرم زیر گزارش دهید
                        </h5>
                    </div>
                </div>
                <div class="panel-body">
                    <input type="hidden" id="inputReportCandidateId" name="inputReportCandidateId"
                       value="<?php echo $candidate['CandidateId']; ?>"/>
                    <input type="hidden" id="inputCSRF" name="inputCSRF" value="<?= $CSRF; ?>"/>
                    <div class="row col-xs-12 col-md-12 pull-right">
                        <div class="form-group col-xs-12 col-md-4 pull-right">
                            <label for="inputReportFullName">نام و نام خانوادگی</label>
                            <input class="form-control" type="text" id="inputReportFullName"
                                   name="inputReportFullName" autofocus/>
                        </div>
                        <div class="form-group col-xs-12 col-md-4 pull-right">
                            <label for="inputReportTitle">عنوان</label>
                            <input class="form-control" type="text" id="inputReportTitle" name="inputReportTitle"/>
                        </div>
                        <div class="form-group col-xs-12 col-md-4 pull-right">
                            <label for="inputReportPhone">تلفن همراه (نزد ما محفوظ خواهد ماند)</label>
                            <input class="form-control" type="text" id="inputReportPhone" name="inputReportPhone"/>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="inputReportContent">پیام</label>
                            <textarea class="form-control" rows="6" id="inputReportContent"
                                      name="inputReportContent"></textarea>
                        </div>
                        <div class="row col-xs-12 form-group">
                            <div class="row col-xs-12">
                                <label>کد امنیتی</label>
                            </div>
                            <div class="pull-right">
                                <img class="captcha_img"
                                     style="margin: 10px 5px;border: 2px solid #ccc;"
                                     src="<?php echo base_url('GetCaptcha'); ?>"/>
                            </div>
                            <div class="pull-right">
                                <input type="text"
                                       style="position: relative;top:20px;"
                                       name="inputCaptcha" id="inputCaptcha" class="form-control"
                                       placeholder="کد امنیتی" >
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger pull-left submit-form" id="submitReportForm">
                                ارسال
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>