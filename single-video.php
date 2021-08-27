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
		'post_type' => 'video',
	); // gets Artists
	$the_query = new WP_Query($args);




	
	if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
		$url = "https://";   
	else  
		$url = "http://";   
		// Append the host(domain name, ip) to the URL.   
		$url.= $_SERVER['HTTP_HOST'];   
	
		// Append the requested resource location to the URL   
		$url.= $_SERVER['REQUEST_URI'];    
		
	
	if (strpos($url, "de") !== false) {
	
		$link = "https://roma-biennale.com/geschichten/";
		$other_news = "Andere Neuigkeiten:";
		} else {

		$link = "https://roma-biennale.com/news/";
		$other_news = "Other news:";
	}
?>

	<main id="primary" class="site-main">
		<a href="javascript:history.go(-1)"><img class="back-arrow  hidden appear-on-phone top-arrow" src="/wp-content/themes/Roma_Biennale/icons/left-arrow.svg"/></a>

		<div class="wp-block-columns flex-change-to-column-reverse blogs-container">
				<div class="wp-block-column" style="flex-basis:35%">
					<a href="javascript:history.go(-1)"><img class="back-arrow" src="/wp-content/themes/Roma_Biennale/icons/left-arrow.svg"/></a>
                   
             

				   <div class="post_tags flex-column"> 
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
									
									get_template_part( 'template-parts/blog-full', get_post_type() );
									

									?>
							</div><!-- .entry-content -->

						<?php endwhile; // End of the loop.
						?>
			
					
				
				</div>
				
			</div>


	</main><!-- #main -->


	

<?php
get_footer();