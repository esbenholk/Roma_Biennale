<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Roma_Biennale
 */

get_header();

$color = get_post_meta($post->ID, 'category1_color', false);
$color2 = get_post_meta($post->ID, 'category1_color2', false);

?>

	<main id="primary" class="site-main" style="background-color: <?php echo $color[0]?>; color: <?php echo $color2[0]?>">

		<?php
		while ( have_posts() ) :
			the_post();

			?><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<header class="entry-header" >
				<?php the_title( '<h1 class="large-headline">', '</h1>' ); ?>
			</header><!-- .entry-header -->
		
		
		
			<div class="entry-content campaign-gallery" style="background-color: <?php echo $color[0]?>; color: <?php echo $color2[0]?>">
				<?php

				echo the_content();
		
				?>
			</div><!-- .entry-content -->
		
		</article><!-- #post-<?php the_ID(); ?> -->

	
		<?php endwhile; // End of the loop.
		?>


	</main><!-- #main -->

<?php
get_footer();
