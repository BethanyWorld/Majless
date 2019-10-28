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

    /*inputs*/
    .ttt input {
        margin: 0px 0px;
        width: 100%;
        display: block;
        border: none;
        padding: 0px 0;
        height: 30px;
        border-bottom: solid 1px #022D6D;
        -webkit-transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
        transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
        background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 96%, #022D6D 4%);
        background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #022D6D 4%);
        background-position: -700px 0;
        background-size: 700px 100%;
        background-repeat: no-repeat;
        color: #0e6252;
        box-shadow: none !important;
        border-radius: 0px;
    }

    .ttt input:focus, input:valid {
        box-shadow: none;
        outline: none;
        background-position: 0 0;
    }

    .ttt input::-webkit-input-placeholder {
        font-family: 'roboto', sans-serif;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    .ttt input:focus::-webkit-input-placeholder, input:valid::-webkit-input-placeholder {
        color: #022D6D;
        font-size: 11px;
        -webkit-transform: translateY(-20px);
        transform: translateY(-15px);
        visibility: visible !important;
    }

    /*inputs*/

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

    .MemberShip {
        display: none;
    }

    .CandidateName {
        display: none;
    }
    .Partnership-title{
        display: none;
    }
    .Media{
        display: none;
    }
    .MediaName{
        display: none;
    }
    .Media-Activity{
        display: none;
    }
    .Media-Date{
        display: none;
    }
    .CollectionName{
        display: none;
    }
    .ElectionPeriod{
        display: none;
    }
    .media-template-title{
        display: none;
    }

    /*end for add form*/

</style>