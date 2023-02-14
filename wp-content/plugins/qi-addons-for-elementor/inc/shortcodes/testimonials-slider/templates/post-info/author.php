<?php

if ( ! empty( $item_author ) ) { ?>
	<div class="qodef-e-author">
		<<?php echo esc_attr( $item_author_tag ); ?> class="qodef-e-author-name"><?php echo esc_html( $item_author ); ?></<?php echo esc_attr( $item_author_tag ); ?>>
		<?php if ( ! empty( $item_author_occupation ) ) { ?>
			<span class="qodef-e-author-job"><?php echo esc_html( $item_author_occupation ); ?></span>
		<?php } ?>
	</div>
<?php } ?>
