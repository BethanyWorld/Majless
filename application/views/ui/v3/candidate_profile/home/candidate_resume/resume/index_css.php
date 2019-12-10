<style>

#cs{
    white-space: normal;
    word-break: break-word;
}
    .text-danger{
        color: #a94442 !important;
    }
    #DateChecked{
        display: none;
    }
    @media(max-width: 767px){
        .response-padding{
            padding: 0px;
        }
    }

.modal {
    z-index: 2100000000000000000;
}




/*for sample date*/
.form-group{
    direction: rtl !important;
}
.form-control:focus {
    border-color: #D10B20;
    box-shadow: 0px 0px 1px 0px #D10B20;
}
.inner-form-div{
    display: none;
    margin-top: 15px;
    border-radius: 5px;
    box-shadow: 0px 0px 9px 1px #ccc;
}
.inner-form-div ul{
    list-style: none;
    padding: 0px;
}
.inner-form-div ul li{
    font-size: 20px;
    text-align: center;
    border-bottom: 1px solid #ccc;
    padding: 10px;
    cursor: pointer;
}
.inner-form-div ul li:last-child{
    border-bottom: 0px;
}

.input-group input{
    border-top-right-radius: 0px;
    border-bottom-right-radius: 0px;
}
.datepicker.dropdown-menu{
    position: relative !important;
    left: 0px !important;
    top: 0px !important;
    padding: 0px;
    width: 100%;
    height: 190px;
    overflow-x: hidden;
    text-align: right;
}
.datepicker.dropdown-menu table tr td{
    text-align: right;
}
.datepicker table{
    width: 100%;
    cursor: pointer;
    direction: rtl;
    font-family: inherit;
}
.datepicker.dropdown-menu th{
    padding: 5px 0px;
}
.datepicker table tr th{
    width: 34px;
}
.background{
    background-color: #d64b4b;
}
.color{
    color: #fff;
}

#DatePicker .input-group-addon:first-child{
    cursor: pointer;
    /*border-left: 0 ;*/
    /*border-top-left-radius: 0 ;*/
    /*border-bottom-left-radius: 0 ;*/
    /*border-top-right-radius: 4px;*/
    /*border-bottom-right-radius: 4px;*/
    /*border-right: 1px solid #ccc;*/
    background-color: transparent;
    border: none;
    border-bottom: 1px solid #ccc;
    border-radius: 0px;
}
#DatePicker .form-control:last-child{
    border-top-left-radius: 0px;
    border-bottom-left-radius: 0px;
}
.date-modal{
    direction: rtl;
}
.date-modal .modal-header{
    position: relative;
}
.date-modal .modal-header button.close{
    position: absolute;
    left: 15px;
    bottom: 0px;
    top: 0px;
    margin: auto;
    background-color: #d64b4b;
    border-radius: 100%;
    height: 30px;
    padding: 9px;
    padding-top: 6px;
    padding-bottom: 5px;
    opacity: 1;
    color: #fff;
}
.date-modal .save-changes{
    color: #fff;
    background-color: #d64b4b;
    border-color: #d64b4b;
    border-radius: 0px;
}
.date-modal .close-modal{
    border-radius: 0px;
}
.date-modal .form-group .col-md-4{
    padding: 5px;
    float: right;
}
.date-modal .modal-body{
    display: flow-root;
}
/*for sample date*/
</style>