<?php $_DIR = base_url('assets/ui/v3/'); ?>
<div class="container container-wrapper" style="background: none;">
    <div class="row col-xs-12 col-md-3 pull-right">
        <div class="row col-xs-12  pull-right">
            <div class="row col-xs-12 pull-right sidebar">
                <div class="col-md-12 col-md-offset-0 col-sm-6 col-s-offset-3 col-xs-6 col-xs-offset-3 padding-0">
                    <img class="thumbnail profile-image"
                         width="100%" height="135px"
                         id="imageProfile"
                         src="<?php echo $noImg; ?>"/>
                </div>
                <div class="col-md-12 col-xs-12 col-sm-12 padding-0">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <?php echo $userInfo['CandidateFirstName'] . " " . $userInfo['CandidateLastName']; ?>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <?php echo $sidebar; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-9 pull-right table-responsive">
        <table class="table table-hover table-bordered table-condensed">
            <thead>
            <tr>
                <th class="fit text-center">ردیف</th>
                <th class="fit text-center">نوع</th>
                <th>مبلغ</th>
                <th class="fit text-center">کد مرجع</th>
                <th class="fit text-center">وضعیت</th>
                <th class="fit text-center">تاریخ</th>
            </tr>
            </thead>
            <tbody>
            <?php $i=0; foreach ($paymentHistory as $item) { ?>
                <tr>
                    <td class="fit text-center"><?php echo $i+=1;; ?></td>
                    <td class="fit text-center"><?php echo PaymentType($item['PaymentType']); ?></td>
                    <td><?php echo number_format($item['PaymentPrice']); ?></td>
                    <td class="fit text-center"><?php echo $item['PaymentReferenceId']; ?></td>
                    <td class="fit text-center"><?php echo paymentStatus($item['PaymentStatus']); ?></td>
                    <td class="fit text-center"><?php echo $item['CreateDateTime']; ?></td>
                </tr>
            <?php } ?>
            <?php if (empty($paymentHistory)) { ?>
                <tr>
                    <td class="fit text-center" colspan="6">
                        موردی یافت نشد
                    </td>
                </tr>
            <?php } ?>

            </tbody>
        </table>
    </div>
</div>