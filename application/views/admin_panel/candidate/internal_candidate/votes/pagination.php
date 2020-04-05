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
            <td><?php echo $request['ReceiverVoteInfo']['CandidateFirstName']." ".$request['ReceiverVoteInfo']['CandidateLastName']; ?></td>
            <td class="fit"><?php echo $request['StateName']; ?></td>
            <td class="fit"><?php echo $request['CityName']; ?></td>
            <td class="fit"><?php echo $request['CandidateFirstName']." ".$request['CandidateLastName']; ?></td>
            <td class="fit" dir="ltr"><?php echo $request['CreateDateTime']; ?></td>
        </tr>
    <?php }
} ?>