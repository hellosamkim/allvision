			</div><!-- /.main -->

			<footer class="footer">
				<div class="footer__widgets">
					<div class="shell">
						<div class="widgets-footer">
							<ul>
								<li class="widget widget--socials">
									<?php if ( ! empty( $title = get_field( 'socials_title', 'option' ) ) ) : ?>
										<h5 class="widget__title"><?php echo esc_html( $title ); ?></h5><!-- /.widget__title -->
									<?php endif ?>

									<?php app_render_fragment( 'socials' ); ?>
								</li><!-- /.widget -->

								<?php if ( ! empty( $columns = get_field( 'columns', 'option' ) ) ) : ?>
									<?php foreach ( $columns as $column ) : ?>
										<li class="widget widget--nav">
											<?php if ( ! empty( $column['title'] ) ) : ?>
												<h5 class="widget__title"><?php echo esc_html( $column['title'] ); ?></h5><!-- /.widget__title -->
											<?php endif ?>

											<?php
											wp_nav_menu( array(
												'menu'      => $column['app_menu'],
												'container' => 'ul',
											) );
											?>
										</li><!-- /.widget -->
									<?php endforeach ?>
								<?php endif ?>
							</ul>
						</div><!-- /.widgets-footer -->
					</div><!-- /.shell -->
				</div><!-- /.footer__widgets -->

				<div class="footer__inner">
					<div class="shell shell--grid">
						<div class="footer__inner-logo">
							<a href="<?php echo home_url( '/' ); ?>" class="logo-footer">
								<svg viewBox="0 0 86.81 37.66">
									<path d="M40.68,37.15l-5.49-9.23H17.84l3-5.18H32.11L23.94,9,7.31,37.15H0L21.07,2.07A5,5,0,0,1,22.38.55,3,3,0,0,1,24.2,0,2.88,2.88,0,0,1,26,.55a5.06,5.06,0,0,1,1.28,1.52L48.39,37.15Z" />
									
									<path d="M38.42.5h7.81L62.87,28.73,79.45.5h7.36L65.69,35.59a5,5,0,0,1-1.31,1.51,2.9,2.9,0,0,1-1.77.55,2.93,2.93,0,0,1-1.81-.55,4.74,4.74,0,0,1-1.31-1.51Z" />
								</svg>
							</a>
						</div><!-- /.footer__inner-logo -->

						<div class="footer__inner-copyright">
							<?php if ( ! empty( $copyright = get_field( 'copyright', 'option' ) )  ): ?>
								<?php echo $copyright; ?>
							<?php endif ?>

							<?php
							if ( has_nav_menu( 'footer-menu' ) ) {
								wp_nav_menu( array(
									'theme_location'  => 'footer-menu',
									'container'       => 'nav',
									'container_class' => 'nav-footer',
								) );
							}
							?>
						</div><!-- /.footer__inner-copyright -->
					</div><!-- /.shell -->
				</div><!-- /.footer__inner -->
			</footer><!-- /.footer -->
		</div><!-- /.wrapper__inner -->
	</div><!-- /.wrapper -->

	<?php app_render_fragment( 'contact-popup' ); ?>

	<?php wp_footer(); ?>
</body>
</html>
