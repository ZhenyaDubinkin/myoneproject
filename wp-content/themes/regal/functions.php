<?php
/**
 * regal functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package regal
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.11' );
}
//Template directory path
define( '_TPL_DIR', get_template_directory_uri() . '/' );

if ( ! function_exists( 'regal_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function regal_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on regal, use a find and replace
		 * to change 'regal' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'regal', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'regal' ),
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
				'regal_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'regal_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function regal_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'regal_content_width', 640 );
}
add_action( 'after_setup_theme', 'regal_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function regal_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'regal' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'regal' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'regal_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function regal_scripts() {
	wp_enqueue_style( 'regal-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'regal-fancybox-styles', get_template_directory_uri() . '/assets/css/fancybox.css', array(), _S_VERSION );
	wp_enqueue_style( 'regal-aos-styles', get_template_directory_uri() . '/assets/css/aos.css', array(), _S_VERSION, '(min-width: 1025px)' );
	wp_enqueue_style( 'regal-main-styles', get_template_directory_uri() . '/assets/css/styles.css', array(), _S_VERSION );
	wp_enqueue_style( 'regal-1099', get_template_directory_uri() . '/assets/css/response_1099.css', array(), _S_VERSION, '(max-width: 1099px)' );
	wp_enqueue_style( 'regal-1023', get_template_directory_uri() . '/assets/css/response_1023.css', array(), _S_VERSION, '(max-width: 1023px)' );
	wp_enqueue_style( 'regal-749', get_template_directory_uri() . '/assets/css/response_749.css', array(), _S_VERSION, '(max-width: 749px)' );
	wp_enqueue_style( 'regal-479', get_template_directory_uri() . '/assets/css/response_479.css', array(), _S_VERSION, '(max-width: 479px)' );


	wp_style_add_data( 'regal-style', 'rtl', 'replace' );

	wp_enqueue_script('jquery');
	wp_enqueue_script( 'regal-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'regal-lozad', get_template_directory_uri() . '/assets/js/lozad.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'regal-aos', get_template_directory_uri() . '/assets/js/aos.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'regal-fancybox', get_template_directory_uri() . '/assets/js/fancybox.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'regal-maskedinput', get_template_directory_uri() . '/assets/js/jquery.maskedinput.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'regal-nice-select', get_template_directory_uri() . '/assets/js/nice-select.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'regal-inview', get_template_directory_uri() . '/assets/js/in-view.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'regal-functions', get_template_directory_uri() . '/assets/js/functions.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'regal-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'regal_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

