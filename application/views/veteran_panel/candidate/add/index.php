<?php $_DIR = base_url('assets/empanel/'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <div class="body">
                        <div  class="col-xs-12">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <label for="inputCandidateNationalCode">کد ملی نامزد انتخاباتی</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control"
                                               maxlength="80" minlength="3"
                                               id="inputCandidateNationalCode" name="inputCandidateNationalCode"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 col-md-2">
                                <label for="inputCandidateScore">امتیاز</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" class="form-control ltr text-center"
                                                min="1"
                                               id="inputCandidateScore" name="inputCandidateScore"/>
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

                            <div class="col-xs-12 col-md-4 float-right">
                                <div class="form-group">
                                    <label>شهر</label>
                                    <select class="form-control" name="inputCandidateCityId" id="inputCandidateCityId">
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <button type="button" id="addCandidate" class="btn btn-primary waves-effect">ذخیره</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
