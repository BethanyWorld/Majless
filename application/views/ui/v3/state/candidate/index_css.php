<?php $_DIR = base_url('assets/ui/v4/'); ?>
<style>
    .filter{
        cursor: pointer;
        display: inline-block;
        background: #0f342f;
        color: #fff;
        padding: 8px 8px;
        min-width: 155px;
        margin: 5px 8px;
        margin-top: 0;
    }
    .filter:hover{
        background: #fdb72e;
    }
    .filter.active{
        background: #fdb72e;
    }

    .wanted{
        font-size: 16px;
        position: absolute;
        right: 0;
        left: 0;
        top: 35px;
        margin: auto;
        padding: 25px 10px;
        line-height: 30px;
        border-radius: 1000%;
        width: 110px;
        background: rgba(255, 0, 0, 0.68);
        color: #fff;
        z-index: 10000;
        transform: rotate(25deg);
    }
    .grayscale{
        filter: grayscale(1);
    }
    /*.Transparency-Obligation {
         filter: grayscale(1);
     }*/

    .rightFloat{
        float: right;
    }
    .padding-0{
        padding: 0px;
    }
    .sign {
        background-image: url("<?php echo  base_url('assets/ui/v4/'); ?>/images/neshan.png");
        background-repeat: no-repeat;
        background-size: cover;
        display: inline-block;
        width: 65px;
        height: 78px;
    }

    .sign.GoldenMerit {
        background-position: 100% 0%;
    }
    .sign.SilverMerit {
        background-position: 100% -75px;
    }
    .sign.OffMerit {
        background-position: 100% -150px;
    }
    .sign.Obligation {
        background-position: 100% -225px;
    }
    .sign.SilverObligation {
        background-position: 100% -300px;
    }
    .sign.OffObligation {
        background-position: 100% -375px;
    }
    .sign.GoldenTransparency {
        background-position: 100% 75%;
    }
    .sign.SilverTransparency {
        background-position: 100% -525px;
    }
    .sign.OffTransparency {
        background-position: 100% 100%;
    }

    .CandidateAreaOverFlow {
        height: 65vh;
        overflow-x: hidden;
        overflow-y: auto;
        position: relative;
        z-index: 100;
        background: #fff;
    }

    #show-box img {
        height: 355px;
        display: inline-block;
        margin-left: 5px;
    }

    .list-group-item {
        padding: 10px 5px;
    }

    label {
        display: inline-block;
        max-width: 100%;
        font-weight: 700;
        margin: 0 2px;
        width: 245px;
        cursor: pointer;
    }

    .wrapper {
        height: 1.5rem;
        width: 3rem;
        border-radius: 2rem;
        position: relative;
        cursor: pointer;
        overflow: hidden;
        box-shadow: 0 0 3px 2px rgba(0, 0, 0, 0.2);
        margin-right: 0;
    }

    .check {
        cursor: pointer;
        position: relative;
        margin: auto;
        -webkit-tap-highlight-color: transparent;
        transform: translate3d(0, 0, 0);
        width: 100%;
    }

    .check:before {
        content: "";
        position: absolute;
        top: -15px;
        left: -15px;
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background: rgba(34, 50, 84, 0.03);
        opacity: 0;
        transition: opacity 0.2s ease;
    }

    .check span {
        font-size: 14px;
    }

    .check svg {
        position: relative;
        z-index: 1;
        fill: none;
        stroke-linecap: round;
        stroke-linejoin: round;
        stroke: #c8ccd4;
        stroke-width: 1.5;
        transform: translate3d(0, 0, 0);
        transition: all 0.2s ease;
        top: 6px;
        margin: 0px 6px;
    }

    .check svg path {
        stroke-dasharray: 60;
        stroke-dashoffset: 0;
    }

    .check svg polyline {
        stroke-dasharray: 22;
        stroke-dashoffset: 66;
    }

    .check:hover:before {
        opacity: 1;
    }

    .check:hover svg {
        stroke: #fdb72e;
    }

    #IranMap .map svg {
        height: 265px !important;
    }

    .inputElectionId {
        display: none;
    }

    .inputElectionId:checked + .check svg {
        stroke: #fdb72e;
    }

    .inputElectionId:checked + .check svg path {
        stroke-dashoffset: 60;
        transition: all 0.3s linear;
    }

    .inputElectionId:checked + .check svg polyline {
        stroke-dashoffset: 42;
        transition: all 0.2s linear;
        transition-delay: 0.15s;
    }


    /**/
    .profile-card, .profile-card * {
        box-sizing: border-box;
    }

    .profile-card {
        position: relative;
        /* width: 400px; */
        height: auto;
        background: #F0F0F0;
        border-radius: 5px;
        margin-bottom: 25px;
        border: 15px solid #fff;
        border-top: 0;
        float: right;
    }

    .profile-card header {
        position: relative;
        width: 100%;
        height: 260px;
        margin: 0;
        padding: 8px;
        background-color: #81AA21;
        background-blend-mode: darken;
        background-position: 50% 0%;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        transition: all 600ms;
        font-size: 0;
    }


    .profile-card header a {
        width: 100px;
        height: 100px;
        margin: 25px auto;
        display: block;
        border-radius: 50%;
        overflow: hidden;
        transition: all 400ms;
        z-index: 5;
    }

    .profile-card header a img {
        position: relative;
        width: 100%;
    }


    .profile-card header a:before {
        position: absolute;
        content: '';
        top: 145px;
        left: 32%;
        width: 35%;
        height: 6px;
        background: #6C901A;
        border-radius: 50%;
        z-index: 5;
        transition: all 400ms;
    }

    .profile-card header h1 {
        position: relative;
        width: auto;
        padding: 5px;
        margin: 0;
        text-align: center;
        font-size: 22px;
        font-weight: 400;
        color: #F0F0F0;
        transition: all 250ms;
        vertical-align: top;
        z-index: 1;
    }

    .profile-card header h1:before {
        position: absolute;
        top: 0;
        left: 0;
        content: '';
        width: 100%;
        height: 100%;
        background: #81AA21;
        transition: all 250ms;
        z-index: -1;
        transform: scale(0, 1);
    }


    .profile-card header h2 {
        position: relative;
        width: auto;
        padding: 0px;
        text-align: center;
        font-size: 16px;
        font-weight: 300;
        color: #F0F0F0;
        transition: all 250ms;
        margin: 0;
        z-index: 1;
    }

    .profile-card header h2:before {
        position: absolute;
        top: 0;
        left: 0;
        content: '';
        width: 100%;
        height: 100%;
        background: #81AA21;
        transition: all 250ms 0.05s;
        z-index: -1;
        transform: scale(0, 1);
    }

    .profile-card header h2:after {
        position: absolute;
        top: 0px;
        left: 75px;
        content: '';
        width: 100px;
        border-top: 1px solid #f0f0f0;
        transition: all 250ms 0.05s;
        z-index: 1;
        transform: scale(0, 1);
    }

    .profile-card .profile-bio {
        position: relative;
        width: auto;
        margin: 0;
        height: 0;
        overflow: hidden;
        transition: all 250ms;
    }


    .profile-card .profile-bio p {
        position: relative;
        width: auto;
        margin: 0;
        text-indent: 1.5em;
        text-align: justify;
        color: #1B2024;
        padding: 35px 25px 25px 25px;
        transform: translateY(-100%);
        opacity: 0;
    }

    .profile-card:hover .profile-bio p {
        transition: all 600ms;
        transform: translateY(0%);
        opacity: 1;
    }

    .profile-card .profile-social-links {
        position: relative;
        margin: 0;
        padding: 0;
        list-style-type: none;
        border-top: 1px solid #FFFFFF;
        font-size: 0;
    }

    .profile-card .profile-social-links li {
        position: relative;
        width: 100%;
        margin: 0;
        padding: 0;
        display: inline-block;
        text-align: center;
        transition: all 250ms;
    }


    .profile-card .profile-social-links li:nth-child(1) {
        border-bottom-left-radius: 5px;
    }

    .profile-card .profile-social-links li:nth-child(2) {
        border-left: 1px solid #FFFFFF;
        border-right: 1px solid #FFFFFF;
    }

    .profile-card .profile-social-links li:nth-child(3) {
        border-bottom-right-radius: 5px;
    }

    .profile-card .profile-social-links li a {
        position: relative;
        display: block;
        padding: 10px 6px;
    }

    .profile-card .profile-social-links li a img {
        position: relative;
        display: block;
        width: 100%;
    }


    .rating {
        display: flex;
        width: 100%;
        justify-content: center;
        overflow: hidden;
        flex-direction: row-reverse;
        height: 40px;
        position: relative;
    }

    .rating-0 {
        -webkit-filter: grayscale(100%);
        filter: grayscale(100%);
    }

    .rating > input {
        display: none;
    }

    .rating > label {
        cursor: pointer;
        width: 40px;
        height: 40px;
        margin-top: auto;
        background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23e3e3e3' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: center;
        background-size: 76%;
        transition: .3s;
    }

    .rating > input:checked ~ label,
    .rating > input:checked ~ label ~ label {
        background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23fcd93a' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
    }

    .rating > input:not(:checked) ~ label:hover,
    .rating > input:not(:checked) ~ label:hover ~ label {
        background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23d8b11e' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
    }

    .feedback {
        max-width: 100%;
        background-color: #fff;
        width: 100%;
        padding: 3px;
        border-radius: 8px;
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        align-items: center;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.05);
    }

    @media (max-width: 992px) {
        .fixposition-scroll {
            position: relative;
            width: auto;
            bottom: 0px;
        }

        .bottom-fix {
            bottom: 0%;
        }

        .sidebar {
            padding: 0px;
            margin: auto;
        }

        .responsive-style-auto-margin {
            padding: 0px;
            margin: auto;
        }

        #show-box img {
            height: 185px;
            display: inline-block;
            margin-left: 5px;
        }

        .over-flow-style {
            overflow: hidden !important;
        }

        .page-caption {
            font-size: 12px;
        }

        .margin-t-response {
            margin-top: 15px;
        }
    }

    /**/


    .candidate-modal {
        z-index: 20000;
    }

    .candidate-modal .modal-header {
        text-align: right;
    }

    button {
        outline: none;
    }

    .modal-body {
        margin: auto;
        display: flex;
        padding: 10px;
    }

    .hidden-box1 {
        height: 960px;
        width: 540px;
        top: 0px;
        left: 0px;
        right: -6000px;
        position: absolute;
        z-index: -2;
    }

    .hidden-box2 {
        height: 1000px;
        width: 1000px;
        top: 0px;
        left: 0px;
        right: -6000px;
        position: absolute;
        z-index: -2;
    }

    /*.hidden-box2 .modal-border{*/
    /*    height: 100%;*/
    /*}*/
    /*.hidden-box1 .modal-border{*/
    /*    height: 100%;*/
    /*}*/
    .mp {
        cursor: pointer;
        position: relative;
        overflow: hidden;
        z-index: 100;
        height: 330px;
    }

    .mp-brief {
        padding: 5px 0 15px;
        background: #f1f1f1;
        text-align: center;
        overflow: hidden;
        position: relative;
        border-bottom: 5px solid #fdb72e;
        margin-bottom: 20px;
        height: 100%;
        min-height: 400px;
    }

    .show-box {
        width: 100%;
    }

    .mp-brief .pic {
        width: 100%;
        height: 225px;
        border-radius: 0;
        transition: all 0.9s ease 0s;
        box-shadow: 0 0 0 0px #f7f5ec;
        position: relative;
        z-index: 2;
    }

    .mp-brief .pic.deactive {
        filter: grayscale(200%);
    }


    .invite-button {
        padding: 5px 15px;
        background: #fdb72e;
        color: #000;
        font-weight: 900;
    }

    .invite-button:hover {
        color: #000;
        outline: none;
        background-color: #fdb72e;
    }

    .invite-button:focus {
        color: #000;
        outline: none;
        background-color: #fdb72e;
    }


    .invite-link {
        padding: 5px 15px;
        background: #fdb72e;
        color: #000;
        font-weight: 900;
    }

    .invite-link:hover {
        color: #000;
        outline: none;
        background-color: #fdb72e;
    }

    .invite-link:focus {
        color: #000;
        outline: none;
        background-color: #fdb72e;
    }

    .mp-brief .pic img {
        max-width: 100%;
        width: auto !important;
        height: auto;
        border-radius: 0;
        transition: all 0.9s ease 0s;
        box-shadow: 0 0 0 0px #f7f5ec;
        transform: scale(1) !important;
        position: relative;
        z-index: 2;
        max-height: 255px;
    }

    /*.mp-brief .pic:before {*/
    /*    content: "";*/
    /*    width: 100%;*/
    /*    height: 100%;*/
    /*    border-radius: 50%;*/
    /*    background: #fdb72e;*/
    /*    position: absolute;*/
    /*    bottom: 135%;*/
    /*    right: 0;*/
    /*    left: 0;*/
    /*    opacity: 1;*/
    /*    transform: scale(3);*/
    /*    transition: all 0.3s linear 0s;*/
    /*}*/

    .mp-brief .pic:after {
        content: "";
        width: 100%;
        height: 100%;
        border-radius: 25%;
        background: #ffffff00;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1;
        transition: all 0.3s linear 0s;
    }

    .close-btn, .close-btn:hover {
        background-color: #fdb72e;
        border-radius: 0px;
        color: #fff;
    }

    .close-btn {
        background-color: #fdb72e;
        border-radius: 0px;
        color: #fff;
    }

    .close-icon {
        color: #fdb72e;
        opacity: 1;
        font-weight: bold;
    }

    .close-btn:hover, .close-btn:focus {
        color: #fff;
        outline: none;
    }

    .close-icon:hover {
        color: #fdb72e;
    }

    .receive-btn:hover, .receive-btn:focus {
        color: #fff;
        outline: none;
    }

    .receive-btn {
        color: #fff;
        background-color: #052452;
        border-radius: 0;
    }

    .panel-title {
        margin-top: 0;
        margin-bottom: 0;
        font-size: 12px;
        color: inherit;
    }

    h3.candidateName {
        font-size: 11px;
        font-weight: 900;
        text-align: center;
        min-height: 80px;
    }


    /*for modal body*/
    .modal-border {
        /*border: 20px solid #ECAF3A;*/
        /*height: 100%;*/
        /*background-image: url("../images/Candidate/post-bg.png");*/
        /*background-repeat: no-repeat;*/
        /*background-size: contain;*/
        /*background-position: center;*/
        /*height: 72vh;*/
        /*padding: 10% 0%  20% 0%;*/
        position: relative;
        width: 50%;
        text-align: center;
        float: right;
    }

    .inner-border-div {
        /*height: 100%;*/
        /*background-color: #ccc;*/
        /*border-top-left-radius: 20%;*/
        /*border-bottom-right-radius: 20%;*/
        /*padding-top: 50px;*/
    }

    .inner-border-div img {
        position: relative;
        width: 100%;
        height: 100%;
    }

    #hidden-box2 .inner-border-div img {
        position: relative;
        width: auto;
        height: auto;
    }

    .candidate-image-div {
        /*background-image: url(../images/Candidate/post-frame.png);*/
        /*height: 200px;*/
        /*width: 200px;*/
        /*background-repeat: no-repeat;*/
        /*background-size: contain;*/
        /*background-position: center;*/
        margin: auto;
        position: absolute;
        top: 35px;
        left: 0px;
        right: 0px;
        text-align: center;
    }

    .candidate-inner-div-image {
        /*height:328px;*/
        /*background-image: url(../images/Candidate/post-man.png);*/
        /*background-repeat: no-repeat;*/
        /*background-size: contain;*/
        /*background-position: center;*/
        margin: auto;
        position: absolute;
        left: 0px;
        right: 0px;
        bottom: 0px;
        top: -7px;
        text-align: center;
        padding-top: 20px;
    }

    /*.candidate-image-div img {*/
    /*    width: 100%;*/
    /*    height: 100%;*/
    /*}*/
    .candidate-name {
        text-align: center;
        color: #0B5E4A;
    }

    .candidate-name h1, .candidate-name h3 {
        color: #0B5E4A;
    }

    .candidate-name h1 {
        font-weight: bold;
        font-size: 26px;
        padding-top: 0px;
        margin-top: 0px;
        text-align: center;
        margin-bottom: 0px;
    }

    #hidden-box2 .candidate-name h1 {
        font-weight: bold;
        font-size: 46px;
        padding-top: 0px;
        margin-top: 0px;
        margin-bottom: 0px;
        padding-bottom: 0px;
        text-align: center;
    }

    #hidden-box1 .candidate-name h1 {
        font-weight: 900;
        font-size: 32px;
        padding-top: 0px;
        margin-top: 0px;
        margin-bottom: 0px;
        padding-bottom: 0;
        text-align: center;
    }

    .candidate-text-invite {
        color: #0B5E4A;
        text-align: center;
        font-size: 20px;
        font-weight: 500;
    }

    #hidden-box1 .candidate-text-invite {
        color: #0B5E4A;
        text-align: center;
        font-size: 27px;
        font-weight: 500;
    }

    #hidden-box2 .candidate-text-invite {
        color: #0B5E4A;
        text-align: center;
        font-size: 35px;
        font-weight: 500;
    }

    .candidate-text-invite p {
        margin: 0px;
        line-height: normal;
    }

    .candidate-text-invite a {
        cursor: pointer;
        color: #0B5E4A;
        text-align: center;
    }

    .tttt {
        position: absolute;
        top: 50%;
        margin: auto;
        left: 0px;
        right: 0px;
    }

    #hidden-box1 .tttt {
        position: absolute;
        top: 28%;
        margin: auto;
        left: 0px;
        right: 0px;
    }

    #hidden-box1 .candidate-image-div {
        top: 60px;
    }

    #hidden-box1 .modal-border {
        height: 100%;
        width: 100%;
    }

    #hidden-box1 .inner-border-div {
        height: 100%;
    }

    #hidden-box2 .tttt {
        position: absolute;
        top: 28%;
        margin: auto;
        left: 0px;
        right: 0px;
    }

    #hidden-box2 .candidate-image-div {
        top: 45px;
    }

    #hidden-box2 .modal-border {
        height: 100%;
        width: 100%;
    }

    #hidden-box2 .inner-border-div {
        height: 100%;
    }

    .mp-brief:hover .pic img {
        box-shadow: 0 0 0 0px #f7f5ec !important;
        transform: scale(1);
    }
    .inner-candidate-image {
        background: url(<?php echo $_DIR; ?>/images/post-frame.png);
        padding: 15px 25px 19px 21px;
        background-size: contain;
        background-repeat: no-repeat;
        width: 140px !important;
        background-position: center;
    }
    #hidden-box2 .inner-candidate-image {
        background: url(<?php echo $_DIR; ?>/images/post-frame.png);
        padding: 34px 51px 45px 45px;
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
        width: 335px !important;

    }
    #hidden-box1 .inner-candidate-image {
        background: url(<?php echo $_DIR; ?>/images/story-frame.png);
        padding: 25px 33px 33px 28px;
        background-size: contain;
        background-repeat: no-repeat;
        width: 240px !important;
        background-position: center;

    }
    /*for modal body*/
    .election {
        background: #e5e5e5;
        padding: 10px 4px;
        font-size: 10px;
        color: #000;
    }
    /*for right panel*/
    .blog-widget {
        margin: 0;
        margin-bottom: 7px !important;
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
        background-color: #fdb72e;
        border: 0;
        color: #000;
        font-size: 14px;
        height: 100%;
        padding-right: 18px;
        position: absolute;
        left: 0;
        top: 0;
        transition: all 0.3s ease 0s;
        border-radius: 0;
    }
    .blog-widget .blog-search-submit:hover {
        color: #000;
    }
    .blog-search-submit {
        background-color: #d6002a;
    }
    .blog-widget-title {
        background: #d6002a;
    }
    .sidebar-xs {
        cursor: pointer;
        position: absolute;
        color: #000;
        font-size: 30px;
        line-height: 30px;
        height: 30px;
        top: 0px;
        margin-top: -15px;
        right: 0px;
        display: inline-block;
    }
    .mp-section:before {
        z-index: -1;
    }
    .sidenav {
        height: 100vh;
        width: 0;
        position: fixed;
        z-index: 20000;
        top: 0;
        right: 0;
        background-color: #fff;
        overflow-x: hidden;
        transition: 0.4s;
        padding-top: 15px;
        display: block;
        overflow-y: scroll;
    }
    .sidenav .panel-title {
        color: #fff;
    }
    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #022d6d;
        display: block;
        transition: 0.3s;
    }
    .sidenav a:hover {
        color: #f1f1f1;
    }
    .sidenav .closebtn {
        position: absolute;
        bottom: 0px;
        left: 0px;
        margin-right: 5px;
        background-color: #fdb72e;
        color: #FFF;
        border-radius: 4px;
        text-align: center;
        text-transform: uppercase;
        opacity: 1;
        z-index: 10000;
        text-decoration: none !important;
        font-size: 14px;
        cursor: pointer;
        padding: 5px;
    }
    #main {
        transition: margin-left .5s;
        padding: 0px;
    }
    @media screen and (max-height: 450px) {
        .sidenav {
            padding-top: 15px;
        }

        .sidenav a {
            font-size: 18px;
        }
    }
    @media screen and (max-width: 992px) {
        .sidenav .list-group {
            margin: 0px;
        }

        .sidenav .panel-default {
            margin: 0px;
            padding-bottom: 10px;
            position: relative;
        }
    }
    .filter-button {
        cursor: pointer;
        background-color: #d10b20;
        color: #fff;
        margin: auto;
        border-radius: 0px;
    }
    .new-style-button-xs {
        background-color: #fdb72e;
        bottom: 10px;
        color: #FFF;
        border-radius: 4px;
        position: fixed;
        left: 10px;
        text-align: center;
        text-transform: uppercase;
        opacity: 1;
        z-index: 10000;
        text-decoration: none !important;
        font-size: 14px;
        cursor: pointer;
        padding: 15px;
    }
    .invite {
        display: inline-block;
        width: 100%;
        padding: 8px 4px;
        font-size: 14px;
        text-align: center;
        background: #fdb72e;
        color: #000;
        margin-bottom: 10px;
        font-weight: 900;
    }
    .invite:hover {
        color: #000;
    }
    /*for tag*/
    .badge {
        position: relative;
        z-index: 1;
        height: 50px;
        flex: 1 0;
        background: none;
    }
    .badge img {
        width: 35px;
        height: 100%;
    }
    #bug:target {
        outline: 4px solid #ccc;
    }
    .tabPanel-widget {
        position: relative;
        background: #095644;
    }
    .tabPanel-widget > label {
        position: absolute;
        z-index: 1;
    }
    .tabPanel-widget > label,
    .tabPanel-widget > h2 {
        font-size: 1.1em;
        width: 9em;
        height: 2em;
        line-height: 2em;
    }
    .tabPanel-widget > h2 {
        position: relative;
        margin: 0;
        text-align: center;
        background: #095644;
        color: #fff;
    }
    .tabPanel-widget > label {
        border-left: 1px solid #fff;
    }
    .tabPanel-widget > label ~ label,
    .tabPanel-widget > h2 ~ h2 {
        position: absolute;
        top: 0;
    }
    .tabPanel-widget label:nth-child(1),
    .tabPanel-widget h2:nth-child(3) {
        right: 0em;
    }
    .tabPanel-widget label:nth-child(5),
    .tabPanel-widget h2:nth-child(7) {
        right: 9em;
    }
    .tabPanel-widget label:nth-child(9),
    .tabPanel-widget h2:nth-child(11) {
        right: 18em;
    }
    .tabPanel-widget input + h2 + div {
        position: absolute !important;
        clip: rect(1px, 1px, 1px, 1px);
        padding:0 !important;
        border:0 !important;
        height: 1px !important;
        width: 1px !important;
        overflow: hidden;
    }
    .tabPanel-widget input:checked + h2 + div {
        position: static !important;
        padding: 1em !important;
        height: auto !important;
        width: auto !important;
    }
    .tabPanel-widget label:hover {
        cursor: pointer;
    }
    .tabPanel-widget > div {
        background: #fff;
        padding: 1em;
    }
    .tabPanel-widget input[name="tabs"] {
        opacity: 0;
        position: absolute;
    }
    .tabPanel-widget input[name="tabs"]:focus + h2 {
        outline: 1px dotted #000;
        outline-offset: 10px;
    }
    .tabPanel-widget:hover h2 {
        outline: none !important;
    }
    .tabPanel-widget input[name="tabs"]:checked + h2 {
        background: #0f342f;
    }
    .tabPanel-widget input[name="tabs"]:checked + h2:after {
        content: '';
        margin: auto;
        position: absolute;
        bottom: -10px;
        left: 0;
        right: 0;
        width: 0;
        height: 0;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-top: 10px solid #333;
    }
    @media screen and (max-width: 45em) {
        .tabPanel-widget label,
        .tabPanel-widget input[name="tabs"] {
            display: none;
        }
        .tabPanel-widget > input + h2 + div {
            display: block !important;
            position: static !important;
            padding: 1em !important;
            height: auto !important;
            width: auto !important;
        }

        .tabPanel-widget h2 {
            width: auto;
            position: static !important;
            background: #999 !important;
        }

        .tabPanel-widget h2:after {
            display: none !important;
        }

    }
    /*for tab panel */
</style>
