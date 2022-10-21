<?php get_header();?>

<main id="site-content" role="main">
	<section>
		<div class="page_heading">
			<div class="page_heading_inner">
				<h2 class="page_heading_jp">お知らせ</h2>
				<h2 class="page_heading_en">News</h2>
			</div>
		</div>

      <!-- menu -->

      <div class="menu_box">
        <div class="menu_item" id="div3">
          <input type="button" id="btn3" value="すべて" onclick="clickNews3()" />
        </div>
        <div class="menu_item" id="div1">
          <input type="button" id="btn1" value="お知らせ・リリース" onclick="clickNews1()" />
        </div>
        <div class="menu_item" id="div2">
          <input type="button" id="btn2" value="メディア掲載" onclick="clickNews2()" />
        </div>
      </div>


      <!-- Sections -->
      <section id="fuu" class="section1">
        <div class="wrapper" id="scrolllist">

          <?php
				  $paged = get_query_var('paged') ? get_query_var('paged') : 1;
			    $aag = array(
					'posts_per_page'	=> 5,
					'orderby'			=> 'date',
					'order'				=> 'DESC',
					'post_type'			=> 'news',
          'post_status'		=> 'publish',
          'tax_query' => array(
            array(
              'taxonomy' => 'news_cate',
              'field' => 'slug',
              'terms' => array('release')
            ),
          ),
     			'paged' => $paged ,
			    );
			    $the_query = new WP_Query( $aag );
 				  if ( $the_query->have_posts() ) : ?>

          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

          <!-- ループはじめ -->
          <a href="<?php the_permalink() ?>" class="slist">
            <dl>
              <dt>
                <div class="post_thumbnail_wrap">
                  <?php the_post_thumbnail(); ?>
                </div>
              </dt>
              <dd>
                <h2><?php the_title(); ?></h2>
                <p class="post_data_wrap"><?php the_time('Y.m.d') ?></p>
                <p><?php the_excerpt(); ?></p>
              </dd>
            </dl>
          </a>
          <!-- ループおわり -->
          <?php endwhile; ?>
        </div>

        <?php if(function_exists('wp_pagenavi'))
          wp_pagenavi(array('query' => $the_query)); ?>

        <?php wp_reset_postdata(); ?>

        <?php endif; ?>

        <?php wp_reset_query(); ?>

      </section>


      <section id="euu" class="section2">
        <div class="wrapper" id="list2">

          <?php
				  $paged = get_query_var('paged') ? get_query_var('paged') : 1;
			    $arg = array(
					'posts_per_page'	=> 5,
					'orderby'			=> 'date',
					'order'				=> 'DESC',
					'post_type'			=> 'news',
          'post_status'		=> 'publish',
          'tax_query' => array(
            array(
              'taxonomy' => 'news_cate',
              'field' => 'slug',
              'terms' => array('media')
            ),
          ),
     			'paged' => $paged ,
			    );
			    $the_query = new WP_Query( $arg );
 				  if ( $the_query->have_posts() ) : ?>

          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

          <!-- ループはじめ -->
          <?php
            $media_field = get_field('media_url');

            if ($media_field == '#'): ?>

          <a class="no-hover entry">
            <dl>
              <dt>
                <div class="post_thumbnail_wrap">
                  <?php the_post_thumbnail(); ?>
                </div>
              </dt>
              <dd>
                <h2><?php the_title(); ?></h2>
                <p class="post_data_wrap"><?php the_time('Y.m.d') ?></p>
                <p><?php the_excerpt(); ?></p>
              </dd>
            </dl>
          </a>

          <?php else: ?>

          <a href="<?php the_field('media_url'); ?>" target="blank" class="entry">
            <dl>
              <dt>
                <div class="post_thumbnail_wrap">
                  <?php the_post_thumbnail(); ?>
                </div>
              </dt>
              <dd>
                <h2><?php the_title(); ?></h2>
                <p class="post_data_wrap"><?php the_time('Y/m/d') ?></p>
                <p><?php the_excerpt(); ?></p>
              </dd>
            </dl>
          </a>

          <?php endif ?>

          <!-- ループおわり -->
          <?php endwhile; ?>
        </div>

        <?php if(function_exists('wp_pagenavi'))
          wp_pagenavi(array('query' => $the_query)); ?>

        <?php wp_reset_postdata(); ?>

        <?php endif; ?>

        <?php wp_reset_query(); ?>

      </section>


      <section id="guu" class="section3">
        <div class="wrapper" id="list3">

          <?php
				  $paged = get_query_var('paged') ? get_query_var('paged') : 1;
			    $args = array(
					'posts_per_page'	=> 5,
					'orderby'			=> 'date',
					'order'				=> 'DESC',
					'post_type'			=> 'news',
          'post_status'		=> 'publish',
          'tax_query' => array(
            array(
              'taxonomy' => 'news_cate',
              'field' => 'slug',
              'terms' => array('media','release')
            ),
          ),
     			'paged' => $paged ,
			    );
			    $the_query = new WP_Query( $args );
 				  if ( $the_query->have_posts() ) : ?>

          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

          <?php
            $media_field = get_field('media_url');

          if ($media_field == '#'): ?>

			<a class="no-hover all-entry">
				<dl>
					<dt>
						<div class="post_thumbnail_wrap">
							<?php the_post_thumbnail(); ?>
						</div>
					</dt>
					<dd>
						<h2><?php the_title(); ?></h2>
						<p class="post_data_wrap"><?php the_time('Y.m.d') ?></p>
						<p><?php the_excerpt(); ?></p>
					</dd>
				</dl>
			</a>

			<?php elseif (empty($media_field)): ?>
			<a href="<?php the_permalink() ?>" class="all-entry">
				<dl>
					<dt>
						<div class="post_thumbnail_wrap">
							<?php the_post_thumbnail(); ?>
						</div>
					</dt>
					<dd>
						<h2><?php the_title(); ?></h2>
						<p class="post_data_wrap"><?php the_time('Y.m.d') ?></p>
						<p><?php the_excerpt(); ?></p>
					</dd>
				</dl>
			</a>

			<?php else: ?>

			<a href="<?php the_field('media_url'); ?>" target="blank" class="all-entry">
				<dl>
					<dt>
						<div class="post_thumbnail_wrap">
							<?php the_post_thumbnail(); ?>
						</div>
					</dt>
					<dd>
						<h2><?php the_title(); ?></h2>
						<p class="post_data_wrap"><?php the_time('Y.m.d') ?></p>
						<p class="excerpt">
							<?php
								if (mb_strlen(get_the_excerpt(), 'UTF-8') > 100) {
									echo mb_substr(get_the_excerpt(), 0, 100, 'UTF-8') . '[...]';
								} else {
									echo get_the_excerpt();
								}
							?>
						</p>
						<p class="see_more">続きを見る</p>
					</dd>
				</dl>
			</a>

			<?php endif ?>

          <!-- ループ終了 -->
          <?php endwhile; ?>
        </div>

        <?php if(function_exists('wp_pagenavi'))
          wp_pagenavi(array('query' => $the_query)); ?>
          
        <?php wp_reset_postdata(); ?>

        <?php endif; ?>

        <?php wp_reset_query(); ?>

      </section>
      <!-- test1 finish -->


    </section>
    <?php wp_reset_postdata(); ?>

	<section class="contact">
			<div class="container-m">
					<div class="contact-content">
				<h3 class="contact-content__ttl">お気軽に<br>お問合せください</h3>
				<p class="contact-content__txt">サービスや弊社についてのご相談やご質問は<br>こちらのフォームよりお問い合わせください。</p>
							<div class="cmn-button cmn-button__white">
									<a href="/contact/" class="cmn-button__link cmn-button__link-white cmn-button__link-m cmn-button__slide cmn-button__slide-white">
											<span class="cmn-button__txt">お問い合わせ</span>
									</a>
							</div>
					</div>
			</div>
	</section>
