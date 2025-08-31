<?php
/**
 *
 * Title: page-article-2-column
 * Slug: fullsite-patterner/page-article-2-column
 * Categories: fullsite-patterner/article
 * Block types: core/group
 *
 * @package    WordPress
 * @subpackage FullSite-Patterner
 */

?>
<!-- wp:group {"tagName":"article","lock":{"move":true,"remove":true},"className":"container-fluid","layout":{"type":"default"}} -->
<article id="article-fsp" class="wp-block-group container-fluid"><!-- wp:post-title {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"100","fontSize":"30px"}},"textColor":"black","className":"h1 is-style-decoration-underline"} /-->

<!-- wp:group {"tagName":"section","lock":{"move":true,"remove":true},"style":{"border":{"radius":"8px"}},"backgroundColor":"my-light-blue","layout":{"type":"default"}} -->
<section id="section-fsp" class="wp-block-group has-my-light-blue-background-color has-background" style="border-radius:8px"><!-- wp:post-date /-->

<!-- wp:post-featured-image /-->

<!-- wp:post-content /--></section>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"fullsite-patterner/menu-3-column-pickup","theme":"fullsite-patterner"} /-->

</article>
<!-- /wp:group -->
