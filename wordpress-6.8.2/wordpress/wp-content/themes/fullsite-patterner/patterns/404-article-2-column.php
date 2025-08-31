<?php
/**
 *
 * Title: 404-article-2-column
 * Slug: fullsite-patterner/404-article-2-column
 * Categories: fullsite-patterner/article
 * Block types: core/group
 *
 * @package    WordPress
 * @subpackage FullSite-Patterner
 */

?>
<!-- wp:group {"tagName":"article","lock":{"move":true,"remove":true},"style":{"border":{"radius":"8px"}},"className":"container-fluid","layout":{"type":"default"}} -->
<article id="article-fsp" class="wp-block-group container-fluid" style="border-radius:8px"><!-- wp:group {"lock":{"move":true,"remove":true},"layout":{"type":"default"}} -->
<div id="404-fsp" class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"200"}},"textColor":"black","className":"is-style-decoration-underline"} -->
<h1 class="has-text-align-center is-style-decoration-underline has-black-color has-text-color" style="font-size:30px;font-style:normal;font-weight:200"><?php esc_html_e( 'Page Not Found.', 'fullsite-patterner' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","textColor":"black","className":"is-style-decoration-underline","fontSize":"medium"} -->
<h2 class="has-text-align-center is-style-decoration-underline has-black-color has-text-color has-medium-font-size"><?php esc_html_e( 'Sorry, please find the desired page using the menu or search.', 'fullsite-patterner' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search...","width":400,"widthUnit":"px","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"align":"center","borderColor":"foreground"} /-->

<!-- wp:spacer {"height":"70px"} -->
<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"fullsite-patterner/menu-3-column-pickup","theme":"fullsite-patterner"} /-->

</article>
<!-- /wp:group -->
