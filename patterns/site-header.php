<?php
/**
 * Title: Site Header
 * Slug: upglobalnetwork/site-header
 * Categories: upglobalnetwork
 * Block Types: core/template-part/header
 */
$uri  = get_template_directory_uri();
$home = home_url( '/' );
?>
<!-- wp:group {"tagName":"header","align":"full","className":"up-header","layout":{"type":"default"}} -->
<header class="wp-block-group alignfull up-header">
	<!-- wp:group {"className":"up-header__inner","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group up-header__inner">
		<!-- wp:image {"width":"211px","height":"42px","sizeSlug":"full","linkDestination":"custom","className":"up-header__logo"} -->
		<figure class="wp-block-image size-full is-resized up-header__logo"><a href="<?php echo esc_url( $home ); ?>"><img src="<?php echo esc_url( $uri . '/assets/images/shared/logo-white.svg' ); ?>" alt="UP Global Network" style="width:211px;height:42px"/></a></figure>
		<!-- /wp:image -->

		<!-- wp:group {"className":"up-header__right","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group up-header__right">
			<!-- wp:navigation {"overlayMenu":"mobile","className":"up-nav","layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<!-- wp:navigation-link {"label":"Home","url":"<?php echo esc_url( $home ); ?>","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"Our Strategy","url":"<?php echo esc_url( home_url( '/our-strategy/' ) ); ?>","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"Get Involved","url":"<?php echo esc_url( home_url( '/get-involved/' ) ); ?>","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"Leadership","url":"<?php echo esc_url( home_url( '/leadership/' ) ); ?>","kind":"custom"} /-->
				<!-- wp:navigation-link {"label":"Contact","url":"<?php echo esc_url( home_url( '/contact/' ) ); ?>","kind":"custom"} /-->
			<!-- /wp:navigation -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"up-btn-give"} -->
				<div class="wp-block-button up-btn-give"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/give/' ) ); ?>">Give</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</header>
<!-- /wp:group -->
