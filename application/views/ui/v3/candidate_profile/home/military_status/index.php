<?php
$_DIR = base_url('assets/ui/v3/');
?>
<div class="container container-wrapper" style="background: none;">
    <?php echo $resumeSidebar; ?>
    <div class="col-md-9 col-xs-12 pull-right">
        <div class="LeftPanel">
            <div class="LeftPanelcontent">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="panel panel-default LeftPanelShadow">
                            <div class="panel-heading">
                                وضعیت خدمت نظام وظیفه

                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-xs-12 padding-0">
                                        <div class="list-group-item ul-background-color-hr">
                                            <form id="form">
                                                <span class="skill-divider"></span>
                                            </form>
                                            <div id="unique-form"
                                                 class="hidden list-group-item animated flipInX extra-padding-top-25 odd-background-color-div">
                                                <div class="list-group-Grade col-md-12 col-xs-12 padding-0">
                                                    <div class="col-md-12 col-xs-12 margin-b-30 paddingRight-0">

                                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group RightFloat paddingRight-0">
                                                            <div class="col-md-12 col-xs-12 radio-list-group-item">
                                                                <label class="customradio"><span class="radiotextsty">معاف</span>
                                                                    <input type="radio"
                                                                           data-name="inputCandidateMilitaryStatus" value="Exempt">

                                                                </label>
                                                                <label class="customradio"><span class="radiotextsty">دارای کارت پایان خدمت</span>
                                                                    <input type="radio"
                                                                           data-name="inputCandidateMilitaryStatus" value="CardService">

                                                                </label>
                                                                <label class="customradio"><span class="radiotextsty">درحال خدمت</span>
                                                                    <input type="radio"
                                                                           data-name="inputCandidateMilitaryStatus" value="Serving">

                                                                </label>
                                                                <label class="customradio"><span class="radiotextsty">مشمول</span>
                                                                    <input type="radio"
                                                                           data-name="inputCandidateMilitaryStatus" value="Included">

                                                                </label>
                                                                <label class="customradio"><span class="radiotextsty">خرید خدمت</span>
                                                                    <input type="radio"
                                                                           data-name="inputCandidateMilitaryStatus" value="Buyservice">

                                                                </label>
                                                            </div>
                                                        </div>

                                                        <hr class="hidden-lg hidden-md visible-xs visible-sm border-color">

                                                        <div class="col-md-8 col-sm-12 col-xs-12 padding-0 inputCandidateExemptTitle">
                                                            <div class="col-md-3 col-xs-12 form-group RightFloat">
                                                                <label class="customradio"><span class="radiotextsty">تحصیلی</span>
                                                                    <input type="radio"
                                                                           data-name="inputCandidateExemptTitle" value="educational">
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12 form-group RightFloat">
                                                                <label class="customradio"><span class="radiotextsty">پزشکی</span>
                                                                    <input type="radio"
                                                                           data-name="inputCandidateExemptTitle" value="medical">
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12 form-group RightFloat">
                                                                <label class="customradio"><span class="radiotextsty">کفالت</span>
                                                                    <input type="radio"
                                                                           data-name="inputCandidateExemptTitle" value="Guarantee">
                                                                </label>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12 form-group RightFloat">
                                                                <label class="customradio"><span class="radiotextsty">سایر</span>
                                                                    <input type="radio"
                                                                           data-name="inputCandidateExemptTitle" value="Others">
                                                                </label>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-xs-12 RightFloat ttt inputCandidateDescription">
                                                                <label for="inputCandidateDescription" class="Lable">توضیحات</label>
                                                                <input name="inputCandidateDescription" type="text" required>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-8 col-sm-12 col-xs-12 padding-0 inputCandidateMilitaryEndDtate">

                                                            <div class="col-md-12 col-xs-12">
                                                                <div class="col-md-6 col-xs-12 margin-b-25 RightFloat">
                                                                    <label for="inputCandidateMilitaryEndDtate">تاریخ اتمام</label>
                                                                    <div class="clearfix"></div>
                                                                    <select class="col-md-6 form-control form-control-lg city-select RightFloat" name="inputCandidateActivityStartMonth" id="inputCandidateActivityStartMonth">
                                                                        <?php foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) { ?>
                                                                            <option value="<?php echo $key; ?>">
                                                                                <?php echo $value; ?>
                                                                            </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                    <select class="col-md-6 form-control form-control-lg city-select" name="inputCandidateActivityStartYear" id="inputCandidateActivityStartYear">
                                                                        <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                            <option
                                                                                    value="<?php echo $i; ?>">
                                                                                <?php echo $i; ?>
                                                                            </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-12 col-xs-12 margin-b-25">
                                                                    <label for="inputCandidateMilitaryEndArea">ارگان محل خدمت :</label>
                                                                </div>
                                                                <div class="col-md-12 col-xs-12 padding-0 inputCandidateMilitaryEndArea">
                                                                    <div class="col-md-3 col-xs-12 form-group RightFloat">
                                                                        <label class="customradio"><span class="radiotextsty">ارتش</span>
                                                                            <input type="radio"
                                                                                   data-name="inputCandidateMilitaryEndArea" value="Army">
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-3 col-xs-12 form-group RightFloat">
                                                                        <label class="customradio"><span class="radiotextsty">سپاه</span>
                                                                            <input type="radio"
                                                                                   data-name="inputCandidateMilitaryEndArea" value="Corps">
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                        <label class="customradio"><span class="radiotextsty">نیروی انتظامی</span>
                                                                            <input type="radio"
                                                                                   data-name="inputCandidateMilitaryEndArea" value="police">
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                        <label class="customradio"><span class="radiotextsty">وزارت دفاع</span>
                                                                            <input type="radio"
                                                                                   data-name="inputCandidateMilitaryEndArea" value="DepartmentDefense">
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                        <label class="customradio"><span class="radiotextsty">سایر</span>
                                                                            <input type="radio"
                                                                                   data-name="inputCandidateMilitaryEndArea" value="Others">
                                                                        </label>
                                                                    </div>

                                                                    <div class="col-md-12 col-sm-12 col-xs-12 RightFloat ttt inputCandidatePlaceservice1">
                                                                        <label for="inputCandidateDescription" class="Lable">نام محل خدمت</label>
                                                                        <input name="inputCandidateDescription" type="text" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-8 col-sm-12 col-xs-12 padding-0 inputCandidateMilitaryServing">

                                                            <div class="col-md-12 col-xs-12">
                                                                <div class="col-md-6 col-xs-12 margin-b-25 RightFloat">
                                                                    <label for="inputCandidateMilitaryEndDtate">تاریخ تقریبی پایان خدمت</label>
                                                                    <div class="clearfix"></div>
                                                                    <select class="col-md-6 form-control form-control-lg city-select RightFloat" name="inputCandidateActivityStartMonth" id="inputCandidateActivityStartMonth">
                                                                        <?php foreach ($EnumResumeProfile['ShamsiMonths'] as $key => $value) { ?>
                                                                            <option value="<?php echo $key; ?>">
                                                                                <?php echo $value; ?>
                                                                            </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                    <select class="col-md-6 form-control form-control-lg city-select" name="inputCandidateActivityStartYear" id="inputCandidateActivityStartYear">
                                                                        <?php for ($i = 1300; $i <= 1398; $i++) { ?>
                                                                            <option
                                                                                    value="<?php echo $i; ?>">
                                                                                <?php echo $i; ?>
                                                                            </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-12 col-xs-12 margin-b-25">
                                                                    <label for="inputCandidateMilitaryEndArea">ارگان محل خدمت :</label>
                                                                </div>
                                                                <div class="col-md-12 col-xs-12 padding-0 inputCandidateMilitaryEndArea">
                                                                    <div class="col-md-3 col-xs-12 form-group RightFloat">
                                                                        <label class="customradio"><span class="radiotextsty">ارتش</span>
                                                                            <input type="radio"
                                                                                   data-name="inputCandidateMilitaryEndArea" value="Army">
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-3 col-xs-12 form-group RightFloat">
                                                                        <label class="customradio"><span class="radiotextsty">سپاه</span>
                                                                            <input type="radio"
                                                                                   data-name="inputCandidateMilitaryEndArea" value="Corps">
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                        <label class="customradio"><span class="radiotextsty">نیروی انتظامی</span>
                                                                            <input type="radio"
                                                                                   data-name="inputCandidateMilitaryEndArea" value="police">
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                        <label class="customradio"><span class="radiotextsty">وزارت دفاع</span>
                                                                            <input type="radio"
                                                                                   data-name="inputCandidateMilitaryEndArea" value="DepartmentDefense">
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-4 col-xs-12 form-group RightFloat">
                                                                        <label class="customradio"><span class="radiotextsty">سایر</span>
                                                                            <input type="radio"
                                                                                   data-name="inputCandidateMilitaryEndArea" value="Others">
                                                                        </label>
                                                                    </div>

                                                                    <div class="col-md-12 col-sm-12 col-xs-12 RightFloat ttt inputCandidatePlaceservice2">
                                                                        <label for="inputCandidateDescription" class="Lable">ارگان محل خدمت را وارد نمایید</label>
                                                                        <input name="inputCandidateDescription" type="text" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
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
                                id="buttonUpdateMilitaryStatusAndRedirect">
                            ثبت و ادامه
                        </button>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <button class="btn btn-block btn-lg waves-effect CommonButtons" id="buttonUpdateMilitaryStatus">
                            ثبت
                        </button>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <a href="<?php echo base_url('Profile/academicBackground'); ?>">
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