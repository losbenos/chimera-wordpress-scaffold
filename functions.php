<?php

if ( ! function_exists( 'chimera_master_support' ) ) :
	function chimera_master_support()  {

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		//remove core block patterns
		remove_theme_support( 'core-block-patterns' );

	}
	add_action( 'after_setup_theme', 'chimera_master_support' );
endif;
//remove pattern directory patterns (not needed if we've used remove_theme_support( 'core-block-patterns' ))
//add_filter( 'should_load_remote_block_patterns', '__return_false' );


/**
 * Enqueue scripts and styles.
 */
function chimera_master_scripts() {
	// Enqueue theme stylesheet.
	wp_enqueue_style( 'chimera-master-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
}

add_action( 'wp_enqueue_scripts', 'chimera_master_scripts' );

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function chimera_custom_block_block_init() {
	register_block_type( __DIR__ . '/custom-block/build' );
}
add_action( 'init', 'chimera_custom_block_block_init' );