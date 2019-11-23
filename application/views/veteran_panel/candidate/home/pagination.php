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
            <td><?php echo $candidate['CandidateFirstName']." ".$candidate['CandidateLastName']; ?></td>
            <td class="fit"><?php echo $candidate['CandidateNationalCode']; ?></td>
            <td class="fit"><?php echo $candidate['CandidateScore']; ?>
            <td class="fit"><?php echo $candidate['StateName']; ?></td>
            <td class="fit"><?php echo $candidate['CityName']; ?></td>
            <td class="fit"><?php echo $candidate['ElectionName']; ?></td>
            <td class="fit"><?php echo candidateStatus($candidate['CandidateStatus']); ?></td>
            <td class="fit">
                <a href="<?php echo base_url('Admin/Candidate/edit/') . $candidate['CandidateId']; ?>">
                    <button type="button"
                            class="btn btn-info btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">rate_review</i>
                    </button>
                </a>
            </td>
<!--            <td class="fit">-->
<!--                <a class="remove-candidate"-->
<!--                   data-id="--><?php //echo $candidate['CandidateId']; ?><!--" data-title="--><?php //echo $candidate['CandidateNationalCode']; ?><!--">-->
<!--                    <button type="button"-->
<!--                            class="btn btn-danger btn-circle waves-effect waves-circle waves-float">-->
<!--                        <i class="material-icons">close</i>-->
<!--                    </button>-->
<!--                </a>-->
<!--            </td>-->
        </tr>
    <?php }
} ?>