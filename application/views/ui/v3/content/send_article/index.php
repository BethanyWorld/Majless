<?php $_DIR = base_url('assets/ui/v3/'); ?>
<div class="page-caption">
    <?php echo $pageTitle; ?>
</div>
<div class="container container-wrapper">
    <div class="row col-xs-12 col-md-3 pull-right sidebar">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">نکات مهم جهت ارسال محتوا</h3>
            </div>
            <div class="panel-body">
                <ul>
                    <li>کلیه‌ی مطالبی که ارسال میکنید، باید مطابق با قوانین جمهوری اسلامی ایران باشند.</li>
                    <li>مطالب ارسالی شما پس از تائید ناظران بر روی سایت منتشر خواهند شد.</li>
                     <li>مطالب شما باید کاملا صادقانه و منطبق بر واقعیت باشند. از درج هر گونه مطلب غیرواقعی و آموزش‌های گمراه‌کننده جدا خودداری کنید.</li>
                     <li>مطالبی که توسط خودِ نویسنده تهیه‌ شده باشند و منبع معتبر نداشته باشند، اجازه انتشار ندارند.</li>
                      <li>نویسندگان مجاز نیستند مطالب وب‌سایت‌ها، کتاب‌ها و دیگر منابع ایرانی را کپی کرده، تغییر دهند یا بازنشر کنند. مسئولیت نشر غیرمجاز مطالب ایرانی، کپی کردن از روی سایر محصولات ایرانی و پاسخگویی در برابر کلیه مجامع قانونی و حقوقی برعهده‌ی نویسنده است و سایت هیچ مسئولیتی در قبال موارد اینچنینی ندارد.</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-md-9 pull-left">
        <input type="hidden" id="inputCSRF" name="inputCSRF" value="<?=$CSRF;?>" />
        <div class="col-xs-12 pull-right">
            <div class="form-group">
                <label for="inputContentTitle">
                    <span class="required"></span>
                    عنوان مقاله
                </label>
                <input class="form-control" type="text" id="inputContentTitle" name="inputContentTitle" />
            </div>
            <div class="form-group col-xs-12 col-md-4 pull-right" style="padding-right: 0;">
                <label for="inputContentAuthor">
                    <span class="required"></span>
                    نام و نام خانوادگی</label>
                <input class="form-control" type="text" id="inputContentAuthor" name="inputContentAuthor" />
            </div>
            <div class="form-group col-xs-12 col-md-4 pull-right" style="padding-right: 0;">
                <label for="inputContentAuthor"> شماره همراه(جهت دریافت بازخورد)</label>
                <input class="form-control" type="text" id="inputContentAuthor" name="inputContentAuthorPhone" />
            </div>
            <div class="form-group col-xs-12 col-md-4 pull-right" style="padding-left: 0;">
                <label for="inputContentAuthor">ایمیل(جهت دریافت بازخورد)</label>
                <input class="form-control" type="text" id="inputContentAuthor" name="inputContentAuthorEmail" />
            </div>
            <div class="form-group col-xs-12 col-md-4 pull-right" style="padding-right: 0;">
                <label for="inputContentAttachment">پیوست (تصویر یا  فایل)</label>
                <div class="form-line">
                    <input type="file" class="form-control"
                           id="inputContentAttachment" name="inputContentAttachment"/>
                </div>
            </div>
            <div class="form-group col-xs-12 col-md-4 pull-right"  style="padding-right: 0;">
                <label for="inputContentCategoryId">
                    <span class="required"></span>
                    دسته بندی
                </label>
                <select class="form-control" type="text" id="inputContentCategoryId" name="inputContentCategoryId" >
                    <option value="">-- انتخاب کنید --</option>
                    <?php foreach (array_reverse($categories) as $contentCategory) { ?>
                        <option value="<?php echo $contentCategory['CategoryId']; ?>">
                            <?php echo $contentCategory['CategoryTitle']; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="form-group">
                <label for="inputContentDescription">چکیده محتوا</label>
                <textarea class="form-control" rows="6" id="inputContentDescription" name="inputContentDescription"></textarea>
            </div>
            <div class="row col-xs-12 form-group">
                <div class="pull-right">
                    <label>کد امنیتی</label>
                    <img class="captcha_img"
                         style="margin: 10px 5px;border: 2px solid #ccc;"
                         src="<?php echo base_url('GetCaptcha'); ?>"/>
                    <input type="text"
                           style="position: relative;top:15px;width: calc(100% - 155px);float: left;"
                           name="inputCaptcha" id="inputCaptcha" class="form-control"
                           placeholder="کد امنیتی">
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-lg  pull-left" id="submitSendArticle">
                    ارسال
                </button>
            </div>
        </div>
    </div>
</div>