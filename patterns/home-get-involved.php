<?php
/**
 * Title: Home Get Involved
 * Slug: upglobalnetwork/home-get-involved
 * Categories: upglobalnetwork
 */
$uri = get_template_directory_uri();
?>
<!-- wp:group {"align":"full","className":"up-involved","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull up-involved">
	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center">The Mission Needs You</h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"className":"up-involved__grid"} -->
	<div class="wp-block-columns up-involved__grid">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"up-pathway","layout":{"type":"default"}} -->
			<div class="wp-block-group up-pathway">
				<!-- wp:html -->
				<span class="up-pathway__icon" aria-hidden="true"><img src="<?php echo esc_url( $uri . '/assets/images/shared/icons/pray.svg' ); ?>" alt="" width="48" height="48" /></span>
				<!-- /wp:html -->
				<!-- wp:heading {"textAlign":"center","level":3} -->
				<h3 class="wp-block-heading has-text-align-center">PRAY</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center">Join thousands receiving weekly prayer alerts for specific people groups.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"up-pathway","layout":{"type":"default"}} -->
			<div class="wp-block-group up-pathway">
				<!-- wp:html -->
				<span class="up-pathway__icon" aria-hidden="true"><img src="<?php echo esc_url( $uri . '/assets/images/shared/icons/give.svg' ); ?>" alt="" width="48" height="48" /></span>
				<!-- /wp:html -->
				<!-- wp:heading {"textAlign":"center","level":3} -->
				<h3 class="wp-block-heading has-text-align-center">GIVE</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center">Directly fund the deployment of indigenous pioneers into unreached areas.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"up-pathway","layout":{"type":"default"}} -->
			<div class="wp-block-group up-pathway">
				<!-- wp:html -->
				<span class="up-pathway__icon" aria-hidden="true"><img src="<?php echo esc_url( $uri . '/assets/images/shared/icons/go-serve.svg' ); ?>" alt="" width="48" height="48" /></span>
				<!-- /wp:html -->
				<!-- wp:heading {"textAlign":"center","level":3} -->
				<h3 class="wp-block-heading has-text-align-center">GO &amp; SERVE</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center">Short-term vision trips designed to connect you with our global partners.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/get-involved/' ) ); ?>">Explore ways to get involved</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
