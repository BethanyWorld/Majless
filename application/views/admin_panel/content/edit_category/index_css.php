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
        background: #ae2154;
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
        width: 85%;
        top: 0;
        left: 0;
        margin: auto;
        right: 0;
        bottom: 0;
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
</style>