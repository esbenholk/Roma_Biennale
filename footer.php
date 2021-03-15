<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Roma_Biennale
 */

?>


<footer id="colophon" class="site-footer flex-row" id="mastfooter">
		
		<div class="newsletter-signup">
			<?php if ( is_active_sidebar( 'newsletter_signup' ) ) : ?>
				<?php dynamic_sidebar( 'newsletter_signup' ); ?>
			<?php endif; ?>
		</div>
		
		<div class="footer-site-branding">
			
			<h1 id="headline"><?php bloginfo( 'name' ); ?></h1>

			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-3',
						'menu_id'        => 'social-media-icons',
						'menu_class' => 'social-media-icons flex-row'
					)
				);
				?>
		</div><!-- .site-info -->
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</div><!-- #page -->



</body>
</html>
