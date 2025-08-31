<?php
/**
 *
 * Title: search-article-1-column
 * Slug: fullsite-patterner/search-article-1-column
 * Categories: fullsite-patterner/article
 * Block types: core/group
 *
 * @package    WordPress
 * @subpackage FullSite-Patterner
 */

?>
<!-- wp:group {"tagName":"article","lock":{"move":true,"remove":true},"className":"container-fluid","layout":{"type":"default"}} -->
<article id="article-fsp" class="wp-block-group container-fluid"><!-- wp:query-title {"type":"search","style":{"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"200"}},"textColor":"black","className":"is-style-decoration-underline"} /-->

<!-- wp:query {"query":{"perPage":12,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true},"displayLayout":{"type":"flex","columns":4},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template -->
<!-- wp:group {"tagName":"section","style":{"spacing":{"blockGap":"0","padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}},"border":{"radius":"8px"}},"backgroundColor":"my-light-blue","className":"fsp-whatsnew","layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
<section class="wp-block-group fsp-whatsnew has-my-light-blue-background-color has-background" style="border-radius:8px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:post-title {"level":3,"isLink":true,"className":"fsp-new is-style-decoration-underline"} /-->

<!-- wp:post-date /-->

<!-- wp:post-featured-image /-->

<!-- wp:post-excerpt /-->

<!-- wp:read-more /--></section>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","className":"alignwide","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search...","width":600,"widthUnit":"px","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"align":"center","borderColor":"foreground"} /-->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:template-part {"slug":"menu-4-column-1","theme":"fullsite-patterner"} /-->

<!-- wp:template-part {"slug":"menu-4-column-2","theme":"fullsite-patterner"} /--></article>
<!-- /wp:group -->
