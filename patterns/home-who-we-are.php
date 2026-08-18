<?php
/**
 * Title: Home Who We Are
 * Slug: upglobalnetwork/home-who-we-are
 * Categories: upglobalnetwork
 */
$uri = get_template_directory_uri();
?>
<!-- wp:group {"align":"full","className":"up-who","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull up-who">
	<!-- wp:columns {"className":"up-who__grid"} -->
	<div class="wp-block-columns up-who__grid">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":2} -->
			<h2 class="wp-block-heading">Advancing the<br />Gospel where<br />barriers are highest.</h2>
			<!-- /wp:heading -->

			<!-- wp:separator {"className":"up-who__rule"} -->
			<hr class="wp-block-separator has-alpha-channel-opacity up-who__rule"/>
			<!-- /wp:separator -->

			<!-- wp:paragraph -->
			<p>UP Global Network exists to accelerate church planting movements among the world's most neglected people groups. We don't just send; we empower local visionaries who carry the linguistic and cultural keys to their own people's hearts.</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><a href="<?php echo esc_url( home_url( '/our-strategy/' ) ); ?>">LEARN MORE ABOUT OUR MISSION →</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"up-who__media"} -->
		<div class="wp-block-column up-who__media">
			<!-- wp:image {"sizeSlug":"large"} -->
			<figure class="wp-block-image size-large"><img src="<?php echo esc_url( $uri . '/assets/images/home/who-1.jpg' ); ?>" alt="Leaders in conversation"/></figure>
			<!-- /wp:image -->

			<!-- wp:image {"sizeSlug":"large","className":"up-who__media-offset"} -->
			<figure class="wp-block-image size-large up-who__media-offset"><img src="<?php echo esc_url( $uri . '/assets/images/home/who-2.jpg' ); ?>" alt="Community gathered outdoors"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
