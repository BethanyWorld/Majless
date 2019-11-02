<?php $_DIR = base_url('assets/empanel/'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <div class="body">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <label for="inputScoresFile">انتخاب فایل نمرات</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" class="form-control" maxlength="80" minlength="3"
                                               id="inputScoresFile" name="inputScoresFile"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <button type="button" id="importScoresForPreview" class="btn btn-primary waves-effect">بارگذاری</button>
                            </div>
                        </div>

                        <div class="row scores-preview-container hidden">
                            <!-- Score Preview  -->
                            <div class="col-xs-12 scores-preview">
                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th class="fit">ردیف</th>
                                            <th>نام و نام خانوادگی</th>
                                            <th class="fit">کد ملی</th>
                                            <th class="fit">نمره</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>

                            <!-- Final Add  -->
                            <div class="col-xs-12">
                                <button type="button" id="importScores"
                                        class="btn btn-primary waves-effect pull-left">ثبت نهایی</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
