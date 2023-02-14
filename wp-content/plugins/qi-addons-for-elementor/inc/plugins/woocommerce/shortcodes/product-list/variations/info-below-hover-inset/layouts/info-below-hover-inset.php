<div <?php wc_product_class( $item_classes ); ?>>
	<div class="qodef-e-product-inner">
		<?php if ( has_post_thumbnail() ) { ?>
			<div class="qodef-e-product-image">
				<div class="qodef-e-product-image-holder">
					<?php qi_addons_for_elementor_template_part( 'plugins/woocommerce/shortcodes/product-list', 'templates/post-info/mark', '', $params ); ?>
					<?php qi_addons_for_elementor_template_part( 'plugins/woocommerce/shortcodes/product-list', 'templates/post-info/image', '', $params ); ?>
				</div>
				<?php qi_addons_for_elementor_template_part( 'plugins/woocommerce/shortcodes/product-list', 'templates/post-info/link' ); ?>
				<div class="qodef-e-product-image-inner">
					<?php
					qi_addons_for_elementor_template_part( 'plugins/woocommerce/shortcodes/product-list', 'templates/post-info/add-to-cart', '', $params );

					// Hook to include additional content inside product list item image
					do_action( 'qi_addons_for_elementor_action_product_list_item_additional_image_content' );
					?>
				</div>
			</div>
		<?php } ?>
		<div class="qodef-e-product-content">
			<div class="qodef-e-product-heading">
				<?php qi_addons_for_elementor_template_part( 'plugins/woocommerce/shortcodes/product-list', 'templates/post-info/title', '', $params ); ?>
				<?php qi_addons_for_elementor_template_part( 'plugins/woocommerce/shortcodes/product-list', 'templates/post-info/price', '', $params ); ?>
			</div>
			<?php qi_addons_for_elementor_template_part( 'plugins/woocommerce/shortcodes/product-list', 'templates/post-info/category', '', $params ); ?>
			<?php qi_addons_for_elementor_template_part( 'plugins/woocommerce/shortcodes/product-list', 'templates/post-info/rating', '', $params ); ?>
			<?php
			// Hook to include additional content inside product list item content
			do_action( 'qi_addons_for_elementor_action_product_list_item_additional_content' );
			?>
		</div>
	</div>
</div>
