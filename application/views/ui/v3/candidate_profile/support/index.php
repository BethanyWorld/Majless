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
        <div class="row">

            <div class="col-xs-12 col-md-12 blog-contents-div">
                <h3 style="text-align: justify;">حمایت مالی</h3>
                <p style="text-align: justify;">در صورت امکان و تمایل می‌توانید با کمک‌های مالی خود به جنبش از ما کمک کنید. ما مبلغ ماهانه حداقل 30 هزارتومان را برای فعالین جنبش در نظر گرفته‌ایم. البته شما در واریز مبالغ بالاتر آزاد هستید. همچنین در راستای شفافیت، صورت مالی جنبش به صورت ماهانه در سایت منتشر می‌شود. برای واریز هر مبلغی که مدنظر دارید می‌توانید از طریق فرم زیر اقدام کنید:</p>
            </div>
            <form id="form" method="post" action="<?php echo base_url('Profile/startPayment') ?>">
                <div class="row col-md-6 col-md-offset-3 col-xs-12">
                    <div class="form-group">
                        <div class="col-xs-12" style="text-align: center">
                            <label class="label-form" style="text-align: center ; font-size: 15px"  for="formAmount">مبلغ</label>
                            <span class="text-danger"><i style="padding-right: 10px ; font-size: 15px">*</i></span>
                            <input class="form-control" type="text" id="formAmount" name="formAmount" style="text-align: center;padding: 30px" data-mask="000/000/000" data-mask-clearifnotmatch="true"/>
                            <p id="alert1" style="color: red ; font-size: 12px ; display: none ; "> لطفا مبلغ را وارد نمایید</p>
                            <label id="labal1" style=" color:#8c8c8c; padding-top: 10px ; "></label>
                        </div>
                        <div class="col-xs-12">
                            <button style="margin-top: 25px ; color: white; cursor: pointer; padding: 0px 25px;background-color: #D10B20 ; border: 1px solid #D10B20; float: left;line-height: 45px "
                                    id="btn-pay"> پرداخت
                            </button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>