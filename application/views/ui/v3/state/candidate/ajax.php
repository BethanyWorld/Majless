<?php $_DIR = base_url('assets/ui/v3/'); ?>
<?php

if (empty($data)) { ?>
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
                        نامزد انتخاباتی
                        <?php echo $candidate['ElectionName']; ?>
                    </span>
                </div>
            </div>
        </div>
    <?php } ?>
<?php } ?>
<?php if (empty($dataSpecial)) { ?>
    <div class="alert alert-warning">
        موردی یافت نشد

        <a href="<?php echo base_url('State/invite'); ?>">
            نامزد انتخاباتی خود را پیدا نکردید؟ او را دعوت کنید
        </a>
    </div>
<?php } else { ?>
<?php foreach ($dataSpecial as $candidate) {
    if ($candidate['CandidateProfileImage'] !== NULL) { ?>
        <div class="col-md-4 col-md-offset-0 col-xs-8 col-xs-offset-2">
            <div class="mp-brief">
                <div class="pic">
                    <img src="<?php echo base_url('uploads/') . $candidate['CandidateProfileImage']; ?>"
                         class="candidateImage"/>
                </div>
                <div class="">
                    <h3 class="candidateName">
                        <?php echo $candidate['CandidatePreName']." ".$candidate['CandidateFullName']; ?>
                        <div class="election">
                            <p  style="margin: 0;"><?php echo $candidate['ElectionName']; ?></p>
                        </div>
                    </h3>
                    <button
                            data-id="<?php echo $candidate['RowId']?>"
                            data-title="<?php echo $candidate['CandidatePreName']." ".$candidate['CandidateFullName']; ?>"
                            data-image="<?php echo base_url('uploads/') . $candidate['CandidateProfileImage']; ?>"
                            data-area="<?php echo $candidate['ElectionName']?>"
                            class="btn invite-button" type="button"
                            data-toggle="modal" data-target="#myModal">
                        دعوت به جنبش از ما
                    </button>
                </div>
            </div>
        </div>
    <?php } } ?>
<?php } ?>