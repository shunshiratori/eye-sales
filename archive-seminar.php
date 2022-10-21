<?php
get_header();
?>
<main id="site-content" role="main">
  <section class="cmn-eyecatch">
    <div class="container-l">
      <div class="cmn-eyecatch__inner">
        <h2 class="cmn-eyecatch__ttl">セミナー情報</h2>
        <p class="cmn-eyecatch__txt">Case study</p>
      </div>
    </div>
  </section>

  <div class="swiper-container">
    <!-- スライドメニュー -->
    <div class="swiper-wrapper">
      <!-- スライドメニュー内容を個々に追加してください -->
      <?php
      $args = array(
        'posts_per_page'  => 5,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'seminar',
        'post_status' => 'publish',
        'tax_query' => array(
          array(
            'taxonomy' => 'seminar_cate',
            'field' => 'slug',
            'terms' => array('open')
          ),
        ),
      );
      $the_query = new WP_Query($args);
      ?>
      <?php if ($the_query->have_posts()) : ?>
      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
      <a class="swiper-slide" href="<?php the_permalink(); ?>" target="_blank">

        <div class="image_box"><?php the_post_thumbnail(); ?></div>
        <div class="inner">
          <div class="events_icon">

            <?php $events_icon = get_field('events_icon');
                if ($events_icon && in_array('new', $events_icon)) { //もしNEWが選択されていたら
                ?>
            <span class="event_icon_wrap event_new">NEW</span>
            <?php } ?>

            <?php $events_icon = get_field('events_icon');
                if ($events_icon && in_array('online', $events_icon)) { //もしNEWが選択されていたら
                ?>
            <span class="event_icon_wrap">オンライン</span>
            <?php } ?>


            <?php $events_icon = get_field('events_icon');
                if ($events_icon && in_array('free', $events_icon)) { //もしNEWが選択されていたら
                ?>
            <span class="event_icon_wrap">無料</span>
            <?php } ?>

          </div>

          <h2 class="article_title"><?php echo get_the_title(); ?></h2>
          <div class="event_date"><?php the_field('events_tag'); ?></div>
          <div class="toc_list">
            <p><?php the_field('how_no'); ?></p>
          </div>
        </div>

      </a>
      <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>
      <?php wp_reset_query(); ?>
    </div> <!-- スライドのページネーション表示 -->
    <div class="swiper-pagination"></div>
  </div>

  <!-- MA3分で読めるシリーズ -->
  <section class="category-01 ct-section">
    <div class="wrapper container-l">
      <div class="heading underline">
        <h1 class="text-center">参加受付中</h1>
      </div>

      <ul class="article_list_wrap">
        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = array(
          'posts_per_page'  => 5,
          'orderby' => 'date',
          'order' => 'DESC',
          'post_type' => 'seminar',
          'post_status' => 'publish',
          'tax_query' => array(
            array(
              'taxonomy' => 'seminar_cate',
              'field' => 'slug',
              'terms' => array('open')
            ),
          ),
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

        <li class="article_post_wrap">
          <a href="<?php the_permalink(); ?>" target="_blank">
            <div class="image_box"><?php the_post_thumbnail(); ?></div>
            <div class="inner">
              <div class="events_icon">

                <?php $events_icon = get_field('events_icon');
                    if ($events_icon && in_array('new', $events_icon)) { //もしNEWが選択されていたら
                    ?>
                <span class="event_icon_wrap event_new">NEW</span>
                <?php } ?>

                <?php $events_icon = get_field('events_icon');
                    if ($events_icon && in_array('online', $events_icon)) { //もしNEWが選択されていたら
                    ?>
                <span class="event_icon_wrap">オンライン</span>
                <?php } ?>


                <?php $events_icon = get_field('events_icon');
                    if ($events_icon && in_array('free', $events_icon)) { //もしNEWが選択されていたら
                    ?>
                <span class="event_icon_wrap">無料</span>
                <?php } ?>

              </div>

              <h2 class="article_title"><?php echo get_the_title(); ?></h2>
              <div class="event_date"><?php the_field('events_tag'); ?></div>
              <div class="toc_list">
                <p><?php the_field('how_no'); ?></p>
              </div>
              <div class="cmn-button cmn-button__blueBorder cmn-button__black">
                <a href="<?php the_permalink(); ?>" target="_blank"
                  class="cmn-button__link cmn-button__link-blue cmn-button__link-l cmn-button__slide cmn-button__slide-blue cmn-button__link-black">
                  <span class="cmn-button__txt">詳しく見る</span>
                </a>
              </div>
            </div>
          </a>
        </li>

        <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
        <?php wp_reset_query(); ?>
      </ul>
    </div>

  </section>


  <!-- インサイドセールス入門編 -->
  <section class="bg_color category-02 ct-section">
    <div class="wrapper container-l">
      <div class="heading underline">
        <h1 class="text-center">過去開催セミナー</h1>
      </div>
      <ul class="article_list_wrap" id="infinite-scroll">
        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = array(
          'posts_per_page'  => 3,
          'orderby' => 'date',
          'order' => 'DESC',
          'post_type' => 'seminar',
          'post_status' => 'publish',
          'paged' => $paged,
          'tax_query' => array(
            array(
              'taxonomy' => 'seminar_cate',
              'field' => 'slug',
              'terms' => array('closed')
            ),
          ),
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <li class="article_post_wrap infinite_scroll_target">
          <a href="<?php the_permalink(); ?>" target="_blank">
            <div class="image_box"><?php the_post_thumbnail(); ?></div>
            <div class="inner">
              <div class="events_icon">

                <?php $events_icon = get_field('events_icon');
                    if ($events_icon && in_array('online', $events_icon)) { //もしNEWが選択されていたら
                    ?>
                <span class="event_icon_wrap">オンライン</span>
                <?php } ?>


                <?php $events_icon = get_field('events_icon');
                    if ($events_icon && in_array('free', $events_icon)) { //もしNEWが選択されていたら
                    ?>
                <span class="event_icon_wrap">無料</span>
                <?php } ?>

              </div>

              <h2 class="article_title"><?php echo get_the_title(); ?></h2>
              <div class="event_date"><?php the_field('events_tag'); ?></div>
              <div class="toc_list">
                <p><?php the_excerpt(); ?></p>
              </div>
              <div class="cmn-button cmn-button__blueBorder cmn-button__black">
                <a href="<?php the_permalink(); ?>" target="_blank"
                  class="cmn-button__link cmn-button__link-blue cmn-button__link-l cmn-button__slide cmn-button__slide-blue cmn-button__link-black">
                  <span class="cmn-button__txt">詳しく見る</span>
                </a>
              </div>
            </div>
          </a>
        </li>
        <?php endwhile; ?>
      </ul>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>
      <?php if (function_exists('wp_pagenavi')) wp_pagenavi(array('query' => $the_query)); ?>
      <?php wp_reset_query(); ?>
    </div>

    <?php if (has_term('closed', 'seminar_cate')) : ?>
    <div class="scroll-wrappr">
      <?php get_template_part('inc/infinite-scroll'); ?>
    </div>
    <?php else : ?>

    <?php endif; ?>
  </section>

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

  <!-- Swiper -->
  <script>
  const swiper = new Swiper('.swiper-container', {
    // スライドメニューの表示方法
    loop: true,
    // effect: "fade",
    // fadeEffect: {
    //   crossFade: true
    // },
    // speed: 2000,
    autoplay: {
      delay: 5000,
    },
    centeredSlides: true,
    loopedSlides: 10,
    // スライドのページネーション表示
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets', //ページネーションの種類
      clickable: true, //クリックに反応させる
    },
    // スクロールバーの表示
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });
  </script>

</main>
<?php
get_footer();