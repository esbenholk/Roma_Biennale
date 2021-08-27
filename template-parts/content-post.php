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
        $other_news = "andere Neuigkeiten:";
    } else {
        $posted_on_string = "Posted on";
        $by_string = "by";
        $continue_string = "Read more";
        $other_news = "other news:";

    }

    $year = get_the_date('Y');

    $post_tags = get_the_tags();
?>  

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



    <div class="wp-block-columns flex-change-to-column-reverse blogs-container">
				<div class="wp-block-column" style="flex-basis:35%">

                    <a href="javascript:history.go(-1)"><img class="back-arrow" src="/wp-content/themes/Roma_Biennale/icons/left-arrow.svg"/></a>
                   
             

                    <div class="post_tags flex-column"> 
                            <p><?php echo $other_news ?></p>
                            <?php $list_posts = get_posts( array( 'numberposts' => -1 ) );
                            $list_titles = array();
                            foreach( $list_posts as $post ) { $list_titles[] = $post->post_title; } ?>
                            <?php foreach( $list_titles as $title ) {
                                echo '<li><a href="' . get_tag_link( $title) . '">' . $title . '</a></li>';
                            }?>



                            <p>Tags:</p>
                            <?php foreach( $post_tags as $post_tag ) {
                                echo '<li><a href="' . get_tag_link( $post_tag ) . '">' . $post_tag->name . '</a></li>';
                            }?>
				
				    </div>
					
				</div>
				<div class="wp-block-column" style="flex-basis:60%">


                    <div class="entry-content">
                        <?php
                        
                        get_template_part( 'template-parts/blog-full', get_post_type() );
                        

                        ?>
                    </div><!-- .entry-content -->
			
					
				
				</div>

                <a href="javascript:history.go(-1)"><img class="back-arrow hidden appear-on-phone" src="/wp-content/themes/Roma_Biennale/icons/left-arrow.svg"/></a>

				
    </div>



	

</article><!-- #post-<?php the_ID(); ?> -->
