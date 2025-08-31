<?php
/**
 *
 * Title-excerpt.php
 *
 * Adjust titles, excerpts, and ellipsis
 *
 * @category   Components
 * @package    WordPress
 * @subpackage FullSite-Patterner
 */

defined( 'ABSPATH' ) || exit;

/** Remove characters from archive title */

add_filter(
	'get_the_archive_title',
	function( $title ) {
		if ( is_category() ) {
			$title = single_cat_title( '', false );
		} elseif ( is_tag() ) {
			$title = single_tag_title( '', false );
		} elseif ( is_tax() ) {
			$title = single_term_title( '', false );
		} elseif ( is_post_type_archive() ) {
			$title = post_type_archive_title( '', false );
		} elseif ( is_date() ) {
			$title = get_the_time( 'Y/m' );
		} elseif ( is_search() ) {
			$title = 'Search Result:' . esc_html( get_search_query( false ) );
		} elseif ( is_404() ) {
			$title = '「404」Page Not Found.';
		}
		return $title;
	}
);

/**
 * Adjust the word count of excerpts
 *
 * @param int $length length of excerpt.
 * @return int */
function fullsite_patterner_excerpt_length( $length ) {
	if ( is_admin() ) {
		return $length;
	} elseif ( is_active_sidebar( 'fullsite_patterner_excerpt' ) ) {
		return dynamic_sidebar( 'fullsite_patterner_excerpt' );
	} else {
		return 40;
	}
}
add_filter( 'excerpt_length', 'fullsite_patterner_excerpt_length' );

/**
 * Ellipsis
 *
 * @param string $more ellipsis.
 * @return -- */
function fullsite_patterner_excerpt_more( $more ) {
	if ( is_admin() ) {
		return $more;
	}
	return '…';
}
add_filter( 'excerpt_more', 'fullsite_patterner_excerpt_more' );

/**
 * Title
 *
 * @param string $title length of title.
 * @return Integer */
function fullsite_patterner_titlelimitchar( $title ) {
	if ( mb_strlen( $title ) > 20 && ! ( is_single() ) && ! ( is_category() ) && ! ( is_page() )
	) {
		$title = mb_substr( $title, 0, 20 ) . '…';
	}
	return $title;
}
add_filter( 'the_title', 'fullsite_patterner_titlelimitchar' );
