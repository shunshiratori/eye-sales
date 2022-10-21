<?php

// 管理バー非表示
add_filter('show_admin_bar', '__return_false');

// 自作CSS/JS読み込み
function add_css_js()
{
	// stylesheet
	wp_enqueue_style('resetCss', get_template_directory_uri() . '/css/reset.css');
	wp_enqueue_style('commonCss', get_template_directory_uri() . '/css/common.css');
	wp_enqueue_style('footerCss', get_template_directory_uri() . '/css/footer.css');
	wp_enqueue_style('headerCss', get_template_directory_uri() . '/css/header.css');
	wp_enqueue_style('toptCss', get_template_directory_uri() . '/css/top.css');
	if (is_front_page()) {
		wp_enqueue_style('topCSS', get_template_directory_uri() . '/css/top.css');
	} elseif (is_page(array('corporate', 'recruit'))) {
		wp_enqueue_style('corporateCSS', get_template_directory_uri() . '/css/page-corporate.css');
	} elseif (is_page('company-profile')) {
		wp_enqueue_style('companyProfileCSS', get_template_directory_uri() . '/css/page-company-profile.css');
	} elseif (is_page('corporate-philosophy')) {
		wp_enqueue_style('corporatePhilosophyCSS', get_template_directory_uri() . '/css/page-corporate-philosophy.css');
	} elseif (is_page('ceo_message')) {
		wp_enqueue_style('ceoMessageCSS', get_template_directory_uri() . '/css/page-ceo_message.css');
	} elseif (is_page('management-members')) {
		wp_enqueue_style('managementMembersCSS', get_template_directory_uri() . '/css/page-management-members.css');
	} elseif (is_page('trading-performance')) {
		wp_enqueue_style('tradingPerformanceCSS', get_template_directory_uri() . '/css/page-trading-performance.css');
	} elseif (is_page('access-map')) {
		wp_enqueue_style('accessMapCSS', get_template_directory_uri() . '/css/page-access-map.css');
	} elseif (is_page('company-history')) {
		wp_enqueue_style('companyHistoryCSS', get_template_directory_uri() . '/css/page-company-history.css');
		wp_enqueue_style('slickCss', get_template_directory_uri() . '/css/slick/slick.css');
		wp_enqueue_style('slickThemeCSS', get_template_directory_uri() . '/css/slick/slick-theme.css');
	} elseif (is_page(array('law', 'privacy', 'our_policy', 'security'))) {
		wp_enqueue_style('termsCSS', get_template_directory_uri() . '/css/terms.css' . '?' . date('Ymdhis'));
	} elseif (is_page(array('contact', 'contact/thanks', 'documents', 'documents/thanks/', 'about/', 'about/thanks/', 'thanks_webinar'))) {
		wp_enqueue_style('contactCSS', get_template_directory_uri() . '/css/page-contact.css' . '?' . date('Ymdhis'));
	} elseif (is_singular(array('case', 'documents', 'seminar', 'news'))) {
		wp_enqueue_style('singleCSS', get_template_directory_uri() . '/css/single.css' . '?' . date('Ymdhis'));
	} elseif (is_page('operation')) {
		wp_enqueue_style('operationCSS', get_template_directory_uri() . '/css/page-operation.css');
	} elseif (is_page('service')) {
		wp_enqueue_style('serviceCSS', get_template_directory_uri() . '/css/page-service.css');
	} elseif (is_post_type_archive('documents')) {
		wp_enqueue_style('archive-documentsCSS', get_template_directory_uri() . '/css/archive-documents.css' . '?' . date('Ymdhis'));
	} elseif (is_post_type_archive('seminar')) {
		wp_enqueue_style('archive-seminarCSS', get_template_directory_uri() . '/css/archive-seminar.css' . '?' . date('Ymdhis'));
		wp_enqueue_style('swiperCSS', get_template_directory_uri() . '/css/swiper-bundle.css' . '?' . date('Ymdhis'));
		wp_enqueue_script('swiperJs', get_template_directory_uri() . '/js/swiper-bundle.js');
	} elseif (is_archive(array('case', 'documents', 'seminar', 'news'))) {
		wp_enqueue_style('archiveCSS', get_template_directory_uri() . '/css/archive.css' . '?' . date('Ymdhis'));
	}

	// javascript
	wp_enqueue_script('jqueryJs', get_template_directory_uri() . '/js/jquery-3.6.0.min.js');
	// if(is_page('company-history')) {
	wp_enqueue_script('slickJs', get_template_directory_uri() . '/js/slick/slick.min.js');
	// }
	wp_enqueue_script('mainJs', get_template_directory_uri() . '/js/main.js');
}

add_action('wp_enqueue_scripts', 'add_css_js');

add_theme_support('post-thumbnails');