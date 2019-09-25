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
                                <label for="inputPageTitle">عنوان صفحه</label>
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control"
                                                   id="inputPageTitle" name="inputPageTitle"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12" id="step3">
                                <label for="inputPageContent">محتوای صفحه</label>
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea
                                                    type="text"
                                                    class="form-control"
                                                    id="inputPageContent"
                                                    name="inputPageContent"
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
