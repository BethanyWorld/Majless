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
                                                <label for="RealEstateType">
                                                    نوع کاربری
                                                    <span class="text-danger">
                                             </span>
                                                </label>
                                                <select class="form-control form-control-lg city-select"
                                                        name="RealEstateType"
                                                        id="RealEstateType">
                                                    <option value="">مسکونی</option>
                                                    <option value="">اداری</option>
                                                    <option value="">تجاری</option>
                                                    <option value="">صنعتی</option>
                                                    <option value="">کشاورزی</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="RealEstateOwnershipDate">
                                                    سال شروع مالکیت
                                                    <span class="text-danger">
                                             </span>
                                                </label>
                                                <select class="form-control form-control-lg city-select"
                                                        name="RealEstateOwnershipDate"
                                                        id="RealEstateOwnershipDate"
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
                                                <label for="RealEstateOwnershipType">
                                                    نحوه مالکیت
                                                </label>
                                                <select class="form-control form-control-lg city-select"
                                                        name="RealEstateOwnershipType"
                                                        id="RealEstateOwnershipType">
                                                    <option value="">خرید</option>
                                                    <option value="">ارث</option>
                                                    <option value="">هدیه / هبه</option>
                                                    <option value="">مهریه</option>
                                                    <option value="">جبران خسارت</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat">
                                                <label for="RealEstateCountryId">
                                                    کشور
                                                    </span>
                                                </label>
                                                <select class="form-control form-control-lg state-select"
                                                        name="RealEstateCountryId"
                                                        id="RealEstateCountryId">
                                                    <option value="">-- انتخاب کنید --</option>

                                                    <option value="iran">ایران</option>
                                                    <option value="tehran">تهران</option>
                                                    <option value="yazd">یزد</option>

                                                </select>
                                            </div>
                                            <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv">
                                                <label for="RealEstateStateId">
                                                    استان
                                                    </span>
                                                </label>
                                                <select class="form-control form-control-lg state-select"
                                                        name="RealEstateStateId"
                                                        id="RealEstateStateId">
                                                    <option value="">-- انتخاب کنید --</option>

                                                    <option value="">تهران</option>
                                                    <option value="">تهران</option>
                                                    <option value="">تهران</option>

                                                </select>
                                            </div>
                                            <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat MoneyStateDiv">
                                                <label for="RealEstateCityId">
                                                    شهر
                                                    </span>
                                                </label>
                                                <select class="form-control form-control-lg state-select"
                                                        name="RealEstateCityId"
                                                        id="RealEstateCityId">
                                                    <option value="">-- انتخاب کنید --</option>

                                                    <option value="">تهران</option>
                                                    <option value="">تهران</option>
                                                    <option value="">تهران</option>

                                                </select>
                                            </div>
                                            <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="RealEstatePortion">
                                                    سهم از ملک(1 تا 6 دانگ)
                                                    <span class="text-danger"></span>
                                                </label>
                                                <input type="number" name="RealEstatePortion" id="RealEstatePortion"
                                                       class="form-control" placeholder="سهم از ملک 1 تا 6 دانگ"/>
                                            </div>
                                            <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="RealEstateExtent">
                                                    متراژ حدودی ملک
                                                    <span class="text-danger"></span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-md-6 col-xs-12 RightFloat">
                                                        <input type="number" name="RealEstateExtent"
                                                               id="RealEstateExtent" class="form-control"
                                                               placeholder=""/>
                                                    </div>
                                                    <div class="col-md-6 col-xs-12 RightFloat">
                                                        <select class="form-control form-control-lg city-select"
                                                                name="RealEstateExtent"
                                                                id="RealEstateExtent">
                                                            <option value="">متر مربع</option>
                                                            <option value="">هکتار</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="RealEstateBuyTimePrice">
                                                    ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                    <span class="text-danger"></span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                        <input
                                                                type="number"
                                                                name="RealEstateBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="RealEstateBuyTimePrice ">تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                        <input
                                                                type="number"
                                                                name="RealEstateBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="RealEstateBuyTimePrice">هزار</label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                        <select class="form-control form-control-lg state-select"
                                                                name="RealEstateBuyTimePrice"
                                                                id="RealEstateBuyTimePrice">
                                                            <option>انتخاب کنید ---</option>
                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="RealEstateBuyTimePrice">
                                                    ارزش حدودی کل سهام درحال حاضر :
                                                    <span class="text-danger"></span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                        <input
                                                                type="number"
                                                                name="RealEstateBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="RealEstateBuyTimePrice ">تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                        <input
                                                                type="number"
                                                                name="RealEstateBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="RealEstateBuyTimePrice">هزار</label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                        <select class="form-control form-control-lg state-select"
                                                                name="RealEstateBuyTimePrice"
                                                                id="RealEstateBuyTimePrice">
                                                            <option>انتخاب کنید ---</option>
                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group RightFloat">
                                                <label for="RealEstateAddress">
                                                    آدرس
                                                    </span>
                                                </label>
                                                <input id="RealEstateAddress" type="text"
                                                       name="RealEstateAddress"
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
                                                <label for="inputCandidateBookPublishMonth">
                                                    نوع وسیله نقلیه
                                                    <span class="text-danger">
                                             </span>
                                                </label>
                                                <select class="form-control form-control-lg city-select"
                                                        name="inputCandidateBookPublishMonth"
                                                        id="inputCandidateBookPublishMonth">
                                                    <option value="">موتور سیکلت</option>
                                                    <option value="">دوچرخه</option>
                                                    <option value="">خودرو سبک</option>
                                                    <option value="">خودرو سنگین</option>
                                                    <option value="">سایر</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="inputCandidateBookPublishYear">
                                                    سال شروع مالکیت
                                                    <span class="text-danger">
                                             </span>
                                                </label>
                                                <select class="form-control form-control-lg city-select"
                                                        name="inputCandidateBookPublishYear"
                                                        id="inputCandidateBookPublishYear"
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
                                                <label for="inputCandidateBookPublishMonth">
                                                    نحوه مالکیت
                                                    <span class="text-danger">
                                             </span>
                                                </label>
                                                <select class="form-control form-control-lg city-select"
                                                        name="inputCandidateBookPublishMonth"
                                                        id="inputCandidateBookPublishMonth">
                                                    <option value="">خرید</option>
                                                    <option value="">ارث</option>
                                                    <option value="">هدیه / هبه</option>
                                                    <option value="">مهریه</option>
                                                    <option value="">جبران خسارت</option>
                                                </select>
                                            </div>
                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="RealEstateBuyTimePrice">
                                                    ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                    <span class="text-danger"></span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                        <input
                                                                type="number"
                                                                name="RealEstateBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="RealEstateBuyTimePrice ">تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                        <input
                                                                type="number"
                                                                name="RealEstateBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="RealEstateBuyTimePrice">هزار</label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                        <select class="form-control form-control-lg state-select"
                                                                name="RealEstateBuyTimePrice"
                                                                id="RealEstateBuyTimePrice">
                                                            <option>انتخاب کنید ---</option>
                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="RealEstateBuyTimePrice">
                                                    ارزش حدودی کل سهام درحال حاضر :
                                                    <span class="text-danger"></span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                        <input
                                                                type="number"
                                                                name="RealEstateBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="RealEstateBuyTimePrice ">تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                        <input
                                                                type="number"
                                                                name="RealEstateBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="RealEstateBuyTimePrice">هزار</label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                        <select class="form-control form-control-lg state-select"
                                                                name="RealEstateBuyTimePrice"
                                                                id="RealEstateBuyTimePrice">
                                                            <option>انتخاب کنید ---</option>
                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="inputCandidateBookPublishYear">
                                                    سهم از ملک(1 تا 6 دانگ)
                                                    <span class="text-danger"></span>
                                                </label>
                                                <input type="number" name="" id="" class="form-control"
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
                                                <label for="InvestTitle">
                                                    نام شرکت / موسسه
                                                </label>
                                                <input id="InvestTitle" type="text"
                                                       name="InvestTitle"
                                                       placeholder="نام شرکت - موسسه - پروژه ">
                                            </div>
                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="InvestDate">
                                                    سال شروع مالکیت
                                                    <span class="text-danger">
                                             </span>
                                                </label>
                                                <select class="form-control form-control-lg city-select"
                                                        name="InvestDate"
                                                        id="InvestDate"
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
                                                <label for="InvestOwnershipType">
                                                    نحوه مالکیت
                                                    <span class="text-danger">
                                             </span>
                                                </label>
                                                <select class="form-control form-control-lg city-select"
                                                        name="InvestOwnershipType"
                                                        id="InvestOwnershipType">
                                                    <option value="">خرید</option>
                                                    <option value="">ارث</option>
                                                    <option value="">هدیه / هبه</option>
                                                    <option value="">مهریه</option>
                                                    <option value="">جبران خسارت</option>
                                                </select>
                                            </div>
                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="RealEstateBuyTimePrice">
                                                    ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                    <span class="text-danger"></span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                        <input
                                                                type="number"
                                                                name="RealEstateBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="RealEstateBuyTimePrice ">تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                        <input
                                                                type="number"
                                                                name="RealEstateBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="RealEstateBuyTimePrice">هزار</label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                        <select class="form-control form-control-lg state-select"
                                                                name="RealEstateBuyTimePrice"
                                                                id="RealEstateBuyTimePrice">
                                                            <option>انتخاب کنید ---</option>
                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="RealEstateBuyTimePrice">
                                                    ارزش حدودی کل سهام درحال حاضر :
                                                    <span class="text-danger"></span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                        <input
                                                                type="number"
                                                                name="RealEstateBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="RealEstateBuyTimePrice ">تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                        <input
                                                                type="number"
                                                                name="RealEstateBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="RealEstateBuyTimePrice">هزار</label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                        <select class="form-control form-control-lg state-select"
                                                                name="RealEstateBuyTimePrice"
                                                                id="RealEstateBuyTimePrice">
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
                                                <label for="BankAccountTitle">
                                                    عنوان بانک یا موسسه
                                                </label>
                                                <input id="BankAccountTitle" type="text"
                                                       name="BankAccountTitle"
                                                       placeholder="عنوان بانک یا موسسه ">
                                            </div>
                                            <div class="col-md-8 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="RealEstateBuyTimePrice">
                                                    مبلغ :
                                                    <span class="text-danger"></span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                        <input
                                                                type="number"
                                                                name="RealEstateBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="RealEstateBuyTimePrice ">تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                        <input
                                                                type="number"
                                                                name="RealEstateBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="RealEstateBuyTimePrice">هزار</label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                        <select class="form-control form-control-lg state-select"
                                                                name="RealEstateBuyTimePrice"
                                                                id="RealEstateBuyTimePrice">
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
                                                        name="BankAccountCountryId"
                                                        id="BankAccountCountryId">
                                                    <option value="">-- انتخاب کنید --</option>

                                                    <option value="iran">ایران</option>
                                                    <option value="tehran">تهران</option>
                                                    <option value="yazd">یزد</option>

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
                                                <label for="RealEstateBuyTimePrice">
                                                    جمع کل بستانکاری از اشخاص حقیقی یا حقوقی :
                                                    <span class="text-danger"></span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                        <input
                                                                type="number"
                                                                name="RealEstateBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="RealEstateBuyTimePrice ">تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                        <input
                                                                type="number"
                                                                name="RealEstateBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="RealEstateBuyTimePrice">هزار</label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                        <select class="form-control form-control-lg state-select"
                                                                name="RealEstateBuyTimePrice"
                                                                id="RealEstateBuyTimePrice">
                                                            <option>انتخاب کنید ---</option>
                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="RealEstateBuyTimePrice">
                                                    جمع کل بدهکاری از اشخاص حقیقی یا حقوقی :
                                                    <span class="text-danger"></span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                        <input
                                                                type="number"
                                                                name="RealEstateBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="RealEstateBuyTimePrice ">تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                        <input
                                                                type="number"
                                                                name="RealEstateBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="RealEstateBuyTimePrice">هزار</label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                        <select class="form-control form-control-lg state-select"
                                                                name="RealEstateBuyTimePrice"
                                                                id="RealEstateBuyTimePrice">
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
                                                <label for="GoodsType">
                                                    نوع کالا
                                                </label>
                                                <select class="form-control form-control-lg city-select"
                                                        name="GoodsType"
                                                        id="GoodsType">
                                                    <option value="">لوکس یا تزئینی</option>
                                                    <option value="">مسکوکات</option>
                                                    <option value="">شمش/طلا/جواهر</option>
                                                    <option value="">فلزات قیمتی</option>
                                                    <option value="">ارز خارجی</option>
                                                    <option value="">دام و طیور</option>
                                                    <option value="">سایر کالاهای تجاری</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="GoodsOwnershipStartDate">
                                                    سال شروع مالکیت
                                                    <span class="text-danger">
                                             </span>
                                                </label>
                                                <select class="form-control form-control-lg city-select"
                                                        name="GoodsOwnershipStartDate"
                                                        id="GoodsOwnershipStartDate"
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
                                                <label for="GoodsCount">
                                                    حجم / وزن / تعداد کالا
                                                    <span class="text-danger"></span>
                                                </label>
                                                <input type="text" name="GoodsCount" id="GoodsCount"
                                                       class="form-control" placeholder="  حجم / وزن / تعداد کالا"/>
                                            </div>
                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="RealEstateBuyTimePrice">
                                                    ارزش حدودی کل سهام در زمان شروع مالکیت :
                                                    <span class="text-danger"></span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                        <input
                                                                type="number"
                                                                name="RealEstateBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="RealEstateBuyTimePrice ">تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                        <input
                                                                type="number"
                                                                name="RealEstateBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="RealEstateBuyTimePrice">هزار</label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                        <select class="form-control form-control-lg state-select"
                                                                name="RealEstateBuyTimePrice"
                                                                id="RealEstateBuyTimePrice">
                                                            <option>انتخاب کنید ---</option>
                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="RealEstateBuyTimePrice">
                                                    ارزش حدودی کل سهام درحال حاضر :
                                                    <span class="text-danger"></span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                        <input
                                                                type="number"
                                                                name="RealEstateBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="RealEstateBuyTimePrice ">تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                        <input
                                                                type="number"
                                                                name="RealEstateBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="RealEstateBuyTimePrice">هزار</label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                        <select class="form-control form-control-lg state-select"
                                                                name="RealEstateBuyTimePrice"
                                                                id="RealEstateBuyTimePrice">
                                                            <option>انتخاب کنید ---</option>
                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="GoodsOwnershipPercent">
                                                    درصد سهم از مالکیت :
                                                    <span class="text-danger"></span>
                                                </label>
                                                <input type="number" name="GoodsOwnershipPercent"
                                                       id="GoodsOwnershipPercent" class="form-control"
                                                       placeholder="سهم از ملک 1 تا 6 دانگ"/>
                                            </div>
                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="RealEstateOwnershipType">
                                                    نحوه مالکیت
                                                    <span class="text-danger">
                                             </span>
                                                </label>
                                                <select class="form-control form-control-lg city-select"
                                                        name="RealEstateOwnershipType"
                                                        id="RealEstateOwnershipType">
                                                    <option value="">خرید</option>
                                                    <option value="">ارث</option>
                                                    <option value="">هدیه / هبه</option>
                                                    <option value="">مهریه</option>
                                                    <option value="">جبران خسارت</option>
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
                                                <label for="FeeType">
                                                    عنوان :
                                                </label>
                                                <select class="form-control form-control-lg city-select"
                                                        name="FeeType"
                                                        id="FeeType">
                                                    <option value="">کتاب</option>
                                                    <option value="">اختراع / اکتشاف</option>
                                                    <option value="">ثر هنری</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="FeeOwnershipStartDate">
                                                    سال شروع مالکیت
                                                    <span class="text-danger">
                                             </span>
                                                </label>
                                                <select class="form-control form-control-lg city-select"
                                                        name="FeeOwnershipStartDate"
                                                        id="FeeOwnershipStartDate"
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
                                                <label for="FeePercent">
                                                    درصد سهم از مالکیت معنوی:
                                                    <span class="text-danger"></span>
                                                </label>
                                                <input type="number" name="FeePercent" id="FeePercent"
                                                       class="form-control" placeholder="سهم از ملک 1 تا 6 دانگ"/>
                                            </div>
                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="RealEstateBuyTimePrice">
                                                    میزان درآمد متوسط سالیانه از مالکیت معنوی :
                                                    <span class="text-danger"></span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                        <input
                                                                type="number"
                                                                name="RealEstateBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="RealEstateBuyTimePrice ">تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                        <input
                                                                type="number"
                                                                name="RealEstateBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="RealEstateBuyTimePrice">هزار</label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                        <select class="form-control form-control-lg state-select"
                                                                name="RealEstateBuyTimePrice"
                                                                id="RealEstateBuyTimePrice">
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
                                                <label for="RealEstateBuyTimePrice">
                                                 درآمد متوسط ماهیانه :
                                                    <span class="text-danger"></span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                        <input
                                                                type="number"
                                                                name="RealEstateBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="RealEstateBuyTimePrice ">تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                        <input
                                                                type="number"
                                                                name="RealEstateBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="RealEstateBuyTimePrice">هزار</label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                        <select class="form-control form-control-lg state-select"
                                                                name="RealEstateBuyTimePrice"
                                                                id="RealEstateBuyTimePrice">
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
                                                <label for="RealEstateBuyTimePrice">
                                                    هزینه دایرکردن محل ستاد انتخابات (اجاره بها , حملو نقل و سایر موارد)
                                                    -هزینه کل :
                                                    <span class="text-danger"></span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                        <input
                                                                type="number"
                                                                name="RealEstateBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="RealEstateBuyTimePrice ">تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                        <input
                                                                type="number"
                                                                name="RealEstateBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="RealEstateBuyTimePrice">هزار</label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                        <select class="form-control form-control-lg state-select"
                                                                name="RealEstateBuyTimePrice"
                                                                id="RealEstateBuyTimePrice">
                                                            <option>انتخاب کنید ---</option>
                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="RealEstateBuyTimePrice">
                                                    هزینه برپایی تجمعات عمومی مرتبط با اهداف انتخاباتی – هزینه کل :
                                                    <span class="text-danger"></span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                        <input
                                                                type="number"
                                                                name="RealEstateBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="RealEstateBuyTimePrice ">تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                        <input
                                                                type="number"
                                                                name="RealEstateBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="RealEstateBuyTimePrice">هزار</label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                        <select class="form-control form-control-lg state-select"
                                                                name="RealEstateBuyTimePrice"
                                                                id="RealEstateBuyTimePrice">
                                                            <option>انتخاب کنید ---</option>
                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="RealEstateBuyTimePrice">
                                                    هزینه تبلیغات مجاز در رسانه ها – هزینه کل :
                                                    <span class="text-danger"></span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                        <input
                                                                type="number"
                                                                name="RealEstateBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="RealEstateBuyTimePrice ">تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                        <input
                                                                type="number"
                                                                name="RealEstateBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="RealEstateBuyTimePrice">هزار</label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                        <select class="form-control form-control-lg state-select"
                                                                name="RealEstateBuyTimePrice"
                                                                id="RealEstateBuyTimePrice">
                                                            <option>انتخاب کنید ---</option>
                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="RealEstateBuyTimePrice">
                                                    هزینه و حق الزحمه عوامل اجرایی و کارشناسی در انتخابات – هزینه کل :
                                                    <span class="text-danger"></span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                        <input
                                                                type="number"
                                                                name="RealEstateBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="RealEstateBuyTimePrice ">تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                        <input
                                                                type="number"
                                                                name="RealEstateBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="RealEstateBuyTimePrice">هزار</label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                        <select class="form-control form-control-lg state-select"
                                                                name="RealEstateBuyTimePrice"
                                                                id="RealEstateBuyTimePrice">
                                                            <option>انتخاب کنید ---</option>
                                                            <option data-left-side="HZ" data-right-side="SD" value="HZ">هزار تومان</option>
                                                            <option data-left-side="MI" data-right-side="HZ" value="MI">میلیون تومان</option>
                                                            <option data-left-side="ML" data-right-side="MI" value="ML">میلیارد تومان</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xs-12 col-sm-12 form-group RightFloat">
                                                <label for="RealEstateBuyTimePrice">
                                                    جمع کل هزینه های انتخاباتی :
                                                    <span class="text-danger"></span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-left-side">
                                                        <input
                                                                type="number"
                                                                name="RealEstateBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="RealEstateBuyTimePrice ">تومان</label>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 RightFloat  price-right-side">
                                                        <input
                                                                type="number"
                                                                name="RealEstateBuyTimePrice" class="form-control"
                                                                placeholder=""/>
                                                        <label for="RealEstateBuyTimePrice">هزار</label>
                                                    </div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 form-group RightFloat price-unit">
                                                        <select class="form-control form-control-lg state-select"
                                                                name="RealEstateBuyTimePrice"
                                                                id="RealEstateBuyTimePrice">
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