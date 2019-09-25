<script type="text/javascript">
    $(document).ready(function () {
        $(".user-count").text(<?php echo $numRows; ?>);
        if(<?php echo $numRows; ?> > 0){
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
            <a href="<?php echo getUserUrl($row['UserId'], $row['UserFullName']); ?>">
                <div class="thumb">
                    <img src="<?php echo $row['UserImage']; ?>" class="img-fluid"/>
                </div>
            </a>
            <a href="<?php echo getUserUrl($row['UserId'], $row['UserFullName']); ?>">
                <div class="body">
                    <div class="content">
                        <h4>
                            <span class="office-location">
                                <?php
                                if($row['testCount']){
                                    echo '<i style="color: green;" data-feather="award"></i>';
                                }
                                ?>
                            </span>
                            <?php echo $row['UserFullName']; ?>
                        </h4>
                        <div class="info">
                            <span class="office-location">
                                <i data-feather="map-pin"></i><?php echo $row['StateName']; ?>
                            </span>
                            <span class="office-location">
                                <i data-feather="tag"></i>
                                <?php echo $row['UserJobTitle']; ?>
                            </span>
                        </div>
                    </div>
                    <div class="more">
                        <div class="buttons">
                            <a href="<?php echo getUserUrl($row['UserId'], $row['UserFullName']); ?>"
                               class="button">مشاهده رزومه
                            </a>
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
