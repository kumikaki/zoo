
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

    <section id="news_info" class="news_info category">
        <span class="category_top news"><?php single_cat_title(); ?></span>
        <div class="news_group">
            <ul>
            <?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
                <a href="<?php the_permalink(); ?>">
                <li class="news_group_list">
                    <a href="<?php the_permalink(); ?>">
                        <div>
                            <span class="news_group_list_date"><?php echo get_the_date('Y/m/d'); ?></span>
                            <span class="news_group_list_title">
                            <span><?php the_field('news-topic'); ?></span>
                            <?php
                                if(mb_strlen($post->post_title)>17) {
                                $title= mb_substr($post->post_title,0,17) ;
                                    echo $title . '...';
                                } else {
                                    echo $post->post_title;
                                }
                                ?>
                            </span>
                        </div>
                    </a>
                </li>
            <?php endwhile; else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
            </ul>

            <nav class="pagenavi">
                <?php wp_pagenavi(); ?>
            </nav>
            <div class="page_post_link bottom news">
                <div class="page_post_link_bofore"><a href="<?php home_url(); ?>/news/">一覧に戻る</a></div>
        </div>
    </section>

    <div id="topup_btn" class="topup_btn sub_page">
        <a href="#page">
            <p>トップ</p>
        </a>
    </div>

    </main>

<?php get_footer(); ?>