<?php
  
  $args = [
    'post_name__in'      => ['program', 'programm'],
    'post_type'          => 'page',
    'ignore_sticky_posts' => 1,
    'post_status'=>'publish'
  ];  
      
  $the_query = new WP_Query( $args );
      
  while( $the_query->have_posts() ) : $the_query->the_post(); 
  $categories = [];

  $category1=new stdClass();
  $category1->title=get_post_meta($post->ID, 'category1_title', false);
  $category1->title2=get_post_meta($post->ID, 'category1_title2', false);
  $category1->date = get_post_meta($post->ID, 'category1_date', false);
  $category1->date_string = strtotime($category1->date[0]);
  $category1->description = get_post_meta($post->ID, 'category1_description', false);
  $category1->key = get_post_meta($post->ID, 'category1_category_key', false);
  $category1->color = get_post_meta($post->ID, 'category1_color', false);

  $category2=new stdClass();
  $category2->title=get_post_meta($post->ID, 'category2_title', false);
  $category2->title2=get_post_meta($post->ID, 'category2_title2', false);
  $category2->date = get_post_meta($post->ID, 'category2_date', false);
  $category2->date_string = strtotime($category2->date[0]);
  $category2->description = get_post_meta($post->ID, 'category2_description', false);
  $category2->key = get_post_meta($post->ID, 'category2_category_key', false);
  $category2->color = get_post_meta($post->ID, 'category2_color', false);


  $category3=new stdClass();
  $category3->title=get_post_meta($post->ID, 'category3_title', false);
  $category3->title2=get_post_meta($post->ID, 'category3_title2', false);
  $category3->date = get_post_meta($post->ID, 'category3_date', false);
  $category3->date_string = strtotime($category3->date[0]);
  $category3->description = get_post_meta($post->ID, 'category3_description', false);
  $category3->key = get_post_meta($post->ID, 'category3_category_key', false);
  $category3->color = get_post_meta($post->ID, 'category3_color', false);

  $category4=new stdClass();
  $category4->title=get_post_meta($post->ID, 'category4_title', false);
  $category4->title2=get_post_meta($post->ID, 'category4_title2', false);
  $category4->date = get_post_meta($post->ID, 'category4_date', false);
  $category4->date_string = strtotime($category4->date[0]);
  $category4->description = get_post_meta($post->ID, 'category4_description', false);
  $category4->key = get_post_meta($post->ID, 'category4_category_key', false);
  $category4->color = get_post_meta($post->ID, 'category4_color', false);


  $category5=new stdClass();
  $category5->title=get_post_meta($post->ID, 'category5_title', false);
  $category5->title2=get_post_meta($post->ID, 'category5_title2', false);
  $category5->date = get_post_meta($post->ID, 'category5_date', false);
  $category5->date_string = strtotime($category5->date[0]);
  $category5->description = get_post_meta($post->ID, 'category5_description', false);
  $category5->key = get_post_meta($post->ID, 'category5_category_key', false);
  $category5->color = get_post_meta($post->ID, 'category5_color', false);

  array_push($categories, $category1, $category2, $category3, $category4, $category5);

  usort($categories,function($first,$second){
      return $first->date_string > $second->date_string;
  });
  ?>



  <?php foreach($categories as $category) { 
        $date = str_replace('-','.',date("j-n-y",  $category -> date_string));
        ?> 

                    <div class="flex-column program-event-container">
                        <a href="../program#<?php echo $category-> key[0]?>">
                          <div class="flex-row program-event">
                              
                              <div class="flex-column">
                                  <h4><?php echo $category -> title[0]?></h4>
                                  <?php if($category -> title2[0]){
                                      ?><h4><?php echo $category -> title2[0]?></h4><?php
                                  }?>
                              </div>

                              <?php if($category -> date[0]){ ?>
                                <div class="date">
                                  <h4><?php echo $date?></h4>
                                </div>
                              <?php }?>
                          </div>
                        </a>
                     </div> <!-- //.flex-colum -->
  
                <?php } ?>

  <?php endwhile; ?>









