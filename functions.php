<?php
/**
 * novena functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package novena
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function novena_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on novena, use a find and replace
		* to change 'novena' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'novena', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'primary-menu' => esc_html__( 'Primary', 'novena' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'novena_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'novena_setup' );

/**
 * Enqueue scripts and styles.
 */
function novena_scripts() {
	wp_enqueue_style( 'fonts-bx', '//unpkg.com/boxicons@2.1.4/css/boxicons.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'fonts', '//fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap', array(), _S_VERSION );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'icofont', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'novena-main', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION );
	wp_enqueue_style( 'novena-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'novena-style', 'rtl', 'replace' );

	
	wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'novena_scripts' );


function sliders_cpt() {
	$labels = array(
	  'name'               => _x( 'Sliders', 'post type general name' ),
	  'singular_name'      => _x( 'Slider', 'post type singular name' ),
	  'add_new'            => _x( 'Add New', 'Slider' ),
	  'add_new_item'       => __( 'Add New Slider' ),
	  'edit_item'          => __( 'Edit Slider' ),
	  'new_item'           => __( 'New Slider' ),
	  'all_items'          => __( 'All Sliders' ),
	  'view_item'          => __( 'View Slider' ),
	  'search_items'       => __( 'Search Sliders' ),
	  'not_found'          => __( 'No sliders found' ),
	  'not_found_in_trash' => __( 'No sliders found in the Trash' ), 
	  'menu_name'          => 'Sliders'
	);
	$args = array(
	  'labels'        => $labels,
	  'description'   => 'Holds our products and product specific data',
	  'public'        => true,
	  'menu_position' => 5,
	  'supports'      => array( 'title', 'thumbnail', 'custom-fields' ),
	  'has_archive'   => true,
	);
	register_post_type( 'sliders', $args ); 


	$labels = array(
		'name'               => _x( 'Tours', 'post type general name' ),
		'singular_name'      => _x( 'Tour', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'Tour' ),
		'add_new_item'       => __( 'Add New Tour' ),
		'edit_item'          => __( 'Edit Tour' ),
		'new_item'           => __( 'New Tour' ),
		'all_items'          => __( 'All Tours' ),
		'view_item'          => __( 'View Tour' ),
		'search_items'       => __( 'Search Tours' ),
		'not_found'          => __( 'No Tour found' ),
		'not_found_in_trash' => __( 'No Tours found in the Trash' ), 
		'menu_name'          => 'Tours'
	  );
	  $args = array(
		'labels'        => $labels,
		'description'   => 'Holds our products and product specific data',
		'public'        => true,
		'menu_position' => 5,
		'show_in_rest' => true,
		'supports'      => array( 'title', 'thumbnail', 'custom-fields', 'editor' ),
		'has_archive'   => true,
	  );
	  register_post_type( 'tours', $args ); 
  }
  add_action( 'init', 'sliders_cpt' );