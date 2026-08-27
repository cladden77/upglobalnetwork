<?php
/**
 * Title: Contact Split
 * Slug: upglobalnetwork/contact-split
 * Categories: upglobalnetwork
 *
 * Left column is a visual form placeholder. Replace the inner HTML block
 * in the Site Editor with a contact form plugin block or shortcode.
 */
$uri      = get_template_directory_uri();
$facebook = 'https://www.facebook.com/upglobalnetwork';
?>
<!-- wp:group {"align":"full","className":"up-contact","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull up-contact">
	<!-- wp:columns {"verticalAlignment":"top","className":"up-contact__cols"} -->
	<div class="wp-block-columns are-vertically-aligned-top up-contact__cols">
		<!-- wp:column {"width":"586px","className":"up-contact__form-col"} -->
		<div class="wp-block-column up-contact__form-col" style="flex-basis:586px">
			<!-- wp:group {"className":"up-contact__form","layout":{"type":"default"}} -->
			<div class="wp-block-group up-contact__form">
				<!-- wp:html -->
				<div class="up-form up-form--placeholder" aria-hidden="true">
					<div class="up-field">
						<label>Full Name</label>
						<div class="up-form__fake-input">John Doe</div>
					</div>
					<div class="up-field">
						<label>Email Address</label>
						<div class="up-form__fake-input">email@network.org</div>
					</div>
					<div class="up-field">
						<label>Message</label>
						<div class="up-form__fake-input up-form__fake-input--area">Type your message here</div>
					</div>
					<div class="up-btn up-btn--contact">Send Message</div>
				</div>
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"482px","className":"up-contact__aside"} -->
		<div class="wp-block-column up-contact__aside" style="flex-basis:482px">
			<!-- wp:image {"sizeSlug":"large","className":"up-contact__photo"} -->
			<figure class="wp-block-image size-large up-contact__photo"><img src="<?php echo esc_url( $uri . '/assets/images/contact/panel.jpg' ); ?>" alt=""/></figure>
			<!-- /wp:image -->

			<!-- wp:group {"className":"up-contact__details","layout":{"type":"default"}} -->
			<div class="wp-block-group up-contact__details">
				<!-- wp:group {"className":"up-contact__detail","layout":{"type":"default"}} -->
				<div class="wp-block-group up-contact__detail">
					<!-- wp:heading {"level":3} -->
					<h3 class="wp-block-heading">Headquarters</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph -->
					<p>725 W Frontier Lane, Suite 201,<br />Olathe, KS 66061</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"up-contact__detail","layout":{"type":"default"}} -->
				<div class="wp-block-group up-contact__detail">
					<!-- wp:heading {"level":3} -->
					<h3 class="wp-block-heading">Social Media</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"up-contact__social"} -->
					<p class="up-contact__social"><a href="<?php echo esc_url( $facebook ); ?>" target="_blank" rel="noopener noreferrer"><img src="<?php echo esc_url( $uri . '/assets/images/shared/icons/facebook.svg' ); ?>" alt="Facebook" width="10" height="22" /></a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
