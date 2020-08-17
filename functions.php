<?php

/**
 * Futrue functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Futrue
 */



include get_template_directory() . '/post-types/job.php';
include get_template_directory() . '/post-types/product.php';
include get_template_directory() . '/post-types/testimonial.php';

function kb_admin_style() {
	wp_enqueue_style('admin-styles', get_template_directory_uri().'/assets/bootstrap/bootstrap.min.css');
 }
 
 add_action('admin_enqueue_scripts', 'kb_admin_style');

add_action('wp_enqueue_scripts', 'futrue_inlcude');

function futrue_inlcude()
{
	/* bootstrap JS */
	wp_enqueue_script('',  get_stylesheet_directory_uri()  . '/assets/bootstrap/js/bootstrap.bundle.min.js', array('jquery'));
	/* inlcude Font Awesome 5*/
	wp_enqueue_style( 'Font_Awesome', get_stylesheet_directory_uri()  . '/fonts/fontawesome/css/all.css' ); 
	/*swiper */
	wp_enqueue_script('swiper',  get_stylesheet_directory_uri()  . '/assets/swiper/js/swiper-bundle.min.js', array('jquery'));
	wp_enqueue_style('swiper',  get_stylesheet_directory_uri()  . '/assets/swiper/css/swiper-bundle.min.css');

	wp_enqueue_style('custom-style',  get_stylesheet_directory_uri()  . '/scss/custom.css');
/* particles.js */
	wp_enqueue_script('particles-js', get_template_directory_uri() . '/js/particles.js');
}





