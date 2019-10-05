
<div class="col-xs-12">
    <?php if($secondStepExam['ExamState'] == 'Absence'){ ?>
        <div class="alert alert-danger">
            <strong>
                شما در آزمون غیبت کرده اید.فرصت مجددی برای رزور آزمون برای شما فراهم شده است.لطفا آزمون مرحله دوم خود را مجددا رزرو کنید
            </strong>
        </div>
    <?php } ?>
</div>

<div class="col-xs-12">
     <?php if($firstStepExam['ExamState'] == 'Pend'){ ?>
         <div class="alert alert-warning">
             <strong>
                 شما آزمون مرحله اول را رزور کرده اید.
            لطفا در تاریخ  و ساعت مشخص شده در محل آزمون حضور داشته باشید.
            </strong>
        </div>
         <ul class="list-group">
             <li class="list-group-item">
                 <strong>تاریخ برگزاری:</strong>
                 <span><?php echo $firstStepExam['ExamDate']; ?></span>
             </li>
             <li class="list-group-item">
                 <strong>ساعت برگزاری:</strong>
                 <span><?php echo $firstStepExam['ExamTime']; ?></span>
             </li>
             <li class="list-group-item">
                 <strong>آدرس محل برگزاری:</strong>
                 <span><?php echo $firstStepExam['ExamPlaceAddress']; ?></span>
             </li>
         </ul>
     <?php } ?>
     <?php if($firstStepExam['ExamState'] == 'Presence'){ ?>
         <div class="alert alert-info">
             <strong>حضور شما در آزمون تایید شده است.لطفا تا نمره دهی و تایید آزمون منتظر بمانید</strong>
         </div>
         <ul class="list-group">
             <li class="list-group-item">
                 <strong>تاریخ برگزاری:</strong>
                 <span><?php echo $firstStepExam['ExamDate']; ?></span>
             </li>
             <li class="list-group-item">
                 <strong>ساعت برگزاری:</strong>
                 <span><?php echo $firstStepExam['ExamTime']; ?></span>
             </li>
             <li class="list-group-item">
                 <strong>آدرس محل برگزاری:</strong>
                 <span><?php echo $firstStepExam['ExamPlaceAddress']; ?></span>
             </li>
         </ul>
     <?php } ?>
     <?php if($firstStepExam['ExamState'] == 'Done'){ ?>
         <div class="alert alert-success">
             <strong>
                 آزمون مرحله اول شما تایید شده است.لطفا آزمون مرحله دوم خود را رزور کنید
             </strong>
         </div>
         <a href="<?php echo base_url('Profile/examListSecond') ?>" class="btn btn-danger">
             رزرو آزمون مرحله دوم
         </a>
     <?php } ?>
</div>