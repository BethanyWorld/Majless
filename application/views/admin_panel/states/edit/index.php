<?php $_DIR = base_url('assets/empanel/'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <div class="body">
                        <div  class="col-xs-12">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <label for="inputAgentFullName">عنوان استان</label>
                                <div class="form-group">
                                    <input type="hidden"
                                           value="<?php echo $data['StateId']; ?>"
                                           id="inputStateId" name="inputStateId"/>
                                    <div class="form-line">
                                        <input type="text" class="form-control"
                                               value="<?php echo $data['StateName']; ?>"
                                               maxlength="80" minlength="3"
                                               id="inputStateName" name="inputStateName"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <label for="inputPercentageOfParticipation">درصد مشارکت</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text"
                                               data-slug="PercentageOfParticipation"
                                               class="form-control stats-input"
                                                <?php
                                                foreach ($Statistics as $item) {
                                                    if($item['StatisticsSlug'] == 'PercentageOfParticipation'){
                                                        setInputValue($item['StatisticsValue']);
                                                    }
                                                }
                                                ?>
                                               id="inputPercentageOfParticipation" name="inputPercentageOfParticipation"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <label for="inputPercentageOfParticipationColor">رنگ</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="color" data-slug="PercentageOfParticipationColor" class="form-control stats-input"
                                            <?php
                                            foreach ($Statistics as $item) {
                                                if($item['StatisticsSlug'] == 'PercentageOfParticipationColor'){
                                                    setInputValue($item['StatisticsValue']);
                                                }
                                            }
                                            ?>
                                               id="inputPercentageOfParticipationColor" name="inputPercentageOfParticipationColor"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <label for="inputPopulation">جمعیت</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text"
                                               data-slug="Population"
                                               class="form-control stats-input"
                                            <?php
                                            foreach ($Statistics as $item) {
                                                if($item['StatisticsSlug'] == 'Population'){
                                                    setInputValue($item['StatisticsValue']);
                                                }
                                            }
                                            ?>
                                               id="inputPopulation" name="inputPopulation"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <label for="inputPopulationColor">رنگ جمعیت</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="color" data-slug="PopulationColor" class="form-control stats-input"
                                            <?php
                                            foreach ($Statistics as $item) {
                                                if($item['StatisticsSlug'] == 'PopulationColor'){
                                                    setInputValue($item['StatisticsValue']);
                                                }
                                            }
                                            ?>
                                               id="inputPopulationColor" name="inputPopulationColor"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <label for="inputNumberOfRepresentatives">تعداد نماینده</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text"
                                               data-slug="NumberOfRepresentatives"
                                               class="form-control stats-input"
                                            <?php
                                            foreach ($Statistics as $item) {
                                                if($item['StatisticsSlug'] == 'NumberOfRepresentatives'){
                                                    setInputValue($item['StatisticsValue']);
                                                }
                                            }
                                            ?>
                                               id="inputNumberOfRepresentatives" name="inputNumberOfRepresentatives"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <label for="inputNumberOfRepresentativesColor">رنگ تعداد نماینده</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="color" data-slug="NumberOfRepresentativesColor" class="form-control stats-input"
                                            <?php
                                            foreach ($Statistics as $item) {
                                                if($item['StatisticsSlug'] == 'NumberOfRepresentativesColor'){
                                                    setInputValue($item['StatisticsValue']);
                                                }
                                            }
                                            ?>
                                               id="inputNumberOfRepresentativesColor" name="inputNumberOfRepresentativesColor"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <label for="inputRatioOfPopulationToNumberOfRepresentatives">نسبت جمعیت به تعداد نماینده</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text"
                                               data-slug="RatioOfPopulationToNumberOfRepresentatives"
                                               class="form-control stats-input"
                                            <?php
                                            foreach ($Statistics as $item) {
                                                if($item['StatisticsSlug'] == 'RatioOfPopulationToNumberOfRepresentatives'){
                                                    setInputValue($item['StatisticsValue']);
                                                }
                                            }
                                            ?>
                                               id="inputRatioOfPopulationToNumberOfRepresentatives"
                                               name="inputRatioOfPopulationToNumberOfRepresentatives"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <label for="inputRatioOfPopulationToNumberOfRepresentativesColor">رنگ نسبت جمعیت به تعداد نماینده</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="color" data-slug="RatioOfPopulationToNumberOfRepresentativesColor"
                                               class="form-control stats-input"
                                            <?php
                                            foreach ($Statistics as $item) {
                                                if($item['StatisticsSlug'] == 'RatioOfPopulationToNumberOfRepresentativesColor'){
                                                    setInputValue($item['StatisticsValue']);
                                                }
                                            }
                                            ?>
                                               id="inputRatioOfPopulationToNumberOfRepresentativesColor" name="inputRatioOfPopulationToNumberOfRepresentativesColor"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <button type="button" id="editState" class="btn btn-primary waves-effect">ذخیره</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
