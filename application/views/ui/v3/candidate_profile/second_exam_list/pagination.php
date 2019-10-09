<?php
if ((isset($data) && !$data) || $data == NULL) { ?>
    <tr class="warning text-center">
        <td colspan="8" class="warning text-center">موردی یافت نشد</td>
    </tr>
<?php } else {
    $counter = 1;
    foreach ($data as $stateExam) { ?>
        <tr>
            <td class="fit text-center"><?php echo $counter++; ?></td>
            <td class="text-center"><?php echo $stateExam['ExamPlaceTitle']; ?></td>
            <td class="fit text-center">
                <button type="button"
                        class="btn btn-default"
                        data-container="body"
                        data-toggle="popover"
                        data-trigger="focus"
                        data-placement="top"
                        data-content="<?php echo $stateExam['ExamPlaceAddress']; ?>">
                    مشاهده آدرس
                </button>
            </td>
            <td class="fit text-center">
                <?php if ($stateExam['ExamPlaceMapImage'] == "" || empty($stateExam['ExamPlaceMapImage'])) { ?>
                    <label class="label label-default">بارگذاری نشده</label>
                <?php } else { ?>
                    <a target="_blank"
                       data-lightbox="image-1-<?php echo $counter; ?>"
                       data-title="<?php echo $stateExam['ExamPlaceTitle']; ?>"
                       href="<?php echo image_url($stateExam['ExamPlaceMapImage']); ?>">
                        <button class="btn btn-warning">مشاهده محل آزمون</button>
                    </a>
                <?php } ?>
            </td>
            <td class="fit text-center"><?php echo $stateExam['StateName']; ?></td>
            <td class="fit text-center"><?php echo $stateExam['ExamDate']; ?></td>
            <td class="fit text-center"><?php echo $stateExam['ExamTime']; ?></td>
            <td class="fit text-center">
                <?php if ($stateExam['ExamCapacity'] <= 0) { ?>
                    <label class="label label-default">اتمام ظرفیت</label>
                <?php } else { ?>
                    <button
                            class="btn btn-success preview-exam"
                            data-place-title="<?php echo $stateExam['ExamPlaceTitle']; ?>"
                            data-place-address="<?php echo $stateExam['ExamPlaceAddress']; ?>"
                            data-date="<?php echo $stateExam['ExamDate']; ?>"
                            data-time="<?php echo $stateExam['ExamTime']; ?>"
                            data-id="<?php echo $stateExam['ExamId']; ?>">
                        رزور
                        <i class="fa fa-edit"></i>
                    </button>
                <?php } ?>
            </td>
        </tr>
    <?php } ?>
<?php } ?>
<script type="text/javascript">
    $(document).ready(function () {
        $('[data-toggle="popover"]').popover();
    });
</script>