<style>
    #page {
        background-color: #f8f8f8;
    }

    .container-wrapper {
        background-color: #f8f8f8;
    }

    .blog-right-panel-main-div {
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        margin: 0 auto;
        background: #ffffff;
        padding-top: 15px;
    }

    .blog-left-panel-main-div {
        padding: 0px;
    }

    .padding-right-style {
        padding-right: 0px;
    }

    .padding-left-style {
        padding-left: 0px;
    }

    /*for left panel*/
    .blog-detail-div {
        display: block;
    }

    .blog-post {
        background-color: #fff;
        margin-bottom: 40px;
        padding: 0px;
    }

    .blog-outer {
        margin-top: 0px;
        box-shadow: 0 0 15px #cccccc57;
        padding: 20px;
        border: 1px solid #f1f1f1;
    }

    .blog-wrapper {
        margin-top: -18px;
        margin-bottom: 18px;
    }

    .blog-post-image {
        overflow: hidden;
        position: relative;
    }

    .blog-post-image-inner {
        overflow: hidden;
        position: relative;
        margin-top: 35px;
        margin-bottom: 0px;
        height: 285px;
    }

    .blog-post-image-inner img {
        width: 640px;
        height: 100%;
    }

    .blog-combine {
        margin-top: 21px;
    }

    .blog-cat-link {
        color: #d10b20;
        text-decoration: none;
        position: relative;
        top: 15px;
    }

    .blog-post-content {
        padding: 0px;
    }

    .blog-cat-link:hover, .blog-cat-link:focus {
        color: #d10b20;
    }

    .blog-combine h2 a {
        color: #222222;
    }

    .blog-post-meta, .blog-post-meta a {
        color: #555555;
        margin-bottom: 5px;
    }

    .blog-post-content-p {
        margin-top: 10px;
        font-size: 15px;
        line-height: 2em;
        margin-bottom: 30px;
        height: 6em;
        overflow: hidden;
        padding-left: 15px;
    }

    .text-center.blog-more-link-button {
        margin-top: -13px;
        text-align: right;
    }

    .blog-more-link-button {
        margin: 0px 0;
    }

    .blog-more-link-button a.btn-default {
        background-color: #D10B20;
        border-color: #D10B20;
        color: #FFF;
        -webkit-border-radius: 0;
        text-transform: uppercase;
        line-height: 38px;
        padding: 0 29px;
        font-size: 18px;
        letter-spacing: 0.1em;
    }

    .blog-more-link-button a.btn-default:hover {
        text-decoration: none;
        background-color: #052452;
        border-color: #052452;
    }

    /*for left panel*/


    /*for right panel*/
    .blog-widget {
        margin: 0 0 1.5em;
    }

    .blog-right-panel-main-div .blog-sidebar-col {
        clear: both;
    }

    .blog-sidebar-col {
        position: relative;
    }

    .blog-widget {
        display: block;
    }

    .blog-widget {
        margin: 0 0 1.5em;
    }

    .blog-sidebar-col .blog-widget {
        background-color: #fff;
    }

    .blog-widget .search-form {
        border: 1px solid #eee;
        position: relative;
    }

    .blog-widget .search-form label {
        display: block;
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
        box-shadow: none !important;
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
        font-size: 13px;
        position: relative;
        display: block;
        padding: 10px 20px;
        background: #052452;
        color: #fff;
        text-transform: uppercase;
        font-weight: 500 !important;
        letter-spacing: 2px;
        margin-bottom: 20px;
        line-height: normal;
    }

    h2.blog-widget-title:after {
        top: 100%;
        right: 30px;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
        border-color: rgba(51, 51, 51, 0);
        border-top-color: #131314;
        border-width: 6px;
        margin-left: -6px;
        z-index: 1;
        background: none;
    }

    h2.blog-widget-title:after {
        border-top-color: #052452;
    }

    .blog-widget ul {
        margin: 0;
        padding: 0;
    }

    .blog-widget ul li {
        padding: 10px;
        list-style: none;
        border-bottom: 1px solid #e1e1e1;
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
        top: 1px;
        right: -10px;
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
        background: #eee none repeat scroll 0 0;
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
        .blog-sidebar-box {
            margin-right: -15px;
        }
    }
</style>