<?php $_DIR = base_url('assets/ui/v3/'); ?>
<?php if (empty($dataSpecial)) { ?>
    <div class="col-xs-12">
        <div class="alert alert-warning">
            موردی یافت نشد
        </div>
    </div>
<?php } else { ?>
    <?php foreach ($dataSpecial as $candidate) {
        if ($candidate['CandidateProfileImage'] !== NULL) { ?>
            <?php
            $filterClass = "Transparency-Obligation";
            $classes = array();
            $hasMerit = false;
            foreach ($candidate['badges'] as $badge) {
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
                if ($badge['CandidateBadge'] == 'Obligation') {
                    $hasObligation = true;
                    array_push($classes, $badge['CandidateBadge']);
                }
            }
            if (!$hasObligation) {
                array_push($classes, 'OffObligation');
            }

            if($hasMerit && $hasTransparency && $hasObligation){
                $filterClass = "Merit";
            }

            ?>
            <div class="col-md-4 col-md-offset-0 col-xs-12 candidate-info-box <?php echo $filterClass; ?>">
                <div class="mp-brief">
                    <?php
                        $deActiveClass = "deactive";
                        if ($candidate['CandidateHasAccepted']) {
                            $deActiveClass = "";
                        }
                    ?>
                    <div class="pic <?php echo $deActiveClass; ?>">
                        <img src="<?php echo base_url('uploads/') . $candidate['CandidateProfileImage']; ?>"
                             class="candidateImage"/>
                    </div>
                    <div class="col-md-12 col-xs-12 padding-0">
                        <?php foreach ($classes as $badge) { ?>
                            <div class="sign <?php echo $badge; ?>"></div>
                        <?php } ?>
                    </div>

                    <div class="row">
                        <h3 class="candidateName">
                            <?php echo $candidate['CandidatePreName'] . " " . $candidate['CandidateFullName']; ?>
                            <div class="election">
                                <p style="margin: 0;"><?php echo $candidate['ElectionName']; ?></p>
                            </div>
                        </h3>
                        <?php if ($candidate['CandidateHasAccepted']) { ?>
                            <a href="<?php echo base_url('State/candidate_detail/'.$candidate['CandidateRefId'].'/'.$stateId.'/'.$stateName); ?>">
                                <button class="btn invite-button" type="button">
                                    مشاهده پروفایل
                                </button>
                            </a>
                        <?php } else { ?>
                            <button class="btn btn-default" type="button" >
                                مشاهده پروفایل
                            </button>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php }
    } ?>
<?php } ?>