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
                            <?php echo $sidebar; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-9 pull-right alerts-container">
        <div class="col-xs-12">
            <?php
            if(isset($result['RefID']) && ($result['Status'] == '100' || $result['Status'] == '101')){ ?>
                <div class="row">
                    <div class="modalbox success col-sm-8 col-md-6 col-lg-5 center animate">
                        <div class="icon">
                            <span class="fa fa-check"></span>
                        </div>
                        <h1>پرداخت موفق</h1>
                        <p>از حمایت شما متشکریم</p>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <span>کد رهگیری:</span>
                                <span>51961973349</span>
                            </li>
                            <li class="list-group-item">
                                <span>مبلغ</span>
                                <span>
                                <?php echo number_format($price); ?>
                                    تومان
                            </span>
                            </li>
                        </ul>
                        <a href="<?php echo base_url('Profile'); ?>">
                            <button type="button" class="btn btn-success">بازگشت به پیشخوان</button>
                        </a>
                    </div>
                </div>
            <?php } else{ ?>
                <div class="row">
                    <div class="modalbox error col-sm-8 col-md-6 col-lg-5 center animate">
                        <div class="icon">
                            <span class="fa fa-times"></span>
                        </div>
                        <h1>پرداخت ناموفق</h1>
                        <p>در صورت تمایل دوباره تلاش کنید</p>
                        <a href="<?php echo base_url('Profile/support'); ?>">
                            <button type="button" class="btn btn-success">پرداخت مجدد</button>
                        </a>
                    </div>
                    <!--/.success-->
                </div>
            <?php } ?>
        </div>
    </div>
</div>