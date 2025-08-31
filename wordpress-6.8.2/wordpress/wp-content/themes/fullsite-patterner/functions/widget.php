<?php
/**
 *
 * Widget.php
 *
 * Widget.
 *
 * @category   Components
 * @package    WordPress
 * @subpackage FullSite-Patterner
 */

defined( 'ABSPATH' ) || exit;

/** Resister widgets */
function fullsite_patterner_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( '[In the head] You can add a "custom HTML" widget with + and insert it in the head of the page. Enter and update google tags, JavaScript tags, etc.', 'fullsite-patterner' ),
			'id'            => 'fullsite_patterner_head',
			'before_widget' => '',
			''              => '',
		)
	);

	register_sidebar(
		array(
			'name'          => __( '[Length of excerpt]Add the "Custom HTML" widget with +, enter the count of excerpt', 'fullsite-patterner' ),
			'id'            => 'fullsite_patterner_excerpt',
			'before_widget' => '',
			'after_widget'  => '',
		)
	);

}
add_action( 'widgets_init', 'fullsite_patterner_widgets_init' );
