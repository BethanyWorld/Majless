<?php $_DIR = base_url('assets/empanel/'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <div class="body">
                        <div  class="col-xs-12">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <label for="inputUniversityTitle">نام دانشگاه</label>
                                <div class="form-group">
                                    <input type="hidden"
                                           value="<?php echo $data['UniversityId']; ?>"
                                           id="inputUniversityId" name="inputUniversityId"/>
                                    <div class="form-line">
                                        <input type="text" class="form-control"
                                               value="<?php echo $data['UniversityTitle']; ?>"
                                               maxlength="80" minlength="3"
                                               id="inputUniversityTitle" name="inputUniversityTitle"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <label>وضعیت</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <div class="row col-xs-12">
                                            <input
                                                    <?php if($data['IsActive']) echo "checked"; ?>
                                                    class="selected-candidate"
                                                    name="UniversityActivationStatus"
                                                    id="UniversityIsActive"
                                                    type="radio"
                                                    value="1"/>
                                            <label for="UniversityIsActive">
                                               فعال
                                            </label>
                                        </div>
                                        <div class="row col-xs-12">
                                            <input
                                                <?php if(!$data['IsActive']) echo "checked"; ?>
                                                    class="selected-candidate"
                                                    name="UniversityActivationStatus"
                                                    id="UniversityIsNotActive"
                                                    type="radio"
                                                    value="0"/>
                                            <label for="UniversityIsNotActive">
                                              غیرفعال
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <button type="button" id="editUniversity" class="btn btn-primary waves-effect">ذخیره</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
