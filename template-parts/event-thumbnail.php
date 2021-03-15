<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Roma_Biennale
 */
	$title = get_field('title', false, false);
    $place = get_field('place', false, false);
    $type = get_field('type', false, false);

	$start_date = get_field('event_start', false, false);
    $end_date = get_field('event_end', false, false);
    $timezone = get_field('timezone', false, false);

    $dayofweek = date('w', strtotime($start_date));
    $days = array('Sun', 'Mon', 'Tue', 'Wed','Thu','Fri', 'Sat');

?>

    <article class="event-thumbnail row" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        <div class="event-details row">

            <div class="event-thumbnail-date column">
                <p><?php echo $days[$dayofweek]?></p> 
                <p class="date large"><?php echo date("d/m", strtotime($start_date));?></p>
            </div>
            <div class="event-thumbnail-time column">
                <p><?php echo date("h:i", strtotime($start_date));?></p>
                <p><?php echo date("h:i", strtotime($end_date));?></p>
                <p><?php echo $timezone?></p>
                
            </div>
            <div class="event-thumbnail-place column">
                <p><?php echo $place?></p>
            </div>

        </div>

        <div class="event-redirection row">
                <div class="event-thumbnail-title column">
                    <p><?php echo $title?></p>
                    <p class="type large"><?php echo $type?></p>
                </div>

                <a class="standard-button" href=<?php the_permalink() ?>>
                    details
                </a>
        </div>

    </article><!-- #post-<?php the_ID(); ?> -->

