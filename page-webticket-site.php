<?php get_header('subhead'); ?>

<main id="main">

    <div class="breadcrumbs map" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
    </div>

    <div class="webticket_buy">
        <div>
            <h2>入場券購入</h2>
            <div class="webticket_buy_box">
                <h3 class="webticket_buy_box_top">WEB購入限定デザイン！</h3>
                <div class="webticket_buy_desc">
                    <h4>●1日入場券</h4>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/pricepage_oneday.png" alt="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/pricepage_oneday2.png" alt="">
                    <p>園内の動物たちの様々な箇所をじ〜っくり見れるデザインとなっています。<br>
                        ※デザインは不定期で変更されます。<br>
                        ※1日入場券をご購入の場合、デザインの選択はできません。</p>
                </div>
                <div class="webticket_buy_desc">
                    <h4>●年間パスポート</h4>
                    <h5>【50周年記念デザイン】</h5>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/pricepage_oneyear.png" alt="">
                    <p>あなたの推しを選んでファンカードにして持ち歩くことができます♫<br>
                        ※ご購入後のデザインの変更は致しかねます。ご了承ください。</p>
                </div>
            </div>

            <div class="webticket_buy_desc">
                <h2>ご予約フォーム</h2>
                <p>お支払い・チケットのお渡しは現地でとなります。現地では現金・クレジットカード決済が使用可能です。</p>
            </div>

            <?php the_content(); ?>	
        </div>
    </div>


</main>

<?php get_footer(); ?>