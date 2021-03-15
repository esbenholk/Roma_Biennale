<?php 
    
    $args = array (
	'post_type' => 'event',
	'meta_key' => 'event_start',
	'orderby' => 'meta_value',
	'order' => 'ASC'); // gets Events Archive
			
	$the_query = new WP_Query($args); 
    $current_date = time();
?>

                <div class="events">
                    <div id="current-events">

                        <?php while( $the_query->have_posts() ) : $the_query->the_post();


                                
                                $string_start_date = strtotime(get_field('event_start', false, false));
                                $string_end_date = strtotime(get_field('event_end', false, false));

                                if($string_start_date <= $current_date && $string_end_date >= $current_date) {
                            
                                    get_template_part( 'template-parts/event-thumbnail', 'page' );

                                }

                        endwhile; ?>
                    </div>

                    <div id="coming-events">

                        <?php while( $the_query->have_posts() ) : $the_query->the_post();

                                $string_start_date = strtotime(get_field('event_start', false, false));
                                $string_end_date = strtotime(get_field('event_end', false, false));

                                if($string_start_date >= $current_date) {
                            
                                    get_template_part( 'template-parts/event-thumbnail', 'page' );

                                }
                    
                        endwhile; ?>

                    </div>
                </div>


