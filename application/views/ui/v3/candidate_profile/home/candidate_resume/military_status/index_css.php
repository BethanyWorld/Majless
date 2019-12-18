<style>
    /*Helper*/
    .margin-right-15 {
        margin-right: 15px;
    }

    .padding-0 {
        padding: 0px;
    }

    .paddingRight-0 {
        padding-right: 0px;
    }

    .paddingLeft-0 {
        padding-left: 0px;
    }

    .RightFloat {
        float: right;
    }

    .LeftFloat {
        float: left;
    }

    .margin-b-25 {
        margin-bottom: 30px;
    }

    /*Helper*/


    /*for add form*/
    .ul-background-color-hr {
        margin: 0px auto;
        padding: 20px !important;
        box-shadow: none;
    }

    .list-group-item:last-child {
        margin-bottom: 0;
        border-bottom-right-radius: .25rem;
        border-bottom-left-radius: .25rem;

    }

    .list-group-item {
        position: relative;
        width: 100%;
        display: inline-block;
        padding: .75rem 1.25rem;
        margin-bottom: -1px;
        background-color: #fff;
        border: 1px solid #ddd;
        min-height: 100px;
    }

    .odd-background-color-div {
        /*background-color: rgb(238, 238, 238);*/
        margin-bottom: 3px;
        box-shadow: 0 0 7px 1px #ccc !important;
    }

    .extra-padding-top-25 {
        padding-top: 20px;
        padding-top: 20px;
    }

    .list-group-Grade {
        border-radius: 4px;
        margin-bottom: 15px;
    }

    /*end for add form*/


    /*for radio button*/
    .border-color {
        border-color: gray;
    }

    .radiotextsty {
        color: #A5A4BF;
        font-size: 13px;
    }

    .customradio {
        display: block;
        position: relative;
        padding-right: 30px;
        margin-bottom: 15px;
        cursor: pointer;
        font-size: 18px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default radio button */
    .customradio input {
        position: absolute;
        opacity: 1;
        cursor: pointer;
        right: 0px;
    }

    /* Create a custom radio button */
    .checkmark {
        position: absolute;
        top: 0;
        right: 0;
        height: 15px;
        width: 15px;
        background-color: white;
        border-radius: 50%;
        border: 1px solid #BEBEBE;
    }

    /* On mouse-over, add a grey background color */
    .customradio:hover input ~ .checkmark {
        background-color: transparent;
    }

    /* When the radio button is checked, add a blue background */
    .customradio input:checked ~ .checkmark {
        background-color: white;
        border: 1px solid #BEBEBE;
    }

    /* Create the indicator (the dot/circle - hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the indicator (dot/circle) when checked */
    .customradio input:checked ~ .checkmark:after {
        display: block;
    }

    /* Style the indicator (dot/circle) */
    .customradio .checkmark:after {
        top: 2px;
        left: 2px;
        width: 9px;
        height: 9px;
        border-radius: 50%;
        background: #022D6D;
    }

    .inputCandidateExemptTitle {
        display: none;
    }

    .inputCandidateDescription {
        color: #A5A4BF;
        display: none;
    }

    .inputCandidateMilitaryEndDtate {
        display: none;
    }

    .inputCandidatePlaceService1 {
        display: none;
    }
    .inputCandidatePlaceservice1 {
        display: none;
    }

    .inputCandidatePlaceservice2 {
        display: none;
    }

    .inputCandidateMilitaryServing {
        display: none;
    }

    .inputCandidatePlaceservice-serving {
        display: none;
    }

    .city-select {
        width: 50% !important;
    }

    /*end for radio button*/

    @media(max-width: 992px) {
        .response-padding{
            padding: 0px;
        }
    }


</style>