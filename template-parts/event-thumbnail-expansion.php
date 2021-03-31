<?php
/**
 * Template part for Event Details
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Roma_Biennale
 */
    $event=new stdClass();
    $event->start_date=get_post_meta($post->ID, 'event_date_start', false);
    $event->end_date=get_post_meta($post->ID, 'event_date_end', false);

    if($event->start_date){
        $event->date_string = strtotime($event->start_date[0]);
        $short_date = str_replace('-','.', date("j-n-y",  $event -> date_string));
    }

    $event->timezone=get_post_meta($post->ID, 'event_date_timezone', false);
   
    $event->place = get_post_meta($post->ID, 'event_place', false);
    $event->livestream_url = get_post_meta($post->ID, 'event_livestream_url', false);
  
?>

    <article class="event-thumbnail" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="anchor" id="<?php the_title();  ?>"></div>

        
        <div class="flex-row flex-between event-container">

                <div class="event-details flex-column">
                    <?php 
                    if($short_date){ ?>
                        <p class="event-name"><?php the_title();  ?></p><?php
                    }
                    ?>
                    
                    <div class="flex-row flex-wrap"><?php

                        if($short_date){ ?>
                            <p class="event-detail date"><i><?php echo $short_date?></i></p><?php
                        }
                        if($event->date_string){?>
                            <p class="event-detail startdate"><u class="dot">•</u><i><?php echo date("h:i", $event->date_string); ?>-<?php echo date("h:i", strtotime($event->end_date[0])); ?> <?php echo $event-> timezone[0]?></i>  </p><?php
                        } 
                     

                        if($event-> place[0]){?>
                        <p class="event-detail time"><u class="dot">•</u><i><?php echo $event-> place[0]?></i></p>
                        <?php } 
                        
                        if($event-> livestream_url[0]){?>
                            <a class="event-detail livestream-url" href="<?php echo $event->livestream_url[0]?>"><u class="dot">•</u><i><u>Livestream</u></i></a>
                        <?php } ?>

                    
                
                        <div class="sharing-info">
                            <div class="share-details" style="display:none"><p class="url"><?php the_permalink(); ?><p class="description"><?php the_excerpt(); ?></p><p class="title"><?php the_title(); ?></p></div>
                            <a class="event-detail share-button" type="share"> 􀈂 </a>
                        </div>



                    </div>


                </div>

                <?php if ( !empty( get_the_content() ) ){
                    ?><img class="event-expander primary-expander" src="/wp-content/themes/Roma_Biennale/icons/Expand.svg" />
                    <?php
                }?>

        </div>

        <div class="hidden event-container fullwidth flex-row flex-between">

        
                    <div class="event-description">
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div><!-- .entry-content -->
                    </div>

                    <div class="fullwidth flex-row flex-end">
                        <a href="#<?php the_title();  ?>">
                            <img class="event-expander secondary-expander" src="/wp-content/themes/Roma_Biennale/icons/Collapse.svg" />
                        </a>
                    </div>
        </div>

      



    </article><!-- #post-<?php the_ID(); ?> -->

