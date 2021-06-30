<?php
$title  = get_field( 'title' ) ?: get_the_title();
$bg_img = get_field( 'hero_bg_img' );
?>

<section class="section-intro">
	<?php if ( ! empty( $bg_img ) ) : ?>
		<div class="section__image image-fit">
			<?php echo wp_get_attachment_image( $bg_img, 'large' ); ?>
		</div><!-- /.section__image -->
	<?php endif ?>

	<div class="section__body">
		<div class="shell">
			<div class="section__body-holder">
				<blockquote data-aos="fade-up">
					<h1><?php echo esc_html( $title ); ?></h1>
				</blockquote>
			</div><!-- /.section__body-holder -->
		</div><!-- /.shell -->
	</div><!-- /.section__body -->
</section><!-- /.section-intro -->