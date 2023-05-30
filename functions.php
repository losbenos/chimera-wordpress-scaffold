<?php

define( 'CHIMERA_THEME_VERSION', wp_get_theme()->get( 'Version' ) );




if ( ! function_exists( 'chimera_master_support' ) ) :
	function chimera_master_support()  {

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		//remove core block patterns
		remove_theme_support( 'core-block-patterns' );

		//add support for classic menus
		add_theme_support( 'menus' );

		//responsive iframes
		add_theme_support( 'responsive-embeds' );

		//reinstate the customizer (useful for some woo setings)
		//add_action( 'customize_register', '__return_true' );
	}
	add_action( 'after_setup_theme', 'chimera_master_support' );
endif;





//Enqueue scripts and styles.
function chimera_master_scripts() {
	// Enqueue theme stylesheet.
	wp_register_style( 'chimera-master-style', get_template_directory_uri() . '/style.css', array(), CHIMERA_THEME_VERSION );
	wp_enqueue_style( 'chimera-master-style' );
}
add_action( 'wp_enqueue_scripts', 'chimera_master_scripts' );





//Registers the block using the metadata loaded from the `block.json` file.
//Behind the scenes, it also registers all assets so they can be enqueued
//through the block editor in the corresponding context.

//@see https://developer.wordpress.org/reference/functions/register_block_type/
function chimera_custom_block_block_init() {
	register_block_type( __DIR__ . '/custom-block/build' );
}
add_action( 'init', 'chimera_custom_block_block_init' );




//Block style examples.
require_once get_theme_file_path( 'inc/register-block-styles.php' );




//This is an example of how to register a block variation.
//Type /full or use the block inserter to insert a full width group block.

//@see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-variations/
function chimera_register_block_variation() {
	wp_enqueue_script(
		'chimera-block-variations',
		get_template_directory_uri() . '/assets/js/block-variation.js',
		array( 'wp-blocks' ),
		CHIMERA_THEME_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'chimera_register_block_variation' );




//Load custom block styles only when the block is used
function chimera_enqueue_custom_block_styles() {

	// Scan our styles folder to locate block styles
	$files = glob( get_template_directory() . '/assets/styles/*.css' );

	foreach ( $files as $file ) {

		// Get the filename and core block name
		$filename   = basename( $file, '.css' );
		$block_name = str_replace( 'core-', 'core/', $filename );

		wp_enqueue_block_style(
			$block_name,
			array(
				'handle' => "chimera-block-{$filename}",
				'src'    => get_theme_file_uri( "assets/styles/{$filename}.css" ),
				'path'   => get_theme_file_path( "assets/styles/{$filename}.css" ),
			)
		);
	}
}
add_action( 'init', 'chimera_enqueue_custom_block_styles' );






//Registers block pattern categories and types.
function chimera_register_block_pattern_categories() {

	/* Functionality specific to the Block Pattern Explorer plugin. */
	if ( function_exists( 'register_block_pattern_category_type' ) ) {
		register_block_pattern_category_type( 'chimera', array( 'label' => __( 'Chimera', 'chimera' ) ) );
	}

	$block_pattern_categories = array(
		'chimera-footer'       => array(
			'label'         => __( 'Chimera Footer', 'chimera' ),
			'categoryTypes' => array( 'chimera-footer' ),
		),
		'chimera-cta'      => array(
			'label'         => __( 'Chimera CTA', 'chimera' ),
			'categoryTypes' => array( 'chimera-cta' ),
		),
		'chimera-people'      => array(
			'label'         => __( 'Chimera People', 'chimera' ),
			'categoryTypes' => array( 'chimera-people' ),
		),
		'chimera-faq'      => array(
			'label'         => __( 'Chimera FAQ', 'chimera' ),
			'categoryTypes' => array( 'chimera-faq' ),
		),
		'chimera-features'      => array(
			'label'         => __( 'Chimera Features', 'chimera' ),
			'categoryTypes' => array( 'chimera-features' ),
		),
		'chimera-footer'      => array(
			'label'         => __( 'Chimera Footer', 'chimera' ),
			'categoryTypes' => array( 'chimera-footer' ),
		),
		'chimera-gallery'      => array(
			'label'         => __( 'Chimera Gallery', 'chimera' ),
			'categoryTypes' => array( 'chimera-gallery' ),
		),
		'chimera-header'      => array(
			'label'         => __( 'Chimera Header', 'chimera' ),
			'categoryTypes' => array( 'chimera-header' ),
		),
		'chimera-hero'      => array(
			'label'         => __( 'Chimera Hero', 'chimera' ),
			'categoryTypes' => array( 'chimera-hero' ),
		),
		'chimera-pricing'      => array(
			'label'         => __( 'Chimera Pricing', 'chimera' ),
			'categoryTypes' => array( 'chimera-pricing' ),
		),
		'chimera-testimonials'      => array(
			'label'         => __( 'Chimera Testimonials', 'chimera' ),
			'categoryTypes' => array( 'chimera-testimonials' ),
		),
	);

	foreach ( $block_pattern_categories as $slug => $properties ) {
		register_block_pattern_category( $slug, $properties );
	}
}
add_action( 'init', 'chimera_register_block_pattern_categories', 9 );