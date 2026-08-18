<?php
/**
 * Title: Get Involved Hero
 * Slug: upglobalnetwork/get-involved-hero
 * Categories: upglobalnetwork
 */
$img = esc_url( get_template_directory_uri() . '/assets/images/get-involved/hero.jpg' );
?>
<!-- wp:cover {"url":"<?php echo $img; ?>","dimRatio":70,"customOverlayColor":"#000e1c","isUserOverlayColor":true,"minHeight":640,"align":"full","className":"up-hero up-hero--page","layout":{"type":"constrained","contentSize":"768px","justifyContent":"left"}} -->
<div class="wp-block-cover alignfull up-hero up-hero--page" style="min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim" style="background-color:#000e1c"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo $img; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
	<!-- wp:heading {"level":1} -->
	<h1 class="wp-block-heading">How You Can Join<br />the Mission</h1>
	<!-- /wp:heading -->
	<!-- wp:paragraph -->
	<p>Every movement begins with a choice to step forward. Join a global network dedicated to making Jesus known where He is not yet known.</p>
	<!-- /wp:paragraph -->
	<!-- wp:buttons -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#pathways">Explore Pathways</a></div>
		<!-- /wp:button -->
		<!-- wp:button {"className":"is-style-up-outline"} -->
		<div class="wp-block-button is-style-up-outline"><a class="wp-block-button__link wp-element-button" href="#impact">Watch the Impact</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div></div>
<!-- /wp:cover -->
