<?php get_header('subhead'); ?>

<main id="main">

    <div id="page_head" class="page_head price">
        <h1>入場料金</h1>
    </div>
    
    <div class="breadcrumbs page_all" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
    </div>

    <div class="opening_hours_group">

        <div class="institution_link">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Exclamation_mark.png" alt="">
            <p><span>駐車場料金など</span>その他サービスの料金については
                <a href="<?php home_url(); ?>/service/">施設サービスページ</a>へ
            </p>
        </div>

        <ul class="area_container ticket">
            <li><a href="#oneday">入場料金</a></li>
            <li><a href="#oneyear">年間パスポート</a></li>
            <li><a href="#webticket">WEBチケット購入</a></li>
            <div class="webticket_point">
                <span>WEB購入<br>特典あり</span>
            </div>
        </ul>

        <section id="oneday" class="page_group">
            <div class="page_box ticket">
                <h3>入園料金</h3>
                <div>
                    <h4>●個人</h4>
                    <ul>
                        <li>
                            <span>大人（高校生以上）</span>
                            <span>840円</span>
                        </li>
                        <li>
                            <span>中学生</span>
                            <span>420円</span>
                        </li>
                        <li>
                            <span>小学生</span>
                            <span>310円</span>
                        </li>
                        <li>
                            <span>未就学児</span>
                            <span>無料</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4>●団体</h4>
                    <ul>
                        <li>
                            <span>大人（高校生以上）</span>
                            <span>660円</span>
                        </li>
                        <li>
                            <span>中学生</span>
                            <span>330円</span>
                        </li>
                        <li>
                            <span>小学生</span>
                            <span>240円</span>
                        </li>
                        <span>※有料入園者数が15名以上で、一括支払の場合</span>
                    </ul>
                </div>

                <div class="page_box_top price">
                    <span>【身体障がい者手帳、親子（母子）健康手帳等をお持ちの方】</span>
                </div>
                <div>
                    <h4>●身体障がい者手帳1種または2種2級<br>
                        ●療育手帳<br>
                        ●精神障がい者福祉手帳</h4>
                    <ul>
                        <li>
                            <span>ご本人+介助者1名<br>※駐車料金無料</span>
                            <span>入園無料</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4>●身体障がい者手帳2種3級～</h4>
                    <ul>
                        <li>
                            <span>ご本人のみ<br>※駐車料金無料</span>
                            <span>入園無料</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4>●現在妊娠中で、親子（母子）健康手帳をお持ちの方</h4>
                    <ul>
                        <li>
                            <span>ご本人のみ</span>
                            <span>入園無料</span>
                        </li>
                    </ul>
                </div>
                <div class="page_box_top price">
                    <span>【特別入園料】</span>
                </div>
                <div>
                    <h4>●子どもの日</h4>
                    <ul>
                        <li>
                            <span>中学生以下の方</span>
                            <span>入園無料</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4>●敬老の日</h4>
                    <ul>
                        <li>
                            <span>65歳以上の方<br>※確認できるもの必要
                            </span>
                            <span>入園無料</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="oneyear" class="page_group">
            <div class="page_box ticket">
                <h3>年間パスポート</h3>
                <div>
                    <h4>●宮崎市フェニックス自然動物園</h4>
                    <ul>
                        <li>
                            <span>大人（高校生以上）</span>
                            <span>2,090円</span>
                        </li>
                        <li>
                            <span>こども（小･中学生）</span>
                            <span>1,040円</span>
                        </li>
                        <li>
                            <span>未就学児</span>
                            <span>無料</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4>●宮崎市フェニックス自然動物園・<br>
                        フローランテ宮崎共通</h4>
                    <ul>
                        <li>
                            <span>大人（高校生以上）</span>
                            <span>3,130円</span>
                        </li>
                        <li>
                            <span>こども（小･中学生）</span>
                            <span>1,560円</span>
                        </li>
                        <li>
                            <span>大人2人＋<br>こども（小･中学生）2人</span>
                            <span>6,280円</span>
                        </li>
                        <li>
                            <span>未就学児</span>
                            <span>無料</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="webticket" class="page_group">
            <div class="page_box ticket web">
                <p class="webbuy_head">WEBにて購入された方<span>限定特典！</span></p>
                <div>
                    <h4>●1日入場券</h4>
                    <div class="webbuy_oneday">
                        <span>園内の動物達のことをもっと近くに感じられるデザインとなっています。</span>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/pricepage_oneday.png" alt="">
                        <span>※ランダムで配布されます。選択不可。</span>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/pricepage_oneday2.png" alt="">
                        <span>※不定期でデザインの変更があります。</span>
                    </div>
                <div>
                    <h4>●年間パスポート</h4>
                    <div class="webbuy_oneday">
                        <span>年間パスポートをご購入の方を、サポーターとお呼びしています。年に数回行われるイベントへのご招待や、施設内で利用できる特典などがございます。</span>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/pricepage_oneyear.png" alt="">
                        <span>お好きな動物のデザインに選択可能。ご購入ページ内で選択しご購入下さい。<br>
                            ※購入後の変更・交換は致しかねます。<br>
                            ※顔写真が必要となります。データをご準備ください。</span>
                    </div>
                </div>
                <div class="webbuy_special">
                    <div class="webbuy_special_top" style="margin-bottom: -30px;">
                        <h5>WEB購入特典</h5>
                        <span>当園のサポーターとして、様々な特典が受けられます！</span>
                    </div>
                    <div class="webbuy_special_box" style="padding: 0;">
                        <h6>限定のイベント<br><span>サポーターズデイ</span>への参加</h6>
                        <div class="webbuy_special_box_imagephoto"></div>
                        <span>年4回「バックヤードツアー」を開催します。当日は10コースに分かれ、約1時間程度、普段はなかなか入ることができない獣舎の裏で、動物達をより間近で見ていただき、エサやりなどを体験していただきます。外から見るより、動物たちの迫力が感じられます。 <br>※事前の申込みで応募者多数の場合は抽選となります。</span>
                    <div class="webbuy_special_box">
                        <h6>レストラン&ショップでの<br><span>お買い物10％OFF</span></h6>
                        <div class="webbuy_special_box_imagephoto shop"></div>
                        <span>年間パスポートをご提示後、園内でのお買い物が10％割引になります。<br>※対象外の場合がございます。ご了承下さい。 </span>
                    </div>
                </div>
                <div class="button">
                    <a href="">
                        <p>購入ページへ</p>
                    </a>
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