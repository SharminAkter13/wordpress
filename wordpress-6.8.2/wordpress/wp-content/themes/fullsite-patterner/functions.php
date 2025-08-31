<?php
/**
 *
 * Functions.php
 *
 * Functions for the theme.
 *
 * @category   Components
 * @package    WordPress
 * @subpackage FullSite-Patterner
 */

add_theme_support( 'register_block_style' );
add_theme_support( 'register_block_pattern' );
add_theme_support( 'wp-block-styles' );
add_theme_support( 'align-wide' );
add_theme_support( 'custom-background' );

add_editor_style( 'css/bootstrap.css' );
add_editor_style( 'assets/bootstrap-icons.css' );
add_editor_style( 'style.css' );
add_editor_style( 'css/v1-editors.css' );

remove_theme_support( 'core-block-patterns' );

add_action( 'after_setup_theme', 'fullsite_patterner_theme_setup' );
/** Language file */
function fullsite_patterner_theme_setup() {
	load_theme_textdomain( 'fullsite-patterner', get_template_directory() . '/languages' );
}

/** Load functions files */
get_template_part( 'functions/head-style' );
get_template_part( 'functions/widget' );
get_template_part( 'functions/title-excerpt' );
get_template_part( 'functions/shortcode' );
get_template_part( 'functions/block-styles' );
get_template_part( 'functions/blockpattern' );

/** Load stylesheet and JavaScript */
function fullsite_patterner_add_link_files() {
	wp_enqueue_style( 'fullsite-patterner-bootstrap-style', get_template_directory_uri() . '/css/bootstrap.css', array(), 5.3, false );
	wp_enqueue_style( 'fullsite-patterner-bootstrap-icons-style', get_template_directory_uri() . '/assets/bootstrap-icons.css', array(), 5.0, false );
	wp_enqueue_style( 'fullsite-patterner-style', get_template_directory_uri() . '/style.css', array(), 1, false );
	wp_enqueue_style( 'fullsite-patterner-navigation-style', get_template_directory_uri() . '/css/navigation-style.css', array(), 1, false );
	wp_enqueue_script( 'fullsite-patterner-script', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), 5.3, false );
}
add_action( 'wp_enqueue_style', 'fullsite_patterner_add_link_files' );
add_action( 'wp_enqueue_scripts', 'fullsite_patterner_add_link_files' );

/** FullSite-Patterner add dashboard widgets */
function fullsite_patterner_add_dashboard_widgets() {
	wp_add_dashboard_widget(
		'fullsite_patterner_dashboard_widget',
		'FullSite Patterner',
		'fullsite_patterner_dashboard_widget_function'
	);
}
add_action( 'wp_dashboard_setup', 'fullsite_patterner_add_dashboard_widgets' );

/** FullSite-Patterner dashboard widgets */
function fullsite_patterner_dashboard_widget_function() {
	echo '<ul class="custom_widget">
            <li><a href="https://wordpress.org/themes/fullsite-patterner/"><div class="dashicons dashicons-admin-site"></div><p>WordPress theme directory</p></a></li>
            <li><a href="https://full-site-patterner.com/en/"><div class="dashicons dashicons-admin-site"></div><p>FullSite-Patterner official site</p></a></li>
            <li><a href="https://full-site-patterner.com/en/download/"><div class="dashicons dashicons-update"></div><p>FullSite-Patterner-v1(paid edition) download</p></a></li>
          </ul>';
}
