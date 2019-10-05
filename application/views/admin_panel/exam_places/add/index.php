<?php $_DIR = base_url('assets/empanel/'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <button class="guide-button btn btn-info waves-effect waves-float">
                        راهنمایی کن
                    </button>
                    <div class="body">
                        <div class="col-xs-12">
                            <div class="col-xs-12 col-sm-4" id="step1">
                                <label for="inputExamPlaceTitle">عنوان محل آزمون</label>
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control"
                                                   id="inputExamPlaceTitle" name="inputExamPlaceTitle"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4" id="step2">
                                <label for="inputExamPlaceMapImage">تصویر محل آزمون</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" class="form-control"
                                               id="inputExamPlaceMapImage" name="inputExamPlaceMapImage"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4" id="step3">
                                <label for="inputExamPlaceDefaultCapacity">ظرفیت پیش فرض محل آزمون</label>
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number"
                                                   min="1"
                                                   value="1"
                                                   class="form-control"
                                                   id="inputExamPlaceDefaultCapacity" name="inputExamPlaceDefaultCapacity"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12" id="step4">
                                <label for="inputExamPlaceAddress">آدرس محل آزمون</label>
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control"
                                                   id="inputExamPlaceAddress" name="inputExamPlaceAddress"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <button type="button" id="addExamPlace" class="btn btn-primary waves-effect">ذخیره</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
