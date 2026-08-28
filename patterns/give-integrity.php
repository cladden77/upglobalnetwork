<?php
/**
 * Title: Give Integrity
 * Slug: upglobalnetwork/give-integrity
 * Categories: upglobalnetwork
 */
$uri = get_template_directory_uri();
?>
<!-- wp:group {"anchor":"give","align":"full","className":"up-integrity","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull up-integrity" id="give">
	<!-- wp:columns {"verticalAlignment":"center","className":"up-integrity__cols"} -->
	<div class="wp-block-columns are-vertically-aligned-center up-integrity__cols">
		<!-- wp:column {"width":"584px","className":"up-integrity__copy"} -->
		<div class="wp-block-column up-integrity__copy" style="flex-basis:584px">
			<!-- wp:paragraph {"className":"up-chapter"} -->
			<p class="up-chapter">Accountability</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2} -->
			<h2 class="wp-block-heading">Financial Integrity &amp;<br />Stewardship</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"up-lede"} -->
			<p class="up-lede">We are committed to total transparency. Every dollar is tracked from the moment of donation to its specific application in the field. Our operational costs are kept low through strategic partnerships and volunteer networks.</p>
			<!-- /wp:paragraph -->
			<!-- wp:html -->
			<div class="up-integrity__stats">
				<div class="up-integrity__stat">
					<span class="up-integrity__num">92%</span>
					<div class="up-integrity__bar" aria-hidden="true"><span style="width:92%"></span></div>
					<span class="up-integrity__label">Field Impact</span>
				</div>
				<div class="up-integrity__stat">
					<span class="up-integrity__num">08%</span>
					<div class="up-integrity__bar up-integrity__bar--admin" aria-hidden="true"><span style="width:8%"></span></div>
					<span class="up-integrity__label">Admin &amp; Growth</span>
				</div>
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"501px","className":"up-integrity__media"} -->
		<div class="wp-block-column up-integrity__media" style="flex-basis:501px">
			<!-- wp:image {"sizeSlug":"large","className":"up-integrity__photo"} -->
			<figure class="wp-block-image size-large up-integrity__photo"><img src="<?php echo esc_url( $uri . '/assets/images/give/panel.jpg' ); ?>" alt=""/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
