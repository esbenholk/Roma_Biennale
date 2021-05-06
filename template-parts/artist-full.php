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


    $artist=new stdClass();
    $artist->title=get_post_meta($post->ID, 'artist_title', false);

    $artist->artist_website_url=get_post_meta($post->ID, 'artist_website_url', false);

    $artist->artist_facebook_url=get_post_meta($post->ID, 'artist_facebook_url', false);

    $artist->artist_youtube_url=get_post_meta($post->ID, 'artist_youtube_url', false);

    $artist->artist_instagram_url=get_post_meta($post->ID, 'artist_instagram_url', false);

    $artist->artist_twitter_url=get_post_meta($post->ID, 'artist_twitter_url', false);

   
?>  

<article class="blog-item" id="post-<?php the_ID() ?>" <?php post_class(); ?>>

    <div class="blog-headline flex-row flex-start flex-wrap">
        
        <?php
            if ( is_singular() ) :
                the_title( '<h2>', '</h2>' );
            else :
                the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            endif;

            if($artist->title){?>
                <h2 class="headline-title"> <?php echo $artist->title[0] ?></h2>
            <?php } ?>

    </div>
    
	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

    <?php 
    if($artist->artist_website_url[0]){?>
            <a href="<?php echo $artist->artist_website_url[0]?>" class="flex-row">
                <img class="go-arrow" src="/wp-content/themes/Roma_Biennale/icons/left-arrow.svg"/>
                <h2 class="headline-title"> Website</h2>
            </a>
    <?php } ?>
    <?php 
    if($artist->artist_facebook_url[0]){?>
            <a href="<?php echo $artist->artist_facebook_url[0]?>" class="flex-row">
                <img class="go-arrow" src="/wp-content/themes/Roma_Biennale/icons/left-arrow.svg"/>
                <h2 class="headline-title"> Facebook</h2>
            </a>
    <?php } ?>
    <?php 
    if($artist->artist_instagram_url[0]){?>
            <a href="<?php echo $artist->artist_instagram_url[0]?>" class="flex-row">
                <img class="go-arrow" src="/wp-content/themes/Roma_Biennale/icons/left-arrow.svg"/>
                <h2 class="headline-title"> Instagram</h2>
            </a>
    <?php } ?>
    <?php 
    if($artist->artist_twitter_url[0]){?>
            <a href="<?php echo $artist->artist_twitter_url[0]?>" class="flex-row">
                <img class="go-arrow" src="/wp-content/themes/Roma_Biennale/icons/left-arrow.svg"/>
                <h2 class="headline-title"> Twitter </h2>
            </a>
    <?php } ?>

    <?php 
    if($artist->artist_youtube_url[0]){?>
            <a href="<?php echo $artist->artist_youtube_url[0]?>" class="flex-row">
                <img class="go-arrow" src="/wp-content/themes/Roma_Biennale/icons/left-arrow.svg"/>
                <h2 class="headline-title"> Youtube </h2>
            </a>
    <?php } ?>


    <div class="string"></div>
	

</article><!-- #post-<?php the_ID(); ?> -->
