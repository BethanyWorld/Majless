<?php $_DIR = base_url('assets/ui/v3/'); ?>
<style>
    .form {
        box-shadow: 0 0 7px 1px #ccc !important;
        padding: 15px 0 !important;
        margin-bottom: 20px !important;
    }

    .form:last-child {
        margin-bottom: 0 !important;
    }

    .add-form {
        position: absolute;
        left: 30px;
        top: 20px;
        width: 50px;
        height: 50px;
        background: #095644;
        border-radius: 100px;
        color: #fff;
        padding: 18px;
        cursor: pointer;
        z-index: 1090;
    }

    .add-form:hover {
        background: #095644;
    }

    .remove-form {
        position: absolute;
        left: 0;
        top: 0;
        background: #fdb72e ;
        color: #000;
        width: 25px;
        height: 25px;
        padding: 4px 5px;
        cursor: pointer;
        z-index: 1090;
    }

    .remove-form:hover {
        background: #fdb72e ;
    }

    /*Helper*/
    .margin-right-15 {
        margin-right: 15px;
    }

    .padding-0 {
        padding: 0px;
    }

    .paddingRight-0 {
        padding-right: 0px;
    }

    .paddingLeft-0 {
        padding-left: 0px;
    }

    .RightFloat {
        float: right;
    }

    .LeftFloat {
        float: left;
    }

    /*Helper*/

    .RightPanel {
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16);
        min-height: 300px;
        background-color: #fff;
    }

    .RightPanel .RightPanelUl {
        margin: 0px auto;
    }

    .RightPanel .RightPanelUl li {
        position: relative;
        list-style-type: none;
        padding: 0.7em 1.5em;
        cursor: auto;
        justify-content: flex-start;
        border-radius: 0;
        border-right: none;
        border-bottom: 1px solid rgba(34, 36, 38, .15);
        display: flex;
        flex-wrap: wrap;
        vertical-align: middle;
        color: rgba(0, 0, 0, .87);
        box-shadow: none;
        transition: background-color .1s ease, opacity .1s ease, color .1s ease, box-shadow .1s ease;
        cursor: pointer;
    }

    ul.RightPanelUl li.active {
        background: #F3F4F5;
    }

    ul.RightPanelUl li.active:after {
        background: #F3F4F5;
    }
    ul.RightPanelUl li a{
        width: 100%;
        display: inherit;
    }
    ul.RightPanelUl li  .RightpanelIcon {
        line-height: initial;
        font-size: 2em;
        margin: 0 0 0 0.8rem;
        width: 40px;
        text-align: center;
        color: #777777;
    }

    ul.RightPanelUl li:after {
        background: #F3F4F5;
        top: 50%;
        left: -18px;
        border-width: 1px 0px 0px 1px;
        position: absolute;
        z-index: 2;
        content: '';
        border: solid;
        background-color: #FFF;
        width: 1.14285714em;
        height: 1.14285714em;
        border-color: rgba(34, 36, 38, .15);
        border-width: 0 1px 1px 0;
        transition: background-color .1s ease, opacity .1s ease, color .1s ease, box-shadow .1s ease;
        transform: translateY(-50%) translateX(50%) rotate(-45deg);
    }

    ul.RightPanelUl li:after {
        top: 50%;
        left: -19px;
        border-width: 1px 0px 0px 1px;
        display: none;
    }

    ul.RightPanelUl li.active:after {
        display: block;
    }

    ul.RightPanelUl li.active .RightpanelIcon {
        color: #00695c;
    }

    ul.RightPanelUl li.active .RightPanleTitle {
        color: #00695c;
    }

    ul.RightPanelUl li .RightPanleTitle {
        font-size: 1em;
        font-weight: 700;
        color: #777;
    }

    ul.RightPanelUl li .RightPanleTitle ~ .RightPanelDescription {
        margin-top: .25em;
    }

    ul.RightPanelUl li .RightPanelDescription {
        font-weight: 400;
        font-size: 0.8em;
        color: rgba(0, 0, 0, .87);
    }

    .site {
        background-color: #edecec;
    }

    ul.RightPanelUl li.active:hover {
        cursor: pointer;
        background: #DCDDDE;
        color: rgba(0, 0, 0, .87);
    }

    ul.RightPanelUl li.active:hover::after {
        cursor: pointer;
        background: #DCDDDE;
        color: rgba(0, 0, 0, .87);
    }

    .LeftPanel {
        position: relative;
        background-color: #fff;
        margin: .5rem 0 1rem;
        transition: box-shadow .25s;
        border-radius: 0;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16);
    }

    .LeftPanel .LeftPanelcontent {
        padding: 20px;
        border-radius: 0 0 2px 2px;
    }

    /*headline*/
    .border-bottom-title {
        border-bottom: 1px solid #eee;
    }

    /*headline*/

    .LeftPanelShadow {
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16);
        min-height: 25vh;
    }

    .LeftPanelShadow .panel-heading {
        width: auto;
        background-image: none !important;
        margin: 0px auto;
        text-shadow: none !important;
    }

    .LeftPanelImage {
        float: right;
    }

    .LeftPanelImage img {
        width: 165px;
        height: 165px;
    }

    .btn-border-info {
        background-color: transparent;
        border: 2px solid #33b5e5;
        color: #09C;
    }

    .btn-border-danger {
        background-color: transparent;
        border: 2px solid #f44;
        color: #C00;
    }

    .btn-block {
        margin: 10px 0;
    }

    .personInfoImageButtons {
        position: relative;
        text-align: center;
        line-height: 35px;
        font-size: 16px;
        color: #fff;
        padding: 0 25px;
        border-radius: 0;
        cursor: pointer !important;
    }

    .ButtonRedColor {
        background-color: #fdb72e ;
        color: #000;
    }

    .ButtonBlueColor {
        background-color: #095644 ;
        color: #fff;
    }

    .ButtonRedColor:hover {
        background-color: #fdb72e;
        opacity: 0.8;
        color: #000;
    }

    .ButtonBlueColor:hover {
        background-color: #095644;
        opacity: 0.8;
        color: #fff;
    }

    .ButtonRedColor:focus {
        background-color: #D10B20;
        opacity: 0.8;
        color: #ccc;
    }

    .ButtonBlueColor:focus {
        background-color: #052452;
        opacity: 0.8;
        color: #ccc;
    }

    .input-field .form-group {
        padding-right: 0px;
    }

    .input-field label {
        color: #9e9e9e;
    }

    .RightFloat input {
        background: transparent;
        border: none;
        box-shadow: none !important;
        border-bottom: 1px solid #ccc;
        border-radius: 0px;
    }

    .BirthDateTitleMarginTop {
        margin-top: 30px;
    }

    .InputNotAllow {
        cursor: not-allowed !important;
        background-color: #eee !important;
        opacity: 1;
        color: rgba(0, 0, 0, .26);
        border-bottom: 1px dotted rgba(0, 0, 0, .26);
    }

    .form-group-MarginBottom {
        margin-bottom: 30px;
    }

    .LeftPaneAction {
        border-top: 1px solid rgba(160, 160, 160, .2);
        padding: 0 20px;
    }

    .CommonButtons {
        text-align: center;
        line-height: 45px;
        font-size: 16px;
        background-color: #095644  ;
        color: #fff;
        padding: 0 25px;
        border-radius: 0;
    }

    .CommonButtons:hover {
        box-shadow: 0 8px 17px 0 rgba(0, 0, 0, .2);
        background-color: #095644 ;
        opacity: 0.8;
    }

    .CommonButtons:focus {
        box-shadow: 0 8px 17px 0 rgba(0, 0, 0, .2);
        background-color: #095644;
        opacity: 0.8;
    }

    .upld-file {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        height: 50px;
        font-size: 100px;
        text-align: right;
        opacity: 0;
        outline: none;
        background: white;
        cursor: inherit;
        display: block;
    }

    /*Checkboxes styles*/
    .RegistrationTypeDiv {
        padding: 15px 0px;
    }
    .RegistrationTypeDiv input[type="checkbox"] {
        display: none;
    }

    .RegistrationTypeDiv input[type="checkbox"] + label {
        display: block;
        position: relative;
        padding-right: 25px;
        margin-bottom: 20px;
        font-size: 14px;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
    }

    .RegistrationTypeDiv input[type="checkbox"] + label:last-child {
        margin-bottom: 0;
    }
    .RegistrationTypeDiv input[type="checkbox"] + label{
        font-size: 12px;
    }
    .RegistrationTypeDiv input[type="checkbox"] + label:before {
        content: '';
        display: block;
        width: 20px;
        height: 20px;
        border: 1px solid #00695c;
        position: absolute;
        right: 0;
        top: 0;
        opacity: .6;
        -webkit-transition: all .12s, border-color .08s;
        transition: all .12s, border-color .08s;
    }

    .RegistrationTypeDiv input[type="checkbox"]:checked + label:before {
        width: 10px;
        top: -5px;
        left: 5px;
        border-radius: 0;
        opacity: 1;
        border-top-color: transparent;
        border-left-color: transparent;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }
    /*Checkboxes styles*/
    .MobileStep {
        margin-bottom: 15px;
    }

    .MobileStep ul {
        display: flex;
        position: relative;
        list-style-type: none;
        padding-left: 0px;
    }

    .MobileStep ul li {
        width: 20.16%;
        margin-right: 8px;
    }

    .MobileStep ul li a {
        text-decoration: none;
        display: inline-block;
        width: 100%;
        height: 20px;
        background: #999999;
        padding: 5px;
        line-height: 10px;
        color: #ffffff;
        border-radius: 3.5px;
        text-shadow: 1px 0px 8px #333;
    }
    .MobileStep ul li a .fa-refresh{
        line-height: 10px;
    }
    .MobileStep ul li.first a {
        background: #022D6D;
        color: #ffffff;
        transition: all 0.5s ease;
    }
    .padding-0{
        padding: 0px;
    }
