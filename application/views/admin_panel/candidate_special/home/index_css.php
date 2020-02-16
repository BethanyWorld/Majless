<style type="text/css">

    .profile-photo-div{
        position: relative;
        margin: 0 auto 10px auto;
        height: auto;
        overflow: hidden;
        border-radius: 10px;
        -webkit-transition: ease .3s;
        -o-transition: ease .3s;
        transition: ease .3s;
    }

    .profile-img-div{
        display: block;
        position: relative;
        overflow: hidden;
    }

    #loader{
        position: absolute;
        top:0;
        left: 0;
        width: 0%;
        height: 100%;
        background-color: #00cccf;
        z-index:10;
        -webkit-transition: .3s;
        -o-transition: .3s;
        transition: .3s;
    }

    #profile-img{
        position: absolute;
        display: block;
        width: 100%;
        top: 0;
        left: 0;
    }

    #change-photo{
        display: none;
    }

    .profile-buttons-div{
        position: relative;
        display: block;
    }

    .button{
        position: relative;
        display: block;
        font-size: 12px;
        padding: 12px;
        text-align: center;
        color: white;
        background-color: #589eff;
        cursor: pointer;
        -webkit-transition: .5s;
        -o-transition: .5s;
        transition: .5s;
        overflow: hidden;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .button:hover{
        letter-spacing: 1px;
    }

    .button:after{
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%,-50%);
        -ms-transform: translate(-50%,-50%);
        transform: translate(-50%,-50%);
        width: 10px;
        height: 10px;
        background-color: rgba(255,255,255,0.4);
        border-radius: 50%;
        opacity: 0;
        -webkit-transition: .9s;
        -o-transition: .9s;
        transition: .9s;
    }

    .button:hover:after{
        -webkit-transform: scale(50);
        -ms-transform: scale(50);
        transform: scale(50);
        opacity: 1;
    }

    .button.half{
        width: 50%;
    }

    .green{
        background-color: #15ae6b;
    }

    .red{
        background-color: #ae0000;
    }

    #x-position{
        position: absolute;
        bottom: 5px;
        left: 50%;
        -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        transform: translateX(-50%);
        display: none;
    }

    #y-position{
        position: absolute;
        right: -50px;
        top: 50%;
        -webkit-transform: translateY(-50%) rotate(90deg);
        -ms-transform: translateY(-50%) rotate(90deg);
        transform: translateY(-50%) rotate(90deg);
        display: none;
    }

    canvas{
        position: fixed;
        top: -2000px;
        left: -2000px;
        z-index: -1;
    }

    .profile-img-confirm{
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        width: 100%;
    }
    .error{
        font-size: 13px;
        color: red;
        text-align:center;
        display: none;
    }
    textarea{
        resize: none;
        min-height: 150px;
        padding: 15px !important;
    }












































    /*for get candidate image*/
    <?php $_DIR = base_url('assets/ui/v4/'); ?>
     #show-box img {
         height: 355px;
         display: inline-block;
         margin-left: 5px;
     }


    @media (max-width: 992px) {
        #show-box img {
            height: 185px;
            display: inline-block;
            margin-left: 5px;
        }
    }

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
        display: inline;
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
        border-bottom: 5px solid #fdb72e ;
        margin-bottom: 25px;
        height: 100%;
    }

    .show-box {
        width: 100%;
        text-align: center;
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

    .invite-button {
        /*padding: 5px 15px;*/
        background: #fdb72e;
        /*color: #000;*/
        font-weight: 900;
    }

    .invite-button:hover {
        color: #000;
        outline: none;
        background-color: #fdb72e;
    }
    .invite-button:focus{
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

    .modal-border {
        position: relative;
        width: 50%;
        text-align: center;
        float: right;
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
        margin: auto;
        position: absolute;
        top: 35px;
        left: 0px;
        right: 0px;
        text-align: center;
    }

    .candidate-inner-div-image {
        margin: auto;
        position: absolute;
        left: 0px;
        right: 0px;
        bottom: 0px;
        top: -7px;
        text-align: center;
        padding-top: 20px;
    }

    .candidate-name {
        text-align: center;
        color: #ffffff;
        margin-top: 40px;
    }

    .candidate-name h1, .candidate-name h3 {
        color: #ffffff;
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
        font-size: 26px;
        padding-top: 0px;
        margin-top: 0px;
        margin-bottom: 0px;
        padding-bottom: 0px;
        text-align: center;
    }

    #hidden-box1 .candidate-name h1 {
        font-weight: 900;
        font-size: 24px;
        padding-top: 0px;
        margin-top: 0px;
        margin-bottom: 0px;
        padding-bottom: 0;
        text-align: center;
    }

    .candidate-text-invite {
        color: #ffffff;
        text-align: center;
        font-size: 20px;
        font-weight: 500;
    }

    #hidden-box1 .candidate-text-invite {
        color: #ffffff;
        text-align: center;
        font-size: 20px;
        font-weight: 500;
    }

    #hidden-box2 .candidate-text-invite {
        color: #ffffff;
        text-align: center;
        font-size: 20px;
        font-weight: 500;
    }

    .candidate-text-invite p {
        margin: 0px;
        line-height: 55px;
    }

    .candidate-text-invite a {
        cursor: pointer;
        color: #0B5E4A;
        text-align: center;
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
        direction: rtl;
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
        direction: rtl;
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

    @media (max-width: 992px) {

        #hidden-box1 .candidate-name h1 {
            padding-bottom: 0px;;
        }

        .candidate-image-div {
            top: 10%;
        }

        .inner-candidate-image {
            padding: 9px 11px 13px 11px;
            width: 25% !important;
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
            padding-top: 0px;
            margin-top: 0px;
            margin-bottom: 0px;
            text-align: center;
            line-height: 2em;
        }

        .candidate-inner-div-image {
            height: 110px;
        }
    }

    /*for get candidate image*/
</style>