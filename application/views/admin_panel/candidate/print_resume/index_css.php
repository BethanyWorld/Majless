<style type="text/css">
    .margin-t-20{
        margin-top: 20px;
    }
    .print {
        margin-top: 100px;
        margin-bottom: 50px;
    }
    #section-to-print {
        direction: rtl;
    }
    #section-to-print input {
        border: none;
        box-shadow: none;
        border-bottom: 1px solid #ccc;
        border-radius: 0px;
        background-color: transparent;
    }
    .padding-right-15{
        padding-right: 15px;
    }
    .padding-0 {
        padding: 0px;
    }

    .form-group {
        margin-bottom: 20px;
        float: right;
    }
    .RegistrationTypeDiv {
        padding: 20px 0px 10px 0px;
    }
    .RegistrationTypeDiv .radio {
        display: inline-block;
    }
    .form-group input {
        transition: 0.3s linear;
    }
    .form-group input:focus {
        border: 1px solid crimson;
        box-shadow: 0 0 0 0;
    }
    #section-to-print .print-title {
        margin-top: 40px;
        margin-bottom: 0px;
        background-color: #022D6D;
        padding: 15px;
        font-size: 15px;
        color: #fff;
        width: 200px;
    }
    .title-hr{
        border-color:#022d6d ;
        margin-top: 0px;
    }
    .fa-angle-double-left{
        color:  #022D6D;;
    }
    @media print {
        body {
            font-family: font1;
        }
        body * {
            visibility: hidden;
        }
        #section-to-print * {
            visibility: visible;
            color: red;
            font-size: 1.5rem;
            background-color: red;
        }
        #section-to-print {
            position: absolute;
            right: 0;
            top: 0;
        }
        .print-title {
            margin-top: 40px;
            margin-bottom: 0px;
            background-color: #022D6D;
            padding: 15px;
            font-size: 15px;
            color: #fff;
            width: 200px;
        }
        .title-hr{
            border-color:#022d6d ;
            margin-top: 0px;
        }
    }
    @page {
        margin-top: 2cm;
        margin-bottom: 2cm;
        padding-left: 1cm;
        padding-right: 1cm;
        size: A4;
    }
    @media (max-width:992px) {
        #section-to-print .print-title{
            margin-top: 40px;
            margin-bottom: 0px;
            background-color: #022D6D;
            padding: 10px;
            font-size: 14px;
            color: #fff;
            width: 150px;
        }
    }
</style>