<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Roma_Biennale
 */

get_header();
?>

	<main id="primary" class="site-main single-artist">

		<?php
		while ( have_posts() ) :
			the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<div class="standard-container flex-row flex-between">

				<h1><?php the_title()?></h1>


				<svg class="back-button" onclick="history.go(-1);" width="64" height="65" viewBox="0 0 64 65" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M31.875 0.687503C14.4375 0.687504 -4.31104e-06 15.125 -2.7866e-06 32.5625C-1.2649e-06 49.9688 14.4688 64.4375 31.9062 64.4375C49.3125 64.4375 63.75 49.9688 63.75 32.5625C63.75 15.125 49.2812 0.687501 31.875 0.687503ZM43.0937 18.6875C44.5312 18.6875 45.7187 19.875 45.7187 21.3438C45.7187 22.0625 45.4375 22.6875 44.9375 23.1563L35.5937 32.5313L44.9375 41.9063C45.4375 42.3438 45.7187 43 45.7187 43.7188C45.7187 45.1563 44.5312 46.3125 43.0937 46.3125C42.3437 46.3125 41.75 46.0313 41.2812 45.5313L31.9062 36.1875L22.4687 45.5625C21.9375 46.125 21.3437 46.375 20.6562 46.375C19.1875 46.375 18.0312 45.1875 18.0312 43.75C18.0312 43.0313 18.25 42.4375 18.8125 41.9375L28.1875 32.5313L18.8437 23.2188C18.3437 22.7188 18.0625 22.0938 18.0625 21.3438C18.0625 19.875 19.2187 18.6875 20.6875 18.6875C21.4375 18.6875 22.0937 19 22.5625 19.4688L31.9062 28.8438L41.2187 19.4688C41.6875 18.9688 42.3437 18.6875 43.0937 18.6875Z" fill="#131313"/>
				</svg>
		
			</div>

			<div class="small-standard-container blue lowz"></div>
        	<div class="small-standard-container green lowz"></div>
		
			<div class="entry-content standard-container">
				<?php the_content(); ?>
			</div><!-- .entry-content -->
			
			
		
		
			</article><!-- #post-->
			


		<?php endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
