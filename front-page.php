<?php
/**
 * Template Name: Front-Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Roma_Biennale
 */

get_header();
?>

	<main id="primary" class="site-main">

	
		<?php while ( have_posts() ) :
						the_post(); // gets regular content ei: video and text

						get_template_part( 'template-parts/content', 'page' );
		endwhile; ?>
		
	
	

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
