<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Futrue
 */

?>

	<footer id="colophon" class="site-footer">
	<div class="sidebar aside">
		<div class="container">
			<div class="row">
<?php 	if (  is_active_sidebar( 'footer-1' ) ) {?>
<div class="col-lg-3">
		<?php dynamic_sidebar( 'footer-1' ); ?>
		</div>
<?php } ?>

<?php 	if (  is_active_sidebar( 'footer-2' ) ) {?>
	<div class="col-lg-3">
		<?php dynamic_sidebar( 'footer-2' ); ?>
		</div>
<?php } ?>

<?php 	if (  is_active_sidebar( 'footer-3' ) ) {?>
	<div class="col-lg-3">

		<?php dynamic_sidebar( 'footer-3' ); ?>
		</div>
<?php } ?>
<?php 	if (  is_active_sidebar( 'footer-4' ) ) {?>
	<div class="col-lg-3">
		<?php dynamic_sidebar( 'footer-4' ); ?>
		</div>
<?php } ?>
</div>
</div>
</div>
<div class="sub-footer">
<div class="container">
<div class="row">
<?php
			wp_nav_menu(
				array(
					'theme_location' => 'sub-footer-menu',
					'menu_id'        => 'sub-footer-menu',	
				)
			);
		?>
</div>
</div>
</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
