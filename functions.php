<?php

/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package corvona
 * @since 1.0.0
 */

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
if ( ! function_exists( 'cor_fs' ) ) {
    // Create a helper function for easy SDK access.
    function cor_fs() {
        global $cor_fs;

        if ( ! isset( $cor_fs ) ) {
            // Include Freemius SDK.
            require_once dirname( __FILE__ ) . '/inc/freemius/start.php';

            $cor_fs = fs_dynamic_init( array(
                'id'                  => '21831',
                'slug'                => 'corvona',
                'type'                => 'theme',
                'public_key'          => 'pk_b5d6e2d2c82a5770b154d959077b3',
                'is_premium'          => true,
                'is_premium_only'     => true,
                'has_addons'          => false,
                'has_paid_plans'      => true,
                // Automatically removed in the free version. If you're not using the
                // auto-generated free version, delete this line before uploading to wp.org.
                'wp_org_gatekeeper'   => 'OA7#BoRiBNqdf52FvzEf!!074aRLPs8fspif$7K1#4u4Csys1fQlCecVcUTOs2mcpeVHi#C2j9d09fOTvbC0HloPT7fFee5WdS3G',
                'trial'               => array(
                    'days'               => 3,
                    'is_require_payment' => true,
                ),
                'menu'                => array(
                    'support'        => false,
                ),
            ) );
        }

        return $cor_fs;
    }

    // Init Freemius.
    cor_fs();
    // Signal that SDK was initiated.
    do_action( 'cor_fs_loaded' );
}

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

// admin style
function corvona_admin_styles()
{
	wp_enqueue_style(
		'corvona-admin-style',
		get_template_directory_uri() . '/assets/css/theme-info.css',
		[],
		wp_get_theme()->get('Version')
	);
}
add_action('admin_enqueue_scripts', 'corvona_admin_styles');

// enqueue dashicons
add_action('enqueue_block_assets', function (): void {
	wp_enqueue_style('dashicons');
	wp_enqueue_script('corvona-main-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('corvona-custom.js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '1.0.0', true);

});

function corvona_excerpt_length($length)
{

	$excerpt_length = 20;
	if (is_admin()) return $length;
	return $excerpt_length;
}
add_filter('excerpt_length', 'corvona_excerpt_length');
// tgm-plugin
require get_template_directory() . '/inc/tgm-plugin/tgmpa-hook.php';


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
