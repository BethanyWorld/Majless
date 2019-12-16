<script type="text/javascript">
    $(document).ready(function () {
        $continueSlide = true;

        $('.myBtn').click(function () {
            var video = $(this).prev('video').get(0);
            $continueSlide = false;
            if (video.paused) {
                video.play();
                $(this).find('i').removeClass('fa-play');
                $(this).find('i').addClass('fa-pause');
            } else {
                video.pause();
                $(this).find('i').addClass('fa-play');
                $(this).find('i').removeClass('fa-pause');
            }
        });
        var slideIndex = $(".campaign_section_slide").length;
        $slidesLength = $(".campaign_section_slide").length;

        $(".prev").click(function(){
            $continueSlide = true;
            $(".slider-timer").stop().css({width: "0%"});
            slide(-1);
            animateImages();
        });
        $(".next").click(function(){
            $continueSlide = true;
            $(".slider-timer").stop().css({width: "0%"});
            slide(1);
            animateImages();
        });

        slide(0);
        function slide(n) {
            n = parseInt(n);
            slideIndex += n;
            if (slideIndex >= $slidesLength) {
                slideIndex = 0;
            }
            if (slideIndex < 0) {
                slideIndex = $slidesLength - 1;
            }
            $(".campaign_section_slide").fadeOut(1200);
            $(".campaign_section_slide").eq(slideIndex).fadeIn(1000);
            $(".slide-title").hide();
            $(".slide-title").eq(slideIndex).fadeIn(1000);
        }
        animateImages();
        function animateImages() {
            if($continueSlide){
                $(".slider-timer").stop().animate({
                    width: "100%"
                }, 9000);
                $(".slider-timer").animate({
                    width: '0px',
                }, 10, function () {
                    setTimeout(animateImages, 1000);
                    slide(1);
                });
            }
            else{
                slide(-1);
            }
        }
        $('.full-screen-icon').click(function () {
            $continueSlide = false;
            $fullscren = $("video").get(0);
            if ($fullscren.requestFullscreen) {
                $fullscren.requestFullscreen();
            }
        });
    });
</script>