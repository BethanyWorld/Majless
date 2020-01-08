<?php $_DIR = base_url('assets/ui/v3/'); ?>
<div class="page-caption">
    نامزد انتخاباتی استان
    <?php echo urldecode($stateName); ?>
</div>
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
            <div class="col-xs-12">
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
                                مهارت:
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