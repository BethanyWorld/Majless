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
                    لطفاً جهت تسريع در امر پاسخگويی و برقراری ارتباط صحيح با بخش مورد نظر خود به موضوع ارتباط آن بخش توجه فرمائيد.
                    <br>
                    پاسخگویی در روز های شنبه تا چهارشنبه از ساعت 9 الی 17 می باشد
                    <strong class="col-xs-12 text-center">
                        <a href="tel:09029026934">پشتیبانی:09029026934</a>
                    </strong>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">ارتباط با ما</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li><a href="<?php echo base_url('ContactUs?type=contact') ?>">تماس</a></li>
                        <li><a href="<?php echo base_url('ContactUs?type=report_abuse') ?>">گزارش مردمی</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-9">
        <input type="hidden" id="inputCSRF" name="inputCSRF" value="<?=$CSRF;?>" />
        <div class="col-xs-12 col-md-4 pull-right">
            <div class="form-group">
                <label>
                    <span class="required"></span>
                    نام و نام خانوادگی
                </label>
                <input class="form-control" type="text" id="inputFullName" name="inputFullName" />
            </div>
            <div class="form-group">
                <label>
                    <span class="required"></span>

                    عنوان</label>
                <input class="form-control" type="text" id="inputTitle" name="inputTitle" />
            </div>
            <div class="form-group">
                <label>
                    <span class="required"></span>
                    موضوع
                </label>
                <select class="form-control" type="text" id="inputSubject" name="inputSubject" >
                    <option value="">-- انتخاب کنید --</option>
                    <option value="PeopleReport">گزارش های مردمی</option>
                    <option value="CS">انتقاد یا پیشنهاد</option>
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