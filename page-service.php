<?php get_header('subhead'); ?>

<main id="main">

    <div id="page_head" class="page_head service">
        <h1>施設内サービス</h1>
    </div>
    
    <div class="breadcrumbs page_all" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
    </div>

    <div class="opening_hours_group">

        <ul class="area_container ticket">
            <li><a href="#parking">駐車場</a></li>
            <li><a href="#toilet">多目的トイレ</a></li>
            <li><a href="#rental">各種貸し出し</a></li>
            <li><a href="#baby">授乳室</a></li>
            <li><a href="#coinlocker">コインロッカー</a></li>
        </ul>

        <section id="parking" class="page_group">
            <div class="page_box ticket">
                <h3>駐車場</h3>
                <div>
                    <h4>●駐車料金</h4>
                    <ul>
                        <li>
                            <span>乗用車</span>
                            <span>400円</span>
                        </li>
                        <li>
                            <span>マイクロバス</span>
                            <span>600円</span>
                        </li>
                        <li>
                            <span>大型バス</span>
                            <span>1,000円</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4>●特記事項</h4>
                    <ul>
                        <li>
                            <span>収容台数</span>
                            <span>600台</span>
                        </li>
                        <li>
                            <span>時間制限</span>
                            <span>なし</span>
                        </li>
                        <span>※18時～翌日の開園まで閉鎖</span>
                    </ul>
                </div>
                <div class="shuttlebus_service">
                    <span>イオンモール宮崎からのシャトルバスを運行しています。</span>
                    <span>※土日祝のみ運行</span>
                    <span>詳しくは<a href="<?php home_url(); ?>/access/#shuttlebus_desc">アクセスページ</a>をご確認ください。</span>
                    <a href="<?php home_url(); ?>/access/#shuttlebus_desc"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner/banner_shuttlebus.jpg" alt=""></a>
                </div>
            </div>
        </section>

        <section id="toilet" class="page_group">
            <div class="page_box ticket">
                <h3>多目的トイレ</h3>
                <span>園内３箇所のトイレには、多目的トイレも備わっております。<br>※オムツ替えシート有</span>
                <div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/toilet2.jpeg" alt="">
                    <span>【芝生広場】近くのトイレ</span>

                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/toilet.jpeg" alt="">
                    <span>【こども動物村】近くのトイレ</span>
                </div>
                <div class="button">
                    <a href="<?php home_url(); ?>/map/">
                        <p>園内マップで確認</p>
                    </a>
                </div>
            </div>
        </section>

        <section id="rental" class="page_group">
            <div class="page_box ticket">
                <h3>各種貸し出し</h3>
                <span>車椅子・ベビーカーなど、入口ゲートにて貸し出しを行なっておりますので、お気軽にご利用ください。</span>
                <span>動物園入り口を入ると、すぐ上り坂になっています。そこを過ぎると緩やかに下りになり平坦になります。坂道と園内各所にベンチ・椅子を設置しています。</span>
                <div>
                    <h4>●体が不自由な方</h4>
                    <ul>
                        <li>
                            <span>車椅子</span>
                            <span>無料</span>
                        </li>
                        <span>※時間制限はありません</span>
                    </ul>
                </div>
                <div>
                    <h4>●お子様連れの方へ</h4>
                    <ul>
                        <li>
                            <span>ベビーカー</span>
                            <span>200円</span>
                        </li>
                        <li>
                            <span>ベビーカー(大)</span>
                            <span>400円</span>
                        </li>
                        <span>※時間制限はありません</span>
                    </ul>
                </div>
                <div>
                    <h4>●その他貸し出しサービス</h4>
                    <ul>
                        <li>
                            <span>傘</span>
                            <span>無料</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="baby" class="page_group">
            <div class="page_box ticket">
                <h3>授乳室</h3>
                <span>赤ちゃん室（授乳室）はレストランにありますので、ご自由にお使い下さい。</span>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/map/restaurantmap.png" alt="">
                <div class="button">
                    <a href="<?php home_url(); ?>/map/">
                        <p>レストランエリアを確認</p>
                    </a>
                </div>
            </div>
        </section>

        <section id="coinlocker" class="page_group">
            <div class="page_box ticket">
                <h3>コインロッカー</h3>
                <span>入口ゲートと園内中央ショップ横に設置しております。</span>
                <div>
                    <ul>
                        <li>
                            <span>大きさによる</span>
                            <span>300円〜500円</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>

    <div id="topup_btn" class="topup_btn sub_page">
        <a href="#main">
            <p>トップ</p>
        </a>
    </div>

</main>

<?php get_footer(); ?>