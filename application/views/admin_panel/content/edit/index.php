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
                                <input type="hidden"
                                       id="inputContentId" name="inputContentId"
                                       value="<?php echo $content['ContentId']; ?>"
                                />
                                <label for="inputContentTitle">عنوان محتوا</label>
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control"
                                                   value="<?php echo $content['ContentTitle']; ?>"
                                                   id="inputContentTitle" name="inputContentTitle"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="col-xs-12" id="step1">
                                    <label for="inputContentBrief">خلاصه محتوا</label>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control"
                                                       value="<?php echo $content['ContentBrief']; ?>"
                                                       id="inputContentBrief" name="inputContentBrief"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="col-xs-12 col-md-4 col-sm-6"  id="step2">
                                <label for="inputContentImage">تصویر محتوا</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" class="form-control"
                                               id="inputContentImage" name="inputContentImage"/>
                                    </div>
                                </div>
                            </div>
                                <div class=" col-md-4 col-sm-6"  id="step2">
                                    <label for="inputContentCategoryId">دسته بندی محتوا</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select class="form-control" id="inputContentCategoryId">
                                                <?php foreach ($contentCategories as $contentCategory) { ?>
                                                    <option
                                                            <?php if($content['ContentCategoryId'] == $contentCategory['CategoryId']) echo "selected"; ?>
                                                            value="<?php echo $contentCategory['CategoryId']; ?>">
                                                        <?php echo $contentCategory['CategoryTitle']; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            <div class="col-xs-12" id="step3">
                                <label for="inputContentDescription">متن محتوا</label>
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea
                                                    type="text"
                                                    class="form-control"
                                                    id="inputContentDescription"
                                                    name="inputContentDescription"
                                            ><?php echo $content['ContentDescription']; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <button type="button" id="editContent" class="btn btn-primary waves-effect">ذخیره</button>
                                <button type="button" id="rejectContent" class="btn btn-danger pull-left waves-effect">رد کردن محتوا</button>
                                <button type="button" id="acceptContent" class="btn btn-success pull-left waves-effect">تایید محتوا</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
