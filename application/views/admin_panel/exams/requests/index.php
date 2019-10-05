<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <div class="body">
                        <div class="col-xs-12 table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>محل آزمون</th>
                                    <th class="fit">تاریخ برگزاری</th>
                                    <th class="fit">ظرفیت پیش فرض</th>
                                </tr>
                                </thead>
                                <tbody class="table-rows">
                                    <tr>
                                        <td><?php echo $examData['ExamPlaceTitle']; ?></td>
                                        <td class="fit"><?php echo $examData['ExamDate']." ".$examData['ExamTime']; ?></td>
                                        <td class="fit"><?php echo $examData['ExamPlaceDefaultCapacity']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row col-xs-12 card">
                    <div class="body">
                        <div class="col-xs-12 table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="fit">#</th>
                                    <th>نام و نام خانوادگی</th>
                                    <th class="fit">کد ملی</th>
                                    <th class="fit">تلفن همراه</th>
                                    <th class="fit">وضعیت آزمون
                                    <th class="fit">نوع آزمون</th>
                                    <th class="fit">رد آزمون کانون</th>
                                    <th class="fit">تایید آزمون و انتشار روی سایت</th>
                                </tr>
                                </thead>
                                <tbody class="table-rows">
                                <span class="btn btn-info table-row-count"><?php echo $candidates['count']; ?></span>
                                <?php
                                if ((isset($candidates) && !$candidates) || $candidates == NULL) { ?>
                                    <tr class="warning">
                                        <td colspan="8">موردی یافت نشد</td>
                                    </tr>
                                <?php } else {
                                    $counter = 1;
                                    foreach ($candidates['data'] as $item) { ?>
                                        <tr>
                                            <td class="fit"><?php echo $counter++; ?></td>
                                            <td><?php echo $item['CandidateFirstName'] . " " . $item['CandidateLastName']; ?></td>
                                            <td><?php echo $item['CandidateNationalCode']; ?></td>
                                            <th class="fit"><?php echo $item['CandidatePhone']; ?></th>
                                            <th class="fit"><?php echo candidateExamStatus($item['ExamState']); ?></th>
                                            <th class="fit"><?php echo examType($examData['ExamType']); ?></th>
                                            <?php if($examData['ExamType'] == 'Evaluation'){ ?>
                                            <td class="fit">
                                                <a class="reject-exam"
                                                   data-id="<?php echo $item['RequestId']; ?>"
                                                   data-title="<?php echo $item['CandidateFirstName'] . " " . $item['CandidateLastName']; ?>">
                                                    <button type="button"
                                                            class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                </a>
                                            </td>
                                            <td class="fit">
                                                <a class="accept-exam"
                                                   data-id="<?php echo $item['RequestId']; ?>"
                                                   data-title="<?php echo $item['CandidateFirstName'] . " " . $item['CandidateLastName']; ?>">
                                                    <button type="button"
                                                            class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                                                        <i class="material-icons">check</i>
                                                    </button>
                                                </a>
                                            </td>
                                            <?php } ?>
                                        </tr>
                                    <?php }
                                } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
