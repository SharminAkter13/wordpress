<?php
/**
 *
 * Blockp-style.php
 *
 * Resister block styles
 *
 * @category   Components
 * @package    WordPress
 * @subpackage FullSite-Patterner
 */

defined( 'ABSPATH' ) || exit;

/** Resister block styles */
function fullsite_patterner_register_block_styles() {

	register_block_style(
		'core/heading',
		array(
			'name'  => 'decoration-underline',
			'label' => __( 'underline', 'fullsite-patterner' ),
		)
	);

	register_block_style(
		'core/heading',
		array(
			'name'  => 'decoration-line',
			'label' => __( 'over&underline', 'fullsite-patterner' ),
		)
	);

	register_block_style(
		'core/heading',
		array(
			'name'  => 'decoration-r-l-line',
			'label' => __( 'underline&left, right vertical line', 'fullsite-patterner' ),
		)
	);

	register_block_style(
		'core/heading',
		array(
			'name'  => 'decoration-l-line',
			'label' => __( 'left vertical line', 'fullsite-patterner' ),
		)
	);

	register_block_style(
		'core/query-title',
		array(
			'name'  => 'decoration-underline',
			'label' => __( 'underline', 'fullsite-patterner' ),
		)
	);

	register_block_style(
		'core/query-title',
		array(
			'name'  => 'decoration-line',
			'label' => __( 'over&underline', 'fullsite-patterner' ),
		)
	);

	register_block_style(
		'core/query-title',
		array(
			'name'  => 'decoration-r-l-line',
			'label' => __( 'underline&left, right vertical line', 'fullsite-patterner' ),
		)
	);

	register_block_style(
		'core/query-title',
		array(
			'name'  => 'decoration-l-line',
			'label' => __( 'left vertical line', 'fullsite-patterner' ),
		)
	);

	register_block_style(
		'core/post-title',
		array(
			'name'  => 'decoration-underline',
			'label' => __( 'underline', 'fullsite-patterner' ),
		)
	);

	register_block_style(
		'core/post-title',
		array(
			'name'  => 'decoration-line',
			'label' => __( 'over&underline', 'fullsite-patterner' ),
		)
	);

	register_block_style(
		'core/post-title',
		array(
			'name'  => 'decoration-r-l-line',
			'label' => __( 'underline&left, right vertical line', 'fullsite-patterner' ),
		)
	);

	register_block_style(
		'core/post-title',
		array(
			'name'  => 'decoration-l-line',
			'label' => __( 'left vertical line', 'fullsite-patterner' ),
		)
	);

}
add_action( 'init', 'fullsite_patterner_register_block_styles' );
