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
                                مشخصات فردی
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-3 col-sm-12 col-xs-12 text-center LeftPanelImage">
                                        <img class="img-thumbnail" id="personInfoImageButtons"
                                             src="<?php echo $profileImage; ?>">
                                        <div class="">
                                            <span class="btn btn-block personInfoImageButtons ButtonBlueColor">
                                                انتخاب تصویر
                                                <input type="file" class="upld-file" id="imgInp">
                                                <input type="hidden"  id="profileImage" value="<?php echo $profileImage; ?>">
                                            </span>
                                        </div>
                                        <button class="btn RemoveImage btn-block personInfoImageButtons ButtonRedColor">
                                            حذف تصویر
                                        </button>
                                    </div>
                                    <div class="col-md-9 col-xs-12 RightFloat">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 input-field RightFloat"
                                             id="birthDatePanel">
                                            <div class="col-md-4 col-xs-12 form-group RightFloat has-required-field">
                                                <label class="active" for="inputCandidateFirstName">
                                                    نام
                                                    <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                </label>
                                                <input id="inputCandidateFirstName" type="text"
                                                       name="inputCandidateFirstName"
                                                    <?php setInputValue($userInfo['CandidateFirstName']); ?>
                                                       class="input-validate validate valid"
                                                       placeholder="پر کردن این فیلد الزامی می باشد">
                                            </div>
                                            <div class="col-md-4 col-xs-12 form-group RightFloat has-required-field">
                                                <label class="active" for="inputCandidateLastName">
                                                    نام خانوادگی
                                                    <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                </label>
                                                <input id="inputCandidateLastName" type="text"
                                                       name="inputCandidateLastName"
                                                    <?php setInputValue($userInfo['CandidateLastName']); ?>
                                                       class="input-validate validate valid"
                                                       placeholder="پر کردن این فیلد الزامی می باشد">
                                            </div>
                                            <div class="col-md-4 col-xs-12 form-group RightFloat has-required-field">
                                                <label class="active" for="inputCandidateNationalCode">
                                                    کد ملی
                                                    <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                </label>
                                                <input style="font-family: tahoma;" id="inputCandidateNationalCode"
                                                       type="text"
                                                       pattern="[0-9]*"
                                                       name="inputCandidateNationalCode"
                                                    <?php setInputValue($userInfo['CandidateNationalCode']); ?>
                                                       class="input-validate validate valid"
                                                       placeholder="پر کردن این فیلد الزامی می باشد">
                                            </div>
                                            <div class="col-md-6 col-xs-12 form-group RightFloat has-required-field">
                                                <label class="active" for="inputCandidateFatherName">
                                                    نام پدر
                                                    <span class="text-danger">
                                                        <b class="text-danger">*</b>
                                                    </span>
                                                </label>
                                                <input id="inputCandidateFatherName" type="text"
                                                       name="inputCandidateFatherName"
                                                    <?php setInputValue($userInfo['CandidateFatherName']); ?>
                                                       class="input-validate validate valid"
                                                       placeholder="پر کردن این فیلد الزامی می باشد">
                                            </div>
                                            <div class="col-md-6 col-xs-12 form-group RightFloat has-required-field">
                                                <label class="active" for="inputCandidateBirthDate">
                                                    تاریخ تولد
                                                    <span class="text-danger">
                                                         <b class="text-danger">*</b>
                                                     </span>
                                                </label>
                                                <!--                                                <input id="inputCandidateBirthDate" type="text"-->
                                                <!--                                                       name="inputCandidateBirthDate"-->
                                                <!--                                                       pattern="[0-9]*"-->
                                                <!--                                                    --><?php //setInputValue($userInfo['CandidateBirthDate']); ?>
                                                <!--                                                       class="input-validate validate valid"-->
                                                <!--                                                       placeholder="1365/05/03"-->
                                                <!--                                                       style="font-family: tahoma;">-->
                                                <div class="col-xs-12 date">
                                                    <div class="input-group input-append date" id="DatePicker">
                                                            <span class="input-group-addon add-on"
                                                                  data-toggle="modal" data-target="#exampleModal">
                                                                <span class="fa fa-calendar"></span>
                                                            </span>
                                                        <input
                                                                data-toggle="modal" data-target="#exampleModal"
                                                                type="text" class="form-control"
                                                            <?php setInputValue($userInfo['CandidateBirthDate']); ?>
                                                                id="inputCandidateBirthDate"
                                                                name="inputCandidateBirthDate"
                                                                placeholder="1352/12/05"
                                                                style="font-family: tahoma;"/>
                                                    </div>
                                                </div>
                                                <label class="text-danger" id="DateChecked">
                                                    حداقل سن مجاز 30 سال حداکثر سن مجاز 75 سال میباشد
                                                </label>
                                            </div>

                                            <div class="clearfix"></div>
                                            <div class="col-md-12 padding-0">
                                                <hr>
                                                <label for="inputRegistrationType">نوع ثبت نام</label>
                                                <div class="row RegistrationTypeDiv">
                                                    <div class="col-md-4 col-sm-12 col-xs-12 RightFloat paddingLeft-0 has-required-field">
                                                        <input type="checkbox" value="Candidate" class="roles"
                                                               id="inputParliamentaryCandidate"
                                                            <?php
                                                            foreach ($userInfo['roles'] as $role) {
                                                                if ($role['Role'] == 'Candidate') {
                                                                    echo "checked";
                                                                }
                                                            }
                                                            ?>
                                                               name="inputParliamentaryCandidate">
                                                        <label for="inputParliamentaryCandidate">
                                                            نامزد انتخابات مجلس
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12 col-xs-12 RightFloat paddingLeft-0 has-required-field">
                                                        <input type="checkbox" class="roles" value="Elite"
                                                               id="inputParliamentaryElectionBank"
                                                            <?php
                                                            foreach ($userInfo['roles'] as $role) {
                                                                if ($role['Role'] == 'Elite') {
                                                                    echo "checked";
                                                                }
                                                            }
                                                            ?>
                                                               name="inputParliamentaryElectionBank">
                                                        <label for="inputParliamentaryElectionBank">
                                                            بانک اطلاعات نخبگان جوان
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12 col-xs-12 RightFloat paddingLeft-0 has-required-field">
                                                        <input type="checkbox" class="roles" value="Sponsor"
                                                               id="inputSponsorColleague"
                                                            <?php
                                                            foreach ($userInfo['roles'] as $role) {
                                                                if ($role['Role'] == 'Sponsor') {
                                                                    echo "checked";
                                                                }
                                                            }
                                                            ?>
                                                               name="inputSponsorColleague">
                                                        <label for="inputSponsorColleague">حامی و همکار</label>
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-xs-12 col-sm-12 padding-0">
                                        <div class="col-md-4 col-sm-12 col-xs-12 RightFloat has-required-field">
                                            <label for="inputCandidateGender">
                                                جنسیت
                                                <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                            </label>
                                            <select class="form-control form-control-lg" name="inputCandidateGender"
                                                    id="inputCandidateGender">
                                                <?php foreach ($EnumResumeProfile['Gender'] as $key => $value) { ?>
                                                    <option value="<?php echo $key; ?>"
                                                        <?php setOptionSelected($userInfo['CandidateGender'], $key); ?>>
                                                        <?php echo $value; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-xs-12 RightFloat has-required-field">
                                            <label for="inputCandidateMaritalStatus">
                                                وضعییت تاهل
                                                <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                            </label>
                                            <select class="form-control form-control-lg"
                                                    name="inputCandidateMaritalStatus"
                                                    id="inputCandidateMaritalStatus">
                                                <?php foreach ($EnumResumeProfile['MaritalStatus'] as $key => $value) { ?>
                                                    <option value="<?php echo $key; ?>" <?php setOptionSelected($userInfo['CandidateMaritalStatus'], $key); ?>>
                                                        <?php echo $value; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-xs-12 RightFloat has-required-field">
                                            <label for="inputCandidateReligion">
                                                دین
                                                <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                            </label>
                                            <select class="form-control form-control-lg" name="inputCandidateReligion"
                                                    id="inputCandidateReligion">
                                                <?php foreach ($EnumResumeProfile['Religion'] as $key => $value) { ?>
                                                    <option value="<?php echo $key; ?>" <?php setOptionSelected($userInfo['CandidateReligion'], $key); ?>>
                                                        <?php echo $value; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                            <label class="text-danger" id="ReligionNotify">ثبت نام اقلیت های دینی برای
                                                نامزدی انتخابات در این سایت امکان پذیر نیست .</label>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-xs-12">
                                                <h3 class="margin-right-15 BirthDateTitleMarginTop">محل تولد</h3>
                                                <hr>
                                                <div class="col-md-4 col-sm-12 col-xs-12 RightFloat has-required-field">
                                                    <label for="inputCandidateBornStateId">
                                                        استان
                                                        <span class="text-danger"><b class="text-danger">*</b></span>
                                                    </label>
                                                    <select class="form-control form-control-lg state-select"
                                                            name="inputCandidateBornStateId"
                                                            id="inputCandidateBornStateId">
                                                        <option value="">-- انتخاب کنید --</option>
                                                        <?php foreach ($states as $state) { ?>
                                                            <option value="<?php echo $state['StateId']; ?>"
                                                                <?php setOptionSelected($userInfo['CandidateBornStateId'], $state['StateId']); ?>>
                                                                <?php echo $state['StateName']; ?>
                                                            </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 col-sm-12 col-xs-12 RightFloat has-required-field">
                                                    <label for="inputCandidateBornCityId">
                                                        شهرستان
                                                        <span class="text-danger"><b class="text-danger">*</b></span>
                                                    </label>
                                                    <select class="form-control form-control-lg city-select"
                                                            name="inputCandidateBornCityId"
                                                            id="inputCandidateBornCityId">
                                                        <?php
                                                        if ($userInfo['CandidateCityId'] !== NULL) {
                                                            foreach ($userInfo['CandidateBornCities'] as $city) { ?>
                                                                <option value="<?php echo $city['CityId']; ?>"
                                                                    <?php setOptionSelected($userInfo['CandidateBornCityId'], $city['CityId']); ?>>
                                                                    <?php echo $city['CityName']; ?>
                                                                </option>
                                                            <?php }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-xs-12">
                                                <h3 class="margin-right-15 BirthDateTitleMarginTop">محل تولد پدر</h3>
                                                <hr>
                                                <div class="col-md-4 col-sm-12 col-xs-12 RightFloat has-required-field">
                                                    <label for="inputCandidateFatherBornStateId">
                                                        استان
                                                        <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                    </label>
                                                    <select class="form-control form-control-lg state-select"
                                                            name="inputCandidateFatherBornStateId"
                                                            id="inputCandidateFatherBornStateId">
                                                        <option value="">-- انتخاب کنید --</option>
                                                        <?php foreach ($states as $state) { ?>
                                                            <option value="<?php echo $state['StateId']; ?>"
                                                                <?php setOptionSelected($userInfo['CandidateFatherBornStateId'], $state['StateId']); ?>>
                                                                <?php echo $state['StateName']; ?>
                                                            </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 col-sm-12 col-xs-12 RightFloat has-required-field">
                                                    <label for="inputCandidateFatherBornCityId">
                                                        شهرستان
                                                        <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                    </label>
                                                    <select class="form-control form-control-lg city-select"
                                                            name="inputCandidateFatherBornCityId"
                                                            id="inputCandidateFatherBornCityId">
                                                        <?php foreach ($userInfo['CandidateFatherBornCities'] as $city) { ?>
                                                            <option
                                                                    value="<?php echo $city['CityId']; ?>"
                                                                <?php setOptionSelected($userInfo['CandidateFatherBornCityId'], $city['CityId']); ?>>
                                                                <?php echo $city['CityName']; ?>
                                                            </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-xs-12">
                                                <h3 class="margin-right-15 BirthDateTitleMarginTop">محل تولد مادر</h3>
                                                <hr>
                                                <div class="col-md-4 col-sm-12 col-xs-12 RightFloat has-required-field">
                                                    <label for="inputCandidateMotherBornStateId">
                                                        استان
                                                        <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                    </label>
                                                    <select class="form-control form-control-lg state-select"
                                                            name="inputCandidateMotherBornStateId"
                                                            id="inputCandidateMotherBornStateId">
                                                        <option value="">-- انتخاب کنید --</option>
                                                        <?php foreach ($states as $state) { ?>
                                                            <option value="<?php echo $state['StateId']; ?>"
                                                                <?php setOptionSelected($userInfo['CandidateMotherBornStateId'], $state['StateId']); ?>>
                                                                <?php echo $state['StateName']; ?>
                                                            </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 col-sm-12 col-xs-12 RightFloat has-required-field">
                                                    <label for="inputCandidateMotherBornCityId">
                                                        شهرستان
                                                        <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                    </label>
                                                    <select class="form-control form-control-lg city-select"
                                                            name="inputCandidateMotherBornCityId"
                                                            id="inputCandidateMotherBornCityId">
                                                        <?php foreach ($userInfo['CandidateMotherBornCities'] as $city) { ?>
                                                            <option
                                                                    value="<?php echo $city['CityId']; ?>"
                                                                <?php setOptionSelected($userInfo['CandidateMotherBornCityId'], $city['CityId']); ?>>
                                                                <?php echo $city['CityName']; ?>
                                                            </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-xs-12">
                                                <h3 class="margin-right-15 BirthDateTitleMarginTop">محل سکونت</h3>
                                                <hr>
                                                <div class="col-md-4 col-sm-12 col-xs-12 RightFloat form-group-MarginBottom has-required-field">
                                                    <label for="inputCandidateAddressStateId">
                                                        استان
                                                        <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                    </label>
                                                    <select class="form-control form-control-lg state-select"
                                                            name="inputCandidateAddressStateId"
                                                            id="inputCandidateAddressStateId">
                                                        <option value="">-- انتخاب کنید --</option>
                                                        <?php foreach ($states as $state) { ?>
                                                            <option value="<?php echo $state['StateId']; ?>"
                                                                <?php setOptionSelected($userInfo['CandidateAddressStateId'], $state['StateId']); ?>>
                                                                <?php echo $state['StateName']; ?>
                                                            </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>

                                                <div class="col-md-4 col-sm-12 col-xs-12 RightFloat form-group-MarginBottom has-required-field">
                                                    <label for="inputCandidateAddressCityId">
                                                        شهرستان
                                                        <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                    </label>
                                                    <select class="form-control form-control-lg city-select"
                                                            name="inputCandidateAddressCityId"
                                                            id="inputCandidateAddressCityId">
                                                        <?php foreach ($userInfo['CandidateAddressCities'] as $city) { ?>
                                                            <option
                                                                    value="<?php echo $city['CityId']; ?>"
                                                                <?php setOptionSelected($userInfo['CandidateAddressCityId'], $city['CityId']); ?>>
                                                                <?php echo $city['CityName']; ?>
                                                            </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>

                                                <div class="col-md-4 col-sm-12 col-xs-12 RightFloat form-group-MarginBottom has-required-field">
                                                    <label for="inputCandidateAddressPart">
                                                        بخش
                                                        <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                    </label>
                                                    <input id="inputCandidateAddressPart" type="text"
                                                           name="inputCandidateAddressPart"
                                                        <?php setInputValue($userInfo['CandidateAddressPart']); ?>
                                                           class="input-validate validate valid"
                                                           placeholder="پر کردن این فیلد الزامی می باشد">
                                                </div>

                                                <div class="col-md-4 col-sm-12 col-xs-12 RightFloat form-group-MarginBottom inputCandidateAddressCityPart has-required-field">
                                                    <label for="inputCandidateAddressCityPart">
                                                        شهر
                                                        <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                    </label>
                                                    <input id="inputCandidateAddressCityPart" type="text"
                                                           name="inputCandidateAddressCityPart"
                                                        <?php setInputValue($userInfo['CandidateAddressCityPart']); ?>
                                                           class="input-validate validate valid"
                                                           placeholder="پر کردن این فیلد الزامی می باشد">
                                                </div>

                                                <div class="col-md-4 col-sm-12 col-xs-12 RightFloat form-group-MarginBottom has-required-field">
                                                    <label for="inputCandidateAddressVillage">
                                                        دهستان
                                                        <span class="text-danger">
                                             </span>
                                                    </label>
                                                    <input id="inputCandidateAddressVillage" type="text"
                                                           name="inputCandidateAddressVillage"
                                                        <?php setInputValue($userInfo['CandidateAddressVillage']); ?>
                                                           class=""
                                                           placeholder="پرکردن این فیلد اجباری می باشد">
                                                </div>

                                                <div class="col-md-4 col-sm-12 col-xs-12 RightFloat form-group-MarginBottom has-required-field">
                                                    <label for="inputCandidateAddressVillagePart">
                                                        آبادی
                                                        <span class="text-danger">
                                             </span>
                                                    </label>
                                                    <input id="inputCandidateAddressVillagePart" type="text"
                                                           name="inputCandidateAddressVillagePart"
                                                        <?php setInputValue($userInfo['CandidateAddressVillagePart']); ?>
                                                           class=""
                                                           placeholder="پرکردن این فیلد اجباری می باشد">
                                                </div>

                                                <div class="col-md-12 col-sm-12 col-xs-12 RightFloat form-group-MarginBottom has-required-field">
                                                    <label for="inputCandidateAddress">
                                                        آدرس
                                                        <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                    </label>
                                                    <input id="inputCandidateAddress" type="text"
                                                           name="inputCandidateAddress"
                                                        <?php setInputValue($userInfo['CandidateAddress']); ?>
                                                           class="input-validate validate valid"
                                                           placeholder="پر کردن این فیلد الزامی می باشد">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 padding-0"></div>
                                    <div class="col-md-12 padding-0"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="panel panel-default LeftPanelShadow">
                            <div class="panel-heading">
                                اطلاعات تماس
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                        <div class="col-md-6 col-xs-12 form-group RightFloat has-required-field">
                                            <label class="active" for="inputCandidateLandLinePhone">
                                                تلفن ثابت
                                                <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                            </label>
                                            <input id="inputCandidateLandLinePhone" type="text"
                                                   name="inputCandidateLandLinePhone"
                                                   class="input-validate validate valid"
                                                   pattern="[0-9]*"
                                                   maxlength="11"
                                                <?php setInputValue($userInfo['CandidateLandLinePhone']); ?>
                                                   placeholder="پر کردن این فیلد الزامی می باشد"
                                                   style="font-family: tahoma;">
                                        </div>
                                        <div class="col-md-6 col-xs-12 form-group RightFloat has-required-field">
                                            <label class="active" for="inputCandidatePhone">
                                                تلفن همراه
                                                <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                            </label>
                                            <input id="inputCandidatePhone" type="text"
                                                   pattern="[0-9]*"
                                                   maxlength="11"
                                                <?php setInputValue($userInfo['CandidatePhone']); ?>
                                                   name="inputCandidatePhone" class="input-validate validate valid"
                                                   placeholder="پر کردن این فیلد الزامی می باشد"
                                                   style="font-family: tahoma;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="panel panel-default LeftPanelShadow">
                            <div class="panel-heading">
                                حوزه انتخاباتی
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                        <h3>حوزه انتخاباتی</h3>
                                        <hr>
                                        <div class="col-md-12 col-xs-12 padding-0">
                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat has-required-field">
                                                <label for="inputCandidateConstituencyStateId">
                                                    استان
                                                    <span class="text-danger">
                                                 <b class="text-danger">*</b></span>
                                                </label>
                                                <select class="form-control form-control-lg state-select"
                                                        name="inputCandidateConstituencyStateId"
                                                        id="inputCandidateConstituencyStateId">
                                                    <?php foreach ($states as $state) { ?>
                                                        <option value="<?php echo $state['StateId']; ?>"
                                                            <?php setOptionSelected($userInfo['CandidateConstituencyStateId'], $state['StateId']); ?>>
                                                            <?php echo $state['StateName']; ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat has-required-field">
                                                <label for="inputCandidateConstituencyCityId">
                                                    شهرستان
                                                    <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                </label>
                                                <select class="form-control form-control-lg city-select"
                                                        name="inputCandidateConstituencyCityId"
                                                        id="inputCandidateConstituencyCityId">
                                                    <?php foreach ($userInfo['CandidateConstituencyCities'] as $city) { ?>
                                                        <option
                                                                value="<?php echo $city['CityId']; ?>"
                                                            <?php setOptionSelected($userInfo['CandidateConstituencyCityId'], $city['CityId']); ?>>
                                                            <?php echo $city['CityName']; ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 form-group RightFloat">
                                                <label class="label label-danger hidden" id="cs">
                                                    برای نامزدی در انتخابات باید محل
                                                    سکونت شما در محدوده حوزه انتخابیه تعیین شده باشد.
                                                </label>
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
                        <button class="btn btn-block btn-lg CommonButtons waves-effect"
                                id="updateProfileInfoAndRedirect">
                            ثبت و ادامه
                        </button>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <button class="btn btn-block btn-lg CommonButtons waves-effect" id="updateProfileInfo">
                            ثبت
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade date-modal" data-backdrop="false" id="exampleModal" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-right" id="exampleModalLabel">تاریخ تولد</h5>
                <button type="button" class="close close-modal pull-left" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <div class="col-md-4 col-xs-12">
                            <label class="pull-right" for="day">روز :</label>
                            <input type="number" class="form-control" name="day" id="day" placeholder="روز" min="1"
                                   max="31">
                            <div class="datepicker inner-form-div inner-form-div-day datepicker-dropdown dropdown-menu datepicker-orient-left datepicker-orient-top"
                                 style="display: block; top: 191px; left: 222px;">
                                <div class="datepicker-days" style="display: block;">
                                    <table class=" table-condensed">
                                        <tbody>
                                        <tr>
                                            <td class="day">01</td>
                                            <td class="day">02</td>
                                            <td class="day">03</td>
                                            <td class="day">04</td>
                                            <td class="day">05</td>
                                            <td class="day">06</td>
                                        </tr>
                                        <tr>
                                            <td class="day">07</td>
                                            <td class="day">08</td>
                                            <td class="day">09</td>
                                            <td class="day">10</td>
                                            <td class="day">11</td>
                                            <td class="day">12</td>
                                        </tr>
                                        <tr>
                                            <td class="day">13</td>
                                            <td class="day">14</td>
                                            <td class="day">15</td>
                                            <td class="day">16</td>
                                            <td class="day">17</td>
                                            <td class="day">18</td>
                                        </tr>
                                        <tr>
                                            <td class="day">19</td>
                                            <td class="day">20</td>
                                            <td class="day">21</td>
                                            <td class="day">22</td>
                                            <td class="day">23</td>
                                            <td class="day">24</td>
                                        </tr>
                                        <tr>
                                            <td class="day">25</td>
                                            <td class="day">26</td>
                                            <td class="day">27</td>
                                            <td class="day">28</td>
                                            <td class="day">29</td>
                                            <td class="day">30</td>

                                        </tr>
                                        <tr>
                                            <td class="day">31</td>
                                            <!--                                        <td class="new day">1</td>-->
                                            <!--                                        <td class="new day">2</td>-->
                                            <!--                                        <td class="new day">3</td>-->
                                            <!--                                        <td class="new day">4</td>-->
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4 col-xs-12">
                            <label class="pull-right" for="month">ماه :</label>
                            <input type="text" class="form-control" name="month" id="month" placeholder="ماه">
                            <div class="datepicker inner-form-div inner-form-div-month datepicker-dropdown dropdown-menu datepicker-orient-left datepicker-orient-top"
                                 style="display: block; top: 191px; left: 222px;">
                                <div class="datepicker-days" style="display: block;">
                                    <table class=" table-condensed">
                                        <tbody>
                                        <tr>
                                            <td class="month" data-month-number="01">فروردین</td>
                                        </tr>
                                        <tr>
                                            <td class="month" data-month-number="02">اردیبهشت</td>
                                        </tr>
                                        <tr>
                                            <td class="month" data-month-number="03">خرداد</td>
                                        </tr>
                                        <tr>
                                            <td class="month" data-month-number="04">تیر</td>
                                        </tr>
                                        <tr>
                                            <td class="month" data-month-number="05">مرداد</td>
                                        </tr>
                                        <tr>
                                            <td class="month" data-month-number="06">شهریور</td>
                                        </tr>
                                        <tr>
                                            <td class="month" data-month-number="07">مهر</td>
                                        </tr>
                                        <tr>
                                            <td class="month" data-month-number="08">آبان</td>
                                        </tr>
                                        <tr>
                                            <td class="month" data-month-number="09">آذر</td>
                                        </tr>
                                        <tr>
                                            <td class="month" data-month-number="10">دی</td>
                                        </tr>
                                        <tr>
                                            <td class="month" data-month-number="11">بهمن</td>
                                        </tr>
                                        <tr>
                                            <td class="month" data-month-number="12">اسفند</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4 col-xs-12">
                            <label class="pull-right" for="year">سال :</label>
                            <input type="number" class="form-control" name="year" id="year" placeholder="سال">
                            <div class="datepicker inner-form-div inner-form-div-year datepicker-dropdown dropdown-menu datepicker-orient-left datepicker-orient-top"
                                 style="display: block; top: 191px; left: 222px;">
                                <div class="datepicker-days" style="display: block;">
                                    <table class=" table-condensed">
                                        <tbody>
                                        <tr>
                                            <td class="year">1398</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1397</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1396</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1395</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1394</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1393</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1392</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1391</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1390</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1389</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1388</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1387</td>
                                        </tr>

                                        <tr>
                                            <td class="year">1386</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1385</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1384</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1383</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1382</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1381</td>
                                        </tr>

                                        <tr>
                                            <td class="year">1380</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1379</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1378</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1377</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1376</td>
                                        </tr>

                                        <tr>
                                            <td class="year">1375</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1374</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1373</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1372</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1371</td>
                                        </tr>

                                        <tr>
                                            <td class="year">1370</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1369</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1368</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1367</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1366</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1365</td>
                                        </tr>

                                        <tr>
                                            <td class="year">1364</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1363</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1362</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1361</td>
                                        </tr>

                                        <tr>
                                            <td class="year">1360</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1359</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1358</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1357</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1356</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1355</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1354</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1353</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1352</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1351</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1350</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1349</td>
                                        </tr>

                                        <tr>
                                            <td class="year">1348</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1347</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1346</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1345</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1344</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1343</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1342</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1341</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1340</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1339</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1338</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1337</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1336</td>
                                        </tr>

                                        <tr>
                                            <td class="year">1335</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1334</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1333</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1332</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1331</td>
                                        </tr>

                                        <tr>
                                            <td class="year">1330</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1329</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1328</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1327</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1326</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1325</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1324</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1323</td>
                                        </tr>

                                        <tr>
                                            <td class="year">1322</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1321</td>
                                        </tr>
                                        <tr>
                                            <td class="year">1320</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default close-modal pull-left" data-dismiss="modal">بستن
                </button>
                <button type="button" class="btn save-changes pull-left">ذخیره تغییرات</button>
            </div>
        </div>
    </div>
</div>