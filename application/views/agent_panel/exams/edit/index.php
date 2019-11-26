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

                            <input value="<?php echo $data['ExamId']; ?>"
                                    type="hidden"
                                    id="inputExamId" name="inputExamId"/>
                            <div class="col-xs-12 col-sm-3" id="step1">
                                <label for="inputExamPlaceTitle">محل برگزاری آزمون</label>
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select
                                                    class="form-control"
                                                    name="inputExamPlaceId" id="inputExamPlaceId">
                                                <option value="">-- انتخاب کنید --</option>
                                                <?php foreach ($examPlaces as $examPlace) { ?>
                                                    <option
                                                            <?php if($examPlace['ExamPlaceId'] == $data['ExamPlaceId']) echo "selected"; ?>
                                                            value="<?php echo $examPlace['ExamPlaceId']; ?>">
                                                        <?php echo $examPlace['ExamPlaceTitle']; ?>
                                                    </option>
                                               <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-3" id="step2">
                                <label for="inputExamType">نوع آزمون</label>
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select class="form-control"
                                                    name="inputExamType" id="inputExamType">
                                                <option value="">-- انتخاب کنید --</option>
                                                <?php
                                                foreach ($examType as $key => $value) {
                                                    if ($key != 'Evaluation') { ?>
                                                        <option
                                                                <?php if($data['ExamType'] == $key) echo "selected"; ?>
                                                                value="<?php echo $key; ?>">
                                                            <?php echo $value; ?>
                                                        </option>
                                                    <?php }
                                                } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-2" id="step3">
                                <label for="inputExamCapacity">ظرفیت آزمون</label>
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input
                                                    min="1"
                                                    value="<?php echo $data['ExamCapacity']; ?>"
                                                    type="number"
                                                   class="form-control"
                                                   id="inputExamCapacity" name="inputExamCapacity"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-2" id="step4">
                                <label for="inputExamDate">تاریخ برگزاری</label>
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text"
                                                   placeholder="مثال 1398/12/04"
                                                   value="<?php echo $data['ExamDate']; ?>"
                                                   class="form-control date"
                                                   id="inputExamDate" name="inputExamDate"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-2" id="step4">
                                <label for="inputExamTime">ساعت برگزاری</label>
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text"
                                                   placeholder="مثال 14:25"
                                                   value="<?php echo $data['ExamTime']; ?>"
                                                   class="form-control time"
                                                   id="inputExamTime" name="inputExamTime"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <button type="button" id="editExam" class="btn btn-primary waves-effect">ذخیره</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
