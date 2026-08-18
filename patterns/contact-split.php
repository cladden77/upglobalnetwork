<?php
/**
 * Title: Contact Split
 * Slug: upglobalnetwork/contact-split
 * Categories: upglobalnetwork
 */
?>
<!-- wp:group {"align":"full","className":"up-contact","layout":{"type":"constrained","contentSize":"1130px"}} -->
<div class="wp-block-group alignfull up-contact">
	<!-- wp:columns {"verticalAlignment":"top"} -->
	<div class="wp-block-columns are-vertically-aligned-top">
		<!-- wp:column {"width":"58%"} -->
		<div class="wp-block-column" style="flex-basis:58%">
			<!-- wp:html -->
			<form class="up-form" method="get" action="#">
				<div class="up-field">
					<label for="contact-name">Full Name</label>
					<input type="text" id="contact-name" name="name" placeholder="John Doe" />
				</div>
				<div class="up-field">
					<label for="contact-email">Email Address</label>
					<input type="email" id="contact-email" name="email" placeholder="email@network.org" />
				</div>
				<div class="up-field">
					<label for="contact-message">Message</label>
					<textarea id="contact-message" name="message" placeholder="Type your message here"></textarea>
				</div>
				<button class="up-btn up-btn--wide" type="submit">Send Message</button>
			</form>
			<!-- /wp:html -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"42%"} -->
		<div class="wp-block-column" style="flex-basis:42%">
			<!-- wp:group {"className":"up-contact__info","layout":{"type":"constrained"}} -->
			<div class="wp-block-group up-contact__info">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Headquarters</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>725 W Frontier Lane, Suite 201,<br />Olathe, KS 66061</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Social Media</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>Follow along for stories from the field.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
