<?php $_DIR = base_url('assets/ui/v3/'); ?>
<?php if (empty($data)) { ?>
    <div class="alert alert-warning">
        موردی یافت نشد

        <a href="<?php echo base_url('State/invite'); ?>">
            نامزد انتخاباتی خود را پیدا نکردید؟ او را دعوت کنید
        </a>
    </div>
<?php } else { ?>
    <?php foreach ($data as $candidate) { ?>
        <div class="col-md-4 col-md-offset-0 col-xs-8 col-xs-offset-2">
            <div class="mp-brief">
                <div class="pic">
                    <img src="<?php echo $candidate['CandidateProfileImage']; ?>"
                         class="candidateImage"/>
                </div>
                <div class="badge">
                    <img src="http://mortensassi.com/create/assets/certificate.svg"/>
                    <span class="star star--0"></span>
                    <img src="http://mortensassi.com/create/assets/certificate.svg"/>
                    <span class="star star--0"></span>
                    <img src="http://mortensassi.com/create/assets/certificate.svg"/>
                    <span class="star star--0"></span>
                </div>
                <div class="row">
                    <h3 class="candidateName">
                        <?php echo $candidate['CandidateFirstName'] . " " . $candidate['CandidateLastName']; ?>
                        <div class="election">
                            <p style="margin: 0;"><?php echo $candidate['ElectionName']; ?></p>
                        </div>
                    </h3>
                    <a href="<?php echo  base_url('State/candidate_detail/' . $candidate['CandidateId'] . '/' . $stateId . '/' . $stateName); ?>">
                        <button class="btn invite-link" type="button">
                            مشاهده رزومه
                        </button>
                    </a>
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
                <?php if ($candidate['CandidateHasAccepted']) { ?>
                    <div class="pic">
                        <img src="<?php echo base_url('uploads/') . $candidate['CandidateProfileImage']; ?>" class="candidateImage"/>
                    </div>
                <?php } else { ?>
                    <div class="pic deactive">
                        <img src="<?php echo base_url('uploads/') . $candidate['CandidateProfileImage']; ?>" class="candidateImage"/>
                    </div>
                <?php } ?>

                <div class="row">
                    <h3 class="candidateName">
                        <?php echo $candidate['CandidatePreName']." ".$candidate['CandidateFullName']; ?>
                        <div class="election">
                            <p  style="margin: 0;"><?php echo $candidate['ElectionName']; ?></p>
                        </div>
                    </h3>
                    <?php if ($candidate['CandidateHasAccepted']) { ?>
                        <button
                                data-id="<?php echo $candidate['RowId']?>"
                                data-title="<?php echo $candidate['CandidatePreName']." ".$candidate['CandidateFullName']; ?>"
                                data-image="<?php echo base_url('uploads/') . $candidate['CandidateProfileImage']; ?>"
                                data-area="<?php echo $candidate['ElectionName']?>"
                                class="btn invite-button" type="button"
                                data-toggle="modal" data-target="#myModal">
                            دعوت به جنبش از ما
                        </button>
                    <?php } else { ?>
                        <button class="btn btn-default" type="button" disabled>
                            دعوت به جنبش از ما
                        </button>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php } } ?>
<?php } ?>