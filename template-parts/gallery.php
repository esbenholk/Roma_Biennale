<?php
$args = array (
        'post_type' => 'poster',
        'post_status'     => 'published',
        'orderby' => 'rand'
);
$custom_query = new WP_Query( $args );

$posters = [];

if ( $custom_query->have_posts() ):

    while ( $custom_query->have_posts() ) :
        $custom_query->the_post();

        $attachments = get_children(array('post_parent' => $post->ID,
        'post_status' => 'published',
        'post_type' => 'attachment',
        'post_mime_type' => 'image',
        'orderby' => 'rand'));

    
        shuffle($attachments);
     
        foreach($attachments as $att_id => $attachment) {
                            
             array_push($posters, $attachment);
        }
  
    endwhile;
endif;

if ( $posters ): ?>

    <div class="flex-row horizontal-scroll">
        
    <?php foreach($posters as $att_id => $poster) {
                            
        $full_img_url = wp_get_attachment_url($poster->ID);
        $caption = wp_get_attachment_caption($poster->ID);
        if (@getimagesize($full_img_url)) { ?> 
        
            <div class="poster">
                <img src="<?php echo $full_img_url?>"/>
                <div class="overlay">
                    <p class="caption"><?php echo $caption ?></p>
                </div>
            ´</div>
                
        <?php } 
     
    }?>

</div> <?php 

endif;


wp_reset_query();

?>