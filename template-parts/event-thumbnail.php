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

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        <div class="event-container turn-to-flex-top active">

                <div class="event-details flex-column">
                    <?php 
                    if($short_date){ ?>
                        <p class="event-name break-word"><?php the_title();  ?></p><?php
                    }
                    ?>
                    
                    <div class="flex-row flex-wrap flex-change-to-column"><?php

                        ?><div class="flex-row"><?php
                        if($short_date){ ?>
                            <p class="event-detail date"><i><?php echo $short_date?></i></p><?php
                        }
                        if($event->date_string){?>
                            <p class="event-detail startdate unbreak"><u class="dot">•</u><i><?php echo date("H:i", $event->date_string); ?>-<?php echo date("H:i", strtotime($event->end_date[0])); ?> <?php echo $event-> timezone[0]?></i><u class="dot disappear-on-phone">•</u>  </p><?php
                        } 
                        ?>
                            <div class="sharing-info">
                                <div class="share-details" style="display:none"><p class="url"><?php the_permalink(); ?><p class="description"><?php the_excerpt(); ?></p><p class="title"><?php the_title(); ?></p></div>
                        
                                <svg class="event-detail share-button" type="share" width="23" height="30" viewBox="0 0 23 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.5107 19.2871C12.0566 19.2871 12.5137 18.8301 12.5137 18.2969V5.25879L12.4375 3.35449L13.2881 4.25586L15.2178 6.3125C15.3955 6.51562 15.6621 6.61719 15.9033 6.61719C16.4238 6.61719 16.8301 6.23633 16.8301 5.71582C16.8301 5.44922 16.7158 5.24609 16.5254 5.05566L12.2344 0.916992C11.9805 0.663086 11.7646 0.574219 11.5107 0.574219C11.2441 0.574219 11.0283 0.663086 10.7744 0.916992L6.4834 5.05566C6.29297 5.24609 6.17871 5.44922 6.17871 5.71582C6.17871 6.23633 6.55957 6.61719 7.09277 6.61719C7.33398 6.61719 7.61328 6.51562 7.79102 6.3125L9.7207 4.25586L10.5713 3.35449L10.4951 5.25879V18.2969C10.4951 18.8301 10.9648 19.2871 11.5107 19.2871ZM4.22363 29.2275H18.7852C21.4385 29.2275 22.7715 27.9072 22.7715 25.292V12.6221C22.7715 10.0068 21.4385 8.68652 18.7852 8.68652H15.2432V10.7305H18.7471C20.0039 10.7305 20.7275 11.416 20.7275 12.7363V25.1777C20.7275 26.498 20.0039 27.1836 18.7471 27.1836H4.24902C2.97949 27.1836 2.28125 26.498 2.28125 25.1777V12.7363C2.28125 11.416 2.97949 10.7305 4.24902 10.7305H7.76562V8.68652H4.22363C1.57031 8.68652 0.237305 10.0068 0.237305 12.6221V25.292C0.237305 27.9072 1.57031 29.2275 4.22363 29.2275Z" fill="currentColor"/>
                                </svg>
                   
                            </div>
                        
                    
                        </div>
                        <?php
                        
                     
                        if($event-> place[0]){?>
                        <p class="event-detail place break-all"><i><?php echo $event-> place[0]?></i></p>
                        <?php } 
                        
                        
                        if($event-> livestream_url[0]){?>
                            <a class="event-detail livestream-url" href="<?php echo $event->livestream_url[0]?>"><u class="dot disappear-on-phone">•</u><i><u>Livestream</u></i></a>
                        <?php } ?>

                    
                




                    </div>


                </div>

                <div class="event-description change-width">
                            <?php the_content(); ?>
                </div>

     

        </div>

      



    </article><!-- #post-<?php the_ID(); ?> -->

