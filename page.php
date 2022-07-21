<?php get_header('subhead'); ?>

<main>

    <div id="page_head" class="page_head opening_hours">
        <h1></h1>
    </div>
    
    <div class="breadcrumbs page_all" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
    </div>

<?php get_footer(); ?>
