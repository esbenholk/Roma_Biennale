<?php
/**
 * The template for displaying artists
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Roma_Biennale
 */

	get_header();

    $args = array (
		'post_type' => 'Artist',
		'orderby' => 'title',
		'order'   => 'ASC',
		'meta_query' => array(
			array(
				'relation' => 'OR',
				array(
					'key' => 'artist_title',
					'compare' => '=',
					'value' => ''
				),
				array(
					'key' => 'artist_title',
					'compare' => 'NOT EXISTS',
				),
			)
		)
	); // gets Artists
	$the_query = new WP_Query($args);
	
    $args_with_title = array (
        'post_type' => 'Artist',
        'orderby' => 'title',
        'order'   => 'ASC',
        'meta_query' => array(
            array(
                'key' => 'artist_title',
                'compare' => '!=',
                'value' => ''
            )
        )
    ); // gets Artists With Titles
	$the_query_with_title = new WP_Query($args_with_title );
	
	if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
		$url = "https://";   
	else  
		$url = "http://";   
		// Append the host(domain name, ip) to the URL.   
		$url.= $_SERVER['HTTP_HOST'];   
	
		// Append the requested resource location to the URL   
		$url.= $_SERVER['REQUEST_URI'];    
		
	
	if (strpos($url, "de") !== false) {
		$headline = "Künstler/-innen";
		$artist_list_headline = "Künstler/-innen A-Z";
		$link = "https://roma-biennale.com/de/artists/";
		} else {
		$headline = "Artists";
		$artist_list_headline = "Artists A-Z";
		$link = "https://roma-biennale.com/artists/";
	}
?>

	<main id="primary" class="site-main">
		<a href="javascript:history.go(-1)"><img class="back-arrow  hidden appear-on-phone" src="/wp-content/themes/Roma_Biennale/icons/left-arrow.svg"/></a>

		<div class="wp-block-columns flex-change-to-column-reverse blogs-container">
				<div class="wp-block-column" style="flex-basis:35%">
					<div class="artist-names flex-column flex-start">
						<p class="artist-name artist-names-headline"><a href="<?php echo $link?>"><?php echo $artist_list_headline?></a></p>
						<?php while( $the_query_with_title->have_posts() ) : $the_query_with_title->the_post(); ?>
							<?php $artist_title=get_post_meta($post->ID, 'artist_title', false); ?>

							<a class="artist-name" href=<?php the_permalink() ?>>
								<?php the_title();  ?> <u><?php echo $artist_title[0]?></u>
							</a> 
						<?php endwhile; ?>
						<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<a class="artist-name" href=<?php the_permalink() ?>>
								<?php the_title();  ?>
							</a> 
						<?php endwhile; ?>
                	</div>

					
				</div>
				<div class="wp-block-column" style="flex-basis:60%">


				<?php
						while ( have_posts() ) :
							the_post(); ?>
					
							<div class="entry-content">
									<?php
									
									get_template_part( 'template-parts/artist-full', get_post_type() );
									

									?>
							</div><!-- .entry-content -->

						<?php endwhile; // End of the loop.
						?>
			
					
				
				</div>
				
			</div>


	</main><!-- #main -->


	

<?php
get_footer();