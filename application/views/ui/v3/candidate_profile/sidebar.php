<style>
    .panel-body{
        padding:0;
    }
    .list-group-item {
         position: relative;
         display: block;
         padding: 5px 10px;
         margin-bottom: -1px;
         background-color: #fff;
         border: 1px solid #ddd;
         font-weight: 900;
     }
</style>
<ul class="list-group" style="padding: 0;">
    <li class="list-group-item"><a href="<?php echo base_url('Profile') ?>">پیشخوان</a></li>
    <li class="list-group-item"><a href="<?php echo base_url('Profile/resume') ?>">ویرایش رزومه</a></li>
    <li class="list-group-item"><a href="<?php echo base_url('Profile/wpNews') ?>">درج اخبار مرتبط</a></li>
    <li class="list-group-item"><a style="direction: rtl;text-align: right;display: inline-block;font-size: 14px;" href="<?php echo base_url('Profile/uploadDocuments?Action=Acceptance&TR=تایید صلاحیت شورای نگهبان') ?>">بارگذاری مدارک تایید صلاحیت شورای نگهبان</a></li>
    <li class="list-group-item"><a style="direction: rtl;text-align: right;display: inline-block;font-size: 14px;" href="<?php echo base_url('Profile/uploadDocuments?Action=Resume&TR=رزومه') ?>">بارگذاری رزومه</a></li>
    <li class="list-group-item"><a style="direction: rtl;text-align: right;display: inline-block;font-size: 14px;" href="<?php echo base_url('Profile/uploadDocuments?Action=Finance&TR=اموال') ?>">بارگذاری فهرست اموال</a></li>
    <li class="list-group-item"><a style="direction: rtl;text-align: right;display: inline-block;font-size: 14px;" href="<?php echo base_url('Profile/uploadDocuments?Action=Commitment&TR=تعهدنامه') ?>">بارگذاری تعهدنامه</a></li>
    <li class="list-group-item"><a href="<?php echo base_url('Profile/account') ?>">تغییر رمز عبور</a></li>
    <li class="list-group-item"><a href="<?php echo base_url('Profile/support') ?>">حمایت مالی</a></li>
    <li class="list-group-item"><a href="<?php echo base_url('Profile/paymentHistory') ?>">تراکنش های مالی</a></li>
    <li class="list-group-item"><a href="<?php echo base_url('Profile/logOut') ?>">خروج</a></li>
</ul>