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
            $('.show-box').hide();
            $("#show-box").html('');
            $("#show-box").append($(".loading-text").clone().removeClass('hidden'));
            $(".modal-body").append($(".loading-demo").clone().removeClass('hidden'));
             $srcImage = $(this).data('image');
             $candidateName = $(this).data('title');
             $('.inner-candidate-image').attr('src', $srcImage);
             $('.modalCandidateName').text($candidateName);
            domtoimage.toJpeg(document.getElementById('hidden-box1'), { quality: 1 }).then(function (dataUrl) {

                $(".modal-body").find(".loading-demo").remove();
                var img = new Image();
                img.src = dataUrl;
                document.body.appendChild(img);
                $("#show-box div:first").append(img);
                var link = document.createElement('a');
                link.href = dataUrl;
                link.download = Math.floor(Math.random() * 10000)+'Story.jpg';
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            });
            domtoimage.toJpeg(document.getElementById('hidden-box2'), { quality: 1 }).then(function (dataUrl) {
                    var img = new Image();
                    img.src = dataUrl;
                    document.body.appendChild(img);
                    $("#show-box div:last").append(img);
                    var link = document.createElement('a');
                    link.href = dataUrl;
                    link.download = Math.floor(Math.random() * 10000)+'Post.jpg';
                    document.body.appendChild(link);
                    link.click();
                    document.body.removeChild(link);
                    $('.show-box').fadeIn();
                });
        });
        $('#IranMap .map .province path').click(function () {
            var province = $(this).attr('class');
            var provinceId = $(this).data('province-id');
            var provinceName = $(this).data('province-name');
            window.location.href = base_url + "State/detail/" + provinceId + "/" + provinceName;
        });
        $("#IranMap svg g path").hover(
            function () {
                var provinceName = $(this).data('province-name');
                $("#IranMap .show-title").html(provinceName).css({display: "block"})
            },
            function () {
                $("#IranMap .list a").removeClass("hover");
                $("#IranMap .show-title").html("").css({display: "none"})
            }
        );
    });
    $(document).ready(function () {
        $(function () {
            $('.lazy').Lazy();
        });
    });
</script>