<!--
Template Name: お役立ち資料サンクステンプレート
Template Post Type: page, documents
-->
<?php get_header(); ?>
<link rel="stylesheet" href="https://x-opg.com/wp-content/themes/isales/css/page-contact.css" />
<style>
.wrapper-thanks {
  padding-bottom: 100px;
}
</style>

<!-- wp:group {"className":"wrapper-thanks"} -->
<div class="wp-block-group wrapper-thanks">
  <!-- wp:heading {"textAlign":"center"} -->
  <h2 class="has-text-align-center">
    お役立ち資料<br class="sp" />ダウンロード
  </h2>
  <!-- /wp:heading -->

  <!-- wp:paragraph {"align":"center"} -->
  <p class="has-text-align-center">
    資料請求ありがとうございます。<br />ボタンを押すとダウンロードが開始されます。
  </p>

  <div class="has-text-align-center">
    <div class="cmn-button cmn-button__blue">
      <a href="<?php the_field('download_link'); ?>"
        class="cmn-button__link cmn-button__link-white cmn-button__link-m cmn-button__slide cmn-button__slide-white"
        target="_blank" rel="noopener noreferrer">
        <span class="cmn-button__txt">ダウンロード</span>
      </a>
    </div>
  </div>
  <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<section class="contact">
  <div class="container-m">
    <div class="contact-content">
      <h3 class="contact-content__ttl">
        お気軽に<br class="sp" />お問合せください
      </h3>
      <p class="contact-content__txt">
        サービスや弊社についてのご相談やご質問は<br class="sp" />こちらのフォームよりお問い合わせください。
      </p>
      <div class="cmn-button cmn-button__white">
        <a href="/contact/"
          class="cmn-button__link cmn-button__link-white cmn-button__link-m cmn-button__slide cmn-button__slide-white"><span
            class="cmn-button__txt">お問い合わせ</span></a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>