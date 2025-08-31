<?php
/**
 *
 * Title: Index-1-column-noframe
 * Slug: fullsite-patterner/index-1-column-noframe
 * Categories: fullsite-patterner/1-noframe
 * Block types: core/group
 *
 * @package    WordPress
 * @subpackage FullSite-Patterner
 */

?>
<!-- wp:group {"lock":{"move":true,"remove":false},"layout":{"type":"default"}} -->
<div id="Index-1-noframe" class="wp-block-group"><!-- wp:template-part {"slug":"header-navbar","area":"header","theme":"fullsite-patterner"} /-->

<!-- wp:group {"tagName":"main","lock":{"move":true,"remove":true},"className":"fsp-main fsp","layout":{"type":"default"}} -->
<main id="main-fsp" class="wp-block-group fsp-main">
<!-- wp:spacer {"height":"120px"} -->
<div style="height:120px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --><!-- wp:group {"lock":{"move":true,"remove":true},"className":"fsp-noframe","layout":{"type":"default"}} -->
<div id="noframe-fsp" class="wp-block-group fsp-noframe"><!-- wp:template-part {"slug":"index-article-1-column","area":"uncategorized","theme":"fullsite-patterner"} /-->

<!-- wp:template-part {"slug":"footer-2-column","theme":"fullsite-patterner","area":"footer"} /--></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-copyright","theme":"fullsite-patterner","area":"footer"} /--></main>
<!-- /wp:group --></div>
<!-- /wp:group -->
