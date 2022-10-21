<?php
get_header();
?>
<main id="site-content" role="main">
	<div class="wrapper">
		<div class="">
			<h2><?php the_title(); ?></h2>
		</div>
		<div class="thumbnail_wrap">
			<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
		</div>
			<?php
			remove_filter('the_content', 'wpautop');
			while ( have_posts() ) : the_post(); // Start the Loop
			?>
			<?php
			remove_filter ('the_content', 'wpautop');
			the_content();
			?>
			<?php
			endwhile; // End of the loop.
			?>
			<div class="post_time"><?php the_time('Y年m月d日'); ?></div>
	</div>
	<section class="contact">
			<div class="container-m">
					<div class="contact-content">
							<h3 class="contact-content__ttl">お気軽にお問合せください</h3>
							<p class="contact-content__txt">サービスや弊社についてのご相談やご質問はこちらのフォームよりお問い合わせください。</p>
							<div class="cmn-button cmn-button__white">
									<a href="/contact/" class="cmn-button__link cmn-button__link-white cmn-button__link-m cmn-button__slide cmn-button__slide-white">
											<span class="cmn-button__txt">お問い合わせ</span>
									</a>
							</div>
					</div>
			</div>
	</section>
</main>

<style type="text/css">
img {
    max-width: 100%;
    box-sizing: border-box;
    height: auto;
}
	main * {
	    line-height: 1.8;
	}
/* youtube */
.youtube {padding-top: 56.25%;position: relative;width: 100%;}
.youtube iframe {position: absolute;height: 100% !important;right: 0;top: 0;width: 100% !important;}
.youtube {
    margin-top: 1em;
    margin-bottom: 1em;
}
main .wrapper {
    max-width: 760px;
    padding: 200px 20px 60px;
    margin: 0 auto;
    overflow: hidden;
}
main h2 {
    margin: 1.5em 0 1.0em;
    font-size: 1.8em;
		color: midnightblue;
    /* border-bottom: 2px solid #e60012; */
}
.thumbnail_wrap{
    margin-bottom: 1em;
	text-align: center;
}
.thumbnail_wrap img {
    max-width: 100%;
    height: auto;
}
main a{
	color: #e60012;
	text-decoration: underline;
    word-break: break-all;
}
.post_time {
    margin-top: 2em;
    text-align: right;
}
</style>
<?php
get_footer();
