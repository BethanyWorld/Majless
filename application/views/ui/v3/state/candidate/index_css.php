<?php $_DIR = base_url('assets/ui/v4/'); ?>
<style>
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
        background: rgba(34,50,84,0.03);
        opacity: 0;
        transition: opacity 0.2s ease;
    }
    .check span{
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
        stroke: #4285f4;
    }
    #IranMap .map svg {
        height: 265px !important;
    }
    .inputElectionId{
        display: none;
    }
    .inputElectionId:checked + .check svg {
        stroke: #4285f4;
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
    .profile-card, .profile-card *{
        box-sizing: border-box;
    }

    .profile-card{
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

    .profile-card header{
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


    .profile-card header a{
        width: 100px;
        height: 100px;
        margin: 25px auto;
        display: block;
        border-radius: 50%;
        overflow: hidden;
        transition: all 400ms;
        z-index: 5;
    }

    .profile-card header a img{
        position: relative;
        width: 100%;
    }



    .profile-card header a:before{
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

    .profile-card header h1{
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

    .profile-card header h1:before{
        position: absolute;
        top: 0;
        left: 0;
        content:'';
        width: 100%;
        height: 100%;
        background: #81AA21;
        transition: all 250ms;
        z-index: -1;
        transform: scale(0,1);
    }


    .profile-card header h2{
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

    .profile-card header h2:before{
        position: absolute;
        top: 0;
        left: 0;
        content:'';
        width: 100%;
        height: 100%;
        background: #81AA21;
        transition: all 250ms 0.05s;
        z-index: -1;
        transform: scale(0,1);
    }

    .profile-card header h2:after{
        position: absolute;
        top: 0px;
        left: 75px;
        content:'';
        width: 100px;
        border-top: 1px solid #f0f0f0;
        transition: all 250ms 0.05s;
        z-index: 1;
        transform: scale(0,1);
    }

    .profile-card .profile-bio{
        position: relative;
        width: auto;
        margin: 0;
        height: 0;
        overflow: hidden;
        transition: all 250ms;
    }


    .profile-card .profile-bio p{
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

    .profile-card:hover .profile-bio p{
        transition: all 600ms;
        transform: translateY(0%);
        opacity: 1;
    }

    .profile-card .profile-social-links{
        position: relative;
        margin: 0;
        padding: 0;
        list-style-type: none;
        border-top: 1px solid #FFFFFF;
        font-size: 0;
    }

    .profile-card .profile-social-links li{
        position: relative;
        width: 100%;
        margin: 0;
        padding: 0;
        display: inline-block;
        text-align: center;
        transition: all 250ms;
    }


    .profile-card .profile-social-links li:nth-child(1){
        border-bottom-left-radius: 5px;
    }

    .profile-card .profile-social-links li:nth-child(2){
        border-left: 1px solid #FFFFFF;
        border-right: 1px solid #FFFFFF;
    }

    .profile-card .profile-social-links li:nth-child(3){
        border-bottom-right-radius: 5px;
    }

    .profile-card .profile-social-links li a{
        position: relative;
        display: block;
        padding: 10px 6px;
    }

    .profile-card .profile-social-links li a img{
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
        .sidebar{
            padding: 0px;
            margin: auto;
        }
        .responsive-style-auto-margin{
            padding: 0px;
            margin: auto;
        }
    }
    /**/



    .candidate-modal{
        z-index: 20000;
    }
    .candidate-modal .modal-header{
        text-align: right;
    }
    button {
        outline: none;
    }

    .modal-body {
        margin: auto;
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
        background: #f9f9f9;
        text-align: center;
        overflow: hidden;
        position: relative;
        border-bottom: 5px solid #da1f26;
        margin-bottom: 25px;
        height: 100%;
    }

    .mp-brief .pic {
        width: 100%;
        height: 225px;
        border-radius: 10%;
        transition: all 0.9s ease 0s;
        box-shadow: 0 0 0 14px #f7f5ec;
        transform: scale(.7);
        position: relative;
        z-index: 2;
    }

    .invite-button {
        padding: 15px;
        background: #da1f26;
        color: #fff;
    }

    .invite-button:hover, .invite-button:focus {
        color: #fff;
        outline: none;
        background-color:#052452 ;
    }

    .mp-brief .pic img {
        width: 100%;
        height: auto;
        border-radius: 10%;
        transition: all 0.9s ease 0s;
        box-shadow: 0 0 0 14px #f7f5ec;
        transform: scale(.7);
        position: relative;
        z-index: 2;
        max-height: 255px;
    }

    .mp-brief .pic:before {
        content: "";
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background: #da1f26;
        position: absolute;
        bottom: 135%;
        right: 0;
        left: 0;
        opacity: 1;
        transform: scale(3);
        transition: all 0.3s linear 0s;
    }

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

    .close-btn {
        background-color: #da1f26;
        border-radius: 0px;
        color: #fff;
    }

    .close-icon {
        color: #da1f26;
        opacity: 1;
        font-weight: bold;
    }

    .close-btn:hover, .close-btn:focus {
        color: #fff;
        outline: none;
    }

    .close-icon:hover {
        color: #da1f26;
    }

    .receive-btn:hover, .receive-btn:focus {
        color: #fff;
        outline: none;
    }

    .receive-btn {
        color: #fff;
        background-color: #2ecc71;
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
        width: auto !important;
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
        top: 10%;
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

    .candidate-name h1 {
        font-weight: bold;
        font-size: 45px;
        padding-top: 10px;
        margin-top: 0px;
        text-align: center;
    }
    #hidden-box2 .candidate-name h1 {
        font-weight: bold;
        font-size: 75px;
        padding-top: 15px;
        margin-top: 0px;
        margin-bottom: 0px;
        padding-bottom: 15px;
        text-align: center;
    }
    #hidden-box1 .candidate-name h1 {
        font-weight: bold;
        font-size: 55px;
        padding-top: 20px;
        margin-top: 0px;
        margin-bottom: 0px;
        padding-bottom: 20px;
        text-align: center;
    }
    .candidate-text-invite {
        color: #0B5E4A;
        text-align: center;
        font-size: 25px;
        font-weight: 500;
    }
    #hidden-box1 .candidate-text-invite {
        color: #0B5E4A;
        text-align: center;
        font-size: 30px;
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
    #hidden-box1 .tttt{
        position: absolute;
        top: 28%;
        margin: auto;
        left: 0px;
        right: 0px;
    }
    /*#hidden-box1 .candidate-image-div{*/
    /*    top: 10%;*/
    /*}*/
    #hidden-box1 .modal-border{
        height: 100%;
    }
    #hidden-box1 .inner-border-div{
        height: 100%;
    }

    #hidden-box2 .tttt{
        position: absolute;
        top: 28%;
        margin: auto;
        left: 0px;
        right: 0px;
    }
    #hidden-box2 .candidate-image-div{
        top: 5%;
    }
    #hidden-box2 .modal-border{
        height: 100%;
    }
    #hidden-box2 .inner-border-div{
        height: 100%;
    }
    .inner-candidate-image{
        background: url(<?php echo $_DIR; ?>/images/post-frame.png);
        padding: 21px 23px 30px 21px;
        background-size: contain;
        background-repeat: no-repeat;
        width: 31% !important;
        background-position: center;
    }
    #hidden-box2 .inner-candidate-image{
        background: url(<?php echo $_DIR; ?>/images/post-frame.png);
        padding: 44px 55px 60px 45px;
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;

    }
    #hidden-box1 .inner-candidate-image{
        background: url(<?php echo $_DIR; ?>/images/story-frame.png);
        padding: 30px 30px 34px 23px;
        background-size: contain;
        background-repeat: no-repeat;
        width: 40% !important;
        background-position: center;

    }
    /*for modal body*/


    @media (max-width: 992px) {
        /*.inner-border-div{*/
        /*    padding-top: 20px;*/
        /*}*/
        /*.candidate-image-div {*/
        /*    height: 135px;*/
        /*    width: 200px;*/
        /*}*/
        .inner-candidate-image{
            padding: 10px 11px 25px 11px;
            width: 27% !important;
        }
        .candidate-text-invite {
            color: #0B5E4A;
            text-align: center;
            font-size: 14px;
            font-weight: bold;
        }

        .candidate-name h1 {
            font-weight: bold;
            font-size: 19px;
            padding-top: 4px;
            margin-top: 0px;
            margin-bottom: 4px;
            text-align: center;
        }

        .candidate-inner-div-image {
            height: 110px;
        }

        /*.modal-border{*/
        /*    height: 50vh;*/
        /*}*/
    }
</style>