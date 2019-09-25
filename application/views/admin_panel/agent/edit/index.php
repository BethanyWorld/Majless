<?php $_DIR = base_url('assets/empanel/'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <div class="body">
                        <div  class="col-xs-12">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <label for="inputAgentFullName">نام و نام خانوادگی نماینده</label>
                                <div class="form-group">
                                    <input type="hidden"
                                           value="<?php echo $agent['AgentId']; ?>"
                                           id="inputAgentId" name="inputAgentId"/>
                                    <div class="form-line">
                                        <input type="text" class="form-control"
                                               value="<?php echo $agent['AgentFullName']; ?>"
                                               maxlength="80" minlength="3"
                                               id="inputAgentFullName" name="inputAgentFullName"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <label for="inputAgentPhone">تلفن همراه (به عنوان نام کاربری استفاده خواهد شد)</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control ltr text-center"
                                               maxlength="12" minlength="3"
                                               value="<?php echo $agent['AgentPhone']; ?>"
                                               id="inputAgentPhone" name="inputAgentPhone"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <label for="inputAgentStateId">استان</label>
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select name="inputAgentStateId" id="inputAgentStateId"
                                                    class="btn-group bootstrap-select form-control show-tick">
                                                <option value="">-- انتخاب کنید --</option>
                                                <?php foreach ($states as $state) { ?>
                                                    <option
                                                        <?php if ($agent['AgentStateId'] == $state['StateId']) echo "selected"; ?>
                                                            value="<?php echo $state['StateId']; ?>">
                                                        <?php echo $state['StateName']; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <button type="button" id="editAgent" class="btn btn-primary waves-effect">ذخیره</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
