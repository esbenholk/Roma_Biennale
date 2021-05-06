<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Roma_Biennale
 */


?>


<?php  
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
        

    if (strpos($url, "/de") !== false) {
        $posted_on_string = "Gepostet am";
        $by_string = "von";
        $continue_string = "Weiterlesen";
    } else {
        $posted_on_string = "Posted on";
        $by_string = "by";
        $continue_string = "Read more";
    }

    $year = get_the_date('Y');
    $thumbnail_extra = catch_image();  

    $location=get_post_meta($post->ID, 'post_location_place', false);
?>  

<article class="blog-item" id="post-<?php $year ?>" <?php post_class(); ?>>

    <div class="blog-headline <?php echo $year ?>">
        
        <?php
            if ( is_singular() ) :
                the_title( '<h2>', '</h2>' );
            else :
                the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            endif;

        ?>

        <p><?php echo $posted_on_string?> <?php the_date('')?> <?php echo $by_string?> <?php the_author()?></p>

        <?php if($location[0]){?>
            <p><?php echo $location[0]?></p>
        <?php } ?>
    </div>
    


    <?php if ( get_the_post_thumbnail(get_the_ID()) != '' ) {

            echo '<a href="'; the_permalink(); echo '" class="thumbnail-wrapper">';
            the_post_thumbnail();
            echo '</a>';

            } else {

            ?> <img src="<?php echo $thumbnail_extra;?>"/><?php

    }?>

	<div class="entry-content">
		<?php the_excerpt(); ?>
        <img class="go-arrow" src="/wp-content/themes/Roma_Biennale/icons/left-arrow.svg"/>

        <a class="read-more" href="<?php the_permalink() ?>"><?php echo $continue_string?></a>
	</div><!-- .entry-content -->

    <div class="string"></div>
	

</article><!-- #post-<?php the_ID(); ?> -->
