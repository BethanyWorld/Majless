<script type="text/javascript">
    $(document).ready(function () {
        $(function () {
            $('.lazy').Lazy();
        });
    });
    $(document).ready(function () {
        $stateName = "<?php echo $stateName; ?>";
        $stateId = <?php echo $stateId; ?>;
        function loadData() {
            /* Load Candidates */
            $(".filter").removeClass('active');
            $('.mp-section').css('backgroundColor', '#fff');
            $('.mp-section').css('opacity', '0.5');
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
                'inputCSRF': $("#inputCSRF").val()
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
                        $(".unaccepted-candidates").eq(0).parent().parent().before('<div style="height: 1px;border: 20px solid #a9a9a9;margin: 40px 0;" class="row col-xs-12 seperator"></div>');
                        $(".resume-deactived").eq(0).parent().parent().before('<div style="height: 1px;border: 20px solid #a9a9a9;margin: 40px 0;" class="row col-xs-12 seperator"></div>');
                    }, 100);
                },
                error: function (jqXHR, textStatus, errorThrown) {

                }
            });
            /* Load Candidates */
        }
        loadData();
        if (findBootstrapEnvironment() == 'xs' || findBootstrapEnvironment() == 'sm') {
            $election = $(".elections").html();
            $("#election-place-holder").after($election);
            // $(".elections").eq(1).remove();
            $(".desktop-panel .elections").find(':checkbox').each(function () {
                $(this).attr('id', Math.round(10000000));
            });
        }
        $("path").each(function () {
            if ($(this).data('province-id') == $stateId) {
                $(this).addClass('active');
            }
        });
        $(".inputElectionId").click(function () {
            loadData();
        });
        $srcImage = '';
        $candidateName = '';
        $(".filter-button").click(function () {
            $('#mySidenav').css('width', '0px');
            document.getElementById("mySidenav").style.paddingRight = "0";
            document.getElementById("mySidenav").style.paddingLeft = "0";
            $('body').removeClass('over-flow-style');
            $('html').removeClass('over-flow-style');
            $("html, body").animate({scrollTop: 0}, "slow");
            loadData();
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
        $electionContainerTop = $(".lg-election-container").position().top;
        $(window).scroll(function () {
            $candidateLength = $(".candidate-detail-parent-div").children().length;
            if ($candidateLength > 9) {
                $top = $(window).scrollTop();
                if ($top >= $electionContainerTop) {
                    $('.desktop-panel').addClass('CandidateAreaOverFlow');
                    $(".lg-election-container").css({
                        'position': 'absolute',
                        'top': ($top - 200) + 'px',
                        'width': '100%',
                        'right': 0
                    });
                } else {
                    $('.desktop-panel').removeClass('CandidateAreaOverFlow');
                    $(".lg-election-container").css({
                        'position': 'static',
                        'top': '0px'
                    });
                }
            } else {
                $('.desktop-panel').removeClass('CandidateAreaOverFlow');
                $(".lg-election-container").css({
                    'position': 'static',
                    'top': '0px'
                });
            }
        });
        $(".filter").click(function () {
            $(".filter").removeClass('active');
            $(this).addClass('active');
            $filterClass = $(this).data('filter');
            $(".candidate-info-box").hide();
            $(".candidate-info-box." + $filterClass).fadeIn();
        });
    });
</script>