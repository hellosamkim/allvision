<?php
$btn = get_field( 'header_btn', 'option' );

if ( empty( $btn['label'] ) && empty( $btn['url'] ) ) {
	return;
}
?>

<a href="<?php echo esc_url( $btn['url'] ); ?>" class="btn <?php echo ! isset( $mobile ) ? 'btn--color-gradient' : ''; ?> <?php echo ! empty( $btn['action'] ) ? 'js-popup-main' : ''; ?>" <?php echo ! empty( $btn['target'] ) ? 'target="_blank"' : ''; ?>>
	<span class="btn__body">
		<span><?php echo esc_html( $btn['label'] ); ?></span>

		<i class="ico-arrow">
			<svg viewBox="0 0 13.99 13.99">
				<path d="M7,0,5.76,1.23l4.88,4.89H0V7.87H10.64L5.76,12.75,7,14l7-7Z" />
			</svg>
		</i>
	</span>

	<span class="btn__hover">
		<span><?php echo esc_html( $btn['label'] ); ?></span>

		<i class="ico-arrow">
			<svg viewBox="0 0 13.99 13.99">
				<path d="M7,0,5.76,1.23l4.88,4.89H0V7.87H10.64L5.76,12.75,7,14l7-7Z" />
			</svg>
		</i>
	</span>
</a>