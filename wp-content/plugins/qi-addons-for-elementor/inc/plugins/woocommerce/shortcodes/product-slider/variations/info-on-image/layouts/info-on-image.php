<div <?php wc_product_class( $item_classes ); ?>>
	<div class="qodef-e-product-inner">
		<?php if ( has_post_thumbnail() ) { ?>
			<div class="qodef-e-product-image">
				<?php qi_addons_for_elementor_template_part( 'plugins/woocommerce/shortcodes/product-slider', 'templates/post-info/mark', '', $params ); ?>
				<div class="qodef-e-product-image-holder">
					<?php qi_addons_for_elementor_template_part( 'plugins/woocommerce/shortcodes/product-slider', 'templates/post-info/image', '', $params ); ?>
				</div>
				<div class="qodef-e-product-image-inner qodef-image-content">
					<?php qi_addons_for_elementor_template_part( 'plugins/woocommerce/shortcodes/product-slider', 'templates/post-info/link' ); ?>
					<div class="qodef-e-product-top">
						<div class="qodef-e-product-heading">
							<?php qi_addons_for_elementor_template_part( 'plugins/woocommerce/shortcodes/product-slider', 'templates/post-info/title', '', $params ); ?>
							<?php qi_addons_for_elementor_template_part( 'plugins/woocommerce/shortcodes/product-slider', 'templates/post-info/price', '', $params ); ?>
						</div>
						<?php qi_addons_for_elementor_template_part( 'plugins/woocommerce/shortcodes/product-slider', 'templates/post-info/category', '', $params ); ?>
						<?php qi_addons_for_elementor_template_part( 'plugins/woocommerce/shortcodes/product-slider', 'templates/post-info/rating', '', $params ); ?>
					</div>
					<div class="qodef-e-product-bottom">
						<?php qi_addons_for_elementor_template_part( 'plugins/woocommerce/shortcodes/product-slider', 'templates/post-info/add-to-cart', '', $params ); ?>
						<?php
						// Hook to include additional content inside product list item image
						do_action( 'qi_addons_for_elementor_action_product_slider_item_additional_image_content' );
						?>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
</div>
