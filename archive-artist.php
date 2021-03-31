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


    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
        

    if (strpos($url, "de") !== false) {
        $headline = "Künstler/-innen";
    } else {
        $headline = "Artists";
    }
  
?>

	<main id="primary" class="site-main">

        
       

        <div class="standard-container">
            <h1 class="fixed-headline"><?php echo $headline ?></h1>
        </div>

        <div class="standard-container blue lowz"></div>
        <div class="standard-container green lowz"></div>

        <div class="list-container">

            <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <li class="standard-container event-container flex-column artist-list">
                                <a class="artist-name" href=<?php the_permalink() ?>>
                                    <?php the_title();  ?>
                                </a> 
                                <a class="artist-name" href=<?php the_permalink() ?>>
                                    <?php the_title();  ?>
                                </a>    <a class="artist-name" href=<?php the_permalink() ?>>
                                    <?php the_title();  ?>
                                </a>    <a class="artist-name" href=<?php the_permalink() ?>>
                                    <?php the_title();  ?>
                                </a>    <a class="artist-name" href=<?php the_permalink() ?>>
                                    <?php the_title();  ?>
                                </a>    <a class="artist-name" href=<?php the_permalink() ?>>
                                    <?php the_title();  ?>
                                </a>    <a class="artist-name" href=<?php the_permalink() ?>>
                                    <?php the_title();  ?>
                                </a>    <a class="artist-name" href=<?php the_permalink() ?>>
                                    <?php the_title();  ?>
                                </a> 
                    </li>    
            <?php endwhile; ?>

        </div>
	

	</main><!-- #main -->

<?php

get_footer();
