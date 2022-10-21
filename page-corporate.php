<?php get_header(); ?>

<main class="corporate">
    <section class="corporate-eyecatch">
        <div class="container-l">
            <h2 class="corporate-eyecatch__ttl">会社案内</h2>
            <p class="corporate-eyecatch__txt">アイセールス株式会社の理念や役員紹介など<br>基本情報をご案内します。</p>
        </div>
    </section>

    <section class="corporate-grid">
        <div class="container-l">
            <div class="corporate-grid__inner">
                <div class="corporate-grid__item">
                    <a href="<?php echo esc_url(home_url('company-profile/')); ?>" class="corporate-grid__link">
                        <div class="corporate-grid__content is-exp">
                            <img src="<?php echo esc_url(get_theme_file_uri('img/company/company01.jpg')); ?>" alt="" class="corporate-grid__img is-exp__img">
                        </div>
                        <div class="corporate-grid__content">
                            <p class="corporate-grid__ttl">会社概要</p>
                            <p class="corporate-grid__txt">Company Profile</p>
                        </div>
                    </a>
                </div>
                <div class="corporate-grid__item">
                    <a href="<?php echo esc_url(home_url('corporate-philosophy/')); ?>" class="corporate-grid__link">
                        <div class="corporate-grid__content is-exp">
                            <img src="<?php echo esc_url(get_theme_file_uri('img/company/company02.jpg')); ?>" alt="" class="corporate-grid__img is-exp__img">
                        </div>
                        <div class="corporate-grid__content">
                            <p class="corporate-grid__ttl">企業理念</p>
                            <p class="corporate-grid__txt">Corporate Philosophy</p>
                        </div>
                    </a>
                </div>
                <div class="corporate-grid__item">
                    <a href="<?php echo esc_url(home_url('ceo_message/')); ?>" class="corporate-grid__link">
                        <div class="corporate-grid__content is-exp">
                            <img src="<?php echo esc_url(get_theme_file_uri('img/company/company03.jpg')); ?>" alt="" class="corporate-grid__img is-exp__img">
                        </div>
                        <div class="corporate-grid__content">
                            <p class="corporate-grid__ttl">代表挨拶</p>
                            <p class="corporate-grid__txt">CEO Message</p>
                        </div>
                    </a>
                </div>
                <div class="corporate-grid__item">
                    <a href="<?php echo esc_url(home_url('management-members/')); ?>" class="corporate-grid__link">
                        <div class="corporate-grid__content is-exp">
                            <img src="<?php echo esc_url(get_theme_file_uri('img/company/company04.jpg')); ?>" alt="" class="corporate-grid__img is-exp__img">
                        </div>
                        <div class="corporate-grid__content">
                            <p class="corporate-grid__ttl">役員紹介</p>
                            <p class="corporate-grid__txt">Management members</p>
                        </div>
                    </a>
                </div>
                <div class="corporate-grid__item">
                    <a href="<?php echo esc_url(home_url('trading-performance/')); ?>" class="corporate-grid__link">
                        <div class="corporate-grid__content is-exp">
                            <img src="<?php echo esc_url(get_theme_file_uri('img/company/company05.jpg')); ?>" alt="" class="corporate-grid__img is-exp__img">
                        </div>
                        <div class="corporate-grid__content">
                            <p class="corporate-grid__ttl">取引実績</p>
                            <p class="corporate-grid__txt">Trading performance</p>
                        </div>
                    </a>
                </div>
                <div class="corporate-grid__item">
                    <a href="<?php echo esc_url(home_url('company-history/')); ?>" class="corporate-grid__link">
                        <div class="corporate-grid__content is-exp">
                            <img src="<?php echo esc_url(get_theme_file_uri('img/company/company06.jpg')); ?>" alt="" class="corporate-grid__img is-exp__img">
                        </div>
                        <div class="corporate-grid__content">
                            <p class="corporate-grid__ttl">会社沿革</p>
                            <p class="corporate-grid__txt">Company History</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>

