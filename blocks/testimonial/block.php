<?php
/**
 * Block Name: Testimonial
 *
 * This is the template that displays the testimonials loop block.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'testimonial-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'testimonial';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
  $args = array( 
    'orderby' => 'title',
    'post_type' => 'testimonial',
   
  );

//$the_query = new WP_Query( $args );
$background_color = get_field('background-color');
$headline = get_field('headline');
$subheadline = get_field('subheadline');
$description = get_field('description');
$blockimage = get_field('block_image');
$font_color = get_field('font-color');
$anker_id = get_field('anker_id');
?>


  <section id="<?php echo $anker_id; ?>" class="<?php echo esc_attr($className); ?>-wrapper">

  <div class="container">
  <div class="block-header">
<p class="subheadline"><?php echo $subheadline;?></p>
<h2 class="headline"><?php echo $headline;?></h2>
<p class="description"><?php echo $description;?></p>

</div>
<?php $relation = get_field( 'relation' ); ?>
	<?php if ( $relation ) : ?>
<div class="swiper-container">
<div class="swiper-wrapper">
		<?php foreach ($relation as $post) : ?>
			<?php setup_postdata ($post); ?>
      <div class="swiper-slide">
      <div class=" card testimonial ">
      <div class="card-header">
     <img src="<?php the_field('image', $post->ID); ?>" class="circle" /> 
    <div class="card-header-text">
    <div><?php echo get_the_title($post->ID); ?></div>
   <small> <?php the_field('position', $post->ID); ?></small>
  </div>
  </div>
        <div class="card-body t-text">
        <small><?php the_field('content', $post->ID); ?></small>
  </div>
      </div>
      </div>
		<?php endforeach; ?>
    <?php wp_reset_postdata(); ?>
  </div>


<div class="swiper-scrollbar"></div>
  </div>

	<?php endif; ?>
  <?php if ( get_field( 'cta_button' ) == 1 ) : ?>
<a href="<?php the_field( 'link' ); ?>" class="m-md-3 btn btn-primary btn-lg"><?php the_field( 'linktext' ); ?> </a>
	<?php endif; ?>
  </div>
  <script>
    var swiper = new Swiper('.swiper-container', {
      breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1.005,
      spaceBetween: 10,
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 1.1,
      spaceBetween: 10,
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 3,
      spaceBetween: 20,
    }
      },
   
loop:true,
      centeredSlides: true,
 
      scrollbar: {
        el: '.swiper-scrollbar',
        hide: true,
      },
    });
  </script>
  </section>
  <style type="text/css">
        #<?php echo $anker_id; ?> {
            background-color: <?php echo $background_color; ?>; 
        }
        #<?php echo $anker_id; ?> .block-header .description,
        #<?php echo $anker_id; ?> .block-header .subheadline,
        #<?php echo $anker_id; ?> .block-header h2{
          color: <?php echo $font_color; ?>!important;
        } 
    </style>
