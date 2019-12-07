<?php
$_DIR = base_url('assets/ui/v4/');
?>
<script type='text/javascript' src='<?= $_DIR; ?>js/persian.min.js'></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#btn-pay").click(function (e) {
            e.preventDefault();
            $inputformAmount = $.trim($("#formAmount").val());
            if ($inputformAmount == '') {
                $("#alert1").show();
                return;
            }
            $("#form").submit();

        });
        $("#formAmount").keyup(function () {
            $('#labal1').addClass('animated fadeIn');
            $inputformAmount = $(this).cleanVal();
            $("#labal1").text(persianJs($inputformAmount).digitsToWords().toString() + " تومان ");
        });
        $('#formAmount').mask('000,000,000,000,000,000', {reverse: true});
    });
</script>