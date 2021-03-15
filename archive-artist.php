<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Roma_Biennale
 */

    get_header();


    $args = array (
    'post_type' => '>Artist'
    ); // gets Artists
    $the_query = new WP_Query($args);

?>

	<main id="primary" class="site-main">

        <h1 class="large-headline">ARTISTS</h1>


        <div class="list-container">

            <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <li class="list-element">
                                <a href=<?php the_permalink() ?>>
                                    <?php the_title();  ?>
                                </a> 
                            </li>    
            <?php endwhile; ?>

        </div>
	

	</main><!-- #main -->

<?php

get_footer();
