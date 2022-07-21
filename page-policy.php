<?php get_header('subhead'); ?>

<main id="main">

    <div id="page_head" class="page_head policy">
        <h1>園の概念・理念</h1>
    </div>
    
    <div class="breadcrumbs page_all" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
    </div>

    <div class="opening_hours_group">

        <section id="philosopy_box" class="page_group">
            <div class="page_box ticket">
                <h3>宮崎市フェニックス自然動物園とは</h3>
                <div>
                    <p>宮崎市フェニックス自然動物園は、昭和46年3月開業。太平洋に面する宮崎市北東部の一ツ葉（ひとつば）海岸の広大な松の丘陵にあります。</p>
                    <p>「フェニックス・シーガイア・リゾート」のリゾート施設群に隣接しており、太平洋を望む約130,000平方メートルの松の丘陵地に約100種1,200点の動物たちが飼育されています。</p>
                    <p>アジアゾウ展示場、アフリカ園、チンパンジー舎、こども動物村など、動物展示場のほかに、遊園地、流れるプール（夏季営業）、レストラン・ショップ、どうぶつ情報プラザや広場などがあります。</p>
                </div>
            </div>
        </section>

        <section class="page_group">
            <div id="policy_box" class="page_box ticket">
                <h3>基本理念</h3>
                <div>
                    <h4>●宮崎市フェニックス自然動物園</h4>
                    <span>市民に愛され、市民の憩いの場所となる動物園</span>
                </div>
                <div>
                    <h4>●フローランテ宮崎</h4>
                    <span>宮崎市の花のまちづくりの推進拠点</span>
                </div>
            </div>
        </section>
    </div>

    <div id="topup_btn" class="topup_btn sub_page">
        <a href="#main">
            <p>トップ</p>
        </a>
    </div>

</main>

<?php get_footer(); ?>