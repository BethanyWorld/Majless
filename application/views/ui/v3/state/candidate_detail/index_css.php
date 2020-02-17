<style>
    .color-animation {
        animation: colorchange 1s;
        -webkit-animation: colorchange 1s;
        animation-iteration-count: infinite;
    }
    @keyframes colorchange {
        0%   {background: #fdb72e;}
        50% {background: #fd892d;}
        100%   {background: #fdb72e;}
    }
    @-webkit-keyframes colorchange /* Safari and Chrome - necessary duplicate */
    {
        0%   {background: #fdb72e;}
        50% {background: #fd892d;}
        100%   {background: #fdb72e;}
    }
    hr {
        margin-top: 20px;
        margin-bottom: 20px;
        border: 0;
        border-top: 2px dashed #095644;
        background-color: transparent;
    }
    .padding-l-0{
        padding-left: 0px;
    }
    .form-control[disabled]{
        background-color: #fff;
    }
    .padding-r-0{
        padding-right: 0px;
    }
    .RightFloat{
        float: right;
    }
    strong.colored {
        color: #fdb72e;
    }
    strong.colored.bg-white {
        color: #000000;
    }
    .profile-image{
        margin: auto;
    }
    .list-group span.caption {
        display: inline-block;
        color: #000;
        background: #f4f4f4;
        padding: 15px 15px;
        min-width: 120px;
        text-align: right;
    }

    .list-group span.content {
        display: inline-block;
        margin-right: 14px;
    }

    .list-group-item {
        padding: 0;
    }

    .table tr th {
        text-align: right !important;
        padding: 10px 6px !important;
        background: #eaeaea;
    }

    .table tbody tr td, .table tbody tr th {
        vertical-align: middle !important;
        font-size: 16px;
        padding: 10px 8px;
    }

    .nav > li > a {
        position: relative;
        display: block;
        padding: 10px 6px;
    }

    .nav-tabs > li {
        float: right;
        margin-bottom: -1px;
    }

    .personal-info-container {

    }

    .personal-info-container li {
        display: inline-block;
        width: 100%;
    }

    .personal-info-container li span:first-child {
        display: inline-block;
        padding: 8px;
        background: #e7e7e7;
        min-width: 105px;
        margin: 2px 0px;
        text-align: right;
    }

    .personal-info-container li span:last-child {
        display: inline-block;
        padding: 8px;
        min-width: 105px;
        s text-align: right;
    }

    .panel-default > .panel-heading {
        color: #fff;
    }

    /*for new page*/
    .padding-left-0{
        padding-left: 0px;
    }
    .right-panel-candidate-detail-ul {
        list-style-type: none;
    }
    .right-panel-candidate-detail-ul li{
        cursor: pointer;
    }
    .right-panel-candidate-detail-ul li a {
        position: relative;
        top: -1.5px;
    }

    .right-panel-candidate-detail-ul li a div {
        top: 0px;
        height: 25px;
        color: #022d6d;
    }
    .right-panel-candidate-detail-ul li a div .fa-mobile{
        font-size: 25px;
    }
    .sidebar ul a:hover {
        color: #fdb72e;
    }
    .panel-default{
        border: none;
        box-shadow: none;
        margin-bottom: 0px;
    }
    .thumbnail{
        margin-bottom: 0px;
    }
    .have-border-bottom{
        border-bottom: 2px solid #fdb72e;
        margin-bottom: 15px;
    }
    .have-border-bottom h4 , h3{
        color: #fff;
        font-weight: bold;
        padding: 10px;
        background: #095644;
        width: 185px;
        margin-bottom: 0px;
        text-align: center;
    }
    .padding-top-15{
        padding-top: 15px;
    }
    .alert-info-candidate{
        background-color: #095644;
        color: #fff;
        text-align: right;
        border-radius: 0px;
    }
    .candidate-description{
        float: right;
        padding: 0px;
        border-bottom: 1px solid #fff;
        padding-bottom: 5px;
    }
    .candidate-description h2{
        color: #fff;
        font-weight: bold;
    }
    .alert-info-candidate h5{
        color: #fff;
        padding-top: 10px;
    }
    .left-candidate-panel-resume{
        background-color: transparent;
        background-image: none !important;
        border: none;
        box-shadow: none;
        text-shadow: none !important;
    }
    .resume-ul{
        list-style-type: none;
    }
    .resume-ul li span{
        color: #0f342f ;
        padding-left: 5px;
        font-size: 10px;
        float: right;
        margin: 8px 5px;
    }
    .resume-ul li{
        margin-bottom: 8px;
    }
    /*for new page*/


    @media (max-width: 992px) {
        .sidebar {
            padding: 0px;
            margin: auto;
        }

        .responsive-style-auto-margin {
            padding: 0px;
            margin: auto;
        }

        .mp-section {
            padding: 0px;
        }

        .nav > li > a {
            position: relative;
            display: block;
            font-weight: bold;
            padding: 10px 4px;
            font-size: 12px;
        }

        .panel-post {
            overflow-y: scroll;
        }
    }

    label {
        display: inline-block;
        max-width: 100%;
        margin-bottom: 5px;
        font-weight: 700;
        font-size: 13px;
    }
    .submit-form{
        background-color: #fdb72e ;
        border: 0;
        color: #000;
        border-radius: 0;
        padding: 10px 25px;
        font-weight: 900;
    }
    .submit-form:hover , .submit-form:focus{
        background-color: #fdb72e ;
        border: 0;
        color: #000;
        outline: none;
    }
    .panel {
        margin-bottom: 10px;
    }
    .have-border-bottom h3{
        font-size: 15px !important;
    }

</style>
<style>
    @media (max-width: 992px) {
        .response-padding {
            padding: 0px;
        }
    }
    .EStates-textArea {
        resize: none;
        min-height: 135px;
        margin-top: 10px;
    }

    .Price:after {
        content: '.';
        position: absolute;
        top: 15px;
        right: -5px;
        font-size: 2em;
    }

    input[type = 'number'] {
        direction: ltr;
    }

    .price-left-side input[type="number"] + label,
    .price-right-side input[type="number"] + label {
        position: absolute;
        font-size: 10px;
        font-weight: 900;
        color: #d10b20;
        /*top: 0;*/
    }
    /*for panel tab*/
    .panel-heading-background {
        background-image: none !important;
    }

    .panel-heading-background .nav-tabs > li > a {
        color: #333;
        text-shadow: none !important;
    }

    .panel-heading-background .nav-tabs > li {
        float: right;
    }

    .panel-heading-background .nav-tabs > li > a {
        margin-right: 0px;
        margin-left: 2px;
    }
    /*for panel tab*/

    .clear-div{
        clear: both;
    }
    .nav-tabs>li>a{
        color: #095644;
    }
    .nav-tabs>li.active>a{
        color:#fdb72e ;
    }
    .panel-default > .panel-heading{
        background-color:#095644  ;
    }
</style>
<style>
    .RightPanelContent {
        padding-top: 0.3em;
    }

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

    ul.RightPanelUl li a {
        width: 100%;
        display: inherit;
    }

    ul.RightPanelUl li .RightpanelIcon {
        line-height: initial;
        font-size: 1.5em;
        margin: 0 0 0 0.8rem;
        width: 40px;
        text-align: center;
        color: #777;
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

    .RightFloat input {
        background: transparent;
        border: none;
        box-shadow: none !important;
        border-bottom: 1px solid #ccc;
        border-radius: 0px;
        padding-bottom: 0px;
        width: 100%;
    }

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

    .MobileStep ul li a .fa-refresh {
        line-height: 10px;
    }

    .MobileStep ul li.first a {
        background: #fdb72e;
        color: #ffffff;
        transition: all 0.5s ease;
    }

    .padding-0 {
        padding: 0px;
    }
</style>