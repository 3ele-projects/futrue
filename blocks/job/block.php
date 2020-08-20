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
$id = 'job-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-job';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}

$args = array( 
  'orderby' => 'date',
  'post_type' => 'job',
);

$the_query = new WP_Query( $args );
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
        #<?php echo $anker_id; ?> .block-header h2{
          color: <?php echo $font_color; ?>!important;
    
	}
</style>
<?php  if ( $the_query->have_posts() ) : ?>
<section id="<?php echo $anker_id; ?>"  class="<?php echo esc_attr( $classes ); ?>">
<div class="container">
<div class="block-header" >

<span class="subheadline"><?php echo $subheadline;?></span>
<h2 class="headline"><?php echo $headline;?></h2>
<div class="description"><?php echo $description;?></div>
<?php if ( $block_image ) : ?>
		<img class="block-image" src="<?php echo esc_url( $block_image['url'] ); ?>" alt="<?php echo esc_attr( $block_image['alt'] ); ?>" />
	<?php endif; ?>
  <?php the_field ('zitat')?>
</div>
</div>

<div class="container">
<div id="accordion">
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
  <div class="card">
    <div class="card-header" id="heading-<?php   the_ID();?>">
      <h5 class="mb-0">
        <div class="accordion-btn collapsed" data-toggle="collapse" data-target="#collapse-<?php the_ID();?>" aria-expanded="false" aria-controls="collapse-<?php  the_ID();?>">
        <?php the_title(); ?>
        </div>
      </h5>
    </div>
    <div id="collapse-<?php  the_ID();?>" class="collapse" aria-labelledby="heading-<?php   the_ID();?>" data-parent="#accordion">
      <div class="card-body">
      <?php the_field( 'job_description' , get_the_ID()); ?>
      </div>
    </div>
    <?php endwhile; ?>

  </div>
  <?php if ( get_field( 'cta_button' ) == 1 ) : ?>

<div class="row">
<div class="col-12 text-sm-left text-lg-center mt-5">
<a href="<?php the_field( 'link' ); ?>" class="btn btn-primary btn-lg"><?php the_field( 'linktext' ); ?> </a>
</div> 
</div> 

<?php endif; ?>
  </div>
</section>
<script>
jQuery(document).ready(function( $ ) {
  $("#accordion .accordion-btn:first").trigger("click");



});

</script>
<?php endif;?>