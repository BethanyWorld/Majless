<?php $_DIR = base_url('assets/ui/v3/'); ?>
<style>
    .btn.vote {
        padding: 8px 25px;
        border-radius: 0;
        border: 0;
        font-size: 15px;
        line-height: 32px;
        width: 100%;
    }

    .btn.vote:active,
    .btn.vote:focus {
        outline: 0;
    }

    .btn.vote span {
        position: relative;
        top: 2px;
    }

    .vote-container {
        border: 6px solid #fdb72e;
        padding: 25px 0px;
        padding-bottom: 0;
        border-radius: 4px;
        margin: 10px 0;
        box-shadow: 0px -3px 25px 1px #c8c8c8;
    }

    .vote-container i {
        display: block;
        text-align: center;
        font-size: 82px;
        margin: 35px 0;
        margin-top: 0;
    }
</style>
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
    <div class="col-xs-12 col-md-9 pull-right alerts-container">

        <?php
        /* Check if candidate has accepted by admin */
        $hasResult = false;
        $result = NULL;
        if (!empty($supervisorType)) {
            foreach ($supervisorType as $item) {
                if ($item['AcceptanceStatus'] == 'Accept' || $item['AcceptanceStatus'] == 'Reject') {
                    $hasResult = true;
                    $result = $item;
                    break;
                }
            }
        }
        ?>


        <?php if($hasResult){ ?>
            <div class="col-xs-12">
                <div class="alert alert-success text-center">
                    درخواست شما تعیین وضعیت شده است
                </div>
                <p><strong>توضیحات:</strong></p>
                <p><?php echo $item['Description']; ?></p>
                <table class="table table-bordered table-striped table-hover rtl-dir">
                    <thead>
                        <tr>
                            <th class="text-right">نوع درخواست</th>
                            <th class="fit">وضعیت درخواست</th>
                            <th class="fit">تاریخ ثبت</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if (empty($supervisorType)) {
                        echo '<tr class="text-right"><td  class="text-right" colspan="7">موردی یافت نشد</td></tr>';
                    } ?>
                    <?php foreach ($supervisorType as $item) { ?>
                        <tr>
                            <td class="text-right"><?php echo pipeSupervisorType($item['SupervisionType']); ?></td>
                            <td class="text-center"><?php echo resumeForViewPipe($item['AcceptanceStatus']); ?></td>
                            <td class="fit" dir="ltr"><?php echo $item['CreateDateTime']; ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        <?php } else{ ?>

            <p class="text-justify" style="font-weight: 900;font-size: 18px;line-height: 40px;text-align: center;">
                جنبش از ما، جهت بازرسی بر فرآیندهای مالی و گزینشی (نحوه برگزاری آزمون ها) دعوت میکند
                تا بصورت داوطلبانه برای نظارت بر فرآیند های این جنبش اعلام آمادگی کنید.
                بعد از اعلام آمادگی، تمامی داوطلبان از طریق اعضای سایت به رای دهی گذاشته شده و نتیجه
                به اطلاع شما خواهد رسید.
            </p>
            <div class="col-xs-12 text-center">
                <div class="col-xs-12 col-md-5 vote-container">
                    <i class="fa fa-500px"></i>
                    <button class="btn btn-success vote" data-supervisor-type="Finance">
                        <span> اعلام آمادگی جهت نظارت بر فرآیند مالی</span>
                    </button>
                </div>
                <div class="col-md-2 col-xs-12" style="line-height: 212px;font-size: 40px;">یا</div>
                <div class="col-xs-12 col-md-5 vote-container">
                    <i class="fa fa-code-fork"></i>
                    <button class="btn btn-primary vote" data-supervisor-type="Process">
                        <span>اعلام آمادگی جهت نظارت بر فرآیند گزینشی</span>
                    </button>
                </div>
            </div>
            <div class="col-xs-12"><br><br></div>
            <div class="col-xs-12">
                <h4>سوابق درخواست:</h4>
                <table class="table table-bordered table-striped table-hover rtl-dir">
                    <thead>
                    <tr>
                        <th class="text-right">نوع درخواست</th>
                        <th class="fit">وضعیت درخواست</th>
                        <th class="fit">تاریخ ثبت</th>
                        <th class="fit">انصراف از درخواست</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if (empty($supervisorType)) {
                        echo '<tr class="text-right"><td  class="text-right" colspan="7">موردی یافت نشد</td></tr>';
                    } ?>
                    <?php foreach ($supervisorType as $item) { ?>
                        <tr>
                            <td class="text-right"><?php echo pipeSupervisorType($item['SupervisionType']); ?></td>
                            <td class="text-center"><?php echo resumeForViewPipe($item['AcceptanceStatus']); ?></td>
                            <td class="fit" dir="ltr"><?php echo $item['CreateDateTime']; ?></td>
                            <td class="fit">
                                <button data-supervisor-type="<?php echo $item['SupervisionType']; ?>"
                                        data-row-id="<?php echo $item['RowId']; ?>"
                                        class="btn btn-danger remove-supervisor-type">
                                    <i class="fa fa-times"></i>
                                </button>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        <?php } ?>
    </div>
</div>