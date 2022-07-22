$(function() {

    $('.tab_map_list').click(function() {
        $(this).toggleClass('active');
        $(this).children('ol').stop().slideToggle(500).css('display', 'grid');
    });

    $('.tab_list').click(function() {
        let index = $('.tab_list').index(this);
    
        $('.map_desc_top').removeClass('active');
        $('.tab_map').removeClass('active');
        $('.tab_map').eq(index).addClass('active');
        $('.tab_list_all').addClass('active');
        $('.breadcrumbs.map').css('display', 'none');

        if( $('.tab_map').hasClass('active') ) {
            $('.map_group_top').css('display', 'none');
            $('.footer').css('display', 'none');
        }
    });

    $('.tab_list_all').click(function() {
        $('.tab_map').removeClass('active');
        $('.map_desc_top').addClass('active');
        $('.tab_list_all').removeClass('active');
        $('.tab_map_list').children('ol').stop().slideUp(500);
        $('.map_group_top').css('display', 'block');
        $('.footer').css('display', 'block');
    });

    $('.plus_btn').click(function() {
        $('.tab_map_photo img').css('transform', 'scale(1.6)');
    });

    $('.minus_btn').click(function() {
        $('.tab_map_photo img').css('transform', 'scale(1)');
    });
});