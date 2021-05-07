<?php
 $program_args = [
    'post_name__in'      => ['programme', 'programm'],
    'post_type'          => 'page',
    'ignore_sticky_posts' => 1,
    'post_status'=>'publish'
];  
    
$the_program_query = new WP_Query( $program_args );
$categories = [];

$i=0;

while( $the_program_query->have_posts() ) : $the_program_query->the_post(); 


$category1=new stdClass();
$category1->title=get_post_meta($post->ID, 'category1_title', false);
$category1->date = get_post_meta($post->ID, 'category1_date', false);
$category1->date_string = strtotime($category1->date[0]);
$category1->key = get_post_meta($post->ID, 'category1_category_key', false);


$category2=new stdClass();
$category2->title=get_post_meta($post->ID, 'category2_title', false);
$category2->date = get_post_meta($post->ID, 'category2_date', false);
$category2->date_string = strtotime($category2->date[0]);
$category2->key = get_post_meta($post->ID, 'category2_category_key', false);


$category3=new stdClass();
$category3->title=get_post_meta($post->ID, 'category3_title', false);
$category3->date = get_post_meta($post->ID, 'category3_date', false);
$category3->date_string = strtotime($category3->date[0]);
$category3->key = get_post_meta($post->ID, 'category3_category_key', false);

$category4=new stdClass();
$category4->title=get_post_meta($post->ID, 'category4_title', false);
$category4->date = get_post_meta($post->ID, 'category4_date', false);
$category4->date_string = strtotime($category4->date[0]);
$category4->key = get_post_meta($post->ID, 'category4_category_key', false);

$category5=new stdClass();
$category5->title=get_post_meta($post->ID, 'category5_title', false);
$category5->date = get_post_meta($post->ID, 'category5_date', false);
$category5->date_string = strtotime($category5->date[0]);
$category5->key = get_post_meta($post->ID, 'category5_category_key', false);



array_push($categories, $category1, $category2, $category3, $category4, $category5);

endwhile; 

usort($categories,function($first,$second){
    return $first->date_string > $second->date_string;
});
?>


<?php foreach($categories as $category) { 
        $args = array (
                'post_type' => 'campaign_day',
                'category_name' => $category->key[0],
                'posts_per_page' => 1      
        ); 

        $the_query = new WP_Query($args);


        ?> 
            
        <div id="<?php echo $category-> key[0]?>" class="flex-column" style="background-color: <?php echo esc_attr( $category->color[0])?>; color: <?php echo esc_attr( $category->color2[0])?>">
                      
            <?php if($the_query->have_posts()){ ?>
              

                    <?php while( $the_query->have_posts() ) : $the_query->the_post(); 


                        
                            if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
                                $url = "https://";   
                            else  
                                $url = "http://";   
                            // Append the host(domain name, ip) to the URL.   
                            $url.= $_SERVER['HTTP_HOST'];   
                            
                            // Append the requested resource location to the URL   
                            $url.= $_SERVER['REQUEST_URI'];    
                                

                            if (strpos($url, "/de") !== false) {
                                $continue_string = "Online-Ausstellung anzeigen";
                                $continue_url = "https://roma-biennale.com/kampagne/";
                            } else {
                                $continue_string = "View online exhibition";
                                $continue_url = "https://roma-biennale.com/campaign";
                            }

                            $attachments = get_children(array('post_parent' => $post->ID,
                            'post_type' => 'attachment',
                            'post_mime_type' => 'image',
                            'posts_per_page' => 1   ));

                            static $count = 0;
                            if ($count > 0.5) { break; }
                            else { 
                            $color = get_post_meta($post->ID, 'category1_color', false);
                            $color2 = get_post_meta($post->ID, 'category1_color2', false);
                      
                            ?>
                           

                                <div class="carousel-container"  style="background-color: <?php echo $color[0]?>; color: <?php echo $color2[0]?>">

                                    <div id="carousel<?php echo $i ?>" class="carousel carousel-main" data-flickity='{ "lazyLoad": 1, "pageDots": false, "prevNextButtons": false}' style="background-color: <?php echo $color[0]?>; color: <?php echo $color2[0]?>">
                                        <?php foreach($attachments as $att_id => $poster) {
                                                        
                                                        $full_img_url = wp_get_attachment_url($poster->ID);
                                                        $caption = wp_get_attachment_caption($poster->ID);
                                                        $title = get_the_title($poster->ID);
                                        
                                                        if (@getimagesize($full_img_url)) { ?> 
                                                        
                                                            <div class="carousel-cell" style="background-color: <?php echo $color[0]?>; color: <?php echo $color2[0]?>">
                                                                    <img data-flickity-lazyload="<?php echo $full_img_url?>"/>

                                                                    <div class="carousel-cell-details">
                                                                        <div>
                                                                            <?php if($title){?>
                                                                                <p class="single-carousel-detail"><?php echo $title?></p>
                                                                            <?php } ?>
                                                                            <?php if($caption){?>
                                                                                <p class="single-carousel-detail"><?php echo $caption?></p>
                                                                            <?php } ?>
                                                                        </div>

                                                                        <div>

                                                                            <p class="single-carousel-detail-b"><?php echo the_title()?></p>

                                                                            <p class="single-carousel-detail-b">#<?php echo $category->key[0]?></p>
                                                                        
                                                                        </div>

                                                                        <div>
                                                                        <p class="single-carousel-detail-b">
                                                                            <a href="<?php echo $continue_url?>" ><?php echo $continue_string?>
                                                                                <svg style="max-height: 100%;" class="single-carousel-detail-link-arrow" width="45" height="25" viewBox="0 0 30 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M0 12.0435C0 12.4407 0.172718 12.8061 0.48675 13.108L10.9126 23.6421C11.2267 23.944 11.5564 24.087 11.9332 24.087C12.7026 24.087 13.315 23.515 13.315 22.7205C13.315 22.3392 13.1737 21.9579 12.9224 21.7196L9.40527 18.097L4.11382 13.2192L7.91361 13.4576H27.7762C28.5926 13.4576 29.1579 12.8697 29.1579 12.0435C29.1579 11.2173 28.5926 10.6294 27.7762 10.6294H7.91361L4.12952 10.8677L9.40527 5.98996L12.9224 2.36739C13.1737 2.11317 13.315 1.74773 13.315 1.36641C13.315 0.571986 12.7026 0 11.9332 0C11.5564 0 11.2267 0.127108 10.8812 0.476655L0.48675 10.9789C0.172718 11.2808 0 11.6463 0 12.0435Z" fill="<?php echo $color2[0]?>"/>
                                                                                </svg>
                                                                            </a>
                                                                        </p>
                                                                        </div>

                                                                    </div>
                                            
                                                            </div>
                                                                
                                                        <?php } 
                                                    
                                            } ?>
                                    </div>






                                </div>

                            <?php
                            $i++;
                            $count ++;
                            }
                     
                    
                     endwhile; ?>

            <?php }?>
               
        </div> <!-- //.flex-colum -->
                 
            
<?php } ?> <!-- //end of foreach loop -->