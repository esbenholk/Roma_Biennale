<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Roma_Biennale
 */

get_header('program');
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class();?>>
	
				<?php get_template_part( 'template-parts/event-header', 'page' );?>

			<div class="entry-content">
				<?php the_content(); ?>
			</div><!-- .entry-content -->
			
			
			</article><!-- #post-<?php the_ID(); ?> -->
			
		<?php endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
