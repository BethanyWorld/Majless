$(document).ready(function () {

    $('#menu-icon-trigger').click(function(e){
        e.preventDefault();
        $('#menu-icon-wrapper').toggleClass('open');
        $(".xs-menu").slideToggle(200);
    });
    $(".xs-menu ul.sub-menu").prev('a').after('<i class="fa fa-angle-down xs-menu-handler"></i>');
    $(document).on('click','.xs-menu-handler' , function(){
        $(this).next('.sub-menu').slideToggle(200);
        if ($(this).hasClass('fa-angle-down')) {
            $(this).removeClass('fa-angle-down');
            $(this).addClass('fa-angle-up');
        }
        else {
            $(this).removeClass('fa-angle-up');
            $(this).addClass('fa-angle-down');
        }
    });
    $("footer i.fa-angle-up").click(function(){
        $("html,body").animate({ scrollTop: '0px' });
    });
    $(".recaptcha").click(function(){ reCaptcha(); });

});