</main>
<!-- #main -->



<style type="text/css">
	.section1 {
		display: none;
	}
	.section2 {
		display: none;
	}
	/* ページタイトル関係 */ 
	.page_heading {
		padding-top: 23rem;
		padding-bottom: 11rem;
		max-width: 1200px;
		margin-left: auto;
		margin-right: auto;
		/* 		padding-left: 15px; */
		/* 		padding-right: 15px; */
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
		margin-right: 9px;
	}

	/* ページコンテンツ関係 */ 
	.wrapper {
		max-width: 1200px;
		margin-left: auto;
		margin-right: auto;
	}

	/* 絞り込みリンクボタン関係 */
	.menu_box{
		background-color: #f9f9f9;
		display: flex;
		justify-content: center;
		align-items: center;
		min-height: 12rem;
		padding: 4rem 0;
		padding: 4rem 0;
	}
	.menu_item input{
		border: none;
		background: none;
		/* 		font-size: 2.15rem; */
		cursor: pointer;
		font-weight: 500;
		padding: 0;
		/* 		letter-spacing: 0.5px; */
		transition: .4s;
	}
	.menu_item input::after {
		position: absolute;
		bottom: -8px;
		left: 0px;
		top: 27px;
		content: '';
		width: 100%;
		height: 2px;
		background: #f9f9f9;
		opacity: 0;
		visibility: hidden;
	}
	.menu_item input:hover::after {
		bottom: 0px;
		opacity: 1;
		visibility: visible;
		transition: .3s;
	}
	.menu_box {
		margin-bottom: 9.5rem;
	}
	.menu_item input {
		background-image: linear-gradient(#28294F, #28294F);
		background-position: 100% 100%;
		background-repeat: no-repeat;
		background-size: 0 2px;
		display: inline;
		transition: background-size 0.5s cubic-bezier(0.43, 0.05, 0.17, 1) 0s;
		padding-bottom: 2px;
	}
	.menu_item input:hover,	 .menu_item input.btn_under {
		background-position: 0 100%;
		background-size: 100% 2px;
	}
		.menu_item input.btn_under{
/* 		border-bottom: 2px solid #28294F !important; */
			transition:none;
	}
	/* ページナビゲーション関係 */
	.wp-pagenavi {
		display: flex;
		justify-content: center;
		align-items: center;
		gap: 2em;
	}
	.wp-pagenavi a, .wp-pagenavi span {
		border: 0;
		padding: 0;
		margin: 0;
		font-size: 2.1rem;
		font-weight: 500;
		color: #28294f;
	}
	.wp-pagenavi span.current {
		font-weight: 500;
		color: #fff;
		background-color: #28294f;
		line-height: 1;
		padding: 0.5em 0.6em;
		display: flex;
		align-items: center;
		justify-content: center;
	}
	span.pages {
		display: none;
	}

	/* 記事一覧 */
	.post_thumbnail_wrap {
		width: 300px;
	}
	.post_thumbnail_wrap img {
		max-width: 100%;
		height: auto;
	}
	.post_data_wrap {
		text-align: left;
		margin-top: 1rem;
		margin-bottom: 1rem;
		color: #28294f;
	}

	h2 {
		line-height: 1.5;
		font-size: 1.2em;
	}
	main dl {
		padding: 0;
		text-align: justify;
		gap: 5rem;
		display: flex;
		margin-bottom: 9rem;
	}
	main dt {
		display: flex;
		justify-content: center;
		align-items: flex-start;
	}
	main dd {
		padding-bottom: 1rem;
		/*       margin-bottom: 3em; */
		width: 100%;
		border-bottom: solid 1px #ededf0;
	}
	.excerpt{
		line-height: 1.8;	
	}
	.see_more {
		color: #28294f;
		font-weight: 500;
		font-size: 1.5rem;
		position: relative;
		display: inline-block;
		/*     margin: 4.6rem 0 1rem; */
		margin: 4.6rem 0 0;
	}
	.see_more::after {
		content: "";
		position: absolute;
		z-index: 4;
		top: calc(50% - 2px);
		right: -40px;
		display: inline-block;
		width: 30px;
		height: 4px;
		transform: skew(74deg);
		border-right: 3px solid #28294f;
		border-bottom: 1px solid #28294f;
	}
	@media (min-width: 781px) {
		main a {
			transition: .4s;
		}
		main .wrapper a:hover {
			opacity: 0.5;
		}
		main .no-hover:hover {
			opacity: 1 !important;
		}
	}

	@media (max-width: 780px) {
		main dl {
			flex-direction: column;
			/* 			padding: 0 20px; */
			text-align: justify;
		}

		.post_thumbnail_wrap {
			margin-right: 0;
			margin-bottom: 20px;
		}

		.post_thumbnail_wrap {
			width: 100%;
		}

		main p+p {
			margin-top: 1.0em;
		}

		main dd {
			padding-bottom: 3em;
			border-bottom: solid 1px #aaa;
		}
	}

	/* デスクトップ */
	@media (min-width: 1201px) {
	}

	/* タブレット */
	@media (max-width: 1200px) {
		.page_heading, .wrapper {
			padding-left: 15px;
			padding-right: 15px;
		}
	}

	/* スマホ */
	@media (min-width: 476px) {
		/* 絞り込みリンクボタン関係 */
		.menu_item + .menu_item {
			margin-left: 7rem;
		}
		main .contact-content__txt br, main .contact-content__ttl br {
			display: none;
		}
	}
	@media (max-width: 475px) {
		.case_info, .menu_box {
			flex-direction: column;
		}
		.page_heading, .case_info, .menu_box {
			padding-left: 15px;
			padding-right: 15px;
		}
		.thumbnail_wrap {
			width: 100%;
		}
		/* 	ページタイトル  */
		.page_heading{
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
		/* 絞り込みリンクボタン関係 */
		.menu_item+.menu_item {
			margin-top: 0.5em;
		}
	}
	
	/* 	問題なければ削除 */
	main .heading.underline h1 {
		/* 		margin-bottom: 100px; */
	}
    </style>


  <!-- click function -->
  <script>
  var anc = location.hash
  if (anc == '#1') {
    $('.section1').show();
    $('.section2').hide();
    $('.section3').hide();
    document.getElementById("btn1").classList.add('btn_under');
  }

  if (anc == '#2') {
    $('.section1').hide();
    $('.section2').show();
    $('.section3').hide();
    document.getElementById("btn2").classList.add('btn_under');
  }

  if (anc == '#3' || anc == '') {
    $('.section1').hide();
    $('.section2').hide();
    $('.section3').show();
    document.getElementById("btn3").classList.add('btn_under');
  }
  </script>

  <script>
  function clickNews1() {
    $('.section1').show();
    $('.section2').hide();
    $('.section3').hide();
    document.getElementById("btn1").classList.add('btn_under');
    document.getElementById("btn2").classList.remove('btn_under');
    document.getElementById("btn3").classList.remove('btn_under');
    document.getElementById("div1").classList.add('nohover');
    document.getElementById("div3").classList.remove('first-under');
    document.getElementById("div2").classList.remove('nohover');
    document.getElementById("div3").classList.remove('nohover');
  }

  function clickNews2() {
    $('.section1').hide();
    $('.section2').show();
    $('.section3').hide();
    document.getElementById("btn1").classList.remove('btn_under');
    document.getElementById("btn2").classList.add('btn_under');
    document.getElementById("btn3").classList.remove('btn_under');
    document.getElementById("div1").classList.remove('nohover');
    document.getElementById("div3").classList.remove('first-under');
    document.getElementById("div2").classList.add('nohover');
    document.getElementById("div3").classList.remove('nohover');
  }

  function clickNews3() {
    $('.section1').hide();
    $('.section2').hide();
    $('.section3').show();
    document.getElementById("btn1").classList.remove('btn_under');
    document.getElementById("btn2").classList.remove('btn_under');
    document.getElementById("btn3").classList.add('btn_under');
    document.getElementById("div1").classList.remove('nohover');
    document.getElementById("div2").classList.remove('nohover');
    document.getElementById("div3").classList.add('nohover');
  }
  </script>

  <?php get_footer();?>