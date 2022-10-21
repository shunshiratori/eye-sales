<?php get_header(); ?>

<main class="corporate">
  <section class="corporate-eyecatch">
    <div class="container-l">
      <h2 class="corporate-eyecatch__ttl">採用情報</h2>
      <p class="corporate-eyecatch__txt">職種ごとに募集要項をまとめた採用ページです。<br>新卒中途情報も含めご案内します。</p>
    </div>
  </section>

  <section class="corporate-grid">
    <div class="container-l">
      <div class="corporate-grid__inner">
        <div class="corporate-grid__item">
          <a tabindex="-1" class="corporate-grid__link">
            <div class="corporate-grid__content is-exp">
              <img src="<?php echo esc_url(get_theme_file_uri('img/recruit/01.jpg')); ?>" alt=""
                class="corporate-grid__img is-exp__img">
            </div>
            <div class="corporate-grid__content">
              <p class="corporate-grid__ttl">コールセンター職</p>
              <p class="corporate-grid__txt">Callcenter</p>
            </div>
          </a>
        </div>
        <div class="corporate-grid__item">
          <a tabindex="-1" class="corporate-grid__link">
            <div class="corporate-grid__content is-exp">
              <img src="<?php echo esc_url(get_theme_file_uri('img/recruit/02.jpg')); ?>" alt=""
                class="corporate-grid__img is-exp__img">
            </div>
            <div class="corporate-grid__content">
              <p class="corporate-grid__ttl">フランチャイズ職</p>
              <p class="corporate-grid__txt">Franchise</p>
            </div>
          </a>
        </div>
        <div class="corporate-grid__item">
          <a tabindex="-1" class="corporate-grid__link">
            <div class="corporate-grid__content is-exp">
              <img src="<?php echo esc_url(get_theme_file_uri('img/recruit/03.jpg')); ?>" alt=""
                class="corporate-grid__img is-exp__img">
            </div>
            <div class="corporate-grid__content">
              <p class="corporate-grid__ttl">SaaSベンチャー</p>
              <p class="corporate-grid__txt">SaaS Venture</p>
            </div>
          </a>
        </div>
        <div class="corporate-grid__item">
          <a tabindex="-1" class="corporate-grid__link">
            <div class="corporate-grid__content is-exp">
              <img src="<?php echo esc_url(get_theme_file_uri('img/recruit/04.jpg')); ?>" alt=""
                class="corporate-grid__img is-exp__img">
            </div>
            <div class="corporate-grid__content">
              <p class="corporate-grid__ttl">コンサルティング情報</p>
              <p class="corporate-grid__txt">Consultant</p>
            </div>
          </a>
        </div>
        <div class="corporate-grid__item">
          <a tabindex="-1" class="corporate-grid__link">
            <div class="corporate-grid__content is-exp">
              <img src="<?php echo esc_url(get_theme_file_uri('img/recruit/05.jpg')); ?>" alt=""
                class="corporate-grid__img is-exp__img">
            </div>
            <div class="corporate-grid__content">
              <p class="corporate-grid__ttl">中途採用情報</p>
              <p class="corporate-grid__txt">Mid-career Recruitment</p>
            </div>
          </a>
        </div>
        <div class="corporate-grid__item">
          <a tabindex="-1" class="corporate-grid__link">
            <div class="corporate-grid__content is-exp">
              <img src="<?php echo esc_url(get_theme_file_uri('img/recruit/06.jpg')); ?>" alt=""
                class="corporate-grid__img is-exp__img">
            </div>
            <div class="corporate-grid__content">
              <p class="corporate-grid__ttl">新卒採用情報</p>
              <p class="corporate-grid__txt">New Graduate Recruitment</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>