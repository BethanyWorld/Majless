<span class="btn btn-info table-row-count"><?php echo $count; ?></span>
<?php
if ((isset($data) && !$data) || $data == NULL) { ?>
    <tr class="warning">
        <td colspan="6">موردی یافت نشد</td>
    </tr>
<?php } else {
    $counter = $startPage+1;
    foreach ($data as $request) { ?>
        <tr>
            <td class="fit"><?php echo $counter++; ?></td>
            <td class="fit"><?php echo pipeSupervisorType($request['SupervisionType']); ?></td>
            <td><?php echo $request['CandidateFirstName']." ".$request['CandidateLastName']; ?></td>
            <td class="fit"><?php echo $request['StateName']; ?></td>
            <td class="fit"><?php echo $request['CityName']; ?></td>
            <td class="text-center"><?php echo resumeForViewPipe($request['AcceptanceStatus']); ?></td>
            <td class="fit">
                <a href="<?php echo base_url('Admin/InternalCandidate/edit/') . $request['RowId']; ?>">
                    <button type="button"
                            class="btn btn-info btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">rate_review</i>
                    </button>
                </a>
            </td>
        </tr>
    <?php }
} ?>