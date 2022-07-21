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

    <section id="news_info" class="news_info">
        <div class="news_group">
            <div class="news_group_top">
                <span>園のお知らせ</span>
            </div>

            <ul>
            <?php $args = array(
                'post_type' => 'post',
                'category_name' => 'info',
                'posts_per_page' => 5,
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post(); ?>
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
                <?php endwhile; endif; ?>
            </ul>
            <div class="news_more">
                <a href="<?php home_url(); ?>/news/info/">もっと見る</a>
            </div>
        </div>
    </section>

    <section id="news_info" class="news_info">
        <div class="news_group">
            <div class="news_group_top">
                <span>イベントのお知らせ</span>
            </div>

            <ul>
            <?php $args = array(
                'post_type' => 'post',
                'category_name' => 'event',
                'posts_per_page' => 5,
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post(); ?>
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
                <?php endwhile; endif; ?>
            </ul>
            <div class="news_more">
                <a href="<?php home_url(); ?>/news/event/">もっと見る</a>
            </div>
        </div>
    </section>

    <section id="news_info" class="news_info">
        <div class="news_group">
            <div class="news_group_top">
                <span>動物との出会い・別れ</span>
            </div>

            <ul>
            <?php $args = array(
                'post_type' => 'post',
                'category_name' => 'life',
                'posts_per_page' => 5,
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post(); ?>
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
                <?php endwhile; endif; ?>
            </ul>
            <div class="news_more">
                <a href="">もっと見る</a>
            </div>
        </div>
    </section>

    <section id="news_info" class="news_info bottom">
        <div class="news_group">
            <div class="news_group_top">
                <span>その他のお知らせ</span>
            </div>

            <ul>
            <?php $args = array(
                'post_type' => 'post',
                'category_name' => 'others',
                'posts_per_page' => 5,
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post(); ?>
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
                <?php endwhile; endif; ?>
            </ul>
            <div class="news_more">
                <a href="">もっと見る</a>
            </div>
        </div>
    </section>

    <div id="topup_btn" class="topup_btn sub_page">
        <a href="#page">
            <p>トップ</p>
        </a>
    </div>

    </main>

<?php get_footer(); ?>