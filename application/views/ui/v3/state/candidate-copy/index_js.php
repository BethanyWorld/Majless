<script type="text/javascript">
    $(document).ready(function () {
        $(document).on('click','.mp-section .mp',function(){
            $(".mp-section .mp .menu").slideUp();
            $(this).find(".menu").eq(0).slideToggle();
        });

        $(".inputCityId").click(function(){
            toggleLoader();
            $cityId = $(this).val();
            $stateName = "<?php echo $stateName; ?>";
            $stateId = <?php echo $stateId; ?>;
            $.ajax({
                type: 'get',
                url: base_url + 'State/getCandidateByStateIdAndCityId/'+$stateId+"/"+$cityId+"/"+$stateName,
                success: function (data) {
                    $(".candidate-container").html(data);
                    toggleLoader();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    toggleLoader();
                }
            });
        });
    });
</script>