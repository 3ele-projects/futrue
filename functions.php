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
include get_template_directory() . '/acf/acf.php';
function kb_admin_style() {
	wp_enqueue_style('admin-styles', get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css');
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






/**
 * Set the theme colors
 */
add_action( 'after_setup_theme', 'prefix_register_colors' );
function prefix_register_colors() {
	add_theme_support(
		'editor-color-palette', array(
			array(
				'name'  => esc_html__( 'Black', 'prefix_textdomain' ),
				'slug' => 'black',
				'color' => '#333',
			),
			array(
				'name'  => esc_html__( 'Blue', 'prefix_textdomain' ),
				'slug' => 'blue',
				'color' => '#669BC9',
			),
			array(
				'name'  => esc_html__( 'Light', 'prefix_textdomain' ),
				'slug' => 'light',
				'color' => '#eef2f5',
			),
			array(
				'name'  => esc_html__( 'Yellow', 'prefix_textdomain' ),
				'slug' => 'yellow',
				'color' => '#c3a144',
			),
		)
	);
}

/**
 * Get the colors formatted for use with Iris, Automattic's color picker
 */
function output_the_colors() {
	
	// get the colors
    $color_palette = current( (array) get_theme_support( 'editor-color-palette' ) );

	// bail if there aren't any colors found
	if ( !$color_palette )
		return;

	// output begins
	ob_start();

	// output the names in a string
	echo '[';
		foreach ( $color_palette as $color ) {
			echo "'" . $color['color'] . "', ";
		}
	echo ']';
    
    return ob_get_clean();

}

/**
 * Add the colors into Iris
 */
add_action( 'acf/input/admin_footer', 'gutenberg_sections_register_acf_color_palette' );
function gutenberg_sections_register_acf_color_palette() {

    $color_palette = output_the_colors();
    if ( !$color_palette )
        return;
    ?>
    <script type="text/javascript">
        (function( $ ) {
            acf.add_filter( 'color_picker_args', function( args, $field ){

                // add the hexadecimal codes here for the colors you want to appear as swatches
                args.palettes = <?php echo $color_palette; ?>

                // return colors
                return args;

            });
        })(jQuery);
    </script>
    <?php

}
