<?php
/**
 * Title: Give Hero
 * Slug: upglobalnetwork/give-hero
 * Categories: upglobalnetwork
 */
$img = esc_url( get_template_directory_uri() . '/assets/images/give/hero.jpg' );
?>
<!-- wp:cover {"url":"<?php echo $img; ?>","dimRatio":70,"customOverlayColor":"#000e1c","isUserOverlayColor":true,"minHeight":640,"align":"full","contentPosition":"left center","className":"up-hero up-hero--page","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull up-hero has-custom-content-position is-position-left-center up-hero--page" style="min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim" style="background-color:#000e1c"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo $img; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
	<!-- wp:paragraph {"className":"up-eyebrow up-eyebrow--white"} -->
	<p class="up-eyebrow up-eyebrow--white">Our Shared Mission</p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"level":1} -->
	<h1 class="wp-block-heading">Invest in the<br />Unreached</h1>
	<!-- /wp:heading -->
	<!-- wp:paragraph -->
	<p>Your resources fuel global initiatives that bring sustainable change to the world's most remote regions. Join a network of conviction.</p>
	<!-- /wp:paragraph -->
	<!-- wp:buttons -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#give">Give Now</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div></div>
<!-- /wp:cover -->
