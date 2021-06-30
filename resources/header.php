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
	<a href="#main" class="sr-only">Skip To Content</a>

	<div class="wrapper">
		<div class="wrapper__inner">
			<header class="header">
				<div class="shell">
					<h1>Header Content</h1>
				</div><!-- /.shell -->
			</header><!-- /.header -->

			<div id="main" class="main">
