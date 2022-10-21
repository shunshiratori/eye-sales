<?php get_header(); ?>
<main class="trading-performance">
	<?php the_content(); ?>
	<!-- contact start -->
	<?php if(is_page(array('law','privacy','our_policy','security'))) : ?>
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
	<?php endif; ?>
	<!-- contact end -->
</main>
<?php get_footer(); ?>