<?php
/**
 * Post Grid Display block - Gutenberg Block added with ACF plugin
 *
 * @package WordPress
 * @subpackage Prdxn_theme
 */

add_action( 'acf/init', 'prdxn_theme_latest_post_block' );


/**
 * Register the block with ACF
 *
 * @return void
 */
function prdxn_theme_latest_post_block() {
	// check function exists.
	if ( function_exists( 'acf_register_block' ) ) {
		acf_register_block(
			array(
				'name'            => 'latest-post',
				'title'           => __( 'latest Post', 'prdxn_theme' ),
				'description'     => __( 'This Block is display the latest post', 'prdxn_theme' ),
				'render_callback' => 'prdxn_theme_get_acf_block_template',
				'icon'            => 'schedule',
				'keywords'        => array( 'post', 'latest', 'blog', 'category' ),
				'supports'        => array(
					'align' => false,
				),
			)
		);
	}
}
