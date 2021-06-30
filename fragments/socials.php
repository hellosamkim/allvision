<?php
if ( empty( $socials = get_field( 'socials', 'option' ) ) ) {
	return;
}
?>

<nav class="nav-socials">
	<ul>
		<?php foreach ( $socials as $social ) : ?>
			<?php if ( ! empty( $social['link'] ) ) : ?>
				<li>
					<a href="<?php echo esc_url( $social['link'] ) ?>" target="_blank">
						<i class="fab <?php echo esc_attr( $social['icon'] ) ?>"></i>
					</a>
				</li>
			<?php endif; ?>
		<?php endforeach; ?>
	</ul>
</nav><!-- /.nav-socials -->
