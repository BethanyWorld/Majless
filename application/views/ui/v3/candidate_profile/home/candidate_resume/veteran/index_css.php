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
    .margin-0{
        margin: 0px;
    }
    .margin-t-15{
        margin-top: 15px;
    }
    /*Helper*/

    /*form just this page*/
    .RightFloat input {
        border: 1px solid rgba(0, 0, 0, 0.1);
        border-radius: 2px;
        color: #2b2b2b;
        padding: 8px 10px 7px;
    }
    /*form just this page*/

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
        background-color: rgb(238, 238, 238);
        margin-bottom: 3px;
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


    /*Checkboxes styles*/
    .RegistrationTypeDiv {
        padding: 20px 0px 0px 15px;
        width: 150px;
    }
    .RegistrationTypeDiv input[type="checkbox"] {
        display: none;
    }

    .RegistrationTypeDiv input[type="checkbox"] + label {
        display: block;
        position: relative;
        padding-right: 35px;
        margin-bottom: 20px;
        font-size: 18px;
        cursor: pointer;
        font-weight: normal;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
    }

    .RegistrationTypeDiv input[type="checkbox"] + label:last-child {
        margin-bottom: 0;
    }

    .RegistrationTypeDiv input[type="checkbox"] + label:before {
        content: '';
        display: block;
        width: 20px;
        height: 20px;
        border: 1px solid #00695c;
        position: absolute;
        right: 0;
        top: 0;
        opacity: .6;
        -webkit-transition: all .12s, border-color .08s;
        transition: all .12s, border-color .08s;
    }

    .RegistrationTypeDiv input[checked="checked"] + label:before {
        width: 10px;
        top: -5px;
        left: 5px;
        border-radius: 0;
        opacity: 1;
        border-top-color: transparent;
        border-left-color: transparent;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }
    /*Checkboxes styles*/

    /*radio buttons*/
    .Radio-Display {
        display: inline-block;
    }

    .Radio-Buttons .radio {
        margin: 0.5rem;
    }

    .Radio-Buttons .radio input[type="radio"] {
        position: absolute;
        opacity: 0;
    }

    .Radio-Buttons .radio input[type="radio"] + .radio-label:before {
        content: '';
        background: #f4f4f4;
        border-radius: 100%;
        border: 1px solid #b4b4b4;
        display: inline-block;
        width: 1.4em;
        height: 1.4em;
        position: relative;
        top: -0.2em;
        margin-right: 1em;
        vertical-align: top;
        cursor: pointer;
        text-align: center;
        transition: all 250ms ease;
    }

    .Radio-Buttons .radio input[type="radio"]:checked + .radio-label:before {
        background-color: #3197EE;
        box-shadow: inset 0 0 0 4px #f4f4f4;
    }

    .Radio-Buttons .radio input[type="radio"]:focus + .radio-label:before {
        outline: none;
        border-color: #3197EE;
    }

    .Radio-Buttons .radio input[type="radio"]:disabled + .radio-label:before {
        box-shadow: inset 0 0 0 4px #f4f4f4;
        border-color: #b4b4b4;
        background: #b4b4b4;
    }

    .Radio-Buttons .radio input[type="radio"] + .radio-label:empty:before {
        margin-right: 0;
    }
    /*radio buttons*/


    .clickable{
        cursor: pointer;
    }

    .panel-heading span {
        margin-top: 0px;
        font-size: 15px;
        position: absolute;
        left: 15px;
        top: 20px;
    }
    .veteran .panel-heading{
        position: relative;
        cursor: pointer;
    }
    .PercentageOfVeterans{
        display: none;
    }
    .liberationdate{
        display: none;
    }
   .list-group-Grade .panel-body{
        display: none;
    }


    @media(max-width: 992px) {
        .response-padding{
            padding: 0px;
        }
        .RegistrationTypeDiv {
            padding: 10px 0px 5px 15px;
            width: 150px;
        }
        .Radio-Buttons label{
            padding-left: 0px;
        }
    }
</style>