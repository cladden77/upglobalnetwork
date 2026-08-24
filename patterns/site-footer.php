<?php
/**
 * Title: Site Footer
 * Slug: upglobalnetwork/site-footer
 * Categories: upglobalnetwork
 * Block Types: core/template-part/footer
 */
$uri = get_template_directory_uri();
?>
<!-- wp:group {"tagName":"footer","align":"full","className":"up-footer","layout":{"type":"default"}} -->
<footer class="wp-block-group alignfull up-footer">
	<!-- wp:image {"align":"center","width":"413px","sizeSlug":"full"} -->
	<figure class="wp-block-image aligncenter size-full is-resized"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $uri . '/assets/images/shared/logo-footer.svg' ); ?>" alt="UP Global Network" style="width:413px"/></a></figure>
	<!-- /wp:image -->

	<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"32px"}}} -->
		<!-- wp:navigation-link {"label":"Our Strategy","url":"<?php echo esc_url( home_url( '/our-strategy/' ) ); ?>","kind":"custom"} /-->
		<!-- wp:navigation-link {"label":"Get Involved","url":"<?php echo esc_url( home_url( '/get-involved/' ) ); ?>","kind":"custom"} /-->
		<!-- wp:navigation-link {"label":"Leadership","url":"<?php echo esc_url( home_url( '/leadership/' ) ); ?>","kind":"custom"} /-->
		<!-- wp:navigation-link {"label":"Contact","url":"<?php echo esc_url( home_url( '/contact/' ) ); ?>","kind":"custom"} /-->
		<!-- wp:navigation-link {"label":"Give","url":"<?php echo esc_url( home_url( '/give/' ) ); ?>","kind":"custom"} /-->
	<!-- /wp:navigation -->

	<!-- wp:paragraph {"align":"center","textColor":"muted"} -->
	<p class="has-text-align-center has-muted-color has-text-color">725 W Frontier Lane, Suite 201, Olathe, KS 66061<br />© 2026 UP Global Network</p>
	<!-- /wp:paragraph -->
</footer>
<!-- /wp:group -->
