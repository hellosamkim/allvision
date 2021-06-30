<?php
$slogan = get_field( 'slogan', 'option' );

if ( empty( $slogan['label'] ) && empty( $slogan['url'] ) ) {
	return;
}
?>

<a href="<?php echo esc_url( $slogan['url'] ); ?>" class="slogan" <?php echo ! empty( $slogan['target'] ) ? 'target="_blank"' : ''; ?>>
	<?php if ( ! empty( $slogan['icon'] ) ) : ?>
		<i>
			<?php echo wp_get_attachment_image( $slogan['icon'], 'medium' ); ?>

			<?php if ( ! empty( $slogan['icon_hover'] ) ) : ?>
				<?php echo wp_get_attachment_image( $slogan['icon_hover'], 'medium' ); ?>
			<?php endif ?>
		</i>
	<?php endif ?>

	<span><?php echo esc_html( $slogan['label'] ); ?></span>
</a>