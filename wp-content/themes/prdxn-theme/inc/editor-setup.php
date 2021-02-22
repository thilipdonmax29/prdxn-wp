<?php
/**
 * Editor setup, colors, font-sizes, etc.
 *
 * @package WordPress
 * @subpackage prdxn_theme_Theme
 */

add_action( 'after_setup_theme', 'prdxn_theme_editor_setup' );

/**
 * Setup Editor.
 *
 * @return void
 */
function prdxn_theme_editor_setup() {

	/**
	 * Block Color Palettes.
	 */
	add_theme_support(
		'editor-color-palette',
		array(
			array(
				'name'  => __( 'Primary', 'prdxn-theme' ),
				'slug'  => 'primary',
				'color' => '#007bff',
			),
			array(
				'name'  => __( 'Secondary', 'prdxn-theme' ),
				'slug'  => 'secondary',
				'color' => '#6c757d',
			),
			array(
				'name'  => __( 'Success', 'prdxn-theme' ),
				'slug'  => 'success',
				'color' => '#28a745',
			),
			array(
				'name'  => __( 'Info', 'prdxn-theme' ),
				'slug'  => 'info',
				'color' => '#17a2b8',
			),
			array(
				'name'  => __( 'Warning', 'prdxn-theme' ),
				'slug'  => 'warning',
				'color' => '#ffc107',
			),
			array(
				'name'  => __( 'Danger', 'prdxn-theme' ),
				'slug'  => 'danger',
				'color' => '#dc3545',
			),
			array(
				'name'  => __( 'Gray', 'prdxn-theme' ),
				'slug'  => 'gray',
				'color' => '#f8f9fa',
			),
			array(
				'name'  => __( 'White', 'prdxn-theme' ),
				'slug'  => 'white',
				'color' => '#fff',
			),
			array(
				'name'  => __( 'Black', 'prdxn-theme' ),
				'slug'  => 'black',
				'color' => '#000',
			),
		)
	);

	/**
	 * Block Font Sizes.
	 */
	add_theme_support(
		'editor-font-sizes',
		array(
			array(
				'name' => __( 'Small', 'prdxn-theme' ),
				'size' => 12,
				'slug' => 'small',
			),
			array(
				'name' => __( 'Regular', 'prdxn-theme' ),
				'size' => 16,
				'slug' => 'regular',
			),
			array(
				'name' => __( 'Lead', 'prdxn-theme' ),
				'size' => 22,
				'slug' => 'lead',
			),
		)
	);
}
