<?php
/**
 * Custom Post Display block - Gutenberg Block added with ACF plugin *
 *
 * @package WordPress
 * @subpackage prdxn_theme_Theme
 */

add_action( 'acf/init', 'prdxn_theme_custom_post_block' );


/**
 * Register the block with ACF
 *
 * @return void
 */
function prdxn_theme_custom_post_block() {
	// check function exists.
	if ( function_exists( 'acf_register_block' ) ) {
		acf_register_block(
			array(
				'name'            => 'custom-post',
				'title'           => __( 'Custom Post Block', 'prdxn_theme' ),
				'description'     => __( 'This Block is display the Custom post by the user select', 'prdxn_theme' ),
				'render_callback' => 'prdxn_theme_get_acf_block_template',
				'icon'            => 'grid-view',
				'keywords'        => array( 'post', 'Custom', 'blog' ),
				'supports'        => array(
					'align' => false,
				),
			)
		);
	}
}
