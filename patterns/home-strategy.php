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
	<!-- wp:columns {"verticalAlignment":"center","className":"up-strategy__grid"} -->
	<div class="wp-block-columns are-vertically-aligned-center up-strategy__grid">
		<!-- wp:column {"width":"50%","className":"up-strategy__copy"} -->
		<div class="wp-block-column up-strategy__copy" style="flex-basis:50%">
			<!-- wp:heading {"level":2} -->
			<h2 class="wp-block-heading">A Strategy Built for<br /><em>Permanence</em></h2>
			<!-- /wp:heading -->

			<!-- wp:group {"className":"up-feature-list","layout":{"type":"default"}} -->
			<div class="wp-block-group up-feature-list">
				<!-- wp:group {"className":"up-feature","layout":{"type":"default"}} -->
				<div class="wp-block-group up-feature">
					<!-- wp:html -->
					<span class="up-feature__icon" aria-hidden="true"><img src="<?php echo esc_url( $uri . '/assets/images/shared/icons/people.svg' ); ?>" alt="" width="24" height="24" /></span>
					<!-- /wp:html -->
					<!-- wp:group {"className":"up-feature__body","layout":{"type":"default"}} -->
					<div class="wp-block-group up-feature__body">
						<!-- wp:heading {"level":4} -->
						<h4 class="wp-block-heading">Indigenous Leadership</h4>
						<!-- /wp:heading -->
						<!-- wp:paragraph -->
						<p>We empower leaders who are native to the context, ensuring the Gospel is not seen as a foreign import.</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"up-feature","layout":{"type":"default"}} -->
				<div class="wp-block-group up-feature">
					<!-- wp:html -->
					<span class="up-feature__icon" aria-hidden="true"><img src="<?php echo esc_url( $uri . '/assets/images/shared/icons/network.svg' ); ?>" alt="" width="24" height="24" /></span>
					<!-- /wp:html -->
					<!-- wp:group {"className":"up-feature__body","layout":{"type":"default"}} -->
					<div class="wp-block-group up-feature__body">
						<!-- wp:heading {"level":4} -->
						<h4 class="wp-block-heading">Multiplication Logic</h4>
						<!-- /wp:heading -->
						<!-- wp:paragraph -->
						<p>Our focus is on creating reproducible models that allow faith communities to grow exponentially.</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"up-feature","layout":{"type":"default"}} -->
				<div class="wp-block-group up-feature">
					<!-- wp:html -->
					<span class="up-feature__icon" aria-hidden="true"><img src="<?php echo esc_url( $uri . '/assets/images/shared/icons/shield.svg' ); ?>" alt="" width="24" height="24" /></span>
					<!-- /wp:html -->
					<!-- wp:group {"className":"up-feature__body","layout":{"type":"default"}} -->
					<div class="wp-block-group up-feature__body">
						<!-- wp:heading {"level":4} -->
						<h4 class="wp-block-heading">Holistic Transformation</h4>
						<!-- /wp:heading -->
						<!-- wp:paragraph -->
						<p>Gospel proclamation is paired with tangible demonstrations of love, addressing the whole person.</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-up-ghost"} -->
				<div class="wp-block-button is-style-up-ghost"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/our-strategy/' ) ); ?>">Read our whitepaper</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%","className":"up-strategy__media"} -->
		<div class="wp-block-column up-strategy__media" style="flex-basis:50%">
			<!-- wp:image {"sizeSlug":"large","className":"up-strategy__image"} -->
			<figure class="wp-block-image size-large up-strategy__image"><img src="<?php echo esc_url( $uri . '/assets/images/home/strategy.jpg' ); ?>" alt="Historic architecture representing lasting foundations"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
