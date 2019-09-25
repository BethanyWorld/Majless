<?php $_DIR = base_url('assets/ui/v3/'); ?>
<?php if (empty($data)) { ?>
    <div class="alert alert-warning" style="margin: 10px;">موردی یافت نشد</div>
<?php } else { ?>
    <?php foreach ($data as $candidate) { ?>
        <div class="col-md-4 col-sm-6 mp">
            <div class="mp-brief">
                <div class="menu">
                    <ul>
                        <li>
                            <a href="<?php echo base_url('State/candidate_detail/' . $candidate['CandidateId'] . '/' . $stateId . "/" . $stateName); ?>">پروفایل</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('State/candidate_detail/' . $candidate['CandidateId'] . '/' . $stateId . "/" . $stateName); ?>">فهرست
                                اموال</a></li>
                        <li>
                            <a href="<?php echo base_url('State/candidate_detail/' . $candidate['CandidateId'] . '/' . $stateId . "/" . $stateName); ?>">وعده
                                های انتخاباتی</a></li>
                        <li>
                            <a href="<?php echo base_url('State/candidate_detail/' . $candidate['CandidateId'] . '/' . $stateId . "/" . $stateName); ?>">هزینه
                                های انتخابات</a></li>
                        <li>
                            <a href="<?php echo base_url('State/candidate_detail/' . $candidate['CandidateId'] . '/' . $stateId . "/" . $stateName); ?>">نتایج
                                سنجش</a></li>
                    </ul>
                </div>
                <div class="pic">
                    <img src="<?php echo $_DIR; ?>/images/profile.jpg">
                </div>
                <div class="team-content">
                    <h3 class="title">
                        سید محمود رضوی
                    </h3>
                    <h3 class="title">
                        <?php echo $candidate['CandidateNationalCode']; ?>
                    </h3>
                    <span class="post">
                                    نامزد انتخاباتی
                        <?php echo $candidate['CityName']; ?>
                                </span>
                </div>
            </div>
        </div>
    <?php }
} ?>