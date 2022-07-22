$(function() {

    $('.lp_popup_close').on('click', function() {
        $('#lp_popup').css('display', 'none')
    });

    $('.detail_btn').on('click', function() {
        $(this).toggleClass('active');
        $(this).children('ul').stop().slideToggle(500);
    });

    $('.lp_menu_btn').on('click', function() {
        $(this).toggleClass('active');
        $('.lp_menu').toggleClass('active');
        $('.lp_menu_bg').toggleClass('active');
    });

    $('.lp_menu a').on('click', function() {
        $('.lp_menu').removeClass('active');
        $('.lp_menu_btn').removeClass('active');
        $('.lp_menu_bg').removeClass('active');
    });

    function fadeAnime(){
        $('.ivent_intro_box').each(function(){
        var elemPos = $(this).offset().top-50;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll >= elemPos - windowHeight){
        $(this).addClass('fadeUp');
        }
    });
    
        $('.ivent_intro_bottom').each(function(){
        var elemPos = $(this).offset().top-100;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll >= elemPos - windowHeight){
        $(this).addClass('fadeUp');
        }
    });

        $('.ivent_goods_photo').each(function(){
        var elemPos = $(this).offset().top-100;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll >= elemPos - windowHeight){
        $(this).addClass('fadeUp');
        }
    });
    }

    $(window).scroll(function (){
    fadeAnime();
    });

});