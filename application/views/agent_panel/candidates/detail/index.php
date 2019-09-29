<?php $_DIR = base_url('assets/empanel/'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <div class="body table-responsive">
                        <?php echo candidateStatus($candidateInfo['CandidateStatus']); ?>
                        <table class="table table-bordered table-condensed table-hover">
                            <thead>
                            <tr>
                                <th>نام و نام خانوداگی</th>
                                <th class="fit">کد ملی</th>
                                <th class="fit">تلفن</th>
                                <th class="fit">حوزه انتخاباتی</th>
                                <th class="fit">استان</th>
                                <th class="fit">شهر</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th><?php echo $candidateInfo['CandidateFirstName'] . " " . $candidateInfo['CandidateLastName']; ?></th>
                                <th class="fit"><?php echo $candidateInfo['CandidateNationalCode']; ?></th>
                                <th class="fit"><?php echo $candidateInfo['CandidatePhone']; ?></th>
                                <th class="fit"><?php echo $candidateInfo['ElectionName']; ?></th>
                                <th class="fit"><?php echo $candidateInfo['StateName']; ?></th>
                                <th class="fit"><?php echo $candidateInfo['CityName']; ?></th>
                            </tr>
                            </tbody>
                        </table>
                        <hr>
                        <?php if ($candidateInfo['CandidateStatus'] == 'CandidateResumeMarked') { ?>
                            <div class="col-xs-12 alert alert-warning">
                                <strong>
                                    شما قبلا یکبار برای این نامزد انتخاباتی نمره ثبت کرده اید
                                </strong>
                            </div>
                        <?php } ?>
                        <div class="col-xs-12 col-sm-4">

                            <div class="form-group">
                                <label>تخصیص نمره نامزد انتخاباتی - این نمره قابل تغییر است</label>
                                <input
                                        value="<?php echo $candidateInfo['CandidateId']; ?>"
                                        type="hidden" class="form-control"
                                        name="inputCandidateId" id="inputCandidateId"/>
                                <input
                                        placeholder="مثال 18"
                                        value="<?php echo $candidateInfo['CandidateScore']; ?>"
                                        type="text"
                                        class="form-control"
                                        name="inputCandidateMark"
                                        id="inputCandidateMark"/>
                                <br>
                                <button type="button" id="editCandidateMark" class="btn btn-primary waves-effect">
                                    ذخیره
                                </button>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
