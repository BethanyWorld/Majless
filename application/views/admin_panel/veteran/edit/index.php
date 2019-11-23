<?php $_DIR = base_url('assets/empanel/'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <div class="body">
                        <div  class="col-xs-12">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <label for="inputVeteranFullName">نام و نام خانوادگی نماینده</label>
                                <div class="form-group">
                                    <input type="hidden"
                                           value="<?php echo $veteran['VeteranId']; ?>"
                                           id="inputVeteranId" name="inputVeteranId"/>
                                    <div class="form-line">
                                        <input type="text" class="form-control"
                                               value="<?php echo $veteran['VeteranFullName']; ?>"
                                               maxlength="80" minlength="3"
                                               id="inputVeteranFullName" name="inputVeteranFullName"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <label for="inputVeteranPhone">تلفن همراه (به عنوان نام کاربری استفاده خواهد شد)</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control ltr text-center"
                                               maxlength="12" minlength="3"
                                               value="<?php echo $veteran['VeteranPhone']; ?>"
                                               id="inputVeteranPhone" name="inputVeteranPhone"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <button type="button" id="editVeteran" class="btn btn-primary waves-effect">ذخیره</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
