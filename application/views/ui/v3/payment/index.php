<?php $_DIR = base_url('assets/ui/v3/'); ?>
<h1 class="page-caption">
    <?php echo $title; ?>
</h1>
<div class="container container-wrapper">
    <div class="col-xs-12">

        <div class="col-xs-12 col-md-12 blog-contents-div">
            <p style="text-align: justify;">جنبش از ما توسط جمعی از جوانانی که در عرصه‌های مختلف دارای مهارت و تخصص هستند ایجاد شده‌است و تا مراحل شکل‌گیری آن تماما با همت و هزینه و وقت شخصی و تبلیغات و ترویج چهره به چهره فعالین آن شکل گرفته است. اما برای ادامه گسترده‌تر فعالیت و ایجاد تاثیر به سزا در این مرحله از جنبش که معطوف به انتخابات مجلس یازدهم در دوم اسفند 98 است، نیاز هست تا تمامی افرادی که با اهداف و ارزش‌های این جنبش همراه هستند و فرآیند طراحی شده و آزمون‌های این جنبش را برای ارتقای کیفیت عملکرد مجلس شورای اسلامی کارآمد می‌دانند، از هر طریقی که در توان دارند به یاری این جنبش بیایند. ما چند راه برای همراهی و مشارکت شما پیشنهاد می‌دهیم و منتظر پیشنهادها و کمک‌های شما نیز هستیم:</p>
            <h3 style="text-align: justify;">ترویج ایده شایسته‌گزینی</h3>
            <ul style="text-align: justify;">
                <li>مطالب و ویدئوهای ما را در سایت و شبکه‌های اجتماعی ببینید و تا جا ممکن با دیگران به اشتراک بگذارید.</li>
                <li>گفتگوهای چهره به چهره همچنان موثرین‌تر راه برای انتقال فکرها و ایده‌ها هستند. با اطرافیان خود که احتمال می‌دهید با این جنبش همراه شوند، ایده‌ها و ارزش‌ها و اهداف جنبش را در میان بگذارید.</li>
                <li>اگر به نامزدهای نمایندگی مجلس دسترسی دارید آن‌ها را تشویق کنید که وارد فرآیند سنجش شوند.</li>
                <li>نامزدهای حوزه انتخابیه خود را از طریق شبکه‌های اجتماعی به ثبت نام در سایت و ورود به فرآیند سنجش دعوت کنید. و حتما اکانت جنبش از ما را تگ کنید.</li>
                <li>اگر نامزدی یا ستاد انتخاباتی او از شما طلب کمک و مشارکت در تبلیغات انتخاباتی نامزد کرد، شرط همکاری خود را شرکت نامزد در آزمون‌های سنجش شایستگی قرار بدهید و او را به شرکت در جنبش تشویق کنید.</li>
            </ul>
            <h3 style="text-align: justify;">همراهی و همکاری با جنبش</h3>
            <p style="text-align: justify;">برای همراهی و همکاری با جنبش زمینه و نیاز‌های مختلفی وجود دارد و اگر کارهای دیگر و بهتری به نظر شما می‌رسد، با ما مطرح کنید. اما برای اینکه آشنایی و همکاری بتوانیم صورت بدهیم، در سایت به عنوان حامی ثبت نام کنید. اما راه‌های پیشنهادی و نیازهای جنبش:</p>
            <ul style="text-align: justify;">
                <li>تولید محصولات رسانه‌ای</li>
                <li>تهیه محتوای تخصصی ناظر به مسائل کلان کشور یا مسائل محلی و منطقه‌ای</li>
                <li>سازماندهی و برگزاری جلسه، نشست تخصصی-ترویجی و …</li>
            </ul>
            <h3 style="text-align: justify;">حمایت مالی</h3>
            <p style="text-align: justify;">در صورت امکان و تمایل می‌توانید با کمک‌های مالی خود به جنبش از ما کمک کنید. ما مبلغ ماهانه حداقل 30 هزارتومان را برای فعالین جنبش در نظر گرفته‌ایم. البته شما در واریز مبالغ بالاتر آزاد هستید. همچنین در راستای شفافیت، صورت مالی جنبش به صورت ماهانه در سایت منتشر می‌شود. برای واریز هر مبلغی که مدنظر دارید می‌توانید از طریق فرم زیر اقدام کنید:</p>
        </div>

        <form id="form" method="post" action="<?php echo base_url('Payment/startPayment') ?>">
            <div class="row col-md-6 col-md-offset-3 col-xs-12">
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
</div>