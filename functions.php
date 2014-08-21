<?php
/**
 * candybee functions and definitions
 *
 * @package candybee
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

add_filter( 'wp_default_scripts', 'change_default_jquery' );

function change_default_jquery( &$scripts){
    if(!is_admin()){
        $scripts->remove( 'jquery');
    }
}

if ( ! function_exists( 'candybee_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function candybee_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on candybee, use a find and replace
	 * to change 'candybee' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'candybee', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'candybee' ),
	) );
	
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link'
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'candybee_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // candybee_setup
add_action( 'after_setup_theme', 'candybee_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function candybee_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'candybee' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'candybee_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function candybee_scripts() {
	// wp_enqueue_style( 'candybee-style', get_stylesheet_uri() );

	wp_enqueue_style( 'normalize-style', get_template_directory_uri() . '/css/normalize.css', array(), '3.0.1', 'all' );

	wp_enqueue_style( 'furatto-style', get_template_directory_uri() . '/css/furatto.css', array(), '1.0', 'all' );

	wp_enqueue_style( 'bxslider-style', get_template_directory_uri() . '/css/jquery.bxslider.css', array(), '1.0.65', 'all' );

	wp_enqueue_style( 'fancybox-style', get_template_directory_uri() . '/css/jquery.fancybox.css', array(), '2.1.5', 'all' );

	// wp_enqueue_script( 'candybee-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'candybee-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_script( 'jquery-script', get_template_directory_uri() . '/js/jquery-2.1.1.min.js', array(), '2.1.1', false );

	wp_enqueue_script( 'bxslider-script', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array(), '1.0.65', true );

	wp_enqueue_script( 'fancybox-script', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array(), '2.1.5', true );

	// wp_enqueue_script( 'furatto-script', get_template_directory_uri() . '/js/furatto.min.js', array(), '1.0', true );

	wp_enqueue_script( 'iscroll-script', get_template_directory_uri() . '/js/iscroll.js', array(), '5.0', true );

	if( is_front_page() ){
		wp_enqueue_script( 'candy-front-script', get_template_directory_uri() . '/js/tan.js', array(), '1.0', true );
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'candybee_scripts' );
/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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

$dirName = dirname(__FILE__);
$baseName = basename(realpath($dirName));
require_once ("$dirName/ajax-function.php");

	
