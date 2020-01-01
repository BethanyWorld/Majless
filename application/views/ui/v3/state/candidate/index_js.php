<script type="text/javascript">
    $(document).ready(function () {
        $(document).on('click', '.mp-section .mp', function () {
            $(".mp-section .mp .menu").slideUp();
            $(this).find(".menu").eq(0).slideToggle();
        });
        $stateName = "<?php echo $stateName; ?>";
        $stateId = <?php echo $stateId; ?>;
        $("path").each(function () {
            if ($(this).data('province-id') == $stateId) {
                $(this).addClass('active');
            }
        });
        $(".inputElectionId").click(function () {
            toggleLoader();
            $electionId = $(this).val();
            $electionIds = [];
            $(".inputElectionId").each(function () {
                if ($(this).is(":checked")) {
                    $electionIds.push($(this).val());
                }
            });

            $sendData = {
                'inputStateName': $stateName,
                'inputStateId': $stateId,
                'inputElectionIds': $electionIds
            }

            $.ajax({
                type: 'post',
                url: base_url + 'State/getCandidatesByElectionId',
                data: $sendData,
                success: function (data) {
                    $(".candidate-container").html(data);
                    toggleLoader();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    toggleLoader();
                }
            });
        });
        $srcImage = '';
        $candidateName = '';
        /* Export*/
        $(document).on('click', ".invite-button", function () {
            $srcImage = $(this).data('image');
            $candidateName = $(this).data('title');
            $('.inner-candidate-image').attr('src', $srcImage);
            $('.modalCandidateName').text($candidateName);
        });
        /* End Export*/
        /* Export*/
        $(document).on('click', "#receiveFile", function () {
            toggleLoader();
            domtoimage.toBlob(document.getElementById('hidden-box1'))
                .then(function (blob) {
                    window.saveAs(blob, 'azmaa_campaign_story.jpg');
                });
            domtoimage.toBlob(document.getElementById('hidden-box2'))
                .then(function (blob) {
                    window.saveAs(blob, 'azmaa_campaign_post.jpg');
                    toggleLoader();
                });
        });
        /* End Export*/
        /*$('#IranMap .map .province path').click(function () {
            var province = $(this).attr('class');
            var provinceId = $(this).data('province-id');
            var provinceName = "-";
            window.location.href = base_url + "State/detail/" + provinceId + "/" + provinceName;
        });*/

    });

    $(document).ready(function(){
        $(function() {
            $('.lazy').Lazy();
        });
    });
</script>