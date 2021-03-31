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


		<div class="standard-container">
            <h1 class="fixed-headline"><?php echo the_title()?></h1>
        </div>

        <div class="standard-container blue lowz"></div>
        <div class="standard-container green lowz"></div>

		<div class="entry-content standard-container event-container">
			<?php
			the_content();
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
