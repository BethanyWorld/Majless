<?php $_DIR = base_url('assets/empanel/'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <div class="body">
                        <div  class="col-xs-12">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <label for="inputEmployerFullName">نام و نام خانوداگی</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="hidden" class="form-control"
                                               value="<?php echo $adminInfo['AdminId']; ?>"
                                               maxlength="80" minlength="3"
                                               id="inputAdminId" name="inputAdminId"/>
                                        <input type="text" class="form-control"
                                               value="<?php echo $adminInfo['AdminFullName']; ?>"
                                               maxlength="80" minlength="3"
                                               id="inputAdminFullName" name="inputAdminFullName"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <label for="inputEmployerPhone">شماره همراه</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control ltr text-center"
                                               value="<?php echo $adminInfo['AdminPhone']; ?>"
                                               maxlength="12" minlength="3"
                                               id="inputAdminPhone" name="inputAdminPhone"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-2">
                                <label for="inputEmployerPhone">رمز عبور فعلی</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="password" class="form-control ltr text-center"
                                               maxlength="12" minlength="3"
                                               id="inputAdminOldPassword" name="inputAdminOldPassword"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-2">
                                <label for="inputEmployerPhone">رمز عبور جدید</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="password" class="form-control ltr text-center"
                                               maxlength="12" minlength="3"
                                               id="inputAdminNewPassword" name="inputAdminNewPassword"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-2">
                                <label for="inputEmployerPhone">تکرار رمز عبور جدید</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="password" class="form-control ltr text-center"
                                               maxlength="12" minlength="3"
                                               id="inputAdminConfirmPassword" name="inputAdminConfirmPassword"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <button type="button" id="updateAdminProfile" class="btn btn-primary waves-effect">ذخیره</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
