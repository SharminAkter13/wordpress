<?php
/**
 * Title: cta-cover-1
 * Slug: fullsite-patterner/cta-cover-1
 * Categories: fullsite-patterner/cta
 * Block types: core/group
 *
 * @package    WordPress
 * @subpackage FullSite-Patterner
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/assets/images/menu1.jpg' ); ?>' ) ); ?\u003e","dimRatio":80,"overlayColor":"secondary","align":"full"} -->
<div class="wp-block-cover alignfull" id="cta-cover-fsp"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/menu1.jpg' ); ?>' ) ); ?&gt;" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"enter the title...","textColor":"my-black","className":"display-6"} -->
<p class="has-text-align-center display-6 has-my-black-color has-text-color"><?php esc_html_e( 'WordPress block theme for full site editing that can replace over 100 site', 'fullsite-patterner' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","verticalAlignment":"bottom","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"my-dark-blue","textColor":"my-white","style":{"border":{"radius":"50px"}},"fontSize":"extra-large"} -->
<div class="wp-block-button has-custom-font-size has-extra-large-font-size"><a class="wp-block-button__link has-my-white-color has-my-dark-blue-background-color has-text-color has-background has-text-align-center wp-element-button" style="border-radius:50px"><?php esc_html_e( '「FullSite-Patterner」Document download', 'fullsite-patterner' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button /--></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->
