<?php $_DIR = base_url('assets/empanel/'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <div class="body">
                        <div  class="col-xs-12">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <label for="inputCategoryTitle">عنوان دسته بندی</label>
                                <div class="form-group">
                                    <input type="hidden"
                                           value="<?php echo $data['CategoryId']; ?>"
                                           id="inputCategoryId" name="inputCategoryId"/>
                                    <div class="form-line">
                                        <input type="text" class="form-control"
                                               value="<?php echo $data['CategoryTitle']; ?>"
                                               maxlength="80" minlength="3"
                                               id="inputCategoryTitle" name="inputCategoryTitle"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <button type="button" id="editCategory" class="btn btn-primary waves-effect">ذخیره</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
