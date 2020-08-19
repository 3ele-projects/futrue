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
<style type="text/css">
	#<?php echo $anker_id; ?> {
    background: <?php echo $background_color; ?>;
  }
    #<?php echo $anker_id; ?> .block-header .description,
        #<?php echo $anker_id; ?> .block-header .subheadline,
        #<?php echo $id ; ?> {
          color:black!important;
    
	}
</style>
<?php if ( have_rows( 'faq_group' ) ) : ?>
<section id="<?php echo $id ; ?>"  class="<?php echo esc_attr( $classes ); ?>">


<div class="container">
<div id="accordion-<?php echo $id ; ?>">


		<?php while ( have_rows( 'faq_group' ) ) : the_row(); ?>

    <?php // var_dump($row_id);?>

    <?php  $field_ID = get_sub_field_object('question')['ID']; ?>
  <div class="card">
    <div class="card-header" id="heading-<?php  echo $field_ID;?>">
      <h5 class="mb-0">
        <div class="accordion-btn collapsed" data-toggle="collapse" data-target="#collapse-<?php  echo $field_ID;?>" aria-expanded="false" aria-controls="collapse-<?php  echo $field_ID;?>">
  			<?php the_sub_field( 'question' ); ?>
        </div>
      </h5>
    </div>
    <div id="collapse-<?php  echo $field_ID;?>" class="collapse" aria-labelledby="heading-<?php  echo $field_ID;?>" data-parent="#accordion">
      <div class="card-body">
      <?php the_sub_field( 'answer' ); ?>
      </div>
    </div>    
    <?php endwhile; ?>
	<?php else : ?>
		<?php // no rows found ?>



</section>
<script>
jQuery(document).ready(function( $ ) {
  $("#accordion-<?php echo $id ; ?> .accordion-btn:first").trigger("click");



});

</script>
<?php endif; ?>