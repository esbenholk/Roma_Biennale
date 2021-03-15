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

    $my_excerpt = get_the_excerpt();
     if($my_excerpt !='') {
        $my_excerpt = $my_excerpt;
     } else{
        $my_excerpt = "WE ARE HERE! • BERLIN – ONLINE – WORLDWIDE • 8.4.–24.10.21 • WE ARE HERE! • BERLIN – ONLINE – WORLDWIDE • 8.4.–24.10.21 • WE ARE HERE! • BERLIN – ONLINE – WORLDWIDE • 8.4.–24.10.21 • WE ARE HERE! • BERLIN • ONLINE • WORLD";
     }

?>

	<main id="primary" class="site-main">
		<div id="ticker1">
                <div class="elements">                
                                <a href="/" class="ticker-object"> <?php echo $my_excerpt ?> </a>
                                <a href="/" class="ticker-object"> <?php echo $my_excerpt ?> </a>
                                <a href="/" class="ticker-object"> <?php echo $my_excerpt ?> </a>
                                <a href="/" class="ticker-object"> <?php echo $my_excerpt ?> </a>
                                <a href="/" class="ticker-object"> <?php echo $my_excerpt ?> </a>
                                <a href="/" class="ticker-object"> <?php echo $my_excerpt ?> </a>
                                <a href="/" class="ticker-object"> <?php echo $my_excerpt ?> </a>
                                <a href="/" class="ticker-object"> <?php echo $my_excerpt ?> </a>
                                <a href="/" class="ticker-object"> <?php echo $my_excerpt ?> </a>
                                <a href="/" class="ticker-object"> <?php echo $my_excerpt ?> </a>
								<a href="/" class="ticker-object"> <?php echo $my_excerpt ?> </a>
                                <a href="/" class="ticker-object"> <?php echo $my_excerpt ?> </a>
                                <a href="/" class="ticker-object"> <?php echo $my_excerpt ?> </a>
                                <a href="/" class="ticker-object"> <?php echo $my_excerpt ?> </a>
                                <a href="/" class="ticker-object"> <?php echo $my_excerpt ?> </a>
                                <a href="/" class="ticker-object"> <?php echo $my_excerpt ?> </a>
                                <a href="/" class="ticker-object"> <?php echo $my_excerpt ?> </a>
                                <a href="/" class="ticker-object"> <?php echo $my_excerpt ?> </a>
                                <a href="/" class="ticker-object"> <?php echo $my_excerpt ?> </a>
                                <a href="/" class="ticker-object"> <?php echo $my_excerpt ?> </a>
								<a href="/" class="ticker-object"> <?php echo $my_excerpt ?> </a>
                                <a href="/" class="ticker-object"> <?php echo $my_excerpt ?> </a>
                                <a href="/" class="ticker-object"> <?php echo $my_excerpt ?> </a>
                                <a href="/" class="ticker-object"> <?php echo $my_excerpt ?> </a>
                                <a href="/" class="ticker-object"> <?php echo $my_excerpt ?> </a>
                                <a href="/" class="ticker-object"> <?php echo $my_excerpt ?> </a>
                                <a href="/" class="ticker-object"> <?php echo $my_excerpt ?> </a>
                                <a href="/" class="ticker-object"> <?php echo $my_excerpt ?> </a>
                                <a href="/" class="ticker-object"> <?php echo $my_excerpt ?> </a>
                                <a href="/" class="ticker-object"> <?php echo $my_excerpt ?> </a>
                </div>        
        </div>

	
		<?php while ( have_posts() ) :
						the_post(); // gets regular content ei: video and text

						get_template_part( 'template-parts/content', 'page' );
		endwhile; ?>
		
	
	

	</main><!-- #main -->




<?php


get_footer();
