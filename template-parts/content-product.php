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
	<div id="particles-js"></div>
	 <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
	  <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
<a href="<?php the_sub_field( 'link' ); ?>" class="btn btn-primary btn-large"><?php the_title(); ?> </a></p>
	  </div>
	  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
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

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'futrue' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->

<script>
    particlesJS("particles-js", {"particles":{"number":{"value":80,"density":{"enable":true,"value_area":800}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"repulse"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});

    </script>
