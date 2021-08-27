<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Roma_Biennale
 */

get_header();






?>

	<main id="primary" class="site-main">

		<?php
		if ( have_posts() ) :

		?>
		        <div class="standard-container flex-row">
            <h1 class="fixed-headline">Videos</h1>
        </div>

        <div class="standard-container horizontal-flag turn-thin">
                <div class="stripe"></div>
        </div>





			<div class="wp-block-columns flex-change-to-column blogs-container">
				<div class="wp-block-column top" style="flex-basis:35%">

					<div class="post_tags flex-column"> 
						<?php while ( have_posts() ) :
						the_post();

						?> <a> <?php echo the_title(); ?> </a><?php


						endwhile; ?>
						
			

					</div>

					
					
				
				</div>
				<div class="wp-block-column" style="flex-basis:60%">
					<?php while ( have_posts() ) :
					the_post();

					/*
					* Include the Post-Type-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Type name) and that will be used instead.
					*/
					get_template_part( 'template-parts/video-teaser', get_post_type() );

					endwhile; ?>
					
				
				</div>
				
			</div>



			
		<?php
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_footer();
