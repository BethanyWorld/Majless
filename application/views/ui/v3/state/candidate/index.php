<?php $_DIR = base_url('assets/ui/v3/'); ?>
<div class="page-caption">
    استان
    <?php echo urldecode($stateName); ?>
</div>
<div class="container container-wrapper">

    <div class="row col-xs-12 col-md-4 pull-right sidebar">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">جستجو بر اساس حوزه انتخاباتی</h3>
            </div>
            <div class="panel-body">
                <ul class="list-group" style="padding: 0;">
                    <?php foreach ($elections as $election) { ?>
                        <li class="list-group-item">
                            <label class="wrapper">
                                <input type="radio" id="inputElectionId-<?php echo $election['ElectionId']; ?>"
                                       class="inputElectionId" name="inputElectionId"
                                       value="<?php echo $election['ElectionId']; ?>"/>
                                <span class="left"></span>
                                <span class="right"></span>
                            </label>
                            <label for="inputElectionId-<?php echo $election['ElectionId']; ?>"><?php echo $election['ElectionName']; ?></label>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="row col-xs-12 col-md-8 pull-left">
        <section class="mp-section">

            <div class="col-md-4 col-sm-6 mp">
                <div class="mp-brief">
                    <div class="menu">
                        <ul>
                            <li><a href="<?php echo base_url('State/candidate_detail/1/1/استان'); ?>">رزومه</a></li>
                            <li><a href="<?php echo base_url('State/candidate_detail/1/1/استان'); ?>">فهرست اموال</a>
                            </li>
                            <li><a href="<?php echo base_url('State/candidate_detail/1/1/استان'); ?>">وعده های
                                    انتخاباتی</a></li>
                            <li><a href="<?php echo base_url('State/candidate_detail/1/1/استان'); ?>">هزینه های
                                    انتخابات</a></li>
                            <li><a href="<?php echo base_url('State/candidate_detail/1/1/استان'); ?>">تعهدنامه</a></li>
                            <li><a href="<?php echo base_url('State/candidate_detail/1/1/استان'); ?>">نتایج سنجش</a>
                            </li>
                            <li><a href="<?php echo base_url('State/candidate_detail/1/1/استان'); ?>">اخبار </a></li>
                            <li><a href="<?php echo base_url('State/candidate_detail/1/1/استان'); ?>">گزارش تخلف </a>
                            </li>
                        </ul>
                    </div>
                    <div class="pic">
                        <img src="<?php echo $_DIR; ?>/images/profile.jpg">
                    </div>
                    <div class="team-content">
                        <h3 class="title">
                            محمد محمدی
                        </h3>
                        <h3 class="title">
                            01234567899
                        </h3>
                        <span class="post">
                                    نامزد انتخاباتی
                        </span>
                    </div>
                </div>
            </div>


            <div class="row candidate-container">
                <?php
                if(0){
                foreach ($data as $candidate) { ?>
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
                <?php } } ?>
            </div>
        </section>

    </div>


</div>