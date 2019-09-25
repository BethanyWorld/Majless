<?php $_DIR = base_url('assets/ui/v3/');
?>
<div class="page-caption">
    <?php echo $pageTitle; ?>
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
        <section class="state-news">
            <?php foreach ($data['data'] as $item){ ?>
                <div class="row item">
                    <a href="<?php echo base_url('Content/single/' . $item['ContentId'] . '/' . seoUrl($item['ContentTitle'])); ?>">
                        <div class="row col-md-3 col-xs-12 pull-right">
                            <div class="pic" style="background: url('<?php echo image_url($item['ContentImage']); ?>');"></div>
                        </div>
                        <div class="col-md-9 col-xs-12">
                            <div class="content"><?php echo $item['ContentTitle']; ?></div>
                            <div class="content" style="color:#727272;"><?php echo $item['ContentBrief']; ?></div>
                            <i class="fa fa-calendar"></i>
                            &nbsp;
                            <?php echo formatDate($item['CreateDateTime']); ?>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </section>
    </div>
</div>