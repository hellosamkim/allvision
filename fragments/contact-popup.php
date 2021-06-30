<?php
if ( empty( $form = get_field( 'app_gform', 'option' ) ) ) {
	return;
}
?>

<section class="section-popup js-section-popup">
	<div class="section__holder">
		<div class="section__wrap">
			<div class="section__popup" id="popup-contact">
				<a href="#" class="js__close">
					<i class="ico-close ico-close--black"></i>
				</a>
				
				<?php app_render_gform( absint( $form ), true, array( 'display_title' => true, 'display_description' => true ) ); ?>
			</div><!-- /.section__popup -->
		</div><!-- /.section__wrap -->
	</div><!-- /.section__holder -->
</section><!-- /.section-popup -->