<script type="text/javascript">
    $(document).ready(function () {
        $('div.list-group-Grade').each(function() {
            $(this).attr('id', UUID());
            $form =  $(this).attr('id', UUID());

            $radioButtonNameUUID =  UUID();
            $form.find('input[type="radio"]').each(function() {
                $id =  UUID();
                $(this).attr('id' , $id);
                $(this).attr('name' , "veteran-"+$radioButtonNameUUID);
                $(this).next('label').attr('for' , $id);
            });
        });
        
        $(document).on('click', '.panel-heading', function(e) {
            e.preventDefault();
            ($(this).find(":checkbox").attr('checked') == undefined) ? $(this).find(":checkbox").attr('checked' , 'checked') : $(this).find(":checkbox").removeAttr('checked')
            $(this).next('.panel-body').slideToggle();
            $(this).find('i').toggleClass('fa-chevron-down' , 'fa-chevron-up');
        });

        $(document).on('click', 'input[type="radio"]', function () {
            $inputid = $(this).attr('id');
            $inputparent = $(this).parents('.list-group-Grade');
            $inputvalue = $inputparent.find(this).val();

            if ($inputvalue === "Veteran") {
                $($inputparent).find('.PercentageOfVeterans').show();
                $($inputparent).find('.liberationdate').hide();

            }
            if ($inputvalue === "Liberation") {
                $($inputparent).find('.liberationdate').show();
                $($inputparent).find('.PercentageOfVeterans').hide();

            }
            if ($inputvalue === "Martyr") {
                $($inputparent).find('.liberationdate').hide();
                $($inputparent).find('.PercentageOfVeterans').hide();
            }
        });
    });
</script>