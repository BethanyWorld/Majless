<?php $_DIR = base_url('assets/ui/v3/'); ?>
<div class="page-caption">
    <?php echo $title; ?>
</div>
<div class="container container-wrapper">
    <div class="col-xs-12">
        <form method="get" action="<?php echo base_url('Payment/startPayment') ?>">
            <input type="number" min="1000" />
            <button type="submit">
                پرداخت
            </button>
        </form>
    </div>
</div>