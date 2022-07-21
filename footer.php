<footer id="footer" class="footer">
        <div class="sns_check_box">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/font/font_sns_check.png" alt="公式SNSもチェック！">
            <div class="sns_icon">
                <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/svg/icon_twitter_color.svg" alt=""></a>
                <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/svg/icon_insta_color.svg" alt=""></a>
                <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/svg/icon_youtube_color.svg" alt=""></a>
            </div>
        </div>

        <div class="footer_nav_menu">
            <nav class="footer_gloval_nav">
                <ul>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><li class="link_top">トップページ</li></a>
                    <li class="link_top">営業時間&料金</li>
                            <a href="<?php home_url(); ?>/opening-hours/"><li>営業時間・休園日</li></a>
                            <a href="<?php home_url(); ?>/price/"><li>料金</li></a>
                    <a href="<?php home_url(); ?>//"><li class="link_top">アクセス</li></a>
                    <li class="link_top">施設について</li>
                            <a href="<?php home_url(); ?>/map/"><li>園内マップ</li></a>
                            <a href="<?php home_url(); ?>/service/"><li>施設内サービス</li></a>
                            <a href="<?php home_url(); ?>/policy/"><li>園の概念・理念</li></a>
                    <li class="link_top">イベント&お知らせ</li>
                            <a href="<?php home_url(); ?>/day-event/"><li>イベント情報</li></a>
                            <a href="<?php home_url(); ?>/news/"><li>お知らせ</li></a>
                            <a href="<?php home_url(); ?>//"><li>入園にあたってのお願い</li></a>
                    <a href="<?php home_url(); ?>/animal/"><li class="link_top">動物の紹介</li></a>
                    <li class="link_top">遊園地&流れるプール</li>
                            <a href="<?php home_url(); ?>//"><li>遊園地</li></a>
                            <a href="<?php home_url(); ?>//"><li>流れるプール</li></a>
                    <a href="<?php home_url(); ?>//"><li class="link_top">レストラン&ショップ</li></a>
            </nav>

        <div class="zoo_desc">
            <h4>宮崎市フェニックス自然動物園</h4>
            <p class="zoo_desc_address">〒880-0122<br>
                宮崎県宮崎市大字塩路字浜山3083-42</p>
            <p class="zoo_desc_tel">TEL：0985-39-1306</p>
        </div>

        <div class="copyrignht">
            <small>Copyright © 2022 Miyazaki City Phoenix Zoo ALL Rights Reserved.</small>
        </div>
    </footer>
    
    <?php wp_footer(); ?>
</body>
</html>