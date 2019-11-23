<?php
$_DIR = base_url('assets/ui/v3/');
?>
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
                                                        <form id="form-Vehicle">
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
                                                        <form id="form-Invest">
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
                                                        <form id="form-BankAccount">
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
                                                                <label for="inputBankAccountCountryId">
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
                                                        <form id="form-Credit-Debtor">
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
                                                        <form id="form-Goods ">
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
                                                        <form id="form-Fee">
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
                                                        <form id="form-AverageMonthIncome">
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
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                        <hr>
                                                        <form id="form-Election">
                                                            <span class="divider"></span>

                                                        </form>
                                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 form">

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
                                                        </form>
                                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                                            <span class="remove-form fa fa-times"></span>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputWifeRealEstateType">
                                                                    نوع کاربری
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg city-select"
                                                                        name="inputWifeRealEstateType"
                                                                        id="inputWifeRealEstateType">
                                                                    <?php foreach ($EnumResumeProfile['RealEstateType'] as $key => $value){ ?>
                                                                        <option
                                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputWifeRealEstateOwnershipDate">
                                                                    سال شروع مالکیت
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg city-select"
                                                                        name="inputWifeRealEstateOwnershipDate"  id="inputWifeRealEstateOwnershipDate"  style="font-family: tahoma;">
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
                                                                <label for="inputWifeRealEstateOwnershipType">
                                                                    نحوه مالکیت
                                                                </label>
                                                                <select
                                                                        class="form-control form-control-lg city-select"
                                                                        name="inputWifeRealEstateOwnershipType"
                                                                        id="inputWifeRealEstateOwnershipType">
                                                                    <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value){ ?>
                                                                        <option
                                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat">
                                                                <label for="inputWifeRealEstateCountryId">کشور</label>
                                                                <select class="form-control form-control-lg state-select" name="inputWifeRealEstateCountryId"
                                                                        id="inputWifeRealEstateCountryId">
                                                                    <option value="">-- انتخاب کنید --</option>
                                                                    <?php foreach ($countries as $item){ ?>
                                                                        <option
                                                                            <?php if($item['ISO'] =='IR') echo "selected"; ?>
                                                                                value="<?php echo $item['CountryId']; ?>"><?php echo $item['FaName']; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv">
                                                                <label for="inputWifeRealEstateStateId">
                                                                    استان
                                                                </label>
                                                                <select class="form-control form-control-lg state-select"
                                                                        name="inputWifeRealEstateStateId"
                                                                        id="inputWifeRealEstateStateId">
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
                                                                <label for="inputWifeRealEstateCityId">
                                                                    شهر
                                                                </label>
                                                                <select class="form-control form-control-lg state-select"
                                                                        name="inputWifeRealEstateCityId"
                                                                        id="inputWifeRealEstateCityId">
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputWifeRealEstatePortion">
                                                                    سهم از ملک(1 تا 6 دانگ)
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <input type="number" name="inputWifeRealEstatePortion" id="inputWifeRealEstatePortion"
                                                                       class="form-control" placeholder="سهم از ملک 1 تا 6 دانگ"/>
                                                            </div>
                                                            <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputWifeRealEstateExtent">
                                                                    متراژ حدودی ملک
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-6 col-xs-12 RightFloat">
                                                                        <input type="number" name="inputWifeRealEstateExtentUnit"
                                                                               id="inputWifeRealEstateExtentUnit" class="form-control"
                                                                               placeholder=""/>
                                                                    </div>
                                                                    <div class="col-md-6 col-xs-12 RightFloat">
                                                                        <select class="form-control form-control-lg city-select"
                                                                                name="inputWifeRealEstateExtentUnit"
                                                                                id="inputWifeRealEstateExtentUnit">
                                                                            <?php foreach ($EnumResumeProfile['Extent'] as $key => $value){ ?>
                                                                                <option
                                                                                        value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputWifeRealEstateBuyTimePrice">
                                                                    ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputWifeRealEstateBuyTimePrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputWifeRealEstateBuyTimePrice ">صد تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputWifeRealEstateBuyTimePrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputWifeRealEstateBuyTimePrice">هزار تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg state-select"
                                                                                name="inputWifeRealEstateBuyTimePrice"
                                                                                id="inputWifeRealEstateBuyTimePrice">
                                                                            <option>انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputWifeRealEstateNowTimePrice">
                                                                    ارزش حدودی کل سهام درحال حاضر :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputWifeRealEstateNowTimePrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputWifeRealEstateNowTimePrice ">صد تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputWifeRealEstateNowTimePrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputWifeRealEstateNowTimePrice">هزار تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg state-select"
                                                                                name="inputWifeRealEstateNowTimePrice"
                                                                                id="inputWifeRealEstateNowTimePrice">
                                                                            <option>انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group RightFloat">
                                                                <label for="inputWifeRealEstateAddress">
                                                                    آدرس
                                                                    </span>
                                                                </label>
                                                                <input id="inputWifeRealEstateAddress" type="text"
                                                                       name="inputWifeRealEstateAddress"
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
                                                        <form id="form-Vehicle">
                                                            <span class="divider"></span>
                                                        </form>
                                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                                            <span class="remove-form fa fa-times"></span>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputWifeVehicleType">
                                                                    نوع وسیله نقلیه
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg city-select"
                                                                        name="inputWifeVehicleType"
                                                                        id="inputWifeVehicleType">
                                                                    <?php foreach ($EnumResumeProfile['TypeOfVehicle'] as $key => $value){ ?>
                                                                        <option
                                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputWifeVehicleOwnershipDate">
                                                                    سال شروع مالکیت
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg city-select"
                                                                        name="inputWifeVehicleOwnershipDate"
                                                                        id="inputWifeVehicleOwnershipDate"
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
                                                                <label for="inputWifeVehicleOwnershipType">
                                                                    نحوه مالکیت
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg city-select"
                                                                        name="inputWifeVehicleOwnershipType"
                                                                        id="inputWifeVehicleOwnershipType">
                                                                    <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value){ ?>
                                                                        <option
                                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputWifeVehicleBuyTimePrice">
                                                                    ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputWifeVehicleBuyTimePrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputWifeVehicleBuyTimePrice ">صد تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputWifeVehicleBuyTimePrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputWifeVehicleBuyTimePrice">هزار تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg state-select"
                                                                                name="inputWifeVehicleBuyTimePrice"
                                                                                id="inputWifeVehicleBuyTimePrice">
                                                                            <option>انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputWifeVehicleNowTimePrice">
                                                                    ارزش حدودی کل سهام درحال حاضر :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputWifeVehicleNowTimePrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputWifeVehicleNowTimePrice ">صد تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputWifeVehicleNowTimePrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputWifeVehicleNowTimePrice">هزار تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg state-select"
                                                                                name="inputWifeVehicleNowTimePrice"
                                                                                id="inputWifeVehicleNowTimePrice">
                                                                            <option>انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputWifeVehiclePortion">
                                                                    سهم از ملک(1 تا 6 دانگ)
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <input type="number" name="inputWifeVehiclePortion" id="inputWifeVehiclePortion" class="form-control"
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
                                                        <form id="form-Invest">
                                                            <span class="divider"></span>
                                                        </form>
                                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                                            <span class="remove-form fa fa-times"></span>
                                                            <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                <label for="inputWifeInvestTitle">
                                                                    نام شرکت / موسسه
                                                                </label>
                                                                <input id="inputInvestTitle" type="text"
                                                                       name="inputWifeInvestTitle"
                                                                       placeholder="نام شرکت - موسسه - پروژه ">
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputWifeInvestDate">
                                                                    سال شروع مالکیت
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg city-select"
                                                                        name="inputWifeInvestDate"
                                                                        id="inputWifeInvestDate"
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
                                                                <label for="inputWifeInvestOwnershipType">
                                                                    نحوه مالکیت
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg city-select"
                                                                        name="inputWifeInvestOwnershipType"
                                                                        id="inputWifeInvestOwnershipType">
                                                                    <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value){ ?>
                                                                        <option
                                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputWifeInvestBuyTimePrice">
                                                                    ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputWifeInvestBuyTimePrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputWifeInvestBuyTimePrice ">صد تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputWifeInvestBuyTimePrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputWifeInvestBuyTimePrice">هزار تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg state-select"
                                                                                name="inputWifeInvestBuyTimePrice"
                                                                                id="inputWifeInvestBuyTimePrice">
                                                                            <option>انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputWifeInvestNowTimePrice">
                                                                    ارزش حدودی کل سهام درحال حاضر :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputWifeInvestNowTimePrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputWifeInvestNowTimePrice ">صد تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputWifeInvestNowTimePrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputWifeInvestNowTimePrice">هزار تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg state-select"
                                                                                name="inputWifeInvestNowTimePrice"
                                                                                id="inputWifeInvestNowTimePrice">
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
                                                        <form id="form-BankAccount">
                                                            <span class="divider"></span>
                                                        </form>
                                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                                            <span class="remove-form fa fa-times"></span>
                                                            <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                <label for="inputWifeBankAccountTitle">
                                                                    عنوان بانک یا موسسه
                                                                </label>
                                                                <input id="inputWifeBankAccountTitle" type="text"
                                                                       name="inputWifeBankAccountTitle"
                                                                       placeholder="عنوان بانک یا موسسه ">
                                                            </div>
                                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputWifeBankAccountPrice">
                                                                    مبلغ :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputWifeBankAccountPrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputWifeBankAccountPrice ">صد تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputWifeBankAccountPrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputWifeBankAccountPrice">هزار تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg state-select"
                                                                                name="inputWifeBankAccountPrice"
                                                                                id="inputWifeBankAccountPrice">
                                                                            <option>انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat">
                                                                <label for="inputWifeBankAccountCountryId">
                                                                    کشور
                                                                    </span>
                                                                </label>
                                                                <select class="form-control form-control-lg state-select"
                                                                        name="inputWifeBankAccountCountryId"
                                                                        id="inputWifeBankAccountCountryId">
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
                                                        <form id="form-Credit-Debtor">
                                                            <span class="divider"></span>
                                                        </form>
                                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 form">
                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputWifeCreditPrice">
                                                                    جمع کل بستانکاری از اشخاص حقیقی یا حقوقی :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputWifeCreditPrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputWifeCreditPrice ">صد تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputWifeCreditPrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputWifeCreditPrice">هزار تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg state-select"
                                                                                name="inputWifeCreditPrice"
                                                                                id="inputWifeCreditPrice">
                                                                            <option>انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputWifeDebotrPrice">
                                                                    جمع کل بدهکاری از اشخاص حقیقی یا حقوقی :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputWifeDebotrPrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputWifeDebotrPrice ">صد تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputWifeDebotrPrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputWifeDebotrPrice">هزار تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg state-select"
                                                                                name="inputWifeDebotrPrice"
                                                                                id="inputWifeDebotrPrice">
                                                                            <option>انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <textarea class="EStates-textArea" name="inputWifeDebotrDescription"></textarea>
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
                                                        <form id="form-Goods ">
                                                            <span class="divider"></span>
                                                        </form>
                                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                                            <span class="remove-form fa fa-times"></span>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputWifeGoodsType">
                                                                    نوع کالا
                                                                </label>
                                                                <select class="form-control form-control-lg city-select"
                                                                        name="inputWifeGoodsType"
                                                                        id="inputWifeGoodsType">
                                                                    <?php foreach ($EnumResumeProfile['GoodsType'] as $key => $value){ ?>
                                                                        <option
                                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputWifeGoodsOwnershipStartDate">
                                                                    سال شروع مالکیت
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg city-select"
                                                                        name="inputWifeGoodsOwnershipStartDate"
                                                                        id="inputWifeGoodsOwnershipStartDate"
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
                                                                <label for="inputWifeGoodsCount">
                                                                    حجم / وزن / تعداد کالا
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <input type="text" name="inputWifeGoodsCount" id="inputWifeGoodsCount"
                                                                       class="form-control" placeholder="  حجم / وزن / تعداد کالا"/>
                                                            </div>
                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputWifeGoodsBuyTimePrice">
                                                                    ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputWifeGoodsBuyTimePrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputWifeGoodsBuyTimePrice ">صد تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputWifeGoodsBuyTimePrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputWifeGoodsBuyTimePrice">هزار تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg state-select"
                                                                                name="inputWifeGoodsBuyTimePrice"
                                                                                id="inputWifeGoodsBuyTimePrice">
                                                                            <option>انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputWifeGoodsNowTimePrice">
                                                                    ارزش حدودی کل سهام درحال حاضر :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputWifeGoodsNowTimePrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputWifeGoodsNowTimePrice ">صد تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputWifeGoodsNowTimePrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputWifeGoodsNowTimePrice">هزار تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg state-select"
                                                                                name="inputWifeGoodsNowTimePrice"
                                                                                id="inputWifeGoodsNowTimePrice">
                                                                            <option>انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputWifeGoodsOwnershipPercent">
                                                                    درصد سهم از مالکیت :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <input type="number" name="inputWifeGoodsOwnershipPercent"
                                                                       id="inputWifeGoodsOwnershipPercent" class="form-control"
                                                                       placeholder="سهم از ملک 1 تا 6 دانگ"/>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputWifeRealEstateOwnershipType">
                                                                    نحوه مالکیت
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg city-select"
                                                                        name="inputWifeRealEstateOwnershipType"
                                                                        id="inputWifeRealEstateOwnershipType">
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
                                                        <form id="form-Fee">
                                                            <span class="divider"></span>
                                                        </form>
                                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                                            <span class="remove-form fa fa-times"></span>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputWifeFeeType">
                                                                    عنوان :
                                                                </label>
                                                                <select class="form-control form-control-lg city-select"
                                                                        name="inputWifeFeeType"
                                                                        id="inputWifeFeeType">
                                                                    <?php foreach ($EnumResumeProfile['FeeType'] as $key => $value){ ?>
                                                                        <option
                                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputWifeFeeOwnershipStartDate">
                                                                    سال شروع مالکیت
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg city-select"
                                                                        name="inputWifeFeeOwnershipStartDate"
                                                                        id="inputWifeFeeOwnershipStartDate"
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
                                                                <label for="inputWifeFeePercent">
                                                                    درصد سهم از مالکیت معنوی:
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <input type="number" name="inputWifeFeePercent" id="inputWifeFeePercent"
                                                                       class="form-control" placeholder="سهم از ملک 1 تا 6 دانگ"/>
                                                            </div>
                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputWifeFeeAverageInYear">
                                                                    میزان درآمد متوسط سالیانه از مالکیت معنوی :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputWifeFeeAverageInYear" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputWifeFeeAverageInYear ">صد تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputWifeFeeAverageInYear" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputWifeFeeAverageInYear">هزار تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg state-select"
                                                                                name="inputWifeFeeAverageInYear"
                                                                                id="inputWifeFeeAverageInYear">
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
                                                        <form id="form-AverageMonthIncome">
                                                            <span class="divider"></span>
                                                        </form>
                                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                                            <span class="remove-form fa fa-times"></span>
                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputWifeAverageMonthIncome">
                                                                    درآمد متوسط ماهیانه :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputWifeAverageMonthIncome" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputWifeAverageMonthIncome ">صد تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputWifeAverageMonthIncome" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputWifeAverageMonthIncome">هزار تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg state-select"
                                                                                name="inputWifeAverageMonthIncome"
                                                                                id="inputWifeAverageMonthIncome">
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
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                        <hr>
                                                        <form id="form-Election">
                                                            <span class="divider"></span>

                                                        </form>
                                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 form">

                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputWifeElectionPlacePrice">
                                                                    هزینه دایرکردن محل ستاد انتخابات (اجاره بها , حملو نقل و سایر موارد)
                                                                    -هزینه کل :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputWifeElectionPlacePrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputWifeElectionPlacePrice ">صد تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputWifeElectionPlacePrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputWifeElectionPlacePrice">هزار تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg state-select"
                                                                                name="inputWifeElectionPlacePrice"
                                                                                id="inputWifeElectionPlacePrice">
                                                                            <option>انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputWifeElectionFlockPrice">
                                                                    هزینه برپایی تجمعات عمومی مرتبط با اهداف انتخاباتی – هزینه کل :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputWifeElectionFlockPrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputWifeElectionFlockPrice ">صد تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputWifeElectionFlockPrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputWifeElectionFlockPrice">هزار تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg state-select"
                                                                                name="inputWifeElectionFlockPrice"
                                                                                id="inputWifeElectionFlockPrice">
                                                                            <option>انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputWifeElectionAdvertisePrice">
                                                                    هزینه تبلیغات مجاز در رسانه ها – هزینه کل :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputWifeElectionAdvertisePrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputWifeElectionAdvertisePrice ">صد تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputWifeElectionAdvertisePrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputWifeElectionAdvertisePrice">هزار تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg state-select"
                                                                                name="inputWifeElectionAdvertisePrice"
                                                                                id="inputWifeElectionAdvertisePrice">
                                                                            <option>انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputWifeElectionStaffPrice">
                                                                    هزینه و حق الزحمه عوامل اجرایی و کارشناسی در انتخابات – هزینه کل :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputWifeElectionStaffPrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputWifeElectionStaffPrice ">صد تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputWifeElectionStaffPrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputWifeElectionStaffPrice">هزار تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg state-select"
                                                                                name="inputWifeElectionStaffPrice"
                                                                                id="inputWifeElectionStaffPrice">
                                                                            <option>انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputWifeElectionAllPrice">
                                                                    جمع کل هزینه های انتخاباتی :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputWifeElectionAllPrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputWifeElectionAllPrice ">صد تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputWifeElectionAllPrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputWifeElectionAllPrice">هزار تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg state-select"
                                                                                name="inputWifeElectionAllPrice"
                                                                                id="inputWifeElectionAllPrice">
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
                                                        </form>
                                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                                            <span class="remove-form fa fa-times"></span>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputChildRealEstateType">
                                                                    نوع کاربری
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg city-select"
                                                                        name="inputChildRealEstateType"
                                                                        id="inputChildRealEstateType">
                                                                    <?php foreach ($EnumResumeProfile['RealEstateType'] as $key => $value){ ?>
                                                                        <option
                                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputChildRealEstateOwnershipDate">
                                                                    سال شروع مالکیت
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg city-select"
                                                                        name="inputChildRealEstateOwnershipDate"  id="inputChildRealEstateOwnershipDate"  style="font-family: tahoma;">
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
                                                                <label for="inputChildRealEstateOwnershipType">
                                                                    نحوه مالکیت
                                                                </label>
                                                                <select
                                                                        class="form-control form-control-lg city-select"
                                                                        name="inputChildRealEstateOwnershipType"
                                                                        id="inputChildRealEstateOwnershipType">
                                                                    <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value){ ?>
                                                                        <option
                                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat">
                                                                <label for="inputChildRealEstateCountryId">کشور</label>
                                                                <select class="form-control form-control-lg state-select" name="inputChildRealEstateCountryId"
                                                                        id="inputChildRealEstateCountryId">
                                                                    <option value="">-- انتخاب کنید --</option>
                                                                    <?php foreach ($countries as $item){ ?>
                                                                        <option
                                                                            <?php if($item['ISO'] =='IR') echo "selected"; ?>
                                                                                value="<?php echo $item['CountryId']; ?>"><?php echo $item['FaName']; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv">
                                                                <label for="inputChildRealEstateStateId">
                                                                    استان
                                                                </label>
                                                                <select class="form-control form-control-lg state-select"
                                                                        name="inputChildRealEstateStateId"
                                                                        id="inputChildRealEstateStateId">
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
                                                                <label for="inputChildRealEstateCityId">
                                                                    شهر
                                                                </label>
                                                                <select class="form-control form-control-lg state-select"
                                                                        name="inputChildRealEstateCityId"
                                                                        id="inputChildRealEstateCityId">
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputChildRealEstatePortion">
                                                                    سهم از ملک(1 تا 6 دانگ)
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <input type="number" name="inputChildRealEstatePortion" id="inputChildRealEstatePortion"
                                                                       class="form-control" placeholder="سهم از ملک 1 تا 6 دانگ"/>
                                                            </div>
                                                            <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputChildRealEstateExtent">
                                                                    متراژ حدودی ملک
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-6 col-xs-12 RightFloat">
                                                                        <input type="number" name="inputChildRealEstateExtentUnit"
                                                                               id="inputChildRealEstateExtentUnit" class="form-control"
                                                                               placeholder=""/>
                                                                    </div>
                                                                    <div class="col-md-6 col-xs-12 RightFloat">
                                                                        <select class="form-control form-control-lg city-select"
                                                                                name="inputChildRealEstateExtentUnit"
                                                                                id="inputChildRealEstateExtentUnit">
                                                                            <?php foreach ($EnumResumeProfile['Extent'] as $key => $value){ ?>
                                                                                <option
                                                                                        value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputChildRealEstateBuyTimePrice">
                                                                    ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputChildRealEstateBuyTimePrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputChildRealEstateBuyTimePrice ">صد تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputChildRealEstateBuyTimePrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputChildRealEstateBuyTimePrice">هزار تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg state-select"
                                                                                name="inputChildRealEstateBuyTimePrice"
                                                                                id="inputChildRealEstateBuyTimePrice">
                                                                            <option>انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputChildRealEstateNowTimePrice">
                                                                    ارزش حدودی کل سهام درحال حاضر :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputChildRealEstateNowTimePrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputChildRealEstateNowTimePrice ">صد تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputChildRealEstateNowTimePrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputChildRealEstateNowTimePrice">هزار تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg state-select"
                                                                                name="inputChildRealEstateNowTimePrice"
                                                                                id="inputChildRealEstateNowTimePrice">
                                                                            <option>انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group RightFloat">
                                                                <label for="inputChildRealEstateAddress">
                                                                    آدرس
                                                                    </span>
                                                                </label>
                                                                <input id="inputChildRealEstateAddress" type="text"
                                                                       name="inputChildRealEstateAddress"
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
                                                        <form id="form-Vehicle">
                                                            <span class="divider"></span>
                                                        </form>
                                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                                            <span class="remove-form fa fa-times"></span>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputChildVehicleType">
                                                                    نوع وسیله نقلیه
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg city-select"
                                                                        name="inputChildVehicleType"
                                                                        id="inputChildVehicleType">
                                                                    <?php foreach ($EnumResumeProfile['TypeOfVehicle'] as $key => $value){ ?>
                                                                        <option
                                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputChildVehicleOwnershipDate">
                                                                    سال شروع مالکیت
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg city-select"
                                                                        name="inputChildVehicleOwnershipDate"
                                                                        id="inputChildVehicleOwnershipDate"
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
                                                                <label for="inputChildVehicleOwnershipType">
                                                                    نحوه مالکیت
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg city-select"
                                                                        name="inputChildVehicleOwnershipType"
                                                                        id="inputChildVehicleOwnershipType">
                                                                    <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value){ ?>
                                                                        <option
                                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputChildVehicleBuyTimePrice">
                                                                    ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputChildVehicleBuyTimePrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputChildVehicleBuyTimePrice ">صد تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputChildVehicleBuyTimePrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputChildVehicleBuyTimePrice">هزار تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg state-select"
                                                                                name="inputChildVehicleBuyTimePrice"
                                                                                id="inputChildVehicleBuyTimePrice">
                                                                            <option>انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputChildVehicleNowTimePrice">
                                                                    ارزش حدودی کل سهام درحال حاضر :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputChildVehicleNowTimePrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputChildVehicleNowTimePrice ">صد تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputChildVehicleNowTimePrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputChildVehicleNowTimePrice">هزار تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg state-select"
                                                                                name="inputChildVehicleNowTimePrice"
                                                                                id="inputChildVehicleNowTimePrice">
                                                                            <option>انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputChildVehiclePortion">
                                                                    سهم از ملک(1 تا 6 دانگ)
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <input type="number" name="inputChildVehiclePortion" id="inputChildVehiclePortion" class="form-control"
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
                                                        <form id="form-Invest">
                                                            <span class="divider"></span>
                                                        </form>
                                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                                            <span class="remove-form fa fa-times"></span>
                                                            <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                <label for="inputChildInvestTitle">
                                                                    نام شرکت / موسسه
                                                                </label>
                                                                <input id="inputChildInvestTitle" type="text"
                                                                       name="inputChildInvestTitle"
                                                                       placeholder="نام شرکت - موسسه - پروژه ">
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputChildInvestDate">
                                                                    سال شروع مالکیت
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg city-select"
                                                                        name="inputChildInvestDate"
                                                                        id="inputChildInvestDate"
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
                                                                <label for="inputChildInvestOwnershipType">
                                                                    نحوه مالکیت
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg city-select"
                                                                        name="inputChildInvestOwnershipType"
                                                                        id="inputChildInvestOwnershipType">
                                                                    <?php foreach ($EnumResumeProfile['OwnershipType'] as $key => $value){ ?>
                                                                        <option
                                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputChildInvestBuyTimePrice">
                                                                    ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputChildInvestBuyTimePrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputChildInvestBuyTimePrice ">صد تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputChildInvestBuyTimePrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputChildInvestBuyTimePrice">هزار تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg state-select"
                                                                                name="inputChildInvestBuyTimePrice"
                                                                                id="inputChildInvestBuyTimePrice">
                                                                            <option>انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputChildInvestNowTimePrice">
                                                                    ارزش حدودی کل سهام درحال حاضر :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputChildInvestNowTimePrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputChildInvestNowTimePrice ">صد تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputChildInvestNowTimePrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputChildInvestNowTimePrice">هزار تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg state-select"
                                                                                name="inputChildInvestNowTimePrice"
                                                                                id="inputChildInvestNowTimePrice">
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
                                                        <form id="form-BankAccount">
                                                            <span class="divider"></span>
                                                        </form>
                                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                                            <span class="remove-form fa fa-times"></span>
                                                            <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                <label for="inputChildBankAccountTitle">
                                                                    عنوان بانک یا موسسه
                                                                </label>
                                                                <input id="inputChildBankAccountTitle" type="text"
                                                                       name="inputChildBankAccountTitle"
                                                                       placeholder="عنوان بانک یا موسسه ">
                                                            </div>
                                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputChildBankAccountPrice">
                                                                    مبلغ :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputChildBankAccountPrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputChildBankAccountPrice ">صد تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputChildBankAccountPrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputChildBankAccountPrice">هزار تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg state-select"
                                                                                name="inputChildBankAccountPrice"
                                                                                id="inputChildBankAccountPrice">
                                                                            <option>انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat">
                                                                <label for="inputChildBankAccountCountryId">
                                                                    کشور
                                                                    </span>
                                                                </label>
                                                                <select class="form-control form-control-lg state-select"
                                                                        name="inputChildBankAccountCountryId"
                                                                        id="inputChildBankAccountCountryId">
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
                                                        <form id="form-Credit-Debtor">
                                                            <span class="divider"></span>
                                                        </form>
                                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 form">
                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputChildCreditPrice">
                                                                    جمع کل بستانکاری از اشخاص حقیقی یا حقوقی :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputChildCreditPrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputChildCreditPrice ">صد تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputChildCreditPrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputChildCreditPrice">هزار تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg state-select"
                                                                                name="inputChildCreditPrice"
                                                                                id="inputChildCreditPrice">
                                                                            <option>انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputChildDebotrPrice">
                                                                    جمع کل بدهکاری از اشخاص حقیقی یا حقوقی :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputChildDebotrPrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputChildDebotrPrice ">صد تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputChildDebotrPrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputChildDebotrPrice">هزار تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg state-select"
                                                                                name="inputChildDebotrPrice"
                                                                                id="inputChildDebotrPrice">
                                                                            <option>انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <textarea class="EStates-textArea" name="inputChildDebotrDescription"></textarea>
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
                                                        <form id="form-Goods ">
                                                            <span class="divider"></span>
                                                        </form>
                                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                                            <span class="remove-form fa fa-times"></span>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputChildGoodsType">
                                                                    نوع کالا
                                                                </label>
                                                                <select class="form-control form-control-lg city-select"
                                                                        name="inputChildGoodsType"
                                                                        id="inputChildGoodsType">
                                                                    <?php foreach ($EnumResumeProfile['GoodsType'] as $key => $value){ ?>
                                                                        <option
                                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputChildGoodsOwnershipStartDate">
                                                                    سال شروع مالکیت
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg city-select"
                                                                        name="inputChildGoodsOwnershipStartDate"
                                                                        id="inputChildGoodsOwnershipStartDate"
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
                                                                <label for="inputChildGoodsCount">
                                                                    حجم / وزن / تعداد کالا
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <input type="text" name="inputChildGoodsCount" id="inputChildGoodsCount"
                                                                       class="form-control" placeholder="  حجم / وزن / تعداد کالا"/>
                                                            </div>
                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputChildGoodsBuyTimePrice">
                                                                    ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputChildGoodsBuyTimePrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputChildGoodsBuyTimePrice ">صد تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputChildGoodsBuyTimePrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputChildGoodsBuyTimePrice">هزار تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg state-select"
                                                                                name="inputChildGoodsBuyTimePrice"
                                                                                id="inputChildGoodsBuyTimePrice">
                                                                            <option>انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputChildGoodsNowTimePrice">
                                                                    ارزش حدودی کل سهام درحال حاضر :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputChildGoodsNowTimePrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputChildGoodsNowTimePrice ">صد تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputChildGoodsNowTimePrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputChildGoodsNowTimePrice">هزار تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg state-select"
                                                                                name="inputChildGoodsNowTimePrice"
                                                                                id="inputChildGoodsNowTimePrice">
                                                                            <option>انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputChildGoodsOwnershipPercent">
                                                                    درصد سهم از مالکیت :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <input type="number" name="inputChildGoodsOwnershipPercent"
                                                                       id="inputChildGoodsOwnershipPercent" class="form-control"
                                                                       placeholder="سهم از ملک 1 تا 6 دانگ"/>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputChildRealEstateOwnershipType">
                                                                    نحوه مالکیت
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg city-select"
                                                                        name="inputChildRealEstateOwnershipType"
                                                                        id="inputChildRealEstateOwnershipType">
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
                                                        <form id="form-Fee">
                                                            <span class="divider"></span>
                                                        </form>
                                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                                            <span class="remove-form fa fa-times"></span>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputChildFeeType">
                                                                    عنوان :
                                                                </label>
                                                                <select class="form-control form-control-lg city-select"
                                                                        name="inputChildFeeType"
                                                                        id="inputChildFeeType">
                                                                    <?php foreach ($EnumResumeProfile['FeeType'] as $key => $value){ ?>
                                                                        <option
                                                                                value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputChildFeeOwnershipStartDate">
                                                                    سال شروع مالکیت
                                                                    <span class="text-danger">
                                             </span>
                                                                </label>
                                                                <select class="form-control form-control-lg city-select"
                                                                        name="inputChildFeeOwnershipStartDate"
                                                                        id="inputChildFeeOwnershipStartDate"
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
                                                                <label for="inputChildFeePercent">
                                                                    درصد سهم از مالکیت معنوی:
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <input type="number" name="inputChildFeePercent" id="inputChildFeePercent"
                                                                       class="form-control" placeholder="سهم از ملک 1 تا 6 دانگ"/>
                                                            </div>
                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputChildFeeAverageInYear">
                                                                    میزان درآمد متوسط سالیانه از مالکیت معنوی :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputChildFeeAverageInYear" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputChildFeeAverageInYear ">صد تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputChildFeeAverageInYear" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputChildFeeAverageInYear">هزار تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg state-select"
                                                                                name="inputChildFeeAverageInYear"
                                                                                id="inputChildFeeAverageInYear">
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
                                                        <form id="form-AverageMonthIncome">
                                                            <span class="divider"></span>
                                                        </form>
                                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 hidden form">
                                                            <span class="remove-form fa fa-times"></span>
                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputChildAverageMonthIncome">
                                                                    درآمد متوسط ماهیانه :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputChildAverageMonthIncome" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputChildAverageMonthIncome ">صد تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputChildAverageMonthIncome" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputChildAverageMonthIncome">هزار تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg state-select"
                                                                                name="inputChildAverageMonthIncome"
                                                                                id="inputChildAverageMonthIncome">
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
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                                        <hr>
                                                        <form id="form-Election">
                                                            <span class="divider"></span>

                                                        </form>
                                                        <div class="unique-form animated flipInX col-md-12 col-xs-12 padding-0 form">

                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputChildElectionPlacePrice">
                                                                    هزینه دایرکردن محل ستاد انتخابات (اجاره بها , حملو نقل و سایر موارد)
                                                                    -هزینه کل :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputChildElectionPlacePrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputChildElectionPlacePrice ">صد تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputChildElectionPlacePrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputChildElectionPlacePrice">هزار تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg state-select"
                                                                                name="inputChildElectionPlacePrice"
                                                                                id="inputChildElectionPlacePrice">
                                                                            <option>انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputChildElectionFlockPrice">
                                                                    هزینه برپایی تجمعات عمومی مرتبط با اهداف انتخاباتی – هزینه کل :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputChildElectionFlockPrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputChildElectionFlockPrice ">صد تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputChildElectionFlockPrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputChildElectionFlockPrice">هزار تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg state-select"
                                                                                name="inputChildElectionFlockPrice"
                                                                                id="inputChildElectionFlockPrice">
                                                                            <option>انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputChildElectionAdvertisePrice">
                                                                    هزینه تبلیغات مجاز در رسانه ها – هزینه کل :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputChildElectionAdvertisePrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputChildElectionAdvertisePrice ">صد تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputChildElectionAdvertisePrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputChildElectionAdvertisePrice">هزار تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg state-select"
                                                                                name="inputChildElectionAdvertisePrice"
                                                                                id="inputChildElectionAdvertisePrice">
                                                                            <option>انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputChildElectionStaffPrice">
                                                                    هزینه و حق الزحمه عوامل اجرایی و کارشناسی در انتخابات – هزینه کل :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputChildElectionStaffPrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputChildElectionStaffPrice ">صد تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputChildElectionStaffPrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputChildElectionStaffPrice">هزار تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg state-select"
                                                                                name="inputChildElectionStaffPrice"
                                                                                id="inputChildElectionStaffPrice">
                                                                            <option>انتخاب کنید ---</option>
                                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                                <label for="inputChildElectionAllPrice">
                                                                    جمع کل هزینه های انتخاباتی :
                                                                    <span class="text-danger"></span>
                                                                </label>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputChildElectionAllPrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputChildElectionAllPrice ">صد تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                                        <input
                                                                                type="number"
                                                                                name="inputChildElectionAllPrice" class="form-control"
                                                                                placeholder=""/>
                                                                        <label for="inputChildElectionAllPrice">هزار تومان</label>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                                        <select class="form-control form-control-lg state-select"
                                                                                name="inputChildElectionAllPrice"
                                                                                id="inputChildElectionAllPrice">
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
            </div>
        </div>

    </div>

</div>

