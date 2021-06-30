<?php
$title = get_field( 'content_title' );
$text  = get_field( 'text' );

if ( empty( $title ) && empty( $text ) ) {
	return;
}
?>

<section class="section-content-grid" data-bg="white-desktop-dark-mobile">
	<div class="section__body">
		<div class="shell">
			<div class="section__body-row">
				<?php if ( ! empty( $title ) ) : ?>
					<div class="section__body-col" data-aos="fade-up">
						<blockquote>
							<h2><?php echo nl2br( esc_html( $title ) ); ?></h2>
						</blockquote>
					</div><!-- /.section__body-col -->
				<?php endif ?>

				<?php if ( ! empty( $text ) ) : ?>
					<div class="section__body-col" data-aos="fade-up">
					   <?php echo $text; ?>
					</div><!-- /.section__body-col -->
				<?php endif ?>
			</div><!-- /.section__body-row -->
		</div><!-- /.shell -->
	</div><!-- /.section__body -->
</section><!-- /.section-content-grid -->