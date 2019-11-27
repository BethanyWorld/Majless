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
            <div class="panel panel-default">
                    <div class="panel-heading white-color">
                        <h3 class="panel-title">پیام رسان های داخلی :</h3>
                    </div>
                    <div class="panel-body text-justify text-center contact-label-with-style">

                        <div class="form-group">
                            <label>آپارات :</label>
                            <a target="_blank" href="https://www.aparat.com/azmaa_net">azmaa_net</a>
                        </div>
                        <div class="form-group">
                            <label>ایتا :</label>
                            <a target="_blank" href="https://Eitaa.com/azmaa_net">Eitaa.com/azmaa_net</a>
                        </div>
                        <div class="form-group">
                            <label>بله :</label>
                            <a target="_blank" href="https://ble.im/azmaa">https://ble.im/azmaa</a>
                        </div>
                        <div class="form-group">
                            <label>گپ :</label>
                            <a target="_blank" href="https://gap.im/azmaa">https://gap.im/azmaa</a>
                        </div>
                        <div class="form-group">
                            <label>آی گپ :</label>
                            <a target="_blank" href="https://iGap.net/azmaa">https://iGap.net/azmaa</a>
                        </div>
                        <div class="form-group">
                            <label>سروش :</label>
                            <a target="_blank" href="https://sapp.ir/azmaa.net">sapp.ir/azmaa.net</a>
                        </div>
                        <div class="col-md-12 col-xs-12 social-network-padding-style-div">
                            <ul class="social-network social-circle">
                                <li><a href="http://instagram.com/azmaa_net" class="instagram" title="instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="http://twitter.com/azmaa_net" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="http://t.me/azmaa_net" class="telegram" title="telegram"><i class="fa fa-telegram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-9">
            <input type="hidden" id="inputCSRF" name="inputCSRF" value="<?= $CSRF; ?>"/>
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