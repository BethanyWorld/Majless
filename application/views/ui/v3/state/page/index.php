<?php $_DIR = base_url('assets/ui/v3/'); ?>
<div class="page-caption">
    <?php echo $data['PageTitle']; ?>
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
        <section class="our-team-section">
            <div class="row text-justify content-container">
                <?php echo $data['PageContent']; ?>
            </div>
        </section>

    </div>


</div>