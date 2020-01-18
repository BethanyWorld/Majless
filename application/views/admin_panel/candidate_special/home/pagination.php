<?php $_DIR = base_url('assets/ui/v4/'); ?>
<span class="btn btn-info table-row-count"><?php echo $count; ?></span>
<?php
if ((isset($data) && !$data) || $data == NULL) { ?>
    <tr class="warning">
        <td colspan="6">موردی یافت نشد</td>
    </tr>
<?php } else {
    $counter = $startPage + 1;
    foreach ($data as $candidate) { ?>
        <tr>
            <td class="fit"><?php echo $counter++; ?></td>
            <td>
                <?php echo $candidate['CandidatePreName'] . " " . $candidate['CandidateFullName']; ?>
                (<?php echo $candidate['CandidateInviteCount']; ?>)
            </td>
            <td class="fit"><?php echo $candidate['StateName']; ?></td>
            <td class="fit"><?php echo $candidate['ElectionName']; ?></td>
            <td class="fit"><?php echo $candidate['CandidateInstaAccount']; ?></td>
            <td class="fit">
                <a target="_blank" href="<?php echo base_url('uploads/') . $candidate['CandidateProfileImage']; ?>">
                    <img width="100px" src="<?php echo base_url('uploads/') . $candidate['CandidateProfileImage']; ?>"/>
                </a>
            </td>
            <td class="fit">
                <?php echo pipeCandidateSpecialAcceptStatus($candidate['CandidateHasAccepted']); ?>
            </td>
            <td class="fit">
                <button
                        data-id="<?php echo $candidate['RowId']; ?>"
                        data-title="<?php echo $candidate['CandidatePreName'] . " " . $candidate['CandidateFullName']; ?>"
                        type="button"
                        class="btn btn-success btn-circle waves-effect waves-circle waves-float toggle-acceptance">
                    <i class="material-icons">timeline</i>
                </button>
            </td>
            <td class="fit">
                <button
                        data-toggle="modal" data-target="#myModal"
                        data-src="<?php echo base_url('uploads/') . $candidate['CandidateProfileImage']; ?>"
                        data-area="<?php echo $candidate['ElectionName']; ?>"
                        data-title="<?php echo $candidate['CandidatePreName'] . " " . $candidate['CandidateFullName']; ?>"
                        type="button"
                        class="btn btn-warning btn-circle waves-effect waves-circle waves-float poster-preview invite-button">
                    <i class="material-icons">rate_review</i>
                </button>
            </td>
            <td class="fit">
                <a href="<?php echo base_url('Admin/Candidate/specialEdit/') . $candidate['RowId']; ?>">
                    <button type="button"
                            class="btn btn-info btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">rate_review</i>
                    </button>
                </a>
            </td>
            <td class="fit">
                <a class="remove-special-candidate"
                   data-id="<?php echo $candidate['RowId']; ?>"
                   data-title="<?php echo $candidate['CandidatePreName'] . " " . $candidate['CandidateFullName']; ?>">
                    <button type="button"
                            class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">close</i>
                    </button>
                </a>
            </td>
        </tr>
    <?php }
} ?>

