<?php
get_header();
?>
<main id="site-content" role="main">
	<div class="page_heading">
		<div class="page_heading_inner">
			<h2 class="page_heading_jp">事例紹介</h2>
			<h2 class="page_heading_en">Case Study</h2>
		</div>
	</div>
	<div class="case_info">
		<div class="thumbnail_wrap">
			<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
		</div>
		<div class="case_detail_wrap">
			<table class="case_detail">
				<tr>
					<th colspan="2"><?php the_title(); ?></th>
				</tr>
				<tr>
					<th>代表紹介</th>
					<td><?php the_field('company_president'); ?></td>
				</tr>
				<tr>
					<th>従業員数</th>
					<td><?php the_field('employees_count'); ?></td>
				</tr>
				<tr>
					<th>業界分類</th>
					<td><?php the_field('industry'); ?></td>
				</tr>
				<tr>
					<th>関連会社</th>
					<td><?php the_field('related_company'); ?></td>
				</tr>
			</table>
		</div>
	</div>
	<!-- menu -->
	<div  id="menu_box" class="page_jump"></div>
	<div class="menu_box">
		<div class="menu_item" id="menu_item1">
			<input type="button" id="menu_btn1" value="課題" onclick="clickCase(1)" />
		</div>
		<div class="menu_item" id="menu_item2">
			<input type="button" id="menu_btn2" value="選定のポイント" onclick="clickCase(2)" />
		</div>
		<div class="menu_item" id="menu_item3">
			<input type="button" id="menu_btn3" value="サービスの所感" onclick="clickCase(3)" />
		</div>
		<div class="menu_item" id="menu_item4">
			<input type="button" id="menu_btn4" value="結果" onclick="clickCase(4)" />
		</div>
	</div>
	<!-- コンテンツ -->
	<div class="wrapper">
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
		<!-- <div class="post_time"><?php the_time('Y年m月d日'); ?></div> -->
	</div>
			<!--
			<div class="page_top_button">
			<a href="#menu_box"></a>
			</div> -->
	<div id="page_top" style="">
    <a href="">
      <span></span>
    </a>
  </div>
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

<script>
	function clickCase(num){
		let tags = $('.wrapper h3');
		for (let count = 1 ; count < 5 ; count++){
			if(count === num){
				document.getElementById("menu_btn" + count).classList.add('btn_under');
				if(tags.length === 4){
					// 取得した値のid属性がついた要素の位置を取得
					//	const offsetTop = tags[count - 1].offsetTop - 100; //なんか位置合わないので調整の100引いた
					const offsetTop = tags[count - 1].offsetTop - 150; //なんか位置合わないので調整の100引いた
					// 取得した箇所に移動
					$("html, body").animate({ scrollTop: offsetTop }, 600);//200msかけてアニメーションスクロール
				}
			}else{
				document.getElementById("menu_btn" + count).classList.remove('btn_under');
			}
		}
	}
</script>

