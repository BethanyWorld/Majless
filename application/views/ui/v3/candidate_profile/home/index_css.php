<style>
    .c-progress-steps {
        margin: 0;
        list-style-type: none;
    }
    .c-progress-steps li {
        position: relative;
        font-size: 14px !important;
        color: #7f8c8d;
        padding: 2px 0 2px 23px;
    }
    .c-progress-steps li a {
        color: inherit;
    }
    .c-progress-steps li.done {
        color: #2ecc71;
    }
    .c-progress-steps li.done:before {
        color: #2ecc71;
        content: "\f058";
    }
    .c-progress-steps li.current {
        color: #3498db;
        font-weight: bold;
    }
    .c-progress-steps li.current:before {
        color: #3498db;
        content: "\f192";
    }
    .c-progress-steps li:before {
        position: absolute;
        left: 0;
        font: normal normal normal 14px/1 FontAwesome;
        font-size: 22px;
        background-color: #fff;
        content: "\f10c";
    }
    @media all and (max-width: 600px) {
        .c-progress-steps li:before {
            top: calc(50% - 8px);
            font-size: 16px;
        }
    }
    @media all and (min-width: 600px) {
        .c-progress-steps {
            display: table;
            list-style-type: none;
            margin: 20px auto;
            padding: 0;
            table-layout: fixed;
            width: 100%;
        }
        .c-progress-steps li {
            display: table-cell;
            text-align: center;
            padding: 0;
            padding-bottom: 10px;
            white-space: nowrap;
            position: relative;
            border-left-width: 0;
            border-bottom-width: 6px;
            border-bottom-style: solid;
            border-bottom-color: #7f8c8d;
        }
        .c-progress-steps li.done {
            border-bottom-color: #2ecc71;
        }
        .c-progress-steps li.current {
            color: #3498db;
            font-size: 16px;
            line-height: 14px;
            border-bottom-color: #3498db;
        }
        .c-progress-steps li.current:before {
            color: #3498db;
            content: "\f192";
        }
        .c-progress-steps li:before {
            bottom: -14px;
            left: 50%;
            margin-left: -9px;
        }
    }

    .alerts-container .alert {
        font-size: 22px;
    }



</style>