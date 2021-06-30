<?php
if ( empty( $resources = get_field( 'resources' ) ) ) {
	return;
}
?>

<section class="section-services" data-bg="white">
	<div class="section__body">
		<div class="shell">
			<div class="list-services">
				<ul>
					<?php foreach ( $resources as $resource ) : ?>
						<li data-aos="fade-up">
							<article class="article-service article-service--secondary">
								<div class="article__icon">
									<span class="image-fit image-fit--contain">
										<?php echo wp_get_attachment_image( $resource['icon'], 'medium' ); ?>
									</span>
								</div><!-- /.article__icon -->

								<div class="article__body">
									<h3><?php echo esc_html( $resource['title'] ); ?></h3>

									<?php echo wpautop( $resource['desc'] ); ?>
								</div><!-- /.article__body -->

								<div class="article__action">
									<a href="<?php echo esc_url( $resource['link_url'] ); ?>" class="btn-link <?php echo $resource['link_type'] === 'popup' ? 'js-popup-ajax' : ''; ?>" <?php echo ! empty( $resource['target'] ) ? 'target="_blank"' : ''; ?> <?php echo $resource['link_type'] === 'download' ? 'download' : ''; ?>>
										<span><?php echo esc_html( $resource['link_label'] ); ?></span>

										<i class="ico-arrow">
											<svg viewBox="0 0 13.99 13.99">
												<path d="M7,0,5.76,1.23l4.88,4.89H0V7.87H10.64L5.76,12.75,7,14l7-7Z" />
											</svg>
										</i>
									</a>
								</div><!-- /.article__action -->
							</article><!-- /.article-service -->
						</li>
					<?php endforeach ?>
				</ul>
			</div><!-- /.list-services -->
		</div><!-- /.shell -->
	</div><!-- /.section__body -->
</section><!-- /.section-services -->