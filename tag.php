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

$tags = get_tags(array(
	'taxonomy' => 'post_tag',
	'orderby' => 'name',
	'hide_empty' => true
  ));

function myComparison($a, $b){
    if(is_numeric($a) && !is_numeric($b))
        return 1;
    else if(!is_numeric($a) && is_numeric($b))
        return -1;
    else
        return ($a < $b) ? -1 : 1;
} 

usort ( $tags, 'myComparison' );

$html_tags = '<div class="post_tags flex-column disappear-on-phone"> <p>Tags:</p>';
foreach ( $tags as $tag ) {
    $tag_link = get_tag_link( $tag->term_id );

    $html_tags .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
    $html_tags .= "{$tag->name}</a>";
}
$html_tags .= '</div>';






?>

	<main id="primary" class="site-main">


		<?php
		if ( have_posts() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_tag_title(); ?></h1>
				</header>
		
		

		<div class="standard-container horizontal-flag turn-thin">
                <div class="stripe"></div>
        </div>




			<div class="wp-block-columns flex-change-to-column blogs-container">
				<div class="wp-block-column flex-column flex-start" style="flex-basis:35%">

					<?php while ( have_posts() ) :
					the_post();

					
						the_title( '<a class="tag-name" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
					

					endwhile; ?>	
				

					<?php echo $html_tags; ?>
				</div>
				<div class="wp-block-column" style="flex-basis:60%">
					<?php while ( have_posts() ) :
					the_post();

					/*
					* Include the Post-Type-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Type name) and that will be used instead.
					*/
					get_template_part( 'template-parts/blog-teaser', get_post_type() );

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
get_sidebar();
get_footer();
