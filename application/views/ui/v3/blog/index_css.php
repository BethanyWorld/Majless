<style>
    .padding-0 {
        padding: 0px;
    }

    #page {
        background-color: #f8f8f8;
    }

    .container-wrapper {
        background-color: #f8f8f8;
    }

    .blog-right-panel-main-div {
        margin: 0 auto;
        padding-top: 0px;
    }

    .padding-right-style {
        padding-right: 0px;
    }

    .padding-left-style {
        padding-left: 0px;
    }

    /*for breadcrumb*/
    .breadcrumb {
        padding: 1px 20px;
        border-radius: 0;
        margin-bottom: 30px;
        background-color: #022d6d;
    }

    .blog-detail-breadcrumb {
        margin-top: 18px;
    }

    .blog-breadcrumb-ul-style {
        display: table-cell;
        vertical-align: middle;
        float: none;
        overflow: hidden;
        zoom: 1;
        padding-right: 15px;
    }

    .breadcrumb li {
        font-size: 15px;
        line-height: 17px;
        color: #fff;
        font-weight: 300;
        display: inline-block;
    }

    .breadcrumb ul li a {
        color: #fff;
    }

    .breadcrumb li + li:before {
        font-family: FontAwesome;
        color: inherit;
        padding: 0 10px;
        content: "\f100";
    }

    /*for breadcrumb*/

    /*for right panel*/
    .blog-widget {
        margin: 0 0 0;
    }

    .blog-right-panel-main-div .blog-sidebar-col {
        clear: both;
    }

    .blog-sidebar-col {
        position: relative;
        padding: 0px;
    }

    .blog-widget {
        display: block;
    }

    .blog-widget {
        margin: 0 0 0;
    }

    /*.blog-sidebar-col .blog-widget {*/
    /*    background-color: #fff;*/
    /*}*/

    .blog-widget .search-form {
        border: 1px solid #eee;
        position: relative;
    }

    .blog-widget .search-form label {
        display: block;
    }

    .blog-widget-search {
        margin-bottom: 15px;
    }

    .blog-sidebar-col .blog-widget.blog-widget-search label {
        margin-bottom: 0;
    }

    .blog-text-search {
        border: 0;
        clip: rect(1px, 1px, 1px, 1px);
        clip-path: inset(50%);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute !important;
        width: 1px;
        word-wrap: normal !important;
    }

    .blog-widget .search-form .blog-search-field {
        border: 0;
        font-size: 12px;
        font-style: italic;
        font-weight: 300;
        padding: 13px 10px 12px 20px;
        width: 100%;
        background-color: transparent;
    }

    input[type="submit"] {
        -webkit-appearance: button;
        cursor: pointer;
    }

    input[type="submit"] {
        border: 1px solid;
        border-color: #ccc #ccc #bbb;
        border-radius: 3px;
        background: #e6e6e6;
        color: #FFF;
        font-size: 14px !important;
        font-size: 0.75rem;
        line-height: 1;
        padding: .6em 1em .4em;
    }

    .blog-widget .blog-search-submit {
        background-color: #d10b20;
        border: 0;
        color: #fff;
        font-size: 14px;
        height: 100%;
        padding-right: 18px;
        position: absolute;
        left: 0;
        top: 0;
        transition: all 0.3s ease 0s;
        border-radius: 0;
    }

    .blog-search-submit {
        background-color: #d6002a;
    }

    .blog-widget-title {
        background: #d6002a;
    }

    h2.blog-widget-title {
        float: left;
        width: 100%;
        font-size: 16px;
        position: relative;
        display: block;
        padding: 10px 20px;
        color: #fff;
        text-transform: uppercase;
        font-weight: 500 !important;
        margin-bottom: 20px;
        line-height: 30px;
        background: linear-gradient(to bottom, #052452, #022d6d) !important;
    }

    /*.blog-widget ul {*/
    /*    margin: 0;*/
    /*    padding: 0;*/
    /*}*/

    .blog-widget ul li {
        list-style: none;
    }

    .blog-widget ul li a {
        position: relative;
    }

    .blog-sidebar-col .blog-widget ul li a {
        color: #333;
    }

    .blog-sidebar-col .blog-widget ul li:last-child {
        border-bottom: 0;
        padding-bottom: 0;
    }

    .blog-widget-archive ul li a:after {
        font-family: 'FontAwesome';
        content: "\f100";
        position: absolute;
        top: -5px;
        right: -15px;
    }

    .blog-widget-archive ul li a {
        padding-right: 5px;
    }

    .blog-sidebar-box {
        background-color: rgba(255, 255, 255, 0.9);
        padding: 0px;
        position: relative;
        margin-bottom: 15px;
        clear: both;
    }

    .blog-sidebar-box h3 {
        background: #ececec none repeat scroll 0 0;
        font-size: 15px;
        margin-bottom: 20px;
        padding: 10px 15px;
        text-align: center;
        text-transform: uppercase;
        color: #043174;
        line-height: normal;
        font-weight: bold;
    }

    .blog-display-style {
        display: inline-block;
    }

    .blog-popular-div {
        overflow: hidden;
        zoom: 1;
    }

    .blog-popular-div:first-child {
        margin-top: 0;
    }

    .blog-popular-div-left {
        padding-right: 10px;
        vertical-align: top;
    }

    .blog-sidebar-box .blog-popular-div-left {
        content: "";
        display: block;
        float: right;
        height: auto;
        width: 75px;
    }

    .blog-popular-div-left a {
        color: #d6002a;
    }

    .blog-popular-div-body {
        display: table-cell;
        vertical-align: top;
        width: 10000px;
        overflow: hidden;
        zoom: 1;
    }

    .blog-popular-title {
        margin-top: 0;
        margin-bottom: 5px;
    }

    .blog-popular-title {
        display: block;
        margin-bottom: 12px;
        padding-right: 10px;
        font-size: 14px;
        font-weight: 700;
        line-height: 1.71;
        color: #333;
        letter-spacing: 0.05em;
    }

    .blog-sidebar-box .blog-popular-title {
        font-size: 12px;
        margin-bottom: 0px;
    }

    .blog-popular-title a {
        color: #444;
    }

    .blog-popular-title a:hover {
        color: #3ebcd8;
    }

    .popular-date-div {
        font-size: 11px;
        color: #999;
        display: inline-block;
        padding-right: 10px;
    }

    .blog-recent-post .blog-popular-div-left {
        content: "";
        display: block;
        float: right;
        height: auto;
        width: 75px;
    }

    .blog-recent-post .blog-popular-div {
        margin-bottom: 15px;
    }

    /*for right panel*/


    /*for left panel*/
    .blog-detail-page-image {
        /*height: 450px;*/
        padding-left: 0px;
    }

    .blog-detail-page-image img {
        height: auto;
    }

    .blog-detail-desc-main-div {
        padding: 40px 60px 60px;
        border-color: #e9e9e9;
        border-style: solid;
        border-width: 0 1px 1px 1px;
        background-color: #fff;
    }

    .blog-detail-page-desc-main-div {
        padding-right: 15px;
        padding-left: 0px;
    }

    .blog-categorized-text {
        text-align: center;
        color: #052452;
        font-weight: bold;
    }

    .blog-detail-desc-main-div {
        text-align: center;
    }

    .blog-detail-desc-main-div a {
        color: #1d434c;
    }

    .blog-detail-title {
        text-align: center;
        font-weight: bold;
        font-size: 36px;
        line-height: 1.2;
        margin: 14px 0;
        cursor: pointer;
    }

    .blog-detail-desc-main-div a:hover {
        color: #d10b20;
    }

    .blog-detail-desc-main-div a .blog-detail-title:hover {
        color: #d10b20;
    }

    .blog-detail-page-separator {
        margin-top: 20px;
    }

    h4.blockquote-reverse {
        padding-right: 15px;
        padding-left: 0;
        text-align: right;
        border-right: 5px solid #567e2c;
        border-left: 0;
        line-height: 26px;
        font-size: 16px;
        color: #007ac7;
        font-weight: 900;
    }

    .blog-contents-div {
        text-align: right;
        padding: 0px;
        margin-top: 15px;
    }

    .blog-comment-div {
        margin-top: 50px;
        padding:0px ;
    }

    .blog-comment-div h2 {
        color: #000;
        font-size: 18px !important;
        line-height: 40px;
        border-bottom: 1px solid #567e2c;
        border-top: 1px solid #567e2c;
        padding: 10px 0;
        margin: 25px 0;
        font-weight: 900;
    }
    .blog-comment-div h2 i {
        padding-left: 10px;
    }
    .blog-comment-form-div{
        text-align: right;
    }
    .blog-comment-form-div .form-group{
        width: 100%;
    }
    .blog-comment-form-div textarea{
        resize: none;
        height: 200px;
    }
    .blog-send-comment-button-div button{
        float: left;
        background-color: #d10b20;
        color: #fff;
        border-radius: 0px;
        line-height: 45px;
        padding: 0 25px;
    }
    .blog-send-comment-button-div button:hover{
        background-color: #d10b20;
        color: #fff;
    }
    /*for left panel*/


    @media (max-width: 992px) {
        .blog-detail-div {
            padding: 0px;
        }

        .response-style-for-left-div {
            padding: 0px;
            margin-top: 15px;
        }
    }

    @media (max-width: 768px) {
        .blog-detail-page-desc-main-div {
            padding-right: 0px;
            padding-left: 0px;
        }

        .padding-left-style {
            padding-left: 0px;
            padding-right: 0px;
        }

        .blog-detail-page-image {
            height: 450px;
            padding-right: 0px;
            padding-left: 0px;
        }

        .blog-detail-page-image img {
            height: 100%;
        }

        .blog-sidebar-box {
            margin-right: 0px;
        }
    }

</style>