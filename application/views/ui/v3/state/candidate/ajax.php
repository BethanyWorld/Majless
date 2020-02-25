<?php
foreach ($dataSpecial as $candidate) {
    $badgeCount = 0;
    $filterClass = "Transparency-Obligation";
    $classes = array();
    $links = array();
    $hasMerit = false;
    foreach ($candidate['badges'] as $badge) {
        if ($badge['CandidateBadge'] == 'GoldenMerit' || $badge['CandidateBadge'] == 'SilverMerit') {
            $hasMerit = true;
            array_push($classes, $badge['CandidateBadge']);
            array_push($links, $badge['CandidateBadgeAddress']);
            $badgeCount+=1;
            break;
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
            $badgeCount+=1;
            break;
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
            $badgeCount+=1;
            break;
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
    <div class="row col-md-4 col-md-offset-0 col-xs-12 candidate-info-box <?php echo $filterClass; ?>  <?php echo $candidate['CandidateSelectionStatus']; ?>">
        <div class="mp-brief">
            <div class="pic <?php echo $deActiveClass . " " . $deActiveResumeClass; ?>">
                <img src="<?php echo base_url('uploads/') . $candidate['CPI']; ?>" class="candidateImage"/>
            </div>
            <div class="col-md-12 col-xs-12 padding-0">
                <?php $index = 0;
                foreach ($classes as $badge) { ?>
                    <a href="<?php echo $links[$index]; ?>">
                        <div class="sign <?php echo $badge; ?>"></div>
                    </a>
                    <?php $index += 1;
                } ?>
            </div>
            <div class="col-xs-12">
                <h3 class="candidateName">
                    <?php echo $candidate['CandidateFullName']; ?>
                    <div class="election">
                        <p style="margin: 0;"><?php echo $candidate['ElectionName']; ?></p>
                    </div>
                </h3>
                <?php if ($badgeCount !== 0) { ?>
                    <a target="_blank"
                       class="wanted-new"
                       href="<?php echo base_url('State/candidate_detail/' . $candidate['CandidateRefId'] . '/' . $stateId . '/' . $stateName); ?>">
                            مشاهده پروفایل
                    </a>
                    <button
                            data-id="<?php echo $candidate['RowId']?>"
                            data-title="<?php echo $candidate['CandidatePreName']." ".$candidate['CandidateFullName']; ?>"
                            data-image="<?php echo base_url('uploads/') . $candidate['CPI']; ?>"
                            data-area="<?php echo $candidate['ElectionName']?>"
                            class="btn invite-button" type="button"
                            data-toggle="modal" data-target="#myModal">
                        دعوت به چالش
                    </button>
                <?php } ?>
                <?php if ($badgeCount == 0) { ?>
                    <span class="wanted-new">عدم شرکت در چالش</span>
                    <button
                            data-id="<?php echo $candidate['RowId']?>"
                            data-title="<?php echo $candidate['CandidatePreName']." ".$candidate['CandidateFullName']; ?>"
                            data-image="<?php echo base_url('uploads/') . $candidate['CPI']; ?>"
                            data-area="<?php echo $candidate['ElectionName']?>"
                            class="btn invite-button" type="button"
                            data-toggle="modal" data-target="#myModal">
                        دعوت به چالش
                    </button>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>