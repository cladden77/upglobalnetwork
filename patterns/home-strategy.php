<?php
/**
 * Title: Home Strategy Overview
 * Slug: upglobalnetwork/home-strategy
 * Categories: upglobalnetwork
 */
$uri = get_template_directory_uri();
?>
<!-- wp:group {"align":"full","className":"up-strategy","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull up-strategy">
	<!-- wp:columns {"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":2} -->
			<h2 class="wp-block-heading">A Strategy Built for<br /><em>Permanence</em></h2>
			<!-- /wp:heading -->

			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading">Indigenous Leadership</h4>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>We empower leaders who are native to the context, ensuring the Gospel is not seen as a foreign import.</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading">Multiplication Logic</h4>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Our focus is on creating reproducible models that allow faith communities to grow exponentially.</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading">Holistic Transformation</h4>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Gospel proclamation is paired with tangible demonstrations of love, addressing the whole person.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-up-ghost"} -->
				<div class="wp-block-button is-style-up-ghost"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/our-strategy/' ) ); ?>">Read our whitepaper</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"large"} -->
			<figure class="wp-block-image size-large"><img src="<?php echo esc_url( $uri . '/assets/images/home/strategy.jpg' ); ?>" alt="Marketplace in an unreached region"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
