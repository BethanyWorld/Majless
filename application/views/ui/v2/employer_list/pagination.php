<script type="text/javascript">
    $(document).ready(function () {
        $(".employer-count").text(<?php echo $numRows; ?>);
        if(<?php echo $numRows; ?> > 0) {
            $('#pagination').bootpag({
                total: <?php echo round($numRows / $defaultPageSize); ?>,
                maxVisible: 5
            }).on("page", function (event, num) {
                loadData(num);
            });
        }
        else{
            $('#pagination').empty();
        }
        feather.replace();
    });
</script>
<?php
if ($data) {
    foreach ($data as $row) { ?>
        <div class="job-list">
            <a href="<?php echo getEmployerUrl($row['EmployerId'], $row['EmployerCompanyName']); ?>">
                <div class="thumb">
                    <img src="<?php echo $row['EmployerLogo']; ?>" class="img-fluid"/>
                </div>
            </a>
            <a href="<?php echo getEmployerUrl($row['EmployerId'], $row['EmployerCompanyName']); ?>">
                <div class="body">
                    <div class="content">
                        <h4><?php echo $row['EmployerCompanyName']; ?></h4>
                        <div class="info">
                            <span class="office-location">
                                <i data-feather="map-pin"></i><?php echo $row['StateName']; ?>
                            </span>
                            <span class="office-location">
                                <i data-feather="tag"></i>
                                <?php echo $row['totalJobCount']; ?>
                                فرصت شغلی
                            </span>
                        </div>
                    </div>
                    <div class="more">
                        <div class="buttons">
                            <a href="<?php echo getEmployerUrl($row['EmployerId'], $row['EmployerCompanyName']); ?>"
                               class="button">مشاهده فرصت های شغلی</a>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    <?php }
} else {
    ?>
    <div class="col-xs-12 alert alert-danger text-center">
        موردی یافت نشد
    </div>
<?php } ?>
