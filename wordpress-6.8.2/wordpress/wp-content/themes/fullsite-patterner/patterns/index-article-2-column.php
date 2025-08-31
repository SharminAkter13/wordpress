<?php
/**
 *
 * Title: index-article-2-column
 * Slug: fullsite-patterner/index-article-2-column
 * Categories: fullsite-patterner/article
 * Block types: core/group
 *
 * @package    WordPress
 * @subpackage FullSite-Patterner
 */

?>
<!-- wp:group {"tagName":"article","lock":{"move":true,"remove":true},"className":"container-fluid","layout":{"type":"default"}} -->
<article id="article-fsp" class="wp-block-group container-fluid"><!-- wp:query-title {"type":"archive","textAlign":"left","showPrefix":false,"align":"wide","className":"is-style-decoration-underline"} /-->

<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"displayLayout":{"type":"flex","columns":1},"lock":{"move":true,"remove":true},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide"} -->
<!-- wp:group {"tagName":"section","style":{"border":{"radius":"8px"}},"backgroundColor":"my-light-blue","layout":{"type":"default"}} -->
<section class="wp-block-group has-my-light-blue-background-color has-background" style="border-radius:8px"><!-- wp:post-title {"isLink":true,"align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"200"}},"fontSize":"extra-large"} /-->

<!-- wp:post-date {"isLink":true} /-->

<!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"max(15vw, 30vh)","align":"wide"} /-->

<!-- wp:post-content {"layout":{"type":"default"}} /--></section>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->

<!-- wp:pattern {"slug":"fullsite-patterner/menu-3-column-pickup","theme":"fullsite-patterner"} /-->

</article>
<!-- /wp:group -->
