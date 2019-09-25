<?php $_DIR = base_url('assets/empanel/'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <div class="body">
                        <div class="col-xs-12">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <label for="inputAgentFullName">عنوان حوزه انتخاباتی</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="hidden" class="form-control"
                                               value=" <?php echo $electionInfo['election']['ElectionId']; ?>"
                                               id="inputElectionId" name="inputElectionId"/>
                                        <input type="text" class="form-control"
                                               value=" <?php echo $electionInfo['election']['ElectionName']; ?>"
                                               id="inputElectionName" name="inputElectionName"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <label for="inputAgentStateId">استان حوزه انتخاباتی</label>
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select name="inputElectionStateId" id="inputElectionStateId"
                                                    class="btn-group bootstrap-select form-control show-tick">
                                                <option value="">-- انتخاب کنید --</option>
                                                <?php foreach ($states as $state) { ?>
                                                    <option
                                                        <?php if ($state['StateId'] == $electionInfo['election']['ElectionStateId']) echo "selected"; ?>
                                                            value="<?php echo $state['StateId']; ?>">
                                                        <?php echo $state['StateName']; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <label for="inputAgentFullName">شهر حوزه انتخاباتی</label>
                                <div class="form-group">
                                    <div class="form-line" id="electionCities">
                                        <?php
                                        $electionCityIds = array();
                                        foreach ($electionInfo['electionCities'] as $electionCity) {
                                            array_push($electionCityIds , $electionCity['CityId']);
                                        }
                                        ?>
                                        <?php foreach ($cities as $city) { ?>
                                                <input class="election-city"
                                                       <?php if(in_array($city['CityId'], $electionCityIds))   echo "checked"; ?>
                                                       id="i-<?php echo $city['CityId']; ?>"
                                                       type="checkbox" value="<?php echo $city['CityId']; ?>"/>
                                                <label for="i-<?php echo $city['CityId']; ?>"><?php echo $city['CityName']; ?></label>
                                                &nbsp;&nbsp;&nbsp;
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <button type="button" id="editElection" class="btn btn-primary waves-effect">ذخیره
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
