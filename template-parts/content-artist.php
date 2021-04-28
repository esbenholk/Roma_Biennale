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

    <!-- <a href="javascript:history.go(-1)"><img class="back-arrow hidden appear-on-phone" src="/wp-content/themes/Roma_Biennale/icons/left-arrow.svg"/></a> -->


			<div class="entry-content">
                        <?php
                        
                        get_template_part( 'template-parts/artist-full', get_post_type() );
                        

                        ?>
            </div><!-- .entry-content -->



	

</article><!-- #post-<?php the_ID(); ?> -->
