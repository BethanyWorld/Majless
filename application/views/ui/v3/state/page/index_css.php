<style>



    .our-team-section {
        position: relative;
    }
    .our-team-section:before {
        position: absolute;
        top: -0;
        left: 0;
        content: " ";
        background-size: 100% 100px;
        width: 100%;
        height: 100px;
        float: left;
        z-index: 99;
    }
    .our-team {
        padding: 5px 0 5px;
        background: #f9f9f9;
        text-align: center;
        overflow: hidden;
        position: relative;
        border-bottom: 5px solid #719251;
        margin-bottom: 25px;
    }

    .our-team .pic{
        display: inline-block;
        width: 130px;
        height: 130px;
        margin-bottom: 0;
        z-index: 1;
        position: relative;
    }
    .our-team .pic:before {
        content: "";
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background: #5c8333;
        position: absolute;
        bottom: 135%;
        right: 0;
        left: 0;
        opacity: 1;
        transform: scale(3);
        transition: all 0.3s linear 0s;
    }
    .our-team .pic:after {
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
    .our-team:hover .pic:after{
        background: #7ab92d;
    }
    .our-team .pic img {
        width: 100%;
        height: auto;
        border-radius: 10%;
        transition: all 0.9s ease 0s;
        box-shadow: 0 0 0 14px #f7f5ec;
        transform: scale(0.7);
        position: relative;
        z-index: 2;
    }
    .our-team:hover .pic img{
        box-shadow: 0 0 0 14px #f7f5ec;
        transform: scale(0.7);
    }
    .our-team .team-content{ margin-bottom: 30px; }
    .our-team .title{
        font-size: 22px;
        font-weight: 700;
        color: #4e5052;
        letter-spacing: 1px;
        text-transform: capitalize;
        margin-bottom: 5px;
    }
    .our-team .post{
        display: block;
        font-size: 15px;
        color: #4e5052;
        text-transform:capitalize;
    }

</style>