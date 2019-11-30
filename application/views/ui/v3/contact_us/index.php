<?php $_DIR = base_url('assets/ui/v3/'); ?>
<div class="page-caption">
    <?php echo $title; ?>
</div>
<div class="container container-wrapper">

    <div class="col-xs-12 col-md-3 pull-right">
        <div class="row sidebar">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">تماس با ما</h3>
                </div>
                <div class="panel-body text-justify">
                    لطفاً جهت تسريع در امر پاسخگويی و برقراری ارتباط صحيح با بخش مورد نظر خود به موضوع ارتباط آن بخش
                    توجه فرمائيد.
                    <br>
                    پاسخگویی در روز های شنبه تا چهارشنبه از ساعت 9 الی 17 می باشد
                    <strong class="col-xs-12 text-center">
                        <a href="tel:09029026934">پشتیبانی:09029026934</a>
                    </strong>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-9">
        <input type="hidden" id="inputCSRF" name="inputCSRF" value="<?= $CSRF; ?>"/>

        <div class="panel panel-default">
            <div class="panel-heading social-panel-heading">
                <h3 class="panel-title" style="color: #fff;padding-right: 10px;">پیام رسان های داخلی</h3>
            </div>
            <div class="panel-body text-justify">
                <div class="col-md-12 col-xs-12 margin-b-10">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <img src="<?= $_DIR; ?>images/com.gapafzar.messenger_512x512.png" width="35px" height="35px;">
                        <a href="https://gap.im/azmaa" target="_blank">azmaa_net</a>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <img src="<?= $_DIR; ?>images/net.iGap_512x512.png" width="35px" height="35px;">
                        <a href="https://iGap.net/azmaa" target="_blank">iGap.net/azmaa</a>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <img src="<?= $_DIR; ?>images/com.aparat_512x512.png" width="35px" height="35px;">
                        <a href="https://www.aparat.com/azmaa_net" target="_blank">aparat-azma</a>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <img src="<?= $_DIR; ?>images/sousosh.png" width="35px" height="35px;">
                        <a href="https://sapp.ir/azmaa.net" target="_blank">sapp.ir/azmaa.net</a>
                    </div>
                </div>


                <div class="col-md-12 col-xs-12 margin-b-10">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <img src="<?= $_DIR; ?>images/bale.png" width="35px" height="35px;">
                        <a href="https://ble.im/azmaa" target="_blank">ble_azmaa</a>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <img src="<?= $_DIR; ?>images/ir.eitaa.messenger_512x512.png" width="35px" height="35px;">
                        <a href="https://Eitaa.com/azmaa_net" target="_blank">Eitaa.azmaa_net</a>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <img src="<?= $_DIR; ?>images/instagram.png" width="35px" height="35px;">
                        <a href="https://azmaa_net" target="_blank">instagram.azmaa</a>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <img src="<?= $_DIR; ?>images/twieetr.jpg" width="35px" height="35px;">
                        <a href="https://azmaa_net" target="_blank">twitter.azmaa</a>
                    </div>
                </div>

                <div class="col-md-12 col-xs-12">
                    <div class="col-md-3 col-sm-4 col-xs-12 rightFloat">
                        <img src="<?= $_DIR; ?>images/twieetr.jpg" width="35px" height="35px;">
                        <a href="https://azmaa_net" target="_blank">telegram.azmaa</a>
                    </div>
                </div>


            </div>
        </div>

        <div class="col-xs-12 col-md-4 pull-right">
            <div class="form-group">
                <label>
                    <span class="required"></span>
                    نام و نام خانوادگی
                </label>
                <input class="form-control" type="text" id="inputFullName" name="inputFullName"/>
            </div>
            <div class="form-group">
                <label>
                    <span class="required"></span>

                    عنوان</label>
                <input class="form-control" type="text" id="inputTitle" name="inputTitle"/>
            </div>
            <div class="form-group">
                <label>
                    <span class="fa fa-question question-style" data-toggle="tooltip"
                          title="اگر باید به پیام شما پاسخی بدهیم لطفا ایمیل یا شماره تماس خود را برای ما بنویسید"></span>

                    شماره تماس</label>
                <input class="form-control" type="number" min="0" id="" name=""/>
            </div>
            <div class="form-group">
                <label>
                    <span class="required"></span>
                    موضوع
                </label>
                <select class="form-control" type="text" id="inputSubject" name="inputSubject">
                    <option value="">-- انتخاب کنید --</option>
                    <option value="PeopleReport">گزارش تخلف</option>
                    <option value="CS">پیشنهاد برای جنبش</option>
                    <option value="CS">انتقاد از جنبش</option>
                    <option value="CS">سوال از جنبش</option>
                    <option value="Other">سایر</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-md-8">
            <div class="form-group">
                <label>
                    <span class="required"></span>
                    پیام
                </label>
                <textarea class="form-control" rows="6" id="inputContent" name="inputContent"></textarea>
            </div>
            <div class="row col-xs-12 form-group">
                <div class="pull-right">
                    <label>
                        <span class="required"></span>
                        کد امنیتی
                    </label>
                    <img class="captcha_img"
                         style="margin: 10px 5px;border: 2px solid #ccc;"
                         src="<?php echo base_url('GetCaptcha'); ?>"/>
                    <input type="text"
                           style="position: relative;top:15px;    width: calc(100% - 175px);float: left;"
                           name="inputCaptcha" id="inputCaptcha" class="form-control"
                           placeholder="کد امنیتی">
                </div>
            </div>
            <div class="row col-xs-12"></div>
            <div class="form-group">
                <button class="btn btn-danger btn-submit  pull-left" id="submitContactForm">
                    ارسال
                </button>
            </div>
        </div>
    </div>

</div>


<script>
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>