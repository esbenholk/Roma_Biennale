<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Roma_Biennale
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found flex-column" style="min-height:50vh; background-color: #C4C4C4">
			
			<h1 class="page-title" style="text-align:center; color:white;"><?php esc_html_e( 'Oops! Something went wrong.', 'roma_biennale' ); ?></h1>


		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
