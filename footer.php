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


<footer class="site-footer flex-row flex-between standard-container" id="mastfooter">
		
		<div class="fullwidth flex-row flex-between flex-bottom flex-change-to-bottom flex-change-to-column footer-content">
			<div class="flex-row flex-change-to-column-reverse">
				<div id="newsletter" class="newsletter-signup">
					<?php if ( is_active_sidebar( 'newsletter_signup' ) ) : ?>
						<?php dynamic_sidebar( 'newsletter_signup' ); ?>
					<?php endif; ?>
				</div>

				<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-4',
								'menu_id'        => 'footer-menu',
								'menu_class' => 'flex-column column-wrap'
							)
						);
				?>
			
			</div>
			<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-3',
							'menu_id'        => 'social-media-icons',
							'menu_class' => 'social-media-icons flex-row footer-icons'
						)
					);
			?>

		</div>


</footer><!-- #colophon -->

<?php wp_footer(); ?>

</div><!-- #page -->



</body>
</html>
