<?php $_DIR = base_url('assets/ui/v3/'); ?>
<div class="container container-wrapper" style="background: none;">
    <div class="row col-xs-12 col-md-3 pull-right">
        <div class="row col-xs-12  pull-right">
            <div class="row col-xs-12 pull-right sidebar">
                <div class="col-md-12 col-md-offset-0 col-sm-6 col-s-offset-3 col-xs-6 col-xs-offset-3 padding-0">
                    <img class="thumbnail profile-image"
                         width="100%" height="135px"
                         id="imageProfile"
                         src="<?php echo $noImg; ?>"/>
                </div>
                <div class="col-md-12 col-xs-12 col-sm-12 padding-0">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <?php echo $userInfo['CandidateFirstName'] . " " . $userInfo['CandidateLastName']; ?>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <?php echo $sidebar; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-9 pull-right alerts-container">
        <form id='form'>
            <div class="row">
            <div class="col-xs-12 col-md-4 pull-right">
                <label for="inputCurrentPassword">رمز عبور فعلی</label>
                <input type="password" class="form-control" id="inputCurrentPassword"/>
            </div>
            <div class="col-xs-12"></div>
            <div class="col-xs-12 col-md-4 pull-right">
                <label for="inputNewPassword">رمز عبور جدید</label>
                <input type="password" class="form-control" id="inputNewPassword"/>
            </div>
            <div class="col-xs-12 col-md-4 pull-right">
                <label for="inputConfirmPassword">تکرار رمز عبور جدید</label>
                <input  type="password" class="form-control" id="inputConfirmPassword"/>
            </div>
            <div class="gap"></div>
            <div class="col-xs-12 form-group">
                <button  id="changePassword" class="btn">
                    تغییر رمز عبور
                </button>
            </div>

        </div>
        </form>
    </div>
</div>