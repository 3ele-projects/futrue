<?php
/**
 * Block Name: Two Columns
 *
 * This is the template that displays the testimonials loop block.
 */



?>



  <?php

/**
 * Two Columns Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'two-column-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}
$background_color = get_field('background-color');
// Create class attribute allowing for custom "className" and "align" values.
$className = 'two-column';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
$background_color = get_field('background-color');
$col_align = get_field('align');?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>-wrapper">
<div class="container">
<?php if( get_field('align') == 'ml-md-auto' ){?>
  <div class="row">
<div class="col-md-6  <?php // echo $col_align;?>">
<?php $image = get_field( 'image' ); ?>
<?php if ( $image ) : ?>
	<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
<?php endif; ?>

</div>
<div class="col-md-6  <?php  echo get_field('align');?> ">
<span class="subheadline"><?php the_field( 'subheadline' ); ?></span>
<h2 class="headline"><?php the_field( 'headline' ); ?></h2>

<?php the_field( 'description' ); ?>
<?php if ( get_field( 'cta_button' ) == 1 ) : ?>

<div class="row">
<div class="col-12 text-sm-left mt-5">
<a href="<?php the_field( 'link' ); ?>" class=" btn btn-primary btn-lg"><?php the_field( 'linktext' ); ?> </a>
</div> 
</div> 

<?php endif; ?>
</div>

</div>
<?php } 
else {
?>
<div class="row">

<div class="col-md-6  <?php  echo get_field('align');?> ">
<span class="subheadline"><?php the_field( 'subheadline' ); ?></span>
<h2 class="headline"><?php the_field( 'headline' ); ?></h2>

<?php the_field( 'description' ); ?>
<?php if ( get_field( 'cta_button' ) == 1 ) : ?>

<div class="row">
<div class="col-12 text-sm-left mt-5">
<a href="<?php the_field( 'link' ); ?>" class=" btn btn-primary btn-lg"><?php the_field( 'linktext' ); ?> </a>
</div> 
</div> 

<?php endif; ?>
</div>
<div class="col-md-6  <?php // echo $col_align;?>">
<?php $image = get_field( 'image' ); ?>
<?php if ( $image ) : ?>
	<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
<?php endif; ?>

</div>
</div>
<?php 
}

?> 
  </div>    
  </section>   
    <style type="text/css">
        #<?php echo $id; ?> {
        
            background: <?php echo $background_color; ?>;
   
       
        }
    </style>


