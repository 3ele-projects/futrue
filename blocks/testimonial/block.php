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

$the_query = new WP_Query( $args );
$background_color = get_field('background-color');
$headline = get_field('headline');
$subheadline = get_field('subheadline');
$description = get_field('description');
$blockimage = get_field('block_image');
$font_color = get_field('font-color');
$anker_id = get_field('anker_id');
?>
<?php 
  if ( $the_query->have_posts() ) :?>

  <section id="<?php echo $anker_id; ?>" class="<?php echo esc_attr($className); ?>-wrapper">

  <div class="container">
  <div class="block-header">
<p class="subheadline"><?php echo $subheadline;?></p>
<h2><?php echo $headline;?></h2>
<p class="description"><?php echo $description;?></p>

</div>
<div class="swiper-container">
<div class="swiper-wrapper">
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <div class="swiper-slide">
      <div class=" card testimonial ">
      <div class="card-header">
     <img src="<?php the_field('image', get_the_ID()); ?>" class="t-image" /> 
    <div class="card-header-text">
    <div><?php the_title(); ?></div>
   <small> <?php the_field('position', get_the_ID()); ?></small>
  </div>
  </div>
        <div class="card-body t-text">
        <small><?php the_field('content', get_the_ID()); ?></small>
  </div>
      </div>
      </div>
    <?php endwhile; ?>
  </div>
  </div>
  </div>
  <script>
    var swiper = new Swiper('.swiper-container', {
      breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 0
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 1,
      spaceBetween: 0,
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 3,
      spaceBetween: 20,
    }
      },
   
loop:true,
      centeredSlides: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
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
<?php endif;?>