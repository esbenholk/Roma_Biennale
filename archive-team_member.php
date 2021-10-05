<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Roma_Biennale
 */

get_header();




if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
$url = "https://";   
else  
$url = "http://";   
// Append the host(domain name, ip) to the URL.   
$url.= $_SERVER['HTTP_HOST'];   

// Append the requested resource location to the URL   
$url.= $_SERVER['REQUEST_URI'];    


if (strpos($url, "de") !== false) {
$headline = "Team";
$artist_list_headline = "Members";
} else {
    $headline = "Team";
    $artist_list_headline = "Members";
}

?>

	<main id="primary" class="site-main">

    <?php
		if ( have_posts() ) :
		?>
		<div class="standard-container flex-row">
            <h1 class="fixed-headline"><?php echo $headline ?></h1>
        </div>

        <div class="standard-container horizontal-flag turn-thin">
                <div class="stripe"></div>
        </div>






		<div class="wp-block-columns flex-change-to-column blogs-container">
				<div class="wp-block-column top" style="flex-basis:35%">

					<div class="post_tags flex-column"> 
						<?php while ( have_posts() ) :
						the_post();

						?>  <a class="artist-name" href=<?php the_permalink() ?>>
								<?php the_title();  ?> </a><?php


						endwhile; ?>

						
			

					</div>

					
					
				
				</div>
				<div class="wp-block-column" style="flex-basis:60%">
					<?php while ( have_posts() ) :
					the_post();

					/*
					* Include the Post-Type-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Type name) and that will be used instead.
					*/
					get_template_part( 'template-parts/team_member-teaser', get_post_type() );

					endwhile; ?>
					
				
				</div>
				
			</div>



			
		<?php
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_footer();
