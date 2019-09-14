<?php
/**
 * Plugin Name: Extend Gutenberg Block Styles
 * Plugin URI: https://github.com/dominicvogl/gutenberg-block-styles/
 * Description: A simple plugin to demonstrate how to add block styles to Gutenberg.
 * Version: 1.1
 * Author: Dominic Vogl
 */

// if this file is called directly, DIE!
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/**
 * Enqueue Block Styles Javascript
 */
if ( ! function_exists( 'block_styles_enqueue_javascript' ) ) {

	function block_styles_enqueue_javascript() {
		wp_enqueue_script( 'block-styles-script', plugins_url( 'block.js', __FILE__ ), array( 'wp-blocks' ) );
	}

	add_action( 'enqueue_block_editor_assets', 'block_styles_enqueue_javascript' );
}


/**
 * Enqueue Block Styles Stylesheet
 */

if ( ! function_exists( 'block_styles_enqueue_stylesheet' ) ) {

	function block_styles_enqueue_stylesheet() {
		wp_enqueue_style( 'block-styles-stylesheet',
			plugins_url( 'style.css', __FILE__ )
		);
	}

	add_action( 'enqueue_block_assets', 'block_styles_enqueue_stylesheet' );
}
