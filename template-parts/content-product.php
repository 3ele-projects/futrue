<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Futrue
 */
$image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<div class="container">
    <div class="row">
	 <div>
	  <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
<span class="h2"><?php the_field('subheadline')?></span>
	  </div>
	  </div>
	  <?php  futrue_post_thumbnail(); ?>
	  <?php if ( get_field( 'cta_button' ) == 1 ) : ?>
<a href="<?php the_field( 'link' ); ?>" class="m-md-3 btn btn-primary btn-lg"><?php the_field( 'linktext' ); ?> </a>
	<?php endif; ?>
  </div>

	</header><!-- .entry-header -->



	<div class="entry-content">
		<?php	the_content();	?>
	</div><!-- .entry-content -->



</article><!-- #post-<?php the_ID(); ?> -->



<style type="text/css">
        #post-<?php the_ID(); ?>  .entry-header{
    
            width:100%;
     		min-height:33vh;
background:#e2e2e2;
            background-repeat: no-repeat;
            background-position: center;
            background-size:cover;
            background-attachment: scroll;
			position:relative;
       
        }
.entry-title {
	position:relative;
}
		.size-small {
			position:Absolute;
			bottom:-50%;
			left:30vw;
		}
    </style>
