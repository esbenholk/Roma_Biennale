<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<div id="page" class="site">

	<header id="masthead" class="site-header flex-row white">

		 	
		<?php the_title( '<h2 class="large-headline" id="header_headline">', '</h2>' ); ?>


		<div class="menu-navigation flex-row" id="extra-menu">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'language-menu',
						'menu_class' => 'language-menu flex-row'
					)
				);
				?>
				
				<button id="expander" class="menu" onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu">
					<svg width="80" height="80" viewBox="0 0 100 100">
						<path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
						<path class="line line2" d="M 20,50 H 80" />
						<path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
					</svg>
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


