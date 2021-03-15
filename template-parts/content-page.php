<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Roma_Biennale
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="large-headline">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php roma_biennale_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
