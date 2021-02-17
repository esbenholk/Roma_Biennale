<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Roma_Biennale
 */
	$title = get_field('title', false, false);
	$date = get_field('date', false, false);
	$date_formatted = date_create($date);
	$venue = get_field('venue', false, false);
	$address = get_field('address', false, false);
	$city = get_field('city', false, false);
	$artists = get_field('artists__organisers', false, false);
	$urls = get_field('urls', false, false);

    ?>

    <article class="event-thumbnail" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <a href=<?php  the_permalink() ?>>
        <?php roma_biennale_post_thumbnail(); ?>
            <p>Event title: <?php echo $title ?></p>
        </a>
        <p>Event date: <?php echo $date?>  <?php echo date_format($date_formatted,"d/m H:i")?></p> 
        <?php if($venue) { ?>
			<p>Event location: <?php echo $venue ?></p>
        <?php } ?>

        <?php if($city) { ?>
			<p>city: <?php echo $city ?></p>
        <?php } ?>

        <?php if($address) { ?>
            <p>address: <?php echo $address ?></p>
        <?php } ?>
       
        <?php if($artists) { ?>
            <p>artists: <?php echo $artists ?></p>
        <?php } ?>

        <?php if($urls) { ?>
            <p>websites: <?php echo $urls?></p>        
        <?php } ?>
        
    

    </article><!-- #post-<?php the_ID(); ?> -->

