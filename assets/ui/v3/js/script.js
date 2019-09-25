$(document).ready(function () {

    $("#primary_nav_wrap ul ul ul").each(function () {
        $(this).prev('a').append('<i class="fa fa-angle-left navigator"></i>');
    });
    $("#primary_nav_wrap ul:first").find('a').each(function () {
        if ($(this).next('ul').length > 0) {
            $(this).after('<i class="fa fa-angle-down menu-arrow-down"></i>');
        }
    });
    $("#primary_nav_wrap ul ul").hover(
        function () {
            $(this).prevUntil('li').addClass('hover-effect');
        },
        function () {
            $(this).prevUntil('li').removeClass('hover-effect');
        }
    );

    $(".xs-menu ul:first").find('a').each(function () {
        if ($(this).next('ul').length > 0) {
            $(this).after('<i class="fa fa-angle-down menu-arrow-down"></i>');
        }
    });
    $(".xs-menu .menu-arrow-down").click(function () {
        $(this).next('ul').slideToggle();
    });
    $(".menu-handle").click(function () {
        $(".xs-menu nav").slideToggle();
    });
    $(".box-container").hover(function () {
        $(this).find('img').eq(0).addClass('hover-first');
        $(this).find('img').eq(1).addClass('hover-last');
    }, function () {
        $(this).find('img').eq(0).removeClass('hover-first');
        $(this).find('img').eq(1).removeClass('hover-last');
    });

    $(".blog-section").hover(
        function () {
            $(this).find('h3').addClass('hover-effect');
        },
        function () {
            $(this).find('h3').removeClass('hover-effect');
        }
    );

    $("footer .blog-section").hide();
    $("footer .blog-section").eq(0).show();
    var footer_blog = 0;
    var footer_blog_len = $(".footer .blog-section").length;
    slide_timer = setInterval(function () {
        footer_blog++;
        if (footer_blog >= footer_blog_len) {
            footer_blog = 0;
        }
        $("footer .blog-section").fadeOut();
        $("footer .blog-section").eq(footer_blog).fadeIn();
    }, 3000);


    $(".slide").fadeOut();
    $(".slide").eq(0).fadeIn();
    var slide_timer;

    function slide(slide_index) {
        var slide_index = slide_index || 0;
        var slide_len = $(".slide").length;
        slide_timer = setInterval(function () {
            slide_index++;
            if (slide_index >= slide_len) {
                slide_index = 0;
            }
            $(".slide").fadeOut();
            $(".slide").eq(slide_index).fadeIn();

            $(".slide-bullet .bullet").removeClass('hover');
            $(".slide-bullet .bullet").eq(slide_index).addClass('hover');
        }, 3000);
    }

    $(".slide-bullet .bullet").click(function () {
        $(".slide-bullet .bullet").removeClass('hover');
        $(this).addClass('hover');

        $(".slide").fadeOut();
        $(".slide").eq($(this).index()).fadeIn();
        clearInterval(slide_timer);
        slide($(this).index());
    });
    slide();


    $(".search").click(function () {
        $(".search-modal").fadeIn();
    });
    $(".close_modal").click(function () {
        $(".search-modal").fadeOut();
    });


    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        autoplay: 3000,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

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
        $("#IranMap svg g path").hover(function () {
            var c = $(this).attr("class");
            var b = $(this).parent("g").attr("class");
            var d = $("#IranMap .list ." + b + " ." + c + " a").html();
            if (d) {
                $("#IranMap .list ." + b + " ." + c + " a").addClass("hover");
                $("#IranMap .show-title").html(d).css({display: "block"})
            }
        }, function () {
            $("#IranMap .list a").removeClass("hover");
            $("#IranMap .show-title").html("").css({display: "none"})
        });
        $("#IranMap .list ul li ul li a").hover(function () {
            var e = $(this).parent("li").attr("class");
            var c = $(this).parent("li").parent("ul").parent("li").attr("class");
            var b = "#IranMap svg g." + c + " path." + e;
            var d = $(b).attr("class");
            $(b).attr("class", d + " hover")
        }, function () {
            var e = $(this).parent("li").attr("class");
            var c = $(this).parent("li").parent("ul").parent("li").attr("class");
            var b = "#IranMap svg g." + c + " path." + e;
            var d = $(b).attr("class");
            $(b).attr("class", d.replace(" hover", ""))
        });
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
            if ($("#IranMap .show-title").html()) {
                var f = $(this).offset();
                var b = (c - f.left + 25) + "px";
                var g = (h - f.top - 5) + "px";
                $("#IranMap .show-title").css({left: b, top: g})
            }
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

});