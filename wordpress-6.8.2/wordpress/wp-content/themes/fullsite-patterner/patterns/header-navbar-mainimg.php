<?php
/**
 *
 * Title: header-navbar-mainimg
 * Slug: fullsite-patterner/header-navbar-mainimg
 * Categories: fullsite-patterner/header
 * Block types: core/navigation
 *
 * @package    WordPress
 * @subpackage FullSite-Patterner
 */

?>
<!-- wp:pattern {"slug":"fullsite-patterner/pagetop","theme":"fullsite-patterner","lock":{"move":true,"remove":false}} /-->

<!-- wp:group {"className":"navbar navbar-expand-md container-fluid navbar-header navbar-static-top navbar-fixed-top","layout":{"type":"default"}} -->
<div id="header-navbar" class="wp-block-group navbar navbar-expand-md container-fluid navbar-header navbar-static-top navbar-fixed-top"><!-- wp:group {"lock":{"move":false,"remove":false},"layout":{"type":"default"}} -->
<div id="site-logo" class="wp-block-group"><!-- wp:group {"className":"site-logo","layout":{"type":"default"}} -->
<div class="wp-block-group site-logo"><!-- wp:site-logo {"width":320,"shouldSyncIcon":false} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"templateLock":false,"lock":{"move":false,"remove":false},"className":"navbar navbar-expand-md navbar-light bg-light","layout":{"type":"default"}} -->
<div id="navbar-container" class="wp-block-group navbar navbar-expand-md navbar-light bg-light"><!-- wp:html -->
<div><button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button></div>
<!-- /wp:html -->

<!-- wp:group {"className":"collapse navbar-collapse","layout":{"type":"default"}} -->
<div id="navbar" class="wp-block-group collapse navbar-collapse"><!-- wp:list {"className":"nav navbar-nav","fontSize":"large"} -->
<ul id="navigation-fsp" class="nav navbar-nav has-large-font-size"><!-- wp:list-item {"className":"nav-item"} -->
<li class="nav-item"><a class="nav-link" href="">■HOME■</a> </li>
<!-- /wp:list-item -->

<!-- wp:list-item {"className":"nav-item"} -->
<li class="nav-item"><a class="nav-link" href="">■ENGLISH■ </a></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"className":"nav-item"} -->
<li class="nav-item"><a class="nav-link" href="">BLOG</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"className":"nav-item"} -->
<li class="nav-item"><a class="nav-link" href="">MAIL</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"lock":{"move":false,"remove":false},"className":"nav-item"} -->
<li class="nav-item"><a class="nav-link" href="">≡SITEMAP</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item {"lock":{"move":false,"remove":false},"className":"nav-item"} -->
<li class="nav-item"><a class="nav-link pagetop-visual" href="#top-fsp"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pagetop.png' ); ?>" alt=""></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"90px"} -->
<div style="height:90px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/assets/images/mainimg.jpg' ); ?>","dimRatio":50,"isDark":false} -->
<div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mainimg.jpg' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-center has-large-font-size">FullSite-Patterner</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'WordPress block theme for full site editing that can replace over 100 site patterns', 'fullsite-patterner' ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->
