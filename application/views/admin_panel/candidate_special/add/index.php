<?php $_DIR = base_url('assets/empanel/'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <div class="body">
                        <div  class="col-xs-12">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <label for="inputCandidateFirstName">نام</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control"
                                               maxlength="80" minlength="3"
                                               id="inputCandidateFirstName" name="inputCandidateFirstName"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <label for="inputCandidateLastName">نام خانوادگی</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control"
                                               maxlength="80" minlength="3"
                                               id="inputCandidateLastName" name="inputCandidateLastName"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-3" id="step2">
                                <label for="inputExamPlaceMapImage">تصویر محل آزمون</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" class="form-control"
                                               id="inputCandidateImage" name="inputCandidateImage"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <label for="inputCandidateStateId">استان</label>
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select name="inputCandidateStateId" id="inputCandidateStateId"
                                                    class="btn-group bootstrap-select form-control show-tick">
                                                <option value="">-- انتخاب کنید --</option>
                                                <?php foreach ($states as $state) { ?>
                                                    <option value="<?php echo $state['StateId']; ?>">
                                                        <?php echo $state['StateName']; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <button type="button" id="addCandidateSpecial" class="btn btn-primary waves-effect">ذخیره</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
