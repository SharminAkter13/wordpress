<?php
/**
 * Title: accordion-1
 * Slug: fullsite-patterner/accordion-1
 * Categories: fullsite-patterner/accordion
 * Block types: core/group
 *
 * @package    WordPress
 * @subpackage FullSite-Patterner
 */

?>
<!-- wp:group {"className":"accordion","layout":{"type":"default"}} -->
<div id="accordion01" class="wp-block-group accordion"><!-- wp:group {"className":"accordion-item","layout":{"type":"default"}} -->
<div class="wp-block-group accordion-item"><!-- wp:html -->
<h2 class="accordion-header">
<button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#ac01">accordion-button</button><br />
</h2>
<div id="ac01" class="wp-block-group accordion-collapse collapse" data-bs-parent="#accordion01">
<div class="accordion-body">
accordion-body#ac01<br />
accordion-body#ac01<br />
accordion-body#ac01
</div>
</div>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
