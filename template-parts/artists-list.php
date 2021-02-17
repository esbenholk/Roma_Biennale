<div id="artists">
			<?php $args = array (
				'post_type' => '>Artist',
				); // gets Artists
			
				$the_query = new WP_Query($args);
			
				while( $the_query->have_posts() ) : $the_query->the_post();
					?><h1>hej artist </h1><?php

					get_template_part( 'template-parts/artist-thumbnail', 'page' );

				endwhile; 
				
				wp_reset_postdata(); 
			?>
</div>