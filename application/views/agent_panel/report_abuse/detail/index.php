<?php $_DIR = base_url('assets/empanel/'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <div class="body">
                        <table>
                            <thead>
                            <tr>
                                <th>نام و نام خانوداگی</th>
                                <th>عنوان</th>
                                <th>تاریخ ثبت</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <input type="hidden"
                                       value="<?php echo $reportAbuse['ReportId']; ?>"
                                       id="inputContactRowId" name="inputContactRowId"/>
                                <td><?php echo $reportAbuse['ReportFullName']; ?></td>
                                <td><?php echo $reportAbuse['ReportTitle']; ?></td>
                                <td><?php echo formatDate($reportAbuse['CreateDateTime']); ?></td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="content col-xs-12">
                            <?php echo nl2br($reportAbuse['ReportContent']); ?>
                        </div>

                        <div class="row  content col-xs-12">
                            <h4>مرتبط با نماینده استان</h4>
                            <ul class="list-group" style="padding: 0;">
                                <li class="list-group-item">
                                    استان:
                                    <?php echo $reportAbuse['StateName']; ?>
                                </li>
                                <li class="list-group-item">
                                    شهر:
                                    <?php echo $reportAbuse['CityName']; ?>
                                </li>
                                <li class="list-group-item">
                                    کد ملی:
                                    <?php echo $reportAbuse['CandidateNationalCode']; ?>
                                </li>
                            </ul>
                        </div>

                        <div class="row col-xs-12">&nbsp;</div>
                        <div class="content row col-xs-12">
                            <button type="button" id="changeReportAbuseVisitToVisited"
                                    class="btn btn-primary waves-effect">ذخیره به عنوان مشاهده شده
                            </button>
                            <button type="button" id="changeReportAbuseVisitToUnVisited"
                                    class="btn btn-danger waves-effect">ذخیره به عنوان مشاهده نشده
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
