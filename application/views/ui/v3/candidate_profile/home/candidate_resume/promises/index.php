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
                                وعده های انتخاباتی
                                <span class="add-form fa fa-plus"></span>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                        <hr>
                                        <span class="skill-divider"></span>
                                        <div  id="unique-form" class="animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                            <span class="remove-form fa fa-times"></span>
                                            <div class="col-md-12 col-xs-12 form-group">
                                                <label for="inputElectionPromise">
                                                  وعده انتخاباتی شما :
                                                    <span class="text-danger">
                                                </label>
                                                <textarea class="promise-text" id="inputElectionPromise" type="text"
                                                          name="inputSkillType"></textarea>
                                            </div>
                                        </div>
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
                        <button class="btn btn-block btn-lg CommonButtons waves-effect" id="updateProfileSkillsAndRedirect">
                            ثبت و ادامه
                        </button>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <button class="btn btn-block btn-lg CommonButtons waves-effect" id="updateProfileSkills">
                             ثبت
                        </button>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 prev-step">
                        <a href="<?php echo base_url('Profile/scienceBackground'); ?>">
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