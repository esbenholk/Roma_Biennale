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


<div id="page" class="site">
	<header id="masthead" class="site-header flex-row">
		<div id="loader"></div>

		<a id="header_headline"class="large-headline" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		 		<?php bloginfo( 'name' ); ?>
		</a> 

		<div class="menu-navigation flex-row" id="extra-menu">
			<button id="expander" class="menu" onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu">
			</button>
				
		</div>

		<nav id="site-navigation" class="main-navigation hidden">
			
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class' => 'list-container foldout-menu'
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->


