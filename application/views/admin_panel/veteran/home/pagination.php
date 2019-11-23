<span class="btn btn-info table-row-count"><?php echo $count; ?></span>
<?php
if ((isset($data) && !$data) || $data == NULL) { ?>
    <tr class="warning">
        <td colspan="6">موردی یافت نشد</td>
    </tr>
<?php } else {
    $counter = $startPage+1;
    foreach ($data as $Veteran) { ?>
        <tr>
            <td class="fit"><?php echo $counter++; ?></td>
            <td><?php echo $Veteran['VeteranFullName']; ?></td>
            <td class="fit"><?php echo $Veteran['VeteranPhone']; ?>
            <td class="fit">
                <a href="<?php echo base_url('Admin/Veteran/edit/') . $Veteran['VeteranId']; ?>">
                    <button type="button"
                            class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">rate_review</i>
                    </button>
                </a>
            </td>
            <td class="fit">
                <a class="remove-veteran"
                   data-id="<?php echo $Veteran['VeteranId']; ?>" data-title="<?php echo $Veteran['VeteranFullName']; ?>">
                    <button type="button"
                            class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">close</i>
                    </button>
                </a>
            </td>
        </tr>
    <?php }
} ?>