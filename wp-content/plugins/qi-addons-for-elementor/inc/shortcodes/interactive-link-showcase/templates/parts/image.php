<?php
$additional_classes = isset( $additional_classes ) ? $additional_classes : '';
?>
<div class="qodef-e-image <?php echo esc_attr( $additional_classes ); ?>">
	<?php echo wp_get_attachment_image( $item_image, 'full' ); ?>
</div>
