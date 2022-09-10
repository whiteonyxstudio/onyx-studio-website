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



function defer_parsing_of_js( $url ) {
    if ( is_user_logged_in() ) return $url; //don't break WP Admin
    if ( FALSE === strpos( $url, '.js' ) ) return $url;
    if ( strpos( $url, 'jquery.js' ) ) return $url;
    return str_replace( ' src', ' defer src', $url );
}
add_filter( 'script_loader_tag', 'defer_parsing_of_js', 10 );

/**
 * Enqueue scripts and styles.
 */
function studio_main_theme_scripts() {
	wp_enqueue_style( 'studio_main_theme-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_style_add_data( 'studio_main_theme-style', 'rtl', 'replace' );

	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() .'/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'magnific-style', get_template_directory_uri() .'/assets/css/magnific-popup.css' );

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
	

	}
add_action( 'wp_enqueue_scripts', 'studio_main_theme_scripts' );


/**
 * Enque Styles in footer. Removes render blocking resourses
 */

function prefix_add_footer_styles() {
	wp_enqueue_style( 'fontawesone-style', get_template_directory_uri() .'/assets/css/fontawesome.css' );
	wp_enqueue_script( 'fontawesome-script', 'https://kit.fontawesome.com/8d258d854c.js');
	
};
add_action( 'get_footer', 'prefix_add_footer_styles' );

/**
 * Remove Gutenberg Library.
 */

add_action( 'wp_enqueue_scripts', 'remove_block_css', 100 );
function remove_block_css() {
wp_dequeue_style( 'wp-block-library' ); // WordPress core
wp_dequeue_style( 'wp-block-library-theme' ); // WordPress core
wp_dequeue_style( 'wc-block-style' ); // WooCommerce
wp_dequeue_style( 'storefront-gutenberg-blocks' ); // Storefront theme
wp_dequeue_style( 'fontawesome' );
wp_deregister_style( 'fontawesome' );
}

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
add_action( 'init', 'register_custom_taxonomies');
function register_custom_taxonomies()
{
  register_taxonomy( 'project-category', 'portfolio', array(
	"hierarchical" => true,
	"label" => "Project Category",
	"singular_label" => "Project Category",
	'query_var' => true,
	'rewrite' => array( 'slug' => 'project-category', 'with_front' => false ),
	'public' => true,
	'show_ui' => true,
	'show_in_rest' => true,
	'show_tagcloud' => true,
	'show_admin_column' => true,
	'_builtin' => false,
	'show_in_nav_menus' => true
  ));
	 register_taxonomy( 'service-category', 'services', array(
	"hierarchical" => true,
	"label" => "Service Category",
	"singular_label" => "Service Category",
	'query_var' => true,
	'rewrite' => array( 'slug' => 'service-category', 'with_front' => false ),
	'public' => true,
	'show_ui' => true,
	'show_in_rest' => true,
	'show_tagcloud' => true,
	'show_admin_column' => true,
	'_builtin' => false,
	'show_in_nav_menus' => true
  ));
}

add_action('init', 'add_custom_post_types');
function add_custom_post_types(){

		register_post_type('portfolio', array(
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
		'show_in_rest'       => true,
		'menu_icon'          =>'dashicons-portfolio',
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'exclude_from_search'=> false,
		'show-in_nav_menus'   =>true, 
		'taxonomies'         => array('project-category'),
		'menu_position'      => null,
		'supports'           => array('title','excerpt','template','custom-fields','thumbnail','page-attributes'),
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
		'taxonomies'         => array('service-category'),
		'menu_position'      => null,
		'supports'           => array('title','excerpt','template','custom-fields','thumbnail', 'slug', 'page-attributes'),
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


function example_cats_related_post() {

    $post_id = get_the_ID();
    $cat_ids = array();
    $categories = get_the_category( $post_id );

    if(!empty($categories) && !is_wp_error($categories)):
        foreach ($categories as $category):
            array_push($cat_ids, $category->term_id);
        endforeach;
    endif;

    $current_post_type = get_post_type($post_id);

    $query_args = array( 
        'category__in'   => $cat_ids,
        'post_type'      => $current_post_type,
        'post__not_in'    => array($post_id),
        'posts_per_page'  => '3',
     );

    $related_cats_post = new WP_Query( $query_args );

    if($related_cats_post->have_posts()):
         while($related_cats_post->have_posts()): $related_cats_post->the_post(); ?>

						<div class="blog_standard_layout">
							<a class="item_image" href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full'); ?>
							</a>
							<div class="item_content">
								<ul class="post_meta ul_li text-uppercase">
									<li>By - <?php $author_id=$post->post_author; the_author_meta( 'display_name' , $author_id ); ?></li>
									<li><a href="#!">Web Development</a></li>
								</ul>
								<h3 class="item_title text_effect_wrap">
									<a href="<?php the_permalink(); ?>">
										<span class="text_effect_wrap1">
											<span class="text_effect_wrap2">
												<span class="text_effect_wrap3"><?php the_title(); ?></span>
											</span>
										</span>
									</a>
								</h3>
								<a class="btn_text text-uppercase" href="<?php the_permalink(); ?>"><span>Read More</span><i class="fal fa-long-arrow-right"></i></a>
							</div>
						</div>

        <?php endwhile;
        // Restore original Post Data
        wp_reset_postdata();
    endif;
}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Agency Global Setup',
		'menu_title'	=> 'Agency Setup',
		'menu_slug' 	=> 'agency-global-setup',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}



function related_posts_by_taxonomy( $post_id, $taxonomy, $args=array() ) {
    $query = new WP_Query();
    $terms = wp_get_object_terms( $post_id, $taxonomy );

    // Make sure we have terms from the current post
    if ( count( $terms ) ) {
        $post_ids = get_objects_in_term( $terms[0]->term_id, $taxonomy );
        $post = get_post( $post_id );
        $post_type = get_post_type( $post );        

        $args = wp_parse_args( $args, array(
                'post_type' => $type,
                'post__in' => $post_ids,
                'taxonomy' => $taxonomy,
                'term' => $terms[0]->slug,

            ) );
        $query = new WP_Query( $args );
    }

    // Return our results in query form
    return $query;
}



