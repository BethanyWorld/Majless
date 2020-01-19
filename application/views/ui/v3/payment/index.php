<?php $_DIR = base_url('assets/ui/v3/'); ?>
<h1 class="page-caption"><?php echo $title; ?></h1>
<div class="container container-wrapper">
    <div class="col-xs-12">
        <div class="col-md-8 col-xs-12">
            <div class="col-xs-12 col-md-12 blog-contents-div">
                <p style="text-align: justify;">
                    در صورت امکان و تمایل می‌توانید با کمک‌های مالی خود نیز به جنبش از ما کمک کنید. در راستای شفافیت، صورت مالی جنبش به صورت ماهانه در سایت منتشر می‌شود. برای واریز هر مبلغی که مدنظر دارید می‌توانید از طریق فرم زیر اقدام کنید:
                </p>
            </div>
            <form id="form" method="post" action="<?php echo base_url('Payment/startPayment') ?>">
                <div class="row col-md-8 col-md-offset-2 col-xs-12">
                    <div class="form-group">
                        <div class="col-md-6 col-xs-12" style="float: right">
                            <label class="label-form " for="formFname">نام</label>
                            <input class="form-control" type="text" id="formFname" name="formFname" />
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <label class="label-form" for="formLname"> نام خانوادگی</label>
                            <input class="form-control" type="text" id="formLname" name="formLname" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-xs-12" style="float: right">
                            <label class="label-form" for="formPhone">تلفن همراه</label>
                            <input class="form-control" type="text" id="formPhone" name="formPhone"/>
                            <p id="alert2" style="color: red ; font-size: 12px ; display: none ; ">شماره تلفن نارست است</p>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <label class="label-form" for="formEmail"> ایمیل</label>
                            <input class="form-control " type="text" id="formEmail" name="formEmail"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12" style="text-align: center">
                            <label class="label-form" style="text-align: center ; font-size: 15px"  for="formAmount">مبلغ</label><span class="text-danger"><i style="padding-right: 10px ; font-size: 15px">*</i></span>
                            <input class="form-control" type="text" id="formAmount" name="formAmount" style="text-align: center;padding: 30px" data-mask="000/000/000" data-mask-clearifnotmatch="true"/>
                            <p id="alert1" style="color: red ; font-size: 12px ; display: none ; "> لطفا مبلغ را وارد نمایید</p>
                            <label id="labal1" style=" color:#8c8c8c; padding-top: 10px ; "></label>
                        </div>
                        <div class="col-xs-12">
                            <button class="" style="margin-top: 25px ;font-weight: 900; color: #000; cursor: pointer; padding: 0px 25px;background-color: #fdb72e ; border: 1px solid #fdb72e; float: left;line-height: 45px "
                                    id="btn-pay"> پرداخت
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="row col-xs-12 col-md-4 pull-right news-slider-container">
            <?php echo $sidebar; ?>
        </div>
    </div>
</div>