<style>
    .RightFloat{
        float: right;
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
        margin-top: 40px;
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
    .panel-body{
        padding-right: 0px;
    }
</style>