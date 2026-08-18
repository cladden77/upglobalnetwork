<?php
/**
 * Title: Home Hero
 * Slug: upglobalnetwork/home-hero
 * Categories: upglobalnetwork
 */
$img = esc_url( get_template_directory_uri() . '/assets/images/home/hero.jpg' );
?>
<!-- wp:cover {"url":"<?php echo $img; ?>","dimRatio":70,"customOverlayColor":"#000e1c","isUserOverlayColor":true,"minHeight":893,"minHeightUnit":"px","align":"full","className":"up-hero","layout":{"type":"constrained","contentSize":"768px","justifyContent":"left"}} -->
<div class="wp-block-cover alignfull up-hero" style="min-height:893px">
	<span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim" style="background-color:#000e1c"></span>
	<img class="wp-block-cover__image-background" alt="Community gathering" src="<?php echo $img; ?>" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:heading {"level":1} -->
		<h1 class="wp-block-heading">Making Jesus Known<br />Where He is <em>Not Yet Known</em></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>Partnering with indigenous and near-neighbor leaders to reach the unreached and multiply transformational communities of faith.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/give/' ) ); ?>">Give Today</a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"is-style-up-outline"} -->
			<div class="wp-block-button is-style-up-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/our-strategy/' ) ); ?>">Explore Our Mission</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
</div>
<!-- /wp:cover -->
