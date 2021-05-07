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

    $artist=new stdClass();
    $artist->title=get_post_meta($post->ID, 'artist_title', false);

?>  

<article class="blog-item" id="post-<?php $year ?>" <?php post_class(); ?>>

    <div class="blog-headline flex-row flex-start flex-wrap <?php echo $year ?>">
        
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
    

  
    <?php if ( get_the_post_thumbnail(get_the_ID()) != '' ) {

        echo '<a class="teaser-img" href="'; the_permalink(); echo '" class="thumbnail-wrapper">';
        the_post_thumbnail('post-thumbnail', ['class' => 'teaser-img', 'title' => 'Feature image']);
        echo '</a>';

        } else {

        ?> <img class="teaser-img" src="<?php echo $thumbnail_extra;?>"/><?php

    }?>




	<div class="entry-content">
		<?php the_excerpt(); ?>

        <a class="read-more" href="<?php the_permalink() ?>">
             <img class="go-arrow" src="/wp-content/themes/Roma_Biennale/icons/left-arrow.svg"/>
            <?php echo $continue_string?>
        </a>
	</div><!-- .entry-content -->

    <div class="string"></div>
	

</article><!-- #post-<?php the_ID(); ?> -->
