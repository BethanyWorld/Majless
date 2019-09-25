<style>
    label {
        display: inline-block;
        max-width: 100%;
        font-weight: 700;
        margin: 0 8px;
        width: 100px;
        cursor: pointer;
    }
    .wrapper {
        height: 1.5rem;
        width: 4rem;
        border-radius: 2rem;
        position: relative;
        cursor: pointer;
        overflow: hidden;
        box-shadow: 0px 0px 3px 2px rgba(0, 0, 0, 0.2);
        margin-right: 0;
    }
    .inputCityId {
        visibility: hidden;
    }
    .inputCityId:checked ~ .left {
        transform: translateY(-50%) scale(0);
    }
    .inputCityId:checked ~ .right {
        transform: translateY(-50%) scale(1);
        z-index: 10;
    }
    .left, .right {
        height: 1rem;
        width: 1rem;
        display: inline-block;
        position: absolute;
        border-radius: 50%;
        top: 50%;
    }
    .left {
        background: #324047;
        left: 10%;
        z-index: 10;
        transform: translateY(-50%) scale(1);
        transition: all 200ms cubic-bezier(0.8, 0.7, 0.72, 0.78);
    }
    .right {
        background: #60863b;
        right: 10%;
        transform: translateY(-50%) scale(0);
        transition: all 200ms cubic-bezier(0.8, 0.7, 0.72, 0.78);
    }
</style>