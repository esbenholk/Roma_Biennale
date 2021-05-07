<?php
$args = array (
        'post_type' => 'campaign_day',
        'post_status'     => 'publish'
);
$custom_query = new WP_Query( $args );


?><div class="flex-row horizontal-scroll"><?php 

if ( $custom_query->have_posts() ):

    while ( $custom_query->have_posts() ) :
        
        $custom_query->the_post();

        $color = get_post_meta($post->ID, 'category1_color', false);
        $color2 = get_post_meta($post->ID, 'category1_color2', false);

        $attachments = get_children(array('post_parent' => $post->ID,
        'post_type' => 'attachment',
        'post_mime_type' => 'image',
        'orderby' => 'rand'));

        if ( $attachments ): ?>

    
            <?php foreach($attachments as $att_id => $poster) {
                                    
                $full_img_url = wp_get_attachment_url($poster->ID);
                $caption = wp_get_attachment_caption($poster->ID);
                $title = get_the_title($poster->ID);

                if (@getimagesize($full_img_url)) { ?> 
                
                    <div class="poster">
                        <a href="/campaign">
                            <img src="<?php echo $full_img_url?>"/>
                            <div class="overlay" style="background-color: <?php echo $color[0]?>; color: <?php echo $color2[0]?>">
                                <p class="caption"><?php echo $title?></p>
                                <p class="caption"><?php echo $caption ?></p>
                                <p class="caption"><?php echo $poster->post_content ?></p>
                            </div>
                        </a>
                    ´</div>
                        
                <?php } 
             
            }
        endif;
     
   

    endwhile;
endif;
?>
        
        </div> <?php 
        




wp_reset_query();

?>