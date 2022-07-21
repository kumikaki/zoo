<?php get_header('subhead'); ?>

<main class="page animal_intro">

    <div id="page_head" class="page_head animal">
        <h1>動物の紹介</h1>
    </div>
    
    <div class="breadcrumbs single" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
    </div>

    <div class="animal_head">
        <span class="animal_head_title"><?php the_title(); ?></span>
        <span class="animal_en"><?php the_field('en_name'); ?></span>
    </div>

    <div class="animal_intro_photo"><?php the_content(); ?></div>

    <div class="page_post_link">
        <div><?php previous_post_link(); ?></div>
        <div><?php next_post_link(); ?></div>
    </div>

    <div class="animal_deta">
        <ul>
            <li>
                <h3>フェニックス自然動物園の<br><?php the_title(); ?></h3>
                <span class="animal_deta_text"><?php the_field('name'); ?></span>
            </li>
            <li>
                <h3>学名</h3>
                <span class="animal_deta_text"><?php the_field('scientific_name'); ?></span>
            </li>
            <li>
                <h3>特徴</h3>
                <span class="animal_deta_text passage"><?php the_field('feature'); ?></span>
            </li>
            <li>
                <h3>見どころ</h3>
                <span class="animal_deta_text passage"><?php the_field('check_point'); ?></span>
            </li>
            <li>
                <h3>生態</h3>
                <span class="animal_deta_text passage"><?php the_field('ecology'); ?></span>
            </li>
            <li>
                <h3>食べ物</h3>
                <span class="animal_deta_text"><?php the_field('eat_food'); ?></span>
            </li>
            <li>
                <h3>分布</h3>
                <span class="animal_deta_text"><?php the_field('distribution'); ?></span>
            </li>
            <li>
                <h3>展示場所</h3>
                <span class="animal_deta_text"><?php the_field('exhibition_area'); ?></span>
            </li>
        </ul>
    </div>

    <div class="page_post_link bottom">
        <div><?php previous_post_link(); ?></div>
        <div class="page_post_link_bofore"><a href="<?php home_url(); ?>/animal/">一覧に戻る</a></div>
        <div><?php next_post_link(); ?></div>
    </div>

    <div id="topup_btn" class="topup_btn page">
        <a href="#page_head">
            <p>トップ</p>
        </a>
    </div>

</main>
    
<?php get_footer(); ?>
