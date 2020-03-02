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
                                               class="form-control"
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
                                        <input type="color"
                                               class="form-control"
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
