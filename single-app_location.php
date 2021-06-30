<?php
get_header();

the_post();
?>

<section class="section-popup-map">
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="section__image">
			<?php the_post_thumbnail( 'large' ); ?>
		</div><!-- /.section__image -->
	<?php endif ?>

	<div class="section__body">
		<div class="section__body-head">
			<div class="section__left">
				<?php
				$regions = get_the_terms( get_the_ID(), 'app_location_region' );

				$cities = [];

				foreach ( $regions as $region ) {
					if ( $region->parent === 0 ) {
						continue;
					}

					array_push( $cities, $region->name );
				}
				if ( ! empty( $cities ) ) :
				?>
					<h6><?php echo implode( ',', $cities ); ?></h6>
				<?php endif ?>

				<h2><?php the_title(); ?></h2>
			</div><!-- /.section__left -->

			<?php if ( ! empty( $link = get_field( 'link' ) ) ) : ?>
				<div class="section__right">
					<a href="<?php echo esc_url( $link['url'] ); ?>" class="btn-link" type="reset" <?php echo ! empty( $link['target'] ) ? 'target="_blank"' : ''; ?>>
						<span><?php echo esc_html( $link['title'] ); ?></span>

						<i class="ico-arrow">
							<svg viewBox="0 0 13.99 13.99">
								<path d="M7,0,5.76,1.23l4.88,4.89H0V7.87H10.64L5.76,12.75,7,14l7-7Z" />
							</svg>
						</i>
					</a>
				</div><!-- /.section__right -->
			<?php endif ?>
		</div><!-- /.section__body-head -->

		<div class="section__body-content">
			<?php if ( ! empty( $rows = get_field( 'information_rows' ) ) ) : ?>
				<div class="section__left">
					<ul>
						<?php foreach ( $rows as $row ) : ?>
							<li>
								<?php echo $row['text']; ?>
							</li>
						<?php endforeach ?>
					</ul>
				</div><!-- /.section__left -->
			<?php endif ?>

			<?php if ( ! empty( $desc = get_field( 'desc' ) ) ) : ?>
				<div class="section__right">
					<?php echo $desc; ?>
				</div><!-- /.section__right -->
			<?php endif ?>
		</div><!-- /.section__body-content -->

		<?php if ( ! empty( $btn = get_field( 'button' ) ) ) : ?>
			<div class="section__body-action">
				<a href="<?php echo esc_url( $btn['url'] ); ?>" class="btn btn--size-large" <?php echo ! empty( $btn['target'] ) ? 'target="_blank"' : ''; ?>>
					<span class="btn__body">
						<span><?php echo esc_html( $btn['title'] ); ?></span>

						<i class="ico-arrow">
							<svg viewBox="0 0 13.99 13.99">
								<path d="M7,0,5.76,1.23l4.88,4.89H0V7.87H10.64L5.76,12.75,7,14l7-7Z" />
							</svg>
						</i>
					</span>

					<span class="btn__hover">
						<span><?php echo esc_html( $btn['title'] ); ?></span>

						<i class="ico-arrow">
							<svg viewBox="0 0 13.99 13.99">
								<path d="M7,0,5.76,1.23l4.88,4.89H0V7.87H10.64L5.76,12.75,7,14l7-7Z" />
							</svg>
						</i>
					</span>
				</a>            
			</div><!-- /.section__body-action -->
		<?php endif ?>
	</div><!-- /.section__body -->
</section><!-- /.section-popup-map -->

<?php get_footer(); ?>
