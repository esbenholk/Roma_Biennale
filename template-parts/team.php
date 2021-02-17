<div id="team">
			<?php $args = array (
				'post_type' => '>team',
				); // gets Artists
			
				$the_query = new WP_Query($args);
			
				while( $the_query->have_posts() ) : $the_query->the_post();
				
					get_template_part( 'template-parts/teamMember-thumbnail', 'page' );

				endwhile; 
				
				wp_reset_postdata(); 
			?>
</div>