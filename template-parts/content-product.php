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
		<?php // the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->



	<div class="entry-content">
		<?php
		the_content();

	
		?>
	</div><!-- .entry-content -->



</article><!-- #post-<?php the_ID(); ?> -->


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<style type="text/css">
        #post-<?php the_ID(); ?>  .entry-header{
            background: <?php echo $background_color; ?>;
            width:100%;
     		min-height:33vh;
            background: url('<?php echo $image[0];?>');
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
	<header class="entry-header">
	
	<div class="container">
    <div class="row">
	 <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
	  <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
<a href="<?php the_sub_field( 'link' ); ?>" class="btn btn-primary btn-large"><?php the_title(); ?> </a></p>
	  </div>
	  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
	  <?php  futrue_post_thumbnail(); ?>
	 <?php echo get_the_post_thumbnail(get_the_ID(),'small') ?>
	 </div>
     
      </div>
    </div>
  </div>
		
	</header><!-- .entry-header -->



	<div class="entry-content">
		<?php
		the_content();

	
		?>
	</div><!-- .entry-content -->

	