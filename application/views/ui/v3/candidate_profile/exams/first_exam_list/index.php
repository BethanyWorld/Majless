<?php $_DIR = base_url('assets/ui/v3/'); ?>
<div class="container container-wrapper">
    <div class="row col-xs-12 col-md-3 pull-right">
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
                    <strong style="font-size: 14px;text-align: right;display: inline-block;">آخرین ورود:</strong>
                    <?php
                    if (!empty($this->session->userdata('UserLoginInfo')['loginRecord'])) {
                        $loginInfo = $this->session->userdata('UserLoginInfo')['loginRecord'][0];
                        ?>
                        <strong style="font-size: 14px;text-align: left;display: inline-block;direction: ltr;">
                            <?php echo $loginInfo['LoginDate']; ?>
                        </strong>
                    <?php } else { ?>
                        <strong style="font-size: 14px;text-align: left;display: inline-block;direction: ltr;">
                            <?php echo jDateTime::date("Y/m/d H:i:s", false, false); ?>
                        </strong>
                    <?php } ?>
                </div>
            </div>
    </div>
    <?php if ($userInfo['CandidateStatus'] != 'CandidateResumeMarked') { ?>
        <div class="col-xs-12 col-md-9 pull-right">
            <div class="row col-xs-12 alert alert-warning">
                شما قبلا آزمون مرحله اول خود را رزرو کرده اید
            </div>
            <a href="<?php echo base_url('Profile'); ?>">
                <button class="btn btn-primary">
                    بازگشت به پیشخوان
                </button>
            </a>
        </div>
    <?php } else { ?>
        <div class="col-xs-12 col-md-9 pull-right table-responsive">
            <div class="row hidden">
                <strong style="margin: 8px;" class="pull-right">استان برگزاری آزمون مرحله اول:</strong>
                <select name="inputStateId" id="inputStateId" style="width: 165px;float: right;margin-left: 15px;">
                    <?php foreach ($states as $state) { ?>
                        <option
                            <?php if ($candidateStateId == $state['StateId']) echo "selected"; ?>
                                value="<?php echo $state['StateId']; ?>">
                            <?php echo $state['StateName']; ?>
                        </option>
                    <?php } ?>
                </select>
                <button id="searchButton" class="btn btn-primary">جستجو</button>
            </div>
            <br>
            <div class="row">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                    <tr>
                        <th class="fit text-center">ردیف</th>
                        <th class="text-center">عنوان محل آزمون</th>
                        <th class="fit text-center">آدرس محل برگزاری</th>
                        <th class="fit text-center">تصویر محل برگزاری</th>
                        <th class="fit text-center">استان</th>
                        <th class="fit text-center">تاریخ برگزاری</th>
                        <th class="fit text-center">زمان برگزاری</th>
                        <th class="fit text-center">انتخاب</th>
                    </tr>
                    </thead>
                    <tbody class="table-rows"></tbody>
                </table>
            </div>
        </div>
    <?php } ?>
</div>
<div class="modal fade bs-example-modal-md" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="gridSystemModalLabel"></h4>
            </div>
            <div class="modal-body rtl">
                <ul class="list-group">
                    <li class="list-group-item">
                        <strong>محل برگزاری آزمون</strong>:
                        <span class="place-title"></span>
                    </li>
                    <li class="list-group-item">
                        <strong>آدرس برگزاری آزمون</strong>:
                        <span class="place-address"></span>
                    </li>
                    <li class="list-group-item">
                        <strong>تاریخ</strong>:
                        <span class="date"></span>
                    </li>
                    <li class="list-group-item">
                        <strong>زمان</strong>:
                        <span class="time"></span>
                    </li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">انصراف</button>
                <button type="button" class="btn btn-primary" id="reserveFirstStepExam">انتخاب آزمون</button>
            </div>
        </div>
    </div>
</div>