$(function() {

    $('.area_btn_Africa').on('click', function(){
        $('.area_Africa').addClass('active');
        $('.Africa').addClass('active');
        $('.animal_world_top').addClass('active');
        $('.animal_world_bottom').addClass('active');
        $('.world_map').addClass('active');
        $('#animal_world').addClass('active');
    });

    $('.area_btn_Eurasia').on('click', function(){
    $('.area_Eurasia').addClass('active');
    $('.Eurasia').addClass('active');
    $('.animal_world_top').addClass('active');
    $('.animal_world_bottom').addClass('active');
    $('.world_map').addClass('active');
    $('#animal_world').addClass('active');
    });

    $('.area_btn_Japan').on('click', function(){
        $('.area_Japan').addClass('active');
        $('.Japan').addClass('active');
        $('.animal_world_top').addClass('active');
        $('.animal_world_bottom').addClass('active');
        $('.world_map').addClass('active');
        $('#animal_world').addClass('active');
    });

    $('.area_btn_America_N').on('click', function(){
        $('.area_America_N').addClass('active');
        $('.America_N').addClass('active');
        $('.animal_world_top').addClass('active');
        $('.animal_world_bottom').addClass('active');
        $('.world_map').addClass('active');
        $('#animal_world').addClass('active');
    });

    $('.area_btn_America_S').on('click', function(){
        $('.area_America_S').addClass('active');
        $('.America_S').addClass('active');
        $('.animal_world_top').addClass('active');
        $('.animal_world_bottom').addClass('active');
        $('.world_map').addClass('active');
        $('#animal_world').addClass('active');
    });

    $('.area_btn_Ocean').on('click', function(){
        $('.area_Ocean').addClass('active');
        $('.Ocean').addClass('active');
        $('.animal_world_top').addClass('active');
        $('.animal_world_bottom').addClass('active');
        $('.world_map').addClass('active');
        $('#animal_world').addClass('active');
    });

    $('.Africa').on('animationed webkitAnimationEnd', function(){
        window.location.href = 'http://zoo.local/animal/#Africa';
    });

    $('.Eurasia').on('animationed webkitAnimationEnd', function(){
        window.location.href = 'http://zoo.local/animal/#Eurasia';
    });

    $('.Japan').on('animationed webkitAnimationEnd', function(){
        window.location.href = 'http://zoo.local/animal/#Japan';
    });

    $('.Ocean').on('animationed webkitAnimationEnd', function(){
        window.location.href = 'http://zoo.local/animal/#Oseania';
    });

    $('.America_N').on('animationed webkitAnimationEnd', function(){
        window.location.href = 'http://zoo.local/animal/#America_N';
    });

    $('.America_S').on('animationed webkitAnimationEnd', function(){
        window.location.href = 'http://zoo.local/animal/#America_S';
    });
});