<?php
/**
 * Title: frontpage-article-1-column
 * Slug: fullsite-patterner/frontpage-article-1-column
 * Categories: fullsite-patterner/article
 * Block types: core/group
 *
 * @package    WordPress
 * @subpackage FullSite-Patterner
 */

?>
<!-- wp:group {"tagName":"article","lock":{"move":true,"remove":true},"className":"container-fluid","layout":{"type":"default"}} -->
<article id="article-fsp" class="wp-block-group container-fluid"><!-- wp:group {"className":"container-fluid","layout":{"type":"default"}} -->
<div class="wp-block-group container-fluid"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">FullSite-Patterner</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'WordPress block theme for full site editing that can replace over 100 site patterns', 'fullsite-patterner' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->


<!-- wp:template-part {"slug":"menu-4-column-1","theme":"fullsite-patterner"} /-->
<!-- wp:template-part {"slug":"menu-4-column-2","theme":"fullsite-patterner"} /-->

<!-- wp:query {"queryId":20,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide","className":"fsp-newarticle"} -->
<div class="wp-block-query alignwide fsp-newarticle"><!-- wp:heading {"className":"is-style-decoration-line"} -->
<h2 class="wp-block-heading is-style-decoration-line">New article</h2>
<!-- /wp:heading -->

<!-- wp:post-template -->
<!-- wp:group {"tagName":"section","style":{"spacing":{"blockGap":"0","padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}},"border":{"radius":"8px"}},"backgroundColor":"my-light-blue","className":"fsp-whatsnew","layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
<section class="wp-block-group fsp-whatsnew has-my-light-blue-background-color has-background" style="border-radius:8px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:post-title {"level":3,"isLink":true,"className":"fsp-new is-style-decoration-underline"} /-->

<!-- wp:post-date /-->

<!-- wp:post-featured-image /-->

<!-- wp:post-excerpt /-->

<!-- wp:read-more /--></section>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:pattern {"slug":"fullsite-patterner/menu-4-column-pickup","theme":"fullsite-patterner"} /-->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
</article>
<!-- /wp:group -->
