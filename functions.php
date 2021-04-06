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
				'menu-1' => esc_html__( 'Primary', 'roma_biennale' ),
				'menu-2' => esc_html__( 'Language Selector', 'roma_biennale' ),
				'menu-3' => esc_html__( 'Social Media Icons', 'roma_biennale' ),
				'menu-4' => esc_html__( 'Footer', 'roma_biennale' ),
				'menu-5' => esc_html__( 'Primary Side Wagon', 'roma_biennale' ),
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
			'name'          => esc_html__( 'Newsletter Signup', 'roma_biennale' ),
			'id'            => 'newsletter_signup',
			'description'   => esc_html__( 'Add widgets here.', 'roma_biennale' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<p class="newsletter-notice">',
			'after_title'   => '</p>',
		)
	);

}
add_action( 'widgets_init', 'roma_biennale_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function roma_biennale_scripts() {
	wp_enqueue_style( 'roma_biennale-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'menu-animation-style', get_stylesheet_uri(),'/style-menu-animation.css', array(), 1.1, true );
	
	wp_style_add_data( 'roma_biennale-style', 'rtl', 'replace' );

	wp_enqueue_script( 'roma_biennale-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'roma_biennale-menu-styling', get_template_directory_uri() . '/js/menu.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'roma_biennale-overlay', get_template_directory_uri() . '/js/overlay.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'roma_biennale-sm-sharing', get_template_directory_uri() . '/js/webapi.js', array('jquery'), _S_VERSION, true );



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


function campaign_day_register() {

	register_post_type( 'campaign_day',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Campaign Days' ),
                'singular_name' => __( 'Campaign Day' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'campaign'),
			'taxonomies'  => array( 'category' ),
			'show_in_rest' => true,
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt')

 
        )
	);
}
add_action( 'init', 'campaign_day_register' );


function event_register() {

	register_post_type( 'Event',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Events' ),
                'singular_name' => __( 'Event' )
            ),
            'public' => true,
            'has_archive' => false,
			'taxonomies'  => array( 'category' ),
            'rewrite' => array('slug' => 'program'),
			'show_in_rest' => true,
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt')

        )
	);
}

add_action( 'init', 'event_register' );

add_action( 'pre_get_posts', function ( $query ) {
    if ( is_post_type_archive( 'event' ) && $query->is_main_query() ) {
        $query->set( 'orderby', 'meta_value' );
        $query->set( 'order', 'ASC' );
        $query->set( 'meta_key', 'event_date_start' );
    }
} );

function reg_tag() {
	register_taxonomy_for_object_type('post_tag', 'Artists');
	register_taxonomy_for_object_type('post_tag', 'event');
	register_taxonomy_for_object_type('post_tag', 'poster');
}
add_action('init', 'reg_tag');


function catch_images() {
	global $post, $posts;
	$images = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all('/<img.+?src=[\'"]([^\'"]+)[\'"].*?>/i', $post->post_content, $matches);
	$images= $matches[0];

	return $images;
  }


// shortcodes for templates on frontpage
function events_shortcode() { 
	ob_start();
	get_template_part( 'template-parts/events-list');
    return ob_get_clean();   
} 

add_shortcode('events', 'events_shortcode'); 

function menu_shortcode() { 
	ob_start();
	get_template_part( 'template-parts/extra_menu');
    return ob_get_clean();   
} 

add_shortcode('menu', 'menu_shortcode'); 

function tag_list_shortcode() { 
	ob_start();
	get_template_part( 'template-parts/tag_list');
    return ob_get_clean(); 
} 
	// register shortcode
add_shortcode('important_days', 'tag_list_shortcode'); 

function single_event_shortcode($atts){ 
	ob_start();
	foreach($atts as $att){

		$args = array(
			'p'         => $att, // ID of a page, post, or custom type
			'post_type' => 'event'
		  );
		$the_query = new WP_Query($args);

		while( $the_query->have_posts() ) : $the_query->the_post();  
                        
		get_template_part( 'template-parts/event-thumbnail', 'page' );

		endwhile; 
		
	
	}
    
} 
	// register shortcode
add_shortcode('artists_event', 'single_event_shortcode'); 


function graphic_page_divider_shortcode($atts) { 
	ob_start();
	
	return '<div class="small-standard-container turn-thin" style="background-color:'.$atts["color"]. '"></div>';

} 
	// register shortcode
add_shortcode('graphic_page_divider', 'graphic_page_divider_shortcode'); 

// function that runs when shortcode is called
function custom_gallery_shortcode() { 
	ob_start();
	get_template_part( 'template-parts/gallery');
    return ob_get_clean(); 
} 
	// register shortcode
add_shortcode('gallery', 'custom_gallery_shortcode'); 

/**
 * meta boxes for Program Template
 */
function program_add_custom_box() {

	global $post;

    if(!empty($post))
    {
        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);

        if($pageTemplate == 'program.php' ) {

				add_meta_box(
					'program_sorting_details',                 // Unique ID
					'Program Sorting',      // Box title
					'roma_trial_programming_custom_box_html'  // Content callback, must be of type callable                        // Post type
				);
			
        }

		add_meta_box(
			'event_details',
			'Event Details',
			'roma_trial_event_custom_box_html',
			'event'
		);

		add_meta_box(
			'campaign_colors',
			'Campaign Day Colors',
			'roma_trial_campaign_colors_custom_box_html',
			'campaign_day'
		);
		
    }


 
}
add_action( 'add_meta_boxes', 'program_add_custom_box' );


