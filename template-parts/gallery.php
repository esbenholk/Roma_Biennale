<?php
$args = array (
        'post_type' => 'poster',
        'post_status'     => 'publish',
        'orderby' => 'rand'
);
$custom_query = new WP_Query( $args );

if ( $custom_query->have_posts() ):

    ?><div class="poster-gallery flex-row"><?php
    while ( $custom_query->have_posts() ) :
        $custom_query->the_post();

        $attachments = get_children(array('post_parent' => $post->ID,
        'post_status' => 'inherit',
        'post_type' => 'attachment',
        'post_mime_type' => 'image',
        'orderby' => 'rand'));

        shuffle($attachments);
     
      
       ?> <a class="poster-artist flex-row" href=<?php the_permalink() ?>>
       
            <?php foreach($attachments as $att_id => $attachment) {
                            
                            $full_img_url = wp_get_attachment_url($attachment->ID);
                            if (@getimagesize($full_img_url)) {
                                echo '<img class="poster" src="';
                                echo $full_img_url;
                                echo '" alt="" />';
                            } 
                         
                        }
            ?>

        </a>   
        
    <?php  endwhile; ?>
    </div>


<?php endif;
wp_reset_query();

?>