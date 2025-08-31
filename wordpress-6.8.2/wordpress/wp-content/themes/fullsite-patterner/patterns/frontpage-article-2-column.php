<?php
/**
 *
 * Title: frontpage-article-2-column
 * Slug: fullsite-patterner/frontpage-article-2-column
 * Categories: fullsite-patterner/article
 * Block types: core/group
 *
 * @package    WordPress
 * @subpackage FullSite-Patterner
 */

?>
<!-- wp:group {"tagName":"article","lock":{"move":true,"remove":true},"className":"container-fluid","layout":{"type":"default"}} -->
<article id="article-fsp" class="wp-block-group container-fluid"><!-- wp:heading {"level":1} -->
<h1>FullSite-Patterner</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'WordPress block theme for full site editing that can replace over 100 site patterns', 'fullsite-patterner' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"fullsite-patterner/menu-3-column-pickup","theme":"fullsite-patterner"} /-->

<!-- wp:query {"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":2},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:heading -->
<h2><?php esc_html_e( 'New article', 'fullsite-patterner' ); ?></h2>
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
<!-- /wp:query --></article>
<!-- /wp:group -->
