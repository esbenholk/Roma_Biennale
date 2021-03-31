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

    <article class="active flex-column" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        <div class="flex-row flex-between event-container ">

                <div class="event-details flex-column">
                    <?php 
                    if($short_date){ ?>
                        <p class="event-name"><?php the_title();  ?></p><?php
                    }
                    ?>
                    
                    <div class="flex-row"><?php

                        if($short_date){ ?>
                            <p class="event-detail date"><?php echo $short_date?></p><?php
                        }
                        if($event->date_string){?>
                            <p class="event-detail startdate"><u class="dot">•</u><?php echo date("h:i", $event->date_string); ?>-<?php echo date("h:i", strtotime($event->end_date[0])); ?>   <?php echo $event-> timezone[0]?></p><?php
                        } 
                     

                        if($event-> place[0]){?>
                        <p class="event-detail time"><u class="dot">•</u><?php echo $event-> place[0]?></p>
                        <?php } 
                        if($event-> livestream_url[0]){?>
                            <a class="event-detail livestream-url" href="<?php echo $event->livestream_url[0]?>"><u class="dot">•</u><u>Livestream</u></a>
                        <?php } ?>
                    </div>


                </div>

              
        </div>

        <div class="event-container entry-content event-description">
            <?php the_content(); ?>
        </div><!-- .entry-content -->

   
      



    </article><!-- #post-<?php the_ID(); ?> -->

