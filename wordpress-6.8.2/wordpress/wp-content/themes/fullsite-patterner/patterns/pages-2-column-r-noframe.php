<?php
/**
 *
 * Title: Page-2column-R-noframe
 * Slug: fullsite-patterner/page-2column-r-noframe
 * Categories: fullsite-patterner/2-r-noframe
 * Block types: core/group
 *
 * @package    WordPress
 * @subpackage FullSite-Patterner
 */

?>
<!-- wp:group {"lock":{"move":true,"remove":false},"layout":{"type":"default"}} -->
<div id="Page-2-R-noframe" class="wp-block-group"><!-- wp:template-part {"slug":"header-navbar","theme":"fullsite-patterner","area":"header"} /-->

<!-- wp:group {"tagName":"main","lock":{"move":true,"remove":true},"className":"fsp-main"} -->
<main id="main-fsp" class="wp-block-group fsp-main"><!-- wp:spacer {"height":"120px"} -->
<div style="height:120px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:group {"lock":{"move":true,"remove":true},"className":"backimg","layout":{"type":"default"}} -->
<div id="noframe-fsp" class="wp-block-group fsp-noframe row"><!-- wp:group {"lock":{"move":true,"remove":true},"className":"fsp-left col-sm-12 col-md-9 col-lg-9","layout":{"type":"default"}} -->
<div id="left-fsp" class="wp-block-group fsp-left col-sm-12 col-md-9 col-lg-9">

<!-- wp:template-part {"slug":"page-article-2-column","theme":"fullsite-patterner"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"lock":{"move":true,"remove":true},"backgroundColor":"my-watery-blue","className":"fsp-side-right col-sm-12 col-md-3 col-lg-3","layout":{"type":"default"}} -->
<div id="side-right-fsp" class="wp-block-group fsp-side-right col-sm-12 col-md-3 col-lg-3 has-my-watery-blue-background-color has-background"><!-- wp:template-part {"slug":"sidebar","lock":{"move":false,"remove":false},"theme":"fullsite-patterner"} /--></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-2-column","theme":"fullsite-patterner","area":"footer"} /--></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-copyright","theme":"fullsite-patterner","area":"footer"} /--></main>
<!-- /wp:group --></div>
<!-- /wp:group -->
