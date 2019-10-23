<script type="text/javascript">
    $(document).ready(function () {
        $(document).on('change', '[name="inputCandidateActivityFieldType"]', function () {
            $parentId = $(this).eq(0).parents('div.list-group-item').eq(0).attr('id');
            $parentDom = "#" + $parentId + " ";
            $inputfieldofactivity = $(this).val();

            if ($inputfieldofactivity !== "Mobilization" && $inputfieldofactivity !== "Others") {
                $($parentDom + '.Collectionname').css('display', 'block');
                $($parentDom + '.inputmembershiptype').css('display', 'block');
                $($parentDom + '.Description').css('display', 'block');
                $($parentDom + '.culture-date').css('display', 'block');

                $($parentDom + '.inputCandidateMobilMembershipType').css('display', 'none');
                $($parentDom + '.inputCandidateBasijType').css('display', 'none');
                $($parentDom + '.domain-name').css('display', 'none');
                $($parentDom + '.other-title').css('display', 'none');
                $($parentDom + '.other-mobilization').css('display', 'none');

            }

            if ($inputfieldofactivity === "Mobilization") {
                $($parentDom + '.inputCandidateMobilMembershipType').css('display', 'block');
                $($parentDom + '.inputCandidateBasijType').css('display', 'block');
                $($parentDom + '.domain-name').css('display', 'block');
                $($parentDom + '.culture-date').css('display', 'block');


                $($parentDom + '.Collectionname').css('display', 'none');
                $($parentDom + '.Description').css('display', 'none');
                $($parentDom + '.inputmembershiptype').css('display', 'none');
                $($parentDom + '.other-title').css('display', 'none');



            }
            if ($inputfieldofactivity === "Others") {
                $($parentDom + '.other-title').css('display', 'block');
                $($parentDom + '.Collectionname').css('display', 'block');
                $($parentDom + '.inputmembershiptype').css('display', 'block');
                $($parentDom + '.Description').css('display', 'block');
                $($parentDom + '.culture-date').css('display', 'block');

                $($parentDom + '.inputCandidateBasijType').css('display', 'none');
                $($parentDom + '.domain-name').css('display', 'none');
                $($parentDom + '.inputCandidateMobilMembershipType').css('display', 'none');

            }
        });
        $(document).on('change', '[name="inputCandidateBasijType"]', function () {
            $parentId = $(this).parents('div.list-group-item').attr('id');
            $parentDom = "#" + $parentId + " ";
            $inputThetypeofmobilization = $(this).val();
            $inputCandidateActivityFieldType = $($parentDom + "[name='inputCandidateActivityFieldType']").val();
            if ($inputThetypeofmobilization === "Others" && $inputCandidateActivityFieldType === "Mobilization") {
                $($parentDom + '.other-mobilization').css('display', 'block');
            } else {
                $($parentDom + '.other-mobilization').css('display', 'none');
            }
        });
        $(".add-form").click(function () {
            $form = $("#unique-form").clone().removeClass('hidden').attr('id', UUID());
            $form.find('[data-name]').each(function () {
                $(this).attr('name', $(this).data('name'))
            });
            $(".skill-divider").after($form);
        });
        $(document).on('click', '.remove-form', function () {
            $(this).parent().remove();
        });

        $("#form [name='inputCandidateActivityFieldType']").change();
        setTimeout(function(){
            $("#form [name='inputCandidateBasijType']").change();
        } , 500);

        $("#buttonUpdateSocialCaltural").click( {redirect: false}, updateProfileSocialCaltural);
        $("#buttonUpdateSocialCalturalAndRedirect").click( {redirect: true}, updateProfileSocialCaltural);
        function updateProfileSocialCaltural(param) {
            if($("#form").serializeArray().length <=0){
                notify('وارد کردن حداقل یک مهارت الزامی ست', 'yellow');
            }
            else{
                $sendData = { inputSocialCulturalBackground : $("#form").serializeArray() }
                toggleLoader();
                $.ajax({
                    type: 'post',
                    url: base_url + 'Profile/candidateUpdateSocialCulturalBackground',
                    data: $sendData,
                    success: function (data) {
                        toggleLoader();
                        $result = JSON.parse(data);
                        notify($result['content'], $result['type']);
                        if(param.data.redirect){
                            window.location.href =  base_url+'Profile/politicBackground';
                        }
                    }
                });
            }
        }
    });
</script>