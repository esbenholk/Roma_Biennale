<?php
/**
 *  * Template Name: Campaign Page
 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Roma_Biennale
 */

	get_header();

?>





    
<main id="primary" class="site-main">
    <?php the_title( '<h1 class="large-headline">', '</h1>' ); ?>
   
    <div class="standard-container blue"></div>
    <div class="standard-container green"></div>

    <?php if ( !empty( get_the_content() ) ){
        ?>
        <div class="entry-content event-container">
		    <?php the_content(); ?>
	    </div><!-- .entry-content -->
    <?php }

    $program_args = [
        'post_name__in'      => ['programme', 'programm'],
        'post_type'          => 'page',
        'ignore_sticky_posts' => 1,
        'post_status'=>'publish'
    ];  
        
    $the_program_query = new WP_Query( $program_args );

    while( $the_program_query->have_posts() ) : $the_program_query->the_post(); 
 

    $categories = [];

    $category1=new stdClass();
    $category1->title=get_post_meta($post->ID, 'category1_title', false);
    $category1->title2=get_post_meta($post->ID, 'category1_title2', false);
    $category1->date = get_post_meta($post->ID, 'category1_date', false);
    $category1->date_string = strtotime($category1->date[0]);
    $category1->description = get_post_meta($post->ID, 'category1_description', false);
    $category1->key = get_post_meta($post->ID, 'category1_category_key', false);
    $category1->color = get_post_meta($post->ID, 'category1_color', false);
    $category1->color2 = get_post_meta($post->ID, 'category1_color2', false);
    $category1->hierarchy = get_post_meta($post->ID, 'category1_hierarchy', false);

  
    $category2=new stdClass();
    $category2->title=get_post_meta($post->ID, 'category2_title', false);
    $category2->title2=get_post_meta($post->ID, 'category2_title2', false);
    $category2->date = get_post_meta($post->ID, 'category2_date', false);
    $category2->date_string = strtotime($category2->date[0]);
    $category2->description = get_post_meta($post->ID, 'category2_description', false);
    $category2->key = get_post_meta($post->ID, 'category2_category_key', false);
    $category2->color = get_post_meta($post->ID, 'category2_color', false);
    $category2->color2 = get_post_meta($post->ID, 'category2_color2', false);
    $category2->hierarchy = get_post_meta($post->ID, 'category2_hierarchy', false);

  
    $category3=new stdClass();
    $category3->title=get_post_meta($post->ID, 'category3_title', false);
    $category3->title2=get_post_meta($post->ID, 'category3_title2', false);
    $category3->date = get_post_meta($post->ID, 'category3_date', false);
    $category3->date_string = strtotime($category3->date[0]);
    $category3->description = get_post_meta($post->ID, 'category3_description', false);
    $category3->key = get_post_meta($post->ID, 'category3_category_key', false);
    $category3->color = get_post_meta($post->ID, 'category3_color', false);
    $category3->color2 = get_post_meta($post->ID, 'category3_color2', false);
    $category3->hierarchy = get_post_meta($post->ID, 'category3_hierarchy', false);

  
    $category4=new stdClass();
    $category4->title=get_post_meta($post->ID, 'category4_title', false);
    $category4->title2=get_post_meta($post->ID, 'category4_title2', false);
    $category4->date = get_post_meta($post->ID, 'category4_date', false);
    $category4->date_string = strtotime($category4->date[0]);
    $category4->description = get_post_meta($post->ID, 'category4_description', false);
    $category4->key = get_post_meta($post->ID, 'category4_category_key', false);
    $category4->color = get_post_meta($post->ID, 'category4_color', false);
    $category4->color2 = get_post_meta($post->ID, 'category4_color2', false);
    $category4->hierarchy = get_post_meta($post->ID, 'category4_hierarchy', false);

  
  
    $category5=new stdClass();
    $category5->title=get_post_meta($post->ID, 'category5_title', false);
    $category5->title2=get_post_meta($post->ID, 'category5_title2', false);
    $category5->date = get_post_meta($post->ID, 'category5_date', false);
    $category5->date_string = strtotime($category5->date[0]);
    $category5->description = get_post_meta($post->ID, 'category5_description', false);
    $category5->key = get_post_meta($post->ID, 'category5_category_key', false);
    $category5->color = get_post_meta($post->ID, 'category5_color', false);
    $category5->color2 = get_post_meta($post->ID, 'category5_color2', false);
    $category5->hierarchy = get_post_meta($post->ID, 'category5_hierarchy', false);


    array_push($categories, $category1, $category2, $category3, $category4, $category5);

    endwhile; 
    
    // usort($categories,function($first,$second){
    //     return $first->date_string > $second->date_string;
    // });
    usort($categories,function($first,$second){
        return $first->hierarchy > $second->hierarchy;
    });
    ?>

    
    <div class="program-anchor-menu flex-row">
  

        <?php foreach($categories as $category) { 
            $args = array (
                            'post_type' => 'campaign_day',
                            'category_name' => $category->key[0]      
                    ); 


            $the_query = new WP_Query($args);
            if($the_query->have_posts()){

                while( $the_query->have_posts() ) : $the_query->the_post();  

                    ?><a href="#<?php echo $category-> key[0]?>"><?php echo $category -> title[0]?></a><?php

                endwhile; 
            } 
        
        } ?> <!-- //end of foreach loop -->




    </div>


    <?php foreach($categories as $category) { 
            $args = array (
                    'post_type' => 'campaign_day',
                    'category_name' => $category->key[0]      
            ); 


            $the_query = new WP_Query($args);

            $date = str_replace('-','.',date("j-n-y",  $category -> date_string)); ?> 
                   


            <div id="<?php echo $category-> key[0]?>" class="flex-column" style="background-color: <?php echo esc_attr( $category->color[0])?>; color: <?php echo esc_attr( $category->color2[0])?>">
                          
                <?php if($the_query->have_posts()){ ?>

                        <div id="<?php echo $post->ID?>" class="flex-column standard-container description">
                            <?php if($category -> date[0]){ ?>
                                <h4 class="date"><?php echo $date?></h4>
                            <?php }?>

                            <h2 class="title"><?php echo $category -> title[0]?></h2>

                            <?php if($category -> key[0]){ ?>
                                <h4 class="key">#<?php echo $category -> key[0]?></h4>
                            <?php }?>

                        </div>


                        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        
                            <div class="campaign-gallery" style="background-color: <?php echo esc_attr( $category->color[0])?>; color: <?php echo esc_attr( $category->color2[0])?>"><?php
                                echo the_content(); ?>
                            </div>
                        
                        <?php endwhile; ?>
 
                <?php }?>
                   
            </div> <!-- //.flex-colum -->
                     
                
    <?php } ?> <!-- //end of foreach loop -->
               


</main><!-- #main -->


   

<?php
get_footer();

