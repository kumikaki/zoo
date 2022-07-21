<?php get_header('subhead'); ?>

<main id="main">

    <div id="page_head" class="page_head contact">
        <h1>お問い合わせ</h1>
    </div>
    
    <div class="breadcrumbs page_all" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
    </div>

    <div class="contact_form">
        <div>
            <h2>お問い合わせフォーム</h2>

            <?php the_content(); ?>	
        </div>
    </div>


</main>

<?php get_footer(); ?>