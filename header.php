<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Futrue
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'futrue' ); ?></a>

	<header id="masthead" class="site-header">
	<div class="pre-header">
	<div class="container">
	
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'sub-header-menu',
					'menu_id'        => 'sub-header-menu',	
					'menu_class'        => 'menu ml-md-auto',	
				)
			);
		?>
		</div>
		</div>
		
		<div class="container">
	
			<div class="row">


		<nav id="site-navigation" class="main-navigation navbar row">
				<?php
			the_custom_logo();		
?>
		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span class="sr-only">Navigation ein-/ausblenden</span>
			<span class="icon-bars-button">
			<i class="fas fa-2x fa-bars"></i>
              </span>
   
   </button>
			<?php
			if ( is_singular( 'product' ) ) {
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',	
						'menu_class'        => 'primary-menu'
					)
				);
				
			}	
			else {
				wp_nav_menu(
					array(
						'theme_location' => 'home-menu',
							'menu_id'        => 'home-menu',
							'menu_class'        => 'primary-menu'
				
					)
				);
			}
			?>
			</div>
		
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
