<?php
/**
 *
 * Title: Index-1-column-frame
 * Slug: fullsite-patterner/index-1-column-frame
 * Categories: fullsite-patterner/1-frame
 * Block types: core/group
 *
 * @package    WordPress
 * @subpackage FullSite-Patterner
 */

?>
<!-- wp:group {"lock":{"move":true,"remove":false},"layout":{"type":"default"}} -->
<div id="Index-1-frame" class="wp-block-group"><!-- wp:template-part {"slug":"header-navbar","theme":"fullsite-patterner","area":"header","lock":{"move":false,"remove":false}} /-->

<!-- wp:group {"tagName":"main","lock":{"move":true,"remove":true},"className":"fsp-main"} -->
<main id="main-fsp" class="wp-block-group fsp-main">
<!-- wp:spacer {"height":"120px"} -->
<div style="height:120px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --><!-- wp:group {"lock":{"move":true,"remove":true},"className":"fsp-frame","layout":{"type":"default"}} -->
<div id="frame-fsp" class="wp-block-group fsp-frame"><!-- wp:template-part {"slug":"index-article-1-column","theme":"fullsite-patterner","area":"uncategorized","lock":{"move":true,"remove":true}} /-->

<!-- wp:template-part {"slug":"footer-2-column-copyright","theme":"fullsite-patterner","area":"footer"} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group --></div>
<!-- /wp:group -->
