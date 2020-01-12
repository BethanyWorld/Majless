<?php $_DIR = base_url('assets/empanel/'); ?>

<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="col-xs-12 col-sm-3" style="padding-right: 0;">
                    <div class="card profile-card">
                        <div class="profile-header">&nbsp;</div>
                        <div class="profile-body">
                            <div class="image-area">
                                <img class="profile-image"
                                     src="<?php echo $candidate['CandidateProfileImage']; ?>"
                                     style="width: 90%;max-width: 145px;"/>
                            </div>
                            <input type="hidden" name="inputCandidateId" id="inputCandidateId"
                                   value="<?php echo $candidate['CandidateId']; ?>"/>

                            <div class="content-area">
                                <h4>
                                    <?php echo $candidate['CandidateFirstName'] . " " . $candidate['CandidateLastName']; ?>
                                </h4>
                                <h5>
                                    <span class="office-location">
                                        <?php echo candidateStatus($candidate['CandidateStatus']); ?>
                                    </span>
                                </h5>
                                <h5>
                                    <a href="<?php echo base_url('Admin/Candidate/printResume/') . $candidate['CandidateId']; ?>">
                                        <span class="office-location">
                                            پرینت رزومه
                                        </span>
                                    </a>
                                </h5>
                            </div>
                        </div>
                        <div class="profile-footer text-center">
                            <ul class="personal-info-container">
                                <li>
                                    <span>تلفن</span>:
                                    <span><?php echo $candidate['CandidatePhone']; ?></span>
                                </li>
                                <li>
                                    <span>کد ملی</span>:
                                    <span><?php echo $candidate['CandidateNationalCode']; ?></span>
                                </li>
                                <li>
                                    <span>نمره رزومه</span>:
                                    <span><?php echo $candidate['CandidateScore']; ?></span>
                                </li>
                                <li>
                                    <span>استان</span>:
                                    <span><?php echo $candidate['StateName']; ?></span>
                                </li>
                                <li>
                                    <span>شهر</span>:
                                    <span><?php echo $candidate['CityName']; ?></span>
                                </li>
                                <li>
                                    <span>تاریخ تولد</span>:
                                    <span class="info-birthDate">
                                        <?php echo $candidate['CandidateBirthDate']; ?>
                                    </span>
                                </li>
                                <li>
                                    <span>نام پدر</span>:
                                    <span class="info-fatherName">
                                        <?php echo $candidate['CandidateFatherName']; ?>
                                    </span>
                                </li>
                                <li>
                                    <span>جنسیت</span>:
                                    <span class="info-gender">
                                        <?php genderPipe($candidate['CandidateGender']); ?>
                                    </span>
                                </li>
                                <li>
                                    <span>وضعیت تاهل</span>:
                                    <span class="info-maritalStatus">
                                        <?php echo maritalStatusPipe($candidate['CandidateMaritalStatus']); ?>
                                    </span>
                                </li>
                                <li>
                                    <span>دین</span>:
                                    <span class="info-religion">
                                        <?php echo religionPipe($candidate['CandidateReligion']); ?>
                                    </span>
                                </li>
                            </ul>
                        </div>

                        <h5 style="display: inline-block;width: 100%;padding: 15px 0;"
                            class="col-xs-12 label label-success text-center">آخرین فعالیت ها</h5>
                        <hr>
                        <ul class="list-group" style="padding: 0;display: inline-block;width: 100%;">
                            <?php foreach ($loginHistory as $item) { ?>
                                <li class="list-group-item" style="direction: ltr;">
                                    <?php echo $item['LoginDate']; ?>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-9" style="padding-left: 0;">
                    <div class="card">
                        <div class="alert alert-warning">
                            رتبه های مورد نظر را انتخاب کرده و ذخیره را بزنید
                        </div>
                    </div>
                    <div class="card">
                        <table class="table table-responsive" >
                            <thead>
                            <tr >
                                <th>نوع نشان</th>
                                <th class="td-c fit">تخصیص</th>
                                <th class="td-c fit">حذف</th>
                            </tr>

                            </thead>
                            <tbody>
                            <tr>
                                <td>نشان شایستگی طلایی</td>
                                <td class="td-c fit" ><button data-action-type="GoldenMerit" class="btn btn-success btn-circle Assignment"><i class="material-icons">grade</i></td>
                                <td  class="td-c fit"><button data-action-type="GoldenMerit" class="btn btn-danger btn-circle Delete"><i class="material-icons">clear</i></td>
                            </tr>
                            <tr>
                                <td>نشان شایستگی نقره ای</td>
                                <td class="td-c fit "><button data-action-type="SilverMerit" class="btn btn-success btn-circle Assignment"><i class="material-icons">grade</i></td>
                                <td  class="td-c fit"><button data-action-type="SilverMerit" class="btn btn-danger btn-circle Delete"><i class="material-icons">clear</i></td>
                            </tr>
                            <tr>
                                <td>نشان شفافیت طلایی</td>
                                <td class="td-c fit "><button data-action-type="GoldenTransparency" class="btn btn-success btn-circle Assignment"><i class="material-icons">grade</i></td>
                                <td  class="td-c fit"><button data-action-type="GoldenTransparency" class="btn btn-danger btn-circle Delete"><i class="material-icons">clear</i></td>
                            </tr>
                            <tr>
                                <td>نشان شفافیت نقره ای</td>
                                <td class="td-c fit "><button data-action-type="SilverTransparency" class="btn btn-success btn-circle Assignment"><i class="material-icons">grade</i></td>
                                <td  class="td-c fit"><button data-action-type="SilverTransparency" class="btn btn-danger btn-circle Delete"><i class="material-icons">clear</i></td>
                            </tr>
                            <tr>
                                <td>نشان تعهدنامه</td>
                                <td class="td-c fit "><button data-action-type="Obligation" class="btn btn-success btn-circle Assignment"><i class="material-icons">grade</i></td>
                                <td  class="td-c fit"><button data-action-type="Obligation" class="btn btn-danger btn-circle Delete"><i class="material-icons">clear</i></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</section>