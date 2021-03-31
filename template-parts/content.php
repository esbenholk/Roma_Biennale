<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Roma_Biennale
 */


?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<header class="entry-header">


		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="large-headline">', '</h1>' );
		else :
			the_title( '<h2 class="large-headline"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		?>
	</header><!-- .entry-header -->




	<div class="entry-content">
		<?php
		
		the_content();
		

		?>
	</div><!-- .entry-content -->
	<p><?php the_tags(); ?></p>

</article><!-- #post-<?php the_ID(); ?> -->
