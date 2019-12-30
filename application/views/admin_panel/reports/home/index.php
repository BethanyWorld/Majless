<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-9 col-xs-12 p-l-0">

                <div class="col-xs-12">
                    <div class="card rtl">
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                            <tr class="bg-info">
                                <th class="text-center" colspan="5">آخرین نامزد های انتخاباتی</th>
                            </tr>
                            <tr>
                                <th>نام و نام خانوداگی</th>
                                <th class="fit">کد ملی</th>
                                <th class="fit">امتیاز</th>
                                <th class="fit">وضعیت</th>
                                <th class="fit">جزئیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($latestCandidates as $candidate) { ?>
                                <tr>
                                    <td><?php echo $candidate['CandidateFirstName'] . " " . $candidate['CandidateLastName']; ?></td>
                                    <td class="fit"><?php echo $candidate['CandidateNationalCode']; ?></td>
                                    <td class="fit"><?php echo $candidate['CandidateScore']; ?></td>
                                    <td class="fit"><?php echo candidateStatus($candidate['CandidateStatus']); ?></td>
                                    <td class="fit">
                                        <a href="<?php echo base_url('Admin/Candidate/edit/') . $candidate['CandidateId']; ?>">
                                            <button type="button"
                                                    class="btn btn-info btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">rate_review</i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="5">
                                    <a class="btn btn-primary" href="<?php echo base_url('Admin/Candidate/index'); ?>">
                                        مشاهده همه
                                    </a>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="card rtl">
                        <table class="table table-bordered table-striped table-condensed table-hover">
                            <thead>
                            <tr>
                                <th class="fit text-center">ردیف</th>
                                <th>استان</th>
                                <th class="fit text-center">تعداد ثبت نام</th>
                                <th class="fit text-center">تعداد نامزد</th>
                                <th class="fit text-center">تعداد نخبه</th>
                                <th class="fit text-center">تعداد حامی</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $index = 1;
                            foreach ($report['StateCandidatesCount'] as $item) { ?>
                                <tr>
                                    <td class="text-center"><?php echo $index++; ?></td>
                                    <td><?php echo $item['StateName']; ?></td>
                                    <td class="text-center"><label><?php echo $item['candidateCount']; ?></label></td>
                                    <td class="text-center"><label><?php echo $item['RoleCandidateCount']; ?></label></td>
                                    <td class="text-center"><label><?php echo $item['RoleEliteCount']; ?></label></td>
                                    <td class="text-center"><label><?php echo $item['RoleSponsorCount']; ?></label></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 p-r-0">
                <div class="col-xs-12">
                    <div class="card">
                        <div class="header text-center hidden"><h2>نوع کاربران</h2></div>
                        <div class="body" style="padding: 0;">
                            <div id="donut_chart" class="graph"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="info-box hover-zoom-effect">
                        <div class="icon bg-pink">
                            <i class="material-icons">account_circle</i>
                        </div>
                        <div class="content">
                            <div class="text">کل کاربران</div>
                            <div class="number">
                                <?php echo $report['CandidatesCount']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="info-box hover-zoom-effect">
                        <div class="icon bg-pink">
                            <i class="material-icons">perm_identity</i>
                        </div>
                        <div class="content">
                            <div class="text">تعداد آقایان</div>
                            <div class="number">
                                <?php echo $report['GenderCount']['MaleCount']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="info-box hover-zoom-effect">
                        <div class="icon bg-pink">
                            <i class="material-icons">face</i>
                        </div>
                        <div class="content">
                            <div class="text">تعداد خانم ها</div>
                            <div class="number">
                                <?php echo $report['GenderCount']['FemaleCount']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="info-box hover-zoom-effect">
                        <div class="icon bg-pink">
                            <i class="material-icons">face</i>
                        </div>
                        <div class="content">
                            <div class="text">ثبت نام امروز</div>
                            <div class="number">
                                <?php echo $report['todaySignUpCount']; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="info-box-4">
                        <div class="icon">
                            <i class="material-icons col-indigo">report</i>
                        </div>
                        <div class="content">
                            <div class="text">گزارش تخلف</div>
                            <div class="number">
                                <?php echo $report['ReportAbusesCount']; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="info-box-4">
                        <div class="icon">
                            <i class="material-icons col-purple">bookmark</i>
                        </div>
                        <div class="content">
                            <div class="text">آزمون ها</div>
                            <div class="number">
                                <?php echo $report['ExamsCount']; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="info-box-4">
                        <div class="icon">
                            <i class="material-icons col-deep-purple">favorite</i>
                        </div>
                        <div class="content">
                            <div class="text">ثبت نام کنندگان آزمون</div>
                            <div class="number">
                                <?php echo $report['ExamRequestsCount']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>