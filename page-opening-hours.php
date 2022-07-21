<?php get_header('subhead'); ?>

<main>

    <div id="page_head" class="page_head opening_hours">
        <h1>営業時間・休園日</h1>
    </div>
    
    <div class="breadcrumbs page_all" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
    </div>

    <div class="opening_hours_group">
        <section id="page_group" class="page_group">
            <div class="page_box">
                <h3>営業時間</h3>
                <div>
                    <h4>●開園・閉園時間</h4>
                    <span>午前9:00～午後5:00（入場は午後4:30まで）</span>
                </div>
            </div>
        </section>

        <section id="page_group" class="page_group">
            <div class="page_box">
                <h3>休園日</h3>
                <div class="page_box_top">
                    <span>・毎週水曜日（春休み・夏休み・冬休み期間は開園）</span>
                    <span>・12月31日</span>
                </div>
                <div>
                    <h4>●2022年3月の休園日（予定）</h4>
                    <ul>
                        <li>
                            <span>2022年3月</span>
                            <span>2日・9日・16日・23日</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4>●2022年4月～2023年3月の休園日（予定）</h4>
                    <ul>
                        <li>
                            <span>2022年4月</span>
                            <span>6日・13日・20日・27日</span>
                        </li>
                        <li>
                            <span>2022年5月</span>
                            <span>11日・18日・25日</span>
                        </li>
                        <li>
                            <span>2022年6月</span>
                            <span>1日・8日・15日・22日・29日</span>
                        </li>
                        <li>
                            <span>2022年7月</span>
                            <span>6日・13日・20日</span>
                        </li>
                        <li>
                            <span>2022年8月</span>
                            <span>休園日はありません</span>
                        </li>
                        <li>
                            <span>2022年9月</span>
                            <span>7日・14日・21日・28日</span>
                        </li>
                        <li>
                            <span>2022年10月</span>
                            <span>5日・12日・19日・26日</span>
                        </li>
                        <li>
                            <span>2022年11月</span>
                            <span>2日・9日・16日・30日</span>
                        </li>
                        <li>
                            <span>2022年12月</span>
                            <span>7日・14日・21日・31日</span>
                        </li>
                        <li>
                            <span>2023年1月</span>
                            <span>11日・18日・25日</span>
                        </li>
                        <li>
                            <span>2023年2月</span>
                            <span>1日・8日・15日・22日</span>
                        </li>
                        <li>
                            <span>2023年3月</span>
                            <span>1日・8日・15日・22日</span>
                        </li>
                    </ul>
                </div>
                    
            </div>
        </section>
    </div>

    <div id="topup_btn" class="topup_btn sub_page">
        <a href="#page_head">
            <p>トップ</p>
        </a>
    </div>

</main>

<?php get_footer(); ?>