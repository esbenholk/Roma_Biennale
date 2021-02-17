<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Roma_Biennale
 */

?>

<article class="artist-thumbnail" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php the_title(); ?>
        <?php roma_biennale_post_thumbnail(); ?>

s</article><!-- #post-<?php the_ID(); ?> -->

