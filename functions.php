<?php
define( 'APP_THEME_DIR', dirname( __FILE__ ) . DIRECTORY_SEPARATOR );

# Enqueue JS and CSS assets on the front-end
add_action( 'wp_enqueue_scripts', 'app_enqueue_assets' );
function app_enqueue_assets() {
	$template_dir = get_template_directory_uri();

	# Enqueue Google Map API
	wp_enqueue_script(
		'theme-js-google-map-api',
		'https://maps.google.com/maps/api/js?key=AIzaSyCwCG5wzP6LU2-naAys_uPC8bONy4ID1oY&language=en',
		array( 'jquery' ), // deps
		null, // version -- this is handled by the bundle manifest
		true // in footer
	);

	# Enqueue Custom JS files
	wp_enqueue_script(
		'theme-js-bundle',
		$template_dir . app_assets_bundle( 'js/bundle.js' ),
		array( 'jquery' ), // deps
		null, // version -- this is handled by the bundle manifest
		true // in footer
	);

	# Enqueue Custom CSS files
	wp_enqueue_style(
		'theme-css-bundle',
		$template_dir . app_assets_bundle( 'css/bundle.css' )
	);

	# The theme style.css file may contain overrides for the bundled styles
	app_enqueue_style( 'theme-styles', $template_dir . '/style.css' );

	# Enqueue Comments JS file
	if ( is_singular() ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

# Enqueue JS and CSS assets on admin pages
add_action( 'admin_enqueue_scripts', 'app_admin_enqueue_scripts' );
function app_admin_enqueue_scripts() {
	$template_dir = get_template_directory_uri();

	# Enqueue Scripts
	# @app_enqueue_script attributes -- id, location, dependencies, in_footer = false
	# app_enqueue_script( 'theme-admin-functions', $template_dir . '/js/admin-functions.js', array( 'jquery' ) );

	# Enqueue Styles
	# @app_enqueue_style attributes -- id, location, dependencies, media = all
	# app_enqueue_style( 'theme-admin-styles', $template_dir . '/css/admin-style.css' );

	# Editor Styles
	# add_editor_style( 'css/custom-editor-style.css' );
}

add_action( 'login_enqueue_scripts', 'app_login_enqueue' );
function app_login_enqueue() {
	# app_enqueue_style( 'theme-login-styles', get_template_directory_uri() . '/css/login-style.css' );
}

# Attach Custom Post Types and Custom Taxonomies
add_action( 'init', 'app_attach_post_types_and_taxonomies', 0 );
function app_attach_post_types_and_taxonomies() {
	# Attach Custom Post Types
	include_once( APP_THEME_DIR . 'options/post-types.php' );

	# Attach Custom Taxonomies
	include_once( APP_THEME_DIR . 'options/taxonomies.php' );
}

add_action( 'after_setup_theme', 'app_setup_theme' );

# To override theme setup process in a child theme, add your own app_setup_theme() to your child theme's
# functions.php file.
if ( ! function_exists( 'app_setup_theme' ) ) {
	function app_setup_theme() {
		# Make this theme available for translation.
		load_theme_textdomain( 'app', get_template_directory() . '/languages' );

		$autoload_dir = APP_THEME_DIR . 'lib/autoload.php';
		include_once( $autoload_dir );

		# Autoload dependencies
		$autoload_dir = APP_THEME_DIR . 'vendor/autoload.php';
		if ( ! is_readable( $autoload_dir ) ) {
			wp_die( __( 'Please, run <code>composer install</code> to download and install the theme dependencies.', 'app' ) );
		}
		include_once( $autoload_dir );

		# Additional libraries and includes
		include_once( APP_THEME_DIR . 'includes/admin-login.php' );
		include_once( APP_THEME_DIR . 'includes/comments.php' );
		include_once( APP_THEME_DIR . 'includes/title.php' );
		include_once( APP_THEME_DIR . 'includes/gravity-forms.php' );
		include_once( APP_THEME_DIR . 'includes/utils.php' );

		# Theme supports
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'menus' );
		add_theme_support( 'html5', array( 'gallery' ) );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		# Manually select Post Formats to be supported - http://codex.wordpress.org/Post_Formats
		// add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );

		# Register Theme Menu Locations
		register_nav_menus( array(
			'main-menu'   => __( 'Main Menu', 'app' ),
			'footer-menu' => __( 'Footer Menu', 'app' ),
		) );
		# Attach custom shortcodes
		include_once( APP_THEME_DIR . 'options/shortcodes.php' );

		# Add Actions
		add_action( 'widgets_init', 'app_widgets_init' );

		# Add Filters
		add_filter( 'excerpt_more', 'app_excerpt_more' );
		add_filter( 'excerpt_length', 'app_excerpt_length', 999 );
		add_filter( 'app_theme_favicon_uri', function() {
			return get_template_directory_uri() . '/dist/images/favicon.ico';
		} );
	}
}

# Register Sidebars
# Note: In a child theme with custom app_setup_theme() this function is not hooked to widgets_init
function app_widgets_init() {
	$sidebar_options = array_merge( app_get_default_sidebar_options(), array(
		'name' => __( 'Default Sidebar', 'app' ),
		'id'   => 'default-sidebar',
	) );

	register_sidebar( $sidebar_options );
}

# Sidebar Options
function app_get_default_sidebar_options() {
	return array(
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widget__title">',
		'after_title'   => '</h2>',
	);
}

function app_excerpt_more() {
	return '...';
}

function app_excerpt_length() {
	return 55;
}

/**
 * Get the path to a versioned bundle relative to the theme directory.
 *
 * @param  string $path
 * @return string
 */
function app_assets_bundle( $path ) {
	static $manifest = null;

	if ( is_null( $manifest ) ) {
		$manifest_path = APP_THEME_DIR . 'dist/manifest.json';

		if ( file_exists( $manifest_path ) ) {
			$manifest = json_decode( file_get_contents( $manifest_path ), true );
		} else {
			$manifest = array();
		}
	}

	$path = isset( $manifest[ $path ] ) ? $manifest[ $path ] : $path;

	return '/dist/' . $path;
}

/**
 * Sometimes, when using Gutenberg blocks the content output
 * contains empty unnecessary paragraph tags.
 *
 * In WP v5.2 this will be fixed, however, until then this function
 * acts as a temporary solution.
 *
 * @see https://core.trac.wordpress.org/ticket/45495
 *
 * @param  string $content
 * @return string
 */
remove_filter( 'the_content', 'wpautop' );
add_filter( 'the_content', 'app_fix_empty_paragraphs_in_blocks' );
function app_fix_empty_paragraphs_in_blocks( $content ) {
	global $wp_version;

	if ( version_compare( $wp_version, '5.2', '<' ) && has_blocks() ) {
		return $content;
	}

	return wpautop( $content );
}


/**
 * Filters the ACF json save point
 *
 * @see https://www.advancedcustomfields.com/resources/local-json/
 *
 * @param  string $path
 * @return string
 */
add_filter( 'acf/settings/save_json', 'app_filter_save_acf_json' );
function app_filter_save_acf_json( $path ) {
	$path = get_stylesheet_directory() . '/acf-json';

	return $path;
}

/**
 * Filters the ACF json load point(s)
 *
 * @see https://www.advancedcustomfields.com/resources/local-json/
 *
 * @param  array $paths ACF loads all .json files from multiple load points
 * @return array
 */
add_filter( 'acf/settings/load_json', 'app_filter_set_acf_load_json' );
function app_filter_set_acf_load_json( $paths ) {
	// remove original path
	unset( $paths[0] );

	// append path
	$paths[] = get_stylesheet_directory() . '/acf-json';

	return $paths;
}

if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page( __( 'Theme Settings', 'app' ) );
}

