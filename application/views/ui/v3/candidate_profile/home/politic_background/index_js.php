<script type="text/javascript">
    $(document).ready(function () {

        $(document).on('change', '[name="inputCandidateActivityType"]', function () {
            debugger;
            $parentId = $(this).eq(0).parents('div.list-group-item').eq(0).attr('id');
            $parentDom = "#" + $parentId + " ";
            $inputCandidateActivityType = $(this).val();

            if ($inputCandidateActivityType === "Group") {
                $($parentDom + '.ElectionType').css('display', 'none');
                $($parentDom + '.MemberShip').css('display', 'block');
                $($parentDom + '.Partnership-title').css('display', 'none');

                $($parentDom + '.Media').css('display', 'none');
                $($parentDom + '.MediaName').css('display', 'none');
                $($parentDom + '.Media-Date').css('display', 'none');
                $($parentDom + '.Media-Activity').css('display', 'none');
                $($parentDom + '.CollectionName').css('display', 'none');

            }
            if ($inputCandidateActivityType === "CandidatesCampaign") {
                $($parentDom + '.ActivityType').css('display', 'none');
                $($parentDom + '.ElectionType').css('display', 'block');
                $($parentDom + '.CandidateName').css('display', 'block');
                $($parentDom + '.MemberShip').css('display', 'none');
                $($parentDom + '.Partnership-title').css('display', 'none');


                $($parentDom + '.Media').css('display', 'none');
                $($parentDom + '.MediaName').css('display', 'none');
                $($parentDom + '.Media-Date').css('display', 'none');
                $($parentDom + '.Media-Activity').css('display', 'none');
                $($parentDom + '.CollectionName').css('display', 'none');
            }
            if ($inputCandidateActivityType === "SupervisoryBoard") {
                $($parentDom + '.Partnership-title').css('display', 'block');
                $($parentDom + '.ElectionType').css('display', 'block');
                $($parentDom + '.CandidateName').css('display', 'none');
                $($parentDom + '.MemberShip').css('display', 'none');

                $($parentDom + '.Media').css('display', 'none');
                $($parentDom + '.MediaName').css('display', 'none');
                $($parentDom + '.Media-Date').css('display', 'none');
                $($parentDom + '.Media-Activity').css('display', 'none');
                $($parentDom + '.CollectionName').css('display', 'none');
            }

            if ($inputCandidateActivityType === "Media") {
                $($parentDom + '.Media').css('display', 'block');
                $($parentDom + '.MediaName').css('display', 'block');
                $($parentDom + '.Media-Date').css('display', 'block');
                $($parentDom + '.Media-Activity').css('display', 'block');

                $($parentDom + '.ElectionType').css('display', 'none');
                $($parentDom + '.Partnership-title').css('display', 'none');
                $($parentDom + '.MemberShip').css('display', 'none');
                $($parentDom + '.CandidateName').css('display', 'none');
                $($parentDom + '.CollectionName').css('display', 'none');
            }

            if ($inputCandidateActivityType === "Others") {
                $($parentDom + '.CollectionName').css('display', 'block');
                $($parentDom + '.MemberShip').css('display', 'block');
                $($parentDom + '.Media-Date').css('display', 'block');

                $($parentDom + '.ElectionType').css('display', 'none');
                $($parentDom + '.Media').css('display', 'none');
                $($parentDom + '.MediaName').css('display', 'none');
                $($parentDom + '.Media-Activity').css('display', 'none');
            }
        });
        $(document).on('change', '[name="inputCandidateElectionType"]', function () {
            $parentId = $(this).eq(0).parents('div.list-group-item').eq(0).attr('id');
            $parentDom = "#" + $parentId + " ";
            $inputCandidateElectionType = $(this).val();

            $($parentDom + '.ElectionPeriod').css('display', 'block');

        });
        $(document).on('change', '[name="inputCandidateMediaType"]', function () {
            $parentId = $(this).eq(0).parents('div.list-group-item').eq(0).attr('id');
            $parentDom = "#" + $parentId + " ";
            $inputCandidateMediaType = $(this).val();

            if ($inputCandidateMediaType === "Others") {
                $($parentDom + '.media-template-title').css('display', 'block');
            } else {
                $($parentDom + '.media-template-title').css('display', 'none');
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

    });
</script>