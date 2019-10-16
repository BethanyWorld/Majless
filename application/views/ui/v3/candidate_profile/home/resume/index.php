<?php
$_DIR = base_url('assets/ui/v3/');
?>
<div class="container container-wrapper" style="background: none;">

    <div class="col-md-3 col-xs-12 pull-right">
        <div class="col-xs-12 padding-0 visible-xs visible-sm">
            <div class="col-xs-12 padding-0 MobileStep">
                <h3>اطلاعات فردی</h3>

                <ul class="col-xs-12">
                    <li class="text-center first">
                        <a class="" href="">1</a>
                    </li>
                    <li class="text-center">
                        <a class="" href="">2</a>
                    </li>
                    <li class="text-center">
                        <a class="" href="">3</a>
                    </li>
                    <li class="text-center">
                        <a class="" href="">4</a>
                    </li>
                    <li class="text-center">
                        <a class="" href="">5</a>
                    </li>
                    <li class="text-center">
                        <a class="" href="">6</a>
                    </li>
                    <li class="text-center">
                        <a class="" href="">7</a>
                    </li>
                </ul>

            </div>
        </div>
        <div class="col-md-12 padding-0 visible-lg visible-md">
            <div class="col-md-12 padding-0 RightPanel">
                <ul class="col-md-12 padding-0 RightPanelUl">
                    <li class="col-md-12 padding-0 active">
                        <i class="zmdi RightpanelIcon">
                            <span class="fa fa-user"></span>
                        </i>
                        <div class="RightPanelContent">
                            <div class="RightPanleTitle">اطلاعات فردی</div>
                            <div class="RightPanelDescription">
                                اطلاعات فردی , آدرس
                            </div>
                        </div>
                    </li>

                    <li class="col-md-12 padding-0">
                        <i class="zmdi RightpanelIcon">
                            <span class="fa fa-book"></span>
                        </i>
                        <div class="RightPanelContent">
                            <div class="RightPanleTitle"> سوابق تحصیلی</div>
                            <div class="RightPanelDescription">
                                مقطع , معدل , دنشگاه
                            </div>
                        </div>
                    </li>

                    <li class="col-md-12 padding-0">
                        <i class="zmdi RightpanelIcon">
                            <span class="fa fa-flag"></span>
                        </i>
                        <div class="RightPanelContent">
                            <div class="RightPanleTitle"> نظام وظیفه</div>
                            <div class="RightPanelDescription">,
                                پایان خدمت , معافیت , مشمول
                            </div>
                        </div>
                    </li>

                    <li class="col-md-12 padding-0">
                        <i class="zmdi RightpanelIcon">
                            <span class="fa fa-cogs"></span>
                        </i>
                        <div class="RightPanelContent">
                            <div class="RightPanleTitle"> سوابق شغلی</div>
                            <div class="RightPanelDescription">,
                                اطلاعات شغل های قبل
                            </div>
                        </div>
                    </li>

                    <li class="col-md-12 padding-0">
                        <i class="zmdi RightpanelIcon">
                            <span class="fa fa-share-square-o"></span>
                        </i>
                        <div class="RightPanelContent">
                            <div class="RightPanleTitle"> سوابق فرهنگی اجتماعی</div>
                            <div class="RightPanelDescription">
                                بسیج , انجمن , سمن
                            </div>
                        </div>
                    </li>

                    <li class="col-md-12 padding-0">
                        <i class="zmdi RightpanelIcon">
                            <span class="fa fa-handshake-o"></span>
                        </i>
                        <div class="RightPanelContent">
                            <div class="RightPanleTitle"> سوابق سیاسی</div>
                            <div class="RightPanelDescription">
                                حزب , ستاد انتخابات , رسانه
                            </div>
                        </div>
                    </li>

                    <li class="col-md-12 padding-0">
                        <i class="zmdi RightpanelIcon">
                            <span class="fa fa-flask"></span>
                        </i>
                        <div class="RightPanelContent">
                            <div class="RightPanleTitle"> سوابق علمی پژوهشی</div>
                            <div class="RightPanelDescription">
                                تالیف , ترجمه , اختراع
                            </div>
                        </div>
                    </li>

                    <li class="col-md-12 padding-0">
                        <i class="zmdi RightpanelIcon">
                            <span class="fa fa-outdent"></span>
                        </i>
                        <div class="RightPanelContent">
                            <div class="RightPanleTitle"> مهارت ها</div>
                            <div class="RightPanelDescription">
                                مهارت های مختلف دیگر
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </div>

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
                                        <img class="img-circle img-thumbnail" id="personInfoImageButtons"
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
                                            <div class="col-md-6 col-xs-12 form-group RightFloat">
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
                                            <div class="col-md-6 col-xs-12 form-group RightFloat">
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
                                            <div class="col-md-6 col-xs-12 form-group RightFloat">
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
                                                    <?php setInputValue($userInfo['CandidateBirthDate']); ?>
                                                       class="input-validate validate valid"
                                                       placeholder="پر کردن این فیلد الزامی می باشد">
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="col-md-12 padding-0">
                                                <hr>
                                                <label for="inputRegistrationType">نوع ثبت نام</label>
                                                <div class="row RegistrationTypeDiv">
                                                    <div class="col-md-4 col-sm-12 col-xs-12 RightFloat paddingLeft-0">
                                                        <input type="checkbox" id="inputParliamentaryCandidate"
                                                               <?php
                                                                   foreach ($userInfo['roles'] as $role) {
                                                                       if($role['Role'] == 'Candidate'){
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
                                                        <input type="checkbox" id="inputParliamentaryElectionBank"
                                                            <?php
                                                            foreach ($userInfo['roles'] as $role) {
                                                                if($role['Role'] == 'Elite'){
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
                                                        <input type="checkbox" id="inputSponsorColleague"
                                                            <?php
                                                            foreach ($userInfo['roles'] as $role) {
                                                                if($role['Role'] == 'Sponsor'){
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
                                    <div class="col-md-12 padding-0">
                                        <div class="col-md-4 col-sm-12 col-xs-12 RightFloat">
                                            <label for="inputCandidateGender">
                                                جنسیت
                                                <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                            </label>
                                            <select class="form-control form-control-lg" name="inputCandidateGender"
                                                    id="inputCandidateGender">
                                                <?php foreach ($EnumResumeProfile['Gender'] as $key=>$value){ ?>
                                                    <option value="<?php echo $key; ?>" <?php setOptionSelected($userInfo['CandidateGender'] , $key); ?>>
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
                                                <?php foreach ($EnumResumeProfile['MaritalStatus'] as $key=>$value){ ?>
                                                    <option value="<?php echo $key; ?>" <?php setOptionSelected($userInfo['CandidateMaritalStatus'] , $key); ?>>
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
                                            <select class="form-control form-control-lg" name="CandidateReligion"
                                                    id="CandidateReligion">
                                                <?php foreach ($EnumResumeProfile['Religion'] as $key=>$value){ ?>
                                                    <option value="<?php echo $key; ?>" <?php setOptionSelected($userInfo['CandidateReligion'] , $key); ?>>
                                                        <?php echo $value; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-10 col-lg-offset-1 col-md-12 col-xs-12">
                                                <h3 class="margin-right-15 BirthDateTitleMarginTop">محل تولد</h3>
                                                <hr>
                                                <div class="col-md-4 col-sm-12 col-xs-12 RightFloat">
                                                    <label for="inputCandidateBornStateId">
                                                        استان
                                                        <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                    </label>
                                                    <select class="form-control form-control-lg"
                                                            name="inputCandidateBornStateId"
                                                            id="inputCandidateBornStateId">
                                                        <?php foreach ($states as $state) { ?>
                                                            <option value="<?php echo $state['StateId']; ?>" <?php setOptionSelected($userInfo['CandidateStateId'] , $state['StateId']); ?>>
                                                                <?php echo $state['StateName']; ?>
                                                            </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>

                                                <div class="col-md-4 col-sm-12 col-xs-12 RightFloat">
                                                    <label for="inputCandidateBornCityId">
                                                        شهرستان
                                                        <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                    </label>
                                                    <select class="form-control form-control-lg"
                                                            name="inputCandidateBornCityId"
                                                            id="inputCandidateBornCityId">
                                                        <?php foreach ($userInfo['CandidateBornCities'] as $city) { ?>
                                                            <option
                                                                    value="<?php echo $city['CityId']; ?>"
                                                                <?php setOptionSelected($userInfo['CandidateCityId'] , $city['CityId']); ?>>
                                                                <?php echo $city['CityName']; ?>
                                                            </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-10 col-lg-offset-1 col-md-12 col-xs-12">
                                                <h3 class="margin-right-15 BirthDateTitleMarginTop">محل تولد پدر</h3>
                                                <hr>
                                                <div class="col-md-4 col-sm-12 col-xs-12 RightFloat">
                                                    <label for="inputCandidateFatherBornStateId">
                                                        استان
                                                        <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                    </label>
                                                    <select class="form-control form-control-lg"
                                                            name="inputCandidateFatherBornStateId"
                                                            id="inputCandidateFatherBornStateId">
                                                        <?php foreach ($states as $state) { ?>
                                                            <option value="<?php echo $state['StateId']; ?>" <?php setOptionSelected($userInfo['CandidateFatherBornStateId'] , $state['StateId']); ?>>
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
                                                    <select class="form-control form-control-lg"
                                                            name="inputCandidateFatherBornCityId"
                                                            id="inputCandidateFatherBornCityId">
                                                        <?php foreach ($userInfo['CandidateFatherBornCities'] as $city) { ?>
                                                            <option
                                                                    value="<?php echo $city['CityId']; ?>"
                                                                <?php setOptionSelected($userInfo['CandidateCityId'] , $city['CityId']); ?>>
                                                                <?php echo $city['CityName']; ?>
                                                            </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-10 col-lg-offset-1 col-md-12 col-xs-12">
                                                <h3 class="margin-right-15 BirthDateTitleMarginTop">محل تولد مادر</h3>
                                                <hr>
                                                <div class="col-md-4 col-sm-12 col-xs-12 RightFloat">
                                                    <label for="inputCandidateMotherBornStateId">
                                                        استان
                                                        <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                    </label>
                                                    <select class="form-control form-control-lg"
                                                            name="inputCandidateMotherBornStateId"
                                                            id="inputCandidateMotherBornStateId">
                                                        <?php foreach ($states as $state) { ?>
                                                            <option value="<?php echo $state['StateId']; ?>" <?php setOptionSelected($userInfo['CandidateMotherBornStateId'] , $state['StateId']); ?>>
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
                                                    <select class="form-control form-control-lg"
                                                            name="inputCandidateMotherBornCityId"
                                                            id="inputCandidateMotherBornCityId">
                                                        <?php foreach ($userInfo['CandidateMotherBornCities'] as $city) { ?>
                                                            <option
                                                                    value="<?php echo $city['CityId']; ?>"
                                                                <?php setOptionSelected($userInfo['CandidateCityId'] , $city['CityId']); ?>>
                                                                <?php echo $city['CityName']; ?>
                                                            </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-10 col-lg-offset-1 col-md-12 col-xs-12">
                                                <h3 class="margin-right-15 BirthDateTitleMarginTop">محل سکونت</h3>
                                                <hr>
                                                <div class="col-md-4 col-sm-12 col-xs-12 RightFloat form-group-MarginBottom">
                                                    <label for="inputCandidateAddressStateId">
                                                        استان
                                                        <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                    </label>
                                                    <select class="form-control form-control-lg"
                                                            name="inputCandidateAddressStateId"
                                                            id="inputCandidateAddressStateId">
                                                        <?php foreach ($states as $state) { ?>
                                                            <option value="<?php echo $state['StateId']; ?>" <?php setOptionSelected($userInfo['CandidateAddressStateId'] , $state['StateId']); ?>>
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
                                                    <select class="form-control form-control-lg"
                                                            name="inputCandidateAddressCityId"
                                                            id="inputCandidateAddressCityId">
                                                        <?php foreach ($userInfo['CandidateStateCities'] as $city) { ?>
                                                            <option
                                                                    value="<?php echo $city['CityId']; ?>"
                                                                <?php setOptionSelected($userInfo['CandidateCityId'] , $city['CityId']); ?>>
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
                                                           class="input-validate validate valid"
                                                           placeholder="پر کردن این فیلد الزامی می باشد">
                                                </div>

                                                <div class="col-md-4 col-sm-12 col-xs-12 RightFloat form-group-MarginBottom">
                                                    <label for="inputCandidateAddressCityPart">
                                                        شهر
                                                        <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                    </label>
                                                    <input id="inputCandidateAddressCityPart" type="text"
                                                           name="inputCandidateAddressCityPart"
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
                                                           class="InputNotAllow"
                                                           disabled
                                                           placeholder="">
                                                </div>

                                                <div class="col-md-4 col-sm-12 col-xs-12 RightFloat form-group-MarginBottom">
                                                    <label for="inputCandidateAddressVillagePart">
                                                        آبادی
                                                        <span class="text-danger">
                                             </span>
                                                    </label>
                                                    <input id="inputCandidateAddressVillagePart" type="text"
                                                           name="inputCandidateAddressVillagePart"
                                                           class="InputNotAllow"
                                                           disabled
                                                           placeholder="">
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
                                    <div class="col-md-12 col-xs-12">
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
                                    <div class="col-lg-10 col-lg-offset-1 col-md-12 col-xs-12">
                                        <h3>حوزه انتخاباتی</h3>
                                        <hr>
                                        <div class="col-md-12 col-xs-12 padding-0">
                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="inputCandidateConstituencyStateId">
                                                    استان
                                                    <span class="text-danger">
                                                 <b class="text-danger">*</b>
                                             </span>
                                                </label>
                                                <select class="form-control form-control-lg"
                                                        name="inputCandidateConstituencyStateId"
                                                        id="inputCandidateConstituencyStateId">
                                                    <?php foreach ($states as $state) { ?>
                                                        <option value="<?php echo $state['StateId']; ?>"
                                                            <?php setOptionSelected($userInfo['CandidateConstituencyStateId'] , $state['StateId']); ?>>
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
                                                <select class="form-control form-control-lg"
                                                        name="inputCandidateConstituencyCityId"
                                                        id="inputCandidateConstituencyCityId">
                                                    <?php foreach ($userInfo['CandidateConstituencyCities'] as $city) { ?>
                                                        <option
                                                                 value="<?php echo $city['CityId']; ?>"
                                                                 <?php setOptionSelected($userInfo['CandidateConstituencyCityId'] , $city['CityId']); ?>>
                                                            <?php echo $city['CityName']; ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
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
                        <button class="btn btn-block btn-lg waves-effect" id="updateProfileInfo">
                            ثبت و ادامه
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>