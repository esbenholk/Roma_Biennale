<?php
/**
 * Template Name: Program Page
 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Roma_Biennale
 */

	get_header();

?>

<?php 
    
    $args = array (
	'post_type' => 'event',
	'meta_key' => 'event_start',
	'orderby' => 'meta_value',
	'order' => 'ASC'
    ); // gets Events Archive
			
	$the_query = new WP_Query($args); 
    $current_date = time();

    $coming_events_count = 0;
    $featured_events_count = 0;
    $past_events_count = 0;

    $category1_headline_line1 = get_post_meta($post->ID, 'category1_title', false);
    $category1_headline_line2 = get_post_meta($post->ID, 'category1_title2', false);
    $category1_date = get_post_meta($post->ID, 'category1_date', false);
    $category1_description = get_post_meta($post->ID, 'category1_description', false);
    $category1_key = get_post_meta($post->ID, 'category1_category_key', false);

?>



    
<main id="primary" class="site-main">

                <?php the_title( '<h1 class="large-headline">', '</h1>' );
                print_r($category1_headline_line1[0]) ;
                print_r($category1_headline_line2[0]);
                print_r($category1_key[0]);
                print_r($category1_description[0] );
                print_r( $category1_date[0] )?>

                <div id="current-events">

                    <?php while( $the_query->have_posts() ) : $the_query->the_post();  
                    

                            $meta_print_value=get_post_meta($post->ID,'category1_name',true);
                            echo($meta_print_value);
           
                            
                            $string_start_date = strtotime(get_field('event_start', false, false));
                            $string_end_date = strtotime(get_field('event_end', false, false));

                            if($string_start_date <= $current_date && $string_end_date >= $current_date) {
                                if($featured_events_count === 0){
                                    ?> <h1>HAPPENING NOW</h1><?php
                                 }
                                 ++$featured_events_count;
                                get_template_part( 'template-parts/event-thumbnail', 'page' );

                            }

                    endwhile; ?>
                </div>
                <div id="coming-events">

                    <?php while( $the_query->have_posts() ) : $the_query->the_post();

                            
                            $object = setup_postdata($post);
                            $string_start_date = strtotime(get_field('event_start', false, false));
                            $string_end_date = strtotime(get_field('event_end', false, false));
                            

                            if($string_start_date >= $current_date) {
                                
                                if($coming_events_count === 0){
                                   ?> <h1>COMING EVENTS</h1><?php
                                }
                                ++$coming_events_count;
                                get_template_part( 'template-parts/event-thumbnail', 'page' );

                            }
                
                    endwhile; 
                
                    ?>

                    
                </div>

                <div id="past-events">

                    <?php while( $the_query->have_posts() ) : $the_query->the_post();

                            $string_start_date = strtotime(get_field('event_start', false, false));
                            $string_end_date = strtotime(get_field('event_end', false, false));

                            if($string_end_date <= $current_date) {  
                                if($past_events_count === 0){
                                    ?> <h1>PAST EVENTS</h1><?php
                                 }
                                 ++$past_events_count;
                                get_template_part( 'template-parts/event-thumbnail', 'page' );
                            }

                    endwhile; ?>
                </div>

    
    </div>

     

	

	</main><!-- #main -->


   

<?php
get_footer();

