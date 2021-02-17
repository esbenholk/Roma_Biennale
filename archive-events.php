<?php
/**
 * Template Name: Event Archive
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Roma_Biennale
 */

get_header();

// $date_now = date('Y-m-d H:i:s');
// $coming_events_args = array(
//     'post_type' => 'event',
//     'meta_query' => array(
//         array(
//             'key'           => 'date',
//             'compare'       => '>=',
//             'value'         => $date_now,
//             'type'          => 'DATETIME',
//         )
//     ),
// );
// $the_event_query = new WP_Query( $coming_events_args );



// Find current date time.
$date_now = date('Y-m-d H:i:s');
$time_now = strtotime($date_now);

$time_tomorrow = strtotime('+1 day', $time_now);
$date_tomorrow = date('Y-m-d H:i:s', $time_next_week);

// Find date time in 7 days.
$time_next_week = strtotime('+1000 day', $time_now);
$date_next_week = date('Y-m-d H:i:s', $time_next_week);

// Query events.
$coming_events = get_posts(array(
    'posts_per_page' => -1,
    'post_type' => 'events',
    'meta_query'     => array(
        array(
            'key'         => 'date',
            'compare'     => 'BETWEEN',
            'value'       => array( $date_tomorrow, $date_next_week ),
            'type'        => 'DATETIME'
        )
    ),
    'order'          => 'ASC',
    'orderby'        => 'meta_value',
    'meta_key'       => 'date',
    'meta_type'      => 'DATETIME'
));

$todays_events = get_posts(array(
    'posts_per_page' => -1,
    'post_type' => 'events',
    'meta_query'     => array(
        array(
            'key'         => 'date',
            'compare'     => 'BETWEEN',
            'value'       => array( $date_now, $date_tomorrow ),
            'type'        => 'DATETIME'
        )
    ),
    'order'          => 'ASC',
    'orderby'        => 'meta_value',
    'meta_key'       => 'date',
    'meta_type'      => 'DATETIME'
));

$past_events = get_posts(array(
    'posts_per_page' => -1,
    'post_type' => 'events',
    'meta_query'     => array(
        array(
            'key'         => 'date',
            'compare'     => '<',
            'value'       => $date_now,
            'type'        => 'DATETIME'
        )
    ),
    'order'          => 'ASC',
    'orderby'        => 'meta_value',
    'meta_key'       => 'date',
    'meta_type'      => 'DATETIME'
));




?>

	<main id="primary" class="site-main">

		<div class="featured-events">
			<?php if( $todays_events ) {
				foreach( $todays_events as $todays_event ) {
					the_post();
					get_template_part( 'template-parts/event-thumbnail', 'page' );
				}
			}?>
		</div>

		<div class="coming-events">

			<?php if( $coming_events ) {
				foreach( $coming_events as $coming_event ) {
					the_post();
					get_template_part( 'template-parts/event-thumbnail', 'page' );
				}
			}?>

		</div>

		<div class="past-events">
			<?php if( $coming_events ) {
				foreach( $coming_events as $coming_event ) {
					the_post();
					get_template_part( 'template-parts/event-thumbnail', 'page' );
				}
			}?>
		</div>
		
	
	

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();

