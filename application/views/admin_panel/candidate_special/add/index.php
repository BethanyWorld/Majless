<?php $_DIR = base_url('assets/empanel/'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <div class="body">
                        <div  class="col-xs-12">
                            <div class="col-xs-12 col-sm-4 col-md-2">
                                <label for="inputCandidatePreName">پیشوند</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control"
                                               maxlength="80" minlength="3"
                                               value="جناب آقای"
                                               id="inputCandidatePreName" name="inputCandidatePreName"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-2">
                                <label for="inputCandidateFullName">نام و نام خانوادگی</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control"
                                               maxlength="80" minlength="3"
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
                            <div class="col-xs-12 col-sm-4 col-md-2">
                                <label for="inputCandidateElectionId">حوزه انتخابیه</label>
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select name="inputCandidateElectionId" id="inputCandidateElectionId" class="btn-group bootstrap-select form-control show-tick">
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
                                               maxlength="80" minlength="3"
                                               id="inputCandidateInstaAccount" name="inputCandidateInstaAccount"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-2">
                                <label for="inputCandidateElectionCode">کد نامزدی انتخابات</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control"
                                               id="inputCandidateElectionCode"
                                               name="inputCandidateElectionCode"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-2">
                                <label>وضعیت اتمام فرآیند</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <div class="row col-xs-12">
                                            <input
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
                            <div class="col-xs-12 col-sm-4 col-md-2">
                                <label>وضعیت انتخاب</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <div class="row col-xs-12">
                                            <input
                                                    class="selected-candidate"
                                                    name="CandidateSelectionStatus"
                                                    id="CandidateSelectionStatusSelected"
                                                    type="radio"
                                                    value="Selected"/>
                                            <label for="CandidateSelectionStatusSelected">
                                                منتخب
                                            </label>
                                        </div>
                                        <div class="row col-xs-12">
                                            <input
                                                    class="selected-candidate"
                                                    name="CandidateSelectionStatus"
                                                    type="radio"
                                                    id="CandidateSelectionStatusUnSelected"
                                                    value="UnSelected"/>
                                            <label for="CandidateSelectionStatusUnSelected">
                                                غیرمنتخب
                                            </label>
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
