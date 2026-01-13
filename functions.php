<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package corvona
 * @since 1.0.0
 */

if (! function_exists('corvona_support')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */

	function corvona_support()
	{

		add_editor_style(get_template_directory_uri() . '/assets/css/editor.css');

		load_theme_textdomain('corvona', get_template_directory() . '/languages');

		// Add support for block styles.
		add_theme_support('wp-block-styles');

		// Add support for post thumbnails
		add_theme_support('post-thumbnails');
	}

endif;
add_action('after_setup_theme', 'corvona_support');

function corvona_styles()
{
	wp_enqueue_style(
		'corvona-style',
		get_stylesheet_uri(),
		[],
		wp_get_theme()->get('Version')
	);

	wp_enqueue_style(
		'corvona-font-awesome',
		get_template_directory_uri() . '/assets/css/font-awesome/css/all.css',
		[],
		wp_get_theme()->get('Version')
	);

	wp_enqueue_style('dashicons');
}
add_action('wp_enqueue_scripts', 'corvona_styles');

// enqueue dashicons
add_action('enqueue_block_assets', function (): void {
	wp_enqueue_style('dashicons');
});

function corvona_excerpt_length( $length ) {

	if ( is_admin() ) {
		return $length;
	}
	return 20;
}
add_filter( 'excerpt_length', 'corvona_excerpt_length' );

// add block patterns
require get_template_directory() . '/inc/block-patterns.php';

/**
 * Register block styles.
 */

if (! function_exists('corvona_block_styles')) :
	/**
	 * Register custom block styles
	 *
	 * @since corvonae
	 * @return void
	 */
	function corvona_block_styles()
	{

		register_block_style(
			'core/paragraph',
			array(
				'name'         => 'admin-icon',
				'label'        => __('Admin Icon', 'corvona'),
				/*
				 * Styles for the custom Arrow icon style of the Details block
				 */
				'inline_style' => '
				.is-style-admin-icon:before {
					content: "\f110";
					font-family: "dashicons";
				}
				.is-style-admin-icon span{
					display: none;
				}',
			)
		);
	}
endif;

add_action('init', 'corvona_block_styles');
