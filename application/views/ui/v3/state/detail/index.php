<?php $_DIR = base_url('assets/ui/v3/'); ?>
<div class="page-caption">
    استان <?php echo urldecode($stateName); ?>
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

    <div class="row col-xs-12 col-md-9 pull-left">
        <section class="state-news">
            <?php if (!empty($statePosts)) { ?>
                <?php foreach ($statePosts as $statePost) { ?>
                            <div class="row item">
                                <a href="<?php echo base_url('State/post/' . $stateId . '/' . $statePost['PostId'] . '/' . seoUrl($statePost['PostTitle'])); ?>">
                                    <div class="row col-md-3 col-xs-12 pull-right">
                                        <div class="pic" style="background: url('<?php echo image_url($statePost['PostImage']); ?>');"></div>
                                    </div>
                                    <div class="col-md-9 col-xs-12">
                                        <div class="content"><?php echo $statePost['PostTitle']; ?></div>
                                        <i class="fa fa-calendar"></i>
                                        &nbsp;
                                        <?php echo formatDate($statePost['CreateDateTime']); ?>
                                    </div>
                                </a>
                            </div>

                            <?php } ?>
            <?php } ?>
        </section>
    </div>
</div>