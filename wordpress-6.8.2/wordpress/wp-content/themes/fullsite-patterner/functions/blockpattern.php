<?php
/**
 *
 * Blockpattern.php
 *
 * Resister block pattern
 *
 * @category   Components
 * @package    WordPress
 * @subpackage FullSite-Patterner
 */

defined( 'ABSPATH' ) || exit;

/** Register category of block pattern */
function fullsite_patterner_block_pattern_category() {

	register_block_pattern_category( 'fullsite-patterner/header', array( 'label' => __( 'header', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/footer', array( 'label' => __( 'footer', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/grid', array( 'label' => __( 'grid', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/article', array( 'label' => __( 'article', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/carousel', array( 'label' => __( 'carousel', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/slider', array( 'label' => __( 'slider', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/menu', array( 'label' => __( 'menu', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/navigation', array( 'label' => __( 'navigation', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/pagenation', array( 'label' => __( 'pagenation', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/card', array( 'label' => __( 'card', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/box', array( 'label' => __( 'box', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/text-box', array( 'label' => __( 'text-box', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/quote-box', array( 'label' => __( 'quote-box', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/gallery', array( 'label' => __( 'gallery', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/balloon', array( 'label' => __( 'balloon', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/accordion', array( 'label' => __( 'accordion', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/alert', array( 'label' => __( 'alert', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/button', array( 'label' => __( 'button', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/dropdown', array( 'label' => __( 'dropdown', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/popover', array( 'label' => __( 'popover', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/table', array( 'label' => __( 'table', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/font', array( 'label' => __( 'font', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/icon', array( 'label' => __( 'icon', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/form', array( 'label' => __( 'form', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/query', array( 'label' => __( 'query', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/breadcrumb', array( 'label' => __( 'breadcrumb', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/text-align', array( 'label' => __( 'text-align', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/display-none', array( 'label' => __( 'display-none', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/random', array( 'label' => __( 'random', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/ads-tag', array( 'label' => __( 'ads-tag', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/pagetop', array( 'label' => __( 'pagetop', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/terms', array( 'label' => __( 'terms', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/cta', array( 'label' => __( 'cta', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/q-a', array( 'label' => __( 'q-a', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/lp', array( 'label' => __( 'lp', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/blog', array( 'label' => __( 'blog', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/media', array( 'label' => __( 'media', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/company', array( 'label' => __( 'company', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/ec', array( 'label' => __( 'ec', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/shop', array( 'label' => __( 'shop', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/creator', array( 'label' => __( 'creator', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/lawyer', array( 'label' => __( 'lawyer', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/1-carousel-frame', array( 'label' => __( '1column-carousel-frame', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/1-carousel-noframe', array( 'label' => __( '1column-carousel-noframe', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/1-mainvisual-frame', array( 'label' => __( '1column-mainvisual-frame', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/1-mainvisual-noframe', array( 'label' => __( '1column-mainvisual-noframe', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/1-mainimg-frame', array( 'label' => __( '1column-mainimg-frame', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/1-mainimg-noframe', array( 'label' => __( '1column-mainimg-noframe', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/1-frame', array( 'label' => __( '1column-frame', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/1-noframe', array( 'label' => __( '1column-noframe', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/2-r-frame', array( 'label' => __( '2column-R-frame', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/2-r-noframe', array( 'label' => __( '2column-R-noframe', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/2-l-frame', array( 'label' => __( '2column-L-frame', 'fullsite-patterner' ) ) );
	register_block_pattern_category( 'fullsite-patterner/2-l-noframe', array( 'label' => __( '2column-L-noframe', 'fullsite-patterner' ) ) );
}
add_action( 'init', 'fullsite_patterner_block_pattern_category' );
