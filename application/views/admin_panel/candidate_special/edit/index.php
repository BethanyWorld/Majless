<?php $_DIR = base_url('assets/empanel/'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="col-xs-12">
                    <div class="card">
                        <div class="body">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#info" aria-controls="info" role="tab" data-toggle="tab">اطلاعات فردی</a>
                                </li>
                                <li role="presentation">
                                    <a href="#signs" aria-controls="signs" role="tab" data-toggle="tab">نشان ها</a>
                                </li>
                                <li role="presentation">
                                    <a href="#bind-candidate" aria-controls="bind-candidate" role="tab"
                                       data-toggle="tab">انتساب به نامزد</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="info">
                                    <div class="row col-xs-12">
                                        <div class="body">
                                            <div class="col-xs-12">
                                                <input type="hidden" class="form-control"
                                                       value="<?php echo $candidate['RowId']; ?>"
                                                       id="inputRowId" name="inputRowId"/>
                                                <input type="hidden" class="form-control"
                                                       value="<?php echo $candidate['CandidateCode']; ?>"
                                                       id="inputCandidateCode" name="inputCandidateCode"/>
                                                <div class="col-xs-12 col-sm-4 col-md-2">
                                                    <label for="inputCandidatePreName">پیشوند</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control"
                                                                   maxlength="80" minlength="3"
                                                                   value="<?php echo $candidate['CandidatePreName']; ?>"
                                                                   id="inputCandidatePreName"
                                                                   name="inputCandidatePreName"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-4 col-md-3">
                                                    <label for="inputCandidateFullName">نام و نام خانوادگی</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control"
                                                                   maxlength="80" minlength="3"
                                                                   value="<?php echo $candidate['CandidateFullName']; ?>"
                                                                   id="inputCandidateFullName"
                                                                   name="inputCandidateFullName"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-4 col-md-2">
                                                    <label for="inputExamPlaceMapImage">تصویر محل آزمون</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="file" class="form-control"
                                                                   id="inputCandidateImage"
                                                                   name="inputCandidateImage"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-4 col-md-2">
                                                    <label for="inputCandidateStateId">استان</label>
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <select name="inputCandidateStateId"
                                                                        id="inputCandidateStateId"
                                                                        data-election-id="<?php echo $candidate['CandidateElectionId']; ?>"
                                                                        class="btn-group bootstrap-select form-control show-tick">
                                                                    <option value="">-- انتخاب کنید --</option>
                                                                    <?php foreach ($states as $state) { ?>
                                                                        <option
                                                                            <?php if ($candidate['CandidateStateId'] == $state['StateId']) echo "selected"; ?>
                                                                                value="<?php echo $state['StateId']; ?>">
                                                                            <?php echo $state['StateName']; ?>
                                                                        </option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-4 col-md-2">
                                                    <label for="inputCandidateElectionId">حوزه انتخابیه</label>
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <select name="inputCandidateElectionId"
                                                                        id="inputCandidateElectionId"
                                                                        class="btn-group bootstrap-select form-control show-tick">
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-4 col-md-2">
                                                    <label for="inputCandidateInstaAccount">آی دی اینستاگرام</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control"
                                                                   value="<?php echo $candidate['CandidateInstaAccount']; ?>"
                                                                   id="inputCandidateInstaAccount"
                                                                   name="inputCandidateInstaAccount"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-4 col-md-2">
                                                    <label>وضعیت اتمام فرآیند</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <div class="row col-xs-12">
                                                                <input
                                                                        <?php if($candidate['CandidateOperationStatus']=='Ended') echo "checked"; ?>
                                                                        class="selected-candidate"
                                                                        name="CandidateOperationStatus"
                                                                        id="CandidateOperationStatusEnded"
                                                                        type="radio"
                                                                        value="Ended"/>
                                                                <label for="CandidateOperationStatusEnded">
                                                                  تمام شده
                                                                </label>
                                                            </div>
                                                            <div class="row col-xs-12">
                                                                <input
                                                                    <?php if($candidate['CandidateOperationStatus']!='Ended') echo "checked"; ?>
                                                                        class="selected-candidate"
                                                                        name="CandidateOperationStatus"
                                                                        type="radio"
                                                                        id="CandidateOperationStatusFlowed"
                                                                        value="Flowed"/>
                                                                <label for="CandidateOperationStatusFlowed">
                                                                    ناتمام
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12">
                                                    <button type="button" id="editCandidateSpecial"
                                                            class="btn btn-primary waves-effect">
                                                        ذخیره
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in" id="signs">
                                    <div class="col-xs-12">
                                        <div class="body">
                                            <div class="col-xs-12 ">
                                                <div class="alert alert-success">
                                                    نشان های اختصاص داده شده
                                                </div>
                                                <div class="card">
                                                    <ul>
                                                        <?php foreach ($badges as $item) { ?>
                                                            <li>
                                                                <?php badgePipe($item['CandidateBadge']); ?>
                                                            </li>
                                                        <?php } ?>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="alert alert-warning">
                                                    نشان های مورد نظر را انتخاب کرده و ذخیره را بزنید
                                                </div>
                                                <div class="card">
                                                    <table class="table table-responsive">
                                                        <thead>
                                                        <tr>
                                                            <th>نوع نشان</th>
                                                            <th class="td-c fit">تخصیص</th>
                                                            <th class="td-c fit">حذف</th>
                                                        </tr>

                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>نشان شایستگی طلایی</td>
                                                            <td class="td-c fit">
                                                                <button data-action-type="GoldenMerit"
                                                                        class="btn btn-success btn-circle Assignment">
                                                                    <i class="material-icons">grade</i>
                                                            </td>
                                                            <td class="td-c fit">
                                                                <button data-action-type="GoldenMerit"
                                                                        class="btn btn-danger btn-circle Delete"><i
                                                                            class="material-icons">clear</i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>نشان شایستگی نقره ای</td>
                                                            <td class="td-c fit ">
                                                                <button data-action-type="SilverMerit"
                                                                        class="btn btn-success btn-circle Assignment">
                                                                    <i class="material-icons">grade</i>
                                                            </td>
                                                            <td class="td-c fit">
                                                                <button data-action-type="SilverMerit"
                                                                        class="btn btn-danger btn-circle Delete"><i
                                                                            class="material-icons">clear</i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>نشان شفافیت طلایی</td>
                                                            <td class="td-c fit ">
                                                                <button data-action-type="GoldenTransparency"
                                                                        class="btn btn-success btn-circle Assignment">
                                                                    <i class="material-icons">grade</i>
                                                            </td>
                                                            <td class="td-c fit">
                                                                <button data-action-type="GoldenTransparency"
                                                                        class="btn btn-danger btn-circle Delete"><i
                                                                            class="material-icons">clear</i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>نشان شفافیت نقره ای</td>
                                                            <td class="td-c fit ">
                                                                <button data-action-type="SilverTransparency"
                                                                        class="btn btn-success btn-circle Assignment">
                                                                    <i class="material-icons">grade</i>
                                                            </td>
                                                            <td class="td-c fit">
                                                                <button data-action-type="SilverTransparency"
                                                                        class="btn btn-danger btn-circle Delete"><i
                                                                            class="material-icons">clear</i>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>نشان تعهدنامه</td>
                                                            <td class="td-c fit ">
                                                                <button data-action-type="Obligation"
                                                                        class="btn btn-success btn-circle Assignment">
                                                                    <i class="material-icons">grade</i>
                                                            </td>
                                                            <td class="td-c fit">
                                                                <button data-action-type="Obligation"
                                                                        class="btn btn-danger btn-circle Delete"><i
                                                                            class="material-icons">clear</i>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in" id="bind-candidate">
                                    <div class="row col-xs-12">
                                        <div class="body">

                                            <div class="col-xs-12">
                                                <div class="col-xs-12">
                                                    <span>نامزد انتساب داده شده</span>:
                                                    <span><?php echo $candidateReference['CandidateFirstName'] . " " . $candidateReference['CandidateLastName']; ?></span>

                                                    <div class="form-group">
                                                        <label for="inputCandidatePreName">جستجوی نامزد</label>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control"
                                                                   maxlength="80" minlength="3"
                                                                   id="inputSearch"
                                                                   name="inputSearch"/>
                                                        </div>
                                                    </div>
                                                    <ul class="candidate-placeholder">
                                                    </ul>
                                                </div>
                                                <div class="col-xs-12">
                                                    <button type="button" id="editBindCandidateSpecial"
                                                            class="btn btn-primary waves-effect">
                                                        ذخیره
                                                    </button>
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
</section>
