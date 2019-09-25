<span class="btn btn-info table-row-count"><?php echo $count; ?></span>
<?php
if ((isset($data) && !$data) || $data == NULL) { ?>
    <tr class="warning">
        <td colspan="8">موردی یافت نشد</td>
    </tr>
<?php } else {
    $counter = $startPage+1;
    foreach ($data as $item) { ?>
        <tr>
            <td class="fit"><?php echo $counter++; ?></td>
            <td><?php echo $item['ExamDate']." ".$item['ExamTime']; ?></td>
            <td><?php echo $item['ExamPlaceTitle']; ?></td>
            <th class="fit"><?php echo $item['ExamCapacity']; ?></th>
            <th class="fit"><?php echo $item['ExamPlaceDefaultCapacity']; ?></th>
            <td class="fit">
                <a href="<?php echo base_url('Agent/Exam/requests/') . $item['ExamId']; ?>">
                    <button type="button"
                            class="btn btn-info btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">rate_review</i>
                    </button>
                </a>
            </td>
            <td class="fit">
                <a href="<?php echo base_url('Agent/Exams/edit/') . $item['ExamId']; ?>">
                    <button type="button"
                            class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">rate_review</i>
                    </button>
                </a>
            </td>
            <td class="fit">
                <a class="remove-exam"
                   data-id="<?php echo $item['ExamId']; ?>" data-title="<?php echo $item['ExamDate']." ".$item['ExamTime']; ?>">
                    <button type="button"
                            class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">close</i>
                    </button>
                </a>
            </td>
        </tr>
    <?php }
} ?>