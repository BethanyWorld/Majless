<?php
$_DIR = base_url('assets/ui/v3/');
?>
<div class="container container-wrapper" style="background: none;">

    <?php echo $resumeSidebar; ?>

    <div class="col-xs-12 col-md-9 pull-right">
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
                                                 انتخاب تصویر <input type="file" class="upld-file" id="imgInp">
                                            </span>
                                        </div>
                                        <button class="btn RemoveImage btn-block personInfoImageButtons ButtonRedColor">
                                            حذف تصویر
                                        </button>
                                    </div>
                                    <div class="col-md-9 col-xs-12 RightFloat">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 input-field RightFloat"
                                             id="birthDatePanel">
                                            <div class="col-md-4 col-xs-12 form-group RightFloat">
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
                                            <div class="col-md-4 col-xs-12 form-group RightFloat">
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
                                            <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                <label class="active" for="inputCandidateNationalCode">
                                                    کد ملی
                                                    <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                </label>
                                                <input id="inputCandidateNationalCode" type="text"
                                                       name="inputCandidateNationalCode"
                                                    <?php setInputValue($userInfo['CandidateNationalCode']); ?>
                                                       class="input-validate validate valid"
                                                       placeholder="پر کردن این فیلد الزامی می باشد">
                                            </div>
                                            <div class="col-md-6 col-xs-12 form-group RightFloat">
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
                                            <div class="col-md-6 col-xs-12 form-group RightFloat">
                                                <label class="active" for="inputCandidateBirthDate">
                                                    تاریخ تولد
                                                    <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                </label>
                                                <input id="inputCandidateBirthDate" type="text"
                                                       name="inputCandidateBirthDate"
                                                       data-mask="0000/00/00"

                                                    <?php setInputValue($userInfo['CandidateBirthDate']); ?>
                                                       class="input-validate validate valid"
                                                       placeholder="1357/12/22">
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="col-md-12 padding-0">
                                                <hr>
                                                <label for="inputRegistrationType">نوع ثبت نام</label>
                                                <div class="row RegistrationTypeDiv">
                                                    <div class="col-md-4 col-sm-12 col-xs-12 RightFloat paddingLeft-0">
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
                                                    <div class="col-md-4 col-sm-12 col-xs-12 RightFloat paddingLeft-0">
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
                                                    <div class="col-md-4 col-sm-12 col-xs-12 RightFloat paddingLeft-0">
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
                                        <div class="col-md-4 col-sm-12 col-xs-12 RightFloat">
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
                                        <div class="col-md-4 col-sm-12 col-xs-12 RightFloat">
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
                                        <div class="col-md-4 col-sm-12 col-xs-12 RightFloat">
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
                                                <div class="col-md-4 col-sm-12 col-xs-12 RightFloat">
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
                                                <div class="col-md-4 col-sm-12 col-xs-12 RightFloat">
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
                                                <div class="col-md-4 col-sm-12 col-xs-12 RightFloat">
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

                                                <div class="col-md-4 col-sm-12 col-xs-12 RightFloat">
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
                                                <div class="col-md-4 col-sm-12 col-xs-12 RightFloat">
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

                                                <div class="col-md-4 col-sm-12 col-xs-12 RightFloat">
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
                                                <div class="col-md-4 col-sm-12 col-xs-12 RightFloat form-group-MarginBottom">
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

                                                <div class="col-md-4 col-sm-12 col-xs-12 RightFloat form-group-MarginBottom">
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

                                                <div class="col-md-4 col-sm-12 col-xs-12 RightFloat form-group-MarginBottom">
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

                                                <div class="col-md-4 col-sm-12 col-xs-12 RightFloat form-group-MarginBottom inputCandidateAddressCityPart">
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

                                                <div class="col-md-4 col-sm-12 col-xs-12 RightFloat form-group-MarginBottom">
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

                                                <div class="col-md-4 col-sm-12 col-xs-12 RightFloat form-group-MarginBottom">
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

                                                <div class="col-md-12 col-sm-12 col-xs-12 RightFloat form-group-MarginBottom">
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
                                        <div class="col-md-6 col-xs-12 form-group RightFloat">
                                            <label class="active" for="inputCandidateLandLinePhone">
                                                تلفن ثابت
                                                <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                            </label>
                                            <input id="inputCandidateLandLinePhone" type="text"
                                                   name="inputCandidateLandLinePhone"
                                                   class="input-validate validate valid"
                                                <?php setInputValue($userInfo['CandidateLandLinePhone']); ?>
                                                   placeholder="پر کردن این فیلد الزامی می باشد">
                                        </div>

                                        <div class="col-md-6 col-xs-12 form-group RightFloat">
                                            <label class="active" for="inputCandidatePhone">
                                                تلفن همراه
                                                <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                            </label>
                                            <input id="inputCandidatePhone" type="text"
                                                <?php setInputValue($userInfo['CandidatePhone']); ?>
                                                   name="inputCandidatePhone" class="input-validate validate valid"
                                                   placeholder="پر کردن این فیلد الزامی می باشد">
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
                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
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
                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
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
                                                <label class="label label-danger" id="cs">
                                                    برای نامزدی در انتخابات باید محل تولد خود یا یکی از والدین یا محل
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