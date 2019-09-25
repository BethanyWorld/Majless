<?php $_DIR = base_url('assets/ui/v3/'); ?>
<div class="page-caption">
    استان
    <?php echo urldecode($stateName); ?>
</div>
<div class="container container-wrapper">

    <div class="row col-xs-12 col-md-3 pull-right sidebar">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">فیلتر بر اساس شهر</h3>
            </div>
            <div class="panel-body">
                <ul class="list-group" style="padding: 0;">
                    <?php foreach ($cities as $city) { ?>
                        <li class="list-group-item">
                            <label class="wrapper">
                                <input type="radio" id="inputCityId-<?php echo $city['CityId']; ?>" class="inputCityId" name="inputCityId" value="<?php echo $city['CityId']; ?>" />
                                <span class="left"></span>
                                <span class="right"></span>
                            </label>
                            <label for="inputCityId-<?php echo $city['CityId']; ?>"><?php echo $city['CityName']; ?></label>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="row col-xs-12 col-md-9 pull-left">
        <section class="mp-section">
            <h3 class="text-center" style="margin:0;margin-bottom: 30px;">
                نامزد های انتخابات مجلس استان
                <?php echo urldecode($stateName); ?></h3>


            <div class="col-md-4 col-sm-6 mp">
                <div class="mp-brief">
                    <div class="menu">
                        <ul>
                            <li><a href="<?php echo base_url('State/candidate_detail/1/1/استان'); ?>">پروفایل</a></li>
                            <li><a href="<?php echo base_url('State/candidate_detail/1/1/استان'); ?>">فهرست اموال</a></li>
                            <li><a href="<?php echo base_url('State/candidate_detail/1/1/استان'); ?>">وعده های انتخاباتی</a></li>
                            <li><a href="<?php echo base_url('State/candidate_detail/1/1/استان'); ?>">هزینه های انتخابات</a></li>
                            <li><a href="<?php echo base_url('State/candidate_detail/1/1/استان'); ?>">نتایج سنجش</a></li>
                            <li><a href="<?php echo base_url('State/candidate_detail/1/1/استان'); ?>">اخبار مرتبط</a></li>
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
                            4900354376
                        </h3>
                        <span class="post">
                                    نامزد انتخاباتی
                            شهر
                        </span>
                    </div>
                </div>
            </div>


            <div class="row candidate-container">
                <?php /* foreach ($data as $candidate) { ?>
                    <div class="col-md-4 col-sm-6 mp">
                        <div class="mp-brief">
                            <div class="menu">
                                <ul>
                                    <li><a href="<?php echo base_url('State/candidate_detail/' .$candidate['CandidateId'].'/'. $stateId."/".$stateName); ?>">پروفایل</a></li>
                                    <li><a href="<?php echo base_url('State/candidate_detail/' .$candidate['CandidateId'].'/'. $stateId."/".$stateName); ?>">فهرست اموال</a></li>
                                    <li><a href="<?php echo base_url('State/candidate_detail/' .$candidate['CandidateId'].'/'. $stateId."/".$stateName); ?>">وعده های انتخاباتی</a></li>
                                    <li><a href="<?php echo base_url('State/candidate_detail/' .$candidate['CandidateId'].'/'. $stateId."/".$stateName); ?>">هزینه های انتخابات</a></li>
                                    <li><a href="<?php echo base_url('State/candidate_detail/' .$candidate['CandidateId'].'/'. $stateId."/".$stateName); ?>">نتایج سنجش</a></li>
                                </ul>
                            </div>
                            <div class="pic">
                                <img src="<?php echo $_DIR; ?>/images/profile.jpg">
                            </div>
                            <div class="team-content">
                                <h3 class="title">
                                    <?php echo $candidate['CandidateFirstName']." ".$candidate['CandidateLastName']; ?>
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
                <?php }*/  ?>
            </div>
        </section>

    </div>


</div>