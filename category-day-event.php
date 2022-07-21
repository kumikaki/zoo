<?php get_header('subhead'); ?>

<main id="page" class="page news_intro">

    <div id="page_head" class="page_head dayevent">
        <h1>イベント情報</h1>
    </div>
    
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
    </div>

    <section class="news_info dayevent">
        <div class="news_group">
            <div class="news_group_top">
                <span>期間限定のイベント</span>
            </div>
            <div class="limitevent">
                <a href="<?php home_url(); ?>/himukaizer-ivent/">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner/ivent_banner.png" alt="">
                【天孫降臨ヒムカイザー】×【宮崎市フェニックス自然動物園】50周年記念イベント
                </a>
                <a href="<?php home_url(); ?>/news/">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner/banner_giraff.png" alt="">
                マサイキリンの赤ちゃん誕生【愛称募集】！
                </a>
            </div>
            <div class="news_more">
                <a href="<?php home_url(); ?>/news/">お知らせページへ</a>
            </div>
        </div>
    </section>

    <section class="dayevent_group">
        <div class="dayevent_group_top">
            <h3>毎日のイベント</h3>
            <p>※動物イベントは動物の体調等により変更になる場合がございます。</p>

        <?php $args = array(
            'post_type' => 'post',
            'category_name' => 'day-event',
            'posts_per_page' => -1,
            'order' => 'ASC'
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="dayevent_box_top">
                <h4><?php the_title(); ?></h4>
                <span><?php the_field('implementation'); ?></span>
            </div>
            <div class="dayevent_box_list">
                <span>時間：<?php the_field('time'); ?></span>
                <span>場所：<?php the_field('place'); ?></span>
                <p><?php the_field('event-contents'); ?></p>
            </div>
        <?php endwhile; endif; ?>
        </div>

    </section>

    <div id="topup_btn" class="topup_btn sub_page">
        <a href="#page">
            <p>トップ</p>
        </a>
    </div>

    </main>

<?php get_footer(); ?>