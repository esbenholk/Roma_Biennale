<div id="artists" class="row_column centering">
			<?php $args = array (
				'post_type' => '>Artist',
				'posts_per_page' => '-1',
				); // gets Artists
				$the_query = new WP_Query($args4);
			?>
		
			
			<div class="artist-list"><?php
				while( $the_query->have_posts() ) : $the_query->the_post(); ?>
				
				<a href=<?php the_permalink() ?>>
				 <?php the_title();  ?>
				</a>
				
				<?php endwhile; ?>	
			</div>

			 
			<?php wp_reset_postdata(); ?>
</div>