<?php
/**
* eshop functions and definitions
*
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
* @package eshop
*/
if ( ! function_exists( 'eshop_setup' ) ) :
	/**
	* Sets up theme defaults and registers support for various WordPress features.
	*
	* Note that this function is hooked into the after_setup_theme hook, which
	* runs before the init hook. The init hook is too late for some features, such
	* as indicating support for post thumbnails.
	*/
	function eshop_setup() {
		/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on eshop, use a find and replace
		* to change 'eshop' to the name of your theme in all the template files.
		*/
		load_theme_textdomain( 'eshop', get_template_directory() . '/languages' );
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
			'menu-1' => esc_html__( 'Primary', 'eshop' ),
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
		add_theme_support( 'custom-background', apply_filters( 'eshop_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
		/**
		* Add support for core custom logo.
		*
		* @link https://codex.wordpress.org/Theme_Logo
		*/
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'eshop_setup' );
/**
* Set the content width in pixels, based on the theme's design and stylesheet.
*
* Priority 0 to make it available to lower priority callbacks.
*
* @global int $content_width
*/
function eshop_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'eshop_content_width', 640 );
}
add_action( 'after_setup_theme', 'eshop_content_width', 0 );
/**
* Register widget area.
*
* @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
*/
function eshop_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'eshop' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'eshop' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'eshop_widgets_init' );
/**
* Enqueue scripts and styles.
*/
function eshop_scripts() {
	
	// Custom CSS for ESHOP
		
	wp_enqueue_style( 'eshop-css-icon ', get_template_directory_uri() . '/images/icons/favicon.png', false, '1.0.0', 'all' );
	wp_enqueue_style( 'eshop-css-bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', false, '1.0.0', 'all' );
	wp_enqueue_style( 'eshop-css-fonts', get_template_directory_uri() . '/fonts/font-awesome-4.7.0/css/font-awesome.min.css', false, '1.0.0', 'all' );
	wp_enqueue_style( 'eshop-themify-icons', get_template_directory_uri() . '/fonts/themify/themify-icons.css', false, '1.0.0', 'all' );
	wp_enqueue_style( 'eshop-Linears-icons', get_template_directory_uri() . '/fonts/Linearicons-Free-v1.0.0/icon-font.min.css', false, '1.0.0', 'all' );
	wp_enqueue_style( 'eshop-css-elegant-font', get_template_directory_uri() . '/fonts/elegant-font/html-css/style.css', false, '1.0.0', 'all' );
	wp_enqueue_style( 'eshop-css-animate', get_template_directory_uri() . '/vendor/animate/animate.css', false, '1.0.0', 'all' );
	wp_enqueue_style( 'eshop-css-hamburgers', get_template_directory_uri() . '/vendor/css-hamburgers/hamburgers.min.css', false, '1.0.0', 'all' );
	wp_enqueue_style( 'eshop-css-animsition', get_template_directory_uri() . '/vendor/animsition/css/animsition.min.css', false, '1.0.0', 'all' );
	wp_enqueue_style( 'eshop-css-select2', get_template_directory_uri() . '/vendor/select2/select2.min.css', false, '1.0.0', 'all' );
	wp_enqueue_style( 'eshop-css-daterangepicker', get_template_directory_uri() . '/vendor/daterangepicker/daterangepicker.css', false, '1.0.0', 'all' );
	wp_enqueue_style( 'eshop-css-slick', get_template_directory_uri() . '/vendor/slick/slick.css', false, '1.0.0', 'all' );
	wp_enqueue_style( 'eshop-css-lightbox2', get_template_directory_uri() . '/vendor/lightbox2/css/lightbox.min.css', false, '1.0.0', 'all' );
	wp_enqueue_style( 'eshop-css-util', get_template_directory_uri() . '/css/util.css', false, '1.0.0', 'all' );
	wp_enqueue_style( 'eshop-css-main', get_template_directory_uri() . '/css/main.css', false, '1.0.0', 'all' );
	
	// Custom JavaScript for ESHOP website
	wp_enqueue_script('eshop-jquery-js', get_template_directory_uri() . '/vendor/jquery/jquery-3.2.1.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('eshop-js-animsition', get_template_directory_uri() . '/vendor/animsition/js/animsition.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('eshop-js-popper', get_template_directory_uri() . '/vendor/bootstrap/js/popper.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('eshop-jquerybootstrap-js', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('eshop-js-select2', get_template_directory_uri() . '/vendor/select2/select2.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('eshop-js-slick', get_template_directory_uri() . '/vendor/slick/slick.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('eshop-js-slick-custom', get_template_directory_uri() . '/js/slick-custom.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('eshop-js-countdowntime', get_template_directory_uri() . '/vendor/countdowntime/countdowntime.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('eshop-js-lightbox', get_template_directory_uri() . '/vendor/lightbox2/js/lightbox.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('eshop-js-sweetalert', get_template_directory_uri() . '/vendor/sweetalert/sweetalert.min.js', array('jquery'), '1.0.0', true);
	// wp_enqueue_script('eshop-js-nouislider', get_template_directory_uri() . '/vendor/noui/nouislider.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('eshop-js-main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'eshop_scripts' );
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
/**
* Load WooCommerce compatibility file.
*/
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

function update_woocommerce_version() {
		if(class_exists('WooCommerce')) {
			global $woocommerce;
			
			if(version_compare(get_option('woocommerce_db_version', null), $woocommerce->version, '!=')) {
				update_option('woocommerce_db_version', $woocommerce->version);
				
				if(! wc_update_product_lookup_tables_is_running()) {
					wc_update_product_lookup_tables();
				}
			}			
		}		
	}
add_action('init', 'update_woocommerce_version');