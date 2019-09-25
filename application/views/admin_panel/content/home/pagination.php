<span class="btn btn-info table-row-count"><?php echo $count; ?></span>
<?php
if ((isset($data) && !$data) || $data == NULL) { ?>
    <tr class="warning">
        <td colspan="6">موردی یافت نشد</td>
    </tr>
<?php } else {
    $counter = $startPage+1;
    foreach ($data as $content) { ?>
        <tr>
            <td class="fit"><?php echo $counter++; ?></td>
            <td><?php echo $content['ContentTitle']; ?></td>
            <td class="fit"><?php echo $content['CategoryTitle']; ?></td>
            <td class="fit"><?php echo $content['ContentAuthor']; ?></td>
            <td class="fit"><?php echo contentStatus($content['ContentStatus']); ?></td>
            <td class="fit">
                <a href="<?php echo base_url('Admin/Content/edit/') . $content['ContentId']; ?>">
                    <button type="button"
                            class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">rate_review</i>
                    </button>
                </a>
            </td>
            <td class="fit">
                <a class="remove-content"
                   data-id="<?php echo $content['ContentId']; ?>" data-title="<?php echo $content['ContentTitle']; ?>">
                    <button type="button"
                            class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">close</i>
                    </button>
                </a>
            </td>
        </tr>
    <?php }
} ?>