</style>
<div class="col-md-3 col-xs-12 pull-right">
    <div class="col-xs-12 padding-0 visible-xs visible-sm" style="padding: 0px;">
        <div class="col-xs-12 padding-0 MobileStep"  style="padding: 0px;">
            <ul class="col-xs-12">
                <li class="text-center <?php if (strpos($_SERVER['REQUEST_URI'], "resume") !== false) echo "first"; ?>">
                    <a href="<?php echo base_url('Profile/resume'); ?>">1</a>
                </li>
                <li class="text-center <?php if (strpos($_SERVER['REQUEST_URI'], "academicBackground") !== false) echo "first"; ?>">
                    <a href="<?php echo base_url('Profile/academicBackground'); ?>">2</a>
                </li>
                <?php if($this->session->userdata('UserLoginInfo')['CandidateGender'] == 'Male'){ ?>
                <li class="text-center <?php if (strpos($_SERVER['REQUEST_URI'], "militaryStatus") !== false) echo "first"; ?>">
                    <a href="<?php echo base_url('Profile/militaryStatus'); ?>">3</a>
                </li>
                <?php } ?>
                <li class="text-center <?php if (strpos($_SERVER['REQUEST_URI'], "jobHistory") !== false) echo "first"; ?>">
                    <a href="<?php echo base_url('Profile/jobHistory'); ?>">4</a>
                </li>
                <li class="text-center <?php if (strpos($_SERVER['REQUEST_URI'], "socialCulturalBackground") !== false) echo "first"; ?>">
                    <a href="<?php echo base_url('Profile/socialCulturalBackground'); ?>">5</a>
                </li>
                <li class="text-center <?php if (strpos($_SERVER['REQUEST_URI'], "politicBackground") !== false) echo "first"; ?>">
                    <a href="<?php echo base_url('Profile/politicBackground'); ?>">6</a>
                </li>
                <li class="text-center <?php if (strpos($_SERVER['REQUEST_URI'], "scienceBackground") !== false) echo "first"; ?>">
                    <a href="<?php echo base_url('Profile/scienceBackground'); ?>">7</a>
                </li>
                <li class="text-center <?php if (strpos($_SERVER['REQUEST_URI'], "skills") !== false) echo "first"; ?>">
                    <a href="<?php echo base_url('Profile/skills'); ?>">8</a>
                </li>
                <li class="text-center <?php if (strpos($_SERVER['REQUEST_URI'], "veteran") !== false) echo "first"; ?>">
                    <a href="<?php echo base_url('Profile/veteran'); ?>">9</a>
                </li>
                <?php if($this->session->userdata('UserLoginInfo')['CandidateStatus'] == 'CandidateAccepted'){ ?>
                <li class="text-center <?php if (strpos($_SERVER['REQUEST_URI'], "finance") !== false) echo "first"; ?>">
                    <a href="<?php echo base_url('Profile/finance'); ?>">10</a>
                </li>
                <?php } ?>
                <li class="text-center">
                    <a href="<?php echo base_url('Profile'); ?>">
                        <i class="fa fa-refresh"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-md-12 padding-0 visible-lg visible-md">
        <div class="col-md-12 padding-0 RightPanel">
            <ul class="col-md-12 padding-0 RightPanelUl">
                <li class="col-md-12 padding-0 <?php if (strpos($_SERVER['REQUEST_URI'], "resume") !== false) echo "active"; ?>">
                    <a href="<?php echo base_url('Profile/resume'); ?>">
                        <i class="zmdi RightpanelIcon">
                            <span class="fa fa-user"></span>
                        </i>
                        <div class="RightPanelContent">
                            <div class="RightPanleTitle">اطلاعات فردی</div>
                            <div class="RightPanelDescription">
                                اطلاعات فردی , آدرس
                            </div>
                        </div>
                    </a>
                </li>
                <li class="col-md-12 padding-0  <?php if (strpos($_SERVER['REQUEST_URI'], "academicBackground") !== false) echo "active"; ?>">
                    <a href="<?php echo base_url('Profile/academicBackground'); ?>">
                        <i class="zmdi RightpanelIcon">
                            <span class="fa fa-book"></span>
                        </i>
                        <div class="RightPanelContent">
                            <div class="RightPanleTitle"> سوابق تحصیلی</div>
                            <div class="RightPanelDescription">
                                مقطع , معدل , دنشگاه
                            </div>
                        </div>
                    </a>
                </li>
                <?php if($this->session->userdata('UserLoginInfo')['CandidateGender'] == 'Male'){ ?>
                <li class="col-md-12 padding-0  <?php if (strpos($_SERVER['REQUEST_URI'], "militaryStatus") !== false) echo "active"; ?>">
                    <a href="<?php echo base_url('Profile/militaryStatus'); ?>">
                    <i class="zmdi RightpanelIcon">
                        <span class="fa fa-flag"></span>
                    </i>
                    <div class="RightPanelContent">
                        <div class="RightPanleTitle"> نظام وظیفه</div>
                        <div class="RightPanelDescription">
                            پایان خدمت, معافیت,مشمول
                        </div>
                    </div>
                </li>
                <?php } ?>
                <li class="col-md-12 padding-0  <?php if (strpos($_SERVER['REQUEST_URI'], "jobHistory") !== false) echo "active"; ?>">
                    <a href="<?php echo base_url('Profile/jobHistory'); ?>">
                        <i class="zmdi RightpanelIcon">
                            <span class="fa fa-cogs"></span>
                        </i>
                        <div class="RightPanelContent">
                            <div class="RightPanleTitle"> سوابق شغلی</div>
                            <div class="RightPanelDescription">
                                اطلاعات شغل های قبل
                            </div>
                        </div>
                    </a>
                </li>
                <li class="col-md-12 padding-0  <?php if (strpos($_SERVER['REQUEST_URI'], "socialCulturalBackground") !== false) echo "active"; ?>">
                    <a href="<?php echo base_url('Profile/socialCulturalBackground'); ?>">
                            <i class="zmdi RightpanelIcon">
                                <span class="fa fa-bookmark"></span>
                            </i>
                            <div class="RightPanelContent">
                                <div class="RightPanleTitle"> سوابق فرهنگی اجتماعی</div>
                                <div class="RightPanelDescription">
                                    بسیج , انجمن , سمن
                                </div>
                            </div>
                        </a>
                </li>
                <li class="col-md-12 padding-0  <?php if (strpos($_SERVER['REQUEST_URI'], "politicBackground") !== false) echo "active"; ?>">
                    <a href="<?php echo base_url('Profile/politicBackground'); ?>">
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
                <li class="col-md-12 padding-0  <?php if (strpos($_SERVER['REQUEST_URI'], "scienceBackground") !== false) echo "active"; ?>">
                    <a href="<?php echo base_url('Profile/scienceBackground'); ?>">
                        <i class="zmdi RightpanelIcon">
                            <span class="fa fa-flask"></span>
                        </i>
                        <div class="RightPanelContent">
                            <div class="RightPanleTitle"> سوابق علمی پژوهشی</div>
                            <div class="RightPanelDescription">
                                تالیف , ترجمه , اختراع
                            </div>
                        </div>
                    </a>
                </li>
                <li class="col-md-12 padding-0  <?php if (strpos($_SERVER['REQUEST_URI'], "skills") !== false) echo "active"; ?>">
                    <a href="<?php echo base_url('Profile/skills'); ?>">
                        <i class="zmdi RightpanelIcon">
                            <span class="fa fa-outdent"></span>
                        </i>
                        <div class="RightPanelContent">
                            <div class="RightPanleTitle"> مهارت ها</div>
                            <div class="RightPanelDescription">
                                مهارت های مختلف دیگر
                            </div>
                        </div>
                    </a>
                </li>
                <li class="col-md-12 padding-0  <?php if (strpos($_SERVER['REQUEST_URI'], "promises") !== false) echo "active"; ?>">
                    <a href="<?php echo base_url('Profile/promises'); ?>">
                        <i class="zmdi RightpanelIcon">
                            <span class="fa fa-outdent"></span>
                        </i>
                        <div class="RightPanelContent">
                            <div class="RightPanleTitle">وعده های انتخاباتی</div>
                            <div class="RightPanelDescription">
                                درج عده های انتخاباتی
                            </div>
                        </div>
                    </a>
                </li>
                <li class="col-md-12 padding-0  <?php if (strpos($_SERVER['REQUEST_URI'], "veteran") !== false) echo "active"; ?>">
                    <a href="<?php echo base_url('Profile/veteran'); ?>">
                        <i class="zmdi RightpanelIcon">
                            <span class="fa fa-wheelchair"></span>
                        </i>
                        <div class="RightPanelContent">
                            <div class="RightPanleTitle">ایثارگری</div>
                            <div class="RightPanelDescription">
                               درج سوابق جانباری و ایثارگری
                            </div>
                        </div>
                    </a>
                </li>
                <?php if($this->session->userdata('UserLoginInfo')['CandidateStatus'] == 'CandidateAccepted'){ ?>
                    <li class="col-md-12 padding-0  <?php if (strpos($_SERVER['REQUEST_URI'], "finance") !== false) echo "active"; ?>">
                        <a href="<?php echo base_url('Profile/finance'); ?>">
                            <i class="zmdi RightpanelIcon">
                                <span class="fa fa-money"></span>
                            </i>
                            <div class="RightPanelContent">
                                <div class="RightPanleTitle">اطلاعات مالی</div>
                                <div class="RightPanelDescription">
                                    درج خلاصه ای از املاک
                                </div>
                            </div>
                        </a>
                    </li>
                <?php } ?>
                <li class="col-md-12 padding-0">
                    <a href="<?php echo base_url('Profile'); ?>">
                        <i class="zmdi RightpanelIcon">
                            <span class="fa fa-share-square-o"></span>
                        </i>
                        <div class="RightPanelContent">
                            <div class="RightPanleTitle">بازگشت</div>
                            <div class="RightPanelDescription">
                                پیشخوان
                            </div>
                        </div>
                    </a>
                </li>
                <li class="col-md-12 padding-0">
                    <a href="<?php echo base_url('Profile/logOut') ?>">
                        <i class="zmdi RightpanelIcon">
                            <span class="fa fa-share-square-o"></span>
                        </i>
                        <div class="RightPanelContent">
                            <div class="RightPanleTitle">خروج از سیستم</div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>