<style type="text/css">
/* 	html {
		scroll-behavior: smooth;
	} */
	img {
		max-width: 100%;
		box-sizing: border-box;
		height: auto;
	}
	main .wrapper {
		max-width: 1200px;
		padding: 11rem 0 2.6rem;
		margin: 0 auto;
		overflow: hidden;
	}
	main .wrapper h2 {
		margin: 1.5em 0 1.0em;
		font-size: 1.8em;
		color: #28294F;
	}
	main a{
		word-break: break-all;
	}
	main .contact {
		margin-top: 2.5rem;
	}
	.post_time {
		margin-top: 2em;
		text-align: right;
	}
	/* ページタイトル関係 */ 
	.page_heading {
		padding-top: 23rem;
		padding-bottom: 12.5rem;
		max-width: 1200px;
		margin-left: auto;
		margin-right: auto;
	}
	.page_heading_jp {
		margin: 0rem;
		font-size: 6rem;
		display: inline-block;
		color: #28294F;
/* 		letter-spacing: 0.1em; */
		letter-spacing: 4px;
		margin-bottom: 13px;
	}
	.page_heading_inner {
		display: inline-block;
	}
	.page_heading_en {
		margin: 0.4rem 0.5rem 0 0;
		font-size: 1.8rem;
		text-align: right;
/* 		letter-spacing: 0.6px; */
	}
	/* 記事内見出し */
	.wrapper *:not(h3)+h3{
		margin-top: 12rem;
	}
	.wrapper h3{
		font-size: 2.0rem;
		padding: 1px 0 1px 1.5em;
		position: relative;
		margin-bottom: 5.5rem;
		/* color: #28294F; */
		letter-spacing: 2px;
	}
	.wrapper h3::before {
		display: block;
		background: #000;
		height: 100%;
/* 		height: 1.5em; */
		width: 5px;
		position: absolute;
		left: 0;
		top: 0;
		content: "";
	}
	main .wrapper h4 {
		font-size: 1.8rem;
		padding-left: 2.7em;
		position: relative;
	}

	main .wrapper h4::before {
    content: "";
    display: block;
    height: 1px;
    background-color: #000;
    left: 0;
    position: absolute;
    width: 3.7rem;
    top: 0.8em;
	}
	/* 記事本文 */
	main .wrapper *:not(h3,div) {
		max-width: 1000px;
		margin-left: auto;
		margin-right: auto;
		width: 100%;
	}
	main .wrapper p {
		line-height: 1.9;
	}
	main .wrapper p+p {
		margin-top: 2em;
	}
	main .wrapper h4+p {
		margin-top: 1em;
	}

	main .wrapper p+h4 {
		margin-top: 7rem;
	}
	main .wrapper p+figure, main .wrapper p+img {
		margin-top: 5rem;
	}
	/* 事例情報 */
	.case_info{
		display: flex;
		margin-left: auto;
		margin-right: auto;
		margin-bottom: 11rem;
		max-width: 1000px;
		gap: 3rem 5rem;
		align-items: center;
	}
	.case_detail_wrap {
		flex: 1;	
	}
	.case_detail {
		text-align: left;
		width: 100%;
	}
	.case_detail tbody {
		display: block;
	}
	.case_detail tr {
		border-bottom: solid 1px #ededf0;
		display: block;
		padding: 17px 0;
	}
	.case_detail tr:first-child {
		padding: 0 0 20px;
	}
	.case_detail th {
		font-weight: bold;
		width: 11rem;
	}
	.case_detail tr:first-child th {
		font-size: 1.3em;
		width: 100%;
	}
	.thumbnail_wrap{
		text-align: center;
		width: 46%;
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
		cursor: pointer;
		font-weight: 500;
		padding: 0;
		transition: .4s;
		color: #28294F;
		font-size: 1.5rem;
	}
	.menu_item input::after {
		position: absolute;
		bottom: -8px;
		left: 0px;
		top: 27px;
		content: '';
		width: 100%;
		height: 1px;
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
	.menu_item input {
		background-image: linear-gradient(#28294F, #28294F);
		background-position: 100% 100%;
		background-repeat: no-repeat;
		background-size: 0 1px;
		display: inline;
		transition: background-size 0.5s cubic-bezier(0.43, 0.05, 0.17, 1) 0s;
	}
	.menu_item input:hover,	 .menu_item input.btn_under {
		background-position: 0 100%;
		background-size: 100% 1px;
	}
	.menu_item input.btn_under{
		transition:none;
	}

	/* 上に戻るボタン */
/* 	.page_top_button {
		margin: 0 auto;
		max-width: 1280px;
		padding: 0 15px 4rem;
		position: sticky;
		bottom: 0;
	}
	.page_top_button a {
		background-color: #fff;
		display: block;
		width: 5rem;
		height: 5rem;
		margin-left: auto;
		border: solid 2px #28294F;
		box-sizing: border-box;
		position: relative;
	}
	.page_top_button a::before {
		content: "";
		display: block;
		width: calc(30% + 2px);
		height: calc(30% + 2px);
		border: solid 2px #28294F;
		position: absolute;
		top: calc(50% - 2px);
		left: calc(30% + 2px);
		transform: rotate(45deg);
		border-right-color: transparent;
		border-bottom-color: transparent;
	}
 */

	#page_top {
    position: fixed;
    bottom: 50px;
    right: 50px;
    z-index: 999;
    display: block;
    width: 50px;
    height: 50px;
    border: 1px solid #28294F;
    background-color: #fff;
}
	#page_top a {
    position: relative;
    display: block;
    width: 100%;
    height: 100%;
}
	#page_top span {
    display: block;
    width: 18px;
    height: 18px;
    border-right: 1px solid #28294F;
    border-top: 1px solid #28294F;
    position: absolute;
    top: 60%;
    left: 50%;
    transform: translate(-50%, -40%) rotate(-45deg);
}
	.page_jump {
		padding-top: 120px;
		margin-top: -120px;
	}
	/* デスクトップ */
	@media (min-width: 1201px) {
	}

	/* タブレット */
	@media (max-width: 1200px) {
		main .wrapper,	.page_heading {
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
		/*  事例情報  */
		.case_detail_wrap {
			width: 100%;
		}
		.case_detail td, .case_detail td:first-child, .case_detail th{
			display: block;
			width: 100%;
		}
		.case_detail tr {
			padding-bottom: 0;
		}
		.case_detail td {
			padding: 1rem 0 2rem;
		}
		.case_detail tr td:first-child {
			padding-bottom: 1.25rem;
		}
		.case_detail tr td:first-child[colspan="2"] {
			padding-bottom: 2rem;
		}
		.case_detail tr td+td {
			padding-top: 0;
		}
		/* 絞り込みリンクボタン関係 */
		.menu_item+.menu_item {
			margin-top: 0.5em;
		}
		#page_top {
			right: 20px;
		}
	}
</style>
<?php
get_footer();