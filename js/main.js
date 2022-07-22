$(function() {

    $('.has_child').on('click', function() {
        $(this).toggleClass('active');
        $(this).children('ul').stop().slideToggle(500);
    });

    $('.bottom_menu_open').on('click', function() {
        $('.nav_menu').toggleClass('active').slideToggle(500);
        $('.nav_menu_back').toggleClass('active');
        $('.bottom_menu_open').toggleClass('active');
    });

    $('.bottom_menu_open').click(function() {
        if(!$('.nav_menu').hasClass('active')) {
            $('.has_child').removeClass('active');
            $('.has_child ul').stop().slideUp(500);
        }
    });

    $('.nav_menu_back').click(function() {
        if($('.nav_menu').hasClass('active')) {
            $('.has_child').removeClass('active');
            $('.has_child ul').stop().slideUp(500);
        }
    });

    $('.nav_menu_back').on('click', function() {
        $('.nav_menu').toggleClass('active').slideToggle(500);
        $('.nav_menu_back').toggleClass('active');
        $('.bottom_menu_open').toggleClass('active');
    });

    let beforePos = 0;

    function ScrollAnime() {
        let scroll = $(window).scrollTop();
        let elemTop = $('#blog').offset().top;
        if(elemTop > scroll) {
            $('#header_top').addClass('Uphead');
            $('#webticket_info').addClass('fadeOut');
            $('#ivent_banner').removeClass('UpAnime');
            $('#ivent_banner').addClass('DownAnime');
        }else if(scroll == elemTop || 0 > scroll - beforePos){
            $('#webticket_info').removeClass('fadeIn');
            $('#webticket_info').addClass('fadeOut');
            $('#ivent_banner').removeClass('UpAnime');
            $('#ivent_banner').addClass('DownAnime');
        }else {
            $('#header_top').removeClass('Uphead');
            $('#header_top').addClass('Downhead');
            $('#webticket_info').removeClass('fadeOut');
            $('#webticket_info').addClass('fadeIn');
            $('#ivent_banner').removeClass('DownAnime');
            $('#ivent_banner').addClass('UpAnime');
        }
        beforePos = scroll;
    }
    $(window).scroll(function () {
        ScrollAnime();
    });

    function PageTopAnime() {
        let scroll = $(window).scrollTop();
        if (scroll >= 3500){
            $('#topup_btn').removeClass('fadeOut');
            $('#topup_btn').addClass('fadeIn');
        }else{
        if($('#topup_btn').hasClass('fadeIn')){
          $('#topup_btn').removeClass('fadeIn');
          $('#topup_btn').addClass('fadeOut');
        }
      }
    }

    $(window).scroll(function () {
      PageTopAnime();
    });

    function fadeAnime(){
        $('.ivent_about_box').each(function(){
        var elemPos = $(this).offset().top-50;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll >= elemPos - windowHeight){
        $(this).addClass('fadeUp');
        }
    });
    }

    $(window).scroll(function () {
        fadeAnime();
    });
});

/* jQuery(function () {
    var webStorage = function () {
    if (sessionStorage.getItem('access')) {
      $('.load').css('display', 'none');
      $('.splash').css('display', 'none');
      $('.splash_bg').css('display', 'none');
      $('#mv').css('opacity', '1');
      $('.ivent_schedule').css('opacity', '1');
      $('.bottom_menu').css('opacity', '1');
        
    } else {
        $(window).on('load',function(){
            $(".load_giraff").delay(1200).fadeOut('slow');
            $(".load").delay(1500).fadeOut('slow',function() {
                $('body').addClass('appear');
                $('.splash').addClass('active');
                $('.splash_logo').addClass('active');
            });

            $('.splash_logo img').on('animationend', function() {    
                $('.splash').removeClass('active');
                $('.splash').addClass('close');
                $('.splash_bg').addClass('active');
            });

            $('.splash_bg').on('animationend', function() {
                $('#mv').addClass('active');
                $('.bottom_menu').animate({opacity: '1'}, 5000);
                $('.ivent_schedule').animate({opacity: '1'}, 5000);
                $('.splash.close').css('display', 'none');
                $('.splash_bg').css('display', 'none');
            });
        });
      }
    }
    webStorage();
  }); */

  $(function() {
  var splash_text = $.cookie('accessdate'); //キーが入っていれば年月日を取得
  var myD = new Date();//日付データを取得
  var myYear = String(myD.getFullYear());//年
  var myMonth = String(myD.getMonth() + 1);//月
  var myDate = String(myD.getDate());//日

  if (splash_text != myYear + myMonth + myDate) {
    $(window).on('load',function(){
        $(".load_giraff").delay(1200).fadeOut('slow');
        $(".load").delay(1500).fadeOut('slow',function() {
            $('body').addClass('appear');
            $('.splash').addClass('active');
            $('.splash_logo').addClass('active');
        });

        $('.splash_logo img').on('animationend', function() {    
            $('.splash').removeClass('active');
            $('.splash').addClass('close');
            $('.splash_bg').addClass('active');
        });

        $('.splash_bg').on('animationend', function() {
            $('#mv').addClass('active');
            $('.bottom_menu').animate({opacity: '1'}, 2000);
            $('.ivent_schedule').animate({opacity: '1'}, 2000);
            $('.splash.close').css('display', 'none');
            $('.splash_bg').css('display', 'none');
        });
    });
    }else {
        $('.load').css('display', 'none');
        $('.splash').css('display', 'none');
        $('.splash_bg').css('display', 'none');
    }
  });