<?php
$_DIR = base_url('assets/ui/v3/');
?>
<div class="container container-wrapper" style="background: none;">

    <?php echo $resumeSidebar; ?>
    <div class="col-xs-12 col-md-9 pull-right response-padding">
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
                                        <form id="form-books">
                                            <span class="divider"></span>
                                        </form>
                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                            <span class="remove-form fa fa-times"></span>
                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="inputRealEstateType">
                                                    نوع کاربری
                                                    <span class="text-danger">
                                             </span>
                                                </label>
                                                <select class="form-control form-control-lg city-select"
                                                        name="inputRealEstateType"
                                                        id="inputRealEstateType">
                                                    <?php foreach ($EnumResumeProfile['RealEstateType'] as $key => $value){ ?>
                                                        <option
                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="inputRealEstateOwnershipDate">
                                                    سال شروع مالکیت
                                                    <span class="text-danger">
                                             </span>
                                                </label>
                                                <select class="form-control form-control-lg city-select"
                                                        name="inputRealEstateOwnershipDate"  id="inputRealEstateOwnershipDate"  style="font-family: tahoma;">
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
                                                        class="form-control form-control-lg city-select"
                                                        name="inputRealEstateOwnershipType"
                                                        id="inputRealEstateOwnershipType">
                                                    <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value){ ?>
                                                        <option
                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat">
                                                <label for="inputRealEstateCountryId">کشور</label>
                                                <select class="form-control form-control-lg state-select" name="inputRealEstateCountryId"
                                                        id="inputRealEstateCountryId">
                                                    <option value="">-- انتخاب کنید --</option>
                                                    <?php foreach ($countries as $item){ ?>
                                                    <option
                                                            <?php if($item['ISO'] =='IR') echo "selected"; ?>
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
                                                    <option value="">-- انتخاب کنید --</option>
                                                    <option value="">-- انتخاب کنید --</option>
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
                                                <select class="form-control form-control-lg state-select"
                                                        name="inputRealEstateCityId"
                                                        id="inputRealEstateCityId">
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="inputRealEstatePortion">
                                                    سهم از ملک(1 تا 6 دانگ)
                                                    <span class="text-danger"></span>
                                                </label>
                                                <input type="number" name="inputRealEstatePortion" id="inputRealEstatePortion"
                                                       class="form-control" placeholder="سهم از ملک 1 تا 6 دانگ"/>
                                            </div>
                                            <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="inputRealEstateExtent">
                                                    متراژ حدودی ملک
                                                    <span class="text-danger"></span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-md-6 col-xs-12 RightFloat">
                                                        <input type="number" name="inputRealEstateExtentUnit"
                                                               id="inputRealEstateExtentUnit" class="form-control"
                                                               placeholder=""/>
                                                    </div>
                                                    <div class="col-md-6 col-xs-12 RightFloat">
                                                        <select class="form-control form-control-lg city-select"
                                                                name="inputRealEstateExtentUnit"
                                                                id="inputRealEstateExtentUnit">
                                                            <?php foreach ($EnumResumeProfile['Extent'] as $key => $value){ ?>
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
                                                                name="inputRealEstateBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="inputRealEstateBuyTimePrice ">صد تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                        <input
                                                                type="number"
                                                                name="inputRealEstateBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="inputRealEstateBuyTimePrice">هزار تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                        <select class="form-control form-control-lg state-select"
                                                                name="inputRealEstateBuyTimePrice"
                                                                id="inputRealEstateBuyTimePrice">
                                                            <option>انتخاب کنید ---</option>
                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
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
                                                                name="inputRealEstateNowTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="inputRealEstateNowTimePrice ">صد تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                        <input
                                                                type="number"
                                                                name="inputRealEstateNowTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="inputRealEstateNowTimePrice">هزار تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                        <select class="form-control form-control-lg state-select"
                                                                name="inputRealEstateNowTimePrice"
                                                                id="inputRealEstateNowTimePrice">
                                                            <option>انتخاب کنید ---</option>
                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group RightFloat">
                                                <label for="inputRealEstateAddress">
                                                    آدرس
                                                    </span>
                                                </label>
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
                                        <button class="btn btn-block btn-lg CommonButtons waves-effect"
                                                id="updateProfileBooks">
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
                                        <form id="form-articles">
                                            <span class="divider"></span>
                                        </form>
                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                            <span class="remove-form fa fa-times"></span>
                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="inputVehicleType">
                                                    نوع وسیله نقلیه
                                                    <span class="text-danger">
                                             </span>
                                                </label>
                                                <select class="form-control form-control-lg city-select"
                                                        name="inputVehicleType"
                                                        id="inputVehicleType">
                                                    <?php foreach ($EnumResumeProfile['TypeOfVehicle'] as $key => $value){ ?>
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
                                                <select class="form-control form-control-lg city-select"
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
                                                <select class="form-control form-control-lg city-select"
                                                        name="inputVehicleOwnershipType"
                                                        id="inputVehicleOwnershipType">
                                                    <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value){ ?>
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
                                                                name="inputVehicleBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="inputVehicleBuyTimePrice ">صد تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                        <input
                                                                type="number"
                                                                name="inputVehicleBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="inputVehicleBuyTimePrice">هزار تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                        <select class="form-control form-control-lg state-select"
                                                                name="inputVehicleBuyTimePrice"
                                                                id="inputVehicleBuyTimePrice">
                                                            <option>انتخاب کنید ---</option>
                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
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
                                                                name="inputVehicleNowTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="inputVehicleNowTimePrice ">صد تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                        <input
                                                                type="number"
                                                                name="inputVehicleNowTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="inputVehicleNowTimePrice">هزار تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                        <select class="form-control form-control-lg state-select"
                                                                name="inputVehicleNowTimePrice"
                                                                id="inputVehicleNowTimePrice">
                                                            <option>انتخاب کنید ---</option>
                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="inputVehiclePortion">
                                                    سهم از ملک(1 تا 6 دانگ)
                                                    <span class="text-danger"></span>
                                                </label>
                                                <input type="number" name="inputVehiclePortion" id="inputVehiclePortion" class="form-control"
                                                       placeholder="سهم از ملک 1 تا 6 دانگ"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="LeftPaneAction">
                                <div class="row form-group">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <button class="btn btn-block btn-lg CommonButtons waves-effect"
                                                id="updateProfileArticles">
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
                                        <form id="form-research">
                                            <span class="divider"></span>
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
                                                <select class="form-control form-control-lg city-select"
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
                                                <select class="form-control form-control-lg city-select"
                                                        name="inputInvestOwnershipType"
                                                        id="inputInvestOwnershipType">
                                                    <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value){ ?>
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
                                                                name="inputInvestBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="inputInvestBuyTimePrice ">صد تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                        <input
                                                                type="number"
                                                                name="inputInvestBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="inputInvestBuyTimePrice">هزار تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                        <select class="form-control form-control-lg state-select"
                                                                name="inputInvestBuyTimePrice"
                                                                id="inputInvestBuyTimePrice">
                                                            <option>انتخاب کنید ---</option>
                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
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
                                                                name="inputInvestNowTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="inputInvestNowTimePrice ">صد تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                        <input
                                                                type="number"
                                                                name="inputInvestNowTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="inputInvestNowTimePrice">هزار تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                        <select class="form-control form-control-lg state-select"
                                                                name="inputInvestNowTimePrice"
                                                                id="inputInvestNowTimePrice">
                                                            <option>انتخاب کنید ---</option>
                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
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
                                        <button class="btn btn-block btn-lg CommonButtons waves-effect"
                                                id="updateProfileResearch">
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
                                        <form id="form-translate">
                                            <span class="divider"></span>
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
                                                                name="inputBankAccountPrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="inputBankAccountPrice ">صد تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                        <input
                                                                type="number"
                                                                name="RealEstateBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="inputBankAccountPrice">هزار تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                        <select class="form-control form-control-lg state-select"
                                                                name="inputBankAccountPrice"
                                                                id="inputBankAccountPrice">
                                                            <option>انتخاب کنید ---</option>
                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat">
                                                <label for="BankAccountCountryId">
                                                    کشور
                                                    </span>
                                                </label>
                                                <select class="form-control form-control-lg state-select"
                                                        name="inputBankAccountCountryId"
                                                        id="inputBankAccountCountryId">
                                                    <option value="">-- انتخاب کنید --</option>
                                                    <?php foreach ($countries as $item){ ?>
                                                        <option
                                                            <?php if($item['ISO'] =='IR') echo "selected"; ?>
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
                                        <button class="btn btn-block btn-lg CommonButtons waves-effect"
                                                id="updateProfileTranslation">
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
                                        <form id="form-invention">
                                            <span class="divider"></span>
                                        </form>
                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 form">
                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="inputCreditPrice">
                                                    جمع کل بستانکاری از اشخاص حقیقی یا حقوقی :
                                                    <span class="text-danger"></span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                        <input
                                                                type="number"
                                                                name="inputCreditPrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="inputCreditPrice ">صد تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                        <input
                                                                type="number"
                                                                name="inputCreditPrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="inputCreditPrice">هزار تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                        <select class="form-control form-control-lg state-select"
                                                                name="inputCreditPrice"
                                                                id="inputCreditPrice">
                                                            <option>انتخاب کنید ---</option>
                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
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
                                                                type="number"
                                                                name="inputDebotrPrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="inputDebotrPrice ">صد تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                        <input
                                                                type="number"
                                                                name="inputDebotrPrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="inputDebotrPrice">هزار تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                        <select class="form-control form-control-lg state-select"
                                                                name="inputDebotrPrice"
                                                                id="inputDebotrPrice">
                                                            <option>انتخاب کنید ---</option>
                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <textarea class="EStates-textArea" name="inputDebotrDescription"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="LeftPaneAction">
                                <div class="row form-group">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <button class="btn btn-block btn-lg CommonButtons waves-effect"
                                                id="updateProfileInvention">
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
                                        <form id="form-translate">
                                            <span class="divider"></span>
                                        </form>
                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                            <span class="remove-form fa fa-times"></span>
                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="inputGoodsType">
                                                    نوع کالا
                                                </label>
                                                <select class="form-control form-control-lg city-select"
                                                        name="inputGoodsType"
                                                        id="inputGoodsType">
                                                    <?php foreach ($EnumResumeProfile['GoodsType'] as $key => $value){ ?>
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
                                                <select class="form-control form-control-lg city-select"
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
                                                <input type="text" name="inputGoodsCount" id="inputGoodsCount"
                                                       class="form-control" placeholder="  حجم / وزن / تعداد کالا"/>
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
                                                                name="inputGoodsBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="inputGoodsBuyTimePrice ">صد تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                        <input
                                                                type="number"
                                                                name="inputGoodsBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="inputGoodsBuyTimePrice">هزار تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                        <select class="form-control form-control-lg state-select"
                                                                name="inputGoodsBuyTimePrice"
                                                                id="inputGoodsBuyTimePrice">
                                                            <option>انتخاب کنید ---</option>
                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
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
                                                                name="inputGoodsNowTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="inputGoodsNowTimePrice ">صد تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                        <input
                                                                type="number"
                                                                name="inputGoodsNowTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="inputGoodsNowTimePrice">هزار تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                        <select class="form-control form-control-lg state-select"
                                                                name="inputGoodsNowTimePrice"
                                                                id="inputGoodsNowTimePrice">
                                                            <option>انتخاب کنید ---</option>
                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
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
                                                       id="inputGoodsOwnershipPercent" class="form-control"
                                                       placeholder="سهم از ملک 1 تا 6 دانگ"/>
                                            </div>
                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="inputRealEstateOwnershipType">
                                                    نحوه مالکیت
                                                    <span class="text-danger">
                                             </span>
                                                </label>
                                                <select class="form-control form-control-lg city-select"
                                                        name="inputRealEstateOwnershipType"
                                                        id="inputRealEstateOwnershipType">
                                                    <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value){ ?>
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
                                        <button class="btn btn-block btn-lg CommonButtons waves-effect"
                                                id="updateProfileTranslation">
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
                                        <form id="form-translate">
                                            <span class="divider"></span>
                                        </form>
                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                            <span class="remove-form fa fa-times"></span>
                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="inputFeeType">
                                                    عنوان :
                                                </label>
                                                <select class="form-control form-control-lg city-select"
                                                        name="inputFeeType"
                                                        id="inputFeeType">
                                                    <?php foreach ($EnumResumeProfile['FeeType'] as $key => $value){ ?>
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
                                                <select class="form-control form-control-lg city-select"
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
                                                <input type="number" name="inputFeePercent" id="inputFeePercent"
                                                       class="form-control" placeholder="سهم از ملک 1 تا 6 دانگ"/>
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
                                                                name="inputFeeAverageInYear" class="form-control"
                                                                placeholder=""/>
                                                        <label for="inputFeeAverageInYear ">صد تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                        <input
                                                                type="number"
                                                                name="inputFeeAverageInYear" class="form-control"
                                                                placeholder=""/>
                                                        <label for="inputFeeAverageInYear">هزار تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                        <select class="form-control form-control-lg state-select"
                                                                name="inputFeeAverageInYear"
                                                                id="inputFeeAverageInYear">
                                                            <option>انتخاب کنید ---</option>
                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
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
                                        <button class="btn btn-block btn-lg CommonButtons waves-effect"
                                                id="updateProfileTranslation">
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
                                <span class="add-form fa fa-plus"></span>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                        <hr>
                                        <form id="form-translate">
                                            <span class="divider"></span>
                                        </form>
                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                            <span class="remove-form fa fa-times"></span>
                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="inputAverageMonthIncome">
                                                 درآمد متوسط ماهیانه :
                                                    <span class="text-danger"></span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                        <input
                                                                type="number"
                                                                name="inputAverageMonthIncome" class="form-control"
                                                                placeholder=""/>
                                                        <label for="inputAverageMonthIncome ">صد تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                        <input
                                                                type="number"
                                                                name="inputAverageMonthIncome" class="form-control"
                                                                placeholder=""/>
                                                        <label for="inputAverageMonthIncome">هزار تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                        <select class="form-control form-control-lg state-select"
                                                                name="inputAverageMonthIncome"
                                                                id="inputAverageMonthIncome">
                                                            <option>انتخاب کنید ---</option>
                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
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
                                        <button class="btn btn-block btn-lg CommonButtons waves-effect"
                                                id="updateProfileTranslation">
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
                                <span class="add-form fa fa-plus"></span>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                        <hr>
                                        <form id="form-conference">
                                            <span class="divider"></span>

                                        </form>
                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                            <span class="remove-form fa fa-times"></span>
                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="inputElectionPlacePrice">
                                                    هزینه دایرکردن محل ستاد انتخابات (اجاره بها , حملو نقل و سایر موارد)
                                                    -هزینه کل :
                                                    <span class="text-danger"></span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                        <input
                                                                type="number"
                                                                name="inputElectionPlacePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="inputElectionPlacePrice ">صد تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                        <input
                                                                type="number"
                                                                name="inputElectionPlacePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="inputElectionPlacePrice">هزار تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                        <select class="form-control form-control-lg state-select"
                                                                name="inputElectionPlacePrice"
                                                                id="inputElectionPlacePrice">
                                                            <option>انتخاب کنید ---</option>
                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="inputElectionFlockPrice">
                                                    هزینه برپایی تجمعات عمومی مرتبط با اهداف انتخاباتی – هزینه کل :
                                                    <span class="text-danger"></span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                        <input
                                                                type="number"
                                                                name="inputElectionFlockPrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="inputElectionFlockPrice ">صد تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                        <input
                                                                type="number"
                                                                name="inputElectionFlockPrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="inputElectionFlockPrice">هزار تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                        <select class="form-control form-control-lg state-select"
                                                                name="inputElectionFlockPrice"
                                                                id="inputElectionFlockPrice">
                                                            <option>انتخاب کنید ---</option>
                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
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
                                                                type="number"
                                                                name="inputElectionAdvertisePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="inputElectionAdvertisePrice ">صد تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                        <input
                                                                type="number"
                                                                name="inputElectionAdvertisePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="inputElectionAdvertisePrice">هزار تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                        <select class="form-control form-control-lg state-select"
                                                                name="inputElectionAdvertisePrice"
                                                                id="inputElectionAdvertisePrice">
                                                            <option>انتخاب کنید ---</option>
                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="inputElectionStaffPrice">
                                                    هزینه و حق الزحمه عوامل اجرایی و کارشناسی در انتخابات – هزینه کل :
                                                    <span class="text-danger"></span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                        <input
                                                                type="number"
                                                                name="inputElectionStaffPrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="inputElectionStaffPrice ">صد تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                        <input
                                                                type="number"
                                                                name="inputElectionStaffPrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="inputElectionStaffPrice">هزار تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                        <select class="form-control form-control-lg state-select"
                                                                name="inputElectionStaffPrice"
                                                                id="inputElectionStaffPrice">
                                                            <option>انتخاب کنید ---</option>
                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
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
                                                                type="number"
                                                                name="inputElectionAllPrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="inputElectionAllPrice ">صد تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                        <input
                                                                type="number"
                                                                name="inputElectionAllPrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="inputElectionAllPrice">هزار تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                        <select class="form-control form-control-lg state-select"
                                                                name="inputElectionAllPrice"
                                                                id="inputElectionAllPrice">
                                                            <option>انتخاب کنید ---</option>
                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
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
                                        <button class="btn btn-block btn-lg CommonButtons waves-effect"
                                                id="updateProfileConference">
                                            ثبت
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="LeftPaneAction">
                                <div class="row form-group">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <a href="<?php echo base_url('Profile/skills'); ?>">
                                            <button class="btn btn-block btn-lg CommonButtons waves-effect">
                                                مرحله بعد
                                            </button>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 prev-step">
                                        <a href="<?php echo base_url('Profile/politicBackground'); ?>">
                                            <button class="btn btn-block btn-lg waves-effect CommonButtons prev-step">
                                                مرحله قبل
                                            </button>
                                        </a>
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