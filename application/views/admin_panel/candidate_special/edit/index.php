<?php $_DIR = base_url('assets/empanel/'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <div class="body">
                        <div class="col-xs-12">
                                <input type="hidden" class="form-control"
                                       value="<?php echo $candidate['RowId']; ?>"
                                       id="inputRowId" name="inputRowId"/>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <label for="inputCandidateFullName">نام و نام خانوادگی</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control"
                                               maxlength="80" minlength="3"
                                               value="<?php echo $candidate['CandidateFullName']; ?>"
                                               id="inputCandidateFullName" name="inputCandidateFullName"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-2">
                                <label for="inputExamPlaceMapImage">تصویر محل آزمون</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" class="form-control"
                                               id="inputCandidateImage" name="inputCandidateImage"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-2">
                                <label for="inputCandidateStateId">استان</label>
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select name="inputCandidateStateId" id="inputCandidateStateId"
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
                                            <select name="inputCandidateElectionId" id="inputCandidateElectionId"
                                                    class="btn-group bootstrap-select form-control show-tick">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <button type="button" id="editCandidateSpecial" class="btn btn-primary waves-effect">
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
