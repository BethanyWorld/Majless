<?php
$_DIR = base_url('assets/ui/v3/');
?>
<div class="container container-wrapper" style="background: none;">
    <?php echo $resumeSidebar; ?>
    <div class="col-md-9 col-xs-12 pull-right">
        <div class="LeftPanel">
            <div class="LeftPanelcontent">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="panel panel-default LeftPanelShadow">
                            <div class="panel-heading">
                                سوابق فرهنگی اجتماعی
                                <span class="add-form fa fa-plus"></span>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-xs-12 padding-0">
                                        <div class="list-group ul-background-color-hr">
                                            <form id="form">
                                                <span class="skill-divider"></span>
                                            </form>
                                            <div id="unique-form"
                                                 class="hidden list-group-item animated flipInX
                                                    extra-padding-top-25 odd-background-color-div">

                                                <span class="remove-form fa fa-times"></span>
                                                <div class="list-group-Grade col-md-12 col-xs-12 padding-0">
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="col-md-6 col-sm-12 col-xs-12 RightFloat">
                                                            <label for="inputCandidateGrade">
                                                                زمینه فعالیت :
                                                            </label>
                                                            <select class="form-control form-control-lg"
                                                                    data-name="inputCandidateGrade">
                                                                <option value="1">--انتخاب کنید</option>
                                                                <option value="2">انجمن خیریه</option>
                                                                <option value="3"> بسیج</option>
                                                                <option value="4">دانشگاه</option>
                                                                <option value="5">سمن</option>
                                                                <option value="6">شورایاری</option>
                                                                <option value="7">فرهنگسرا</option>
                                                                <option value="8">فعالیت های جهادی</option>
                                                                <option value="9">مدارس</option>
                                                                <option value="10">مسجد</option>
                                                                <option value="11">هلال احمر</option>
                                                                <option value="12">هئیت های مذهبی</option>
                                                                <option value="13">سایر</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xs-12 ttt">
                                                        <div class="col-md-6 col-sm-12 col-xs-12 RightFloat">
                                                            <label class="Lable">نام مجموعه</label>
                                                            <input  class="ytyt" type="text" required>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="LeftPaneAction">
                <div class="row form-group">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <button class="btn btn-block btn-lg waves-effect CommonButtons" href="">
                            ثبت و ادامه
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>