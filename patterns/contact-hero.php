<?php
/**
 * Title: Contact Hero
 * Slug: upglobalnetwork/contact-hero
 * Categories: upglobalnetwork
 */
$img = esc_url( get_template_directory_uri() . '/assets/images/contact/hero.jpg' );
?>
<!-- wp:cover {"url":"<?php echo $img; ?>","dimRatio":70,"customOverlayColor":"#000e1c","isUserOverlayColor":true,"minHeight":520,"align":"full","className":"up-hero up-hero--short","layout":{"type":"constrained","contentSize":"768px","justifyContent":"left"}} -->
<div class="wp-block-cover alignfull up-hero up-hero--short" style="min-height:520px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim" style="background-color:#000e1c"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo $img; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
	<!-- wp:paragraph {"className":"up-eyebrow up-eyebrow--white"} -->
	<p class="up-eyebrow up-eyebrow--white">Reach Out</p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"level":1} -->
	<h1 class="wp-block-heading">Get in Touch</h1>
	<!-- /wp:heading -->
	<!-- wp:paragraph -->
	<p>We're here to facilitate global progress through meaningful connection. Whether you're a partner, donor, or mission worker, your voice is essential to our network.</p>
	<!-- /wp:paragraph -->
</div></div>
<!-- /wp:cover -->
