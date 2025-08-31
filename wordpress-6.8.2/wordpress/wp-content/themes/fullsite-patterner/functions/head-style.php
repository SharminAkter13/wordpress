<?php
/**
 *
 * Head-style.php
 *
 * Tags and styles written in Head
 *
 * @category   Components
 * @package    WordPress
 * @subpackage FullSite-Patterner
 */

defined( 'ABSPATH' ) || exit;

/* Output in head */

add_action(
	'wp_head',
	function() {
		?>

		<?php
		if ( is_active_sidebar( 'fullsite_patterner_head' ) ) {
			?>
			<?php dynamic_sidebar( 'fullsite_patterner_head' ); ?>
				<?php } ?>
<script>
jQuery('a[href^="#"]').not('.remove-class').on('click', function(){
	var Target = jQuery(this.hash);
	var TargetOffset = jQuery(Target).offset().top;
	var Time = 700;
	jQuery('html, body').animate({
		scrollTop: TargetOffset - 20
	}, Time);
	return false;
});
</script>

		<?php
	}
);

?>
