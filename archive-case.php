<?php
get_header();
?>
<main id="site-content" role="main">
  <div class="page_heading">
    <div class="page_heading_inner">
      <h2 class="page_heading_jp">導入事例</h2>
      <h2 class="page_heading_en">Case Study</h2>
    </div>
  </div>


  <section class="post-type-archive-case">
    <div class="wrapper">

      <ul class="slider">
        <?php
				$args = array(
					'posts_per_page'	=> 30,
					'orderby'			=> 'date',
					'order'				=> 'DESC',
					'post_type'			=> 'case',
					'post_status'		=> 'publish',
				);
				$my_query = new WP_Query($args);
				?>
        <?php if ($my_query->have_posts()) : ?>
        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <li class="slider-item">
          <a href="<?php the_permalink(); ?>">
            <div class="corporate-grid__link">
              <div class="image_box　corporate-grid__content is-exp">
                <?php the_post_thumbnail('full', ['class' => 'corporate-grid__img is-exp__img']); ?>
              </div>
              <div class="inner">
                <div class="article_tags_wrap">
                  <?php $case_tag = get_field('case_tag');
											if ($case_tag && in_array('IT_Web', $case_tag)) { //IT･Web
											?>
                  <div class="article_tag">IT･Web</div>
                  <?php } ?>
                  <?php $case_tag = get_field('case_tag');
											if ($case_tag && in_array('consulting', $case_tag)) { //コンサルティング
											?>
                  <div class="article_tag">コンサルティング</div>
                  <?php } ?>
                </div>
                <p class="corp_name"><?php echo get_the_title(); ?></p>
                <p class="article_content">
                  <?php
											if (mb_strlen(get_field('case_copy'), 'UTF-8') > 75) {
												echo mb_substr(get_field('case_copy'), 0, 75, 'UTF-8') . '…';
											} else {
												echo get_field('case_copy');
											}
											?>
                </p>
                <div class="button_wrap">
                  <div class="cmn-button cmn-button__black">
                    <div tabindex="-1"
                      class="cmn-button__link cmn-button__link-black cmn-button__link-m cmn-button__slide cmn-button__slide-blue">
                      <span class="cmn-button__txt">記事を見る</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </li>
        <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </ul>
    </div>
  </section>

  <section class="contact">
    <div class="container-m">
      <div class="contact-content">
        <h3 class="contact-content__ttl">お気軽に<br>お問合せください</h3>
        <p class="contact-content__txt">サービスや弊社についてのご相談やご質問は<br>こちらのフォームよりお問い合わせください。</p>
        <div class="cmn-button cmn-button__white">
          <a href="/contact/"
            class="cmn-button__link cmn-button__link-white cmn-button__link-m cmn-button__slide cmn-button__slide-white">
            <span class="cmn-button__txt">お問い合わせ</span>
          </a>
        </div>
      </div>
    </div>
  </section>
</main>


<?php
get_footer();
?>

<style>
/* ページタイトル関係 */
.page_heading {
  padding-top: 23rem;
  padding-bottom: 7rem;
  max-width: 1200px;
  margin-left: auto;
  margin-right: auto;
}

.page_heading_jp {
  margin-left: 0rem;
  font-size: 6rem;
  display: inline-block;
  color: #28294f;
  letter-spacing: 4px;
  margin-bottom: 13px;
}

.page_heading_inner {
  display: inline-block;
}

.page_heading_en {
  margin-left: 0rem;
  font-size: 1.8rem;
  text-align: right;
  margin: 0.4rem 0.5rem 0 0;
}

/* ページコンテンツ関係 */
.wrapper {
  max-width: 1200px;
  padding-left: 15px;
  padding-right: 15px;
  margin-left: auto;
  margin-right: auto;
}

.article_list_wrap {
  padding: 60px 0 0;
  gap: 100px 50px;
}

.corporate-grid__link {
  position: relative;
  display: inline-block;
  transition: 1s all;
  padding-bottom: 60px;
  width: 100%;
}

.corporate-grid__link::after {
  background-color: #28294F;
  bottom: -1px;
  content: "";
  display: inline-block;
  height: 1px;
  left: 0;
  position: absolute;
  transform: scaleX(0);
  transform-origin: right top;
  transition: transform 0.4s cubic-bezier(0.43, 0.05, 0.17, 1);
  width: 100%;
}

.corporate-grid__link:hover::after {
  transform: scale(1);
  transform-origin: left top;
}

.post-type-archive-case .article_post_wrap {
  position: relative;
  display: flex;
  padding-bottom: 0;
}

.article_post_wrap .inner {
  /*	padding: 0; */
  padding: 0 0 105px;
}

.article_tags_wrap {
  margin-top: 31px;
  display: flex;
  gap: 3px 5px;
}

.article_tag {
  border: solid #28294f 1px;
  background-color: #ededf0;
  border-radius: 3px;
  color: #28294f;
  font-size: 14px;
  padding: 0px 4px 1px;
  line-height: 1.2;
  vertical-align: middle;
  margin: 0;
}

.post-type-archive-case .article_list_wrap .corp_name {
  margin: 32px 0 0;
  font-weight: bold;
  font-size: 18px;
}

.post-type-archive-case .image_box {
  height: auto;
  padding-bottom: 0;
}

.article_content {
  margin: 20px 0 0;
  line-height: 2;
}

.button_wrap {
  text-align: center;
  /*	margin-top: 54px; */
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  padding-bottom: 56px;
}

/*お問合せ*/
main .contact {
  margin-top: 11.7rem;
}


/* デスクトップ */
@media (min-width: 1201px) {}

/* タブレット */
@media (max-width: 1200px) {

  .page_heading,
  .wrapper {
    padding-left: 15px;
    padding-right: 15px;
  }
}

/* スマホ */
@media (min-width: 476px) {

  main .contact-content__txt br,
  main .contact-content__ttl br {
    display: none;
  }
}

@media (max-width: 475px) {

  .case_info,
  .menu_box {
    flex-direction: column;
  }

  .case_info,
  .menu_box {
    padding-left: 15px;
    padding-right: 15px;
  }

  .thumbnail_wrap {
    width: 100%;
  }

  /* 	ページタイトル  */
  .page_heading {
    padding-top: 14rem;
    padding-bottom: 5rem;
  }

  .page_heading_jp {
    font-size: 3.2rem;
  }

  .page_heading_en {
    font-size: 1rem;
    margin-top: 0;
  }

  /* 一覧表示部分 */
  .article_list_wrap {
    grid-template-columns: 1fr;
    padding-top: 0;
    gap: 5rem;
  }
}

/*コーディング中のみ*/
/* 	.post-type-archive-case .image_box {
		background: #eee;
		padding-bottom: 68%;
	} */
</style>