if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('futrue_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function futrue_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Futrue, use a find and replace
		 * to change 'futrue' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('futrue', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'futrue'),
				'home-menu' => esc_html__('Home Menu', 'futrue'),
				'sub-header-menu' => esc_html__('Sub Header  Menu', 'futrue'),
				'sub-footer-menu' => esc_html__('Sub Footer  Menu', 'futrue'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'futrue_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action('after_setup_theme', 'futrue_setup');




/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function futrue_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Footer 1', 'futrue'),
			'id'            => 'footer-1',
			'description'   => esc_html__('Add widgets here.', 'futrue'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<p class="h2 widget-title">',
			'after_title'   => '</p>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Footer 2', 'futrue'),
			'id'            => 'footer-2',
			'description'   => esc_html__('Add widgets here.', 'futrue'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<p class="h2 widget-title">',
			'after_title'   => '</p>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Footer 3', 'futrue'),
			'id'            => 'footer-3',
			'description'   => esc_html__('Add widgets here.', 'futrue'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<p class="h2 widget-title">',
			'after_title'   => '</p>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Footer 4', 'futrue'),
			'id'            => 'footer-4',
			'description'   => esc_html__('Add widgets here.', 'futrue'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<p class="h2 widget-title">',
			'after_title'   => '</p>',
		)
	);
}
add_action('widgets_init', 'futrue_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function futrue_scripts()
{
	wp_enqueue_style('futrue-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('futrue-style', 'rtl', 'replace');

	wp_enqueue_script('futrue-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'futrue_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}


/* ACF Support for Blocks */

// Register Custom Blocks
add_action('acf/init', 'my_register_blocks');
function my_register_blocks()
{

	// check function exists.
	if (function_exists('acf_register_block_type')) {


		// register a testimonial block.
		acf_register_block_type(array(
			'name'				=> 'testimonial',
			'title'				=> __('Testimonial'),
			'description'		=> __('A custom testimonial block.'),
			'render_template'   => 'blocks/testimonial/block.php',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array('testimonial'),
			'enqueue_style' => get_template_directory_uri() . '/blocks/testimonial/style.css',
			'render_callback'	=> 'my_acf_block_render_callback',
		));

		// register a product block.
		acf_register_block_type(array(
			'name'				=> 'product',
			'title'				=> __('Product'),
			'description'		=> __('A custom product block.'),
			'render_template'   => 'blocks/product/block.php',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array('product'),
			'enqueue_style' => get_template_directory_uri() . '/blocks/product/style.css',
			'render_callback'	=> 'my_acf_block_render_callback',
		));


		// register a job block.
		acf_register_block_type(array(
			'name'				=> 'job',
			'title'				=> __('Job'),
			'description'		=> __('A custom job block.'),
			'render_template'   => 'blocks/job/block.php',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array('job'),
			'enqueue_style' => get_template_directory_uri() . '/blocks/job/style.css',
			'render_callback'	=> 'my_acf_block_render_callback',
		));

		acf_register_block_type(array(
			'name'				=> 'timeline',
			'title'				=> __('Timeline'),
			'description'		=> __('A custom Timeline block.'),
			'render_template'   => 'blocks/timeline/block.php',
			'category'			=> 'layout',
			'icon'				=> 'admin-comments',
			'keywords'			=> array('timeline'),
			'enqueue_style' => get_template_directory_uri() . '/blocks/timeline/style.css',
			'render_callback'	=> 'my_acf_block_render_callback',
		));
		acf_register_block_type(array(
			'name'				=> 'hero-image',
			'title'				=> __('Hero Image'),
			'description'		=> __('A custom Hero Image block.'),
			'render_template'   => 'blocks/hero-image/block.php',
			'category'			=> 'layout',
			'icon'				=> 'admin-comments',
			'keywords'			=> array('hero-image'),
			'enqueue_style' => get_template_directory_uri() . '/blocks/hero-image/style.css',
			'render_callback'	=> 'my_acf_block_render_callback',
		));
		acf_register_block_type(array(
			'name'				=> 'two-columns',
			'title'				=> __('two Columns'),
			'description'		=> __('A custom two-columns block.'),
			'render_template'   => 'blocks/two-columns/block.php',
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'layout',
			'icon'				=> 'admin-comments',
			'keywords'			=> array('two-columns'),
			'enqueue_style' => get_template_directory_uri() . '/blocks/two-columns/style.css',
		));
	}
}


function my_acf_block_render_callback( $block ) {
	
	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/blocks/".$slug."/block.php") ) ) {
		include( get_theme_file_path("/blocks/".$slug."/block.php") );
	}
}

/* Filter Blocks */

add_filter( 'render_block', function( $block_content, $block ) {
	//var_dump ($block);
	//var_dump ($block_content);
    // Remove the block/timed-block from the rendered content.
   if ( 'core/heading' === $block['blockName'] ) {
	   $headline = $block_content;

       $block_content = '<div class="container">'.$headline.'</div>';
  }
  if ( 'core/paragraph' === $block['blockName'] ) {
	$content = $block_content;

	$block_content = '<div class="container">'.$content.'</div>';
}


   return $block_content;
}, 10, 2 );

if ( function_exists( 'acf_add_options_page' ) ) {

	acf_add_options_page( array(
		'page_title'	=> 'Options',
		'menu_title'	=> 'Options',
		'menu_slug' 	=> 'acf-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
	));

}

function na_remove_slug( $post_link, $post, $leavename ) {

    if ( 'events' != $post->post_type || 'publish' != $post->post_status ) {
        return $post_link;
    }

    $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );

    return $post_link;
}
add_filter( 'post_type_link', 'na_remove_slug', 10, 3 );

function na_parse_request( $query ) {

    if ( ! $query->is_main_query() || 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {
        return;
    }

    if ( ! empty( $query->query['name'] ) ) {
        $query->set( 'post_type', array( 'post', 'product', 'page' ) );
    }
}
add_action( 'pre_get_posts', 'na_parse_request' );


/* ACF Fieldsets */

if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_5f3274c8663ac',
		'title' => '2-columns',
		'fields' => array(
			array(
				'key' => 'field_5f3274df64c7c',
				'label' => 'Ausrichtung',
				'name' => 'align',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'order-0' => 'Content Links',
					'order-1' => 'Content Rechts',
				),
				'default_value' => false,
				'allow_null' => 0,
				'multiple' => 0,
				'ui' => 0,
				'return_format' => 'value',
				'ajax' => 0,
				'placeholder' => '',
			),
			array(
				'key' => 'field_5f33113ee423d',
				'label' => 'Headline',
				'name' => 'headline',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5f3316cf129bf',
				'label' => 'content',
				'name' => 'content',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
				'delay' => 0,
			),
			array(
				'key' => 'field_5f33b0f18468e',
				'label' => 'Image',
				'name' => 'image',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'array',
				'preview_size' => 'medium',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/two-columns',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));
	
	acf_add_local_field_group(array(
		'key' => 'group_5f33ac360aff9',
		'title' => 'Main Options',
		'fields' => array(
			array(
				'key' => 'field_5f33ac3c0b05e',
				'label' => '',
				'name' => '',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));
	
	acf_add_local_field_group(array(
		'key' => 'group_5f33aa251c1fc',
		'title' => 'Timeline',
		'fields' => array(
			array(
				'key' => 'field_5f33aa33d22a1',
				'label' => 'Timeline',
				'name' => 'timeline',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'collapsed' => '',
				'min' => 0,
				'max' => 0,
				'layout' => 'table',
				'button_label' => '',
				'sub_fields' => array(
					array(
						'key' => 'field_5f33aa40d22a2',
						'label' => 'Jahr',
						'name' => 'year',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '30',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => 4,
					),
					array(
						'key' => 'field_5f33aa67d22a3',
						'label' => 'Ereignis',
						'name' => 'event',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '80',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/timeline',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));
	
	acf_add_local_field_group(array(
		'key' => 'group_5f33b10bb965e',
		'title' => 'custom_blocks',
		'fields' => array(
			array(
				'key' => 'field_5f33b112d95e1',
				'label' => 'background',
				'name' => 'background-color',
				'type' => 'color_picker',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'all',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));
	
	acf_add_local_field_group(array(
		'key' => 'group_5f33b16d0d563',
		'title' => 'hero-image',
		'fields' => array(
			array(
				'key' => 'field_5f33b181216e6',
				'label' => 'Background',
				'name' => 'background-image',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'array',
				'preview_size' => 'full',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
			array(
				'key' => 'field_5f33b1a8cde25',
				'label' => 'Headline',
				'name' => 'hero-text-headline',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5f33b1bacde26',
				'label' => 'Subheadlline',
				'name' => 'hero-text-subheadline',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5f33b1c8cde27',
				'label' => 'CTA',
				'name' => 'cta',
				'type' => 'group',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'layout' => 'block',
				'sub_fields' => array(
					array(
						'key' => 'field_5f33b1dacde28',
						'label' => 'Link',
						'name' => 'link',
						'type' => 'url',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
					),
					array(
						'key' => 'field_5f33b1e4cde29',
						'label' => 'linktext',
						'name' => 'linktext',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/hero-image',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));
	
	acf_add_local_field_group(array(
		'key' => 'group_5f33bece68618',
		'title' => 'job',
		'fields' => array(
			array(
				'key' => 'field_5f33bed3b8d37',
				'label' => 'Jobtitle',
				'name' => 'jobtitle',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5f33bee0b8d38',
				'label' => 'job_description',
				'name' => 'job_description',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
				'delay' => 0,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'job',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));
	
	acf_add_local_field_group(array(
		'key' => 'group_5f33bdd7912d3',
		'title' => 'product-block',
		'fields' => array(
			array(
				'key' => 'field_5f33bdde2da5e',
				'label' => 'Headline',
				'name' => 'headline',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5f33bde91fd10',
				'label' => 'Subheadline',
				'name' => 'subheadline',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/product',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));
	
	acf_add_local_field_group(array(
		'key' => 'group_5f33bbfa35d9b',
		'title' => 'testimonial_block',
		'fields' => array(
			array(
				'key' => 'field_5f33bc04e6000',
				'label' => 'Headline',
				'name' => 'headline',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5f33bc0c5132e',
				'label' => 'SubHeadline',
				'name' => 'subheadline',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/testimonial',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));
	
	acf_add_local_field_group(array(
		'key' => 'group_5f32726b66f01',
		'title' => 'testimonials',
		'fields' => array(
			array(
				'key' => 'field_5f3272872307d',
				'label' => 'position',
				'name' => 'position',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5f3272935c23f',
				'label' => 'image',
				'name' => 'image',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
				'min_width' => 100,
				'min_height' => 100,
				'min_size' => '',
				'max_width' => 150,
				'max_height' => 150,
				'max_size' => '',
				'mime_types' => '',
			),
			array(
				'key' => 'field_5f3273449f8ba',
				'label' => 'content',
				'name' => 'content',
				'type' => 'textarea',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'new_lines' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'testimonial',
				),
			),
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/testimonial',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));
	
	endif;
