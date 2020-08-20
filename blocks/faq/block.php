<?php
/**
 * Block template file: blocks/job/block.php
 *
 * Job Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'faq-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-faq';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}


$headline = get_field('headline');
$subheadline = get_field('subheadline');
$description = get_field('description');
$block_image = get_field('block_image');

$background_color = get_field('background-color');
$font_color = get_field('font-color');
$anker_id = get_field('anker_id');
?>

<?php if ( have_rows( 'faq_group' ) ) : ?>
<section id="<?php echo $id ; ?>"  class="<?php echo esc_attr( $classes ); ?>">
<div id="<?php  echo $anker_id ; ?>" class="container">

<div id="accordion_<?php  echo $id ; ?>">
<div class="block-header">
<p class="subheadline"><?php echo $subheadline;?></p>
<h2 class="headline"><?php echo $headline;?></h2>
<p class="description"><?php echo $description;?></p>
</div>
<?php $counter = 0; ?>
		<?php while ( have_rows( 'faq_group' ) ) : the_row();   $counter++ ?>




  <div class="card">
    <div class="card-header" id="heading-<?php  echo $counter;?>">
        <div class="accordion-btn collapsed" data-toggle="collapse" data-target="#collapse-<?php  echo $counter;?>" aria-expanded="false" aria-controls="collapse-<?php  echo $counter;?>">
        <span class="h5 mb-0">
        <?php the_sub_field( 'question' ); ?>
        </span>
        </div>

    </div>
    <div id="collapse-<?php  echo $counter;?>" class="collapse" aria-labelledby="heading-<?php  echo $counter;?>" data-parent="#accordion_<?php  echo $id ; ?>">
      <div class="card-body">
      <?php the_sub_field( 'answer' ); ?>
      </div>
    </div>    
    </div>    
    <?php endwhile; ?>


 

    </div>
    <?php if ( get_field( 'cta_button' ) == 1 ) : ?>

      <div class="row">
 <div class="col-12  text-sm-left text-lg-center mt-5">
<a href="<?php the_field( 'link' ); ?>" class="m-md-3  btn btn-primary btn-lg"><?php the_field( 'linktext' ); ?> </a>
</div> 
</div> 

	<?php endif; ?>
    </div>
</section>
<style type="text/css">
	#<?php echo $id; ?> {
    background: <?php echo $background_color; ?>;
  }
    #<?php echo $id; ?> .block-header .description,
        #<?php echo $id; ?> .block-header .subheadline,
        #<?php echo $id ; ?> {
          color:$font_color!important;
    
	}
</style>
<script>
  jQuery(document).ready(function( $ ) {
    $("#accordion_<?php  echo $id ; ?>  .accordion-btn:first").trigger("click");
  });

  </script>
<?php else : ?>
		<?php // no rows found ?>

    <?php endif; ?>