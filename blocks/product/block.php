<?php
/**
 * Block Name: Product
 *
 * This is the template that displays the testimonials loop block.
 */


  $args = array( 
    'orderby' => 'title',
    'post_type' => 'product',
  );

// Create id attribute allowing for custom "anchor" value.
$id = 'product-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-product';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
$background_color = get_field('background-color');
$the_query = new WP_Query( $args );
$headline = get_field('headline');
$subheadline = get_field('subheadline');
$description = get_field('description');
$blockimage = get_field('block_image');
$font_color = get_field('font-color');
$anker_id = get_field('anker_id');
?>


<?php 
  if ( $the_query->have_posts() ) : ?>
    <style type="text/css">
        #<?php echo $id; ?> {
            background: <?php echo $background_color; ?>;
          
        }
        #<?php echo $id; ?> .block-header .description,
        #<?php echo $id; ?> .block-header .subheadline,
        #<?php echo $id; ?> .block-header h2{
          color: <?php echo $font_color; ?>!important;
        } 
    </style>
    <section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>-wrapper">
    <div class="container">
    <div id="<?php echo $anker_id; ?>" class="block-header">
<p class="subheadline"><?php echo $subheadline;?></p>
<h2><?php echo $headline;?></h2>
<p class="description"><?php echo $description;?></p>

</div>


  <div class="row ">
   <?php  while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <div class="col-md-4">
      <div class="products">
        <?php the_post_thumbnail('post-thumbnail'); ?>
      <p>  <a href="<?php the_permalink();?>" class="btn btn-secondary btn-block"/>Zum Produkt</a></p>
        <p><?php the_excerpt(); ?></p>

  
        </div>
      </div>
    
    <?php endwhile; ?>
    </div>
    </div>
    </section>
<?php endif;?>