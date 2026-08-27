<?php
/**
 * Title: Get Involved Pathways
 * Slug: upglobalnetwork/get-involved-pathways
 * Categories: upglobalnetwork
 */
$uri     = get_template_directory_uri();
$contact = esc_url( home_url( '/contact/' ) );
$give    = esc_url( home_url( '/give/' ) );
$icons   = $uri . '/assets/images/shared/icons';
$imgs    = $uri . '/assets/images/get-involved';
?>
<!-- wp:group {"anchor":"pathways","align":"full","className":"up-pathways","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull up-pathways" id="pathways">
	<!-- wp:html -->
	<div class="up-pathways-bento">
		<article class="up-pathway up-pathway--pray">
			<img class="up-pathway__icon" src="<?php echo esc_url( $icons . '/pray.svg' ); ?>" alt="" width="44" height="44" />
			<h3>Pray</h3>
			<p>Intercession is our primary work. Join our global prayer network to receive monthly updates and specific needs from the field.</p>
			<a class="up-pathway__text-link" href="<?php echo $contact; ?>">Join the prayer team <img src="<?php echo esc_url( $icons . '/arrow-right.svg' ); ?>" alt="" width="10" height="10" /></a>
		</article>

		<article class="up-pathway up-pathway--give">
			<div class="up-pathway__copy">
				<img class="up-pathway__icon" src="<?php echo esc_url( $icons . '/give.svg' ); ?>" alt="" width="42" height="41" />
				<h3>Give</h3>
				<p>Invest in sustainable church planting and indigenous leadership. Your generosity funds long-term mission infrastructure.</p>
				<a class="up-btn up-btn--olive" href="<?php echo $give; ?>">Start a donation</a>
			</div>
			<figure class="up-pathway__media">
				<img src="<?php echo esc_url( $imgs . '/give-card.jpg' ); ?>" alt="" />
			</figure>
		</article>

		<article class="up-pathway up-pathway--go">
			<figure class="up-pathway__media">
				<img src="<?php echo esc_url( $imgs . '/go-card.jpg' ); ?>" alt="" />
			</figure>
			<div class="up-pathway__copy">
				<img class="up-pathway__icon" src="<?php echo esc_url( $icons . '/go-serve.svg' ); ?>" alt="" width="41" height="40" />
				<h3>Go / Serve</h3>
				<p>From short-term vision trips to long-term vocational ministry, we help you find your place in the field.</p>
				<a class="up-btn up-btn--ink-outline" href="<?php echo $contact; ?>">View opportunities</a>
			</div>
		</article>

		<article class="up-pathway up-pathway--host">
			<img class="up-pathway__icon" src="<?php echo esc_url( $icons . '/host.svg' ); ?>" alt="" width="44" height="40" />
			<h3>Host</h3>
			<figure class="up-pathway__media">
				<img src="<?php echo esc_url( $imgs . '/host-card.jpg' ); ?>" alt="" />
			</figure>
			<p>Open your home or church for a UP Global presentation. Mobilize your local community.</p>
			<a class="up-pathway__text-link" href="<?php echo $contact; ?>">Request a speaker <img src="<?php echo esc_url( $icons . '/arrow-right.svg' ); ?>" alt="" width="10" height="10" /></a>
		</article>

		<article class="up-pathway up-pathway--partner">
			<div class="up-pathway__copy">
				<h3>Organizational Partnership</h3>
				<p>Are you a church or nonprofit looking to collaborate on high-impact projects in unreached areas? We specialize in strategic alliances that leverage shared resources.</p>
				<div class="up-pathway__actions">
					<a class="up-btn up-btn--ink" href="<?php echo $contact; ?>">Partner with us</a>
					<a class="up-btn up-btn--olive-outline" href="#">Download guide</a>
				</div>
			</div>
			<img class="up-pathway__watermark" src="<?php echo esc_url( $icons . '/partner.svg' ); ?>" alt="" width="110" height="100" />
		</article>
	</div>
	<!-- /wp:html -->
</div>
<!-- /wp:group -->
