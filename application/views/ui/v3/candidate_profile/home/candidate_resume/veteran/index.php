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
                                سوابق ایثارگری و آزادگی
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                        <form id="form">
                                            <span class="skill-divider"></span>
                                            <div class="list-group-item animated flipInX extra-padding-top-25 odd-background-color-div">
                                                <div class="list-group-Grade col-md-12 col-xs-12 padding-0">
                                                    <div class="col-md-12 col-xs-12 margin-b-30 paddingRight-0">
                                                        <div class="col-md-12 col-xs-12 col-sm-12 veteran">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <div class="RegistrationTypeDiv">
                                                                        <input type="checkbox" value="Self"
                                                                            <?php if ($Self['IsActive']) echo "checked='checked'"; ?>
                                                                               class="roles" id="Self" name="Self">
                                                                        <label for="Self">خودم</label>
                                                                    </div>
                                                                    <span class="pull-left clickable">
                                                                        <i class="fa fa-chevron-up"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="panel-body p">
                                                                    <div class="col-md-12 col-xs-12 Radio-Buttons response-padding">
                                                                        <div class="radio Radio-Display">
                                                                            <input <?php setRadioSelected('Veteran', $Self['CandidateVeteranType']); ?>
                                                                                    id="radio1" type="radio"
                                                                                    value="Veteran" name="radio">
                                                                            <label for="radio1" class="radio-label">جانباز</label>
                                                                        </div>
                                                                        <div class="col-md-12 col-x-12 margin-t-15 PercentageOfVeterans">
                                                                            <label class=""> 0 تا 100 : &nbsp;</label>
                                                                            <input <?php setInputValue($Self['CandidateVeteranPercent']); ?>
                                                                                    type="number"
                                                                                    name="inputCandidatePercentageOfVeterans"
                                                                                    style="font-family: tahoma;"
                                                                                    min="0"/>
                                                                        </div>
                                                                        <div class="radio Radio-Display">
                                                                            <input <?php setRadioSelected('Liberation', $Self['CandidateVeteranType']); ?>
                                                                                    id="radio2" type="radio"
                                                                                    value="Liberation" name="radio">
                                                                            <label for="radio2" class="radio-label">آزاده</label>
                                                                        </div>

                                                                        <div class="col-md-12 col-xs-12 margin-t-15 liberationdate">
                                                                            <div class="col-md-5 col-xs-12 RightFloat">
                                                                                <label for="inputCandidateStartLiberationMonth">ماه
                                                                                    :&nbsp;</label>
                                                                                <input <?php setInputValue($Self['CandidateVeteranMonth']); ?>
                                                                                        type="number"
                                                                                        name="inputCandidateStartLiberationMonth"
                                                                                        style="font-family: tahoma;"
                                                                                        min="0"/>
                                                                            </div>
                                                                            <div class="col-md-5 col-xs-12 RightFloat">
                                                                                <label for="inputCandidateStartLiberationYear">سال
                                                                                    :&nbsp;</label>
                                                                                <input <?php setInputValue($Self['CandidateVeteranYear']); ?>
                                                                                        type="number"
                                                                                        name="inputCandidateStartLiberationYear"
                                                                                        style="font-family: tahoma;"
                                                                                        min="0"/>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-Grade col-md-12 col-xs-12 padding-0">
                                                    <div class="col-md-12 col-xs-12 margin-b-30 paddingRight-0">
                                                        <div class="col-md-12 col-xs-12 col-sm-12 veteran">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <div class="RegistrationTypeDiv">
                                                                        <input
                                                                            <?php if ($Wife['IsActive']) echo "checked='checked'"; ?>
                                                                                type="checkbox" value="Wife"
                                                                                class="roles"
                                                                                id="Wife" name="Wife">
                                                                        <label for="Wife">همسر</label>
                                                                    </div>
                                                                    <!--                                                                <h3 class="panel-title">Panel 1</h3>-->
                                                                    <span class="pull-left clickable">
                                                                    <i class="fa fa-chevron-up"></i>
                                                                </span>
                                                                </div>
                                                                <div class="panel-body">
                                                                    <div class="col-md-12 col-xs-12 Radio-Buttons response-padding">
                                                                        <div class="radio Radio-Display">
                                                                            <input <?php setRadioSelected('Veteran', $Wife['CandidateVeteranType']); ?>
                                                                                    id="radio1" type="radio"
                                                                                    value="Veteran" name="radio">
                                                                            <label for="radio1" class="radio-label">جانباز</label>
                                                                        </div>

                                                                        <div class="radio Radio-Display">
                                                                            <input <?php setRadioSelected('Martyr', $Wife['CandidateVeteranType']); ?>
                                                                                    id="radio3" type="radio"
                                                                                    value="Martyr" name="radio">
                                                                            <label for="radio3"
                                                                                   class="radio-label">شهید</label>
                                                                        </div>

                                                                        <div class="col-md-12 col-x-12 margin-t-15 PercentageOfVeterans">
                                                                            <label class=""> 0 تا 100 : &nbsp;</label>
                                                                            <input <?php setInputValue($Wife['CandidateVeteranPercent']); ?>
                                                                                    type="number"
                                                                                    name="inputCandidatePercentageOfVeterans"
                                                                                    style="font-family: tahoma;"
                                                                                    min="0"/>
                                                                        </div>
                                                                        <div class="radio Radio-Display">
                                                                            <input <?php setRadioSelected('Liberation', $Wife['CandidateVeteranType']); ?>
                                                                                    id="radio2" type="radio"
                                                                                    value="Liberation" name="radio">
                                                                            <label for="radio2" class="radio-label">آزاده</label>
                                                                        </div>
                                                                        <div class="col-md-12 col-xs-12 margin-t-15 liberationdate">
                                                                            <div class="col-md-5 col-xs-12 RightFloat">
                                                                                <label for="inputCandidateStartLiberationMonth">ماه
                                                                                    :&nbsp;</label>
                                                                                <input <?php setInputValue($Wife['CandidateVeteranMonth']); ?>
                                                                                        type="number"
                                                                                        name="inputCandidateStartLiberationMonth"
                                                                                        style="font-family: tahoma;"
                                                                                        min="0"/>
                                                                            </div>
                                                                            <div class="col-md-5 col-xs-12 RightFloat">
                                                                                <label for="inputCandidateStartLiberationYear">سال
                                                                                    :&nbsp;</label>
                                                                                <input <?php setInputValue($Wife['CandidateVeteranYear']); ?>
                                                                                        type="number"
                                                                                        name="inputCandidateStartLiberationYear"
                                                                                        style="font-family: tahoma;"
                                                                                        min="0"/>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-Grade col-md-12 col-xs-12 padding-0">
                                                    <div class="col-md-12 col-xs-12 margin-b-30 paddingRight-0">
                                                        <div class="col-md-12 col-xs-12 col-sm-12 veteran">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <div class="RegistrationTypeDiv">
                                                                        <input <?php if ($Children['IsActive']) echo "checked='checked'"; ?>
                                                                                type="checkbox" value="Children"
                                                                                class="roles"
                                                                                id="Children" name="Children">
                                                                        <label for="Children">
                                                                            فرزند
                                                                        </label>
                                                                    </div>
                                                                    <!--                                                                <h3 class="panel-title">Panel 1</h3>-->
                                                                    <span class="pull-left clickable">
                                                                    <i class="fa fa-chevron-up"></i>
                                                                </span>
                                                                </div>
                                                                <div class="panel-body">
                                                                    <div class="col-md-12 col-xs-12 Radio-Buttons response-padding">
                                                                        <div class="radio Radio-Display">
                                                                            <input <?php setRadioSelected('Veteran', $Children['CandidateVeteranType']); ?>
                                                                                    id="radio1" type="radio"
                                                                                    value="Veteran" name="radio">
                                                                            <label for="radio1" class="radio-label">جانباز</label>
                                                                        </div>

                                                                        <div class="radio Radio-Display">
                                                                            <input <?php setRadioSelected('Martyr', $Children['CandidateVeteranType']); ?>
                                                                                    id="radio3" type="radio"
                                                                                    value="Martyr" name="radio">
                                                                            <label for="radio3"
                                                                                   class="radio-label">شهید</label>
                                                                        </div>

                                                                        <div class="col-md-12 col-x-12 margin-t-15 PercentageOfVeterans">
                                                                            <label class=""> 0 تا 100 : &nbsp;</label>
                                                                            <input <?php setInputValue($Children['CandidateVeteranPercent']); ?>
                                                                                    type="number"
                                                                                    name="inputCandidatePercentageOfVeterans"
                                                                                    style="font-family: tahoma;"
                                                                                    min="0"/>
                                                                        </div>
                                                                        <div class="radio Radio-Display">
                                                                            <input <?php setRadioSelected('Liberation', $Children['CandidateVeteranType']); ?>
                                                                                    id="radio2" type="radio"
                                                                                    value="Liberation" name="radio">
                                                                            <label for="radio2" class="radio-label">آزاده</label>
                                                                        </div>
                                                                        <div class="col-md-12 col-xs-12 margin-t-15 liberationdate">
                                                                            <div class="col-md-5 col-xs-12 RightFloat">
                                                                                <label for="inputCandidateStartLiberationMonth">ماه
                                                                                    :&nbsp;</label>
                                                                                <input <?php setInputValue($Children['CandidateVeteranMonth']); ?>
                                                                                        type="number"
                                                                                        name="inputCandidateStartLiberationMonth"
                                                                                        style="font-family: tahoma;"
                                                                                        min="0"/>
                                                                            </div>
                                                                            <div class="col-md-5 col-xs-12 RightFloat">
                                                                                <label for="inputCandidateStartLiberationYear">سال
                                                                                    :&nbsp;</label>
                                                                                <input <?php setInputValue($Children['CandidateVeteranYear']); ?>
                                                                                        type="number"
                                                                                        name="inputCandidateStartLiberationYear"
                                                                                        style="font-family: tahoma;"
                                                                                        min="0"/>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-Grade col-md-12 col-xs-12 padding-0">
                                                    <div class="col-md-12 col-xs-12 margin-b-30 paddingRight-0">
                                                        <div class="col-md-12 col-xs-12 col-sm-12 veteran">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <div class="RegistrationTypeDiv">
                                                                        <input <?php if ($Parents['IsActive']) echo "checked='checked'"; ?>
                                                                                type="checkbox" value="Parents"
                                                                                class="roles" id="Parents"
                                                                                name="Parents">
                                                                        <label for="Parents">
                                                                            پدر / مادر
                                                                        </label>
                                                                    </div>
                                                                    <!--                                                                <h3 class="panel-title">Panel 1</h3>-->
                                                                    <span class="pull-left clickable">
                                                                    <i class="fa fa-chevron-up"></i>
                                                                </span>
                                                                </div>
                                                                <div class="panel-body">
                                                                    <div class="col-md-12 col-xs-12 Radio-Buttons response-padding">
                                                                        <div class="radio Radio-Display">
                                                                            <input <?php setRadioSelected('Veteran', $Parents['CandidateVeteranType']); ?>
                                                                                    id="radio1" type="radio"
                                                                                    value="Veteran" name="radio">
                                                                            <label for="radio1" class="radio-label">جانباز</label>
                                                                        </div>

                                                                        <div class="radio Radio-Display">
                                                                            <input <?php setRadioSelected('Martyr', $Parents['CandidateVeteranType']); ?>
                                                                                    id="radio3" type="radio"
                                                                                    value="Martyr" name="radio">
                                                                            <label for="radio3"
                                                                                   class="radio-label">شهید</label>
                                                                        </div>

                                                                        <div class="col-md-12 col-x-12 margin-t-15 PercentageOfVeterans">
                                                                            <label class=""> 0 تا 100 : &nbsp;</label>
                                                                            <input <?php setInputValue($Parents['CandidateVeteranPercent']); ?>
                                                                                    type="number"
                                                                                    name="inputCandidatePercentageOfVeterans"
                                                                                    style="font-family: tahoma;"
                                                                                    min="0"/>
                                                                        </div>
                                                                        <div class="radio Radio-Display">
                                                                            <input <?php setRadioSelected('Liberation', $Parents['CandidateVeteranType']); ?>
                                                                                    id="radio2" type="radio"
                                                                                    value="Liberation" name="radio">
                                                                            <label for="radio2" class="radio-label">آزاده</label>
                                                                        </div>
                                                                        <div class="col-md-12 col-xs-12 margin-t-15 liberationdate">
                                                                            <div class="col-md-5 col-xs-12 RightFloat">
                                                                                <label for="inputCandidateStartLiberationMonth">ماه
                                                                                    :&nbsp;</label>
                                                                                <input <?php setInputValue($Parents['CandidateVeteranMonth']); ?>
                                                                                        type="number"
                                                                                        name="inputCandidateStartLiberationMonth"
                                                                                        style="font-family: tahoma;"
                                                                                        min="0"/>
                                                                            </div>
                                                                            <div class="col-md-5 col-xs-12 RightFloat">
                                                                                <label for="inputCandidateStartLiberationYear">سال
                                                                                    :&nbsp;</label>
                                                                                <input <?php setInputValue($Parents['CandidateVeteranYear']); ?>
                                                                                        type="number"
                                                                                        name="inputCandidateStartLiberationYear"
                                                                                        style="font-family: tahoma;"
                                                                                        min="0"/>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-Grade col-md-12 col-xs-12 padding-0">
                                                    <div class="col-md-12 col-xs-12 margin-b-30 paddingRight-0">
                                                        <div class="col-md-12 col-xs-12 col-sm-12 veteran">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <div class="RegistrationTypeDiv">
                                                                        <input <?php if ($SisterBrother['IsActive']) echo "checked='checked'"; ?>
                                                                                type="checkbox" value="SisterBrother"
                                                                                class="roles" id="SisterBrother"
                                                                                name="SisterBrother">
                                                                        <label for="SisterBrother">
                                                                            برادر / خواهر
                                                                        </label>
                                                                    </div>
                                                                    <span class="pull-left clickable">
                                                                    <i class="fa fa-chevron-up"></i>
                                                                </span>
                                                                </div>
                                                                <div class="panel-body">
                                                                    <div class="col-md-12 col-xs-12 Radio-Buttons response-padding">
                                                                        <div class="radio Radio-Display">
                                                                            <input <?php setRadioSelected('Veteran', $SisterBrother['CandidateVeteranType']); ?>
                                                                                    id="radio1" type="radio"
                                                                                    value="Veteran" name="radio">
                                                                            <label for="radio1" class="radio-label">جانباز</label>
                                                                        </div>

                                                                        <div class="radio Radio-Display">
                                                                            <input <?php setRadioSelected('Martyr', $SisterBrother['CandidateVeteranType']); ?>
                                                                                    id="radio3" type="radio"
                                                                                    value="Martyr" name="radio">
                                                                            <label for="radio3"
                                                                                   class="radio-label">شهید</label>
                                                                        </div>

                                                                        <div class="col-md-12 col-x-12 margin-t-15 PercentageOfVeterans">
                                                                            <label class=""> 0 تا 100 : &nbsp;</label>
                                                                            <input <?php setInputValue($SisterBrother['CandidateVeteranPercent']); ?>
                                                                                    type="number"
                                                                                    name="inputCandidatePercentageOfVeterans"
                                                                                    style="font-family: tahoma;"
                                                                                    min="0"/>
                                                                        </div>
                                                                        <div class="radio Radio-Display">
                                                                            <input <?php setRadioSelected('Liberation', $SisterBrother['CandidateVeteranType']); ?>
                                                                                    id="radio2" type="radio"
                                                                                    value="Liberation" name="radio">
                                                                            <label for="radio2" class="radio-label">آزاده</label>
                                                                        </div>
                                                                        <div class="col-md-12 col-xs-12 margin-t-15 liberationdate">
                                                                            <div class="col-md-5 col-xs-12 RightFloat">
                                                                                <label for="inputCandidateStartLiberationMonth">ماه
                                                                                    :&nbsp;</label>
                                                                                <input <?php setInputValue($SisterBrother['CandidateVeteranMonth']); ?>
                                                                                        type="number"
                                                                                        name="inputCandidateStartLiberationMonth"
                                                                                        style="font-family: tahoma;"
                                                                                        min="0"/>
                                                                            </div>
                                                                            <div class="col-md-5 col-xs-12 RightFloat">
                                                                                <label for="inputCandidateStartLiberationYear">سال
                                                                                    :&nbsp;</label>
                                                                                <input <?php setInputValue($SisterBrother['CandidateVeteranYear']); ?>
                                                                                        type="number"
                                                                                        name="inputCandidateStartLiberationYear"
                                                                                        style="font-family: tahoma;"
                                                                                        min="0"/>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
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
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 prev-step">
                    <a href="<?php echo base_url('Profile'); ?>">
                        <button class="btn btn-block btn-lg waves-effect CommonButtons prev-step">
                           اتمام
                        </button>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <button class="btn btn-block btn-lg CommonButtons waves-effect" id="updateVeteran">
                        ثبت
                    </button>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 prev-step">
                    <a href="<?php echo base_url('Profile/skills'); ?>">
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


