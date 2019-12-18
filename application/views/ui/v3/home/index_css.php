<style>
    .padding-left-0 {
        padding-left: 0px;
    }

    .right-text-slider {
        float: right;
        direction: rtl;
        text-align: justify;
        color: #fff;
        position: absolute;
        right: 0px;
        z-index: 5;
    }

    .margin-b-15 {
        margin-bottom: 15px;
    }

    .slide-title {
        float: right;
        direction: rtl;
        color: #fff;
        display: inline-block;
        width: 100%;
        text-align: center;
        display: none;
    }

    .slider-form {
        position: absolute;
        z-index: 5;
        left: 0px;
    }

    .slide-title:hover {
        color: #fff;
    }

    .slide-title button {
        background: #d10b20;
        border: 1px solid rgba(253, 183, 46, 0.3);
        margin: 30px 0;
    }

    .slide-title button:hover {
        background: #d10b20;
        border: 1px solid rgba(253, 183, 46, 0.3);
    }

    .slide-title h2 {
        color: #fff;
        font-size: 24px;
        line-height: 45px;
        text-align: center;
        margin-top: 25px;
        word-break: break-word;
    }

    .slide-title h3 {
        color: #fff;
        font-size: 16px;
        line-height: 50px;
        text-align: center;
    }
    .slick-slide a{
        outline: none;
    }
</style>
<style>
    .container-responsive-style {
        padding-top: 85px;
        padding-bottom: 85px;
        min-height: calc(100vh - 135px)
    }

    .slider-form-title {
        color: #fff;
        font-size: 28px;
        direction: rtl !important;
        display: inline-block;
    }

    .slider-form-title-xs {
        color: #fff;
        font-size: 20pt;
    }

    .response-background {
        background-color: #022d6d;
    }

    .slider-form-text {
        color: #fff;
        font-size: 13px;
        margin-top: 15px;
        margin-bottom: 15px;
    }

    .slider-form-text-xs {
        color: #fff;
        font-size: 15px;
        margin-top: 0px;
        margin-bottom: 5px;
    }

    .slider-timer {
        width: 0px;
        height: 1px;
        background-color: #fdb72e;
        position: absolute;
        top: 0px;
        z-index: 5;
    }

    .overlay {
        position: absolute;
        top: 0;
        width: 100%;
        height: 100%;
        /*background: rgba(0, 0, 0, 0.3);*/
        z-index: 2;
        background-color: #000;
        opacity: 0.8;
        right: 0
    }

    .full-screen-icon {
        position: absolute;
        right: 10px;
        bottom: 2%;
        cursor: pointer;
        z-index: 8;
    }

    .campaign_section_with_slides .container {
        z-index: auto;
    }

    .prev, .next {
        cursor: pointer;
        position: absolute;
        bottom: 4px;
        width: auto;
        padding: 5px 10px 0px 10px;
        margin-top: -22px;
        color: #d10b20;
        font-weight: bold;
        font-size: 26px;
        transition: 0.6s ease;
        border-radius: 0 0px 0px 0;
        user-select: none;
        z-index: 8;
    }

    .next {
        left: 20px;
        border-radius: 0px 0 0 0px;
    }

    .myBtn {
        width: 40px;
        height: 35px;
        text-align: center;
        position: absolute;
        /* top: 0px; */
        bottom: 11px;
        /* left: 0px; */
        right: 60px;
        margin: auto;
        font-size: 16px;
        padding: 10px 10px;
        border: none;
        background: #D10B20;
        color: #fff;
        cursor: pointer;
        border: none;
        z-index: 5;
    }

    .myBtn:hover {
        background: #022D6D;
        border: none;
    }

    .myVideo {
        position: absolute;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        margin: 0px;
        object-fit: fill;
    }

    a.prev:hover {
        color: #02275d;
    }

    a.next:hover {
        color: #02275d;
    }

    @media (max-width: 992px) {
        .myBtn {
            bottom: 5px;
        }

        .overlay {
            width: 100%;
        }

        .slider-timer {
            height: 3px;
        }

        .slider-form {
            position: absolute;
            z-index: 5;
            left: 0px;
            bottom: 10px;
            margin: auto;
            right: 0px;
            text-align: center;
            width: 50%;
        }

        .full-screen-icon {
            bottom: 1.5%;
        }

        .slide-title h2 {
            line-height: 40px;
            padding: 0px 10px 0px 10px;
        }

        .right-text-slider {
            position: relative;
        }

        .container-responsive-style {
            min-height: calc(100vh - 390px);
            padding-top: 5px;
        }
    }
</style>
<style>
    .tb-icon-box-description {
        padding-left: 5px;
        padding-right: 5px;
    }

    .state-news {
        padding: 0 15px;
    }

    .pic {
        height: 160px;
        background-size: cover !important;
        background-position: center !important;
        background-repeat: no-repeat !important;
        box-shadow: 0px 0px 0px 2px #ccc;
        margin-bottom: 0px;
        max-width: 100%;
    }

    .content {
        direction: rtl;
        text-align: justify;
        line-height: 25px;
        color: #000;
        padding: 5px 0;
    }

    .item {
        -webkit-transition: ease-in 0.2s;
        -moz-transition: ease-in 0.2s;
        -ms-transition: ease-in 0.2s;
        -o-transition: ease-in 0.2s;
        transition: ease-in 0.2s;
    }


    .news-slider {
        background: #fff;
        box-shadow: 0px 0px 4px 1px #ccc;
    }

    .news-slider-container .owl-nav {
        position: absolute;
        background: rgba(92, 131, 51, 0.7);
        right: 0;
        bottom: 0;
    }

    .news-slider-container .owl-carousel .owl-nav button.owl-next,
    .news-slider-container .owl-carousel .owl-nav button.owl-prev {
        outline: 0;
        background: 0 0;
        color: inherit;
        border: none;
        padding: 0 !important;
        font: inherit;
        color: #fff;
        font-size: 35px;
        padding: 0px 15px !important;
        text-align: center;
        display: inline-block;
        line-height: 40px;
    }


    .icon-box {
        height: 190px;
        background: #fff;
        border: 8px solid #fbfbfb;
        text-align: center;
        border-bottom: 5px solid #5a8232;
        margin-bottom: 10px;
        border-top: 0;
    }

    .icon-box a {
        color: #688c45;
        line-height: 25px;
        display: inline-block;
    }

    .icon-box i {
        display: block;
        font-size: 75px;
        margin: 20px 0;
        color: #535353;
        font-weight: 900;
    }

    .icon-box:hover i {
        color: #00851a;
    }

    .icon-box span {
        font-size: 18px;
        font-weight: 900;
    }


    .hp-join-the-team-form input::placeholder {
        color: #022d6d;
    }

    video {
        object-fit: cover;
        width: 100%;
    }

</style>
