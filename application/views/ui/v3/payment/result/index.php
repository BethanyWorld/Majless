<?php $_DIR = base_url('assets/ui/v3/'); ?>
<div class="page-caption">
    <?php echo $title; ?>
</div>
<div class="container container-wrapper">
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
                            <span>100 تومان</span>
                        </li>
                    </ul>
                    <a href="<?php echo base_url(); ?>">
                        <button type="button" class="btn btn-success">بازگشت به صفحه اصلی</button>
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
                <a href="<?php echo base_url('Payment'); ?>">
                    <button type="button" class="btn btn-success">پرداخت مجدد</button>
                </a>
            </div>
            <!--/.success-->
        </div>
        <?php } ?>
    </div>
</div>