<?php
/**
 * Title: Get Involved Newsletter
 * Slug: upglobalnetwork/get-involved-newsletter
 * Categories: upglobalnetwork
 */
?>
<!-- wp:group {"align":"full","className":"up-newsletter","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull up-newsletter">
	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center">Stay Informed</h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">Get monthly stories of impact, prayer needs, and news from the field delivered to your inbox.</p>
	<!-- /wp:paragraph -->
	<!-- wp:html -->
	<form class="up-newsletter__form" method="get" action="#">
		<input type="email" name="email" placeholder="Email Address" aria-label="Email Address" />
		<button class="up-btn up-btn--wide" type="submit">Subscribe</button>
	</form>
	<!-- /wp:html -->
	<!-- wp:paragraph {"align":"center","className":"up-newsletter__note"} -->
	<p class="has-text-align-center up-newsletter__note">By subscribing, you agree to our privacy policy.</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
