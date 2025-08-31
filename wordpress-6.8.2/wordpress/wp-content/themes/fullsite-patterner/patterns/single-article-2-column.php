<?php
/**
 *
 * Title: single-article-2-column
 * Slug: fullsite-patterner/single-article-2-column
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
<section id="section-fsp" class="wp-block-group has-my-light-blue-background-color has-background" style="border-radius:8px"><!-- wp:post-featured-image /-->

<!-- wp:post-content /-->

<!-- wp:post-date /-->

<!-- wp:post-author /-->

<!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-terms {"term":"post_tag"} /-->

<!-- wp:post-navigation-link {"type":"previous"} /-->

<!-- wp:post-navigation-link /-->

<!-- wp:comments -->
<div class="wp-block-comments"><!-- wp:comments-title /-->

<!-- wp:comment-template -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"40px"} -->
<div class="wp-block-column" style="flex-basis:40px"><!-- wp:avatar {"size":40,"style":{"border":{"radius":"20px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:comment-author-name {"fontSize":"small"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:comment-date {"fontSize":"small"} /-->

<!-- wp:comment-edit-link {"fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:comment-content /-->

<!-- wp:comment-reply-link {"fontSize":"small"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination -->
<!-- wp:comments-pagination-previous /-->

<!-- wp:comments-pagination-numbers /-->

<!-- wp:comments-pagination-next /-->
<!-- /wp:comments-pagination -->

<!-- wp:post-comments-form /--></div>
<!-- /wp:comments --></section>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"fullsite-patterner/menu-3-column-pickup","theme":"fullsite-patterner"} /-->

</article>
<!-- /wp:group -->
