<script type="text/javascript">
    $(document).ready(function () {

        $(document).on('click', '[name="inputCandidateMilitaryStatus"]', function () {
            $inputCandidateMilitaryStatus = $(this).val();
            $inputCandidateMilitaryStatus = $('input[name=inputCandidateMilitaryStatus]:checked').val();

            if($inputCandidateMilitaryStatus === 'Exempt'){
                $('.inputCandidateExemptTitle').css('display' , 'block');
            }
            else{
                $('.inputCandidateExemptTitle').css('display' , 'none');
            }

            if($inputCandidateMilitaryStatus === 'CardService'){
                $('.inputCandidateMilitaryEndDtate').css('display' , 'block');
            }
            else{
                $('.inputCandidateMilitaryEndDtate').css('display' , 'none');
            }

            if($inputCandidateMilitaryStatus === 'Serving'){
                $('.inputCandidateMilitaryServing').css('display' , 'block');
            }
            else{
                $('.inputCandidateMilitaryServing').css('display' , 'none');
            }

        });

        $(document).on('click', '[name="inputCandidateExemptTitle"]', function () {
            $inputCandidateExemptTitle = $(this).val();

            if($inputCandidateExemptTitle === 'Others'){
                $('.inputCandidateDescription').css('display' , 'block');
            }
            else{
                $('.inputCandidateDescription').css('display' , 'none');
            }
        });

        $(document).on('click', '[name="inputCandidateMilitaryEndArea"]', function () {
            $inputCandidateMilitaryEndArea = $(this).val();
            $$inputCandidateMilitaryStatus = $('input[name=inputCandidateMilitaryStatus]:checked').val();

            if($inputCandidateMilitaryEndArea === 'Others' && $inputCandidateMilitaryStatus === 'CardService'){
                $('.inputCandidatePlaceservice1').css('display' , 'block');
            }
            if($inputCandidateMilitaryEndArea === 'Others' && $inputCandidateMilitaryStatus === 'Serving'){
                $('.inputCandidatePlaceservice2').css('display' , 'block');
            }
        });

        $("#form [name='inputCandidateMilitaryStatus']").click();
        $form = $("#unique-form").clone().removeClass('hidden').attr('id', UUID());
        $form.find('[data-name]').each(function () {
            $(this).attr('name', $(this).data('name'))
        });
        $(".skill-divider").after($form);

    });
</script>