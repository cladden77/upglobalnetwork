<?php
/**
 * Title: Get Involved Pathways
 * Slug: upglobalnetwork/get-involved-pathways
 * Categories: upglobalnetwork
 */
$contact = esc_url( home_url( '/contact/' ) );
$give    = esc_url( home_url( '/give/' ) );
?>
<!-- wp:group {"anchor":"pathways","align":"full","className":"up-pathways","style":{"color":{"background":"#f5f3f3"}},"layout":{"type":"constrained","contentSize":"1130px"}} -->
<div class="wp-block-group alignfull up-pathways has-background" id="pathways" style="background-color:#f5f3f3">
	<!-- wp:group {"className":"up-pathways-bento","layout":{"type":"default"}} -->
	<div class="wp-block-group up-pathways-bento">
		<!-- wp:group {"className":"up-card","layout":{"type":"constrained"}} -->
		<div class="wp-block-group up-card">
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">Pray</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Intercession is our primary work. Join our global prayer network to receive monthly updates and specific needs from the field.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"up-text-link"} -->
			<p class="up-text-link"><a href="<?php echo $contact; ?>">Join the prayer team →</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"up-card up-card--dark","layout":{"type":"constrained"}} -->
		<div class="wp-block-group up-card up-card--dark">
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">Give</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Invest in sustainable church planting and indigenous leadership. Your generosity funds long-term mission infrastructure.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo $give; ?>">Start a donation</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"up-card","layout":{"type":"constrained"}} -->
		<div class="wp-block-group up-card">
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">Go / Serve</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>From short-term vision trips to long-term vocational ministry, we help you find your place in the field.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"up-text-link"} -->
			<p class="up-text-link"><a href="<?php echo $contact; ?>">View opportunities →</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"up-card","layout":{"type":"constrained"}} -->
		<div class="wp-block-group up-card">
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">Host</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Open your home or church for a UP Global presentation. Mobilize your local community.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"up-text-link"} -->
			<p class="up-text-link"><a href="<?php echo $contact; ?>">Request a speaker →</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"className":"up-card","layout":{"type":"constrained"}} -->
		<div class="wp-block-group up-card">
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">Organizational Partnership</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Are you a church or nonprofit looking to collaborate on high-impact projects in unreached areas? We specialize in strategic alliances that leverage shared resources.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo $contact; ?>">Partner with us</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-up-dark-outline"} -->
				<div class="wp-block-button is-style-up-dark-outline"><a class="wp-block-button__link wp-element-button" href="#">Download guide</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
