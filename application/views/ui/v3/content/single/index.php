<?php $_DIR = base_url('assets/ui/v3/');
?>
<div class="page-caption">
    <?php echo urldecode($data['ContentTitle']); ?>
</div>
<div class="container container-wrapper">
    <div class="row col-xs-12 col-md-3 pull-right sidebar">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">دسته بندی های محتوا</h3>
            </div>
            <div class="panel-body">
                <ul>
                    <?php foreach (array_reverse($categories) as $item){ ?>
                        <li>
                            <a href="<?php echo base_url('Content/category/').$item['CategoryId']."/".$item['CategoryTitle']; ?>">
                                <?php echo $item['CategoryTitle']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-md-9 pull-left">
        <?php $item = $data; ?>
            <div class="row">
                <a href="<?php echo image_url($item['ContentImage']); ?>"
                   data-lightbox="image-1" data-title="<?php echo $item['ContentTitle']; ?>">
                    <div class="box effect5" style="background: url(<?php echo image_url($item['ContentImage']); ?>);"></div>
                </a>
            </div>
            <div class="row text-center">
                <span>تاریخ انتشار</span>&nbsp;&nbsp;
                <i class="fa fa-calendar"></i>&nbsp;&nbsp;
                <?php echo formatDate($item['CreateDateTime']); ?>
            </div>
            <div class="row content-container">
                <?php echo $item['ContentDescription']; ?>
            </div>
    </div>

</div>