<span class="btn btn-info table-row-count"><?php echo $count; ?></span>
<?php
if ((isset($data) && !$data) || $data == NULL) { ?>
    <tr class="warning">
        <td colspan="6">موردی یافت نشد</td>
    </tr>
<?php } else {
    $counter = $startPage+1;
    foreach ($data as $reportAbuse) { ?>
        <tr>
            <td class="fit"><?php echo $counter++; ?></td>
            <td><?php echo $reportAbuse['ReportFullName']; ?></td>
            <td class="fit"><?php echo $reportAbuse['ReportTitle']; ?>
            <td class="fit"><?php echo contactFormSubject($reportAbuse['ReportPhone']); ?></td>
            <td class="fit"><?php echo formatDate($reportAbuse['CreateDateTime']); ?></td>
            <td class="fit"><?php echo contactFormVisited($reportAbuse['Visited']); ?></td>
            <td class="fit">
                <a href="<?php echo base_url('Admin/ReportAbuse/detail/') . $reportAbuse['ReportId']; ?>">
                    <button type="button"
                            class="btn btn-warning btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">rate_review</i>
                    </button>
                </a>
            </td>
        </tr>
    <?php }
} ?>