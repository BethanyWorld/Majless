<?php $_DIR = base_url('assets/ui/v3/'); ?>
<div class="container container-wrapper" style="background: none;">
    <?php echo $resumeSidebar; ?>
    <div class="col-md-9 col-xs-12 pull-right response-padding">
        <div class="LeftPanel">
            <div class="LeftPanelcontent">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="panel panel-default LeftPanelShadow">
                            <div class="panel-heading">
                                سوابق سیاسی
                                <span class="add-form fa fa-plus waves">
                                    <span class="fa fa-plus" id="plus-wave"></span>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-xs-12">


                                        <div class="tabs">
                                            <div class="tab-button-outer">
                                                <ul id="tab-button">
                                                    <li><a href="#tab01">سوابق سیاسی</a></li>
                                                    <li><a href="#tab02">بارگذاری مدارک</a></li>
                                                </ul>
                                            </div>
                                            <div id="tab01" class="tab-contents">
                                                <div class="list-group-item ul-background-color-hr">
                                                    <form id="form">
                                                        <span class="skill-divider"></span>
                                                        <?php foreach ($userInfo['politicBackground'] as $item) { ?>
                                                            <div id="<?php echo md5(rand(1000, 9999)); ?>"
                                                                 class="list-group-item extra-padding-top-25 odd-background-color-div">
                                                                <span class="remove-form fa fa-times"></span>
                                                                <div class="list-group-Grade col-md-12 col-xs-12 padding-0">
                                                                    <!--for Format-->
                                                                    <div class="col-md-12 col-xs-12 margin-b-25">
                                                                        <div class="col-md-6 col-sm-12 col-xs-12 RightFloat">
                                                                            <label for="inputCandidateActivityType">قالب فعالیت :</label>
                                                                            <select class="form-control form-control-lg" name="inputCandidateActivityType">
                                                                                <option value="" selected>--انتخاب کنید--</option>
                                                                                <?php foreach ($EnumResumeProfile['CandidatePoliticActivityType'] as $key => $value) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['CandidateActivityType'], $key); ?>
                                                                                            value="<?php echo $key; ?>">
                                                                                        <?php echo $value; ?>
                                                                                    </option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <!--for Format-->
                                                                    <!--for election-->
                                                                    <div class="col-md-12 col-xs-12 RightFloat margin-b-25 ElectionType">
                                                                        <div class="col-md-4 col-sm-12 col-xs-12 RightFloat">
                                                                            <label for="inputCandidateElectionType">انتخابات :</label>
                                                                            <select class="form-control form-control-lg" data-selected-major="<?php echo $item['CandidateElectionPeriod']; ?>" name="inputCandidateElectionType">
                                                                                <?php foreach ($EnumResumeProfile['CandidatePoliticElectionType'] as $key => $value) { ?>
                                                                                    <option <?php setOptionSelected($item['CandidateElectionType'], $key); ?>
                                                                                            value="<?php echo $key; ?>">
                                                                                        <?php echo $value; ?>
                                                                                    </option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-12 col-xs-12 RightFloat ElectionPeriod">
                                                                            <label for="inputCandidateElectionPeriod">دوره انتخابات :</label>
                                                                            <select class="form-control form-control-lg" name="inputCandidateElectionPeriod">
                                                                                <option value="" selected>--انتخاب کنید--</option>
                                                                            </select>
                                                                        </div>

                                                                        <div class="col-md-4 col-sm-12 col-xs-12 input-style RightFloat CandidateName">
                                                                            <label for="inputCandidateElectionListName">نام نامزد / لیست</label>
                                                                            <input name="inputCandidateElectionListName"
                                                                                <?php setInputValue($item['CandidateElectionListName']); ?>
                                                                                   type="text" required>
                                                                        </div>
                                                                    </div>
                                                                    <!--for election-->

                                                                    <!--for Responsibility-->
                                                                    <div class="col-md-12 col-xs-12 RightFloat margin-b-25  input-style">
                                                                        <div class="col-md-6 col-sm-12 col-xs-12 RightFloat">
                                                                            <label for="inputCandidateResponsibility">مسئولیت</label>
                                                                            <select class="form-control form-control-lg" name="inputCandidateResponsibility">
                                                                                <option value="select" selected>--انتخاب کنید--</option>
                                                                                <?php foreach ($EnumResumeProfile['CandidatePoliticResponsibility'] as $key => $value) { ?>
                                                                                    <option <?php setOptionSelected($item['CandidateResponsibility'], $key); ?>
                                                                                            value="<?php echo $key; ?>">
                                                                                        <?php echo $value; ?>
                                                                                    </option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>

                                                                        <div class="col-md-6 col-sm-12 col-xs-12 MemberShip">
                                                                            <label for="inputCandidateMemberShip">عضویت :</label>
                                                                            <select class="form-control form-control-lg" name="inputCandidateMemberShip">
                                                                                <option value="" selected>--انتخاب کنید--</option>
                                                                                <?php foreach ($EnumResumeProfile['CandidateMemberShipType'] as $key => $value) { ?>
                                                                                    <option <?php setOptionSelected($item['CandidateMemberShip'], $key); ?>
                                                                                            value="<?php echo $key; ?>">
                                                                                        <?php echo $value; ?>
                                                                                    </option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat has-required-field GroupDiv hidden">
                                                                            <label for="inputCandidatePartyId">حزب</label>
                                                                            <select class="form-control form-control-lg" name="inputCandidatePartyId" id="inputCandidatePartyId">
                                                                                <option value="" selected> -- انتخاب کنید --</option>
                                                                                <?php foreach ($parties as $pt) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['CandidatePartyId'], $pt['PartyId']); ?>
                                                                                            value="<?php echo $pt['PartyId']; ?>">
                                                                                        <?php echo $pt['PartyTitle']; ?>
                                                                                    </option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <!--for Responsibility-->
                                                                    <!--for Media-->
                                                                    <div class="col-md-12 col-xs-12 Media-Date">
                                                                        <div class="col-md-6 col-xs-12 RightFloat">
                                                                            <label for="inputCandidateStartJobMonth">آغاز همکاری</label>
                                                                            <div class="row">
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <select class="form-control form-control-lg city-select" name="inputCandidateMediaStartMonth" id="inputCandidateMediaStartMonth">
                                                                                        <?php foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) { ?>
                                                                                            <option <?php setOptionSelected($item['CandidateMediaStartMonth'], $key); ?>
                                                                                                    value="<?php echo $key; ?>">
                                                                                                <?php echo $value; ?>
                                                                                            </option>
                                                                                        <?php } ?>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <select class="form-control form-control-lg city-select" name="inputCandidateStartYear" id="inputCandidateStartYear"
                                                                                            style="font-family: tahoma;">
                                                                                        <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                            <option
                                                                                                <?php setOptionSelected($item['CandidateStartYear'], $i); ?>
                                                                                                    value="<?php echo $i; ?>">
                                                                                                <?php echo $i; ?>
                                                                                            </option>
                                                                                        <?php } ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-xs-12 RightFloat">
                                                                            <label for="inputCandidateEndMonth">پایان همکاری</label>
                                                                            <div class="row">
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <select class="form-control form-control-lg city-select"
                                                                                            name="inputCandidateEndMonth"
                                                                                            id="inputCandidateEndMonth">
                                                                                        <?php foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) { ?>
                                                                                            <option <?php setOptionSelected($item['CandidateEndMonth'], $key); ?>
                                                                                                    value="<?php echo $key; ?>">
                                                                                                <?php echo $value; ?>
                                                                                            </option>
                                                                                        <?php } ?>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                                    <select class="form-control form-control-lg city-select"
                                                                                            name="inputCandidateEndYear"
                                                                                            id="inputCandidateEndYear"
                                                                                            style="font-family: tahoma;">
                                                                                        <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                            <option <?php setOptionSelected($item['CandidateEndYear'], $i); ?>
                                                                                                    value="<?php echo $i; ?>">
                                                                                                <?php echo $i; ?>
                                                                                            </option>
                                                                                        <?php } ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--for Media-->
                                                                    <!--for Description-->
                                                                    <div class="col-md-12 col-xs-12 RightFloat margin-b-25 input-style">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 RightFloat">
                                                                            <label for="inputCandidateActivityDescription">توضیحات</label>
                                                                            <input name="inputCandidateActivityDescription"
                                                                                <?php setInputValue($item['CandidateActivityDescription']); ?>
                                                                                   type="text"/>
                                                                        </div>
                                                                    </div>
                                                                    <!--for Description-->
                                                                </div>
                                                            </div>
                                                        <?php } ?>
                                                    </form>
                                                    <div id="unique-form"
                                                         class="hidden list-group-item animated flipInX extra-padding-top-25 odd-background-color-div">
                                                        <span class="remove-form fa fa-times"></span>
                                                        <div class="list-group-Grade col-md-12 col-xs-12 padding-0">
                                                            <!--for Format-->
                                                            <div class="col-md-12 col-xs-12 margin-b-25">
                                                                <div class="col-md-6 col-sm-12 col-xs-12 RightFloat">
                                                                    <label for="inputCandidateActivityType">قالب فعالیت :</label>
                                                                    <select class="form-control form-control-lg" data-name="inputCandidateActivityType">
                                                                        <option value="" selected>--انتخاب کنید--</option>
                                                                        <?php foreach ($EnumResumeProfile['CandidatePoliticActivityType'] as $key => $value) { ?>
                                                                            <option value="<?php echo $key; ?>">
                                                                                <?php echo $value; ?>
                                                                            </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--for Format-->
                                                            <!--for election-->
                                                            <div class="col-md-12 col-xs-12 RightFloat margin-b-25 ElectionType">
                                                                <div class="col-md-4 col-sm-12 col-xs-12 RightFloat">
                                                                    <label for="inputCandidateElectionType"> انتخابات :</label>
                                                                    <select class="form-control form-control-lg" data-name="inputCandidateElectionType">
                                                                        <option value="" selected>--انتخاب کنید--</option>
                                                                        <?php foreach ($EnumResumeProfile['CandidatePoliticElectionType'] as $key => $value) { ?>
                                                                            <option value="<?php echo $key; ?>">
                                                                                <?php echo $value; ?>
                                                                            </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-4 col-sm-12 col-xs-12 RightFloat ElectionPeriod">
                                                                    <label for="inputCandidateElectionPeriod"> دوره انتخابات :</label>
                                                                    <select class="form-control form-control-lg" data-name="inputCandidateElectionPeriod">
                                                                        <option value="" selected>--انتخاب کنید--</option>
                                                                    </select>
                                                                </div>

                                                                <div class="col-md-4 col-sm-12 col-xs-12 input-style RightFloat CandidateName">
                                                                    <label for="inputCandidateElectionListName">نام نامزد / لیست</label>
                                                                    <input data-name="inputCandidateElectionListName" type="text" required>
                                                                </div>
                                                            </div>
                                                            <!--for election-->
                                                            <!--for Responsibility-->
                                                            <div class="col-md-12 col-xs-12 RightFloat margin-b-25  input-style">
                                                                <div class="col-md-4 col-sm-12 col-xs-12 RightFloat">
                                                                    <label for="inputCandidateResponsibility">مسئولیت</label>
                                                                    <select class="form-control form-control-lg" name="inputCandidateResponsibility">
                                                                        <option value="select" selected>--انتخاب کنید--</option>
                                                                        <?php foreach ($EnumResumeProfile['CandidatePoliticResponsibility'] as $key => $value) { ?>
                                                                            <option value="<?php echo $key; ?>">
                                                                                <?php echo $value; ?>
                                                                            </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-4 col-sm-12 col-xs-12 RightFloat MemberShip">
                                                                    <label for="inputCandidateMemberShip">عضویت :</label>
                                                                    <select class="form-control form-control-lg" data-name="inputCandidateMemberShip">
                                                                        <option value="" selected>--انتخاب کنید--</option>
                                                                        <?php foreach ($EnumResumeProfile['CandidateMemberShipType'] as $key => $value) { ?>
                                                                            <option value="<?php echo $key; ?>">
                                                                                <?php echo $value; ?>
                                                                            </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat has-required-field GroupDiv hidden">
                                                                    <label for="inputCandidatePartyId">حزب</label>
                                                                    <select class="form-control form-control-lg" name="inputCandidatePartyId" id="inputCandidatePartyId">
                                                                            <option value="" selected> -- انتخاب کنید --</option>
                                                                        <?php foreach ($parties as $item) { ?>
                                                                            <option value="<?php echo $item['PartyId']; ?>">
                                                                                <?php echo $item['PartyTitle']; ?>
                                                                            </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat has-required-field states hidden">
                                                                    <label for="inputCandidateConstituencyStateId">استان</label>
                                                                    <select class="form-control form-control-lg state-select" name="inputCandidateConstituencyStateId" id="inputCandidateConstituencyStateId">
                                                                        <?php foreach ($states as $state) { ?>
                                                                            <option value="<?php echo $state['StateId']; ?>">
                                                                                <?php echo $state['StateName']; ?>
                                                                            </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                                <div class="Dates hidden">
                                                                    <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                        <label for="inputCandidateStartMonth">
                                                                            ماه آغاز همکاری
                                                                        </label>
                                                                        <select class="form-control form-control-lg city-select"
                                                                                name="inputCandidateStartMonth"
                                                                                id="inputCandidateStartMonth">
                                                                            <?php foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) { ?>
                                                                                <option
                                                                                        value="<?php echo $key; ?>">
                                                                                    <?php echo $value; ?>
                                                                                </option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                        <label for="inputCandidateStartYear">
                                                                            سال آغاز همکاری
                                                                        </label>
                                                                        <select class="form-control form-control-lg city-select"
                                                                                name="inputCandidateStartYear"
                                                                                id="inputCandidateStartYear"
                                                                                style="font-family: tahoma;">
                                                                            <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                <option
                                                                                        value="<?php echo $i; ?>">
                                                                                    <?php echo $i; ?>
                                                                                </option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                        <label for="inputCandidateEndMonth">
                                                                            ماه پایان همکاری
                                                                        </label>
                                                                        <select class="form-control form-control-lg city-select"
                                                                                name="inputCandidateEndMonth"
                                                                                id="inputCandidateEndMonth">
                                                                            <?php foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) { ?>
                                                                                <option
                                                                                        value="<?php echo $key; ?>">
                                                                                    <?php echo $value; ?>
                                                                                </option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat">
                                                                        <label for="inputCandidateEndYear">
                                                                            سال پایان همکاری
                                                                        </label>
                                                                        <select class="form-control form-control-lg city-select"
                                                                                name="inputCandidateEndYear"
                                                                                id="inputCandidateEndYear"
                                                                                style="font-family: tahoma;">
                                                                            <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                <option
                                                                                        value="<?php echo $i; ?>">
                                                                                    <?php echo $i; ?>
                                                                                </option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--for Description-->
                                                            <div class="col-md-12 col-xs-12 RightFloat margin-b-25 input-style">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 RightFloat">
                                                                    <label for="inputCandidateActivityDescription">توضیحات</label>
                                                                    <input data-name="inputCandidateActivityDescription"
                                                                           type="text"/>
                                                                </div>
                                                            </div>
                                                            <!--for Description-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="tab02" class="tab-contents">
                                                <?php
                                                $documentPersianName = 'سوابق سیاسی';
                                                $documentName = 'Political';
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
                </div>
            </div>
            <div class="LeftPaneAction">
                <div class="row form-group">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <button class="btn btn-block btn-lg waves-effect CommonButtons next-step"
                                id="updatePoliticBackgroundAndRedirect">
                            ثبت و ادامه
                        </button>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <button class="btn btn-block btn-lg waves-effect CommonButtons"
                                id="updatePoliticBackground">
                            ثبت
                        </button>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 prev-step">
                        <a href="<?php echo base_url('Profile/socialCulturalBackground'); ?>">
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
