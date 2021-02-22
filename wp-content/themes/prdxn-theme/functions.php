<?php
/**
 * prdxn-theme functions and definitions
 *
 * @package WordPress
 * @subpackage prdxn_theme_Theme
 */

/**
 * Theme support and setup.
 */
require get_template_directory() . '/inc/theme-setup.php';

/**
 * Editor setup.
 */
require get_template_directory() . '/inc/editor-setup.php';

/**
 * Load acf functions.
 */
require get_template_directory() . '/inc/acf.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Register Bootstrap Navigation Walker.
 */
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load ACF Blocks
 */
require_once get_template_directory() . '/inc/acf-blocks/custom-post-block.php';
require_once get_template_directory() . '/inc/acf-blocks/recent-post-block.php';
require_once get_template_directory() . '/inc/acf-blocks/latest-post-block.php';
