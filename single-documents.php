<?php
get_header();
?>
<style>
.wrapper h3 {
  padding: 30px 0;

}
</style>

<link rel="stylesheet" href="https://x-opg.com/wp-content/themes/isales/css/style_add_documents.css" />
<main id="site-content" role="main">
  <!-- wp:html -->
  <section class="content_area">
    <div class="wrapper">
      <div class="left_content">
        <div class="image_wrap">
          <img width="1466" height="826" src="<?php echo get_the_post_thumbnail_url(); ?>"
            class="attachment-twentyseventeen-featured-image size-twentyseventeen-featured-image wp-post-image" alt=""
            sizes="100vw">
        </div>

        <h3><?php the_title(); ?></h3>

        <p style="line-height: 1.5">
          アイセールスの導入をご検討いただいている企業様へ<br /><br />5分でわかる、アイセールスの基本情報と導入によるメリットをまとめた資料をご用意いたしました。<br /><br />＜目次＞<br><?php the_field('documents-list'); ?><br />ご査収よろしくお願いいたします。<br /><br />ご不明点などあれば、<br />以下フォームまで問い合わせ下さい。<br />
        </p>
        <div>
          <a href="https://x-opg.com/contact/">https://x-opg.com/contact/</a>
        </div>
      </div>

      <div class="right_form">
        <?php the_field('documents-tag'); ?>
      </div>
    </div>
  </section>
  <!-- /wp:html -->

  <?php
	get_footer();