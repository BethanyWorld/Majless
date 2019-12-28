<?php $_DIR = base_url('assets/ui/v3/'); ?>
<?php
if (empty($data)) { ?>
    <div class="alert alert-warning" style="margin: 10px;display: inline-block;width: 100%;">موردی یافت نشد</div>
<?php } else { ?>
    <?php foreach ($data as $candidate) { ?>
        <div class="col-md-4 col-sm-6 mp">
            <div class="mp-brief">
                <div class="menu">
                    <ul>
                        <li><a href="<?php echo base_url('State/candidate_detail/' . $candidate['CandidateId'] . '/' . $stateId . "/" . $stateName); ?>">رزومه</a></li>
                        <li><a href="<?php echo base_url('State/candidate_detail/' . $candidate['CandidateId'] . '/' . $stateId . "/" . $stateName); ?>">فهرست اموال</a></li>
                        <li><a href="<?php echo base_url('State/candidate_detail/' . $candidate['CandidateId'] . '/' . $stateId . "/" . $stateName); ?>">وعده های انتخاباتی</a></li>
                        <li><a href="<?php echo base_url('State/candidate_detail/' . $candidate['CandidateId'] . '/' . $stateId . "/" . $stateName); ?>">هزینه های انتخابات</a></li>
                        <li><a href="<?php echo base_url('State/candidate_detail/' . $candidate['CandidateId'] . '/' . $stateId . "/" . $stateName); ?>">تعهدنامه</a></li>
                        <li><a href="<?php echo base_url('State/candidate_detail/' . $candidate['CandidateId'] . '/' . $stateId . "/" . $stateName); ?>">نتایج سنجش</a></li>
                        <li><a href="<?php echo base_url('State/candidate_detail/' . $candidate['CandidateId'] . '/' . $stateId . "/" . $stateName); ?>">اخبار </a></li>
                        <li><a href="<?php echo base_url('State/candidate_detail/' . $candidate['CandidateId'] . '/' . $stateId . "/" . $stateName); ?>">گزارش تخلف </a></li>
                    </ul>
                </div>
                <div class="pic">
                    <img src="<?php echo $_DIR; ?>/images/profile.jpg">
                </div>
                <div class="team-content">
                    <h3 class="title">
                        <?php echo $candidate['CandidateFirstName'] . " " . $candidate['CandidateLastName']; ?>
                    </h3>
                    <span class="post">
                                    نامزد انتخاباتی <?php echo $candidate['ElectionName']; ?>
                                </span>
                </div>
            </div>
        </div>
    <?php } ?>
<?php } ?>

<div class="row col-xs-12 alert alert-info"  style="margin: 10px;display: inline-block;width: 100%;">نامزد های ویژه</div>
<?php foreach ($dataSpecial as $candidate) { ?>
    <div class="col-md-4 col-sm-6 mp">
        <div class="mp-brief">
            <div class="pic">
                <img src="<?php echo $_DIR; ?>/images/profile.jpg">
            </div>
            <div class="team-content">
                <h3 class="title">
                    <?php echo $candidate['CandidateFirstName'] . " " . $candidate['CandidateLastName']; ?>
                </h3>
                <span class="post">
                    نامزد انتخاباتی <?php echo $candidate['ElectionName']; ?>
                </span>
            </div>
        </div>
    </div>
<?php } ?>