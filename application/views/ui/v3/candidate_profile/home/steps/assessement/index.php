<div class="col-xs-12">
    <?php if ($EvaluationExam['ExamState'] == 'Pend') { ?>
        <div class="alert alert-warning">
            <strong>
                شما آزمون مرحله اول را رزور کرده اید.
                لطفا در تاریخ و ساعت مشخص شده در محل آزمون حضور داشته باشید.
            </strong>
        </div>
        <ul class="list-group">
            <li class="list-group-item">
                <strong>تاریخ برگزاری:</strong>
                <span><?php echo $EvaluationExam['ExamDate']; ?></span>
            </li>
            <li class="list-group-item">
                <strong>ساعت برگزاری:</strong>
                <span><?php echo $EvaluationExam['ExamTime']; ?></span>
            </li>
            <li class="list-group-item">
                <strong>آدرس محل برگزاری:</strong>
                <span><?php echo $EvaluationExam['ExamPlaceAddress']; ?></span>
            </li>
        </ul>
    <?php } ?>
    <?php if ($EvaluationExam['ExamState'] == 'Done') { ?>
        <div class="alert alert-success">
            <strong>
                رزومه شما برای دسترسی عموم در سایت قرار گرفت
            </strong>
        </div>
    <?php } ?>
</div>