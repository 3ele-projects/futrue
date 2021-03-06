<?php
/**
 * Block Name: Testimonial
 *
 * This is the template that displays the testimonials loop block.
 */



?>



  <?php

/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'hero-image-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'hero-image';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
$background_color = get_field('background-color');
$col_align = get_field('align');
$headline = get_field('headline');
$subheadline = get_field('subheadline');
$description = get_field('description');
$background_image = get_field('background-image');
$font_color = get_field('font-color');
$anker_id = get_field('anker_id');
?>
<section id="<?php echo esc_attr( $id); ?>" class="hero-image <?php echo esc_attr($className); ?>">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
    <span class="subheadline small"><?php echo $subheadline; ?></span>
        <h1><?php echo $headline; ?></h1>
        <?php echo $description; ?>
        <?php if ( get_field( 'cta_button' ) == 1 ) : ?>
<a href="<?php the_field( 'link' ); ?>" class="m-md-3 btn btn-primary btn-lg"><?php the_field( 'linktext' ); ?> </a>
	<?php endif; ?>
  </div>
      </div>
  </div>
  <?php $image = get_field('background-image');?>
  </section>   
    <style type="text/css">
        #<?php echo $id; ?> {
            background: <?php echo $background_color; ?>;
            width:100%;
     
            background: url('<?php echo $image['sizes']['large'];?>');
            background-repeat: no-repeat;
            background-position: center;
            background-size:cover;
            background-attachment: scroll;
            position:relative;
       
        }
    </style>

  


