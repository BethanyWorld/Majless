<span class="btn btn-info table-row-count"><?php echo $count; ?></span>
<?php
if ((isset($data) && !$data) || $data == NULL) { ?>
    <tr class="warning">
        <td colspan="8">موردی یافت نشد</td>
    </tr>
<?php } else {
    $counter = $startPage+1;
    foreach ($data as $post) { ?>
        <tr>
            <td class="fit"><?php echo $counter++; ?></td>
            <td><?php echo $post['ExamPlaceTitle']; ?></td>
            <th class="fit"><?php echo $post['ExamPlaceAddress']; ?></th>
            <th class="fit"><?php echo $post['ExamPlaceDefaultCapacity']; ?></th>
            <td class="fit">
                <a href="<?php echo base_url('Admin/ExamPlaces/edit/') . $post['ExamPlaceId']; ?>">
                    <button type="button"
                            class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">rate_review</i>
                    </button>
                </a>
            </td>
            <td class="fit">
                <a class="remove-exam-place"
                   data-id="<?php echo $post['ExamPlaceId']; ?>" data-title="<?php echo $post['ExamPlaceTitle']; ?>">
                    <button type="button"
                            class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">close</i>
                    </button>
                </a>
            </td>
        </tr>
    <?php }
} ?>