<div class="col-xs-12">
    <?php
    if(!empty($firstStepExam) && $firstStepExam['ExamState'] == 'Absence'){ ?>
        <div class="alert alert-danger">
            <strong>
                شما در آزمون غیبت کرده اید.فرصت مجددی برای رزرو آزمون برای شما فراهم شده است.لطفا آزمون مرحله اول خود را مجددا رزرو کنید
            </strong>
        </div>
    <?php } ?>
</div>
<div class="col-xs-12">
    <p class="alert alert-warning">
        <strong>
            روزمه شما نمره دهی شد. امتیاز رزومه شما
            <label class="label label-info"><?php echo $userInfo['CandidateScore']; ?></label>
            می باشد
        </strong>
    </p>
</div>
<div class="col-xs-12">
    اکنون شما میتوانید یکی از آزمون های مرحله اول را انتخاب کنید.
    <a href="<?php echo base_url('Profile/examList') ?>" class="btn btn-danger">
        رزرو آزمون
    </a>
</div>