<?php
/**
 * Template part for displaying posts
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
        $short_date = str_replace('-','.',date("j-n",  $event -> date_string));
    }

    $event->timezone=get_post_meta($post->ID, 'event_date_timezone', false);
   
    $event->place = get_post_meta($post->ID, 'event_place', false);
    $event->livestream_url = get_post_meta($post->ID, 'event_livestream_url', false);

    

?>

    <article class="" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        <div class="flex-row container">

                <div class="event-details flex-column">
                    <?php 
                    if($short_date){ ?>
                        <p class="date_name"><?php echo $short_date?> - <?php the_title();  ?></p><?php
                    }
                    ?>
                    
                    <div class="time_place flex-row"><?php
                        if($event->date_string){?>
                            <p><?php echo date("h:i", $event->date_string); ?></p><?php
                        } 
                        if($event->end_date[0]){
                            ?> <p> - <?php echo date("h:i", strtotime($event->end_date[0])); ?> </p> <?php
                        } 
                        if($event-> timezone[0]){?>
                        <p>·<?php echo $event-> timezone[0]?></p>
                        <?php } 

                        if($event-> place[0]){?>
                        <p>·<?php echo $event-> place[0]?></p>
                        <?php } 
                        if($event-> livestream_url[0]){?>
                            <a class="livestream_url" href="<?php echo $event->livestream_url[0]?>"><p> · Livestream </p></a>
                        <?php } ?>
                    </div>


                </div>

                <div class="coming_svg">
                    <button onclick="history.go(-1);">X</button>
                </div>



        </div>



    </article><!-- #post-<?php the_ID(); ?> -->

