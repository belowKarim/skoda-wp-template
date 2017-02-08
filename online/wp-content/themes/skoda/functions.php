<?php
/**
 * skoda functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package skoda
 */

if ( ! function_exists( 'skoda_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function skoda_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on skoda, use a find and replace
	 * to change 'skoda' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'skoda', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'skoda' ),
		'footer_menu' => esc_html__( 'Footer-Menu', 'skoda' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'skoda_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'skoda_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function skoda_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'skoda_content_width', 640 );
}
add_action( 'after_setup_theme', 'skoda_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function skoda_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'skoda' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'skoda' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'skoda_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function skoda_scripts() {
	wp_enqueue_style( 'skoda-style', get_stylesheet_uri() );

	wp_enqueue_script( 'skoda-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'skoda-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'skoda_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';



// List of allowed checkboxs
function cf7_allowed_checkbox( $name ) {
    switch ( $name ){
        case  'fabia':
        case  'fabia_combi':
        case  'rapid':
        case  'rapid_spaceback':
        case  'octavia':
        case  'octavia_combi':
        case  'superb':
		case  'citigo':
		case  'yeti':
		case  'kodiaq':
        case  'superb_combi':
            return true;
    }     
    return false;
}

// function checks that were at least one car in result
function wpcf7_all_cars_validation_filter( $result, $tags ) {
    $selected_cars = false;
    
    foreach ( $tags as $tag ) {
        if ( $tag['type'] === 'checkbox' && cf7_allowed_checkbox( $tag['name'] ) ) {
            if ( isset( $_POST[$tag['name']] ) ) {
                $selected_cars = true;
            }
        }
    }
    
    if ( ! $selected_cars ) {
        foreach ( $tags as $tag ) {
            if ( $tag['type'] === 'checkbox' && cf7_allowed_checkbox( $tag['name'] ) ){
                $result->invalidate( $tag, __( "At least one auto must be selected", 'skoda' ) );
            }
         }
    } 
    return $result;
}
add_filter( 'wpcf7_validate', 'wpcf7_all_cars_validation_filter', 20, 2 );




// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');