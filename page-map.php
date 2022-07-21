<?php get_header('subhead'); ?>

<main id="main">
    
    <div class="breadcrumbs map" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
    </div>

    <div class="map_group">

        <div class="map_group_top">
            <h1>園内マップ</h1>
            <span>それぞれのエリアボタンをタップすると、各エリアの詳細マップを表示します。来園前後にご利用ください。</span>
        </div>
        
        <div class="map_desc">
            <div class="map_desc_top active">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/map/zoo-map.png" alt="">
                <ul>
                    <li class="tab_list">どうぶつエリア</li>
                    <li class="tab_list">入園・イベントエリア</li>
                    <li class="tab_list">遊園地・プールエリア</li>
                    <li class="tab_list">レストランエリア</li>
                </ul>
                <div class="tab_list_all"></div>
            </div>

            <div class="tab_map">
                <div class="tab_map_photo">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/map/animalmap.png" alt="どうぶつエリアマップ">
                </div>
                <div class="plus_minus_btn">
                        <div class="plus_btn">+</div>
                        <div class="minus_btn">-</div>
                </div>
                <ul>
                    <li class="tab_map_list">
                        <h3 class="tab_map_list_head">こども動物村近辺</h3>
                        <ol>
                            <li>ニワトリ</li>
                            <li>ポニー</li>
                            <li>ミミナガヤギ</li>
                            <li>カイウサギ</li>
                            <li>トカラヤギ</li>
                            <li>コシジロヤマドリ</li>
                            <li>ロバ</li>
                            <li>ニワトリ</li>
                            <li>コモンラッパチョウ</li>
                            <li>リスザル</li>
                            <li>ペリカン</li>
                            <li>クモザル</li>
                            <li>カメ</li>
                            <li>ペンギン</li>
                            <li>カワウソ</li>
                        </ol>
                    </li>
                    <li class="tab_map_list">
                        <h3 class="tab_map_list_head">アフリカ園近辺</h3>
                        <ol start="16">
                            <li>ライオン</li>
                            <li>トラ</li>
                            <li>トラ</li>
                            <li>オランウータン</li>
                            <li>キリン</li>
                            <li>シマウマ</li>
                            <li>ダチョウ</li>
                            <li>ワラビー</li>
                            <li>カンガルー</li>
                            <li>カピバラ</li>
                            <li>ラマ</li>
                            <li>エミュー</li>
                            <li>フラミンゴ</li>
                            <li>アジアゾウ</li>
                        </ol>
                    </li>
                    <li class="tab_map_list">
                        <h3 class="tab_map_list_head">野鳥の森近辺</h3>
                        <ol start="30">
                            <li>クジャク</li>
                            <li>ハヤブサ</li>
                            <li>フクロウ</li>
                            <li>キュウシュウジカ</li>
                            <li>レッサーパンダ</li>
                            <li>ハナジカ</li>
                        </ol>
                    </li>
                    <li class="tab_map_list">
                        <h3 class="tab_map_list_head">ゾウさん広場近辺</h3>
                        <ol start="36">
                            <li>マーラ</li>
                            <li>ミーヤキャット</li>
                            <li>ミーヤキャット</li>
                        </ol>
                    </li>
                </ul>
                <div class="tab_list_all"></div>
            </div>
            <div class="tab_map">
                <div class="tab_map_photo">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/map/gatemap.png" alt="入園ゲート・イベントエリアマップ">
                </div>
                <p>フェニックス自然動物園の正面入場ゲートでは、入園料のお支払いや年間パスポートの発行、各種貸し出しを行っております。他にも困った事などございましたらお気軽にお声をかけてください。</p>
                <p>また、ショップ・レストラン横にある「どうぶつ情報プラザ」や「ゾウさん広場」では、年間を通して様々なイベントを行っております。イベント内容や実施時間など、詳しくは
                    <a href="/day-event/">「イベント情報」のページ</a>をご覧ください。</p>
                <div class="tab_list_all"></div>
            </div>
            <div class="tab_map">
                <div class="tab_map_photo">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/map/parkmap.png" alt="遊園地・プールエリア">
                </div>
                <div class="plus_minus_btn">
                    <div class="plus_btn">+</div>
                    <div class="minus_btn">-</div>
                </div>
                <ul>
                    <li class="tab_map_list">
                        <h3 class="tab_map_list_head">遊園地のりもの一覧</h3>
                        <ol>
                            <li>マッドマウス</li>
                            <li>パラグライダー</li>
                            <li>おとぎ列車</li>
                            <li>メリーゴーランド</li>
                            <li>スカイバルーン</li>
                            <li>スペースドラゴン</li>
                            <li>モノレール</li>
                            <li>ピエロ列車</li>
                            <li>びっくりハウス</li>
                            <li>スワンカップ</li>
                            <li>ハニーハッチ</li>
                            <li>フアフア</li>
                            <li>スーパーダンボ</li>
                            <li>ゴーカート</li>
                            <li>スカイタワー</li>
                        </ol>
                    </li>
                </ul>
                <p>スリル満点のハニーハッチやマッドマウス、小さな子ども達に大人気のおとぎ列車など、15種類のアトラクションがある遊園地です。赤ちゃんからご年配の方まで、ご家族みんなで楽しめます。<span>※乗り物によって、年齢・身長制限があります。</span></p>
                <p>乗り物の料金・詳しい説明は<a href="">「遊園地の紹介」ページ</a>をご覧下さい。</p>
                <p>また、夏には「流れるプール」の営業も行います。1周200mの流れるプール、すべり台付きの子供プール、3基のウォータースライダーなど、遊び方もいろいろ！軽食コーナーや売店もあります。プール利用は無料です（動物園の入園料は必要）。※プールご利用のご注意は、<a href="">「遊園地の紹介」ページ内</a>の「流れるプール」をご覧下さい。</p>
                <div class="tab_list_all"></div>
            </div>
            <div class="tab_map">
                <div class="tab_map_photo">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/map/restaurantmap.png" alt="レストランエリア">
                </div>
                <p>お子様から幅広くご利用いただけるメニューを用意いたしました。<br>
                3種類のお子様メニューをはじめ、たこ焼きや鶏の竜田揚げなどのテイクアウトできるスナックメニューからうどん、スパゲティなどの麺類、カレーライスやカツ丼などのご飯類まで幅広いメニューをご用意いたしました。各種ドリンク･フロートやソフトクリームなども用意いたしております。<br>
                また、ショップ内ではどうぶつたちをモチーフとしたグッズ等の販売や、プリクラ・自動遊具・キッズゲーム機などがあります。<br>
                レストラン等の詳しい説明については<a href="">「レストラン・ショップ」ページ</a>をご覧ください。</p>
                <div class="tab_list_all"></div>
            </div>
        </div>
        </div>
    </div>
    
</main>

<?php get_footer(); ?>