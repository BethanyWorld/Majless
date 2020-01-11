<script type="text/javascript">
    $(document).ready(function () {
        $(function () {
            $('.lazy').Lazy();
        });
    });
    $(document).ready(function () {
        if (findBootstrapEnvironment() == 'xs' || findBootstrapEnvironment() == 'sm') {
            $election = $(".elections").html();
            $("#election-place-holder").after($election);
            // $(".elections").eq(1).remove();
            $(".desktop-panel .elections").find(':checkbox').each(function () {
                $(this).attr('id', Math.round(10000000));
            });
        }
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
            $('.mp-section').css('backgroundColor', '#fff');
            $('.mp-section').css('opacity', '0.5');
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
                'inputElectionIds': $electionIds,

            }
            $.ajax({
                type: 'post',
                url: base_url + 'State/getCandidatesByElectionId',
                data: $sendData,
                success: function (data) {
                    $(".candidate-container").html(data);
                    setTimeout(function () {
                        $("html, body").animate({scrollTop: 0}, "slow");
                        $('.mp-section').css('backgroundColor', 'transparent');
                        $('.mp-section').css('opacity', '1');
                    }, 100);
                },
                error: function (jqXHR, textStatus, errorThrown) {

                }
            });
        });
        $srcImage = '';
        $candidateName = '';
        $(".blog-search-submit").click(function (e) {
            e.preventDefault();
            toggleLoader();
            $inputFullName = $(this).prev('label').find(':input').val();
            $sendData = {
                'inputStateName': $stateName,
                'inputStateId': $stateId,
                'inputFullName': $inputFullName
            }
            $.ajax({
                type: 'post',
                url: base_url + 'State/getCandidatesByElectionId',
                data: $sendData,
                success: function (data) {
                    $(".candidate-container").html(data);
                    $('#mySidenav').css('width', '0px');
                    document.getElementById("mySidenav").style.paddingRight = "0";
                    document.getElementById("mySidenav").style.paddingLeft = "0";
                    $('body').removeClass('over-flow-style');
                    $('html').removeClass('over-flow-style');
                    $("html, body").animate({scrollTop: 0}, "slow");
                    toggleLoader();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    toggleLoader();
                }
            });
        });
        $(".filter-button").click(function () {
            $('#mySidenav').css('width', '0px');
            document.getElementById("mySidenav").style.paddingRight = "0";
            document.getElementById("mySidenav").style.paddingLeft = "0";
            $('body').removeClass('over-flow-style');
            $('html').removeClass('over-flow-style');
            $("html, body").animate({scrollTop: 0}, "slow");
        });
        /* Export*/
        $(document).on('click', ".invite-button", function () {
            $('.show-box').hide();
            $("#show-box").html('');
            $("#show-box").append($(".loading-text").clone().removeClass('hidden'));
            $(".modal-body").append($(".loading-demo").clone().removeClass('hidden'));
            $srcImage = $(this).data('image');
            $candidateName = $(this).data('title');
            $candidateArea = $(this).data('area');
            $('.inner-candidate-image').attr('src', $srcImage);
            $('.modalCandidateName').text($candidateName);
            $('.modalCandidateArea').text($candidateArea);
            domtoimage.toJpeg(document.getElementById('hidden-box1'), {quality: 1}).then(function (dataUrl) {

                $(".modal-body").find(".loading-demo").remove();
                var img = new Image();
                img.src = dataUrl;
                document.body.appendChild(img);
                $("#show-box div:first").append(img);
                var link = document.createElement('a');
                link.href = dataUrl;
                link.download = Math.floor(Math.random() * 10000) + 'Story.jpg';
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            });
            domtoimage.toJpeg(document.getElementById('hidden-box2'), {quality: 1}).then(function (dataUrl) {
                var img = new Image();
                img.src = dataUrl;
                document.body.appendChild(img);
                $("#show-box div:last").append(img);
                var link = document.createElement('a');
                link.href = dataUrl;
                link.download = Math.floor(Math.random() * 10000) + 'Post.jpg';
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
                $('.show-box').fadeIn();
            });


            /* Increase Invite Count */

            $this = $(this);
            if($(this).attr('data-id')) {
                $candidateId = $(this).data('id');
                $sendData = {'inputRowId': $candidateId}
                $.ajax({
                    type: 'post',
                    url: base_url + 'State/doIncreaseCandidateSpecialInviteCount',
                    data: $sendData,
                    success: function (data) {
                        $this.removeAttr('data-id');
                    }
                });
            }

            /* End Increase Invite Count*/


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
        $('.open-sidebar').click(function () {
            $('body').addClass('over-flow-style');
            $('html').addClass('over-flow-style');
            document.getElementById("mySidenav").style.width = "100%";
            document.getElementById("mySidenav").style.paddingRight = "15px";
            document.getElementById("mySidenav").style.paddingLeft = "15px";
            document.getElementById("main").style.marginLeft = "250px";
        });
        $('.closebtn').click(function () {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
            document.getElementById("mySidenav").style.paddingRight = "0";
            document.getElementById("mySidenav").style.paddingLeft = "0";
            $('body').removeClass('over-flow-style');
            $('html').removeClass('over-flow-style');
        });


        function findBootstrapEnvironment() {
            var envs = ["xs", "sm", "md", "lg"];
            var envValues = ["xs", "sm", "md", "lg"];
            var $el = $('<div>');
            $el.appendTo($('body'));
            for (var i = envValues.length - 1; i >= 0; i--) {
                var envVal = envValues[i];
                $el.addClass('hidden-' + envVal);
                if ($el.is(':hidden')) {
                    $el.remove();
                    return envs[i]
                }
            }
        }


        // var btn = $('.open-sidebar');
        // $(window).scroll(function() {
        //     if ($(window).scrollTop() > 200) {
        //         btn.addClass('new-style-button-xs');
        //     } else {
        //         btn.removeClass('new-style-button-xs');
        //     }
        // });
    });
</script>