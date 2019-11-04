<style>
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

    ul.RightPanelUl li > .RightpanelIcon {
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
        font-size: 1.14285714em;
        font-weight: 700;
        color: #777;
    }

    ul.RightPanelUl li .RightPanleTitle ~ .RightPanelDescription {
        margin-top: .25em;
    }

    ul.RightPanelUl li .RightPanelDescription {
        font-weight: 400;
        font-size: 0.85em;
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
        min-height: 100vh;
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
        width: 150px;
        height: 150px;
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
        line-height: 45px;
        font-size: 16px;
        color: #fff;
        padding: 0 25px;
        border-radius: 0;
        cursor: pointer;
    }

    .ButtonRedColor {
        background-color: #D10B20;
    }

    .ButtonBlueColor {
        background-color: #052452;
    }

    .ButtonRedColor:hover {
        background-color: #D10B20;
        opacity: 0.8;
        color: #ccc;
    }

    .ButtonBlueColor:hover {
        background-color: #052452;
        opacity: 0.8;
        color: #ccc;
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

    .RegistrationTypeDiv {
        padding: 15px 0px;
    }

    .BirthDateTitleMarginTop {
        margin-top: 30px;
    }

    .InputNotAllow {
        cursor: not-allowed !important;
        background-color: #eee;
        opacity: 1;
        color: rgba(0, 0, 0, .26);
        border-bottom: 1px dotted rgba(0, 0, 0, .26);
    }

    .form-group-MarginBottom {
        margin-bottom: 30px;
    }

    .LeftPaneAction {
        border-top: 1px solid rgba(160, 160, 160, .2);
        padding: 20px;
    }

    .CommonButtons {
        text-align: center;
        line-height: 45px;
        font-size: 16px;
        background-color: #052452;
        color: #fff;
        padding: 0 25px;
        border-radius: 0;
    }

    .CommonButtons:hover {
        box-shadow: 0 8px 17px 0 rgba(0, 0, 0, .2);
        color: #9e9e9e;
        background-color: #052452;
        opacity: 0.8;
    }

    .CommonButtons:focus {
        box-shadow: 0 8px 17px 0 rgba(0, 0, 0, .2);
        color: #9e9e9e;
        background-color: #052452;
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
        margin-right: 25px;
    }

    .MobileStep ul li a {
        text-decoration: none;
        display: inline-block;
        width: 100%;
        height: 20px;
        background: #999999;
        color: #ffffff;
        border-radius: 3.5px;
        text-shadow: 1px 0px 8px #333;
    }

    .MobileStep ul li.first a {
        background: #022D6D;
        color: #ffffff;
        transition: all 0.5s ease;
    }

    .CandidateLevelType {
        display: none;
    }

    .CandidateMajor {
        display: none;
    }

    .CandidateUniversityName {
        display: none;
    }

    .CandidateDepartment {
        display: none;
    }

    .CandidateeduMajor {
        display: none;
    }

    .GradeNotify {
        color: #D10B20;
        font-size: 14px;
        line-height: 1.7em;
    }

    .list-group-Grade {
        border-radius: 4px;
        margin-bottom: 15px;
    }

    /*radio buttons*/
    .Radio-Buttons {
        display: none;
    }

    .Radio-Display {
        display: inline-block;
    }

    .Radio-Buttons .radio {
        margin: 0.5rem;
    }

    .Radio-Buttons .radio input[type="radio"] {
        position: absolute;
        opacity: 0;
    }

    .Radio-Buttons .radio input[type="radio"] + .radio-label:before {
        content: '';
        background: #f4f4f4;
        border-radius: 100%;
        border: 1px solid #b4b4b4;
        display: inline-block;
        width: 1.4em;
        height: 1.4em;
        position: relative;
        top: -0.2em;
        margin-right: 1em;
        vertical-align: top;
        cursor: pointer;
        text-align: center;
        transition: all 250ms ease;
    }

    .Radio-Buttons .radio input[type="radio"]:checked + .radio-label:before {
        background-color: #3197EE;
        box-shadow: inset 0 0 0 4px #f4f4f4;
    }

    .Radio-Buttons .radio input[type="radio"]:focus + .radio-label:before {
        outline: none;
        border-color: #3197EE;
    }

    .Radio-Buttons .radio input[type="radio"]:disabled + .radio-label:before {
        box-shadow: inset 0 0 0 4px #f4f4f4;
        border-color: #b4b4b4;
        background: #b4b4b4;
    }

    .Radio-Buttons .radio input[type="radio"] + .radio-label:empty:before {
        margin-right: 0;
    }
    /*radio buttons*/

    .ul-background-color-hr {
        margin: 0px auto;
        padding: 20px;
        box-shadow: none;
    }

    .list-group-item:last-child {
        margin-bottom: 0;
        border-bottom-right-radius: .25rem;
        border-bottom-left-radius: .25rem;

    }

    .list-group-item {
        position: relative;
        width: 100%;
        display: inline-block;
        padding: .75rem 1.25rem;
        margin-bottom: -1px;
        background-color: #fff;
        border: 1px solid #ddd;
        min-height: 100px;
    }

    .odd-background-color-div {
        background-color: rgb(238, 238, 238);
        margin-bottom: 3px;
    }

    .extra-padding-top-25 {
        padding-top: 20px;
    }
</style>