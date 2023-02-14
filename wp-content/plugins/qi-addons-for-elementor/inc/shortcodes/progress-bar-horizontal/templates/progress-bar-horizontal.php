<div <?php qi_addons_for_elementor_framework_class_attribute( $holder_classes ); ?> <?php qi_addons_for_elementor_framework_inline_attrs( $data_attrs ); ?>>
	<div class="qodef-m-inner">
		<div class="qodef-m-content">
			<?php if ( ! empty( $title ) ) { ?>
				<<?php echo esc_attr( $title_tag ); ?> class="qodef-m-title">
					<?php echo qi_addons_for_elementor_framework_wp_kses_html( 'content', $title ); ?>
				</<?php echo esc_attr( $title_tag ); ?>>
			<?php } ?>
			<div class="qodef-m-value">
				<div class="qodef-m-value-inner"></div>
			</div>
		</div>
		<div class="qodef-m-canvas"></div>
	</div>
</div>
