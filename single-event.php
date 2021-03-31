<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Roma_Biennale
 */

get_header('program');
?>

<?php  
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
        

    if (strpos($url, "de") !== false) {
        $browse_headline = "Browse Programm";
    } else {
        $browse_headline = "Browse Program";
    }
  
?>  

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/event-thumbnail', 'page' );

			
		endwhile; // End of the loop.
		?>
		<h1><?php echo $browse_headline?></h1>
		<?php echo do_shortcode('[important_days]');?>


	</main><!-- #main -->

<?php
get_footer();
