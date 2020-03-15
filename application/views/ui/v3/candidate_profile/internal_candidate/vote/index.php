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
    <div class="col-xs-12 col-md-9 pull-right alerts-container">
        <div class="tabs">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                        داوطلبان نظارت بر فرآیند ها
                    </a>
                </li>
                <li role="presentation">
                    <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
                        داوطلبان نظارت مالی
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="home">
                    <div id="tab01" class="tab-contents">
                        <?php
                        $hasProcessVotedBefore = false;
                        if (!empty($voteHistory)) {
                            foreach ($voteHistory as $item) {
                                if ($item['SupervisionType'] == 'Process') {
                                    $hasProcessVotedBefore = true;
                                    break;
                                }
                            }
                        }
                        if ($hasProcessVotedBefore) {
                            echo "رای شما ثبت شده است.شما فقط یکبار مجاز به رای دادن هستید.بزودی نتایج بر روی پنل شما قابل مشاهده خواهد بود";
                        }
                        else {
                            foreach ($allRequests as $item) {
                                if ($item['SupervisionType'] == 'Process') { ?>
                                    <div class="col-xs-12 vote-container">
                                        <div class="col-md-2 col-xs-6 pull-right img-container">
                                            <img class="img img-responsive"
                                                 src="<?php echo $item['CandidateProfileImage']; ?>"/>
                                        </div>
                                        <div class="col-md-10 col-xs-6 text-right candidate-info">
                                            <div class="col-md-8 col-xs-12 pull-right">
                                                <p><?php echo $item['CandidateFirstName'] . " " . $item['CandidateLastName']; ?></p>
                                                <p>
                                                    استان
                                                    <?php echo $item['StateName']; ?>
                                                    -
                                                    شهر
                                                    <?php echo $item['CityName']; ?>
                                                </p>
                                                <p>
                                                    داوطلب
                                                    <?php echo pipeSupervisorType($item['SupervisionType']); ?>
                                                </p>
                                            </div>
                                            <div class="col-md-4 col-xs-12 pull-right">
                                                <button
                                                        class="vote"
                                                        data-id="<?php echo $item['EncryptionRowId']; ?>">
                                                    <i class="fa fa-check"></i>
                                                    <span>رای میدهم</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                <?php }
                            }
                        } ?>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="profile">
                    <div id="tab02" class="tab-contents">
                        <?php
                        $hasFinanceVotedBefore = false;
                        if (!empty($voteHistory)) {
                            foreach ($voteHistory as $item) {
                                if ($item['SupervisionType'] == 'Finance') {
                                    $hasFinanceVotedBefore = true;
                                    break;
                                }
                            }
                        }
                        if ($hasFinanceVotedBefore) {
                            echo "رای شما ثبت شده است.شما فقط یکبار مجاز به رای دادن هستید.بزودی نتایج بر روی پنل شما قابل مشاهده خواهد بود";
                        }
                        else {
                            foreach ($allRequests as $item) {
                                if ($item['SupervisionType'] == 'Finance') { ?>
                                    <div class="col-xs-12 vote-container">
                                        <div class="col-md-2 col-xs-6 pull-right img-container">
                                            <img class="img img-responsive"
                                                 src="<?php echo $item['CandidateProfileImage']; ?>"/>
                                        </div>
                                        <div class="col-md-10 col-xs-6 text-right candidate-info">
                                            <div class="col-md-8 col-xs-12 pull-right">
                                                <p><?php echo $item['CandidateFirstName'] . " " . $item['CandidateLastName']; ?></p>
                                                <p>
                                                    استان
                                                    <?php echo $item['StateName']; ?>
                                                    -
                                                    شهر
                                                    <?php echo $item['CityName']; ?>
                                                </p>
                                                <p>
                                                    داوطلب
                                                    <?php echo pipeSupervisorType($item['SupervisionType']); ?>
                                                </p>
                                            </div>
                                            <div class="col-md-4 col-xs-12 pull-right">
                                                <button
                                                        class="vote"
                                                        data-id="<?php echo $item['EncryptionRowId']; ?>">
                                                    <i class="fa fa-check"></i>
                                                    <span>رای میدهم</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                <?php }
                            }
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>