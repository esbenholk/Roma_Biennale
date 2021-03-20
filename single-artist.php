<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package romanistan
 */

get_header('artist');
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); 
			$my_excerpt = get_the_excerpt(); ?>>
		

			<div class="single-post-header flex-row">

				<p><?php echo $my_excerpt ?></p>
			
				<button onclick="history.go(-1);">X</button>
		
			</div>
		
			<div class="entry-content">
				<?php the_content(); ?>
			</div><!-- .entry-content -->
			
			
			<p><?php the_tags(); ?></p>
		
			</article><!-- #post-<?php the_ID(); ?> -->
			


		<?php endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
