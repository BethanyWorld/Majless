<span class="btn btn-info table-row-count"><?php echo $count; ?></span>
<?php
if ((isset($data) && !$data) || $data == NULL) { ?>
    <tr class="warning">
        <td colspan="6">موردی یافت نشد</td>
    </tr>
<?php } else {
    $counter = $startPage+1;
    foreach ($data as $candidate) { ?>
        <tr>
            <td class="fit"><?php echo $counter++; ?></td>
            <td><?php echo $candidate['CandidateFullName']; ?></td>
            <td class="fit"><?php echo $candidate['StateName']; ?></td>
            <td class="fit"><?php echo $candidate['ElectionName']; ?>
            <td class="fit">
                <a target="_blank" href="<?php echo base_url('uploads/').$candidate['CandidateProfileImage']; ?>">
                    <img width="100px" src="<?php echo base_url('uploads/').$candidate['CandidateProfileImage']; ?>" />
                </a>
            </td>
            <td class="fit">
                <a class="accept-candidate-invite"
                   data-id="<?php echo $candidate['RowId']; ?>"
                   data-title="<?php echo $candidate['CandidateFullName']; ?>">
                    <button type="button"
                            class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">check</i>
                    </button>
                </a>
            </td>
            <td class="fit">
                <a class="remove-candidate-invite"
                   data-id="<?php echo $candidate['RowId']; ?>"
                   data-title="<?php echo $candidate['CandidateFullName']; ?>">
                    <button type="button"
                            class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">close</i>
                    </button>
                </a>
            </td>
        </tr>
    <?php }
} ?>