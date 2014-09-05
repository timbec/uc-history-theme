<?php
/**
 * uc_history functions and definitions
 *
 * @package uc_history
 */

require_once('inc/custom-post-types.php'); // custom post types

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'uc_history_setup' ) ) :


/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */

function uc_history_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on uc_history, use a find and replace
	 * to change 'uc_history' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'uc_history', get_template_directory() . '/languages' );

	/**
	 * Add post format for galleries
	 */
	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	$uc_post_formats = array( 'chat', 'audio', 'video', 'gallery' );
	add_theme_support( 'post-formats', $uc_post_formats );
	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'uc_history' ),
	) );

	/**
	 * Setup the WordPress core custom background feature.
	 */
	add_theme_support( 'custom-background', apply_filters( 'uc_history_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // uc_history_setup
add_action( 'after_setup_theme', 'uc_history_setup' );

// Custom Editor Style Support
add_editor_style();

// Support for Featured Images
add_theme_support( 'post-thumbnails' );


//Sets Featured Image Size

add_image_size( 'recent-posts', 200, 160, true ); //width, height, crop

add_image_size( 'news-archive', 200, 160, true ); //width, height, crop

add_image_size( 'photo-thumbnails', 240, 180, true ); //width, height, crop

//add_image_size( 'gallery-image', 'auto', 500, true ); //width, height, crop

add_image_size( 'photo-carousel', 225, 152, true ); //width, height, crop

add_image_size( 'slider-image', 1040, 400, false ); //width, height, crop

/**
 * Register widgetized area and update sidebar with default widgets
 */
function uc_history_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'uc_history' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'uc_history_widgets_init' );

/**
 * Enqueue Scripts and Styles for Front-End
 */

/* pull jquery from google's CDN. If it's not available, grab the local copy. Code from wp.tutsplus.com :-) */

$url = 'http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js'; // the URL to check against
$test_url = @fopen($url,'r'); // test parameters
if( $test_url !== false ) { // test if the URL exists

    function load_external_jQuery() { // load external file
        wp_deregister_script( 'jquery' ); // deregisters the default WordPress jQuery
        wp_register_script('jquery', 'http://code.jquery.com/jquery-1.10.1.min.js'); // register the external file
        //wp_register_script('jquery', 'http://fotorama.s3.amazonaws.com/4.2.1/fotorama.js'); // register the external file
        wp_enqueue_script('jquery'); // enqueue the external file
    }

    add_action('wp_enqueue_scripts', 'load_external_jQuery'); // initiate the function
} else {

    function load_local_jQuery() {
        wp_deregister_script('jquery'); // initiate the function
        wp_register_script('jquery', bloginfo('template_url').'/js/jquery-2.0.3.min.js', __FILE__, false, '2.0.3', true); // register the local file
        wp_enqueue_script('jquery'); // enqueue the local file
    }

    add_action('wp_enqueue_scripts', 'load_local_jQuery'); // initiate the function
}


/**
 * Enqueue scripts and styles
 */
function uc_history_scripts() {
	//wp_enqueue_style( 'uc_history-style', get_stylesheet_uri() );

	//wp_enqueue_script( 'uc_history-navigation', get_template_directory_uri() . '/js/vendor/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'uc-off-canvas', get_template_directory_uri().'/js/vendor/off-canvas.js', null, '2.1.0', true);

	wp_enqueue_script( 'uc-news-ticker', get_template_directory_uri().'/js/vendor/jquery.marquee.min.js', null, '2.1.0');

	wp_enqueue_script( 'uc-flexslider', get_template_directory_uri().'/js/vendor/jquery.flexslider-min.js', null, '2.1.0');

	wp_enqueue_script( 'uc-bxslider', get_template_directory_uri().'/js/vendor/jquery.bxslider.js', null, '2.1.0');

	wp_enqueue_script( 'uc-easing', get_template_directory_uri() . '/js/vendor/jquery.easing.1.3.js' );

	// wp_enqueue_script( 'uc_history-skip-link-focus-fix', get_template_directory_uri() . '/js/vender/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_script( 'uc_history-masonry', get_template_directory_uri() . '/js/vendor/jquery.masonry.js', array(), '20130115', true );

	wp_enqueue_script( 'uc_history-magnific-popup', get_template_directory_uri() . '/js/vendor/jquery.magnific-popup.min.js', array(), '20130115', true );

	wp_enqueue_script( 'uc_history-fivids', get_template_directory_uri() . '/js/vendor/jquery.fitvidss.js', array(), '20130115', true );

	wp_enqueue_script( 'initialize', get_template_directory_uri() . '/js/app.js' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'uc_history-keyboard-image-navigation', get_template_directory_uri() . '/js/vendor/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'uc_history_scripts');

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