function roma_trial_programming_custom_box_html( $post ) {
	include plugin_dir_path( __FILE__ ) . './metaforms/program_meta_form.php';
}
function roma_trial_campaign_colors_custom_box_html( $post ) {
	include plugin_dir_path( __FILE__ ) . './metaforms/campaign_day_meta_form.php';
}


function roma_trial_event_custom_box_html( $post ) {
	include plugin_dir_path( __FILE__ ) . './metaforms/event_meta_form.php';
}

function program_save_postdata( $post_id ) {

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( $parent_id = wp_is_post_revision( $post_id ) ) {
        $post_id = $parent_id;
    }
    $fields = [
        'category5_category_key',
        'category5_description',
        'category5_date',
		'category5_title2',
		'category5_title',
		'category5_color',
		'category4_category_key',
		'category4_description',
		'category4_date',
		'category4_title2',
		'category4_title',
		'category4_color',
		'category3_category_key',
		'category3_description',
		'category3_date',
		'category3_title2',
		'category3_title',
		'category3_color',
		'category2_category_key',
		'category2_description',
		'category2_date',
		'category2_title2',
		'category2_title',
		'category2_color',
		'category1_category_key',
		'category1_description',
		'category1_date',
		'category1_title2',
		'category1_title',
		'category1_color',
		'category1_color2',
		'category2_color2',
		'category3_color2',
		'category4_color2',
		'category5_color2',

		'event_date_start',
		'event_date_end',
		'event_date_timezone',
		'event_place',
		'event_livestream_url'

    ];
    foreach ( $fields as $field ) {
        if ( array_key_exists( $field, $_POST ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        }
     }

}

add_action( 'save_post', 'program_save_postdata' );





add_filter('wp_nav_menu_items', 'add_social_media_icons', 10, 2);
function add_social_media_icons($items, $args){
    if( $args->theme_location == 'menu-5' ){
        $items .= '<li  class="grow-top-on-phone social-media-icons-li"><a title="SMI" href="https://www.instagram.com/romabiennale/"><svg width="59" height="58" viewBox="0 0 59 58" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M17.8563 0C8.53037 0 0.944336 7.59305 0.944336 16.9214V41.0881C0.944336 50.414 8.53739 58 17.8657 58H42.0324C51.3583 58 58.9443 50.4069 58.9443 41.0786V16.9119C58.9443 7.58603 51.3513 0 42.0229 0H17.8563ZM46.861 9.66667C48.195 9.66667 49.2777 10.7493 49.2777 12.0833C49.2777 13.4173 48.195 14.5 46.861 14.5C45.527 14.5 44.4443 13.4173 44.4443 12.0833C44.4443 10.7493 45.527 9.66667 46.861 9.66667ZM29.9443 14.5C37.9411 14.5 44.4443 21.0033 44.4443 29C44.4443 36.9967 37.9411 43.5 29.9443 43.5C21.9476 43.5 15.4443 36.9967 15.4443 29C15.4443 21.0033 21.9476 14.5 29.9443 14.5ZM29.9443 19.3333C27.3806 19.3333 24.9218 20.3518 23.109 22.1646C21.2961 23.9775 20.2777 26.4362 20.2777 29C20.2777 31.5638 21.2961 34.0225 23.109 35.8354C24.9218 37.6482 27.3806 38.6667 29.9443 38.6667C32.5081 38.6667 34.9669 37.6482 36.7797 35.8354C38.5926 34.0225 39.611 31.5638 39.611 29C39.611 26.4362 38.5926 23.9775 36.7797 22.1646C34.9669 20.3518 32.5081 19.3333 29.9443 19.3333Z" fill="white"/>
		</svg></a>
		<a title="SMI" href="https://www.facebook.com/RomaBiennale/"><svg width="59" height="58" viewBox="0 0 59 58" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M29.1491 0C13.0508 0 0 13.0508 0 29.1491C0 43.7633 10.7653 55.8297 24.7926 57.9377V36.8749H17.5809V29.2127H24.7926V24.1142C24.7926 15.6729 28.9053 11.967 35.9209 11.967C39.281 11.967 41.0578 12.2161 41.8991 12.3301V19.0184H37.1134C34.1349 19.0184 33.0948 21.8419 33.0948 25.0245V29.2127H41.8236L40.6391 36.8749H33.0948V58C47.3222 56.0695 58.2981 43.9051 58.2981 29.1491C58.2981 13.0508 45.2473 0 29.1491 0Z" fill="white"/>
		</svg></a>
		<a title="SMI" href="https://www.youtube.com/channel/UClKQ_PA7uGnDEImuYWFuMWg/"><svg width="70" height="48" viewBox="0 0 44 32" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M41.8984 5.5C41.5 3.30078 39.6016 1.69922 37.3984 1.19922C34.1016 0.5 28 0 21.3984 0C14.8008 0 8.60156 0.5 5.30078 1.19922C3.10156 1.69922 1.19922 3.19922 0.800781 5.5C0.398438 8 0 11.5 0 16C0 20.5 0.398438 24 0.898438 26.5C1.30078 28.6992 3.19922 30.3008 5.39844 30.8008C8.89844 31.5 14.8984 32 21.5 32C28.1016 32 34.1016 31.5 37.6016 30.8008C39.8008 30.3008 41.6992 28.8008 42.1016 26.5C42.5 24 43 20.3984 43.1016 16C42.8984 11.5 42.3984 8 41.8984 5.5ZM16 23V9L28.1992 16L16 23Z" fill="white"/>
		</svg>
		</a>


		</li>';
    }
    return $items;
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

