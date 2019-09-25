<script type="text/javascript">
    $(document).ready(function(){
        $(".job-count").text(<?php echo $numRows; ?>);
        if(<?php echo $numRows; ?> > 0){
            $('#pagination').bootpag({
                total: <?php echo round($numRows/$defaultPageSize); ?>,
                maxVisible: 5
            }).on("page", function(event, num){
                loadData(num);
            });
        } else{
            $('#pagination').empty();
        }
        feather.replace();
    });
</script>
<?php
if ($data) {
    foreach ($data as $row) { ?>
        <div class="job-list">
            <a href="<?php echo getJobUrl($row['JobId'], $row['JobTitle']); ?>">
                <div class="thumb">
                    <img src="<?php echo $row['EmployerLogo']; ?>" class="img-fluid"
                         alt="<?php echo $row['EmployerFullName']; ?>"/>
                </div>
            </a>
            <a href="<?php echo getJobUrl($row['JobId'], $row['JobTitle']); ?>">
                <div class="body">
                    <div class="content">
                        <h4><?php echo $row['JobTitle']; ?></h4>
                        <div class="info">
                        <span class="company">
                                                        <i data-feather="briefcase"></i><?php echo $row['CategoryName']; ?>
                                                    </span>
                            <span class="office-location">
                                                            <i data-feather="map-pin"></i><?php echo $row['StateName']; ?>
                                                    </span>
                            <span class="job-type temporary">
                                                            <i data-feather="clock"></i>
                                <?php foreach ($jobContractType as $key => $value) {
                                    if ($row['JobContractType'] == $key) {
                                        echo $value;
                                    }
                                } ?>
                                                    </span>
                        </div>
                    </div>
                    <div class="more">
                        <div class="buttons">
                            <a href="<?php echo getJobUrl($row['JobId'], $row['JobTitle']); ?>" class="button">ارسال
                                رزومه
                            </a>
                        </div>
                        <p class="deadline">
                            <?php echo getDateFirstPart($row['CreateDateTime']); ?>
                        </p>
                    </div>
                </div>
            </a>
        </div>
    <?php }
}
else{?>
    <div class="col-xs-12 alert alert-danger text-center">
        موردی یافت نشد
    </div>
<?php } ?>
