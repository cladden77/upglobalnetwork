<?php
/**
 * Title: Strategy Hero
 * Slug: upglobalnetwork/strategy-hero
 * Categories: upglobalnetwork
 */
$img = esc_url( get_template_directory_uri() . '/assets/images/strategy/hero.jpg' );
?>
<!-- wp:cover {"url":"<?php echo $img; ?>","dimRatio":70,"customOverlayColor":"#000e1c","isUserOverlayColor":true,"minHeight":640,"align":"full","className":"up-hero up-hero--page","layout":{"type":"constrained","contentSize":"768px","justifyContent":"left"}} -->
<div class="wp-block-cover alignfull up-hero up-hero--page" style="min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim" style="background-color:#000e1c"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo $img; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
	<!-- wp:paragraph {"className":"up-eyebrow"} -->
	<p class="up-eyebrow">OUR STRATEGIC FRAMEWORK</p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"level":1} -->
	<h1 class="wp-block-heading">Focusing on the<br />Unreached.</h1>
	<!-- /wp:heading -->
	<!-- wp:paragraph -->
	<p>We exist to reach the most remote, neglected, and forgotten communities where the message of Jesus is not yet known.</p>
	<!-- /wp:paragraph -->
	<!-- wp:buttons -->
	<div class="wp-block-buttons">
		<!-- wp:button {"className":"is-style-up-outline"} -->
		<div class="wp-block-button is-style-up-outline"><a class="wp-block-button__link wp-element-button" href="#focus">Explore the Strategy</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div></div>
<!-- /wp:cover -->
