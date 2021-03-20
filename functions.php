<?php
/**
 * Romanistan functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package romanistan
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'romanistan_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function romanistan_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Romanistan, use a find and replace
		 * to change 'romanistan' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'romanistan', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		add_post_type_support( 'page', 'excerpt' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'romanistan' ),
				'menu-2' => esc_html__( 'Social Media', 'romanistan' ),
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
				'script'
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'romanistan_custom_background_args',
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
add_action( 'after_setup_theme', 'romanistan_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function romanistan_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'romanistan_content_width', 640 );
}
add_action( 'after_setup_theme', 'romanistan_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function romanistan_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Newsletter Signup', 'romanistan' ),
			'id'            => 'newsletter_signup',
			'description'   => esc_html__( 'Add widgets here.', 'romanistan' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<p class="newsletter-notice">',
			'after_title'   => '</p>',
		)
	);

}
add_action( 'widgets_init', 'romanistan_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function romanistan_scripts() {
	wp_enqueue_style( 'romanistan-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'menu-animation-style', get_stylesheet_uri(),'/style-menu-animation.css', array(), 1.1, true );
	
	wp_style_add_data( 'romanistan-style', 'rtl', 'replace' );

	wp_enqueue_script( 'romanistan-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'romanistan-menu-styling', get_template_directory_uri() . '/js/menu.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'romanistan-ticker', get_template_directory_uri() . '/js/tickers.js', array('jquery'), _S_VERSION, true );
}

add_action( 'wp_enqueue_scripts', 'romanistan_scripts' );

function graphic_page_divider_shortcode() { 
	ob_start();
	get_template_part( 'template-parts/graphic_page_divider');
    return ob_get_clean(); 
} 
	// register shortcode
add_shortcode('graphic_page_divider', 'graphic_page_divider_shortcode'); 

function infoblock_shortcode($atts){ 
	ob_start();

	return '<div class="infoblock-container">
				<div class="infoblock quote english hidden"><h1 class="infoblock-text">'.$atts["english"]. '</h1></div>
				<div class="infoblock quote roma visible"><h1 class="infoblock-text">'.$atts["roma"]. '</h1></div>
	</div>';

	
} 
	// register shortcode
add_shortcode('infoblock', 'infoblock_shortcode'); 



/**
 * meta boxes for Program Template
 */
function program_add_custom_box() {

	global $post;

    if(!empty($post))
    {
        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);

        if($pageTemplate == 'frontpage.php' ) {

				add_meta_box(
					'Loader Overlay',                 // Unique ID
					'overlay',      // Box title
					'romanistan_overlay_html'  // Content callback, must be of type callable                        // Post type
				);
			
        }		
    }


 
}
add_action( 'add_meta_boxes', 'program_add_custom_box' );


function romanistan_overlay_html( $post ) {
	include plugin_dir_path( __FILE__ ) . './metaforms/overlay_meta_html.php';
}

function program_save_postdata( $post_id ) {

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( $parent_id = wp_is_post_revision( $post_id ) ) {
        $post_id = $parent_id;
    }
    $fields = [
        "quote_roma",
		"quote_english",
		"quote_author"

    ];
    foreach ( $fields as $field ) {
        if ( array_key_exists( $field, $_POST ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        }
     }

}
add_action( 'save_post', 'program_save_postdata' );

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

