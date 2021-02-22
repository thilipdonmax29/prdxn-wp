<?php
/**
 * Post Grid Display block - Gutenberg Block added with ACF plugin
 *
 * @package WordPress
 * @subpackage Prdxn_theme
 */

add_action( 'acf/init', 'prdxn_theme_recent_post_block' );


/**
 * Register the block with ACF
 *
 * @return void
 */
function prdxn_theme_recent_post_block() {
	// check function exists.
	if ( function_exists( 'acf_register_block' ) ) {
		acf_register_block(
			array(
				'name'            => 'recent-post',
				'title'           => __( 'Recent Post', 'prdxn_theme' ),
				'description'     => __( 'This Block is display the recent post', 'prdxn_theme' ),
				'render_callback' => 'prdxn_theme_get_acf_block_template',
				'icon'            => 'layout',
				'keywords'        => array( 'post', 'recent', 'blog', 'category' ),
				'supports'        => array(
					'align' => false,
				),
			)
		);
	}
}
