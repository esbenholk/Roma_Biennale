<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package romanistan
 */


?>
<!doctype html >
<html translate="no"<?php language_attributes(); ?>>

<head>
	<meta name="google" content="notranslate">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php 
		$overlay=new stdClass();
		$overlay->quote_author= esc_attr( get_post_meta( get_the_ID(), 'quote_author', true ) ); 
		$overlay->quote_english=esc_attr( get_post_meta( get_the_ID(), 'quote_english', true ) );
		$overlay->quote_roma = esc_attr( get_post_meta( get_the_ID(), 'quote_roma', true ) );;
?>





<div id="page" class="site">

	<?php if($overlay->quote_roma){ ?>
			<div id="overlay">

				<div class="infoblock-container overlay-container">
					<div class="infoblock english quote hidden overlaytext"><h1 class="infoblock-text"><?php echo $overlay->quote_english?><br><p><?php echo $overlay->quote_author?></p></h1></div>
					<div class="infoblock roma quote visible overlaytext"><h1 class="infoblock-text"><?php echo $overlay->quote_roma?><br><p><?php echo $overlay->quote_author?></p></h1></div>
				</div>

			</div>

	<?php } ?>

	<header id="masthead" class="site-header flex-row">
		
		<a id="header_headline"class="large-headline" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		 		<?php bloginfo( 'name' ); ?>
		</a> 

		<button id="expander" class="menu" onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu">
		</button>


		<nav id="site-navigation" class="main-navigation hidden">
				<div>
			

					<div id="masthead" class="site-header flex-row">
							<a id="header_headline"class="large-headline" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<?php bloginfo( 'name' ); ?>
							</a> 
					</div><!-- #masthead -->
				
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'menu_class' => 'list-container foldout-menu'
						)
					);
					?>
				</div>

				<div class="site-footer flex-row navigation-footer">
			
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
				
				</div>
		</nav><!-- #site-navigation -->

				


	
	</header><!-- #masthead -->










