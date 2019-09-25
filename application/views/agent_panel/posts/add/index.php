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
                            <div class="col-xs-12" id="step1">
                                <label for="inputPostTitle">عنوان خبر</label>
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control"
                                                   id="inputPostTitle" name="inputPostTitle"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6" id="step2">
                                <label for="inputPostImage">تصویر خبر</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" class="form-control"
                                               id="inputPostImage" name="inputPostImage"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6" id="step30">
                                <label for="inputPostImage">نامزد های مرتبط</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <?php foreach ($candidates as $item) { ?>
                                            <input type="checkbox" class="filled-in"
                                                   id="inputCandidateIds-<?php echo $item['CandidateNationalCode']; ?>"
                                                   value="<?php echo $item['CandidateId']; ?>"
                                                   name="inputCandidateIds" />
                                            <label for="inputCandidateIds-<?php echo $item['CandidateNationalCode']; ?>"><?php echo $item['CandidateNationalCode']; ?></label>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12" id="step3">
                                <label for="inputPostContent">محتوای خبر</label>
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea
                                                    type="text"
                                                    class="form-control"
                                                    id="inputPostContent"
                                                    name="inputPostContent"
                                            ></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <button type="button" id="addPost" class="btn btn-primary waves-effect">ذخیره</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
