<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package romanistan
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<!-- <div class="graphic-divider-container">
				<div class="graphic-divider blue">

				</div>
				<div class="graphic-divider green">

				</div>

			</div> -->
				<?php echo get_custom_logo( $blog_id ) ?>
				<p><?php esc_html_e( 'This is a 404 message', 'romanistan' ); ?></p>
			<!-- <div class="graphic-divider-container">
				<div class="graphic-divider blue">

				</div>
				<div class="graphic-divider green">

				</div>

			</div> -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
