<?php
/**
 * Title: Layout 2
 * Slug: chimera-master/layout-2
 * Description: 
 * Categories: chimera-layout
 * Keywords: 
 * Viewport Width: 1280
 * Block Types: 
 * Post Types: 
 * Inserter: true
 * Custom Categories: Chimera Layout
 */
register_block_pattern_category( 'chimera-layout', [ 'label' => __( 'Chimera Layout', 'chimera-master' ), 'pm_custom' => true ] );
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","className":"is-style-asterisk"} -->
<h2 class="wp-block-heading has-text-align-center is-style-asterisk">An array of resources</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
<p class="has-text-align-center">Our comprehensive suite of professional services caters to a diverse clientele, ranging from homeowners to commercial developers.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:heading {"level":3,"className":"is-style-asterisk"} -->
<h3 class="wp-block-heading is-style-asterisk">Études Architect App</h3>
<!-- /wp:heading -->

<!-- wp:list {"style":{"typography":{"lineHeight":"1.75"}},"className":"is-style-checkmark-list"} -->
<ul style="line-height:1.75" class="is-style-checkmark-list"><!-- wp:list-item -->
<li>Collaborate with fellow architects.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Showcase your projects.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Experience the world of architecture.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
<figure class="wp-block-image size-large is-style-default"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/patterns/images/1920_1080-1.svg" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
<figure class="wp-block-image size-large is-style-default"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/patterns/images/1920_1080-1.svg" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:heading {"level":3,"className":"is-style-asterisk"} -->
<h3 class="wp-block-heading is-style-asterisk">Études Newsletter</h3>
<!-- /wp:heading -->

<!-- wp:list {"style":{"typography":{"lineHeight":"1.75"}},"className":"is-style-checkmark-list"} -->
<ul style="line-height:1.75" class="is-style-checkmark-list"><!-- wp:list-item -->
<li>A world of thought-provoking articles.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Case studies that celebrate architecture.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Exclusive access to design insights.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
