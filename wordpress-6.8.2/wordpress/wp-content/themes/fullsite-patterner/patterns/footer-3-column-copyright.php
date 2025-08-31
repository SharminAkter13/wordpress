<?php
/**
 *
 * Title: Footer-3column-copyright
 * Slug: fullsite-patterner/footer-3-column-copyright
 * Categories: fullsite-patterner/footer
 * Block types: core/group
 *
 * @package    WordPress
 * @subpackage FullSite-Patterner
 */

?>
<!-- wp:group {"className":"fsp-footer container-fluid","layout":{"type":"default"}} -->
<div id="footer-3column-fsp" class="wp-block-group fsp-footer container-fluid"><!-- wp:group {"lock":{"move":true,"remove":true},"className":"row","layout":{"type":"default"}} -->
<div class="wp-block-group row"><!-- wp:heading {"textAlign":"left","textColor":"black","className":"is-style-decoration-overunderline"} -->
<h2 class="wp-block-heading has-text-align-left is-style-decoration-overunderline has-black-color has-text-color">ABOUT US</h2>
<!-- /wp:heading -->

<!-- wp:group {"lock":{"move":true,"remove":true},"className":"col-sm-12 col-md-6 col-lg-4","layout":{"type":"default"}} -->
<div id="footer-left-fsp" class="wp-block-group col-sm-12 col-md-6 col-lg-4"><!-- wp:heading {"textAlign":"left","level":3,"textColor":"black"} -->
<h3 class="wp-block-heading has-text-align-left has-black-color has-text-color">forest cafe</h3>
<!-- /wp:heading -->

<!-- wp:social-links {"iconColor":"mydeep","iconColorValue":"#434b56","size":"has-large-icon-size","className":"is-style-logos-only","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-large-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->

<!-- wp:social-link {"url":"https://twitter.com/home?lang=ja","service":"twitter"} /-->

<!-- wp:social-link {"url":"https://www.instagram.com/","service":"instagram"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:spacer {"height":"5px"} -->
<div style="height:5px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

</div>
<!-- /wp:group -->

<!-- wp:group {"lock":{"move":true,"remove":true},"className":"col-sm-12 col-md-6 col-lg-4","layout":{"type":"default"}} -->
<div id="footer-right-fsp" class="wp-block-group col-sm-12 col-md-6 col-lg-4"><!-- wp:heading {"textAlign":"left","level":3,"textColor":"black"} -->
<h3 class="wp-block-heading has-text-align-left has-black-color has-text-color">ACCESS</h3>
<!-- /wp:heading -->

<!-- wp:group {"className":" access-gmap","layout":{"type":"constrained"}} -->
<div class="wp-block-group access-gmap"><!-- wp:html -->
<div>
</div>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"lock":{"move":true,"remove":true},"className":"col-sm-12 col-md-12 col-lg-4","layout":{"type":"default"}} -->
<div id="footer-right-fsp" class="wp-block-group col-sm-12 col-md-12 col-lg-4"><!-- wp:heading {"textAlign":"left","level":3,"textColor":"black"} -->
<h3 class="wp-block-heading has-text-align-left has-black-color has-text-color">CATEGORY</h3>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:categories /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"lock":{"move":true,"remove":true},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"center","textColor":"black"} -->
<p class="has-text-align-center has-black-color has-text-color"><a href="">privacy policy</a> | <a href="">terms of use</a> | <a href="">agreement</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","lock":{"move":false,"remove":false},"backgroundColor":"my-deep","textColor":"white","className":"fsp-copyright"} -->
<p class="has-text-align-center fsp-copyright has-white-color has-my-deep-background-color has-text-color has-background" id="copyright-fsp">Copyright <?php bloginfo( 'name' ); ?> All Rights Reserved</p>
<!-- /wp:paragraph -->
