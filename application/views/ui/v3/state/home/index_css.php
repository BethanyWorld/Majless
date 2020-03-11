<style>

    #inputStatInfo{
        padding: 4px 2px;
        font-size: 14px;
        border: 1px solid #0f342f;
        width: auto;
    }
    .percentage-of-participation{
        background: linear-gradient(90deg, #c7efc4, #c7efc4,#0f342f,#0f342f);
        height: 35px;
        width: 195px;
        margin: 30px 0;
        display: inline-block;
        position: relative;
    }
    .percentage-of-participation .percent{
        position: absolute;
        right: 0;
        z-index: 100;
        bottom: -30px;
        background: #0f342f;
        color: #fff;
        padding: 0 10px;
        font-size: 12px;
    }
    .percentage-of-participation .percent.zero{
        right: auto;
        left: 0;
    }
    .percentage-of-participation .percent.label{
        right: auto;
        left: 0;
        bottom: auto;
        top: -31px;
        margin: auto;
        width: 100px;
        padding: 8px 0;
    }


</style>