<?php
$regions = get_terms( [ 'taxonomy' => 'app_location_region', 'hide_empty' => false, 'parent' => 0 ] );

if ( empty( $regions ) ) {
	return;
}

$title = get_field( 'map_title' );
$desc  = get_field( 'map_desc' );
?>

<section class="section-map js-section-map">
	<div class="shell shell--grid">
		<div class="section__sidebar" data-aos="fade-up">
			<?php if ( ! empty( $title ) || ! empty( $desc ) ) : ?>
				<div class="section__sidebar-head">
					<?php if ( ! empty( $title ) ) : ?>
						<h4><?php echo esc_html( $title ); ?></h4>
					<?php endif ?>

					<?php if ( ! empty( $desc ) ) : ?>
						<?php echo wpautop( $desc ); ?>
					<?php endif ?>
				</div><!-- /.section__sidebar-head -->
			<?php endif ?>

			<div class="section__sidebar-list">
				<a href="#" class="js__expand">
					<span><?php _e( 'Location Selection', 'app' ); ?></span>
				</a>

				<ul>
					<?php foreach ( $regions as $index => $region ) : ?>
						<li class="js__locations <?php echo $index === 0 ? 'active' : ''; ?>" data-text="<?php echo esc_html( $region->name ); ?>">
							<a href="#" class="js__link"><?php echo esc_html( $region->name ); ?></a>

							<?php
							$cities = get_terms( [ 'taxonomy' => 'app_location_region', 'hide_empty' => false, 'parent' => $region->term_id ] );

							if ( ! empty( $cities ) ) :
							?>
								<ol>
									<?php foreach ( $cities as $city ) : ?>
										<?php
										$locations = get_posts( [
											'post_type'      => 'app_location',
											'post_status'    => 'publish',
											'psots_per_page' => -1,
											'tax_query'      => [
												[
													'taxonomy' => 'app_location_region',
													'terms'    => $city->term_id
												]
											],
											'fields'         => 'ids'
										] );

										$locations_cords = [];
										$locations_links = [];

										if ( ! empty( $locations ) ) {
											foreach ( $locations as $id ) {
												$map = get_field( 'map', $id );
												
												array_push( $locations_cords, $map['lat'] . ',' . $map['lng'] );
												array_push( $locations_links, get_the_permalink( $id ) ); 
											}
										}
										?>
										<li>
										   <input type="checkbox" id="location-<?php echo absint( $region->term_id ); ?>-<?php echo absint( $city->term_id ); ?>" <?php echo $index === 0 ? 'checked' : ''; ?> /> 

										   <label 
											   for="location-<?php echo absint( $region->term_id ); ?>-<?php echo absint( $city->term_id ); ?>" 
											   <?php echo ! empty( $locations_cords ) ? ' class="js__location"' : ''; ?>
											   <?php echo ! empty( $locations_cords ) ? 'data-location="' . implode( '&&', $locations_cords ) . '"' : ''; ?>
											   <?php echo ! empty( $locations_links ) ? 'data-link="' . implode( '&&', $locations_links ) . '"' : ''; ?>
											>
											   <span><?php echo esc_html( $city->name ); ?></span>
										   </label>
										</li>
									<?php endforeach ?>
								</ol>
							<?php endif ?>
						</li>
					<?php endforeach ?>
				</ul>
			</div><!-- /.section__sidebar-list -->
		</div><!-- /.section__sidebar -->

		<div class="section__map" data-aos="fade-down">
			<div class="section__map-holder">
				<div 
					class="section__map-media js__map" 
					id="js-section-map"
					data-zoom="14"
					data-marker="14">
				</div><!-- /.section__map-media -->

				<a href="#" class="btn-circle btn-circle--prev js__prev" data-text="">
					<i class="ico-arrow ico-arrow--reverse">
						<svg viewBox="0 0 13.99 13.99">
							<path d="M7,0,5.76,1.23l4.88,4.89H0V7.87H10.64L5.76,12.75,7,14l7-7Z" />
						</svg>
					</i>
				</a>

				<a href="#" class="btn-circle btn-circle--next js__next" data-text="">
					<i class="ico-arrow">
						<svg viewBox="0 0 13.99 13.99">
							<path d="M7,0,5.76,1.23l4.88,4.89H0V7.87H10.64L5.76,12.75,7,14l7-7Z" />
						</svg>
					</i>
				</a>
			</div><!-- /.section__map-holder -->
		</div><!-- /.section__map -->
	</div><!-- /.shell -->
</section><!-- /.section-map -->