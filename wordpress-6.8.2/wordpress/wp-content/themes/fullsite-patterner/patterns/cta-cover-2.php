<?php
/**
 * Title: cta-cover-2
 * Slug: fullsite-patterner/cta-cover-2
 * Categories: fullsite-patterner/cta
 * Block types: core/group
 *
 * @package    WordPress
 * @subpackage FullSite-Patterner
 */

?>
<!-- wp:group {"layout":{"type":"default"}} -->
<div id="cta-2-cover-fsp" class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns" id="cover-rr"><!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/assets/images/menu1.jpg' ); ?>","dimRatio":50,"contentPosition":"center center","isDark":false} -->
<div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/menu1.jpg' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"left","textColor":"my-white","className":"display-5"} -->
<p class="has-text-align-left display-5 has-my-white-color has-text-color">FullSite-Patterner</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/assets/images/mainimg.jpg' ); ?>","dimRatio":50,"isDark":false} -->
<div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mainimg.jpg' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"enter the title...","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"right","textColor":"my-purple"} -->
<p class="has-text-align-right has-my-purple-color has-text-color"><?php esc_html_e( 'WordPress block theme for full site editing that can replace over 100 site', 'fullsite-patterner' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","verticalAlignment":"bottom","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"my-dark-blue","textColor":"my-white","style":{"border":{"radius":"30px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-my-white-color has-my-dark-blue-background-color has-text-color has-background has-text-align-center wp-element-button" style="border-radius:30px"><?php esc_html_e( '「FullSite-Patterner」Document download', 'fullsite-patterner' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
