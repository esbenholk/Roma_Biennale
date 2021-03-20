<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package romanistan
 */

?>


<footer id="mastfooter" class="site-footer flex-row" >
		
		<div class="newsletter-signup">
			<?php if ( is_active_sidebar( 'newsletter_signup' ) ) : ?>
				<?php dynamic_sidebar( 'newsletter_signup' ); ?>
			<?php endif; ?>
		</div>
		
			
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'social-media-icons',
						'menu_class' => 'social-media-icons flex-row'
					)
				);
			?>
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</div><!-- #page -->



</body>
</html>
