<?php
/**
 * Change the login header logo href attribute to open the homepage
 * instead of the default https://wordpress.org/.
 *
 * @link https://developer.wordpress.org/reference/hooks/login_headerurl/
 *
 * @param  string $login_header_url Login header logo URL.
 * @return string Homepage URL.
 */
function app_change_login_header_url( $login_header_url ) {
	return home_url( '/' );
}
add_filter( 'login_headerurl', 'app_change_login_header_url' );

/**
 * Change the login header logo title attribute to display the Site Title
 * instead of the default "Powered by WordPress".
 *
 * @link https://developer.wordpress.org/reference/hooks/login_headertext/
 *
 * @param  string $login_header_title Login header logo URL.
 * @return string Site Title.
 */
function app_change_login_header_title( $login_header_title ) {
	return get_bloginfo( 'name' );
}
add_filter( 'login_headertext', 'app_change_login_header_title' );

function my_login_stylesheet() {
    $template_dir = get_template_directory_uri();
    
    wp_enqueue_style( 'custom-login', $template_dir . app_assets_bundle( 'css/bundle.css' ) );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );
