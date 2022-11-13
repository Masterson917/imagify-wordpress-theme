<?php

if ( ! function_exists( 'Imagify_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since My theme name 1.0
	 *
	 * @return void
	 */
	function Imagify_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		wp_enqueue_style('style', get_stylesheet_uri() );	

	}

endif;
add_action( 'after_setup_theme', 'Imagify_support' );

/*----------------------------------------------------------------------
Enqueue Styles
------------------------------------------------------------------------*/

if ( ! function_exists( 'Imagify_styles' )) :

function Imagify_styles() {
     //Register Stylesheet
     wp_enqueue_style('Imagify-style', get_stylesheet_uri(), array(), wp_get_theme()->get('version'));
     wp_enqueue_style('Imagify-style-blocks', get_template_directory_uri().'/assets/css/blocks.css');
	 
}

endif;

add_action( 'wp_enqueue_scripts', 'Imagify_support' );