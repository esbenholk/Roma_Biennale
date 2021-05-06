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
    'post_type' => 'Artist',
    'orderby' => 'title',
    'order'   => 'ASC',
    'meta_query' => array(
		array(
            'relation' => 'OR',
            array(
            	'key' => 'artist_title',
                'compare' => '=',
                'value' => ''
            ),
            array(
            	'key' => 'artist_title',
                'compare' => 'NOT EXISTS',
            ),
		)
	)
    ); // gets Artists
    $the_query = new WP_Query($args);

    $args_with_title = array (
        'post_type' => 'Artist',
        'orderby' => 'title',
        'order'   => 'ASC',
        'meta_query' => array(
            array(
                'key' => 'artist_title',
                'compare' => '!=',
                'value' => ''
            )
        )
        ); // gets Artists
    $the_query_with_title = new WP_Query($args_with_title );


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
        $artist_list_headline = "Künstler/-innen AZ";
    } else {
        $headline = "Artists";
        $artist_list_headline = "Artists AZ";
    }
  
?>

    <main id="primary" class="site-main">

    <?php
    if ( have_posts() ) :?>

        <div class="standard-container flex-row">
            <h1 class="fixed-headline"><?php echo $headline ?></h1>
        </div>

        <div class="standard-container horizontal-flag turn-thin">
                <div class="stripe"></div>
        </div>



        <div class="wp-block-columns flex-change-to-column blogs-container">
            
            <div class="wp-block-column top flex-column flex-start" style="flex-basis:35%">

                <div class="artist-names flex-column flex-start">
                    
                    <p class="artist-name artist-names-headline"> <?php echo $artist_list_headline?></p>
                    
                    <?php while( $the_query_with_title->have_posts() ) : $the_query_with_title->the_post(); ?>
                        <?php $artist_title=get_post_meta($post->ID, 'artist_title', false); ?>
                        <a class="artist-name" href=<?php the_permalink() ?>>
                            <?php the_title();  ?> <u><?php echo $artist_title[0]?></u>
                        </a> 
                    <?php endwhile; ?>

                    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <a class="artist-name" href=<?php the_permalink() ?>>
                            <?php the_title();  ?>
                        </a> 
                    <?php endwhile; ?>

                </div>
                            
                
            
            </div>
            
            <div class="wp-block-column" style="flex-basis:60%">

                <?php while( $the_query_with_title->have_posts() ) : $the_query_with_title->the_post();
                    get_template_part( 'template-parts/artist-teaser', get_post_type() );
                endwhile; ?>
    
                <?php while( $the_query->have_posts() ) : $the_query->the_post();
                    get_template_part( 'template-parts/artist-teaser', get_post_type() );
                endwhile; ?>
            
            </div>
            
        </div>



        
    <?php
    else :

        get_template_part( 'template-parts/content', 'none' );

    endif;
    ?>

    </main><!-- #main -->

<?php

get_footer();
