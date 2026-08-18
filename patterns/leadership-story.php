<?php
/**
 * Title: Leadership Story
 * Slug: upglobalnetwork/leadership-story
 * Categories: upglobalnetwork
 */
$uri = get_template_directory_uri();
?>
<!-- wp:group {"align":"full","className":"up-split","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull up-split">
	<!-- wp:columns {"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":2} -->
			<h2 class="wp-block-heading">Deeply Grounded<br />Partnership</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>UP Global Network was founded on the principle that sustainable change must be led by those closest to the ground. Our history is a testament to the power of indigenous wisdom coupled with global resource networks.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p>Over the last two decades, we have evolved from a small collective into a robust global network. We don't just provide funding; we build capacity, facilitate leadership training, and co-create strategic roadmaps with community leaders who have been stewards of their territories for generations.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"up-text-link up-text-link--olive"} -->
			<p class="up-text-link up-text-link--olive"><a href="<?php echo esc_url( home_url( '/our-strategy/' ) ); ?>">Read our full story →</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"large"} -->
			<figure class="wp-block-image size-large"><img src="<?php echo esc_url( $uri . '/assets/images/leadership/hero.jpg' ); ?>" alt=""/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
