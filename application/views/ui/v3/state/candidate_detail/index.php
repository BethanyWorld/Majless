<?php $_DIR = base_url('assets/ui/v3/'); ?>
<div class="page-caption">
    نامزد انتخاباتی استان
    <?php echo urldecode($stateName); ?>
</div>
<div class="container container-wrapper">
    <div class="row col-xs-12 col-md-3 pull-right sidebar">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title text-center">محمد محمدی</h3>
            </div>
            <div class="panel-body">
                <img style="max-width: 100%;" class="thumbnail" src="<?php echo $_DIR; ?>/images/profile.jpg">
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">اخبار و رویداد های مرتبط با این نماینده</h3>
            </div>
            <div class="panel-body">
                <ul>
                    <?php
                    if (!isset($posts['success'])) {
                        foreach ($posts as $statePost) { ?>
                            <li>
                                <a href="<?php echo base_url('State/post/' . $stateId . '/' . $statePost['PostId'] . '/' . seoUrl($statePost['PostTitle'])); ?>">
                                    <?php echo $statePost['PostTitle']; ?>
                                </a>
                            </li>
                        <?php }
                    } else { ?>
                        موردی یافت نشد
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="row col-xs-12 col-md-9 pull-left">
        <section class="col-xs-12 mp-section">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab"
                                                          data-toggle="tab">رزومه</a></li>
                <li role="presentation"><a href="#cademiccareerrecords" aria-controls="cademiccareerrecords" role="tab"
                                           data-toggle="tab">سوابق شغلی تحصیلی</a></li>
                <li role="presentation"><a href="#inventory" aria-controls="inventory" role="tab" data-toggle="tab">فهرست
                        اموال</a></li>
                <li role="presentation"><a href="#electioncosts" aria-controls="electioncosts" role="tab"
                                           data-toggle="tab">هزینه های انتخابات</a></li>
                <li role="presentation"><a href="#electionpromises" aria-controls="electionpromises" role="tab"
                                           data-toggle="tab">وعده های انتخاباتی</a></li>
                <li role="presentation"><a href="#relatedNews" aria-controls="relatedNews" role="tab"
                                           data-toggle="tab">اخبار مرتبط</a></li>
                <li role="presentation"><a href="#reportabuse" aria-controls="reportabuse" role="tab" data-toggle="tab">گزارش
                        تخلف</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="profile">
                </div>
                <div role="tabpanel" class="tab-pane" id="cademiccareerrecords">
                </div>
                <div role="tabpanel" class="tab-pane" id="inventory">
                </div>
                <div role="tabpanel" class="tab-pane" id="electioncosts">
                </div>
                <div role="tabpanel" class="tab-pane" id="electionpromises">
                </div>
                <div role="tabpanel" class="tab-pane" id="relatedNews">
                </div>
                <div role="tabpanel" class="tab-pane" id="reportabuse">
                    <div class="col-xs-12">
                        <input type="hidden" id="inputReportCandidateId" name="inputReportCandidateId"
                               value="<?php /*echo $data['CandidateId'];*/ ?>"/>
                        <input type="hidden" id="inputCSRF" name="inputCSRF" value="<?= $CSRF; ?>"/>
                        <div class="row col-xs-12 col-md-12 pull-right">
                            <div class="form-group col-xs-12 col-md-4 pull-right">
                                <label for="inputReportFullName">نام و نام خانوادگی</label>
                                <input class="form-control" type="text" id="inputReportFullName"
                                       name="inputReportFullName"/>
                            </div>
                            <div class="form-group col-xs-12 col-md-4 pull-right">
                                <label for="inputReportTitle">عنوان</label>
                                <input class="form-control" type="text" id="inputReportTitle" name="inputReportTitle"/>
                            </div>
                            <div class="form-group col-xs-12 col-md-4 pull-right">
                                <label for="inputReportPhone">تلفن همراه (نزد ما محفوظ خواهد ماند)</label>
                                <input class="form-control" type="text" id="inputReportPhone" name="inputReportPhone"/>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="inputReportContent">پیام</label>
                                <textarea class="form-control" rows="6" id="inputReportContent"
                                          name="inputReportContent"></textarea>
                            </div>
                            <div class="row col-xs-12 form-group">
                                <div class="row col-xs-12">
                                    <label>کد امنیتی</label>
                                </div>
                                <div class="pull-right">
                                    <img class="captcha_img"
                                         style="margin: 10px 5px;border: 2px solid #ccc;"
                                         src="<?php echo base_url('GetCaptcha'); ?>"/>
                                </div>
                                <div class="pull-right">
                                    <input type="text"
                                           style="position: relative;top:20px;"
                                           name="inputCaptcha" id="inputCaptcha" class="form-control"
                                           placeholder="کد امنیتی" autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary pull-left" id="submitReportForm">
                                    ارسال
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>