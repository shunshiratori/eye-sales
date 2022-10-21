<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php add_css_js(); ?>
  <?php wp_head(); ?>
  <link rel="stylesheet" href="https://use.typekit.net/qxy3kph.css">
  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>

  <script>
  (function(w, d, t, u, n, a, m) {
    w['MarkeroboTrackingObject'] = n;
    w[n] = w[n] || function() {
        (w[n].q = w[n].q || []).push(arguments)
      }, a = d.createElement(t),
      m = d.getElementsByTagName(t)[0];
    a.async = 1;
    a.src = u;
    m.parentNode.insertBefore(a, m)
  })(window, document, 'script', 'https://x-opg.mk6-robo.com/mkr.js?tid=x-opg', 'mkrt');

  mkrt('send', 'pageview', {
    "tid": "x-opg"
  });
  </script>
</head>

<div class="header-back"></div>

<body>
  <!-- header start -->
  <header class="header">
    <div class="container-xl">
      <div class="header-inner">
        <div class="header-logo">
          <h1 class="header-logo__h1"><a href="<?php echo home_url(); ?>" class="header-logo__link"><img
                src="<?php echo esc_url(get_theme_file_uri('img/common/logo1.png')); ?>" alt=""
                class="header-logo__img"></a></h1>
        </div>
        <div class="header-nav">
          <ul class="header-nav__inner">
            <li class="header-nav__item"><a href="<?php echo esc_url(home_url('operation//')); ?>"
                class="header-nav__link cmn-link__border cmn-link__border-white ">なぜオペレーション？</a></li>
            <li class="header-nav__item"><a href="<?php echo esc_url(home_url('service/')); ?>"
                class="header-nav__link cmn-link__border cmn-link__border-white">事業説明</a>
            </li>
            <li class="header-nav__item"><a tabindex="-1"
                class="header-nav__link cmn-link__border cmn-link__border-white">導入事例</a></li>
            <li class="header-nav__item has-sub-menu">
              <a href="<?php echo esc_url(home_url('corporate/')); ?>"
                class="header-nav__link cmn-link__border cmn-link__border-white">会社案内</a>
              <ul class="sub-menu">
                <div class="sub-menu_back">
                  <div class="sub-menu_flex">
                    <div class="sub-menu_flex_left">
                      <h2>会社案内一覧</h2>
                      <a class="sub-menu_flex_link" href="<?php echo esc_url(home_url('corporate/')); ?>">一覧を見る</a>
                    </div>
                    <div class="sub-menu_flex_center">
                      <div class="sub-menu_flex_center_flex">
                        <div class="sub-menu_flex_center_flex_item">
                          <a href="<?php echo esc_url(home_url('company-profile/')); ?>">
                            <div class="img-wrap">
                              <img src="<?php echo esc_url(get_theme_file_uri('img/company/company01.jpg')); ?>" alt="">
                            </div>
                            <p>会社概要</p>
                          </a>
                        </div>
                        <div class="sub-menu_flex_center_flex_item">
                          <a href="<?php echo esc_url(home_url('corporate-philosophy/')); ?>">
                            <div class="img-wrap">
                              <img src="<?php echo esc_url(get_theme_file_uri('img/company/company02.jpg')); ?>" alt="">
                            </div>
                            <p>企業理念</p>
                          </a>
                        </div>
                        <div class="sub-menu_flex_center_flex_item">
                          <a href="<?php echo esc_url(home_url('ceo_message/')); ?>">
                            <div class="img-wrap">
                              <img src="<?php echo esc_url(get_theme_file_uri('img/company/company03.jpg')); ?>" alt="">
                            </div>
                            <p>代表挨拶</p>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="sub-menu_flex_right">
                      <a class="sub-menu_flex_link"
                        href="<?php echo esc_url(home_url('management-members/')); ?>">役員紹介</a>
                      <a class="sub-menu_flex_link"
                        href="<?php echo esc_url(home_url('trading-performance/')); ?>">取引実績</a>
                      <a class="sub-menu_flex_link" href="<?php echo esc_url(home_url('company-history/')); ?>">会社沿革</a>
                    </div>
                  </div>
                </div>
              </ul>
            </li>
            <li class="header-nav__item"><a href="https://www.wantedly.com/companies/x-opg"
                class="header-nav__link cmn-link__border cmn-link__border-white" target="_blank"
                rel="noopener noreferrer">採用情報</a>
            </li>
            <li class="header-nav__item"><a href="https://www.wantedly.com/companies/x-opg"
                class="header-nav__link cmn-link__border cmn-link__border-white" target="_blank"
                rel="noopener noreferrer">コンサルタント登録</a></li>
            <li class="header-nav__item"><a href="https://x-opg.com/contact/"
                class="header-nav__link cmn-button__slide cmn-button__slide-white _box"><span
                  class="cmn-button__txt">お問い合わせ</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <div class="hamburger">
    <span></span>
    <span></span>
    <span></span>
  </div>
  <div class="mask"></div>
  <!-- header end -->

  <style>
  @media (max-width: 768px) {
    .pc {
      display: none;
    }
  }

  @media (min-width: 769px) {
    .sp {
      display: none;
    }
  }
  </style>