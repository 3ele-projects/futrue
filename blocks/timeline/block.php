<?php
/**
 * Block template file: blocks/timeline/block.php
 *
 * Timeline Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'timeline-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-timeline';
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



<section id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?>">

	<?php if ( have_rows( 'timeline' ) ) : ?>
     
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

        <div class="container">
        <div class="block-header" id="<?php echo $anker_id; ?>">
<p class="subheadline"><?php echo $subheadline;?></p>
<h2><?php echo $headline;?></h2>
<p class="description"><?php echo $description;?></p>

</div>
        <div class="row justify-content-center">
        <div class="col-sm-9 my-auto">
		<?php while ( have_rows( 'timeline' ) ) : the_row(); ?>
        <div class="row">
        <div class="col-sm-3">
			<?php the_sub_field( 'year' ); ?>
            </div>
            <div class="col-sm-9">
			<?php the_sub_field( 'event' ); ?>
            </div>
            </div>
		<?php endwhile; ?>
        </div>
            </div>
	<?php else : ?>
		<?php // no rows found ?>
        </div>

	<?php endif; ?>
    </section>

