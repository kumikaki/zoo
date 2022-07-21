<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>宮崎市フェニックス自然動物園</title>

    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">

    <link href="https://unpkg.com/sanitize.css" rel="stylesheet"/>
    <link href="https://unpkg.com/sanitize.css/typography.css" rel="stylesheet"/>
    <link href="https://unpkg.com/sanitize.css/forms.css" rel="stylesheet"/>

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/subhead.css" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/font.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>    
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/map.js"></script>    

    <?php wp_head(); ?>
</head>
<body>

    <header id="header" class="header">

        <div class="header_top">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="宮崎市フェニックス自然動物園">
            </a>
            <ul class="lang_select">
                <a href=""><li>日本語</li></a>
                <a href=""><li>English</li></a>
            </ul>
        </div>

        <div id="main_menu" class="main_menu">
            <div id="nav_menu_back" class="nav_menu_back"></div>
            <div class="nav_menu">
                <nav class="gloval_nav">
                    <ul>
                        <li>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><p>トップページ</p></a>
                        </li>
                        <li class="has_child">
                            <p>営業時間&料金</p>
                            <span></span>
                            <span></span>
                            <ul>
                                <a href="<?php home_url(); ?>/opening-hours/"><li>営業時間・休園日</li></a>
                                <a href="<?php home_url(); ?>/price/"><li>料金</li></a>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php home_url(); ?>/access/"><p>アクセス</p></a>
                        </li>
                        <li class="has_child">
                            <p>施設について</p>
                            <span></span>
                            <span></span>
                            <ul>
                                <a href="<?php home_url(); ?>/map/"><li>園内マップ</li></a>
                                <a href="<?php home_url(); ?>/service/"><li>施設内サービス</li></a>
                                <a href="<?php home_url(); ?>/policy/"><li>園の概念・理念</li></a>
                            </ul>
                        </li>
                        <li class="has_child">
                            <p>イベント&お知らせ</p>
                            <span></span>
                            <span></span>
                            <ul>
                                <a href="<?php home_url(); ?>/day-event/"><li>イベント情報</li></a>
                                <a href="<?php home_url(); ?>/news/"><li>お知らせ</li></a>
                                <a href="<?php home_url(); ?>//"><li>入園にあたってのお願い</li></a>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php home_url(); ?>/animal/"><p>動物の紹介</p></a>
                        </li>
                        <li class="has_child">
                            <p>遊園地&流れるプール</p>
                            <span></span>
                            <span></span>
                            <ul>
                                <a href="<?php home_url(); ?>//"><li>遊園地</li></a>
                                <a href="<?php home_url(); ?>//"><li>流れるプール</li></a>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php home_url(); ?>//"><p>レストラン&ショップ</p></a>
                        </li>
                    </ul>
                </nav>
                <div class="sns_check_box">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/font/font_sns_check.png" alt="公式SNSもチェック！">
                    <div class="sns_icon">
                        <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/svg/icon_twitter_color.svg" alt=""></a>
                        <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/svg/icon_insta_color.svg" alt=""></a>
                        <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/svg/icon_youtube_color.svg" alt=""></a>
                    </div>
                </div>
                <nav class="local_nav">
                    <ul>
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a></li>
                        <li><a href="<?php home_url(); ?>/contact/">問い合わせ</a></li>
                        <li><a href="<?php home_url(); ?>">サイトポリシー</a></li>
                    </ul>
                </nav>
            </div>

            <div class="bottom_menu">
                <nav>
                    <ul>
                        <li>
                            <a href="<?php home_url(); ?>/opening-hours/">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/svg/icon_clock.svg" alt="営業時間">
                                <span class="menu_btn_text">営業時間</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php home_url(); ?>/price/">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/svg/icon_ticket.svg" alt="営業時間">
                                <span class="menu_btn_text">料金</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php home_url(); ?>/map/">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/svg/icon_map.svg" alt="園内マップ">
                                <span class="menu_btn_text">園内MAP</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php home_url(); ?>/webticket-site/">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/svg/icon_webticket.svg" alt="営業時間">
                                <span class="menu_btn_text">WEB購入</span>
                            </a>
                        </li>
                        <li>
                            <div class="bottom_menu_open">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

    </header>