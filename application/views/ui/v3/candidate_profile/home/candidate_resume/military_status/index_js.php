<script type="text/javascript">
    $(document).ready(function () {

        $(document).on('click', '[name="inputCandidateMilitaryStatus"]', function () {
            //$inputCandidateMilitaryStatus = $(this).val();
            $inputCandidateMilitaryStatus = $('input[name=inputCandidateMilitaryStatus]:checked').val();

            if ($inputCandidateMilitaryStatus === 'Exempt') {
                $('.inputCandidateExemptTitle').css('display', 'block');
            }
            else {
                $('.inputCandidateExemptTitle').css('display', 'none');
            }

            if ($inputCandidateMilitaryStatus === 'CardService' || $inputCandidateMilitaryStatus === 'Serving') {
                $('.inputCandidateMilitaryEndDtate').css('display', 'block');
                if ($inputCandidateMilitaryStatus === 'CardService') {
                    $("label.MilitaryEndDateTitle").find('b').eq(0).show();
                    $("label.MilitaryEndDateTitle").find('b').eq(1).hide();
                }
                else {
                    $("label.MilitaryEndDateTitle").find('b').eq(0).hide();
                    $("label.MilitaryEndDateTitle").find('b').eq(1).show();
                }
            }
            else {
                $('.inputCandidateMilitaryEndDtate').css('display', 'none');
            }


        });
        $(document).on('click', '[name="inputCandidateExemptTitle"]', function () {
            $inputCandidateExemptTitle = $(this).val();
            if ($inputCandidateExemptTitle === 'Others') {
                $('.inputCandidateDescription').css('display', 'block');
            }
            else {
                $('.inputCandidateDescription').css('display', 'none');
            }
        });
        $(document).on('click', '[name="inputCandidateMilitaryEndArea"]', function () {

            $inputCandidateMilitaryEndArea = $('input[name=inputCandidateMilitaryEndArea]:checked').val();

            if ($inputCandidateMilitaryEndArea === 'Others') {
                $('.inputCandidatePlaceService1').css('display', 'block');
            }
            else {
                $('.inputCandidatePlaceService1').css('display', 'none');
            }
        });



        $form = $("#unique-form").clone().removeClass('hidden').attr('id', UUID());
        $form.find('[data-name]').each(function () {
            $(this).attr('name', $(this).data('name'))
        });
        $(".skill-divider").after($form);


        $("#form-military [name='inputCandidateMilitaryStatus']:checked").click();
        $("#form-military [name='inputCandidateExemptTitle']:checked").click();
        $("#form-military [name='inputCandidateMilitaryEndArea']:checked").click();


        $("#updateMilitaryStatus").click({redirect: false}, updateMilitaryStatus);
        $("#updateMilitaryStatusAndRedirect").click({redirect: true}, updateMilitaryStatus);
        function updateMilitaryStatus(param) {
            if ($("#form-military").serializeArray().length <= 0) {
                notify('وارد کردن حداقل یک مهارت الزامی ست', 'yellow');
            }
            else {
                $sendData = {inputCandidateMilitary: $("#form-military").serializeArray()}
                toggleLoader();
                $.ajax({
                    type: 'post',
                    url: base_url + 'Profile/candidateUpdateMilitaryStatus',
                    data: $sendData,
                    success: function (data) {
                        toggleLoader();
                        $result = JSON.parse(data);
                        notify($result['content'], $result['type']);
                        if (param.data.redirect) {
                            window.location.href = base_url + 'Profile/jobHistory';
                        }
                    }
                });
            }
        }


    });
</script>