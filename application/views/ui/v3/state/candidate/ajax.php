<?php $_DIR = base_url('assets/ui/v3/'); ?>
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
            <div class="hidden-xs hidden-sm col-md-4 col-md-offset-0">
                <div class="mp-brief">
                    <?php if ($candidate['CandidateHasAccepted']) { ?>
                        <div class="pic">
                            <img src="<?php echo base_url('uploads/') . $candidate['CandidateProfileImage']; ?>"
                                 class="candidateImage"/>
                        </div>
                        <div class="col-md-12 col-xs-12 padding-0">
                            <!-- If Badge Found -->
                            <?php
                            $classes = array();

                            $hasMerit = false;
                            foreach ($candidate['badges'] as $badge) {
                                /****************************************/
                                if ($badge['CandidateBadge'] == 'GoldenMerit' || $badge['CandidateBadge'] == 'SilverMerit') {
                                    $hasMerit = true;
                                    array_push($classes, $badge['CandidateBadge']);
                                }
                            }
                            if (!$hasMerit) {
                                array_push($classes, 'OffMerit');
                            }

                            $hasTransparency = false;
                            foreach ($candidate['badges'] as $badge) {
                                if ($badge['CandidateBadge'] == 'GoldenTransparency' || $badge['CandidateBadge'] == 'SilverTransparency') {
                                    $hasTransparency = true;
                                    array_push($classes, $badge['CandidateBadge']);
                                }
                            }
                            if (!$hasTransparency) {
                                array_push($classes, 'OffTransparency');
                            }

                            $hasObligation = false;
                            foreach ($candidate['badges'] as $badge) {
                                /****************************************/
                                if ($badge['CandidateBadge'] == 'Obligation') {
                                    $hasObligation = true;
                                    array_push($classes, $badge['CandidateBadge']);
                                }
                            }
                            if (!$hasObligation) {
                                array_push($classes, 'OffObligation');
                            }
                            ?>
                            <?php foreach ($classes as $badge) { ?>
                                <div class="sign <?php echo $badge; ?>"></div>
                            <?php } ?>
                        </div>
                    <?php } else { ?>
                        <div class="pic deactive">
                            <img src="<?php echo base_url('uploads/') . $candidate['CandidateProfileImage']; ?>"
                                 class="candidateImage"/>
                        </div>
                    <?php } ?>
                    <div class="row">
                        <h3 class="candidateName">
                            <?php echo $candidate['CandidatePreName'] . " " . $candidate['CandidateFullName']; ?>
                            <div class="election">
                                <p style="margin: 0;"><?php echo $candidate['ElectionName']; ?></p>
                            </div>
                        </h3>
                        <?php if ($candidate['CandidateHasAccepted']) { ?>
                            <button
                                    data-id="<?php echo $candidate['RowId'] ?>"
                                    data-title="<?php echo $candidate['CandidatePreName'] . " " . $candidate['CandidateFullName']; ?>"
                                    data-image="<?php echo base_url('uploads/') . $candidate['CandidateProfileImage']; ?>"
                                    data-area="<?php echo $candidate['ElectionName'] ?>"
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
            <div class="hidden-md hidden-lg col-xs-12">
                <div class="mp-brief">
                    <div class="col-xs-7">
                        <h3 class="candidateName">
                            <?php echo $candidate['CandidatePreName'] . " " . $candidate['CandidateFullName']; ?>
                            <div class="election">
                                <p style="margin: 0;"><?php echo $candidate['ElectionName']; ?></p>
                            </div>
                        </h3>

                        <div class="col-xs-12 padding-0">
                            <div class="sign merit-gold"></div>
                            <div class="sign merit-off"></div>
                            <div class="sign merit-silver"></div>
                        </div>
                        <?php if ($candidate['CandidateHasAccepted']) { ?>
                            <button
                                    data-id="<?php echo $candidate['RowId'] ?>"
                                    data-title="<?php echo $candidate['CandidatePreName'] . " " . $candidate['CandidateFullName']; ?>"
                                    data-image="<?php echo base_url('uploads/') . $candidate['CandidateProfileImage']; ?>"
                                    data-area="<?php echo $candidate['ElectionName'] ?>"
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
                    <?php if ($candidate['CandidateHasAccepted']) { ?>
                        <div class="col-xs-5 rightFloat padding-0">
                            <img src="<?php echo base_url('uploads/') . $candidate['CandidateProfileImage']; ?>"
                                 class="candidateImage"/>
                        </div>
                    <?php } else { ?>
                        <div class="pic deactive">
                            <img src="<?php echo base_url('uploads/') . $candidate['CandidateProfileImage']; ?>"
                                 class="candidateImage"/>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php }
    } ?>
<?php } ?>