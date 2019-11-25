<?php $_DIR = base_url('assets/ui/v3/'); ?>
<?php function splitPrice($price)
{
    $price = explode(".", $price);
    $priceLeft = $price[0];
    $price = explode(" ", $price[1]);
    $priceRight = $price[0];
    $priceUnit = $price[1];
    $data = array(
        'left' => $priceLeft,
        'right' => $priceRight,
        'unit' => $priceUnit,
    );
    return $data;
} ?>
<div class="container container-wrapper" style="background: none;">
    <?php echo $resumeSidebar; ?>
    <div class="col-xs-12 col-md-9 pull-right response-padding">
        <div class="panel with-nav-tabs panel-default">
            <div class="panel-heading panel-heading-background">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab1myself" data-toggle="tab">خود</a></li>
                    <li><a href="#tab2wife" data-toggle="tab">همسر</a></li>
                    <li><a href="#tab3child" data-toggle="tab">فرزند</a></li>
                </ul>
            </div>
            <div class="panel-body">
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab1myself">
                        <div class="LeftPanel">
                            <div class="LeftPanelcontent">
                                <div class="row">
                                    <!--Books -->
                                    <div class="col-md-12 col-xs-12">
                                        <div class="panel panel-default LeftPanelShadow">
                                            <div class="panel-heading">
                                                املاک و مستغلات
                                                <span class="add-form fa fa-plus"></span>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                        <hr>
                                                        <form id="form-RealEstate">
                                                            <span class="divider"></span>
                                                            <?php foreach ($finance['RealEStates'] as $item) {
                                                                if ($item['ForWho'] == 'Self') { ?>
                                                                    <div class="col-md-12 col-xs-12 padding-0 form">
                                                                        <span class="remove-form fa fa-times"></span>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputRealEstateType">
                                                                                نوع کاربری
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputRealEstateType"
                                                                                    id="inputRealEstateType">
                                                                                <?php foreach ($EnumResumeProfile['RealEstateType'] as $key => $value) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['RealEstateType'], $key); ?>
                                                                                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputRealEstateOwnershipDate">
                                                                                سال شروع مالکیت
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputRealEstateOwnershipDate"
                                                                                    id="inputRealEstateOwnershipDate"
                                                                                    style="font-family: tahoma;">
                                                                                <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['RealEstateOwnershipDate'], $i); ?>
                                                                                            value="<?php echo $i; ?>">
                                                                                        <?php echo $i; ?>
                                                                                    </option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputRealEstateOwnershipType">
                                                                                نحوه مالکیت
                                                                            </label>
                                                                            <select
                                                                                    class="form-control form-control-lg"
                                                                                    name="inputRealEstateOwnershipType"
                                                                                    id="inputRealEstateOwnershipType">
                                                                                <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['RealEstateOwnershipType'], $key); ?>
                                                                                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat">
                                                                            <label for="inputRealEstateCountryId">کشور</label>
                                                                            <select
                                                                                    data-country-id="<?php echo $item['RealEstateCountryId']; ?>"
                                                                                    data-state-id="<?php echo $item['RealEstateStateId']; ?>"
                                                                                    data-city-id="<?php echo $item['RealEstateCityId']; ?>"
                                                                                    class="form-control form-control-lg"
                                                                                    name="inputRealEstateCountryId"
                                                                                    id="inputRealEstateCountryId">
                                                                                <option value="0">-- انتخاب کنید --
                                                                                </option>
                                                                                <?php foreach ($countries as $row) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['RealEstateCountryId'], $row['CountryId']); ?>
                                                                                        <?php if ($row['ISO'] == 'IR') echo "selected"; ?>
                                                                                            value="<?php echo $row['CountryId']; ?>"><?php echo $row['FaName']; ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv">
                                                                            <label for="inputRealEstateStateId">
                                                                                استان
                                                                            </label>
                                                                            <select class="form-control form-control-lg state-select"
                                                                                    name="inputRealEstateStateId"
                                                                                    id="inputRealEstateStateId">
                                                                                <option value="0">-- انتخاب کنید --</option>
                                                                                <?php foreach ($states as $state) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['RealEstateStateId'], $state['StateId']); ?>
                                                                                            value="<?php echo $state['StateId']; ?>">
                                                                                        <?php echo $state['StateName']; ?>
                                                                                    </option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv">
                                                                            <label for="inputRealEstateCityId">
                                                                                شهر
                                                                            </label>
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputRealEstateCityId"
                                                                                    id="inputRealEstateCityId">
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputRealEstatePortion">
                                                                                سهم از ملک(1 تا 6 دانگ)
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <input type="number"
                                                                                <?php setInputValue($item['RealEstatePortion']); ?>
                                                                                   name="inputRealEstatePortion"
                                                                                   id="inputRealEstatePortion"
                                                                                   class="form-control"
                                                                                   placeholder="سهم از ملک 1 تا 6 دانگ"
                                                                                   min="1" max="6"/>
                                                                        </div>
                                                                        <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputRealEstateExtent">
                                                                                متراژ حدودی ملک
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <div class="row">
                                                                                <div class="col-md-6 col-xs-12 RightFloat">
                                                                                    <input type="number"
                                                                                        <?php setInputValue($item['RealEstateExtent']); ?>
                                                                                           name="inputRealEstateExtent"
                                                                                           id="inputRealEstateExtent"
                                                                                           class="form-control"
                                                                                           placeholder=""
                                                                                           min="0"/>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 RightFloat">
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputRealEstateExtentUnit"
                                                                                            id="inputRealEstateExtentUnit">
                                                                                        <?php foreach ($EnumResumeProfile['Extent'] as $key => $value) { ?>
                                                                                            <option
                                                                                                <?php setOptionSelected($item['RealEstateExtentUnit'], $key); ?>
                                                                                                    value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                        <?php } ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputRealEstateBuyTimePrice">
                                                                                ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <div class="row">
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['RealEstateBuyTimePrice'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputRealEstateBuyTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputRealEstateBuyTimePrice ">صد
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                    <input
                                                                                            type="number"
                                                                                        <?php setInputValue(splitPrice($item['RealEstateBuyTimePrice'])['left']); ?>
                                                                                            name="inputRealEstateBuyTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputRealEstateBuyTimePrice">هزار
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputRealEstateBuyTimePrice"
                                                                                            id="inputRealEstateBuyTimePrice">
                                                                                        <option value="0">انتخاب کنید ---</option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['RealEstateBuyTimePrice'])['unit']) == "HZ") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="HZ"
                                                                                                data-right-side="SD"
                                                                                                value="HZ">هزار تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['RealEstateBuyTimePrice'])['unit']) == "MI") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="MI"
                                                                                                data-right-side="HZ"
                                                                                                value="MI">میلیون تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['RealEstateBuyTimePrice'])['unit']) == "ML") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="ML"
                                                                                                data-right-side="MI"
                                                                                                value="ML">میلیارد تومان
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputRealEstateNowTimePrice">
                                                                                ارزش حدودی کل سهام درحال حاضر :
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <div class="row">
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['RealEstateNowTimePrice'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputRealEstateNowTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputRealEstateNowTimePrice ">صد
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['RealEstateNowTimePrice'])['left']); ?>
                                                                                            type="number"
                                                                                            name="inputRealEstateNowTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputRealEstateNowTimePrice">هزار
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputRealEstateNowTimePrice"
                                                                                            id="inputRealEstateNowTimePrice">
                                                                                        <option value="0">انتخاب کنید ---</option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['RealEstateNowTimePrice'])['unit']) == "HZ") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="HZ"
                                                                                                data-right-side="SD"
                                                                                                value="HZ">هزار تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['RealEstateNowTimePrice'])['unit']) == "MI") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="MI"
                                                                                                data-right-side="HZ"
                                                                                                value="MI">میلیون تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['RealEstateNowTimePrice'])['unit']) == "ML") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="ML"
                                                                                                data-right-side="MI"
                                                                                                value="ML">میلیارد تومان
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group RightFloat">
                                                                            <label for="inputRealEstateAddress">آدرس</label>
                                                                            <input
                                                                                <?php setInputValue($item['RealEstateAddress']); ?>
                                                                                    id="inputRealEstateAddress"
                                                                                    type="text"
                                                                                    name="inputRealEstateAddress"
                                                                                    class="input-validate validate valid"
                                                                                    placeholder="نام خیابان اصلی / محله / منطقه">
                                                                        </div>
                                                                    </div>
                                                                <?php }
                                                            } ?>
                                                        </form>
                                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                                            <span class="remove-form fa fa-times"></span>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputRealEstateType">
                                                                    نوع کاربری
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputRealEstateType"
                                                                        id="inputRealEstateType">
                                                                    <?php foreach ($EnumResumeProfile['RealEstateType'] as $key => $value) { ?>
                                                                        <option
                                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputRealEstateOwnershipDate">
                                                                    سال شروع مالکیت
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputRealEstateOwnershipDate"
                                                                        id="inputRealEstateOwnershipDate"
                                                                        style="font-family: tahoma;">
                                                                    <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                        <option
                                                                            <?php if ($i == 1398) echo "selected"; ?>
                                                                                value="<?php echo $i; ?>">
                                                                            <?php echo $i; ?>
                                                                        </option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputRealEstateOwnershipType">
                                                                    نحوه مالکیت
                                                                </label>
                                                                <select
                                                                        class="form-control form-control-lg"
                                                                        name="inputRealEstateOwnershipType"
                                                                        id="inputRealEstateOwnershipType">
                                                                    <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                        <option
                                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat">
                                                                <label for="inputRealEstateCountryId">کشور</label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputRealEstateCountryId"
                                                                        id="inputRealEstateCountryId">
                                                                    <option value="0">-- انتخاب کنید --</option>
                                                                    <?php foreach ($countries as $item) { ?>
                                                                        <option
                                                                            <?php if ($item['ISO'] == 'IR') echo "selected"; ?>
                                                                                value="<?php echo $item['CountryId']; ?>"><?php echo $item['FaName']; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv">
                                                                <label for="inputRealEstateStateId">
                                                                    استان
                                                                </label>
                                                                <select class="form-control form-control-lg state-select"
                                                                        name="inputRealEstateStateId"
                                                                        id="inputRealEstateStateId">
                                                                    <option value="0">-- انتخاب کنید --</option>
                                                                    <?php foreach ($states as $state) { ?>
                                                                        <option value="<?php echo $state['StateId']; ?>">
                                                                            <?php echo $state['StateName']; ?>
                                                                        </option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv">
                                                                <label for="inputRealEstateCityId">
                                                                    شهر
                                                                </label>
                                                                <select class="form-control form-control-lg city-select"
                                                                        name="inputRealEstateCityId"
                                                                        id="inputRealEstateCityId">
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputRealEstatePortion">
                                                                    سهم از ملک(1 تا 6 دانگ)
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <input type="number" name="inputRealEstatePortion"
                                                                       id="inputRealEstatePortion"
                                                                       class="form-control"
                                                                       placeholder="سهم از ملک 1 تا 6 دانگ"
                                                                       min="0" max="6"/>
                                                            </div>
                                                            <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputRealEstateExtent">
                                                                    متراژ حدودی ملک
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-6 col-xs-12 RightFloat">
                                                                        <input type="number"
                                                                               name="inputRealEstateExtent"
                                                                               id="inputRealEstateExtent"
                                                                               class="form-control"
                                                                               placeholder=""
                                                                               min="0"/>
                                                                    </div>
                                                                    <div class="col-md-6 col-xs-12 RightFloat">
                                                                        <select class="form-control form-control-lg"
                                                                                name="inputRealEstateExtentUnit"
                                                                                id="inputRealEstateExtentUnit">
                                                                            <?php foreach ($EnumResumeProfile['Extent'] as $key => $value) { ?>
                                                                                <option
                                                                                        value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputRealEstateBuyTimePrice">
                                                                    ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputRealEstateBuyTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputRealEstateBuyTimePrice ">صد
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputRealEstateBuyTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputRealEstateBuyTimePrice">هزار
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg"
                                                                                name="inputRealEstateBuyTimePrice"
                                                                                id="inputRealEstateBuyTimePrice">
                                                                            <option value="0">انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ"
                                                                                    data-right-side="SD" value="HZ">هزار
                                                                                تومان
                                                                            </option>
                                                                            <option data-left-side="MI"
                                                                                    data-right-side="HZ" value="MI">
                                                                                میلیون تومان
                                                                            </option>
                                                                            <option data-left-side="ML"
                                                                                    data-right-side="MI" value="ML">
                                                                                میلیارد تومان
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputRealEstateNowTimePrice">
                                                                    ارزش حدودی کل سهام درحال حاضر :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputRealEstateNowTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputRealEstateNowTimePrice ">صد
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputRealEstateNowTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputRealEstateNowTimePrice">هزار
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg"
                                                                                name="inputRealEstateNowTimePrice"
                                                                                id="inputRealEstateNowTimePrice">
                                                                            <option value="0">انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ"
                                                                                    data-right-side="SD" value="HZ">هزار
                                                                                تومان
                                                                            </option>
                                                                            <option data-left-side="MI"
                                                                                    data-right-side="HZ" value="MI">
                                                                                میلیون تومان
                                                                            </option>
                                                                            <option data-left-side="ML"
                                                                                    data-right-side="MI" value="ML">
                                                                                میلیارد تومان
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group RightFloat">
                                                                <label for="inputRealEstateAddress">آدرس</label>
                                                                <input id="inputRealEstateAddress" type="text"
                                                                       name="inputRealEstateAddress"
                                                                       class="input-validate validate valid"
                                                                       placeholder="نام خیابان اصلی / محله / منطقه">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="LeftPaneAction">
                                                <div class="row form-group">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <button
                                                                class="btn btn-block btn-lg CommonButtons waves-effect"
                                                                data-target="RealEstate"
                                                                data-role="Self">
                                                            ثبت
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Books -->

                                    <!--Articles -->
                                    <div class="col-md-12 col-xs-12">
                                        <div class="panel panel-default LeftPanelShadow">
                                            <div class="panel-heading">
                                                وسایل نقلیه
                                                <span class="add-form fa fa-plus"></span>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                        <hr>
                                                        <form id="form-Vehicle">
                                                            <span class="divider"></span>
                                                            <?php foreach ($finance['Vehicle'] as $item) {
                                                                if ($item['ForWho'] == 'Self') { ?>
                                                                    <div class="col-md-12 col-xs-12 padding-0 form">
                                                                        <span class="remove-form fa fa-times"></span>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputVehicleType">
                                                                                نوع وسیله نقلیه<span
                                                                                        class="text-danger"></span>
                                                                            </label>
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputVehicleType"
                                                                                    id="inputVehicleType">
                                                                                <?php foreach ($EnumResumeProfile['TypeOfVehicle'] as $key => $value) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['VehicleType'], $key); ?>
                                                                                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputVehicleOwnershipDate">
                                                                                سال شروع مالکیت<span
                                                                                        class="text-danger"></span>
                                                                            </label>
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputVehicleOwnershipDate"
                                                                                    id="inputVehicleOwnershipDate"
                                                                                    style="font-family: tahoma;">
                                                                                <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['VehicleOwnershipDate'], $i); ?>
                                                                                        <?php if ($i == 1398) echo "selected"; ?>
                                                                                            value="<?php echo $i; ?>">
                                                                                        <?php echo $i; ?>
                                                                                    </option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputVehicleOwnershipType">
                                                                                نحوه مالکیت
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputVehicleOwnershipType"
                                                                                    id="inputVehicleOwnershipType">
                                                                                <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                                    <option

                                                                                        <?php setOptionSelected($item['VehicleOwnershipType'], $i); ?>
                                                                                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputVehicleBuyTimePrice">
                                                                                ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <div class="row">
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['VehicleBuyTimePrice'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputVehicleBuyTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputVehicleBuyTimePrice ">صد
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['VehicleBuyTimePrice'])['left']); ?>
                                                                                            type="number"
                                                                                            name="inputVehicleBuyTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputVehicleBuyTimePrice">هزار
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputVehicleBuyTimePrice"
                                                                                            id="inputVehicleBuyTimePrice">
                                                                                        <option value="0">انتخاب کنید ---</option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['VehicleBuyTimePrice'])['unit']) == "HZ") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="HZ"
                                                                                                data-right-side="SD"
                                                                                                value="HZ">هزار تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['VehicleBuyTimePrice'])['unit']) == "MI") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="MI"
                                                                                                data-right-side="HZ"
                                                                                                value="MI">میلیون تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['VehicleBuyTimePrice'])['unit']) == "ML") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="ML"
                                                                                                data-right-side="MI"
                                                                                                value="ML">میلیارد تومان
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputVehicleNowTimePrice">
                                                                                ارزش حدودی کل سهام درحال حاضر :
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <div class="row">
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['VehicleNowTimePrice'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputVehicleNowTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputVehicleNowTimePrice ">صد
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['VehicleNowTimePrice'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputVehicleNowTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputVehicleNowTimePrice">هزار
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputVehicleNowTimePrice"
                                                                                            id="inputVehicleNowTimePrice">
                                                                                        <option value="0">انتخاب کنید ---</option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['VehicleNowTimePrice'])['unit']) == "HZ") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="HZ"
                                                                                                data-right-side="SD"
                                                                                                value="HZ">هزار تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['VehicleNowTimePrice'])['unit']) == "MI") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="MI"
                                                                                                data-right-side="HZ"
                                                                                                value="MI">میلیون تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['VehicleNowTimePrice'])['unit']) == "ML") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="ML"
                                                                                                data-right-side="MI"
                                                                                                value="ML">میلیارد تومان
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat clear-div">
                                                                            <label for="inputVehiclePortion">
                                                                                سهم از ملک(1 تا 6 دانگ)
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <input
                                                                                <?php setInputValue($item['VehiclePortion']); ?>
                                                                                    type="number"
                                                                                    name="inputVehiclePortion"
                                                                                    id="inputVehiclePortion"
                                                                                    class="form-control"
                                                                                    placeholder="سهم از ملک 1 تا 6 دانگ"
                                                                                    min="0" max="6"/>
                                                                        </div>
                                                                    </div>
                                                                <?php }
                                                            } ?>
                                                        </form>
                                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                                            <span class="remove-form fa fa-times"></span>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputVehicleType">
                                                                    نوع وسیله نقلیه
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputVehicleType"
                                                                        id="inputVehicleType">
                                                                    <?php foreach ($EnumResumeProfile['TypeOfVehicle'] as $key => $value) { ?>
                                                                        <option
                                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputVehicleOwnershipDate">
                                                                    سال شروع مالکیت
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputVehicleOwnershipDate"
                                                                        id="inputVehicleOwnershipDate"
                                                                        style="font-family: tahoma;">
                                                                    <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                        <option
                                                                            <?php if ($i == 1398) echo "selected"; ?>
                                                                                value="<?php echo $i; ?>">
                                                                            <?php echo $i; ?>
                                                                        </option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputVehicleOwnershipType">
                                                                    نحوه مالکیت
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputVehicleOwnershipType"
                                                                        id="inputVehicleOwnershipType">
                                                                    <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                        <option
                                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputVehicleBuyTimePrice">
                                                                    ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputVehicleBuyTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputVehicleBuyTimePrice ">صد
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputVehicleBuyTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputVehicleBuyTimePrice">هزار
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg"
                                                                                name="inputVehicleBuyTimePrice"
                                                                                id="inputVehicleBuyTimePrice">
                                                                            <option value="0">انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ"
                                                                                    data-right-side="SD" value="HZ">هزار
                                                                                تومان
                                                                            </option>
                                                                            <option data-left-side="MI"
                                                                                    data-right-side="HZ" value="MI">
                                                                                میلیون تومان
                                                                            </option>
                                                                            <option data-left-side="ML"
                                                                                    data-right-side="MI" value="ML">
                                                                                میلیارد تومان
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputVehicleNowTimePrice">
                                                                    ارزش حدودی کل سهام درحال حاضر :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputVehicleNowTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputVehicleNowTimePrice ">صد
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputVehicleNowTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputVehicleNowTimePrice">هزار
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg"
                                                                                name="inputVehicleNowTimePrice"
                                                                                id="inputVehicleNowTimePrice">
                                                                            <option value="0">انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ"
                                                                                    data-right-side="SD" value="HZ">هزار
                                                                                تومان
                                                                            </option>
                                                                            <option data-left-side="MI"
                                                                                    data-right-side="HZ" value="MI">
                                                                                میلیون تومان
                                                                            </option>
                                                                            <option data-left-side="ML"
                                                                                    data-right-side="MI" value="ML">
                                                                                میلیارد تومان
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat clear-div">
                                                                <label for="inputVehiclePortion">
                                                                    سهم از ملک(1 تا 6 دانگ)
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <input type="number" name="inputVehiclePortion"
                                                                       id="inputVehiclePortion" class="form-control"
                                                                       placeholder="سهم از ملک 1 تا 6 دانگ"
                                                                       min="0" max="6"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="LeftPaneAction">
                                                <div class="row form-group">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <button
                                                                class="btn btn-block btn-lg CommonButtons waves-effect"
                                                                data-target="Vehicle"
                                                                data-role="Self">
                                                            ثبت
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Articles -->

                                    <!--Research -->
                                    <div class="col-md-12 col-xs-12">
                                        <div class="panel panel-default LeftPanelShadow">
                                            <div class="panel-heading">
                                                سرمایه‌گذاری‌ها (سهام‌، اوراق بهادار، ...)
                                                <span class="add-form fa fa-plus"></span>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                        <hr>
                                                        <form id="form-Invest">
                                                            <span class="divider"></span>
                                                            <?php foreach ($finance['Invest'] as $item) {
                                                                if ($item['ForWho'] == 'Self') { ?>
                                                                    <div class="col-md-12 col-xs-12 padding-0 form">
                                                                        <span class="remove-form fa fa-times"></span>
                                                                        <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                            <label for="inputInvestTitle">
                                                                                نام شرکت / موسسه
                                                                            </label>
                                                                            <input
                                                                                <?php setInputValue($item['InvestTitle']); ?>
                                                                                    id="inputInvestTitle" type="text"
                                                                                    name="inputInvestTitle"
                                                                                    placeholder="نام شرکت - موسسه - پروژه ">
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputInvestDate">
                                                                                سال شروع مالکیت
                                                                                <span class="text-danger">
                                             </span>
                                                                            </label>
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputInvestDate"
                                                                                    id="inputInvestDate"
                                                                                    style="font-family: tahoma;">
                                                                                <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['InvestDate'], $i); ?>
                                                                                        <?php if ($i == 1398) echo "selected"; ?>
                                                                                            value="<?php echo $i; ?>">
                                                                                        <?php echo $i; ?>
                                                                                    </option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputInvestOwnershipType">
                                                                                نحوه مالکیت
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputInvestOwnershipType"
                                                                                    id="inputInvestOwnershipType">
                                                                                <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['InvestDate'], $key); ?>
                                                                                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputInvestBuyTimePrice">
                                                                                ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <div class="row">
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['InvestBuyTimePrice'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputInvestBuyTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputInvestBuyTimePrice ">صد
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['InvestBuyTimePrice'])['left']); ?>
                                                                                            type="number"
                                                                                            name="inputInvestBuyTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputInvestBuyTimePrice">هزار
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputInvestBuyTimePrice"
                                                                                            id="inputInvestBuyTimePrice">
                                                                                        <option value="0">انتخاب کنید ---</option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['InvestBuyTimePrice'])['unit']) == "HZ") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="HZ"
                                                                                                data-right-side="SD"
                                                                                                value="HZ">هزار تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['InvestBuyTimePrice'])['unit']) == "MI") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="MI"
                                                                                                data-right-side="HZ"
                                                                                                value="MI">میلیون تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['InvestBuyTimePrice'])['unit']) == "ML") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="ML"
                                                                                                data-right-side="MI"
                                                                                                value="ML">میلیارد تومان
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputInvestNowTimePrice">
                                                                                ارزش حدودی کل سهام درحال حاضر :
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <div class="row">
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['InvestNowTimePrice'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputInvestNowTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputInvestNowTimePrice ">صد
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['InvestNowTimePrice'])['left']); ?>
                                                                                            type="number"
                                                                                            name="inputInvestNowTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputInvestNowTimePrice">هزار
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputInvestNowTimePrice"
                                                                                            id="inputInvestNowTimePrice">
                                                                                        <option value="0">انتخاب کنید ---</option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['InvestNowTimePrice'])['unit']) == "HZ") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="HZ"
                                                                                                data-right-side="SD"
                                                                                                value="HZ">هزار تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['InvestNowTimePrice'])['unit']) == "MI") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="MI"
                                                                                                data-right-side="HZ"
                                                                                                value="MI">میلیون تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['InvestNowTimePrice'])['unit']) == "ML") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="ML"
                                                                                                data-right-side="MI"
                                                                                                value="ML">میلیارد تومان
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php }
                                                            } ?>
                                                        </form>
                                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                                            <span class="remove-form fa fa-times"></span>
                                                            <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                <label for="inputInvestTitle">
                                                                    نام شرکت / موسسه
                                                                </label>
                                                                <input id="inputInvestTitle" type="text"
                                                                       name="inputInvestTitle"
                                                                       placeholder="نام شرکت - موسسه - پروژه ">
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputInvestDate">
                                                                    سال شروع مالکیت
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputInvestDate"
                                                                        id="inputInvestDate"
                                                                        style="font-family: tahoma;">
                                                                    <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                        <option
                                                                            <?php if ($i == 1398) echo "selected"; ?>
                                                                                value="<?php echo $i; ?>">
                                                                            <?php echo $i; ?>
                                                                        </option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputInvestOwnershipType">
                                                                    نحوه مالکیت
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputInvestOwnershipType"
                                                                        id="inputInvestOwnershipType">
                                                                    <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                        <option
                                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputInvestBuyTimePrice">
                                                                    ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputInvestBuyTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputInvestBuyTimePrice ">صد
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputInvestBuyTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputInvestBuyTimePrice">هزار
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg"
                                                                                name="inputInvestBuyTimePrice"
                                                                                id="inputInvestBuyTimePrice">
                                                                            <option value="0">انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ"
                                                                                    data-right-side="SD" value="HZ">هزار
                                                                                تومان
                                                                            </option>
                                                                            <option data-left-side="MI"
                                                                                    data-right-side="HZ" value="MI">
                                                                                میلیون تومان
                                                                            </option>
                                                                            <option data-left-side="ML"
                                                                                    data-right-side="MI" value="ML">
                                                                                میلیارد تومان
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputInvestNowTimePrice">
                                                                    ارزش حدودی کل سهام درحال حاضر :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputInvestNowTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputInvestNowTimePrice ">صد
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputInvestNowTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputInvestNowTimePrice">هزار
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg"
                                                                                name="inputInvestNowTimePrice"
                                                                                id="inputInvestNowTimePrice">
                                                                            <option value="0">انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ"
                                                                                    data-right-side="SD" value="HZ">هزار
                                                                                تومان
                                                                            </option>
                                                                            <option data-left-side="MI"
                                                                                    data-right-side="HZ" value="MI">
                                                                                میلیون تومان
                                                                            </option>
                                                                            <option data-left-side="ML"
                                                                                    data-right-side="MI" value="ML">
                                                                                میلیارد تومان
                                                                            </option>
                                                                        </select>
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
                                                        <button
                                                                class="btn btn-block btn-lg CommonButtons waves-effect"
                                                                data-target="Invest"
                                                                data-role="Self">
                                                            ثبت
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Research -->

                                    <!--Translate -->
                                    <div class="col-md-12 col-xs-12">
                                        <div class="panel panel-default LeftPanelShadow">
                                            <div class="panel-heading">
                                                حساب‌های جاری، پس‌انداز و سرمایه‌گذاری
                                                <span class="add-form fa fa-plus"></span>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                        <hr>
                                                        <form id="form-BankAccount">
                                                            <span class="divider"></span>
                                                            <?php foreach ($finance['BankAccount'] as $item) {
                                                                if ($item['ForWho'] == 'Self') { ?>
                                                                    <div class="col-md-12 col-xs-12 padding-0 form">
                                                                        <span class="remove-form fa fa-times"></span>
                                                                        <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                            <label for="inputBankAccountTitle">
                                                                                عنوان بانک یا موسسه
                                                                            </label>
                                                                            <input
                                                                                <?php setInputValue($item['BankAccountTitle']); ?>
                                                                                    id="inputBankAccountTitle"
                                                                                    type="text"
                                                                                    name="inputBankAccountTitle"
                                                                                    placeholder="عنوان بانک یا موسسه ">
                                                                        </div>
                                                                        <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputBankAccountPrice">
                                                                                مبلغ :
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <div class="row">
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                    <input

                                                                                        <?php setInputValue(splitPrice($item['BankAccountPrice'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputBankAccountPrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputBankAccountPrice ">صد
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                    <input

                                                                                        <?php setInputValue(splitPrice($item['BankAccountPrice'])['left']); ?>
                                                                                            type="number"
                                                                                            name="RealEstateBuyTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputBankAccountPrice">هزار
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputBankAccountPrice"
                                                                                            id="inputBankAccountPrice">
                                                                                        <option value="0">انتخاب کنید ---</option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['BankAccountPrice'])['unit']) == "HZ") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="HZ"
                                                                                                data-right-side="SD"
                                                                                                value="HZ">هزار تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['BankAccountPrice'])['unit']) == "MI") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="MI"
                                                                                                data-right-side="HZ"
                                                                                                value="MI">میلیون تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['BankAccountPrice'])['unit']) == "ML") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="ML"
                                                                                                data-right-side="MI"
                                                                                                value="ML">میلیارد تومان
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat">
                                                                            <label for="inputBankAccountCountryId">کشور</label>
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputBankAccountCountryId"
                                                                                    id="inputBankAccountCountryId">
                                                                                <option value="0">-- انتخاب کنید --
                                                                                </option>
                                                                                <?php foreach ($countries as $row) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['BankAccountCountryId'], $row['CountryId']); ?>
                                                                                            value="<?php echo $row['CountryId']; ?>"><?php echo $row['FaName']; ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                <?php }
                                                            } ?>
                                                        </form>
                                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                                            <span class="remove-form fa fa-times"></span>
                                                            <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                <label for="inputBankAccountTitle">
                                                                    عنوان بانک یا موسسه
                                                                </label>
                                                                <input id="inputBankAccountTitle" type="text"
                                                                       name="inputBankAccountTitle"
                                                                       placeholder="عنوان بانک یا موسسه ">
                                                            </div>
                                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputBankAccountPrice">
                                                                    مبلغ :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputBankAccountPrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputBankAccountPrice ">صد
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="RealEstateBuyTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputBankAccountPrice">هزار
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg"
                                                                                name="inputBankAccountPrice"
                                                                                id="inputBankAccountPrice">
                                                                            <option value="0">انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ"
                                                                                    data-right-side="SD" value="HZ">هزار
                                                                                تومان
                                                                            </option>
                                                                            <option data-left-side="MI"
                                                                                    data-right-side="HZ" value="MI">
                                                                                میلیون تومان
                                                                            </option>
                                                                            <option data-left-side="ML"
                                                                                    data-right-side="MI" value="ML">
                                                                                میلیارد تومان
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat">
                                                                <label for="inputBankAccountCountryId">
                                                                    کشور
                                                                    </span>
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputBankAccountCountryId"
                                                                        id="inputBankAccountCountryId">
                                                                    <option value="0">-- انتخاب کنید --</option>
                                                                    <?php foreach ($countries as $item) { ?>
                                                                        <option
                                                                            <?php if ($item['ISO'] == 'IR') echo "selected"; ?>
                                                                                value="<?php echo $item['CountryId']; ?>"><?php echo $item['FaName']; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="LeftPaneAction">
                                                <div class="row form-group">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <button
                                                                class="btn btn-block btn-lg CommonButtons waves-effect"
                                                                data-target="BankAccount"
                                                                data-role="Self">
                                                            ثبت
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Translate -->

                                    <!-- Invention -->
                                    <div class="col-md-12 col-xs-12">
                                        <div class="panel panel-default LeftPanelShadow">
                                            <div class="panel-heading">
                                                دیون و مطالبات
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                        <hr>
                                                        <form id="form-Credit-Debtor">
                                                            <span class="divider"></span>
                                                            <?php
                                                            $creditDebtor['CreditPrice'] = "0.0 HZ";
                                                            $creditDebtor['DebotrPrice'] = "0.0 HZ";
                                                            $creditDebtor['DebotrDescription'] = "";
                                                            foreach ($finance['CreditDebtor'] as $item) {
                                                                if($item['ForWho'] == 'Self'){
                                                                    $creditDebtor = $item;
                                                                }
                                                            }
                                                            ?>
                                                            <div class="col-md-12 col-xs-12 padding-0 form">
                                                                        <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputCreditPrice">
                                                                                جمع کل بستانکاری از اشخاص حقیقی یا حقوقی
                                                                                :
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <div class="row">
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($creditDebtor['CreditPrice'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputCreditPrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputCreditPrice ">صد
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($creditDebtor['CreditPrice'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputCreditPrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputCreditPrice">هزار
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputCreditPrice"
                                                                                            id="inputCreditPrice">
                                                                                        <option value="0">انتخاب کنید ---</option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($creditDebtor['CreditPrice'])['unit']) == "HZ") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="HZ"
                                                                                                data-right-side="SD"
                                                                                                value="HZ">هزار تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($creditDebtor['CreditPrice'])['unit']) == "MI") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="MI"
                                                                                                data-right-side="HZ"
                                                                                                value="MI">میلیون تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($creditDebtor['CreditPrice'])['unit']) == "ML") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="ML"
                                                                                                data-right-side="MI"
                                                                                                value="ML">میلیارد تومان
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputDebotrPrice">
                                                                                جمع کل بدهکاری از اشخاص حقیقی یا حقوقی :
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <div class="row">
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($creditDebtor['DebotrPrice'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputDebotrPrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputDebotrPrice ">صد
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($creditDebtor['DebotrPrice'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputDebotrPrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputDebotrPrice">هزار
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputDebotrPrice"
                                                                                            id="inputDebotrPrice">
                                                                                        <option value="0">انتخاب کنید ---</option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($creditDebtor['DebotrPrice'])['unit']) == "HZ") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="HZ"
                                                                                                data-right-side="SD"
                                                                                                value="HZ">هزار تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($creditDebtor['DebotrPrice'])['unit']) == "MI") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="MI"
                                                                                                data-right-side="HZ"
                                                                                                value="MI">میلیون تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($creditDebtor['DebotrPrice'])['unit']) == "ML") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="ML"
                                                                                                data-right-side="MI"
                                                                                                value="ML">میلیارد تومان
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <textarea class="EStates-textArea"
                                                                                      name="inputDebotrDescription"><?php echo $creditDebtor['DebotrDescription']; ?></textarea>
                                                                        </div>
                                                                    </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="LeftPaneAction">
                                                <div class="row form-group">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <button
                                                                class="btn btn-block btn-lg CommonButtons waves-effect"
                                                                data-target="Credit-Debtor"
                                                                data-role="Self">
                                                            ثبت
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Invention -->

                                    <!--Translate -->
                                    <div class="col-md-12 col-xs-12">
                                        <div class="panel panel-default LeftPanelShadow">
                                            <div class="panel-heading">
                                                کلیه کالاهای فاقد سند مالکیت رسمی
                                                <span class="add-form fa fa-plus"></span>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                        <hr>
                                                        <form id="form-Goods">
                                                            <span class="divider"></span>
                                                            <?php foreach ($finance['Goods'] as $item) {
                                                                if ($item['ForWho'] == 'Self') { ?>
                                                                    <div class="col-md-12 col-xs-12 padding-0 form">
                                                                        <span class="remove-form fa fa-times"></span>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputGoodsType">
                                                                                نوع کالا
                                                                            </label>
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputGoodsType"
                                                                                    id="inputGoodsType">
                                                                                <?php foreach ($EnumResumeProfile['GoodsType'] as $key => $value) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['GoodsType'], $key); ?>
                                                                                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputGoodsOwnershipStartDate">
                                                                                سال شروع مالکیت
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputGoodsOwnershipStartDate"
                                                                                    id="inputGoodsOwnershipStartDate"
                                                                                    style="font-family: tahoma;">
                                                                                <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['GoodsOwnershipStartDate'], $i); ?>
                                                                                            value="<?php echo $i; ?>">
                                                                                        <?php echo $i; ?>
                                                                                    </option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputGoodsCount">
                                                                                حجم / وزن / تعداد کالا
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <input
                                                                                <?php setInputValue($item['GoodsCount']); ?>
                                                                                    type="text" name="inputGoodsCount"
                                                                                    id="inputGoodsCount"
                                                                                    class="form-control"
                                                                                    placeholder="  حجم / وزن / تعداد کالا"/>
                                                                        </div>
                                                                        <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputGoodsBuyTimePrice">
                                                                                ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <div class="row">
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['GoodsBuyTimePrice'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputGoodsBuyTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputGoodsBuyTimePrice ">صد
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['GoodsBuyTimePrice'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputGoodsBuyTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputGoodsBuyTimePrice">هزار
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputGoodsBuyTimePrice"
                                                                                            id="inputGoodsBuyTimePrice">
                                                                                        <option value="0">انتخاب کنید ---</option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['GoodsBuyTimePrice'])['unit']) == "HZ") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="HZ"
                                                                                                data-right-side="SD"
                                                                                                value="HZ">هزار تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['GoodsBuyTimePrice'])['unit']) == "MI") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="MI"
                                                                                                data-right-side="HZ"
                                                                                                value="MI">میلیون تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['GoodsBuyTimePrice'])['unit']) == "ML") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="ML"
                                                                                                data-right-side="MI"
                                                                                                value="ML">میلیارد تومان
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputGoodsNowTimePrice">
                                                                                ارزش حدودی کل سهام درحال حاضر :
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <div class="row">
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['GoodsNowTimePrice'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputGoodsNowTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputGoodsNowTimePrice ">صد
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['GoodsNowTimePrice'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputGoodsNowTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputGoodsNowTimePrice">هزار
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputGoodsNowTimePrice"
                                                                                            id="inputGoodsNowTimePrice">
                                                                                        <option value="0">انتخاب کنید ---</option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['GoodsNowTimePrice'])['unit']) == "HZ") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="HZ"
                                                                                                data-right-side="SD"
                                                                                                value="HZ">هزار تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['GoodsNowTimePrice'])['unit']) == "MI") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="MI"
                                                                                                data-right-side="HZ"
                                                                                                value="MI">میلیون تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['GoodsNowTimePrice'])['unit']) == "ML") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="ML"
                                                                                                data-right-side="MI"
                                                                                                value="ML">میلیارد تومان
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputGoodsOwnershipPercent">
                                                                                درصد سهم از مالکیت :
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <input
                                                                                <?php setInputValue($item['GoodsOwnershipPercent']); ?>
                                                                                    type="number"
                                                                                    name="inputGoodsOwnershipPercent"
                                                                                    id="inputGoodsOwnershipPercent"
                                                                                    class="form-control"
                                                                                    placeholder="سهم از ملک 1 تا 6 دانگ"
                                                                                    min="0" max="6"/>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputRealEstateOwnershipType">
                                                                                نحوه مالکیت
                                                                                <span class="text-danger">
                                             </span>
                                                                            </label>
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputRealEstateOwnershipType"
                                                                                    id="inputRealEstateOwnershipType">
                                                                                <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['RealEstateOwnershipType'], $key); ?>
                                                                                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                <?php }
                                                            } ?>
                                                        </form>
                                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                                            <span class="remove-form fa fa-times"></span>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputGoodsType">
                                                                    نوع کالا
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputGoodsType"
                                                                        id="inputGoodsType">
                                                                    <?php foreach ($EnumResumeProfile['GoodsType'] as $key => $value) { ?>
                                                                        <option
                                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputGoodsOwnershipStartDate">
                                                                    سال شروع مالکیت
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputGoodsOwnershipStartDate"
                                                                        id="inputGoodsOwnershipStartDate"
                                                                        style="font-family: tahoma;">
                                                                    <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                        <option
                                                                            <?php if ($i == 1398) echo "selected"; ?>
                                                                                value="<?php echo $i; ?>">
                                                                            <?php echo $i; ?>
                                                                        </option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputGoodsCount">
                                                                    حجم / وزن / تعداد کالا
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <input type="text" name="inputGoodsCount"
                                                                       id="inputGoodsCount"
                                                                       class="form-control"
                                                                       placeholder="  حجم / وزن / تعداد کالا"/>
                                                            </div>
                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputGoodsBuyTimePrice">
                                                                    ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputGoodsBuyTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputGoodsBuyTimePrice ">صد
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputGoodsBuyTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputGoodsBuyTimePrice">هزار
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg"
                                                                                name="inputGoodsBuyTimePrice"
                                                                                id="inputGoodsBuyTimePrice">
                                                                            <option value="0">انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ"
                                                                                    data-right-side="SD" value="HZ">هزار
                                                                                تومان
                                                                            </option>
                                                                            <option data-left-side="MI"
                                                                                    data-right-side="HZ" value="MI">
                                                                                میلیون تومان
                                                                            </option>
                                                                            <option data-left-side="ML"
                                                                                    data-right-side="MI" value="ML">
                                                                                میلیارد تومان
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputGoodsNowTimePrice">
                                                                    ارزش حدودی کل سهام درحال حاضر :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputGoodsNowTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputGoodsNowTimePrice ">صد
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputGoodsNowTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputGoodsNowTimePrice">هزار
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg"
                                                                                name="inputGoodsNowTimePrice"
                                                                                id="inputGoodsNowTimePrice">
                                                                            <option value="0">انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ"
                                                                                    data-right-side="SD" value="HZ">هزار
                                                                                تومان
                                                                            </option>
                                                                            <option data-left-side="MI"
                                                                                    data-right-side="HZ" value="MI">
                                                                                میلیون تومان
                                                                            </option>
                                                                            <option data-left-side="ML"
                                                                                    data-right-side="MI" value="ML">
                                                                                میلیارد تومان
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputGoodsOwnershipPercent">
                                                                    درصد سهم از مالکیت :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <input type="number" name="inputGoodsOwnershipPercent"
                                                                       id="inputGoodsOwnershipPercent"
                                                                       class="form-control"
                                                                       placeholder="سهم از ملک 1 تا 6 دانگ"
                                                                       min="0" max="6"/>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputRealEstateOwnershipType">
                                                                    نحوه مالکیت
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputRealEstateOwnershipType"
                                                                        id="inputRealEstateOwnershipType">
                                                                    <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                        <option
                                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="LeftPaneAction">
                                                <div class="row form-group">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <button
                                                                class="btn btn-block btn-lg CommonButtons waves-effect"
                                                                data-target="Goods"
                                                                data-role="Self">
                                                            ثبت
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Translate -->

                                    <!--Translate -->
                                    <div class="col-md-12 col-xs-12">
                                        <div class="panel panel-default LeftPanelShadow">
                                            <div class="panel-heading">
                                                حقوق مالکیت معنوی
                                                <span class="add-form fa fa-plus"></span>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                        <hr>
                                                        <form id="form-Fee">
                                                            <span class="divider"></span>
                                                            <?php foreach ($finance['Fee'] as $item) {
                                                                if ($item['ForWho'] == 'Self') { ?>
                                                                    <div class="col-md-12 col-xs-12 padding-0 form">
                                                                        <span class="remove-form fa fa-times"></span>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputFeeType">عنوان :</label>
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputFeeType"
                                                                                    id="inputFeeType">
                                                                                <?php foreach ($EnumResumeProfile['FeeType'] as $key => $value) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['FeeType'], $key); ?>
                                                                                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputFeeOwnershipStartDate">
                                                                                سال شروع مالکیت
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputFeeOwnershipStartDate"
                                                                                    id="inputFeeOwnershipStartDate"
                                                                                    style="font-family: tahoma;">
                                                                                <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['FeeOwnershipStartDate'], $i); ?>
                                                                                            value="<?php echo $i; ?>">
                                                                                        <?php echo $i; ?>
                                                                                    </option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputFeePercent">
                                                                                درصد سهم از مالکیت معنوی:
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <input
                                                                                <?php setInputValue($item['FeePercent']); ?>
                                                                                    type="number" name="inputFeePercent"
                                                                                    id="inputFeePercent"
                                                                                    class="form-control"
                                                                                    placeholder="سهم از ملک 1 تا 6 دانگ"/>
                                                                        </div>
                                                                        <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputFeeAverageInYear">
                                                                                میزان درآمد متوسط سالیانه از مالکیت
                                                                                معنوی :
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <div class="row">
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['FeeAverageInYear'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputFeeAverageInYear"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputFeeAverageInYear ">صد
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['FeeAverageInYear'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputFeeAverageInYear"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputFeeAverageInYear">هزار
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputFeeAverageInYear"
                                                                                            id="inputFeeAverageInYear">
                                                                                        <option value="0">انتخاب کنید ---</option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['FeeAverageInYear'])['unit']) == "HZ") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="HZ"
                                                                                                data-right-side="SD"
                                                                                                value="HZ">هزار تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['FeeAverageInYear'])['unit']) == "MI") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="MI"
                                                                                                data-right-side="HZ"
                                                                                                value="MI">میلیون تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['FeeAverageInYear'])['unit']) == "ML") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="ML"
                                                                                                data-right-side="MI"
                                                                                                value="ML">میلیارد تومان
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php }
                                                            } ?>
                                                        </form>
                                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                                            <span class="remove-form fa fa-times"></span>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputFeeType">
                                                                    عنوان :
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputFeeType"
                                                                        id="inputFeeType">
                                                                    <?php foreach ($EnumResumeProfile['FeeType'] as $key => $value) { ?>
                                                                        <option
                                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputFeeOwnershipStartDate">
                                                                    سال شروع مالکیت
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputFeeOwnershipStartDate"
                                                                        id="inputFeeOwnershipStartDate"
                                                                        style="font-family: tahoma;">
                                                                    <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                        <option
                                                                            <?php if ($i == 1398) echo "selected"; ?>
                                                                                value="<?php echo $i; ?>">
                                                                            <?php echo $i; ?>
                                                                        </option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputFeePercent">
                                                                    درصد سهم از مالکیت معنوی:
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <input type="number" name="inputFeePercent"
                                                                       id="inputFeePercent"
                                                                       class="form-control"
                                                                       placeholder="سهم از ملک 1 تا 6 دانگ"/>
                                                            </div>
                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputFeeAverageInYear">
                                                                    میزان درآمد متوسط سالیانه از مالکیت معنوی :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputFeeAverageInYear"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputFeeAverageInYear ">صد
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputFeeAverageInYear"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputFeeAverageInYear">هزار
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg"
                                                                                name="inputFeeAverageInYear"
                                                                                id="inputFeeAverageInYear">
                                                                            <option value="0">انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ"
                                                                                    data-right-side="SD" value="HZ">هزار
                                                                                تومان
                                                                            </option>
                                                                            <option data-left-side="MI"
                                                                                    data-right-side="HZ" value="MI">
                                                                                میلیون تومان
                                                                            </option>
                                                                            <option data-left-side="ML"
                                                                                    data-right-side="MI" value="ML">
                                                                                میلیارد تومان
                                                                            </option>
                                                                        </select>
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
                                                        <button
                                                                class="btn btn-block btn-lg CommonButtons waves-effect"
                                                                data-target="Fee"
                                                                data-role="Self">
                                                            ثبت
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Translate -->

                                    <!--Translate -->
                                    <div class="col-md-12 col-xs-12">
                                        <div class="panel panel-default LeftPanelShadow">
                                            <div class="panel-heading">
                                                در آمد
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                        <hr>
                                                        <form id="form-AverageMonthIncome">
                                                            <span class="divider"></span>
                                                            <div class="col-md-12 col-xs-12 padding-0 form">
                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                    <?php
                                                                    $income['AverageMonthIncome'] = "0.0 HZ";
                                                                    foreach ($finance['Income'] as $item) {
                                                                        if($item['ForWho'] == 'Self'){
                                                                            $income = $item;
                                                                        }
                                                                    }
                                                                    ?>
                                                                    <label for="inputAverageMonthIncome">
                                                                        درآمد متوسط ماهیانه :
                                                                        <span class="text-danger"></span>
                                                                    </label>
                                                                    <div class="row">
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($income['AverageMonthIncome'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputAverageMonthIncome"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0"/>
                                                                            <label for="inputAverageMonthIncome ">صد
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($income['AverageMonthIncome'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputAverageMonthIncome"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0"/>
                                                                            <label for="inputAverageMonthIncome">هزار
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputAverageMonthIncome"
                                                                                    id="inputAverageMonthIncome">
                                                                                <option value="0">انتخاب کنید ---</option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($income['AverageMonthIncome'])['unit']) == "HZ") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="HZ"
                                                                                        data-right-side="SD"
                                                                                        value="HZ">هزار تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($income['AverageMonthIncome'])['unit']) == "MI") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="MI"
                                                                                        data-right-side="HZ"
                                                                                        value="MI">میلیون تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($income['AverageMonthIncome'])['unit']) == "ML") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="ML"
                                                                                        data-right-side="MI"
                                                                                        value="ML">میلیارد تومان
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="LeftPaneAction">
                                                <div class="row form-group">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <button
                                                                class="btn btn-block btn-lg CommonButtons waves-effect"
                                                                data-target="AverageMonthIncome"
                                                                data-role="Self">
                                                            ثبت
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Translate -->

                                    <!-- Conference -->
                                    <div class="col-md-12 col-xs-12">
                                        <div class="panel panel-default LeftPanelShadow">
                                            <div class="panel-heading">
                                                شفاف سازی هزینه های انتخاباتی
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                        <hr>
                                                        <form id="form-Election">
                                                            <span class="divider"></span>
                                                            <?php
                                                            $election['ElectionPlacePrice'] = "0.0 HZ";
                                                            $election['ElectionFlockPrice'] = "0.0 HZ";
                                                            $election['ElectionAdvertisePrice'] = "0.0 HZ";
                                                            $election['ElectionStaffPrice'] = "0.0 HZ";
                                                            $election['ElectionAllPrice'] = "0.0 HZ";
                                                            foreach ($finance['Election'] as $item) {
                                                                if($item['ForWho'] == 'Self'){
                                                                    $election = $item;
                                                                }
                                                            }
                                                            ?>
                                                            <div class="col-md-12 col-xs-12 padding-0 form">
                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                    <label for="inputElectionPlacePrice">
                                                                        هزینه دایرکردن محل ستاد انتخابات (اجاره بها ,
                                                                        حملو نقل و سایر موارد)
                                                                        -هزینه کل :
                                                                        <span class="text-danger"></span>
                                                                    </label>
                                                                    <div class="row">
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($election['ElectionPlacePrice'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputElectionPlacePrice"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0" max="6"/>
                                                                            <label for="inputElectionPlacePrice ">صد
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($election['ElectionPlacePrice'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputElectionPlacePrice"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0" max="6"/>
                                                                            <label for="inputElectionPlacePrice">هزار
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputElectionPlacePrice"
                                                                                    id="inputElectionPlacePrice">
                                                                                <option value="0">انتخاب کنید ---</option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionPlacePrice'])['unit']) == "HZ") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="HZ"
                                                                                        data-right-side="SD"
                                                                                        value="HZ">هزار تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionPlacePrice'])['unit']) == "MI") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="MI"
                                                                                        data-right-side="HZ"
                                                                                        value="MI">میلیون تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionPlacePrice'])['unit']) == "ML") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="ML"
                                                                                        data-right-side="MI"
                                                                                        value="ML">میلیارد تومان
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                    <label for="inputElectionFlockPrice">
                                                                        هزینه برپایی تجمعات عمومی مرتبط با اهداف
                                                                        انتخاباتی – هزینه کل :
                                                                        <span class="text-danger"></span>
                                                                    </label>
                                                                    <div class="row">
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($election['ElectionFlockPrice'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputElectionFlockPrice"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0"/>
                                                                            <label for="inputElectionFlockPrice ">صد
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($election['ElectionFlockPrice'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputElectionFlockPrice"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0"/>
                                                                            <label for="inputElectionFlockPrice">هزار
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputElectionFlockPrice"
                                                                                    id="inputElectionFlockPrice">
                                                                                <option value="0">انتخاب کنید ---</option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionFlockPrice'])['unit']) == "HZ") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="HZ"
                                                                                        data-right-side="SD"
                                                                                        value="HZ">هزار تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionFlockPrice'])['unit']) == "MI") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="MI"
                                                                                        data-right-side="HZ"
                                                                                        value="MI">میلیون تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionFlockPrice'])['unit']) == "ML") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="ML"
                                                                                        data-right-side="MI"
                                                                                        value="ML">میلیارد تومان
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                    <label for="inputElectionAdvertisePrice">
                                                                        هزینه تبلیغات مجاز در رسانه ها – هزینه کل :
                                                                        <span class="text-danger"></span>
                                                                    </label>
                                                                    <div class="row">
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($election['ElectionAdvertisePrice'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputElectionAdvertisePrice"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0"/>
                                                                            <label for="inputElectionAdvertisePrice ">صد
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($election['ElectionAdvertisePrice'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputElectionAdvertisePrice"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0"/>
                                                                            <label for="inputElectionAdvertisePrice">هزار
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputElectionAdvertisePrice"
                                                                                    id="inputElectionAdvertisePrice">
                                                                                <option value="0">انتخاب کنید ---</option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionAdvertisePrice'])['unit']) == "HZ") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="HZ"
                                                                                        data-right-side="SD"
                                                                                        value="HZ">هزار تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionAdvertisePrice'])['unit']) == "MI") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="MI"
                                                                                        data-right-side="HZ"
                                                                                        value="MI">میلیون تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionAdvertisePrice'])['unit']) == "ML") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="ML"
                                                                                        data-right-side="MI"
                                                                                        value="ML">میلیارد تومان
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                    <label for="inputElectionStaffPrice">
                                                                        هزینه و حق الزحمه عوامل اجرایی و کارشناسی در
                                                                        انتخابات – هزینه کل :
                                                                        <span class="text-danger"></span>
                                                                    </label>
                                                                    <div class="row">
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($election['ElectionStaffPrice'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputElectionStaffPrice"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0"/>
                                                                            <label for="inputElectionStaffPrice ">صد
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($election['ElectionStaffPrice'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputElectionStaffPrice"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0"/>
                                                                            <label for="inputElectionStaffPrice">هزار
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputElectionStaffPrice"
                                                                                    id="inputElectionStaffPrice">
                                                                                <option value="0">انتخاب کنید ---</option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionStaffPrice'])['unit']) == "HZ") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="HZ"
                                                                                        data-right-side="SD"
                                                                                        value="HZ">هزار تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionStaffPrice'])['unit']) == "MI") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="MI"
                                                                                        data-right-side="HZ"
                                                                                        value="MI">میلیون تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionStaffPrice'])['unit']) == "ML") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="ML"
                                                                                        data-right-side="MI"
                                                                                        value="ML">میلیارد تومان
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                    <label for="inputElectionAllPrice">
                                                                        جمع کل هزینه های انتخاباتی :
                                                                        <span class="text-danger"></span>
                                                                    </label>
                                                                    <div class="row">
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($election['ElectionAllPrice'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputElectionAllPrice"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0"/>
                                                                            <label for="inputElectionAllPrice ">صد
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($election['ElectionAllPrice'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputElectionAllPrice"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0"/>
                                                                            <label for="inputElectionAllPrice">هزار
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputElectionAllPrice"
                                                                                    id="inputElectionAllPrice">
                                                                                <option value="0">انتخاب کنید ---</option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionAllPrice'])['unit']) == "HZ") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="HZ"
                                                                                        data-right-side="SD"
                                                                                        value="HZ">هزار تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionAllPrice'])['unit']) == "MI") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="MI"
                                                                                        data-right-side="HZ"
                                                                                        value="MI">میلیون تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionAllPrice'])['unit']) == "ML") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="ML"
                                                                                        data-right-side="MI"
                                                                                        value="ML">میلیارد تومان
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="LeftPaneAction">
                                                <div class="row form-group">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <button class="btn btn-block btn-lg CommonButtons waves-effect"
                                                                data-target="Election"
                                                                data-role="Self">
                                                            ثبت
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Conference -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab2wife">
                        <div class="LeftPanel">
                            <div class="LeftPanelcontent">
                                <div class="row">
                                    <!--Books -->
                                    <div class="col-md-12 col-xs-12">
                                        <div class="panel panel-default LeftPanelShadow">
                                            <div class="panel-heading">
                                                املاک و مستغلات
                                                <span class="add-form fa fa-plus"></span>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                        <hr>
                                                        <form id="form-RealEstate">
                                                            <span class="divider"></span>
                                                            <?php foreach ($finance['RealEStates'] as $item) {
                                                                if ($item['ForWho'] == 'Wife') { ?>
                                                                    <div class="col-md-12 col-xs-12 padding-0 form">
                                                                        <span class="remove-form fa fa-times"></span>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputRealEstateType">
                                                                                نوع کاربری
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputRealEstateType"
                                                                                    id="inputRealEstateType">
                                                                                <?php foreach ($EnumResumeProfile['RealEstateType'] as $key => $value) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['RealEstateType'], $key); ?>
                                                                                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputRealEstateOwnershipDate">
                                                                                سال شروع مالکیت
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputRealEstateOwnershipDate"
                                                                                    id="inputRealEstateOwnershipDate"
                                                                                    style="font-family: tahoma;">
                                                                                <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['RealEstateOwnershipDate'], $i); ?>
                                                                                            value="<?php echo $i; ?>">
                                                                                        <?php echo $i; ?>
                                                                                    </option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputRealEstateOwnershipType">
                                                                                نحوه مالکیت
                                                                            </label>
                                                                            <select
                                                                                    class="form-control form-control-lg"
                                                                                    name="inputRealEstateOwnershipType"
                                                                                    id="inputRealEstateOwnershipType">
                                                                                <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['RealEstateOwnershipType'], $key); ?>
                                                                                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat">
                                                                            <label for="inputRealEstateCountryId">کشور</label>
                                                                            <select
                                                                                    data-country-id="<?php echo $item['RealEstateCountryId']; ?>"
                                                                                    data-state-id="<?php echo $item['RealEstateStateId']; ?>"
                                                                                    data-city-id="<?php echo $item['RealEstateCityId']; ?>"
                                                                                    class="form-control form-control-lg"
                                                                                    name="inputRealEstateCountryId"
                                                                                    id="inputRealEstateCountryId">
                                                                                <option value="0">-- انتخاب کنید --
                                                                                </option>
                                                                                <?php foreach ($countries as $row) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['RealEstateCountryId'], $row['CountryId']); ?>
                                                                                        <?php if ($row['ISO'] == 'IR') echo "selected"; ?>
                                                                                            value="<?php echo $row['CountryId']; ?>"><?php echo $row['FaName']; ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv">
                                                                            <label for="inputRealEstateStateId">
                                                                                استان
                                                                            </label>
                                                                            <select class="form-control form-control-lg state-select"
                                                                                    name="inputRealEstateStateId"
                                                                                    id="inputRealEstateStateId">
                                                                                <option value="0">-- انتخاب کنید --</option>
                                                                                <?php foreach ($states as $state) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['RealEstateStateId'], $state['StateId']); ?>
                                                                                            value="<?php echo $state['StateId']; ?>">
                                                                                        <?php echo $state['StateName']; ?>
                                                                                    </option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv">
                                                                            <label for="inputRealEstateCityId">
                                                                                شهر
                                                                            </label>
                                                                            <select class="form-control form-control-lg city-select"
                                                                                    name="inputRealEstateCityId"
                                                                                    id="inputRealEstateCityId">
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputRealEstatePortion">
                                                                                سهم از ملک(1 تا 6 دانگ)
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <input type="number"
                                                                                <?php setInputValue($item['RealEstatePortion']); ?>
                                                                                   name="inputRealEstatePortion"
                                                                                   id="inputRealEstatePortion"
                                                                                   class="form-control"
                                                                                   placeholder="سهم از ملک 1 تا 6 دانگ"
                                                                                   min="0" max="6"/>
                                                                        </div>
                                                                        <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputRealEstateExtent">
                                                                                متراژ حدودی ملک
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <div class="row">
                                                                                <div class="col-md-6 col-xs-12 RightFloat">
                                                                                    <input type="number"
                                                                                        <?php setInputValue($item['RealEstateExtent']); ?>
                                                                                           name="inputRealEstateExtent"
                                                                                           id="inputRealEstateExtent"
                                                                                           class="form-control"
                                                                                           placeholder=""
                                                                                           min="0"/>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 RightFloat">
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputRealEstateExtentUnit"
                                                                                            id="inputRealEstateExtentUnit">
                                                                                        <?php foreach ($EnumResumeProfile['Extent'] as $key => $value) { ?>
                                                                                            <option
                                                                                                <?php setOptionSelected($item['RealEstateExtentUnit'], $key); ?>
                                                                                                    value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                        <?php } ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputRealEstateBuyTimePrice">
                                                                                ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <div class="row">
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['RealEstateBuyTimePrice'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputRealEstateBuyTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputRealEstateBuyTimePrice ">صد
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                    <input
                                                                                            type="number"
                                                                                        <?php setInputValue(splitPrice($item['RealEstateBuyTimePrice'])['left']); ?>
                                                                                            name="inputRealEstateBuyTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputRealEstateBuyTimePrice">هزار
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputRealEstateBuyTimePrice"
                                                                                            id="inputRealEstateBuyTimePrice">
                                                                                        <option value="0">انتخاب کنید ---</option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['RealEstateBuyTimePrice'])['unit']) == "HZ") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="HZ"
                                                                                                data-right-side="SD"
                                                                                                value="HZ">هزار تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['RealEstateBuyTimePrice'])['unit']) == "MI") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="MI"
                                                                                                data-right-side="HZ"
                                                                                                value="MI">میلیون تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['RealEstateBuyTimePrice'])['unit']) == "ML") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="ML"
                                                                                                data-right-side="MI"
                                                                                                value="ML">میلیارد تومان
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputRealEstateNowTimePrice">
                                                                                ارزش حدودی کل سهام درحال حاضر :
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <div class="row">
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['RealEstateNowTimePrice'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputRealEstateNowTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputRealEstateNowTimePrice ">صد
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['RealEstateNowTimePrice'])['left']); ?>
                                                                                            type="number"
                                                                                            name="inputRealEstateNowTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputRealEstateNowTimePrice">هزار
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputRealEstateNowTimePrice"
                                                                                            id="inputRealEstateNowTimePrice">
                                                                                        <option value="0">انتخاب کنید ---</option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['RealEstateNowTimePrice'])['unit']) == "HZ") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="HZ"
                                                                                                data-right-side="SD"
                                                                                                value="HZ">هزار تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['RealEstateNowTimePrice'])['unit']) == "MI") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="MI"
                                                                                                data-right-side="HZ"
                                                                                                value="MI">میلیون تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['RealEstateNowTimePrice'])['unit']) == "ML") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="ML"
                                                                                                data-right-side="MI"
                                                                                                value="ML">میلیارد تومان
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group RightFloat">
                                                                            <label for="inputRealEstateAddress">آدرس</label>
                                                                            <input
                                                                                <?php setInputValue($item['RealEstateAddress']); ?>
                                                                                    id="inputRealEstateAddress"
                                                                                    type="text"
                                                                                    name="inputRealEstateAddress"
                                                                                    class="input-validate validate valid"
                                                                                    placeholder="نام خیابان اصلی / محله / منطقه">
                                                                        </div>
                                                                    </div>
                                                                <?php }
                                                            } ?>
                                                        </form>
                                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                                            <span class="remove-form fa fa-times"></span>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputRealEstateType">
                                                                    نوع کاربری
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputRealEstateType"
                                                                        id="inputRealEstateType">
                                                                    <?php foreach ($EnumResumeProfile['RealEstateType'] as $key => $value) { ?>
                                                                        <option
                                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputRealEstateOwnershipDate">
                                                                    سال شروع مالکیت
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputRealEstateOwnershipDate"
                                                                        id="inputRealEstateOwnershipDate"
                                                                        style="font-family: tahoma;">
                                                                    <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                        <option
                                                                            <?php if ($i == 1398) echo "selected"; ?>
                                                                                value="<?php echo $i; ?>">
                                                                            <?php echo $i; ?>
                                                                        </option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputRealEstateOwnershipType">
                                                                    نحوه مالکیت
                                                                </label>
                                                                <select
                                                                        class="form-control form-control-lg"
                                                                        name="inputRealEstateOwnershipType"
                                                                        id="inputRealEstateOwnershipType">
                                                                    <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                        <option
                                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat">
                                                                <label for="inputRealEstateCountryId">کشور</label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputRealEstateCountryId"
                                                                        id="inputRealEstateCountryId">
                                                                    <option value="0">-- انتخاب کنید --</option>
                                                                    <?php foreach ($countries as $item) { ?>
                                                                        <option
                                                                            <?php if ($item['ISO'] == 'IR') echo "selected"; ?>
                                                                                value="<?php echo $item['CountryId']; ?>"><?php echo $item['FaName']; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv">
                                                                <label for="inputRealEstateStateId">
                                                                    استان
                                                                </label>
                                                                <select class="form-control form-control-lg state-select"
                                                                        name="inputRealEstateStateId"
                                                                        id="inputRealEstateStateId">
                                                                    <option value="0">-- انتخاب کنید --</option>
                                                                    <?php foreach ($states as $state) { ?>
                                                                        <option value="<?php echo $state['StateId']; ?>">
                                                                            <?php echo $state['StateName']; ?>
                                                                        </option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv">
                                                                <label for="inputRealEstateCityId">
                                                                    شهر
                                                                </label>
                                                                <select class="form-control form-control-lg city-select"
                                                                        name="inputRealEstateCityId"
                                                                        id="inputRealEstateCityId">
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputRealEstatePortion">
                                                                    سهم از ملک(1 تا 6 دانگ)
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <input type="number" name="inputRealEstatePortion"
                                                                       id="inputRealEstatePortion"
                                                                       class="form-control"
                                                                       placeholder="سهم از ملک 1 تا 6 دانگ"
                                                                       min="0" max="6"/>
                                                            </div>
                                                            <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputRealEstateExtent">
                                                                    متراژ حدودی ملک
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-6 col-xs-12 RightFloat">
                                                                        <input type="number"
                                                                               name="inputRealEstateExtent"
                                                                               id="inputRealEstateExtent"
                                                                               class="form-control"
                                                                               placeholder=""
                                                                               min="0"/>
                                                                    </div>
                                                                    <div class="col-md-6 col-xs-12 RightFloat">
                                                                        <select class="form-control form-control-lg"
                                                                                name="inputRealEstateExtentUnit"
                                                                                id="inputRealEstateExtentUnit">
                                                                            <?php foreach ($EnumResumeProfile['Extent'] as $key => $value) { ?>
                                                                                <option
                                                                                        value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputRealEstateBuyTimePrice">
                                                                    ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputRealEstateBuyTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputRealEstateBuyTimePrice ">صد
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputRealEstateBuyTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputRealEstateBuyTimePrice">هزار
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg"
                                                                                name="inputRealEstateBuyTimePrice"
                                                                                id="inputRealEstateBuyTimePrice">
                                                                            <option value="0">انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ"
                                                                                    data-right-side="SD" value="HZ">هزار
                                                                                تومان
                                                                            </option>
                                                                            <option data-left-side="MI"
                                                                                    data-right-side="HZ" value="MI">
                                                                                میلیون تومان
                                                                            </option>
                                                                            <option data-left-side="ML"
                                                                                    data-right-side="MI" value="ML">
                                                                                میلیارد تومان
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputRealEstateNowTimePrice">
                                                                    ارزش حدودی کل سهام درحال حاضر :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputRealEstateNowTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputRealEstateNowTimePrice ">صد
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputRealEstateNowTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputRealEstateNowTimePrice">هزار
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg"
                                                                                name="inputRealEstateNowTimePrice"
                                                                                id="inputRealEstateNowTimePrice">
                                                                            <option value="0">انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ"
                                                                                    data-right-side="SD" value="HZ">هزار
                                                                                تومان
                                                                            </option>
                                                                            <option data-left-side="MI"
                                                                                    data-right-side="HZ" value="MI">
                                                                                میلیون تومان
                                                                            </option>
                                                                            <option data-left-side="ML"
                                                                                    data-right-side="MI" value="ML">
                                                                                میلیارد تومان
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group RightFloat">
                                                                <label for="inputRealEstateAddress">آدرس</label>
                                                                <input id="inputRealEstateAddress" type="text"
                                                                       name="inputRealEstateAddress"
                                                                       class="input-validate validate valid"
                                                                       placeholder="نام خیابان اصلی / محله / منطقه">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="LeftPaneAction">
                                                <div class="row form-group">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <button
                                                                class="btn btn-block btn-lg CommonButtons waves-effect"
                                                                data-target="RealEstate"
                                                                data-role="Wife">
                                                            ثبت
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Books -->

                                    <!--Articles -->
                                    <div class="col-md-12 col-xs-12">
                                        <div class="panel panel-default LeftPanelShadow">
                                            <div class="panel-heading">
                                                وسایل نقلیه
                                                <span class="add-form fa fa-plus"></span>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                        <hr>
                                                        <form id="form-Vehicle">
                                                            <span class="divider"></span>
                                                            <?php foreach ($finance['Vehicle'] as $item) {
                                                                if ($item['ForWho'] == 'Wife') { ?>
                                                                    <div class="col-md-12 col-xs-12 padding-0 form">
                                                                        <span class="remove-form fa fa-times"></span>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputVehicleType">
                                                                                نوع وسیله نقلیه<span
                                                                                        class="text-danger"></span>
                                                                            </label>
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputVehicleType"
                                                                                    id="inputVehicleType">
                                                                                <?php foreach ($EnumResumeProfile['TypeOfVehicle'] as $key => $value) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['VehicleType'], $key); ?>
                                                                                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputVehicleOwnershipDate">
                                                                                سال شروع مالکیت<span
                                                                                        class="text-danger"></span>
                                                                            </label>
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputVehicleOwnershipDate"
                                                                                    id="inputVehicleOwnershipDate"
                                                                                    style="font-family: tahoma;">
                                                                                <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['VehicleOwnershipDate'], $i); ?>
                                                                                        <?php if ($i == 1398) echo "selected"; ?>
                                                                                            value="<?php echo $i; ?>">
                                                                                        <?php echo $i; ?>
                                                                                    </option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputVehicleOwnershipType">
                                                                                نحوه مالکیت
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputVehicleOwnershipType"
                                                                                    id="inputVehicleOwnershipType">
                                                                                <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                                    <option

                                                                                        <?php setOptionSelected($item['VehicleOwnershipType'], $i); ?>
                                                                                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputVehicleBuyTimePrice">
                                                                                ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <div class="row">
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['VehicleBuyTimePrice'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputVehicleBuyTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputVehicleBuyTimePrice ">صد
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['VehicleBuyTimePrice'])['left']); ?>
                                                                                            type="number"
                                                                                            name="inputVehicleBuyTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputVehicleBuyTimePrice">هزار
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputVehicleBuyTimePrice"
                                                                                            id="inputVehicleBuyTimePrice">
                                                                                        <option value="0">انتخاب کنید ---</option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['VehicleBuyTimePrice'])['unit']) == "HZ") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="HZ"
                                                                                                data-right-side="SD"
                                                                                                value="HZ">هزار تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['VehicleBuyTimePrice'])['unit']) == "MI") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="MI"
                                                                                                data-right-side="HZ"
                                                                                                value="MI">میلیون تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['VehicleBuyTimePrice'])['unit']) == "ML") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="ML"
                                                                                                data-right-side="MI"
                                                                                                value="ML">میلیارد تومان
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputVehicleNowTimePrice">
                                                                                ارزش حدودی کل سهام درحال حاضر :
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <div class="row">
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['VehicleNowTimePrice'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputVehicleNowTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputVehicleNowTimePrice ">صد
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['VehicleNowTimePrice'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputVehicleNowTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputVehicleNowTimePrice">هزار
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputVehicleNowTimePrice"
                                                                                            id="inputVehicleNowTimePrice">
                                                                                        <option value="0">انتخاب کنید ---</option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['VehicleNowTimePrice'])['unit']) == "HZ") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="HZ"
                                                                                                data-right-side="SD"
                                                                                                value="HZ">هزار تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['VehicleNowTimePrice'])['unit']) == "MI") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="MI"
                                                                                                data-right-side="HZ"
                                                                                                value="MI">میلیون تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['VehicleNowTimePrice'])['unit']) == "ML") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="ML"
                                                                                                data-right-side="MI"
                                                                                                value="ML">میلیارد تومان
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat clear-div">
                                                                            <label for="inputVehiclePortion">
                                                                                سهم از ملک(1 تا 6 دانگ)
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <input
                                                                                <?php setInputValue($item['VehiclePortion']); ?>
                                                                                    type="number"
                                                                                    name="inputVehiclePortion"
                                                                                    id="inputVehiclePortion"
                                                                                    class="form-control"
                                                                                    placeholder="سهم از ملک 1 تا 6 دانگ"
                                                                                    min="0" max="6"/>
                                                                        </div>
                                                                    </div>
                                                                <?php }
                                                            } ?>
                                                        </form>
                                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                                            <span class="remove-form fa fa-times"></span>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputVehicleType">
                                                                    نوع وسیله نقلیه
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputVehicleType"
                                                                        id="inputVehicleType">
                                                                    <?php foreach ($EnumResumeProfile['TypeOfVehicle'] as $key => $value) { ?>
                                                                        <option
                                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputVehicleOwnershipDate">
                                                                    سال شروع مالکیت
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputVehicleOwnershipDate"
                                                                        id="inputVehicleOwnershipDate"
                                                                        style="font-family: tahoma;">
                                                                    <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                        <option
                                                                            <?php if ($i == 1398) echo "selected"; ?>
                                                                                value="<?php echo $i; ?>">
                                                                            <?php echo $i; ?>
                                                                        </option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputVehicleOwnershipType">
                                                                    نحوه مالکیت
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputVehicleOwnershipType"
                                                                        id="inputVehicleOwnershipType">
                                                                    <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                        <option
                                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputVehicleBuyTimePrice">
                                                                    ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputVehicleBuyTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputVehicleBuyTimePrice ">صد
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputVehicleBuyTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputVehicleBuyTimePrice">هزار
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg"
                                                                                name="inputVehicleBuyTimePrice"
                                                                                id="inputVehicleBuyTimePrice">
                                                                            <option value="0">انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ"
                                                                                    data-right-side="SD" value="HZ">هزار
                                                                                تومان
                                                                            </option>
                                                                            <option data-left-side="MI"
                                                                                    data-right-side="HZ" value="MI">
                                                                                میلیون تومان
                                                                            </option>
                                                                            <option data-left-side="ML"
                                                                                    data-right-side="MI" value="ML">
                                                                                میلیارد تومان
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputVehicleNowTimePrice">
                                                                    ارزش حدودی کل سهام درحال حاضر :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputVehicleNowTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputVehicleNowTimePrice ">صد
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputVehicleNowTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputVehicleNowTimePrice">هزار
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg"
                                                                                name="inputVehicleNowTimePrice"
                                                                                id="inputVehicleNowTimePrice">
                                                                            <option value="0">انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ"
                                                                                    data-right-side="SD" value="HZ">هزار
                                                                                تومان
                                                                            </option>
                                                                            <option data-left-side="MI"
                                                                                    data-right-side="HZ" value="MI">
                                                                                میلیون تومان
                                                                            </option>
                                                                            <option data-left-side="ML"
                                                                                    data-right-side="MI" value="ML">
                                                                                میلیارد تومان
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat clear-div">
                                                                <label for="inputVehiclePortion">
                                                                    سهم از ملک(1 تا 6 دانگ)
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <input type="number" name="inputVehiclePortion"
                                                                       id="inputVehiclePortion" class="form-control"
                                                                       placeholder="سهم از ملک 1 تا 6 دانگ"
                                                                       min="0" max="6"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="LeftPaneAction">
                                                <div class="row form-group">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <button
                                                                class="btn btn-block btn-lg CommonButtons waves-effect"
                                                                data-target="Vehicle"
                                                                data-role="Wife">
                                                            ثبت
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Articles -->

                                    <!--Research -->
                                    <div class="col-md-12 col-xs-12">
                                        <div class="panel panel-default LeftPanelShadow">
                                            <div class="panel-heading">
                                                سرمایه‌گذاری‌ها (سهام‌، اوراق بهادار، ...)
                                                <span class="add-form fa fa-plus"></span>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                        <hr>
                                                        <form id="form-Invest">
                                                            <span class="divider"></span>
                                                            <?php foreach ($finance['Invest'] as $item) {
                                                                if ($item['ForWho'] == 'Wife') { ?>
                                                                    <div class="col-md-12 col-xs-12 padding-0 form">
                                                                        <span class="remove-form fa fa-times"></span>
                                                                        <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                            <label for="inputInvestTitle">
                                                                                نام شرکت / موسسه
                                                                            </label>
                                                                            <input
                                                                                <?php setInputValue($item['InvestTitle']); ?>
                                                                                    id="inputInvestTitle" type="text"
                                                                                    name="inputInvestTitle"
                                                                                    placeholder="نام شرکت - موسسه - پروژه ">
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputInvestDate">
                                                                                سال شروع مالکیت
                                                                                <span class="text-danger">
                                             </span>
                                                                            </label>
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputInvestDate"
                                                                                    id="inputInvestDate"
                                                                                    style="font-family: tahoma;">
                                                                                <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['InvestDate'], $i); ?>
                                                                                        <?php if ($i == 1398) echo "selected"; ?>
                                                                                            value="<?php echo $i; ?>">
                                                                                        <?php echo $i; ?>
                                                                                    </option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputInvestOwnershipType">
                                                                                نحوه مالکیت
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputInvestOwnershipType"
                                                                                    id="inputInvestOwnershipType">
                                                                                <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['InvestDate'], $key); ?>
                                                                                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputInvestBuyTimePrice">
                                                                                ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <div class="row">
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['InvestBuyTimePrice'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputInvestBuyTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputInvestBuyTimePrice ">صد
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['InvestBuyTimePrice'])['left']); ?>
                                                                                            type="number"
                                                                                            name="inputInvestBuyTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputInvestBuyTimePrice">هزار
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputInvestBuyTimePrice"
                                                                                            id="inputInvestBuyTimePrice">
                                                                                        <option value="0">انتخاب کنید ---</option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['InvestBuyTimePrice'])['unit']) == "HZ") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="HZ"
                                                                                                data-right-side="SD"
                                                                                                value="HZ">هزار تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['InvestBuyTimePrice'])['unit']) == "MI") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="MI"
                                                                                                data-right-side="HZ"
                                                                                                value="MI">میلیون تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['InvestBuyTimePrice'])['unit']) == "ML") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="ML"
                                                                                                data-right-side="MI"
                                                                                                value="ML">میلیارد تومان
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputInvestNowTimePrice">
                                                                                ارزش حدودی کل سهام درحال حاضر :
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <div class="row">
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['InvestNowTimePrice'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputInvestNowTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputInvestNowTimePrice ">صد
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['InvestNowTimePrice'])['left']); ?>
                                                                                            type="number"
                                                                                            name="inputInvestNowTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputInvestNowTimePrice">هزار
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputInvestNowTimePrice"
                                                                                            id="inputInvestNowTimePrice">
                                                                                        <option value="0">انتخاب کنید ---</option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['InvestNowTimePrice'])['unit']) == "HZ") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="HZ"
                                                                                                data-right-side="SD"
                                                                                                value="HZ">هزار تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['InvestNowTimePrice'])['unit']) == "MI") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="MI"
                                                                                                data-right-side="HZ"
                                                                                                value="MI">میلیون تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['InvestNowTimePrice'])['unit']) == "ML") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="ML"
                                                                                                data-right-side="MI"
                                                                                                value="ML">میلیارد تومان
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php }
                                                            } ?>
                                                        </form>
                                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                                            <span class="remove-form fa fa-times"></span>
                                                            <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                <label for="inputInvestTitle">
                                                                    نام شرکت / موسسه
                                                                </label>
                                                                <input id="inputInvestTitle" type="text"
                                                                       name="inputInvestTitle"
                                                                       placeholder="نام شرکت - موسسه - پروژه ">
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputInvestDate">
                                                                    سال شروع مالکیت
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputInvestDate"
                                                                        id="inputInvestDate"
                                                                        style="font-family: tahoma;">
                                                                    <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                        <option
                                                                            <?php if ($i == 1398) echo "selected"; ?>
                                                                                value="<?php echo $i; ?>">
                                                                            <?php echo $i; ?>
                                                                        </option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputInvestOwnershipType">
                                                                    نحوه مالکیت
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputInvestOwnershipType"
                                                                        id="inputInvestOwnershipType">
                                                                    <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                        <option
                                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputInvestBuyTimePrice">
                                                                    ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputInvestBuyTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputInvestBuyTimePrice ">صد
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputInvestBuyTimePrice"
                                                                                class="form-control"
                                                                                placeholder="
                                                                                min="0"/>
                                                                        <label for="inputInvestBuyTimePrice">هزار
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg"
                                                                                name="inputInvestBuyTimePrice"
                                                                                id="inputInvestBuyTimePrice">
                                                                            <option value="0">انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ"
                                                                                    data-right-side="SD" value="HZ">هزار
                                                                                تومان
                                                                            </option>
                                                                            <option data-left-side="MI"
                                                                                    data-right-side="HZ" value="MI">
                                                                                میلیون تومان
                                                                            </option>
                                                                            <option data-left-side="ML"
                                                                                    data-right-side="MI" value="ML">
                                                                                میلیارد تومان
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputInvestNowTimePrice">
                                                                    ارزش حدودی کل سهام درحال حاضر :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputInvestNowTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputInvestNowTimePrice ">صد
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputInvestNowTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputInvestNowTimePrice">هزار
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg"
                                                                                name="inputInvestNowTimePrice"
                                                                                id="inputInvestNowTimePrice">
                                                                            <option value="0">انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ"
                                                                                    data-right-side="SD" value="HZ">هزار
                                                                                تومان
                                                                            </option>
                                                                            <option data-left-side="MI"
                                                                                    data-right-side="HZ" value="MI">
                                                                                میلیون تومان
                                                                            </option>
                                                                            <option data-left-side="ML"
                                                                                    data-right-side="MI" value="ML">
                                                                                میلیارد تومان
                                                                            </option>
                                                                        </select>
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
                                                        <button
                                                                class="btn btn-block btn-lg CommonButtons waves-effect"
                                                                data-target="Invest"
                                                                data-role="Wife">
                                                            ثبت
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Research -->

                                    <!--Translate -->
                                    <div class="col-md-12 col-xs-12">
                                        <div class="panel panel-default LeftPanelShadow">
                                            <div class="panel-heading">
                                                حساب‌های جاری، پس‌انداز و سرمایه‌گذاری
                                                <span class="add-form fa fa-plus"></span>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                        <hr>
                                                        <form id="form-BankAccount">
                                                            <span class="divider"></span>
                                                            <?php foreach ($finance['BankAccount'] as $item) {
                                                                if ($item['ForWho'] == 'Wife') { ?>
                                                                    <div class="col-md-12 col-xs-12 padding-0 form">
                                                                        <span class="remove-form fa fa-times"></span>
                                                                        <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                            <label for="inputBankAccountTitle">
                                                                                عنوان بانک یا موسسه
                                                                            </label>
                                                                            <input
                                                                                <?php setInputValue($item['BankAccountTitle']); ?>
                                                                                    id="inputBankAccountTitle"
                                                                                    type="text"
                                                                                    name="inputBankAccountTitle"
                                                                                    placeholder="عنوان بانک یا موسسه ">
                                                                        </div>
                                                                        <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputBankAccountPrice">
                                                                                مبلغ :
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <div class="row">
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                    <input

                                                                                        <?php setInputValue(splitPrice($item['BankAccountPrice'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputBankAccountPrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputBankAccountPrice ">صد
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                    <input

                                                                                        <?php setInputValue(splitPrice($item['BankAccountPrice'])['left']); ?>
                                                                                            type="number"
                                                                                            name="RealEstateBuyTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputBankAccountPrice">هزار
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputBankAccountPrice"
                                                                                            id="inputBankAccountPrice">
                                                                                        <option value="0">انتخاب کنید ---</option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['BankAccountPrice'])['unit']) == "HZ") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="HZ"
                                                                                                data-right-side="SD"
                                                                                                value="HZ">هزار تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['BankAccountPrice'])['unit']) == "MI") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="MI"
                                                                                                data-right-side="HZ"
                                                                                                value="MI">میلیون تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['BankAccountPrice'])['unit']) == "ML") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="ML"
                                                                                                data-right-side="MI"
                                                                                                value="ML">میلیارد تومان
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat">
                                                                            <label for="inputBankAccountCountryId">کشور</label>
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputBankAccountCountryId"
                                                                                    id="inputBankAccountCountryId">
                                                                                <option value="0">-- انتخاب کنید --
                                                                                </option>
                                                                                <?php foreach ($countries as $row) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['BankAccountCountryId'], $row['CountryId']); ?>
                                                                                            value="<?php echo $row['CountryId']; ?>"><?php echo $row['FaName']; ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                <?php }
                                                            } ?>
                                                        </form>
                                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                                            <span class="remove-form fa fa-times"></span>
                                                            <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                <label for="inputBankAccountTitle">
                                                                    عنوان بانک یا موسسه
                                                                </label>
                                                                <input id="inputBankAccountTitle" type="text"
                                                                       name="inputBankAccountTitle"
                                                                       placeholder="عنوان بانک یا موسسه ">
                                                            </div>
                                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputBankAccountPrice">
                                                                    مبلغ :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputBankAccountPrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputBankAccountPrice ">صد
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="RealEstateBuyTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputBankAccountPrice">هزار
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg"
                                                                                name="inputBankAccountPrice"
                                                                                id="inputBankAccountPrice">
                                                                            <option value="0">انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ"
                                                                                    data-right-side="SD" value="HZ">هزار
                                                                                تومان
                                                                            </option>
                                                                            <option data-left-side="MI"
                                                                                    data-right-side="HZ" value="MI">
                                                                                میلیون تومان
                                                                            </option>
                                                                            <option data-left-side="ML"
                                                                                    data-right-side="MI" value="ML">
                                                                                میلیارد تومان
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat">
                                                                <label for="inputBankAccountCountryId">
                                                                    کشور
                                                                    </span>
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputBankAccountCountryId"
                                                                        id="inputBankAccountCountryId">
                                                                    <option value="0">-- انتخاب کنید --</option>
                                                                    <?php foreach ($countries as $item) { ?>
                                                                        <option
                                                                            <?php if ($item['ISO'] == 'IR') echo "selected"; ?>
                                                                                value="<?php echo $item['CountryId']; ?>"><?php echo $item['FaName']; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="LeftPaneAction">
                                                <div class="row form-group">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <button
                                                                class="btn btn-block btn-lg CommonButtons waves-effect"
                                                                data-target="BankAccount"
                                                                data-role="Wife">
                                                            ثبت
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Translate -->

                                    <!-- Invention -->
                                    <div class="col-md-12 col-xs-12">
                                        <div class="panel panel-default LeftPanelShadow">
                                            <div class="panel-heading">
                                                دیون و مطالبات
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                        <hr>
                                                        <form id="form-Credit-Debtor">
                                                            <span class="divider"></span>
                                                            <?php
                                                            $creditDebtor['CreditPrice'] = "0.0 HZ";
                                                            $creditDebtor['DebotrPrice'] = "0.0 HZ";
                                                            $creditDebtor['DebotrDescription'] = "";
                                                            foreach ($finance['CreditDebtor'] as $item) {
                                                                if($item['ForWho'] == 'Wife'){
                                                                    $creditDebtor = $item;
                                                                }
                                                            }
                                                            ?>
                                                            <div class="col-md-12 col-xs-12 padding-0 form">
                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                    <label for="inputCreditPrice">
                                                                        جمع کل بستانکاری از اشخاص حقیقی یا حقوقی
                                                                        :
                                                                        <span class="text-danger"></span>
                                                                    </label>
                                                                    <div class="row">
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($creditDebtor['CreditPrice'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputCreditPrice"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0"/>
                                                                            <label for="inputCreditPrice ">صد
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($creditDebtor['CreditPrice'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputCreditPrice"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0"/>
                                                                            <label for="inputCreditPrice">هزار
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputCreditPrice"
                                                                                    id="inputCreditPrice">
                                                                                <option value="0">انتخاب کنید ---</option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($creditDebtor['CreditPrice'])['unit']) == "HZ") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="HZ"
                                                                                        data-right-side="SD"
                                                                                        value="HZ">هزار تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($creditDebtor['CreditPrice'])['unit']) == "MI") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="MI"
                                                                                        data-right-side="HZ"
                                                                                        value="MI">میلیون تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($creditDebtor['CreditPrice'])['unit']) == "ML") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="ML"
                                                                                        data-right-side="MI"
                                                                                        value="ML">میلیارد تومان
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                    <label for="inputDebotrPrice">
                                                                        جمع کل بدهکاری از اشخاص حقیقی یا حقوقی :
                                                                        <span class="text-danger"></span>
                                                                    </label>
                                                                    <div class="row">
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($creditDebtor['DebotrPrice'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputDebotrPrice"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0"/>
                                                                            <label for="inputDebotrPrice ">صد
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($creditDebtor['DebotrPrice'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputDebotrPrice"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0"/>
                                                                            <label for="inputDebotrPrice">هزار
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputDebotrPrice"
                                                                                    id="inputDebotrPrice">
                                                                                <option value="0">انتخاب کنید ---</option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($creditDebtor['DebotrPrice'])['unit']) == "HZ") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="HZ"
                                                                                        data-right-side="SD"
                                                                                        value="HZ">هزار تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($creditDebtor['DebotrPrice'])['unit']) == "MI") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="MI"
                                                                                        data-right-side="HZ"
                                                                                        value="MI">میلیون تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($creditDebtor['DebotrPrice'])['unit']) == "ML") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="ML"
                                                                                        data-right-side="MI"
                                                                                        value="ML">میلیارد تومان
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <textarea class="EStates-textArea"
                                                                              name="inputDebotrDescription"><?php echo $creditDebtor['DebotrDescription']; ?></textarea>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="LeftPaneAction">
                                                <div class="row form-group">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <button
                                                                class="btn btn-block btn-lg CommonButtons waves-effect"
                                                                data-target="Credit-Debtor"
                                                                data-role="Wife">
                                                            ثبت
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Invention -->

                                    <!--Translate -->
                                    <div class="col-md-12 col-xs-12">
                                        <div class="panel panel-default LeftPanelShadow">
                                            <div class="panel-heading">
                                                کلیه کالاهای فاقد سند مالکیت رسمی
                                                <span class="add-form fa fa-plus"></span>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                        <hr>
                                                        <form id="form-Goods">
                                                            <span class="divider"></span>
                                                            <?php foreach ($finance['Goods'] as $item) {
                                                                if ($item['ForWho'] == 'Wife') { ?>
                                                                    <div class="col-md-12 col-xs-12 padding-0 form">
                                                                        <span class="remove-form fa fa-times"></span>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputGoodsType">
                                                                                نوع کالا
                                                                            </label>
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputGoodsType"
                                                                                    id="inputGoodsType">
                                                                                <?php foreach ($EnumResumeProfile['GoodsType'] as $key => $value) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['GoodsType'], $key); ?>
                                                                                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputGoodsOwnershipStartDate">
                                                                                سال شروع مالکیت
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputGoodsOwnershipStartDate"
                                                                                    id="inputGoodsOwnershipStartDate"
                                                                                    style="font-family: tahoma;">
                                                                                <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['GoodsOwnershipStartDate'], $i); ?>
                                                                                            value="<?php echo $i; ?>">
                                                                                        <?php echo $i; ?>
                                                                                    </option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputGoodsCount">
                                                                                حجم / وزن / تعداد کالا
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <input
                                                                                <?php setInputValue($item['GoodsCount']); ?>
                                                                                    type="text" name="inputGoodsCount"
                                                                                    id="inputGoodsCount"
                                                                                    class="form-control"
                                                                                    placeholder="  حجم / وزن / تعداد کالا"/>
                                                                        </div>
                                                                        <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputGoodsBuyTimePrice">
                                                                                ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <div class="row">
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['GoodsBuyTimePrice'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputGoodsBuyTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputGoodsBuyTimePrice ">صد
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['GoodsBuyTimePrice'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputGoodsBuyTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputGoodsBuyTimePrice">هزار
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputGoodsBuyTimePrice"
                                                                                            id="inputGoodsBuyTimePrice">
                                                                                        <option value="0">انتخاب کنید ---</option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['GoodsBuyTimePrice'])['unit']) == "HZ") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="HZ"
                                                                                                data-right-side="SD"
                                                                                                value="HZ">هزار تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['GoodsBuyTimePrice'])['unit']) == "MI") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="MI"
                                                                                                data-right-side="HZ"
                                                                                                value="MI">میلیون تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['GoodsBuyTimePrice'])['unit']) == "ML") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="ML"
                                                                                                data-right-side="MI"
                                                                                                value="ML">میلیارد تومان
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputGoodsNowTimePrice">
                                                                                ارزش حدودی کل سهام درحال حاضر :
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <div class="row">
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['GoodsNowTimePrice'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputGoodsNowTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputGoodsNowTimePrice ">صد
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['GoodsNowTimePrice'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputGoodsNowTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputGoodsNowTimePrice">هزار
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputGoodsNowTimePrice"
                                                                                            id="inputGoodsNowTimePrice">
                                                                                        <option value="0">انتخاب کنید ---</option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['GoodsNowTimePrice'])['unit']) == "HZ") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="HZ"
                                                                                                data-right-side="SD"
                                                                                                value="HZ">هزار تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['GoodsNowTimePrice'])['unit']) == "MI") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="MI"
                                                                                                data-right-side="HZ"
                                                                                                value="MI">میلیون تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['GoodsNowTimePrice'])['unit']) == "ML") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="ML"
                                                                                                data-right-side="MI"
                                                                                                value="ML">میلیارد تومان
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputGoodsOwnershipPercent">
                                                                                درصد سهم از مالکیت :
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <input
                                                                                <?php setInputValue($item['GoodsOwnershipPercent']); ?>
                                                                                    type="number"
                                                                                    name="inputGoodsOwnershipPercent"
                                                                                    id="inputGoodsOwnershipPercent"
                                                                                    class="form-control"
                                                                                    placeholder="سهم از ملک 1 تا 6 دانگ"
                                                                                    min="0" max="6"/>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputRealEstateOwnershipType">
                                                                                نحوه مالکیت
                                                                                <span class="text-danger">
                                             </span>
                                                                            </label>
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputRealEstateOwnershipType"
                                                                                    id="inputRealEstateOwnershipType">
                                                                                <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['RealEstateOwnershipType'], $key); ?>
                                                                                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                <?php }
                                                            } ?>
                                                        </form>
                                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                                            <span class="remove-form fa fa-times"></span>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputGoodsType">
                                                                    نوع کالا
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputGoodsType"
                                                                        id="inputGoodsType">
                                                                    <?php foreach ($EnumResumeProfile['GoodsType'] as $key => $value) { ?>
                                                                        <option
                                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputGoodsOwnershipStartDate">
                                                                    سال شروع مالکیت
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputGoodsOwnershipStartDate"
                                                                        id="inputGoodsOwnershipStartDate"
                                                                        style="font-family: tahoma;">
                                                                    <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                        <option
                                                                            <?php if ($i == 1398) echo "selected"; ?>
                                                                                value="<?php echo $i; ?>">
                                                                            <?php echo $i; ?>
                                                                        </option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputGoodsCount">
                                                                    حجم / وزن / تعداد کالا
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <input type="text" name="inputGoodsCount"
                                                                       id="inputGoodsCount"
                                                                       class="form-control"
                                                                       placeholder="  حجم / وزن / تعداد کالا"/>
                                                            </div>
                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputGoodsBuyTimePrice">
                                                                    ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputGoodsBuyTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputGoodsBuyTimePrice ">صد
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputGoodsBuyTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputGoodsBuyTimePrice">هزار
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg"
                                                                                name="inputGoodsBuyTimePrice"
                                                                                id="inputGoodsBuyTimePrice">
                                                                            <option value="0">انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ"
                                                                                    data-right-side="SD" value="HZ">هزار
                                                                                تومان
                                                                            </option>
                                                                            <option data-left-side="MI"
                                                                                    data-right-side="HZ" value="MI">
                                                                                میلیون تومان
                                                                            </option>
                                                                            <option data-left-side="ML"
                                                                                    data-right-side="MI" value="ML">
                                                                                میلیارد تومان
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputGoodsNowTimePrice">
                                                                    ارزش حدودی کل سهام درحال حاضر :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputGoodsNowTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputGoodsNowTimePrice ">صد
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputGoodsNowTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputGoodsNowTimePrice">هزار
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg"
                                                                                name="inputGoodsNowTimePrice"
                                                                                id="inputGoodsNowTimePrice">
                                                                            <option value="0">انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ"
                                                                                    data-right-side="SD" value="HZ">هزار
                                                                                تومان
                                                                            </option>
                                                                            <option data-left-side="MI"
                                                                                    data-right-side="HZ" value="MI">
                                                                                میلیون تومان
                                                                            </option>
                                                                            <option data-left-side="ML"
                                                                                    data-right-side="MI" value="ML">
                                                                                میلیارد تومان
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputGoodsOwnershipPercent">
                                                                    درصد سهم از مالکیت :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <input type="number" name="inputGoodsOwnershipPercent"
                                                                       id="inputGoodsOwnershipPercent"
                                                                       class="form-control"
                                                                       placeholder="سهم از ملک 1 تا 6 دانگ"
                                                                       min="0" max="6"/>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputRealEstateOwnershipType">
                                                                    نحوه مالکیت
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputRealEstateOwnershipType"
                                                                        id="inputRealEstateOwnershipType">
                                                                    <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                        <option
                                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="LeftPaneAction">
                                                <div class="row form-group">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <button
                                                                class="btn btn-block btn-lg CommonButtons waves-effect"
                                                                data-target="Goods"
                                                                data-role="Wife">
                                                            ثبت
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Translate -->

                                    <!--Translate -->
                                    <div class="col-md-12 col-xs-12">
                                        <div class="panel panel-default LeftPanelShadow">
                                            <div class="panel-heading">
                                                حقوق مالکیت معنوی
                                                <span class="add-form fa fa-plus"></span>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                        <hr>
                                                        <form id="form-Fee">
                                                            <span class="divider"></span>
                                                            <?php foreach ($finance['Fee'] as $item) {
                                                                if ($item['ForWho'] == 'Wife') { ?>
                                                                    <div class="col-md-12 col-xs-12 padding-0 form">
                                                                        <span class="remove-form fa fa-times"></span>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputFeeType">عنوان :</label>
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputFeeType"
                                                                                    id="inputFeeType">
                                                                                <?php foreach ($EnumResumeProfile['FeeType'] as $key => $value) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['FeeType'], $key); ?>
                                                                                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputFeeOwnershipStartDate">
                                                                                سال شروع مالکیت
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputFeeOwnershipStartDate"
                                                                                    id="inputFeeOwnershipStartDate"
                                                                                    style="font-family: tahoma;">
                                                                                <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['FeeOwnershipStartDate'], $i); ?>
                                                                                            value="<?php echo $i; ?>">
                                                                                        <?php echo $i; ?>
                                                                                    </option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputFeePercent">
                                                                                درصد سهم از مالکیت معنوی:
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <input
                                                                                <?php setInputValue($item['FeePercent']); ?>
                                                                                    type="number" name="inputFeePercent"
                                                                                    id="inputFeePercent"
                                                                                    class="form-control"
                                                                                    placeholder="سهم از ملک 1 تا 6 دانگ"/>
                                                                        </div>
                                                                        <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputFeeAverageInYear">
                                                                                میزان درآمد متوسط سالیانه از مالکیت
                                                                                معنوی :
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <div class="row">
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['FeeAverageInYear'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputFeeAverageInYear"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputFeeAverageInYear ">صد
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['FeeAverageInYear'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputFeeAverageInYear"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputFeeAverageInYear">هزار
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputFeeAverageInYear"
                                                                                            id="inputFeeAverageInYear">
                                                                                        <option value="0">انتخاب کنید ---</option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['FeeAverageInYear'])['unit']) == "HZ") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="HZ"
                                                                                                data-right-side="SD"
                                                                                                value="HZ">هزار تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['FeeAverageInYear'])['unit']) == "MI") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="MI"
                                                                                                data-right-side="HZ"
                                                                                                value="MI">میلیون تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['FeeAverageInYear'])['unit']) == "ML") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="ML"
                                                                                                data-right-side="MI"
                                                                                                value="ML">میلیارد تومان
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php }
                                                            } ?>
                                                        </form>
                                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                                            <span class="remove-form fa fa-times"></span>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputFeeType">
                                                                    عنوان :
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputFeeType"
                                                                        id="inputFeeType">
                                                                    <?php foreach ($EnumResumeProfile['FeeType'] as $key => $value) { ?>
                                                                        <option
                                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputFeeOwnershipStartDate">
                                                                    سال شروع مالکیت
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputFeeOwnershipStartDate"
                                                                        id="inputFeeOwnershipStartDate"
                                                                        style="font-family: tahoma;">
                                                                    <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                        <option
                                                                            <?php if ($i == 1398) echo "selected"; ?>
                                                                                value="<?php echo $i; ?>">
                                                                            <?php echo $i; ?>
                                                                        </option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputFeePercent">
                                                                    درصد سهم از مالکیت معنوی:
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <input type="number" name="inputFeePercent"
                                                                       id="inputFeePercent"
                                                                       class="form-control"
                                                                       placeholder="سهم از ملک 1 تا 6 دانگ"/>
                                                            </div>
                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputFeeAverageInYear">
                                                                    میزان درآمد متوسط سالیانه از مالکیت معنوی :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputFeeAverageInYear"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputFeeAverageInYear ">صد
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputFeeAverageInYear"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputFeeAverageInYear">هزار
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg"
                                                                                name="inputFeeAverageInYear"
                                                                                id="inputFeeAverageInYear">
                                                                            <option value="0">انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ"
                                                                                    data-right-side="SD" value="HZ">هزار
                                                                                تومان
                                                                            </option>
                                                                            <option data-left-side="MI"
                                                                                    data-right-side="HZ" value="MI">
                                                                                میلیون تومان
                                                                            </option>
                                                                            <option data-left-side="ML"
                                                                                    data-right-side="MI" value="ML">
                                                                                میلیارد تومان
                                                                            </option>
                                                                        </select>
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
                                                        <button
                                                                class="btn btn-block btn-lg CommonButtons waves-effect"
                                                                data-target="Fee"
                                                                data-role="Wife">
                                                            ثبت
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Translate -->

                                    <!--Translate -->
                                    <div class="col-md-12 col-xs-12">
                                        <div class="panel panel-default LeftPanelShadow">
                                            <div class="panel-heading">
                                                در آمد
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                        <hr>
                                                        <form id="form-AverageMonthIncome">
                                                            <span class="divider"></span>
                                                            <div class="col-md-12 col-xs-12 padding-0 form">
                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                    <?php
                                                                    $income['AverageMonthIncome'] = "0.0 HZ";
                                                                    foreach ($finance['Income'] as $item) {
                                                                        if($item['ForWho'] == 'Wife'){
                                                                            $income = $item;
                                                                        }
                                                                    }
                                                                    ?>
                                                                    <label for="inputAverageMonthIncome">
                                                                        درآمد متوسط ماهیانه :
                                                                        <span class="text-danger"></span>
                                                                    </label>
                                                                    <div class="row">
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($income['AverageMonthIncome'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputAverageMonthIncome"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0"/>
                                                                            <label for="inputAverageMonthIncome ">صد
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($income['AverageMonthIncome'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputAverageMonthIncome"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0"/>
                                                                            <label for="inputAverageMonthIncome">هزار
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputAverageMonthIncome"
                                                                                    id="inputAverageMonthIncome">
                                                                                <option value="0">انتخاب کنید ---</option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($income['AverageMonthIncome'])['unit']) == "HZ") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="HZ"
                                                                                        data-right-side="SD"
                                                                                        value="HZ">هزار تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($income['AverageMonthIncome'])['unit']) == "MI") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="MI"
                                                                                        data-right-side="HZ"
                                                                                        value="MI">میلیون تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($income['AverageMonthIncome'])['unit']) == "ML") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="ML"
                                                                                        data-right-side="MI"
                                                                                        value="ML">میلیارد تومان
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="LeftPaneAction">
                                                <div class="row form-group">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <button
                                                                class="btn btn-block btn-lg CommonButtons waves-effect"
                                                                data-target="AverageMonthIncome"
                                                                data-role="Wife">
                                                            ثبت
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Translate -->

                                    <!-- Conference -->
                                    <div class="col-md-12 col-xs-12">
                                        <div class="panel panel-default LeftPanelShadow">
                                            <div class="panel-heading">
                                                شفاف سازی هزینه های انتخاباتی
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                        <hr>
                                                        <form id="form-Election">
                                                            <span class="divider"></span>
                                                            <?php
                                                            $election['ElectionPlacePrice'] = "0.0 HZ";
                                                            $election['ElectionFlockPrice'] = "0.0 HZ";
                                                            $election['ElectionAdvertisePrice'] = "0.0 HZ";
                                                            $election['ElectionStaffPrice'] = "0.0 HZ";
                                                            $election['ElectionAllPrice'] = "0.0 HZ";
                                                            foreach ($finance['Election'] as $item) {
                                                                if($item['ForWho'] == 'Wife'){
                                                                    $election = $item;
                                                                }
                                                            }
                                                            ?>
                                                            <div class="col-md-12 col-xs-12 padding-0 form">
                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                    <label for="inputElectionPlacePrice">
                                                                        هزینه دایرکردن محل ستاد انتخابات (اجاره بها ,
                                                                        حملو نقل و سایر موارد)
                                                                        -هزینه کل :
                                                                        <span class="text-danger"></span>
                                                                    </label>
                                                                    <div class="row">
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($election['ElectionPlacePrice'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputElectionPlacePrice"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0" max="6"/>
                                                                            <label for="inputElectionPlacePrice ">صد
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($election['ElectionPlacePrice'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputElectionPlacePrice"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0" max="6"/>
                                                                            <label for="inputElectionPlacePrice">هزار
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputElectionPlacePrice"
                                                                                    id="inputElectionPlacePrice">
                                                                                <option value="0">انتخاب کنید ---</option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionPlacePrice'])['unit']) == "HZ") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="HZ"
                                                                                        data-right-side="SD"
                                                                                        value="HZ">هزار تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionPlacePrice'])['unit']) == "MI") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="MI"
                                                                                        data-right-side="HZ"
                                                                                        value="MI">میلیون تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionPlacePrice'])['unit']) == "ML") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="ML"
                                                                                        data-right-side="MI"
                                                                                        value="ML">میلیارد تومان
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                    <label for="inputElectionFlockPrice">
                                                                        هزینه برپایی تجمعات عمومی مرتبط با اهداف
                                                                        انتخاباتی – هزینه کل :
                                                                        <span class="text-danger"></span>
                                                                    </label>
                                                                    <div class="row">
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($election['ElectionFlockPrice'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputElectionFlockPrice"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0"/>
                                                                            <label for="inputElectionFlockPrice ">صد
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($election['ElectionFlockPrice'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputElectionFlockPrice"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0"/>
                                                                            <label for="inputElectionFlockPrice">هزار
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputElectionFlockPrice"
                                                                                    id="inputElectionFlockPrice">
                                                                                <option value="0">انتخاب کنید ---</option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionFlockPrice'])['unit']) == "HZ") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="HZ"
                                                                                        data-right-side="SD"
                                                                                        value="HZ">هزار تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionFlockPrice'])['unit']) == "MI") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="MI"
                                                                                        data-right-side="HZ"
                                                                                        value="MI">میلیون تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionFlockPrice'])['unit']) == "ML") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="ML"
                                                                                        data-right-side="MI"
                                                                                        value="ML">میلیارد تومان
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                    <label for="inputElectionAdvertisePrice">
                                                                        هزینه تبلیغات مجاز در رسانه ها – هزینه کل :
                                                                        <span class="text-danger"></span>
                                                                    </label>
                                                                    <div class="row">
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($election['ElectionAdvertisePrice'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputElectionAdvertisePrice"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0"/>
                                                                            <label for="inputElectionAdvertisePrice ">صد
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($election['ElectionAdvertisePrice'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputElectionAdvertisePrice"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0"/>
                                                                            <label for="inputElectionAdvertisePrice">هزار
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputElectionAdvertisePrice"
                                                                                    id="inputElectionAdvertisePrice">
                                                                                <option value="0">انتخاب کنید ---</option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionAdvertisePrice'])['unit']) == "HZ") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="HZ"
                                                                                        data-right-side="SD"
                                                                                        value="HZ">هزار تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionAdvertisePrice'])['unit']) == "MI") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="MI"
                                                                                        data-right-side="HZ"
                                                                                        value="MI">میلیون تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionAdvertisePrice'])['unit']) == "ML") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="ML"
                                                                                        data-right-side="MI"
                                                                                        value="ML">میلیارد تومان
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                    <label for="inputElectionStaffPrice">
                                                                        هزینه و حق الزحمه عوامل اجرایی و کارشناسی در
                                                                        انتخابات – هزینه کل :
                                                                        <span class="text-danger"></span>
                                                                    </label>
                                                                    <div class="row">
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($election['ElectionStaffPrice'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputElectionStaffPrice"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0"/>
                                                                            <label for="inputElectionStaffPrice ">صد
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($election['ElectionStaffPrice'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputElectionStaffPrice"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0"/>
                                                                            <label for="inputElectionStaffPrice">هزار
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputElectionStaffPrice"
                                                                                    id="inputElectionStaffPrice">
                                                                                <option value="0">انتخاب کنید ---</option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionStaffPrice'])['unit']) == "HZ") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="HZ"
                                                                                        data-right-side="SD"
                                                                                        value="HZ">هزار تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionStaffPrice'])['unit']) == "MI") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="MI"
                                                                                        data-right-side="HZ"
                                                                                        value="MI">میلیون تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionStaffPrice'])['unit']) == "ML") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="ML"
                                                                                        data-right-side="MI"
                                                                                        value="ML">میلیارد تومان
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                    <label for="inputElectionAllPrice">
                                                                        جمع کل هزینه های انتخاباتی :
                                                                        <span class="text-danger"></span>
                                                                    </label>
                                                                    <div class="row">
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($election['ElectionAllPrice'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputElectionAllPrice"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0"/>
                                                                            <label for="inputElectionAllPrice ">صد
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($election['ElectionAllPrice'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputElectionAllPrice"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0"/>
                                                                            <label for="inputElectionAllPrice">هزار
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputElectionAllPrice"
                                                                                    id="inputElectionAllPrice">
                                                                                <option value="0">انتخاب کنید ---</option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionAllPrice'])['unit']) == "HZ") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="HZ"
                                                                                        data-right-side="SD"
                                                                                        value="HZ">هزار تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionAllPrice'])['unit']) == "MI") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="MI"
                                                                                        data-right-side="HZ"
                                                                                        value="MI">میلیون تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionAllPrice'])['unit']) == "ML") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="ML"
                                                                                        data-right-side="MI"
                                                                                        value="ML">میلیارد تومان
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="LeftPaneAction">
                                                <div class="row form-group">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <button class="btn btn-block btn-lg CommonButtons waves-effect"
                                                                data-target="Election"
                                                                data-role="Wife">
                                                            ثبت
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Conference -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab3child">
                        <div class="LeftPanel">
                            <div class="LeftPanelcontent">
                                <div class="row">
                                    <!--Books -->
                                    <div class="col-md-12 col-xs-12">
                                        <div class="panel panel-default LeftPanelShadow">
                                            <div class="panel-heading">
                                                املاک و مستغلات
                                                <span class="add-form fa fa-plus"></span>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                        <hr>
                                                        <form id="form-RealEstate">
                                                            <span class="divider"></span>
                                                            <?php foreach ($finance['RealEStates'] as $item) {
                                                                if ($item['ForWho'] == 'Child') { ?>
                                                                    <div class="col-md-12 col-xs-12 padding-0 form">
                                                                        <span class="remove-form fa fa-times"></span>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputRealEstateType">
                                                                                نوع کاربری
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputRealEstateType"
                                                                                    id="inputRealEstateType">
                                                                                <?php foreach ($EnumResumeProfile['RealEstateType'] as $key => $value) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['RealEstateType'], $key); ?>
                                                                                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputRealEstateOwnershipDate">
                                                                                سال شروع مالکیت
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputRealEstateOwnershipDate"
                                                                                    id="inputRealEstateOwnershipDate"
                                                                                    style="font-family: tahoma;">
                                                                                <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['RealEstateOwnershipDate'], $i); ?>
                                                                                            value="<?php echo $i; ?>">
                                                                                        <?php echo $i; ?>
                                                                                    </option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputRealEstateOwnershipType">
                                                                                نحوه مالکیت
                                                                            </label>
                                                                            <select
                                                                                    class="form-control form-control-lg"
                                                                                    name="inputRealEstateOwnershipType"
                                                                                    id="inputRealEstateOwnershipType">
                                                                                <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['RealEstateOwnershipType'], $key); ?>
                                                                                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat">
                                                                            <label for="inputRealEstateCountryId">کشور</label>
                                                                            <select
                                                                                    data-country-id="<?php echo $item['RealEstateCountryId']; ?>"
                                                                                    data-state-id="<?php echo $item['RealEstateStateId']; ?>"
                                                                                    data-city-id="<?php echo $item['RealEstateCityId']; ?>"
                                                                                    class="form-control form-control-lg"
                                                                                    name="inputRealEstateCountryId"
                                                                                    id="inputRealEstateCountryId">
                                                                                <option value=0">-- انتخاب کنید --
                                                                                </option>
                                                                                <?php foreach ($countries as $row) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['RealEstateCountryId'], $row['CountryId']); ?>
                                                                                        <?php if ($row['ISO'] == 'IR') echo "selected"; ?>
                                                                                            value="<?php echo $row['CountryId']; ?>"><?php echo $row['FaName']; ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv">
                                                                            <label for="inputRealEstateStateId">
                                                                                استان
                                                                            </label>
                                                                            <select class="form-control form-control-lg state-select"
                                                                                    name="inputRealEstateStateId"
                                                                                    id="inputRealEstateStateId">
                                                                                <option value="0">-- انتخاب کنید --</option>
                                                                                <?php foreach ($states as $state) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['RealEstateStateId'], $state['StateId']); ?>
                                                                                            value="<?php echo $state['StateId']; ?>">
                                                                                        <?php echo $state['StateName']; ?>
                                                                                    </option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv">
                                                                            <label for="inputRealEstateCityId">
                                                                                شهر
                                                                            </label>
                                                                            <select class="form-control form-control-lg city-select"
                                                                                    name="inputRealEstateCityId"
                                                                                    id="inputRealEstateCityId">
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputRealEstatePortion">
                                                                                سهم از ملک(1 تا 6 دانگ)
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <input type="number"
                                                                                <?php setInputValue($item['RealEstatePortion']); ?>
                                                                                   name="inputRealEstatePortion"
                                                                                   id="inputRealEstatePortion"
                                                                                   class="form-control"
                                                                                   placeholder="سهم از ملک 1 تا 6 دانگ"
                                                                                   min="0" max="6"/>
                                                                        </div>
                                                                        <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputRealEstateExtent">
                                                                                متراژ حدودی ملک
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <div class="row">
                                                                                <div class="col-md-6 col-xs-12 RightFloat">
                                                                                    <input type="number"
                                                                                        <?php setInputValue($item['RealEstateExtent']); ?>
                                                                                           name="inputRealEstateExtent"
                                                                                           id="inputRealEstateExtent"
                                                                                           class="form-control"
                                                                                           placeholder=""
                                                                                           min="0"/>
                                                                                </div>
                                                                                <div class="col-md-6 col-xs-12 RightFloat">
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputRealEstateExtentUnit"
                                                                                            id="inputRealEstateExtentUnit">
                                                                                        <?php foreach ($EnumResumeProfile['Extent'] as $key => $value) { ?>
                                                                                            <option
                                                                                                <?php setOptionSelected($item['RealEstateExtentUnit'], $key); ?>
                                                                                                    value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                        <?php } ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputRealEstateBuyTimePrice">
                                                                                ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <div class="row">
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['RealEstateBuyTimePrice'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputRealEstateBuyTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputRealEstateBuyTimePrice ">صد
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                    <input
                                                                                            type="number"
                                                                                        <?php setInputValue(splitPrice($item['RealEstateBuyTimePrice'])['left']); ?>
                                                                                            name="inputRealEstateBuyTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputRealEstateBuyTimePrice">هزار
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputRealEstateBuyTimePrice"
                                                                                            id="inputRealEstateBuyTimePrice">
                                                                                        <option value="0">انتخاب کنید ---</option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['RealEstateBuyTimePrice'])['unit']) == "HZ") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="HZ"
                                                                                                data-right-side="SD"
                                                                                                value="HZ">هزار تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['RealEstateBuyTimePrice'])['unit']) == "MI") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="MI"
                                                                                                data-right-side="HZ"
                                                                                                value="MI">میلیون تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['RealEstateBuyTimePrice'])['unit']) == "ML") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="ML"
                                                                                                data-right-side="MI"
                                                                                                value="ML">میلیارد تومان
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputRealEstateNowTimePrice">
                                                                                ارزش حدودی کل سهام درحال حاضر :
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <div class="row">
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['RealEstateNowTimePrice'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputRealEstateNowTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputRealEstateNowTimePrice ">صد
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['RealEstateNowTimePrice'])['left']); ?>
                                                                                            type="number"
                                                                                            name="inputRealEstateNowTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputRealEstateNowTimePrice">هزار
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputRealEstateNowTimePrice"
                                                                                            id="inputRealEstateNowTimePrice">
                                                                                        <option value="0">انتخاب کنید ---</option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['RealEstateNowTimePrice'])['unit']) == "HZ") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="HZ"
                                                                                                data-right-side="SD"
                                                                                                value="HZ">هزار تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['RealEstateNowTimePrice'])['unit']) == "MI") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="MI"
                                                                                                data-right-side="HZ"
                                                                                                value="MI">میلیون تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['RealEstateNowTimePrice'])['unit']) == "ML") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="ML"
                                                                                                data-right-side="MI"
                                                                                                value="ML">میلیارد تومان
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group RightFloat">
                                                                            <label for="inputRealEstateAddress">آدرس</label>
                                                                            <input
                                                                                <?php setInputValue($item['RealEstateAddress']); ?>
                                                                                    id="inputRealEstateAddress"
                                                                                    type="text"
                                                                                    name="inputRealEstateAddress"
                                                                                    class="input-validate validate valid"
                                                                                    placeholder="نام خیابان اصلی / محله / منطقه">
                                                                        </div>
                                                                    </div>
                                                                <?php }
                                                            } ?>
                                                        </form>
                                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                                            <span class="remove-form fa fa-times"></span>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputRealEstateType">
                                                                    نوع کاربری
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputRealEstateType"
                                                                        id="inputRealEstateType">
                                                                    <?php foreach ($EnumResumeProfile['RealEstateType'] as $key => $value) { ?>
                                                                        <option
                                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputRealEstateOwnershipDate">
                                                                    سال شروع مالکیت
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputRealEstateOwnershipDate"
                                                                        id="inputRealEstateOwnershipDate"
                                                                        style="font-family: tahoma;">
                                                                    <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                        <option
                                                                            <?php if ($i == 1398) echo "selected"; ?>
                                                                                value="<?php echo $i; ?>">
                                                                            <?php echo $i; ?>
                                                                        </option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputRealEstateOwnershipType">
                                                                    نحوه مالکیت
                                                                </label>
                                                                <select
                                                                        class="form-control form-control-lg"
                                                                        name="inputRealEstateOwnershipType"
                                                                        id="inputRealEstateOwnershipType">
                                                                    <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                        <option
                                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat">
                                                                <label for="inputRealEstateCountryId">کشور</label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputRealEstateCountryId"
                                                                        id="inputRealEstateCountryId">
                                                                    <option value="0">-- انتخاب کنید --</option>
                                                                    <?php foreach ($countries as $item) { ?>
                                                                        <option
                                                                            <?php if ($item['ISO'] == 'IR') echo "selected"; ?>
                                                                                value="<?php echo $item['CountryId']; ?>"><?php echo $item['FaName']; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv">
                                                                <label for="inputRealEstateStateId">
                                                                    استان
                                                                </label>
                                                                <select class="form-control form-control-lg state-select"
                                                                        name="inputRealEstateStateId"
                                                                        id="inputRealEstateStateId">
                                                                    <option value="0">-- انتخاب کنید --</option>
                                                                    <?php foreach ($states as $state) { ?>
                                                                        <option value="<?php echo $state['StateId']; ?>">
                                                                            <?php echo $state['StateName']; ?>
                                                                        </option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv">
                                                                <label for="inputRealEstateCityId">
                                                                    شهر
                                                                </label>
                                                                <select class="form-control form-control-lg city-select"
                                                                        name="inputRealEstateCityId"
                                                                        id="inputRealEstateCityId">
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputRealEstatePortion">
                                                                    سهم از ملک(1 تا 6 دانگ)
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <input type="number" name="inputRealEstatePortion"
                                                                       id="inputRealEstatePortion"
                                                                       class="form-control"
                                                                       placeholder="سهم از ملک 1 تا 6 دانگ"
                                                                       min="0" max="6"/>
                                                            </div>
                                                            <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputRealEstateExtent">
                                                                    متراژ حدودی ملک
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-6 col-xs-12 RightFloat">
                                                                        <input type="number"
                                                                               name="inputRealEstateExtent"
                                                                               id="inputRealEstateExtent"
                                                                               class="form-control"
                                                                               placeholder=""
                                                                               min="0"/>
                                                                    </div>
                                                                    <div class="col-md-6 col-xs-12 RightFloat">
                                                                        <select class="form-control form-control-lg"
                                                                                name="inputRealEstateExtentUnit"
                                                                                id="inputRealEstateExtentUnit">
                                                                            <?php foreach ($EnumResumeProfile['Extent'] as $key => $value) { ?>
                                                                                <option
                                                                                        value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputRealEstateBuyTimePrice">
                                                                    ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputRealEstateBuyTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputRealEstateBuyTimePrice ">صد
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputRealEstateBuyTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputRealEstateBuyTimePrice">هزار
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg"
                                                                                name="inputRealEstateBuyTimePrice"
                                                                                id="inputRealEstateBuyTimePrice">
                                                                            <option value="0">انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ"
                                                                                    data-right-side="SD" value="HZ">هزار
                                                                                تومان
                                                                            </option>
                                                                            <option data-left-side="MI"
                                                                                    data-right-side="HZ" value="MI">
                                                                                میلیون تومان
                                                                            </option>
                                                                            <option data-left-side="ML"
                                                                                    data-right-side="MI" value="ML">
                                                                                میلیارد تومان
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputRealEstateNowTimePrice">
                                                                    ارزش حدودی کل سهام درحال حاضر :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputRealEstateNowTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputRealEstateNowTimePrice ">صد
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputRealEstateNowTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputRealEstateNowTimePrice">هزار
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg"
                                                                                name="inputRealEstateNowTimePrice"
                                                                                id="inputRealEstateNowTimePrice">
                                                                            <option value="0">انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ"
                                                                                    data-right-side="SD" value="HZ">هزار
                                                                                تومان
                                                                            </option>
                                                                            <option data-left-side="MI"
                                                                                    data-right-side="HZ" value="MI">
                                                                                میلیون تومان
                                                                            </option>
                                                                            <option data-left-side="ML"
                                                                                    data-right-side="MI" value="ML">
                                                                                میلیارد تومان
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group RightFloat">
                                                                <label for="inputRealEstateAddress">آدرس</label>
                                                                <input id="inputRealEstateAddress" type="text"
                                                                       name="inputRealEstateAddress"
                                                                       class="input-validate validate valid"
                                                                       placeholder="نام خیابان اصلی / محله / منطقه">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="LeftPaneAction">
                                                <div class="row form-group">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <button
                                                                class="btn btn-block btn-lg CommonButtons waves-effect"
                                                                data-target="RealEstate"
                                                                data-role="Child">
                                                            ثبت
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Books -->

                                    <!--Articles -->
                                    <div class="col-md-12 col-xs-12">
                                        <div class="panel panel-default LeftPanelShadow">
                                            <div class="panel-heading">
                                                وسایل نقلیه
                                                <span class="add-form fa fa-plus"></span>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                        <hr>
                                                        <form id="form-Vehicle">
                                                            <span class="divider"></span>
                                                            <?php foreach ($finance['Vehicle'] as $item) {
                                                                if ($item['ForWho'] == 'Child') { ?>
                                                                    <div class="col-md-12 col-xs-12 padding-0 form">
                                                                        <span class="remove-form fa fa-times"></span>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputVehicleType">
                                                                                نوع وسیله نقلیه<span
                                                                                        class="text-danger"></span>
                                                                            </label>
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputVehicleType"
                                                                                    id="inputVehicleType">
                                                                                <?php foreach ($EnumResumeProfile['TypeOfVehicle'] as $key => $value) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['VehicleType'], $key); ?>
                                                                                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputVehicleOwnershipDate">
                                                                                سال شروع مالکیت<span
                                                                                        class="text-danger"></span>
                                                                            </label>
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputVehicleOwnershipDate"
                                                                                    id="inputVehicleOwnershipDate"
                                                                                    style="font-family: tahoma;">
                                                                                <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['VehicleOwnershipDate'], $i); ?>
                                                                                        <?php if ($i == 1398) echo "selected"; ?>
                                                                                            value="<?php echo $i; ?>">
                                                                                        <?php echo $i; ?>
                                                                                    </option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputVehicleOwnershipType">
                                                                                نحوه مالکیت
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputVehicleOwnershipType"
                                                                                    id="inputVehicleOwnershipType">
                                                                                <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                                    <option

                                                                                        <?php setOptionSelected($item['VehicleOwnershipType'], $i); ?>
                                                                                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputVehicleBuyTimePrice">
                                                                                ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <div class="row">
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['VehicleBuyTimePrice'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputVehicleBuyTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputVehicleBuyTimePrice ">صد
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['VehicleBuyTimePrice'])['left']); ?>
                                                                                            type="number"
                                                                                            name="inputVehicleBuyTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputVehicleBuyTimePrice">هزار
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputVehicleBuyTimePrice"
                                                                                            id="inputVehicleBuyTimePrice">
                                                                                        <option value="0">انتخاب کنید ---</option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['VehicleBuyTimePrice'])['unit']) == "HZ") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="HZ"
                                                                                                data-right-side="SD"
                                                                                                value="HZ">هزار تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['VehicleBuyTimePrice'])['unit']) == "MI") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="MI"
                                                                                                data-right-side="HZ"
                                                                                                value="MI">میلیون تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['VehicleBuyTimePrice'])['unit']) == "ML") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="ML"
                                                                                                data-right-side="MI"
                                                                                                value="ML">میلیارد تومان
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputVehicleNowTimePrice">
                                                                                ارزش حدودی کل سهام درحال حاضر :
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <div class="row">
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['VehicleNowTimePrice'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputVehicleNowTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputVehicleNowTimePrice ">صد
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['VehicleNowTimePrice'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputVehicleNowTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputVehicleNowTimePrice">هزار
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputVehicleNowTimePrice"
                                                                                            id="inputVehicleNowTimePrice">
                                                                                        <option value="0">انتخاب کنید ---</option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['VehicleNowTimePrice'])['unit']) == "HZ") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="HZ"
                                                                                                data-right-side="SD"
                                                                                                value="HZ">هزار تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['VehicleNowTimePrice'])['unit']) == "MI") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="MI"
                                                                                                data-right-side="HZ"
                                                                                                value="MI">میلیون تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['VehicleNowTimePrice'])['unit']) == "ML") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="ML"
                                                                                                data-right-side="MI"
                                                                                                value="ML">میلیارد تومان
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat clear-div">
                                                                            <label for="inputVehiclePortion">
                                                                                سهم از ملک(1 تا 6 دانگ)
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <input
                                                                                <?php setInputValue($item['VehiclePortion']); ?>
                                                                                    type="number"
                                                                                    name="inputVehiclePortion"
                                                                                    id="inputVehiclePortion"
                                                                                    class="form-control"
                                                                                    placeholder="سهم از ملک 1 تا 6 دانگ"
                                                                                    min="0" max="6"/>
                                                                        </div>
                                                                    </div>
                                                                <?php }
                                                            } ?>
                                                        </form>
                                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                                            <span class="remove-form fa fa-times"></span>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputVehicleType">
                                                                    نوع وسیله نقلیه
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputVehicleType"
                                                                        id="inputVehicleType">
                                                                    <?php foreach ($EnumResumeProfile['TypeOfVehicle'] as $key => $value) { ?>
                                                                        <option
                                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputVehicleOwnershipDate">
                                                                    سال شروع مالکیت
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputVehicleOwnershipDate"
                                                                        id="inputVehicleOwnershipDate"
                                                                        style="font-family: tahoma;">
                                                                    <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                        <option
                                                                            <?php if ($i == 1398) echo "selected"; ?>
                                                                                value="<?php echo $i; ?>">
                                                                            <?php echo $i; ?>
                                                                        </option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputVehicleOwnershipType">
                                                                    نحوه مالکیت
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputVehicleOwnershipType"
                                                                        id="inputVehicleOwnershipType">
                                                                    <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                        <option
                                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputVehicleBuyTimePrice">
                                                                    ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputVehicleBuyTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputVehicleBuyTimePrice ">صد
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputVehicleBuyTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputVehicleBuyTimePrice">هزار
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg"
                                                                                name="inputVehicleBuyTimePrice"
                                                                                id="inputVehicleBuyTimePrice">
                                                                            <option value="0">انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ"
                                                                                    data-right-side="SD" value="HZ">هزار
                                                                                تومان
                                                                            </option>
                                                                            <option data-left-side="MI"
                                                                                    data-right-side="HZ" value="MI">
                                                                                میلیون تومان
                                                                            </option>
                                                                            <option data-left-side="ML"
                                                                                    data-right-side="MI" value="ML">
                                                                                میلیارد تومان
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputVehicleNowTimePrice">
                                                                    ارزش حدودی کل سهام درحال حاضر :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputVehicleNowTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputVehicleNowTimePrice ">صد
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputVehicleNowTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputVehicleNowTimePrice">هزار
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg"
                                                                                name="inputVehicleNowTimePrice"
                                                                                id="inputVehicleNowTimePrice">
                                                                            <option value="0">انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ"
                                                                                    data-right-side="SD" value="HZ">هزار
                                                                                تومان
                                                                            </option>
                                                                            <option data-left-side="MI"
                                                                                    data-right-side="HZ" value="MI">
                                                                                میلیون تومان
                                                                            </option>
                                                                            <option data-left-side="ML"
                                                                                    data-right-side="MI" value="ML">
                                                                                میلیارد تومان
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3 col-xs-12 col-sm-12 form-group RightFloat clear-div">
                                                                <label for="inputVehiclePortion">
                                                                    سهم از ملک(1 تا 6 دانگ)
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <input type="number" name="inputVehiclePortion"
                                                                       id="inputVehiclePortion" class="form-control"
                                                                       placeholder="سهم از ملک 1 تا 6 دانگ"
                                                                       min="0" max="6"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="LeftPaneAction">
                                                <div class="row form-group">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <button
                                                                class="btn btn-block btn-lg CommonButtons waves-effect"
                                                                data-target="Vehicle"
                                                                data-role="Child">
                                                            ثبت
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Articles -->

                                    <!--Research -->
                                    <div class="col-md-12 col-xs-12">
                                        <div class="panel panel-default LeftPanelShadow">
                                            <div class="panel-heading">
                                                سرمایه‌گذاری‌ها (سهام‌، اوراق بهادار، ...)
                                                <span class="add-form fa fa-plus"></span>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                        <hr>
                                                        <form id="form-Invest">
                                                            <span class="divider"></span>
                                                            <?php foreach ($finance['Invest'] as $item) {
                                                                if ($item['ForWho'] == 'Child') { ?>
                                                                    <div class="col-md-12 col-xs-12 padding-0 form">
                                                                        <span class="remove-form fa fa-times"></span>
                                                                        <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                            <label for="inputInvestTitle">
                                                                                نام شرکت / موسسه
                                                                            </label>
                                                                            <input
                                                                                <?php setInputValue($item['InvestTitle']); ?>
                                                                                    id="inputInvestTitle" type="text"
                                                                                    name="inputInvestTitle"
                                                                                    placeholder="نام شرکت - موسسه - پروژه ">
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputInvestDate">
                                                                                سال شروع مالکیت
                                                                                <span class="text-danger">
                                             </span>
                                                                            </label>
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputInvestDate"
                                                                                    id="inputInvestDate"
                                                                                    style="font-family: tahoma;">
                                                                                <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['InvestDate'], $i); ?>
                                                                                        <?php if ($i == 1398) echo "selected"; ?>
                                                                                            value="<?php echo $i; ?>">
                                                                                        <?php echo $i; ?>
                                                                                    </option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputInvestOwnershipType">
                                                                                نحوه مالکیت
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputInvestOwnershipType"
                                                                                    id="inputInvestOwnershipType">
                                                                                <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['InvestDate'], $key); ?>
                                                                                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputInvestBuyTimePrice">
                                                                                ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <div class="row">
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['InvestBuyTimePrice'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputInvestBuyTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputInvestBuyTimePrice ">صد
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['InvestBuyTimePrice'])['left']); ?>
                                                                                            type="number"
                                                                                            name="inputInvestBuyTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputInvestBuyTimePrice">هزار
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputInvestBuyTimePrice"
                                                                                            id="inputInvestBuyTimePrice">
                                                                                        <option value="0">انتخاب کنید ---</option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['InvestBuyTimePrice'])['unit']) == "HZ") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="HZ"
                                                                                                data-right-side="SD"
                                                                                                value="HZ">هزار تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['InvestBuyTimePrice'])['unit']) == "MI") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="MI"
                                                                                                data-right-side="HZ"
                                                                                                value="MI">میلیون تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['InvestBuyTimePrice'])['unit']) == "ML") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="ML"
                                                                                                data-right-side="MI"
                                                                                                value="ML">میلیارد تومان
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputInvestNowTimePrice">
                                                                                ارزش حدودی کل سهام درحال حاضر :
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <div class="row">
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['InvestNowTimePrice'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputInvestNowTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputInvestNowTimePrice ">صد
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['InvestNowTimePrice'])['left']); ?>
                                                                                            type="number"
                                                                                            name="inputInvestNowTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputInvestNowTimePrice">هزار
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputInvestNowTimePrice"
                                                                                            id="inputInvestNowTimePrice">
                                                                                        <option value="0">انتخاب کنید ---</option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['InvestNowTimePrice'])['unit']) == "HZ") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="HZ"
                                                                                                data-right-side="SD"
                                                                                                value="HZ">هزار تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['InvestNowTimePrice'])['unit']) == "MI") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="MI"
                                                                                                data-right-side="HZ"
                                                                                                value="MI">میلیون تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['InvestNowTimePrice'])['unit']) == "ML") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="ML"
                                                                                                data-right-side="MI"
                                                                                                value="ML">میلیارد تومان
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php }
                                                            } ?>
                                                        </form>
                                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                                            <span class="remove-form fa fa-times"></span>
                                                            <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                <label for="inputInvestTitle">
                                                                    نام شرکت / موسسه
                                                                </label>
                                                                <input id="inputInvestTitle" type="text"
                                                                       name="inputInvestTitle"
                                                                       placeholder="نام شرکت - موسسه - پروژه ">
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputInvestDate">
                                                                    سال شروع مالکیت
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputInvestDate"
                                                                        id="inputInvestDate"
                                                                        style="font-family: tahoma;">
                                                                    <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                        <option
                                                                            <?php if ($i == 1398) echo "selected"; ?>
                                                                                value="<?php echo $i; ?>">
                                                                            <?php echo $i; ?>
                                                                        </option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputInvestOwnershipType">
                                                                    نحوه مالکیت
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputInvestOwnershipType"
                                                                        id="inputInvestOwnershipType">
                                                                    <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                        <option
                                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputInvestBuyTimePrice">
                                                                    ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputInvestBuyTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputInvestBuyTimePrice ">صد
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputInvestBuyTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputInvestBuyTimePrice">هزار
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg"
                                                                                name="inputInvestBuyTimePrice"
                                                                                id="inputInvestBuyTimePrice">
                                                                            <option value="0">انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ"
                                                                                    data-right-side="SD" value="HZ">هزار
                                                                                تومان
                                                                            </option>
                                                                            <option data-left-side="MI"
                                                                                    data-right-side="HZ" value="MI">
                                                                                میلیون تومان
                                                                            </option>
                                                                            <option data-left-side="ML"
                                                                                    data-right-side="MI" value="ML">
                                                                                میلیارد تومان
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputInvestNowTimePrice">
                                                                    ارزش حدودی کل سهام درحال حاضر :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputInvestNowTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputInvestNowTimePrice ">صد
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputInvestNowTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputInvestNowTimePrice">هزار
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg"
                                                                                name="inputInvestNowTimePrice"
                                                                                id="inputInvestNowTimePrice">
                                                                            <option value="0">انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ"
                                                                                    data-right-side="SD" value="HZ">هزار
                                                                                تومان
                                                                            </option>
                                                                            <option data-left-side="MI"
                                                                                    data-right-side="HZ" value="MI">
                                                                                میلیون تومان
                                                                            </option>
                                                                            <option data-left-side="ML"
                                                                                    data-right-side="MI" value="ML">
                                                                                میلیارد تومان
                                                                            </option>
                                                                        </select>
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
                                                        <button
                                                                class="btn btn-block btn-lg CommonButtons waves-effect"
                                                                data-target="Invest"
                                                                data-role="Child">
                                                            ثبت
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Research -->

                                    <!--Translate -->
                                    <div class="col-md-12 col-xs-12">
                                        <div class="panel panel-default LeftPanelShadow">
                                            <div class="panel-heading">
                                                حساب‌های جاری، پس‌انداز و سرمایه‌گذاری
                                                <span class="add-form fa fa-plus"></span>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                        <hr>
                                                        <form id="form-BankAccount">
                                                            <span class="divider"></span>
                                                            <?php foreach ($finance['BankAccount'] as $item) {
                                                                if ($item['ForWho'] == 'Child') { ?>
                                                                    <div class="col-md-12 col-xs-12 padding-0 form">
                                                                        <span class="remove-form fa fa-times"></span>
                                                                        <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                            <label for="inputBankAccountTitle">
                                                                                عنوان بانک یا موسسه
                                                                            </label>
                                                                            <input
                                                                                <?php setInputValue($item['BankAccountTitle']); ?>
                                                                                    id="inputBankAccountTitle"
                                                                                    type="text"
                                                                                    name="inputBankAccountTitle"
                                                                                    placeholder="عنوان بانک یا موسسه ">
                                                                        </div>
                                                                        <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputBankAccountPrice">
                                                                                مبلغ :
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <div class="row">
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                    <input

                                                                                        <?php setInputValue(splitPrice($item['BankAccountPrice'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputBankAccountPrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputBankAccountPrice ">صد
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                    <input

                                                                                        <?php setInputValue(splitPrice($item['BankAccountPrice'])['left']); ?>
                                                                                            type="number"
                                                                                            name="RealEstateBuyTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputBankAccountPrice">هزار
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputBankAccountPrice"
                                                                                            id="inputBankAccountPrice">
                                                                                        <option value="0">انتخاب کنید ---</option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['BankAccountPrice'])['unit']) == "HZ") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="HZ"
                                                                                                data-right-side="SD"
                                                                                                value="HZ">هزار تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['BankAccountPrice'])['unit']) == "MI") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="MI"
                                                                                                data-right-side="HZ"
                                                                                                value="MI">میلیون تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['BankAccountPrice'])['unit']) == "ML") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="ML"
                                                                                                data-right-side="MI"
                                                                                                value="ML">میلیارد تومان
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat">
                                                                            <label for="inputBankAccountCountryId">کشور</label>
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputBankAccountCountryId"
                                                                                    id="inputBankAccountCountryId">
                                                                                <option value="0">-- انتخاب کنید --
                                                                                </option>
                                                                                <?php foreach ($countries as $row) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['BankAccountCountryId'], $row['CountryId']); ?>
                                                                                            value="<?php echo $row['CountryId']; ?>"><?php echo $row['FaName']; ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                <?php }
                                                            } ?>
                                                        </form>
                                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                                            <span class="remove-form fa fa-times"></span>
                                                            <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                <label for="inputBankAccountTitle">
                                                                    عنوان بانک یا موسسه
                                                                </label>
                                                                <input id="inputBankAccountTitle" type="text"
                                                                       name="inputBankAccountTitle"
                                                                       placeholder="عنوان بانک یا موسسه ">
                                                            </div>
                                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputBankAccountPrice">
                                                                    مبلغ :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputBankAccountPrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputBankAccountPrice ">صد
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="RealEstateBuyTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputBankAccountPrice">هزار
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg"
                                                                                name="inputBankAccountPrice"
                                                                                id="inputBankAccountPrice">
                                                                            <option value="0">انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ"
                                                                                    data-right-side="SD" value="HZ">هزار
                                                                                تومان
                                                                            </option>
                                                                            <option data-left-side="MI"
                                                                                    data-right-side="HZ" value="MI">
                                                                                میلیون تومان
                                                                            </option>
                                                                            <option data-left-side="ML"
                                                                                    data-right-side="MI" value="ML">
                                                                                میلیارد تومان
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat">
                                                                <label for="inputBankAccountCountryId">
                                                                    کشور
                                                                    </span>
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputBankAccountCountryId"
                                                                        id="inputBankAccountCountryId">
                                                                    <option value="0">-- انتخاب کنید --</option>
                                                                    <?php foreach ($countries as $item) { ?>
                                                                        <option
                                                                            <?php if ($item['ISO'] == 'IR') echo "selected"; ?>
                                                                                value="<?php echo $item['CountryId']; ?>"><?php echo $item['FaName']; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="LeftPaneAction">
                                                <div class="row form-group">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <button
                                                                class="btn btn-block btn-lg CommonButtons waves-effect"
                                                                data-target="BankAccount"
                                                                data-role="Child">
                                                            ثبت
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Translate -->

                                    <!-- Invention -->
                                    <div class="col-md-12 col-xs-12">
                                        <div class="panel panel-default LeftPanelShadow">
                                            <div class="panel-heading">
                                                دیون و مطالبات
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                        <hr>
                                                        <form id="form-Credit-Debtor">
                                                            <span class="divider"></span>
                                                            <?php
                                                            $creditDebtor['CreditPrice'] = "0.0 HZ";
                                                            $creditDebtor['DebotrPrice'] = "0.0 HZ";
                                                            $creditDebtor['DebotrDescription'] = "";
                                                            foreach ($finance['CreditDebtor'] as $item) {
                                                                if($item['ForWho'] == 'Child'){
                                                                    $creditDebtor = $item;
                                                                }
                                                            }
                                                            ?>
                                                            <div class="col-md-12 col-xs-12 padding-0 form">
                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                    <label for="inputCreditPrice">
                                                                        جمع کل بستانکاری از اشخاص حقیقی یا حقوقی
                                                                        :
                                                                        <span class="text-danger"></span>
                                                                    </label>
                                                                    <div class="row">
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($creditDebtor['CreditPrice'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputCreditPrice"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0"/>
                                                                            <label for="inputCreditPrice ">صد
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($creditDebtor['CreditPrice'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputCreditPrice"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0"/>
                                                                            <label for="inputCreditPrice">هزار
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputCreditPrice"
                                                                                    id="inputCreditPrice">
                                                                                <option value="0">انتخاب کنید ---</option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($creditDebtor['CreditPrice'])['unit']) == "HZ") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="HZ"
                                                                                        data-right-side="SD"
                                                                                        value="HZ">هزار تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($creditDebtor['CreditPrice'])['unit']) == "MI") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="MI"
                                                                                        data-right-side="HZ"
                                                                                        value="MI">میلیون تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($creditDebtor['CreditPrice'])['unit']) == "ML") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="ML"
                                                                                        data-right-side="MI"
                                                                                        value="ML">میلیارد تومان
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                    <label for="inputDebotrPrice">
                                                                        جمع کل بدهکاری از اشخاص حقیقی یا حقوقی :
                                                                        <span class="text-danger"></span>
                                                                    </label>
                                                                    <div class="row">
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($creditDebtor['DebotrPrice'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputDebotrPrice"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0"/>
                                                                            <label for="inputDebotrPrice ">صد
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($creditDebtor['DebotrPrice'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputDebotrPrice"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0"/>
                                                                            <label for="inputDebotrPrice">هزار
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputDebotrPrice"
                                                                                    id="inputDebotrPrice">
                                                                                <option value="0">انتخاب کنید ---</option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($creditDebtor['DebotrPrice'])['unit']) == "HZ") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="HZ"
                                                                                        data-right-side="SD"
                                                                                        value="HZ">هزار تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($creditDebtor['DebotrPrice'])['unit']) == "MI") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="MI"
                                                                                        data-right-side="HZ"
                                                                                        value="MI">میلیون تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($creditDebtor['DebotrPrice'])['unit']) == "ML") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="ML"
                                                                                        data-right-side="MI"
                                                                                        value="ML">میلیارد تومان
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <textarea class="EStates-textArea"
                                                                              name="inputDebotrDescription"><?php echo $creditDebtor['DebotrDescription']; ?></textarea>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="LeftPaneAction">
                                                <div class="row form-group">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <button
                                                                class="btn btn-block btn-lg CommonButtons waves-effect"
                                                                data-target="Credit-Debtor"
                                                                data-role="Child">
                                                            ثبت
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Invention -->

                                    <!--Translate -->
                                    <div class="col-md-12 col-xs-12">
                                        <div class="panel panel-default LeftPanelShadow">
                                            <div class="panel-heading">
                                                کلیه کالاهای فاقد سند مالکیت رسمی
                                                <span class="add-form fa fa-plus"></span>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                        <hr>
                                                        <form id="form-Goods">
                                                            <span class="divider"></span>
                                                            <?php foreach ($finance['Goods'] as $item) {
                                                                if ($item['ForWho'] == 'Child') { ?>
                                                                    <div class="col-md-12 col-xs-12 padding-0 form">
                                                                        <span class="remove-form fa fa-times"></span>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputGoodsType">
                                                                                نوع کالا
                                                                            </label>
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputGoodsType"
                                                                                    id="inputGoodsType">
                                                                                <?php foreach ($EnumResumeProfile['GoodsType'] as $key => $value) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['GoodsType'], $key); ?>
                                                                                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputGoodsOwnershipStartDate">
                                                                                سال شروع مالکیت
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputGoodsOwnershipStartDate"
                                                                                    id="inputGoodsOwnershipStartDate"
                                                                                    style="font-family: tahoma;">
                                                                                <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['GoodsOwnershipStartDate'], $i); ?>
                                                                                            value="<?php echo $i; ?>">
                                                                                        <?php echo $i; ?>
                                                                                    </option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputGoodsCount">
                                                                                حجم / وزن / تعداد کالا
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <input
                                                                                <?php setInputValue($item['GoodsCount']); ?>
                                                                                    type="text" name="inputGoodsCount"
                                                                                    id="inputGoodsCount"
                                                                                    class="form-control"
                                                                                    placeholder="  حجم / وزن / تعداد کالا"/>
                                                                        </div>
                                                                        <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputGoodsBuyTimePrice">
                                                                                ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <div class="row">
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['GoodsBuyTimePrice'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputGoodsBuyTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputGoodsBuyTimePrice ">صد
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['GoodsBuyTimePrice'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputGoodsBuyTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputGoodsBuyTimePrice">هزار
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputGoodsBuyTimePrice"
                                                                                            id="inputGoodsBuyTimePrice">
                                                                                        <option value="0">انتخاب کنید ---</option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['GoodsBuyTimePrice'])['unit']) == "HZ") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="HZ"
                                                                                                data-right-side="SD"
                                                                                                value="HZ">هزار تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['GoodsBuyTimePrice'])['unit']) == "MI") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="MI"
                                                                                                data-right-side="HZ"
                                                                                                value="MI">میلیون تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['GoodsBuyTimePrice'])['unit']) == "ML") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="ML"
                                                                                                data-right-side="MI"
                                                                                                value="ML">میلیارد تومان
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputGoodsNowTimePrice">
                                                                                ارزش حدودی کل سهام درحال حاضر :
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <div class="row">
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['GoodsNowTimePrice'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputGoodsNowTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputGoodsNowTimePrice ">صد
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['GoodsNowTimePrice'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputGoodsNowTimePrice"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputGoodsNowTimePrice">هزار
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputGoodsNowTimePrice"
                                                                                            id="inputGoodsNowTimePrice">
                                                                                        <option value="0">انتخاب کنید ---</option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['GoodsNowTimePrice'])['unit']) == "HZ") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="HZ"
                                                                                                data-right-side="SD"
                                                                                                value="HZ">هزار تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['GoodsNowTimePrice'])['unit']) == "MI") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="MI"
                                                                                                data-right-side="HZ"
                                                                                                value="MI">میلیون تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['GoodsNowTimePrice'])['unit']) == "ML") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="ML"
                                                                                                data-right-side="MI"
                                                                                                value="ML">میلیارد تومان
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputGoodsOwnershipPercent">
                                                                                درصد سهم از مالکیت :
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <input
                                                                                <?php setInputValue($item['GoodsOwnershipPercent']); ?>
                                                                                    type="number"
                                                                                    name="inputGoodsOwnershipPercent"
                                                                                    id="inputGoodsOwnershipPercent"
                                                                                    class="form-control"
                                                                                    placeholder="سهم از ملک 1 تا 6 دانگ"
                                                                                    min="0" max="6"/>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputRealEstateOwnershipType">
                                                                                نحوه مالکیت
                                                                                <span class="text-danger">
                                             </span>
                                                                            </label>
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputRealEstateOwnershipType"
                                                                                    id="inputRealEstateOwnershipType">
                                                                                <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['RealEstateOwnershipType'], $key); ?>
                                                                                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                <?php }
                                                            } ?>
                                                        </form>
                                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                                            <span class="remove-form fa fa-times"></span>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputGoodsType">
                                                                    نوع کالا
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputGoodsType"
                                                                        id="inputGoodsType">
                                                                    <?php foreach ($EnumResumeProfile['GoodsType'] as $key => $value) { ?>
                                                                        <option
                                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputGoodsOwnershipStartDate">
                                                                    سال شروع مالکیت
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputGoodsOwnershipStartDate"
                                                                        id="inputGoodsOwnershipStartDate"
                                                                        style="font-family: tahoma;">
                                                                    <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                        <option
                                                                            <?php if ($i == 1398) echo "selected"; ?>
                                                                                value="<?php echo $i; ?>">
                                                                            <?php echo $i; ?>
                                                                        </option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputGoodsCount">
                                                                    حجم / وزن / تعداد کالا
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <input type="text" name="inputGoodsCount"
                                                                       id="inputGoodsCount"
                                                                       class="form-control"
                                                                       placeholder="  حجم / وزن / تعداد کالا"/>
                                                            </div>
                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputGoodsBuyTimePrice">
                                                                    ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputGoodsBuyTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputGoodsBuyTimePrice ">صد
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputGoodsBuyTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputGoodsBuyTimePrice">هزار
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg"
                                                                                name="inputGoodsBuyTimePrice"
                                                                                id="inputGoodsBuyTimePrice">
                                                                            <option value="0">انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ"
                                                                                    data-right-side="SD" value="HZ">هزار
                                                                                تومان
                                                                            </option>
                                                                            <option data-left-side="MI"
                                                                                    data-right-side="HZ" value="MI">
                                                                                میلیون تومان
                                                                            </option>
                                                                            <option data-left-side="ML"
                                                                                    data-right-side="MI" value="ML">
                                                                                میلیارد تومان
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputGoodsNowTimePrice">
                                                                    ارزش حدودی کل سهام درحال حاضر :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputGoodsNowTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputGoodsNowTimePrice ">صد
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputGoodsNowTimePrice"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputGoodsNowTimePrice">هزار
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg"
                                                                                name="inputGoodsNowTimePrice"
                                                                                id="inputGoodsNowTimePrice">
                                                                            <option value="0">انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ"
                                                                                    data-right-side="SD" value="HZ">هزار
                                                                                تومان
                                                                            </option>
                                                                            <option data-left-side="MI"
                                                                                    data-right-side="HZ" value="MI">
                                                                                میلیون تومان
                                                                            </option>
                                                                            <option data-left-side="ML"
                                                                                    data-right-side="MI" value="ML">
                                                                                میلیارد تومان
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputGoodsOwnershipPercent">
                                                                    درصد سهم از مالکیت :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <input type="number" name="inputGoodsOwnershipPercent"
                                                                       id="inputGoodsOwnershipPercent"
                                                                       class="form-control"
                                                                       placeholder="سهم از ملک 1 تا 6 دانگ"
                                                                       min="0" max="6"/>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputRealEstateOwnershipType">
                                                                    نحوه مالکیت
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputRealEstateOwnershipType"
                                                                        id="inputRealEstateOwnershipType">
                                                                    <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value) { ?>
                                                                        <option
                                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="LeftPaneAction">
                                                <div class="row form-group">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <button
                                                                class="btn btn-block btn-lg CommonButtons waves-effect"
                                                                data-target="Goods"
                                                                data-role="Child">
                                                            ثبت
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Translate -->

                                    <!--Translate -->
                                    <div class="col-md-12 col-xs-12">
                                        <div class="panel panel-default LeftPanelShadow">
                                            <div class="panel-heading">
                                                حقوق مالکیت معنوی
                                                <span class="add-form fa fa-plus"></span>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                        <hr>
                                                        <form id="form-Fee">
                                                            <span class="divider"></span>
                                                            <?php foreach ($finance['Fee'] as $item) {
                                                                if ($item['ForWho'] == 'Child') { ?>
                                                                    <div class="col-md-12 col-xs-12 padding-0 form">
                                                                        <span class="remove-form fa fa-times"></span>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputFeeType">عنوان :</label>
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputFeeType"
                                                                                    id="inputFeeType">
                                                                                <?php foreach ($EnumResumeProfile['FeeType'] as $key => $value) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['FeeType'], $key); ?>
                                                                                            value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputFeeOwnershipStartDate">
                                                                                سال شروع مالکیت
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputFeeOwnershipStartDate"
                                                                                    id="inputFeeOwnershipStartDate"
                                                                                    style="font-family: tahoma;">
                                                                                <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                                    <option
                                                                                        <?php setOptionSelected($item['FeeOwnershipStartDate'], $i); ?>
                                                                                            value="<?php echo $i; ?>">
                                                                                        <?php echo $i; ?>
                                                                                    </option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputFeePercent">
                                                                                درصد سهم از مالکیت معنوی:
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <input
                                                                                <?php setInputValue($item['FeePercent']); ?>
                                                                                    type="number" name="inputFeePercent"
                                                                                    id="inputFeePercent"
                                                                                    class="form-control"
                                                                                    placeholder="سهم از ملک 1 تا 6 دانگ"/>
                                                                        </div>
                                                                        <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                            <label for="inputFeeAverageInYear">
                                                                                میزان درآمد متوسط سالیانه از مالکیت
                                                                                معنوی :
                                                                                <span class="text-danger"></span>
                                                                            </label>
                                                                            <div class="row">
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['FeeAverageInYear'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputFeeAverageInYear"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputFeeAverageInYear ">صد
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                                    <input
                                                                                        <?php setInputValue(splitPrice($item['FeeAverageInYear'])['right']); ?>
                                                                                            type="number"
                                                                                            name="inputFeeAverageInYear"
                                                                                            class="form-control"
                                                                                            placeholder=""
                                                                                            min="0"/>
                                                                                    <label for="inputFeeAverageInYear">هزار
                                                                                        تومان</label>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                                    <select class="form-control form-control-lg"
                                                                                            name="inputFeeAverageInYear"
                                                                                            id="inputFeeAverageInYear">
                                                                                        <option value="0">انتخاب کنید ---</option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['FeeAverageInYear'])['unit']) == "HZ") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="HZ"
                                                                                                data-right-side="SD"
                                                                                                value="HZ">هزار تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['FeeAverageInYear'])['unit']) == "MI") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="MI"
                                                                                                data-right-side="HZ"
                                                                                                value="MI">میلیون تومان
                                                                                        </option>
                                                                                        <option
                                                                                            <?php
                                                                                            if ((splitPrice($item['FeeAverageInYear'])['unit']) == "ML") {
                                                                                                echo "selected";
                                                                                            }
                                                                                            ?>
                                                                                                data-left-side="ML"
                                                                                                data-right-side="MI"
                                                                                                value="ML">میلیارد تومان
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php }
                                                            } ?>
                                                        </form>
                                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                                            <span class="remove-form fa fa-times"></span>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputFeeType">
                                                                    عنوان :
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputFeeType"
                                                                        id="inputFeeType">
                                                                    <?php foreach ($EnumResumeProfile['FeeType'] as $key => $value) { ?>
                                                                        <option
                                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputFeeOwnershipStartDate">
                                                                    سال شروع مالکیت
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg"
                                                                        name="inputFeeOwnershipStartDate"
                                                                        id="inputFeeOwnershipStartDate"
                                                                        style="font-family: tahoma;">
                                                                    <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                        <option
                                                                            <?php if ($i == 1398) echo "selected"; ?>
                                                                                value="<?php echo $i; ?>">
                                                                            <?php echo $i; ?>
                                                                        </option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputFeePercent">
                                                                    درصد سهم از مالکیت معنوی:
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <input type="number" name="inputFeePercent"
                                                                       id="inputFeePercent"
                                                                       class="form-control"
                                                                       placeholder="سهم از ملک 1 تا 6 دانگ"/>
                                                            </div>
                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputFeeAverageInYear">
                                                                    میزان درآمد متوسط سالیانه از مالکیت معنوی :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputFeeAverageInYear"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputFeeAverageInYear ">صد
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputFeeAverageInYear"
                                                                                class="form-control"
                                                                                placeholder=""
                                                                                min="0"/>
                                                                        <label for="inputFeeAverageInYear">هزار
                                                                            تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg"
                                                                                name="inputFeeAverageInYear"
                                                                                id="inputFeeAverageInYear">
                                                                            <option value="0">انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ"
                                                                                    data-right-side="SD" value="HZ">هزار
                                                                                تومان
                                                                            </option>
                                                                            <option data-left-side="MI"
                                                                                    data-right-side="HZ" value="MI">
                                                                                میلیون تومان
                                                                            </option>
                                                                            <option data-left-side="ML"
                                                                                    data-right-side="MI" value="ML">
                                                                                میلیارد تومان
                                                                            </option>
                                                                        </select>
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
                                                        <button
                                                                class="btn btn-block btn-lg CommonButtons waves-effect"
                                                                data-target="Fee"
                                                                data-role="Child">
                                                            ثبت
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Translate -->

                                    <!--Translate -->
                                    <div class="col-md-12 col-xs-12">
                                        <div class="panel panel-default LeftPanelShadow">
                                            <div class="panel-heading">
                                                در آمد
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                        <hr>
                                                        <form id="form-AverageMonthIncome">
                                                            <span class="divider"></span>
                                                            <div class="col-md-12 col-xs-12 padding-0 form">
                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                    <?php
                                                                    $income['AverageMonthIncome'] = "0.0 HZ";
                                                                    foreach ($finance['Income'] as $item) {
                                                                        if($item['ForWho'] == 'Child'){
                                                                            $income = $item;
                                                                        }
                                                                    }
                                                                    ?>
                                                                    <label for="inputAverageMonthIncome">
                                                                        درآمد متوسط ماهیانه :
                                                                        <span class="text-danger"></span>
                                                                    </label>
                                                                    <div class="row">
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($income['AverageMonthIncome'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputAverageMonthIncome"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0"/>
                                                                            <label for="inputAverageMonthIncome ">صد
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($income['AverageMonthIncome'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputAverageMonthIncome"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0"/>
                                                                            <label for="inputAverageMonthIncome">هزار
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputAverageMonthIncome"
                                                                                    id="inputAverageMonthIncome">
                                                                                <option value="0">انتخاب کنید ---</option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($income['AverageMonthIncome'])['unit']) == "HZ") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="HZ"
                                                                                        data-right-side="SD"
                                                                                        value="HZ">هزار تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($income['AverageMonthIncome'])['unit']) == "MI") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="MI"
                                                                                        data-right-side="HZ"
                                                                                        value="MI">میلیون تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($income['AverageMonthIncome'])['unit']) == "ML") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="ML"
                                                                                        data-right-side="MI"
                                                                                        value="ML">میلیارد تومان
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="LeftPaneAction">
                                                <div class="row form-group">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <button
                                                                class="btn btn-block btn-lg CommonButtons waves-effect"
                                                                data-target="AverageMonthIncome"
                                                                data-role="Child">
                                                            ثبت
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Translate -->

                                    <!-- Conference -->
                                    <div class="col-md-12 col-xs-12">
                                        <div class="panel panel-default LeftPanelShadow">
                                            <div class="panel-heading">
                                                شفاف سازی هزینه های انتخاباتی
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                        <hr>
                                                        <form id="form-Election">
                                                            <span class="divider"></span>
                                                            <?php
                                                            $election['ElectionPlacePrice'] = "0.0 HZ";
                                                            $election['ElectionFlockPrice'] = "0.0 HZ";
                                                            $election['ElectionAdvertisePrice'] = "0.0 HZ";
                                                            $election['ElectionStaffPrice'] = "0.0 HZ";
                                                            $election['ElectionAllPrice'] = "0.0 HZ";
                                                            foreach ($finance['Election'] as $item) {
                                                                if($item['ForWho'] == 'Child'){
                                                                    $election = $item;
                                                                }
                                                            }
                                                            ?>
                                                            <div class="col-md-12 col-xs-12 padding-0 form">
                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                    <label for="inputElectionPlacePrice">
                                                                        هزینه دایرکردن محل ستاد انتخابات (اجاره بها ,
                                                                        حملو نقل و سایر موارد)
                                                                        -هزینه کل :
                                                                        <span class="text-danger"></span>
                                                                    </label>
                                                                    <div class="row">
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($election['ElectionPlacePrice'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputElectionPlacePrice"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0" max="6"/>
                                                                            <label for="inputElectionPlacePrice ">صد
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($election['ElectionPlacePrice'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputElectionPlacePrice"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0" max="6"/>
                                                                            <label for="inputElectionPlacePrice">هزار
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputElectionPlacePrice"
                                                                                    id="inputElectionPlacePrice">
                                                                                <option value="0">انتخاب کنید ---</option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionPlacePrice'])['unit']) == "HZ") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="HZ"
                                                                                        data-right-side="SD"
                                                                                        value="HZ">هزار تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionPlacePrice'])['unit']) == "MI") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="MI"
                                                                                        data-right-side="HZ"
                                                                                        value="MI">میلیون تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionPlacePrice'])['unit']) == "ML") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="ML"
                                                                                        data-right-side="MI"
                                                                                        value="ML">میلیارد تومان
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                    <label for="inputElectionFlockPrice">
                                                                        هزینه برپایی تجمعات عمومی مرتبط با اهداف
                                                                        انتخاباتی – هزینه کل :
                                                                        <span class="text-danger"></span>
                                                                    </label>
                                                                    <div class="row">
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($election['ElectionFlockPrice'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputElectionFlockPrice"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0"/>
                                                                            <label for="inputElectionFlockPrice ">صد
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($election['ElectionFlockPrice'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputElectionFlockPrice"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0"/>
                                                                            <label for="inputElectionFlockPrice">هزار
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputElectionFlockPrice"
                                                                                    id="inputElectionFlockPrice">
                                                                                <option value="0">انتخاب کنید ---</option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionFlockPrice'])['unit']) == "HZ") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="HZ"
                                                                                        data-right-side="SD"
                                                                                        value="HZ">هزار تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionFlockPrice'])['unit']) == "MI") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="MI"
                                                                                        data-right-side="HZ"
                                                                                        value="MI">میلیون تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionFlockPrice'])['unit']) == "ML") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="ML"
                                                                                        data-right-side="MI"
                                                                                        value="ML">میلیارد تومان
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                    <label for="inputElectionAdvertisePrice">
                                                                        هزینه تبلیغات مجاز در رسانه ها – هزینه کل :
                                                                        <span class="text-danger"></span>
                                                                    </label>
                                                                    <div class="row">
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($election['ElectionAdvertisePrice'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputElectionAdvertisePrice"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0"/>
                                                                            <label for="inputElectionAdvertisePrice ">صد
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($election['ElectionAdvertisePrice'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputElectionAdvertisePrice"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0"/>
                                                                            <label for="inputElectionAdvertisePrice">هزار
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputElectionAdvertisePrice"
                                                                                    id="inputElectionAdvertisePrice">
                                                                                <option value="0">انتخاب کنید ---</option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionAdvertisePrice'])['unit']) == "HZ") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="HZ"
                                                                                        data-right-side="SD"
                                                                                        value="HZ">هزار تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionAdvertisePrice'])['unit']) == "MI") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="MI"
                                                                                        data-right-side="HZ"
                                                                                        value="MI">میلیون تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionAdvertisePrice'])['unit']) == "ML") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="ML"
                                                                                        data-right-side="MI"
                                                                                        value="ML">میلیارد تومان
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                    <label for="inputElectionStaffPrice">
                                                                        هزینه و حق الزحمه عوامل اجرایی و کارشناسی در
                                                                        انتخابات – هزینه کل :
                                                                        <span class="text-danger"></span>
                                                                    </label>
                                                                    <div class="row">
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($election['ElectionStaffPrice'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputElectionStaffPrice"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0"/>
                                                                            <label for="inputElectionStaffPrice ">صد
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($election['ElectionStaffPrice'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputElectionStaffPrice"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0"/>
                                                                            <label for="inputElectionStaffPrice">هزار
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputElectionStaffPrice"
                                                                                    id="inputElectionStaffPrice">
                                                                                <option value="0">انتخاب کنید ---</option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionStaffPrice'])['unit']) == "HZ") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="HZ"
                                                                                        data-right-side="SD"
                                                                                        value="HZ">هزار تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionStaffPrice'])['unit']) == "MI") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="MI"
                                                                                        data-right-side="HZ"
                                                                                        value="MI">میلیون تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionStaffPrice'])['unit']) == "ML") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="ML"
                                                                                        data-right-side="MI"
                                                                                        value="ML">میلیارد تومان
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                    <label for="inputElectionAllPrice">
                                                                        جمع کل هزینه های انتخاباتی :
                                                                        <span class="text-danger"></span>
                                                                    </label>
                                                                    <div class="row">
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($election['ElectionAllPrice'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputElectionAllPrice"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0"/>
                                                                            <label for="inputElectionAllPrice ">صد
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                            <input
                                                                                <?php setInputValue(splitPrice($election['ElectionAllPrice'])['right']); ?>
                                                                                    type="number"
                                                                                    name="inputElectionAllPrice"
                                                                                    class="form-control"
                                                                                    placeholder=""
                                                                                    min="0"/>
                                                                            <label for="inputElectionAllPrice">هزار
                                                                                تومان</label>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                            <select class="form-control form-control-lg"
                                                                                    name="inputElectionAllPrice"
                                                                                    id="inputElectionAllPrice">
                                                                                <option value="0">انتخاب کنید ---</option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionAllPrice'])['unit']) == "HZ") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="HZ"
                                                                                        data-right-side="SD"
                                                                                        value="HZ">هزار تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionAllPrice'])['unit']) == "MI") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="MI"
                                                                                        data-right-side="HZ"
                                                                                        value="MI">میلیون تومان
                                                                                </option>
                                                                                <option
                                                                                    <?php
                                                                                    if ((splitPrice($election['ElectionAllPrice'])['unit']) == "ML") {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>
                                                                                        data-left-side="ML"
                                                                                        data-right-side="MI"
                                                                                        value="ML">میلیارد تومان
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="LeftPaneAction">
                                                <div class="row form-group">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <button class="btn btn-block btn-lg CommonButtons waves-effect"
                                                                data-target="Election"
                                                                data-role="Child">
                                                            ثبت
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Conference -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>