<?php
/**
 * Title: quote-box-mark
 * Slug: fullsite-patterner/quote-box-mark
 * Categories: fullsite-patterner/quote-box
 * Block types: core/group
 *
 * @package    WordPress
 * @subpackage FullSite-Patterner
 */

?>
<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|my-brown","width":"1px"},"bottom":{"color":"var:preset|color|my-brown","width":"1px"}}},"className":"row","layout":{"type":"default"}} -->
<div class="wp-block-group row" style="border-top-color:var(--wp--preset--color--my-brown);border-top-width:1px;border-bottom-color:var(--wp--preset--color--my-brown);border-bottom-width:1px"><!-- wp:group {"className":"col-sm-1 col-md-1 col-lg-1 d-md-block d-none","layout":{"type":"default"}} -->
<div class="wp-block-group col-sm-1 col-md-1 col-lg-1 d-md-block d-none"><!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"col-sm-1 col-md-1 col-lg-1","layout":{"type":"default"}} -->
<div class="wp-block-group col-sm-1 col-md-1 col-lg-1"><!-- wp:paragraph {"backgroundColor":"my-brown","textColor":"my-white"} -->
<p class="has-my-white-color has-my-brown-background-color has-text-color has-background"><strong>”</strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"col-sm-9 col-md-9 col-lg-9","layout":{"type":"default"}} -->
<div class="wp-block-group col-sm-9 col-md-9 col-lg-9"><!-- wp:paragraph {"backgroundColor":"my-light-blue"} -->
<p class="has-my-light-blue-background-color has-background">text text text text text text text text text text<br>text text text text text text text text text text<br>text text text text text text text text text text<br>text text text text text text text text text text<br>text text text text text text text text text text</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"right"} -->
<p class="has-text-align-right">reference source</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"col-sm-1 col-md-1 col-lg-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group col-sm-1 col-md-1 col-lg-1"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
