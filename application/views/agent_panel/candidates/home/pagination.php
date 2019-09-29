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
            <td><?php echo $item['CandidateFirstName']." ".$item['CandidateLastName']; ?></td>
            <td class="fit"><?php echo $item['CandidateNationalCode']; ?></td>
            <th class="fit"><?php echo $item['CandidatePhone']; ?></th>
            <th class="fit"><?php echo candidateStatus($item['CandidateStatus']); ?></th>
            <th class="fit"><?php echo $item['ElectionName']; ?></th>
            <td class="fit">
                <a href="<?php echo base_url('Agent/Candidates/detail/') . $item['CandidateId']; ?>">
                    <button type="button"
                            class="btn btn-info btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">rate_review</i>
                    </button>
                </a>
            </td>
        </tr>
    <?php }
} ?>