<?php get_header('subhead'); ?>

<main id="page" class="page news_intro">

    <div id="page_head" class="page_head news">
        <h1>お知らせ</h1>
    </div>
    
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
    </div>

    <h2>動物園だより</h2>

    <section class="news_info">
        <div class="news_group single">
            <div class="news_group_top">
                <span>
                <?php the_field('news-topic'); ?>
                <?php the_title(); ?>
                </span>
            </div>

            <div class="news_group_single_list">
                <span class="news_group_single_list p"><?php the_content(); ?></span>
                <span class="news_group_single_list d"><?php echo get_the_date('Y/m/d'); ?></span>
            </div>
        </div>
    </section>

    <div class="page_post_link bottom">
        <div><?php previous_post_link('%link', '前の記事へ', true); ?></div>
        <div class="page_post_link_bofore"><a href="<?php home_url(); ?>/news/">一覧に戻る</a></div>
        <div><?php next_post_link('%link', '次の記事へ', true); ?></div>
    </div>

    <div id="topup_btn" class="topup_btn sub_page">
        <a href="#page">
            <p>トップ</p>
        </a>
    </div>

</main>

<?php get_footer(); ?>