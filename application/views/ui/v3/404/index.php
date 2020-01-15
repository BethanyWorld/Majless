<?php
$_URL = base_url();
$_DIR = base_url('assets/ui/v2');
?>
<style>


    .section{
        padding: 4px 2px;
    }

    .section .error{
        font-size: 150px;
        padding-top: 150px;
        text-align: center;
        color: #008B62;
        text-shadow:
                1px 1px 1px #00593E,
                2px 2px 1px #00593E,
                3px 3px 1px #00593E,
                4px 4px 1px #00593E,
                5px 5px 1px #00593E,
                6px 6px 1px #00593E,
                7px 7px 1px #00593E,
                8px 8px 1px #00593E,
                25px 25px 8px rgba(0,0,0, 0.2);
    }

    .page{
        margin: 2rem 0;
        font-size: 20px;
        font-weight: 600;
        color: #444;
        margin-top:60px;
        text-align: center;
    }

    .back-home{
        display: inline-block;
        background-color: #fdb72e;
        border: 1px solid #222;
        color: #222;
        text-transform: uppercase;
        font-weight: 600;
        padding: 0.75rem 1rem 0.6rem;
        transition: all 0.2s linear;
        box-shadow: 0 3px 8px rgba(0,0,0, 0.3);
        margin-top: 60px;

    }
    .back-home:hover{
        background:  #fdb72e;
        color: #222;
        border: 1px #41a62a solid;
    }



    .main {
        text-align: center;
        z-index: 5;
    }



    .bubble {
        background: linear-gradient(#095644, #095644);
        border-radius: 50%;
        box-shadow: 0 30px 15px rgba(0, 0, 0, 0.15);
        position: absolute;
    }
    .bubble:before, .bubble:after {
        content: '';
        background: linear-gradient(#fdb72e, #fdb72e);
        border-radius: 50%;
        box-shadow: 0 30px 15px rgba(0, 0, 0, 0.15);
        position: absolute;
    }

    .bubble:nth-child(4) {
        top: 26vh;
        right: -3vw;
        height: 18vmin;
        width: 18vmin;
        animation: anim 1s infinite alternate ease-in;

    }
    .bubble:nth-child(4):before {
        width: 7vmin;
        height: 7vmin;
        bottom: -10vmin;
        left: -15vmin;
    }
    .bubble:nth-child(5) {
        top: 26vh;
        right: 64vw;
        height: 18vmin;
        width: 18vmin;
        animation: anim 1s infinite alternate ease-in;
    }
    .bubble:nth-child(5):before {
        width: 7vmin;
        height: 7vmin;
        bottom: -10vmin;
        left: 25vmin;
    }
    .section{
        text-align: center ;
        margin-bottom: 20px ;
        background-color:#fdb72e;
        border-radius:50% ;
        width: 500px;
        height: 500px;
        margin-right: 289px;
        box-shadow: 0 30px 15px rgba(0, 0, 0, 0.15);


    }

    @keyframes anim {
        0% {
            transform: translateY(-20px) scaleY(1);
        }
        100% {
            transform: translateY(20px) scaleY(0.9);
        }
    }






</style>

<div class="section-padding-bottom alice-bg">
    <div class="container container-wrapper">
        <div class="row">
            <div class="col col-xs-12">
                <div class=" col-xs-12 section-padding-150 ">
                    <div class="section" style="   ">
                        <h1 class="error" >404</h1>
                        <div class="page" >صفحه مورد نظر شما یافت نشد!</div>
                        <a  class="back-home"  href="<?php echo base_url(); ?>">بازگشت به صفحه اصلی</a>

                        <div class="bubble"></div>
                        <div class="bubble"></div>

                        <div class="main">

                        </div>

                    </div>




                </div>
            </div>
        </div>
    </div>
</div>
