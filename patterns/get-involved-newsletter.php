<?php
/**
 * Title: Get Involved Newsletter
 * Slug: upglobalnetwork/get-involved-newsletter
 * Categories: upglobalnetwork
 */
?>
<!-- wp:group {"align":"full","className":"up-newsletter","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull up-newsletter">
	<!-- wp:group {"className":"up-newsletter__grid","layout":{"type":"default"}} -->
	<div class="wp-block-group up-newsletter__grid">
		<!-- wp:group {"className":"up-newsletter__copy","layout":{"type":"default"}} -->
		<div class="wp-block-group up-newsletter__copy">
			<!-- wp:heading {"level":2} -->
			<h2 class="wp-block-heading">Stay Informed</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Get monthly stories of impact, prayer needs, and news from the field delivered to your inbox.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:html -->
		<div class="up-newsletter__form-wrap">
			<form class="up-newsletter__form" method="get" action="#">
				<input type="email" name="email" placeholder="Email Address" aria-label="Email Address" />
				<button class="up-btn up-btn--olive" type="submit">Subscribe</button>
			</form>
			<p class="up-newsletter__note">By subscribing, you agree to our privacy policy.</p>
		</div>
		<!-- /wp:html -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