add_action( 'acf/init', 'app_acf_init' );
function app_acf_init() {
	acf_update_setting( 'google_api_key', get_field( 'google_maps_api_key', 'option' ) );
}

add_action( 'wp_head', 'app_custom_header_scripts', 1 );
function app_custom_header_scripts() {
	if ( $header_scripts = get_field( 'header_scripts', 'option' ) ) {
		echo $header_scripts;
	}
}

add_action( 'wp_footer', 'app_custom_footer_scripts', 1 );
function app_custom_footer_scripts() {
	if ( $footer_scripts = get_field( 'footer_scripts', 'option' ) ) {
		echo $footer_scripts;
	}
}


/* SVG files
---------------------------------------------------------------------------------------------------------------- */

add_filter( 'upload_mimes', 'app_mime_types' );
function app_mime_types( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'app_check_filetype', 10, 4 );
function app_check_filetype( $data, $file, $filename, $mimes ) {
	$filetype = wp_check_filetype( $filename, $mimes );
	return [
		'ext'             => $filetype['ext'],
		'type'            => $filetype['type'],
		'proper_filename' => $data['proper_filename']
	];
}

// Fix svg preview in media
add_filter( 'wp_prepare_attachment_for_js', function( $response ) {
	if ( $response['mime'] === 'image/svg+xml') {
		$response['sizes'][ 'full' ] =  array(
			'orientation' => 'portrait',
			'url'         => $response['url'],
			'width'       => 0,
			'height'      => 0,
		);
	}

	return $response;
} );

// Fix svg empty img tag width and height
function app_fix_svg_size_attributes( $out, $id ) {
	$image_url  = wp_get_attachment_url( $id );
	$file_ext   = pathinfo( $image_url, PATHINFO_EXTENSION );

	if ( 'svg' !== $file_ext ) {
		return false;
	}

	return array( $image_url, null, null, false );
}
add_filter( 'image_downsize', 'app_fix_svg_size_attributes', 10, 2 );

/* Remove page editor for all custom templates @return void
---------------------------------------------------------------------------------------------------------------- */

add_action( 'admin_init', 'app_action_remove_page_editor' );
function app_action_remove_page_editor() {
	if ( ! isset( $_GET['post'] ) ) {
		return;
	}

	$template = get_post_meta( $_GET['post'], '_wp_page_template', true );

	if ( $template === 'templates/specs-resources.php' || $template === 'templates/interactive-map.php' ) {
		remove_post_type_support( 'page', 'editor' );
	}
}