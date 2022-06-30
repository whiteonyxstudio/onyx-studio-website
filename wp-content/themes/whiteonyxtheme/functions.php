<?php
/**
 * studio_main_theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package studio_main_theme
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
function studio_main_theme_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on studio_main_theme, use a find and replace
		* to change 'studio_main_theme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'studio_main_theme', get_template_directory() . '/languages' );

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
			'studio_main_theme_custom_background_args',
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
add_action( 'after_setup_theme', 'studio_main_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function studio_main_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'studio_main_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'studio_main_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function studio_main_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'studio_main_theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'studio_main_theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'studio_main_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function studio_main_theme_scripts() {
	wp_enqueue_style( 'studio_main_theme-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_style_add_data( 'studio_main_theme-style', 'rtl', 'replace' );



	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() .'/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'fontawesone-style', get_template_directory_uri() .'/assets/css/fontawesome.css' );
	wp_enqueue_style( 'magnific-style', get_template_directory_uri() .'/assets/css/magnific-popup.css' );
	wp_enqueue_style( 'nice-select-style', get_template_directory_uri() .'/assets/css/nice-select.css' );


	wp_enqueue_style( 'slick-style', get_template_directory_uri() .'/assets/css/slick.css', rand(111,9999), 'all' );
	wp_enqueue_style( 'slick-theme-style', get_template_directory_uri() .'/assets/css/slick-theme.css', rand(111,9999), 'all' );
  wp_enqueue_style( 'main-style', get_template_directory_uri() .'/assets/css/style.css', rand(111,9991), 'all' );

	wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', '//code.jquery.com/jquery-3.6.0.min.js');
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'studio_main_theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'popper-script', get_template_directory_uri() . '/assets/js/popper.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'jq-plugins-script', get_template_directory_uri() . '/assets/js/jquery-plugins-collection.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'fontawesome', 'https://kit.fontawesome.com/8d258d854c.js');

	}
add_action( 'wp_enqueue_scripts', 'studio_main_theme_scripts' );

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


/*
* Create Custom Post Types For Portfolio Posts And Reviews.
*/

add_action('init', 'add_custom_post_types');
function add_custom_post_types(){

		register_post_type('case', array(
		'labels'             => array(
			'name'               => 'Portfolio Case', // Основное название типа записи
			'singular_name'      => 'Portfolio Case', // отдельное название записи типа Book
			'add_new'            => 'Add Portfolio Case',
			'add_new_item'       => 'Add new Portfolio Case',
			'edit_item'          => 'Edit Portfolio Case',
			'new_item'           => 'New Portfolio Case',
			'view_item'          => 'View Portfolio Case',
			'search_items'       => 'Find Portfolio Cases',
			'not_found'          => 'Portfolio Case found',
			'not_found_in_trash' => '',
			'parent_item_colon'  => '',
			'menu_name'          => 'Portfolio Cases'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'menu_icon'          =>'dashicons-portfolio',
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'taxonomies'         => array('category'),
		'menu_position'      => null,
		'supports'           => array('title','excerpt','template','custom-fields','thumbnail', 'page-attributes'),
	) );

	register_post_type('services', array(
		'labels'             => array(
			'name'               => 'Services', // Основное название типа записи
			'singular_name'      => 'Service', // отдельное название записи типа Book
			'add_new'            => 'Add Service',
			'add_new_item'       => 'Add new Service',
			'edit_item'          => 'Edit Service',
			'new_item'           => 'New Service',
			'view_item'          => 'View Service',
			'search_items'       => 'Find Service',
			'not_found'          => 'Service found',
			'not_found_in_trash' => '',
			'parent_item_colon'  => '',
			'menu_name'          => 'Services'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'menu_icon'          =>'dashicons-rest-api',
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'taxonomies'         => array('category'),
		'menu_position'      => null,
		'supports'           => array('title','excerpt','template','custom-fields','thumbnail', 'page-attributes'),
	) );

	register_post_type('testemonials', array(
		'labels'             => array(
			'name'               => 'Testemonials', // Основное название типа записи
			'singular_name'      => 'Testemonial', // отдельное название записи типа Book
			'add_new'            => 'Add Testemonial',
			'add_new_item'       => 'Add new Testemonial',
			'edit_item'          => 'Edit Testemonial',
			'new_item'           => 'New Testemonials',
			'view_item'          => 'View Testemonials',
			'search_items'       => 'Find Testemonials',
			'not_found'          => 'Testemonials found',
			'not_found_in_trash' => '',
			'parent_item_colon'  => '',
			'menu_name'          => 'Testemonialss'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'menu_icon'          =>'dashicons-testimonial',
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'taxonomies'         => array('category'),
		'menu_position'      => null,
		'supports'           => array('title','editor','author','excerpt','comments','template','custom-fields', 'page-attributes'),
	) );
}

/*
* Add Manu Locations for menu popup and footer links.
*/

add_action( 'after_setup_theme', 'add_navigation_menus' );

function add_navigation_menus() {
	register_nav_menu( 'main_menu', 'Main Navigation' );
	register_nav_menu( 'services_menu', 'Services Navigation' );
	register_nav_menu( 'useful_menu', 'Useful Navigation' );
	register_nav_menu( 'footer_studio_menu', 'Footer Studio Navigation' );
	register_nav_menu( 'footer_social_menu', 'Footer Social Navigation' );
}

