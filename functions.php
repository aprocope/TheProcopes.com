<?php
/**
 * The Procopes Theme functions and definitions
 *
 * @package Procopes_Theme
 * @since 1.0.0
 */

// Prevent direct access to this file
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @since 1.0.0
 */
function procopes_theme_setup() {
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    load_theme_textdomain( 'procopes-theme', get_template_directory() . '/languages' );

    /*
     * Add support for block styles.
     * This enables the "Styles" tab in the block editor.
     */
    add_theme_support( 'wp-block-styles' );

    /*
     * Add support for responsive embedded content.
     * Makes embeds (like YouTube videos) scale properly.
     */
    add_theme_support( 'responsive-embeds' );

    /*
     * Add support for editor styles.
     * This applies your theme styles to the block editor.
     */
    add_theme_support( 'editor-styles' );

    /*
     * Enqueue editor styles.
     * These make the block editor canvas look like the front-end.
     */
    add_editor_style( 'style.css' );
    add_editor_style( 'assets/css/custom.css' );
    add_editor_style( 'assets/css/editor-style.css' );

    /*
     * Add support for custom logo.
     */
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 350,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    /*
     * Add support for post thumbnails (featured images).
     */
    add_theme_support( 'post-thumbnails' );

    /*
     * Add support for HTML5 markup.
     */
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    /*
     * Add support for automatic feed links.
     */
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'procopes_theme_setup' );

/**
 * Enqueue theme styles and scripts.
 *
 * @since 1.0.0
 */
function procopes_theme_scripts() {
    // Enqueue the main stylesheet
    wp_enqueue_style(
        'procopes-theme-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get( 'Version' )
    );

    // Enqueue custom styles
    wp_enqueue_style(
        'procopes-theme-custom',
        get_template_directory_uri() . '/assets/css/custom.css',
        array( 'procopes-theme-style' ),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'procopes_theme_scripts' );

/**
 * Enqueue block editor assets.
 *
 * @since 1.0.0
 */
function procopes_theme_editor_scripts() {
    // Add custom styles to the editor
    wp_enqueue_style(
        'procopes-theme-editor-style',
        get_template_directory_uri() . '/assets/css/custom.css',
        array(),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'enqueue_block_editor_assets', 'procopes_theme_editor_scripts' );

/**
 * Register block patterns category.
 *
 * @since 1.0.0
 */
function procopes_theme_register_pattern_categories() {
    register_block_pattern_category(
        'procopes-theme',
        array(
            'label'       => __( 'Procopes Theme', 'procopes-theme' ),
            'description' => __( 'Patterns designed for The Procopes Theme', 'procopes-theme' ),
        )
    );

    register_block_pattern_category(
        'procopes-hero',
        array(
            'label'       => __( 'Hero Sections', 'procopes-theme' ),
            'description' => __( 'Full-width hero sections for page headers', 'procopes-theme' ),
        )
    );

    register_block_pattern_category(
        'procopes-sections',
        array(
            'label'       => __( 'Content Sections', 'procopes-theme' ),
            'description' => __( 'Versatile content sections for pages', 'procopes-theme' ),
        )
    );
}
add_action( 'init', 'procopes_theme_register_pattern_categories' );

/**
 * Register custom block styles for easier visual editing.
 * These appear as one-click style options in the block toolbar.
 *
 * @since 1.0.0
 */
function procopes_theme_register_block_styles() {

    // Button: Gold Outline (transparent bg, gold border)
    register_block_style( 'core/button', array(
        'name'  => 'gold-outline',
        'label' => __( 'Gold Outline', 'procopes-theme' ),
        'inline_style' => '
            .is-style-gold-outline .wp-block-button__link {
                background-color: transparent;
                color: #EDE6DA;
                border: 1px solid #B08D57;
            }
            .is-style-gold-outline .wp-block-button__link:hover {
                background-color: #B08D57;
                color: #141414;
            }
        ',
    ) );

    // Button: Ghost (transparent with ivory border)
    register_block_style( 'core/button', array(
        'name'  => 'ghost',
        'label' => __( 'Ghost', 'procopes-theme' ),
        'inline_style' => '
            .is-style-ghost .wp-block-button__link {
                background-color: transparent;
                color: #EDE6DA;
                border: 1px solid rgba(237, 230, 218, 0.4);
            }
            .is-style-ghost .wp-block-button__link:hover {
                border-color: #EDE6DA;
            }
        ',
    ) );

    // Group: Museum Card (espresso bg with gold top border)
    register_block_style( 'core/group', array(
        'name'  => 'museum-card',
        'label' => __( 'Museum Card', 'procopes-theme' ),
        'inline_style' => '
            .is-style-museum-card {
                background-color: #1F1F22;
                border-top: 2px solid #B08D57;
                padding: 2.5rem 2rem;
            }
        ',
    ) );

    // Group: Espresso Panel (espresso bg, padded)
    register_block_style( 'core/group', array(
        'name'  => 'espresso-panel',
        'label' => __( 'Espresso Panel', 'procopes-theme' ),
        'inline_style' => '
            .is-style-espresso-panel {
                background-color: #2E2522;
                padding: 3rem 2.5rem;
            }
        ',
    ) );

    // Separator: Gold Rule
    register_block_style( 'core/separator', array(
        'name'  => 'gold-rule',
        'label' => __( 'Gold Rule', 'procopes-theme' ),
        'inline_style' => '
            .is-style-gold-rule {
                border: none;
                height: 1px;
                background-color: #B08D57;
                opacity: 0.5;
            }
        ',
    ) );

    // Quote: Museum Quote (gold left border, italic ivory text)
    register_block_style( 'core/quote', array(
        'name'  => 'museum-quote',
        'label' => __( 'Museum Quote', 'procopes-theme' ),
        'inline_style' => '
            .is-style-museum-quote {
                border-left: 3px solid #B08D57;
                padding-left: 1.5rem;
                font-style: italic;
                color: #CFC7BA;
            }
        ',
    ) );
}
add_action( 'init', 'procopes_theme_register_block_styles' );

/**
 * Add custom image sizes.
 *
 * @since 1.0.0
 */
function procopes_theme_custom_image_sizes() {
    // Featured image for blog posts
    add_image_size( 'procopes-featured', 1200, 800, true );

    // Square thumbnail for grids
    add_image_size( 'procopes-square', 600, 600, true );

    // Portrait for about sections
    add_image_size( 'procopes-portrait', 600, 900, true );
}
add_action( 'after_setup_theme', 'procopes_theme_custom_image_sizes' );

/**
 * Make custom image sizes selectable in the media library.
 *
 * @param array $sizes Existing image sizes.
 * @return array Modified image sizes.
 * @since 1.0.0
 */
function procopes_theme_custom_image_size_names( $sizes ) {
    return array_merge( $sizes, array(
        'procopes-featured' => __( 'Featured Image', 'procopes-theme' ),
        'procopes-square'   => __( 'Square', 'procopes-theme' ),
        'procopes-portrait' => __( 'Portrait', 'procopes-theme' ),
    ) );
}
add_filter( 'image_size_names_choose', 'procopes_theme_custom_image_size_names' );
