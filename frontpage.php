<?php
/**
 * Template Name: Frontpage with Loader
 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package romanistan
 */

	get_header('custom_overlay');

?>



    
<main id="primary" class="site-main">
    <?php
    while ( have_posts() ) :
        the_post();


        get_template_part( 'template-parts/content', 'page' );

    endwhile; // End of the loop.
    ?>

</main><!-- #main -->



<?php 
get_footer();