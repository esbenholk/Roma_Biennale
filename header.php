<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 * @package Roma_Biennale
 */
?>



<!doctype html >
<html translate="no"<?php language_attributes(); ?>>

<head>
	<meta name="google" content="notranslate">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="[?php bloginfo('html_type'); ?]; charset=[?php bloginfo('charset'); ?]" />
	<title><?php wp_title('', true, 'right'); ?> <?php bloginfo('name'); ?></title>

	<?php wp_head(); ?>

</head>

<?php wp_body_open(); 
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );

?>

<body <?php body_class(); ?>> <!-- begin the body tag -->

<div id="page" class="site"> <!-- begin the page tag -->

	<header id="masthead" class="standard-container flex-row flex-between nav-down"> <!-- header -->



		<div class="flex-row flex-between flex-2">

			<a class="flex-row flex-start headertitle" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img class="logo" src="/wp-content/themes/Roma_Biennale/icons/LOGO.svg"/>
					
					<div class="flex-column">
						<h4 class="headederHeadline"><?php bloginfo( 'description' ); ?></h4>
						<h4 class="headederHeadline"><?php bloginfo( 'name' ); ?></h4>
					</div>
			</a> 



			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'language-menu',
						'menu_class' => 'language-menu flex-row disappear-on-phone'
					)
				);
			?>

			
		</div>
		<img src="/wp-content/themes/Roma_Biennale/icons/menu.svg" id="expander" class="menutoggle" onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu" />

	</header><!-- #masthead / header-->


	<div id="loading"></div>

	<nav id="site-navigation" class="main-navigation unactive flex-column flex-start">

		<div class="standard-container flex-row flex-between fullwidth"> <!-- header info in menu -->


				<div class="flex-row flex-between flex-2">

					<a class="flex-row flex-start headertitle disappear-on-phone" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img class="logo" src="<?php echo $image[0];?>"/>
							<div class="flex-column">
								<h4 class="headederHeadline"><?php bloginfo( 'description' ); ?></h4>
								<h4 class="headederHeadline"><?php bloginfo( 'name' ); ?></h4>
							</div>
					</a> 



					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-2',
								'menu_id'        => 'language-menu',
								'menu_class' => 'language-menu flex-row'
							)
						);
					?>


				</div>

				<img src="/wp-content/themes/Roma_Biennale/icons/close_menu.svg" id="collapser" class="menutoggle" onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu" />
				
	

		</div><!-- header info in menu -->
		
		
		<div class="menu-container flex-row flex-bottom fullwidth flex-change-to-column"> <!-- header info in menu -->
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class' => ''
				)
			);
		?>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-5',
					'menu_id'        => 'primary-menu-side-wagon',
					'menu_class' => ''
				)
			);
		?>

		</div>

		

	</nav><!-- #site-navigation -->