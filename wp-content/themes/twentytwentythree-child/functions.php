<?php

if ( !defined( 'ABSPATH' ) ) exit;


if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

if ( ! function_exists( 'child_theme_setup' ) ) :

	/**
	 * Sets up theme defaults and registers support for various
	 * WordPress features.
	 */
	function child_theme_setup() {

		/**
		 * Add default posts and comments RSS feed links to <head>.
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Enable support for post thumbnails and featured images.
		 */
		add_theme_support( 'post-thumbnails' );

        /**
         * Enable support for responsive embeds and post embed.
         */
        add_theme_support( 'responsive-embeds' );

        /**
         * Enable support for editor style options.
         */
        add_theme_support( 'editor-styles' );

        /**
         * Enable custom header
         */
        add_theme_support('custom-header');
        /**
         * enable support for html5, css, and JavaScript.
         */
        add_theme_support( 'html5', array( 'style','script' ) );

		/**
		 * Add support for two custom navigation menus.
		 */
		register_nav_menus( array(
			'primary'   => __( 'Primary Menu', 'arsha' ),
			'secondary' => __( 'Secondary Menu', 'arsha' ),
		) );

		/**
		 * Enable support for the following post formats:
		 * aside, gallery, quote, image, and video
		 */
		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
	}
endif; // arsha_setup
add_action( 'after_setup_theme', 'child_theme_setup' );

/**
 * Register sidebar
 */

 register_sidebar(
    array(
        'name' => 'Sidebar Area',
        'id' => 'left-sidebar'
    )
    );
register_sidebar(
        array(
            'name' => 'Footer column 1',
            'id' => 'footer-1'
        )
);
register_sidebar(
        array(
            'name' => 'Footer column 2',
            'id' => 'footer-2'
        )
    );
register_sidebar(
    array(
        'name' => 'Footer column 3',
        'id' => 'footer-3'
    )
    );

    function wpdocs_custom_excerpt_length( $length ) {
        return 20;
    }
    add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

