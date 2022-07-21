<?php get_header('subhead'); ?>

<main class="page animal_intro">

    <div id="page_head" class="page_head animal">
        <h1>動物の紹介</h1>
    </div>
    
    <div class="breadcrumbs category" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
    </div>

    <ul  class="group category">
        <span class="category_top"><?php single_cat_title(); ?>の動物たち</span>
        <?php $posts = query_posts( $query_string . '&order=asc&posts_per_page=-1' ); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <a href="<?php the_permalink(); ?>">
                <li class="group_list">
                    <div class="group_list_photo">
                        <?php the_post_thumbnail('full'); ?>
                    </div>
                    <div>
                        <span class="group_list_name"><?php the_title(); ?></span>
                        <span class="group_list_name_en"><?php the_field('en_name'); ?></span>
                    </div>
                </li>
            </a>
        <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
    </ul>

    <div class="page_post_link bottom">
        <div class="page_post_link_bofore"><a href="<?php home_url(); ?>/animal/">一覧に戻る</a></div>
    </div>

    <div id="topup_btn" class="topup_btn">
        <a href="#page_head">
            <p>トップ</p>
        </a>
    </div>

    </main>

<?php get_footer(); ?>