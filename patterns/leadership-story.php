<?php
/**
 * Title: Leadership Story
 * Slug: upglobalnetwork/leadership-story
 * Categories: upglobalnetwork
 */
$uri = get_template_directory_uri();
?>
<!-- wp:group {"align":"full","className":"up-split up-split--leadership","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull up-split up-split--leadership">
	<!-- wp:columns {"verticalAlignment":"center","className":"up-split__cols"} -->
	<div class="wp-block-columns are-vertically-aligned-center up-split__cols">
		<!-- wp:column {"width":"41.67%","className":"up-split__copy"} -->
		<div class="wp-block-column up-split__copy" style="flex-basis:41.67%">
			<!-- wp:heading {"level":2,"className":"up-split__title"} -->
			<h2 class="wp-block-heading up-split__title">Deeply Grounded<br />Partnership</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"up-split__lede"} -->
			<p class="up-split__lede">UP Global Network was founded on the principle that sustainable change must be led by those closest to the ground. Our history is a testament to the power of indigenous wisdom coupled with global resource networks.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p>Over the last two decades, we have evolved from a small collective into a robust global network. We don't just provide funding; we build capacity, facilitate leadership training, and co-create strategic roadmaps with community leaders who have been stewards of their territories for generations.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"up-text-link up-text-link--olive"} -->
			<p class="up-text-link up-text-link--olive"><a href="<?php echo esc_url( home_url( '/our-strategy/' ) ); ?>">Read our full story →</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"58.33%","className":"up-split__media-col"} -->
		<div class="wp-block-column up-split__media-col" style="flex-basis:58.33%">
			<!-- wp:group {"className":"up-split__media-frame","layout":{"type":"default"}} -->
			<div class="wp-block-group up-split__media-frame">
				<!-- wp:image {"sizeSlug":"large","className":"up-split__media"} -->
				<figure class="wp-block-image size-large up-split__media"><img src="<?php echo esc_url( $uri . '/assets/images/leadership/hero.jpg' ); ?>" alt=""/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
