<?php
$_DIR = base_url('assets/ui/v3/');
?>
<div class="container container-wrapper" style="background: none;">

    <?php echo $resumeSidebar; ?>

    <div class="col-xs-12 col-md-9 pull-right response-padding">
        <div class="LeftPanel">
            <div class="LeftPanelcontent">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="panel panel-default LeftPanelShadow">
                            <div class="panel-heading">
                                سوابق علمی پژوهشی
                            </div>
                            <div class="panel-body">

                                <div class="tabs">
                                    <div class="tab-button-outer">
                                        <ul id="tab-button">
                                            <li><a href="#tab01">سوابق علمی پژوهشی</a></li>
                                            <li><a href="#tab02">بارگذاری مدارک</a></li>
                                        </ul>
                                    </div>

                                    <div id="tab01" class="tab-contents">
                                        <div class="row">
                                            <!--Books -->
                                            <div class="col-md-12 col-xs-12">
                                                <div class="panel panel-default LeftPanelShadow">
                                                    <div class="panel-heading">
                                                        تالیف کتاب
                                                        <span class="add-form fa fa-plus waves">
                                    <span class="fa fa-plus" id="plus-wave"></span>
                                </span>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-xs-12">
                                                                <hr>
                                                                <form id="form-books">
                                                                    <span class="divider"></span>
                                                                    <?php foreach ($userInfo['candidateBooks'] as $item) { ?>
                                                                        <div class="col-md-12 col-xs-12 padding-0 form">
                                                                            <span class="remove-form fa fa-times"></span>
                                                                            <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                                <label for="inputCandidateBookTitle">
                                                                                    عنوان کتاب
                                                                                    <span class="text-danger">
                                                    <b class="text-danger">*</b></span>
                                                                                </label>
                                                                                <input id="inputCandidateBookTitle" type="text"
                                                                                       name="inputCandidateBookTitle"
                                                                                    <?php setInputValue($item['CandidateBookTitle']); ?>
                                                                                       placeholder="پر کردن این فیلد الزامی می باشد">
                                                                            </div>
                                                                            <div class="col-md-3 col-xs-12 form-group RightFloat">
                                                                                <label for="inputCandidateBookPublisher">
                                                                                    ناشر
                                                                                    <span class="text-danger">
                                                    <b class="text-danger">*</b></span>
                                                                                </label>
                                                                                <input id="inputCandidateBookPublisher" type="text"
                                                                                       name="inputCandidateBookPublisher"
                                                                                    <?php setInputValue($item['CandidateBookPublisher']); ?>
                                                                                       placeholder="پر کردن این فیلد الزامی می باشد">
                                                                            </div>
                                                                            <div class="col-md-2 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                <label for="inputCandidateBookPublishMonth">
                                                                                    ماه انتشار
                                                                                    <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                                                </label>
                                                                                <select class="form-control form-control-lg city-select"
                                                                                        name="inputCandidateBookPublishMonth"
                                                                                        id="inputCandidateBookPublishMonth">
                                                                                    <?php foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) { ?>
                                                                                        <option
                                                                                            <?php setOptionSelected($item['CandidateBookPublishMonth'], $key); ?>
                                                                                                value="<?php echo $key; ?>">
                                                                                            <?php echo $value; ?>
                                                                                        </option>
                                                                                    <?php } ?>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-2 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                <label for="inputCandidateBookPublishYear">
                                                                                    سال انتشار
                                                                                    <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                                                </label>
                                                                                <select class="form-control form-control-lg city-select"
                                                                                        name="inputCandidateBookPublishYear"
                                                                                        id="inputCandidateBookPublishYear"
                                                                                        style="font-family: tahoma;">
                                                                                    <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                        <option
                                                                                            <?php setOptionSelected($item['CandidateBookPublishYear'], $i); ?>
                                                                                                value="<?php echo $i; ?>">
                                                                                            <?php echo $i; ?>
                                                                                        </option>
                                                                                    <?php } ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    <?php } ?>
                                                                </form>
                                                                <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                                                    <span class="remove-form fa fa-times"></span>
                                                                    <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                        <label for="inputCandidateBookTitle">
                                                                            عنوان کتاب
                                                                            <span class="text-danger">
                                                    <b class="text-danger">*</b></span>
                                                                        </label>
                                                                        <input id="inputCandidateBookTitle" type="text"
                                                                               name="inputCandidateBookTitle"
                                                                               placeholder="پر کردن این فیلد الزامی می باشد">
                                                                    </div>
                                                                    <div class="col-md-3 col-xs-12 form-group RightFloat">
                                                                        <label for="inputCandidateBookPublisher">
                                                                            ناشر
                                                                            <span class="text-danger">
                                                    <b class="text-danger">*</b></span>
                                                                        </label>
                                                                        <input id="inputCandidateBookPublisher" type="text"
                                                                               name="inputCandidateBookPublisher"
                                                                               placeholder="پر کردن این فیلد الزامی می باشد">
                                                                    </div>
                                                                    <div class="col-md-2 col-xs-12 col-sm-12 form-group RightFloat">
                                                                        <label for="inputCandidateBookPublishMonth">
                                                                            ماه انتشار
                                                                            <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                                        </label>
                                                                        <select class="form-control form-control-lg city-select"
                                                                                name="inputCandidateBookPublishMonth"
                                                                                id="inputCandidateBookPublishMonth">
                                                                            <?php foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) { ?>
                                                                                <option value="<?php echo $key; ?>">
                                                                                    <?php echo $value; ?>
                                                                                </option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-2 col-xs-12 col-sm-12 form-group RightFloat">
                                                                        <label for="inputCandidateBookPublishYear">
                                                                            سال انتشار
                                                                            <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                                        </label>
                                                                        <select class="form-control form-control-lg city-select"
                                                                                name="inputCandidateBookPublishYear"
                                                                                id="inputCandidateBookPublishYear"
                                                                                style="font-family: tahoma;">
                                                                            <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                <option
                                                                                    <?php if ($i == 1398) echo "selected"; ?>
                                                                                        value="<?php echo $i; ?>">
                                                                                    <?php echo $i; ?>
                                                                                </option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="LeftPaneAction">
                                                        <div class="row form-group">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <button class="btn btn-block btn-lg CommonButtons waves-effect"
                                                                        id="updateProfileBooks">
                                                                    ثبت
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Books -->

                                            <!--Articles -->
                                            <div class="col-md-12 col-xs-12">
                                                <div class="panel panel-default LeftPanelShadow">
                                                    <div class="panel-heading">
                                                        مقالات علمی
                                                        <span class="add-form fa fa-plus waves">
                                    <span class="fa fa-plus" id="plus-wave"></span>
                                </span>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-xs-12">
                                                                <hr>
                                                                <form id="form-articles">
                                                                    <span class="divider"></span>
                                                                    <?php foreach ($userInfo['candidateArticles'] as $item) { ?>
                                                                        <div class="col-md-12 col-xs-12 padding-0 form">
                                                                            <span class="remove-form fa fa-times"></span>
                                                                            <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                                <label for="inputCandidateArticleTitle">
                                                                                    عنوان مقاله
                                                                                    <span class="text-danger">
                                                    <b class="text-danger">*</b></span>
                                                                                </label>
                                                                                <input id="inputCandidateArticleTitle" type="text"
                                                                                    <?php setInputValue($item['CandidateArticleTitle']); ?>
                                                                                       name="inputCandidateArticleTitle"
                                                                                       placeholder="پر کردن این فیلد الزامی می باشد">
                                                                            </div>
                                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                <label for="inputCandidateArticleLevel">
                                                                                    سطح مقاله
                                                                                    <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                                                </label>
                                                                                <select class="form-control form-control-lg city-select"
                                                                                        name="inputCandidateArticleLevel"
                                                                                        id="inputCandidateArticleLevel">
                                                                                    <?php foreach ($EnumResumeProfile['ArticleLevelType'] as $key => $value) { ?>
                                                                                        <option
                                                                                            <?php setOptionSelected($item['CandidateArticleLevel'], $key); ?>
                                                                                                value="<?php echo $key; ?>">
                                                                                            <?php echo $value; ?>
                                                                                        </option>
                                                                                    <?php } ?>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                                <label for="inputCandidateArticleMagazineTitle">
                                                                                    عنوان مجله
                                                                                    <span class="text-danger">
                                                    <b class="text-danger">*</b></span>
                                                                                </label>
                                                                                <input id="inputCandidateArticleMagazineTitle" type="text"
                                                                                       name="inputCandidateArticleMagazineTitle"
                                                                                    <?php setInputValue($item['CandidateArticleMagazineTitle']); ?>
                                                                                       placeholder="پر کردن این فیلد الزامی می باشد">
                                                                            </div>
                                                                            <div class="col-md-2 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                <label for="inputCandidateArticlePublishMonth">
                                                                                    ماه انتشار
                                                                                    <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                                                </label>
                                                                                <select class="form-control form-control-lg city-select"
                                                                                        name="inputCandidateArticlePublishMonth"
                                                                                        id="inputCandidateArticlePublishMonth">
                                                                                    <?php foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) { ?>
                                                                                        <option
                                                                                            <?php setOptionSelected($item['CandidateArticlePublishMonth'], $key); ?>
                                                                                                value="<?php echo $key; ?>">
                                                                                            <?php echo $value; ?>
                                                                                        </option>
                                                                                    <?php } ?>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-2 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                <label for="inputCandidateArticlePublishYear">
                                                                                    سال انتشار
                                                                                    <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                                                </label>
                                                                                <select class="form-control form-control-lg city-select"
                                                                                        name="inputCandidateArticlePublishYear"
                                                                                        id="inputCandidateArticlePublishYear"
                                                                                        style="font-family: tahoma;">
                                                                                    <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                        <option
                                                                                            <?php setOptionSelected($item['CandidateArticlePublishYear'], $i); ?>
                                                                                                value="<?php echo $i; ?>">
                                                                                            <?php echo $i; ?>
                                                                                        </option>
                                                                                    <?php } ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    <?php } ?>
                                                                </form>
                                                                <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                                                    <span class="remove-form fa fa-times"></span>
                                                                    <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                        <label for="inputCandidateArticleTitle">
                                                                            عنوان مقاله
                                                                            <span class="text-danger">
                                                    <b class="text-danger">*</b></span>
                                                                        </label>
                                                                        <input id="inputCandidateArticleTitle" type="text"
                                                                               name="inputCandidateArticleTitle"
                                                                               placeholder="پر کردن این فیلد الزامی می باشد">
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                        <label for="inputCandidateArticleLevel">
                                                                            سطح مقاله
                                                                            <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                                        </label>
                                                                        <select class="form-control form-control-lg city-select"
                                                                                name="inputCandidateArticleLevel"
                                                                                id="inputCandidateArticleLevel">
                                                                            <?php foreach ($EnumResumeProfile['ArticleLevelType'] as $key => $value) { ?>
                                                                                <option value="<?php echo $key; ?>">
                                                                                    <?php echo $value; ?>
                                                                                </option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                        <label for="inputCandidateArticleMagazineTitle">
                                                                            عنوان مجله
                                                                            <span class="text-danger">
                                                    <b class="text-danger">*</b></span>
                                                                        </label>
                                                                        <input id="inputCandidateArticleMagazineTitle" type="text"
                                                                               name="inputCandidateArticleMagazineTitle"
                                                                               placeholder="پر کردن این فیلد الزامی می باشد">
                                                                    </div>
                                                                    <div class="col-md-2 col-xs-12 col-sm-12 form-group RightFloat">
                                                                        <label for="inputCandidateArticlePublishMonth">
                                                                            ماه انتشار
                                                                            <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                                        </label>
                                                                        <select class="form-control form-control-lg city-select"
                                                                                name="inputCandidateArticlePublishMonth"
                                                                                id="inputCandidateArticlePublishMonth">
                                                                            <?php foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) { ?>
                                                                                <option value="<?php echo $key; ?>">
                                                                                    <?php echo $value; ?>
                                                                                </option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-2 col-xs-12 col-sm-12 form-group RightFloat">
                                                                        <label for="inputCandidateArticlePublishYear">
                                                                            سال انتشار
                                                                            <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                                        </label>
                                                                        <select class="form-control form-control-lg city-select"
                                                                                name="inputCandidateArticlePublishYear"
                                                                                id="inputCandidateArticlePublishYear"
                                                                                style="font-family: tahoma;">
                                                                            <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                <option value="<?php echo $i; ?>">
                                                                                    <?php echo $i; ?>
                                                                                </option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="LeftPaneAction">
                                                        <div class="row form-group">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <button class="btn btn-block btn-lg CommonButtons waves-effect"
                                                                        id="updateProfileArticles">
                                                                    ثبت
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Articles -->

                                            <!--Research -->
                                            <div class="col-md-12 col-xs-12">
                                                <div class="panel panel-default LeftPanelShadow">
                                                    <div class="panel-heading">
                                                        طرح پژوهشی
                                                        <span class="add-form fa fa-plus waves">
                                    <span class="fa fa-plus" id="plus-wave"></span>
                                </span>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-xs-12">
                                                                <hr>
                                                                <form id="form-research">
                                                                    <span class="divider"></span>
                                                                    <?php foreach ($userInfo['candidateResearch'] as $item) { ?>
                                                                        <div class="col-md-12 col-xs-12 padding-0 form">
                                                                            <span class="remove-form fa fa-times"></span>
                                                                            <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                                <label for="inputCandidateResearchTitle">
                                                                                    نام طرح
                                                                                    <span class="text-danger">
                                                    <b class="text-danger">*</b></span>
                                                                                </label>
                                                                                <input id="inputCandidateResearchTitle" type="text"
                                                                                       name="inputCandidateResearchTitle"
                                                                                    <?php setInputValue($item['CandidateResearchTitle']); ?>
                                                                                       placeholder="پر کردن این فیلد الزامی می باشد">
                                                                            </div>
                                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                <label for="inputCandidateResearchEmployer">
                                                                                    کارفرما
                                                                                    <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                                                </label>
                                                                                <input id="inputCandidateResearchEmployer" type="text"
                                                                                       name="inputCandidateResearchEmployer"
                                                                                    <?php setInputValue($item['CandidateResearchEmployer']); ?>
                                                                                       placeholder="پر کردن این فیلد الزامی می باشد">
                                                                            </div>
                                                                            <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                                <label for="inputCandidateResearchWorker">
                                                                                    مجری
                                                                                    <span class="text-danger">
                                                    <b class="text-danger">*</b></span>
                                                                                </label>
                                                                                <input id="inputCandidateResearchWorker" type="text"
                                                                                       name="inputCandidateResearchWorker"
                                                                                    <?php setInputValue($item['CandidateResearchWorker']); ?>
                                                                                       placeholder="پر کردن این فیلد الزامی می باشد">
                                                                            </div>
                                                                            <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                                <label for="inputCandidateResearchResponsibility">
                                                                                    مسئولیت
                                                                                    <span class="text-danger">
                                                    <b class="text-danger">*</b></span>
                                                                                </label>
                                                                                <input id="inputCandidateResearchResponsibility" type="text"
                                                                                       name="inputCandidateResearchResponsibility"
                                                                                    <?php setInputValue($item['CandidateResearchResponsibility']); ?>
                                                                                       placeholder="پر کردن این فیلد الزامی می باشد">
                                                                            </div>
                                                                            <div class="col-md-2 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                <label for="inputCandidateResearchMonth">
                                                                                    ماه چاپ
                                                                                    <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                                                </label>
                                                                                <select class="form-control form-control-lg city-select"
                                                                                        name="inputCandidateResearchMonth"
                                                                                        id="inputCandidateResearchMonth">
                                                                                    <?php foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) { ?>
                                                                                        <option
                                                                                            <?php setOptionSelected($item['CandidateResearchMonth'], $key); ?>
                                                                                                value="<?php echo $key; ?>">
                                                                                            <?php echo $value; ?>
                                                                                        </option>
                                                                                    <?php } ?>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-2 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                <label for="inputCandidateResearchYear">
                                                                                    سال چاپ
                                                                                    <span class="text-danger">
                                                                 <b class="text-danger">*</b>
                                                             </span>
                                                                                </label>
                                                                                <select class="form-control form-control-lg city-select"
                                                                                        name="inputCandidateResearchYear"
                                                                                        id="inputCandidateResearchYear"
                                                                                        style="font-family: tahoma">
                                                                                    <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                        <option
                                                                                            <?php setOptionSelected($item['CandidateResearchYear'], $i); ?>
                                                                                                value="<?php echo $i; ?>">
                                                                                            <?php echo $i; ?>
                                                                                        </option>
                                                                                    <?php } ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    <?php } ?>
                                                                </form>
                                                                <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                                                    <span class="remove-form fa fa-times"></span>
                                                                    <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                        <label for="inputCandidateResearchTitle">
                                                                            نام طرح
                                                                            <span class="text-danger">
                                                    <b class="text-danger">*</b></span>
                                                                        </label>
                                                                        <input id="inputCandidateResearchTitle" type="text"
                                                                               name="inputCandidateResearchTitle"
                                                                               placeholder="پر کردن این فیلد الزامی می باشد">
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                        <label for="inputCandidateResearchEmployer">
                                                                            کارفرما
                                                                            <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                                        </label>
                                                                        <input id="inputCandidateResearchEmployer" type="text"
                                                                               name="inputCandidateResearchEmployer"
                                                                               placeholder="پر کردن این فیلد الزامی می باشد">
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                        <label for="inputCandidateResearchWorker">
                                                                            مجری
                                                                            <span class="text-danger">
                                                    <b class="text-danger">*</b></span>
                                                                        </label>
                                                                        <input id="inputCandidateResearchWorker" type="text"
                                                                               name="inputCandidateResearchWorker"
                                                                               placeholder="پر کردن این فیلد الزامی می باشد">
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                        <label for="inputCandidateResearchResponsibility">
                                                                            مسئولیت
                                                                            <span class="text-danger">
                                                    <b class="text-danger">*</b></span>
                                                                        </label>
                                                                        <input id="inputCandidateResearchResponsibility" type="text"
                                                                               name="inputCandidateResearchResponsibility"
                                                                               placeholder="پر کردن این فیلد الزامی می باشد">
                                                                    </div>
                                                                    <div class="col-md-2 col-xs-12 col-sm-12 form-group RightFloat">
                                                                        <label for="inputCandidateResearchMonth">
                                                                            ماه چاپ
                                                                            <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                                        </label>
                                                                        <select class="form-control form-control-lg city-select"
                                                                                name="inputCandidateResearchMonth"
                                                                                id="inputCandidateResearchMonth">
                                                                            <?php foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) { ?>
                                                                                <option value="<?php echo $key; ?>">
                                                                                    <?php echo $value; ?>
                                                                                </option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-2 col-xs-12 col-sm-12 form-group RightFloat">
                                                                        <label for="inputCandidateResearchYear">
                                                                            سال چاپ
                                                                            <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                                        </label>
                                                                        <select class="form-control form-control-lg city-select"
                                                                                name="inputCandidateResearchYear"
                                                                                id="inputCandidateResearchYear"
                                                                                style="font-family: tahoma">
                                                                            <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                <option value="<?php echo $i; ?>">
                                                                                    <?php echo $i; ?>
                                                                                </option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="LeftPaneAction">
                                                        <div class="row form-group">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <button class="btn btn-block btn-lg CommonButtons waves-effect"
                                                                        id="updateProfileResearch">
                                                                    ثبت
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Research -->

                                            <!--Translate -->
                                            <div class="col-md-12 col-xs-12">
                                                <div class="panel panel-default LeftPanelShadow">
                                                    <div class="panel-heading">
                                                        ترجمه
                                                        <span class="add-form fa fa-plus waves">
                                    <span class="fa fa-plus" id="plus-wave"></span>
                                </span>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-xs-12">
                                                                <hr>
                                                                <form id="form-translate">
                                                                    <span class="divider"></span>
                                                                    <?php foreach ($userInfo['candidateTranslation'] as $item) { ?>
                                                                        <div class="col-md-12 col-xs-12 padding-0 form">
                                                                            <span class="remove-form fa fa-times"></span>
                                                                            <div class="col-md-2 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                <label for="inputCandidateTranslationType">
                                                                                    نوع اثر
                                                                                    <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                                                </label>
                                                                                <select class="form-control form-control-lg city-select"
                                                                                        name="inputCandidateTranslationType"
                                                                                        id="inputCandidateTranslationType">
                                                                                    <?php foreach ($EnumResumeProfile['TranslateType'] as $key => $value) { ?>
                                                                                        <option
                                                                                            <?php setOptionSelected($item['CandidateTranslationType'], $key); ?>
                                                                                                value="<?php echo $key; ?>">
                                                                                            <?php echo $value; ?>
                                                                                        </option>
                                                                                    <?php } ?>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                                <label for="inputCandidateTranslationTitle">
                                                                                    عنوان
                                                                                    <span class="text-danger">
                                                    <b class="text-danger">*</b></span>
                                                                                </label>
                                                                                <input id="inputCandidateTranslationTitle" type="text"
                                                                                       name="inputCandidateTranslationTitle"
                                                                                    <?php setInputValue($item['CandidateTranslationTitle']); ?>
                                                                                       placeholder="پر کردن این فیلد الزامی می باشد">
                                                                            </div>
                                                                            <div class="col-md-3 col-xs-12 form-group RightFloat">
                                                                                <label for="inputCandidateBookPublisher">
                                                                                    ناشر
                                                                                    <span class="text-danger">
                                                    <b class="text-danger">*</b></span>
                                                                                </label>
                                                                                <input id="inputCandidateTranslationPublisher" type="text"
                                                                                       name="inputCandidateTranslationPublisher"
                                                                                    <?php setInputValue($item['CandidateTranslationPublisher']); ?>
                                                                                       placeholder="پر کردن این فیلد الزامی می باشد">
                                                                            </div>
                                                                            <div class="col-md-2 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                <label for="inputCandidateTranslationMonth">
                                                                                    ماه چاپ
                                                                                    <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                                                </label>
                                                                                <select class="form-control form-control-lg city-select"
                                                                                        name="inputCandidateTranslationMonth"
                                                                                        id="inputCandidateTranslationMonth">
                                                                                    <?php foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) { ?>
                                                                                        <option
                                                                                            <?php setOptionSelected($item['CandidateTranslationMonth'], $key); ?>
                                                                                                value="<?php echo $key; ?>">
                                                                                            <?php echo $value; ?>
                                                                                        </option>
                                                                                    <?php } ?>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-2 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                <label for="inputCandidateTranslationYear">
                                                                                    سال چاپ
                                                                                    <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                                                </label>
                                                                                <select class="form-control form-control-lg city-select"
                                                                                        name="inputCandidateTranslationYear"
                                                                                        id="inputCandidateTranslationYear"
                                                                                        style="font-family: tahoma;">
                                                                                    <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                        <option
                                                                                            <?php setOptionSelected($item['CandidateTranslationYear'], $i); ?>
                                                                                                value="<?php echo $i; ?>">
                                                                                            <?php echo $i; ?>
                                                                                        </option>
                                                                                    <?php } ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    <?php } ?>
                                                                </form>
                                                                <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                                                    <span class="remove-form fa fa-times"></span>
                                                                    <div class="col-md-2 col-xs-12 col-sm-12 form-group RightFloat">
                                                                        <label for="inputCandidateTranslationType">
                                                                            نوع اثر
                                                                            <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                                        </label>
                                                                        <select class="form-control form-control-lg city-select"
                                                                                name="inputCandidateTranslationType"
                                                                                id="inputCandidateTranslationType">
                                                                            <?php foreach ($EnumResumeProfile['TranslateType'] as $key => $value) { ?>
                                                                                <option value="<?php echo $key; ?>">
                                                                                    <?php echo $value; ?>
                                                                                </option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                        <label for="inputCandidateTranslationTitle">
                                                                            عنوان
                                                                            <span class="text-danger">
                                                    <b class="text-danger">*</b></span>
                                                                        </label>
                                                                        <input id="inputCandidateTranslationTitle" type="text"
                                                                               name="inputCandidateTranslationTitle"
                                                                               placeholder="پر کردن این فیلد الزامی می باشد">
                                                                    </div>
                                                                    <div class="col-md-3 col-xs-12 form-group RightFloat">
                                                                        <label for="inputCandidateBookPublisher">
                                                                            ناشر
                                                                            <span class="text-danger">
                                                    <b class="text-danger">*</b></span>
                                                                        </label>
                                                                        <input id="inputCandidateTranslationPublisher" type="text"
                                                                               name="inputCandidateTranslationPublisher"
                                                                               placeholder="پر کردن این فیلد الزامی می باشد">
                                                                    </div>
                                                                    <div class="col-md-2 col-xs-12 col-sm-12 form-group RightFloat">
                                                                        <label for="inputCandidateTranslationMonth">
                                                                            ماه چاپ
                                                                            <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                                        </label>
                                                                        <select class="form-control form-control-lg city-select"
                                                                                name="inputCandidateTranslationMonth"
                                                                                id="inputCandidateTranslationMonth">
                                                                            <?php foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) { ?>
                                                                                <option value="<?php echo $key; ?>">
                                                                                    <?php echo $value; ?>
                                                                                </option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-2 col-xs-12 col-sm-12 form-group RightFloat">
                                                                        <label for="inputCandidateTranslationYear">
                                                                            سال چاپ
                                                                            <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                                        </label>
                                                                        <select class="form-control form-control-lg city-select"
                                                                                name="inputCandidateTranslationYear"
                                                                                id="inputCandidateTranslationYear"
                                                                                style="font-family: tahoma;">
                                                                            <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                <option
                                                                                    <?php if ($i == 1398) echo "selected"; ?>
                                                                                        value="<?php echo $i; ?>">
                                                                                    <?php echo $i; ?>
                                                                                </option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="LeftPaneAction">
                                                        <div class="row form-group">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <button class="btn btn-block btn-lg CommonButtons waves-effect"
                                                                        id="updateProfileTranslation">
                                                                    ثبت
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Translate -->

                                            <!-- Invention -->
                                            <div class="col-md-12 col-xs-12">
                                                <div class="panel panel-default LeftPanelShadow">
                                                    <div class="panel-heading">
                                                        اختراع و ابداع
                                                        <span class="add-form fa fa-plus waves">
                                    <span class="fa fa-plus" id="plus-wave"></span>
                                </span>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-xs-12">
                                                                <hr>
                                                                <form id="form-invention">
                                                                    <span class="divider"></span>
                                                                    <?php foreach ($userInfo['candidateInvention'] as $item) { ?>
                                                                        <div class="col-md-12 col-xs-12 padding-0 form">
                                                                            <span class="remove-form fa fa-times"></span>
                                                                            <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                                <label for="inputCandidateInventionTitle">
                                                                                    عنوان اختراع
                                                                                    <span class="text-danger">
                                                    <b class="text-danger">*</b></span>
                                                                                </label>
                                                                                <input id="inputCandidateInventionTitle" type="text"
                                                                                       name="inputCandidateInventionTitle"
                                                                                    <?php setInputValue($item['CandidateInventionTitle']); ?>
                                                                                       placeholder="پر کردن این فیلد الزامی می باشد">
                                                                            </div>
                                                                            <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                                <label for="inputCandidateInventionField">
                                                                                    حوزه ابداع
                                                                                    <span class="text-danger">
                                                    <b class="text-danger">*</b></span>
                                                                                </label>
                                                                                <input id="inputCandidateInventionField" type="text"
                                                                                       name="inputCandidateInventionField"
                                                                                    <?php setInputValue($item['CandidateInventionField']); ?>
                                                                                       placeholder="پر کردن این فیلد الزامی می باشد">
                                                                            </div>
                                                                            <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                                <label for="inputCandidateInventionRegisterNumber">
                                                                                    شماره ثبت
                                                                                    <span class="text-danger">
                                                    <b class="text-danger">*</b></span>
                                                                                </label>
                                                                                <input id="inputCandidateInventionRegisterNumber" type="text"
                                                                                       name="inputCandidateInventionRegisterNumber"
                                                                                    <?php setInputValue($item['CandidateInventionRegisterNumber']); ?>
                                                                                       placeholder="پر کردن این فیلد الزامی می باشد">
                                                                            </div>
                                                                            <div class="col-xs-12 form-group RightFloat">
                                                                                <label for="inputCandidateInventionDescription">
                                                                                    شرح اختراع
                                                                                    <span class="text-danger">
                                                    <b class="text-danger">*</b></span>
                                                                                </label>
                                                                                <input id="inputCandidateInventionDescription" type="text"
                                                                                       name="inputCandidateInventionDescription"
                                                                                    <?php setInputValue($item['CandidateInventionDescription']); ?>
                                                                                       placeholder="پر کردن این فیلد الزامی می باشد">
                                                                            </div>
                                                                        </div>
                                                                    <?php } ?>
                                                                </form>
                                                                <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                                                    <span class="remove-form fa fa-times"></span>
                                                                    <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                        <label for="inputCandidateInventionTitle">
                                                                            عنوان اختراع
                                                                            <span class="text-danger">
                                                    <b class="text-danger">*</b></span>
                                                                        </label>
                                                                        <input id="inputCandidateInventionTitle" type="text"
                                                                               name="inputCandidateInventionTitle"
                                                                               placeholder="پر کردن این فیلد الزامی می باشد">
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                        <label for="inputCandidateInventionField">
                                                                            حوزه ابداع
                                                                            <span class="text-danger">
                                                    <b class="text-danger">*</b></span>
                                                                        </label>
                                                                        <input id="inputCandidateInventionField" type="text"
                                                                               name="inputCandidateInventionField"
                                                                               placeholder="پر کردن این فیلد الزامی می باشد">
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                        <label for="inputCandidateInventionRegisterNumber">
                                                                            شماره ثبت
                                                                            <span class="text-danger">
                                                    <b class="text-danger">*</b></span>
                                                                        </label>
                                                                        <input id="inputCandidateInventionRegisterNumber" type="text"
                                                                               name="inputCandidateInventionRegisterNumber"
                                                                               placeholder="پر کردن این فیلد الزامی می باشد">
                                                                    </div>
                                                                    <div class="col-xs-12 form-group RightFloat">
                                                                        <label for="inputCandidateInventiondescription">
                                                                            شرح اختراع
                                                                            <span class="text-danger">
                                                    <b class="text-danger">*</b></span>
                                                                        </label>
                                                                        <input id="inputCandidateInventiondescription" type="text"
                                                                               name="inputCandidateInventiondescription"
                                                                               placeholder="پر کردن این فیلد الزامی می باشد">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="LeftPaneAction">
                                                        <div class="row form-group">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <button class="btn btn-block btn-lg CommonButtons waves-effect"
                                                                        id="updateProfileInvention">
                                                                    ثبت
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Invention -->


                                            <!-- Conference -->
                                            <div class="col-md-12 col-xs-12">
                                                <div class="panel panel-default LeftPanelShadow">
                                                    <div class="panel-heading">
                                                        همایش علمی
                                                        <span class="add-form fa fa-plus waves">
                                    <span class="fa fa-plus" id="plus-wave"></span>
                                </span>


                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-xs-12">
                                                                <hr>
                                                                <form id="form-conference">
                                                                    <span class="divider"></span>
                                                                    <?php foreach ($userInfo['candidateConference'] as $item) { ?>
                                                                        <div class="col-md-12 col-xs-12 padding-0 form">
                                                                            <span class="remove-form fa fa-times"></span>
                                                                            <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                                <label for="inputCandidateConferenceTitle">
                                                                                    عنوان همایش
                                                                                    <span class="text-danger">
                                                    <b class="text-danger">*</b></span>
                                                                                </label>
                                                                                <input id="inputCandidateConferenceTitle" type="text"
                                                                                       name="inputCandidateConferenceTitle"
                                                                                    <?php setInputValue($item['CandidateConferenceTitle']); ?>
                                                                                       placeholder="پر کردن این فیلد الزامی می باشد">
                                                                            </div>
                                                                            <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                                <label for="inputConferenceLevelType">
                                                                                    سطح همایش
                                                                                    <span class="text-danger">
                                                    <b class="text-danger">*</b></span>
                                                                                </label>
                                                                                <select class="form-control form-control-lg city-select"
                                                                                        name="inputConferenceLevelType"
                                                                                        id="inputConferenceLevelType'">
                                                                                    <?php foreach ($EnumResumeProfile['ConferenceLevelType'] as $key => $value) { ?>
                                                                                        <option
                                                                                            <?php setOptionSelected($item['CandidateConferenceLevel'], $key); ?>
                                                                                                value="<?php echo $key; ?>">
                                                                                            <?php echo $value; ?>
                                                                                        </option>
                                                                                    <?php } ?>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                                <label for="inputCandidateConferenceAcceptType">
                                                                                    نوع پذیرش/ارائه
                                                                                    <span class="text-danger">
                                                    <b class="text-danger">*</b></span>
                                                                                </label>
                                                                                <select class="form-control form-control-lg city-select"
                                                                                        name="inputCandidateConferenceAcceptType"
                                                                                        id="inputCandidateConferenceAcceptType'">
                                                                                    <?php foreach ($EnumResumeProfile['AcceptanceOfferType'] as $key => $value) { ?>
                                                                                        <option
                                                                                            <?php setOptionSelected($item['CandidateConferenceAcceptType'], $key); ?>
                                                                                                value="<?php echo $key; ?>">
                                                                                            <?php echo $value; ?>
                                                                                        </option>
                                                                                    <?php } ?>
                                                                                </select>
                                                                            </div>

                                                                            <div class="col-md-2 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                <label for="inputCandidateConferenceMonth">
                                                                                    ماه همایش
                                                                                    <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                                                </label>
                                                                                <select class="form-control form-control-lg city-select"
                                                                                        name="inputCandidateConferenceMonth"
                                                                                        id="inputCandidateConferenceMonth">
                                                                                    <?php foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) { ?>
                                                                                        <option
                                                                                            <?php setOptionSelected($item['CandidateConferenceMonth'], $key); ?>
                                                                                                value="<?php echo $key; ?>">
                                                                                            <?php echo $value; ?>
                                                                                        </option>
                                                                                    <?php } ?>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-2 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                <label for="inputCandidateConferenceYear">
                                                                                    سال همایش
                                                                                    <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                                                </label>
                                                                                <select class="form-control form-control-lg city-select"
                                                                                        name="inputCandidateConferenceYear"
                                                                                        id="inputCandidateConferenceYear"
                                                                                        style="font-family: tahoma;">
                                                                                    <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                        <option
                                                                                            <?php setOptionSelected($item['CandidateConferenceYear'], $i); ?>
                                                                                                value="<?php echo $i; ?>">
                                                                                            <?php echo $i; ?>
                                                                                        </option>
                                                                                    <?php } ?>
                                                                                </select>
                                                                            </div>

                                                                        </div>
                                                                    <?php } ?>
                                                                </form>
                                                                <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                                                    <span class="remove-form fa fa-times"></span>
                                                                    <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                        <label for="inputCandidateConferenceTitle">
                                                                            عنوان همایش
                                                                            <span class="text-danger">
                                                    <b class="text-danger">*</b></span>
                                                                        </label>
                                                                        <input id="inputCandidateConferenceTitle" type="text"
                                                                               name="inputCandidateConferenceTitle"
                                                                               placeholder="پر کردن این فیلد الزامی می باشد">
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                        <label for="inputConferenceLevelType">
                                                                            سطح همایش
                                                                            <span class="text-danger">
                                                    <b class="text-danger">*</b></span>
                                                                        </label>
                                                                        <select class="form-control form-control-lg city-select"
                                                                                name="inputConferenceLevelType"
                                                                                id="inputConferenceLevelType'">
                                                                            <?php foreach ($EnumResumeProfile['ConferenceLevelType'] as $key => $value) { ?>
                                                                                <option value="<?php echo $key; ?>">
                                                                                    <?php echo $value; ?>
                                                                                </option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                        <label for="inputCandidateConferenceAcceptType">
                                                                            نوع پذیرش/ارائه
                                                                            <span class="text-danger">
                                                    <b class="text-danger">*</b></span>
                                                                        </label>
                                                                        <select class="form-control form-control-lg city-select"
                                                                                name="inputCandidateConferenceAcceptType"
                                                                                id="inputCandidateConferenceAcceptType'">
                                                                            <?php foreach ($EnumResumeProfile['AcceptanceOfferType'] as $key => $value) { ?>
                                                                                <option value="<?php echo $key; ?>">
                                                                                    <?php echo $value; ?>
                                                                                </option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </div>

                                                                    <div class="col-md-2 col-xs-12 col-sm-12 form-group RightFloat">
                                                                        <label for="inputCandidateConferenceMonth">
                                                                            ماه همایش
                                                                            <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                                        </label>
                                                                        <select class="form-control form-control-lg city-select"
                                                                                name="inputCandidateConferenceMonth"
                                                                                id="inputCandidateConferenceMonth">
                                                                            <?php foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) { ?>
                                                                                <option value="<?php echo $key; ?>">
                                                                                    <?php echo $value; ?>
                                                                                </option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                        <label for="inputCandidateConferenceYear">
                                                                            سال همایش
                                                                            <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                                        </label>
                                                                        <select class="form-control form-control-lg city-select"
                                                                                name="inputCandidateConferenceYear"
                                                                                id="inputCandidateConferenceYear"
                                                                                style="font-family: tahoma;">
                                                                            <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                <option
                                                                                    <?php if ($i == 1398) echo "selected"; ?>
                                                                                        value="<?php echo $i; ?>">
                                                                                    <?php echo $i; ?>
                                                                                </option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="LeftPaneAction">
                                                        <div class="row form-group">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <button class="btn btn-block btn-lg CommonButtons waves-effect"
                                                                        id="updateProfileConference">
                                                                    ثبت
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--End Conference -->
                                        </div>
                                    </div>
                                    <div id="tab02" class="tab-contents">
                                        <?php
                                        $documentPersianName = 'سوابق علمی پژوهشی';
                                        $documentName = 'Science';
                                        $documentData['documentName'] = $documentName;
                                        $documentData['documentPersianName'] = $documentPersianName;
                                        $documentData['candidateDocuments'] = $userInfo['candidateDocuments'];
                                        $this->load->view('ui/v3/candidate_profile/home/candidate_resume/upload_document', $documentData);
                                        ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="LeftPaneAction">
                <div class="row form-group">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <button class="btn btn-block btn-lg CommonButtons waves-effect"
                                id="updateScienceBackgroundAndRedirect">
                            ثبت و ادامه
                        </button>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <a href="<?php echo base_url('Profile/skills'); ?>">
                            <button class="btn btn-block btn-lg CommonButtons waves-effect">
                                مرحله بعد
                            </button>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 prev-step">
                        <a href="<?php echo base_url('Profile/politicBackground'); ?>">
                            <button class="btn btn-block btn-lg waves-effect CommonButtons prev-step">
                                مرحله قبل
                            </button>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>