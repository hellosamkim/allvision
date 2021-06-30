<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="wrapper">
		<div class="wrapper__inner">
			<header class="header">
				<div class="shell shell--grid shell--fluid">
					<div class="header__logo">
						<a href="<?php echo home_url( '/' ); ?>" class="logo">
							<svg viewBox="0 0 193 22.74">
								<path d="M24.56,22.43l-3.32-5.57H10.77l1.83-3.14h6.79L14.46,5.45l-10,17H0L12.72,1.25a3,3,0,0,1,.79-.92A1.87,1.87,0,0,1,14.61,0a1.79,1.79,0,0,1,1.08.33,3,3,0,0,1,.78.92L29.22,22.43Z" />

								<path d="M31.58,22.43V.3h3.87V18.56H50.33v3.86Z" />
								
								<path d="M53.1,22.43V.3H57V18.56H70.25v3.86Z" />

								<path d="M66.11.3h4.72l10,17.05,10-17h4.44L82.57,21.49a2.86,2.86,0,0,1-.79.91,1.75,1.75,0,0,1-1.06.33,1.81,1.81,0,0,1-1.1-.33,3.13,3.13,0,0,1-.79-.91Z" />

								<path d="M97.91,22.43V.3h3.87V22.43Z" />
								
								<path d="M105.82,22.43V18.56h16.59a3.34,3.34,0,0,0,2.38-.79,2.76,2.76,0,0,0,.84-2.1,2.66,2.66,0,0,0-.84-2.14,3.52,3.52,0,0,0-2.38-.72H112.24a8.13,8.13,0,0,1-2.81-.47A6.08,6.08,0,0,1,107.3,11,5.73,5.73,0,0,1,106,9a6.64,6.64,0,0,1-.47-2.53A6.76,6.76,0,0,1,105.93,4a5.29,5.29,0,0,1,1.31-2,6.28,6.28,0,0,1,2.14-1.3A8.8,8.8,0,0,1,112.3.3h15.89V4.17H112.3a2.87,2.87,0,0,0-2.07.71,2.69,2.69,0,0,0-.73,2,2.59,2.59,0,0,0,.75,2,2.83,2.83,0,0,0,2,.7h10.14a7.41,7.41,0,0,1,5.12,1.59,6.15,6.15,0,0,1,1.75,4.8,7.6,7.6,0,0,1-.42,2.59,5.55,5.55,0,0,1-1.28,2,5.79,5.79,0,0,1-2.15,1.36,8.39,8.39,0,0,1-3,.48Z" />
								
								<path d="M132.81,22.43V.3h3.87V22.43Z" />
								
								<path d="M150.83,22.43a10.52,10.52,0,0,1-9.94-6.82,12.2,12.2,0,0,1-.81-4.47,11.89,11.89,0,0,1,.81-4.45,9.88,9.88,0,0,1,2.25-3.42,10.17,10.17,0,0,1,3.41-2.19A11.55,11.55,0,0,1,150.83.3h5.38a11.83,11.83,0,0,1,4.4.8,9.74,9.74,0,0,1,5.64,5.64,11.83,11.83,0,0,1,.8,4.4,12.41,12.41,0,0,1-.81,4.47,10.57,10.57,0,0,1-10,6.82Zm5.38-3.87A6.93,6.93,0,0,0,159,18a6.6,6.6,0,0,0,3.65-3.8,7.91,7.91,0,0,0,.52-2.89,7.84,7.84,0,0,0-.52-2.87A6.49,6.49,0,0,0,159,4.71a7.09,7.09,0,0,0-2.8-.54h-5.38a6.86,6.86,0,0,0-2.76.54,6.32,6.32,0,0,0-2.17,1.47,6.68,6.68,0,0,0-1.43,2.25,7.74,7.74,0,0,0-.52,2.89,7.7,7.7,0,0,0,.52,2.89,6.55,6.55,0,0,0,1.43,2.3A6.43,6.43,0,0,0,148.07,18a6.87,6.87,0,0,0,2.76.55Z" />
								
								<path d="M173.77,6.24V22.43h-3.68V2.34a2.46,2.46,0,0,1,.53-1.69A1.83,1.83,0,0,1,172.06,0a2,2,0,0,1,.83.18,3.24,3.24,0,0,1,.82.61l15.61,15.49V.12H193V20.39a2.49,2.49,0,0,1-.53,1.7,1.8,1.8,0,0,1-1.39.61,2.48,2.48,0,0,1-1.76-.82Z" />
							</svg>
						</a>

						<?php app_render_fragment( 'slogan' ); ?>
					</div><!-- /.header__logo -->

					<div class="header__inner">
						<?php
						if ( has_nav_menu( 'main-menu' ) ) {
							wp_nav_menu( array(
								'theme_location'  => 'main-menu',
								'container'       => 'nav',
								'container_class' => 'nav',
							) );
						}
						?>

						<div class="form-search js-form-search">
							<form action="<?php echo home_url( '/' ); ?>" method="get">
								<input type="search" name="s" value="" placeholder="<?php _e( 'Search here...', 'app' ); ?>" />

								<a href="#" class="js__close">
									<i class="ico-close"></i>
								</a>

								<button type="submit">
									<span><?php _e( 'Search', 'app' ); ?></span>

									<i class="ico-arrow">
										<svg viewBox="0 0 13.99 13.99">
											<path d="M7,0,5.76,1.23l4.88,4.89H0V7.87H10.64L5.76,12.75,7,14l7-7Z" />
										</svg>
									</i>
								</button>
							</form>
						</div><!-- /.form-search -->

						<?php app_render_fragment( 'header-btn' ); ?>

						<?php app_render_fragment( 'slogan' ); ?>

						<a href="#" class="btn-search js-btn-search">
							<i class="ico-search">
								<svg viewBox="0 0 11.44 11.43">
									<path d="M11.34,10.65,8.15,7.43a4.55,4.55,0,1,0-.69.7l3.17,3.2a.51.51,0,0,0,.7,0A.5.5,0,0,0,11.34,10.65ZM4.58,8.17A3.6,3.6,0,1,1,7.12,7.11,3.58,3.58,0,0,1,4.58,8.17Z" transform="translate(-0.04 -0.05)" />
								</svg>
							</i>
						</a>
					</div><!-- /.header__inner -->

					<div class="header__actions">
						<a href="#" class="btn-search js-btn-search">
							<i class="ico-search">
								<svg viewBox="0 0 11.44 11.43">
									<path d="M11.34,10.65,8.15,7.43a4.55,4.55,0,1,0-.69.7l3.17,3.2a.51.51,0,0,0,.7,0A.5.5,0,0,0,11.34,10.65ZM4.58,8.17A3.6,3.6,0,1,1,7.12,7.11,3.58,3.58,0,0,1,4.58,8.17Z" transform="translate(-0.04 -0.05)" />
								</svg>
							</i>
						</a>

						<?php app_render_fragment( 'header-btn', [ 'mobile' => true ] ); ?>

						<a href="#" class="btn-menu js-btn-menu">
							<span></span>
						</a>
					</div><!-- /.header__actions -->

					<div class="header__form">
						<div class="form-search js-form-search">
							<form action="<?php echo home_url( '/' ); ?>" method="get">
								<input type="search" name="s" value="" placeholder="<?php _e( 'What are you looking for?...', 'app' ); ?>" />

								<button type="submit">
									<span><?php _e( 'Search', 'app' ); ?></span>

									<i class="ico-arrow">
										<svg viewBox="0 0 13.99 13.99">
											<path d="M7,0,5.76,1.23l4.88,4.89H0V7.87H10.64L5.76,12.75,7,14l7-7Z" />
										</svg>
									</i>
								</button>
							</form>
						</div><!-- /.form-search -->
					</div><!-- /.header__form -->
				</div><!-- /.shell -->
			</header><!-- /.header -->

			<div class="main js-main">
