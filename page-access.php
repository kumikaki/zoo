<?php get_header('subhead'); ?>

<main id="main">

    <div id="page_head" class="page_head accesspage_top">
        <h1>アクセス</h1>
    </div>
    
    <div class="breadcrumbs page_all" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
    </div>

    <div class="opening_hours_group">

        <ul class="area_container ticket">
            <li><a href="#bycar">車でお越しの方</a></li>
            <li><a href="#bybus">公共交通機関</a></li>
            <li><a href="#shuttlebus_desc">シャトルバス</a></li>
        </ul>

        <div class="access_map google">
            <h3>周辺マップ</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13536.755807367435!2d131.4761039!3d31.9828929!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4a57e247d1a13528!2z5a6u5bSO5biC44OV44Kn44OL44OD44Kv44K56Ieq54S25YuV54mp5ZyS!5e0!3m2!1sja!2sjp!4v1652319160845!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <h3>延岡・大分方面からのマップ</h3>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/access-map.jpg" alt="">
        </div>

        <section id="bycar" class="page_group">
            <div class="page_box ticket">
                <h3>アクセス</h3>
                <div class="page_access_box">
                    <h4>●車でお越しの方</h4>
                    <ul>
                        <li>
                            <span></span>
                            <span>九州自動車道宮崎インターチェンジより、一ツ葉有料道路を利用し、住吉インターチェンジまで15分。</span>
                        </li>
                        <li>
                            <span></span>
                            <span>延岡方面からも国道10号線より一ツ葉有料道路を利用し、住吉インターチェンジまで（延岡からは約2時間）</span>
                        </li>
                        <li>
                            <span></span>
                            <span>※住吉インターチェンジを降りると、1分で動物園の駐車場が左側に見えてきます。</span>
                        </li>
                    </ul>
                </div>
                <div class="button">
                    <a href="<?php home_url(); ?>/service/#parking">
                        <p>駐車場について</p>
                    </a>
                </div>
                <div id="bybus" class="page_access_box">
                    <h4>●バスを利用される場合</h4>
                    <span>宮交シティからフェニックス自然動物園行きのバスが運行しております。</span>
                </div>
                <div class="page_access_box">
                    <ul>
                        <h4>●電車を利用される場合</h4>
                        <li>
                            <span>【最寄の駅から】</span>
                            <span>JR日豊本線「日向住吉駅」よりタクシーにて10分<br>※日向住吉駅は、特急・快速列車は停車しません。</span>
                        </li>
                        <li>
                            <span>【JR宮崎駅から】</span>
                            <span>JR日豊本線「日向住吉駅」よりタクシーにて10分<br>※日向住吉駅は、特急・快速列車は停車しません。</span>
                        </li>
                    </ul>
                </div>
                <div id="shuttlebus_desc" class="page_access_box">
                    <h4>●無料シャトルバスのご案内</h4>
                    <span>イオンモール宮崎からのシャトルバスを運行しています。</span>
                    <span>※土日祝のみ運行</span>
                    <ul>
                        <li>
                            <span>【イオンモール宮崎のりば】</span>
                            <span>1階 サウスモール 西入口</span>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ieon_busstop.png" alt="">
                        </li>
                        <li>
                            <span>【時刻表】</span>
                            <table>
                                <tr>
                                    <th colspan="3">土・日・祝</th>
                                </tr>
                                <tr>
                                    <th>時</th>
                                    <th>イオンモール発</th>
                                    <th>動物園発</th>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>30</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>00 / 30</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>00 / 30</td>
                                    <td>00 / 30</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>00 / 30</td>
                                    <td>00 / 30</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>00 / 30</td>
                                    <td>00 / 30</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>00 / 30</td>
                                    <td>00 / 30</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>00 / 30</td>
                                    <td>00 / 30</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>-</td>
                                    <td>00 / 30</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>-</td>
                                    <td>00 / 30</td>
                                </tr>
                            </table>
                            <span>※交通事情などにより前後する場合や諸事情により運休する場合がございますので、運行状況につきましては、当園までお問い合わせ下さい。</span>
                        </li>
                    </ul>
                </div>

            </div>
        </section>

    </div>


</main>

<?php get_footer(); ?>