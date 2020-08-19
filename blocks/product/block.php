<?php
/**
 * Block Name: Product
 *
 * This is the template that displays the testimonials loop block.
 */



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
$headline = get_field('headline');
$subheadline = get_field('subheadline');
$description = get_field('description');
$blockimage = get_field('block_image');
$font_color = get_field('font-color');
$anker_id = get_field('anker_id');
?>

<?php $relation = get_field( 'relation' ); ?>
	<?php if ( $relation ) : ?>

    <style type="text/css">
        #<?php echo $anker_id; ?> {
            background: <?php echo $background_color; ?>;   
        }
        #<?php echo $anker_id; ?> .block-header .description,
        #<?php echo $anker_id; ?> .block-header .subheadline,
        #<?php echo $anker_id; ?> .block-header h2{
          color: <?php echo $font_color; ?>!important;
        } 
    </style>
    
    <section id="<?php echo $anker_id; ?>" class="product-wrapper <?php echo (isset ($wd_color_class)) ? 'has-'.$wd_color_class.'-background-color': ''; ?>">
    <div class="container">
    <div  class="block-header">
<p class="subheadline"><?php echo $subheadline;?></p>
<h2><?php echo $headline;?></h2>
<p class="description"><?php echo $description;?></p>

</div>
<div class="row ">
  <?php foreach ( $relation as $post ) : ?>
			<?php setup_postdata ( $post ); ?>
      <div class="col-md-4">
      <div class="products">
        <?php echo get_the_post_thumbnail($post->ID,'post-thumbnail'); ?>
      <p>  <a href="<?php echo get_the_permalink($post->ID);?>" class="btn btn-secondary btn-block"/>Zum Produkt</a></p>
        <p><?php echo  get_the_excerpt($post->ID); ?></p>
        </div>
      </div>
		<?php endforeach; ?>
		<?php wp_reset_postdata(); ?>
    </div>
    </div>
    </section>
    <?php endif; ?>