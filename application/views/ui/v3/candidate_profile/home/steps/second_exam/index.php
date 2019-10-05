<div class="col-xs-12">
     <?php if($secondStepExam['ExamState'] == 'Pend'){ ?>
         <div class="alert alert-warning">
             <strong>
                 شما آزمون مرحله دوم را رزور کرده اید.
            لطفا در تاریخ  و ساعت مشخص شده در محل آزمون حضور داشته باشید.
            </strong>
        </div>
         <ul class="list-group">
             <li class="list-group-item">
                 <strong>تاریخ برگزاری:</strong>
                 <span><?php echo $secondStepExam['ExamDate']; ?></span>
             </li>
             <li class="list-group-item">
                 <strong>ساعت برگزاری:</strong>
                 <span><?php echo $secondStepExam['ExamTime']; ?></span>
             </li>
             <li class="list-group-item">
                 <strong>آدرس محل برگزاری:</strong>
                 <span><?php echo $secondStepExam['ExamPlaceAddress']; ?></span>
             </li>
         </ul>
     <?php } ?>
     <?php if($secondStepExam['ExamState'] == 'Presence'){ ?>
         <div class="alert alert-info">
             <strong>حضور شما در آزمون تایید شده است.لطفا تا نمره دهی و تایید آزمون منتظر بمانید</strong>
         </div>
         <ul class="list-group">
             <li class="list-group-item">
                 <strong>تاریخ برگزاری:</strong>
                 <span><?php echo $secondStepExam['ExamDate']; ?></span>
             </li>
             <li class="list-group-item">
                 <strong>ساعت برگزاری:</strong>
                 <span><?php echo $secondStepExam['ExamTime']; ?></span>
             </li>
             <li class="list-group-item">
                 <strong>آدرس محل برگزاری:</strong>
                 <span><?php echo $secondStepExam['ExamPlaceAddress']; ?></span>
             </li>
         </ul>
     <?php } ?>
     <?php if($secondStepExam['ExamState'] == 'Done'){ ?>
         <div class="alert alert-success">
             <strong>
                 آزمون مرحله دوم شما تایید شده است.لطفا زمان کانون ارزیابی خود را رزور کنید
             </strong>
         </div>
         <a href="<?php echo base_url('Profile/evaluationExam') ?>" class="btn btn-danger">
             رزرو کانون ارزیابی
         </a>
     <?php } ?>
</div>