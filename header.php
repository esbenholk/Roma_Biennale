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

		<a class="flex-row flex-start headertitle" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img class="logo" src="<?php echo $image[0];?>"/>
				<div class="flex-column">
					<h4 class="title"><?php bloginfo( 'description' ); ?></h4>
					<h4 class="title"><?php bloginfo( 'name' ); ?></h4>
				</div>
		</a> 

		<div class="flex-row flex-end">

			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'language-menu',
						'menu_class' => 'language-menu flex-row'
					)
				);
			?>

			<img src="/wp-content/themes/Roma_Biennale/icons/menu.svg"id="expander" class="menutoggle" onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu" />
			
		</div>
	</header><!-- #masthead / header-->


	<nav id="site-navigation" class="main-navigation hidden">

		<div class="standard-container flex-row flex-between"> <!-- header info in menu -->

			<a class="flex-row flex-start headertitle" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img class="logo" src="<?php echo $image[0];?>"/>
					<div class="flex-column">
						<h1 class="title"><?php bloginfo( 'description' ); ?></h1>
						<h1 class="title"><?php bloginfo( 'name' ); ?></h1>
					</div>
			</a> 

			<div class="flex-row flex-end">

				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-2',
							'menu_id'        => 'language-menu',
							'menu_class' => 'language-menu flex-row'
						)
					);
				?>

				<img src="/wp-content/themes/Roma_Biennale/icons/close_menu.svg" id="collapser" class="menutoggle" onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu" />
				
			</div>

		</div><!-- header info in menu -->
		
		<div class="menu-container">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class' => 'list-container foldout-menu'
				)
			);
			?>

			<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-3',
							'menu_id'        => 'social-media-icons',
							'menu_class' => 'social-media-icons flex-row'
						)
					);
			?>
		</div>
	</nav><!-- #site-navigation -->