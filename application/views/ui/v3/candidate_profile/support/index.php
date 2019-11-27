<?php $_DIR = base_url('assets/ui/v3/'); ?>
<div class="container container-wrapper" style="background: none;">
    <div class="row col-xs-12 col-md-3 pull-right">
        <div class="row col-xs-12  pull-right">
            <div class="row col-xs-12 pull-right sidebar">
                <div class="col-md-12 col-md-offset-0 col-sm-6 col-s-offset-3 col-xs-6 col-xs-offset-3 padding-0">
                    <img class="thumbnail profile-image"
                         width="100%" height="135px"
                         id="imageProfile"
                         src="<?php echo $noImg; ?>" />
                </div>
                <div class="col-md-12 col-xs-12 col-sm-12 padding-0">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <?php echo $userInfo['CandidateFirstName']." ".$userInfo['CandidateLastName']; ?>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li><a href="<?php echo base_url('Profile') ?>">پیشخوان</a></li>
                                <li><a href="<?php echo base_url('Profile/resume') ?>">ویرایش رزومه</a></li>
                                <li><a href="<?php echo base_url('Profile/support') ?>">حمایت مالی</a></li>
                                <li><a href="<?php echo base_url('Profile/logOut') ?>">خروج</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-9 pull-right alerts-container">
        <div class="row">

        </div>
    </div>
</div>