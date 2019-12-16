<style>
    .padding-left-0{
        padding-left: 0px;
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
.slider-form{
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
        font-size: 34px;
        line-height: 50px;
        text-align: center;
    }

    .slide-title h3 {
        color: #fff;
        font-size: 18px;
        line-height: 50px;
        text-align: center;
    }
</style>
<style>
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
        background: rgba(0, 0, 0, 0.3);
        z-index: 2;
        right: 0
    }

    .full-screen-icon {
        position: absolute;
        right: 10px;
        bottom: 3%;
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
        z-index: 5;
    }

    .next {
        left: 20px;
        border-radius: 0px 0 0 0px;
    }

    .myBtn {
        width: 55px;
        height: 55px;
        text-align: center;
        position: absolute;
        top: 0px;
        bottom: 0px;
        left: 0px;
        right: 0px;
        margin: auto;
        font-size: 16px;
        padding: 20px 15px;
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
        #myBtn {
            top: 5%;
            bottom: auto;
        }

        .overlay {
            width: 100%;
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

    video{
        object-fit: cover;
        width: 100%;
    }

</style>
