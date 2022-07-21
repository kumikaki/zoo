<?php get_header('subhead'); ?>

<main id="page" class="page animal_intro">

    <div id="page_head" class="page_head animal">
        <h1>動物の紹介</h1>
    </div>
    
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
    </div>

    <h2 class="category_animal_head2">園内にいるどうぶつたち</h2>

    <div class="worldmap_return">
        <a href="<?php home_url(); ?>/animal-world/">世界地図にもどる</a>
    </div>

    <ul class="area_container animal">
        <li class="area_itemA"><a href="#Africa">アフリカ</a></li>
        <li class="area_itemA"><a href="#Eurasia">ユーラシア</a></li>
        <li class="area_itemA"><a href="#America_N">北アメリカ</a></li>
        <li class="area_itemA"><a href="#America_S">南アメリカ</a></li>
        <li class="area_itemA"><a href="#Oseania">オセアニア</a></li>
        <li class="area_itemA"><a href="#Japan">日本</a></li>
        <li class="area_itemB"><a href="#ContactHouse">ふれあい広場のどうぶつたち</li></a>
    </ul>

    <section id="Africa" class="animal_area_group">
        <div class="animal_area_group_top africa">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/svg/Africamap.svg" alt="アフリカ">
            <span>アフリカ</span>
        </div>

        <ul class="animal_group">
        <?php $args = array(
            'post_type' => 'post',
            'category_name' => 'africa',
            'posts_per_page' => -1,
            'order' => 'ASC'
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
          while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li class="animal_group_list">
                <a href="<?php the_permalink(); ?>">
                    <div class="animal_group_list_photo">
                        <?php the_post_thumbnail('full'); ?>
                    </div>
                    <div>
                        <span class="animal_group_list_name"><?php the_title(); ?></span>
                        <span class="animal_group_list_name_en"><?php the_field('en_name'); ?></span>
                    </div>
                </a>
            </li>
            <?php endwhile; endif; ?>
        </ul>
    </section>

    <section id="Eurasia" class="animal_area_group">
        <div class="animal_area_group_top eurasia">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/svg/Eurasia-map.svg" alt="ユーラシア">
            <span>ユーラシア</span>
        </div>

        <ul class="animal_group">
        <?php $args = array(
            'post_type' => 'post',
            'category_name' => 'eurasia',
            'posts_per_page' => -1,
            'order' => 'ASC'
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
          while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li class="animal_group_list">
                <a href="<?php the_permalink(); ?>">
                    <div class="animal_group_list_photo">
                        <?php the_post_thumbnail('full'); ?>
                    </div>
                    <div>
                        <span class="animal_group_list_name"><?php the_title(); ?></span>
                        <span class="animal_group_list_name_en"><?php the_field('en_name'); ?></span>
                    </div>
                </a>
            </li>
            <?php endwhile; endif; ?>
        </ul>
    </section>

    <section id="America_N" class="animal_area_group">
        <div class="animal_area_group_top northamerica">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/svg/AmericaNmap.svg" alt="北アメリカ">
            <span>北アメリカ</span>
        </div>

        <ul class="animal_group">
        <?php $args = array(
            'post_type' => 'post',
            'category_name' => 'northamerica',
            'posts_per_page' => -1,
            'order' => 'ASC'
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
          while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li class="animal_group_list">
                <a href="<?php the_permalink(); ?>">
                    <div class="animal_group_list_photo">
                        <?php the_post_thumbnail('full'); ?>
                    </div>
                    <div>
                        <span class="animal_group_list_name"><?php the_title(); ?></span>
                        <span class="animal_group_list_name_en"><?php the_field('en_name'); ?></span>
                    </div>
                </a>
            </li>
            <?php endwhile; endif; ?>
        </ul>
    </section>

    <section id="America_S" class="animal_area_group">
        <div class="animal_area_group_top sorthamerica">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/svg/AmericaSmap.svg" alt="南アメリカ">
            <span>南アメリカ</span>
        </div>

        <ul class="animal_group">
        <?php $args = array(
            'post_type' => 'post',
            'category_name' => 'southamerica',
            'posts_per_page' => -1,
            'order' => 'ASC'
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
          while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li class="animal_group_list">
                <a href="<?php the_permalink(); ?>">
                    <div class="animal_group_list_photo">
                        <?php the_post_thumbnail('full'); ?>
                    </div>
                    <div>
                        <span class="animal_group_list_name"><?php the_title(); ?></span>
                        <span class="animal_group_list_name_en"><?php the_field('en_name'); ?></span>
                    </div>
                </a>
            </li>
            <?php endwhile; endif; ?>
        </ul>
    </section>

    <section id="Oseania" class="animal_area_group">
        <div class="animal_area_group_top oceania">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/svg/Oseaniamap.svg" alt="オセアニア">
            <span>オセアニア</span>
        </div>

        <ul class="animal_group">
        <?php $args = array(
            'post_type' => 'post',
            'category_name' => 'oceania',
            'posts_per_page' => -1,
            'order' => 'ASC'
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
          while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li class="animal_group_list">
                <a href="<?php the_permalink(); ?>">
                    <div class="animal_group_list_photo">
                        <?php the_post_thumbnail('full'); ?>
                    </div>
                    <div>
                        <span class="animal_group_list_name"><?php the_title(); ?></span>
                        <span class="animal_group_list_name_en"><?php the_field('en_name'); ?></span>
                    </div>
                </a>
            </li>
            <?php endwhile; endif; ?>
        </ul>
    </section>

    <section id="Japan" class="animal_area_group">
        <div class="animal_area_group_top japan">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/svg/Japanmap.svg" alt="日本">
            <span>日本</span>
        </div>

        <ul class="animal_group">
        <?php $args = array(
            'post_type' => 'post',
            'category_name' => 'japan',
            'posts_per_page' => -1,
            'order' => 'ASC'
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
          while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li class="animal_group_list">
                <a href="<?php the_permalink(); ?>">
                    <div class="animal_group_list_photo">
                        <?php the_post_thumbnail('full'); ?>
                    </div>
                    <div>
                        <span class="animal_group_list_name"><?php the_title(); ?></span>
                        <span class="animal_group_list_name_en"><?php the_field('en_name'); ?></span>
                    </div>
                </a>
            </li>
            <?php endwhile; endif; ?>
        </ul>
    </section>

    <section id="ContactHouse" class="animal_area_group zoocontact">
        <div class="animal_area_group_top zoocontact">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/svg/contacthouse.svg" alt="ふれあい広場">
            <span>ふれあい広場</span>
        </div>

        <ul class="animal_group">
        <?php $args = array(
            'post_type' => 'post',
            'category_name' => 'zoocontact',
            'posts_per_page' => -1,
            'order' => 'ASC'
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
          while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li class="animal_group_list">
                <a href="<?php the_permalink(); ?>">
                    <div class="animal_group_list_photo">
                        <?php the_post_thumbnail('full'); ?>
                    </div>
                    <div>
                        <span class="animal_group_list_name"><?php the_title(); ?></span>
                        <span class="animal_group_list_name_en"><?php the_field('en_name'); ?></span>
                    </div>
                </a>
            </li>
            <?php endwhile; endif; ?>
        </ul>
    </section>

    <div id="topup_btn" class="topup_btn page">
        <a href="#page">
            <p>トップ</p>
        </a>
    </div>

    </main>

<?php get_footer(); ?>