<?php
/**
 * Dev #Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Dev #Theme
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Tailwind CSS file configure
function theme_enqueue_styles() {
    wp_enqueue_style('tailwind-style', get_template_directory_uri() . '/tailwind_output.css', array(), '2.0');
}

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

// Theme Logo
add_theme_support( 'custom-logo' );
function themename_custom_logo_setup() {
	$defaults = array(
		'height'               => 45,
		'width'                => 158,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

// Theme Menu
register_nav_menus(array(
    'primary' => __('Primary Menu', 'Dev #Theme'),
));

// Title
function wpdocs_filter_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'twentytwelve' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'wpdocs_filter_wp_title', 10, 2 );

