<?php
/**
 * ACF Init functions
 *
 * @package WordPress
 * @subpackage prdxn_theme_Theme
 */

add_filter( 'acf/settings/save_json', 'prdxn_theme_acf_json_save_point' );
add_filter( 'acf/settings/load_json', 'prdxn_theme_acf_json_load_point' );
add_filter( 'acf/settings/show_admin', 'prdxn_theme_hide_acf_admin' );

/**
 * Save JSON to theme folder
 *
 * @param string $path URL path to save ACF JSON.
 * @return string
 */
function prdxn_theme_acf_json_save_point( $path ) {
	// update path.
	$path = get_stylesheet_directory() . '/inc/acf-json';

	// return.
	return $path;
}


/**
 * Load JSON from theme folder
 *
 * @param string $paths URL path to load ACF JSON from.
 * @return string
 */
function prdxn_theme_acf_json_load_point( $paths ) {
	// remove original path (optional).
	unset( $paths[0] );

	// append path.
	$paths[] = get_stylesheet_directory() . '/inc/acf-json';

	// return.
	return $paths;
}


/**
 * Hide ACF Settings on Live site
 *
 * @return boolean
 */
function prdxn_theme_hide_acf_admin() {
	// get the current site url.
	$site_url = get_bloginfo( 'url' );
	$display  = true;

	// an array of protected site urls.
	$protected_urls = array(
		'',
		'',
		'',
		'',
	);

	// check if the current site url is in the protected urls array.
	if ( in_array( $site_url, $protected_urls, true ) ) {

		// hide the acf menu item.
		$display = false;

	}
	return $display;
}


/**
 * Callback function to display block templates.
 *
 * @param array $block Block details.
 * @return void
 */
function prdxn_theme_get_acf_block_template( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial").
	$slug = str_replace( 'acf/', '', $block['name'] );

	// include a template part from within the "parts/block" folder.
	if ( file_exists( get_theme_file_path( "/template-parts/blocks/{$slug}-display.php" ) ) ) {
		include get_theme_file_path( "/template-parts/blocks/{$slug}-display.php" );
	}
}

/**
 * Add muscles options page.
 */
if ( function_exists( 'acf_add_options_page' ) ) {

	// add parent.
	acf_add_options_page(
		array(
			'page_title' => 'Theme Settings',
			'menu_title' => 'Theme Settings',
			'redirect'   => false,
		)
	);
}
