<?php
/**
 * Roma Biennale functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Roma_Biennale
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'roma_biennale_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function roma_biennale_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Roma Biennale, use a find and replace
		 * to change 'roma_biennale' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'roma_biennale', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'roma_biennale' ),
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
				'roma_biennale_custom_background_args',
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
add_action( 'after_setup_theme', 'roma_biennale_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function roma_biennale_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'roma_biennale_content_width', 640 );
}
add_action( 'after_setup_theme', 'roma_biennale_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function roma_biennale_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'roma_biennale' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'roma_biennale' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'roma_biennale_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function roma_biennale_scripts() {
	wp_enqueue_style( 'roma_biennale-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'roma_biennale-style', 'rtl', 'replace' );

	wp_enqueue_script( 'roma_biennale-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'roma_biennale_scripts' );


/**
 * create custom post types
 */

function artist_register() {

	register_post_type( 'Artist',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Artists' ),
                'singular_name' => __( 'Artist' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'artists'),
			'show_in_rest' => true,
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt')

 
        )
	);
}
add_action( 'init', 'artist_register' );

function event_register() {

	$labels = array(
		'name' => _x('Events', 'post type general name'),
		'singular_name' => _x('Event', 'post type singular name'),
		'add_new' => _x('Add New', 'event'),
		'add_new_item' => __('Add New Event'),
		'edit_item' => __('Edit Event'),
		'new_item' => __('New Event'),
		'view_item' => __('View Event'),
		'search_items' => __('Search Events'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'rewrite' => array('slug' => 'events'),
		'has_archive' => true,
		'show_in_rest' => true,
		'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt'),
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail')
	  );

	register_post_type( 'events' , $args );
}

add_action('init', 'event_register');

function teamMember_register() {

	register_post_type( 'teamMember',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'team' ),
                'singular_name' => __( 'teamMember' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'team'),
			'show_in_rest' => true,
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt')

 
        )
	);
}
add_action( 'init', 'teamMember_register' );



/**
 * pre get posts to order and sort events
 */

function my_pre_get_posts( $query ) {
	
	// only modify queries for 'event' post type
	if( isset($query->query_vars['post_type']) && $query->query_vars['post_type'] == 'event' ) {
		$query->set('orderby', 'meta_value');	
		$query->set('meta_key', 'date');	 
		$query->set('order', 'DESC'); 
		$query->set('posts_per_page',20);	
	}
	// return
	return $query;

}

add_action('pre_get_posts', 'my_pre_get_posts');


// shortcodes for templates on frontpage
function events_shortcode() { 
	ob_start();
	get_template_part( 'template-parts/events-list');
    return ob_get_clean();   
} 

add_shortcode('events', 'events_shortcode'); 

function artists_shortcode() { 
	ob_start();
	get_template_part( 'template-parts/artists-list');
    return ob_get_clean();   
} 

add_shortcode('artists', 'artists_shortcode'); 

function team_shortcode() { 
	ob_start();
	get_template_part( 'template-parts/team');
    return ob_get_clean();   
} 

add_shortcode('team', 'team_shortcode'); 

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

