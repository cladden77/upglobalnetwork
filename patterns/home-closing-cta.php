<?php
/**
 * Title: Home Closing CTA
 * Slug: upglobalnetwork/home-closing-cta
 * Categories: upglobalnetwork
 */
?>
<!-- wp:group {"align":"full","className":"up-cta-band","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull up-cta-band">
	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center">Ready to make an<br /><em>eternal impact</em>?</h2>
	<!-- /wp:heading -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/give/' ) ); ?>">Give to the network</a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-up-outline"} -->
		<div class="wp-block-button is-style-up-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Speak with a mobilizer</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
