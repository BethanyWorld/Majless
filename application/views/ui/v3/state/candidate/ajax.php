<?php $_DIR = base_url('assets/ui/v3/'); ?>
<?php if (empty($dataSpecial)) { ?>
    <div class="col-xs-12">
        <div class="alert alert-warning">
            موردی یافت نشد
        </div>
    </div>
<?php } else {
    foreach ($dataSpecial as $candidate) {
        if ($candidate['CandidateProfileImage'] !== NULL) { ?>
            <?php
            $filterClass = "Transparency-Obligation";
            $classes = array();
            $links = array();
            $hasMerit = false;
            foreach ($candidate['badges'] as $badge) {
                if ($badge['CandidateBadge'] == 'GoldenMerit' || $badge['CandidateBadge'] == 'SilverMerit') {
                    $hasMerit = true;
                    array_push($classes, $badge['CandidateBadge']);
                    array_push($links, $badge['CandidateBadgeAddress']);
                }
            }
            if (!$hasMerit) {
                array_push($classes, 'OffMerit');
                array_push($links, "javascript:void(0);");
            }
            $hasTransparency = false;
            foreach ($candidate['badges'] as $badge) {
                if ($badge['CandidateBadge'] == 'GoldenTransparency' || $badge['CandidateBadge'] == 'SilverTransparency') {
                    $hasTransparency = true;
                    array_push($classes, $badge['CandidateBadge']);
                    array_push($links, $badge['CandidateBadgeAddress']);
                }
            }
            if (!$hasTransparency) {
                array_push($classes, 'OffTransparency');
                array_push($links, "javascript:void(0);");
            }
            $hasObligation = false;
            foreach ($candidate['badges'] as $badge) {
                if ($badge['CandidateBadge'] == 'Obligation') {
                    $hasObligation = true;
                    array_push($classes, $badge['CandidateBadge']);
                    array_push($links, $badge['CandidateBadgeAddress']);
                }
            }
            if (!$hasObligation) {
                array_push($classes, 'OffObligation');
                array_push($links, "javascript:void(0);");
            }
            if ($hasMerit && $hasTransparency && $hasObligation) {
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
                    $deActiveResumeClass = "";
                    if ($candidate['CandidateResumeForViewStatus'] == 'Reject') {
                        $deActiveResumeClass = "deactive resume-deactived";
                    }
                    ?>
                    <div class="pic <?php echo $deActiveClass." ".$deActiveResumeClass; ?>">
                        <img src="<?php echo base_url('uploads/') . $candidate['CPI']; ?>" class="candidateImage"/>
                    </div>
                    <div class="col-md-12 col-xs-12 padding-0">
                        <?php $index = 0; foreach ($classes as $badge) { ?>
                            <a href="<?php echo $links[$index]; ?>">
                                <div class="sign <?php echo $badge; ?>"></div>
                            </a>
                        <?php $index +=1; } ?>
                    </div>
                    <div class="col-xs-12">
                        <?php if ($candidate['CandidateOperationStatus'] == 'Flowed') { ?>
                            <span class="wanted flowed">
                            عدم اتمام فرآیند
                            </span>
                        <?php } ?>
                        <h3 class="candidateName">
                            <?php /*echo $candidate['CandidatePreName'] . " " . $candidate['CandidateFullName'];*/ ?>
                            <?php echo $candidate['CandidateFullName']; ?>
                            <div class="election">
                                <p style="margin: 0;"><?php echo $candidate['ElectionName']; ?></p>
                            </div>
                        </h3>
                        <?php if ($candidate['CandidateHasAccepted']) { ?>
                            <a target="_blank"
                               href="<?php echo base_url('State/candidate_detail/' . $candidate['CandidateRefId'] . '/' . $stateId . '/' . $stateName); ?>">
                                <button class="btn invite-button" type="button">
                                    مشاهده پروفایل
                                </button>
                            </a>
                        <?php } ?>
                        <?php if (!$candidate['CandidateHasAccepted']) { ?>
                            <button class="btn btn-default" type="button">
                                عدم شرکت در چالش شفافیت
                            </button>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php }
    }
}
    foreach ($dataSpecialNoRef as $candidate) {
        if ($candidate['CandidateProfileImage'] !== NULL) { ?>
            <div class="col-md-4 col-md-offset-0 col-xs-12 candidate-info-box">
                <div class="mp-brief">
                    <?php
                    $filterClass = "Transparency-Obligation";
                    $classes = array();
                    $links = array();
                    $hasMerit = false;
                    foreach ($candidate['badges'] as $badge) {
                        if ($badge['CandidateBadge'] == 'GoldenMerit' || $badge['CandidateBadge'] == 'SilverMerit') {
                            $hasMerit = true;
                            array_push($classes, $badge['CandidateBadge']);
                            array_push($links, $badge['CandidateBadgeAddress']);
                        }
                    }
                    if (!$hasMerit) {
                        array_push($classes, 'OffMerit');
                        array_push($links, "javascript:void(0);");
                    }
                    $hasTransparency = false;
                    foreach ($candidate['badges'] as $badge) {
                        if ($badge['CandidateBadge'] == 'GoldenTransparency' || $badge['CandidateBadge'] == 'SilverTransparency') {
                            $hasTransparency = true;
                            array_push($classes, $badge['CandidateBadge']);
                            array_push($links, $badge['CandidateBadgeAddress']);
                        }
                    }
                    if (!$hasTransparency) {
                        array_push($classes, 'OffTransparency');
                        array_push($links, "javascript:void(0);");
                    }
                    $hasObligation = false;
                    foreach ($candidate['badges'] as $badge) {
                        if ($badge['CandidateBadge'] == 'Obligation') {
                            $hasObligation = true;
                            array_push($classes, $badge['CandidateBadge']);
                            array_push($links, $badge['CandidateBadgeAddress']);
                        }
                    }
                    if (!$hasObligation) {
                        array_push($classes, 'OffObligation');
                        array_push($links, "javascript:void(0);");
                    }
                    if ($hasMerit && $hasTransparency && $hasObligation) {
                        $filterClass = "Merit";
                    }
                    ?>
                    <div class="pic deactive unaccepted-candidates">
                        <img src="<?php echo base_url('uploads/') . $candidate['CPI']; ?>" class="candidateImage"/>
                    </div>
                    <div class="col-md-12 col-xs-12 padding-0">
                        <?php $index = 0; foreach ($classes as $badge) { ?>
                            <a href="<?php echo $links[$index]; ?>">
                                <div class="sign <?php echo $badge; ?>"></div>
                            </a>
                            <?php $index +=1; } ?>
                    </div>
                    <div class="col-xs-12">
                            <span class="wanted">
                                عدم شرکت در چالش
                            </span>
                        <h3 class="candidateName">
                            <?php echo $candidate['CandidateFullName']; ?>
                            <div class="election">
                                <p style="margin: 0;"><?php echo $candidate['ElectionName']; ?></p>
                            </div>
                        </h3>
                        <a href="javascript:void(0);">
                            <button class="btn invite-button grayscale" type="button">
                                عدم شرکت در چالش
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        <?php }
    }
?>