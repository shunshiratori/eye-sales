<?php
get_header();
?>
<main id="site-content" role="main">
  <section class="cmn-eyecatch">
    <div class="container-l">
      <div class="cmn-eyecatch__inner">
        <h2 class="cmn-eyecatch__ttl">お役立ち資料</h2>
        <p class="cmn-eyecatch__txt">Documents Listｓ</p>
      </div>
    </div>
  </section>

  <!-- 一括ダウンロード -->
  <section class="bg_color documents_all_wrap">
    <div class="wrapper container-l">
      <h3 class="text-center heading-txt">複数の資料を一括でダウンロードいただけます</h3>
      <div class="cmn-button cmn-button__blue">
        <a href="/documents/documents_all/"
          class="cmn-button__link cmn-button__link-white cmn-button__link-m cmn-button__slide cmn-button__slide-white">
          <span class="cmn-button__txt">一括ダウンロードはこちら</span>
        </a>
      </div>
    </div>
  </section>

  <!-- ページ内カテゴリーリンク -->
  <div class="bg_color category_link_wrap bg-grey">
    <div class="wrapper">
      <ul class="">
        <li><a class="button" href="#jump_category_01">MA</a></li>
        <li><a class="button" href="#jump_category_02">インサイドセールス</a></li>
        <li><a class="button" href="#jump_category_03">営業</a></li>
      </ul>
    </div>
  </div>

  <!-- MA3分で読めるシリーズ -->
  <section id="jump_category_01" class="category-01 ct-section">
    <div class="wrapper container-l">
      <div class="heading underline">
        <h1 class="text-center">MA</h1>
        <h3 class="text-center">3分で読めるシリーズ</h3>
      </div>

      <ul class="article_list_wrap">
        <?php
        $args = array(
          'posts_per_page'  => 30,
          'orderby'      => 'date',
          'order'        => 'DESC',
          'post_type'      => 'documents',
          'post_status'    => 'publish',
          'tax_query' => array(
            array(
              'taxonomy' => 'documents_cate',
              'field' => 'slug',
              'terms' => array('ma')
            ),
          ),
        );
        $my_query = new WP_Query($args);
        ?>
        <?php if ($my_query->have_posts()) : ?>
        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <li class="article_post_wrap">
          <a href="<?php the_permalink(); ?>">
            <div class="image_box"><?php the_post_thumbnail(); ?></div>
            <div class="inner">
              <h2 class="article_title"><?php echo get_the_title(); ?></h2>
              <!-- <hr>
                <div class="toc_list">
                  <?php if (has_excerpt()) {
                    the_excerpt();
                  } ?>
                </div> -->
              <div class="cmn-button cmn-button__blueBorder cmn-button__black">
                <a href="<?php the_permalink(); ?>"
                  class="cmn-button__link cmn-button__link-blue cmn-button__link-l cmn-button__slide cmn-button__slide-blue cmn-button__link-black">
                  <span class="cmn-button__txt">ダウンロードする</span>
                </a>
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


  <!-- インサイドセールス入門編 -->
  <section id="jump_category_02" class="bg_color category-02 ct-section">
    <div class="wrapper container-l">
      <div class="heading underline">
        <h1 class="text-center">インサイドセールス</h1>
        <h3 class="text-center">3分で読めるシリーズ</h3>
      </div>
      <ul class="article_list_wrap">
        <?php
        $args = array(
          'posts_per_page'  => 30,
          'orderby'      => 'date',
          'order'        => 'DESC',
          'post_type'      => 'documents',
          'post_status'    => 'publish',
          'tax_query' => array(
            array(
              'taxonomy' => 'documents_cate',
              'field' => 'slug',
              'terms' => array('inside')
            ),
          ),
        );
        $my_query = new WP_Query($args);
        ?>
        <?php if ($my_query->have_posts()) : ?>
        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <li class="article_post_wrap">
          <a href="<?php the_permalink(); ?>">
            <div class="image_box"><?php the_post_thumbnail(); ?></div>
            <div class="inner">
              <h2 class="article_title"><?php echo get_the_title(); ?></h2>
              <div class="cmn-button cmn-button__blueBorder cmn-button__black">
                <a href="<?php the_permalink(); ?>"
                  class="cmn-button__link cmn-button__link-blue cmn-button__link-l cmn-button__slide cmn-button__slide-blue cmn-button__link-black">
                  <span class="cmn-button__txt">ダウンロードする</span>
                </a>
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

  <!-- 営業編 -->
  <section id="jump_category_03" class="category-06 ct-section">
    <div class="wrapper container-l">
      <div class="heading underline">
        <h1 class="text-center">営業編</h1>
        <h3 class="text-center">3分で読めるシリーズ</h3>
      </div>
      <ul class="article_list_wrap">
        <?php
        $args = array(
          'posts_per_page'  => 30,
          'orderby'      => 'date',
          'order'        => 'DESC',
          'post_type'      => 'documents',
          'post_status'    => 'publish',
          'tax_query' => array(
            array(
              'taxonomy' => 'documents_cate',
              'field' => 'slug',
              'terms' => array('sales')
            ),
          ),
        );
        $my_query = new WP_Query($args);
        ?>
        <?php if ($my_query->have_posts()) : ?>
        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <li class="article_post_wrap">
          <a href="<?php the_permalink(); ?>">
            <div class="image_box"><?php the_post_thumbnail(); ?></div>
            <div class="inner">
              <h2 class="article_title"><?php echo get_the_title(); ?></h2>
              <!-- <hr> -->

              <!-- <div class="toc_list">
              <?php if (has_excerpt()) {
                the_excerpt();
              } ?>
            </div> -->

              <div class="cmn-button cmn-button__blueBorder cmn-button__black">
                <a href="<?php the_permalink(); ?>"
                  class="cmn-button__link cmn-button__link-blue cmn-button__link-l cmn-button__slide cmn-button__slide-blue cmn-button__link-black">
                  <span class="cmn-button__txt">ダウンロードする</span>
                </a>
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

</main>
<?php
get_footer();