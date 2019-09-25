<?php $_DIR = base_url('assets/ui/v3/'); ?>
<div class="page-caption">
    <?php echo $data['PostTitle']; ?>
</div>
<div class="container container-wrapper">
    <div class="row col-xs-12 col-md-3 pull-right sidebar">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">نامزد های انتخاباتی</h3>
            </div>
            <div class="panel-body">
                <ul>
                    <li>
                        <a href="<?php echo base_url('State/candidate/' . $stateId . "/" . $stateName); ?>">
                            مشاهده فهرست نامزد های انتخاباتی
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <?php if (!empty($statePages)) { ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">اعلانات</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <?php foreach ($statePages as $statePage) { ?>
                            <li>
                                <a href="<?php echo base_url('State/page/' . $stateId . '/' . $statePage['PageId'] . '/' . seoUrl($statePage['PageTitle'])); ?>">
                                    <?php echo $statePage['PageTitle']; ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        <?php } ?>
    </div>

    <div class="col-xs-12 col-md-9 pull-left">
        <div class="row">
            <a href="<?php echo image_url($data['PostImage']); ?>"
               data-lightbox="image-1" data-title="<?php echo $data['PostTitle']; ?>">
                <div class="box effect5" style="background: url(<?php echo image_url($data['PostImage']); ?>);"></div>
            </a>
        </div>
        <div class="row text-center">
            <span>تاریخ انتشار</span>&nbsp;&nbsp;
            <i class="fa fa-calendar"></i>&nbsp;&nbsp;
            <?php echo formatDate($data['CreateDateTime']); ?>
        </div>
        <div class="row content-container">
            <?php echo $data['PostContent']; ?>
        </div>
    </div>

</div>