<?php
/**
 *
 * Title: carousel-slide
 * Slug: fullsite-patterner/carousel-slide
 * Categories: fullsite-patterner/carousel
 * Block types: core/pattern
 *
 * @package    WordPress
 * @subpackage FullSite-Patterner
 */

?>
<!-- wp:group {"layout":{"type":"default"}} -->
<div id="carousel-slide-fsp" class="wp-block-group"><!-- wp:html {"lock":{"move":true,"remove":true}} -->
<div id="fsp-carousel-slide" class="carousel slide" data-bs-ride="carousel" data-interval="3000">
<!-- /wp:html -->

<!-- wp:group {"lock":{"move":true,"remove":true},"className":"carousel-inner","layout":{"type":"default"}} -->
<div class="wp-block-group carousel-inner"><!-- wp:group {"lock":{"move":true,"remove":false},"className":"carousel-item active","layout":{"type":"default"}} -->
<div id="slide1-carousel-slide-fsp" class="wp-block-group carousel-item active"><!-- wp:image -->
<figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mainimg01.jpg' ); ?>" alt="First slide"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"lock":{"move":true,"remove":false},"className":"carousel-item","layout":{"type":"default"}} -->
<div id="slide2-carousel-slide-fsp" class="wp-block-group carousel-item"><!-- wp:image -->
<figure class="wp-block-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mainimg02.jpg' ); ?>" alt="First slide"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"lock":{"move":true,"remove":false},"className":"carousel-item","layout":{"type":"default"}} -->
<div id="slide3-carousel-slide-fsp" class="wp-block-group carousel-item"><!-- wp:image {"sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mainimg03.jpg' ); ?>" alt="First slide"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div>
<button class="carousel-control-prev" type="button" data-bs-target="#fsp-carousel-slide" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
<button class="carousel-control-next" type="button" data-bs-target="#fsp-carousel-slide" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></button>
</div>
<!-- /wp:html -->

<!-- wp:html {"lock":{"move":true,"remove":true}} -->
</div>
<!-- /wp:html --></div>
<!-- /wp:group -->
