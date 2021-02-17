<div id="events">
			<?php $args = array (
				'post_type' => 'events',
				'meta_key' => 'date',
				'orderby' => 'meta_value',
				'order' => 'ASC'); // gets Events Archive
			
				$the_query = new WP_Query($args);
			
				while( $the_query->have_posts() ) : $the_query->the_post();

						$current_date = time();
						$string_date = strtotime(get_field('date', false, false));
						
						if($string_date >=  $current_date) {
						
						get_template_part( 'template-parts/event-thumbnail', 'page' );

						}
			
				endwhile; 
				
				wp_reset_postdata(); 
			?>
</div>