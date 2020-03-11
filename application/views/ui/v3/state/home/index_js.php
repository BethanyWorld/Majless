<script type="text/javascript">
    $(document).ready(function () {
        $(function () {
            $(window).resize(function () {
                a()
            });
            function a() {
                var b = $("#IranMap .list").height();
                var c = $("#IranMap .list").width();
                if (b > c) {
                    $("#IranMap svg").height(c).width(c)
                } else {
                    $("#IranMap svg").height(b).width(b)
                }
            }
            a();
            $("#IranMap svg g path").hover(
                function () {
                var c = $(this).attr("class");
                var b = $(this).parent("g").attr("class");
                //var d = $("#IranMap .list ." + b + " ." + c + " a").html();
                var title = $(this).attr('data-participation-value');
                if (title !== '' && c !== '' ) {
                    $("#IranMap .list ." + b + " ." + c + " a").addClass("hover");
                    if(title !== undefined){
                        $("#IranMap .show-title").html(title).css({display: "block"});
                    }
                }
            },
                function () {
                $("#IranMap .list a").removeClass("hover");
                $("#IranMap .show-title").html("").css({display: "none"})
            }
            );
            $("#IranMap .list ul li ul li a").hover(
                function () {
                    var e = $(this).parent("li").attr("class");
                    var c = $(this).parent("li").parent("ul").parent("li").attr("class");
                    var title = $(this).attr('data-participation-value');
                    if (title !== '' && c !== '' && e !== '' ) {
                        var b = "#IranMap svg g." + c + " path." + e;
                        var d = $(b).attr("class");
                        $(b).attr("class", d + " hover");
                        if(title !== undefined){
                            $("#IranMap .show-title").html(title).css({display: "block"});
                        }
                    }
                },
                function () {
                    var e = $(this).parent("li").attr("class");
                    var c = $(this).parent("li").parent("ul").parent("li").attr("class");
                    if (c !== '' && e !== '' ) {
                        var b = "#IranMap svg g." + c + " path." + e;
                        var d = $(b).attr("class");
                        $(b).attr("class", d.replace(" hover", ""))
                    }
                }
                );
            $("#IranMap").mousemove(function (d) {
                var c = 0;
                var h = 0;
                if (!d) {
                    var d = window.event
                }
                if (d.pageX || d.pageY) {
                    c = d.pageX;
                    h = d.pageY
                } else {
                    if (d.clientX || d.clientY) {
                        c = d.clientX + document.body.scrollLeft + document.documentElement.scrollLeft;
                        h = d.clientY + document.body.scrollTop + document.documentElement.scrollTop
                    }
                }
                /*if ($("#IranMap .show-title").html()) {
                    var f = $(this).offset();
                    var b = (c - f.left + 25) + "px";
                    var g = (h - f.top - 5) + "px";
                    $("#IranMap .show-title").css({left: b, top: g})
                }*/
            })
        });
        $(function () {
            $('#IranMap .map .province path').click(function () {
                var province = $(this).attr('class');
                var provinceId = $(this).data('province-id');
                var provinceName = $('#IranMap .list>ul>li>ul>li.' + province + ' a').html();
                if (provinceName) {
                    $('#IranMap .city').html(provinceName + ' - ' + provinceId);
                    window.location.href = base_url + "State/detail/" + provinceId + "/" + provinceName;
                }
            });
            $('#IranMap .list li.province ul li').click(function (e) {
                var provinceName = $(this).text();
                var provinceId = $(this).data('province-id');
                if (provinceName) {
                    $('#IranMap .city').html(provinceName + ' - ' + provinceId);
                    window.location.href = base_url + "State/detail/" + provinceId + "/" + provinceName;
                }
                e.preventDefault();
            });
        });

        $statistics = JSON.parse('<?php echo json_encode($Statistics); ?>');
        $("#inputStatInfo").change(function(){
            $enumValue = $(this).val();
            for ($i = 0; $i < $statistics.length; $i++) {
                $item = $statistics[$i];
                $stateId = $item['StatisticsTypeId'];
                if ($item['StatisticsSlug'] === $enumValue) {
                    $('li[data-province-id=' + $stateId + ']').attr('data-participation-value', $item['StatisticsValue']);
                    $('li[data-province-id=' + $stateId + '] a').attr('data-participation-value', $item['StatisticsValue']);
                    $('path[data-province-id=' + $stateId + ']').attr('data-participation-value', $item['StatisticsValue']);
                }
                if ($item['StatisticsSlug'] === $enumValue+'Color') {
                    $('li[data-province-id=' + $stateId + ']').attr('data-state-color', $item['StatisticsValue']);
                    $('path[data-province-id=' + $stateId + ']').css('fill', $item['StatisticsValue']);
                }
            }
        });
        $("#inputStatInfo").change();

    });

</script>