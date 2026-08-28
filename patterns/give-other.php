<?php
/**
 * Title: Give Other Ways
 * Slug: upglobalnetwork/give-other
 * Categories: upglobalnetwork
 */
$uri     = get_template_directory_uri();
$contact = esc_url( home_url( '/contact/' ) );
$icons   = $uri . '/assets/images/shared/icons';
?>
<!-- wp:group {"align":"full","className":"up-other","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull up-other">
	<!-- wp:heading {"level":2,"textAlign":"center"} -->
	<h2 class="wp-block-heading has-text-align-center">Other Ways to Partner</h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","className":"up-lede"} -->
	<p class="has-text-align-center up-lede">Beyond direct financial contributions, your legacy and assets can drive significant movement. Explore diverse methods of contribution.</p>
	<!-- /wp:paragraph -->
	<!-- wp:html -->
	<div class="up-other__grid">
		<article class="up-other__card">
			<img class="up-other__icon" src="<?php echo esc_url( $icons . '/wallet.svg' ); ?>" alt="" width="28" height="28" />
			<h3>Stock &amp; Non-Cash</h3>
			<p>Donate appreciated stocks, bonds, or mutual funds to maximize tax benefits while supporting the mission.</p>
			<a class="up-other__link" href="<?php echo $contact; ?>">Learn more <img src="<?php echo esc_url( $icons . '/arrow-forward-16.svg' ); ?>" alt="" width="16" height="16" /></a>
		</article>
		<article class="up-other__card">
			<img class="up-other__icon" src="<?php echo esc_url( $icons . '/menu-book.svg' ); ?>" alt="" width="28" height="28" />
			<h3>Legacy &amp; Wills</h3>
			<p>Include UP Global Network in your will or estate plan to ensure your values continue to impact future generations.</p>
			<a class="up-other__link" href="<?php echo $contact; ?>">Request info <img src="<?php echo esc_url( $icons . '/arrow-forward-16.svg' ); ?>" alt="" width="16" height="16" /></a>
		</article>
		<article class="up-other__card">
			<img class="up-other__icon" src="<?php echo esc_url( $icons . '/account-balance.svg' ); ?>" alt="" width="28" height="28" />
			<h3>IRA Distributions</h3>
			<p>Securely donate qualified charitable distributions.</p>
			<a class="up-other__link" href="<?php echo $contact; ?>">Give crypto <img src="<?php echo esc_url( $icons . '/arrow-forward-16.svg' ); ?>" alt="" width="16" height="16" /></a>
		</article>
		<article class="up-other__mail">
			<div class="up-other__mail-copy">
				<span class="up-other__mail-icon" aria-hidden="true"><img src="<?php echo esc_url( $icons . '/mail.svg' ); ?>" alt="" width="20" height="16" /></span>
				<div>
					<h3>Mail-in Check</h3>
					<p>Prefer the traditional route? You can mail checks directly to our central office.</p>
				</div>
			</div>
			<address class="up-other__address">
				<strong>UP GLOBAL NETWORK</strong>
				725 W Frontier Lane,<br />
				Suite 201,<br />
				Olathe, KS 66061, USA
			</address>
		</article>
	</div>
	<!-- /wp:html -->
</div>
<!-- /wp:group -->
